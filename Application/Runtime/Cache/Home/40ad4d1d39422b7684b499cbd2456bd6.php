<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en" xmlns:wb="http://open.weibo.com/wb"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>顺大烹饪学院</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <meta property="wb:webmaster" content="41201d067b6fdcab" />        <!--微博快速登录-->
    <meta property="qc:admins" content="712344326731676011745637" />    <!--qq快速登录-->
    <link rel="stylesheet" href="/Public/home/css/bootstrap/css/bootstrap.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="/Public/home/css/style.css">
    <link rel="stylesheet" href="/Public/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/home/css/owl.carousel.css">
    <link href="/Public/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet"/>
    <link href="/Public/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
    <link href="/Public/global/plugins/icheck/skins/all.css" rel="stylesheet"/>
    

    <!-- Skins -->
    <link rel="stylesheet" href="/Public/home/css/skins/blue.css">
    <link rel="stylesheet" href="/Public/home/css/style-shop.css">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="/Public/home/css/responsive.css">
    <link rel="stylesheet" href="/Public/home/css/custom.css">
    

    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png">
    
    <style>
        .question .tag {
            margin-left: 101px;
        }

        .zm-topic-cat-main li.current_topic a {
            background: #259 none repeat scroll 0 0;
            border-color: #259;
            color: #fff;
        }
    </style>

    <!--<script type="text/javascript" src="http://qzonestyle.gtimg.cn/qzone/openapi/qc_loader.js" data-appid="APPID" data-redirecturi="http://cooking.xiaolu.co/Home/Index/qc_callback.html" charset="utf-8"></script>-->
    <!--<script src="http://tjs.sjs.sinajs.cn/open/api/js/wb.js?appkey=3961159735" type="text/javascript" charset="utf-8"></script>-->
</head>
<body>

<div class="loader">
    <div class="loader_html"></div>
</div>

<div id="wrap" class="grid_1200">

    <div class="login-panel">
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="page-content">
                    <h2>登录</h2>

                    <div class="form-style form-style-3">
                        <form class="signIn-form" onclick="return false">
                            <div class="form-inputs clearfix">
                                <p class="login-text signIn">
                                    <input name="account" type="text" placeholder="登录账号" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
                                    <i class="fa fa-user"></i>
                                </p>

                                <p class="login-password signIn">
                                    <input name="pwd" type="password" placeholder="密码" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
                                    <i class="fa fa-lock"></i>
                                    <a href="#">忘记密码</a>
                                </p>
                            </div>
                            <p class="form-submit login-submit">
                                <input onclick="signIn()" type="submit" value="登录" class="button color small login-submit submit">
                            </p>

                            <div class="rememberme">
                                <label><input name="remember" type="checkbox" class="icheck"> 记住我</label>
                            </div>
                            <div class="fast-login">
                                <a style="color: #fff">快速登录</a>
                                <a style="padding-left: 7px;" target="_blank" href="#">
                                    <img src="/Public/home/images/weixin_login_btn.png"
                                         class="mb5">
                                </a>
                                <a class="wb_login" style="padding-left: 7px;" target="_blank" href="javascript:;">
                                    <img src="/Public/home/images/weibo_login_btn.png"
                                         class="mb5">
                                </a>
                                <a style="padding-left: 7px;" target="_blank" href="#">
                                    <img src="/Public/home/images/qq_login_btn.png" class="mb5">
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End page-content -->
            </div>
            <!-- End col-md-6 -->
            <div class="col-md-6">
                <div class="page-content Register">
                    <h2>现在注册</h2>

                    <p>中国烹饪学院 是中国领先的烹饪社区。
                        我们希望为初学者提供一个纯粹、高质的技术交流平台，
                        与各阶段人员一起学习、交流与成长，创造属于厨师的时代！ </p>
                    <a class="button color small signup">注册账号</a>
                </div>
                <!-- End page-content -->
            </div>
            <!-- End col-md-6 -->
        </div>
    </section>
