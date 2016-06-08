<?php
namespace Home\Controller;

class IndexController extends CommonController
{
    public function index()
    {
        $this->sliders();
        $this->courses_two();
        $this->courses_three();
        $this->posts_four();
        $this->assign('home', 'current_page_item');
        $this->display();
    }

    public function blogList()
    {
        $this->ad();
        $this->ranking();
        $this->latest_problem();
        $this->topic_screen();
        $this->assign('list', 'current_page_item');
        $this->display('list');
    }

    public function look()
    {
        $id = I('get.id');
        $r = D('Banner')->where(array('id' => $id))->find();
        $this->assign($r);
        $this->display('article');
    }

    public function detail()
    {
        $post_id = I('get.id', 0);
        $r = D('Posts')->where(array('id' => $post_id, 'is_show' => 1))->find();
        $r['content'] = htmlspecialchars_decode($r['content']);
        $r['minute'] = wordTime($r['updated_timestamp']);
        $r['replies'] = D('PostsReplies')->where(array('post_id' => $r['id']))->count();
        $r['collect'] = D('UserBehavior')->where(array('collect_post_id' => $r['id']))->distinct(true)->field('user_id')->count();
        $r['nick_name'] = D('User')->where(array('is_show' => 1, 'id' => $r['user_id']))->getField('nickname');
        $r['head_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $r['user_id']))->getField('picture'), 100), D('User')->where(array('is_show' => 1, 'id' => $r['user_id']))->getField('gender'))));
        $r['signature'] = D('User')->where(array('is_show' => 1, 'id' => $r['user_id']))->getField('signature');
        $r['user_attention'] = D('UserBehavior')->where(array('attention_user_id' => $r['user_id']))->distinct(true)->field('user_id')->count();
        $r['posts_ulike'] = D('UserBehavior')->where(array('like_post_id' => $post_id))->distinct(true)->field('user_id')->count();
        $r['posts_dislike'] = D('UserBehavior')->where(array('dislike_post_id' => $post_id))->distinct(true)->field('user_id')->count();
        $r['posts_collect'] = D('UserBehavior')->where(array('collect_post_id' => $post_id, 'user_id' => session('cooking_user_id')))->count();
        $r['user_focus'] = D('UserBehavior')->where(array('attention_user_id' => $r['user_id'], 'user_id' => session('cooking_user_id')))->count();
        $r['current_u_id'] = session('cooking_user_id');
        $this->assign($r);
        $comment = D('PostsReplies')->where(array('post_id' => $post_id))->order('created_timestamp desc')->select();
        foreach ($comment as $k => $item) {
            $comment[$k]['from_user_name'] = D('User')->getFieldById($item['from_user_id'], 'nickname');
            $comment[$k]['from_user_header_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['from_user_id']))->getField('picture'), 100), D('User')->where(array('is_show' => 1, 'id' => $item['from_user_id']))->getField('gender'))));
            $to_user_name = D('User')->getFieldById($item['to_user_id'], 'nickname');
            if (empty($to_user_name)) {
                $to_user_name = '文章';
            }
            $comment[$k]['to_user_name'] = $to_user_name;
            $comment[$k]['to_user_header_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['to_user_id']))->getField('picture'), 100), D('User')->where(array('is_show' => 1, 'id' => $item['to_user_id']))->getField('gender'))));
            if (D('Posts')->where(array('is_show' => 1, 'id' => $post_id))->getField('user_id') == $item['from_user_id']) {
                $comment[$k]['author'] = '(作者)';
            }
            $comment[$k]['content'] = htmlspecialchars_decode($item['content']);
            $comment[$k]['created_timestamp'] = date('Y-m-d H:i:s', $item['created_timestamp']);
            $comment[$k]['comment_ulike'] = D('UserBehavior')->where(array('like_comment_id' => $item['id']))->distinct(true)->field('user_id')->count();
            $comment[$k]['comment_dislike'] = D('UserBehavior')->where(array('dislike_comment_id' => $item['id']))->distinct(true)->field('user_id')->count();
        }
        $this->assign('comments', $comment);
        D('Posts')->where(array('id' => $post_id))->setInc('views');
        $this->assign('list', 'current_page_item');
        $this->ranking();
        $this->latest_problem();
        $this->display();
    }

    //帖子
    public function dataList()
    {
        $curPage = I('post.page', 1);              // 当前页
        $pageSize = I('post.pSize', 8);           // 每页显示几条数据
        $u = D('User')->where(array('is_show' => 1))->getField('id', true);
        $where['is_show'] = 1;
        $where['is_audit'] = array('in', '1,2');
        $where['user_id'] = array('in', $u);
        $where['is_draft'] = 0;
        $post = D('Posts')->where($where)->order('updated_timestamp desc')->page($curPage, $pageSize)->select();
        foreach ($post as $k => $item) {
            $posts[$k]['id'] = $item['id'];
            $posts[$k]['user_id'] = $item['user_id'];
            $posts[$k]['title'] = $item['title'];
            $posts[$k]['content'] = htmlspecialchars_decode($item['content']);
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
            $posts[$k]['head_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('picture'), 100), D('User')->where(array('is_show' => 1, 'id' => $item['user_id']))->getField('gender'))));
            if (D('UserBehavior')->where(array('user_id' => session('cooking_user_id'), 'like_post_id' => $item['id']))->find() == '') {
                $like_html = '<i class="fa fa-thumbs-o-up"></i>点赞';
            } else {
                $like_html = '<i class="fa fa-thumbs-o-down"></i>取消点赞';
            }
            $posts[$k]['like_html'] = $like_html;
        }
        $this->ajaxReturn(array('code' => 200, 'data' => $posts, 'curPage' => $curPage));
    }

    //回复
    public function commentDataList()
    {
        $curPage = I('post.page', 1);              // 当前页
        $pageSize = I('post.pSize', 5);           // 每页显示几条数据
        $post_id = I('post.post_id', 0);
        $comment = D('PostsReplies')->where(array('post_id' => $post_id))->order('created_timestamp desc')->page($curPage, $pageSize)->select();
        foreach ($comment as $k => $item) {
            $comment[$k]['from_user_name'] = D('User')->getFieldById($item['from_user_id'], 'nickname');
            $comment[$k]['from_user_header_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['from_user_id']))->getField('picture'), 100), D('User')->where(array('is_show' => 1, 'id' => $item['from_user_id']))->getField('gender'))));
            $to_user_name = D('User')->getFieldById($item['to_user_id'], 'nickname');
            if (empty($to_user_name)) {
                $to_user_name = '文章';
            }
            $comment[$k]['to_user_name'] = $to_user_name;
            $comment[$k]['to_user_header_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb(D('User')->where(array('is_show' => 1, 'id' => $item['to_user_id']))->getField('picture'), 100), D('User')->where(array('is_show' => 1, 'id' => $item['to_user_id']))->getField('gender'))));
            if (D('Posts')->where(array('is_show' => 1, 'id' => $post_id))->getField('user_id') == $item['from_user_id']) {
                $comment[$k]['author'] = '(作者)';
            }
            $comment[$k]['content'] = htmlspecialchars_decode($item['content']);
            $comment[$k]['created_timestamp'] = date('Y-m-d H:i', $item['created_timestamp']);
        }
        $this->ajaxReturn(array('code' => 200, 'data' => $comment, 'curPage' => $curPage));
    }

    //邀请人列表
    public function invitesList()
    {
        $post_id = I('post.post_id', 0);
        $user_id = I('post.user_id', 0);
        $topic = I('post.topic');
        $curPage = I('post.page', 1);              // 当前页
        $pageSize = I('post.pSize', 4);           // 每页显示几条数据
        $post = D('Posts')->field('id')->where(array('topic' => $topic, 'is_show' => 1))->buildSql();
        $users = D('PostsReplies')->field('from_user_id')->where('post_id in ' . $post)->distinct(true)->buildSql();
        $user = D('UserBehavior')->field('be_invited_user_id')->where(array('invite_post_id' => $post_id))->distinct(true)->buildSql();
        $where['is_show'] = 1;
        $where['id'] = array('neq', $user_id);
        $total = D('User')->where('id in ' . $users)->where('id not in' . $user)->where($where)->count();  // 总条数
        $totalPage = ceil($total / $pageSize);    // 总页数
        $lastPage = $curPage - 1 <= 0 ? $curPage : $curPage - 1;  //上一页
        $nextPage = $curPage + 1 > $totalPage ? $curPage : $curPage + 1;   //下一页
        $r = D('User')->where('id in ' . $users)->where('id not in' . $user)->where($where)->page($curPage, $pageSize)->select();
        foreach ($r as $k => $item) {
            $r[$k]['head_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb($item['picture'], 100), $item['gender'])));
            $r[$k]['topic_name'] = D('PostsSetting')->getFieldById($topic, 'name');
        }
        if (empty($r)) {
            $this->ajaxReturn(array('code' => 200, 'msg' => '没有该类话题的用户可以邀请'));
        }
        $this->ajaxReturn(array('code' => 200, 'data' => $r, 'curPage' => $curPage, 'lastPage' => $lastPage, 'nextPage' => $nextPage));
    }

    public function sliders()
    {
        $banner = D('Banner')->field('id,url')->order('rank desc')->select();
        foreach ($banner as $k => $item) {
            $banner[$k]['picture'] = get_access_url(get_picture_path(get_picture($item['url'])));
        }
        $this->assign('sliders', $banner);
    }

    //第二栏目
    public function courses_two()
    {

        $courses = D('Course')->where(array('column' => 0,'is_show'=>1))->order('updated_timestamp desc')->page(1, 9)->select();
        foreach ($courses as $k => $item) {
            $course[$k]['id'] = $item['id'];
            $course[$k]['class_hour'] = $item['class_hour'];
            $course[$k]['title'] = $item['title'];
            if ($item['price'] != 0) {
                $course[$k]['course_price'] = '￥' . $item['price'];
            } else {
                $course[$k]['course_price'] = '免费';
            }
            if ($item['is_new'] == 1) {
                $tips = 1;
            } else if ($item['is_hot'] == 1) {
                $tips = 2;
            } else {
                $tips = 0;
            }
            $course[$k]['tips'] = $tips;
            if (!empty($item['picture'])) {
                $course_pic = explode(',', $item['picture']);
                foreach ($course_pic as $i => $j) {
                    $course_pic[$i] = get_access_url(get_picture_path(get_picture(get_thumb($j, 195))));
                }
            }
            $course[$k]['picture'] = $course_pic[0];

        }
        $this->assign('course_two', $course);
        $courseArticle = D('CourseSetting')->where(array('is_show' => 1))->select();
        foreach ($courseArticle as $k => $v) {
            $courseArticle[$k]['picture'] = get_access_url(get_picture_path(get_picture(get_thumb($v['picture'], 458))));
        }
        $this->assign('course_article', $courseArticle);
        $course_ad = D('WebSetting')->where(array('field' => 'picture_path'))->find();
        if (empty($course_ad['value'])) {
            $course_ad = get_access_url(get_picture_path(get_picture(C('DEFAULT_IMAGE'))));
        }
        $course_ad = get_access_url(get_picture_path(get_picture(get_thumb($course_ad['value'], 470))));
        $this->assign('course_ad', $course_ad);
    }

    //第三栏目
    public function courses_three()
    {
        $courses = D('Course')->where(array('column' => 1,'is_show'=>1))->order('updated_timestamp desc')->page(1, 6)->select();
        foreach ($courses as $k => $item) {
            $course[$k]['id'] = $item['id'];
            $course[$k]['title'] = $item['title'];
            $course[$k]['description'] = t_substr($item['description'], 0, 30, 'utf-8');
            if (!empty($item['picture'])) {
                $course_pic = explode(',', $item['picture']);
                foreach ($course_pic as $i => $j) {
                    $course_pic[$i] = get_access_url(get_picture_path(get_picture(get_thumb($j, 100))));
                }
            }
            $course[$k]['picture'] = $course_pic[0];

        }
        $this->assign('course_three', $course);
    }

    //第四栏目
    public function posts_four()
    {
        $post = D('Posts')->where(array('is_audit' => array('in', '1,2'), 'is_draft' => 0, 'is_show' => 1))->field('title,user_id,id')->order('updated_timestamp desc')->page(1, 5)->select();
        foreach ($post as $k => $v) {
            $user = D('User')->where(array('id' => $v['user_id'], 'is_show' => 1))->find();
            $post[$k]['head_img'] = get_access_url(get_picture_path(get_header_picture(get_thumb($user['picture'], 100), $user['gender'])));
        }
        $this->assign('posts_four', $post);
    }

    //话题筛选
    public function topic_screen()
    {
        $topic = D('PostsSetting')->where(array('type' => 2))->select();
        $this->assign('topic_screen', $topic);
    }

    //忘记密码
    public function security_code()
    {
        $account = I('post.account', '');
        $phone = I('post.phone', '');
        $sms_code = I('post.sms_code', '');
        $u_phone = D('User')->getFieldByAccount($account, 'phone');
        if($u_phone != $phone){
            $this->ajaxReturn(array('code' => 400, 'msg' => '当前输入的手机号码不是该账号绑定的手机号码'));
        }
        $code = D('User')->where(array('account'=>$account,'phone'=>$phone))->getField('sms_code');
        if(empty($sms_code)){
            $code = mb_substr(rand(1,99).rand(1,99) + rand(1,99).rand(1,99),0,4);
            $r = D('User')->where(array('account'=>$account,'phone'=>$phone))->setField('sms_code',$code);
            if($r != false){
                $passTime = time();
                $smsresult = $this->sendTemplateSMS(18665407264,array($code,30),1);
                if($smsresult['result'] != true){
                    $this->ajaxReturn(array('code' => $smsresult['code'], 'msg' => $smsresult['msg']));
                }
                D('User')->where(array('account'=>$account,'phone'=>$phone))->setField('sms_passTime',$passTime);
                $this->ajaxReturn(array('code' => 200,'enable'=>1,'msg'=>'请查收短信'));
            }
        }
        $passTime = D('User')->where(array('account'=>$account,'phone'=>$phone))->getField('sms_passTime');
        if($code == $sms_code && time() - $passTime < 1800){
            D('User')->where(array('account'=>$account,'phone'=>$phone))->setField('sms_code','');
            D('User')->where(array('account'=>$account,'phone'=>$phone))->setField('sms_passTime','');
            $this->ajaxReturn(array('code' => 200,'reset'=>1,'msg'=>'验证成功'));
        }
        $this->ajaxReturn(array('code' => 400, 'msg' => '获取验证码失败'));
    }

}