<?php if (!defined('THINK_PATH')) exit();?><!--客服面板-->
<?php if(C("is_online")!= 0): ?><div id="leftsead">
<ul>
<!--在线QQ-->
<?php if(C("qq_account")!= ''): if(is_array($online_qq)): foreach($online_qq as $key=>$vo): ?><li class="qq_li">
        <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($online_qq["$key"]); ?>&site=qq&menu=yes"><span class="list"><?php echo ($key); ?></span></a>
      </li><?php endforeach; endif; endif; ?>
<!--在线MSN-->  
<?php if(C("msn_account")!= ''): if(is_array($online_msn)): foreach($online_msn as $key=>$vo): ?><li class="msn_li">
      <a href="msnim:chat?contact=<?php echo ($online_msn["$key"]); ?>" target="blank"><span class="list"><?php echo ($key); ?></span></a>
     </li><?php endforeach; endif; endif; ?>
<!--在线SKYPE--> 
<?php if(C("skype_account")!= ''): if(is_array($online_skype)): foreach($online_skype as $key=>$vo): ?><li class="skype_li">
      <a href="skype:<?php echo ($online_skype["$key"]); ?>?chat"><span class="list"><?php echo ($key); ?></span></a>
    </li><?php endforeach; endif; endif; ?>
<!--淘宝旺旺--> 
<?php if(C("taobao_account")!= ''): if(is_array($online_taobao)): foreach($online_taobao as $key=>$vo): ?><li class="w_li">
      <a target=blank href="http://amos.im.alisoft.com/msg.aw?v=2&uid=<?php echo ($online_taobao["$key"]); ?>&site=cntaobao&s=1&charset=utf-8"><span class="list">淘宝旺旺</span></a>
     </li><?php endforeach; endif; endif; ?>
<!--旺旺国内版--> 
<?php if(C("1688_account")!= ''): if(is_array($online_1688)): foreach($online_1688 as $key=>$vo): ?><li class="ww_li">
      <a target="_blank" href="http://amos.alicdn.com/msg.aw?v=2&uid=<?php echo ($online_1688["$key"]); ?>&site=cnalichn&s=10&charset=UTF-8" ><span class="list">旺旺国内版</span></a>
    </li><?php endforeach; endif; endif; ?>
<!--旺旺国际版-->
<?php if(C("alibaba_account")!= ''): if(is_array($online_alibaba)): foreach($online_alibaba as $key=>$vo): ?><li class="www_li">
      <a class="alitalk-link" data-uid="<?php echo ($online_alibaba["$key"]); ?>" target="_blank" href="http://amos.alicdn.com/msg.aw?v=2&uid=<?php echo ($online_alibaba["$key"]); ?>&site=enaliint&s=22&charset=UTF-8"><span class="list"><?php echo ($key); ?></span></a>
     </li><?php endforeach; endif; endif; ?>
  <li class="feedback hide">
    <a href="/feedback"><span class="list">在线留言</span></a>
  </li>

  <li class="code_li hide">
    <a href="javascript:;"><span class="list">扫二维码</span><div class="code hide"><img  src="__ROOT__/Uploads/<?php echo (C("web_qrcode")); ?>"></div></a>
  </li>
  <li class="top_li">
    <a id="top_btn" href="javascript:;"><span class="list">返回顶部</span></a>
  </li>
</ul>
</div>

 <script type="text/javascript">
$(document).ready(function(){
  $("#leftsead a").hover(function(){  
      $(this).children(".list").animate({marginRight:'0px'},'slow'); 
      $(this).find(".code").show(200);  
  },function(){   
      $(this).children(".list").animate({marginRight:'-140px'},'slow'); 
      $(this).find(".code").hide(200); 
  });
  $("#top_btn").click(function(){if(scroll=="off") return;$("html,body").animate({scrollTop: 0}, 300);});
});
</script><?php endif; ?>