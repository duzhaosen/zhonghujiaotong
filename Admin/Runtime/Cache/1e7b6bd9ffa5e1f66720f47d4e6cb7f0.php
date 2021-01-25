<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>查看留言</title>
<script type="text/javascript">
	$(function () {
		$( '.del' ).click( function () {
			return confirm('确认删除该留言？');
		} );
	});
</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
  <tr>
	<td width="88%" height="24">查看留言信息</td>
	<td width="12%" align="right"><a href="<?php echo U('Feedback/index');?>">【返回>>】</a></td>
  </tr>
</table>
<div class="PageContent">
	<form action="<?php echo U('del',array('id'=>$feed['id']));?>" method="post" name="myform">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="ListCategory Font">
			<tr class="firstalt">
				<td width="20%" height="25"><span style="padding-left:10px;">标题：</span></td>
				<td><?php echo ($feed["title"]); ?></td>
			</tr>
			<tr class="secondalt">
				<td height="25"><span style="padding-left:10px;">联系人：</span></td>
				<td><?php echo ($feed["name"]); ?></td>
			</tr>							
		
			<tr class="firstalt">
				<td width="20%" height="25"><span style="padding-left:10px;">电话：</span></td>
				<td><?php echo ($feed["tel"]); ?></td>
			</tr>
			
			<tr class="secondalt">
				<td width="20%" height="25"><span style="padding-left:10px;">邮箱：</span></td>
				<td><?php echo ($feed["email"]); ?></td>
			</tr>
			<tr class="firstalt">
				<td height="25"><span style="padding-left:10px;">地址：</span></td>
				<td><?php echo ($feed["add"]); ?></td>
			</tr>		
			<tr class="secondalt">
				<td height="25" width="20%"><span style="padding-left:10px;">留言内容：</span></td>
				<td><?php echo ($feed["contents"]); ?></td>
			</tr>
			<tr class="firstalt">
				<td height="25"><span style="padding-left:10px;">留言时间</span></td>
				<td><?php echo (date("Y-m-d H:i:s",$feed["time"])); ?></td>
			</tr>								
		</table>
			
	    <table width="100%" height="25" border="0" cellspacing="0" cellpadding="0" style="margin-top:10px;">
	      <tr>
	          <td>
	          <input type="hidden" value="15" name="id" />
	          <input class="bginput" OnClick="javascript:history.go(-1);" type="button" name="delbutton" value=" 返回列表 " />			          
	          <input class="bginput" type="submit" name="delbutton" value=" 删除 " />
	          </td>
	      </tr>
	    </table>
	</form>
</div>
</body>
</html>