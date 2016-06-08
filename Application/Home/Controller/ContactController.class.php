<?php
namespace Home\Controller;

class ContactController extends CommonController
{
    public function index()
    {
        $this->display();
    }

    public function feedback(){
        $user_id = I('post.user_id',0);
        $data = I('post.');
        if(!empty($user_id)){
            $data['user_id'] = $user_id;
        }
        $data['created_timestamp'] = time();
        $this->saveAuth(1,D('Feedback'),$data);
    }


}