</div>
    <!-- End login-panel -->

    <div class="panel-pop" id="signup">
    <h2>注册<i class="icon-remove"></i></h2>

    <div class="form-style form-style-3">
        <form id="signupForm" onclick="return false">
            <div class="form-inputs clearfix">
                <p>
                    <label class="required">登录账号<span>*</span></label>
                    <input id="account" name="account" type="text" onkeyup="if(/[\W]/g.test(this.value)){toastMsg('warning','只能输入英文字母与数字','提示信息');this.value='';} " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
                </p>
                <p>
                    <label class="required">用户名<span>*</span></label>
                    <input name="nickname" type="text">
                </p>

                <p>
                    <label class="required">手机号码<span>*</span></label>
                    <input name="phone" type="text" onkeyup="if(/\D/.test(this.value)){toastMsg('warning','只能输入数字','提示信息');this.value='';}">
                </p>

                <p>
                    <label class="required">密码<span>*</span></label>
                    <input id="pwd" name="pwd" type="password" value="">
                </p>

                <p>
                    <label class="required">确认密码<span>*</span></label>
                    <input name="confpwd" type="password" value="">
                </p>
            </div>
            <p class="form-submit">
                <input onclick="signUp()" type="submit" value="注册" class="button color small submit">
            </p>
        </form>
    </div>
</div>
    <!-- End signup -->

    <div class="panel-pop" id="lost-password">
    <h2>忘记密码<i class="icon-remove"></i></h2>

    <div class="form-style form-style-3">
        <p>忘记密码? 请输入您的账号和电话号码。你将收到一个带有验证码的短信。</p>

        <form id="lostForm" onsubmit="return false">
            <div class="form-inputs clearfix">
                <p>
                    <label class="required">账号<span>*</span></label>
                    <input name="lost_account" type="text">
                </p>

                <p>
                    <label class="required">手机号码<span>*</span></label>
                    <input type="text" name="lost_phone">
                    <a onclick="security_code(this)" class="button color small submit left">获取验证码</a>
                    <input style="width: 150px;margin-top: 5px;" class="left" type="text" name="security_code">
                </p>
            </div>
            <p class="form-submit">
                <a style="width:100%;text-align: center" onclick="security_code()" class="button color small submit">确认</a>
            </p>
        </form>
        <div class="clearfix"></div>
    </div>
</div>
    <!-- End lost-password -->

    <header id="header">
    <section class="container clearfix">
        <div class="logo"><a href="index.html"><img alt="" style="height: 50px;"
                                                    src="/Public/home/images/logo.png"></a></div>
        <nav class="navigation">
            <ul>
                <li class="<?php echo ($home); ?>"><a href="<?php echo U('Index/index');?>">首页</a>
                </li>
                <li class="<?php echo ($list); ?>"><a href="<?php echo U('Index/blogList');?>">美食汇聚</a>
                </li>
                <li class="<?php echo ($train); ?>"><a href="<?php echo U('Train/index');?>">烹饪培训</a>
                </li>

            </ul>
        </nav>
        <div class="header-search">
            <form>
                <div class="input-icon">
                    <button type="submit" class="search-submit"></button>
                    <input  type="text" placeholder="输入搜索内容" class="form-control">
                </div>
            </form>
        </div>
        <nav class="header-top-nav">
            <ul>
                <li><a href="<?php echo U('Contact/index');?>"><i class="fa fa-envelope-o"></i>联系我们</a></li>
                <?php if(empty($_SESSION['cooking_user_id'])): ?><li><a href="login.html" id="login-panel"><i class="fa fa-user"></i>登录</a></li>
                    <?php else: ?>
                    <li class="user">
                        <a href="<?php echo U('Profile/index');?>?id=<?php echo (session('cooking_user_id')); ?>"><img class="user-profile-img" style="max-width: 40px;float: left;margin-right: 10px;" src="<?php echo (session('cooking_user_header')); ?>" alt=""/></a>
                        <a href="javascript:;"><span class="username"><?php echo (session('cooking_user_name')); ?></span> <span class="msg"><i class="fa fa-volume-up"></i></span></a>
                        <ul class="ul-current">
                            <li><a href="<?php echo U('Profile/index');?>?id=<?php echo (session('cooking_user_id')); ?>"><i class="fa fa-user"></i> 我的主页</a></li>
                            <li><a href="<?php echo U('Profile/ask');?>"><i class="fa fa-pencil-square-o"></i> 我要发帖</a></li>
                            <li><a href="<?php echo U('Profile/draft');?>?id=<?php echo (session('cooking_user_id')); ?>"><i class="fa  fa-file-text-o"></i> 我的草稿</a></li>
                            <li><a href="<?php echo U('Profile/message');?>?id=<?php echo (session('cooking_user_id')); ?>"><i class="fa fa-comment-o"></i> 我的消息 <span class="message"></span></a></li>
                            <li><a href="<?php echo U('Behavior/signOut');?>"><i class="fa fa-sign-out"></i> 注销</a></li>
                        </ul>
                    </li><?php endif; ?>
            </ul>
        </nav>
    </section>
    <!-- End container -->
