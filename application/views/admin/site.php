<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>基本设置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/metinfo.css" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/newstyle.css" />
<script type="text/javascript">var basepath='/assets/statics/base/images';</script>
<script type="text/javascript" src="/assets/statics/base/js/metvar.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/jQuery1.7.2.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/iframes.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/cookie.js"></script>
<script charset="utf-8" src="/assets/statics/lib/kind/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/statics/lib/kind/lang/zh_CN.js"></script>
<script type="text/javascript">
/*ajax执行*/
var lang = 'cn';
var metimgurl='/assets/statics/base/images/';
var depth='index.php/admin/upload/ico_upload?uid=1&loginbase=46dd0ee33de60c025f3654a295455ed2';
var uid='';
var adminpwd='';
$(document).ready(function(){
	ifreme_methei();
});

 
var upload_json="/assets/statics/lib/kind/php/upload_json.php";
var file_manager_json="/assets/statics/lib/kind/php/file_manager_json.php";

KindEditor.ready(function(K) {
	var editor = K.create('textarea[name="txxxx"]', {
		allowFileManager : true
	});
	var editor = K.editor({
		allowFileManager : true
	});
	K('#image').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				imageUrl : K('#site_logo').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#site_logo').val(url);
						$("#img").attr("src",url);
						editor.hideDialog();
					}
			});
		});
	});
});

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
<script type="text/javascript" src="/assets/statics/base/js/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/uploadify/swfobject.js"></script>
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
	<div class="position">简体中文 > 快捷导航 > <a href="/admin/home/site">基本设置</a></div>
	</div>
	<div class="clear"></div>
	</div>
 
<div style="clear:both;"></div>
<form method="POST" name="myform" action="index.php/admin/config/site" target="_self">
<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
	
	<div class="metsliding_box metsliding_box_1">
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站名称：</dt>
			<dd>
			    <input name="site_webname" type="text" class="text" value="视界互动传媒" />
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>运行模式：</dt>
			<dd>
				<input name="site_html" type="radio" class="radio" value="1"  />&nbsp;动态&nbsp;&nbsp;
				<input name="site_html" type="radio" class="radio" value="2" checked />&nbsp;伪静态&nbsp;&nbsp;
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站后缀：</dt>
			<dd>
				<input type="text" class="text" size="10" name="site_suffix" value="" /><span class="tips">&nbsp;&nbsp;在伪静态模式下可以伪装，或者优化URL</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>URL分隔符：</dt>
			<dd>
				<input type="text" class="text nonull" size="10" name="f" value="-" />
				<span class="tips">优化URL,一般默认为 '-' </span>
			</dd>
		</dl>
		</div>
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>文件缓存：</dt>
			<dd>
				<input name="site_cache" type="radio" class="radio" value="1" />&nbsp;开启&nbsp;&nbsp;
				<input name="site_cache" type="radio" class="radio" value="0" checked />&nbsp;关闭&nbsp;&nbsp;
			</dd>
		</dl>
		</div>
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>缓存时间：</dt>
			<dd>
				<input type="text" class="text" size="10" name="site_cachetime" value="6000" /><span class="tips">单位：秒，只能写数字，否则默认为：36000</span>
			</dd>
		</dl>
		</div>
		
	   
		 
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站LOGO：</dt>
			<dd>
			    <input name="site_logo" type="text" id="site_logo" class="text" value="/data/upfile/201309/201309291425463101.jpg" />
				<input type="button" id="image" class="bnt_public" value="图片上传"/>
				<img id="img" width="80" height="50" src="data/upfile/201309/201309291425463101.jpg">
			</dd>
		</dl>
		</div>
		 
		
		
	</div>
	<h3 class="v52fmbx_hr metsliding" sliding="2">搜索引擎优化设置</h3>
	<div class="metsliding_box metsliding_box_2">
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站标题：</dt>
			<dd>
			<input name="seo_title" type="text " class="text gen" value="致力于南京品牌网站建设,网站制作,网页设计,SEO服务-视界互动传媒" /> 
			<span class="tips">多个关键词请用竖线|隔开，建议3到4个关键词。</span>
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站关键词：</dt>
			<dd>
			<input name="seo_key" type="text " class="text gen" value="南京网站建设,南京网站制作,南京SEO,南京网页设计,南京网络公司" />
			<span class="tips">多个关键词请用竖线|隔开，建议3到4个关键词。</span>
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站描述：</dt>
			<dd>
			<textarea name="seo_desc" class="textarea gen">视界互动传媒专注于高品质网站建设以及搜索引擎优化,是南京地区专业提供最权威品牌网站建设,网页设计,网站制作,SEO服务的网络公司!</textarea>
			<span class="tips">100字以内</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox v52fmbx_mo">
		<dl>
			<dt></dt>
			<dd>
			<input type="submit"  value="保存" class="submit" onclick="return Smit($(this),'myform')" />
			</dd>
		</dl>
		</div>
		
	</div>
</div>
</div>
</div>
</form>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1032 seconds </div>
</body>
</html>
