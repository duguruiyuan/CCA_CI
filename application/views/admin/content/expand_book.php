<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>在线留言</title>
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

	<div class="position">简体中文 > 内容管理 > <a href="/admin/home/expand_book">在线留言</a></div>


	</div>
	<div class="clear"></div>

	</div>

 
<div style="clear:both;"></div>

<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<h3 class="v52fmbx_hr">
	
	<span class="formright">
		<select name="new" id="new" onChange="changes($(this));">
			<option value="index.php/admin/expand_book">所有信息</option>
						<option value="index.php/admin/expand_book?nat=1" >未审核</option>
						<option value="index.php/admin/expand_book?nat=2" >已审核</option>
						<option value="index.php/admin/expand_book?nat=3" >未回复</option>
						<option value="index.php/admin/expand_book?nat=4" >已回复</option>
					</select>
		<form method="post" action="index.php/admin/expand_comment/index" >
			<input name="keyword" type="text" value="" class="text100" />
			<input type="submit" value="搜索" class="bnt_pinyin"/> 
		</form>
	</span>
</h3>
<table cellpadding="2" cellspacing="1" class="table">
		

              <tr>
			    <td width="40" class="list" style="padding:0px; text-align:center;">选择</td>
                <td class="list">留言内容</td>          
                <td width="150" class="list" style="padding:0px; text-align:center;">提交时间</td>
				<td width="100" class="list" style="padding:0px; text-align:center;">姓名</td>
				<td width="50" class="list" style="padding:0px; text-align:center;">审核</td>   
				<td width="100" class="list" style="padding:0px; text-align:center;">操作</td>
              </tr>
			  <form name="myform" method="post" id="myform">
			  <?php foreach ($ly_list as $k => $v) { ?>
              <tr class="mouse click">
                  <td  class="list-text"><input name='id[]' type='checkbox' id="id" value='5' /></td>
			      <td  class="list-text alignleft">&nbsp;&nbsp;<?php echo $v['name']?></td>
			      <td  class="list-text color999"><?php echo $v['time']?></td>
				  <td  class="list-text color999"><?php echo $v['name']?></td>
				  <td  class="list-text color999"><a href="index.php/admin/expand_book/doset?act=nostatus&id=5&&nat=0&page=1"><img src="/assets/statics/base/images/ok_1.gif"></a></td>				
				  <td class="list-text"><a href="/admin/home/expand_book_edit/<?php echo $v['id']?>" >查看</a>&nbsp;&nbsp;
				<a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='/admin/home/expand_book_del/<?php echo $v["id"]?>';return true;}return false;}" >删除</a></td>
              </tr>
              <?php } ?>    
		  </form>	
		  <tr>
		     <td colspan="9" class="page_list" style="padding:5px 0px;">
				  <form method='POST' action='index.php/admin/expand_book/index?&nat=0&page=1'>
				  <style>.digg4 a{ border:1px solid #ccdbe4; padding:2px 8px 2px 8px; background:#fff; background-position:50%; margin:2px; color:#666; text-decoration:none;}
		.digg4 a:hover { border:1px solid #999; color:#fff; background-color:#999;}
		.digg4 a:active {border:1px solid #000099; color:#000000;}
		.digg4 span.current { padding:2px 8px 2px 8px; margin:2px; text-decoration:none;}
		.digg4 span.disabled { border:1px solid #ccc; background:#fff; padding:1px 8px 1px 8px; margin:2px; color:#999;}
		 </style>
		 <div class='digg4'>
		 <span class="disabled" style="font-family: Tahoma, Verdana;"><b>«</b></span><span class="disabled" style="font-family: Tahoma, Verdana;">‹</span><span class="current">1</span><span class="disabled" style="font-family: Tahoma, Verdana;">›</span><span class="disabled" style="font-family: Tahoma, Verdana;"><b>»</b></span>  共4条 		 转到<input name='page' class='page_input' value="1" />页 <input type='submit' value=' go ' class="bnt_pinyin"/></form>
		  </div>
		  </td>
	  </tr>
</table>
</div>
</div>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1255 seconds </div>
<script type="text/javascript">
$(document).ready(function(){
	seachinput($('#searchtext'),'用户名查询');
});
</script>
</body>
</html>
