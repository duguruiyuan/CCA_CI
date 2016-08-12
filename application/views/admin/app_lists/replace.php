<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>内容批量替换器</title>
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
	<div class="position">简体中文：企业应用 > <a href="app.html">我的应用</a> > 内容批量替换器</div>
	
	<div class="return"><a href="javascript:;" onClick="location.href='javascript:history.go(-1)'">&lt;&lt;返回</a></div>
	</div>
	<div class="clear"></div>
	<form method="post" name="myform" action="index.php/admin/app/replace">
<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>我要替换：</dt>
			<dd>
			    <select name="cid" class="select">	
					<option value="0">替换全部</option>
					<option  value="44">聚贤简述</option>
<option  value="45">艺术品展示</option>
<option  value="55">　├ 企业形象网站</option>
<option  value="74">　├ 品牌网站设计</option>
<option  value="96">　├ 互动专题设计</option>
<option  value="97">　├ 大型门户网站</option>
<option  value="101">　├ cccc</option>
<option  value="48">业务范围</option>
<option  value="67">　├ ABOUT US 关于我们</option>
<option  value="58">　├ 婚纱摄影</option>
<option  value="75">　├ 客片欣赏</option>
<option  value="76">　├ 视频专区</option>
<option  value="77">　├ 聚焦ARTIZ</option>
<option  value="50">网上鉴定</option>
<option  value="51">　├ SEO知识</option>
<option  value="78">　├ 优秀设计大赏</option>
<option  value="79">　├ 视界团队动态</option>
<option  value="52">　├ 网站建设知识</option>
<option  value="95">　├ 网络营销知识</option>
<option  value="68">招聘事宜</option>
<option  value="98">　├ 网站地图</option>
<option  value="100">在线留言</option>
				</select>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>替换字段：</dt>
			<dd>
				<select name="files" class="noselect">
					<option value="">选择字段</option>
					<option value="pic">pic单图片</option>
					<option value="pics">pics多图片</option>
					<option value="info">info内容</option>
					<option value="files">files文件</option>
				</select>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>被替换的内容：</dt>
			<dd>
				<textarea name="retexted" cols="60" rows="5" class="textarea gen nonull"></textarea>
		        <span class="tips">只限于上面字段内容的替换</span>
			</dd>
		</dl>
		</div>
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>替换成：</dt>
			<dd>
				<textarea name="retext" cols="60" rows="5" class="textarea gen nonull"></textarea>
			</dd>
		</dl>
		</div>
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>注意：</dt>
			<dd>
				<span style="color:#FF0000">替换过程不可逆，请做好备份，以防误操作造成丢失数据。</span>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
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
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1833 seconds </div>
</body>
</html>