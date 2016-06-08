<?php
/**
 * Created by PhpStorm.
 * User: Dickie
 * Date: 2015/9/14
 * Time: 15:52
 */

namespace Admin\Controller;
class CourseController extends AuthController
{
    public function index()
    {
        $this->display();
    }

    public function tableData()
    {
        $column = I('get.column', 0);
        $tableObj = D('Course');
        $order = $this->queryOrder();
        $where = $this->queryWhere();
        $where['column'] = $column;
        $total = $tableObj->where($where)->count();
        $items = $tableObj->where($where)->limit($this->offset, $this->pSize)->order($order)->select();
        $data["draw"] = $this->draw;
        $data["recordsTotal"] = $total;
        $data["recordsFiltered"] = $total;
        $data['data'] = array();
        $courseType = C('COURSE_TYPE');
        $isShowHtml = C('isShowHtml');
        foreach ($items as $k => $item) {
            $data['data'][$k][0] = $k + 1 . '<input type="hidden" name="id" value="' . $item['id'] . '">';
            $data['data'][$k][1] = wrap($item['title'], 20);
            $data['data'][$k][2] = t_substr($item['description'], 0, 20, 'utf-8');
            $data['data'][$k][3] = $courseType[$item['type']];
            $data['data'][$k][4] = date('Y-m-d H:i:s', $item['created_timestamp']);
            $data['data'][$k][5] = $isShowHtml[$item['is_show']];
            $data['data'][$k][6] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>
            <a class="btn green btn-sm margin-right-10" href="' . U("look", array('id' => $item['id'], 'action' => 'view')) . '">
                <i class="fa fa-eye"> 查看 </i>
            <a class="btn blue btn-sm margin-right-10" href="' . U("edit", array('id' => $item['id'])) . '">
                <i class="fa fa-edit"> 编辑 </i>';
            if ($item['is_show'] == 0) {
                $data['data'][$k][6] .=
                    '<a class="btn btn-sm blue" href="javascript:;" onclick="show(this)"> 显示</a>';
            } else if ($item['is_show'] == 1) {
                $data['data'][$k][6] .=
                    '<a class="btn btn-sm yellow" href="javascript:;" onclick="hide(this)"> 隐藏</a>';
            }
        }
        return $this->ajaxReturn($data);
    }

    public function course_apply()
    {
        $this->display();
    }


    public function applyData()
    {
        $tableObj = D('CourseApply');
        $order = $this->queryOrder();
        $where = $this->queryWhere();
        $total = $tableObj->where($where)->count();
        $items = $tableObj->where($where)->limit($this->offset, $this->pSize)->order($order)->select();
        $data["draw"] = $this->draw;
        $data["recordsTotal"] = $total;
        $data["recordsFiltered"] = $total;
        $data['data'] = array();
        $courseType = C('COURSE_TYPE');
        $courseStatus = C('COURSE_STATUS');
        foreach ($items as $k => $item) {
            $course = D('Course')->where(array('is_show' => 1, 'id' => $item['course_id']))->find();
            $data['data'][$k][0] = $k + 1 . '<input type="hidden" name="id" value="' . $item['id'] . '">';
            $data['data'][$k][1] = '<a href="' . U("look", array('id' => $item['course_id'], 'action' => 'view')) . '">' . wrap($course['title'], 20) . '</a>';
            $data['data'][$k][2] = $courseType[$course['type']];
            $data['data'][$k][3] = '￥' . $course['price'];
            $data['data'][$k][4] = D('User')->getFieldById($item['user_id'],'account');
            $data['data'][$k][5] = D('User')->getFieldById($item['user_id'],'r_username');
            $data['data'][$k][6] = date('Y-m-d H:i:s', $item['created_timestamp']);
            $data['data'][$k][7] = $courseStatus[$item['status']];
            $data['data'][$k][8] = $item['remark'];
            $data['data'][$k][9] = $item['reason'];
            $data['data'][$k][10] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>';
            if ($item['status'] == 0) {
                $data['data'][$k][10] .= '
                    <a class="btn purple btn-sm" href="javascript:void(0)" onClick="auditing(this)">
                        <i class="fa fa-check"> 审核 </i>
                    </a>
                    <a class="btn purple btn-sm" href="javascript:void(0)" onClick="noPass(this)">
                        <i class="fa fa-times"> 审核不通过 </i>
                    </a>';
            }
        }
        return $this->ajaxReturn($data);
    }

