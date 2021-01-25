<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系方式-<?php echo (C("seo_title")); ?></title>
<meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
<meta name="description" content="<?php echo (C("seo_description")); ?>" />
<script language="javascript">var catid="",pid="";</script>
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

<style>
  .page_banner a{cursor:context-menu;}
</style>
<SCRIPT language=javaScript>
function CheckJob()
{
  if (document.myform.title.value.length==""){
    alert ("留言标题不能为空！");
    document.myform.title.focus();
    return false;
  }
  if (document.myform.name.value.length==""){
    alert ("姓名不能为空！");
    document.myform.name.focus();
    return false;
  }
  if (document.myform.tel.value.length==""){
    alert ("电话不能为空！");
    document.myform.tel.focus();
    return false;
  }
 }

 $(function(){
  $(".page_banner a").attr("href","javascript:;");
 });
</SCRIPT>
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
      <div class="path_title"><span>联系方式</span></div>
      <div class="content feedback_cont">
        <div><?php echo W('About',array('id'=>87,'len'=>99999999999));?></div>
        <p class="f_tip">请您填写以下信息，我们将尽快与您取得联络。</p>
        <form id="myform" name="myform" method="post" action="__ROOT__/?m=Feedback&a=check" onSubmit="return CheckJob()">
          <ul class="feedback_list">
            <li><span>留言标题：</span><input name="title" type="text" placeholder="请输入标题" class="textwidth"/></li>
            <li><span>您的姓名：</span><input name="name" type="text" placeholder="请输入姓名" class="textwidth"/></li>
            <li><span>联系电话：</span><input name="tel" type="text" placeholder="请输入电话" class="textwidth"/></li>
            <li><span>电子邮箱：</span><input name="email" type="text" placeholder="请输入邮箱" class="textwidth"/></li>
            <li class="hide"><span>联系地址：</span><input name="add" type="text" placeholder="请输入联系地址" class="textwidth"/></li>
            <li><span>留言内容：</span><textarea name="contents" placeholder="请输入留言内容" class="areawidth"></textarea></li>
            <li class="code"><span>验证码：</span><input name="code" maxlength="4"><img class="codeimg" src="<?php echo U('Common/verify');?>" onclick='this.src=this.src+"?"+Math.random()'/></li>
          </ul>
          <input type="submit" name="button" value="提交留言" class="submit_btn"/>
        </form>        
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