<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加内容</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/metinfo.css" />
<link rel="stylesheet" type="text/css" href="/assets/statics/base/css/newstyle.css" />
<script type="text/javascript">var basepath='/assets/statics/base/images';</script>
<script type="text/javascript" src="/assets/statics/base/js/metvar.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/jQuery1.7.2.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/iframes.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/cookie.js"></script>
<script charset="utf-8" src="/assets/statics/lib/kind/kindeditor-min.js"></script>
<script charset="utf-8" src="/assets/statics/lib/kind/lang/zh_CN.js"></script>
<script type="text/javascript">
var gettagspath="";
var upload_json="/assets/statics/lib/kind/php/upload_json.php";
var file_manager_json="/assets/statics/lib/kind/php/file_manager_json.php";
KindEditor.ready(function(K) {
	var editor = K.create('textarea[name="info"]', {
		urlType : 'domain',
		allowFileManager : true
	});
	K('#image').click(function() {
		editor.loadPlugin('image', function() {
			editor.plugin.imageDialog({
				imageUrl : K('#pic').val(),
					clickFn : function(url, title, width, height, border, align) {
						K('#pic').val(url);
						$("#img").attr("src",url);
						editor.hideDialog();
					}
			});
		});
	});
	var colorpicker;
	K('#colorpicker').bind('click', function(e) {
		e.stopPropagation();
		if (colorpicker) {
			colorpicker.remove();
			colorpicker = null;
			return;
		}
		var colorpickerPos = K('#colorpicker').pos();
		colorpicker = K.colorpicker({
			x : colorpickerPos.x,
			y : colorpickerPos.y + K('#colorpicker').height(),
			z : 19811214,
			selectedColor : 'default',
			noColor : '无颜色',
			click : function(color) {
				    K('#color').val(color);
				    $("#title").css("color", color); 
					colorpicker.remove();
					colorpicker = null;
				}
			});
		});
		K(document).click(function() {
			if (colorpicker) {
				colorpicker.remove();
				colorpicker = null;
			}
	});
});

</script>

<script type="text/javascript">
$(document).ready(function(){
	ifreme_methei();
});
</script>
</head>
<body>
	<div class="metinfotop">
	<div class="position">简体中文：内容管理 > <a href="index.php/admin/content">内容管理</a> > <a href="index.php/admin/news">文章管理</a> > 添加文章</div>
	<div class="return"><a href="javascript:;" onClick="location.href='javascript:history.go(-1)'">&lt;&lt;返回</a></div>
	</div>
	<div class="clear"></div>
	
