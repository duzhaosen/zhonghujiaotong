<?php if (!defined('THINK_PATH')) exit();?><!-- mobile -->
<div class="sidebar">
    <a href="javascript:;" class="menu_btn">菜单</a>
    <div class="grey_back" style="display: none;"><span></span></div>
    <div class="sidebar_wrap">
      <div id="side-menu" class="side-menu white">
        <!-- 搜索 -->
        <div class="searchformzone">
            <form id="searchform_nav" method="get" action="<?php echo U('Search/index');?>">
                <div class="searchform">
                    <input type="text" name="name" class="input" value="请输入产品关键字" onblur="if(this.value.length<1)this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value=''"/>
                </div>
                <div class="search_submit">
                  <a href="javascript:searchform_nav.submit();">搜索</a>
                </div>
            </form>
        </div>

        <ul id="side-list">
         <?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="snav1"><a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><?php echo ($vo["name"]); ?></a>
              <ul class="submenu">
              <?php if(is_array($snav)): $i = 0; $__LIST__ = $snav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$svo): $mod = ($i % 2 );++$i; if(($svo["pid"]) == $vo["id"]): ?><li class="snav2"><a href="<?php echo W('Listhref',array('url'=>$svo['url'],'id'=>$svo['id'],'link'=>$svo['link']));?>"><?php echo ($svo["name"]); ?></a></li>
                    <ul class="thimenu">
                    <?php if(is_array($snav)): $i = 0; $__LIST__ = $snav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tvo): $mod = ($i % 2 );++$i; if(($tvo["pid"]) == $svo["id"]): ?><li class="snav2"><a href="<?php echo W('Listhref',array('url'=>$tvo['url'],'id'=>$tvo['id'],'link'=>$tvo['link']));?>"><?php echo ($tvo["name"]); ?></a></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>
              </ul>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
      </div>    
    </div>
</div>

<script>
// mobile
$(document).ready(function () {
    var isMenuOpen = false;

    $('.menu_btn').click(function () {
        if (isMenuOpen == false) {
            $(".sidebar_wrap").clearQueue().animate({
                right: '0px'
            })
            $(".grey_back").fadeIn('fast');
            $(this).fadeOut(200);
            $("body").css("overflow","hidden");
            isMenuOpen = true;
        }
    });
    $('.grey_back').click(function () {
        if (isMenuOpen == true) {
            $(".sidebar_wrap").clearQueue().animate({
                right: '-220px'
            })
            $(".grey_back").fadeOut('fast');
            $(this).fadeOut(200);
            $(".menu_btn").fadeIn(300);
            $("body").css("overflow","auto");
            isMenuOpen = false;
        }
    });
});
 
$(function(){
  $("#side-menu").jqueryAccordionMenu();
});
</script>