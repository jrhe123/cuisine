<?php
namespace Admin\Model;

use Think\Model;

class CaseModel extends Model
{

    // 添加数据
    public function mAdd($adminId, array $data, array $attachments=array(), $way='后台') {
        $data['created_timestamp'] = time();
        $data['created_way'] = $way;
        // 默认为新建档
        $data['status'] = 0;
        // 如果不是管理员创建的案件需要管理员审核通过才能显示
        $adminRole = D('Admin')->getFieldById($adminId, 'role');
        if ($adminRole == 'admin') {
            $data['is_audit'] = 1;
        } else {
            $data['is_audit'] = 0;
        }
        $data['admin_id'] = intval($adminId);
        $this->create($data);
        $r = $id = $this->add();
        $modifyData = array('modify_desc' => '创建了案件', 'admin_id' => $adminId, 'case_id' => $id, 'modify_timestamp' => time());
        $_r = D('CaseModifyLog')->add($modifyData);
        // 保存附件
        $__r = $this->saveAttachment($attachments, $id);
        // 保存申请执行人
        $applyPerson = $data['apply_exec_p_name'];
        $___r = $this->saveApplyExecPerson($applyPerson, $id);
        // 保存被执行人
        $bePerson = $data['be_exec_p_name'];
        $____r = $this->saveBeExecPerson($bePerson, $id);
        // 保存参与者
        $participant = $data['participant'];
        $_____r = $this->saveParticipant($participant, $id);
        return $r && $_r && $__r && $___r && $____r && $_____r;
    }

    // 保存数据
    public function mSave($adminId, array $data, array $attachments=array(), $way='后台') {
        $id = $data['id'];
        $data['updated_timestamp'] = time();
        $this->create($data);
        $r = $this->save();

        $case = $this->find($id);
        $fields = C('CASE_FIELDS');
        $modifyDesc = '';
        foreach ($case as $k => $v) {
            // 记录每个字段的修改记录
            $newValue = $data[$k];
            if (array_key_exists($k, $fields) && $v != $newValue) {
                $desc = '“'.$fields[$k].'” 由 “'.$v.'” 改成了 “'.$newValue.'”';
                if ($modifyDesc == '') {
                    $modifyDesc = $desc;
                } else {
                    $modifyDesc .= '<br>'.$desc;
                }
            }
        }
        // 保存附件
        $__r = $this->saveAttachment($attachments, $id);
        // 保存申请执行人
        $applyPerson = $data['apply_exec_p_name'];
        $___r = $this->saveApplyExecPerson($applyPerson, $id);
        // 保存被执行人
        $bePerson = $data['be_exec_p_name'];
        $____r = $this->saveBeExecPerson($bePerson, $id);
        // 保存参与者
        $participant = $data['participant'];
        $_____r = $this->saveParticipant($participant, $id);
        $______r = true;
        if (!empty($modifyDesc)) {
            $modifyData = array('modify_desc' => $modifyDesc, 'admin_id' => $adminId, 'case_id' => $id, 'modify_timestamp' => time());
            $______r = D('CaseModifyLog')->add($modifyData);
        }
        return $r && $__r && $___r && $____r && $_____r && $______r;
    }

    // 保存附件
    public function saveAttachment($attachments, $caseId) {
        // 删除旧附件
        $caseAttachmentModel = D('CaseAttachment');
        $r = $caseAttachmentModel->where(array('case_id' => $caseId))->delete();

        $attachmentData = array();
        foreach ($attachments as $k => $path) {
            $attachmentData[$k]['path'] = $path;
            $attachmentData[$k]['case_id'] = $caseId;
        }
        $_r = true;
        if (!empty($attachmentData)) {
            $_r = $caseAttachmentModel->addAll($attachmentData);
        }
        if ($r !== false && $_r !== false) {
            return true;
        }
        return false;
    }

    // 保存申请执行人
    public function saveApplyExecPerson($applyPerson, $caseId) {
        // 删除旧数据
        $caseApplyExecPModel = D('CaseApplyExecP');
        $r = $caseApplyExecPModel->where(array('case_id' => $caseId))->delete();

        $applyPersonArr = $this->splitName($applyPerson);
        $applyData = array();
        foreach ($applyPersonArr as $k => $p) {
            $applyData[$k]['apply_exec_p_name'] = $p;
            $applyData[$k]['case_id'] = $caseId;
        }
        $_r = true;
        if (!empty($applyData)) {
            $_r = $caseApplyExecPModel->addAll($applyData);
        }
        if ($r !== false && $_r !== false) {
            return true;
        }
        return false;
    }

    // 保存被执行人
    public function saveBeExecPerson($beExecPerson, $caseId) {
        // 删除旧数据
        $caseBeExecPModel = D('CaseBeExecP');
        $r = $caseBeExecPModel->where(array('case_id' => $caseId))->delete();

        $bePersonArr = $this->splitName($beExecPerson);
        $beData = array();
        foreach ($bePersonArr as $k => $p) {
            $beData[$k]['be_exec_p_name'] = $p;
            $beData[$k]['case_id'] = $caseId;
        }
        $_r = true;
        if (!empty($beData)) {
            $_r = $caseBeExecPModel->addAll($beData);
        }
        if ($r !== false && $_r !== false) {
            return true;
        }
        return false;
    }

    // 保存参与者
    public function saveParticipant($participant, $caseId) {
        // 删除旧数据
        $caseParticipantModel = D('CaseParticipant');
        $r = $caseParticipantModel->where(array('case_id' => $caseId))->delete();

        $participantArr = explode(',', $participant);
        $participantData = array();
        $adminModel = D('Admin');
        foreach ($participantArr as $k => $p) {
            $pAdminId =$adminModel->getFieldByName($p, 'id');
            if ($pAdminId <= 0) {
                continue;
            }
            $participantData[$k]['participant_admin_id'] = $pAdminId;
            $participantData[$k]['case_id'] = $caseId;
        }
        $_r = true;
        if (!empty($participantData)) {
            $_r = $caseParticipantModel->addAll($participantData);
        }
        if ($r !== false && $_r !== false) {
            return true;
        }
        return false;
    }

    /**
     * @param $nameStr
     */
    public function splitName($nameStr) {
        $char = '';
        if (strpos($nameStr, '、') > 0) {
            $char = '、';
        } else if (strpos($nameStr, ',') > 0) {
            $char = ',';
        } else if (strpos($nameStr, '，') > 0) {
            $char = '，';
        } else if (strpos($nameStr, ',') > 0) {
            $char = ',';
        }
        if ($char == '') {
            return $nameStr;
        }
        $arr = explode($char, $nameStr);
        return $arr;
    }
}