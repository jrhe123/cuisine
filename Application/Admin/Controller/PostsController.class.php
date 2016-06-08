<?php
namespace Admin\Controller;

class PostsController extends AuthController
{
    public function index()
    {
        $auditStatus = I('get.audit_status', 0);
        $_GET['audit_status'] = $auditStatus;

        $adminArr = D('Admin')->getField('name', true);
        $adminArr = array_map(function ($v) {
            return '"' . $v . '"';
        }, $adminArr);
        $admins = implode(',', $adminArr);
        $this->assign('admins', $admins);

//        $companyStatus = D('IndComMsg')->where(array('status' => array('neq', '')))->group('status')->getField('status', true);
//        $this->assign('company_status_arr', $companyStatus);
        $this->display('index');
    }

    public function setting_index()
    {
        $type = I('get.type', 0);
        if (empty($type))
            $_GET['type'] = 1;
        $this->display();
    }

    public function replies(){
        $this->display('replies_index');
    }

    public function tableData()
    {
//        $searchArr = I('post.search');
        $auditStatus = I('get.audit_status', 0);
        $tableObj = D('Posts');
        $order = $this->queryOrder();
        $where = $this->queryWhere();
        if ($auditStatus != 0) {
            $where['is_audit'] = array('neq', 0);
        } else {
            $where['is_audit'] = 0;
        }
        $where['is_draft'] = 0;
        $total = $tableObj->where($where)->count();
        $items = $tableObj->where($where)->limit($this->offset, $this->pSize)->order($order)->select();
        $data["draw"] = $this->draw;
        $data["recordsTotal"] = $total;
        $data["recordsFiltered"] = $total;
        $data['data'] = array();
        $isShowHtml = C('isShowHtml');
        foreach ($items as $k => $item) {
            $isShow = $item['is_show'];
            $data['data'][$k][0] = $k + 1 . '<input type="hidden" name="id" value="' . $item['id'] . '">';
            $data['data'][$k][1] = wrap($item['title'], 20);
            $data['data'][$k][2] = D('PostsSetting')->getFieldById($item['topic'],'name');
            $data['data'][$k][3] = D('PostsSetting')->getFieldById($item['class'],'name');
            $data['data'][$k][4] = $item['like'];
            $data['data'][$k][5] = date('Y-m-d H:i:s', $item['created_timestamp']);
            $data['data'][$k][6] = $isShowHtml[$item['is_show']];
            if ($item['is_audit'] == 1) {
                $is_audit = '加精';
            } else if ($item['is_audit'] == 2) {
                $is_audit = '普通';
            }else{
                $is_audit = '申请加精';
            }
            $data['data'][$k][7] = $is_audit;
            $data['data'][$k][8] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>
            <a class="btn green btn-sm margin-right-10" href="' . U("look", array('id' => $item['id'], 'action' => 'view')) . '">
                <i class="fa fa-eye"> 查看 </i>
            <a class="btn blue btn-sm margin-right-10" href="' . U("edit", array('id' => $item['id'])) . '">
                <i class="fa fa-edit"> 编辑 </i>';
            if ($item['is_audit'] == 0) { // 申请加精
                $data['data'][$k][8] .= '
                    <a class="btn purple btn-sm" href="javascript:void(0)" onClick="auditCase(this)">
                        <i class="fa fa-check"> 审核 </i>
                    </a>';
            }
            if ($isShow == 0) {
                $data['data'][$k][8] .=
                    '<a class="btn btn-sm blue" href="javascript:;" onclick="show(this)"> 显示</a>';
            } else if ($isShow == 1) {
                $data['data'][$k][8] .=
                    '<a class="btn btn-sm yellow" href="javascript:;" onclick="hide(this)"> 隐藏</a>';
            }
        }
        return $this->ajaxReturn($data);
    }

    public function settingTableData()
    {
        $type = I('get.type', 1);
        $tableObj = D('PostsSetting');
        $order = $this->queryOrder();
        $where = $this->queryWhere();
        if ($type != 0) {
            $where['type'] = $type;
        }
        $total = $tableObj->where($where)->count();
        $items = $tableObj->where($where)->limit($this->offset, $this->pSize)->order($order)->select();
        $data["draw"] = $this->draw;
        $data["recordsTotal"] = $total;
        $data["recordsFiltered"] = $total;
        $data['data'] = array();
        foreach ($items as $k => $item) {
            $data['data'][$k][0] = $k + 1 . '<input type="hidden" name="id" value="' . $item['id'] . '">';
            if ($item['type'] == 1) {
                $type = '分类';
            } else {
                $type = '话题';
            }
            $data['data'][$k][1] = $type;
            $data['data'][$k][2] = $item['name'];
            $data['data'][$k][3] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>
            <a class="btn blue btn-sm margin-right-10" href="' . U("setting_edit", array('id' => $item['id'])) . '">
                <i class="fa fa-edit"> 编辑 </i></a>';
        }
        return $this->ajaxReturn($data);
    }

