
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

	<div class="position">简体中文 > 网站设置 > <a href="/admin/home/theme">模板管理</a></div>


	</div>
	<div class="clear"></div>

<script type="text/javascript">
$("html",parent.document).find('.returnover').remove();
</script>


</div>

<div class="clear"></div>


<div class="v52fmbx_tbmax v52fmbx_tbmaxmt">
<div class="v52fmbx_tbbox">
<h3 class="v52fmbx_hr">
	
			<span style="float:right;"><a href="http://www.phpci.com" title="更多模板" target="_blank">更多模板</a></span>
			

</h3>
<table cellpadding="2" cellspacing="1" class="table skin_manager">
        <tr>
            <td width="30" class="list">启用</td>
			<td width="40" class="list">预览</td>
            <td width="40" class="list list_left">信息</td>
            <td width="60" class="list">是否应用</td>
			<td width="60" class="list" style="padding:0px; text-align:center;">操作</td>
        </tr>
          
		  
		  
        <tr>
            <td class="list-text"><input name='id' id="sklist_cn" value='cn' type='radio'  onclick="fenggeok('cn','官方模板');" /></td>
			<td class="list-text alignleft"><img src="data/themes/cn/view.jpg" width="120" height="100" style="margin:5px; border:1px solid #ddd; padding:3px;" /></td>
            <td class="list-text alignleft" style="padding-left:10px;">
			<span style="font-size:14px;">官方模板</span>
						<p style="color:#666;">
			模板名称：官方模板<br/>
			模板作者：phpci CMS<br/>
			</p>
			</td>
			<td class="list-text"><span>否</span></td>
			<td class="list-text"><a href="theme_edit.html" title="模板设置">模板设置</a>
			</td>
        </tr>
          
        <tr>
            <td class="list-text"><input name='id' id="sklist_en" value='en' type='radio' checked onclick="fenggeok('en','官方模板');" /></td>
			<td class="list-text alignleft"><img src="data/themes/en/view.jpg" width="120" height="100" style="margin:5px; border:1px solid #ddd; padding:3px;" /></td>
            <td class="list-text alignleft" style="padding-left:10px;">
			<span style="font-size:14px;">官方模板</span>
						<img src='/assets/statics/base/images/greencheck.png' style='position:relative; top:5px;' />
			<b class='color390'>已启用</b>
						<p style="color:#666;">
			模板名称：官方模板<br/>
			模板作者：phpci CMS<br/>
			</p>
			</td>
			<td class="list-text">已启用</td>
			<td class="list-text"><a href="theme_edit.html" title="模板设置">模板设置</a>
			</td>
        </tr>
           
		
</table>
</div>
</div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0941 seconds </div>
<script type="text/javascript">
var d=$("input[name='id']:checked");
function fenggeok(id,file,type){
	var v=$("select[name='met_skin_css_"+id+"']").val();
	var text=type==1?'确定启用选中的风格吗？':'确定启用选中的模板吗？';
	if(confirm(text)){
		$.ajax({
		url : '/admin/home/theme/aply?dir='+id, 
		type: "POST",
		success: function(data){
			location.reload();
		}
		});
	}else{
		$("input[name='id']").attr('checked',false);
		var tid = "#"+d.attr("id");
		$(tid).attr('checked',true);
	}
}
</script>

</body>
</html>

