<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
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
    .mains{
        width: 100%; 
        margin:20px auto 50px; 
        height: auto; 
        min-height: 400px; 
        overflow: hidden;
    }
    .contact {
        width: 100%;
        height: 100%;
    }
    .lianxi {
        text-align: center;
        font-size:18px;
        margin:20px 0;
    }
    #contains {
        width: 80%;
        height:400px;
        margin: 0 auto;
    }
</style>
</head>
<body>
<div class="header">
    <div class="w">
        <div class="logo"><a href="__ROOT__/"><img src="__ROOT__/Uploads/<?php echo (C("m_logo")); ?>" alt="<?php echo (C("web_name")); ?>"/></a></div>
    </div>
</div>
<?php echo W('Sidenav');?>

<div class="container">
    <div class="path_title"><span>联系我们</span></div>
    <div class="mains">  
        <div class="contact">
            <div class="lianxi">联系我们</div>
            <div style="padding:20px">
                <p>
                    中互交通运输有限公司
                </p>
                <p>
                    地址：河北省石家庄市裕华区太行南大街197号智同药谷A座10楼
                </p>
                <p>
                    全国统一服务热线：400-681-8811
                </p>
            </div>
            <div id="contains"></div>
        </div>
    </div>
</div>
<div class="m_footer">
	<a href="__ROOT__/" class="home_ico"><span><img src="../Public/images/home_ico.png" alt=""></span><p>首页</p></a>
    <a href="__ROOT__/News.html" class="pdt_ico"><span><img src="../Public/images/pdt_ico.png" alt=""></span><p>新闻</p></a>
	<a href="tel:<?php echo (C("web_phone")); ?>" class="tel_ico"><span><img src="../Public/images/tel_ico.png" alt=""></span><p>电话</p></a>
	<a href="__ROOT__/feedback.html" class="fb_ico"><span><img src="../Public/images/fb_ico.png" alt=""></span><p>留言</p></a>
</div>


</body>
</html>
<script type="text/javascript" src="https://webapi.amap.com/maps?v=1.4.15&key=9140fda03758739a639887872cfcbcb8"></script> 
<script type="text/javascript">
	var map = new AMap.Map("contains", {
        center: [114.6360838,38.0459171],
        zoom: 14,
        viewMode: '3D',
    });
    console.log(map)
    //构建自定义信息窗体
    var infoWindow = new AMap.InfoWindow({
        anchor: 'bottom-center',
        autoMove: true,
        content: '中互交通运输有限公司<br>地址：河北省石家庄市裕华区太行南大街197号智同药谷A座10楼',
    });

    infoWindow.open(map,[114.64381526623957	,38.04056938975235])
    
    function setAnchor(){
        var anchor = this.id;
        infoWindow.setAnchor(anchor)
    }
</script>