    public function repliesTableData(){
        $tableObj = D('PostsReplies');
        $order = $this->queryOrder();
        $where = $this->queryWhere();
        $total = $tableObj->where($where)->count();
        $items = $tableObj->where($where)->limit($this->offset, $this->pSize)->order($order)->select();
        $data["draw"] = $this->draw;
        $data["recordsTotal"] = $total;
        $data["recordsFiltered"] = $total;
        $data['data'] = array();
        foreach ($items as $k => $item) {
            $data['data'][$k][0] = $k + 1 . '<input type="hidden" name="id" value="' . $item['id'] . '">';
            $data['data'][$k][1] = '<a href="'.U("look", array('id' => $item['post_id'], 'action' => 'view')).'">'.D('Posts')->where(array('id'=>$item['post_id']))->getField('title').'</a>';
            $data['data'][$k][2] = D('User')->where(array('id'=>$item['from_user_id']))->getField('nickname');
            $data['data'][$k][3] = D('User')->where(array('id'=>$item['to_user_id']))->getField('nickname') != '' ? D('User')->where(array('id'=>$item['to_user_id']))->getField('nickname') : '<a href="'.U("look", array('id' => $item['post_id'], 'action' => 'view')).'">文章</a>';
            $data['data'][$k][4] = htmlspecialchars_decode($item['content']);
            $data['data'][$k][5] = date('Y-m-d H:i:s',$item['created_timestamp']);
            $data['data'][$k][6] = $item['is_good'] == 1 ? '<span class="label bg-green"> 最佳答案 </span>' : '';
            $data['data'][$k][7] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>';
        }
        return $this->ajaxReturn($data);
    }

    public function add()
    {
        $this->_form();
    }

    public function setting_add()
    {
        $this->_settingForm();
    }

    // 查看
    public function look()
    {
        $this->edit();
    }

    public function edit()
    {
        $id = I('get.id', 0);
        $Post = D('Posts')->find($id);
        if (empty($Post)) {
            $this->_404('没有找到帖子');
        }
        $this->assign($Post);
        $this->_form();
    }

    public function setting_edit()
    {
        $id = I('get.id', 0);
        $Post = D('PostsSetting')->find($id);
        if (empty($Post)) {
            $this->_404('没有找到类别');
        }
        $this->assign($Post);
        $this->_settingForm();
    }

    private function _form()
    {
        $topics = D('PostsSetting')->where(array('type' => 2))->select();
        $this->assign('topics', $topics);

        $types = D('PostsSetting')->where(array('type' => 1))->select();
        $this->assign('types', $types);
        $this->display('form');
    }

    private function _settingForm()
    {
        $this->display('setting_form');
    }

    public function save(){
        $id = I('post.id', 0);
        $data = I('post.');
        if ($id > 0) {
            $data['updated_timestamp'] = time();
            $this->saveAuth(2, D(CONTROLLER_NAME), $data);
        } else {
            $data['created_timestamp'] = time();
            $this->saveAuth(1, D(CONTROLLER_NAME), $data);
        }
    }

    public function saveSetting()
    {
        $id = I('post.id', 0);
        $postModel = D('PostsSetting');
        $postModel->create();
        M()->startTrans();
        // 编辑
        if ($id > 0) {
            $r = $postModel->save();
        } else { // 添加
            $r = $postModel->add();
        }
        if ($r !== false) {
            M()->commit();
            $this->outputJson(200, '保存成功');
        } else {
            M()->rollback();
            $this->_500();
        }
    }

    // 通过审核
    public function audit()
    {
        $adminId = session('cooking_admin_id');
        $id = I('post.case_id', 0);
        if ($id <= 0) {
            $this->_errorParameter();
        }
        $r = D('Posts')->where(array('id' => $id))->setField('is_audit', 1);
        if ($r === false) {
            $this->_500();
        }
        $user_id = D('Posts')->where(array('id'=>$id))->getField('user_id');
        D('User')->where(array('id'=>$user_id))->setInc('point',1);
        $this->outputJson(200, '操作成功');
    }

    // 删除
    public function del()
    {
        $id = I('post.id', 0);
        $r = D('Posts')->where(array('id' => $id))->delete();
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }

    // 删除
    public function delReplies()
    {
        $id = I('post.id', 0);
        $r = D('PostsReplies')->where(array('id' => $id))->delete();
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
        $r = D('Posts')->where(array('id' => $id))->setField('is_show', 0);
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
        $r = D('Posts')->where(array('id' => $id))->setField('is_show', 1);
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }

    // 上传文件
    public function uploadExcel()
    {
        // 删除旧文件
        exec('rm -rf ./Public/uploads/case/*');
        if (!empty($_FILES)) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 5 * 1024 * 1024;// 设置附件上传大小
            $upload->exts = array('xls');// 设置附件上传类型
            $upload->rootPath = './Public/'; // 设置附件上传根目录
            $upload->savePath = 'uploads/case/';
            // 上传单个文件
            $infos = $upload->upload();
            if (!$infos) {// 上传错误提示错误信息
                $this->ajaxReturn(array('code' => 400, 'path' => '', 'msg' => $upload->getError()));
            } else {// 上传成功 获取上传文件信息
                $info = current($infos);
                $path = $info['savepath'] . $info['savename'];
                $this->ajaxReturn(array('code' => 200, 'path' => $path, 'msg' => '上传成功'));
            }
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '非法请求'));
        }
    }

    // 上传附件
    public function uploadAttachment()
    {
        if (!empty($_FILES)) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 10 * 1024 * 1024;// 设置附件上传大小
            $upload->exts = array('xls', 'xlsx', 'word', 'ppt', 'txt', 'jpg', 'gif', 'png', 'jpeg', 'bmp');// 设置附件上传类型
            $upload->rootPath = './Public/'; // 设置附件上传根目录
            $upload->savePath = 'uploads/attachment/case/';
            // 上传单个文件
            $infos = $upload->upload();
            if (!$infos) {// 上传错误提示错误信息
                $this->ajaxReturn(array('code' => 400, 'path' => '', 'msg' => $upload->getError()));
            } else {// 上传成功 获取上传文件信息
                $info = current($infos);
                $path = $info['savepath'] . $info['savename'];
                $this->ajaxReturn(array('code' => 200, 'path' => $path, 'accessPath' => get_access_url($path), 'msg' => '上传成功'));
            }
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '非法请求'));
        }
    }

}