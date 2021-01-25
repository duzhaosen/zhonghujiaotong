<?php if (!defined('THINK_PATH')) exit();?><ul class="slides">
	<?php if(is_array($flash)): $i = 0; $__LIST__ = $flash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<a href="<?php echo ($vo["link"]); ?>" target="_self">
                <img style="width:100%;height:700px;object-fit: cover;" src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" alt="">
            </a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>