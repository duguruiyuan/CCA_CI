<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>客服列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/metinfo.css" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/newstyle.css" />
<script type="text/javascript">var basepath='/assets/statics/base/images';</script>
<script type="text/javascript" src="/assets/statics/base/js/metvar.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/jQuery1.7.2.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/uploadify/jquery.uploadify.v2.1.4.min.js"></script>
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

	<div class="position">简体中文 > 企业应用 > <a href="app.html">我的应用</a></div>


	</div>
	<div class="clear"></div>

	</div>

<div class="stat_list">
	<ul>
		<li class="now"><a href="online.html" title="客服列表">客服列表</a></li>
		 
	</ul>
</div>
<div style="clear:both;"></div>

<style type="text/css">
.table td.list-text{ white-space:normal;}
</style>
<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<form name="myform" method="post" id="myform">
<table cellpadding="0" cellspacing="1" class="table neitable">
              <tr id="list-top">
                <td class="list" width="30">选择</td>
				<td class="list" width="30">排序</td>
                <td class="list" width="80">客服名称</td>
                <td class="list">QQ</td>
				<td class="list" width="80">MSN</td>
                <td class="list" width="80">淘宝旺旺</td>
                <td class="list" width="80">阿里旺旺</td>
				<td class="list" width="80">SKYPE</td>
				<td class="list">操作</td>
              </tr>
                            <tr class="mouse click">
                <td class="list-text">
				<input name="id[]" type="checkbox" id="id" value="1" />
				<input name="data[id][]" type="hidden"  value="1" />
				</td>
                <td class="list-text"><input type="text" name="data[ordnum][]" class="text no_order" value="1" /></td>
			    <td class="list-text"><input type="text" name="data[title][]" class="text max" value="咨询销售" /></td>
                <td class="list-text"><input type="text" name="data[qq][]" class="text max" value="357058607" /></td>
				<td class="list-text"><input type="text" name="data[msn][]" class="text max" value="348468810" /></td>
                <td class="list-text"><input type="text" name="data[taobao][]" class="text max" value="" /></td>
                <td class="list-text"><input type="text" name="data[alibaba][]" class="text max" value="" /></td>
				<td class="list-text"><input type="text" name="data[skype][]" class="text max" value="" /></td>
				<td class="list-text" width="60">
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/online/del?id=1';return true;}return false;}">删除</a>
				</td>
              </tr>
                            <tr class="mouse click">
                <td class="list-text">
				<input name="id[]" type="checkbox" id="id" value="2" />
				<input name="data[id][]" type="hidden"  value="2" />
				</td>
                <td class="list-text"><input type="text" name="data[ordnum][]" class="text no_order" value="2" /></td>
			    <td class="list-text"><input type="text" name="data[title][]" class="text max" value="咨询销售" /></td>
                <td class="list-text"><input type="text" name="data[qq][]" class="text max" value="357058607" /></td>
				<td class="list-text"><input type="text" name="data[msn][]" class="text max" value="348468810" /></td>
                <td class="list-text"><input type="text" name="data[taobao][]" class="text max" value="" /></td>
                <td class="list-text"><input type="text" name="data[alibaba][]" class="text max" value="" /></td>
				<td class="list-text"><input type="text" name="data[skype][]" class="text max" value="" /></td>
				<td class="list-text" width="60">
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/online/del?id=2';return true;}return false;}">删除</a>
				</td>
              </tr>
                            <tr class="mouse click">
                <td class="list-text">
				<input name="id[]" type="checkbox" id="id" value="3" />
				<input name="data[id][]" type="hidden"  value="3" />
				</td>
                <td class="list-text"><input type="text" name="data[ordnum][]" class="text no_order" value="3" /></td>
			    <td class="list-text"><input type="text" name="data[title][]" class="text max" value="空间域名" /></td>
                <td class="list-text"><input type="text" name="data[qq][]" class="text max" value="357058607" /></td>
				<td class="list-text"><input type="text" name="data[msn][]" class="text max" value="348468810" /></td>
                <td class="list-text"><input type="text" name="data[taobao][]" class="text max" value="" /></td>
                <td class="list-text"><input type="text" name="data[alibaba][]" class="text max" value="" /></td>
				<td class="list-text"><input type="text" name="data[skype][]" class="text max" value="" /></td>
				<td class="list-text" width="60">
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/online/del?id=3';return true;}return false;}">删除</a>
				</td>
              </tr>
                            <tr class="mouse click">
                <td class="list-text">
				<input name="id[]" type="checkbox" id="id" value="4" />
				<input name="data[id][]" type="hidden"  value="4" />
				</td>
                <td class="list-text"><input type="text" name="data[ordnum][]" class="text no_order" value="4" /></td>
			    <td class="list-text"><input type="text" name="data[title][]" class="text max" value="合作加盟" /></td>
                <td class="list-text"><input type="text" name="data[qq][]" class="text max" value="357058607" /></td>
				<td class="list-text"><input type="text" name="data[msn][]" class="text max" value="348468810" /></td>
                <td class="list-text"><input type="text" name="data[taobao][]" class="text max" value="" /></td>
                <td class="list-text"><input type="text" name="data[alibaba][]" class="text max" value="" /></td>
				<td class="list-text"><input type="text" name="data[skype][]" class="text max" value="" /></td>
				<td class="list-text" width="60">
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/online/del?id=4';return true;}return false;}">删除</a>
				</td>
              </tr>
                     
              

		<tr>
			<td class="list-text"></td>
			<td class="list-text" colspan="8" style="padding-left:10px; text-align:left;"><a href="online_add.html" onclick="return addsave($(this),0);">+添加新客服</a></td>
		</tr>
   	   <tr> 
            <td class="list" width="40"><input name="chkAll" type="checkbox" id="chkAll" onclick=CheckAll(this.form) value="checkbox"></td>
			  <td class="list list_left" colspan="8">
				 <input type='submit' value='删除' class="submit li-submit" onclick="{if(confirm('确定删除吗?')){document.myform.action='index.php/admin/online/delsome';return true;}return false;}"/>
				 <input type='submit' value='保存' class="submit li-submit" onclick="{if(confirm('确定保存吗?')){document.myform.action='index.php/admin/online/save';return true;}return false;}"/>
				</td>
          </tr>
		</table> 	
</form>
</div>
</div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0873 seconds </div>
</body>
</html>
