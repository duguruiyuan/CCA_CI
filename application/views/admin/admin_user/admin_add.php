<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加用户</title>
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
</head>
<body>
	<div class="metinfotop">
	<div class="position">简体中文：网站设置 > <a href="/admin/home/admin_user">用户管理</a> > 添加用户</div>

	<div class="return"><a href="javascript:;" onClick="location.href='javascript:history.go(-1)'">&lt;&lt;返回</a></div>

	</div>
	<div class="clear"></div>
	<div class="stat_list">
		<ul>
			<li class="now"><a href="/admin/home/admin_user" title="用户管理">用户管理</a></li>
			<li ><a href="/admin/home/role" title="角色管理">角色管理</a></li>
		</ul>
	</div>
	<div style="clear:both;"></div>
<form method="post" name="myform" action="index.php/admin/admin/add">	
<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>用户名：</dt>
			<dd><input name="adminuser" type="text" class="text nonull"><span class="red"></span></dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>密　码：</dt>
			<dd>
			<input name="adminpwd" type="password" class="text nonull" ><span id="pass1">
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>角　色：</dt>
			<dd>
			<select name="roleid">
			   <option value="">请选择</option>
			   <option value="0">超级管理员</option>
			   			   <option value="4">普通用户</option>
			               </select>
			</dd>
		</dl>
		</div>
		
		 
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>性　别：</dt>
			<dd>
			    <input name="sex" type="radio" class="radio" value="1" checked="checked">&nbsp;先生&nbsp;&nbsp;
			    <input name="sex" type="radio" class="radio" value="2">&nbsp;女士
			   
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>手　机：</dt>
			<dd>
			    <input name="mobile" type="text" class="text nonull" size="20" >
			    <span class="tips">用于取回账号密码</span>
			</dd>
		</dl>
		</div>

		<div class="v52fmbx_dlbox">
		<dl>
			<dt>Email：</dt>
			<dd>
				<input name="email" type="text" class="text nonull" size="20" >
				<span class="tips">用于取回账号密码</span>
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
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0900 seconds </div>
	
</body>
</html>