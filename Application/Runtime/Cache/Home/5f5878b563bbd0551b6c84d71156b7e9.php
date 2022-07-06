<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP程序设计考试</title>
	<link href="/dzsw/Public/css/home.css" rel="stylesheet" />
	<link href="/dzsw/Public/css/index.css" rel="stylesheet" />
	<script src="/dzsw/Public/js/jquery.min.js"></script>
</head>
<body>
	<div id="top">
		<div class="top_nav">
<!--		<ul><li>收藏本站</li><li>关注本站</li></ul>-->
		<ul class="right">
			<?php if(isset($mid)): ?><li><?php echo ($mname); ?>，欢迎来到PHP测试！[<a href="/dzsw/Home/User/logout">退出</a>]<li>
			<?php else: ?>
			<li>您好，欢迎来到我的PHP测试！[<a href="/dzsw/Home/User/login">登录</a>][<a href="/dzsw/Home/User/register">免费注册</a>]</li><?php endif; ?>
			<li class="line">|</li><li>我的订单</li>
			<li class="line">|</li><li><a href="/dzsw/Home/User/index">会员中心</a></li>
			<li class="line">|</li><li><a href="/dzsw/Home/Cart/index">我的购物车</a></li>
			<li class="line">|</li><li><a href="/dzsw/Home/Cart/index">购物车结算</a></li>
		</ul>
		</div>
	</div>
	<!-- logo-->
	<h1>
			<a href="/dzsw/"><img src="/dzsw/Public/image/logo11.png" alt=""></a>
		</h1>
	<!--导航-->
	<div class="nav">
		<ul>
			<li><a href="./Index/find.html">全部商品分类</a></li>
			<li><a href="/dzsw/">首页</a></li>
			<li><a href="./Index/find.html">课程</a></li>
			<li><a href="#">职业规划</a></li>
		</ul>
	</div>
	<!--搜索-->
	<div class="search">
		<input type="text" name="" id="" placeholder="请输入文字">
		<button></button>
	</div>

<!--	<div id="box">-->
<!--		<div id="header">-->
<!--			<a class="left" href="/dzsw/"><div id="logo"></div></a>-->
<!--			<div id="search" class="left">-->
<!--				<input type="text" class="left" />-->
<!--				<input class="search_btn" type="button" value="搜索" />-->
<!--				<p id="search_hot">热门搜索：PHP培训　大学教材　智能手机　平板电脑</p>-->
<!--			</div>-->
<!--			<div id="info" class="left">-->
<!--				<input type="button" value="会员中心" onclick="location.href='/dzsw/Home/User/index'" />-->
<!--				<input type="button" value="去购物车结算" onclick="location.href='/dzsw/Home/Cart/index'" />-->
<!--			</div>-->
<!--		</div>-->

		<div class="clear"></div>
<!--		<div id="nav">-->
<!--			<ul><li class="category"><a href="#">全部商品分类</a></li><li class="curr"><a href="/dzsw/">首页</a></li>-->
<!--				<li><a href="#">PHP</a></li><li><a href="#">Java</a></li><li><a href="#">安卓</a></li>-->
<!--				<li><a href="#">.Net</a></li><li><a href="#">C/C++</a></li><li><a href="#">IOS</a></li>-->
<!--			</ul>-->
<!--		</div>-->

<!--		<div id="service">-->
<!--			<ul><li>购物指南</li><li>配送方式</li><li>支付方式</li>-->
<!--				<li>售后服务</li><li>特色服务</li><li>网络服务</li>-->
<!--			</ul>-->
			<div class="clear"></div>
