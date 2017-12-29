lastScrollY=0;
function heartBeat(){ 
var diffY;
if (document.documentElement && document.documentElement.scrollTop)
    diffY = document.documentElement.scrollTop;
else if (document.body)
    diffY = document.body.scrollTop
else
    {/*Netscape stuff*/}
    
//alert(diffY);
percent=.1*(diffY-lastScrollY); 
if(percent>0)percent=Math.ceil(percent); 
else percent=Math.floor(percent); 
document.getElementById("lovexin12").style.top=parseInt(document.getElementById("lovexin12").style.top)+percent+"px";

lastScrollY=lastScrollY+percent; 
//alert(lastScrollY);
}
suspendcode12="<DIV id=\"lovexin12\" style='left:22px;POSITION:absolute;TOP:100px;z-index:100'>";
var recontent='<table align="left" style="margin-left:22px;width:90px" border="0" cellpadding=0 cellspacing=0 height="32">' + 
'<tr>' + 
'<td style="border:0;padding:0;font-size:13px" height="32" ><table style="width:90px" border="0" cellspacing="0" cellpadding="0" height="1">' + 
'<tr>' + 
'<td style="border:0;padding:0;font-size:13px; background:none" height="20"><img src="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/head_229766.gif"  border="0" style="margin:0px; padding:0px;" usemap="#MapMapMap"></td>' + 
'</tr>' + 
'<tr>' + 
'<td style="border:0;padding:0;font-size:13px;padding-left:1px;background:url(http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/center_1_229766.gif) repeat-y;" background="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/center_1_229766.gif" height="19">' + 
'<table style="width:90px"  border="0" align="center" cellpadding="0" cellspacing="0" height="1">' + 
'<tr>' + 
'<td style="border:0;padding:0;background:#CC0000;font-size:13px" height="6"></td>' + 
'</tr>' + 
'<tr>' + 
'<td style="border:0;padding:0;background:#CC0000;font-size:13px" height="1" align="left"><img style="margin:0;padding:0" style="margin:0px; padding:0px;" src="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/center_2_229766.gif"><span style="text-decoration:none;font-size:14px;font-family:宋体;color:#FFFF00;font-weight:700">粉丝咨询台</span></td>' + 
'</tr>' + 
'<tr>' + 
'<td style="border:0;padding:0;background:#CC0000;font-size:13px" height="39">' + 
'<table  border="0" align="left" cellpadding="0" cellspacing="0" style="width:90px">' + 
'<!--begin-->' + 
'<tr>' + 
'<td style="background:#CC0000;border:0;padding-left:0px;margin:0px;padding:0px;" align="left" width="10"><img src="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/center_4_229766.gif" style="margin:0px; padding:0px;"></td>' + 
'<td style="background:#CC0000;border:0;background-color: bgcolor; background-repeat: repeat; background-attachment: scroll; padding:0px;margin:0px;padding-left:4px; background-position: 0%" height="24" align="left">' + 
'<a style="text-decoration:none;" href="tencent://message/?uin=2356804651&Site=在线咨询&Menu=yes" target="blank"><span style="text-decoration:none;font-family:宋体;font-size:12;color:#FFFF00;text-align:left">新浪粉丝</span>' + 
'</td>' + 
'</tr>' + 
'<tr>' + 
'<td style="background:#CC0000;border:0;padding-left:0px;margin:0px;padding:0px;" align="left" width="10"><img src="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/center_4_229766.gif" style="margin:0px; padding:0px;"></td>' + 
'<td style="background:#CC0000;border:0;background-color: bgcolor; background-repeat: repeat; background-attachment: scroll; padding:0px;margin:0px;padding-left:4px; background-position: 0%" height="24" align="left">' + 
'<a style="text-decoration:none;" href="tencent://message/?uin=2356804651&Site=在线咨询&Menu=yes" target="blank"><span style="text-decoration:none;font-family:宋体;font-size:12;color:#FFFF00;text-align:left">腾讯粉丝</span>' + 
'</td>' + 
'</tr>' + 
'<tr>' + 
'<td style="background:#CC0000;border:0;padding-left:0px;margin:0px;padding:0px;" align="left" width="10"><img src="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/center_4_229766.gif" style="margin:0px; padding:0px;"></td>' + 
'<td style="background:#CC0000;border:0;background-color: bgcolor; background-repeat: repeat; background-attachment: scroll; padding:0px;margin:0px;padding-left:4px; background-position: 0%" height="24" align="left">' + 
'<a style="text-decoration:none;" href="tencent://message/?uin=2360222951&Site=在线咨询&Menu=yes" target="blank"><span style="text-decoration:none;font-family:宋体;font-size:12;color:#FFFF00;text-align:left">10万粉丝</span>' + 
'</td>' + 
'</tr>' + 
'<tr>' + 
'<td style="background:#CC0000;border:0;padding-left:0px;margin:0px;padding:0px;" align="left" width="10"><img src="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/center_4_229766.gif" style="margin:0px; padding:0px;"></td>' + 
'<td style="background:#CC0000;border:0;background-color: bgcolor; background-repeat: repeat; background-attachment: scroll; padding:0px;margin:0px;padding-left:4px; background-position: 0%" height="24" align="left">' + 
'<a style="text-decoration:none;" href="tencent://message/?uin=2360222951&Site=在线咨询&Menu=yes" target="blank"><span style="text-decoration:none;font-family:宋体;font-size:12;color:#FFFF00;text-align:left">认证咨询</span>' + 
'</td>' + 
'</tr>' + 
'<tr>' + 
'<td style="background:#CC0000;border:0;padding-left:0px;margin:0px;padding:0px;" align="left" width="10"><img src="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/center_4_229766.gif" style="margin:0px; padding:0px;"></td>' + 
'<td style="background:#CC0000;border:0;background-color: bgcolor; background-repeat: repeat; background-attachment: scroll; padding:0px;margin:0px;padding-left:4px; background-position: 0%" height="24" align="left">' + 
'<a style="text-decoration:none;" href="tencent://message/?uin=844866712&Site=在线咨询&Menu=yes" target="blank"><span style="text-decoration:none;font-family:宋体;font-size:12;color:#FFFF00;text-align:left">微信粉丝</span>' + 
'</td>' + 
'</tr>' + 
'<!--end-->' + 
'</table></td>' + 
'</tr>' + 
'</table></td>' + 
'</tr>' + 
'<tr>' + 
'<td style="border:0;padding:0;font-size:13px" height="1"><img src="http://user4.user.55.la:81/user_pic/qq_pic/2011/10/09/13/end_229766.gif" style="margin:0px; padding:0px;"></td>' + 
'</tr>' + 
'</table>' + 
'</td>' + 
'</tr>' + 
'</table>' + 
'<map name="MapMapMap" onclick="far_close()" style="cursor:handle">' + 
'<area shape="rect" coords="71,8,102,30" href="#">' + 
'</map>';

document.write(suspendcode12); 
document.write(recontent); 
document.write("</div>"); 
window.setInterval("heartBeat()",1);

function far_close()
{
	document.getElementById("lovexin12").innerHTML="";
}

function setfrme()
{
	var tr=document.getElementById("lovexin12");
	var twidth=tr.clientWidth;
	var theight=tr.clientHeight;
	var fr=document.getElementById("frame55la");
	fr.width=twidth-1;
	fr.height=theight-30;
}
//setfrme()
