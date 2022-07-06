<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>PHP程序设计考试</title>
	<link href="/dyk/Public/css/home.css" rel="stylesheet" />
	<link href="/dyk/Public/css/index.css" rel="stylesheet" />
	<script src="/dyk/Public/js/jquery.min.js"></script>
</head>
<body>
	<div id="top">
		<div class="top_nav">
<!--		<ul><li>收藏本站</li><li>关注本站</li></ul>-->
		<ul class="right">
			<?php if(isset($mid)): ?><li><?php echo ($mname); ?>，欢迎来到PHP测试！[<a href="/dyk/Home/User/logout">退出</a>]<li>
			<?php else: ?>
			<li>您好，欢迎来到我的PHP测试！[<a href="/dyk/Home/User/login">登录</a>][<a href="/dyk/Home/User/register">免费注册</a>]</li><?php endif; ?>
			<li class="line">|</li><li>我的订单</li>
			<li class="line">|</li><li><a href="/dyk/Home/User/index">会员中心</a></li>
			<li class="line">|</li><li><a href="/dyk/Home/Cart/index">我的购物车</a></li>
			<li class="line">|</li><li><a href="/dyk/Home/Cart/index">购物车结算</a></li>
		</ul>
		</div>
	</div>
	<!-- logo-->
	<h1>
			<a href="/dyk/index.php"><img src="/dyk/Public/image/logo11.png" alt=""></a>
		</h1>

	<!--导航-->
	<div class="nav">