<!--		</div>-->
<!--		<div id="footer">传智商城·本项目仅供学习使用</div>-->
<!--		<div style="height: 200px;background-color:pink;"><a href="Index/goods.html">111</a></div>/-->
<!--	</div>-->
	<div id="slide">
	<?php if(is_array($cate)): $i = 0; $__LIST__ = array_slice($cate,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><div class="cate">
		<div class="cate1 left"><a href="/dzsw/Home/Index/find/cid/<?php echo ($v1["cid"]); ?>"><?php echo ($v1["cname"]); ?></a></div>
		<div class="subitem" style="display:none;">
			<?php if(isset($v1["child"])): if(is_array($v1["child"])): $i = 0; $__LIST__ = array_slice($v1["child"],0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?><dl><dt><a href="/dzsw/Home/Index/find/cid/<?php echo ($v2["cid"]); ?>"><?php echo ($v2["cname"]); ?></a></dt><dd>
				<?php if(isset($v2["child"])): if(is_array($v2["child"])): $i = 0; $__LIST__ = array_slice($v2["child"],0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>|<a href="/dzsw/Home/Index/find/cid/<?php echo ($v3["cid"]); ?>"><?php echo ($v3["cname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; endif; ?></dd>
			</dl><?php endforeach; endif; else: echo "" ;endif; endif; ?>
		</div>
	</div><?php endforeach; endif; else: echo "" ;endif; ?>
	<div class="clear"></div>
</div>
<!--<div id="hot" class="left"></div>-->
<!--<div id="news" class="right">新闻列表</div>-->
<!--<div class="clear"></div>-->
<!--轮播图片-->
<div class="banner">
	<div class="wrapper">
		<div class="left">
			<ul>
				<li><a href="#">前端开发<span>></span></a></li>
				<li><a href="#">视频剪辑<span>></span></a></li>
				<li><a href="#">Javascript<span>></span></a></li>
				<li><a href="#">Python<span>></span></a></li>
				<li><a href="#">.Vue<span>></span></a></li>
				<li><a href="#">Javascript<span>></span></a></li>
				<li><a href="#">Mysql<span>></span></a></li>
				<li><a href="#">Android<span>></span></a></li>
			</ul>
		</div>
		<div class="right">
			<h2>我的课程表</h2>
			<div class="content">
				<dl>
					<dt><span>继续学习 </span>程序语言设计</dt>
					<dd>正在学习-使用对象</dd>
				</dl>
				<dl>
					<dt><span>继续学习 </span>程序语言设计</dt>
					<dd>正在学习-使用对象</dd>
				</dl>
				<dl>
					<dt><span>继续学习 </span>程序语言设计</dt>
					<dd>正在学习-使用对象</dd>
				</dl>
				<a href="#">全部课程</a>
			</div>
		</div>
	</div>
</div>

<!--精品推荐-->
<div class="goods wrapper">
	<h4>精品推荐</h4>
	<ul>
		<li><a href="#">JQuery</a></li>
		<li><a href="#">Think PHP5</a></li>
		<li><a href="#">Android</a></li>
		<li><a href="#">Java</a></li>
		<li><a href="#">Python</a></li>
		<li><a href="#">MySql</a></li>
	</ul>
	<a href="#" class="aaa">修改兴趣</a>
</div>

<!-- 商品-->
<div class="box wrapper">
	<div class="title">
		<h2>精品推荐</h2>
		<a href="#">查看全部</a>
	</div>

	<div class="content clearfix">
		<ul>
			<li>
				<a href="goods.html">
					<img src="/dzsw/Public/image/course011.png" alt="">
					<h3>THink PHP5.0 播客系统实战项目演练</h3>
				</a>
				<a href="#" ><p><span>《99.00￥》</span> - 1234人正在学习</p></a>

			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course02.png" alt="">
					<h3>Android 网络图片加载框架详解</h3>
					<p><span>《99.00￥》</span> - 1354人正在学习</p>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course03.png" alt="">
					<h3>Angular2 劲爆来袭 打造你的今日头条</h3>
					<p><span>《99.00￥》</span> - 1454人正在学习</p>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course04.png" alt="">
					<h3>Android Hybrid App 开发实战</h3>
					<p><span>《99.00￥》</span> - 1876人正在学习</p>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course05.png" alt="">
					<h3>UGUL<br>源码深度解析</h3>
					<p><span>《99.00￥》</span> - 2145人正在学习</p>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course06.png" alt="">
					<h3>Kami2<br>首页界面切换效果</h3>
					<p><span>《99.00￥》</span> - 1674人正在学习</p>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course07.png" alt="">
					<h3>UNITY<br>入门</h3>
					<p><span>《99.00￥》</span> - 1245人正在学习</p>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course08.png" alt="">
					<h3>Cocos<br><br></h3>
					<p><span>《99.00￥》</span> - 2244人正在学习</p>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course03.png" alt="">
					<h3>THink PHP5.0 播客系统实战项目演练</h3>
					<p><span>《99.00￥》</span> - 2254人正在学习</p>
				</a>
			</li>
			<li>
				<a href="#">
					<img src="/dzsw/Public/image/course011.png" alt="">
					<h3>THink PHP5.0 播客系统实战项目演练</h3>
					<p><span>《99.00￥》</span> - 1634人正在学习</p>
				</a>
			</li>

		</ul>
	</div>
</div>

<div id="best">
	<div class="best-img left"></div>
	<?php if(is_array($best)): foreach($best as $key=>$v): ?><ul class="item left">
		<li><a href="/dzsw/Home/Index/goods/id/<?php echo ($v["gid"]); ?>" target="_blank"><?php if(empty($v["thumb"])): ?><img src="/dzsw/Public/image/preview.jpg"><?php else: ?><img src="/dzsw/Public/uploads/thumb/<?php echo ($v["thumb"]); ?>"><?php endif; ?></a></li>
		<li class="goods"><a href="/dzsw/Home/Index/goods/id/<?php echo ($v["gid"]); ?>" target="_blank"><?php echo ($v["gname"]); ?></a></li>
		<li class="price">￥<?php echo ($v["price"]); ?></li>
	</ul><?php endforeach; endif; ?>
	<div class="clear"></div>
</div>

<script>
	$(".cate").hover(function(){
		$(this).find(".subitem").show();
		$(this).find("a").addClass("on");
	},function(){
		$(this).find(".subitem").hide();
		$(this).find("a").removeClass("on");
	});
</script>
	<!--版权-->
	<div class="footer">
		<div class="wrapper">
			<div class="left">
				<img src="./images/logo.png" alt="">
				<p>PHP程序设计实践考试<br>版权所属@19网工-杜永康-202121442</p>
				<a href="#">下载APP</a>
			</div>
			<div class="right">
				<dl>
					<dt>关于PHP考试</dt>
					<dd><a href="#">PHP框架</a></dd>
					<dd><a href="#">Apache</a></dd>
					<dd><a href="#">MySql</a></dd>
				</dl>
				<dl>
					<dt>新手指南</dt>
					<dd><a href="#">如何注册</a></dd>
					<dd><a href="#">如何选课</a></dd>
					<dd><a href="#">如何拿到毕业证</a></dd>
					<dd><a href="#">学分是什么</a></dd>
					<dd><a href="#">考试未通过怎么办</a></dd>
				</dl>
				<dl>
					<dt>合作伙伴</dt>
					<dd><a href="#">合作机构</a></dd>
					<dd><a href="#">合作导师</a></dd>
				</dl>
			</div>
		</div>
	</div>
</body>
</html>