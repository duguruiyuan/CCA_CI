<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title></title>
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

	<div class="position">简体中文 > 企业应用 > <a href="/admin/home/app">我的应用</a></div>


	</div>
	<div class="clear"></div>

<script type="text/javascript">
$("html",parent.document).find('.returnover').remove();
</script>




<div class="v52fmbx_tbmax v52fmbx_tbmaxmt">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
<div class="metv5">
<h3 class="v52fmbx_hr metsliding v52fmbx_tbmaxmt" sliding="1">内置应用列表</h3>
<div class="metsliding_box metsliding_box_1">
	<ul class="applist">
    	<li>
		<div class="img"><a href="/admin/home/user" title="会员管理"><img src="/assets/statics/base/images/icon/member.png"></a></div>
		<div class="text">
			<span class="downbox">
				<a href="/admin/home/user"><img src="/assets/statics/base/images/open.png"/><p>打开</p></a>
			</span>
			<div class="name"><span class="title"><a href="/admin/home/user">会员管理</a></span></div>
			<div class="info">
				<dl>
				<dd>可以管理注册的会员、设置会员组以及阅读权限、其它相关设置等</dd>
				</dl>
			</div>
		</div>
	</li>
    	<li>
		<div class="img"><a href="upfile.html" title="文件管理"><img src="/assets/statics/base/images/icon/uploadfile.png"></a></div>
		<div class="text">
			<span class="downbox">
				<a href="/admin/home/upfile"><img src="/assets/statics/base/images/open.png" /><p>打开</p></a>
			</span>
			<div class="name"><span class="title"><a href="/admin/home/upfile">文件管理</a></span></div>
			<div class="info">
				<dl>
				<dd>可以管理后台上传的文件</dd>
				</dl>
			</div>
		</div>
	</li>
    	<li>
		<div class="img"><a href="/admin/home/online" title="在线客服"><img src="/assets/statics/base/images/icon/online.png"></a></div>
		<div class="text">
			<span class="downbox">
				<a href="/admin/home/online"><img src="/assets/statics/base/images/open.png" /><p>打开</p></a>
			</span>
			<div class="name"><span class="title"><a href="/admin/home/online">在线客服</a></span></div>
			<div class="info">
				<dl>
				<dd>原版本名为在线交流，漂浮的在线即时交流工具，可添加QQ、旺旺、MSN、SKYPE等</dd>
				</dl>
			</div>
		</div>
	</li>
	<li>
		<div class="img"><a href="/admin/home/shenhe" title="审核管理"><img src="/assets/statics/base/images/icon/member.png"></a></div>
		<div class="text">
			<span class="downbox">
				<a href="/admin/home/shenhe"><img src="/assets/statics/base/images/open.png"/><p>打开</p></a>
			</span>
			<div class="name"><span class="title"><a href="/admin/home/shenhe">审核管理</a></span></div>
			<div class="info">
				<dl>
				<dd>可以管理注册的会员、设置会员组以及阅读权限、其它相关设置等</dd>
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
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0979 seconds </div>
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
