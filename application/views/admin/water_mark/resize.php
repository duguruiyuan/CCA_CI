<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>网站缩图设置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/metinfo.css" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/newstyle.css" />
<script type="text/javascript">var basepath='/assets/statics/base/images';</script>
<script type="text/javascript" src="/assets/statics/base/js/metvar.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/jQuery1.7.2.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/iframes.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/cookie.js"></script>

<script type="text/javascript">
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

	<div class="position">简体中文 > 网站设置 > <a href="/admin/home/jpeg">缩略图</a></div>


	</div>
	<div class="clear"></div>

	</div>

<div class="stat_list">
	<ul>
	    <li ><a href="/admin/home/jpeg" title="水印">水印</a></li>
		<li class="now"><a href="/admin/home/resize" title="缩略图">缩略图</a></li>
		
	</ul>
</div>

<div class="clear"></div>
    <form method="POST" name="myform" action="index.php/admin/config/resize" target="_self">

<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">

	<div class="v52fmbx_dlbox">
	<dl>
		<dt>缩图状态：</dt>
		<dd>
			<input name="thumb_on" type="radio" class="radio" value="1" >&nbsp;开启&nbsp;&nbsp;
		    <input name="thumb_on" type="radio" value="0" checked>&nbsp;关闭
		</dd>
	</dl>
	</div>
	
	
	<div class="v52fmbx_dlbox">
	<dl>
		<dt>产品模块：</dt>
		<dd>
			<input name="thumb_prod_w" type="text" class="text mid" value="200" /> ×
			<input name="thumb_prod_h" type="text" class="text mid" value="210" /> <span class="tips">(宽 × 高)(像素)</span>
		</dd>
	</dl>
	</div>
	<div class="v52fmbx_dlbox">
	<dl>
		<dt>文章模块：</dt>
		<dd>
			<input name="thumb_news_w" type="text" class="text mid" value="200" /> ×
			<input name="thumb_news_h" type="text" class="text mid" value="210" /> <span class="tips">(宽 × 高)(像素)</span>
			
		</dd>
	</dl>
	</div>
	<div class="v52fmbx_dlbox">
	<dl>
		<dt>案例模块：</dt>
		<dd>
			<input name="thumb_case_w" type="text" class="text mid" value="200" /> ×           
			<input name="thumb_case_h" type="text" class="text mid" value="210" /> <span class="tips">(宽 × 高)(像素)</span>
		</dd>
	</dl>
	</div>
	
	
	<div class="v52fmbx_dlbox v52fmbx_mo" >
	<dl>
		<dt></dt>
		<dd>
			<input type="submit" value="保存" class="submit" onclick="return Smit($(this),'myform')" />
		</dd>
	</dl>
	</div>
	<br>
</div>
</div>
</div>
</form>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0626 seconds </div>
<script type="text/javascript">
	//metuploadify('#file_upload','upimage','met_wate_img');
	//metuploadify('#file_upload1','upimage','met_wate_bigimg');
	
	function do_color(vobject,vvar,valor){ 
	$(vobject).css('color',vvar);
	$(valor).val(vvar);
	}
	
	checkthis('met_wate_class');
</script>
</body>
</html>
