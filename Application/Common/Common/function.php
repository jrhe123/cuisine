<?php
/**
 * 密码加密
 */
function encrypt_pass($pass)
{
    return md5($pass);
}

/**
 * 检查目标文件夹是否存在，如果不存在则自动创建该目录
 *
 * @access      public
 * @param       string      folder     目录路径。不能使用相对于网站根目录的URL
 *
 * @return      bool
 */
function make_dir($folder)
{
    $reval = false;
    if (!file_exists($folder)) {
        /* 如果目录不存在则尝试创建该目录 */
        @umask(0);
        /* 将目录路径拆分成数组 */
        preg_match_all('/([^\/]*)\/?/i', $folder, $atmp);
        /* 如果第一个字符为/则当作物理路径处理 */
        $base = ($atmp[0][0] == '/') ? '/' : '';
        /* 遍历包含路径信息的数组 */
        foreach ($atmp[1] AS $val) {
            if ('' != $val) {
                $base .= $val;
                if ('..' == $val || '.' == $val) {
                    /* 如果目录为.或者..则直接补/继续下一个循环 */
                    $base .= '/';
                    continue;
                }
            } else {
                continue;
            }
            $base .= '/';
            if (!file_exists($base)) {
                /* 尝试创建目录，如果创建失败则继续循环 */
                if (@mkdir(rtrim($base, '/'), 0777)) {
                    @chmod($base, 0777);
                    $reval = true;
                }
            }
        }
    } else {
        /* 路径已经存在。返回该路径是不是一个目录 */
        $reval = is_dir($folder);
    }
    clearstatcache();
    return $reval;
}

/**
 * 生成缩略图
 * @param string $path 原图路径
 * @param string $targetPath 缩略图目录，如果为空则使用“原图目录/thumb/”作为缩略图目录
 * @return boolean
 */
function create_thumb($path, $width = 250, $height = 250, $type = \Think\Image::IMAGE_THUMB_SCALE, $targetPath = '')
{
    // 判断原图是否存在
    if (is_file($path)) {
        $dir = dirname($path);
        $filename = basename($path);
        if ($targetPath == '') {
            $dir = str_ireplace('/thumb640', '', $dir);
            $targetDir = $dir . '/thumb' . $width . '/';
            if (!is_dir($targetDir)) { // 目录不存在则创建
                mkdir($targetDir);
            }
            $targetPath = $targetDir . $filename;
        } else {
            $targetPath = rtrim($targetPath, '/') . '/' . $filename;
        }
        // 使用ThinkPHP的图像处理类
        $image = new \Think\Image();
        $image->open($path);
        // 按照原图的比例生成一个最大为$width*$width的缩略图
        $image->thumb($width, $height, $type)->save($targetPath);
        return true;
    }
    return false;
}

/**
 * 生成缩略图宽800和宽400，宽/高=3/2
 */
function create_default_thumb($path)
{
    create_thumb(get_picture_path($path), 800, 800 * (2 / 3), \Think\Image::IMAGE_THUMB_FIXED);
    create_thumb(get_picture_path($path), 400, 400 * (2 / 3), \Think\Image::IMAGE_THUMB_FIXED);
    create_thumb(get_picture_path($path), 195, 139 * (1 / 1), \Think\Image::IMAGE_THUMB_FIXED);
}

/**
 * 生成头像缩略图宽800、宽400、宽100
 */
function create_head_img_thumb($path)
{
    create_thumb(get_picture_path($path), 400, 400, \Think\Image::IMAGE_THUMB_CENTER);
    create_thumb(get_picture_path($path), 200, 200, \Think\Image::IMAGE_THUMB_CENTER);
    create_thumb(get_picture_path($path), 100, 100, \Think\Image::IMAGE_THUMB_CENTER);
}

/**
 * 获取缩略图
 * @param string $path 原图路径
 * @param int $width 图片宽度
 * @return string
 */
