<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理</title>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/jquery.mCustomScrollbar.css" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery.mCustomScrollbar.concat.min.js"></script>
<style>body{padding: 0}</style>
</head>
<body>
<div class="BodyLeft"> 

<div id="firstpane" class="menu_list">

    <p class="menu_head single"><i class="m1"></i>网站管理</p>
    <div style="display:none" class="menu_body" >
        <a href="<?php echo U('Config/index');?>" target="main"><i></i>网站设置</a>
        <a href="<?php echo U('List/index');?>" target="main"><i></i>导航管理</a>
        <a href="<?php echo U('Feedback/index');?>" target="main"><i></i>留言管理</a>
        <!-- <a href="<?php echo U('inquiry/index');?>" target="main"><i></i>订单管理</a> -->
        <a href="<?php echo U('Config/water');?>" target="main"><i></i>水印设置</a>
        <a href="<?php echo U('Deltemp/index');?>" target="main"><i></i>清除缓存</a>
    </div>
    
    <p class="menu_head"><i class="m2"></i>产品管理</p>
    <div style="display:none" class="menu_body" >
        <a href="<?php echo U('Product/add');?>" target="main"><i></i>添加产品</a>
        <a href="<?php echo U('Product/index');?>" target="main"><i></i>管理产品</a>
    </div>

    <p class="menu_head single"><i class="m3"></i>新闻管理</p>
    <div style="display:none" class="menu_body" >
        <a href="<?php echo U('New/add');?>" target="main"><i></i>添加新闻</a>
        <a href="<?php echo U('New/index');?>" target="main"><i></i>管理新闻</a>
    </div>

    <p class="menu_head"><i class="m4"></i>广告管理</p>
    <div style="display:none" class="menu_body" >
       <a href="<?php echo U('Flash/index');?>" target="main"><i></i>管理banner</a>
       <a href="<?php echo U('Mflash/index');?>" target="main"><i></i>管理手机banner</a>
       <a href="<?php echo U('Ad/index');?>" target="main"><i></i>管理广告</a>
    </div>

    <p class="menu_head single"><i class="m5"></i>图片管理</p>
    <div style="display:none" class="menu_body" >
        <a href="<?php echo U('Photo/add');?>" target="main"><i></i>添加图片</a>
		<a href="<?php echo U('Photo/index');?>" target="main"><i></i>管理图片</a>
    </div>  

    <p class="menu_head"><i class="m6"></i>下载管理</p>
    <div style="display:none" class="menu_body" >
		<a href="<?php echo U('Download/add');?>" target="main"><i></i>添加下载</a>
        <a href="<?php echo U('Download/index');?>" target="main"><i></i>管理下载</a>
    </div>

    <p class="menu_head single"><i class="m7"></i>友情链接</p>
    <div style="display:none" class="menu_body" >
        <a href="<?php echo U('Link/add');?>" target="main"><i></i>添加链接</a>
        <a href="<?php echo U('Link/index');?>" target="main"><i></i>链接列表</a>
    </div>  

    <p class="menu_head"><i class="m8"></i>SEO优化</p>
    <div style="display:none" class="menu_body" >
      	<a href="<?php echo U('Config/setstatic');?>" target="main"><i></i>伪静态设置</a>
        <a href="__ROOT__/index.php?m=Sitemap&a=index" target="main"><i></i>生成站点地图</a>
        <a href="__ROOT__/index.php?m=Sitemap&a=baidu" target="main"><i></i>百度Sitemap</a>
        <a href="__ROOT__/index.php?m=Sitemap&a=google" target="main"><i></i>谷歌Sitemap</a>
        <a href="<?php echo U('Tags/index');?>" target="main"><i></i>Tag标签优化</a>
        <a href="<?php echo U('Inside/index');?>" target="main"><i></i>内链优化管理</a>
    </div> 
    
    <p class="menu_head single"><i class="m9"></i>用户管理</p>
    <div style="display:none" class="menu_body" >
        <a href="<?php echo U('User/add');?>" target="main"><i></i>添加用户</a>
		<a href="<?php echo U('User/index');?>" target="main"><i></i>用户管理</a>
    </div>

</div>

</div>
<script>
	(function($){
		$(window).load(function(){
			$(".BodyLeft").mCustomScrollbar({
				autoHideScrollbar:true,
				scrollButtons:{
					enable:true
				},
				theme:"dark",
				advanced:{ updateOnContentResize: true }
			}).find(".mCSB_container").css("padding-bottom","10px");

		});
	})(jQuery);
</script>

<script type=text/javascript>
$(document).ready(function(){
	$("#firstpane p.menu_head").click(function(){
		$(this).addClass("current").next("div.menu_body").slideToggle(300).siblings("div.menu_body").slideUp("slow");
		$(this).siblings().removeClass("current");
        var pwin = window.parent, ldoc = pwin.document.getElementsByName("top")[0].contentWindow.document  ;
        $(ldoc).find(".current").toggleClass("current");
	});
	$("#secondpane p.menu_head").mouseover(function(){
		$(this).addClass("current").next("div.menu_body").slideDown(500).siblings("div.menu_body").slideUp("slow");
		$(this).siblings().removeClass("current");
	});	
});
</script>
</body>
</html>