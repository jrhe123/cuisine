<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs -->
	<meta charset="utf-8">
	<title>中国烹饪学院 - 比新东方更牛逼</title>
	<meta name="description" content="Ask me Responsive 问题s and Answers Template">
	<meta name="author" content="vbegy">
	
	<!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="stylesheet" href="/Public/home/css/bootstrap/css/bootstrap.min.css">

    <!-- Main Style -->
    <link rel="stylesheet" href="/Public/home/css/style.css">
    <link rel="stylesheet" href="/Public/home/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Public/home/css/owl.carousel.css">

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

<div class="loader"><div class="loader_html"></div></div>

<div id="wrap" class="grid_1200">

    <div class="login-panel">
        <section class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="page-content">
                        <h2>登录</h2>

                        <div class="form-style form-style-3">
                            <form>
                                <div class="form-inputs clearfix">
                                    <p class="login-text">
                                        <input type="text" placeholder="用户名" value="">
                                        <i class="fa fa-user"></i>
                                    </p>

                                    <p class="login-password">
                                        <input type="password" placeholder="密码" value="">
                                        <i class="fa fa-lock"></i>
                                        <a href="#">忘记密码</a>
                                    </p>
                                </div>
                                <p class="form-submit login-submit">
                                    <input type="submit" value="登录" class="button color small login-submit submit">
                                </p>

                                <div class="rememberme">
                                    <label><input type="checkbox" checked="checked"> 记住我</label>
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

                    <p>
                        <label class="required">密码<span>*</span></label>
                        <input type="password" value="">
                    </p>

                    <p>
                        <label class="required">确认密码<span>*</span></label>
                        <input type="password" value="">
                    </p>
                </div>
                <p class="form-submit">
                    <input type="submit" value="注册" class="button color small submit">
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
                        <ul class="ul-current">
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

    <!--<div class="section-warp ask-me">-->
        <!--<img class="img-responsive" src="/Public/home/images/5.jpg">-->
    <!--</div>&lt;!&ndash; End section-warp &ndash;&gt;-->

	<section style="margin-top: 50px;" class="container main-content">
		<div class="row">
			<div class="col-md-9">
				<article class="question single-question question-type-normal">
					<h2>
						<a href="single_question.html">马蹄烧饼的制作与奥妙</a>
					</h2>
					<a class="question-report" href="#">回复</a>
					<div class="question-type-main"><i class="fa fa-question-circle"></i>问题</div>
					<div class="question-inner">
						<div class="clearfix"></div>
                        <div class="audio-soundcloud">
                            <iframe width="100%" height="500" scrolling="no" frameborder="no" src="http://player.youku.com/embed/XODY4NTk1MTYw"></iframe>
                        </div>
						<div class="question-desc">
							<p>配方都大同小异，无非是个人喜好多加点和少加点糖，但是制作方法就很有点不同，如果你上网搜索，会出来好多种制作方法，如果仔细观察就可以发现大体可以归为两类：</p>
                            <p>1． 加生浆到糖水中，搅拌至粘稠，上锅蒸，搞定！</p>
                            <p>2． 先加三分之一生浆到糖水中做成熟浆，然后再冲三分之二生浆到熟浆里啊！生熟浆好重要啊！弹牙爽口成功关键啊！</p>
                            <p>每次看到中餐里的少许适量就头疼，更别提这种玄之又玄的技法了，到底要怎么个冲法，什么时机冲比较合适呢？而且又是为什么会这样呢？而且作为一个懒人，一定要这么复杂的步骤吗，能不能简化？</p>
                            <p>首先，我打算设计一个实验来观察制作一个马蹄糕每一步发生的变化。其次，探讨每一种原料对整个体系的影响。再次，思考原料间的交互作用。最后考虑下是否真的有必要做个生熟浆的操作步骤。</p>
                            <p>采用懒人一步搞定法：首先准备工作，称好马蹄粉，加水得生浆，然后把生浆倒入煮开的糖水，搅拌5-7分钟得粘稠的浆称为熟浆，再装盘上锅蒸，详细步骤如图：</p>
                            <img class="img-responsive" src="/Public/home/img/d1.jpg">
						</div>
						<div class="question-details">
							<span class="question-answered question-answered-done"><i class="fa fa-check"></i>已解决</span>
							<span class="question-favorite"><i class="fa fa-star"></i>5</span>
						</div>
						<span class="question-date"><i class="fa fa-time"></i>4分钟之前</span>
						<span class="question-comment"><a href="#"><i class="fa fa-comment"></i>5 回复</a></span>
						<span class="question-view"><i class="fa fa-user"></i>70 阅读</span>
						<span class="single-question-vote-result">+22</span>
						<ul class="single-question-vote">
							<li><a href="#" class="single-question-vote-down" title="Dislike"><i class="fa fa-thumbs-down"></i></a></li>
							<li><a href="#" class="single-question-vote-up" title="Like"><i class="fa fa-thumbs-up"></i></a></li>
						</ul>
						<div class="clearfix"></div>
					</div>
				</article>
				
				<div class="share-tags page-content">
					<div class="question-tags"><i class="fa fa-tags"></i>
						<a href="#">问题</a>, <a href="#">咨询</a>
					</div>
					<div class="share-inside-warp">
						<ul>
							<li>
								<a href="#" original-title="微信">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#3b5997" span_hover="#666">
											<i i_color="#FFF" class="fa fa-wechat"></i>
										</span>
									</span>
								</a>
								<a href="#" target="_blank">微信</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#00baf0" span_hover="#666">
											<i i_color="#FFF" class="fa fa-weibo"></i>
										</span>
									</span>
								</a>
								<a target="_blank" href="#">微博</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#ca2c24" span_hover="#666">
											<i i_color="#FFF" class="fa fa-qq"></i>
										</span>
									</span>
								</a>
								<a href="#" target="_blank">QQ</a>
							</li>
							<li>
								<a href="#" target="_blank">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#e64281" span_hover="#666">
											<i i_color="#FFF" class="fa fa-tencent-weibo"></i>
										</span>
									</span>
								</a>
								<a href="#" target="_blank">腾讯微博</a>
							</li>
							<li>
								<a target="_blank" href="#">
									<span class="icon_i">
										<span class="icon_square" icon_size="20" span_bg="#c7151a" span_hover="#666">
											<i i_color="#FFF" class="fa fa-paw"></i>
										</span>
									</span>
								</a>
								<a href="#" target="_blank">百度</a>
							</li>
						</ul>
						<span class="share-inside-f-arrow"></span>
						<span class="share-inside-l-arrow"></span>
					</div><!-- End share-inside-warp -->
					<div class="share-inside"><i class="fa fa-share-alt"></i>分享</div>
					<div class="clearfix"></div>
				</div><!-- End share-tags -->
				
				<div class="about-author clearfix">
				    <div class="author-image">
				    	<a href="#" original-title="admin" class="tooltip-n"><img alt="" src="/Public/home/images/admin.jpg"></a>
				    </div>
				    <div class="author-bio">
				        <h4>关于作者</h4>
				        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra auctor neque. Nullam lobortis, sapien vitae lobortis tristique.
				    </div>
				</div><!-- End about-author -->
				
				<div id="related-posts">
					<h2>相关问题</h2>
					<ul class="related-posts">
						<li class="related-item"><h3><a href="#"><i class="fa fa-double-angle-right"></i>This Is My Second Poll 问题</a></h3></li>
						<li class="related-item"><h3><a href="#"><i class="fa fa-double-angle-right"></i>This is my third 问题</a></h3></li>
						<li class="related-item"><h3><a href="#"><i class="fa fa-double-angle-right"></i>This is my fourth 问题</a></h3></li>
						<li class="related-item"><h3><a href="#"><i class="fa fa-double-angle-right"></i>This is my fifth 问题</a></h3></li>
					</ul>
				</div><!-- End related-posts -->
				
				<div id="commentlist" class="page-content">
					<div class="boxedtitle page-title"><h2>回复 ( <span class="color">5</span> )</h2></div>
					<ol class="commentlist clearfix">
					    <li class="comment">
					        <div class="comment-body comment-body-answered clearfix"> 
					            <div class="avatar"><img alt="" src="/Public/home/images/admin.jpg"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">管理员</a></div>
					                	<div class="comment-vote">
						                	<ul class="question-vote">
						                		<li><a href="#" class="question-vote-up" title="Like"></a></li>
						                		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
						                	</ul>
					                	</div>
					                	<span class="question-vote-result">+1</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="fa fa-time"></i>January 15 , 2014 at 10:00 pm</div> 
					                    </div>
					                    <a class="comment-reply" href="#"><i class="fa fa-reply"></i>回复</a> 
					                </div>
					                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
					                </div>
									<div class="question-answered question-answered-done"><i class="fa fa-check"></i>最佳回答</div>
					            </div>
					        </div>
					        <ul class="children">
					            <li class="comment">
					                <div class="comment-body clearfix"> 
					                	<div class="avatar"><img alt="" src="/Public/home/images/admin.jpg"></div>
					                    <div class="comment-text">
					                        <div class="author clearfix">
					                        	<div class="comment-author"><a href="#">用户1</a></div>
					                        	<div class="comment-vote">
					                            	<ul class="question-vote">
					                            		<li><a href="#" class="question-vote-up" title="Like"></a></li>
					                            		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
					                            	</ul>
					                        	</div>
					                        	<span class="question-vote-result">+1</span>
					                        	<div class="comment-meta">
					                                <div class="date"><i class="fa fa-time"></i>January 15 , 2014 at 10:00 pm</div> 
					                            </div>
					                            <a class="comment-reply" href="#"><i class="fa fa-reply"></i>回复</a> 
					                        </div>
					                        <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
					                        </div>
					                    </div>
					                </div>
					                <ul class="children">
					                    <li class="comment">
					                        <div class="comment-body clearfix"> 
					                            <div class="avatar"><img alt="" src="/Public/home/images/admin.jpg"></div>
					                            <div class="comment-text">
					                                <div class="author clearfix">
					                                	<div class="comment-author"><a href="#">管理员</a></div>
					                                	<div class="comment-vote">
					                                    	<ul class="question-vote">
					                                    		<li><a href="#" class="question-vote-up" title="Like"></a></li>
					                                    		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
					                                    	</ul>
					                                	</div>
					                                	<span class="question-vote-result">+9</span>
					                                	<div class="comment-meta">
					                                        <div class="date"><i class="fa fa-time"></i>January 15 , 2014 at 10:00 pm</div> 
					                                    </div>
					                                    <a class="comment-reply" href="#"><i class="fa fa-reply"></i>回复</a> 
					                                </div>
					                                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
					                                </div>
					                            </div>
					                        </div>
					                    </li>
					                 </ul><!-- End children -->
					            </li>
					            <li class="comment">
					            	<div class="comment-body clearfix"> 
				                        <div class="avatar"><img alt="" src="/Public/home/images/admin.jpg"></div>
				                        <div class="comment-text">
				                            <div class="author clearfix">
				                            	<div class="comment-author"><a href="#">用户2</a></div>
				                            	<div class="comment-vote">
				                                	<ul class="question-vote">
				                                		<li><a href="#" class="question-vote-up" title="Like"></a></li>
				                                		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
				                                	</ul>
				                            	</div>
				                            	<span class="question-vote-result">-3</span>
				                            	<div class="comment-meta">
				                                    <div class="date"><i class="fa fa-time"></i>January 15 , 2014 at 10:00 pm</div> 
				                                </div>
				                                <a class="comment-reply" href="#"><i class="fa fa-reply"></i>回复</a> 
				                            </div>
				                            <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
				                            </div>
				                        </div>
				                    </div>
					            </li>
					        </ul><!-- End children -->
					    </li>
					    <li class="comment">
					        <div class="comment-body clearfix"> 
					            <div class="avatar"><img alt="" src="/Public/home/images/admin.jpg"></div>
					            <div class="comment-text">
					                <div class="author clearfix">
					                	<div class="comment-author"><a href="#">用户3</a></div>
					                	<div class="comment-vote">
					                    	<ul class="question-vote">
					                    		<li><a href="#" class="question-vote-up" title="Like"></a></li>
					                    		<li><a href="#" class="question-vote-down" title="Dislike"></a></li>
					                    	</ul>
					                	</div>
					                	<span class="question-vote-result">+1</span>
					                	<div class="comment-meta">
					                        <div class="date"><i class="fa fa-time"></i>January 15 , 2014 at 10:00 pm</div> 
					                    </div>
					                    <a class="comment-reply" href="#"><i class="fa fa-reply"></i>回复</a> 
					                </div>
					                <div class="text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi adipiscing gravida odio, sit amet suscipit risus ultrices eu. Fusce viverra neque at purus laoreet consequat. Vivamus vulputate posuere nisl quis consequat.</p>
					                </div>
					            </div>
					        </div>
					    </li>
					</ol><!-- End commentlist -->
				</div><!-- End page-content -->
				
				<div id="respond" class="comment-respond page-content clearfix">
				    <div class="boxedtitle page-title"><h2>回复问题</h2></div>
				    <form action="" method="post" id="commentform" class="comment-form">
				        <div id="respond-textarea">
				            <p>
				                <label class="required" for="comment">内容<span>*</span></label>
				                <textarea id="comment" name="comment" aria-required="true" cols="58" rows="8"></textarea>
				            </p>
				        </div>
				        <p class="form-submit">
				        	<input name="submit" type="submit" id="submit" value="提交回复" class="button small color">
				        </p>
				    </form>
				</div>
				
				<div class="post-next-prev clearfix">
				    <p class="prev-post">
				        <a href="#"><i class="fa fa-double-angle-left"></i>&nbsp;上一个问题</a>
				    </p>
				    <p class="next-post">
				        <a href="#">下一个问题&nbsp;<i class="fa fa-double-angle-right"></i></a>
				    </p>
				</div><!-- End post-next-prev -->	
			</div><!-- End main -->
            <aside class="col-md-3 sidebar">
                <div class="widget widget_stats">
                    <h3 class="widget_title">个人操作</h3>
                    <div class="ul_list ul_list">
                        <ul>
                            <li><i class="fa fa-file-o"></i><a href="#">我的草稿</a></li>
                            <li><i class="fa fa-bookmark-o"></i><a href="#">我的课程</a></li>
                            <li><i class="fa fa-check-square-o"></i><a href="#">我的关注的问题</a></li>
                        </ul>
                    </div>
                </div>

                <div class="widget widget_login">
                    <h3 class="widget_title">登录</h3>
                    <div class="form-style form-style-2">
                        <form>
                            <div class="form-inputs clearfix">
                                <p class="login-text">
                                    <input type="text" placeholder="用户名" value="">
                                    <i class="fa fa-user"></i>
                                </p>
                                <p class="login-password">
                                    <input type="password" placeholder="密码" value="" >
                                    <i class="fa fa-lock"></i>
                                    <a href="#">忘记密码</a>
                                </p>
                            </div>
                            <p class="form-submit login-submit">
                                <input type="submit" value="登录" class="button color small login-submit submit">
                            </p>
                            <div class="rememberme">
                                <label><input type="checkbox" checked="checked"> 记住我</label>
                            </div>
                        </form>
                        <ul class="login-links login-links-r">
                            <li><a href="#">注册</a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                </div>

                <div class="widget widget_highest_points">
                    <h3 class="widget_title">排行榜</h3>
                    <ul>
                        <li>
                            <div class="author-img">
                                <a href="#"><img width="60" height="60" src="/Public/home/images/admin.jpg" alt=""></a>
                            </div>
                            <h6><a href="#">管理员</a></h6>
                            <span class="comment">12 分</span>
                        </li>
                        <li>
                            <div class="author-img">
                                <a href="#"><img width="60" height="60" src="/Public/home/images/admin.jpg" alt=""></a>
                            </div>
                            <h6><a href="#">用户1</a></h6>
                            <span class="comment">10 分</span>
                        </li>
                        <li>
                            <div class="author-img">
                                <a href="#"><img width="60" height="60" src="/Public/home/images/admin.jpg" alt=""></a>
                            </div>
                            <h6><a href="#">用户2</a></h6>
                            <span class="comment">5 分</span>
                        </li>
                    </ul>
                </div>

                <div class="widget widget_tag_cloud">
                    <h3 class="widget_title">标签</h3>
                    <a href="#">项目</a>
                    <a href="#">文件</a>
                    <a href="#">菜式</a>
                    <a href="#">技巧</a>
                    <a href="#">选菜</a>
                    <a href="#">材料</a>
                </div>

                <div class="widget">
                    <h3 class="widget_title">最近问题</h3>
                    <ul class="related-posts">
                        <li class="related-item">
                            <h3><a href="#">第一个问题</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="clear"></div><span>Feb 22, 2014</span>
                        </li>
                        <li class="related-item">
                            <h3><a href="#">第一个咨询问题</a></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            <div class="clear"></div><span>Feb 22, 2014</span>
                        </li>
                    </ul>
                </div>
            </aside><!-- End sidebar -->
        </div><!-- End row -->
	</section><!-- End container -->

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

</div><!-- End wrap -->

<div class="go-up"><i class="fa fa-angle-up"></i></div>

<!-- js -->
<script src="/Public/home/js/jquery.min.js"></script>
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
<script src="/Public/home/js/tags.js"></script>
<script src="/Public/home/js/jquery.bxslider.min.js"></script>
<script src="/Public/home/js/custom.js"></script>
<!-- End js -->
<script>
    var blog='<?php echo ($blog); ?>';
    jQuery(document).ready(function () {
        $(blog).click();
        $(".link").on("click", function (event) {
            event.preventDefault();//the default action of the event will not be triggered
            $("html, body").animate({scrollTop: ($("#" + this.href.split("#")[1]).offset().top)}, 600);
        });
    });
</script>

</body>
</html>