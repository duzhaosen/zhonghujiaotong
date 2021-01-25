<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<script type="text/javascript" src="../Public/js/Sortable.min.js"></script>
<script type="text/javascript" src="../Public/js/upload.js"></script>
<title>添加产品</title>
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
<SCRIPT>
$(function () {
    $( 'body' ).delegate(".del","click", function () {
        del_image_ajax($(this));
        return false;
    } );
});

function CheckJob()
{
	if (document.myform.name.value.length==""){
		alert ("产品名称不能为空！");
		document.myform.name.focus();
		return false;
	}
	if (document.myform.title.value.length==""){
		alert ("SEO标题不能为空！");
		document.myform.title.focus();
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
</SCRIPT>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
  <tr>
    <td width="88%" height="24">添加产品</td>
    <td width="12%" align="right"><a href="<?php echo U('Product/index');?>">【返回>>】</a></td>
  </tr>
</table>

<form action="<?php echo U('savepro');?>" method="post" name="myform" id="myform" enctype="multipart/form-data" onSubmit="return CheckJob()">
<DIV class="PageContent">
<table width="100%" border="0" class="ListCategory">
  <tr>
    <td width="9%">产品名称：</td>
    <td width="91%" height="35"><input name="name" type="text" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>产品分类:</td>
    <td height="35">
      <select name="pid" style="height:28px;">
      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>"><?php echo ($vo["html"]); echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
      </select>
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" id="sort" value="99" class="FormSmall" style="width: 50px;"> <span style="color:#F00; font-size:12px;">*必须为数字</span><a title='只可填数字，数字越小排序越靠前。'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td>首页推荐：</td>
    <td height="35">
      <select name="featured" style="height:28px;">
          <option value="0">否</option>
          <option value="1">是</option>
      </select>
    </td>
  </tr>
  
  <tr>
    <td>自定义属性：</td>
    <td height="35">
    <input name="property1" type="text" placeholder="属性1" class="FormSmall" style="width:150px;font-size:12px;margin-bottom: 10px;">&nbsp;
    <input name="property2" type="text" placeholder="属性2" class="FormSmall" style="width:150px;font-size:12px;margin-bottom: 10px;">&nbsp;
    <input name="property3" type="text" placeholder="属性3" class="FormSmall" style="width:150px;font-size:12px;margin-bottom: 10px;">&nbsp;
    <input name="property4" type="text" placeholder="属性4" class="FormSmall" style="width:150px;font-size:12px;margin-bottom: 10px;">&nbsp;
    <input name="property5" type="text" placeholder="属性5" class="FormSmall" style="width:150px;font-size:12px;margin-bottom: 10px;">&nbsp;
    <input name="property6" type="text" placeholder="属性6" class="FormSmall" style="width:150px;font-size:12px;margin-bottom: 10px;">&nbsp;
    <input name="property7" type="text" placeholder="属性7" class="FormSmall" style="width:150px;font-size:12px;margin-bottom: 10px;">&nbsp;
    <input name="property8" type="text" placeholder="属性8" class="FormSmall" style="width:150px;font-size:12px;margin-bottom: 10px;">
    </td>
  </tr>

  <tr>
    <td>链接地址：</td>
    <td height="35"><input name="link_url" type="text" class="FormSmall" style="width: 320px;"> </td>
  </tr>

  <tr>
    <td>URL优化：</td>
    <td height="35"><input name="url" type="text" class="FormSmall" style="width: 320px;"> <a title='URL只能是字母，数字，下划线或-'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
  <tr>
    <td>SEO标题：</td>
    <td height="35"><input name="title" type="text" class="FormSmall" style="width: 320px;"> 
	<span style="color:#F00; font-size:12px;">*必填</span>
    </td>
  </tr>
  
  <tr>
    <td>SEO关键字：</td>
    <td height="35"><input name="keywords" type="text" class="FormSmall" style="width: 320px;"></td>
  </tr>
  
  <tr>
    <td>描述：</td>
    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"></textarea>
    </td>
  </tr>
  
  <tr>
    <td>缩略图：</td>
    <td height="35"><input type='file' name='thumb'><small></small></td>
  </tr>

  
  <tr>
    <td>产品主图：</td>
    <td height="35">
      <div id="big_image_list">
        <?php if(is_array($photo)): $i = 0; $__LIST__ = $photo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="mr_10 clearfix bigimg_<?php echo ($key); ?> bigimg_all"><img class="upload_img left" src="__ROOT__/Uploads/<?php echo ($photo[$key]); ?>" width="60" height="60"/>
            <input name="bigimg[]" value="<?php echo ($photo[$key]); ?>" type="hidden"/>
            <a href="<?php echo U('delphoto',array('name'=>$photo[$key],'id'=>$product['id'],'field'=>'photo'));?>" class='del del_img left' data-hide=".bigimg_<?php echo ($key); ?>"></a>
          </div><?php endforeach; endif; else: echo "" ;endif; ?>
      </div>
      <div class="mr_10 clearfix"><a href="#" class="upload_file" data-callback="upload_photo" data-url="<?php echo U('upload/uploadfile');?>"><img src="../Public/images/upload.png" alt=""/></a></div>
      <small></small>
    </td>
  </tr>
  
  <tr>
    <td>产品内容：</td>
    <td>
    <textarea name="contents" id="contents" style="width:745px; height:360px; margin:8px 0;"></textarea>
    </td>
  </tr>

  <!-- <tr>
    <td>上传附件：</td>
    <td height="35">
      <div id="download_list" style="display: inline-block">
      </div>
      <div class="mr_10 clearfix"><a href="#" class="upload_file" data-callback="upload_download" data-download="1"  data-url="<?php echo U('upload/uploadfile');?>"><img src="../Public/images/upload.png" alt=""/></a></div>
    </td>
  </tr> -->

</table>

<table width="100%">
  <tr>
    <td width="9%" height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="submit" value="提交" class="bginput">&nbsp;&nbsp;
    <input name="reset" type="reset"  class="bginput" value="重置" />
    </td>
  </tr>
</table>

</DIV>
</form>
<script>
    $(function () {
        if(document.getElementById("big_image_list")) {
            var sortable = new Sortable(document.getElementById("big_image_list"), {});
        }
        if(document.getElementById("download_list")) {
            var sortable = new Sortable(document.getElementById("download_list"), {});
        }
        $(".del_download").click(function(){
            if(!confirm("确定删除？")){
                return false;
            }
            $(this).closest("li").remove();
            return false;
        })

    })
</script>
</body>
</html>