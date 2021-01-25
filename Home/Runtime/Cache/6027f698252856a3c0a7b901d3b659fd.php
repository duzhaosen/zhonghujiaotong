<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo (C("seo_title")); ?>|<?php echo ($list["name"]); ?></title>
<meta name="keywords" content="<?php echo ($list["name"]); ?>" />
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


<script language="javascript">var catid=<?php echo ($getid); ?>,pid=<?php echo ($list["pid"]); ?>;</script>
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
<div class="page_banner ">
    <?php echo W('Img',array('id'=>$list['pid']));?>
</div>

<div class="main">      
    <?php echo W('Left',array('id'=>$list['bid'],'type'=>$list['type']));?>
   <!-- end of left -->
  
  <div id="right">
    <div class="path_title"><span class="span_left"><?php echo ($list["name"]); ?></span><span class="span_right">您现在的位置：<a href="__ROOT__/">网站首页</a> &gt; <?php echo ($list["name"]); ?></span></div>
    
    <ul class="news_list">
      <?php if(is_array($article)): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
        <a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>$table));?>" title="<?php echo ($vo["title"]); ?>">
          <span class="image"><img name="picautozoom" src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" width="100" onerror="this.src='../Public/images/error.jpg'" alt="<?php echo ($vo["name"]); ?>"/></span>
          <h4><?php echo (mb_substr($vo["title"],0,40,'utf-8')); ?></h4>
          <small class="list_time"><?php echo (date('Y-m-d',$vo["time"])); ?></small>
          <p class="desc"><?php echo (mb_substr($vo["description"],0,90,'utf-8')); ?></p>
        </a>
      </li><?php endforeach; endif; else: echo "" ;endif; ?>        
    </ul>
    
    <div class="page">
      <?php echo ($page); ?>
    </div>
      
  </div>
  <!-- end of right -->
  
</div>
<!-- end of main -->
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


</body>
</html>