</header>

    <!-- End header -->
    
    <!-- End section-warp -->
    
    <section style="margin-top: 50px;margin-bottom: 100px;" class="container main-content">
        <div class="row">
            <div class="col-md-9">

                <div class="tabs-warp question-tab">
                    <ul class="tabs">
                        <li class="tab"><a href="#" class="all current">最新动态</a></li>
                        <li class="tab"><a href="#" class="blog-1">话题广场</a></li>

                    </ul>
                    <div class="tab-inner-warp">
                        <div class="tab-inner posts">

                        </div>
                    </div>
                    <div class="tab-inner-warp">
                        <ul class="zm-topic-cat-main clearfix">
                            <li data-id="0" class="current_topic"><a href="#all">全部</a></li>
                            <?php if(is_array($topic_screen)): foreach($topic_screen as $key=>$v): ?><li data-id="<?php echo ($v["id"]); ?>"><a href="#<?php echo ($v["name"]); ?>"><?php echo ($v["name"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                        <div class="tab-inner posts">
                        </div>
                    </div>
                </div>
                <!-- End page-content -->
            </div>
            <!-- End main -->
            <aside class="col-md-3 sidebar">

                <div class="widget widget_highest_points">
                    <h3 class="widget_title">排行榜</h3>
                    <ul>
                        <?php if(is_array($ranking)): foreach($ranking as $key=>$v): ?><li>
                                <div class="author-img">
                                    <a href="#"><img width="60" height="60"
                                                     src="<?php echo ($v["picture"]); ?>" alt=""></a>
                                </div>
                                <h6><a href="<?php echo U('Profile/index');?>?id=<?php echo ($v["id"]); ?>"><?php echo ($v["nickname"]); ?></a></h6>
                                <span class="comment"><?php echo ($v["point"]); ?> 分</span>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>

                <div class="widget">
                    <h3 class="widget_title">最近问题</h3>
                    <ul class="related-posts">
                        <?php if(is_array($latest_problem)): foreach($latest_problem as $key=>$v): ?><li class="related-item">
                                <h3><a href="<?php echo U('Index/detail');?>?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></h3>

                                <p><?php echo ($v["content"]); ?></p>

                                <div class="clear"></div>
                                <span><?php echo ($v["updated_timestamp"]); ?></span>
                            </li><?php endforeach; endif; ?>
                    </ul>
                </div>
                <?php if(!empty($hrefArr)): ?><div class="adv">
    <?php if(is_array($hrefArr)): foreach($hrefArr as $key=>$v): ?><a href="<?php echo ($v["link"]); ?>" target="_blank"><img class="img-responsive" alt=""
                                                 src="<?php echo ($v["image"]); ?>" ></a><?php endforeach; endif; ?>
</div><?php endif; ?>
            </aside>
            <!-- End sidebar -->
        </div>
        <!-- End row -->
    </section>
    <!-- End container -->

    <!-- full-section -->
    <!-- End container -->
    <footer id="footer">
    <section class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="widget widget_contact">
                    <div align="center"><img class="img-responsive" src="/Public/home/images/logo.png" alt=""/></div>
                    <p style="text-indent: 2em;margin-top: 20px;"> 提供优质的线下培训服务，建立交互问答、分享的线上社交平台，尝试一种碎片化和系统化学习的教育，让人们的生活更有滋味</p>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="widget">
                    <h3 class="widget_title">友情链接</h3>
                    <ul>
                        <li><a href="http://www.falvbao.mobi/">法律宝</a></li>
                        <li><a href="http://www.fyfans.com/">丰韵电器</a></li>
                        <li><a href="http://www.gd-caffe.com/">高达科菲</a></li>
                        <li><a href="http://www.lure-fishtank.hk/">中山市友博渔具</a></li>
                        <li><a href="http://www.sdcsh.com/">顺德慈善会</a></li>
                        <li><a href="http://zhonghui.xiaolu.co/">中惠地产</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-md-5">
                <div class="widget">
                    <h3 class="widget_title">关注我们</h3>
                    <ul class="related-posts">
                        <li class="related-item">

                            <div class="col-xs-6"><img class="img-responsive" src="/Public/home/images/weibo_QR.jpg" alt=""/></div>
                            <div class="col-xs-6"><img class="img-responsive" src="/Public/home/images/weixin_QR.jpg" alt=""/></div>

                            <div class="clear"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div><!-- End row -->
    </section><!-- End container -->
</footer><!-- End footer -->
<footer id="footer-bottom">
    <section class="container">
        <div class="copyrights f_left">Copyright 2015 佛山市顺德区顺大烹饪文化传播有限公司 | 技术支持 <a href="http://www.xiaolu.co">
            &nbsp;&nbsp;&nbsp;佛山市小鹿网络科技有限公司</a>
        </div>
        <div class="social_icons f_right">
            <ul>
                <li class="wechat"><a original-title="微信:xueyan3210" class="tooltip-n" href="javascript:;"><i
                        class="fa fa-wechat font17"></i></a></li>
                <li class="weibo"><a original-title="微博" target="_blank" class="tooltip-n" href="http://weibo.com/u/5721502570/home?topnav=1&wvr=6"><i
                        class="fa fa-weibo font17"></i></a></li>
            </ul>
        </div>
        <!-- End social_icons -->
    </section>
    <!-- End container -->
</footer>
<!-- End footer-bottom -->
</div>
<!-- End wrap -->
<div class="go-up"><i class="fa fa-angle-up"></i></div>

<!-- js -->
<script src="/Public/home/js/jquery.min.js"></script>
<script src="/Public/home/css/bootstrap/js/bootstrap.min.js"></script>
<script src="/Public/home/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/Public/home/js/jquery.easing.1.3.min.js"></script>
<script src="/Public/home/js/html5.js"></script>
<script src="/Public/home/js/jflickrfeed.min.js"></script>
<script src="/Public/home/js/jquery.inview.min.js"></script>
<script src="/Public/home/js/jquery.tipsy.js"></script>
<script src="/Public/home/js/tabs.js"></script>
<script src="/Public/home/js/jquery.flexslider.js"></script>
<script src="/Public/home/js/jquery.prettyPhoto.js"></script>
<script src="/Public/home/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="/Public/home/js/jquery.scrollTo.js"></script>
<script src="/Public/home/js/jquery.nav.js"></script>
<script src="/Public/home/js/owl.carousel.min.js"></script>
<script src="/Public/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/Public/global/plugins/bootstrap-toastr/toastr.min.js"></script>
<script src="/Public/global/plugins/jquery-validation/js/jquery.validate.js" type="text/javascript"></script>
<script src="/Public/global/plugins/icheck/icheck.min.js"></script>

<!-- PARALLAX -->
<script src="/Public/home/js/parallax/jquery.stellar.min.js"></script>
<!-- ISOTOPE -->
<script src="/Public/home/js/isotope/imagesloaded.pkgd.min.js"></script>
<script src="/Public/home/js/isotope/isotope.pkgd.min.js"></script>
<!-- HOVERDIR -->
<script src="/Public/home/js/tags.js"></script>
<script src="/Public/home/js/jquery.bxslider.min.js"></script>
<script src="/Public/admin/pages/scripts/login-soft.js" type="text/javascript"></script>

<script src="/Public/home/js/custom.js"></script>
<script src="/Public/home/js/functions.js"></script>


<!-- End js -->
<script>
    var account = '';
    var phone = '';
    jQuery(document).ready(function () {
        var name = $.cookie('cooking_username');
        if (name != null && name != '' && name != 'null') {
            $('input[name="account"]').val(name);
            $('input[name="remember"]').iCheck('check');
        }
        $('input[name="remember"]').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });

        $('.user a').click(function () {
            $(this).next("ul").toggleClass('ul-current');
            var ul = $(this).next("ul");
            var current_user_id = '<?php echo (session('cooking_user_id')); ?>';
            $.post('<?php echo U("Action/message_collect");?>', {user_id: current_user_id}, function (data) {
                if (data.code == 200) {
                    ul.find('.message').html('(' + data.collect + ')');
                } else {
//                    toastMsg('error', data.msg, '提示信息');
                }
            });
        });
        $('.user a').next("ul").mouseleave(function () {
            $(this).addClass('ul-current');
        });
        $('input[name="security_code"]').attr('disabled','disabled');

        $('.wb_login').click(function(){
            window.open('https://api.weibo.com/oauth2/authorize?client_id=3961159735&response_type=code&redirect_uri=http://cooking.xiaolu.co','newwindow','height=100,width=400,top=0,left=0,toolbar=no,menubar=no,scrollbars=no,resizable=no,location=no, status=no');
        });
    });


    function signUp() {
        var conf = $('input[name="confpwd"]').val();
        var pwd = $("#pwd").val();
        var account = $("#account").val();
        var nickname = $('input[name="nickname"]').val();
        var phone = $('input[name="phone"]').val();
        if(conf != pwd){
            console.log(conf);
            console.log(pwd);
            toastMsg('error', "密码二次输入不正确", '提示信息');
            return;
        }
        if(pwd != '' && account != '' && nickname != '' && phone != ''){
            $.post('<?php echo U("Behavior/signUp");?>', $('#signupForm').serialize(), function (data) {
                if (data.code == 200) {
                    toastMsg('success', data.msg, '提示信息');
                    setTimeout('window.location.reload()', 1000);
                } else {
                    toastMsg('error', data.msg, '提示信息');
                    $('#signupForm')[0].reset();
                }
            });
        }else{
            console.log(pwd);
            console.log(account);
            console.log(nickname);
            console.log(phone);
            toastMsg('error', '请补全内容', '提示信息');
        }
    }

    function signIn() {
        if ($('input[name="account"]').val() == '' || $('input[name="pwd"]').val() == '') {
            toastMsg('warning', '请输入内容', '提示信息');
        } else {
            $.post('<?php echo U("Behavior/signIn");?>', $('.signIn-form').serialize(), function (data) {
                if (data.code == 200) {
                    if ($('input[name="remember"]').attr('checked') == 'checked') { // 记住用户名
                        $.cookie('cooking_username', data.name);
                    } else {
                        $.cookie('cooking_username', null);
                    }
                    window.location.href = data.href;
                } else {
                    toastMsg('error', data.msg, '提示信息');
                }
            });
        }
    }

    function security_code(obj){
        account = $('input[name="lost_account"]').val();
        phone = $('input[name="lost_phone"]').val();
        var code = $('input[name="security_code"]').val();
        $.post('<?php echo U("Index/security_code");?>', {account:account,phone:phone,sms_code:code}, function (data) {
            if (data.code == 200) {
                if(data.enable == 1){
                    $('input[name="security_code"]').removeAttr('disabled');
                    time($(obj));
                }
                if(data.reset == 1){
                    var html = '';
                    html += '<input type="text" name="reset_pwd"/> ' +
                    '<a style="width:100%;text-align: center" onclick="resetPwd()" class="button color small submit">重置密码</a>';
                    $('#lostForm').html(html);
                }
                toastMsg('success', data.msg, '提示信息');
            } else {
                toastMsg('error', data.msg, '提示信息');
            }
        });
    }
    var wait=60;
    function time(o) {
        if (wait == 0) {
            o.attr("onclick","security_code(this)");
            o.html("获取验证码");
            wait = 60;
        } else {
            o.removeAttr("onclick");
            o.html("重新发送(" + wait + ")");
            wait--;
            setTimeout(function() {time(o)}, 1000);
        }
    }

    function resetPwd(){
        var pwd = $('input[name="reset_pwd"]').val();
        $.post('<?php echo U("Behavior/resetPwd");?>',{account:account,phone:phone,pwd:pwd}, function (data) {
            if (data.code == 200) {
                toastMsg('success', data.msg, '提示信息');
                setTimeout('window.location.reload()',1000);
            } else {
                toastMsg('error', data.msg, '提示信息');
            }
        });
    }
