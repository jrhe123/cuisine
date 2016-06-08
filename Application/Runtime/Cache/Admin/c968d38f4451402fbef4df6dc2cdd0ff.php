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
    
    <link href="/Public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet" />
    <link href="/Public/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet" />
    <link href="/Public/global/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/select2/select2.css" rel="stylesheet"/>

    <!-- BEGIN THEME STYLES -->
    <link href="/Public/global/css/components.css" rel="stylesheet" />
    <link href="/Public/global/css/plugins.css" rel="stylesheet" />
    <link href="/Public/admin/layout/css/layout.css" rel="stylesheet" />
    <link href="/Public/admin/layout/css/themes/default.css" rel="stylesheet"  id="style_color"/>
    <link href="/Public/admin/layout/css/custom.css" rel="stylesheet" />
    <link href="/Public/admin/pages/css/font.css" rel="stylesheet" />
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" href="/favicon.ico"/>
    
    <style>
        #modifyStatusModal .form-group {
            width: 100%;
            margin: 0 auto;
        }

        #advancedSearchModal .form-horizontal .form-group {
            margin-left: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
        }

        #indComSearchModal .form-horizontal .form-group {
            margin-left: 0px;
            margin-right: 0px;
        }
    </style>

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
                        <!--<a class="btn btn-xs green" href="#uploadExcelModal" style="height: 22px;" data-toggle="modal">-->
                            <!--<i class="fa fa-upload"></i>-->
                            <!--导入excel</a>-->
                        <!--<a class="btn btn-xs blue" href="javascript:void(0)" onclick="exportExcel()" style="height: 22px;" data-toggle="modal">-->
                            <!--<i class="fa fa-upload"></i>-->
                            <!--导出excel</a>-->
                        <!--<a class="btn btn-xs yellow" href="#indComSearchModal" data-toggle="modal" style="height: 22px;">-->
                            <!--工商搜索-->
                            <!--<i class="fa fa-search"></i>-->
                        <!--</a>-->
                        <!--<a class="btn btn-xs purple" href="#advancedSearchModal" data-toggle="modal" style="height: 22px;">-->
                            <!--高级搜索-->
                            <!--<i class="fa fa-search"></i>-->
                        <!--</a>-->
                    </div>
                </div>
                <div class="portlet-body">

                    <table class="table table-striped table-bordered table-hover" id="dataTable">
                        <thead>
                        <tr>
                            <th>序号</th>
                            <th>文章标题</th>
                            <th>回复人</th>
                            <th>被回复人</th>
                            <th>回复内容</th>
                            <th>创建时间</th>
                            <th>是否最佳答案</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div id="auditingModal" class="modal fade" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title">审核评论</h4>
                </div>
                <div class="modal-body">
                    <p>请确认您的审核操作！</p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn">关闭</button>
                    <!--<button type="button" data-dismiss="modal" class="btn red" onclick="noPassAudit()">不通过审核</button>-->
                    <button type="button" data-dismiss="modal" class="btn blue" onclick="passAudit()">通过审核</button>
                </div>
            </div>
        </div>
    </div>
    <div id="delConfirmModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">您确定要删除该评论？操作将无法恢复！</h4>
            </div>
            <div class="modal-body">
                <p>您确定要删除该评论？操作将无法恢复！</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn">关闭</button>
                <!--<button type="button" data-dismiss="modal" class="btn red" onclick="noPassAudit()">不通过审核</button>-->
                <button type="button" data-dismiss="modal" class="btn blue" onclick="yesDel()">确认</button>
            </div>
        </div>
    </div>
</div>
    <div id="showConfirmModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">您确定要显示该评论？</h4>
            </div>
            <div class="modal-body">
                <p>您确定要显示该评论？</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn">关闭</button>
                <!--<button type="button" data-dismiss="modal" class="btn red" onclick="noPassAudit()">不通过审核</button>-->
                <button type="button" data-dismiss="modal" class="btn blue" onclick="yesShow()">确认</button>
            </div>
        </div>
    </div>
