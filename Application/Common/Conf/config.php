<?php
return array(
    'url' => 'http://shunda.co',
//  'url' => 'http://localhost:8081',
    /* 数据库设置 */
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => '127.0.0.1', // 服务器地址
    'DB_NAME' => 'cooking', // 数据库名
    'DB_USER' => 'cooking', // 用户名
    'DB_PWD' => 'pwcooking', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => 'cooking_', // 数据库表前缀
    'WEB_ROOT' => 'http://shunda.co/',
    'DEFAULT_IMAGE' => 'uploads/noimage.gif',
    'DEFAULT_IMAGE_820' => 'uploads/noimage820.gif',
    'DEFAULT_HEADER_IMG_NORMAL' => 'uploads/header_normal.png',
    'DEFAULT_HEADER_IMG_MAN' => 'uploads/header_man.png',
    'DEFAULT_HEADER_IMG_WOMAN' => 'uploads/header_woman.png',
    '404' => 'Public/uploads/404.jpg',
    'UPLOAD_PATH' => './Public/uploads/',
    'ASSETS_URL' => 'http://shunda.co/',

    /* URL设置 */
    'URL_MODEL' => 2,       // URL访问模式,可选参数0、1、2、3,代表以下四种模式：
    // 0 (普通模式); 1 (PATHINFO 模式); 2 (REWRITE  模式); 3 (兼容模式)  默认为PATHINFO 模式

    //头像
    'DEFAULT_HEADER_IMG' => array(0 => 'uploads/header_normal.png', 1 => 'uploads/header_man.png', 2 => 'uploads/header_woman.png'),
    'COURSE_TYPE' => array(0 => '', 1 => '免费课程', 2 => '收费课程', 3 => '在线课程'),

    //容联 验证码
    'ACCOUNTSID' => 'aaf98f8946b3af1a0146b73026a80180',
//说明：主账号，登陆云通讯网站后，可在"控制台-应用"中看到开发者主账号ACCOUNT SID。

    'ACCOUNTTOKEN' => 'c7db9f2964c84fe990d4e6c5b0c670bf',
// 说明：主账号Token，登陆云通讯网站后，可在控制台-应用中看到开发者主账号AUTH TOKEN。

    'APPID' => 'aaf98f8946b3af1a0146b737ce970185',
// 说明：应用Id，如果是在沙盒环境开发，请配置"控制台-应用-测试DEMO"中的APPID。如切换到生产环境，
// 请使用自己创建应用的APPID。
    'SERVERIP' => 'sandboxapp.cloopen.com',

    'SERVERPORT' => '8883',
// 说明：请求端口 ，无论生产环境还是沙盒环境都为8883.

    'SOFTVERSION' => '2013-12-26'
// 说明：REST API版本号保持不变。
);