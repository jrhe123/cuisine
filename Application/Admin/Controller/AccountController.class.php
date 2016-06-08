<?php
namespace Admin\Controller;
use Think\Exception;

class AccountController extends AuthController
{
    public function index() {
        $subAdmins = D('Admin')->field('id, name')->where(array('role' => 'sub'))->select();
        $this->assign('subAdmins', $subAdmins);
        $this->display();
    }

    // 重置后台管理员密码
    public function resetPass() {
        $oldPass = I('post.old_pass', '');
        $newPass = I('post.new_pass', '');

        $adminId = session('zjpd_admin_id');
        $pass = D('Admin')->getFieldById($adminId, 'pass');
        if (encrypt_pass($oldPass) != $pass) {
            $this->ajaxReturn(array('code' => 400, 'msg' => '修改失败，请输入正确的原密码'));
        }
        $r = D('Admin')->where(array('id' => $adminId))->setField('pass', encrypt_pass($newPass));
        if ($r === false) {
            $this->ajaxReturn(array('code' => 400, 'msg' => '修改失败，系统内部错误'));
        }
        $this->ajaxReturn(array('code' => 200, 'msg' => '修改成功'));
    }

    // 添加子账号
    public function addSub() {
        $name = I('post.name', '');
        $pass = I('post.pass', '');

        $id = D('Admin')->getFieldByName($name, 'id');
        if ($id > 0) {
            $this->ajaxReturn(array('code' => 400, 'msg' => '添加失败，账号已存在'));
        }
        $r = D('Admin')->data(array('name' => $name, 'pass' => encrypt_pass($pass), 'role' => 'sub', 'permission' => C('SUB_ACCOUNT_PERMISSION')))
            ->add();
        if ($r === false) {
            $this->ajaxReturn(array('code' => 400, 'msg' => '添加失败，系统内部错误'));
        }
        $this->ajaxReturn(array('code' => 200, 'msg' => '添加成功'));
    }

    // 删除子账号
    public function delSub() {
        $id = I('post.id');
        $r = D('Admin')->where(array('role' => 'sub', 'id' => $id))->delete();
        if ($r === false) {
            $this->ajaxReturn(array('code' => 400, 'msg' => '删除失败，系统内部错误'));
        } else {
            $this->ajaxReturn(array('code' => 200, 'msg' => '删除成功'));
        }
    }

    // 重置后台子账号管理员密码
    public function resetSubPass() {
        $adminId = I('post.id', '');
        $newPass = I('post.new_pass', '');

        $r = D('Admin')->where(array('id' => $adminId, 'role' => 'sub'))->setField('pass', encrypt_pass($newPass));
        if ($r === false) {
            $this->ajaxReturn(array('code' => 400, 'msg' => '修改失败，系统内部错误'));
        }
        $this->ajaxReturn(array('code' => 200, 'msg' => '修改成功'));
    }

    // 修改权限
    public function editAuth() {
        $adminId = I('get.admin_id');
        $admin = D('Admin')->field('id, name, permission')->find($adminId);
        $permissionArr = explode(',', $admin['permission']);
        $menuArr = D('Menu')->getAllMenuArray();
        $treeDataArr = js_tree_data($menuArr, $permissionArr);
        $this->assign('treeDataJson', json_encode($treeDataArr));
        $this->assign($admin);
        $this->display('edit_auth');
    }

    public function saveAuth() {
        $id = I('post.id', 0);
        $selectIds = I('post.selected_id');

        $r = D('Admin')->where(array('id' => $id))->setField('permission', $selectIds);
        if ($r !== false) {
//            $name = D('Admin')->getFieldById($id, 'name');
//            $operation = "修改了后台子账号“'.$name.'”的权限 ";
//            admin_log($operation);
            $this->ajaxReturn(array('code' => 200, 'msg' => '保存成功'));
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '保存失败，请重试'));
        }
    }
}