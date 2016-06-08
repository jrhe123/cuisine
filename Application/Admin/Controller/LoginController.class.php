<?php
namespace Admin\Controller;

use Think\Controller;

class LoginController extends Controller
{
    // 登陆界面
    public function index()
    {
        $this->display();
    }

    // 登陆认证
    public function auth()
    {
        $name = I('post.name', '');
        $pass = I('post.password', '');

        if ($name == '' || $pass == '') {
            $this->ajaxReturn(array('code' => 400, 'msg' => '账号密码不能为空'));
        }
        $admin = D('Admin')->field('id, role, permission')->where(array('name' => $name, 'pass' => encrypt_pass($pass)))->find();
        $id = $admin['id'];
        $role = $admin['role'];
        if ($id > 0) {
            session('cooking_admin_id', $id);
            session('cooking_admin_role', $role);
            if ($role == 'admin') {
                $href = U('Index/index');
            } else {
                $permissionArr = explode(',', $admin['permission']);
                session('cooking_admin_permission', $permissionArr);
                $subPermission = session('cooking_admin_permission');;
                $route = D('Menu')->where(array('id' => array('in', $subPermission), 'is_leaf' => 1))->order('id asc, sort asc')->getField('route');
                $href = U($route);
            }
            $this->ajaxReturn(array('code' => 200, 'msg' => '登陆成功', 'href' => $href));
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '登陆失败，账号或密码错误'));
        }
    }

    // 登出
    public function out() {
        session(null);
        $this->redirect('index');
    }
}