/*微梦企业网站系统PHP版
http://www.wmweb.cc*/

//导航
var timeout         = 500;
var closetimer    = 0;
var ddmenuitem      = 0;

function dropmenu_open(){
  dropmenu_canceltimer();
  dropmenu_close();
  ddmenuitem = $(this).find('ul').eq(0).css('display', 'block');
}

function dropmenu_close(){ 
  if(ddmenuitem) ddmenuitem.css('display', 'none');
}

function dropmenu_timer(){ 
  closetimer = window.setTimeout(dropmenu_close, timeout);
}

function dropmenu_canceltimer(){ 
  if(closetimer){ 
    window.clearTimeout(closetimer);
    closetimer = null;
  }
}

$(document).ready(function(){
  $('.nav > li').bind('mouseover', dropmenu_open);
  $('.nav > li').bind('mouseout',  dropmenu_timer);
});

document.onclick = dropmenu_close;


//pc侧栏+二级展开
(function($) {
    $.fn.menu = function(b) {
        var c,
        item,
        httpAdress;
        b = jQuery.extend({
            Speed: 220,
            autostart: 1,
            autohide: 1
        },
        b);
        c = $(this);
        item = c.children("ul").parent("li").children("em");
        httpAdress = window.location;
        item.addClass("inactive");
        function _item() {
            var em = $(this);
            if (b.autohide) {
                em.parent().parent().find(".active").parent("li").children("ul").slideUp(b.Speed / 1.2, 
                function() {
                    $(this).parent("li").children("em").removeAttr("class");
                    $(this).parent("li").children("em").attr("class", "inactive")
                })
            }
            if (em.attr("class") == "inactive") {
                em.parent("li").children("ul").slideDown(b.Speed, 
                function() {
                    em.removeAttr("class");
                    em.addClass("active")
                })
            }
            if (em.attr("class") == "active") {
                em.removeAttr("class");
                em.addClass("inactive");
                em.parent("li").children("ul").slideUp(b.Speed)
            }
        }
        item.unbind('click').click(_item);
        if (b.autostart) {
            c.children("em").each(function() {
                if (this.href == httpAdress) {
                    $(this).parent("li").parent("ul").slideDown(b.Speed, 
                    function() {
                        $(this).parent("li").children(".inactive").removeAttr("class");
                        $(this).parent("li").children("em").addClass("active")
                    })
                }
            })
        }
    }
})(jQuery);


function left_active(){      
    if(document.getElementById("cat_active"+catid)!=null){
        document.getElementById("cat_active"+catid).className="category_active"       
    }else{
        var tid=document.getElementById('side_menu').getElementsByTagName('a')[0].id;
        document.getElementById(tid).className="category_current";
    }

    if(document.getElementById("small"+catid)!=null){
        document.getElementById("small"+catid).style.display="block";
    }else{
        if(document.getElementById("small"+pid)!=null)document.getElementById("small"+pid).style.display="block";     
    }
}
window.onload=left_active;


$(document).ready(function (){ 
  //pc侧栏+二级展开
  $(".sec_li").parents(".sec_ul").siblings("em").show();
  $(".side_menu li").menu();

  //替换br
    var ad_p = $(".ad p");
    for (var i = 0; i < ad_p.length; i++) {
        var temp = $(ad_p[i]).text().replace(/\n/g,'<br/>');
        $(ad_p[i]).html(temp);    
    };

}); 

$(window).bind("load",function(){
    //适配图片高度
    var imgH = $(".imgH img").eq(0).height();
    $(".imgH img").height(imgH);		
  });