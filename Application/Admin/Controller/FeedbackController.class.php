<?php
/**
 * Created by PhpStorm.
 * User: Dickie
 * Date: 2015/10/5
 * Time: 10:02
 */

namespace Admin\Controller;

class FeedbackController extends AuthController{

    public function tableData(){
        $tableObj = D('Feedback');
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
            $data['data'][$k][1] = $item['name'];
            $data['data'][$k][2] = $item['email'];
            $data['data'][$k][3] = D('User')->getFieldById($item['user_id'],'phone');
            $data['data'][$k][4] = htmlspecialchars_decode($item['content']);
            $data['data'][$k][5] = date('Y-m-d H:i:s',$item['created_timestamp']);
            $data['data'][$k][6] = '<a class="btn btn-sm red margin-right-10" href="javascript:;" onclick="del(this)"> 删除</a>';
        }
        return $this->ajaxReturn($data);
    }

    // 删除
    public function del()
    {
        $id = I('post.id', 0);
        $r = D('Feedback')->where(array('id' => $id))->delete();
        if ($r === false) {
            $this->_500();
        } else {
            $this->outputJson(200, '操作成功');
        }
    }
}