<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>网站安全</title>
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

	<div class="position">简体中文 > 网站设置 > <a href="safe.html">网站安全</a></div>


	</div>
	<div class="clear"></div>

	</div>


<div class="clear"></div>
    <form method="POST" name="myform" action="index.php/admin/config/safe" target="_self">

<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
    	<div class="v52fmbx_dlbox">
	<dl>
		<dt>删除安装文件：</dt>
		<dd>
			<font color="#FF0000"><span class='red'>安装文件夹install尚未删除，删除后可以增强网站的安全性能，建议</span></font> <a href="index.php/admin/config/safe_del">删除</a>
		</dd>
	</dl>
	</div>
		<div class="v52fmbx_dlbox">
	<dl>
		<dt>后台登录验证码：</dt>
		<dd>
			<input name="admin_login_code" type="radio" value="1" checked/>&nbsp;开启&nbsp;&nbsp;
		    <input name="admin_login_code" type="radio" value="0" />&nbsp;关闭
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox">
	<dl>
		<dt>前台提交验证码：</dt>
		<dd>
			<input name="member_login_code" type="radio" value="1" checked>&nbsp;开启&nbsp;&nbsp;
			<input name="member_login_code" type="radio" value="0" >&nbsp;关闭
			<span class="tips">前台的反馈、留言、友情链接和简历提交</span>
		</dd>
	</dl>
	</div>
	
	
	

	<div class="v52fmbx_dlbox">
	<dl>
		<dt>上传最大值：</dt>
		<dd>
			<input name="file_maxsize" type="text" class="text" style="width:85px" value="9999999" />
			<span class="tips">Kb</span>
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox">
	<dl>
		<dt>上传图片格式：</dt>
		<dd>
		    <input name="image_format" type="text" class="text" value="gif|jpg|jpeg|png|bmp" />
			
			
		    <span class="tips">多种格式请用“|”隔开</span>
		</dd>
	</dl>
	</div>
	
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>上传flash格式：</dt>
		<dd>
		    <input name="flash_format" type="text" class="text" value="swf" />
		    <span class="tips">多种格式请用“|”隔开</span>
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>上传视频格式：</dt>
		<dd>
		    <input name="media_format" type="text" class="text" value="swf|flv|mp3|wav|wma|wmv|mid|avi|mpg|asf|rm|rmvb" />
			
		    <span class="tips">多种格式请用“|”隔开</span>
		</dd>
	</dl>
	</div>
	
	<div class="v52fmbx_dlbox" >
	<dl>
		<dt>上传文件格式：</dt>
		<dd>
		    <input name="file_format" type="text" class="text" value="doc|docx|xls|xlsx|ppt|htm|html|txt|zip|rar|gz|flv|swf" />
		    <span class="tips">多种格式请用“|”隔开</span>
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
	
</div>
</div>
</div>
</form>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0761 seconds </div>
<script type="text/javascript">
	metuploadify('#file_upload','upimage','met_wate_img');
	metuploadify('#file_upload1','upimage','met_wate_bigimg');
	
	function do_color(vobject,vvar,valor){ 
	$(vobject).css('color',vvar);
	$(valor).val(vvar);
	}
	
	checkthis('met_wate_class');
</script>
</body>
</html>
