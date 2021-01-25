<?php if (!defined('THINK_PATH')) exit(); if($type == 0): ?><div class="ssome">
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="ssomes">
            <div class="ss" style="background:url('__ROOT__/Uploads/<?php echo ($vo["icon"]); ?>') 0 0 / 100% 100% no-repeat">
                <a class="nav_a nav_<?php echo ($vo["url"]); ?>" href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><?php echo ($vo["name"]); ?></a>
            </div>
            <a style="margin:20px 0px;font-size:16px;" class="nav_a nav_<?php echo ($vo["url"]); ?>" href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><?php echo ($vo["name"]); ?></a>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
<?php else: endif; ?>