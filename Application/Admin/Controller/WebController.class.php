<?php
/**
 * Created by PhpStorm.
 * User: Dickie
 * Date: 2015/9/14
 * Time: 10:50
 */

namespace Admin\Controller;
class WebController extends AuthController
{
    public function banner_index()
    {
        $this->display();
    }

    public function ad(){
        $r=D('WebSetting')->where(array('field'=>'ad'))->find();
        $slides=explode(',',$r['value']);
        $hrefArr = array();
        foreach($slides as $k=>$v){
            $slide=explode('###',$v);
            $hrefArr[$k]['image'] = $slide[1];
            $hrefArr[$k]['link'] = $slide[0];
        }
        if(empty($hrefArr)){
            $hrefArr[0]['image'] = get_access_url(get_picture_path(get_picture(C('DEFAULT_IMAGE'))));
        }
        $this->assign('hrefArr', $hrefArr);
        $course_ad = D('WebSetting')->where(array('field'=>'picture_path'))->find();
        if(empty($course_ad['value'])){
            $course_ad = array('url' => get_access_url(get_picture_path(get_picture(C('DEFAULT_IMAGE')))), 'path' => '');
        }
        $course_ad = array('url' => get_access_url(get_picture_path(get_picture(get_thumb($course_ad['value'],470)))), 'path' => $course_ad['value']);
        $this->assign('course_ad', $course_ad);
        $this->display('ad_form');
    }

    public function bannerTableData()
    {
        $tableObj = D('Banner');
        $order = $this->queryOrder();
        $where = $this->queryWhere();
        $total = $tableObj->where($where)->count();
        $items = $tableObj->where($where)->limit($this->offset, $this->pSize)->order($order)->select();
        $data["draw"] = $this->draw;
        $data["recordsTotal"] = $total;
        $data["recordsFiltered"] = $total;
        $data['data'] = array();
        foreach ($items as $k => $item) {
            $data['data'][$k][0] = $k + 1 . '<input type="hidden" name="id" value="' . $item['id'] . '">';
            $data['data'][$k][1] = '<img style="width:100px;" src="' . get_access_url(get_picture_path(get_picture($item['url']))) . '">';
            $data['data'][$k][2] = wrap($item['title'], 20);
            $data['data'][$k][3] = date('Y-m-d H:i:s', $item['created_timestamp']);
            $data['data'][$k][4] = $item['rank'];
            $data['data'][$k][5] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>
            <a class="btn blue btn-sm margin-right-10" href="' . U("banner_edit", array('id' => $item['id'])) . '">
                <i class="fa fa-edit"> 编辑 </i></a>';
        }
        return $this->ajaxReturn($data);

    }

    public function banner_add()
    {
        $picture = array('url' => get_access_url(get_picture_path(get_picture(C('DEFAULT_IMAGE')))), 'path' => '');
        $this->assign('picture', $picture);
        $this->display('banner_form');
    }

    public function saveBanner()
    {
        $id = I('post.id', 0);
        $data = I('post.');
        $data['url'] = I('post.picture_path', '');
        $model = D('Banner');
        if ($id > 0) {
            $this->saveAuth(2, $model, $data);
        } else {
            $data['created_timestamp'] = time();
            $this->saveAuth(1, $model, $data);
        }
    }

    public function banner_edit()
    {
        $id = I('get.id', 0);
        $banner = D('Banner')->find($id);
        if (empty($banner)) {
            $this->_404('没有找到横幅');
        }
        $banner['picture'] = array('url' => get_access_url(get_picture_path(get_picture($banner['url']))), 'path' => $banner['url']);
        $this->assign($banner);
        $this->display('banner_form');
    }

    public function save()
    {
        $sliderLink = I('post.sliderLink');
        unset($_POST['sliderLink']);
        $sliderImage = I('post.sliderImage');
        unset($_POST['sliderImage']);
        $str = '';
        foreach ($sliderImage as $k => $v) {
            if ($str == '') {
                $str = $sliderLink[$k] . '###' . $v;
            } else {
                $str .= ',' . $sliderLink[$k] . '###' . $v;
            }
        }
        $_POST['ad'] = $str;
        $model = D('WebSetting');
        foreach ($_POST as $k => $v) {
            $count = $model->where(array('field' => $k))->count();
            if ($count > 0) {
                $r = $model->where(array('field' => $k))->setField('value', $v);
            } else {
                $r = $model->add(array('field' => $k, 'value' => $v));
            }
            if ($r === false) {
                $this->ajaxReturn(array('code' => 400, 'msg' => '部分设置保存失败，系统内部错误'));
            }
        }
        $this->ajaxReturn(array('code' => 200, 'msg' => '操作成功'));
    }

    // 删除
    public function del()
    {
        $id = I('post.id', 0);
        $r = D('Banner')->where(array('id' => $id))->delete();
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }

    // 隐藏
    public function hide()
    {
        $id = I('post.id', 0);
        $r = D('Banner')->where(array('id' => $id))->setField('is_show', 0);
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }

    // 显示
    public function show()
    {
        $id = I('post.id', 0);
        $r = D('Banner')->where(array('id' => $id))->setField('is_show', 1);
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }

}