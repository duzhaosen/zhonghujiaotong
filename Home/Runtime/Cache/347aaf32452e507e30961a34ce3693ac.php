<?php if (!defined('THINK_PATH')) exit(); if(is_array($product)): $i = 0; $__LIST__ = array_slice($product,0,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="item">
   		<a href="<?php if($vo["link_url"] == ''): echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'Product')); else: echo ($vo["link_url"]); endif; ?>" title="<?php echo ($vo["name"]); ?>">
   			<span><img name="picautozoom" src="__ROOT__/Uploads/<?php echo ($vo["thumb"]); ?>" alt="<?php echo ($vo["name"]); ?>"/></span>
   			<h4><?php echo (mb_substr($vo["name"],0,80,'utf-8')); ?></h4>
   			<p>查看详情+</p>
   		</a>
   	</div><?php endforeach; endif; else: echo "" ;endif; ?>