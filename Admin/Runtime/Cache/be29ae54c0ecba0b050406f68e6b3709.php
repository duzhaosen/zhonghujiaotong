<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>添加友情链接</title>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
  <tr>
    <td width="88%" height="24">添加友情链接</td>
    <td width="12%" align="right"><a href="<?php echo U('Link/index');?>">【返回>>】</a></td>
  </tr>
</table>

<form action="<?php echo U('addlink');?>" method="post">
<DIV class="PageContent">
<table width="100%" border="0"class="ListCategory">
  <tr>
    <td width="9%">链接名称：</td>
    <td width="91%" height="35"><input name="name" type="text" class="FormSmall" style="width: 220px;"> <span style="color:#F00; font-size:12px;">*必填</span> 
    </td>
  </tr>

  <tr>
    <td>排序ID：</td>
    <td height="35"><input name="sort" type="text" class="FormSmall" style="width: 50px;" value="99"> <span style="color:#F00; font-size:12px;">*必填</span></td>
  </tr>
  
  <tr>
    <td>链接地址：</td>
    <td height="35"><input name="url" type="text" value="http://" class="FormSmall" style="width: 320px;"><a title='需以http://开头'style="margin-left: 5px;" href="#"><img src="../Public/images/help.gif"></a></td>
  </tr>
  
</table>
</DIV>
<table width="100%">
   <tr>
    <td width="9%" height="55" align="center">
    </td>
    <td height="55" align="left">
    <input type="submit" value="添加" class="bginput">&nbsp;&nbsp;
    <input name="reset" type="reset"  class="bginput" value="重置" />
    </td>
    </tr> 
</table>
</form>
</body>
</html>