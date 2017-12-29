<!-- FriendLink begin -->
<?php wp_reset_query(); ?>
<?php if (get_option('wpbaike_if_friendlink') == '2') { ?>
<?php } elseif(get_option('wpbaike_if_friendlink') == '1') { ?>
<?php if ( is_home() ) { ?>
<DIV class="divE">
<DIV class="dive11">
<DIV class="divE1">友情链接</DIV>
</DIV>
<DIV class="divE2">
<DIV class="wrap">
<?php wp_list_bookmarks('title_li=&categorize=0&orderby=rand&limit=24'); ?>
</DIV>
</DIV></DIV>
<?php } ?>
<?php } else { ?>
<DIV class="divE">
<DIV class="dive11">
<DIV class="divE1">友情链接</DIV>
</DIV>
<DIV class="divE2">
<DIV class="wrap">
<?php wp_list_bookmarks('title_li=&categorize=0&orderby=rand&limit=24'); ?>
</DIV>
</DIV></DIV>
<?php } ?>
<!-- FriendLink end -->

<DIV id="foot" class="width">
<DIV class="foot_menu">
<STRONG>
  <?php if ( get_option('wpbaike_footer') ) { ?>
  <?php echo stripslashes(get_option('wpbaike_footer')); ?>
  <?php } else { ?>
<A href="http://www.weibo0633.com">粉丝阁</A> | 
<A href="http://www.weibo0633.com">粉丝阁</A>
<br/>
<span style="color:#50B20E">Copyright &copy; <?php echo date("Y"); ?>.:: Brought by <A 
href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></A></STRONG>
<?php } ?>
</DIV>

</DIV>

<script type="text/javascript">
function CloseJhyXuanfu(){
juhaoyong_xuanfukefuContent.style.display="none";
juhaoyong_xuanfukefuBut.style.display="block";
return true; 
}

function ShowJhyXuanfu(){
juhaoyong_xuanfukefuContent.style.display="block";
juhaoyong_xuanfukefuBut.style.display="none";
return true; 
}
</SCRIPT>
<LINK rel=stylesheet type=text/css href="/juhaoyong-kfimgs/kf.css" rev=stylesheet />
<DIV id="juhaoyong_xuanfukefu">
<DIV id="juhaoyong_xuanfukefuBut" onmouseover="ShowJhyXuanfu()"><table class="juhaoyong_xuanfukefuBut_table" border="0" cellspacing="0" cellpadding="0"><tr><td>&nbsp;</td></tr></table></DIV>
<DIV id="juhaoyong_xuanfukefuContent">
<table width="143" border="0" cellspacing="0" cellpadding="0">
<tr><td class="juhaoyong_xuanfukefuContent01" valign="top"><SPAN style=" position:relative; top:5px; cursor:pointer; color:#5696be; font-size:12px;" onclick="CloseJhyXuanfu()">关闭</SPAN>&nbsp;</td></tr>
<tr><td class="juhaoyong_xuanfukefuContent02" align="center">
	<table border="0" cellspacing="0" cellpadding="0" align="center">

    <tr><td class=jhykefu_box1>在线客服</td></tr>
    <tr><td class=jhykefu_box2><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1281006867&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1281006867:41 &r=0.11310546705499291" alt="点击这里给我发消息" title="点击这里给我发消息"></a></td></tr>
	
    <tr><td class=jhykefu_box1>在线客服</td></tr>
    <tr><td class=jhykefu_box2><a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=1281006867&site=qq&menu=yes"><img border="0" src="http://wpa.qq.com/pa?p=2:1281006867:41 &r=0.11310546705499291" alt="点击这里给我发消息" title="点击这里给我发消息"></a></td></tr>

    <tr><td class=jhykefu_box1>客服电话</td></tr>
    <tr><td class=jhykefu_box2><font size="3px">15376316661</font></td></tr>
	
	</table>
</td></tr>	
</table>
</DIV>
</DIV>
<script type="text/javascript">
juhaoyongKefu=function(id,_top,_right){
	var me=id.charAt?document.getElementById(id):id,d1=document.body,d2=document.documentElement;d1.style.height=d2.style.height='100%';
	me.style.top=_top?_top+'px':0;
	me.style.right=_right+"px";
	me.style.position='absolute';
	setInterval(function(){me.style.top=parseInt(me.style.top)+(Math.max(d1.scrollTop,d2.scrollTop)+_top-parseInt(me.style.top))*0.1+'px'},10+parseInt(Math.random()*20));
	return arguments.callee}
	juhaoyongKefu('juhaoyong_xuanfukefu',150,0);
</SCRIPT>