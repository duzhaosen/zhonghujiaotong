<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/Sortable.min.js"></script>
<script type="text/javascript" src="../Public/js/upload.js"></script>
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>修改图片</title>
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
    <td width="88%" height="24">修改图片</td>
    <td width="12%" align="right"><a href="<?php echo U('Photo/index');?>">【返回>>】</a></td>
  </tr>
</table>

<form action="<?php echo U('updatephoto');?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
<DIV class="PageContent">
<table width="100%" border="0" class="ListCategory">
  <tr>
    <td width="9%">图片名称：</td>
    <td width="91%" height="35"><input name="name" type="text" class="FormSmall" value="<?php echo ($photolist["name"]); ?>" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>图片分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if(($vo["id"]) == $photolist["pid"]): ?>selected="selected"<?php endif; ?>><?php echo ($vo["html"]); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" class="FormSmall" value="<?php echo ($photolist["sort"]); ?>" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>
  <tr>
    <td>首页推荐：</td>
    <td height="35">
      <select name="featured" style="height:28px;">
        <option value="0" <?php if(($photolist["featured"]) == "0"): ?>selected="selected"<?php endif; ?>>否</option>
        <option value="1" <?php if(($photolist["featured"]) == "1"): ?>selected="selected"<?php endif; ?>>是</option>
      </select>
    </td>
  </tr>
  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" value="<?php echo ($photolist["url"]); ?>" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td width="9%">SEO标题：</td>
    <td width="91%" height="35"><input name="title" type="text" value="<?php echo ($photolist["title"]); ?>" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" class="FormSmall" value="<?php echo ($photolist["keywords"]); ?>" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($photolist["description"]); ?></textarea>
    </td>
  </tr>
  
  <tr>
    <td>缩略图：</td>
    <td height="35">
      <div class="thumb_input fl" <?php if($photolist["thumb"] != ''): ?>style="display:none"<?php endif; ?>>
      <input type='file' name='thumb'>
      <input type="hidden" name="tnum" value="1">
</div>
  <noempty name="photolist.thumb">
    <p style="padding:4px 0; <?php if($photolist["thumb"] == ''): ?>display:none<?php endif; ?>" class="thumb_image"><img class="upload_img left" src="__ROOT__/Uploads/<?php echo ($photolist["thumb"]); ?>" width="60" height="60" onerror="this.src='../Public/images/error.jpg'"/>
      <a href="<?php echo U('delphoto',array('name'=>$photolist['thumb'],'id'=>$photolist['id'],'field'=>'thumb'));?>" class='del del_img left'  data-hide=".thumb_image" data-show=".thumb_input"></a>
      </p>
     </noempty>
     &nbsp;&nbsp;&nbsp;&nbsp;<small></small>
    </td>
  </tr>
  
  <tr>
    <td>图片主图：</td>
    <td height="35">

      <div id="big_image_list">
        <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="mr_10 clearfix bigimg_<?php echo ($key); ?> bigimg_all"><img class="upload_img left" src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" width="60" height="60" onerror="this.src='../Public/images/error.jpg'"/>
            <input name="bigimg[]" value="<?php echo ($photo[$key]); ?>" type="hidden"/>
            <a href="#" class='del del_img left' data-hide=".bigimg_<?php echo ($key); ?>"></a>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="mr_10 clearfix"><a href="#" class="upload_file" data-callback="upload_photo" data-url="<?php echo U('upload/uploadfile');?>"><img src="../Public/images/upload.png" alt=""/></a></div>
      <div style="padding:10px 0px 10px 0px;"><a href="<?php echo U('delmain',array('id'=>$photolist['id']));?>" data-hide=".bigimg_all" class='del'>[ 删除全部主图 ]</a></div>
      <small></small>
    </td>
  </tr>
  
  <tr>
    <td>图片内容：</td>
    <td>
    <textarea name="contents" id="contents" style="width:745px; height:360px; margin:8px 0;"><?php echo ($photolist["contents"]); ?></textarea>
    </td>
  </tr>
</table>  
</DIV>

<table width="100%">
   <tr>
    <td width="9%" height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="hidden" name="id" value="<?php echo ($photolist["id"]); ?>">
    <input type="submit" value="确认修改" class="bginput">&nbsp;&nbsp;
    </td>
    </tr>
</table>

</form>
<script>
    $(function () {
        if(document.getElementById("big_image_list")) {
            var sortable = new Sortable(document.getElementById("big_image_list"), {});
        }

    })
</script>
</body>
</html>