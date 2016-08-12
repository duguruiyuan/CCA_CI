<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加友情链接</title>
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
    var editor = K.create('textarea[name="infox"]', {
		allowFileManager : true
	});
	var editor = K.editor({
		allowFileManager : true
	});
	K('#image').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				imageUrl : K('#pic').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#pic').val(url);
						$("#img").attr("src",url);
						editor.hideDialog();
					}
			});
		});
	});
});

$(function(){
	$("#t3_0").click(function(){$("#link_pic").css("display","none");$("#link_pics").css("display","none")});
	$("#t3_1").click(function(){$("#link_pic").css("display","");$("#link_pics").css("display","")});
})
</script>
<script type="text/javascript">
$(document).ready(function(){
	ifreme_methei();
});
</script>
</head>
<body>
	<div class="metinfotop">
	<div class="position">简体中文：优化推广 > <a href="/admin/home/expand_link">友情链接</a> > 添加(友情链接)</div>
	<div class="return"><a href="javascript:;" onClick="location.href='javascript:history.go(-1)'">&lt;&lt;返回</a></div>
	</div>
	<div class="clear"></div>
	
<form  method="post" name="myform" action="index.php/admin/expand_link/add">
<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>链接类型：</dt>
			<dd>
			    <input name="type" type="radio" class="radio" id="t3_0" value="1"   checked />&nbsp;文字链接&nbsp;&nbsp;
				<input name="type" type="radio" class="radio" id="t3_1" value="2"  />&nbsp;LOGO链接
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站名称：</dt>
			<dd>
				<input name="title" type="text" class="text nonull" value="">
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站域名：</dt>
			<dd>
				<input name="url" type="text" class="text nonull" value="">
			</dd>
		</dl>
		</div>
		
		 
		
		<div id="link_pics" class="v52fmbx_dlbox" style="display: none;">
		<dl>
			<dt>网站LOGO：</dt>
			<dd>
				<input name="pic" type="text" id="pic" class="text" value="">
				<input type="button" id="image" class="bnt_public" value="图片上传"/>
				<img id="img" width="80" height="50" src="/assets/statics/base/images/nopic.gif">
			</dd>
		</dl>
		</div>
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>网站关键词：</dt>
			<dd>
				<input name="seokey" type="text" class="text" value="">
			</dd>
		</dl>
		</div>
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>排序：</dt>
			<dd>
				<input name="ordnum" type="text" class="text mid" value="0">
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>可选属性：</dt>
			<dd>
				<input name="status" type="checkbox" class="checkbox" value="1" checked>审核通过
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>备注：</dt>
			<dd>
				<textarea name="memo" cols="60" rows="5" class="textarea gen"></textarea>
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
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0851 seconds </div>
	
	
</body>
</html>