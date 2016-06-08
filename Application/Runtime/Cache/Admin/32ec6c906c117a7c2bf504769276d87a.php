<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 3.3.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title><?php echo C('admin_app_name');?> | 登录</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/Public/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="/Public/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="/Public/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL SCRIPTS -->
    <!-- BEGIN THEME STYLES -->
    <link href="/Public/global/css/components.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/admin/layout/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/Public/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/admin/pages/css/font.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="/favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
<div class="menu-toggler sidebar-toggler">
</div>
<!-- END SIDEBAR TOGGLER BUTTON -->
<!-- BEGIN LOGIN -->
<div class="content" style="margin-top: 150px;">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" onsubmit="return false;">
        <h3 class="form-title"><?php echo C('admin_app_name');?></h3>

        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span></span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">登录账号</label>

            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control form-control-solid placeholder-no-fix" type="text" name="name"
                       autocomplete="off" placeholder="登录账号"/>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">登录密码</label>

            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control form-control-solid placeholder-no-fix" type="password" name="password"
                       autocomplete="off" placeholder="登录密码"/>
            </div>
        </div>
        <div class="form-actions">
            <label class="rememberme check">
                <input type="checkbox" name="remember" value="1"/>记住用户名
            </label>
            <button type="submit" class="btn blue pull-right">
                登入 <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>
    <!-- END LOGIN FORM -->
</div>
<div class="copyright">
    2014 © 小鹿网络科技有限公司.
</div>
<!-- END LOGIN -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/Public/global/plugins/respond.min.js"></script>
<script src="/Public/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/Public/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Public/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<script src="/Public/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Public/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/Public/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Public/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="/Public/global/plugins/jquery-validation/js/jquery.validate.js" type="text/javascript"></script>
<script src="/Public/global/plugins/backstretch/jquery.backstretch.min.js" type="text/javascript"></script>
<script src="/Public/global/plugins/select2/select2.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/Public/admin/layout/scripts/layout.js" type="text/javascript"></script>
<script src="/Public/admin/pages/scripts/login-soft.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        var name = $.cookie('zjpd_username');
        if (name != null && name != '' && name != 'null') {
            $('input[name="name"]').val(name)
            $('input[name="remember"]').attr('checked', true);
        }
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
        Login.init();

        $.backstretch([
                    "/Public/admin/pages/media/bg/1.jpg",
                    "/Public/admin/pages/media/bg/2.jpg",
                    "/Public/admin/pages/media/bg/3.jpg",
                    "/Public/admin/pages/media/bg/4.jpg"
                ], {
                    fade: 1000,
                    duration: 8000
                }
        );
    });

    // 登入
    function login() {
        $('.alert-danger', $('.login-form')).hide();
        if ($('.login-form').validate().form()) {
            $.post('<?php echo U("Login/auth");?>', $('.login-form').serialize(), function (data) {
                if (data.code == 200) {
                    if ($('input[name="remember"]').parent('span').hasClass('checked')) { // 记住用户名
                        $.cookie('zjpd_username', $('input[name="name"]').val());
                    } else {
                        $.cookie('zjpd_username', null);
                    }
                    window.location.href = data.href;
                } else {
                    $('.alert-danger', $('.login-form')).find('span').html(data.msg);
                    $('.alert-danger', $('.login-form')).show();
                }
            });
        }
    }
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>