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
<body id="column">

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

	<div class="position">简体中文 > 网站设置 > <a href="/admin/home/category">栏目设置</a></div>


	</div>
	<div class="clear"></div>

	</div>

<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
	<table cellpadding="0" cellspacing="0" class="table">
		<tr>
	
			<td colspan="3" class="centle" style="font-weight:normal;">
				<a href="#" onclick="return columnshow($(this),'展开所有子栏目','隐藏所有子栏目');" style="float:right; font-weight:normal; padding-right:10px;">隐藏所有子栏目</a>
				&nbsp;&nbsp;<a href="/admin/home/category_add">添加一级栏目</a>&nbsp;&nbsp;
				<font style=' color:#999;'>排序越小越靠前</font>
				<span id="loadtxt"></span>
			</td>
		</tr>
		
		
			 <tr>
			 <td colspan="3">
			  <form name="del" method="Post" action="index.php/admin/category/save">
			  <table cellpadding="0" cellspacing="1" class="table neitable columntables">
				<tr id="list-top"> 
					<td width="30" class="list">ID</td>
					<td width="30" class="list">排序</td>
					<td class="list">栏目名称</td>
					<td class="list" width="140">外部链接</td>
					<td class="list" width="60">所属模块</td>
					<td class="list" width="60">是否启用</td>		
					<td class="list" >操作</td>
				</tr>
                                      <tr class="mouse click column_1">
						<td class="list-text">44</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="44" ></div>
						</td>
						<td class="list-text blues" style="text-align:left;">
							<img src='/assets/statics/base/images/colum1nx.gif' class='columnimg' id='img_44' onclick="oncolumn($(this),'44');" />
							<input type="text" class="text nonull" value="聚贤简述" name="data[title][]" style=" width:155px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"><b>单网页</b></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=44"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=44" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=44" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=44" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=44';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>	
									                       <tr class="mouse click column_1">
						<td class="list-text">45</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="45" ></div>
						</td>
						<td class="list-text blues" style="text-align:left;">
							<img src='/assets/statics/base/images/colum1nx.gif' class='columnimg' id='img_45' onclick="oncolumn($(this),'45');" />
							<input type="text" class="text nonull" value="艺术品展示" name="data[title][]" style=" width:155px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text">文章模型</td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=45"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=45" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=45" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=45" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=45';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>	
					  
					<tr id="class_55" class="none mouse click columnz_45 column_2">
						<td class="list-text">55</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="55" ></div>
						</td>
						<td class="list-text2" id="tr55" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="企业形象网站" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text">文章模型</td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=55"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=55" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=55" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=55" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=55';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_74" class="none mouse click columnz_45 column_2">
						<td class="list-text">74</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="74" ></div>
						</td>
						<td class="list-text2" id="tr74" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="品牌网站设计" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text">文章模型</td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=74"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=74" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=74" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=74" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=74';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_96" class="none mouse click columnz_45 column_2">
						<td class="list-text">96</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="99" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="96" ></div>
						</td>
						<td class="list-text2" id="tr96" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="互动专题设计" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text">文章模型</td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=96"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=96" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=96" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=96" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=96';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_97" class="none mouse click columnz_45 column_2">
						<td class="list-text">97</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="99" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="97" ></div>
						</td>
						<td class="list-text2" id="tr97" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="大型门户网站" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"><b>单网页</b></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=97"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=97" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=97" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=97" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=97';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_101" class="none mouse click columnz_45 column_2">
						<td class="list-text">101</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="99" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="101" ></div>
						</td>
						<td class="list-text2" id="tr101" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="cccc" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=101"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=101" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=101" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=101" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=101';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
														                       <tr class="mouse click column_1">
						<td class="list-text">48</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="48" ></div>
						</td>
						<td class="list-text blues" style="text-align:left;">
							<img src='/assets/statics/base/images/colum1nx.gif' class='columnimg' id='img_48' onclick="oncolumn($(this),'48');" />
							<input type="text" class="text nonull" value="业务范围" name="data[title][]" style=" width:155px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"><b>单网页</b></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=48"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=48" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=48" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=48" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=48';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>	
					  
					<tr id="class_67" class="none mouse click columnz_48 column_2">
						<td class="list-text">67</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="67" ></div>
						</td>
						<td class="list-text2" id="tr67" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="ABOUT US 关于我们" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=67"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=67" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=67" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=67" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=67';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_58" class="none mouse click columnz_48 column_2">
						<td class="list-text">58</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="58" ></div>
						</td>
						<td class="list-text2" id="tr58" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="婚纱摄影" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=58"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=58" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=58" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=58" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=58';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_75" class="none mouse click columnz_48 column_2">
						<td class="list-text">75</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="75" ></div>
						</td>
						<td class="list-text2" id="tr75" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="客片欣赏" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=75"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=75" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=75" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=75" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=75';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_76" class="none mouse click columnz_48 column_2">
						<td class="list-text">76</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="76" ></div>
						</td>
						<td class="list-text2" id="tr76" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="视频专区" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=76"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=76" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=76" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=76" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=76';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_77" class="none mouse click columnz_48 column_2">
						<td class="list-text">77</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="77" ></div>
						</td>
						<td class="list-text2" id="tr77" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="聚焦ARTIZ" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=77"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=77" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=77" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=77" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=77';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
														                       <tr class="mouse click column_1">
						<td class="list-text">50</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="50" ></div>
						</td>
						<td class="list-text blues" style="text-align:left;">
							<img src='/assets/statics/base/images/colum1nx.gif' class='columnimg' id='img_50' onclick="oncolumn($(this),'50');" />
							<input type="text" class="text nonull" value="网上鉴定" name="data[title][]" style=" width:155px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text">产品模型</td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=50"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=50" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=50" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=50" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=50';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>	
					  
					<tr id="class_51" class="none mouse click columnz_50 column_2">
						<td class="list-text">51</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="51" ></div>
						</td>
						<td class="list-text2" id="tr51" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="SEO知识" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=51"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=51" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=51" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=51" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=51';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_78" class="none mouse click columnz_50 column_2">
						<td class="list-text">78</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="78" ></div>
						</td>
						<td class="list-text2" id="tr78" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="优秀设计大赏" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=78"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=78" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=78" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=78" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=78';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_79" class="none mouse click columnz_50 column_2">
						<td class="list-text">79</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="79" ></div>
						</td>
						<td class="list-text2" id="tr79" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="视界团队动态" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text">案例模型</td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=79"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=79" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=79" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=79" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=79';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_52" class="none mouse click columnz_50 column_2">
						<td class="list-text">52</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="2" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="52" ></div>
						</td>
						<td class="list-text2" id="tr52" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="网站建设知识" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=isstatus&id=52"><img src="/assets/statics/base/images/ok_0.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=52" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=52" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=52" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=52';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
										  
					<tr id="class_95" class="none mouse click columnz_50 column_2">
						<td class="list-text">95</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="99" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="95" ></div>
						</td>
						<td class="list-text2" id="tr95" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="网络营销知识" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=95"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=95" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=95" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=95" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=95';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
														                       <tr class="mouse click column_1">
						<td class="list-text">68</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="0" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="68" ></div>
						</td>
						<td class="list-text blues" style="text-align:left;">
							<img src='/assets/statics/base/images/colum1nx.gif' class='columnimg' id='img_68' onclick="oncolumn($(this),'68');" />
							<input type="text" class="text nonull" value="招聘事宜" name="data[title][]" style=" width:155px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"><b>单网页</b></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=68"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=68" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=68" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=68" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=68';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>	
					  
					<tr id="class_98" class="none mouse click columnz_68 column_2">
						<td class="list-text">98</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="99" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="98" ></div>
						</td>
						<td class="list-text2" id="tr98" style="text-align:left; padding-left:10px;">
						   						   <img src='/assets/statics/base/images/bg_column.gif' style="position:relative; top:6px;" />      
						        
							<input type="text" class="text nonull" value="网站地图" name="data[title][]" style=" width:175px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"><b>单网页</b></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=98"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=98" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=98" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=98" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=98';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>		  
						    
														                       <tr class="mouse click column_1">
						<td class="list-text">100</td>
						<td class="list-text">
							<input type="text" class="text no_order" value="99" name="data[ordnum][]" style=" width:40px;"/>
							<div style='display:none;'><input type="hidden" name="data[id][]" value="100" ></div>
						</td>
						<td class="list-text blues" style="text-align:left;">
							<img src='/assets/statics/base/images/colum1nx.gif' class='columnimg' id='img_100' onclick="oncolumn($(this),'100');" />
							<input type="text" class="text nonull" value="在线留言" name="data[title][]" style=" width:155px;"/>
						</td>
						<td class="list-text"><input type="text" class="text nonull" value="" name="data[url][]" style=" width:135px;"/></td>
						<td class="list-text"><b>单网页</b></td>
						<td class="list-text color999"><a href="index.php/admin/category/doset?act=nostatus&id=100"><img src="/assets/statics/base/images/ok_1.gif"></a></td>
						<td class="list-text" width="100">
							<div style=" position:relative;">
							<a href="category_edit.html?id=100" style="float:left; margin-left:10px;">编辑</a>
							<div class="columnmore">
								<span class="text">更多&nbsp;<img src="/assets/statics/base/images/metcolumn12.gif" style="position:relative; bottom:2px;" /></span>
								<div class="none columnmorediv">
								<div><a href="/admin/home/category_ad?id=100" >添加子栏目</a></div>
								<!--<div><a href="index.php/admin/category/move?id=100" >栏目移动</a></div>-->
								<div><a href="javascript:;" onclick="{if(confirm('确定删除吗?')){window.location='index.php/admin/category/del?id=100';return true;}return false;}" >删除</a></div>
								</div>
							</div>
							</div>
						</td>
					</tr>	
									    
		<tr id="bottom-id">
			<td class="list-text"></td>
			<td class="list-text alignleft" colspan='2'>&nbsp;&nbsp;<a href="/admin/home/category_ad" >+添加一级栏目</a></div>
			<td class="list-text"></td>
			<td class="list-text"></td>
			<td class="list-text"></td>
			<td class="list-text"></td>
			<td class="list-text"></td>
		</tr>
   	   </table>
            
   	   </td> 
   	   </tr>
		<tr> 
			<td class="all" width="40"></td>
			<td class="all-submit" colspan="1" style="text-align:left; padding: 5px 10px;">
				<input  type='submit' value='保存' class="submit"/>&nbsp;&nbsp;
			</td>
			<td class="all-submit" colspan="1" style="text-align:right; padding: 5px 10px;">
				<div>

				</div>
			</td>
        </tr>
		<tr>
			<td class="footer" colspan="3">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1290 seconds </td>
		</tr>
