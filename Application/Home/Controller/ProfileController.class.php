<?php
namespace Home\Controller;

class ProfileController extends AuthController
{
    public function index()
    {
        $user_id = I('get.id',0);
        if(empty($user_id)){
            echo "<script>history.go(-1)</script>";
        }
        $this->userData($user_id,ACTION_NAME);
        $this->ad();
        $this->display();
    }

    public function save()
    {
        $id = I('post.id',0);
        $data = I('post.', '');
        $is_draft = I('post.is_draft','');
        if($is_draft == 'true'){
            $data['is_draft'] = 1;
            if(!empty($id)){
                $data['updated_timestamp'] = time();
                $r =D('Posts')->data($data)->save();
                if($r != false){
                    $this->ajaxReturn(array('code' => 200, 'msg' => '保存成功'));
                }else{
                    $this->ajaxReturn(array('code' => 400, 'msg' => '保存失败，请重试'));
                }
            }
        }
        $data['created_timestamp'] = time();
        $data['updated_timestamp'] = time();
        $data['is_draft'] = 0;
        $data['user_id'] = session('cooking_user_id');
        $title = D('Posts')->where(array('title'=>array('like','%'.$_POST['title'].'%')))->find();
        if($title =false || $title != null && $id <=0){
            $this->ajaxReturn(array('code' => 400, 'msg' => '标题已存在，请重试'));
        }
        if($id <=0){
            $r =D('Posts')->data($data)->add();
            D('User')->where(array('id'=>session('cooking_user_id')))->setInc('point',1);
        }else{
            $r =D('Posts')->data($data)->save();
        }
        if($r != false){
            if($is_draft == 'true'){
                $result = D('UserBehavior')->data(array('user_id'=>session('cooking_user_id'),'draft_post_id'=>$r))->add();
            }else{
                D('UserBehavior')->data(array('user_id'=>session('cooking_user_id'),'draft_post_id'=>$id))->delete();
                $result = D('UserBehavior')->data(array('user_id'=>session('cooking_user_id'),'user_post_id'=>$r))->add();
            }
            if($result !=false){
                $this->ajaxReturn(array('code' => 200, 'msg' => '保存成功'));
            }else{
                $this->ajaxReturn(array('code' => 400, 'msg' => '保存失败，请重试'));
            }
        }else{
            $this->ajaxReturn(array('code' => 400, 'msg' => '保存失败，请重试'));
        }
    }

    public function edit(){
        if(IS_AJAX){
            $data = I('post.');
            $this->saveAuth(2, D('User'), $data);
        }else{
            $id = I('get.id',0);
            $this->userData($id);
            $this->ad();
            $this->display();
        }
    }

    public function ask()
    {
        $post_id = I('get.id');
        $r = D('Posts')->where(array('is_draft'=>1,'id'=>$post_id))->find();
        $this->assign($r);
        $topics = D('PostsSetting')->where(array('type' => 2))->select();
        $this->assign('topics', $topics);

        $types = D('PostsSetting')->where(array('type' => 1))->select();
        $this->assign('types', $types);
        $this->ad();
        $this->display();
    }

    public function userData($id,$action=''){
        $r = D('User')->where(array('id' => $id))->find();
        $default_header_img = C('DEFAULT_HEADER_IMG');
        if(empty($r['picture'])){
            $r['head_img'] = get_access_url(get_picture_path(get_picture($default_header_img[$r['gender']])));
            $r['picture'] = '';
        }else{
            $r['head_img'] = get_access_url(get_picture_path(get_picture(get_thumb($r['picture'], 100))));
            session('cooking_user_header',$r['head_img']);
        }
        session('cooking_r_user_name',$r['r_username']);
        $gender = C('GENDER');
        $r['gender_n'] =$r['gender'];
        $r['gender'] = $gender[$r['gender']];
        $r['created_timestamp'] = date('Y-m-d H:i:s',$r['created_timestamp']);
        $r['posts_collect'] = D('UserBehavior')->where(array('user_id'=>$id))->distinct(true)->field('user_post_id')->count('user_post_id');
        $r['courses']= D('UserBehavior')->where(array('user_id'=>$id))->distinct(true)->field('course_id')->count('course_id');
        $r['replies'] = D('UserBehavior')->where(array('user_id'=>$id))->distinct(true)->field('reply_post_id')->count('reply_post_id');
        $r['collect'] = D('UserBehavior')->where(array('user_id'=>$id))->distinct(true)->field('collect_post_id')->count('collect_post_id');
        $r['draft'] = D('UserBehavior')->where(array('user_id'=>$id))->distinct(true)->field('draft_post_id')->count('draft_post_id');
        $r['focus_n'] = D('UserBehavior')->where(array('user_id'=>$id))->distinct(true)->field('attention_user_id')->count('attention_user_id');
        $r['invite_n'] = D('UserBehavior')->where(array('be_invited_user_id'=>$id))->distinct(true)->field('be_invited_user_id')->count('invite_post_id');
        $r['action'] = $action;
        $this->assign($r);
    }

