<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>robots在线修改器</title>
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

	<div class="position">简体中文 > 企业应用 > <a href="app.html">我的应用</a> > robots在线修改器</div>


	<div class="return"><a href="javascript:;" onClick="location.href='javascript:history.go(-1)'">&lt;&lt;返回</a></div>

	</div>
	<div class="clear"></div>

	</div>

<body>
<style type="text/css">
textarea.gens{width:70% !important;height:350px;}
</style>
<form method="POST" action="index.php/admin/app/robots">
<table cellpadding="2" cellspacing="1" class="table">
	<tr>
		<td class="test"></td>
		<td>
		<h2>网站通过robots协议告诉搜索引擎哪些页面可以抓取，哪些页面不能抓取。</h2><p>
		<a href="http://baike.baidu.com/view/9274458.htm" target="_blank">什么是robots协议？</a><p>
		<a href="robots.txt" target="_blank">我的robots协议</a>
		
		</td>
	<tr> 
		<td class="text">Robots.txt文件</td>
		<td class="input"><textarea name="info" cols="10" rows="10" class="textarea gens">User-Agent: *
Allow: /asdasdsad

</textarea></td>
	</tr>
	<tr>
		<td class="text"></td>
		<td class="submit">
			<input type="submit" name="submit" id="submit" value="保存" class="submit"/>
		</td>
    </tr>   
	<tr>
		  <td class="footer" colspan="9">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0796 seconds </td>
	  </tr>
</table>
</form>
</body>
</html>
