<?php if (!defined('THINK_PATH')) exit();?><ul class="nav clearfix">
  <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="nav_li"><a class="nav_a nav_<?php echo ($vo["url"]); ?>" href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><?php echo ($vo["name"]); ?></a>
        <ul class="subnav">
          <?php if(is_array($snav)): $i = 0; $__LIST__ = $snav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i; if(($svo["pid"]) == $vo["id"]): ?><li class="subnav_li"><a  class="subnav_a"  href="<?php echo W('Listhref',array('url'=>$svo['url'],'id'=>$svo['id'],'link'=>$svo['link']));?>"><?php echo ($svo["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </ul> 
    </li><?php endforeach; endif; else: echo "" ;endif; ?>
</ul>

<script>
    var href = window.location;
    if(href.pathname == "/"){
        $(".nav li:eq(0)").addClass("curr");
    } else {
        var find = false;
        $(".nav li a.nav_a").each(function(){
            console.info($(this).attr("href") , href.pathname);
           if($(this).attr("href") == href.pathname){
               find = true;
               $(this).closest("li").addClass("curr");
               console.log($("ul", $(this)))
               return false;
           }
        });
        if(!find){
            $(".nav li a.subnav_a").each(function(){
                if($(this).attr("href") == href.pathname){
                    find = true;
                    $(this).addClass("curr");
                    $(this).closest(".nav_li").addClass("curr");
                    return false;
                }
            });
        }
    }
</script>