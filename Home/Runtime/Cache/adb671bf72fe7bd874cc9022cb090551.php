<?php if (!defined('THINK_PATH')) exit();?><div class="buchang">
    <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="bulist">
            <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>">

            <img src="__ROOT__/Uploads/<?php echo ($vo["icon"]); ?>" alt="">
            <div class="ss"><?php echo ($vo["name"]); ?></div>
            </a>
        </div>
        <?php if($k + 1 == 3): ?><div class="buTeshu">
                <div class="title">补偿流程</div>
                <div class="title2">中互交通运输有限公司</div>
                <div class="title3">用心服务 贴心关怀</div>
            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div>