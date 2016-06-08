<?php
/**
 * Created by PhpStorm.
 * User: Dickie
 * Date: 2015/9/11
 * Time: 10:31
 */
namespace Home\Controller;

class BehaviorController extends CommonController
{
    public function signUp()
    {
        $phone = I('post.phone','');
        $data = I('post.', '');
        $data['pwd'] = encrypt_pass($data['pwd']);
        $data['created_timestamp'] = time();
        if (empty($data)) {
            $this->ajaxReturn(array('code' => 400, 'msg' => '注册失败'));
        }
        if(D('User')->where(array('phone'=>$phone))->find() >0){
            $this->ajaxReturn(array('code' => 400, 'msg' => '该手机已注册'));
        }
        $account = I('post.account', '');
        $nickname = I('post.nickname', '');
        $where['account'] = array('like', '%' . $account . '%');
        $where['nickname'] = array('like', '%' . $nickname . '%');
        $where['_logic'] = 'or';
        $map['_complex'] = $where;
        $r = D('User')->where($map)->find();
        if ($r != false || $r != null) {
            $this->_404('抱歉，账号或昵称已存在');
        }
        $r = D('User')->data($data)->add();
        if ($r != false) {
            $result = D('User')->find($r);
            session('cooking_user_id', $result['id']);
            session('cooking_user_name', $result['nickname']);
            session('cooking_r_user_name', $result['r_username']);
            if (empty($result['picture'])) {
                $header = get_access_url(get_picture_path(get_header_picture('', $result['gender'])));
            } else {
                $header = get_access_url(get_picture_path(get_picture(get_thumb($result['picture'], 100))));
            }
            session('cooking_user_header', $header);
            $this->ajaxReturn(array('code' => 200, 'msg' => '注册成功'));
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '注册失败'));
        }
    }

    // 登陆认证
    public function signIn()
    {
        $account = I('post.account', '');
        $pass = I('post.pwd', '');

        if ($account == '' || $pass == '') {
            $this->ajaxReturn(array('code' => 400, 'msg' => '账号密码不能为空'));
        }
        $user = D('User')->field('id, nickname,picture,r_username,gender')->where(array('account' => $account, 'pwd' => encrypt_pass($pass), 'is_show' => 1))->find();
        $id = $user['id'];
        $name = $user['nickname'];
        $r_name = $user['r_username'];
        if (empty($user['picture'])) {
            $header = get_access_url(get_picture_path(get_header_picture('', $user['gender'])));
        } else {
            $header = get_access_url(get_picture_path(get_picture(get_thumb($user['picture'], 100))));
        }
        if ($id > 0) {
            session('cooking_user_id', $id);
            session('cooking_user_name', $name);
            session('cooking_r_user_name', $r_name);
            session('cooking_user_header', $header);
            $href = U('Home/Index/index');
            $this->ajaxReturn(array('code' => 200, 'msg' => '登陆成功', 'href' => $href, 'name' => $name));
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '登陆失败，账号或密码错误'));
        }
    }

    // 登出
    public function signOut()
    {
        session(null);
        $this->redirect('Index/index');
    }

    //重置密码
    public function resetPwd()
    {
        $account = I('post.account', '');
        $phone = I('post.phone', '');
        $pwd = I('post.pwd', '');
        $r = D('User')->where(array('account' => $account, 'phone' => $phone))->setField('pwd', encrypt_pass($pwd));
        if ($r != false) {
            $this->ajaxReturn(array('code' => 200, 'msg' => '重置密码成功'));
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '重置密码失败'));
        }
    }

}