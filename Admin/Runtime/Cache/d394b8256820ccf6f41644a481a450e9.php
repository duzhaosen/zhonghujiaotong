<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>banner管理</title>
<script type="text/javascript">
  $(function () {
    $( '.del' ).click( function () {
      return confirm('确认删除该banner？');
    } );
  });
</script>
<style type="text/css">
.proimg{width:90px; height:40px;}
</style>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
  <tr>
    <td width="88%" height="24"><a class="tab_top_btn" href="<?php echo U('Flash/add');?>">添加banner</a></td>
    <td width="12%" align="right"></td>
  </tr>
</table>


<form name="theForm" method="post" action="<?php echo U('uporder');?>">
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">排序</li>
      <li class="li_60">标题</li>
      <li class="li_10">ID</li>
      <li class="li_20">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'" class="tb_list">

          <li class="li_10">
          <input type="text" value="<?php echo ($vo["sort"]); ?>" name="sort[<?php echo ($vo["id"]); ?>]" class="listinput"/>
          </li>

          <li class="li_60">
            <img src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" class="proimg" onerror="this.src='../Public/images/error.jpg'"/>
            <span class="f_no"><a class="nowrap" href="<?php echo U('mod',array('id'=>$vo['id']));?>"><?php echo ($vo["title"]); ?></a></span>
          </li>

          <li class="li_10"><?php echo ($vo["id"]); ?></li>

          <li class="li_20">
            <a href="<?php echo U('mod',array('id'=>$vo['id']));?>"  class="op_btn_edit">修改</a>
            <a href="<?php echo U('del',array('id'=>$vo['id']));?>"  class="op_btn_del del">删除</a>
          </li>

      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="8%">
            <input type="submit" value="更新排序" class="bginput">
            </td>
            <td width="92%" align="center">
 
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
</body>
</html>