function get_thumb($path, $width = 100)
{
    $accessPath = get_picture_path(ltrim($path, './'));
    $thumbPath = dirname($path) . '/thumb' . $width . '/' . basename($path);
    $accessThumbPath = dirname($accessPath) . '/thumb' . $width . '/' . basename($path);
    if (!is_file($accessThumbPath)) { // 如果缩略图不存在则返回原图
        $thumbPath = $path;
    }
    return $thumbPath;
}

/**
 * 获取网站访问地址
 */
function get_web_url($path)
{
    $path = ltrim($path, '/');
    return C('WEB_URL') . $path;
}

/**
 * 获取图片的可访问url
 */
function get_access_url($path)
{
    return C('ASSETS_URL') . $path;
}

/**
 * 把如果数组为null则转为空数组
 */
function nullToArray($arr)
{
    if ($arr == null) {
        return array();
    }
    return $arr;
}

/**
 * 检查是否是合法的手机号码
 */
function checkMobile($mobile)
{
    if (preg_match("/^1[34578]{1}\d{9}$/", $mobile)) {
        return true;
    }
    return false;
}

/**
 * 检查密码是否合法，必须是6-20位数字与字母的组合
 */
function checkPass($pass)
{
    if (ctype_alnum($pass) && strlen($pass) >= 6 && strlen($pass) <= 20) {
        return true;
    } else {
        return false;
    }
}

/**
 * 获取图片的路径
 */
function get_picture_path($path)
{
    return './Public/' . $path;
}

/**
 * 获取图片，如果图片不存在则返回默认图片
 */
function get_picture($path)
{
    if (is_file(get_picture_path($path))) {
        return $path;
    } else {
        return C('DEFAULT_IMAGE');
    }
}

/**
 * 获取头像，如果图像不存在则返回默认头像
 */
function get_header_picture($path, $gender)
{
    if (is_file(get_picture_path($path))) {
        return $path;
    } else {
        $d = C('DEFAULT_HEADER_IMG');
        return $d[$gender];
    }
}


/**
 * 获取宽800和宽400的缩略图
 */
function get_thumb_arr($picture)
{
    $thumb800 = get_thumb($picture, 800);
    $thumb400 = get_thumb($picture, 400);
    return array('thumb_m' => get_access_url($thumb800), 'thumb_s' => get_access_url($thumb400));
}

function date_str($createdAt)
{
    $date = date('Y-m-d', strtotime($createdAt));
    if ($date == date('Y-m-d')) {
        $date = "今天";
    } else if ($date == date('Y-m-d', strtotime('-1 day'))) {
        $date = "昨天";
    } else {
        $date = date('Y-m-d H:i', strtotime($createdAt));
    }
    return $date;
}

/**
 * 添加换行符
 * @param string $content 要换行的内容
 * @param int $num 多少个字符换行
 * @return string
 */
function wrap($content, $num)
{
    $l = mb_strlen($content, 'utf-8');
    if ($l > $num) {
        $return = mb_substr($content, 0, $num, 'utf-8');
        $start = $num;
        $time = floor($l / $num);
        for ($i = 0; $i < $time; $i++) {
            $return .= '<br />' . mb_substr($content, $start, $num, 'utf-8');
            $start += $num;
        }
        return $return;
    } else {
        return $content;
    }
}

/**
 * 获取子字符串并在后面添加省略号
 */
function _substr($num, $str)
{
    if (mb_strlen($str, 'utf-8') <= $num) {
        return $str;
    } else {
        return mb_substr($str, 0, $num, 'utf-8') . '...';
    }
}

/**
 * 微信处理类
 */
function wx_obj()
{
    import('Org.Weixin.Wechat');
    $options = array(
        'token' => C('WX_TOKEN'), //填写你设定的key
        'encodingaeskey' => C('WX_ENCODING_AES_KEY'), //填写加密用的EncodingAESKey
        'appid' => C('WX_APP_ID'), //填写高级调用功能的app id
        'appsecret' => C('WX_APP_SECRET') //填写高级调用功能的密钥
    );
    return new WeiXin\Wechat($options);
}

/**
 * 发送图文信息通知点评
 */
