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
    
    <link rel="stylesheet" href="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.css"/>


    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.png">
    
    <style>
        #allmap {
            height: 500px;
            width: 100%;
            overflow: hidden;
        }

        #allmap td {
            box-sizing: unset;
            vertical-align: middle;
        }

        #allmap img,
        .google-maps img {
            max-width: none;
        }

        input[type="text"], input[type="password"], input[type="email"], textarea, select {
            background: #f3f3f3 none repeat scroll 0 0;
            border: 1px solid #dedede;
            border-radius: 2px;
            color: #2f3239;
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin: 0;
            max-width: 100%;
            outline: medium none;
            padding: 8px;
            transition: border 0.25s linear 0s, color 0.25s linear 0s, background-color 0.25s linear 0s;
            width: 100% !important;
        }

        .input-icon input {
            padding: 7px 0 7px 30px;
            width: 220px !important;
        }

        .tab-inner-warp .page-content, .about-author, .user-question, #related-posts {
            background: #fff none repeat scroll 0 0;
            border: 0;
            box-shadow: 0 0 0 0;
            box-sizing: border-box;
            padding: 20px;
        }

        #business p {
            text-indent: 2em;
        }

        #business .page-content {
            border-bottom: 2px solid #e3e3e3;
            margin-bottom: 25px;
        }

        #business a {
            color: #3498DB;
            padding-left: 25px;
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
    

    <section class="container main-content page-left-sidebar" style="margin-bottom: 50px;margin-top: 50px;">
        <!--<div class="row">-->
        <!--<div class="contact-us">-->
        <!--<div id="baidumap" class="col-md-12 row">-->
        <!--<div class="page-content">-->
        <!---->
        <!--</div>-->
        <!--&lt;!&ndash; End page-content &ndash;&gt;-->
        <!--</div>-->

        <!--</div>-->
        <!--&lt;!&ndash; End contact-us &ndash;&gt;-->
        <!--</div>-->
        <!-- End row -->
        <div class="row">
            <div class="col-md-12">
                <div class="tabs-warp tabs-vertical">
                    <ul class="tabs" style="border: 1px solid #e3e3e3;">
                        <li style="border-bottom: 1px solid #e3e3e3" class="tab"><a href="#">关于我们</a></li>
                        <li style="border-bottom: 1px solid #e3e3e3" class="tab"><a href="#">联系我们</a></li>
                        <li style="border-bottom: 1px solid #e3e3e3" class="tab"><a href="#">意见反馈</a></li>
                        <li style="border-bottom: 1px solid #e3e3e3" class="tab"><a href="#">商务合作</a></li>
                        <li style="border-bottom: 1px solid #e3e3e3" class="tab"><a href="#">人才招聘</a></li>
                        <li class="tab"><a href="#">技术支持</a></li>
                    </ul>
                    <div class="tab-inner-warp" style="padding-top: 0">
                        <div class="tab-inner">
                            <div id="about" class="row" style="margin-bottom: 20px">
                                <div class="page-content">
                                    <div class="boxedtitle page-title"><h2>关于我们</h2></div>
                                    <div style="margin-bottom: 15px;" align="center">
                                        <img class="img-responsive"
                                             src="/Public/home/images/about.jpg" alt=""/>
                                    </div>
                                    <p style="text-indent: 2em">
                                        顺德职业技术学院成立于2014年1月，由中国烹饪协会、顺德区政府、顺德职业技术学院共同挂牌组建，旨在为传承、发扬、创新博大精深、内涵丰富的中国饮食文化，培养综合素质高、实践能力强的中国烹饪专业人才，促使中国餐饮企业走向世界。
                                    </p>

                                    <p style="text-indent: 2em">
                                        顺德职业技术学院将已经有的烹饪工艺与烹饪营养、公共营养、餐饮管理、酒店管理4个专业方向纳入中国烹饪学院，未来中国烹饪学院将形成以烹饪为中心的系统学科群，进行八大菜系研究并进行网络教学推广，使我国烹饪教育呈现出多层次、多格局、国际化发展。
                                    </p>

                                </div>
                                <!-- End page-content -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-inner-warp" style="padding-top: 0">
                        <div class="tab-inner">
                            <div id="contact" class="row" style="margin-bottom: 20px">
                                <div class="page-content">
                                    <div class="boxedtitle page-title"><h2>联系我们</h2></div>

                                    <div class="widget widget_contact">
                                        <ul>
                                            <li><p>顺德职业技术学院</p>
                                                <br>
                                                <i class="fa fa-map-marker"></i>地址 :<p>顺德大良德胜东路顺德职业技术学院学术交流中心二楼</p>
                                            </li>
                                            <li><i class="fa fa-phone"></i>电话 :<p><a href="tel:0757-22328957">0757-22328957 </a><a
                                                    href="tel:18666558282">18666558282</a></p></li>
                                            <li><i class="fa fa-envelope-o"></i>E-mail :<p><a
                                                    href="mailto:1654390788@qq.com">1654390788@qq.com</a>
                                            </p></li>
                                            <li>
                                                <i class="fa fa-share-square-o "></i>社交链接 :
                                                <p>
                                                    <a href="http://weibo.com/u/5721502570/home?topnav=1&wvr=6" original-title="微博" class="tooltip-n">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#3b5997"
                                                      span_hover="#2f3239">
													<i i_color="#FFF" class="fa fa-wechat"></i>
												</span>
											</span>
                                                    </a>
                                                    <a  original-title="微信:xueyan3210" class="tooltip-n" href="javascript:;">
											<span class="icon_i">
												<span class="icon_square" icon_size="25" span_bg="#00baf0"
                                                      span_hover="#2f3239">
													<i i_color="#FFF" class="fa fa-weibo"></i>
												</span>
											</span>
                                                    </a>
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="allmap">
                                    </div>
                                </div>
                                <!-- End page-content -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-inner-warp" style="padding-top: 0">
                        <div class="tab-inner">
                            <div id="feedback" class="row" style="margin-bottom: 20px;">
                                <div class="page-content">
                                    <div class="boxedtitle page-title"><h2>意见反馈</h2></div>

                                    <p>尊敬的客户:<br>为使您的留言信息更加有效提交给我们，请务必把资料完善填写，非常感谢您的留言!</p>

                                    <form class="form-style form-style-3 form-style-5 form-js"
                                          action=""
                                          method="post">
                                        <div class="form-inputs clearfix">
                                            <?php if(!empty($_SESSION['cooking_user_id'])): echo (session('cooking_user_name')); ?>
                                                <?php else: ?>
                                                <p>
                                                    <label for="name" class="required">姓名<span>*</span></label>
                                                    <input type="text" class="required-item" value="" name="name"
                                                           id="name"
                                                           aria-required="true">
                                                </p>

                                                <p>
                                                    <label for="mail" class="required">邮箱<span>*</span></label>
                                                    <input type="email" class="required-item" id="mail" name="mail"
                                                           value=""
                                                           aria-required="true">
                                                </p><?php endif; ?>
                                        </div>
                                        <div class="form-textarea">
                                            <p>
                                                <label for="message" class="required">内容<span>*</span></label>
                                    <textarea id="message" class="required-item" name="message" aria-required="true"
                                              cols="58" rows="7"></textarea>
                                            </p>
                                        </div>
                                        <p class="form-submit">
                                            <input type="hidden" name="user_id" value="<?php echo (session('cooking_user_id')); ?>"/>
                                            <input type="hidden" name="user_name" value="<?php echo (session('cooking_user_name')); ?>"/>
                                            <input name="submit" type="submit" value="提交"
                                                   class="submit button small color">
                                        </p>
                                    </form>
                                </div>
                                <!-- End page-content -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-inner-warp" style="padding-top: 0">
                        <div class="tab-inner">
                            <div id="business" class="row" style="margin-bottom: 20px">
                                <div class="page-content">
                                    <div class="boxedtitle page-title"><h2>商务合作</h2></div>
                                    <p>
                                        广东顺德创业培训学院，作为顺德职业技术学院的二级学院，依托其丰富优质的办学资源，现联同中国烹饪协会南方培训基地（中国烹饪学院）开设烹饪工艺与营养专业，面向全国招生。</p>

                                    <p>
                                        中国烹饪协会南方培训基地（中国烹饪学院），由中国烹饪协会、顺德区政府、顺德职业技术学院于2014年1月20日挂牌成立，在推广“顺德——世界美食之都”的基础上，承担餐饮烹饪行业高端人才培养的重任：引用和创新德国“双元制”高等职业教育模式和中国餐饮业职业经理人课程体系，树立餐饮职业教育的标杆</p>

                                    <p>为此，政府与学校专门投入资金2500万元人民币建成总面积近8000m2的烹饪实训中心。</p>

                                    <p>
                                        该实训中心是集中餐烹饪、西餐烹饪、烹饪创新研发和餐旅一体化体验活动、大型烹饪技术技能大赛等功能的烹饪实训基地，可同时容纳450位学员进行烹饪（工位岗位）实训学习活动及大型烹饪技术技能竞赛活动。</p>

                                    <p>
                                        烹饪工艺与营养专业，创办于2007年，是学院重点打造的特色专业之一，2013年通过国家教育部、财政部支持高等职业学校提升专业服务产业发展能力的国际化特色专业的验收。</p>
                                    <h5>1、国际合作办学现状</h5>

                                    <p>与德国F+U教育集团合作，组织学生赴德国实习</p>

                                    <p>与英国洲际酒店集团合作共建“洲际酒店集团英才培养学院”</p>

                                    <p>与美国罗瑞特集团旗下的瑞士格里昂高等教育学院合作，共建中欧国际酒店管理教育中心</p>

                                    <p>在马来西亚UCSI大学成立顺峰烹饪学院</p>

                                    <p>与美国饭店协会教育学院签约成为其全球联盟学校</p>

                                    <p>成立美国饭店协会国际酒店职业资格（顺德）认证中心</p>
                                    <h5>2、参与国际化大型餐饮项目，协同育人</h5>

                                    <p>专业师生参加2008年北京奥运会、2010年广州亚运会、2010年上海世博会、2011年世界大学生运动会等国际化餐饮服务。</p>
                                </div>
                                <a href="tel">合作电话：0757-2929455/18900000000</a><br/>
                                <a href="mailto">邮箱联系：xiaoluapp@163.com</a><br/>
                                <a href="#">联系人：冯生</a>
                                <!-- End page-content -->
                            </div>

                        </div>
                    </div>
                    <div class="tab-inner-warp" style="padding-top: 0">
                        <div class="tab-inner">
                            <div id="recruit" class="row" style="margin-bottom: 20px">
                                <div class="page-content page-shortcode">
                                    <div class="boxedtitle page-title"><h2>人才招聘</h2></div>
                                    <div class="accordion toggle-accordion">
                                        <h4 class="accordion-title"><a href="#">储备干部</a></h4>

                                        <div class="accordion-inner">
                                            <h5>工作内容/职位描述：</h5>

                                            <p>1、通过在车间相关部门进行实习后，结合实习表现、个人发展意愿以及公司的岗位空缺进行定岗。 </p>

                                            <p>
                                                2、定岗方向：电机工艺员、设备管理员、工装设计员、电工维修员等。其中，电机工艺员分为串激电机方向、机加方向、SY电机方向、定子方向、新型电机等方向。</p>
                                            <h5>任职资格：</h5>

                                            <p>1、大专以上学历，电气工程及其自动化、机械设计制造及其自动化、材料成型及控制工程、机电一体化、数控、模具、计算机类专业优先； </p>

                                            <p>2、有电机行业实习经验者优先； </p>

                                            <p>3、熟练使用office和CAD、三维绘图软件； </p>

                                            <p>4、具有较强的沟通协调能力。思路开阔，善于总结、分析， 有较强的归纳能力。 </p>
                                        </div>
                                        <h4 class="accordion-title"><a href="#">人力资源实习生</a></h4>

                                        <div class="accordion-inner">
                                            <h5>工作内容/职位描述：</h5>

                                            <p>1、整理并发布招聘岗位需求；</p>

                                            <p>2、协助筛选简历并组织安排面试； </p>

                                            <p>3、协助开拓、管理招聘渠道及供应商； </p>

                                            <p>4、负责办理相关人事手续及档案、合同等人事管理； </p>

                                            <p>5、负责eHR系统基础人事信息维护。 </p>
                                        </div>
                                        <h4 class="accordion-title"><a href="#">英语翻译实习生</a></h4>

                                        <div class="accordion-inner">
                                            <h5>工作内容/职位描述：</h5>

                                            <p>1、 对接对标中心咨询方美国专家的翻译，协助美的方工程师与美国专家交流； </p>

                                            <p>2、 将对标中心咨询方的相关技术文件转换成中文；</p>
                                            <h5>任职资格：</h5>

                                            <p>1、本科在读、研究生在读，机械类专业/英语类专业 </p>

                                            <p>2、实习时间：5月底-10月； </p>

                                            <p>3、精通英语，具备很强的听、说、读、写能力，机械类专业过六级，英语类专业过专八。 </p>

                                            <p>4、具备较强的沟通能力、承压能力。 </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End page-content -->
                            </div>
                        </div>
                    </div>
                    <div class="tab-inner-warp" style="padding-top: 0">
                        <div class="tab-inner">
                            <div id="technology" class="row">
                                <div class="page-content page-shortcode">
                                    <div class="boxedtitle page-title"><h2>技术支持</h2></div>
                                    <p><span class="dropcap"><img class="img-responsive"
                                                                  src="http://www.xiaolu.co//Public/assets/global/imgs/logo4.png"
                                                                  alt=""/></span>佛山市小鹿网络科技有限公司成立于2010年，致力为佛山企业结合本土优势与移动互联网，提供完整的转型升级解决方案。主要业务范围：App开发、网站开发、易订货等。<br>
                                        我们的使命：帮助降低用户使用移动互联网技术的成本，让技术成为他们的竞争优势。我们相信最好的方式就是保持独立，虽然我不能保证最后我们会真正的成功，但那是我们的目标，我们也计划会长期为此而奋斗，越长期越好。
                                    </p>
                                </div>
                                <!-- End page-content -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- End Tabs Vertical -->
            </div>
            <!-- End page-content -->
        </div>
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


    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=ZmGu44xNFljnHUsDRuqT7ZsQ"></script>
    <script type="text/javascript"
            src="http://api.map.baidu.com/library/SearchInfoWindow/1.5/src/SearchInfoWindow_min.js"></script>

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
        // 百度地图API功能
        var map = new BMap.Map('allmap');
        var poi = new BMap.Point(113.331447, 22.815093);
        map.centerAndZoom(poi, 13);
        map.enableScrollWheelZoom();

        var content1 = '<div style="margin:0;line-height:20px;padding:2px;">' +
                '<img src="../img/baidu.jpg" alt="" style="float:right;zoom:1;overflow:hidden;width:100px;height:100px;margin-left:3px;"/>' +
                '地址：顺德大良德胜东路顺德职业技术学院学术交流中心二楼（顺德职业技术学院）<br/>电话：0757-22328957 18666558282<br/>简介：中国烹饪学院' +
                '</div>';
        var data_info = [[113.331447, 22.815093, content1]
        ];

        //创建检索信息窗口对象
        var searchInfoWindow = null;
        for (var i = 0; i < data_info.length; i++) {

            var marker = new BMap.Marker(new BMap.Point(data_info[i][0], data_info[i][1]));  // 创建标注
            map.addOverlay(marker);               // 将标注添加到地图中
            addClickHandler(marker, data_info[i][2]);
        }

        jQuery(document).ready(function () {
            $(".link").on("click", function (event) {
                event.preventDefault();//the default action of the event will not be triggered
                $("html, body").animate({scrollTop: ($("#" + this.href.split("#")[1]).offset().top)}, 600);
            });
        });
        function addClickHandler(marker, content) {
            marker.addEventListener("click", function (e) {
                searchInfoWindow = new BMapLib.SearchInfoWindow(map, content, {
                    title: "中国烹饪学院",      //标题
                    width: 290,             //宽度
                    height: 105,              //高度
                    panel: "panel",         //检索结果面板
                    enableAutoPan: true,     //自动平移
                    searchTypes: [
                        BMAPLIB_TAB_SEARCH,   //周边检索
                        BMAPLIB_TAB_TO_HERE,  //到这里去
                        BMAPLIB_TAB_FROM_HERE //从这里出发
                    ]
                });
                searchInfoWindow.open(marker);
            });
        }
    </script>



</body>
</html>