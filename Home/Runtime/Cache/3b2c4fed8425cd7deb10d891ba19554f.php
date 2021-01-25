<?php if (!defined('THINK_PATH')) exit();?><div class="car">
    <?php if(is_array($list)): $k = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k; if($k % 2 == 0): ?><div class="carlist">
            <div class="carleft">
                <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><img src="__ROOT__/Uploads/<?php echo ($vo["icon"]); ?>" alt="">
                </a>
            </div>
            <div class="carright">
                <div class="neirong">
                    <div class="title"><?php echo ($vo["name"]); ?></div>
                    <div class="des">
                        <?php if($vo["name"] == '政策支持'): ?><div class="neizczc">
                                <a href="/new/new-74-502.html">河北省人民政府 关于进一步加强道路交通安全工作的 实 施 意 见</a>
                                <a href="/new/new-72-798.html">转载》国务院关于加强道路交通安全工作的意见国发（2012）30号文件</a>
                            </div>
                        <?php else: ?>
                        <?php echo ($vo["contents"]); endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php else: ?>
        <div class="carlist">
            <div class="carleft">
                <div class="neirong">
                    <div class="neirong">
                        <div class="title"><?php echo ($vo["name"]); ?></div>
                        <div class="des">
                            <?php if($vo["name"] == '政策支持'): ?><div class="neizczc">
                                    <a href="/new/new-74-502.html">河北省人民政府 关于进一步加强道路交通安全工作的 实 施 意 见</a>
                                    <a href="/new/new-72-798.html">转载》国务院关于加强道路交通安全工作的意见国发（2012）30号文件</a>
                                </div>
                            <?php else: ?>
                            <?php echo ($vo["contents"]); endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carright">
                <a href="<?php echo W('Listhref',array('url'=>$vo['url'],'id'=>$vo['id'],'link'=>$vo['link']));?>"><img src="__ROOT__/Uploads/<?php echo ($vo["icon"]); ?>" alt="">
                </a>            
            </div>
        </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
</div>