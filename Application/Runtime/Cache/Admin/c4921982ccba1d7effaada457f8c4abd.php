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
    
    <link href="/Public/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/bootstrap-modal/css/bootstrap-modal.css" rel="stylesheet"/>

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
                    
    <!-- BEGIN PAGE CONTENT-->
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN EXAMPLE TABLE PORTLET-->
            <div class="portlet box blue-hoki">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="<?php echo ($menu_icon); ?>"></i> <?php echo ($menu_name); ?>
                    </div>
                    <div class="tools">
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="tabbable tabbable-custom boxless">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a href="#tab_1" data-toggle="tab">后台子账号管理</a>
                            </li>
                            <li>
                                <a href="#tab_2" data-toggle="tab">修改后台管理员密码</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tab_1">
                                <p style="text-align: right;">
                                    <a href="#addSubModal" data-toggle="modal" class="btn blue">添加子账号</a>
                                </p>
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                    <tr>
                                        <th width="100">序号</th>
                                        <th>用户名</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if(is_array($subAdmins)): foreach($subAdmins as $key=>$sub): ?><tr>
                                            <td><input type="hidden" name="id" value="<?php echo ($sub["id"]); ?>" /> <?php echo ($key + 1); ?></td>
                                            <td><?php echo ($sub["name"]); ?></td>
                                            <td>
                                                <button class="btn btn-sm red margin-right-10" onclick="delSub(this)">
                                                    <i class="fa fa-times"></i> 删除
                                                </button>

                                                <button class="btn btn-sm yellow margin-right-10" onclick="resetSubPass(this)">
                                                    <i class="fa fa-refresh"></i> 重置密码
                                                </button>
                                                <a class="btn btn-sm default" href="<?php echo U('Account/editAuth');?>?admin_id=<?php echo ($sub["id"]); ?>">
                                                    <i class="fa fa-lock"></i>
                                                    修改权限
                                                </a>
                                                <!--<a class="btn btn-sm default" href="<?php echo U('editAuth');?>?admin_id=<?php echo ($sub["id"]); ?>">-->
                                                    <!--<i class="fa fa-lock"></i> 修改权限-->
                                                <!--</a>-->
                                            </td>
                                        </tr><?php endforeach; endif; ?>
                                    </tbody>
                                </table>
                            </div>

                            <div class="tab-pane" id="tab_2">
                                <form id="resetPassForm" role="form" class="col-md-6 col-md-offset-3">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label>原密码</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password" class="form-control" name="old_pass"
                                                       placeholder="原密码">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>新密码</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password" class="form-control" id="new_pass" name="new_pass"
                                                       placeholder="新密码，密码必须是5-12位数字与字母的组合">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>确认密码</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                                <input type="password" class="form-control" name="confirm_pass"
                                                       placeholder="确认密码">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-lg blue">提交</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="addSubModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-header">
            <button class="close" aria-hidden="true" data-dismiss="modal" type="button"></button>
            <h4 class="modal-title">添加子账号</h4>
        </div>
        <div class="modal-body">
            <form role="form" id="addSubForm">
                <div class="form-body">
                    <div class="form-group">
                        <label>账号名称</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="name" placeholder="账号名称">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>密码</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="password" class="form-control" name="pass" id="pass"
                                   placeholder="密码，密码必须是5-12位数字与字母的组合">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>确认密码</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="password" class="form-control" name="confirm_pass" placeholder="确认密码">
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">关闭</button>
            <button type="button" class="btn blue" onclick="addSubFormSubmit()">保存</button>
        </div>
    </div>
    <div id="resetSubPassModal" class="modal fade" tabindex="-1" data-backdrop="static" data-keyboard="false">
        <div class="modal-header">
            <button class="close" aria-hidden="true" data-dismiss="modal" type="button"></button>
            <h4 class="modal-title">重置子账号密码</h4>
        </div>
        <div class="modal-body">
            <form id="resetSubPassForm" role="form">
                <div class="form-body">
                    <div class="form-group">
                        <label>新密码</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="new_pass" id="sub_new_pass" placeholder="新密码">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>确认密码</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="confirm_pass" placeholder="确认密码">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="id" value="0" />
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default">关闭</button>
            <button type="button" class="btn blue" onclick="confirmResetSubPass()">保存</button>
        </div>
    </div>
    <div id="delSubConfirmModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">您确定要删除该记录？操作将无法恢复！</h4>
            </div>
            <div class="modal-body">
                <p>您确定要删除该记录？操作将无法恢复！</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn">关闭</button>
                <!--<button type="button" data-dismiss="modal" class="btn red" onclick="noPassAudit()">不通过审核</button>-->
                <button type="button" data-dismiss="modal" class="btn blue" onclick="yesDelSub()">确认</button>
            </div>
        </div>
    </div>
