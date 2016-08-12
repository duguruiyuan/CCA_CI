<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>网站图片设置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/metinfo.css" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/newstyle.css" />
<script type="text/javascript">var basepath='/assets/statics/base/images';</script>
<script type="text/javascript" src="/assets/statics/base/js/metvar.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/jQuery1.7.2.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/iframes.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/cookie.js"></script>
<script charset="utf-8" src="/assets/statics/lib/kind/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/statics/lib/kind/lang/zh_CN.js"></script>
<script type="text/javascript">
var gettagspath="";
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
				imageUrl : K('#jpeg_photo').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#jpeg_photo').val(url);
						$("#img").attr("src",url);
						editor.hideDialog();
					}
			});
		});
	});
	
	var colorpicker;
	K('#colorpicker').bind('click', function(e) {
		e.stopPropagation();
		if (colorpicker) {
			colorpicker.remove();
			colorpicker = null;
			return;
		}
		var colorpickerPos = K('#colorpicker').pos();
		colorpicker = K.colorpicker({
			x : colorpickerPos.x,
			y : colorpickerPos.y + K('#colorpicker').height(),
			z : 19811214,
			selectedColor : 'default',
			noColor : '无颜色',
			click : function(color) {
				    K('#color').val(color);
				    $("#fontZoom").css("color", color); 
					colorpicker.remove();
					colorpicker = null;
				}
			});
		});
		K(document).click(function() {
			if (colorpicker) {
				colorpicker.remove();
				colorpicker = null;
			}
	});
});


</script>
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

	<div class="position">简体中文 > 网站设置 > <a href="/admin/home/jpeg>水印</a></div>


	</div>
	<div class="clear"></div>

	</div>
<div class="stat_list">
	<ul>
	    <li class="now"><a href="/admin/home/jpeg" title="水印">水印</a></li>
		<li ><a href="/admin/home/resize" title="缩略图">缩略图</a></li>
		
	</ul>
</div>

<div class="clear"></div>
    <form method="POST" name="myform" action="index.php/admin/config/jpeg" target="_self">

<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">

	
	<div class="v52fmbx_dlbox">
	<dl>
		<dt>水印状态：</dt>
		<dd>
			<input name="jpeg_on" type="radio" class="radio" value="1" >&nbsp;开启&nbsp;&nbsp;
			<input name="jpeg_on" type="radio" value="0" checked>&nbsp;关闭
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox">
	<dl>
		<dt>水印类型：</dt>
		<dd>
			<input name="jpeg_type" type="radio" class="radio" value="text" checked>&nbsp;文字水印&nbsp;&nbsp;
			<input name="jpeg_type" type="radio" value="overlay" >&nbsp;图片水印
		</dd>
	</dl>
	</div>
	
	 
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>水印图片：</dt>
		<dd>
		    <input name="jpeg_photo" id="jpeg_photo" type="text" class="text" value="/data/upfile/avatar/2/big.jpg">
			<input id="image" class="bnt_public" value="图片上传" type="button">
			<span class="tips">仅支持.gif|.png格式</span>
			<img id="img" width="80" height="50" src="data/upfile/avatar/2/big.jpg">
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>水印文字：</dt>
		<dd>
			<input name="jpeg_text" type="text" class="text" style="color:#4C33E5" id="fontZoom" value="图片水印">
			<span class="tips">（中文水印需要下载中文字体才能支持）simkai.ttf支持中文</span>
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>水印文字大小：</dt>
		<dd>
			<input name="jpeg_fontsize" type="text" class="text mid" value="20"><span class="tips">像素</span>
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>水印文字字体：</dt>
		<dd>
			<select name='jpeg_textfont' class="select" size="1" > 
			<option value="">请选择字体</option>
						<option   value=".//assets/statics/lib/fonts/arial.ttf">arial.ttf</option>
						<option   value=".//assets/statics/lib/fonts/elephant.ttf">elephant.ttf</option>
						<option  selected value=".//assets/statics/lib/fonts/simkai.ttf">simkai.ttf</option>
						<option   value=".//assets/statics/lib/fonts/verdana.ttf">verdana.ttf</option>
						</select> 
			<span class="tips">请将字体文件放到目录/assets/statics/lib/fonts/下</span>
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>水印质量：</dt>
		<dd>
			<input name="jpeg_quality" type="text" class="text" value="100"><span class="tips">数字越大，质量越高, 1 - 100</span>
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>水印文字颜色：</dt>
		<dd>
			<input id="color" name="jpeg_textcolor" type="text" class="text med"  value="#4C33E5">
			<img id="colorpicker" src="/assets/statics/base/images/colour.png">
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox v52fmbx_inline">
	<dl>
		<dt>水印位置：</dt>
		<dd>
			<label><input type="radio" value="left,top" class="radio" name="jpeg_position" />左上角</label>&nbsp;&nbsp;
			<label><input type="radio" value="center,top" class="radio" name="jpeg_position" />顶中部</label>&nbsp;&nbsp;
			<label><input type="radio" value="right,top" class="radio" name="jpeg_position" />右上角</label>&nbsp;&nbsp;<br/>
			<label><input type="radio" value="left,middle" class="radio" name="jpeg_position" />左中部</label>&nbsp;&nbsp;
			<label><input type="radio" value="center,middle" class="radio" name="jpeg_position" />中间部</label>&nbsp;&nbsp;
			<label><input type="radio" value="right,middle" class="radio" name="jpeg_position" />右中部</label>&nbsp;&nbsp;<br/>
			<label><input type="radio" value="left,bottom" name="jpeg_position" class="radio" id="label11" />左下角</label>&nbsp;&nbsp;
			<label><input type="radio" value="center,middle" class="radio" id="label14" name="jpeg_position" />底中部</label>&nbsp;&nbsp;
			<label><input type="radio" value="right,bottom" class="radio" id="label10" name="jpeg_position" checked/>右下角</label>&nbsp;
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
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1595 seconds </div>
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
