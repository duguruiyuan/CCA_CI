<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>广告类别</title>
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

	<div class="position">简体中文 > 优化推广 > <a href="/admin/home/expand_adcat">广告类别</a></div>


	</div>
	<div class="clear"></div>

	</div>

<div class="stat_list">
	<ul>
		<li ><a href="/admin/home/expand_ad" title="站内广告">站内广告</a></li>
		<li class="now"><a href="/admin/home/expand_adcat" title="广告类别">广告类别</a></li>
	</ul>
</div>
<div style="clear:both;"></div>

<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<h3 class="v52fmbx_hr">
    <span class="formleft">
		<a href="expand_adcat_add.html" title="新增">+新增</a>
	</span>
	
	<span class="formright">
		<select name="new" id="new" onChange="changes($(this));" style="position:relative; top:2px;">
				<option value="index.php/admin/expand_adcat/index">广告类别</option>
        </select>
	</span>
</h3>
<table cellpadding="2" cellspacing="1" class="table">
              <tr>
			    <td width="40" class="list" style="padding:0px; text-align:center;">选择</td>
				<td width="40" class="list" style="padding:0px; text-align:center;">ID</td>
                <td class="list" >类别名称</td>
                <td width="50" class="list" style="padding:0px; text-align:center;">排序</td>
				<td width="100" class="list" style="padding:0px; text-align:center;">操作</td>
	
              </tr>
			  <form name="myform" method="post" id="myform">
                            <tr class="mouse click">
                <td class="list-text"><input name='id[]' type='checkbox' id="id" value='17' /></td>
                <td class="list-text">17</td>
			    <td class="list-text alignleft">&nbsp;&nbsp;左边广告</td>
				<td class="list-text">2</td>
				<td class="list-text">
				<a href="expand_adcat_edit.html">编辑</a>
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/expand_adcat/del?id=17&page=1';return true;}return false;}" >删除</a>
				</td>
              </tr>
                            <tr class="mouse click">
                <td class="list-text"><input name='id[]' type='checkbox' id="id" value='16' /></td>
                <td class="list-text">16</td>
			    <td class="list-text alignleft">&nbsp;&nbsp;首页幻灯片</td>
				<td class="list-text">3</td>
				<td class="list-text">
				<a href="expand_adcat_edit.html">编辑</a>
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/expand_adcat/del?id=16&page=1';return true;}return false;}" >删除</a>
				</td>
              </tr>
                            <tr class="mouse click">
                <td class="list-text"><input name='id[]' type='checkbox' id="id" value='18' /></td>
                <td class="list-text">18</td>
			    <td class="list-text alignleft">&nbsp;&nbsp;合作客户</td>
				<td class="list-text">10</td>
				<td class="list-text">
				<a href="expand_adcat_edit.html">编辑</a>
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/expand_adcat/del?id=18&page=1';return true;}return false;}" >删除</a>
				</td>
              </tr>
                      
   	      <tr> 
             <td class="all"><input name="chkAll" type="checkbox" id="chkAll" onclick=CheckAll(this.form) value="checkbox"> </td>
			 <td class="all-submit" colspan="9" style="padding:5px 10px;">
			 <input type='submit' value='删除' class="submit li-submit" onclick="{if(confirm('确定删除吗?')){document.myform.action='index.php/admin/expand_adcat/delsome?page=1';return true;}return false;}"/>
			  </td>
          </tr>
		  </form>
		<tr>
			<td colspan="9" class="page_list" style="padding:5px 0px;">
				 <form method='POST' action='index.php/admin/expand_adcat/index?page=1'>
				 <style>.digg4 a{ border:1px solid #ccdbe4; padding:2px 8px 2px 8px; background:#fff; background-position:50%; margin:2px; color:#666; text-decoration:none;}
				.digg4 a:hover { border:1px solid #999; color:#fff; background-color:#999;}
				.digg4 a:active {border:1px solid #000099; color:#000000;}
				.digg4 span.current { padding:2px 8px 2px 8px; margin:2px; text-decoration:none;}
				.digg4 span.disabled { border:1px solid #ccc; background:#fff; padding:1px 8px 1px 8px; margin:2px; color:#999;}
			     </style>
				 <div class='digg4'>
				 <span class="disabled" style="font-family: Tahoma, Verdana;"><b>«</b></span><span class="disabled" style="font-family: Tahoma, Verdana;">‹</span><span class="current">1</span><span class="disabled" style="font-family: Tahoma, Verdana;">›</span><span class="disabled" style="font-family: Tahoma, Verdana;"><b>»</b></span>  共3条 				 转到<input name='page' class='page_input' value="1" />页 <input type='submit' value=' go ' class="bnt_pinyin"/></form>
				 </div>
			</td>
		</tr>
</table>
</div>
</div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1085 seconds </div>
<script type="text/javascript">
$(document).ready(function(){
	seachinput($('#searchtext'),'用户名查询');
});
</script>
</body>
</html>
