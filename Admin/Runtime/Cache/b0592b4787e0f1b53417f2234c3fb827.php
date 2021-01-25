<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("web_name")); ?>-中互网站管理系统</title>
<style type="text/css">
*{margin:0px; padding:0px;color: #fff; font-family: "microsoft yahei"; font-size: 14px;text-shadow: 0px 0px 7px rgba(0, 0, 0, 0.3);}
::-webkit-input-placeholder { color:#b5e5ed;}
:-moz-placeholder { color:#b5e5ed;}
::-moz-placeholder { color:#b5e5ed;}
:-ms-input-placeholder {color:#b5e5ed;}
html{width: 100%; height: 100%; filter:alpha(opacity=100 finishopacity=50 style=1 startx=0,starty=0,finishx=0,finishy=150) progid:DXImageTransform.Microsoft.gradient(startcolorstr=#02a7d6,endcolorstr=#21b5b3,gradientType=0);
    -ms-filter:alpha(opacity=100 finishopacity=50 style=1 startx=0,starty=0,finishx=0,finishy=150) progid:DXImageTransform.Microsoft.gradient(startcolorstr=#02a7d6,endcolorstr=#21b5b3,gradientType=0);/*IE8*/    
    background:#02a7d6; /* 一些不支持背景渐变的浏览器 */  
    background:-moz-linear-gradient(right, #02a7d6, #21b5b3);  
    background:-webkit-gradient(linear, left top, right bottom, from(#02a7d6), to(#21b5b3));  
    background:-o-linear-gradient(right, #02a7d6, #21b5b3); }
   body{width: 100%; height: 100%} 
.earth{width: 1064px; height: 1064px;position: fixed;left: 50%; margin-left: -532px; top: -664px; background:url(../Public/images/earth.png) no-repeat center top;-webkit-animation:earth 300s linear infinite;}
@-webkit-keyframes earth {
  from {-webkit-transform:rotate(0deg);}
  to {-webkit-transform:rotate(360deg);}
}
.login_box{width: 100%; height: 100%;background:url(../Public/images/login_icon.png) repeat center center; position: relative;}
.logo {font-size: 18px;text-align: center;padding-bottom: 20px;}
.logo span{display: block;width: 36px; height: 36px; margin: 0 auto;padding: 15px; background: #3bb7ca;border-radius: 100%;-webkit-border-radius: 100%;-moz-border-radius: 100%;-o-border-radius: 100%;overflow: hidden;margin-bottom: 15px;}

sup{font-size: 12px;}
.login{width: 300px; height: 388px;padding: 30px 65px; overflow: hidden;background: #4ac1d7;background: rgba(255,255,255,.25);position: absolute;z-index: 1;left: 50%;margin-left: -215px;top: 50%; margin-top: -224px;}

.login .inputbox{margin-bottom: 25px;overflow: hidden;}
.login input{width: 100%; height: 45px; line-height: 45px;outline: none;border-radius: 23px;-webkit-border-radius: 23px;-moz-border-radius: 23px;-o-border-radius: 23px;background: #3ebbce;background: rgba(0, 161, 181, 0.2);border: 1px #83d4e0 solid;text-indent: 20px;}
.login .inputbox.code input{width: 226px;float: left;}
.login .inputbox.code img{float: left;margin: 12px 0 0 20px;}
.login_submit .btn{width: 100%; height: 45px; line-height: 45px;border:none;border-radius: 23px;-webkit-border-radius: 23px;-moz-border-radius: 23px;-o-border-radius: 23px;font-size: 18px;outline: none; cursor: pointer; filter:alpha(opacity=100 finishopacity=50 style=1 startx=0,starty=0,finishx=0,finishy=150) progid:DXImageTransform.Microsoft.gradient(startcolorstr=#41d6f1,endcolorstr=#3fd8de,gradientType=0);
    -ms-filter:alpha(opacity=100 finishopacity=50 style=1 startx=0,starty=0,finishx=0,finishy=150) progid:DXImageTransform.Microsoft.gradient(startcolorstr=#41d6f1,endcolorstr=#3fd8de,gradientType=0);/*IE8*/    
    background:#41d6f1; /* 一些不支持背景渐变的浏览器 */  
    background:-moz-linear-gradient(right, #41d6f1, #3fd8de);  
    background:-webkit-gradient(linear, left top, right bottom, from(#41d6f1), to(#3fd8de));  
    background:-o-linear-gradient(right, #41d6f1, #3fd8de);}
.copyright{position: absolute;width: 100%;text-align: center;font-size: 12px;bottom: 30px;color: #b4e9f1;}
.copyright a{text-decoration: none;font-size: 12px;color: #b4e9f1;}
</style>
</head>
<body>
<div class="earth"></div>
<div class="login_box" id="login_box">
	<div class="login">
        <div class="logo"><span><img src="../Public/images/login_logo.png"/></span>中互网站管理系统</div>
        <form name="myform" method="post" action="<?php echo U('Login/checkLogin');?>">

            <div class="inputbox">
                <input class="text_bg" type="text" placeholder="用户名" name="username" autocomplete="off">
            </div>
            <div class="inputbox">
                <input class="text_bg" type="password" placeholder="密码" name="password">
            </div>
            <div class="inputbox code">
                <input type="text" class="text_bg code_bg"  placeholder="验证码" name="code" maxlength="4" autocomplete="off"> 
                <img src="<?php echo U('Login/verify');?>" onclick='this.src=this.src+"?"+Math.random()'>
            </div>

            <div class="login_submit">
                <button class="btn" onClick="javascript:fsubmit(document.myform);return false;">登录</button>
            </div>

        </form>    
    </div>
    <div class="copyright">
        <?php echo (C("web_copyright")); ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo (C("web_icp")); ?></a>
    </div>
</div>

<script language="javascript"> 
    function fsubmit(obj){ 
    obj.submit(); 
    } 
</script> 
<script type="text/javascript" color="255,255,255" opacity="0.7" count="80" src="../Public/js/canvas-nest.min.js"></script>
</body>
</html>