</div>

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

    <script src="/Public/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
    <script src="/Public/global/plugins/bootstrap-modal/js/bootstrap-modal.js"></script>
    <script src="/Public/global/plugins/jquery-validation/js/jquery.validate.js"></script>
    <script src="/Public/admin/custom/js/functions.js"></script>

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

    <script>
        jQuery(document).ready(function () {
            $('#resetPassForm').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                rules: {
                    old_pass: {required: true},
                    new_pass: {required: true, rangelength: [5,12]},
                    confirm_pass: {equalTo: "#new_pass"}
                },
                messages: {
                    old_pass: {required: "请输入原密码"},
                    new_pass: {required: "请输入新密码", rangelength: "密码必须是5-12位数字与字母的组合"},
                    confirm_pass: {equalTo: "两次输入的密码必须一致"}
                },

                invalidHandler: function (event, validator) { //display error alert on form submit

                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                            .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },

                errorPlacement: function (error, element) {
                    error.insertAfter(element.closest('.form-control'));
                },

                submitHandler: function (form) {
                    formSubmit();
                    return false;
                }
            });

            $('.login-form input').keypress(function (e) {
                if (e.which == 13) {
                    formSubmit();
                    return false;
                }
            });


            $('#addSubForm').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                rules: {
                    name: {
                        required: true,
                        rangelength: [5,12],
                        regex: /^[a-z0-9_]/
                    },
                    pass: {
                        required: true,
                        rangelength: [5,12],
                        regex: /^[a-z0-9_]/
                    },
                    confirm_pass: {equalTo: "#pass"}
                },
                messages: {
                    name: {
                        required: "请输入用户名",
                        rangelength: "用户名必须是5-12位数字与字母的组合",
                        regex: "账号只能包含数字、字母和下划线"
                    },
                    pass: {
                        required: "请输入密码",
                        rangelength: "密码必须是5-12位数字与字母的组合",
                        regex: "密码只能包含数字、字母和下划线"
                    },
                    confirm_pass: {equalTo: "两次输入的密码必须一致"}
                },

                invalidHandler: function (event, validator) { //display error alert on form submit

                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                            .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },

                errorPlacement: function (error, element) {
                    error.insertAfter(element.closest('.form-control'));
                },

                submitHandler: function (form) {
                    addSubFormSubmit();
                    return false;
                }
            });

            $('.login-form input').keypress(function (e) {
                if (e.which == 13) {
                    addSubFormSubmit();
                    return false;
                }
            });


            $('#resetSubPassForm').validate({
                errorElement: 'span', //default input error message container
                errorClass: 'help-block', // default input error message class
                focusInvalid: true, // do not focus the last invalid input
                rules: {
                    new_pass: {required: true, rangelength: [5,12]},
                    confirm_pass: {equalTo: "#sub_new_pass"}
                },
                messages: {
                    new_pass: {required: "请输入新密码", rangelength: "密码必须是5-12位数字与字母的组合"},
                    confirm_pass: {equalTo: "两次输入的密码必须一致"}
                },

                invalidHandler: function (event, validator) { //display error alert on form submit

                },

                highlight: function (element) { // hightlight error inputs
                    $(element)
                            .closest('.form-group').addClass('has-error'); // set error class to the control group
                },

                success: function (label) {
                    label.closest('.form-group').removeClass('has-error');
                    label.remove();
                },

                errorPlacement: function (error, element) {
                    error.insertAfter(element.closest('.form-control'));
                },

                submitHandler: function (form) {
                    resetSubPassFormSubmit();
                    return false;
                }
            });

//            $('.login-form input').keypress(function (e) {
//                if (e.which == 13) {
//                    resetSubPassFormSubmit();
//                    return false;
//                }
//            });
        });

        // 提交
        function formSubmit() {
            if ($('#resetPassForm').validate().form()) {
                $.post('<?php echo U("resetPass");?>', $('#resetPassForm').serialize(), function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '提示信息');
                        setTimeout('location.reload();', 1500);
                    } else {
                        toastMsg('error', data.msg, '提示信息');
                    }
                }, 'json');
            }
        }

        // 提交
        function addSubFormSubmit() {
            if ($('#addSubForm').validate().form()) {
                $.post('<?php echo U("addSub");?>', $('#addSubForm').serialize(), function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '提示信息');
                        setTimeout('location.reload();', 1500);
                    } else {
                        toastMsg('error', data.msg, '提示信息');
                    }
                }, 'json');
            }
        }

        // 删除子账号
        var subId = 0;
        function delSub(obj) {
            subId = $(obj).parents('tr').find('input:hidden[name="id"]').val();
            $('#delSubConfirmModal').modal('show');
        }
        function yesDelSub() {
            $.post('<?php echo U("delSub");?>', {id: subId}, function (data) {
                if (data.code == 200) {
                    toastMsg('success', data.msg, '提示信息');
                    setTimeout('location.reload();', 1500);
                } else {
                    toastMsg('error', data.msg, '提示信息');
                }
            }, 'json');
        }

        // 重置子账号密码
        function resetSubPass (obj) {
            var subId = $(obj).parents('tr').find('input:hidden[name="id"]').val();
            $('#resetSubPassModal').find('input:hidden[name="id"]').val(subId);
            $('#resetSubPassModal').modal('show');
        }
        function confirmResetSubPass() {
            $('#resetSubPassForm').submit();
        }
        function resetSubPassFormSubmit() {
            if ($('#resetSubPassForm').validate().form()) {
                $.post('<?php echo U("resetSubPass");?>', $('#resetSubPassForm').serialize(), function (data) {
                    if (data.code == 200) {
                        $('#resetSubPassModal').modal('hide');
                        toastMsg('success', data.msg, '提示信息');
                        setTimeout('location.reload();', 1000);
                    } else {
                        toastMsg('error', data.msg, '提示信息');
                    }
                }, 'json');
            }
        }
    </script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>