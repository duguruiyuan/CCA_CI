<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>数据备份</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/metinfo.css?5202" />
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
var depth='';
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
	<div class="position">简体中文 > 网站设置 > <a href="/admin/home/expand_backup">数据备份</a> > 恢复</div>
	<div class="return"><a href="javascript:;" onClick="location.href='javascript:history.go(-1)'">&lt;&lt;返回</a></div>
	</div>
	<div class="stat_list">
	<ul>
		<li ><a href="/admin/home/expand_backup" title="备份">备份</a></li>
		<li class="now"><a href="/admin/home/expand_backup_recovery" title="恢复">恢复</a></li>
	</ul>
</div>
	<div class="clear"></div>
	</div>

<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
		
<div class="clear"></div>
	
	<table cellpadding="2" cellspacing="1" class="table">
		
              <tr id="list-top">
                <td width="30" class="list">序号</td>
                <td width="60" class="list">文件名</td>
                <td width="60" class="list" >文件大小</td>
				<td width="100" class="list" >备份时间</td>
				<td width="100" class="list list_left" >操作</td>
              </tr>
			  
                            <tr class="mouse click">
                <td class="list-text">
				1				</td>
			    <td class="list-text ">phpci_201411131636553.rar</td>
                <td class="list-text ">206.9 KB</td>
				<td class="list-text ">2014-11-13 16:36:55</td>
				<td class="list-text alignleft">
				<a href="index.php/admin/expand_backup/recovery_add?name=phpci_201411131636553.rar" title="导入">导入</a>&nbsp; 
				<a onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/expand_backup/recovery_del?name=phpci_201411131636553.rar';return true;}return false;}" href="javascript:;" title="删除">删除</a>&nbsp;  
				<a href="index.php/admin/expand_backup/recovery_down?name=phpci_201411131636553.rar" title="下载">下载</a>
				</td>
              </tr>
                      
   	   
		
</table>
</div>
</div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0669 seconds </div>
</body>
</html>
