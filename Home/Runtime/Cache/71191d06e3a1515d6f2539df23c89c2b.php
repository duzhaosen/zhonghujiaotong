<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("seo_title")); ?></title>
<meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
<meta name="description" content="<?php echo (C("seo_description")); ?>" />
<link rel="stylesheet" type="text/css" href="../Public/css/style.css" />
<link rel="stylesheet" type="text/css" href="../Public/css/jquery.mCustomScrollbar.css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../Public/js/default.js"></script>
<script type="text/javascript" src="../Public/js/flash.js"></script>
<script type="text/javascript" src="../Public/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="../Public/js/jquery.vticker.js"></script>
<script type="text/javascript" src="../Public/js/product_slider.js"></script>
<script type="text/javascript" src="../Public/js/lightbox.js"></script>
<script type="text/javascript" src="../Public/js/owl.carousel.min.js"></script>


<style>
    * {
	    scrollbar-width: none;
        -ms-overflow-style: none;
    }
    .we {
        width: 100%;
        height:600px;
        display: flex;
        justify-content: space-between;
    }
    .wel {
        display: flex;
        width: 45%;
        height: 100%;
        background:url(__ROOT__/Public/images/about.jpg) 0 0 / 100% 100% no-repeat;
    }
    .wer {
        display: flex;
        width: 55%;
        height: 100%;
        background:rgb(155,112,69);
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .wenei {
        width:50%;
        height:60%;
    }
    .wenei .wet {
        font-size:40px;
        letter-spacing: 5px;
        color:#fff;
        font-weight:bold;
    }
    .wenei .neirong {
        font-size:16px;
        color:#fff;
        margin-bottom:20px;
        text-indent: 2em;
    }
    .btn {
        outline: none;
        width:100px;
        height:30px;
        text-align: center;
        color:#fff;
        line-height: 30px;
        cursor: pointer;
        border:1px solid #fff
    }
    .btn:hover {
        background:skyblue;
    }

    /* 业务介绍 */

    .ssome {
        width: 100%;
        height: 100%;
        display:flex;
        flex-wrap: wrap;
    }
    .ssomes {
        display:flex;
        flex-direction: column;
        width:calc(100% / 3 - 20px);
        margin:10px;
        height: 300px;
        justify-content: center;
        align-items: center;
    }
    .ssome .ssomes .ss {
        display: flex;
        justify-content: center;
        width: 100%;
        height:100%;
        align-items: center;
        cursor: pointer;
    }
    .ssome .ssomes .ss:hover {
        opacity: .8;
    }
    .ss .nav_a {
        font-size:30px;
        -webkit-text-stroke: 0.5px #fff;
        color:#000;
    }
    /* 新闻列表 */

    .new {
        height:100%;
        width: 100%;
        display: flex;
        justify-content: center;
        margin:20px 0;
    }

    .new .nleft {
        width: 50%;
        margin-right:10px;
    }
    .new .nright {
        background:url(__ROOT__/Public/images/news.png) 0 0 / 100% 100% no-repeat;
        width: 50%;
        height:500px;
    }
    .new .nleft .blocks {
        padding:10px;
        cursor:pointer;
        border-bottom:.5px dashed #dbd4cd;
        display: flex;
        justify-content: space-between;
    } 
    .l {
        width: 20%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        font-size:18px;
        color:rgb(155,112,69);
        font-weight: bold;
    }
    .l div:nth-child(2){
        font-weight: normal;
        font-size:16px;
    }
    .r {
        width: 80%;
    }
    .new .nleft .blocks .r .title {
        font-size:16px;
    }
    .new .nleft .blocks .r .des {
        color:#999;
        display: block;
        display: -webkit-box;
        word-wrap:break-word;
        margin: 0 auto;
        line-height: 1.72;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }
    .new .nleft .blocks:hover {
        background:#f8f9fa
    }
    /* 车辆统筹 */
    .car {
        width: 100%;
        height:100%;
        display: flex;
        flex-direction: column;
    }
    .carlist {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin:10px 0;
        height:100%;
    }
    .carleft {
        width: 50%;
        height:100%;
    }
    .carleft .neirong {
        padding:10px;
    }
    .carleft .neirong .title {
        text-align: center;
        font-size:40px;
        font-weight:bold;
    }
    .carleft img {
        width: 100%;
        height: 100%;
    }
    .carright {
        width: calc(50% - 20px);
        margin-left:20px;
        height:100%;
        padding:5px;
    }
    .carright .neirong {
        padding:10px;
        display: flex;
        flex-direction: column;
    }
    .carright .neirong .des {
        width:80%;
        height: 370px;
        overflow: auto;
        margin: 0 auto;
        /* display: block;
        display: -webkit-box;
        word-wrap:break-word;
        margin: 0 auto;
        line-height: 1.72;
        -webkit-line-clamp: 13;
        -webkit-box-orient: vertical; */
        /* overflow: hidden; */
        text-overflow: ellipsis;
    }
    .carright .neirong .des::-webkit-scrollbar {
	    display: none;
    }
    .carleft .neirong .des::-webkit-scrollbar {
	    display: none;
    }
    .neizczc {
        display:flex;
        width: 100%;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        font-size:20px;
        height: 200px;
    }
    .neizczc a {
        text-decoration: underline;
        margin:10px 0;
        font-weight: bold;
    }
    .carleft .neirong .des {
        width:80%;
        height: 370px;
        overflow: auto;
        margin: 0 auto;
        /* display: block;
        display: -webkit-box;
        word-wrap:break-word;
        margin: 0 auto;
        line-height: 1.72;
        -webkit-line-clamp: 13;
        -webkit-box-orient: vertical; */
        /* overflow: hidden; */
        text-overflow: ellipsis;
    }
    .carright .neirong .title{
        text-align: center;
        font-size:40px;
        font-weight:bold;
    } 
    .carright img {
        width: 100%;
        height: 100%;
    }
    .buchang {
        display: flex;
        width: 100%;
        justify-content: space-between;
        margin-bottom: 20px;
    }
    .bulist {
        width: calc(18% - 10px);
        margin-left:10px;
        cursor: pointer;
        position: relative;
    }
    .bulist:hover{
        opacity: .8;
    }
    .ss {
        position: absolute;
        bottom:20px;
        color:#fff;
        font-size:35px;
        letter-spacing: 5px;
        writing-mode:tb-rl;
        font-weight: bold;
    }
    .bulist:nth-child(4) .ss {
        right:0px;
    }
    .bulist:nth-child(5) .ss {
        right:0px;
    }
    .bulist img{
        width: 100%;
        height: 400px;
        clip-path:polygon(0% 0, 100% 12%, 100% 100%, 0 100%);
    }
    .bulist:nth-child(4) img {
        clip-path:polygon(100% 0, 100% 100%, 0% 100%, 0 12%) !important;
    }
    .bulist:nth-child(5) img {
        clip-path:polygon(100% 0, 100% 100%, 0% 100%, 0 12%) !important;
    }
    .buTeshu {
        width: calc(100% - 18% * 4);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        cursor: default;
    }
    .buTeshu .title {
        text-align: center;
        font-size:60px;
        font-weight: bold;
        color:rgb(155,112,69)
    }
    .buTeshu .title2 {
        text-align: center;
        font-size:25px;
        font-weight: bold;
        color:rgb(155,112,69)
    }
    .buTeshu .title3 {
        text-align: center;
        font-size:30px;
        font-weight: bold;
        color:rgb(155,112,69)
    }
</style>
</head>
<body>
<div class="header">
    <div class="w clearfix">
        <div class="logo fl"><a href="__ROOT__/"><img src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" alt="<?php echo (C("web_name")); ?>"/></a></div>       
        <div class="tel fr">全国统一服务热线<p><?php echo (C("web_tel")); ?></p></div>
    </div>
    <div class="menu">
    	<div class="w clearfix">
    		<?php echo W('Nav');?>
    	</div>
    </div>
</div>
<script>
    $(function(){
        var n = $(".nav_li").length;
        $(".nav_li").css("width",100/n+"%");
    });
</script>
<div class="container">

    <div class="banner"><?php echo W('Flash');?></div>
<!-- 
    <div class="hot_se">
        <div class="w">
            <span>热门关键词：</span>
            <div class="hot_li">
               <?php echo W('About',array('id'=>120,'len'=>999999999));?>
            </div>   
            <div class="searchformzone search fr">
                <form id="searchform" method="get" action="<?php echo U('Search/index');?>">
                    <div class="searchform">
                        <input type="text" name="name" class="input" placeholder="请输入关键字搜索" autocomplete="off" onblur="if(this.value.length<1)this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value=''"/>
                    </div>
                    <div class="search_submit">
                      <a href="javascript:searchform.submit();"></a>
                    </div>
                </form>
            </div>  
        </div>
    </div> -->
    <div class="t">走进中互</div>
    <div class="we">
        <div class="wel"></div>
        <div class="wer">
            <div class="wenei">
                <div class="wet">关于我们</div>
                <div class="neirong">
                    <p>中互交通运输有限公司（以下简称中互交通），在国家政策指引下，依照国家对运输行业高要求，迎合市场发展，立足创新，于2019年7月经国家正式批设，注册资金1亿元，坐落于河北省石家庄市高新技术开发区太行南大街197号,是面向全国的综合性交通服务企业。
                    </p>
                    <p>
                        中互交通致力于通过大数据及高科技手段为交通运输企业保驾护航，公司经营范围包括:道路货物运输服务，汽车维修；展览展示服务；车辆年检代理服务；汽车及配件、轮胎的销售；交通安全统筹服务等...
                    </p>
                    </div>
                <a href="/list-7-82" class="btn" style="display: inline-block;">更多</a>
            </div>
        </div>
    </div>
    
    <!-- <div class="index_pdt">
        <div class="w clearfix">
            <div class="cate fl">
                <h2>产品分类中心<small>PRODUCTS CENTER</small></h2>
                <div class="scroll">
                    <ul class="c1">
                    <?php $cate_list = get_children_list(1); ?>
                    <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["nav"] == '0'): else: ?>
                        <li><a class="a1" href="<?php if($vo["link"] == ''): ?>/<?php echo ($vo["url"]); else: echo ($vo["link"]); endif; ?>"><?php echo ($vo["name"]); ?></a>
                            <ul class="c2">                                       
                                <?php $cate_list2 = get_children_list($vo['id']); ?>
                                <?php if(is_array($cate_list2)): $i = 0; $__LIST__ = $cate_list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if($vo["nav"] == '0'): else: ?>
                                    <li><a class="a2" href="<?php if($vo2["link"] == ''): ?>/<?php echo ($vo2["url"]); else: echo ($vo2["link"]); endif; ?>"><?php echo ($vo2["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>  
                            </ul>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                    <ul class="c1">
                    <?php $cate_list = get_children_list(155); ?>
                    <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["nav"] == '0'): else: ?>
                        <li><a class="a1" href="<?php if($vo["link"] == ''): ?>/<?php echo ($vo["url"]); else: echo ($vo["link"]); endif; ?>"><?php echo ($vo["name"]); ?></a>
                            <ul class="c2">                                       
                                <?php $cate_list2 = get_children_list($vo['id']); ?>
                                <?php if(is_array($cate_list2)): $i = 0; $__LIST__ = $cate_list2;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo2): $mod = ($i % 2 );++$i; if($vo["nav"] == '0'): else: ?>
                                    <li><a class="a2" href="<?php if($vo2["link"] == ''): ?>/<?php echo ($vo2["url"]); else: echo ($vo2["link"]); endif; ?>"><?php echo ($vo2["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>  
                            </ul>
                        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </div>
                <?php echo W('Ad',array('id'=>'8'));?>
            </div>

            <div class="list_box fr">
                <h2>产品推荐<span>/ Product Recommendation</span><a href="/products.html">MORE+</a></h2>
                <div class="list clearfix"><?php echo W('List',array('table'=>'Product','num'=>6,'bid'=>1,'id'=>1));?></div>
            </div>
        </div>
    </div> -->
    
    <!-- <div class="index_ad"><?php echo W('Ad',array('id'=>'18'));?></div> -->

    <div style="width: 100%;">
        <div class="t">车辆统筹</div>
        <?php echo W('Car',['pid'=>123,'type'=>1]);?>
    </div>

    <!-- <div class="index_power">
        <div class="w">
            <div class="t">业务介绍</div>
            <div class="info clearfix"><?php echo W('NavNew',['pid'=>155,'type'=>0]);?></div>
        </div>
    </div> -->


    <div class="index_power" style="background:#fff">
        <div class="w">
            <div class="t">补偿流程</div>
            <div class="info clearfix"><?php echo W('Buchang',['pid'=>131,'type'=>0]);?></div>
        </div>
    </div>

    <div class="index_power" style="background:#fff">
        <div class="w">
            <div class="t">新闻资讯</div>
            <div class="info clearfix"><?php echo W('News',131);?></div>
        </div>
    </div>

    <!-- <div class="index_adv">
        <div class="adv_t"><?php echo W('Ad',array('id'=>'36'));?></div>
        <div class="w">
            <div class="info">
                <?php echo W('Ad',array('id'=>'32,33,34,35'));?>
            </div>
        </div>
    </div> -->

    <!-- <div class="photo_scroll">
        <div class="w">
            <div class="t">合作伙伴<p>10年风雨 感恩您选择了我们</p></div>
            <div class="dowebok6 owl-carousel"><?php echo W('List',array('table'=>'Photo','num'=>12,'bid'=>1,'id'=>161));?></div>
        </div>
    </div> -->


</div>

<div class="footer" style="background: #fff;">
    <div class="w clearfix" style="width:1200px">
            <div class="ft_nav clearfix fl">
              <ul>
                <li class="share_box" style="width:270px;">
                  <img class="f_logo" src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" alt="<?php echo (C("web_name")); ?>" style="width:270px;" />
                  <!-- <div class="share">
                    <div class="bdsharebuttonbox"><span class="fl">分享到：</span><a href="#" class="bds_qzone" data-cmd="qzone" title="分享到QQ空间"></a><a href="#" class="bds_weixin" data-cmd="weixin" title="分享到微信"></a><a href="#" class="bds_tsina" data-cmd="tsina" title="分享到新浪微博"></a></div>
          <script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{},"image":{"viewList":["qzone","weixin","tsina"],"viewText":"分享到：","viewSize":"16"},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","weixin","tsina"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
                  </div> -->
                </li>
                <li style="width:130px;">
                  <h4>走进中互</h4>
                  <?php $cate_list = get_children_list(1); ?>
                  <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["nav"] == '0'): else: ?>
                      <a href="__ROOT__<?php if($vo["link"] == ''): ?>/<?php echo ($vo["url"]); ?>.html<?php else: echo ($vo["link"]); endif; ?>"><?php echo ($vo["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>            
                </li>
                <li style="width:130px;">
                  <h4>新闻资讯</h4>
                  <?php $cate_list = get_children_list(134); ?>
                  <?php if(is_array($cate_list)): $i = 0; $__LIST__ = $cate_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["nav"] == '0'): else: ?>
                      <a href="__ROOT__<?php if($vo["link"] == ''): ?>/<?php echo ($vo["url"]); ?>.html<?php else: echo ($vo["link"]); endif; ?>"><?php echo ($vo["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>            
                </li>
              </ul>
            </div>
            <div class="ft_tel fl">
                <h4>联系我们</h4>
                <div class="li">
                  <p>电话：<?php echo (C("web_tel")); ?></p>               
                  <p>邮箱：<?php echo (C("web_email")); ?></p>                 
                  <p>地址：<?php echo (C("web_add")); ?></p>
                </div>
            </div>
            <div class="ft_code fl">
                <h4>扫一扫关注</h4>
                <img  src="__ROOT__/Uploads/<?php echo (C("web_qrcode")); ?>" style="width:130px;">
            </div>
    </div>

    <div class="copyright clearfix">
        <div class="w">
            <div class=""><?php echo (C("web_copyright")); ?>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.beian.miit.gov.cn" target="_blank"><?php echo (C("web_icp")); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (C("web_count")); ?></div>
            
        </div>
    </div>
</div>
<?php echo W('Online');?>
<?php echo (C("web_share")); ?>

<script>
    $(function(){
    	$(".nav").mouseover(function(){
            $(".header").css("overflow","visible");
        });
        $(".nav").mouseout(function(){
            $(".header").css("overflow","hidden");
        });

        $(".search_ico").click(function(){
            $(".search").slideDown();
            $(".search .input").focus();
        });

        $(".search_close").click(function(){
            $(".search").slideUp();
        });


    });	
</script>


<script type="text/javascript">
    $.ajaxSetup({
        timeout: 300000
    });

$(function(){
// banner    
    $('.banner').flexslider({
        directionNav: true,
        pauseOnAction: false
    });
//scroll
    (function($){
        $(window).load(function(){
            $(".scroll").mCustomScrollbar({
                autoHideScrollbar:true,
                scrollButtons:{
                    enable:true
                },
                theme:"dark",
                advanced:{ updateOnContentResize: true }
            }).find(".mCSB_container").css("padding-bottom","10px");

        });
    })(jQuery);

//图片滚动
    $('.dowebok6').owlCarousel({
        items: 6,
        navigation: true,
       // autoPlay: true,
        navigationText: ["",""],
        scrollPerPage: true
    });
});

//tabs
$(document).ready(function() {
    jQuery.jqtab = function(tabtit,tab_conbox,shijian) {
        $(tab_conbox).children("li").hide();
        $(tabtit).find("li:first").addClass("thistab").show(); 
        $(tab_conbox).find("li:first").show();
    
        $(tabtit).find("li").bind(shijian,function(){
          $(this).addClass("thistab").siblings("li").removeClass("thistab"); 
            var activeindex = $(tabtit).find("li").index(this);
            $(tab_conbox).children().eq(activeindex).show().siblings().hide();
            return false;
        });    
    };
    $.jqtab(".tabs",".tab_conbox","mouseover");      
});

</script>

</body>
</html>