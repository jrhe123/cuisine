<?php
/**
 * Created by PhpStorm.
 * User: Dickie
 * Date: 2015/9/19
 * Time: 13:47
 */
namespace Home\Controller;
class ActionController extends AuthController
{
    public function reply()
    {
        $post_id = I('post.post_id',0);
        $from_user_id = I('post.from_user_id', 0);
        $to_user_id = I('post.to_user_id', 0);
        $is_audit = I('post.is_audit');
        $content = I('post.content', '');
        $model = D('PostsReplies');
        $data = I('post.');
        if ($is_audit == 'true') {
            $model = D('Posts');
            $data['class'] = I('post.class_id', 0);
            $data['is_audit'] = 0;
            $data['updated_timestamp'] = time();
            $data['user_id'] = $from_user_id;
        } else {
            $n = stripos($content, ':');
            if ($n) $content = substr($content, $n + 1);
            $data['content'] = $content;
        }
        $data['created_timestamp'] = time();
        $r = $model->data($data)->add();
        if ($r != false) {
            if ($is_audit == 'true') {
                $result = D('UserBehavior')->data(array('user_id' => $from_user_id, 'user_post_id' => $r))->add();
            } else {
                D('UserBehavior')->where(array('be_invited_user_id'=>$from_user_id,'invite_post_id'=>$post_id))->delete();
                $result = D('UserBehavior')->data(array('user_id' => $from_user_id, 'reply_post_id' => $r))->add();
            }
            if ($result != false) {
                $this->ajaxReturn(array('code' => 200, 'msg' => '添加成功'));
            } else {
                $this->ajaxReturn(array('code' => 400, 'msg' => '添加失败'));
            }
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '添加失败'));
        }
    }

    public function likePosts()
    {
        $post_id = I('post.post_id', 0);
        $user_id = I('post.user_id', 0);
        $model = D('UserBehavior');
        $data = I('post.');
        $data['like_post_id'] = $post_id;
        unset($data['post_id']);
        M()->startTrans();
        if ($model->where(array('user_id' => $user_id, 'like_post_id' => $post_id))->find() == '') {
            $model->data($data)->add();
            M()->commit();
            $ulike = $model->where(array('like_post_id' => $post_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '点赞成功', 'ulike' => 1, 'count' => $ulike));
        } else {
            $model->where(array('user_id' => $user_id, 'like_post_id' => $post_id))->delete();
            M()->commit();
            $ulike = $model->where(array('like_post_id' => $post_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '取消点赞成功', 'ulike' => 2, 'count' => $ulike));
        }

    }

    public function dislikePosts()
    {
        $post_id = I('post.post_id', 0);
        $user_id = I('post.user_id', 0);
        $model = D('UserBehavior');
        $data = I('post.');
        $data['dislike_post_id'] = $post_id;
        unset($data['post_id']);
        M()->startTrans();
        if ($model->where(array('user_id' => $user_id, 'dislike_post_id' => $post_id))->find() == '') {
            $model->data($data)->add();
            M()->commit();
            $dislike = $model->where(array('dislike_post_id' => $post_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '踩帖成功', 'count' => $dislike));
        } else {
            $model->where(array('user_id' => $user_id, 'dislike_post_id' => $post_id))->delete();
            M()->commit();
            $dislike = $model->where(array('dislike_post_id' => $post_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '取消踩帖成功', 'count' => $dislike));
        }

    }

    public function likeComment()
    {
        $comment_id = I('post.comment_id', 0);
        $user_id = I('post.user_id', 0);
        $model = D('UserBehavior');
        $data = I('post.');
        $data['like_comment_id'] = $comment_id;
        unset($data['comment_id']);
        M()->startTrans();
        if ($model->where(array('user_id' => $user_id, 'like_comment_id' => $comment_id))->find() == '') {
            $model->data($data)->add();
            M()->commit();
            $ulike = $model->where(array('like_comment_id' => $comment_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '点赞成功', 'ulike' => 1, 'count' => $ulike));
        } else {
            $model->where(array('user_id' => $user_id, 'like_comment_id' => $comment_id))->delete();
            M()->commit();
            $ulike = $model->where(array('like_comment_id' => $comment_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '取消点赞成功', 'ulike' => 2, 'count' => $ulike));
        }

    }

    public function dislikeComment()
    {
        $comment_id = I('post.comment_id', 0);
        $user_id = I('post.user_id', 0);
        $model = D('UserBehavior');
        $data = I('post.');
        $data['dislike_comment_id'] = $comment_id;
        unset($data['comment_id']);
        M()->startTrans();
        if ($model->where(array('user_id' => $user_id, 'dislike_comment_id' => $comment_id))->find() == '') {
            $model->data($data)->add();
            M()->commit();
            $dislike = $model->where(array('dislike_comment_id' => $comment_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '踩！', 'count' => $dislike));
        } else {
            $model->where(array('user_id' => $user_id, 'dislike_comment_id' => $comment_id))->delete();
            M()->commit();
            $dislike = $model->where(array('dislike_comment_id' => $comment_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '取消踩！成功', 'count' => $dislike));
        }

    }

    public function collect()
    {
        $collect_post_id = I('post.collect_post_id', 0);
        $user_id = I('post.user_id', 0);
        $model = D('UserBehavior');
        $data = I('post.');
        unset($data['comment_id']);
        M()->startTrans();
        if ($model->where(array('user_id' => $user_id, 'collect_post_id' => $collect_post_id))->find() == '') {
            $model->data($data)->add();
            M()->commit();
            $collect = $model->where(array('collect_post_id' => $collect_post_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '收藏成功', 'count' => $collect, 'success' => 1));
        } else {
            $model->where(array('user_id' => $user_id, 'collect_post_id' => $collect_post_id))->delete();
            M()->commit();
            $collect = $model->where(array('collect_post_id' => $collect_post_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '取消收藏成功', 'count' => $collect, 'success' => 2));
        }
    }

    public function focus()
    {
        $attention_user_id = I('post.attention_user_id', 0);
        $user_id = I('post.user_id', 0);
        $model = D('UserBehavior');
        $data = I('post.');
//        unset($data['attention_user_id']);
        M()->startTrans();
        if ($model->where(array('user_id' => $user_id, 'attention_user_id' => $attention_user_id))->find() == '') {
            $model->data($data)->add();
            M()->commit();
            $focus = $model->where(array('attention_user_id' => $attention_user_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '关注成功', 'count' => $focus, 'success' => 1));
        } else {
            $model->where(array('user_id' => $user_id, 'attention_user_id' => $attention_user_id))->delete();
            M()->commit();
            $focus = $model->where(array('attention_user_id' => $attention_user_id))->distinct(true)->field('user_id')->count();
            $this->ajaxReturn(array('code' => 200, 'msg' => '取消收藏成功', 'count' => $focus, 'success' => 2));
        }
    }

    public function del()
    {
        $action = I('post.action', '');
        $user_id = I('post.user_id', 0);
        $id = I('post.id');
        if ($action == 'posts') {
            $result = D('UserBehavior')->where(array('user_id' => $user_id, 'user_post_id' => $id))->delete();
        } else if ($action == 'answers') {
            $result = D('UserBehavior')->where(array('user_id' => $user_id, 'reply_post_id' => $id))->delete();
        } else if ($action == 'course') {
            $result = D('UserBehavior')->where(array('user_id' => $user_id, 'course_id' => $id))->delete();
            D('CourseApply')->where(array('user_id' => $user_id, 'course_id' => $id))->delete();
        } else if ($action == 'collect') {
            $result = D('UserBehavior')->where(array('user_id' => $user_id, 'collect_post_id' => $id))->delete();
        } else if ($action == 'draft') {
            $result = D('UserBehavior')->where(array('user_id' => $user_id, 'draft_post_id' => $id))->delete();
            D('Posts')->where(array('is_draft'=>1,'id'=>$id))->delete();
        }
        if ($result != false) {
            $this->ajaxReturn(array('code' => 200, 'msg' => '删除成功'));
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '删除失败，请重试'));
        }
    }

    public function invite()
    {
        $post_id = I('post.post_id');
        $user_id = I('post.user_id');
        $be_invited_user_id = I('post.be_invited_user_id');
        $data = I('post.');
        $data['invite_post_id'] = $post_id;
        $model = D('UserBehavior');
        if ($model->where(array('user_id' => $user_id, 'be_invited_user_id' => $be_invited_user_id))->find() == '') {
            $r = $model->data($data)->add();
            if ($r != false) {
                $this->ajaxReturn(array('code' => 200, 'msg' => '邀请成功'));
            } else {
                $this->ajaxReturn(array('code' => 400, 'msg' => '邀请失败，请重试'));
            }
        } else {
            $this->ajaxReturn(array('code' => 200, 'msg' => '该用户已被邀请'));
        }
    }

    public function message_collect()
    {
        $user_id = I('post.user_id');
        $collect = D('UserBehavior')->where(array('be_invited_user_id' => $user_id))->distinct(true)->count();
        $this->ajaxReturn(array('code' => 200, 'collect' => $collect));
    }
}