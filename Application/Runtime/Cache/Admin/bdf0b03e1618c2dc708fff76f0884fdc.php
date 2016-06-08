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
    <title><?php echo C('admin_app_name');?> | <?php echo ($menu_name); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="/Public/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/Public/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" />
    <link href="/Public/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="/Public/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet"/>
    
    <!-- BEGIN THEME STYLES -->
    <link href="/Public/global/css/components.css" rel="stylesheet" />
    <link href="/Public/global/css/plugins.css" rel="stylesheet" />
    <link href="/Public/admin/layout/css/layout.css" rel="stylesheet" />
    <link href="/Public/admin/layout/css/themes/default.css" rel="stylesheet"  id="style_color"/>
    <link href="/Public/admin/layout/css/custom.css" rel="stylesheet" />
    <link href="/Public/admin/pages/css/font.css" rel="stylesheet" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="/favicon.ico"/>
    
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-quick-sidebar-over-content page-header-fixed page-sidebar-fixed page-footer-fixed">
<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="javascript:void(0);">
                <img class="logo-default" style="height: 35px; margin-top: 5px;" src="/Public/admin/layout/img/logo.png" />
            </a>

            <div class="menu-toggler sidebar-toggler hide">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:void(0);" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
    </div>
    <!-- END HEADER INNER -->
    <!-- BEGIN TOP NAVIGATION MENU -->
    <div class="top-menu">
        <ul class="nav navbar-nav pull-right">
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                   data-close-others="true">
              <span class="username username-hide-on-mobile">
              系统 </span>
                    <i class="fa fa-angle-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-default">
                    <li>
                        <a href="<?php echo U('Login/out');?>">
                            <i class="icon-key"></i> 登出 </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar-wrapper">
        <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
        <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
        <div class="page-sidebar navbar-collapse collapse">
            <!-- BEGIN SIDEBAR MENU -->
            <ul class="page-sidebar-menu" data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                <li class="sidebar-toggler-wrapper">
                    <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                    <div class="sidebar-toggler">
                    </div>
                    <!-- END SIDEBAR TOGGLER BUTTON -->
                </li>
                <li class="sidebar-search-wrapper" style="margin-top: 30px;">

                </li>
                <?php echo ($leftMenuHtml); ?>
            </ul>
            <!-- END SIDEBAR MENU -->
        </div>
    </div>
    <!-- END SIDEBAR -->
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
        <div class="page-content">
            <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
            <!-- BEGIN PAGE HEADER-->
            <h3 class="page-title">
                <?php echo ($menu_name); ?>
                <small><?php echo ($menu_name); ?></small>
                
                <!--<a href="<?php echo U('add');?>" class="btn blue">添加</a>-->
            </h3>
            <div class="page-bar">
                <?php echo ($navHtml); ?>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row">
                <div class="col-md-12">
                    
    <h4>欢迎</h4>
    <!--<div class="row">-->
        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
            <!--<div class="dashboard-stat blue-madison">-->
                <!--<div class="visual">-->
                    <!--<i class="fa fa-comments"></i>-->
                <!--</div>-->
                <!--<div class="details">-->
                    <!--<div class="number">-->
                        <!--<?php echo ($PCase); ?>-->
                    <!--</div>-->
                    <!--<div class="desc">-->
                        <!--拥有资产的案件总数-->
                    <!--</div>-->
                <!--</div>-->
                <!--<a class="more" href="<?php echo U('Case/index');?>?filterKey=propertyCase&audit_status=1">-->
                    <!--查看更多 <i class="m-icon-swapright m-icon-white"></i>-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
            <!--<div class="dashboard-stat red-intense">-->
                <!--<div class="visual">-->
                    <!--<i class="fa fa-bar-chart-o"></i>-->
                <!--</div>-->
                <!--<div class="details">-->
                    <!--<div class="number">-->
                        <!--<?php echo ($CCase); ?>-->
                    <!--</div>-->
                    <!--<div class="desc">-->
                        <!--公司被吊销的案件总数-->
                    <!--</div>-->
                <!--</div>-->
                <!--<a class="more" href="<?php echo U('Case/index');?>?filterKey=revocationCase&audit_status=1">-->
                   <!--查看更多 <i class="m-icon-swapright m-icon-white"></i>-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
            <!--<div class="dashboard-stat green-haze">-->
                <!--<div class="visual">-->
                    <!--<i class="fa fa-shopping-cart"></i>-->
                <!--</div>-->
                <!--<div class="details">-->
                    <!--<div class="number">-->
                        <!--<?php echo ($Case); ?>-->
                    <!--</div>-->
                    <!--<div class="desc">-->
                        <!--已收录的案件数-->
                    <!--</div>-->
                <!--</div>-->
                <!--<a class="more" href="<?php echo U('Case/index');?>?filterKey=recordCase&audit_status=1">-->
                    <!--查看更多 <i class="m-icon-swapright m-icon-white"></i>-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
            <!--<div class="dashboard-stat purple-plum">-->
                <!--<div class="visual">-->
                    <!--<i class="fa fa-globe"></i>-->
                <!--</div>-->
                <!--<div class="details">-->
                    <!--<div class="number">-->
                        <!--<?php echo ($BeExecP); ?>-->
                    <!--</div>-->
                    <!--<div class="desc">-->
                        <!--已收录的被执行人数-->
                    <!--</div>-->
                <!--</div>-->
                <!--<a class="more" href="<?php echo U('Case/index');?>?filterKey=recordBeExecP&audit_status=1">-->
                    <!--查看更多 <i class="m-icon-swapright m-icon-white"></i>-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->
    <!--<div class="row">-->
        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
            <!--<div class="dashboard-stat blue-madison">-->
                <!--<div class="visual">-->
                    <!--<i class="fa fa-comments"></i>-->
                <!--</div>-->
                <!--<div class="details">-->
                    <!--<div class="number">-->
                        <!--<?php echo ($Property); ?>-->
                    <!--</div>-->
                    <!--<div class="desc">-->
                        <!--已收录的资产数-->
                    <!--</div>-->
                <!--</div>-->
                <!--<a class="more" href="<?php echo U('Property/index');?>?filterKey=recordProperty">-->
                    <!--查看更多 <i class="m-icon-swapright m-icon-white"></i>-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
            <!--<div class="dashboard-stat red-intense">-->
                <!--<div class="visual">-->
                    <!--<i class="fa fa-bar-chart-o"></i>-->
                <!--</div>-->
                <!--<div class="details">-->
                    <!--<div class="number">-->
                        <!--<?php echo ($MCase); ?>-->
                    <!--</div>-->
                    <!--<div class="desc">-->
                        <!--本月新增的已收录的案件数-->
                    <!--</div>-->
                <!--</div>-->
                <!--<a class="more" href="<?php echo U('Case/index');?>?filterKey=mRecordCase&audit_status=1">-->
                    <!--查看更多 <i class="m-icon-swapright m-icon-white"></i>-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
            <!--<div class="dashboard-stat green-haze">-->
                <!--<div class="visual">-->
                    <!--<i class="fa fa-shopping-cart"></i>-->
                <!--</div>-->
                <!--<div class="details">-->
                    <!--<div class="number">-->
                        <!--<?php echo ($MBeExecP); ?>-->
                    <!--</div>-->
                    <!--<div class="desc">-->
                        <!--本月新增的已收录的被执行人数-->
                    <!--</div>-->
                <!--</div>-->
                <!--<a class="more" href="<?php echo U('Case/index');?>?filterKey=mRecordBeExecP&audit_status=1">-->
                    <!--查看更多 <i class="m-icon-swapright m-icon-white"></i>-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
        <!--<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">-->
            <!--<div class="dashboard-stat purple-plum">-->
                <!--<div class="visual">-->
                    <!--<i class="fa fa-globe"></i>-->
                <!--</div>-->
                <!--<div class="details">-->
                    <!--<div class="number">-->
                        <!--<?php echo ($MProperty); ?>-->
                    <!--</div>-->
                    <!--<div class="desc">-->
                        <!--本月新增的已收录的资产数-->
                    <!--</div>-->
                <!--</div>-->
                <!--<a class="more" href="<?php echo U('Property/index');?>?filterKey=mProperty">-->
                    <!--查看更多 <i class="m-icon-swapright m-icon-white"></i>-->
                <!--</a>-->
            <!--</div>-->
        <!--</div>-->
    <!--</div>-->


                </div>
            </div>
            <!-- END PAGE CONTENT-->
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<div class="page-footer">
    <div class="page-footer-inner"> 2014 © 小鹿网络科技有限公司.</div>
    <div class="scroll-to-top" style="display: block;">
        <i class="icon-arrow-up"></i>
    </div>
</div>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="/Public/global/plugins/respond.min.js"></script>
<script src="/Public/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/Public/global/plugins/jquery.min.js"></script>
<script src="/Public/global/plugins/jquery-migrate.min.js"></script>
<script src="/Public/global/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/global/plugins/jquery.cokie.min.js"></script>
<script src="/Public/global/plugins/jquery.blockui.min.js"></script>
<script src="/Public/global/plugins/uniform/jquery.uniform.min.js"></script>
<script src="/Public/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- END CORE PLUGINS -->
<script src="/Public/global/plugins/bootstrap-toastr/toastr.min.js"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Public/global/scripts/metronic.js"></script>
<script src="/Public/admin/layout/scripts/layout.js"></script>
<script src="/Public/admin/custom/js/init.js"></script>
<script src="/Public/admin/custom/js/functions.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout
    });
</script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>