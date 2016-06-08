<?php
namespace Admin\Controller;

use Think\Controller;

class CommonController extends Controller
{
    private $model = null;
    public function __construct()
    {
        parent::__construct();
        if (!IS_AJAX) {
            $menuModel = D('Menu');
            // 后台左边菜单变量
            $leftMenuHtml = $menuModel->getLeftMenuHtml();
            // 后台导航栏
            $navHtml = $menuModel->getNavHtml();
            // 当前菜单
            $curUrl = CONTROLLER_NAME . '/' . ACTION_NAME;
            $curMenu = $menuModel
                ->field('id, name as menu_name, icon_class as menu_icon, route as menu_url')
                ->where(array('route' => $curUrl, 'is_leaf' => 1))
                ->find();

            $role = session('cooking_admin_role');
            if ($role == 'sub') {
                $subPermission = session('cooking_admin_permission');
                if ($curMenu !== null && !in_array($curMenu['id'], $subPermission)) {
                    header('Content-Type: text/html; charset=utf-8');
                    exit('无权限');
                }
            }
            unset($curMenu['id']);
            $this->assign(array('leftMenuHtml' => $leftMenuHtml, 'navHtml' => $navHtml));
            $this->assign($curMenu);
        }
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
}