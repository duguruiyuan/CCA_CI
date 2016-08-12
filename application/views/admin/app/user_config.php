<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>会员设置</title>
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

	<div class="position">简体中文 > 企业应用 > <a href="user.html">会员功能设置</a> </div>


	<div class="return"><a href="javascript:metreturn('');">&lt;&lt;返回</a></div>

	</div>
	<div class="clear"></div>

	</div>

<div class="stat_list">
	<ul>
		<li ><a href="/admin/home/user" title="会员管理">会员管理</a></li>
		<li ><a href="/admin/home/user_group" title="会员组设置">会员组设置</a></li>
		<li class="now"><a href="/admin/home/user_config" title="会员功能设置">会员功能设置</a></li>
	</ul>
</div>
<div style="clear:both;"></div>

<form method="POST" name="myform" id="myform" action="index.php/admin/config/user" target="_self">
<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">	
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>会员功能：</dt>
			<dd>
			     <input name="user_isreg" type="radio" class="radio"  value="0" checked>&nbsp;关闭&nbsp;&nbsp;
				 <input name="user_isreg" type="radio" class="radio"  value="1" >&nbsp;开启
				 <span class="tips">开启会员功能</span>
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>会员注册：</dt>
			<dd>
				<input name="user_ispass" type="radio" class="radio"  value="1" checked>&nbsp;直接通过&nbsp;&nbsp;
				<input name="user_ispass" type="radio" class="radio"  value="2" >&nbsp;邮箱验证&nbsp;&nbsp;
				<input name="user_ispass" type="radio" class="radio"  value="3" >&nbsp;管理员审核&nbsp;&nbsp; 
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>禁止注册：</dt>
			<dd>
				<textarea name="user_baduser" class="textarea gen nonull" cols="50" rows="3">admin</textarea>
				<span class="tips">多个请用“|”隔开</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>邮件标题：</dt>
			<dd>
				<input name="user_regtitle" type="text" class="text" value="啊呜额撒旦">
				<span class="tips">支持HTML语言</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>注册激活邮件：</dt>
			<dd>
				<textarea name="user_regcontent" class="textarea gen" cols="50" rows="3"></textarea>
				<span class="tips">支持HTML语言</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>会员注册协议：</dt>
			<dd>
				<textarea name="user_agreement" class="textarea gen" cols="50" rows="5"></textarea>
				<span class="tips">支持HTML语言</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox v52fmbx_mo">
		<dl>
			<dt></dt>
			<dd>
				<input type="submit" value="保存" class="submit" onclick="return array_submit($(this),'myform')" />
			</dd>
		</dl>
		</div>
		
		
</div>
</div>
</div>
</form>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.2100 seconds </div>
</body>
</html>

