<?php
//定义回调URL通用的URL
define('URL_CALLBACK', 'http://shunda.co/Home/C/');
return array(
    //'配置项'=>'配置值'
    'GENDER' => array(0 => '保密', 1 => '男', 2 => '女'),
    //腾讯QQ登录配置
    'THINK_SDK_QQ' => array(
        'APP_KEY'    => '101253113', //应用注册成功后分配的 APP ID
        'APP_SECRET' => 'c7cd59be1a0cba7092e6e50964fe6665', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK . 'qc',
    ),
    //腾讯微博配置
    'THINK_SDK_TENCENT' => array(
        'APP_KEY'    => '', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK . 'tencent',
    ),
    //新浪微博配置
    'THINK_SDK_SINA' => array(
        'APP_KEY'    => '3961159735', //应用注册成功后分配的 APP ID
        'APP_SECRET' => '16eb3136d5fbb8f45306b0a85410fb1b', //应用注册成功后分配的KEY
        'CALLBACK'   => URL_CALLBACK . 'sina',
    ),
);