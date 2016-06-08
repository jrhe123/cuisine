<?php
/**
 * Created by PhpStorm.
 * User: Dickie
 * Date: 2015/9/15
 * Time: 15:48
 */

namespace Admin\Controller;
class UserController extends AuthController
{
    public function index()
    {
        $this->display();
    }

    public function tableData()
    {
        $tableObj = D(CONTROLLER_NAME);
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
            $data['data'][$k][1] = $item['account'];
            $data['data'][$k][2] = '<img style="width:100px;" src="/' . get_picture_path(get_header_picture(get_thumb($item['picture'], 100),$item['gender'])) . '">';
            $data['data'][$k][3] = $item['nickname'];
            $data['data'][$k][4] = $item['phone'];
            $data['data'][$k][5] = date('Y-m-d H:i:s', $item['created_timestamp']);
            $data['data'][$k][6] = $isShowHtml[$item['is_show']];
            $data['data'][$k][7] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>
            <a class="btn green btn-sm margin-right-10" href="' . U("look", array('id' => $item['id'], 'action' => 'view')) . '">
                <i class="fa fa-eye"> 查看 </i>
            <a class="btn blue btn-sm margin-right-10" href="' . U("edit", array('id' => $item['id'])) . '">
                <i class="fa fa-edit"> 编辑 </i>';
            if ($item['is_show'] == 0) {
                $data['data'][$k][7] .=
                    '<a class="btn btn-sm blue" href="javascript:;" onclick="show(this)"> 恢复</a>';
            } else if ($item['is_show'] == 1) {
                $data['data'][$k][7] .=
                    '<a class="btn btn-sm yellow" href="javascript:;" onclick="hide(this)"> 禁用</a>';
            }
        }
        return $this->ajaxReturn($data);
    }

    public function save()
    {
        $id = I('post.id', 0);
        $pwd = I('post.pwd', '');
        $phone = I('post.phone','');
        $_POST['pwd'] = encrypt_pass($pwd);
        $picture = I('post.picture_path', '');
        $_POST['picture'] = $picture;
        $data = I('post.');
        if ($id > 0) {
            $r = D(CONTROLLER_NAME)->where(array('pwd'=>array('like','%'.$pwd.'%'),'id'=>$id))->find();
            if($r!=false || $r !=null){
                unset($data['pwd']);
            }
            $this->saveAuth(2, D(CONTROLLER_NAME), $data);
        } else {
            if(D('User')->where(array('phone'=>$phone))->find() >0){
                $this->_404('抱歉，该手机已注册');
            }
            $account = I('post.account', '');
            $nickname = I('post.nickname', '');
            $where['account'] = array('like', '%' . $account . '%');
            $where['nickname'] = array('like', '%' . $nickname . '%');
            $where['_logic'] = 'or';
            $map['_complex'] = $where;
            $r = D(CONTROLLER_NAME)->where($map)->find();
            if ($r != false || $r != null) {
                $this->_404('抱歉，账号或昵称已存在');
            }
            $data['created_timestamp'] = time();
            $this->saveAuth(1, D(CONTROLLER_NAME), $data);
        }
    }

    public function look()
    {
        $this->edit();
    }

    public function edit()
    {
        $id = I('get.id', 0);
        $user = D(CONTROLLER_NAME)->find($id);
        $default_header_img = C('DEFAULT_HEADER_IMG');

        if (empty($user['picture'])) {
            $user['picture'] = array('url' => get_access_url(get_picture_path(get_picture($default_header_img[$user['gender']]))), 'path' => '');
        }else{
            $user['picture'] = array('url' =>  '/'.get_picture_path(get_header_picture(get_thumb($user['picture'], 100),$user['gender'])), 'path' => $user['picture']);
        }
        if (empty($user)) {
            $this->_404('没有找到该用户');
        }
        $this->assign('picture', $user['picture']);
        $this->assign($user);
        $this->display('form');
    }

    public function add()
    {
        $picture = array('url' => get_access_url(get_picture_path(get_picture(C('DEFAULT_IMAGE')))), 'path' => '');
        $this->assign('picture', $picture);
        $this->display('form');
    }

    // 删除
    public function del()
    {
        $id = I('post.id', 0);
        $r = D(CONTROLLER_NAME)->where(array('id' => $id))->delete();
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
        $r = D(CONTROLLER_NAME)->where(array('id' => $id))->setField('is_show', 0);
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
        $r = D(CONTROLLER_NAME)->where(array('id' => $id))->setField('is_show', 1);
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }
}