function notice_comment($touser, $id)
{
    $data = array('touser' => $touser, 'msgtype' => 'news',
        'news' => array(
            'articles' =>
                array(
                    array('title' => '您点评，我送礼',
                        'description' => '感谢您使用车雄的专业服务，请为我们的服务做出点评，获取积分换大礼。',
                        'url' => get_web_url(U('Weixin/Comment/index', array('id' => $id))),
                        'picurl' => get_access_url('custom/img/dianping.png')
                    )
                )
        )
    );
    return wx_obj()->sendCustomMessage($data);
}

// 日志
function write_log($content)
{
    $f = fopen('./Public/log.txt', 'a+');
    $content = $content . '<---------------------->' . date('Y-m-d H:i:s') . chr(13) . chr(10);
    fwrite($f, $content);
}

/**
 * 页面跳转
 * @param string $url 跳转的地址
 */
function jump($url)
{
    header('Location: ' . $url);
}

function curl_request($url, $data, $method = 'get')
{
    set_time_limit(0);
    $ch = curl_init(); //初始化CURL句柄
    curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出
    $document = curl_exec($ch);//执行预定义的CURL
    if (!curl_errno($ch)) {
        $info = curl_getinfo($ch);
    } else {
        Think\Log::record('Curl error: ' . curl_error($ch) . '-' . date('Y-m-d H:i:s'));
    }
    curl_close($ch);
    return $document;
}

/**
 * 循环创建目录
 * @param string $dir 目录路径
 * @param umask $mode 目录权限
 * @return boolean
 */
function mb_mkdir($dir, $mode = 0777)
{
    if (is_dir($dir) || @mkdir($dir, $mode))
        return true;
    if (!mb_mkdir(dirname($dir), $mode))
        return false;
    return @mkdir($dir, $mode);
}

/**
 * 格式化输出数据
 * @param $arr
 */
function format_print_r($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

/**
 * 原生查询
 */
function get_mysqli()
{
    $mysqli = new mysqli(C('DB_HOST'), C('DB_USER'), C('DB_PWD'), C('DB_NAME'));
    return $mysqli;
}

// 根据菜单数组生成jstree数据
function js_tree_data($menu_arr, $select_id_arr = array())
{
    $i = 0;
    $arr = array();
    foreach ($menu_arr as $k => $menu) {
        $is_selected = in_array($menu['id'], $select_id_arr);
        $id_input = '<input type="hidden" name="selected_id" value="' . $menu['id'] . '"/>';
        $arr[$i] = array(
            'text' => $menu['name'] . $id_input, 'icon' => $menu['icon_class'], 'state' => array('opened' => true, 'selected' => $is_selected));
        if (isset($menu['sub'])) {
            unset($arr[$i]['state']['selected']);
            $arr[$i]['children'] = js_tree_data($menu['sub'], $select_id_arr);
        }
        $i++;
    }
    return $arr;
}

function trim_space($str)
{
    // 去掉开始与结束的空格
    $str = trim($str);
    // 去掉跟随别的挤在一块的空白
    $str = preg_replace('/\s(?=\s)/', '', $str);
    // 去掉html空格表识符
    $str = str_ireplace('&nbsp;', '', $str);
    // 删除空格
    $str = preg_replace("@\s@is", '', $str);
    return strval($str);
}

//截断文字
function t_substr($str, $start, $length, $encoding='utf-8')
{
    return mb_substr(trim_space(strip_tags(htmlspecialchars_decode($str))), $start, $length, $encoding) . '...';
}

//时间
function wordTime($time) {
    $time = (int) substr($time, 0, 10);
    $int = time() - $time;
    $str = '';
    if ($int <= 2){
        $str = sprintf('刚刚', $int);
    }elseif ($int < 60){
        $str = sprintf('%d秒前', $int);
    }elseif ($int < 3600){
        $str = sprintf('%d分钟前', floor($int / 60));
    }elseif ($int < 86400){
        $str = sprintf('%d小时前', floor($int / 3600));
    }elseif ($int < 2592000){
        $str = sprintf('%d天前', floor($int / 86400));
    }else{
        $str = date('Y-m-d H:i:s', $time);
    }
    return $str;
}