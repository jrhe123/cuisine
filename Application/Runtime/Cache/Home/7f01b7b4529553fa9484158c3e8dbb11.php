<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>中国烹饪学院 - 比新东方更牛逼</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="stylesheet" href="/Public/home/css/bootstrap/css/bootstrap.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="/Public/home/css/style.css">
    <link rel="stylesheet" href="/Public/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/home/css/owl.carousel.css">
    <link href="/Public/global/plugins/bootstrap-toastr/toastr.min.css" rel="stylesheet"/>
    <link href="/Public/admin/pages/css/login-soft.css" rel="stylesheet" type="text/css"/>
    

    <!-- Skins -->
    <link rel="stylesheet" href="/Public/home/css/skins/blue.css">
    <link rel="stylesheet" href="/Public/home/css/style-shop.css">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="/Public/home/css/responsive.css">
    <link rel="stylesheet" href="/Public/home/css/custom.css">
    

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.png">
    

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
                                    <input name="account" type="text" placeholder="用户名" onkeyup="value=value.replace(/[\W]/g,'') " onbeforepaste="clipboardData.setData('text',clipboardData.getData('text').replace(/[^\d]/g,''))">
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
                                <label><input name="remember" type="checkbox" checked="checked"> 记住我</label>
                            </div>
                            <div class="fast-login">
                                <a style="color: #fff">快速登录</a>
                                <a style="padding-left: 7px;" target="_blank" href="#">
                                    <img src="/Public/home/images/weixin_login_btn.png"
                                         class="mb5">
                                </a>
                                <a style="padding-left: 7px;" target="_blank" href="#">
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

                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravdio, sit amet
                        suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequa. Vivamus vulputate
                        posuere nisl quis consequat.</p>
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
                    <input name="account" type="text">
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
                    <input name="pwd" type="password" value="">
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
        <p>忘记密码? 请输入您的用户名和电子邮件地址。你将收到一个链接来创建一个新的密码通过电子邮件。</p>

        <form>
            <div class="form-inputs clearfix">
                <p>
                    <label class="required">用户名<span>*</span></label>
                    <input type="text">
                </p>

                <p>
                    <label class="required">邮箱<span>*</span></label>
                    <input type="email">
                </p>
            </div>
            <p class="form-submit">
                <input type="submit" value="确认" class="button color small submit">
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
                        <a href="<?php echo U('Profile/index');?>?id=<?php echo (session('cooking_user_id')); ?>"><img style="max-width: 40px;float: left;margin-right: 10px;" src="/Public/home/images/admin.jpg" alt=""/></a>
                        <a href="javascript:;"><span class="username"><?php echo (session('cooking_user_name')); ?></span> <span class="msg"><i class="fa fa-volume-up"></i></span></a>
                        <ul class="current">
                            <li><a href="<?php echo U('Profile/index');?>?id=<?php echo (session('cooking_user_id')); ?>"><i class="fa fa-user"></i> 我的主页</a></li>
                            <li><a href="<?php echo U('Profile/ask');?>"><i class="fa fa-pencil-square-o"></i> 我要发帖</a></li>
                            <li><a href="#"><i class="fa  fa-file-text-o"></i> 我的草稿</a></li>
                            <li><a href="#"><i class="fa fa-comment-o"></i> 我的消息(100)</a></li>
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
                <div class="row">
                    <div class="user-profile">
                        <div class="col-md-12">
                            <div class="page-content">
                                <a href="<?php echo U('Profile/edit');?>"><h2>小鹿</h2></a>

                                <div class="user-profile-img"><img width="60" height="60"
                                                                   src="/Public/home/images/admin.jpg" alt="admin">
                                </div>
                                <div class="ul_list ul_list-icon-ok about-user">
                                    <ul>
                                        <li><i class="fa fa-plus"></i>注册时间 : <span>2014-6-10</span></li>
                                        <li><i class="fa fa-map-marker"></i>地区 : <span>广东 佛山</span></li>
                                    </ul>
                                </div>
                                <p>佛山市小鹿网络科技有限公司成立于2010年，致力为佛山企业结合本土优势与移动互联网，提供完整的转型升级解决方案。主要业务范围:App开发、网站开发、易订货</p>

                                <div class="clearfix"></div>
                            </div>
                            <!-- End page-content -->
                        </div>
                        <!-- End col-md-12 -->
                        <div class="col-md-12">
                            <div class="page-content page-content-user-profile">
                                <div class="user-profile-widget">
                                    <h2>用户数据</h2>

                                    <div class="ul_list ul_list-icon-ok">
                                        <ul>
                                            <li><i class="fa fa-question-sign"></i><a href="<?php echo U('Profile/question');?>">我的文章<span> ( <span>30</span> ) </span></a>
                                            </li>
                                            <li><i class="fa fa fa-book"></i><a href="<?php echo U('Profile/course');?>">我的课程<span> ( <span>10</span> ) </span></a>
                                            </li>
                                            <li><i class="fa fa-comment"></i><a
                                                    href="<?php echo U('Profile/answers');?>">我的回答<span> ( <span>10</span> ) </span></a>
                                            </li>
                                            <li><i class="fa fa-star"></i><a
                                                    href="<?php echo U('Profile/star');?>">我的收藏<span> ( <span>3</span> ) </span></a>
                                            </li>
                                            <li><i class="fa fa-file-o"></i><a href="<?php echo U('Profile/draft');?>">我的草稿<span> ( <span>3</span> ) </span></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- End user-profile-widget -->
                            </div>
                            <!-- End page-content -->
                        </div>
                        <!-- End col-md-12 -->
                    </div>
                    <!-- End user-profile -->
                </div>
                <!-- End row -->
                <div class="clearfix"></div>
                <div class="page-content page-content-user">
                    <div class="user-questions">
                        <div class="boxedtitle page-title" style="padding-top: 20px;"><h2>我的课程</h2></div>
                        <article class="post blog_2 clearfix">
                            <div class="post-inner">
                                <h2 class="post-title"><span class=""><i class="fa fa-book"></i></span> <a
                                        href="<?php echo U('Train/article');?>">蛋糕基础培训班</a></h2>

                                <div class="post-img"><a href="<?php echo U('Train/article');?>"><img
                                        src="/Public/home/images/image-1.jpg" alt=""></a></div>
                                <div class="post-meta">
                                    <span class="meta-author"><i class="icon-user"></i><a href="#">李老师</a></span>
                                    <span class="meta-date"><i class="icon-time"></i>2015-07-13</span>
                                    <span class="meta-comment"><i class="icon-comments-alt"></i><a
                                            href="#">收费课程</a></span>
                                </div>
                                <div class="post-content">
                                    <p>培养目标：面向没有基础的初学者，从裱花基础知识到蛋糕制作工艺，学完后即可参加工作，技术掌握全面，是蛋糕店最佳招聘对象 </p>
                                    <span class="post-price">￥3600</span>
                                    <a href="<?php echo U('Train/article');?>" class="post-read-more button color small">查看详细</a>
                                </div>
                                <!-- End post-content -->
                            </div>
                            <!-- End post-inner -->
                        </article>
                        <!-- End article.post -->

                        <article class="post blog_2 clearfix">
                            <div class="post-inner">
                                <h2 class="post-title"><span class=""><i class="fa fa-book"></i></span> <a
                                        href="<?php echo U('Train/article');?>">粤菜基础培训班</a></h2>

                                <div class="post-img"><a href="<?php echo U('Train/article');?>"><img
                                        src="/Public/home/images/image-2.jpg" alt=""></a></div>
                                <div class="post-meta">
                                    <span class="meta-author"><i class="icon-user"></i><a href="#">李老师</a></span>
                                    <span class="meta-date"><i class="icon-time"></i>2015-07-13</span>
                                    <span class="meta-comment"><i class="icon-comments-alt"></i><a
                                            href="#">收费课程</a></span>
                                </div>
                                <div class="post-content">
                                    <p>培养目标：面向没有基础的初学者，从裱花基础知识到蛋糕制作工艺，学完后即可参加工作，技术掌握全面，是蛋糕店最佳招聘对象 </p>
                                    <span class="post-price">￥3600</span>
                                    <a href="<?php echo U('Train/article');?>" class="post-read-more button color small">查看详细</a>
                                </div>
                                <!-- End post-content -->
                            </div>
                            <!-- End post-inner -->
                        </article>
                        <!-- End article.post -->
                        <article class="post blog_2 clearfix">
                            <div class="post-inner">
                                <h2 class="post-title"><span class=""><i class="fa fa-book"></i></span> <a
                                        href="<?php echo U('Train/article');?>">拉面基础培训班</a></h2>

                                <div class="post-img"><a href="<?php echo U('Train/article');?>"><img
                                        src="/Public/home/images/image-3.jpg" alt=""></a></div>
                                <div class="post-meta">
                                    <span class="meta-author"><i class="icon-user"></i><a href="#">李老师</a></span>
                                    <span class="meta-date"><i class="icon-time"></i>2015-07-13</span>
                                    <span class="meta-comment"><i class="icon-comments-alt"></i><a
                                            href="#">收费课程</a></span>
                                </div>
                                <div class="post-content">
                                    <p>培养目标：面向没有基础的初学者，从裱花基础知识到蛋糕制作工艺，学完后即可参加工作，技术掌握全面，是蛋糕店最佳招聘对象 </p>
                                    <span class="post-price">￥3600</span>
                                    <a href="<?php echo U('Train/article');?>" class="post-read-more button color small">查看详细</a>
                                </div>
                                <!-- End post-content -->
                            </div>
                            <!-- End post-inner -->
                        </article>
                        <!-- End article.post -->
                        <article class="post blog_2 clearfix">
                            <div class="post-inner">
                                <h2 class="post-title"><span class=""><i class="fa fa-book"></i></span> <a
                                        href="<?php echo U('Train/article');?>">面包基础培训班</a></h2>

                                <div class="post-img"><a href="<?php echo U('Train/article');?>"><img
                                        src="/Public/home/images/image-4.jpg" alt=""></a></div>
                                <div class="post-meta">
                                    <span class="meta-author"><i class="icon-user"></i><a href="#">李老师</a></span>
                                    <span class="meta-date"><i class="icon-time"></i>2015-07-13</span>
                                    <span class="meta-comment"><i class="icon-comments-alt"></i><a
                                            href="#">收费课程</a></span>
                                </div>
                                <div class="post-content">
                                    <p>培养目标：面向没有基础的初学者，从裱花基础知识到蛋糕制作工艺，学完后即可参加工作，技术掌握全面，是蛋糕店最佳招聘对象 </p>
                                    <span class="post-price">￥3600</span>
                                    <a href="<?php echo U('Train/article');?>" class="post-read-more button color small">查看详细</a>
                                </div>
                                <!-- End post-content -->
                            </div>
                            <!-- End post-inner -->
                        </article>
                        <!-- End article.post -->
                    </div>
                </div>

                <div class="height_20"></div>

                <div class="pagination">
                    <a href="#" class="prev-button"><i class="fa fa-angle-left"></i></a>
                    <span class="current">1</span>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <span>...</span>
                    <a href="#">11</a>
                    <a href="#">12</a>
                    <a href="#">13</a>
                    <a href="#" class="next-button"><i class="fa fa-angle-right"></i></a>
                </div>
                <!-- End pagination -->
            </div>
            <!-- End main -->

            <!-- End main -->
            <aside class="col-md-3 sidebar">

                <div class="adv">
                    <img class="img-responsive"
                         src="http://img2.ph.126.net/DX8-KjkEGKHMPjlxhB2olg==/6630706026374588936.png" alt=""/>
                    <img class="img-responsive"
                         src="http://img2.ph.126.net/zE-Gblb3pwd3ZJ8fFX7xbA==/6630581781559952516.jpg" alt=""/>
                    <img class="img-responsive"
                         src="http://img2.ph.126.net/25Iv1kfv_rjQ8lsKsHSfiA==/1130966456441248349.png" alt=""/>
                    <img class="img-responsive" alt=""
                         src="http://static.googleadsserving.cn/pagead/imgad?id=CICAgKDTvZi0WRCsAhjYBDII1Ab010fInQY">
                </div>
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
                <li class="wechat"><a original-title="微信" class="tooltip-n" href="#"><i
                        class="fa fa-wechat font17"></i></a></li>
                <li class="weibo"><a original-title="微博" class="tooltip-n" href="#"><i
                        class="fa fa-weibo font17"></i></a></li>
                <li class="qq"><a original-title="QQ" class="tooltip-n" href="#"><i
                        class="fa fa-qq font17"></i></a></li>
                <li class="tencent-weibo"><a original-title="腾信微博" class="tooltip-n" href="#"><i
                        class="fa fa-tencent-weibo font17"></i></a></li>
                <li class="baidu"><a original-title="百度" class="tooltip-n" href="#"><i
                        class="fa fa-paw font17"></i></a></li>
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
    jQuery(document).ready(function () {
        var name = $.cookie('cooking_username');
        if (name != null && name != '' && name != 'null') {
            $('.username').html(name);
            $('input[name="remember"]').attr('checked', true);
        }

        $('.user a').click(function () {
            $(this).next("ul").toggleClass('current');
        });
        $('.user a').next("ul").mouseleave(function(){
            $(this).addClass('current');
        });
    });
    function signUp() {
        $.post('<?php echo U("Behavior/signUp");?>', $('#signupForm').serialize(), function (data) {
            if (data.code == 200) {
                toastMsg('success', data.msg, '提示信息');
                setTimeout('window.location.reload()', 1000);
            } else {
                toastMsg('error', data.msg, '提示信息');
                $('#signupForm')[0].reset();
            }
        });
    }

    function signIn() {
        if ($('input[name="account"]').val() == '' || $('input[name="pwd"]').val() == '') {
            toastMsg('warning', '请输入内容', '提示信息');
        }else{
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
</script>


    <script>
        var blog = '<?php echo ($blog); ?>';
        jQuery(document).ready(function () {
            $(blog).click();
            $(".link").on("click", function (event) {
                event.preventDefault();//the default action of the event will not be triggered
                $("html, body").animate({scrollTop: ($("#" + this.href.split("#")[1]).offset().top)}, 600);
            });
            $('.question-comment').click(function () {
                if ($(this).siblings('.zm-comment-box').attr('style')) {
                    $(this).siblings('.zm-comment-box').removeAttr('style');
                } else {
                    $(this).siblings('.zm-comment-box').css('display', 'none');
                }
            });

            $('.zm-comment-editable').focusin(function () {
                $(this).html('');
                $(this).parent().addClass('expanded');
            });
            $('.zm-command-cancel').click(function () {
                $(this).parents('.zm-comment-form').removeClass('expanded');
                $(this).parents().prev('.zm-comment-editable').html('<p style="color:#999">写下你的评论…</p>');
            });

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

        });
    </script>



</body>
</html>