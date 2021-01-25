<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>修改新闻</title>
<script type="text/javascript">var baiduPath="__PUBLIC__/";</script>
<script charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.config.js"></script>
<script charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.all.js"></script>
<script charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/ueditor.parse.min.js"></script>
<script charset="utf-8" src="<?php echo ($adminName); ?>/ueditor/lang/zh-cn/zh-cn.js"></script>
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(function () {

    if (document.getElementById("contents") != null) {
        UE.getEditor('contents', {    //contents为要编辑的textarea的id
            initialFrameWidth: 900,   //初始化宽度
            initialFrameHeight: 400,   //初始化高度
            scaleEnabled: true//设置不自动调整高度
        });
    }
});
</script>
  <script type="text/javascript">
      $(function () {
          $( 'body' ).delegate(".del","click", function () {
              del_image_ajax($(this));
              return false;
          } );
      });
  </script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
  <tr>
    <td width="88%" height="24">修改新闻</td>
    <td width="12%" align="right"><a href="<?php echo U('New/index');?>">【返回>>】</a></td>
  </tr>
</table>

<form action="<?php echo U('updatenew');?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
<DIV class="PageContent">
<table width="100%" border="0" class="ListCategory">
  <tr>
    <td width="9%">新闻标题：</td>
    <td width="91%" height="35"><input name="title" type="text" value="<?php echo ($news["title"]); ?>" class="FormSmall" style="width: 320px;"> 
  <span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>新闻分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $news["pid"]): ?>selected="selected"<?php endif; ?>><?php echo ($vo["html"]); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" value="<?php echo ($news["sort"]); ?>" class="FormSmall" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>
  <tr>
    <td>首页推荐：</td>
    <td height="35">
      <select name="featured" style="height:28px;">
        <option value="0" <?php if(($news["featured"]) == "0"): ?>selected="selected"<?php endif; ?>>否</option>
        <option value="1" <?php if(($news["featured"]) == "1"): ?>selected="selected"<?php endif; ?>>是</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>缩略图：</td>
    <td height="35">
    <div class="thumb_input" <?php if($news["photo"] != ''): ?>style="display:none"<?php endif; ?>>
    <input type='file' name='photo'>
    <input type="hidden" name="tnum" value="1">
    </div>
  <noempty name="news.photo">
      <p class="thumb_image" style="padding:4px 0; <?php if($news["photo"] == ''): ?>display:none;<?php endif; ?>">
        <img class="upload_img left" src="__ROOT__/Uploads/<?php echo ($news["photo"]); ?>" height="60" onerror="this.src='../Public/images/error.jpg'"/>
        <a href="<?php echo U('delphoto',array('name'=>$news['photo'],'id'=>$news['id'],'field'=>'photo'));?>" class='del del_img left' data-hide=".thumb_image" data-show=".thumb_input"></a>
      &nbsp;&nbsp;&nbsp;&nbsp;<small></small>
      </p>
  </noempty>
    </td>
  </tr>

  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" value="<?php echo ($news["url"]); ?>" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" value="<?php echo ($news["keywords"]); ?>"  class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($news["description"]); ?></textarea>
    </td>
  </tr>
  
  <tr>
    <td>新闻内容：</td>
    <td>
    <textarea name="contents" id="contents" style="width:745px; height:360px; margin:8px 0;"><?php echo ($news["contents"]); ?></textarea>
    </td>
  </tr>
  
</table>
</DIV>
<table width="100%">
   <tr>
    <td width="9%" height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="hidden" name="id" value="<?php echo ($news["id"]); ?>">
    <input type="submit" value="确认修改" class="bginput">&nbsp;&nbsp;
    </td>
    </tr> 
</table>
</form>
</body>
</html>