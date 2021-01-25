<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/select.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>下载管理</title>
<script type="text/javascript">
  $(function () {
    $( '.del' ).click( function () {
      return confirm('确认删除该数据？');
    } );
  });

  function formSubmit(n) {
    form = document.getElementById("theForm");
    switch(n) {
    case 1:
        form.action="<?php echo U('uporder');?>";
        break;
    case 2:
        form.action="<?php echo U('delall');?>";
        break;
     }
     form.submit();
  }

</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
<tr>
  <td>
    <div style="float:left; width:260px;"><a class="tab_top_btn" href="<?php echo U('Download/add');?>">添加下载</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="javascript:select()">全选</a> | <a href="javascript:fanselect()">反选</a> | <a href="javascript:noselect()">全不选</a>
    </div>
  <select  onchange="location.href=this.value;" class="mg_8">
    <option value="<?php echo U('Download/index');?>" selected>按分类索引</option>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo U('Download/search',array('pid'=>$vo['id']));?>" <?php if(($vo["id"]) == $pid): ?>selected="selected"<?php endif; ?>><?php echo ($vo["html"]); if($vo["level"] > 0): ?>┕<?php endif; echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?> 
  </select >
  
    <td>
      <form method="get" action="<?php echo U('Download/search');?>">
        <div class="fr mg_8"><input type="submit" value="搜索" class="bginput"  style="width:50px; margin-left:10px;"/></div>
        <div class="fr">下载搜索：<input type="text" name="keyword" class="FormSmall mg_8"></div>
      </form>
    </td>
  </td>
</tr>
</table>

<form name="theForm" id="theForm" method="post" action="">
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">排序</li>
      <li class="li_40">标题</li>
      <li class="li_20">文件名称</li>
      <li class="li_10">ID</li>
      <li class="li_20">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($down)): $i = 0; $__LIST__ = $down;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#FFFDD7'" onmouseout="this.style.background ='#FFFFFF'">
          <li class="li_10">
          <span style="float:right; padding: 14px 0px;"><input name="dell[]" type="checkbox" value="<?php echo ($vo["id"]); ?>"></span>
          <input type="text" value="<?php echo ($vo["sort"]); ?>" name="sort[<?php echo ($vo["id"]); ?>]" class="listinput"/>
          </li>
          <li class="li_40"><a href="<?php echo U('mod',array('id'=>$vo['id']));?>" title="<?php echo ($vo["name"]); ?>" style="margin-left:10px;"><?php echo ($vo["name"]); ?></a></li>
          <li class="li_20"><?php echo ($vo["filename"]); ?></li> 
          <li class="li_10"><?php echo ($vo["id"]); ?></li>          
          <li class="li_20">
            <a href="<?php echo U('mod',array('id'=>$vo['id']));?>" class="op_btn_edit">修改</a>
            <a href="<?php echo U('del',array('id'=>$vo['id']));?>" class="op_btn_del del">删除</a>
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="900" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="200">
            <input type="button" value="更新排序" onclick="formSubmit(1)" class="bginput"/>
            <input type="button" value="删除所选" onclick="formSubmit(2)" class="bginput"/>
            </td>
            <td width="700" align="center">
            <div class="page"><?php echo ($show); ?></div>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
</body>
</html>