</table>
</form>
</div>
</div>
<script type="text/javascript">
function newmodule(my,module,type){
	var mtd = my.parent('td').next();
	if(type>1)mtd.find("span").hide();
	if(my.val()==999){
		mtd.find("input").hide();
		mtd.find('font').empty();
		mtd.find("input[name*='out_url_new_']").show();
	}else if(my.val()>5 && my.val()!=8){
		mtd.find('input').hide();
		mtd.find('font').text(addmodulefold(my.val()));
	}else{
		mtd.find("input").hide();
		mtd.find('font').empty();
		if(type>1 && my.val()==module){
			mtd.find("span").show();
		}else{
		mtd.find("input.foldernonull").show();
		}
	}
}
function addmodulefold(module){
	var fname='';
	switch(module){
		case '6':fname = 'job';break;
		case '7':fname = 'message';break;
		case '9':fname = 'link';break;
		case '10':fname= 'member';break;
		case '11':fname= 'search';break;
		case '12':fname= 'sitemap';break;
		case '100':fname= 'product';break;
		case '101':fname= 'img';break;
	}
	return fname;
}
function columnshow(my,t1,t2){
	var type = my instanceof jQuery?1:0;
	var text = my instanceof jQuery?my.text():my;
		t1   = my instanceof jQuery?t1:1;
		t2   = my instanceof jQuery?t2:0;
	$('img.columnimg').each(function(){
		var xp=$(this).attr('id');
			xp=xp.split('img_');
			xp=xp[1];
		if(text==t1){
			$('.columnz_'+xp).show();
			$(this).attr('src','/assets/statics/base/images/colum1nx2.gif');
		}else{
			$('.columnz_'+xp).hide();
			$(this).attr('src','/assets/statics/base/images/colum1nx.gif');
		}
	});
	if(my instanceof jQuery){
		text==t1?my.text(t2):my.text(t1);
		var num=text==t1?1:0;
		$.ajax({
			url : my.attr('href')+num,
			type: "POST"
		});
	}
	ifreme_methei();
	return false;
}
function columnFormNum(form){
	var list=$("input[name='allid']").val();
	var lists=list.split(',');
	var nlist = '';
	var i;
	reg=/^[0-9]+$/; 
	for(i=0;i<lists.length-1;i++){
		var no_order='no_order_'+lists[i];
		nlist+='&'+no_order+'='+encodeURIComponent($("input[name='"+no_order+"']").val());
		var name='name_'+lists[i];
		nlist+='&'+name+'='+encodeURIComponent($("input[name='"+name+"']").val());
		var nav='nav_'+lists[i];
		nlist+='&'+nav+'='+encodeURIComponent($("select[name='"+nav+"']").val());
		var index_num='index_num_'+lists[i];
		nlist+='&'+index_num+'='+encodeURIComponent($("input[name='"+index_num+"']").val());
		if(!reg.test(lists[i])){
			var bigclass='bigclass_'+lists[i];
			nlist+='&'+bigclass+'='+encodeURIComponent($("input[name='"+bigclass+"']").val());
			var foldername='foldername_'+lists[i];
			nlist+='&'+foldername+'='+encodeURIComponent($("input[name='"+foldername+"']").val());
			var module='module_'+lists[i];
			nlist+='&'+module+'='+encodeURIComponent($("select[name='"+module+"']").val());	
			if($("select[name='"+module+"']").val()=='999'){
				var out_url='out_url_'+lists[i];
				nlist+='&'+out_url+'='+encodeURIComponent($("input[name='"+out_url+"']").val());	
			}			
			var classtype='classtype_'+lists[i];
			nlist+='&'+classtype+'='+encodeURIComponent($("input[name='"+classtype+"']").val());
		}
	}
	nlist+='&action='+$("input[name='action']").val()+'&lang='+$("input[name='lang']").val()+'&anyid='+$("input[name='anyid']").val()+'&allid='+$("input[name='allid']").val()
	return nlist;
}
function columneditoradd(my){
	var list = $("input[name='allid']").val();
	var id = $("input[name='id']");
	var all = $("input[name='allid']");
	var type='editor';
	    allid(id,all);
    var form = $("form[name='del']");
	var aller = all.val();
	    if(aller==''){
		    Problem(user_msg['js23']);
		}else{
			var Ato = Atoform(form,1);
			if(Ato && type == 'editor'){
				Problem(Ato);
			}else{
				if(type)$("input[name='action']").val(type);
				var dataNum = columnFormNum(form);
				$.ajax({
					type: "POST",
					url: form.attr('action'),
					data: "ajaxmetinfo=1"+dataNum,
					success: function(data){
						if(data==0){
							var reurl='delete.php?anyid='+$("input[name='anyid']").val()+'&lang='+$("input[name='lang']").val()+'&action=editorok';
							location.href=reurl;
						}else{
							var reg=/$/;
							if(reg.test(data)){
								var datt = data.split('$');
								var atext='';
									for(i=0;i<datt.length-1;i++){
										datx='';datx = datt[i].split('|');
										$("input[name='"+datx[1]+"']").addClass('focusred');
										atext+=datx[0]+'['+datx[datx.length-1]+']\n';
									}
									alert(atext);
									setTimeout(function (){ $("input").removeClass('focusred'); },3000);
							}else{
								alert('登录超时，请重新登录！');
								var reurl='index.php?anyid='+$("input[name='anyid']").val()+'&lang='+$("input[name='lang']").val();
								location.href=reurl;
							}
						}
					}
				});
			}
		}
	return false;
}
function columnMove(my){
	var w = my.parent('div').width();
	var mv = my.next('.moveb1');
		mv.css('right',w+'px');
	if(mv.html()!=''){
		mv.show();
	}else{
		$.ajax({
			type: "POST",
			url: my.attr('href'),
			data: '',
			success: function(data){
				mv.append(data);
				mv.show();
				var dg = $(document.body).outerHeight(true) - my.offset().top;
				if(dg<(mv.height()+100)){
					mv.css('bottom','0px');
				}else{
					mv.css('top','0px');
				}
			}
		});
	}
	return false;
}
function new1column(my){
	var nvlue = window.prompt("移动为一级栏目必须设置一个新的目录名称(目录名只能是数字或字母)","");

		if(nvlue && nvlue!=''){
			$.ajax({
				type: "POST",
				url: my.attr('href')+'&foldername='+nvlue+'&foldyanzheng=1',
				data: '',
				success: function(data){
					if(data!=''){
						alert(data);
					}else{
						nvlue = my.attr('href')+'&foldername='+nvlue;
						if(linkSmit(my,1,"您确认要移动该栏目吗？")){
							location.href=nvlue;
						}
					}
				}
			});
			return false;
		}else{
			alert('请填写目录名称');
			return false;
		}
}
function new2column(my){
	if(!confirm('是否合并栏目？合并后该目录名称将被修改,点取消则保持原目录名称并进入下一步')){
		nvlue = my.attr('href')+'&removeurl=1';
		my.attr('href',nvlue);	
	}
	return linkSmit(my,1,"您确认要移动该栏目吗？");
}
$(document).ready(function(){
	$('.columnmore').hover(
		function () {
			$(this).find('span.text').addClass("columnmore_hover");
			$(this).find('div.columnmorediv').show();
		},
		function () {
			$(this).find('span.text').removeClass("columnmore_hover");
			$(this).find('div.columnmorediv').hide();
			$(this).find('.moveb1').hide();
		}
	);
	$('.moveb1 .b2box').live('mouseenter',function(){
		var w = $(this).width();
		var dg = $(document.body).outerHeight(true) - $(this).offset().top;
		var moveb = $(this).find('div.moveb2');
		if(dg<(moveb.height()+100)){
			moveb.css('bottom','0px');
		}else{
			moveb.css('top','0px');
		}
		moveb.css('right',w+'px');
		moveb.show();
	}).live('mouseleave',function(){
		$(this).find('div.moveb2').hide();
	});
	columnshow('1');
});
</script>
</body>
</html>
