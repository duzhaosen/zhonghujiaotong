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


$(document).ready(function (){ 
  //替换br
    var ad_p = $(".ad p");
    for (var i = 0; i < ad_p.length; i++) {
        var temp = $(ad_p[i]).text().replace(/\n/g,'<br/>');
        $(ad_p[i]).html(temp);    
    };

}); 
