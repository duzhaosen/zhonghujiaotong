<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($list["title"]); ?>-<?php echo (C("seo_title")); ?></title>
<meta name="keywords" content="<?php echo ($list["keywords"]); ?>" />
<meta name="description" content="<?php echo ($list["description"]); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="default" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<link rel="stylesheet" type="text/css" href="../Public/css/style.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="../Public/js/default.js"></script>
<script type="text/javascript" src="../Public/js/flash.js"></script>
<script type="text/javascript" src="../Public/js/side_menu.js"></script>
<script type="text/javascript" src="../Public/js/share.js"></script>
<script type="text/javascript" src="../Public/js/product_slider.js"></script>
<script type="text/javascript" src="../Public/js/lightbox.js"></script>
<script type="text/javascript" src="../Public/js/owl.carousel.min.js"></script>

<script language="javascript">var catid=<?php echo ($getid); ?>,pid=<?php echo ($list["pid"]); ?>;</script>
</head>
<body class="bg">
<div class="header">
    <div class="w">
        <div class="logo"><a href="__ROOT__/"><img src="__ROOT__/Uploads/<?php echo (C("m_logo")); ?>" alt="<?php echo (C("web_name")); ?>"/></a></div>
    </div>
</div>
<?php echo W('Sidenav');?>

<div class="container">

<div class="main">      
    <div class="path_title"><span><?php echo ($list["name"]); ?></span></div>
    <ul class="news_list">
      <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
        <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>$table));?>" title="<?php echo ($vo["title"]); ?>">
          <span class="image"><img name="picautozoom" src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" width="100" onerror="this.src='../Public/images/error.jpg'" alt="<?php echo ($vo["name"]); ?>"/></span>
          <h4><?php echo (mb_substr($vo["title"],0,40,'utf-8')); ?></h4>
          <p class="desc"><?php echo (mb_substr($vo["description"],0,28,'utf-8')); ?>...</p>
          <small class="list_time"><?php echo (date('Y-m-d',$vo["time"])); ?></small>
        </a>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>        
    </ul>
    
    <div class="page">
      <?php echo ($page); ?>
    </div>
      
</div>
<!-- end of main -->
</div>
<div class="m_footer">
	<a href="__ROOT__/" class="home_ico"><span><img src="../Public/images/home_ico.png" alt=""></span><p>首页</p></a>
    <a href="__ROOT__/News.html" class="pdt_ico"><span><img src="../Public/images/pdt_ico.png" alt=""></span><p>新闻</p></a>
	<a href="tel:<?php echo (C("web_phone")); ?>" class="tel_ico"><span><img src="../Public/images/tel_ico.png" alt=""></span><p>电话</p></a>
	<a href="__ROOT__/feedback.html" class="fb_ico"><span><img src="../Public/images/fb_ico.png" alt=""></span><p>留言</p></a>
</div>

</body>
</html>