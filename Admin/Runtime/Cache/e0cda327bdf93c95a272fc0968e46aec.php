<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
	<title>后台管理</title>
	<style>body{padding: 0}</style>
	<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
</head>
<body>
	<div class="Head">
		<div class="TopList">
			<ul>
				<li>
					<a href="__ROOT__/" target="_blank"> <i class="home_ico"></i>
						前台首页
					</a>
				</li>
				<li>
					<a href="<?php echo U('Deltemp/index');?>
						" target="main"> <i class="clear_ico"></i>
						清除缓存
					</a>
				</li>
				<li>
					<a href="<?php echo U('Index/loginOut');?>
						" target="_top">
						<i class="loginout_ico"></i>
						退出
					</a>
				</li>
				<li>
					<i class="user"></i>
					<?php echo (session('uname')); ?></li>
				</ul>
			</div>

			<div class="logo"><img src="../Public/images/logo.jpg" style="width: 100%;" alt="" /></div>
			<div class="head_nav">
				<a href="<?php echo U('Index/main');?>" target="main" class="current">控制中心</a>
        		<a href="<?php echo U('Config/index');?>" target="main"><i></i>网站设置</a>
				<a href="<?php echo U('List/index');?>" target="main">导航管理</a>
			</div>
		</div>

<script type=text/javascript>
$(document).ready(function(){
	$(".head_nav a").click(function(){	
		var pwin = window.parent, ldoc = pwin.document.getElementsByName("left")[0].contentWindow.document	;
		$(ldoc).find(".current").toggleClass("current");
		$(this).addClass("current");
		$(this).siblings().removeClass("current");
	});
});
</script>
</body>
</html>