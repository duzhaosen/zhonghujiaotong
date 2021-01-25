<?php if (!defined('THINK_PATH')) exit();?><ul class="slides">
	<?php if(is_array($mflash)): $i = 0; $__LIST__ = $mflash;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
			<a href="<?php echo ($vo["link"]); ?>" target="_self"><img src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" alt=""></a>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>