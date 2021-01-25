  var checkall=document.getElementsByName("dell[]");
    function select(){                          //全选
      for(var $i=0;$i<checkall.length;$i++){
        checkall[$i].checked=true;
      }
    }
    function fanselect(){                        //反选
      for(var $i=0;$i<checkall.length;$i++){
        if(checkall[$i].checked){
          checkall[$i].checked=false;
        }else{
          checkall[$i].checked=true;
        }
      }
    }         
    function noselect(){                          //全不选
      for(var $i=0;$i<checkall.length;$i++){
        checkall[$i].checked=false;
      }
    }

    $(function () {
        $("body").delegate(".set_featured","click",function(){
            var url = $(this).prop("href");
            var featured = $(this).data("featured");
            var o = this;
            $.getJSON(url,{featured:featured==1?0:1},function(d){
                if(d.status == 1){
                    if(featured == 1){
                        //之前是推荐了的
                        $(o).data("featured",0).html("<span class=\"gray\">未推荐</span>");
                    } else {

                        $(o).data("featured",1).html("<span class=\"red\">已推荐</span>");
                    }
                } else {
                    alert("推荐失败");
                }
            })
            return false;
        })
    })