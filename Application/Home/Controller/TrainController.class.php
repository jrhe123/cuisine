<?php
namespace Home\Controller;
class TrainController extends CommonController
{
    public function index()
    {
        $r = D('CourseClassify')->select();
        $this->assign('class',$r);
        $this->ad();
        $this->assign('train', 'current_page_item');
        $this->display();
    }

    public function article()
    {
        $id = I('get.id', 0);
        $r = D('Course')->where(array('id' => $id, 'is_show' => 1))->find();
        $c = D('CourseApply')->where(array('user_id'=>session('cooking_user_id'),'course_id'=>$id,'status'=>1))->find();
        if ($r != false || $r != null) {
            $course_type = C('COURSE_TYPE');
            if (!empty($r['picture'])) {
                $r['picture'] = explode(',', $r['picture']);
                foreach ($r['picture'] as $k => $v) {
                    $r['pictures'][$k] = get_access_url(get_picture_path(get_picture($v)));
                }
            } else {
                $r['picture'] = '/' . C('DEFAULT_IMAGE');
            }
            if ($r['price'] != 0) {
                $r['course_price'] = '￥' . $r['price'];
            } else {
                $r['course_price'] = '';
            }
            if (empty($r['lecturer'])) {
                $r['lecturer'] = '';
            }
            if($c != false && $c !=null){
                $r['is_audit'] = 0;
            }
            $r['course_type'] = $course_type[$r['type']];
            $r['created_timestamp'] = date('Y-m-d', $r['created_timestamp']);
        }
        $this->assign($r);
        $this->assign('train', 'current_page_item');
        $this->display();
    }

    public function apply()
    {
        if (IS_AJAX) {
            $data = I('post.');
            $data['created_timestamp'] = time();
            $r = D('CourseApply')->data($data)->add();
            if ($r !== false) {
                D('UserBehavior')->data($data)->add();
                $this->ajaxReturn(array('code' => 200, 'msg' => '报名成功', 'apply_id' => $r));
            } else {
                $this->ajaxReturn(array('code' => 400, 'msg' => '报名失败，请重试'));
            }
        } else {
            $course_id = I('get.id', 0);
            $course = D('Course')->field('column,title')->where(array('is_show' => 1, 'id' => $course_id))->find();
            $this->assign('course', $course);
            $id = session('cooking_user_id');
            $r = D('User')->where(array('id' => $id))->find();
            $r['head_img'] = get_access_url(get_picture_path(get_picture(get_thumb($r['picture'], 100))));
            $gender = C('GENDER');
            $r['gender'] = $gender[$r['gender']];
            $r['created_timestamp'] = date('Y-m-d H:i:s', $r['created_timestamp']);
            $this->assign($r);
            $this->assign('train', 'current_page_item');
            $this->display();
        }
    }

    public function result()
    {
        $id = I('get.id', 0);
        $r = D('CourseApply')->find($id);
        $course = D('Course')->where(array('is_show' => 1, 'id' => $r['course_id']))->find();
        $user = D('User')->where(array('id' => $r['user_id']))->find();
        $this->assign('course', $course);
        $this->assign('user', $user);
        $this->assign('apply', $r);
        $this->assign('train', 'current_page_item');
        $this->display();
    }

    public function dataList()
    {
        $column = I('post.column', 0);
        $curPage = I('post.page', 1);              // 当前页
        $pageSize = I('post.pSize', 4);           // 每页显示几条数据
        $r = D('Course')->where(array('column' => $column, 'is_show' => 1))->order('created_timestamp desc')->page($curPage, $pageSize)->select();
        $course_type = C('COURSE_TYPE');
        foreach ($r as $k => $v) {
            if (!empty($v['picture'])) {
                $r[$k]['picture'] = explode(',', $v['picture']);
                $r[$k]['picture'] = get_access_url(get_picture_path(get_picture(get_thumb($r[$k]['picture'][0], 400))));
            } else {
                $r[$k]['picture'] = '/' . C('DEFAULT_IMAGE');
            }
            if ($v['price'] != 0.00) {
                $r[$k]['course_price'] = '￥' . $v['price'];
            } else {
                $r[$k]['course_price'] = '';
            }
            if (empty($v['lecturer'])) {
                $r[$k]['lecturer'] = '';
            }
            $r[$k]['course_type'] = $course_type[$v['type']];
            $r[$k]['updated_timestamp'] = date('Y-m-d', $v['updated_timestamp']);
            $r[$k]['description'] = t_substr($v['description'], 0, 150, 'utf-8');
        }
        $this->ajaxReturn(array('code' => 200, 'data' => $r, 'curPage' => $curPage));

    }

}