<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>友情链接</title>
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

	<div class="position">简体中文 > 优化推广 > <a href="/admin/home/expand_link">友情链接</a></div>


	</div>
	<div class="clear"></div>

	</div>

<div class="v52fmbx_tbmax v52fmbx_tbmaxmt">
<div class="v52fmbx_tbbox">
<h3 class="v52fmbx_hr">
	<span class="formleft">
		<a href="/admin/home/expand_link_add" title="新增">+新增</a>
	</span>
	<span class="formright">
		<select name="new" id="new" onChange="changes($(this));" style="position:relative; top:2px;">
				<option value="index.php/admin/expand_link/index">全部链接</option>
								<option value="index.php/admin/expand_link/index?nat=1" >未审核</option>
								<option value="index.php/admin/expand_link/index?nat=2" >已审核</option>
								<option value="index.php/admin/expand_link/index?nat=3" >文字链接</option>
								<option value="index.php/admin/expand_link/index?nat=4" >图片链接</option>
								
				</select>
				<form method="post" action="index.php/admin/expand_link/index" >
					<input name="keyword" type="text" value="" class="text100" />
					<input type="submit" value="搜索" class="bnt_pinyin"/> 
				</form>
				
	</span>
</h3>


<table cellpadding="2" cellspacing="1" class="table">
			  <form name="myform" method="post" id="myform">
			 
              <tr>
                <td width="40" class="list" style="padding:0px; text-align:center;">选择</td>
				<td width="50" class="list" style="padding:0px; text-align:center;">ID</td>
                <td width="80" class="list" style="padding:0px; text-align:center;">链接类型</td>
                <td class="list" >网站标题</td>
                <td class="list" >网站关键词</td>
				<td class="list" width="70" style="padding:0px; text-align:center;">图片预览</td>
                <td width="50" class="list" style="padding:0px; text-align:center;">排序</td>
				<td width="50" class="list" style="padding:0px; text-align:center;">审核</td>
				<td width="10%" class="list" style="padding:0px; text-align:center;">操作</td>
              </tr>
                            <tr class="mouse click">
				<td class="list-text"><input name='id[]' type='checkbox' id="id" value='14' /></td>
                <td class="list-text">14</td>
				<td class="list-text">图片链接</td>
			    <td class="list-text alignleft">&nbsp;&nbsp;qwe</td>
				<td class="list-text alignleft">&nbsp;&nbsp;qwe</td>
				<td class="list-text"><img class="small" src="data/upfile/201408/201408041041306407.gif" width="70" height="30" /></td>
				<td class="list-text">1</td>
                <td class="list-text"><a href="index.php/admin/expand_link/doset?act=nostatus&id=14&&nat=0&page=1"><img src="/assets/statics/base/images/ok_1.gif"></a></td>      
				<td class="list-text">
				<a href="expand_link_edit.html">编辑</a>
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/expand_link/del?id=14&&nat=0&page=1';return true;}return false;}" >删除</a>            
				</td>
              </tr>
                            <tr class="mouse click">
				<td class="list-text"><input name='id[]' type='checkbox' id="id" value='13' /></td>
                <td class="list-text">13</td>
				<td class="list-text"><span>文字链接</span></td>
			    <td class="list-text alignleft">&nbsp;&nbsp;网站建设</td>
				<td class="list-text alignleft">&nbsp;&nbsp;网站建设</td>
				<td class="list-text"><span>否</span></td>
				<td class="list-text">0</td>
                <td class="list-text"><a href="index.php/admin/expand_link/doset?act=nostatus&id=13&&nat=0&page=1"><img src="/assets/statics/base/images/ok_1.gif"></a></td>      
				<td class="list-text">
				<a href="expand_link_edit.html">编辑</a>
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/expand_link/del?id=13&&nat=0&page=1';return true;}return false;}" >删除</a>            
				</td>
              </tr>
                            <tr class="mouse click">
				<td class="list-text"><input name='id[]' type='checkbox' id="id" value='12' /></td>
                <td class="list-text">12</td>
				<td class="list-text"><span>文字链接</span></td>
			    <td class="list-text alignleft">&nbsp;&nbsp;程序开发</td>
				<td class="list-text alignleft">&nbsp;&nbsp;程序开发</td>
				<td class="list-text"><span>否</span></td>
				<td class="list-text">10</td>
                <td class="list-text"><a href="index.php/admin/expand_link/doset?act=nostatus&id=12&&nat=0&page=1"><img src="/assets/statics/base/images/ok_1.gif"></a></td>      
				<td class="list-text">
				<a href="expand_link_edit.html">编辑</a>
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/expand_link/del?id=12&&nat=0&page=1';return true;}return false;}" >删除</a>            
				</td>
              </tr>
                            <tr class="mouse click">
				<td class="list-text"><input name='id[]' type='checkbox' id="id" value='9' /></td>
                <td class="list-text">9</td>
				<td class="list-text"><span>文字链接</span></td>
			    <td class="list-text alignleft">&nbsp;&nbsp;网页设计</td>
				<td class="list-text alignleft">&nbsp;&nbsp;网页设计</td>
				<td class="list-text"><span>否</span></td>
				<td class="list-text">1</td>
                <td class="list-text"><a href="index.php/admin/expand_link/doset?act=nostatus&id=9&&nat=0&page=1"><img src="/assets/statics/base/images/ok_1.gif"></a></td>      
				<td class="list-text">
				<a href="expand_link_edit.html">编辑</a>
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/expand_link/del?id=9&&nat=0&page=1';return true;}return false;}" >删除</a>            
				</td>
              </tr>
                    
   	   <tr> 
            <td class="all" width="40"><input name="chkAll" type="checkbox" id="chkAll" onclick=CheckAll(this.form) value="checkbox"></td>
			<td class="all-submit" colspan="8" align="left" style="padding:5px 10px;">
			<input type='submit' value='删除' class="submit li-submit" onclick="{if(confirm('确定删除吗?')){document.myform.action='index.php/admin/expand_link/delsome?&nat=0&page=1';return true;}return false;}"/>
			
			</td>
          </tr>
		  </form>	 
		  <tr><td colspan="9" class="page_list">
		  <form method='POST' action='index.php/admin/expand_link/index?&nat=0&page=1'>
		<style>.digg4 a{ border:1px solid #ccdbe4; padding:2px 8px 2px 8px; background:#fff; background-position:50%; margin:2px; color:#666; text-decoration:none;}
		.digg4 a:hover { border:1px solid #999; color:#fff; background-color:#999;}
		.digg4 a:active {border:1px solid #000099; color:#000000;}
		.digg4 span.current { padding:2px 8px 2px 8px; margin:2px; text-decoration:none;}
		.digg4 span.disabled { border:1px solid #ccc; background:#fff; padding:1px 8px 1px 8px; margin:2px; color:#999;}
       </style>
 <div class='digg4'>
 <span class="disabled" style="font-family: Tahoma, Verdana;"><b>«</b></span><span class="disabled" style="font-family: Tahoma, Verdana;">‹</span><span class="current">1</span><span class="disabled" style="font-family: Tahoma, Verdana;">›</span><span class="disabled" style="font-family: Tahoma, Verdana;"><b>»</b></span>  共4条  转到<input name='page' class='page_input' value="1" />页 <input type='submit' value=' go ' class="bnt_pinyin"/></form>
		  </div></td></tr>
</table>
</div>
</div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1472 seconds </div>
<script type="text/javascript">
function safesq(){
	var vl = $("#deltype").val();
	var vp = $("option[value='"+vl+"']").text();
		vp = '确定清空'+vp+'？';
	return vp;
}
seachinput($('#searchtext'),'请输入网站标题关键字');
</script>
</body>
</html>