<form  method="post" name="myform" action="/admin/home/news_update">
<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>所属栏目：</dt>
			<dd>
			    <select name="type">
				    <option value="0">最新通知</option>
				    <option value="1">大事记</option>
				    <option value="2">会议新闻</option>
				    <option value="3">经验交流</option>
			    </select>
			<!-- zd tj sh 三项选择尚未完成 -->
				<input name="zd" type="checkbox" class="checkbox" value="1" >&nbsp;置顶&nbsp;&nbsp;&nbsp;
				<input name="tj" type="checkbox" class="checkbox" value="1" >&nbsp;推荐&nbsp;&nbsp;&nbsp;
				<input name="sh" type="checkbox" class="checkbox" value="1" checked="checked">&nbsp;审核&nbsp;&nbsp;&nbsp;
				 
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>标题：</dt>
			<dd>
			    <input id="color" name="style" type="hidden" value="">
				<input name="title" id="title" type="text" class="text nonull title" value="<?php echo $news['title']?>">
				<img id="colorpicker" src="/assets/statics/base/images/colour.png">
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>缩略图：</dt>
			<dd>
				<input name="pic" id="pic" type="text" class="text" value="">
				<input type="button" id="image" class="bnt_public" value="图片上传"/>
				<img id="img" width="80" height="50" src="/assets/statics/base/images/nopic.gif">
			</dd>
		</dl>
		</div>
		<h3 class="v52fmbx_hr metsliding" sliding="3">参数设置</h3>
		 
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>发布人：</dt>
			<dd>
			    <input name="publish_user" type="text" class="text mid pub_user" size="10" value="<?php echo $news['publish_user']?>">
			    排序：
				<input name="order" type="text" class="text mid order" size="10" value="<?php echo $news['order']?>">
				<span class="tips">数字越大越靠前</span>
			</dd>
		</dl>
		</div>

		<div class="v52fmbx_dlbox">
		<dl>
			<dt>点击次数：</dt>
			<dd>
				<input name="click_ct" type="text" class="text mid clk_ct" size="10"  value="0">
				<span class="tips">点击次数越多，热门信息中排名越靠前</span>
				来源：
				<input name="from" type="text" class="text from" value="<?php echo $news['from']?>">
				<span class="tips">文章来自哪个网站？</span>
			</dd>
		</dl>
		</div>
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>发布时间：</dt>
			<dd>
				<input name="publish_time" type="text" class="text upd_time" value="<?php echo $news['update_time']?>">
				<span class="tips">当前时间为：2015-03-10 16:27:49 注意不要改变格式。</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>详细内容：</dt>
			<dd>
				<textarea class="ckeditor" name="info" style="width:98%; height:500px;"><?php echo $news['content']?></textarea>
				<!--<input name="frist" type="checkbox" class="checkbox" value="1" >&nbsp;提取首张图片为缩略图-->
				
			</dd>
		</dl>
		</div>
		<h3 class="v52fmbx_hr metsliding" sliding="3">搜索引擎优化设置(seo)</h3>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>页面Title：</dt>
			<dd>
				<input name="page_title" type="text" class="text page_title" value="<?php echo $news['page_title']?>">
				<span class="tips">为空则使用SEO参数设置中设置的title构成方式</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>关键词：</dt>
			<dd>
				<input name="keywords" type="text" class="text keywords" size="40"  value="<?php echo $news['keywords']; ?>">
				<span class="tips">用于搜索引擎优化,多个关键词请用&quot;,&quot;隔开</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>简短描述：</dt>
			<dd>
				<textarea name="description" class="textarea gen descr" cols="60" rows="5" ><?php echo $news['description']; ?></textarea>
			</dd>
		</dl>
		</div>
		<input type="hidden" value="<?php echo $news['id']?>" name="news_id" />
		<div class="v52fmbx_dlbox v52fmbx_mo">
			<dl>
				<dt></dt>
				<dd>
					<input type="submit"  value="保存" class="submit" onclick="return Smit($(this),'myform')" />
					<!-- <a href="/admin/home/news_update" style="display:block;width:90px;height:40px;line-height:40px;text-align:center;background:#005bac;color:#fff;" class="news_hf">保存</a> -->
				</dd>
			</dl>
		</div>
	</div>
	
	<div class="v52fmbx_dlbox v52fmbx_mo" style="height:200px">
		 <dl>
			<dt></dt>
			<dd></dd>	
		</dl>	
	</div>
	
</div>
</div>
</div>      
</form>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.0943 seconds </div>
<script type="text/javascript">

$(function(){

	$('.news_hf').on('click',function() {
		// 在ajax 调用之前，要先进行数据提交的验证

		// var news_title = $('.title').val();
		// var news_id = $('.id').val();
		// var news_content = $('.content').val();
		// var news_page_title = $('.page_title').val();
		// var news_desc = $('.desc').val();
		// var news_pub_user = $('.pub_user').val();
		// var news_upd_time = $('.upd_time').val();
		// var news_clk_ct = $('.clk_ct').val();
		// var news_order = $('.order').val();
		// var news_from = $('.from').val();
		// var news_keywords = $('.keywords').val();

		// $.ajax({
		//   url:"/admin/home/news_update",
		//   type:"POST",
		//   data:{news_title:news_title,news_id:news_id,
		//   		news_content:news_content,
		//   		news_page_title:news_page_title, news_desc:news_desc,
		//   		news_pub_user:news_pub_user, news_upd_time:news_upd_time,
		//   		news_clk_ct:news_clk_ct, news_order:news_order,	
		//   		news_from:news_from, news_keywords:news_keywords
		//   			},
		//   cache:false,
		//   dataType:"json",
		//   success: function(data) {
		//     if(data.code){
		//     	// 成功返回了
		//     	// 需要返回留言列表页PDO
		//         alert(data.msg);
		//     }else{
		//         alert(data.msg);
		//     }
		//   },
		//   error: function(e) {
		//     alert('系统繁忙，请稍后重试！');
		//     return false;
		//   }
		// });
	});

});
</script>
</body>
</html>