    public function posts(){
        $user_id = I('get.id',0);
        $curPage = I('get.page', 1);              // 当前页
        $pageSize = I('get.pSize', 8);           // 每页显示几条数据
//        if($user_id != session('cooking_user_id')){
//            echo "<script>window.location.href=document.referrer; </script>";
//        }
        $n = D('UserBehavior')->where(array('user_id'=>$user_id))->getField('user_post_id',true);
        if(empty($n)){
            //返回上一页
            echo "<script>history.go(-1)</script>";
        }
        $model = D('Posts');
        $where['id'] = array('in',$n);
        $where['is_show'] = 1;
        $where['user_id'] = $user_id;
        $total = $model->where($where)->count();  // 总条数
        $totalPage = ceil($total / $pageSize);    // 总页数
        $lastPage = $curPage - 1 <= 0 ? $curPage : $curPage - 1;  //上一页
        $nextPage = $curPage + 1 > $totalPage ? $curPage : $curPage + 1;   //下一页
        $pageLink = U('Home/Profile/posts').'?id='.$user_id;
        $pageParams = array('lastPage' => $lastPage, 'curPage' => $curPage, 'nextPage' => $nextPage ,'pageLink'=>$pageLink);
        $post = $model->where($where)->order('updated_timestamp desc')->page($curPage, $pageSize)->select();
        foreach ($post as $k => $item) {
            $posts[$k]['id'] = $item['id'];
            $posts[$k]['user_id'] = $item['user_id'];
            $posts[$k]['title'] = $item['title'];
            $posts[$k]['content_m'] = t_substr($item['content'], 0, 150);
            $posts[$k]['class_name'] = D('PostsSetting')->getFieldById($item['class'], 'name');
            $posts[$k]['topic_name'] = D('PostsSetting')->getFieldById($item['topic'], 'name');
            $posts[$k]['topic'] = $item['topic'];
            $posts[$k]['minute'] = wordTime($item['updated_timestamp']);
            $posts[$k]['tags'] = str_replace(',', '&nbsp;&nbsp;&nbsp;', $item['tags']);
            $posts[$k]['views'] = $item['views'];
            $posts[$k]['replies'] = D('PostsReplies')->where(array('post_id' => $item['id']))->count();
            $posts[$k]['collect'] = D('UserBehavior')->where(array('collect_post_id' => $item['id']))->distinct(true)->field('user_id')->count('user_id');
            $posts[$k]['nick_name'] = D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('nickname');
//            $posts[$k]['head_img'] = get_access_url(get_picture_path(get_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('picture'), 100))));
            $posts[$k]['updated_timestamp'] = date('Y-m-d H:i:s',$item['updated_timestamp']);
        }
        $this->userData($user_id,ACTION_NAME);
        $this->assign('posts',$posts);
        $this->assign($pageParams);
        $this->ad();
        $this->display('index');
    }

