<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<title>导航管理</title>
<script type="text/javascript">
	$(function () {
		$( 'ul[pid!=0]' ).hide();

		$( '.open' ).toggle( function () {
			var index = $( this ).parents('ul').attr('id');
			$( this ).html( "<img src='../Public/images/minus.gif' class='listimg'/>" );
			$( 'ul[pid=' + index + ']' ).show();
		}, function () {
			var index = $( this ).parents('ul').attr('id');
			$( this ).html( "<img src='../Public/images/maxus.gif' class='listimg'/>" );
			$( 'ul[pid=' + index + ']' ).hide();
		} );

		$( '.del' ).click( function () {
			return confirm('确认删除该分类？');
		} );
	});
</script>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
  <tr>
    <td><a class="tab_top_btn" href="<?php echo U('addlist',array('pid'=>0,'type'=>'page','tid'=>2));?>">添加导航</a></td>
  </tr>
</table>

<form name="theForm" method="post" action="<?php echo U('uporder');?>">
  <div class="tablelisthead">
    <ul pid='0'>
      <li class="li_10">排序</li>
      <li class="li_40">分类名</li>
      <li class="li_10">ID</li>
      <li class="li_20">状态</li>     
      <li class="li_20">编辑</li>
    </ul>
  </div>
  
  <div id="languageBox2">
    <div class="tablelist">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><ul onmouseover="this.style.background ='#fffdd7'" onmouseout="this.style.background ='#fff'" id='<?php echo ($vo["id"]); ?>' pid='<?php echo ($vo["pid"]); ?>' <?php if($vo["level"] == 1): ?>class="sub_cate"<?php endif; ?> <?php if($vo["level"] == 2): ?>class="thi_cate"<?php endif; ?>>
          <li class="li_10">
          <input type="text" value="<?php echo ($vo["sort"]); ?>" name="sort[<?php echo ($vo["id"]); ?>]" class="listinput"/>
          </li>
          <li class="li_40 cate_name">
          	  <?php if(($vo["level"]) < "2"): ?><span class='open'><img src="../Public/images/maxus.gif" class="listimg"/></span>
              <?php else: endif; ?>
              <?php if($vo["level"] > 0): ?><i></i><?php endif; echo ($vo["name"]); ?>
          </li>
          <li class="li_10"><?php echo ($vo["id"]); ?></li> 

          <li class="li_20 state_col">
          <?php if(($vo["nav"]) == "1"): ?><span class="gray">[显示]</span><?php else: ?><span class="red">[隐藏]</span><?php endif; ?>
          </li> 

          <li class="li_20">
            <a href="<?php echo U('mod',array('id'=>$vo['id'],'type'=>$vo['type']));?>" class="op_btn_edit">修改</a>
            <a href="<?php echo U('dellist',array('id'=>$vo['id']));?>" class="op_btn_del del">删除</a>
            <?php if($vo["level"] <= 1): ?><a href="<?php echo U('addlist',array('pid'=>$vo['id'],'type'=>$vo['type']));?>" class="op_btn_copy">添加子类</a><?php endif; ?>    
          </li>
      </ul><?php endforeach; endif; else: echo "" ;endif; ?>  
    </div>
  </div>
  
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td height="36" class="BotNavBg">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td>
            <input type="submit" value="更新排序" class="bginput">
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</form>
</body>
</html>