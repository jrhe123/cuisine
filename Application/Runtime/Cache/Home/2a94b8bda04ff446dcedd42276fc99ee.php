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
        @media (max-width: 992px) {
            #myCarousel img {
                width: 100%;
                height: 100%;
            }
        }
        @media (min-width: 457px) and (max-width: 767px) {
            #myCarousel img {
                width: 100%;
                height: 680px;
            }
        }

        @media (min-width: 992px) {
            #myCarousel img {
                width: 100%;
                height: 550px;
            }
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
    
        <div class="section-warp col-md-12 col-sm-12" style="margin-bottom: 0">
            <div class="flexslider flex-slider" style="margin-bottom: 0">
                <ul class="slides">
                    <?php if(is_array($sliders)): foreach($sliders as $key=>$v): ?><li>
                            <a href="<?php echo U('look');?>?id=<?php echo ($v["id"]); ?>"><img src="<?php echo ($v["picture"]); ?>" alt=""></a>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>
            <!-- End flexslider -->
        </div>
        <div class="clearfix"></div>
    
    <!-- End section-warp -->
    
    <section class="cooking-1" style="padding-bottom: 0">
        <div class="container main-content ">
            <div class="col-md-12 sale-product" style="padding-bottom: 60px;margin-bottom: 0;text-align: center;">

                <h2 style="font-weight: normal">提供优质的高等学历教育资源与行业相关培训服务</h2>
            </div>
            <div class="row">
                <div class="col-sm-5 col-md-5 no-padding" style="">
                    <div class="content-slider" style="margin-bottom: 30px;">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <div class="carousel-inner">
                                <?php if(is_array($course_article)): foreach($course_article as $k=>$v): if($k == 0): ?><div class="item active">
                                            <a href="<?php echo U('Train/index');?>"><img style=""
                                                                               src="<?php echo ($v["picture"]); ?>"
                                                                               class="img-responsive" alt=""></a>

                                            <div class="carousel-caption">
                                                <h4><?php echo ($v["title"]); ?></h4>

                                                <p><?php echo ($v["description"]); ?></p>
                                            </div>
                                        </div>
                                        <?php else: ?>
                                        <div class="item">
                                            <a href="<?php echo U('Train/index');?>"><img style=""
                                                                               src="<?php echo ($v["picture"]); ?>"
                                                                               class="img-responsive" alt=""></a>

                                            <div class="carousel-caption">
                                                <h4><?php echo ($v["title"]); ?></h4>

                                                <p><?php echo ($v["description"]); ?></p>
                                            </div>
                                        </div><?php endif; endforeach; endif; ?>
                            </div>
                            <!-- Carousel nav -->
                            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="col-md-12 no-padding">
                        <a target="_blank" class=" " href="javascript:;">
                            <img class="img-responsive" style="width: 100%;"
                                 src="<?php echo ($course_ad); ?>">
                        </a>
                    </div>
                </div>
                <div class="col-sm-7 col-md-7">
                    <ul class="products col-3">
                        <?php if(is_array($course_two)): foreach($course_two as $key=>$v): ?><li class="product">

                                <div class="product-container">

                                    <a href="<?php echo U('Train/article');?>?id=<?php echo ($v["id"]); ?>">

                                        <img src="<?php echo ($v["picture"]); ?>" alt="">

                                        <p class="title"><?php echo ($v["title"]); ?></p>
                                        <?php if(!empty($v["class_hour"])): ?><p class="orgName">学习周期：<?php echo ($v["class_hour"]); ?>天课时</p><?php endif; ?>

                                    </a>
                                    <?php if(!empty($v["course_price"])): ?><h5 class="price"><?php echo ($v["course_price"]); ?></h5><?php endif; ?>
                                    <?php if(!empty($v["tips"])): if($v["tips"] == 1): ?><span class="tag new">新款课程</span>
                                            <?php elseif($v["tips"] == 2): ?>
                                            <span class="tag sale">火热</span><?php endif; endif; ?>
                                </div>
                                <!-- product-container -->

                            </li><?php endforeach; endif; ?>
                    </ul>

                </div>
            </div>
            <!-- End row -->
        </div>
    </section>
    <!-- End container -->

    <section class="cooking-5 content-center">
        <div class="container main-content " align="center">
            <div class="col-md-12 sale-product" style="padding-top: 00px;padding-bottom: 60px;margin-bottom: 0">
                <h2>网上烹饪课程</h2>

                <p>大量精心制作的课程教材，探索你身边美食的秘密，你懂的烹饪科学技术，日常烹饪或专业厨房，都能用的着</p>
            </div>

            <!-- End row -->
        </div>
        <div class="container">
            <div class="isotope col-3 gutter" style="margin-bottom:0;">
                <?php if(is_array($course_three)): foreach($course_three as $key=>$v): ?><div class="isotope-item">

                        <div class="portfolio-item">

                            <div class="portfolio-item-thumbnail">

                                <img src="<?php echo ($v["picture"]); ?>" alt="">

                                <div class="portfolio-item-hover">

                                    <div class="portfolio-item-details" align="center">

                                        <p><a href="<?php echo U('Train/article');?>?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></p>

                                        <p><?php echo ($v["description"]); ?></p>
                                    </div>
                                    <!-- portfolio-item-details -->

                                    <a class="fancybox-portfolio-gallery zoom-action"
                                       href="/Public/home/images/image-1.jpg"><i
                                            class="mt-icons-expand3"></i></a>

                                </div>
                                <!-- portfolio-item-hover -->

                            </div>
                            <!-- portfolio-item-thumbnail -->

                        </div>
                        <!-- portfolio-item -->

                    </div><?php endforeach; endif; ?>
                <!-- isotope-item -->

            </div>
        </div>
    </section>
    <div class="container main-content " align="center">
        <div class="col-md-12 sale-product" style="padding-top: 60px;padding-bottom: 60px;margin-bottom: 0">
            <h2>美食荟萃</h2>

            <p>食材有营，相信食物的力量；烹饪无界，分享饮食的知识和经验，这里有问题，同样有分享，这样才有意义和收获</p>
        </div>

        <!-- End row -->
    </div>
    <section class="full-section" id="section-26">

        <div class="full-section-shadow-top"></div>

        <div class="parallax-multilayer">
            <div class="parallax-layer" data-y="45" data-x="65" data-stellar-ratio="1.2">
                <img alt="" src="/Public/home/images/parallax-2-image-1.png">
            </div>
            <div class="parallax-layer" data-y="40" data-x="30" data-stellar-ratio="0.6">
                <img alt="" src="/Public/home/images/parallax-2-image-8.png">
            </div>
            <?php if(!empty($posts_four[4])): ?><div class="parallax-layer" data-y="4" data-x="45" data-stellar-ratio="1.5">
                    <!--<img alt="" src="/Public/home/images/parallax-2-image-3.png">-->
                    <div><img class="user-profile-img margin-top-15" src="<?php echo ($posts_four[4]["head_img"]); ?>" alt=""/><span
                            class="left dialog-1"
                            style="font-size: 18px;margin-top: 15px;margin-left: 15px;"><a
                            class="dialog" href="<?php echo U('Index/detail');?>?id=<?php echo ($posts_four[4]["id"]); ?>"><?php echo ($posts_four[4]["title"]); ?></a></span>
                    </div>
                </div><?php endif; ?>
            <?php if(!empty($posts_four[3])): ?><div class="parallax-layer" data-y="30" data-x="52" data-stellar-ratio="0.81">
                    <!--<img alt="" src="/Public/home/images/parallax-2-image-4.png">-->
                    <div><span class="left dialog-2" style="font-size: 18px;margin-top: 15px;margin-right: 15px;"><a
                            class="dialog"
                            href="<?php echo U('Index/detail');?>?id=<?php echo ($posts_four[3]["id"]); ?>"><?php echo ($posts_four[3]["title"]); ?></a></span><img
                            class="user-profile-img margin-top-15" src="<?php echo ($posts_four[3]["head_img"]); ?>" alt=""/></div>
                </div><?php endif; ?>
            <?php if(!empty($posts_four[2])): ?><div class="parallax-layer" data-y="13" data-x="45" data-stellar-ratio="1.78">
                    <!--<img alt="" src="/Public/home/images/parallax-2-image-5.png">-->
                    <div><img class="user-profile-img margin-top-15" src="<?php echo ($posts_four[2]["head_img"]); ?>" alt=""/><span
                            class="left dialog-3"
                            style="font-size: 18px;margin-top: 15px;margin-left: 15px;"><a
                            class="dialog" href="<?php echo U('Index/detail');?>?id=<?php echo ($posts_four[2]["id"]); ?>"><?php echo ($posts_four[2]["title"]); ?></a></span>
                    </div>
                </div><?php endif; ?>
            <?php if(!empty($posts_four[1])): ?><div class="parallax-layer" data-y="15" data-x="45" data-stellar-ratio="0.8">
                    <!--<img alt="" src="/Public/home/images/parallax-2-image-6.png">-->
                    <div><img class="user-profile-img margin-top-15" src="<?php echo ($posts_four[1]["head_img"]); ?>" alt=""/><span
                            class="left dialog-4"
                            style="font-size: 18px;margin-top: 15px;margin-left: 15px;"><a
                            class="dialog" href="<?php echo U('Index/detail');?>?id=<?php echo ($posts_four[1]["id"]); ?>"><?php echo ($posts_four[1]["title"]); ?></a></span>
                    </div>
                </div><?php endif; ?>
            <?php if(!empty($posts_four[0])): ?><div class="parallax-layer" data-stellar-ratio="1.02" data-x="52" data-y="20.9">
                    <!--<img alt="" src="/Public/home/images/parallax-2-image-7.png">-->
                    <div><span class="left dialog-2" style="font-size: 18px;margin-top: 15px;margin-right: 15px;"><a
                            class="dialog"
                            href="<?php echo U('Index/detail');?>?id=<?php echo ($posts_four[0]["id"]); ?>"><?php echo ($posts_four[0]["title"]); ?></a></span><img
                            class="user-profile-img margin-top-15" src="<?php echo ($posts_four[0]["head_img"]); ?>" alt=""/></div>
                </div><?php endif; ?>
        </div>

    </section>

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
        jQuery(document).ready(function () {
//        window.onload = function () {
//            window.onscroll = function () {
//                var st = getScrollTop();//滚去的高度
//                var at = $(".cooking-1").offset().top;
//                var et = $(".cooking-2").offset().top;
//                if (st >= at) {
//                    $('.cooking-2-img').addClass('active');
//                }
//                if (st >= et) {
//                    $('.cooking-4-img').removeClass('active');
//                }
//                //console.log(st + ',' + at + ',' + et);
//            }
//        };
//        $(".link").on("click", function (event) {
//            event.preventDefault();//the default action of the event will not be triggered
//            $("html, body").animate({scrollTop: ($("#" + this.href.split("#")[1]).offset().top)}, 600);
//        });


            $(".owl-carousel5").owlCarousel({
                pagination: false,
                navigation: true,
                items: 5,
                addClassActive: true,
                itemsCustom: [
                    [0, 1],
                    [320, 1],
                    [480, 2],
                    [660, 2],
                    [700, 3],
                    [768, 3],
                    [992, 4],
                    [1024, 4],
                    [1200, 5],
                    [1400, 5],
                    [1600, 5]
                ]
            });

            $(".rep").hover(function () {
                $(".rep").removeClass('current');
                $(this).addClass('current');
                var r = $(this).index();
                var s = 62 / 2;
                var h = parseInt(r / 3) * (62 + 10) + s - 5;
                $(".single-story i").css('top', h);
            });

            if (!is_touch_device()) {

                $(window).stellar({
                    horizontalScrolling: false,
                    verticalScrolling: true,
                    responsive: true
                });

            }

            $(".parallax-multilayer .parallax-layer").each(function () {

                var x = parseInt($(this).attr("data-x"), 10),
                        y = parseInt($(this).attr("data-y"), 10);

                $(this).css({
                    "margin-left": x + "%",
                    "margin-top": y + "%"
                });

            });

            // ISOTOPE //
            $(".isotope").imagesLoaded(function () {

                var container = $(".isotope");

                container.isotope({
                    itemSelector: '.isotope-item',
                    layoutMode: 'masonry',
                    transitionDuration: '0.8s'
                });

                $(".filter li a").on("click", function () {
                    $(".filter li a").removeClass("active");
                    $(this).addClass("active");

                    var selector = $(this).attr("data-filter");
                    container.isotope({
                        filter: selector
                    });

                    return false;
                });

                $(window).resize(function () {
                    container.isotope();
                });

            });

            //$(".portfolio-item").hoverdir();
        });

        function getScrollTop() {
            var scrollTop = 0;
            if (document.documentElement && document.documentElement.scrollTop) {
                scrollTop = document.documentElement.scrollTop;
            } else if (document.body) {
                scrollTop = document.body.scrollTop;
            }
            return scrollTop;
        }

        function is_touch_device() {
            return !!('ontouchstart' in window) || ( !!('onmsgesturechange' in window) && !!window.navigator.maxTouchPoints);
        }
    </script>



</body>
</html>