    public function setting(){
        $this->display('setting_index');
    }

    public function settingData(){
        $tableObj = D('CourseSetting');
        $order = $this->queryOrder();
        $where = $this->queryWhere();
        $total = $tableObj->where($where)->count();
        $items = $tableObj->where($where)->limit($this->offset, $this->pSize)->order($order)->select();
        $data["draw"] = $this->draw;
        $data["recordsTotal"] = $total;
        $data["recordsFiltered"] = $total;
        $data['data'] = array();
        $isShowHtml = C('isShowHtml');
        foreach ($items as $k => $item) {
            $data['data'][$k][0] = $k + 1 . '<input type="hidden" name="id" value="' . $item['id'] . '">';
            $data['data'][$k][1] = $item['title'];
            $data['data'][$k][2] = $item['description'];
            $data['data'][$k][3] = '<img style="width:100px;" src="'.get_access_url(get_picture_path(get_picture($item['picture']))).'">';
            $data['data'][$k][4] = $isShowHtml[$item['is_show']];
            $data['data'][$k][5] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>
            <a class="btn blue btn-sm margin-right-10" href="' . U("setting_edit", array('id' => $item['id'])) . '">
                <i class="fa fa-edit"> 编辑 </i></a>';
            if ($item['is_show'] == 0) {
                $data['data'][$k][5] .=
                    '<a class="btn btn-sm blue" href="javascript:;" onclick="show(this)"> 显示</a>';
            }else if ($item['is_show'] == 1) {
                $data['data'][$k][5] .=
                    '<a class="btn btn-sm yellow" href="javascript:;" onclick="hide(this)"> 隐藏</a>';
            }
        }
        return $this->ajaxReturn($data);
    }

    public function classify(){
        $this->display('class_index');
    }

