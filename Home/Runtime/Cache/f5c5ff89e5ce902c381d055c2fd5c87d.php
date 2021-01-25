<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo (C("seo_title")); ?></title>
<meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
<meta name="description" content="<?php echo (C("seo_description")); ?>" />
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

</head>
<body class="bg">
<div class="header">
    <div class="w">
        <div class="logo"><a href="__ROOT__/"><img src="__ROOT__/Uploads/<?php echo (C("m_logo")); ?>" alt="<?php echo (C("web_name")); ?>"/></a></div>
    </div>
</div>
<?php echo W('Sidenav');?>

<div class="container">
    <div class="banner"><?php echo W('Mflash');?></div>
<!-- 
    <div class="pdt_index">
        <div class="t"><a href="__ROOT__/products.html">更多&gt;</a>产品中心</div>
        <div class="list clearfix"><?php echo W('List',array('table'=>'Product','num'=>4,'bid'=>1,'id'=>1));?></div>
    </div>

    <div class="photo_index">
        <div class="t"><a href="__ROOT__/cases.html">更多&gt;</a>案例现场</div>
        <div class="list clearfix"><?php echo W('List',array('table'=>'Photo','num'=>6,'bid'=>1,'id'=>131));?></div>
    </div>


    <div class="ad_box"><?php echo W('Ad',array('id'=>'27'));?></div>
 -->



    <div class="about_index">
        <div class="t"><a href="__ROOT__/list-7-82">更多&gt;</a>走进中互</div>
        <div class="info">
            <img src="__ROOT__/Public/images/about.jpg" alt="">
            <!-- <?php echo W('Ad',array('id'=>'23'));?> -->
            <!-- 中互交通运输有限公司（以下简称中互交通），2019年7月经国家正式批设，注册资金1亿元，坐落于河北省石家庄市高新技术开发区太行南大街197号, 是面向全国的综合性交通服务企业。 -->
            中互交通运输有限公司（以下简称中互交通），在国家政策指引下，依照国家对运输行业高要求，迎合市场发展，立足创新，于2019年7月经国家正式批设，注册资金1亿元，坐落于河北省石家庄市高新技术开发区太行南大街197号,是面向全国的综合性交通服务企业。
</p><p>中互交通致力于通过大数据及高科技手段为交通运输企业保驾护航，公司经营范围包括:道路货物运输服务，汽车维修；展览展示服务；车辆年检代理服务；汽车及配件、轮胎的销售；交通安全统筹服务等。其中道路货物运输服务、汽车配件销售、车辆科技安防服务、交通安全统筹服务为我公司主营业务。
</p><p>公司成立以来平稳健康发展，在做好京津冀地区业务的同时，业务范围逐步覆盖全国……
</p>                
        </div>
    </div>

    <div class="news_index">
        <div class="t"><a href="__ROOT__/news.html">更多&gt;</a>新闻资讯</div>
         <div class="info"><?php echo W('List',array('table'=>'New','num'=>5,'bid'=>134,'id'=>134));?></div>
    </div>


    
</div>

<div class="m_footer">
	<a href="__ROOT__/" class="home_ico"><span><img src="../Public/images/home_ico.png" alt=""></span><p>首页</p></a>
    <a href="__ROOT__/News.html" class="pdt_ico"><span><img src="../Public/images/pdt_ico.png" alt=""></span><p>新闻</p></a>
	<a href="tel:<?php echo (C("web_phone")); ?>" class="tel_ico"><span><img src="../Public/images/tel_ico.png" alt=""></span><p>电话</p></a>
	<a href="__ROOT__/feedback.html" class="fb_ico"><span><img src="../Public/images/fb_ico.png" alt=""></span><p>留言</p></a>
</div>

<script>
    $.ajaxSetup({
        timeout: 300000
    });

$(function(){
// banner    
    $('.banner').flexslider({
        directionNav: true,
        pauseOnAction: false
    });
});

</script>

</body>
</html>