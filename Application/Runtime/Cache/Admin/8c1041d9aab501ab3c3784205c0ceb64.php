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
    
    <link href="/Public/global/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/select2/select2.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"/>
    <link href="/Public/global/plugins/icheck/skins/all.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/Public/global/plugins/kindeditor/themes/default/default.css"/>

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
        .attachment-item {
            margin-bottom: 15px;
            font-size: 14px;
        }

        .pictures img {
            width: 100%;
        }

        .pictures p {
            text-align: center;
        }

        .pictures .col-md-3 {
            padding-left: 0px;
        }

        .pictures .icon-btn {
            height: auto;
            margin: 0px;
            min-width: 100%;
            padding: 0px;
        }

        .pictures .badge {
            padding: 0px;
            width: 24px;
            height: 24px;
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
                        <?php if(($_GET['action']) == "view"): ?><div class="tools">
                                <a href="<?php echo U('edit');?>?id=<?php echo ($id); ?>" class="btn btn-xs yellow margin-right-10"><i
                                        class="fa fa-edit"></i> 编辑</a>
                            </div><?php endif; ?>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="portlet-body form">
                        <form id="form" class="form-horizontal form-bordered" role="form" onsubmit="return false">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="control-label">广告图片</label>

                                    <div class="pictures sliderImages" style="padding-left: 0px;">
                                        <?php if(isset($hrefArr)): if(is_array($hrefArr)): foreach($hrefArr as $key=>$image): ?><div class="col-md-3 picture-item">
                                                    <a class="icon-btn" href="javascript:;">
                                                        <img src="/Public/<?php echo ($image["image"]); ?>">
														<span class="badge badge-danger" onclick="delPicture(this)"> <i
                                                                class="fa fa-times"></i> </span>
                                                        <input type="hidden" name="sliderImage[]"
                                                               value="<?php echo ($image["image"]); ?>">
                                                    </a>
                                                    <input name="sliderLink[]" class="form-control input-sm"
                                                           value="<?php echo ($image["link"]); ?>"
                                                           placeholder="图片的链接的地址">
                                                </div><?php endforeach; endif; endif; ?>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="form-group">
                                    <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
                                    <div>
                                        <!-- The fileinput-button span is used to style the file input field as button -->
                                              <span class="btn green fileinput-button">
                                                  <i class="fa fa-plus"></i>
                                                  <span>添加图片</span>
                                                  <input multiple type="file" name="pictures[]" id="picture">
                                              </span>
                                    </div>
                                    <div class="col-md-12">
                                        <font color="red">*</font>图片支持JPG、PNG、BMP格式，图片大小建议宽度保持在300像素、高度按比例缩放，大小不能超过1M
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">课程广告添加</label>
                                    <div class="col-md-9" style="padding-bottom: 0px;">
                                        <div class="col-md-2" style="padding-left: 0px; width: 200px;">
                                            <div class="fileinput fileinput-new" data-provides="fileinput" style="width: 100%;">
    <div class="fileinput-new thumbnail" style="width: 100%;">
        <img src="<?php echo ($course_ad["url"]); ?>" alt="" style="width: 100%;"/>
    </div>
    <div class="fileinput-preview fileinput-exists thumbnail" style="width: 100%;"></div>
    <div class="progress progress-success progress-striped margin-bottom-5" id="course_picture_progress" style="width: 100%;">
        <div class="progress-bar progress-bar-success" style="width: 0%;"></div>
    </div>
    <div>
    <span class="btn-sm btn default btn-file">
      <span>
          选取图片
      </span>
      <input type="file" id="course_picture" name="course_picture"/>
      <input type="hidden" name="picture_path" value="<?php echo ($course_ad["path"]); ?>"/>
    </span>
    </div>
    <div class="clearfix margin-top-5">
        <span class="help-block"></span>
    </div>
</div>
<script>
    window.onload = function () {
        var obj = $("#course_picture_progress");
        var progressObj = obj.find(".progress-bar");
        $("#course_picture").fileupload({
            autoUpload: true, // 是否自动上传
            url: "<?php echo U('Upload/singlePicture');?>?size=470-175", // 上传地址
            dataType: "json",
            singleFileUploads: true,
            add: function (e, data) {
                progressObj.css("width", 0);
                data.submit();
            },
            done: function (e, data) {
                if (data.result.code == 200) {
                    progressObj.html("<font color='white'>" + data.result.msg + "</font>");
                    $("input[name='picture_path']").val(data.result.path);
                } else {
                    progressObj.html("<font color='red'>" + data.result.msg + "</font>");
                }
            },
            progressall: function (e, data) {
                var progress = parseInt(data.loaded / data.total * 100, 10);
                progressObj.css("width", progress + "%");
                if (progress <= 100) {
                    progressObj.html(progress + "%");
                } else {
                    progressObj.html("上传成功");
                }
            }
        });
    }
</script>
                                        </div>
                                    </div>
                                    <div class="col-md-offset-3 col-md-9" style="padding-top: 0px;">
                                        <span class="help-block">图片支持JPG、PNG、BMP格式，图片大小建议保持在470*175像素，大小不能超过1M</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <?php if(($_GET['action']) != "view"): ?><button type="submit" onclick="formSubmit()" class="btn green margin-right-10">保存</button><?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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

    <script src="/Public/global/plugins/bootstrap-select/bootstrap-select.min.js"></script>
    <script src="/Public/global/plugins/select2/select2.min.js"></script>
    <script src="/Public/global/plugins/jquery-validation/js/jquery.validate.js"></script>
    <script src="/Public/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="/Public/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>
    <script src="/Public/global/scripts/datatable.js"></script>
    <script src="/Public/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="/Public/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="/Public/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
    <script src="/Public/global/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
    <script src="/Public/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
    <script src="/Public/admin/pages/scripts/form-fileupload.js"></script>
    <script charset="utf-8" src="/Public/global/plugins/kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="/Public/global/plugins/kindeditor/lang/zh_CN.js"></script>
    <script src="/Public/global/plugins/icheck/icheck.min.js"></script>

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
        var id = '<?php echo ($id); ?>';
        var action = '<?php echo ($_GET['action']); ?>';
        jQuery(document).ready(function () {
            $('.bs-select').selectpicker({
                iconBase: 'fa',
                tickIcon: 'fa-check'
            });

            if (action == 'view') {
                $('.form-group').find('*').attr('disabled', 'disabled');
            }



            // 图片上传
            $("#picture").fileupload({
                autoUpload: true, // 是否自动上传
                url: "<?php echo U('Upload/singlePicture');?>?300-0", // 上传地址
                dataType: "json",
                singleFileUploads: true,
                add: function (e, data) {
                    Metronic.blockUI({
                        target: '#blockDiv',
                        boxed: true,
                        message: '正在上传...'
                    });
                    data.submit();
                },
                done: function (e, data) {
                    Metronic.unblockUI('#blockDiv');
                    if (data.result.code == 200) {
                        toastMsg('success', '上传成功', '提示信息');
                        $('.sliderImages').append(
                                '<div class="col-md-3 picture-item">' +
                                '<a class="icon-btn" href="javascript:;">' +
                                '<img src="/Public/' + data.result.path + '">' +
                                '<span class="badge badge-danger" onclick="delPicture(this)"> <i class="fa fa-times"></i> </span>' +
                                '<input name="sliderLink[]" class="form-control input-sm" placeholder="图片的链接的地址">' +
                                '</a>' +
                                '<input type="hidden" name="sliderImage[]" value="' + data.result.path + '" ' +
                                '</div>');
                    } else {
                        toastMsg('error', data.result.msg, '提示信息');
                    }
                }
            });

            $('.login-form input').keypress(function (e) {
                if (e.which == 13) {
                    formSubmit();
                    return false;
                }
            });
        });

        // 提交
        function formSubmit() {
//            editor.sync();  //编辑器需调用这个来获取html
            showBlockUI();
            if ($('#form').validate().form()) {
                $.post('<?php echo U("save");?>', $('#form').serialize(), function (data) {
                    if (checkAjaxReturn(data)) {
//                        setTimeout('goList()', 1000);
                    }
                    closeBlockUI();
                }, 'json');
            }
        }

        // 返回列表
        function goList() {
            window.location.href = "<?php echo U('index');?>";
        }

        // 删除图片
        function delPicture(obj) {
            $(obj).parents('div.picture-item').remove();
        }
    </script>

<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>