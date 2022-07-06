<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>阿康商城后台</title>
	<link href="/dyk/Public/css/admin.css" rel="stylesheet" />
	<script src="/dyk/Public/js/jquery.min.js"></script>
</head>
<body>
<div id="top">
	<h1 class="left">阿康商城 后台管理系统</h1>
	<ul class="right">
		<li>欢迎您：<?php echo (session('admin_name')); ?></li>
		<li>|</li><li><a href="/dyk/" target="_blank">前台首页</a></li>
		<li>|</li><li><a href="/dyk/Admin/Login/logout">退出登录</a></li>
	</ul>
</div>
<div id="main">
	<div id="menu" class="left">
		<ul><li><a href="/dyk/Admin/Index/index" id="Index_index">后台首页</a></li>
			<li><a href="/dyk/Admin/Goods/add" id="Goods_add">商品添加</a></li>
			<li><a href="/dyk/Admin/Goods/index" id="Goods_index">商品列表</a></li>
			<li><a href="/dyk/Admin/Attribute/index" id="Attribute_index">商品属性</a></li>
			<li><a href="/dyk/Admin/Category/index" id="Category_index">商品分类</a></li>
			<li><a href="/dyk/Admin/Recycle/index" id="Recycle_index">回收站</a></li>
			<li><a href="/dyk/Admin/Member/index" id="Member_index">会员管理</a></li>
		</ul>
	</div>
	<div id="content">
		<div class="item"><div class="title">商品属性列表</div>
<div class="title-btn left"><a href="/dyk/Admin/Attribute/add/cid/<?php echo ($cid); ?>">添加属性</a></div>
<div class="data-list clear">请选择商品分类：
	<select name="cid">
		<?php if(empty($category)): ?><option value="-1">未选择</option><?php endif; ?>
		<?php if(is_array($category)): foreach($category as $key=>$v): ?><option value="<?php echo ($v["cid"]); ?>" <?php if(($v["cid"]) == $cid): ?>selected<?php endif; ?> ><?php echo str_repeat('--',$v['deep']).$v['cname'];?>
</option><?php endforeach; endif; ?>
	</select>
	<table border="1">
		<tr><th>属性名</th><th>属性默认值</th><th width="120">操作</th></tr>
		<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><tr><td><?php echo ($v["aname"]); ?></td><td><?php echo ($v["a_def_val"]); ?></td><td class="center">
<a  href="/dyk/Admin/Attribute/revise/aid/<?php echo ($v["aid"]); ?>/cid/<?php echo ($v["cid"]); ?>">修改</a> 
<a  href="/dyk/Admin/Attribute/del/aid/<?php echo ($v["aid"]); ?>/cid/<?php echo ($v["cid"]); ?>">删除</a></td></tr><?php endforeach; endif; ?>
	</table>
</div>
<script>
	$("select").change(function(){
		window.location.href = "/dyk/Admin/Attribute/index/cid/" + $(this).val();
	});
	$("tr:odd").addClass("odd");
</script>
</div>
	</div>
</div>
<script>
	$("#<?php echo (CONTROLLER_NAME); ?>_<?php echo (ACTION_NAME); ?>").addClass("curr");
</script>
</body>
</html>