</script>


    <script>
        var curPage = 1;
        var html = '';
        var commenthtml = '';
        var ahtml = '';
        var chtml = '';
        var next = false;
        var current_user_id = '<?php echo (session('cooking_user_id')); ?>';
        var current_user_name = '<?php echo (session('cooking_user_name')); ?>';
        var reply_to_user_id = '';
        var zm_comment_editable = '';
        var comment_post_id = '';
        jQuery(document).ready(function () {
            loadMore(false);
            $(".link").on("click", function (event) {
                event.preventDefault();//the default action of the event will not be triggered
                $("html, body").animate({scrollTop: ($("#" + this.href.split("#")[1]).offset().top)}, 600);
            });

            $('.tab').click(function () {
                html = '';
                curPage = 1;
                loadMore(false);
            });

        });

        function loadMore(n) {
            if (n == true) {
                next = true;
                curPage = curPage * 1 + 1;
            }
            setTimeout(function () {      // <-- Simulate network congestion, remove setTimeout from production!
                $.ajax({
                    type: "post",
                    data: {
                        page: curPage
                    },
                    url: "<?php echo U('dataList');?>",
                    success: function (data) {
                        if (data.data.length !== 0 && data.curPage != 1 && next != true) {
                            curPage = curPage * 1 + 1;
                        }
                        $.each(data.data, function (k, v) {
                            html += '<article class="question question-type-normal topic topic_' + v.topic + '">' +
                            '<p class="tag">【' + v.class_name + '】' + v.tags + '</p>' +
                            '<h2>' +
                            '<a href="<?php echo U("Index/detail");?>?id=' + v.id + '">' + v.title + '</a>' +
                            '</h2>' +
                            '<a class="question-report" href="<?php echo U("Index/detail");?>?id=' + v.id + '">回复</a>' +
                            '<div class="question-author">' +
                            '<a href="#" original-title="' + v.nick_name + '" class="question-author-img tooltip-n"><span></span>' +
                            '<img alt="" src="' + v.head_img + '"></a>' +
                            '</div>' +
                            '<div class="question-inner">' +
                            '<div class="clearfix"></div>' +
                            '<p class="question-desc summary">' + v.content_m +
                            '<span>[...]</span> <a class="toggle-expand" href="javascript:;">显示全部</a>' +
                            '</p>' +
                            '<div class="question-desc content" style="display: none;">' + v.content +
                            '</div>' +
                            '<span onclick="comment(this)" class="question-comment" value="' + v.id + '"><a href="javascript:;"><i class="fa fa-comment"></i>' + v.replies + ' 回复</a></span>' +
                            '<div class="question-details">' +
                            '<span class="question-favorite"><i class="fa fa-star"></i>' + v.collect + '</span>' +
                            '</div>' +
                            '<span class="question-category"><a href="javascript:;" onclick="likePost(' + v.id + ',this)">' + v.like_html + '</a></span>' +
                            '<span class="question-date"><i class="fa fa-clock-o"></i>' + v.minute + '</span>' +
                            '<span class="question-view"><i class="fa fa-user"></i>' + v.views + ' 阅读</span>' +
                            '<span class="question-pack" style="display: none;"><a href="javascript:;">' +
                            '<i class="fa fa-upload"></i>收起</a></span>' +
                            '<div class="clearfix"></div>' +
                            '<div data-count="22" class="zm-comment-box" style="display: none;">' +
                            '<i class="icon icon-spike zm-comment-bubble" style="display: inline; left: 17px;"></i>' +
                            '<a name="comment-0" class="zg-anchor-hidden"></a>' +
                            '<div class="zm-comment-list">' +

                            '</div>' +
                            '<div class="zm-comment-form zm-comment-box-ft">' +
                            '<div contenteditable="true" class="zm-comment-editable editable"aria-label="写下你的评论…"><p style="color:#999">写下你的评论…</p></div>' +
                            '<div class="zm-command zg-clear">' +
                            '<a class="zg-right zg-btn-blue" onclick="reply(' + v.id + ',this)" name="addnew" href="javascript:;">评论</a>' +
                            '<a class="zm-command-cancel" name="closeform" href="javascript:;">取消</a>' +
                            '</div>' +
                            '<div class="zm-comment-info">' +
                            '</div>' +
                            '</div>' +
                            '</div></article>';
                        });
                        if (data.data.length !== 0) {
                            ahtml = '';
                            if (data.data.length >= 8) {
                                ahtml = '<a href="javascript:;" onclick="loadMore(true)" class="load-questions"><i class="fa fa-refresh"></i>加载更多</a>';
                            }
                            $('.posts').html('');
                            $('.posts').append(html + ahtml);
                            next = false;
                            toggle_expand();
                            toggle_topic();
                            jQuery(".tooltip-n").tipsy({fade: true, gravity: "s"});
                        } else {
                            toastMsg('warning', '没有更多数据', '操作提示');
                        }
                    },
                    error: function () {
                        toastMsg('warning', '您操作得太快了，数据加载不过来', '操作提示');
                    }
                });
            }, 500);
        }

        function toggle_expand() {
            $('.question-inner').each(function () {
                $(this).find('.toggle-expand').click(function () {
                    $(this).parents().siblings('.content').removeAttr('style');
                    $(this).parents().siblings('.question-pack').removeAttr('style');
                    $(this).parent().hide();
                });
                $(this).find('.question-pack').click(function () {
                    $(this).siblings('.content').hide();
                    $(this).siblings('.summary').show();
                    $(this).hide();

                });
            });
        }

        function toggle_topic() {
            $('.zm-topic-cat-main').find('li').click(function () {
                var topic_id = $(this).attr('data-id');
                $('.zm-topic-cat-main').find('li').removeClass('current_topic');
                $(this).addClass('current_topic');
                $('.topic').hide();
                $('.topic_' + topic_id).show();
                if (topic_id == 0) {
                    $('.topic').show();
                }
            });
        }

        function comment(obj) {
            commenthtml = '';
            comment_post_id = $(obj).attr('value');
            if ($(obj).siblings('.zm-comment-box').attr('style')) {
                $(obj).siblings('.zm-comment-box').removeAttr('style');
                commentData();
            } else {
                $(obj).siblings('.zm-comment-box').css('display', 'none');
            }
            $('.zm-comment-editable').focusin(function () {
                $(this).html(zm_comment_editable);
                $(this).parent().addClass('expanded');
            });
            $('.zm-command-cancel').click(function () {
                $(this).parents('.zm-comment-form').removeClass('expanded');
                $(this).parents().prev('.zm-comment-editable').html('<p style="color:#999">写下你的评论…</p>');
            });
        }

        function commentData() {
            $.ajax({
                type: "post",
                data: {
                    page: curPage,
                    post_id: comment_post_id
                },
                url: "<?php echo U('commentDataList');?>",
                success: function (data) {
                    if (data.data.length !== 0 && data.curPage != 1) {
                        curPage = curPage * 1 + 1;
                    }
                    $.each(data.data, function (k, v) {
                        commenthtml += '<div data-id="' + v.id + '" class="zm-item-comment">' +
                        '<a name="comment-' + v.id + '" class="zg-anchor-hidden"></a>' +
                        '<a href="/people/action-double-51" class="zm-item-link-avatar" data-tip="p$t$action-double-51" data-original_title="' + v.from_user_name + '">' +
                        '<img class="zm-item-img-avatar" src="' + v.from_user_header_img + '">' +
                        '</a>' +
                        '<div class="zm-comment-content-wrap">' +
                        '<div class="zm-comment-hd">' +
                        '<a class="zg-link" href="<?php echo U("Profile/index");?>?user_id=' + v.from_user_id + '" data-original_title="' + v.from_user_name + '">' + v.from_user_name + '</a> <span class="desc">' + v.author + '</span> ' +
                        ' <span class="desc"> 回复 </span><a title="' + v.to_user_name + '" class="zg-link" href="<?php echo U("Profile/index");?>?user_id=' + v.to_user_id + '">' + v.to_user_name + '</a>' +
                        '</div>' +
                        '<div class="zm-comment-content">' +
                        v.content +
                        '</div>' +
                        '<div class="zm-comment-ft">' +
                        '<span class="date">' + v.created_timestamp + '</span>' +
                        '<a name="reply_comment" class="reply zm-comment-op-link" href="javascript:;" onclick="reply_to(' + v.from_user_id + ',this)">' +
                        '<i class="zg-icon zg-icon-comment-reply"></i>回复</a>' +
                        '</div>' +
                        '</div>' +
                        '</div>';
                    });
                    if (data.data.length !== 0) {
                        chtml = '<a name="load-more" class="load-more" href="<?php echo U("Index/detail");?>?id=' + comment_post_id + '">' +
                        '<span class="text">显示全部评论<i class="spinner spinner-gray"></i></span>' +
                        '</a>';
                        $('.question-comment[value="' + comment_post_id + '"]').siblings('.zm-comment-box').find('.zm-comment-list').html('');
                        $('.question-comment[value="' + comment_post_id + '"]').siblings('.zm-comment-box').find('.zm-comment-list').append(commenthtml + chtml);
                    } else {
//                                toastMsg('warning', '没有回复', '操作提示');
                    }
                },
                error: function () {
                    toastMsg('warning', '您操作得太快了，数据加载不过来', '操作提示');
                }
            });
        }

        function reply(id, obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            var content = $(obj).parent().prev('.zm-comment-editable').html();
            $.ajax({
                type: "post",
                data: {
                    post_id: id,
                    from_user_id: current_user_id,
                    to_user_id: reply_to_user_id,
                    content: content
                },
                url: "<?php echo U('Action/reply');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        commenthtml = '';
                        commentData();
                        $(obj).next().click();
                    } else if (data.code == 400) {
                        toastMsg('error', data.msg, '操作提示');
                    } else if (data.code == 401) {
                        toastMsg('warning', data.msg, '操作提示');
                    }
                },
                error: function () {
                    toastMsg('warning', '您操作得太快了', '操作提示');
                }
            });
        }

        function reply_to(t_id, obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            var t_name = $(obj).parents('.zm-item-comment').find('.zm-item-link-avatar').attr('data-original_title');
            if (current_user_id == t_id) {
                reply_to_user_id = '';
                zm_comment_editable = current_user_name + ':';
                $(obj).parents('.zm-comment-box').find('.zm-comment-editable').html(current_user_name + ':');
            } else {
                reply_to_user_id = t_id;
                zm_comment_editable = current_user_name + ':@' + t_name + '';
                $(obj).parents('.zm-comment-box').find('.zm-comment-editable').html(current_user_name + ':@' + t_name);
            }
        }

        function likePost(id, obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            $.ajax({
                type: "post",
                data: {
                    post_id: id,
                    user_id: current_user_id
                },
                url: "<?php echo U('Action/likePosts');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        if (data.ulike == 1) {
                            $(obj).html('<i class="fa fa-thumbs-o-down"></i>取消点赞');
                        } else if (data.ulike == 2) {
                            $(obj).html('<i class="fa fa-thumbs-o-up"></i>点赞');
                        }
                    } else if (data.code == 400) {
                        toastMsg('error', data.msg, '操作提示');
                    } else if (data.code == 401) {
                        toastMsg('warning', data.msg, '操作提示');
                    }
                },
                error: function () {
                    toastMsg('warning', '您操作得太快了', '操作提示');
                }
            });
        }

    </script>



</body>
</html>