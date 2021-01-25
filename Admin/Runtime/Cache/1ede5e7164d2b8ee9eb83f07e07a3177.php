<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台管理系统</title>
<link rel="stylesheet" type="text/css" href="../Public/css/index.css" />
<SCRIPT src="../Public/js/common.js" type="text/javascript"></SCRIPT>
<SCRIPT src="../Public/js/quickView.js" type="text/javascript"></SCRIPT>
</HEAD>
<BODY>
  <DIV class="BodyRight">
    <DIV class="PageCon">
      <TABLE width="100%" border="0" cellspacing="0" cellpadding="0" class="set_con">
        <TBODY>
          <TR>
            <TD>
              <TABLE width="100%" border="0" cellspacing="0" cellpadding="0">
                <TBODY>
                  <TR>
                    <TD width="85" align="center" class="Move" id="setting1">
                      <A onClick="javascript:settingselect('1')" 
            href="javascript:void(0);">基本设置</A>
                    </TD>
                    <TD width="85" align="center" class="Out" id="setting2">
                      <A onClick="javascript:settingselect('2')" 
            href="javascript:void(0);">显示设置</A>
                    </TD>
                    <TD width="85" align="center" class="Out" id="setting3">
                      <A onClick="javascript:settingselect('3')" 
            href="javascript:void(0);">邮件设置</A>
                    </TD>
                    <TD width="85" align="center" class="Out" id="setting4">
                      <A onClick="javascript:settingselect('4')" 
            href="javascript:void(0);">客服设置</A>
                    </TD>
                    <TD align="left"></TD>
                  </TR>
                </TBODY>
              </TABLE>
            </TD>
          </TR>
        </TBODY>
      </TABLE>
      <FORM action="<?php echo U('upconfig');?>" method="post" name="myform" id="myform" enctype="multipart/form-data">
        <DIV class="PageContent">
          <TABLE width="100%" class="ListCategory" border="0" cellspacing="0" cellpadding="0">
            <TBODY>
              <TR>
                <TD style="border: currentColor;">
                  <DIV id="settingBox1">
                    <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
                      <TBODY>
                        <TR class="firstalt">
                          <TD width="120px" >
                            <SPAN>公司名称</SPAN>
                          </TD>
                          <TD>
                            <input name="web_name" value="<?php echo (C("web_name")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                        </TR>
                        <TR class="secondalt">
                          <TD >
                            <SPAN>SEO标题</SPAN>
                          </TD>
                          <TD>
                            <input name="seo_title" value="<?php echo (C("seo_title")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                        </TR>
                        <TR class="firstalt">
                          <TD >
                            <SPAN>SEO关键字</SPAN>
                          </TD>
                          <TD>
                            <input name="seo_keywords" value="<?php echo (C("seo_keywords")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                        </TR>
                        <TR class="secondalt">
                          <TD >
                            <SPAN>SEO描述</SPAN>
                          </TD>
                          <TD >
                            <textarea name="seo_description" class="FormSmall" style="width: 450px; height: 80px;"><?php echo (C("seo_description")); ?></textarea>
                            </TD>
                          </TR>
                          <TR class="firstalt">
                            <TD >
                              <SPAN>网站LOGO</SPAN>
                            </TD>
                            <TD>
                              <?php if(C("web_logo")== ''): ?><input type='file' name='web_logo'>
                                <?php else: ?>
                                <img class="upload_img left" src="__ROOT__/Uploads/<?php echo (C("web_logo")); ?>" height="35"/>
                                <a class="del_img left" href="__APP__?m=config&a=dellogo&name=<?php echo (C("web_logo")); ?>&type=logo"></a><?php endif; ?>
                            </TD>
                          </TR>
                          <TR class="firstalt">
                            <TD >
                              <SPAN>手机版LOGO</SPAN>
                            </TD>
                            <TD>
                              <?php if(C("m_logo")== ''): ?><input type='file' name='m_logo'>
                                <?php else: ?>
                                <img class="upload_img left" src="__ROOT__/Uploads/<?php echo (C("m_logo")); ?>" height="35"/>
                                <a class="del_img left" href="__APP__?m=config&a=dellogo&name=<?php echo (C("m_logo")); ?>&type=mlogo"></a><?php endif; ?>
                            </TD>
                          </TR>
                          <TR class="secondalt">
                            <TD >
                              <SPAN>网站域名</SPAN>
                            </TD>
                            <TD class="weburl">
                              <input name="web_url" value="<?php echo (C("web_url")); ?>" type="text" class="FormSmall" style="width: 320px;">
                            </TD>
                          </TR>
                          <TR class="firstalt">
                            <TD >
                              <SPAN>联系人</SPAN>
                            </TD>
                            <TD>
                              <input name="web_contacts" value="<?php echo (C("web_contacts")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                          </TR>
                          <TR class="secondalt">
                            <TD >
                              <SPAN>公司邮箱</SPAN>
                            </TD>
                            <TD>
                              <input name="web_email" value="<?php echo (C("web_email")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                          </TR>
                          <TR class="firstalt">
                            <TD >
                              <SPAN>联系电话</SPAN>
                            </TD>
                            <TD>
                              <input name="web_tel" value="<?php echo (C("web_tel")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                          </TR>
                          <TR class="firstalt">
                            <TD >
                              <SPAN>联系手机</SPAN>
                            </TD>
                            <TD>
                              <input name="web_phone" value="<?php echo (C("web_phone")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                          </TR>
                          <TR class="firstalt">
                            <TD >
                              <SPAN>公司传真</SPAN>
                            </TD>
                            <TD>
                              <input name="web_fax" value="<?php echo (C("web_fax")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                          </TR>
                          <TR class="firstalt">
                            <TD >
                              <SPAN>联系地址</SPAN>
                            </TD>
                            <TD>
                              <input name="web_add" value="<?php echo (C("web_add")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                          </TR>
                          <TR class="firstalt">
                            <TD >
                              <SPAN>备案号</SPAN>
                            </TD>
                            <TD>
                              <input name="web_icp" value="<?php echo (C("web_icp")); ?>" type="text" class="FormSmall" style="width: 320px;"></TD>
                          </TR>
                          <TR class="secondalt">
                            <TD >
                              <SPAN>统计代码</SPAN>
                            </TD>
                            <TD>
                              <textarea name="web_count" class="FormSmall" style="width: 450px; height:40px;"><?php echo (C("web_count")); ?></textarea>
                              </TD>
                            </TR>
                            <TR class="firstalt">
                              <TD >
                                <SPAN>第三方脚本</SPAN>
                              </TD>
                              <TD>
                                <textarea name="web_share" class="FormSmall" style="width: 450px; height:40px;"><?php echo (C("web_share")); ?></textarea>
                                </TD>
                              </TR>
                              <TR class="secondalt">
                                <TD >
                                  <SPAN>版权信息</SPAN>
                                </TD>
                                <TD>
                                  <textarea name="web_copyright" class="FormSmall" style="width: 450px; height:40px;"><?php echo (C("web_copyright")); ?></textarea>
                                  </TD>
                                </TR>

                              </TBODY>
                            </TABLE>
                          </DIV>

                          <DIV class="close" id="settingBox2">
                            <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
                              <TBODY>
                                <TR class="firstalt">
                                <TD width="150px">
                                  <SPAN>首页TAGS标签数量</SPAN>
                                </TD>
                                <TD>
                                  <input name="index_tags" value="<?php echo (C("index_tags")); ?>" type="text" class="FormSmall" style="width:100px;"> 个</TD>
                              </TR>
                              <TR class="secondalt">
                                <TD >
                                  <SPAN>列表页产品数量</SPAN>
                                </TD>
                                <TD>
                                  <input name="list_pronum" value="<?php echo (C("list_pronum")); ?>" type="text" class="FormSmall" style="width:100px;"> 个 / 页</TD>
                              </TR>
                              <TR class="firstalt">
                                <TD >
                                  <SPAN>列表页新闻数量</SPAN>
                                </TD>
                                <TD>
                                  <input name="list_newnum" value="<?php echo (C("list_newnum")); ?>" type="text" class="FormSmall" style="width:100px;"> 条 / 页</TD>
                              </TR>
                              <TR class="secondalt">
                                <TD >
                                  <SPAN>列表页图片数量</SPAN>
                                </TD>
                                <TD>
                                  <input name="list_photonum" value="<?php echo (C("list_photonum")); ?>" type="text" class="FormSmall" style="width:100px;"> 个 / 页</TD>
                              </TR>
                              <TR class="firstalt">
                                <TD >
                                  <SPAN>列表页下载数量</SPAN>
                                </TD>
                                <TD>
                                  <input name="list_downnum" value="<?php echo (C("list_downnum")); ?>" type="text" class="FormSmall" style="width:100px;"> 个 / 页</TD>
                              </TR>
                        </TBODY>
                      </TABLE>
                    </DIV>

                    <DIV class="close" id="settingBox3">
                      <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
                        <TBODY>
                          <TR class="firstalt">
                            <TD width="150px" >
                              <SPAN>是否开启邮件通知</SPAN>
                            </TD>
                            <TD>
                              <input name="is_email" type="radio" value="1" <?php if(C("is_email")== 1): ?>checked="checked"<?php endif; ?>
                            > 是 &nbsp;
                            <input name="is_email" type="radio" value="0" <?php if(C("is_email")== 0): ?>checked="checked"<?php endif; ?>
                          > 否
                        </TD>
                      </TR>
                      <TR class="secondalt">
                        <TD >
                          <SPAN>服务器端口</SPAN>
                        </TD>
                        <TD>
                          <input name="email_port" value="<?php echo (C("email_port")); ?>" type="text" class="FormSmall" style="width: 100px;"></TD>
                      </TR>
                      <TR class="firstalt">
                        <TD >
                          <SPAN>邮箱服务器地址</SPAN>
                        </TD>
                        <TD>
                          <input name="email_host" value="<?php echo (C("email_host")); ?>" type="text" class="FormSmall" style="width: 250px;"></TD>
                      </TR>
                      <TR class="secondalt">
                        <TD >
                          <SPAN>邮箱账号</SPAN>
                        </TD>
                        <TD>
                          <input name="email_username" value="<?php echo (C("email_username")); ?>" type="text" class="FormSmall" style="width: 250px;"></TD>
                      </TR>
                      <TR class="firstalt">
                        <TD >
                          <SPAN>邮箱密码</SPAN>
                        </TD>
                        <TD>
                          <input name="email_password" value="<?php echo (C("email_password")); ?>" type="password" class="FormSmall" style="width: 250px;"></TD>
                      </TR>
                      <TR class="secondalt">
                        <TD >
                          <SPAN>发送人名称</SPAN>
                        </TD>
                        <TD>
                          <input name="email_fromName" value="<?php echo (C("email_fromName")); ?>" type="text" class="FormSmall" style="width: 250px;"></TD>
                      </TR>
                      <TR class="firstalt">
                        <TD >
                          <SPAN style="color:#F30">接收通知的邮箱</SPAN>
                        </TD>
                        <TD>
                          <input name="email_to" value="<?php echo (C("email_to")); ?>" type="text" class="FormSmall" style="width: 250px;"></TD>
                      </TR>
                      <TR class="secondalt">
                        <TD >
                          <SPAN>发送方式</SPAN>
                        </TD>
                        <TD>
                          <select name="send_way" style="height:28px;">
                            <option value="1" <?php if((C("send_way")) == "1"): ?>selected="selected"<?php endif; ?>
                            >smtp
                          </option>
                          <option value="2" <?php if((C("send_way")) == "2"): ?>selected="selected"<?php endif; ?>
                          >mail
                        </option>
                        <option value="3" <?php if((C("send_way")) == "3"): ?>selected="selected"<?php endif; ?>
                        >phpmailer
                      </option>
                    </select>
                  </TD>
                </TR>
              </TBODY>
            </TABLE>
          </DIV>

          <DIV class="close" id="settingBox4">
            <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
                <TR class="firstalt">
                  <TD style="color:#F30;">多个账号请用英文半角“,”隔开</TD>
                </TR>
              </TBODY>
            </TABLE>
            <TABLE width="100%" class="Font" border="0" cellspacing="0" cellpadding="0">
              <TBODY>
                <TR class="secondalt">
                  <TD width="180px" >
                    <SPAN>是否开启在线客服</SPAN>
                  </TD>
                  <TD>
                    <input name="is_online" type="radio" value="1" <?php if(C("is_online")== 1): ?>checked="checked"<?php endif; ?>
                  > 是 &nbsp;
                  <input name="is_online" type="radio" value="0" <?php if(C("is_online")== 0): ?>checked="checked"<?php endif; ?>
                > 否
              </TD>
            </TR>
            <TR class="secondalt">
              <TD >
                <SPAN>MSN号码</SPAN>
              </TD>
              <TD>
                <input name="msn_account" value="<?php echo (C("msn_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="firstalt">
              <TD >
                <SPAN>MSN显示名称</SPAN>
              </TD>
              <TD>
                <input name="msn_name" value="<?php echo (C("msn_name")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="secondalt">
              <TD >
                <SPAN>Skype帐号</SPAN>
              </TD>
              <TD>
                <input name="skype_account" value="<?php echo (C("skype_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="firstalt">
              <TD >
                <SPAN>Skype显示名称</SPAN>
              </TD>
              <TD>
                <input name="skype_name" value="<?php echo (C("skype_name")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="secondalt">
              <TD >
                <SPAN>QQ号码</SPAN>
              </TD>
              <TD>
                <input name="qq_account" value="<?php echo (C("qq_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="firstalt">
              <TD >
                <SPAN>QQ显示名称</SPAN>
              </TD>
              <TD>
                <input name="qq_name" value="<?php echo (C("qq_name")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="secondalt">
              <TD >
                <SPAN>淘宝旺旺账号</SPAN>
              </TD>
              <TD>
                <input name="taobao_account" value="<?php echo (C("taobao_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="firstalt">
              <TD >
                <SPAN>阿里巴巴(国内版)账号</SPAN>
              </TD>
              <TD>
                <input name="1688_account" value="<?php echo (C("1688_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="secondalt">
              <TD >
                <SPAN>阿里巴巴(国际版)账号</SPAN>
              </TD>
              <TD>
                <input name="alibaba_account" value="<?php echo (C("alibaba_account")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="firstalt">
              <TD >
                <SPAN>阿里巴巴(国际版)名称</SPAN>
              </TD>
              <TD>
                <input name="alibaba_name" value="<?php echo (C("alibaba_name")); ?>" type="text" class="FormSmall" style="width: 350px;"></TD>
            </TR>
            <TR class="firstalt">
              <TD >
                <SPAN>二维码图片</SPAN>
              </TD>
              <TD>
                <?php if(C("web_qrcode")== ''): ?><input type='file' name='web_qrcode'>
                  <?php else: ?>
                  <img class="upload_img left" src="__ROOT__/Uploads/<?php echo (C("web_qrcode")); ?>" width="60" height="60"/>
                  <a class="del_img left" href="__APP__?m=config&a=dellogo&name=<?php echo (C("web_qrcode")); ?>&type=qrcode"></a><?php endif; ?>
              </TD>
            </TR>
          </TBODY>
        </TABLE>
      </DIV>
    </TD>
  </TR>