</div>
    <div id="hideConfirmModal" class="modal fade" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                <h4 class="modal-title">您确定要隐藏该评论？</h4>
            </div>
            <div class="modal-body">
                <p>您确定要隐藏该评论？</p>
            </div>
            <div class="modal-footer">
                <button type="button" data-dismiss="modal" class="btn">关闭</button>
                <!--<button type="button" data-dismiss="modal" class="btn red" onclick="noPassAudit()">不通过审核</button>-->
                <button type="button" data-dismiss="modal" class="btn blue" onclick="yesHide()">确认</button>
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

    <script src="/Public/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/Public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <script src="/Public/global/scripts/datatable.js"></script>
    <script src="/Public/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="/Public/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="/Public/global/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
    <script src="/Public/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
    <script src="/Public/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Public/global/plugins/select2/select2.min.js"></script>

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
        var excelPath = '';
        var grid = null;
        jQuery(document).ready(function () {

            $('.bs-select').selectpicker({
                iconBase: 'fa',
                tickIcon: 'fa-check'
            });

            $('input:checkbox[name="is_from"]').change(function() {
                if ($(this).attr("checked")) {
                    $('input[name="from"]').attr('disabled', true);
                } else {
                    $('input[name="from"]').attr('disabled', false);
                }
            });
            $('input:checkbox[name="is_to"]').change(function() {
                if ($(this).attr("checked")) {
                    $('input[name="to"]').attr('disabled', true);
                } else {
                    $('input[name="to"]').attr('disabled', false);
                }
            });
            $('input:checkbox[name="is_from"]').trigger('change');
            $('input:checkbox[name="is_to"]').trigger('change');
//            $('select[name="company_status"]').val('<?php echo ($company_status); ?>');

            var columns = [{
                "name": "id",
                "orderable": false,
                "searchable": false
            }, {
                "name": "post_id",
                "orderable": false,
                "searchable": false
            },  {
                "name": "from_user_id",
                "orderable": false,
                "searchable": false
            }, {
                "name": "to_user_id",
                "orderable": false,
                "searchable": false
            },{
                "name": "content",
                "orderable": false,
                "searchable": true
            },  {
                "name": "created_timestamp",
                "orderable": true,
                "searchable": false
            }, {
                "name": "is_good",
                "orderable": true,
                "searchable": false
            }, {
                "name": "",
                "orderable": false,
                "searchable": false
            }];
            var order = [ // 默认排序
                [5, "desc"]
            ]
            grid = ajaxDataTableJs('dataTable', '<?php echo U("repliesTableData");?>', order, columns);

        });

        var id = 0;
        // 删除
        function del(obj) {
            id = $(obj).parents('tr').find('input:hidden[name="id"]').val();
            $('#delConfirmModal').modal('show');
        }
        function yesDel() {
            $.post('<?php echo U("delReplies");?>', {id: id}, function (data) {
                if (checkAjaxReturn(data)) {
                    setTimeout('window.location.reload();', 1000);
                }
            }, 'json');
        }

        // 显示
        function show(obj) {
            id = $(obj).parents('tr').find('input:hidden[name="id"]').val();
            $('#showConfirmModal').modal('show');
        }
        function yesShow() {
            $.post('<?php echo U("show");?>', {id: id}, function (data) {
                if (checkAjaxReturn(data)) {
                    setTimeout('window.location.reload();', 1000);
                }
            }, 'json');
        }

        // 隐藏
        function hide(obj) {
            id = $(obj).parents('tr').find('input:hidden[name="id"]').val();
            $('#hideConfirmModal').modal('show');
        }
        function yesHide() {
            $.post('<?php echo U("hide");?>', {id: id}, function (data) {
                if (checkAjaxReturn(data)) {
                    setTimeout('window.location.reload();', 1000);
                }
            }, 'json');
        }

        // 审核
        function auditing(obj) {
            id = $(obj).parents('tr').find('input:hidden[name="id"]').val();
            $('#auditingModal').modal('show');
        }
        function pass() {
            $.post('<?php echo U("Posts/pass");?>', {id: id}, function (data) {
                if (data.code == 200) {
                    toastMsg('success', data.msg, '提示信息');
                    setTimeout('location.reload();', 1000);
                } else {
                    toastMsg('error', data.msg, '提示信息');
                }
            }, 'json');
        }
        function noPass() {
            $('#reasonModal').modal('show');
        }
        function noPassSubmit() {
            var reason = $('#reasonModal').find('textarea[name="reason"]').val();
            if (reason == '') {
                toastMsg('error', '请填写审核不通过的原因', '提示信息');
                return;
            }
            $.post('<?php echo U("Posts/noPass");?>', {id: id, reason: reason}, function (data) {
                if (data.code == 200) {
                    toastMsg('success', data.msg, '提示信息');
                    location.reload();
                } else {
                    toastMsg('error', data.msg, '提示信息');
                }
            }, 'json');
        }


        // 审核案件
        function auditCase(obj) {
            id = $(obj).parents('tr').find('input:hidden[name="id"]').val();
            $('#auditingModal').modal('show');
        }
        function passAudit() {
            $.post('<?php echo U("audit");?>', {case_id: id}, function(data) {
                if (checkAjaxReturn(data)) {
                    setTimeout('location.reload()', 1000);
                }
            });
        }
        //        function noPassAudit() {
        //            $.post('<?php echo U("audit");?>', {case_id: id, is_audit: 1}, function(data) {
        //                if (checkAjaxReturn(data)) {
        //                    setTimeout('location.reload()', 1000);
        //                }
        //            });
        //        }
    </script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>