<?php
namespace Admin\Controller;
class UploadController extends AuthController
{
    // 单图片上传
    public function singlePicture()
    {
        $size = I('get.size',0);
        $sizes = explode('-',$size);
        $width = $sizes[0];
        $height = $sizes[1];
        $thumb = I('get.thumb', 0);
        if (!empty($_FILES)) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 1024 * 1024;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'bmp');// 设置附件上传类型
            $upload->rootPath = './Public/'; // 设置附件上传根目录
            $upload->savePath = 'uploads/';
            $upload->saveName = 'time'; // 采用时间戳命名
            // 上传单个文件
            $infos = $upload->upload();
            if (!$infos) {// 上传错误提示错误信息
                $this->ajaxReturn(array('code' => 400, 'path' => '', 'msg' => $upload->getError()));
            } else {// 上传成功 获取上传文件信息
                $info = current($infos);
                $path = $info['savepath'] . $info['savename'];
                // 生成缩略图，宽800和宽400的缩略图
                create_default_thumb($path);
                if($width != ''){
                    create_thumb(get_picture_path($path), $width, $height * (1 / 1), \Think\Image::IMAGE_THUMB_FIXED);
                }
//                if ($info['key'] == 'factory') { // 工厂/档口图片生成150x150的缩略图
//                    create_thumb('./Public/' . $path, 150, 150, \Think\Image::IMAGE_THUMB_FIXED);
//                } else if ($info['key'] == 'product') { // 产品古生成150x150、640x640的缩略图
//                    // 居中裁剪
//                    create_thumb('./Public/' . $path, 640, 640, \Think\Image::IMAGE_THUMB_CENTER);
//                    $thumb640 = get_thumb('Public/' . $path, 640);
//                    // 缩放150x150
//                    create_thumb('./' . $thumb640, 150, 150, \Think\Image::IMAGE_THUMB_FIXED);
//                }
                if($thumb != 0){
                    $thumb_path = get_thumb($path, $thumb);
                }
                $this->ajaxReturn(array('code' => 200, 'path' => $path, 'thumb_path'=>$thumb_path, 'msg' => '上传成功'));
            }
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '非法请求'));
        }
    }

    // 上传文件
    public function singleFile()
    {
        $exts = I('get.exts', '');
        $column = I('get.column', '');
        $extArr = explode(',', $exts);
        if (!empty($_FILES)) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 2 * 1024 * 1024;// 设置附件上传大小
            $upload->exts = $extArr;// 设置附件上传类型
            $upload->rootPath = './Public/'; // 设置附件上传根目录
            $upload->savePath = 'uploads/' . $column . '/';
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

    // 头像上传
    public function headimg()
    {
        if (!empty($_FILES)) {
            $upload = new \Think\Upload();// 实例化上传类
            $upload->maxSize = 1024 * 1024;// 设置附件上传大小
            $upload->exts = array('jpg', 'gif', 'png', 'jpeg', 'bmp');// 设置附件上传类型
            $upload->rootPath = './Public/'; // 设置附件上传根目录
            $upload->savePath = 'uploads/';
            $upload->saveName = 'time'; // 采用时间戳命名
            // 上传单个文件
            $infos = $upload->upload();
            if (!$infos) {// 上传错误提示错误信息
                $this->ajaxReturn(array('code' => 400, 'path' => '', 'msg' => $upload->getError()));
            } else {// 上传成功 获取上传文件信息
                $info = current($infos);
                $path = $info['savepath'] . $info['savename'];
                // 生成缩略图，宽400和宽200、100的缩略图
                create_head_img_thumb($path);
                $this->ajaxReturn(array('code' => 200, 'path' => $path, 'msg' => '上传成功'));
            }
        } else {
            $this->ajaxReturn(array('code' => 400, 'msg' => '非法请求'));
        }
    }
}