/** aboc **/
$(function(){

    $(".upload_file").click(function(){
        var url = $(this).data("url");
        var download = $(this).data("download") || 0;
        var callback = $(this).data("callback") || null;
        create_upload_file(url,download,callback);
        $("#upload_file_input").click();

        return false;
    });

    $("body").delegate("#upload_file_input","change",function(){
        if($(this).val()!=""){
            $("#upload_form").submit();
        }
    });

});


function create_upload_file(url,download,callback) {
    if($("#upload_form_div").length > 0) {
        $("#upload_form").attr("action",url);
        $("#form_download").val(download?1:0);
        $("#form_callback").val(callback);
        return;
    }
    var str = ['<div style="display: none" id="upload_form_div" >',
        '  <form action="'+url+'" id="upload_form" target="upload_iframe" enctype="multipart/form-data" method="post">',
        '    <input type="file"  name="upload_file_input" id="upload_file_input"/>',
        '    <input name="aboc" value="1" type="hidden"/>',
        '    <input name="download" id="form_download" value="'+(download?1:0)+'" type="hidden"/>',
        '    <input name="callback" id="form_callback" value="'+callback+'" type="hidden"/>',
        '  </form>',
        '  <iframe src="about:blank" id="upload_idframe" name="upload_iframe" frameborder="0" height="0" width="0"></iframe>',
        '</div>'].join("");
    $("body").append(str);
}

function upload_photo(d){
    if (d.err !=""){
        alert(d.err)
    } else {
        console.info(d)
        var str = '<div class="mr_10 clearfix  bigimg_all"><img class="upload_img left" src="'+d.msg.thumb+'" width="60" height="60"/>\n' +
            '            <input name="bigimg[]" value="'+d.msg.savename+'|'+d.msg.name+'" type="hidden"/>\n' +
            '            <a href="#" class=\'del del_img left\'" title="删除图片"></a>\n' +
            '          </div>';
        $("#big_image_list").append(str);
    }
}


function upload_download(d){
    if (d.err !=""){
        alert(d.err)
    } else {
        console.info(d)
        var str = '<div class="mr_10 clearfix  bigimg_all"><img class="upload_img left" src="'+d.msg.thumb+'" alt="'+d.msg.name_de+'" width="60" height="60"/>\n' +
            '            <input name="download[]" value="'+d.msg.savename+'|'+d.msg.name+'" type="hidden"/>\n' +
            '            <a href="#" class=\'del del_img left\'" title="删除附件"></a>\n' +
            '          </div>';
        $("#download_list").append(str);
    }
}