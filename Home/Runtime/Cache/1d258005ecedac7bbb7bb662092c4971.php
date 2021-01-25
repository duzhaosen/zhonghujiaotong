<?php if (!defined('THINK_PATH')) exit(); if($new): ?><ul>
    <?php if(is_array($new)): $i = 0; $__LIST__ = array_slice($new,0,null,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
		<a href="<?php echo W('Href',array('url'=>$vo['url'],'id'=>$vo['id'],'type'=>'new'));?>" title="<?php echo ($vo["title"]); ?>">
			<span class="image">		
				<img name="picautozoom" src="__ROOT__/Uploads/<?php echo ($vo["photo"]); ?>"onerror="this.src='../Public/images/error.jpg'" alt="<?php echo ($vo["name"]); ?>"/>
	        </span>
	        <h4 class="news_t"><?php echo (mb_substr($vo["title"],0,50,'utf-8')); ?></h4>
			<div class="desc">
				 <?php echo (mb_substr($vo["description"],0,50,'utf-8')); ?>...
			</div>
			<div class='time hide'><span><?php echo (date('d',$vo["time"])); ?></span><p><?php echo (date('Y-m',$vo["time"])); ?></p></div>
		</a>
	</li><?php endforeach; endif; else: echo "" ;endif; ?>
  </ul><?php endif; ?>