<?php if (!defined('THINK_PATH')) exit(); if(count($bigclass) == 0): else: ?>
<div id="left">
<h2><?php echo ($parentname); ?></h2>
<div class="side_menu" id="side_menu">
  <ul>
    <?php if(is_array($bigclass)): $i = 0; $__LIST__ = $bigclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($vo["nav"] == '0'): else: ?>
        <li class="fir_li"><a class="inactive" id="cat_active<?php echo ($vo["id"]); ?>" href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><?php echo ($vo["name"]); ?></a><em></em>
          <ul id="small<?php echo ($vo["id"]); ?>" class="sec_ul">
            <?php if(is_array($smallclass)): $i = 0; $__LIST__ = $smallclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i; if($svo["nav"] == '0'): else: ?>
                <?php if(($svo["pid"]) == $vo["id"]): ?><li class="sec_li"><a id="cat_active<?php echo ($svo["id"]); ?>" href="<?php echo W('Listhref',array('url'=>$svo['url'],'id'=>$svo['id'],'link'=>$svo['link']));?>"><?php echo ($svo["name"]); ?></a></li><?php endif; endif; endforeach; endif; else: echo "" ;endif; ?>
          </ul> 
        </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
  </ul>
</div>

</div><?php endif; ?>