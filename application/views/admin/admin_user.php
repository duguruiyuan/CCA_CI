<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>管理员</title>
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

	<div class="position">简体中文 > 网站设置 > <a href="/admin/home/admin_user">用户管理</a></div>


	</div>
	<div class="clear"></div>

	
</div>
<div class="stat_list">
	<ul>
		<li class="now"><a href="/admin/home/admin_user" title="用户管理">用户管理</a></li>
		<li ><a href="/admin/home/role" title="角色管理">角色管理</a></li>
	</ul>
</div>
<div style="clear:both;"></div>
<div class="v52fmbx_tbmax v52fmbx_tbmaxmt">
<div class="v52fmbx_tbbox">
<h3 class="v52fmbx_hr">

			<a href="/admin/home/admin_add">+新增</a>

			<div class="formright">
			
			</div>
</h3>
<table cellpadding="2" cellspacing="1" class="table">
              <tr>
                <td width="50" class="list" style="padding:0px; text-align:center;">选择</td>
                <td width="150" class="list alignleft" >用户名</td>
                <td width="100" class="list" style="padding:0px; text-align:center;">角色</td>
               
                <td width="70" class="list" style="padding:0px; text-align:center;">登录次数</td>
				<td width="150" class="list" style="padding:0px; text-align:center;">最后登录时间</td>
                <td width="100" class="list" style="padding:0px; text-align:center;">最后登录IP</td>
				<td width="70" class="list" style="padding:0px; text-align:center;">状态</td>
				<td width="100" class="list" style="padding:0px; text-align:center;">操作</td>
              </tr>
			  <form name="myform" method="post" id="myform">
		                    <tr class="mouse click">
                <td class="list-text"><input id="id" type="checkbox" value="5" name="id[]"></td>
                <td class="list-text color999 alignleft" ><a href="admin_edit.html" title="查看详细">admin123</a></td>
                <td class="list-text color999">普通用户</td>
                
                <td class="list-text color999">1</td>
				<td class="list-text color999">2014-01-08 16:03:13</td>
                <td class="list-text color999">127.0.0.1</td>
				<td class="list-text color999"><a href="index.php/admin/admin/doset?act=nostatus&id=5"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
				<td class="list-text">
				<a href="admin_edit.html">编辑</a>
								</td>
				
              </tr>
			                <tr class="mouse click">
                <td class="list-text"><input id="id" type="checkbox" value="1" name="id[]"></td>
                <td class="list-text color999 alignleft" ><a href="admin_edit.html" title="查看详细">admin</a></td>
                <td class="list-text color999">超级管理员</td>
                
                <td class="list-text color999">901</td>
				<td class="list-text color999">2015-03-11 09:00:09</td>
                <td class="list-text color999">127.0.0.1</td>
				<td class="list-text color999"><a href="index.php/admin/admin/doset?act=nostatus&id=1"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
				<td class="list-text">
				<a href="admin_edit.html">编辑</a>
								</td>
				
              </tr>
			  		      <tr> 
				  <td width="40" class="all"><input name="chkAll" type="checkbox" id="chkAll" onclick=CheckAll(this.form) value="checkbox"> </td>
				  <td class="all-submit" colspan="7" style="padding:5px 10px;">
				  <input type='submit' value='删除' class="submit li-submit" onclick="{if(confirm('确定删除吗?')){document.myform.action='index.php/admin/admin/delsome';return true;}return false;}"/>
				
				  </td>
			  </tr>

			  </form>
</table>
</div>
</div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0862 seconds </div>
</body>
</html>