</TBODY>
</TABLE>
<TABLE width="100%" height="30" style="margin-top: 10px;" border="0" 
cellspacing="0" cellpadding="0">
<TBODY>
  <TR>
    <TD align="left" style="padding-left:117px;">
      <INPUT class="bginput" type="submit" value=" 确定提交 "></TD>
  </TR>
</TBODY>
</TABLE>
</FORM>
</DIV>
</DIV></DIV>
<SCRIPT type="text/javascript">
function emailselect(type) {
  if(type=='smtp'){
    document.getElementById("smtp_host").disabled="";
    document.getElementById("smtp_port").disabled="";
    document.getElementById("smtp_user_name").disabled="";
    document.getElementById("smtp_password").disabled="";
    document.getElementById("smtp_email").disabled="";
  }
  if(type=='mail'){
    document.getElementById("smtp_host").disabled="disabled";
    document.getElementById("smtp_port").disabled="disabled";
    document.getElementById("smtp_user_name").disabled="disabled";
    document.getElementById("smtp_password").disabled="disabled";
    document.getElementById("smtp_email").disabled="disabled";
  } 
}

function settingselect(id){
  document.getElementById('settingBox1').className="close";
  document.getElementById('settingBox2').className="close";
  document.getElementById('settingBox3').className="close";
  document.getElementById('settingBox4').className="close";
  document.getElementById('setting1').className="Out";
  document.getElementById('setting2').className="Out";
  document.getElementById('setting3').className="Out";
  document.getElementById('setting4').className="Out";
  
  document.getElementById('setting'+id).className="Move";
  document.getElementById('settingBox'+id).className="";
}

</SCRIPT>
</BODY>
</html>