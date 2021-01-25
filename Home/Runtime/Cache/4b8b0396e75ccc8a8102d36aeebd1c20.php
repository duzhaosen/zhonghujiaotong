<?php if (!defined('THINK_PATH')) exit(); if($photo): if(is_array($photo)): $i = 0; $__LIST__ = array_slice($photo,0,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
			<a href="<?php if($vo["link"] == ''): echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Photo')); else: echo ($vo["link"]); endif; ?>">
				<span><img src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>"></span>
				<h4><?php echo (mb_substr($vo["name"],0,120,'utf-8')); ?></h4>
				<p class="hide"><?php echo (mb_substr($vo["description"],0,9999,'utf-8')); ?></p>
      		</a>
      	</div><?php endforeach; endif; else: echo "" ;endif; endif; ?>