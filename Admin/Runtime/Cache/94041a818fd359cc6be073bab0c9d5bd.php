<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<script type="text/javascript" src="../Public/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="../Public/js/quickView.js"></script>
<title>添加栏目</title>
<?php if($type == 'page'): ?><script type="text/javascript">var baiduPath="__PUBLIC__/";</script>
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
</script><?php endif; ?>
<SCRIPT>
    function CheckJob() {
        if (document.myform.name.value.length == "") {
            alert("导航名称不能为空！");
            document.myform.name.focus();
            return false;
        }
        if ($("#link_input").val() == "") {
            alert("链接地址不能为空！");
            return false;
        }
        var number = document.getElementById('sort').value;
        var reg = /^\d+$/;
        if (!number.match(reg)) {
            alert("排序号必须为数字!");
            document.myform.sort.focus();
            return false;
        }
    }
</SCRIPT>
</head>
<body>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="LineRightBlue1">
    <tr>
        <td width="" height="24">
            <ul class="nav_types">
                <?php if($pid == 0): ?><li>选择导航类型：</li>
                <?php else: ?>
                    <li>选择【<?php echo ($name); ?>】的子导航类型：</li><?php endif; ?>
                <li><a class="li_page" href="<?php echo U('addlist',array('pid'=>$pid,'tid'=>2,'type'=>'page'));?>">【单页】</a></li>
                <li><a class="li_mod" href="<?php echo U('addlist',array('pid'=>$pid,'tid'=>1,'type'=>''));?>">【列表】</a></li>
                <li><a class="li_link" href="<?php echo U('addlist',array('pid'=>$pid,'tid'=>3,'type'=>'link'));?>">【链接】</a></li>
            </ul> 
        </td>
        <td width="12%" align="right"><a href="<?php echo U('List/index');?>">【返回>>】</a></td>
    </tr>
</table>


<form action="<?php echo U('savelist');?>" enctype="multipart/form-data" method="post" name="myform" id="myform"
      onSubmit="return CheckJob()">
    <DIV class="PageContent">
        <table width="100%" border="0" class="ListCategory">
            <tr>
                <td width="9%">导航名称：</td>
                <td width="91%" height="35"><input name="name" type="text" class="FormSmall"><span
                            style="color:#F00; font-size:12px;">*必填</span></td>
            </tr>
            <?php if($type !='link'): ?><tr>
                <td>链接地址：</td>
                <td height="35"><input name="link" type="text" class="FormSmall" placeholder="默认为空">
                    <a title='(1)站内链接：如 /aaa<br>(2)站外链接：需以http://开头' style="margin-left: 5px;" href="#">
                        <img src="../Public/images/help.gif">
                    </a>
                </td>
            </tr><?php endif; ?>
            <?php if($type == 'link'): ?><tr>
                <td>链接地址：</td>
                <td height="35"><input id="link_input" name="link" type="text" class="FormSmall" placeholder="默认为空">
                    <a title='(1)站内链接：如 /aaa<br>(2)站外链接：需以http://开头' style="margin-left: 5px;" href="#">
                        <img src="../Public/images/help.gif">
                    </a>
                </td>
            </tr><?php endif; ?>

            <?php if($type !='page' && $type !='link'): ?><style>.li_mod{color:#004A98}</style>
                <tr>
                    <td>导航模型:</td>
                    <td height="35">
                        <select name="type" style="height:28px;" id="sel">
                            <option value="product">产品模型</option>
                            <option value="new">新闻模型</option>
                            <option value="photo">图片模型</option>
                            <option value="download">下载模型</option>
                        </select>
                    </td>
                </tr>
                <?php else: ?>
                <input name="type" type="hidden" value="<?php echo ($type); ?>"><?php endif; ?>

            <tr>
                <td>导航菜单：</td>
                <td height="35">
                    <select name="nav" style="height:28px;">
                        <option value="1">显示</option>
                        <option value="0">隐藏</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>排序ID：</td>
                <td height="35"><input name="sort" id="sort" type="text" class="FormSmall" style="width: 50px;">
                    <span style="color:#F00; font-size:12px;">*必填</span>
                </td>
            </tr>
            <tr class="icon_tr">
                <td>缩略图：</td>
                <td height="35">
                    <input type="file" name="file" id="file"/>
                </td>
            </tr>
            <?php if($type == 'link'): ?><style type="text/css"> .icon_tr{display: none;} .li_link{color:#004A98}</style><?php endif; ?>

            <?php if(($type) != "link"): ?><tr>
                    <td>URL优化：</td>
                    <td height="35"><input name="url" type="text" class="FormSmall"> 
                    <a title='URL只能是字母、数字或-' style="margin-left: 5px;" href="#">
                        <img src="../Public/images/help.gif">
                    </a>
                </td>
                </tr>
                <tr>
                    <td>SEO标题：</td>
                    <td height="35">
                        <?php if($pid == 0): ?><input name="title" type="text" class="FormSmall seo_title">
                            <?php else: ?>
                            <input name="title" type="text" class="FormSmall" value=""><?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <td>SEO关键字：</td>
                    <td height="35"><input name="keywords" type="text" class="FormSmall" style="width: 320px;"></td>
                </tr>
                <tr>
                    <td>SEO描述：</td>
                    <td height="110"><textarea name="description" class="FormSmall" style="width: 450px; height: 80px;"></textarea>
                    </td>
                </tr><?php endif; ?>


            <?php if($type == 'page'): ?><style>.li_page{color:#004A98}</style>
                <tr>
                    <td>单页内容：</td>
                    <td>
                        <textarea name="contents" id="contents" style="width:745px; height:360px; margin:8px 0;"></textarea>
                    </td>
                </tr><?php endif; ?>

        </table>
    </DIV>

    <table width="100%">
            <tr>
                <td width="9%" height="55" align="center">
                </td>
                <td height="55" align="left">
                    <input type="submit" value="提交" class="bginput">&nbsp;&nbsp;
                    <input name="reset" type="reset" class="bginput" value="重置"/>
                    <input name="pid" type="hidden" value="<?php echo ($pid); ?>">
                </td>
            </tr>        
    </table>
</form>
</body>
</html>