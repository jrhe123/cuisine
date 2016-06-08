<?php
namespace Home\Controller;

use Think\Controller;

class CommonController extends Controller
{
    private $model = null;
    public function __construct()
    {
        parent::__construct();
    }

    protected function setModel ($tableName) {
        $this->model = D($tableName);
    }

    // 输出Json
    protected function outputJson ($code, $msg, $data=array()) {
        $this->ajaxReturn(array('code' => $code, 'msg' => $msg, 'data' => $data));
    }

    // 发生未知错误输出
    protected function _500 () {
        $this->ajaxReturn(array('code' => 500, 'msg' => '操作失败，发生了未知错误'));
    }

    // 未登录或登陆超时
    protected function  _401 () {
        $this->ajaxReturn(array('code' => 401, 'msg' => '未登录或登录超时，请重新登陆'));
    }

    // 404
    protected function _404($msg) {
        if (IS_AJAX) {
            $this->ajaxReturn(array('code' => 404, 'msg' => $msg));
        } else {
            header('Content-Type: text/html; charset=utf-8');
            exit($msg);
        }
    }

    // 参数错误
    protected function _errorParameter() {
        $this->outputJson(400, '参数错误');
    }

    // datatable参数
    protected $orderArray = array();
    protected $likeArray = array();
    protected $limitArray = array();
    protected $offset = 0;
    protected $pSize = 20;
    protected $draw = '';

    private function _initTablePost()
    {
        $start = I('post.start');
        $length = I('post.length');
        $draw = I('post.draw');
        $columns = I('post.columns');
        $orders = I('post.order');
        $searchArr = I('post.search');
        // 排序
        foreach ($orders as $ord) {
            $this->orderArray[$columns[$ord['column']]['name']] = $ord['dir'];
        }
        // 搜索
        $search = $searchArr['value'];
        if ($search) {
            foreach ($columns as $col) {
                if ($col['searchable'] == 'true') {
                    if ($col['name']) {
                        $this->likeArray[$col['name']] = $search;
                    }
                }
            }
        }
        $this->offset = intval($start);
        if ($length == -1) {
            $length = 1000;
        }
        $this->pSize = intval($length);
        $this->draw = $draw;
    }

    protected function queryWhere() {
        $this->_initTablePost();
        // 模糊查询
        $likeArray = array();
        if (!empty($this->likeArray)) {
            foreach ($this->likeArray as $key => $value) {
                $likeArray[$key] = array('like', '%' . $value . '%');
            }
            $likeArray['_logic'] = 'or';
            $map['_complex'] = $likeArray;
        }
        $map['id'] = array('gt', 0);
        return $map;
    }

    protected function queryOrder() {
        $this->_initTablePost();
        // 排序
        $orders = array();
        if (!empty($this->orderArray)) {
            foreach ($this->orderArray as $key => $value) {
                $orders[$key] = $value;
            }
        } else {
            $orders['id'] = 'asc';
        }
        return $orders;
    }

    // tableData 空数据
    protected function tableDataEmpty() {
        $data["draw"] = $this->draw;
        $data["recordsTotal"] = 0;
        $data["recordsFiltered"] = 0;
        $data['data'] = array();
        return $this->ajaxReturn($data);
    }

    //1:add 2:save 3:execute
    protected function saveAuth($type, $tableObj, $data = array(), $sql)
    {
        $model = $tableObj;
        if ($type == 1) {
            $r = $model->data($data)->add();
        } else if ($type == 2) {
            $r = $model->data($data)->save();
        } else if ($type == 3 && !empty($sql)) {
            $r = $model->execute($sql);
        }
        if ($r !== false) {
            $this->ajaxReturn(array('code' => 200, 'msg' => '保存成功'));
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '保存失败，请重试'));
        }
    }

    protected function ad(){
        $r=D('WebSetting')->where(array('field'=>'ad'))->find();
        $slides=explode(',',$r['value']);
        $hrefArr = array();
        foreach($slides as $k=>$v){
            $slide=explode('###',$v);
            $hrefArr[$k]['image'] =  get_access_url(get_picture_path(get_picture(get_thumb($slide[1],300))));
            $hrefArr[$k]['link'] = $slide[0];
        }
        $this->assign('hrefArr', $hrefArr);
    }

    protected function ranking(){
        $r = D('User')->field('id,point,nickname,picture,gender')->where(array('is_show'=>1))->order('point desc')->limit(3)->select();
        foreach($r as $k =>$v){
            $r[$k]['picture'] = get_access_url(get_picture_path(get_header_picture($v['picture'],$v['gender'])));
        }
        $this->assign('ranking',$r);
    }

    protected function latest_problem(){
        $r = D('Posts')->field('id,title,updated_timestamp,content')->where(array('is_show'=>1,'is_audit'=>array('in','1,2'),'is_draft'=>0))->limit(2)->select();
        foreach($r as $k =>$v){
            $r[$k]['content'] = t_substr($v['content'], 0, 50);
            $r[$k]['updated_timestamp'] = date('Y-m-d H:i:s',$v['updated_timestamp']);
        }
        $this->assign('latest_problem',$r);
    }

    public function sendTemplateSMS($to, $datas, $tempId)
    {
        vendor('CCPRestSms.CCPRestSmsSDK');
        // 初始化REST SDK
        $accountSid = C('ACCOUNTSID');
        $accountToken = C('ACCOUNTTOKEN');
        $appId = C('APPID');
        $serverIP = C('SERVERIP');
        $serverPort = C('SERVERPORT');
        $softVersion = C('SOFTVERSION');
        $rest = new \REST($serverIP, $serverPort, $softVersion);
        $rest->setAccount($accountSid, $accountToken);
        $rest->setAppId($appId);

        // 发送模板短信
        //echo "Sending TemplateSMS to $to <br/>";
        $result = $rest->sendTemplateSMS($to, $datas, $tempId);
        if ($result == NULL) {
            return array('result' => false, 'code' => 500, 'msg' => '出错');
        }
        if ($result->statusCode != 0) {
//            echo "error code :" . $result->statusCode . "<br>";
//            echo "error msg :" . $result->statusMsg . "<br>";
            return array('result' => false, 'code' => $result->statusCode, 'msg' => $result->statusMsg);
        } else {
//            echo "Sendind TemplateSMS success!<br/>";
            // 获取返回信息
            $smsmessage = $result->TemplateSMS;
//            echo "dateCreated:" . $smsmessage->dateCreated . "<br/>";
//            echo "smsMessageSid:" . $smsmessage->smsMessageSid . "<br/>";
            return array('result' => true, 'code' => $smsmessage->dateCreated, 'msg' => $smsmessage->smsMessageSid);
        }
    }

}