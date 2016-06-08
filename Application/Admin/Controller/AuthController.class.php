<?php
namespace Admin\Controller;
class AuthController extends CommonController
{
    public function __construct()
    {
        parent::__construct();
        $this->checkLogin();
    }

    // 检查是否已登录
    protected function checkLogin()
    {
        if (!session('?cooking_admin_id') || session('cooking_admin_id') <= 0) {
            if (IS_AJAX) {
                $this->ajaxReturn(array('code' => 401, 'msg' => '未登录或登陆超时'));
            } else {
                header('Location: ' . U('Login/index'));
            }
        }
    }
}