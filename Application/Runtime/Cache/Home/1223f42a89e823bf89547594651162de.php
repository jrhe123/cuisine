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
    
    <link href="/Public/home/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link rel="stylesheet" type="text/css"
          href="/Public/home/plugins/bootstrap-summernote/summernote.css">


    <!-- Skins -->
    <link rel="stylesheet" href="/Public/home/css/skins/blue.css">
    <link rel="stylesheet" href="/Public/home/css/style-shop.css">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="/Public/home/css/responsive.css">
    <link rel="stylesheet" href="/Public/home/css/custom.css">
    

    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png">
    
    <style>
        a.bds_more, .bds_tools a{
            height: 23px !important;
        }
        .bdshare-button-style0-16 a, .bdshare-button-style0-16 .bds_more{
            margin: 0 !important;
            padding-top:5px !important;
        }
        .bdshare-button-style0-16 .bds_count{
            background-position: -41px -26px !important;
            height: 21px !important;
            width: 43px !important;
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
    
    <section style="margin-top: 50px;" class="container main-content">
        <div class="row">
            <div class="col-md-9">
                <article class="question single-question question-type-normal">
                    <h2>
                        <a href="<?php echo U('Index/detail');?>?id=<?php echo ($id); ?>"><?php echo ($title); ?></a>
                    </h2>
                    <?php if($posts_collect > 0): ?><a class="question-report link" href="javascript:;" onclick="collect(this)">取消收藏</a>
                        <?php else: ?>
                        <a class="question-report link" href="javascript:;" onclick="collect(this)">收藏</a><?php endif; ?>

                    <div class="question-inner">
                        <div class="clearfix"></div>
                        <div class="question-desc">
                            <?php echo ($content); ?>
                        </div>
                        <div class="question-details">
                            <span class="question-favorite"><i class="fa fa-star"></i><?php echo ($collect); ?></span>
                        </div>
                        <span class="question-date"><i class="fa fa-time"></i><?php echo ($minute); ?></span>
                        <span class="question-comment"><a href="#"><i class="fa fa-comment"></i><?php echo ($replies); ?> 回复</a></span>
                        <span class="question-view"><i class="fa fa-user"></i><?php echo ($views); ?> 阅读</span>
                        <span class="question-invite"><a href="javascript:;" onclick="invitesList()">邀请回答</a></span>
                        <span class="single-question-vote-result"><span class="ulike">+<?php echo ($posts_ulike); ?></span> <span
                                class="dislike">-<?php echo ($posts_dislike); ?></span></span>
                        <ul class="single-question-vote">
                            <li><a href="javascript:;" onclick="dislikePost('<?php echo ($id); ?>')" class="single-question-vote-down"
                                   title="Dislike"><i
                                    class="fa fa-thumbs-down"></i></a></li>
                            <li><a href="javascript:;" onclick="likePost('<?php echo ($id); ?>')" class="single-question-vote-up"
                                   title="Like"><i class="fa fa-thumbs-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <div class="panel-container">
                            <div data-showsearch="true" id="question-invite-panel" class="question-invite-panel"
                                 style="display: none;">
                                <i class="icon icon-spike"></i>

                                <div class="invite-main-wrap">
                                    <div class="invite-title">
                                    <!--<span class="input-wrapper">-->
                                    <!--<input type="text" data-tip="s$t$也可以搜索个人介绍，如「医生」"-->
                                           <!--class="search-input zg-form-text-input" placeholder="搜索你想邀请的人"-->
                                           <!--aria-haspopup="true" autocomplete="off" aria-label="搜索你想邀请的人">-->
                                    <!--<i class="zg-icon icon-magnify"></i>-->
                                    <!--</span>-->
                                    <span class="invite-status">
                                    </span>
                                    </div>

                                    <ul class="suggest-persons clearfix">

                                        <!--<li style="" class="person odd bordered">-->
                                        <!--<div class="blk">-->
                                        <!--<a href="/people/1nami" class="zm-item-link-avatar" data-tip="p$t$1nami"-->
                                        <!--title="学习网站收集控">-->
                                        <!--<img class="zm-item-img-avatar"-->
                                        <!--src="http://pic1.zhimg.com/3d190abe6611a19f03437ae9ce2d7fdc_is.jpg">-->
                                        <!--</a>-->

                                        <!--<div class="content">-->

                                        <!--<button data-uid="3daadd2ae3726d4e5eaabc663332c2ca"-->
                                        <!--class="invite-button zg-btn zg-btn-green">邀请回答-->
                                        <!--</button>-->

                                        <!--<a class="zg-link" href="http://www.zhihu.com/people/1nami"-->
                                        <!--data-tip="p$t$1nami" data-original_title="学习网站收集控">学习网站收集控</a>-->

                                        <!--<div title="博客：http://yangqingfeng.com" class="bio">-->
                                        <!--博客：<a rel="nofollow noreferrer" target="_blank"-->
                                        <!--class=" external" href="http://yangqingfeng.com"><span-->
                                        <!--class="invisible">http://</span><span class="visible">yangqingfeng.com</span><span-->
                                        <!--class="invisible"></span><i class="icon-external"></i></a>-->
                                        <!--</div>-->
                                        <!--<div title="在该话题下有 8 个回答" class="reason">-->
                                        <!--在 <a data-topicid="2083" data-token="19556496"-->
                                        <!--data-tip="t$t$19556496"-->
                                        <!--href="/people/1nami/topic/19556496/answers"> 网站 </a> 话题下有 8-->
                                        <!--个回答-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</li>-->

                                        <!--<li style="" class="person even bordered">-->
                                        <!--<div class="blk">-->
                                        <!--<a href="/people/rainy-vczh" class="zm-item-link-avatar"-->
                                        <!--data-tip="p$t$rainy-vczh" title="vczh">-->
                                        <!--<img class="zm-item-img-avatar"-->
                                        <!--src="http://pic1.zhimg.com/3a6c25ac3864540e80cdef9bc2a73900_is.jpg">-->
                                        <!--</a>-->

                                        <!--<div class="content">-->

                                        <!--<button data-uid="0970f947b898ecc0ec035f9126dd4e08"-->
                                        <!--class="invite-button zg-btn zg-btn-green">邀请回答-->
                                        <!--</button>-->

                                        <!--<a title="vczh" class="zg-link"-->
                                        <!--href="http://www.zhihu.com/people/rainy-vczh"-->
                                        <!--data-tip="p$t$rainy-vczh">vczh</a>-->

                                        <!--<div title="专业造轮子 https://github.com/vczh-libraries" class="bio">-->
                                        <!--专业造轮子 …-->
                                        <!--</div>-->
                                        <!--<div title="在该话题下有 42 个回答" class="reason">-->
                                        <!--在 <a data-topicid="2083" data-token="19556496"-->
                                        <!--data-tip="t$t$19556496"-->
                                        <!--href="/people/rainy-vczh/topic/19556496/answers"> 网站 </a>-->
                                        <!--话题下有 42 个回答-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</li>-->

                                        <!--<li style="" class="person odd bordered">-->
                                        <!--<div class="blk">-->
                                        <!--<a href="/people/Akarintyan" class="zm-item-link-avatar"-->
                                        <!--data-tip="p$t$Akarintyan" data-original_title="阿卡林酱">-->
                                        <!--<img class="zm-item-img-avatar"-->
                                        <!--src="http://pic4.zhimg.com/5badd674f89ca4da5d220795e0d6711f_is.jpg">-->
                                        <!--</a>-->

                                        <!--<div class="content">-->

                                        <!--<button data-uid="20bcaddaa8b74dcb63447002b35671eb"-->
                                        <!--class="invite-button zg-btn zg-btn-green">邀请回答-->
                                        <!--</button>-->

                                        <!--<a title="阿卡林酱" class="zg-link"-->
                                        <!--href="http://www.zhihu.com/people/Akarintyan"-->
                                        <!--data-tip="p$t$Akarintyan">阿卡林酱</a>-->

                                        <!--<div title="萌豚/代码工/一本正经地胡说八道" class="bio">-->
                                        <!--萌豚/代码工/一本正经地胡说八道-->
                                        <!--</div>-->
                                        <!--<div title="在该话题下有 10 个回答" class="reason">-->
                                        <!--在 <a data-topicid="2083" data-token="19556496"-->
                                        <!--data-tip="t$b$19556496"-->
                                        <!--href="/people/Akarintyan/topic/19556496/answers"> 网站 </a>-->
                                        <!--话题下有 10 个回答-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</li>-->

                                        <!--<li style="" class="person even bordered">-->
                                        <!--<div class="blk">-->
                                        <!--<a href="/people/chen-jun-shuo" class="zm-item-link-avatar"-->
                                        <!--data-tip="p$t$chen-jun-shuo" data-original_title="陈骏烁">-->
                                        <!--<img class="zm-item-img-avatar"-->
                                        <!--src="http://pic1.zhimg.com/00c8c070da1f70a1f1f21a2318d040e0_is.jpg">-->
                                        <!--</a>-->

                                        <!--<div class="content">-->

                                        <!--<button data-uid="9b9818bcead5d7b177690e5fe32156ac"-->
                                        <!--class="invite-button zg-btn zg-btn-green">邀请回答-->
                                        <!--</button>-->

                                        <!--<a title="陈骏烁" class="zg-link"-->
                                        <!--href="http://www.zhihu.com/people/chen-jun-shuo"-->
                                        <!--data-tip="p$t$chen-jun-shuo">陈骏烁</a>-->

                                        <!--<div title="紫个弟仔过好惜" class="bio">-->
                                        <!--紫个弟仔过好惜-->
                                        <!--</div>-->
                                        <!--<div title="在该话题下有 2 个回答" class="reason">-->
                                        <!--在 <a data-topicid="2083" data-token="19556496"-->
                                        <!--data-tip="t$b$19556496"-->
                                        <!--href="/people/chen-jun-shuo/topic/19556496/answers">-->
                                        <!--网站 </a> 话题下有 2 个回答-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</div>-->
                                        <!--</li>-->


                                    </ul>

                                    <div style="" class="zm-invite-pager">
                                        <a style="margin-right: 20px;" href="javascript:;"
                                           class="js-prev link-disabled">上一页</a>
                                        <a style="" href="javascript:;" class="js-next">下一页</a>
                                    </div>


                                </div>

                            </div>
                            <div class="zm-comment-box" style="display: none;"></div>
                        </div>
                    </div>
                </article>

                <div class="share-tags page-content">
                    <div class="question-tags"><i class="fa fa-tags"></i>
                        <?php echo ($tags); ?>
                    </div>
                    <!-- End share-inside-warp -->
                    <div class="share-inside">
                        <div class="bdsharebuttonbox" data-tag="share_1">
                            <a class="bds_more" data-cmd="more"> &nbsp;&nbsp;&nbsp;分享</a>
                            <a class="bds_count" data-cmd="count"></a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- End share-tags -->

                <?php if(!empty($comments)): ?><div id="commentlist" class="page-content">
                        <div class="boxedtitle page-title"><h2>回复 ( <span class="color"><?php echo ($replies); ?></span> )</h2></div>
                        <ol class="commentlist clearfix">
                            <?php if(is_array($comments)): foreach($comments as $key=>$v): ?><li class="comment" id="<?php echo ($v["id"]); ?>">
                                    <div class="comment-body comment-body-answered clearfix">
                                        <div class="avatar"><img alt="" src="<?php echo ($v["from_user_header_img"]); ?>">
                                        </div>
                                        <div class="comment-text">
                                            <div class="author clearfix">
                                                <div class="comment-author"><a
                                                        href="<?php echo U('Profile/index');?>?id=<?php echo ($v["from_user_id"]); ?>"><?php echo ($v["from_user_name"]); ?>
                                                    <?php echo ($v["author"]); ?></a>
                                                    回复
                                                    <a href="<?php echo U('Profile/index');?>?id=<?php echo ($v["to_user_id"]); ?>"><?php echo ($v["to_user_name"]); ?></a>
                                                </div>
                                                <div class="comment-vote">
                                                    <ul class="question-vote">
                                                        <li><a href="javascript:;" onclick="likeComment('<?php echo ($v["id"]); ?>')"
                                                               class="question-vote-up" title="Like"></a></li>
                                                        <li><a href="javascript:;" onclick="dislikeComment('<?php echo ($v["id"]); ?>')"
                                                               class="question-vote-down" title="Dislike"></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <span class="question-vote-result"><span class="comment_like"
                                                                                         style="display: inline !important;">+<?php echo ($v["comment_ulike"]); ?></span> <span
                                                        style="display: inline !important;" class="comment_dislike">-<?php echo ($v["comment_dislike"]); ?></span></span>

                                                <div class="comment-meta">
                                                    <div class="date"><i class="fa fa-time"></i><?php echo ($v["created_timestamp"]); ?>
                                                    </div>
                                                </div>
                                                <a class="comment-reply link" href="#content_label"
                                                   onclick="reply_to('<?php echo ($v["from_user_id"]); ?>','<?php echo ($v["from_user_name"]); ?>')"><i
                                                        class="fa fa-reply"></i>回复</a>
                                            </div>
                                            <div class="text"><p><?php echo ($v["content"]); ?></p>
                                            </div>
                                            <?php if($v["is_good"] == 1): ?><div class="question-answered question-answered-done"><i
                                                        class="fa fa-check"></i>最佳回答
                                                </div><?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- End children -->
                                </li><?php endforeach; endif; ?>
                        </ol>
                        <!-- End commentlist -->
                    </div>
                    <!-- End page-content --><?php endif; ?>
                <div id="respond" class="comment-respond page-content clearfix" style="margin-bottom: 20px;">
                    <div class="boxedtitle page-title"><h2>回复问题</h2></div>
                    <form action="" method="post" id="commentform" class="comment-form" onsubmit="return false">
                        <div id="respond-textarea">
                            <p>
                                <label id="content_label" name="content_label" class="required"
                                       for="content">内容<span>*</span></label>

                                <textarea id="content" name="content" style="width:100%;height:400px;"></textarea>
                            </p>

                            <div class="digest"><label><input id="is_audit" name="is_audit" type="checkbox">
                                申请回复加精</label>
                            </div>
                        </div>
                        <p class="form-submit">
                            <input onclick="reply()" name="submit" type="submit" value="提交回复"
                                   class="button small color">
                        </p>
                    </form>
                </div>

                <!--<div class="post-next-prev clearfix">-->
                <!--<p class="prev-post">-->
                <!--<a href="#"><i class="fa fa-double-angle-left"></i>&nbsp;上一个问题</a>-->
                <!--</p>-->

                <!--<p class="next-post">-->
                <!--<a href="#">下一个问题&nbsp;<i class="fa fa-double-angle-right"></i></a>-->
                <!--</p>-->
                <!--</div>-->
                <!--&lt;!&ndash; End post-next-prev &ndash;&gt;-->
            </div>
            <!-- End main -->
            <aside class="col-md-3 sidebar">
                <div class="about-author clearfix">
                    <div class="author-l">
                        <div class="author-image">
                            <img alt="" src="<?php echo ($head_img); ?>">
                        </div>
                        <div>
                            <?php if($user_id != $current_u_id): if($user_focus > 0): ?><button style="font-size: 12px;font-weight: normal;margin-left: 4px;padding: 4px 10px;"
                                            onclick="Focus_on(this)" class="button color" data-uid="<?php echo ($user_id); ?>">取消关注
                                    </button>
                                    <?php else: ?>
                                    <button style="font-size: 12px;font-weight: normal;margin-left:15px;padding: 4px 10px;"
                                            onclick="Focus_on(this)" class="button color" data-uid="<?php echo ($user_id); ?>">关注
                                    </button><?php endif; endif; ?>
                        </div>
                    </div>
                    <div class="author-bio">
                        <h4><a href="<?php echo U('Profile/index');?>?id=<?php echo ($user_id); ?>"><?php echo ($nick_name); ?></a><br>
                            <small><?php echo ($user_attention); ?>人关注</small>
                        </h4>
                        <?php echo ($signature); ?>
                    </div>
                </div>
                <!-- End about-author -->

                <!--<div id="related-posts">-->
                    <!--<h2>相关问题</h2>-->
                    <!--<ul class="related-posts">-->
                        <!--<li class="related-item"><h3><a href="#"><i class="fa fa-double-angle-right"></i>This Is My-->
                            <!--Second Poll 问题</a></h3></li>-->
                        <!--<li class="related-item"><h3><a href="#"><i class="fa fa-double-angle-right"></i>This is my-->
                            <!--third 问题</a></h3></li>-->
                        <!--<li class="related-item"><h3><a href="#"><i class="fa fa-double-angle-right"></i>This is my-->
                            <!--fourth 问题</a></h3></li>-->
                        <!--<li class="related-item"><h3><a href="#"><i class="fa fa-double-angle-right"></i>This is my-->
                            <!--fifth 问题</a></h3></li>-->
                    <!--</ul>-->
                <!--</div>-->
                <!-- End related-posts -->

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

    <script src="/Public/home/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script charset="utf-8" src="/Public/global/plugins/kindeditor/kindeditor-min.js"></script>
    <script charset="utf-8" src="/Public/global/plugins/kindeditor/lang/zh_CN.js"></script>
    <script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
    <script type="text/javascript" id="bdshell_js"></script>
    <script type="text/javascript">document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);</script>

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
        var blog = '<?php echo ($blog); ?>';
        var current_post_id = '<?php echo ($_GET['id']); ?>';
        var current_user_id = '<?php echo (session('cooking_user_id')); ?>';
        var current_user_name = '<?php echo (session('cooking_user_name')); ?>';
        var reply_to_user_id = '';
        var title = '<?php echo ($title); ?>';
        var topic = parseInt('<?php echo ($topic); ?>');
        var class_id = parseInt('<?php echo ($class); ?>');
        var tags = '<?php echo ($tags); ?>';
        var curPage = 0;
        var html = '';
        jQuery(document).ready(function () {
            $(blog).click();
            $(".link").on("click", function (event) {
                event.preventDefault();//the default action of the event will not be triggered
                $("html, body").animate({scrollTop: ($("#" + this.href.split("#")[1]).offset().top)}, 600);
            });
            KindEditor.ready(function (K) {
                window.editor = K.create('textarea[name="content"]');
            });
            $('.question-invite').click(function () {
                if ($('#question-invite-panel').attr('style')) {
                    $('#question-invite-panel').removeAttr('style');
                } else {
                    $('#question-invite-panel').css('display', 'none');
                }
            });

        });

        function reply_to(t_id, t_name) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            if (current_user_id == t_id) {
                reply_to_user_id = '';
                $('label[name="content_label"]').html(current_user_name + ':');
                $('textarea[name="content"]').val(current_user_name + ':');
            } else {
                reply_to_user_id = t_id;
                $('label[name="content_label"]').html(current_user_name + ':@' + t_name);
                $('textarea[name="content"]').val(current_user_name + ':@' + t_name);
            }
        }

        function reply() {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            editor.sync();  //编辑器需调用这个来获取html
            var content = $('textarea[name="content"]').val();
            if (content == '') {
                toastMsg('warning', '请输入内容', '操作提示');
                return;
            }
            var is_audit = document.getElementById("is_audit").checked;
            $.ajax({
                type: "post",
                data: {
                    post_id: current_post_id,
                    from_user_id: current_user_id,
                    to_user_id: reply_to_user_id,
                    content: content,
                    is_audit: is_audit,
                    title: title,
                    topic: topic,
                    class_id: class_id,
                    tags: tags
                },
                url: "<?php echo U('Action/reply');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        $('#commentform')[0].reset();
                        setTimeout("window.location.reload()", 1000);
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
                        $('.ulike').html('+' + data.count);
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

        function dislikePost(id, obj) {
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
                url: "<?php echo U('Action/dislikePosts');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        $('.dislike').html('-' + data.count);
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

        function likeComment(id, obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            $.ajax({
                type: "post",
                data: {
                    comment_id: id,
                    user_id: current_user_id
                },
                url: "<?php echo U('Action/likeComment');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        $('li[id="' + id + '"]').find('.comment_like').html('+' + data.count);
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

        function dislikeComment(id, obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            $.ajax({
                type: "post",
                data: {
                    comment_id: id,
                    user_id: current_user_id
                },
                url: "<?php echo U('Action/dislikeComment');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        $('li[id="' + id + '"]').find('.comment_dislike').html('-' + data.count);
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

        function collect(obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            $.ajax({
                type: "post",
                data: {
                    collect_post_id: '<?php echo ($id); ?>',
                    user_id: current_user_id
                },
                url: "<?php echo U('Action/collect');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        $('.question-favorite').html('<i class="fa fa-star"></i>' + data.count);
                        if (data.success == 1) {
                            $(obj).html('取消收藏');
                        } else if (data.success == 2) {
                            $(obj).html('收藏');
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

        function Focus_on(obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            $.ajax({
                type: "post",
                data: {
                    attention_user_id: '<?php echo ($user_id); ?>',
                    user_id: current_user_id
                },
                url: "<?php echo U('Action/focus');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        if (data.success == 1) {
                            $(obj).parent().html('<button style="font-size: 12px;font-weight: normal;margin-left: 4px;padding: 4px 10px;"' +
                            'onclick="Focus_on(this)" class="button color" data-uid="<?php echo ($user_id); ?>">取消关注' +
                            '</button>');
                        } else if (data.success == 2) {
                            $(obj).parent().html('<button style="font-size: 12px;font-weight: normal;margin-left:15px;padding: 4px 10px;"' +
                            'onclick="Focus_on(this)" class="button color" data-uid="<?php echo ($user_id); ?>">关注' +
                            '</button>');
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

        function invitesList() {
            curPage = 1;
            html = '';
            $.ajax({
                type: "post",
                data: {
                    post_id :'<?php echo ($id); ?>',
                    topic: '<?php echo ($topic); ?>',
                    user_id: '<?php echo ($user_id); ?>',
                    page: curPage
                },
                url: "<?php echo U('invitesList');?>",
                success: function (data) {
                    if (data.code == 200) {
                        $.each(data.data, function (k, v) {
                            html += '<li style="" class="person odd bordered">' +
                            '<div class="blk">' +
                            '<a href="<?php echo U("Profile/index");?>?id=' + v.id + '" class="zm-item-link-avatar" data-tip="p$t$1nami" title="学习网站收集控">' +
                            '<img class="zm-item-img-avatar" src="' + v.head_img + '"></a>' +
                            '<div class="content">' +
                            '<button data-uid="' + v.id + '" onclick="invite(this)" class="invite-button zg-btn zg-btn-green">邀请回答</button>' +
                            '<a class="zg-link" href="<?php echo U("Profile/index");?>?id=' + v.id + '" data-tip="p$t$1nami" data-original_title="' + v.nickname + '">' + v.nickname + '</a>' +
                            '<div title="' + v.signature + '" class="bio">' + v.signature + '' +
                            '</div>' +
                            '<div title="在该话题下有回答" class="reason">' +
                            '在 <a data-topicid="2083" data-token="19556496" data-tip="t$t$19556496" href="javascript:;"> ' + v.topic_name + ' </a> 话题下有回答 </div> </div> </div>' +
                            '</li>';
                        });
                        $('.suggest-persons').html(html);
                        $('.suggest-persons').next().html('<a style="margin-right: 20px;" href="javascript:;" onclick="invitesList(' + data.lastPage + ')" class="js-prev ">上一页</a>' +
                        '<a style="" href="javascript:;" onclick="invitesList(' + data.nextPage + ')" class="js-next">下一页</a>');
                        if (data.lastPage == curPage) {
                            $('.js-prev').addClass('link-disabled');
                            $('.js-next').addClass('link-disabled');
                        } else {
                            $('.js-prev').removeClass('link-disabled');
                            $('.js-next').removeClass('link-disabled');
                        }
                        if(data.data == ''){
                            html = '<p>暂没有数据</p>';
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

        function invite(obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            var id = $(obj).attr('data-uid');
            $.ajax({
                type: "post",
                data: {
                    be_invited_user_id: id,
                    user_id: current_user_id,
                    post_id :'<?php echo ($id); ?>'
                },
                url: "<?php echo U('Action/invite');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        $(obj).parents('.person ').remove();
                        invitesList();
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
    <script>
        window._bd_share_config = {
            common : {
                bdText : '顺大烹饪学院-<?php echo ($title); ?>',
                bdUrl : '<?php echo U("Index/detail");?>?id=<?php echo ($id); ?>'
            },
            share : [{
                "bdSize" : 16
            }],
            image : [{
                viewType : 'list',
                viewPos : 'top',
                viewColor : 'black',
                viewSize : '16',
                viewList : ['qzone','tsina','huaban','tqq','renren']
            }],
            selectShare : [{
                "bdselectMiniList" : ['qzone','tqq','kaixin001','bdxc','tqf']
            }]
        }

        //以下为js加载部分
        with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?cdnversion='+~(-new Date()/36e5)];
    </script>



</body>
</html>