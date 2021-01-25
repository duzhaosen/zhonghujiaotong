<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>联系方式-<?php echo (C("seo_title")); ?></title>
<meta name="keywords" content="<?php echo (C("seo_keywords")); ?>" />
<meta name="description" content="<?php echo (C("seo_description")); ?>" />
<script language="javascript">var catid="",pid="";</script>
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
#cat_active89{    
    border-left: 3px solid #f08519;
    background: #fff;
    color: #f08519;
}
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

</SCRIPT>
<style>
    .mains{
        width: 1200px; 
        margin:20px auto 50px; 
        height: auto; 
        min-height: 400px; 
        overflow: hidden;
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
  <div class="page_banner"><?php echo W('Ad',array('id'=>'10'));?></div>

  <div class="mains">  
        <div class="path_title"><span class="span_left">在线留言</span><span class="span_right">您现在的位置：<a href="__ROOT__/">网站首页</a> &gt; 在线留言</span></div>
        <!-- <br /> -->
        <!-- <div class="clearfix"><?php echo W('About',array('id'=>87,'len'=>99999999999));?></div>
        <br> -->
        <p class="f_tip" style="text-align:center;">请您填写以下信息，我们将尽快与您取得联络。</p>
        <form id="myform" name="myform" method="post" action="__ROOT__/?m=Feedback&a=check" onSubmit="return CheckJob()">
        <dl class="table">
            <div class="talbe_nei">

            <div>
                <dt>标题<span style="color:red">*</span></dt>
                <dd><input name="title" type="text" class="textwidth"/></dd>
            </div>
            <div>
                <dt>姓名<span style="color:red">*</span></dt>
                <dd><input name="name" type="text" class="textwidth"/></dd>
            </div>
            <div>
                <dt>手机号码<span style="color:red">*</span></dt>
                <dd><input name="tel" type="text" class="textwidth"/></dd>
            </div>
            <div>
                <dt>Email<span style="color:red">*</span></dt>
                <dd><input name="email" type="text" class="textwidth"/></dd>
            </div>
            <!-- <div>
                <dt class="hide">联系地址：</dt>
                <dd class="hide"><input name="add" type="text" class="textwidth"/></dd>
            </div> -->
            <div>
                <dt>留言<span style="color:red">*</span></dt>
                <dd class="biezhu"><textarea name="contents" class="areawidth"></textarea></dd>
            </div>
            <div>
                <dt>验证码<span style="color:red">*</span></dt>
                <dd><input name="code" maxlength="4" style="width:380px;height: 40px; text-align:center;text-indent:0"><img class="codeimg" src="<?php echo U('Common/verify');?>" onclick='this.src=this.src+"?"+Math.random()'/></dd>
                <div class="clearfix"></div>
            </div>
            
            <div>
                <dt></dt>
            <dd><input type="submit" name="button" value="提交留言" class="submit_btn"/>
            <input name="reset" type="reset"  class="submit_btn" value="重置" /></dd>
            </div>
        </div>

        </dl>
        </form>
        <div class="clear"></div>
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