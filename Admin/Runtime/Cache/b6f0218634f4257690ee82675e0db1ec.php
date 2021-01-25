<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>修改栏目</title>
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
<script language=javaScript>
  $(function () {
      $( 'body' ).delegate(".del","click", function () {
          del_image_ajax($(this));
          return false;
      } );
  });

  function CheckJob()
  {
  	if (document.myform.name.value.length==""){
  		alert ("导航名称不能为空！");
  		document.myform.name.focus();
  		return false;
  	}
    if ($("#link_input").val() == "") {
        alert("链接地址不能为空！");
        return false;
    }
  	var number = document.getElementById('sort').value;
  	var reg = /^\d+$/;
  	if (!number.match(reg)){
  		alert ("排序号必须为数字!");
  		document.myform.sort.focus();
  		return false;
  	}
 }
</script>
<style>
  .edui-editor{display: none;}
</style> 
</head>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
  <tr>
    <td width="88%" height="24">修改导航：【<?php echo ($list["name"]); ?>】</td>
    <td width="12%" align="right"><a href="<?php echo U('List/index');?>">【返回>>】</a></td>
  </tr>
</table>

<form action="<?php echo U('updatelist');?>" enctype="multipart/form-data" method="post" name="myform" id="myform"  onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="100%" border="0" class="ListCategory">
  <tr>
    <td width="9%">导航名称：</td>
    <td width="91%" height="35"><input name="name" type="text" value="<?php echo ($list["name"]); ?>" class="FormSmall"></td>
  </tr>
  <?php if($type !='link'): ?><tr>
    <td>链接地址：</td>
    <td height="35"><input name="link" type="text" value="<?php echo ($list["link"]); ?>" class="FormSmall" placeholder="默认为空"><a title='(1)站内链接：如 /aaa<br>(2)站外链接：需以http://开头'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr><?php endif; ?>
  <?php if($type == 'link'): ?><tr>
    <td>链接地址：</td>
    <td height="35"><input id="link_input" name="link" type="text" value="<?php echo ($list["link"]); ?>" class="FormSmall" placeholder="默认为空"><a title='(1)站内链接：如 /aaa<br>(2)站外链接：需以http://开头'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr><?php endif; ?>
  <?php if($pid == 0): ?><tr>
    <td>导航模型：</td>
    <td height="35">
      <?php switch($list["type"]): case "product": ?>产品模型<?php break;?>
          <?php case "new": ?>新闻模型<?php break;?>
          <?php case "photo": ?>图片模型<?php break;?>
          <?php case "download": ?>下载模型<?php break;?>
          <?php case "page": ?>单页模型<?php break;?>
          <?php case "link": ?>链接模型<?php break;?>
          <?php default: ?>未设置<?php endswitch;?>
      <input name="type" type="hidden" value="<?php echo ($list["type"]); ?>">
    </td>
  </tr><?php endif; ?>
  <tr>
    <td>导航菜单：</td>
    <td height="35" valign="middle">
    <select name="nav">
        <option value="1" <?php if(($list["nav"]) == "1"): ?>selected="selected"<?php endif; ?>>显示</option>
        <option value="0" <?php if(($list["nav"]) == "0"): ?>selected="selected"<?php endif; ?>>隐藏</option>
    </select>
    </td>
  </tr>
  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" id="sort" type="text" value="<?php echo ($list["sort"]); ?>" class="FormSmall" style="width: 50px;"></td>
  </tr>
  <tr>
    <td>缩略图：</td>
    <td height="35">
      <div class="thumb_input" <?php if($list["icon"] != ''): ?>style="display:none"<?php endif; ?>>
        <input id="icon_file" type="file" name="file" id="file"/>
        <input type="hidden" name="tnum" value="1">
      </div>
      <noempty name="list.icon">
        <p class="thumb_image" style="padding:4px 0; <?php if($list["icon"] == ''): ?>display:none;<?php endif; ?>">
          <img class="upload_img left" src="__ROOT__/Uploads/<?php echo ($list["icon"]); ?>" height="50" onerror="this.src='../Public/images/error.jpg'"/>
          <a href="<?php echo U('delicon',array('name'=>$list['icon'],'id'=>$list['id'],'field'=>'icon'));?>" class='del del_img left' data-hide=".thumb_image" data-show=".thumb_input"></a>
        &nbsp;&nbsp;&nbsp;&nbsp;<small></small>
        </p>
     </noempty>
    </td>
  </tr>
  <?php if(($list["type"]) != "link"): ?><tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" value="<?php echo ($list["url"]); ?>" class="FormSmall"> <a title='URL只能是字母、数字或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  <tr>
    <td>SEO标题：</td>
    <td height="35"><input name="title" type="text" value="<?php echo ($list["title"]); ?>" class="FormSmall"><a title='SEO标题建议使用默认' style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" value="<?php echo ($list["keywords"]); ?>" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>SEO描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"><?php echo ($list["description"]); ?></textarea>
    </td>
  </tr><?php endif; ?>


  
<?php if($type == 'page'): ?><style>
  .edui-editor{display: block;}
</style> 
  <tr>
    <td>单页内容：</td>
    <td>
    <textarea name="contents" id="contents" style="width:745px; height:360px; margin:8px 0;"><?php echo ($list["contents"]); ?></textarea>
    </td>
  </tr><?php endif; ?>
  
</table>
</DIV>
<table width="100%">
  <tr>
    <td width="9%" height="55" align="center">  
    </td>
    <td height="55" align="left">
    <input name="id" type="hidden" value="<?php echo ($list["id"]); ?>">
    <input type="submit" value="确认修改" class="bginput">
    </td>
    </tr> 
</table>
</form>
</body>
</html>