    public function answers(){
        $user_id = I('get.id',0);
        $curPage = I('get.page', 1);              // 当前页
        $pageSize = I('get.pSize', 8);           // 每页显示几条数据
//        if($user_id != session('cooking_user_id')){
//            echo "<script>window.location.href=document.referrer; </script>";
//        }
        $model = D('PostsReplies');
        $n = D('UserBehavior')->where(array('user_id'=>$user_id))->getField('reply_post_id',true);
        if(empty($n)){
            //返回上一页
            echo "<script>history.go(-1)</script>";
        }
        $where['id'] = array('in',$n);
        $where['is_show'] = 1;
        $total = $model->where($where)->count();  // 总条数
        $totalPage = ceil($total / $pageSize);    // 总页数
        $lastPage = $curPage - 1 <= 0 ? $curPage : $curPage - 1;  //上一页
        $nextPage = $curPage + 1 > $totalPage ? $curPage : $curPage + 1;   //下一页
        $pageLink = U('Home/Profile/answers').'?id='.$user_id;
        $pageParams = array('lastPage' => $lastPage, 'curPage' => $curPage, 'nextPage' => $nextPage ,'pageLink'=>$pageLink);
        $comment = $model->where($where)->order('created_timestamp desc')->page($curPage, $pageSize)->select();
        foreach ($comment as $k => $item) {
            $comment[$k]['from_user_name'] = D('User')->getFieldById($item['from_user_id'], 'nickname');
            $comment[$k]['from_user_header_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['from_user_id']))->getField('picture'), 100),D('User')->where(array('is_show' => 1, 'id' => $item['from_user_id']))->getField('gender'))));
            $to_user_name =D('User')->getFieldById($item['to_user_id'], 'nickname');
            if(empty($to_user_name)){
                $to_user_name = '文章';
            }
            $comment[$k]['to_user_name'] = $to_user_name;
            $comment[$k]['to_user_header_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['to_user_id']))->getField('picture'), 100),D('User')->where(array('is_show' => 1, 'id' => $item['to_user_id']))->getField('gender'))));
            if (D('Posts')->where(array('is_show' => 1, 'id' => $item['post_id']))->getField('user_id') == $item['from_user_id']) {
                $comment[$k]['author'] = '(作者)';
            }
            $comment[$k]['content'] = htmlspecialchars_decode($item['content']);
            $comment[$k]['created_timestamp'] = date('Y-m-d H:i:s', $item['created_timestamp']);
            $comment[$k]['comment_ulike'] =  D('UserBehavior')->where(array('like_comment_id' => $item['id']))->distinct(true)->field('user_id')->count();
            $comment[$k]['comment_dislike'] =  D('UserBehavior')->where(array('dislike_comment_id' => $item['id']))->distinct(true)->field('user_id')->count();
        }
        $this->userData($user_id,ACTION_NAME);
        $this->assign('answers',$comment);
        $this->assign($pageParams);
        $this->ad();
        $this->display('index');
    }

    public function course(){
        $user_id = I('get.id',0);
        $curPage = I('get.page', 1);              // 当前页
        $pageSize = I('get.pSize', 8);           // 每页显示几条数据
        if($user_id != session('cooking_user_id')){
            echo "<script>history.go(-1)</script>";
        }
        $n = D('CourseApply')->where(array('user_id'=>$user_id))->getField('course_id',true);
        if(empty($n)){
            //返回上一页
            echo "<script>history.go(-1)</script>";
        }
        $model = D('Course');
        $where['id'] = array('in',$n);
        $where['is_show'] = 1;
        $total = $model->where($where)->count();  // 总条数
        $totalPage = ceil($total / $pageSize);    // 总页数
        $lastPage = $curPage - 1 <= 0 ? $curPage : $curPage - 1;  //上一页
        $nextPage = $curPage + 1 > $totalPage ? $curPage : $curPage + 1;   //下一页
        $pageLink = U('Home/Profile/course').'?id='.$user_id;
        $pageParams = array('lastPage' => $lastPage, 'curPage' => $curPage, 'nextPage' => $nextPage ,'pageLink'=>$pageLink);
        $courses = $model->where($where)->order('updated_timestamp desc')->page($curPage, $pageSize)->select();
        $course_type = C('COURSE_TYPE');
        foreach ($courses as $k => $item) {
            if (!empty($item['picture'])) {
                $courses[$k]['picture'] = explode(',', $item['picture']);
                $courses[$k]['picture'] = get_access_url(get_picture_path(get_picture(get_thumb($courses[$k]['picture'][0], 400))));
            } else {
                $courses[$k]['picture'] = '/' . C('DEFAULT_IMAGE');
            }
            if ($item['price'] != 0.00) {
                $courses[$k]['course_price'] = '￥' . $item['price'];
            } else {
                $courses[$k]['course_price'] = '';
            }
            if (empty($item['lecturer'])) {
                $courses[$k]['lecturer'] = '';
            }
            $courses[$k]['course_type'] = $course_type[$item['type']];
            $courses[$k]['updated_timestamp'] = date('Y-m-d', $item['updated_timestamp']);
            $courses[$k]['description'] = t_substr($item['description'], 0, 150, 'utf-8');
            $status =  D('CourseApply')->where(array('course_id'=>$item['id'],'user_id'=>$user_id))->getField('status');
            if($status == 0){
                $status = '未审核';
            }elseif($status == 1){
                $status = '审核通过';
            }else{
                $status = '审核不通过';
            }
            $courses[$k]['status'] = $status;
        }
        $this->userData($user_id,ACTION_NAME);
        $this->assign('course',$courses);
        $this->assign($pageParams);
        $this->ad();
        $this->display('index');
    }

    public function collect(){
        $user_id = I('get.id',0);
        $curPage = I('get.page', 1);              // 当前页
        $pageSize = I('get.pSize', 8);           // 每页显示几条数据
        if($user_id != session('cooking_user_id')){
            echo "<script>history.go(-1)</script>";
        }
        $n = D('UserBehavior')->where(array('user_id'=>$user_id))->getField('collect_post_id',true);
        if(empty($n)){
            //返回上一页
            echo "<script>history.go(-1)</script>";
        }
        $model = D('Posts');
        $where['id'] = array('in',$n);
        $where['is_show'] = 1;
//        $where['user_id'] = $user_id;
        $total = $model->where($where)->count();  // 总条数
        $totalPage = ceil($total / $pageSize);    // 总页数
        $lastPage = $curPage - 1 <= 0 ? $curPage : $curPage - 1;  //上一页
        $nextPage = $curPage + 1 > $totalPage ? $curPage : $curPage + 1;   //下一页
        $pageLink = U('Home/Profile/collect').'?id='.$user_id;
        $pageParams = array('lastPage' => $lastPage, 'curPage' => $curPage, 'nextPage' => $nextPage ,'pageLink'=>$pageLink);
        $post = $model->where($where)->order('updated_timestamp desc')->page($curPage, $pageSize)->select();
        foreach ($post as $k => $item) {
            $posts[$k]['id'] = $item['id'];
            $posts[$k]['user_id'] = $item['user_id'];
            $posts[$k]['title'] = $item['title'];
            $posts[$k]['content_m'] = t_substr($item['content'], 0, 150);
            $posts[$k]['class_name'] = D('PostsSetting')->getFieldById($item['class'], 'name');
            $posts[$k]['topic_name'] = D('PostsSetting')->getFieldById($item['topic'], 'name');
            $posts[$k]['topic'] = $item['topic'];
            $posts[$k]['minute'] = wordTime($item['updated_timestamp']);
            $posts[$k]['tags'] = str_replace(',', '&nbsp;&nbsp;&nbsp;', $item['tags']);
            $posts[$k]['views'] = $item['views'];
            $posts[$k]['replies'] = D('PostsReplies')->where(array('post_id' => $item['id']))->count();
            $posts[$k]['collect'] = D('UserBehavior')->where(array('collect_post_id' => $item['id']))->distinct(true)->field('user_id')->count('user_id');
            $posts[$k]['nick_name'] = D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('nickname');
//            $posts[$k]['head_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('picture'), 100),D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('gender'))));
            $posts[$k]['updated_timestamp'] = date('Y-m-d H:i:s',$item['updated_timestamp']);
        }
        $this->userData($user_id,ACTION_NAME);
        $this->assign('collects',$posts);
        $this->assign($pageParams);
        $this->ad();
        $this->display('index');
    }

    public function draft(){
        $user_id = I('get.id',0);
        $curPage = I('get.page', 1);              // 当前页
        $pageSize = I('get.pSize', 8);           // 每页显示几条数据
        if($user_id != session('cooking_user_id')){
            echo "<script>history.go(-1)</script>";
        }
        $n = D('UserBehavior')->where(array('user_id'=>$user_id))->getField('draft_post_id',true);
        if(empty($n)){
            //返回上一页
            echo "<script>history.go(-1)</script>";
        }
        $model = D('Posts');
        $where['id'] = array('in',$n);
        $where['is_show'] = 1;
//        $where['user_id'] = $user_id;
        $total = $model->where($where)->count();  // 总条数
        $totalPage = ceil($total / $pageSize);    // 总页数
        $lastPage = $curPage - 1 <= 0 ? $curPage : $curPage - 1;  //上一页
        $nextPage = $curPage + 1 > $totalPage ? $curPage : $curPage + 1;   //下一页
        $pageLink = U('Home/Profile/draft').'?id='.$user_id;
        $pageParams = array('lastPage' => $lastPage, 'curPage' => $curPage, 'nextPage' => $nextPage ,'pageLink'=>$pageLink);
        $post = $model->where($where)->order('updated_timestamp desc')->page($curPage, $pageSize)->select();
        foreach ($post as $k => $item) {
            $posts[$k]['id'] = $item['id'];
            $posts[$k]['user_id'] = $item['user_id'];
            $posts[$k]['title'] = $item['title'];
            $posts[$k]['content_m'] = t_substr($item['content'], 0, 150);
            $posts[$k]['class_name'] = D('PostsSetting')->getFieldById($item['class'], 'name');
            $posts[$k]['topic_name'] = D('PostsSetting')->getFieldById($item['topic'], 'name');
            $posts[$k]['topic'] = $item['topic'];
            $posts[$k]['minute'] = wordTime($item['updated_timestamp']);
            $posts[$k]['tags'] = str_replace(',', '&nbsp;&nbsp;&nbsp;', $item['tags']);
            $posts[$k]['views'] = $item['views'];
            $posts[$k]['replies'] = D('PostsReplies')->where(array('post_id' => $item['id']))->count();
            $posts[$k]['collect'] = D('UserBehavior')->where(array('collect_post_id' => $item['id']))->distinct(true)->field('user_id')->count('user_id');
            $posts[$k]['nick_name'] = D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('nickname');
//            $posts[$k]['head_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('picture'), 100),D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('gender'))));
            $posts[$k]['updated_timestamp'] = date('Y-m-d H:i:s',$item['updated_timestamp']);
        }
        $this->userData($user_id,ACTION_NAME);
        $this->assign('drafts',$posts);
        $this->assign($pageParams);
        $this->ad();
        $this->display('index');
    }

    public function focus(){
        $user_id = I('get.id',0);
        $curPage = I('get.page', 1);              // 当前页
        $pageSize = I('get.pSize', 8);           // 每页显示几条数据
        if($user_id != session('cooking_user_id')){
            echo "<script>history.go(-1)</script>";
        }
        $n = D('UserBehavior')->where(array('user_id'=>$user_id))->getField('attention_user_id',true);
        if(empty($n)){
            //返回上一页
            echo "<script>history.go(-1)</script>";
        }
        $model = D('User');
        $where['id'] = array('in',$n);
        $where['is_show'] = 1;
        $total = $model->where($where)->count();  // 总条数
        $totalPage = ceil($total / $pageSize);    // 总页数
        $lastPage = $curPage - 1 <= 0 ? $curPage : $curPage - 1;  //上一页
        $nextPage = $curPage + 1 > $totalPage ? $curPage : $curPage + 1;   //下一页
        $pageLink = U('Home/Profile/focus').'?id='.$user_id;
        $pageParams = array('lastPage' => $lastPage, 'curPage' => $curPage, 'nextPage' => $nextPage ,'pageLink'=>$pageLink);
        $user = $model->where($where)->order('created_timestamp desc')->page($curPage, $pageSize)->select();
        foreach ($user as $k => $item) {
            $users[$k]['id'] = $item['id'];
            $users[$k]['nick_name'] = $item['nickname'];
            $users[$k]['signature'] = $item['signature'];
            $users[$k]['head_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb($item['picture'], 100),$item['gender'])));
            $users[$k]['user_attention'] = D('UserBehavior')->where(array('attention_user_id'=>$item['id']))->distinct(true)->field('user_id')->count();
            $users[$k]['user_focus'] = D('UserBehavior')->where(array('attention_user_id'=>$item['id'],'user_id'=>session('cooking_user_id')))->count();
            $users[$k]['created_timestamp'] = date('Y-m-d H:i:s',$item['created_timestamp']);
        }
        $this->userData($user_id,ACTION_NAME);
        $this->assign('users',$users);
        $this->assign($pageParams);
        $this->ad();
        $this->display('index');
    }

    public function message(){
        $user_id = I('get.id',0);
        $curPage = I('get.page', 1);              // 当前页
        $pageSize = I('get.pSize', 8);           // 每页显示几条数据
        if($user_id != session('cooking_user_id')){
            echo "<script>history.go(-1)</script>";
        }
        $model = D('UserBehavior');
        $where['be_invited_user_id'] = $user_id;
        $total = $model->where($where)->count();  // 总条数
        $totalPage = ceil($total / $pageSize);    // 总页数
        $lastPage = $curPage - 1 <= 0 ? $curPage : $curPage - 1;  //上一页
        $nextPage = $curPage + 1 > $totalPage ? $curPage : $curPage + 1;   //下一页
        $pageLink = U('Home/Profile/message').'?id='.$user_id;
        $pageParams = array('lastPage' => $lastPage, 'curPage' => $curPage, 'nextPage' => $nextPage ,'pageLink'=>$pageLink);
        $message = $model->where($where)->page($curPage, $pageSize)->select();
        foreach ($message as $k => $item) {
            $message[$k]['user_name'] = D('User')->getFieldById($item['user_id'], 'nickname');
            $post = D('Posts')->where(array('is_show'=>1,'id'=>$item['invite_post_id'],'is_audit'=>array('in','1,2'),'is_draft'=>0))->field('title,id')->find();
            $message[$k]['title'] = $post['title'];
            $message[$k]['post_id'] = $post['id'];
        }
        $this->userData($user_id,ACTION_NAME);
        $this->assign('messages',$message);
        $this->assign($pageParams);
        $this->ad();
        $this->display('index');
    }

}