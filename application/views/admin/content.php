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
var metimgurl='../templates/met/images/';
var depth='';
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
<style>
img{ behavior: url(/assets/statics/images/iepngfix.htc); }
</style>

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
	<div class="position">简体中文 > 内容管理 > <a href="/admin/home/content">内容管理</a></div>
	<div class="return"></div>
	</div>
	<div class="clear"></div>
	<script type="text/javascript">
	$("html",parent.document).find('.returnover').remove();
	</script>
</div>

<div class="v52fmbx_tbmax v52fmbx_tbmaxmt">
<div class="v52fmbx_tbbox">
 
<div class="metv5box">
	<ul class="columnlist">
        
				<li class="contlist">
			<div class="box">
				<a href='/admin/home/news'>
					<img src="/assets/statics/base/images/metv5/tubiao_2.png" width='64' height='64' />
					<h2>文章模块</h2>
				</a>
			</div>
		</li>
        		<li class="contlist">
			<div class="box">
				<a href='/admin/home/prod'>
					<img src="/assets/statics/base/images/metv5/tubiao_3.png" width='64' height='64' />
					<h2>产品模块</h2>
				</a>
			</div>
		</li>
        		<li class="contlist">
			<div class="box">
				<a href='video.html'>
					<img src="/assets/statics/base/images/metv5/tubiao_4.png" width='64' height='64' />
					<h2>视频模块</h2>
				</a>
			</div>
		</li>
        		<li class="contlist">
			<div class="box">
				<a href='case.html'>
					<img src="/assets/statics/base/images/metv5/tubiao_5.png" width='64' height='64' />
					<h2>案例模块</h2>
				</a>
			</div>
		</li>
        		<li class="contlist">
			<div class="box">
				<a href='/admin/home/expand_book'>
					<img src="/assets/statics/base/images/metv5/tubiao_7.png" width='64' height='64' />
					<h2>查看留言</h2>
				</a>
			</div>
		</li>
         
</ul>
</div>
<div class="clear"></div>
</div>
</div>
<script type="text/javascript">
$('.contmorehver').hover(
	function () {
		$(this).find('div.contmore').show();
	},
	function () {
		$(this).find('div.contmore').hide();
	}
);
function metHeight(group,type) {
	tallest = 0;
	group.each(function() {
		thisHeight = $(this).height();
		if(thisHeight > tallest) {
			tallest = thisHeight;
		}
	});
	if(type==1){
		group.each(function(){
			if($(this).outerHeight(true)<tallest){
				var ht = (tallest - $(this).outerHeight(true))/2;
				$(this).css('padding-top',ht+'px');
				$(this).css('padding-bottom',ht+'px');
			}
		});
	}else{
		group.height(tallest);
		group.each(function(){
			var h = tallest - $(this).find('.img').outerHeight(true);
			var x = h - $(this).find('.title').outerHeight(true);
			if(x>0){
				var ht = (x/2)+3;
				$(this).find('.title').css('padding-top',ht+'px');
				$(this).find('.title').css('padding-bottom',ht+'px');
			}
		});
	}
}
metHeight($('.box'));
metHeight($('.contlist .text'),1);
</script>
<div class="clear"></div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0943 seconds </div>
</body>
</html>