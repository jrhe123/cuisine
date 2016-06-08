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
                <div class="row">
                    <div class="user-profile">
                        <div class="col-md-12">
                            <div class="page-content">
                                <a href="<?php echo U('Profile/edit');?>?id=<?php echo ($id); ?>">
                                    <h2><?php echo ($nickname); ?>
                                        <?php if($_SESSION['cooking_user_id']== $id): ?><small>点击名字编辑个人资料</small><?php endif; ?>
                                    </h2>
                                </a>

                                <div class="user-profile-img"><img width="60" height="60"
                                                                   src="<?php echo ($head_img); ?>"
                                                                   alt="<?php echo ($nickname); ?>"></div>
                                <div class="ul_list ul_list-icon-ok about-user">
                                    <ul>
                                        <li><i class="icon-plus"></i>注册时间 : <span><?php echo ($created_timestamp); ?></span></li>
                                        <li><i class="icon-map-marker"></i>性别 : <span><?php echo ($gender); ?></span></li>
                                    </ul>
                                </div>
                                <p><?php echo ($signature); ?></p>

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
                                            <?php if($_SESSION['cooking_user_id']!= $id): ?><li><i class="fa fa-question-sign"></i><a
                                                        href="<?php echo U('Profile/posts');?>?id=<?php echo ($id); ?>">我的文章<span> ( <span><?php echo ($posts_collect); ?></span> ) </span></a>
                                                </li>
                                                <li><i class="fa fa-comment"></i><a
                                                        href="<?php echo U('Profile/answers');?>?id=<?php echo ($id); ?>">我的回答<span> ( <span><?php echo ($replies); ?></span> ) </span></a>
                                                </li>
                                                <?php else: ?>
                                                <li><i class="fa fa-question-sign"></i><a
                                                        href="<?php echo U('Profile/posts');?>?id=<?php echo ($id); ?>">我的文章<span> ( <span><?php echo ($posts_collect); ?></span> ) </span></a>
                                                </li>
                                                <li><i class="fa fa-comment"></i><a
                                                        href="<?php echo U('Profile/answers');?>?id=<?php echo ($id); ?>">我的回答<span> ( <span><?php echo ($replies); ?></span> ) </span></a>
                                                </li>
                                                <li><i class="fa fa fa-book"></i><a
                                                        href="<?php echo U('Profile/course');?>?id=<?php echo ($id); ?>&action=<?php echo (ACTION_NAME); ?>">我的课程<span> ( <span><?php echo ($courses); ?></span> ) </span></a>
                                                </li>
                                                <li><i class="fa fa-star"></i><a
                                                        href="<?php echo U('Profile/collect');?>?id=<?php echo ($id); ?>&action=<?php echo (ACTION_NAME); ?>">我的收藏<span> ( <span><?php echo ($collect); ?></span> ) </span></a>
                                                </li>
                                                <li><i class="fa fa-file-o"></i><a
                                                        href="<?php echo U('Profile/draft');?>?id=<?php echo ($id); ?>&action=<?php echo (ACTION_NAME); ?>">我的草稿<span> ( <span><?php echo ($draft); ?></span> ) </span></a>
                                                </li>
                                                <li><i class="fa fa-file-o"></i><a
                                                        href="<?php echo U('Profile/focus');?>?id=<?php echo ($id); ?>&action=<?php echo (ACTION_NAME); ?>">我的关注<span> ( <span><?php echo ($focus_n); ?></span> ) </span></a>
                                                </li>
                                                <li><i class="fa fa-file-o"></i><a
                                                        href="<?php echo U('Profile/message');?>?id=<?php echo ($id); ?>&action=<?php echo (ACTION_NAME); ?>">消息中心
                                                    <span> ( <span><?php echo ($invite_n); ?></span> ) </span></a>
                                                </li><?php endif; ?>
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
                <?php if($action == 'posts'): if(!empty($posts)): ?><div class="page-content page-content-user">
                            <div class="user-questions">
                                <div class="boxedtitle page-title" style="padding-top: 20px;"><h2>我的帖子</h2></div>
                                <?php if(is_array($posts)): foreach($posts as $key=>$v): ?><article class="question user-question">
                                        <p class="tag">【<?php echo ($v["class_name"]); ?>】<?php echo ($v["tags"]); ?></p>
                                        <span style="position: absolute;right: 20px;top: 10px;"><a
                                                href="javascript:;" onclick="del('<?php echo ($action); ?>','<?php echo ($v["id"]); ?>',this)"><i
                                                class="fa fa-times"></i></a></span>

                                        <h3>
                                            <a href="<?php echo U('Index/detail');?>?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
                                        </h3>

                                        <div class="question-content">
                                            <div class="question-bottom">
                                            <span class="question-favorite"><i
                                                    class="fa fa-star"></i><?php echo ($v["collect"]); ?></span>
                                                <span class="question-date"><i class="fa fa-clock-o"></i><?php echo ($v["updated_timestamp"]); ?></span>
                                    <span class="question-comment"><a href="<?php echo U('Index/detail');?>?id=<?php echo ($v["id"]); ?>"><i
                                            class="fa fa-comment"></i><?php echo ($v["replies"]); ?>
                                        回复</a></span>
                                                <span class="question-view"><i
                                                        class="fa fa-user"></i><?php echo ($v["views"]); ?> 阅读</span>
                                            </div>
                                        </div>
                                    </article><?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="height_20"></div>
                        <div class="pagination">
                            <?php if(($curPage) != $lastPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>" class="prev-button"><i
                                        class="fa fa-angle-left"></i></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>"><?php echo ($lastPage); ?></a><?php endif; ?>
                            <span class="current" href="<?php echo ($pageLink); ?>&page=<?php echo ($curPage); ?>"><?php echo ($curPage); ?></span>
                            <?php if(($curPage) != $nextPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>"><?php echo ($nextPage); ?></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>" class="next-button"><i
                                        class="fa fa-angle-right"></i></a><?php endif; ?>
                        </div><?php endif; ?>
                    <?php elseif($action == 'answers'): ?>
                    <?php if(!empty($answers)): ?><div class="page-content page-content-user">
                            <div class="user-questions">
                                <div class="boxedtitle page-title" style="padding-top: 20px;"><h2>我的回答</h2></div>
                                <ol class="commentlist clearfix">
                                    <?php if(is_array($answers)): foreach($answers as $key=>$v): ?><li class="comment" id="<?php echo ($v["id"]); ?>">
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
                                                <span class="question-vote-result"><span class="comment_like"
                                                                                         style="display: inline !important;">+<?php echo ($v["comment_ulike"]); ?></span> <span
                                                        style="display: inline !important;" class="comment_dislike">-<?php echo ($v["comment_dislike"]); ?></span></span>

                                                        <div class="comment-meta">
                                                            <div class="date"><i class="fa fa-time"></i><?php echo ($v["created_timestamp"]); ?>
                                                            </div>
                                                        </div>
                                                        <span style="position: absolute;right: 20px;top: 10px;"><a
                                                                href="javascript:;"
                                                                onclick="del('<?php echo ($action); ?>','<?php echo ($v["id"]); ?>',this)"><i
                                                                class="fa fa-times"></i></a></span>
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
                            </div>
                        </div>
                        <div class="height_20"></div>
                        <div class="pagination">
                            <?php if(($curPage) != $lastPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>" class="prev-button"><i
                                        class="fa fa-angle-left"></i></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>"><?php echo ($lastPage); ?></a><?php endif; ?>
                            <span class="current" href="<?php echo ($pageLink); ?>&page=<?php echo ($curPage); ?>"><?php echo ($curPage); ?></span>
                            <?php if(($curPage) != $nextPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>"><?php echo ($nextPage); ?></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>" class="next-button"><i
                                        class="fa fa-angle-right"></i></a><?php endif; ?>
                        </div><?php endif; ?>
                    <?php elseif($action == 'course'): ?>
                    <?php if(!empty($course)): ?><div class="page-content page-content-user">
                            <div class="user-questions">
                                <div class="boxedtitle page-title" style="padding-top: 20px;"><h2>我的课程</h2></div>
                                <?php if(is_array($course)): foreach($course as $key=>$v): ?><article class="post blog_2 clearfix">
                                        <div class="post-inner">
                                            <h2 class="post-title"><span class=""><i class="fa fa-book"></i></span> <a
                                                    href="<?php echo U('Train/article');?>?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a></h2><span><?php echo ($v["status"]); ?></span>
                                            <span style="position: absolute;right: 20px;top: 10px;"><a
                                                    href="javascript:;" onclick="del('<?php echo ($action); ?>','<?php echo ($v["id"]); ?>',this)"><i
                                                    class="fa fa-times"></i></a></span>

                                            <div class="post-img"><a href="<?php echo U('Train/article');?>?id=<?php echo ($v["id"]); ?>"><img
                                                    src="<?php echo ($v["picture"]); ?>" alt=""></a></div>
                                            <div class="post-meta">
                                                <span class="meta-author"><i class="icon-user"></i><?php echo ($v["lecturer"]); ?></span>
                                            <span class="meta-date"><i
                                                    class="icon-time"></i><?php echo ($v["updated_timestamp"]); ?></span>
                                        <span class="meta-comment"><i
                                                class="icon-comments-alt"></i><?php echo ($v["course_type"]); ?></span>
                                            </div>
                                            <div class="post-content">
                                                <p><?php echo ($v["description"]); ?></p>
                                                <span class="post-price"><?php echo ($v["course_price"]); ?></span>
                                                <a href="<?php echo U('Train/article');?>?id=<?php echo ($v["id"]); ?>"
                                                   class="post-read-more button color small">查看详细</a>
                                            </div>
                                            <!-- End post-content -->
                                        </div>
                                        <!-- End post-inner -->
                                    </article><?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="height_20"></div>
                        <div class="pagination">
                            <?php if(($curPage) != $lastPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>" class="prev-button"><i
                                        class="fa fa-angle-left"></i></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>"><?php echo ($lastPage); ?></a><?php endif; ?>
                            <span class="current" href="<?php echo ($pageLink); ?>&page=<?php echo ($curPage); ?>"><?php echo ($curPage); ?></span>
                            <?php if(($curPage) != $nextPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>"><?php echo ($nextPage); ?></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>" class="next-button"><i
                                        class="fa fa-angle-right"></i></a><?php endif; ?>
                        </div><?php endif; ?>
                    <?php elseif($action == 'collect'): ?>
                    <?php if(!empty($collects)): ?><div class="page-content page-content-user">
                            <div class="user-questions">
                                <div class="boxedtitle page-title" style="padding-top: 20px;"><h2>我的收藏</h2></div>
                                <?php if(is_array($collects)): foreach($collects as $key=>$v): ?><article class="question user-question">
                                        <p class="tag">【<?php echo ($v["class_name"]); ?>】<?php echo ($v["tags"]); ?></p>
                                        <span style="position: absolute;right: 20px;top: 10px;"><a
                                                href="javascript:;" onclick="del('<?php echo ($action); ?>','<?php echo ($v["id"]); ?>',this)"><i
                                                class="fa fa-times"></i></a></span>

                                        <h3>
                                            <a href="<?php echo U('Index/detail');?>?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
                                        </h3>

                                        <div class="question-content">
                                            <div class="question-bottom">
                                            <span class="question-favorite"><i
                                                    class="fa fa-star"></i><?php echo ($v["collect"]); ?></span>
                                                <span class="question-date"><i class="fa fa-clock-o"></i><?php echo ($v["updated_timestamp"]); ?></span>
                                    <span class="question-comment"><a href="<?php echo U('Index/detail');?>?id=<?php echo ($v["id"]); ?>"><i
                                            class="fa fa-comment"></i><?php echo ($v["replies"]); ?>
                                        回复</a></span>
                                                <span class="question-view"><i
                                                        class="fa fa-user"></i><?php echo ($v["views"]); ?> 阅读</span>
                                            </div>
                                        </div>
                                    </article><?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="height_20"></div>
                        <div class="pagination">
                            <?php if(($curPage) != $lastPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>" class="prev-button"><i
                                        class="fa fa-angle-left"></i></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>"><?php echo ($lastPage); ?></a><?php endif; ?>
                            <span class="current" href="<?php echo ($pageLink); ?>&page=<?php echo ($curPage); ?>"><?php echo ($curPage); ?></span>
                            <?php if(($curPage) != $nextPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>"><?php echo ($nextPage); ?></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>" class="next-button"><i
                                        class="fa fa-angle-right"></i></a><?php endif; ?>
                        </div><?php endif; ?>
                    <?php elseif($action == 'draft'): ?>
                    <?php if(!empty($drafts)): ?><div class="page-content page-content-user">
                            <div class="user-questions">
                                <div class="boxedtitle page-title" style="padding-top: 20px;"><h2>我的草稿</h2></div>
                                <?php if(is_array($drafts)): foreach($drafts as $key=>$v): ?><article class="question user-question">
                                        <p class="tag">【<?php echo ($v["class_name"]); ?>】<?php echo ($v["tags"]); ?></p>
                                        <span style="position: absolute;right: 20px;top: 10px;"><a
                                                href="javascript:;" onclick="del('<?php echo ($action); ?>','<?php echo ($v["id"]); ?>',this)"><i
                                                class="fa fa-times"></i></a></span>

                                        <h3>
                                            <a href="<?php echo U('ask');?>?id=<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></a>
                                        </h3>

                                        <div class="question-content">
                                            <div class="question-bottom">
                                            <span class="question-favorite"><i
                                                    class="fa fa-star"></i><?php echo ($v["collect"]); ?></span>
                                                <span class="question-date"><i class="fa fa-clock-o"></i><?php echo ($v["updated_timestamp"]); ?></span>
                                    <span class="question-comment"><a href="<?php echo U('ask');?>?id=<?php echo ($v["id"]); ?>"><i
                                            class="fa fa-comment"></i><?php echo ($v["replies"]); ?>
                                        回复</a></span>
                                                <span class="question-view"><i
                                                        class="fa fa-user"></i><?php echo ($v["views"]); ?> 阅读</span>
                                            </div>
                                        </div>
                                    </article><?php endforeach; endif; ?>
                            </div>
                        </div>
                        <div class="height_20"></div>
                        <div class="pagination">
                            <?php if(($curPage) != $lastPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>" class="prev-button"><i
                                        class="fa fa-angle-left"></i></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>"><?php echo ($lastPage); ?></a><?php endif; ?>
                            <span class="current" href="<?php echo ($pageLink); ?>&page=<?php echo ($curPage); ?>"><?php echo ($curPage); ?></span>
                            <?php if(($curPage) != $nextPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>"><?php echo ($nextPage); ?></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>" class="next-button"><i
                                        class="fa fa-angle-right"></i></a><?php endif; ?>
                        </div><?php endif; ?>
                    <?php elseif($action == 'focus'): ?>
                    <?php if(!empty($users)): if(is_array($users)): foreach($users as $key=>$v): ?><div class="about-author clearfix">
                                <div class="author-l">
                                    <div class="author-image">
                                        <img alt="" src="<?php echo ($v["head_img"]); ?>">
                                    </div>
                                    <div>
                                        <?php if($v["user_focus"] > 0): ?><button style="font-size: 12px;font-weight: normal;margin-left: 4px;padding: 4px 10px;"
                                                    onclick="Focus_on(this,'<?php echo ($v["id"]); ?>')" class="button color"
                                                    data-uid="<?php echo ($v["id"]); ?>">取消关注
                                            </button><?php endif; ?>
                                    </div>
                                </div>
                                <div class="author-bio">
                                    <h4><a href="<?php echo U('Profile/index');?>?id=<?php echo ($v["_id"]); ?>"><?php echo ($v["nick_name"]); ?></a><br>
                                        <small><?php echo ($v["user_attention"]); ?>人关注</small>
                                    </h4>
                                    <?php echo ($v["signature"]); ?>
                                </div>
                            </div><?php endforeach; endif; ?>
                        <div class="height_20"></div>
                        <div class="pagination">
                            <?php if(($curPage) != $lastPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>" class="prev-button"><i
                                        class="fa fa-angle-left"></i></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>"><?php echo ($lastPage); ?></a><?php endif; ?>
                            <span class="current" href="<?php echo ($pageLink); ?>&page=<?php echo ($curPage); ?>"><?php echo ($curPage); ?></span>
                            <?php if(($curPage) != $nextPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>"><?php echo ($nextPage); ?></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>" class="next-button"><i
                                        class="fa fa-angle-right"></i></a><?php endif; ?>
                        </div><?php endif; ?>
                    <?php elseif($action == 'message'): ?>
                    <?php if(!empty($messages)): ?><div class="page-content page-content-user">
                            <div class="user-questions">
                                <div class="boxedtitle page-title" style="padding-top: 20px;"><h2>消息中心</h2></div>
                                <ol class="commentlist clearfix">
                                    <?php if(is_array($messages)): foreach($messages as $key=>$v): ?><li class="comment">
                                            <div class="comment-body comment-body-answered clearfix">
                                                <div class="comment-text">
                                                    <div class="author clearfix">
                                                        <div class="comment-author"><a
                                                                href="<?php echo U('Profile/index');?>?id=<?php echo ($v["user_id"]); ?>"><?php echo ($v["user_name"]); ?></a>
                                                            邀请您回答
                                                            <a href="<?php echo U('Index/detail');?>?id=<?php echo ($v["post_id"]); ?>"><?php echo ($v["title"]); ?></a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- End children -->
                                        </li><?php endforeach; endif; ?>
                                </ol>
                            </div>
                        </div>
                        <div class="height_20"></div>
                        <div class="pagination">
                            <?php if(($curPage) != $lastPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>" class="prev-button"><i
                                        class="fa fa-angle-left"></i></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($lastPage); ?>"><?php echo ($lastPage); ?></a><?php endif; ?>
                            <span class="current" href="<?php echo ($pageLink); ?>&page=<?php echo ($curPage); ?>"><?php echo ($curPage); ?></span>
                            <?php if(($curPage) != $nextPage): ?><a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>"><?php echo ($nextPage); ?></a>
                                <a href="<?php echo ($pageLink); ?>&page=<?php echo ($nextPage); ?>" class="next-button"><i
                                        class="fa fa-angle-right"></i></a><?php endif; ?>
                        </div><?php endif; endif; ?>
            </div>
            <!-- End main -->
            <!-- End main -->
            <aside class="col-md-3 sidebar">
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
        var blog = '<?php echo ($blog); ?>';
        var current_user_id = '<?php echo (session('cooking_user_id')); ?>';
        jQuery(document).ready(function () {
            $(blog).click();
            $(".link").on("click", function (event) {
                event.preventDefault();//the default action of the event will not be triggered
                $("html, body").animate({scrollTop: ($("#" + this.href.split("#")[1]).offset().top)}, 600);
            });
        });
        function Focus_on(obj, id) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            $.ajax({
                type: "post",
                data: {
                    attention_user_id: id,
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
                            $(obj).parents('.about-author').remove();
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

        function del(a, id, obj) {
            if (current_user_id == '') {
                toastMsg('warning', '请先登录', '操作提示');
                return;
            }
            $.ajax({
                type: "post",
                data: {
                    id: id,
                    action: a,
                    user_id: current_user_id
                },
                url: "<?php echo U('Action/del');?>",
                success: function (data) {
                    if (data.code == 200) {
                        toastMsg('success', data.msg, '操作提示');
                        $(obj).parents('article').remove();
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