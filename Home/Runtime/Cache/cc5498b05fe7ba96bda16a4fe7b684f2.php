<?php if (!defined('THINK_PATH')) exit(); if(is_array($ad)): $i = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="ad ad<?php echo ($vo["id"]); ?>" href="<?php echo ($vo["link"]); ?>">
		<span><img src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>" onerror="this.src='../Public/images/error.jpg'" alt="<?php echo ($vo["title"]); ?>"></span>
		<h4><?php echo ($vo["title"]); ?></h4>
		<p><?php echo ($vo["desc"]); ?></p>
	</a><?php endforeach; endif; else: echo "" ;endif; ?>