<!--		<div id="slide">-->
<!--			<?php if(is_array($cate)): $i = 0; $__LIST__ = array_slice($cate,0,9,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><div class="cate">-->
<!--				<div class="cate1 left"><a href="/dyk/Home/Index/find/cid/<?php echo ($v1["cid"]); ?>"><?php echo ($v1["cname"]); ?></a></div>-->
<!--				<div class="subitem" style="display:none;">-->
<!--					<?php if(isset($v1["child"])): if(is_array($v1["child"])): $i = 0; $__LIST__ = array_slice($v1["child"],0,7,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v2): $mod = ($i % 2 );++$i;?>-->
<!--						<dl>-->
<!--							<dt><a href="/dyk/Home/Index/find/cid/<?php echo ($v2["cid"]); ?>"><?php echo ($v2["cname"]); ?></a></dt>-->
<!--							<dd>-->
<!--								<?php if(isset($v2["child"])): if(is_array($v2["child"])): $i = 0; $__LIST__ = array_slice($v2["child"],0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v3): $mod = ($i % 2 );++$i;?>-->
<!--									|<a href="/dyk/Home/Index/find/cid/<?php echo ($v3["cid"]); ?>"><?php echo ($v3["cname"]); ?></a>-->
<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--<?php endif; ?>-->
<!--							</dd>-->
<!--						</dl>-->
<!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--<?php endif; ?>-->
<!--				</div>-->
<!--			</div><?php endforeach; endif; else: echo "" ;endif; ?>-->
<!--			<div class="clear"></div>-->
<!--		</div>-->
		<ul>
			<li><a href="/dyk/index.php">首页</a></li>
			<li><a href="/dyk/Home/Index/goods">课程</a></li>
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
<!--			<a class="left" href="/dyk/"><div id="logo"></div></a>-->
<!--			<div id="search" class="left">-->
<!--				<input type="text" class="left" />-->
<!--				<input class="search_btn" type="button" value="搜索" />-->
<!--				<p id="search_hot">热门搜索：PHP培训　大学教材　智能手机　平板电脑</p>-->
<!--			</div>-->
<!--			<div id="info" class="left">-->
<!--				<input type="button" value="会员中心" onclick="location.href='/dyk/Home/User/index'" />-->
<!--				<input type="button" value="去购物车结算" onclick="location.href='/dyk/Home/Cart/index'" />-->
<!--			</div>-->
<!--		</div>-->

		<div class="clear"></div>
<!--		<div id="nav">-->
<!--			<ul><li class="category"><a href="#">全部商品分类</a></li><li class="curr"><a href="/dyk/">首页</a></li>-->
<!--				<li><a href="#">PHP</a></li><li><a href="#">Java</a></li><li><a href="#">安卓</a></li>-->
<!--				<li><a href="#">.Net</a></li><li><a href="#">C/C++</a></li><li><a href="#">IOS</a></li>-->
<!--			</ul>-->
<!--		</div>-->

<!--		<div id="service">-->
<!--			<ul><li>购物指南</li><li>配送方式</li><li>支付方式</li>-->
<!--				<li>售后服务</li><li>特色服务</li><li>网络服务</li>-->
<!--			</ul>-->
<!--			<div class="clear"></div>-->
<!--		</div>-->
<!--		<div id="footer">传智商城·本项目仅供学习使用</div>-->

<!--	</div>-->
	<div class="goodsinfo">
	<div class="now_cat">当前位置：<?php if(is_array($pcats)): foreach($pcats as $key=>$v): ?>&nbsp;<a 
		href="/dyk/Home/Index/find/cid/<?php echo ($v["cid"]); ?>"><?php echo ($v["cname"]); ?></a>&nbsp;&gt;<?php endforeach; endif; ?>&nbsp;<?php echo ($goods["gname"]); ?></div>
	<div class="pic left"><?php if(empty($goods["thumb"])): ?><img src="/dyk/Public/image/preview2.jpg" /><?php else: ?>
		<img src="/dyk/Public/uploads/<?php echo ($goods["thumb"]); ?>" /><?php endif; ?></div>
	<div class="info left"><h1><?php echo ($goods["gname"]); ?></h1><table>
		<tr><th>售 价：</th><td><span>￥<?php echo ($goods["price"]); ?></span></td></tr>
		<tr><th>商品编号：</th><td><?php echo ($goods["identifier"]); ?></td></tr>
		<tr><th>累计销量：</th><td>1000</td></tr>
		<tr><th>评 价：</th><td>1000</td></tr>
		<tr><th>配送至：</th><td>北京（免运费）</td></tr>
		<tr><th>购买数量：</th><td>
			<input type="button" value="-" class="cnt-btn" />
			<input type="text" value="1" id="num" class="num-btn" />
			<input type="button" value="+" class="cnt-btn" />（库存：<?php echo ($goods["stock"]); ?>）</td></tr>
		<tr><td colspan="2" class="button"><a href="#">立即购买</a><a href="#" onclick="addCart()">加入购物车</a></td></tr>
		</table></div><div class="clear"></div>
	<div class="slide left">相关商品</div>
	<div class="desc left">
		<div class="attr"><p>商品属性</p><ul>
			<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><li><?php echo ($v["aname"]); ?>：<?php echo ($v["avalue"]); ?></li><?php endforeach; endif; ?>
		<div class="clear"></div></ul></div>
	<?php echo (nl2br($goods["description"])); ?></div>
	<div class="clear"></div>
</div>
<script>
	//购买数量加减
	$(".cnt-btn").click(function(){
		var num = parseInt($("#num").val());
		if ($(this).val() === '-') {
			if ( num=== 1) return;
			$("#num").val(num-1);
		}else if ($(this).val() === '+') {
			if (num === <?php echo ($goods["stock"]); ?>) return;
			$("#num").val(num+1);
		}
	});
	//自动纠正购买数量
	$("#num").keyup(function(){
		var num = parseInt($(this).val());
		if(num<1){ 
			$(this).val(1);
		}else if(num > <?php echo ($goods["stock"]); ?>){
			$(this).val(<?php echo ($goods["stock"]); ?>);
		}
	});
	//添加购物车
	function addCart(){
		var num = $("#num").val();
		window.location.href = '/dyk/Home/Cart/add/gid/<?php echo ($gid); ?>/num/'+num;
	}
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
<!--<script>-->
<!--	var a=document.getElementById("slide");-->
<!--	a.style="width:207px;padding:6px 0;position:absolute;"-->
<!--</script>-->