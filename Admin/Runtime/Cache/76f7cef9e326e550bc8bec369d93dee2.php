<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/select.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>后台首页</title>
<style>.tablelist li{padding: 0;}</style>
</head>
<body>
<div class="LineRightBlue1 office_tt">快捷操作：</div>
<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border:1px #D1E0F0 solid; border-top:none;">
  <tr>
    <td height="92">
      <div class="panel">
        <ul>
          <li><a href="<?php echo U('Config/index');?>"><span><img src="../Public/images/set.png"></span><p>网站设置</p></a></li>
          <li><a href="<?php echo U('List/index');?>"><span><img src="../Public/images/nav.png"></span><p>导航管理</p></a></li>
          <li><a href="<?php echo U('Product/index');?>"><span><img src="../Public/images/pdt.png"></span><p>产品管理</p></a></li>
          <li><a href="<?php echo U('New/index');?>"><span><img src="../Public/images/news.png"></span><p>新闻管理</p></a></li>
          <li><a href="<?php echo U('Photo/index');?>"><span><img src="../Public/images/pic.png"></span><p>图片管理</p></a></li>
          <li><a href="<?php echo U('Download/index');?>"><span><img src="../Public/images/download.png" ></span><p>下载管理</p></a></li>
          <li><a href="<?php echo U('Ad/index');?>"><span><img src="../Public/images/ad.png"></span><p>广告管理</p></a></li>
          <li><a href="<?php echo U('User/index');?>"><span><img src="../Public/images/user.png"></span><p>用户管理</p></a></li>
          <li><a href="<?php echo U('Link/index');?>"><span><img src="../Public/images/link.png"></span><p>友情链接</p></a></li> 
        </ul>
      </div>
    </td>
  </tr>
</table>

<div class="LineRightBlue1 office_tt mt_15">系统信息：</div>  
<div id="languageBox2">
  <div class="tablelist">
      <ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'">
          <li class="li_15">&nbsp;版本：</li>
          <li class="li_40">V4.2</li>
      </ul>
      <?php if(is_array($info)): $i = 0; $__LIST__ = $info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'">
          <li class="li_15">&nbsp;<?php echo ($key); ?>：</li>
          <li class="li_40"><?php echo ($v); ?></li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>
      <ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" style="border-bottom:1px #d6dfe7 solid">
          <li class="li_15">&nbsp;技术支持：</li>
          <li class="li_40">
              <span class="left"></span>
                <span  class="left">售后：</span>
                <span class="left"><a class="qq" href="http://wpa.qq.com/msgrd?v=3&amp;uin=33824173&amp;site=qq&amp;menu=yes" title="点击联系" target="_blank"><img src="../Public/images/qq.png"></a></span>
                <span class="left ml_10">技术：</span><span class="left"><a class="qq" href="http://wpa.qq.com/msgrd?v=3&amp;uin=33824173&amp;site=qq&amp;menu=yes" title="点击联系" target="_blank"><img src="../Public/images/qq.png"></a></span>
          </li>
      </ul>
  </div>
</div>
</body>
</html>