<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/metinfo.css" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/newstyle.css" />
<script type="text/javascript">var basepath='/assets/statics/base/images';</script>
<script type="text/javascript" src="/assets/statics/base/js/metvar.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/jQuery1.7.2.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/iframes.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/cookie.js"></script>
<script type="text/javascript">
/*ajax执行*/
var lang = 'cn';
var metimgurl='/assets/statics/base/images/';
var depth='../';
$(document).ready(function(){
	ifreme_methei();
});
</script>
<!--[if lte IE 9]>
<SCRIPT language=JavaScript>  
function killErrors() {  
return true;  
}  
window.onerror = killErrors;  
</SCRIPT> 
<![endif]-->

<title>网站基本信息设置</title>
</head>
<body>

<script type="text/javascript">
function metreturn(url){
	if(url){
		location.href=url;
	}else if($.browser.msie){
		history.go(-1);
	}else{
		history.go(-1);
	}
}
</script>
	<div class="metinfotop">
	<div class="position">简体中文 > 企业应用 > <a href="/admin/home/app_lists">应用市场</a></div>
	</div>
	<div class="clear"></div>

<script type="text/javascript">
$("html",parent.document).find('.returnover').remove();
</script>


</div>

<div class="v52fmbx_tbmax v52fmbx_tbmaxmt">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
<div class="metv5">
<h3 class="v52fmbx_hr metsliding v52fmbx_tbmaxmt" sliding="1">应用列表</h3>
<div class="metsliding_box metsliding_box_1">
	<ul class="applist">
    	<li>
		<div class="img"><a href="/admin/home/robots" title="robots在线修改器"><img src="/assets/statics/base/images/img/robots.png"></a></div>
		<div class="text">
			<span class="downbox">
				<a href="/admin/home/robots"><img src='/assets/statics/base/images/open.png' /><p>打开</p></a>
			</span>
			<div class="name"><span class="title"><a href="/admin/home/robots">robots在线修改器</a></span></div>
			<div class="info">
				<dl>
				<dd>网站通过robots协议告诉搜索引擎哪些页面可以抓取，哪些页面不能抓取..</dd>
				</dl>
			</div>
		</div>
	</li>
    	<li>
		<div class="img"><a href="/admin/home/replace" title="内容批量替换器"><img src="/assets/statics/base/images/img/8.jpg"></a></div>
		<div class="text">
			<span class="downbox">
				<a href="/admin/home/replace"><img src='/assets/statics/base/images/open.png' /><p>打开</p></a>
			</span>
			<div class="name"><span class="title"><a href="/admin/home/replace">内容批量替换器</a></span></div>
			<div class="info">
				<dl>
				<dd>能够批量替换内容文字、超链接、图片路径，如公司地址、电话、某个链接地址..</dd>
				</dl>
			</div>
		</div>
	</li>
    	
 
	</ul>
</div>
<div class="clear" style="height:10px;"></div>

</div>
</div>
</div>
</div>
<div class="clear"></div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.2438 seconds </div>
<script type="text/javascript">
function dplistjs(){
	var	wdth   = ($('.applist').width() - 10)/2;
	$('.applist li').width(wdth);
	$('.applist li div.text').width(wdth-96);
}
dplistjs();
$(window).resize(function() {
	dplistjs();
});
</script>
</body>
</html>