    public function classifyTableData(){
        $tableObj = D('CourseClassify');
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
            $data['data'][$k][1] = $item['name'];
            $data['data'][$k][2] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>
            <a class="btn blue btn-sm margin-right-10" href="' . U("classify_edit", array('id' => $item['id'])) . '">
                <i class="fa fa-edit"> 编辑 </i></a>';
        }
        return $this->ajaxReturn($data);

    }

    public function save()
    {
        $id = I('post.id', 0);
        $picture = I('post.sliderImage', '');
        $radio = I('post.radio', '');
        if ($radio == 1) {
            $_POST['is_new'] = 1;
            $_POST['is_hot'] = 0;
        } else if ($radio == 2) {
            $_POST['is_hot'] = 1;
            $_POST['is_new'] = 0;
        }
        $_POST['picture'] = implode(',', $picture);
        $data = I('post.');
        if ($id > 0) {
            $data['updated_timestamp'] = time();
            $this->saveAuth(2, D(CONTROLLER_NAME), $data);
        } else {
            $data['created_timestamp'] = time();
            $data['updated_timestamp'] = time();
            $this->saveAuth(1, D(CONTROLLER_NAME), $data);
        }
    }

    public function saveSetting(){
        $id = I('post.id', 0);
        $data = I('post.');
        $data['picture'] = I('post.picture_path');
        if ($id > 0) {
            $this->saveAuth(2, D('CourseSetting'), $data);
        } else {
            $this->saveAuth(1, D('CourseSetting'), $data);
        }
    }

    public function saveClassify(){
        $id = I('post.id', 0);
        $data = I('post.');
        if ($id > 0) {
            $this->saveAuth(2, D('CourseClassify'), $data);
        } else {
            $this->saveAuth(1, D('CourseClassify'), $data);
        }
    }

    public function look()
    {
        $this->edit();
    }

    public function setting_edit()
    {
        $id = I('get.id', 0);
        $Course = D('CourseSetting')->find($id);
        if (empty($Course)) {
            $this->_404('没有找到类别');
        }
        $Course['picture'] = array('url' => get_access_url(get_picture_path(get_picture(get_thumb($Course['picture'],458)))), 'path' => $Course['picture']);
        $this->assign($Course);
        $this->_settingForm();
    }

    public function classify_edit(){
        $id = I('get.id', 0);
        $Course = D('CourseClassify')->find($id);
        if (empty($Course)) {
            $this->_404('没有找到类别');
        }
        $this->assign($Course);
        $this->display('class_form');
    }

    public function edit()
    {
        $id = I('get.id', 0);
        $course = D(CONTROLLER_NAME)->find($id);
        if ($course['picture'] !== '') {
            $images = explode(',', $course['picture']);
            foreach ($images as $k => $v) {
                $image[$k]['thumb_path'] = get_thumb($v, 400);
                $image[$k]['path'] = $v;
            }
        } else {
            $images = '/' . C('DEFAULT_IMAGE_820');
        }
        if (!empty($course['is_show'])) {
            $course['radio'] = 1;
        } else {
            $course['radio'] = 0;
        }
        if (!empty($course['is_hot'])) {
            $course['radio'] = 2;
        } else {
            $course['radio'] = 0;
        }
        if (empty($course)) {
            $this->_404('没有找到该课程');
        }
        $this->assign('images', $image);
        $this->assign($course);
        $r = D('CourseClassify')->select();
        $this->assign('class',$r);
        $this->display('form');
    }

    public function add()
    {
        $r = D('CourseClassify')->select();
        $this->assign('class',$r);
        $this->display('form');
    }

    public function setting_add()
    {
        $picture = array('url' => get_access_url(get_picture_path(get_picture(C('DEFAULT_IMAGE')))), 'path' => '');
        $this->assign('picture', $picture);
        $this->_settingForm();
    }

    public function classify_add(){
        $this->display('class_form');
    }

    // 审核
    public function audit()
    {
        $id = I('post.id', 0);
        $status = I('post.status');
        $reason = I('post.reason', '');
        if ($id <= 0) {
            $this->_errorParameter();
        }
        if ($status == 1) {
            $r = D('CourseApply')->where(array('id' => $id))->setField('status', 1);
            $user_id = D('CourseApply')->getFieldById($id,'user_id');
            $course_id = D('CourseApply')->getFieldById($id,'course_id');
            D('UserBehavior')->where(array('user_id'=>$user_id,'course_id'=>$course_id))->add();
        } else if ($status == 2) {
            $data = array('status' => 2, 'reason' => $reason);
            $r = D('CourseApply')->where(array('id' => $id))->setField($data);
        }
        if ($r === false) {
            $this->_500();
        }
        $this->outputJson(200, '操作成功');
    }

    private function _settingForm()
    {
        $this->display('setting_form');
    }

    // 删除
    public function del()
    {
        $id = I('post.id', 0);
        $r = D('Course')->where(array('id' => $id))->delete();
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }

    // 删除
    public function classify_del()
    {
        $id = I('post.id', 0);
        $r = D('CourseClassify')->where(array('id' => $id))->delete();
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
        $r = D('Course')->where(array('id' => $id))->setField('is_show', 0);
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
        $r = D('Course')->where(array('id' => $id))->setField('is_show', 1);
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }
    // 删除
    public function delSetting()
    {
        $id = I('post.id', 0);
        $r = D('CourseSetting')->where(array('id' => $id))->delete();
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }

    // 隐藏
    public function hideSetting()
    {
        $id = I('post.id', 0);
        $r = D('CourseSetting')->where(array('id' => $id))->setField('is_show', 0);
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }

    // 显示
    public function showSetting()
    {
        $id = I('post.id', 0);
        $r = D('CourseSetting')->where(array('id' => $id))->setField('is_show', 1);
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }
}