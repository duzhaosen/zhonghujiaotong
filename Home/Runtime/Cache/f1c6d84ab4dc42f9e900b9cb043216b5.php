<?php if (!defined('THINK_PATH')) exit();?><div class="new">
    <div class="nleft">
        <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="new/<?php echo ($vo["url"]); ?>">
            <div class="blocks">
                <div class="l">
                    <div><?php echo (date("d",$vo["time"])); ?></div>
                    <div><?php echo (date("Y-m",$vo["time"])); ?></div>
                </div>
                <div class="r">
                    <div class="title"><?php echo ($vo["title"]); ?></div>
                    <div class="des"><?php echo ($vo["description"]); ?></div>
                </div>
            </div>
            </a><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
    <div class="nright"></div>
</div>