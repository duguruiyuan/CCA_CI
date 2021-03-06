<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>中国胸痛中心总部后台管理系统</title>
<link href="favicon.ico" rel="shortcut icon" />
<link href="/assets/statics/base/css/metinfo_box.css" rel="stylesheet" />
<link href="/assets/statics/lib/asyncbox/skins/ZCMS/asyncbox.css" type="text/css" rel="stylesheet" />
</head>
<script type="text/javascript" src="/assets/statics/base/js/jQuery1.7.2.js"></script>
<script type="text/javascript" src="/assets/statics/base/js/cookie.js"></script>
<script type="text/javascript" src="/assets/statics/lib/asyncbox/AsyncBox.v1.4.5.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#kzqie").click(function(){
		var my = $(this);
		if(my.text()=='宽版'){
			$('#content,#top .topnbox').animate({ width: '99%'}, 80);
			$.ajax({url : '',type: "POST"});
			my.attr('title','切换到窄版');
			my.text('窄版');
			setTimeout("topwidth(100)",100);
		}else{
			$('#content,#top .topnbox').animate({ width: '1000px'}, 80);
			$.ajax({url : '',type: "POST"});
			my.attr('title','宽版');
			my.text('宽版');
			setTimeout("topwidth(100)",100);
		}
	});
});
$(function() {
    $("#cache").click( function () { 
	    if(confirm('确定清除吗?')){
			$.ajax({
				type: "post",
				cache: !1,
				url: "index.php/admin/home/clear",
				data: "",
				timeout: 1e4,
				error: function() {},
				success: function(e) {
					if (e>0) {
					    asyncbox.tips("清除成功",'success');
					} else {
					    asyncbox.tips('清除失败','error');
					}
				}
			})
		}
	});  
})
</script>


<style>
#content,#top .topnbox{ width:1000px;}
#top .floatr li a span{ behavior: url(/assets/statics/images/iepngfix.htc); }
</style>
<body id="indexid">
<div id="metcmsbox">
<div id="top"> 
	<div class="topnbox">
    <div class="floatr">
		<div class="top-r-box">
		<div class="top-right-boxr">
			<div class="top-r-t">
				<ol class="rnav">
					<li class="list">您好 <a href="#" id="mydata" target="main" title="编辑 admin" class="tui"><?php echo $_SESSION['admin']?></a></li>
					<li class="line">|</li>
					<li class="list"><a target="_top" onclick="{if(confirm('确定退出吗?')){window.location='/admin/home/logout';return true;}return false;}" href="javascript:;" id="outhome" title="退出" class="tui">退出</a></li>
					<li class="line">|</li>
					<li class="list"><a href="javascript:;" id="kzqie" title="切换到宽版">宽版</a></li>
                    <li id="langcig" class="list langli">
					    <a id="cache" href="javascript:alert('缓存清理成功！')">清理缓存</a>
						<span>|</span>
						<a href="javascript:alert('暂时无法绑定邮箱！')" target="_blank">绑定邮箱</a>						<div class="langlist" style="display:none;"></div>
					</li>
					

				</ol>
				<div class="clear"></div>
			</div>
		</div>
		<div></div>
		<div class="nav">
            <ul id="topnav" class="topnav">
   
                           
                <li id="metnav_1" class="list">
					<a href="javascript:;" id="nav_1" class="onnav" hidefocus="true">
					
					<p>我的工作</p>
					</a>
				</li>
				<li id="metnav_10" class="list">
					<a href="javascript:;" id="nav_10"  hidefocus="true">
					<p>栏目编辑</p>
					</a>
				</li>
				<li id="metnav_37" class="list">
					<a href="javascript:;" id="nav_37"  hidefocus="true">
					
					<p>发布管理</p>
					</a>
				</li>
				                <li id="metnav_12" class="list">
					<a href="javascript:;" id="nav_12"  hidefocus="true">
					
					<p>用户管理</p>
					</a>
				</li>
				<li id="metnav_20" class="list">
					<a href="javascript:;" id="nav_20"  hidefocus="true">
					
					<p>网站设置</p>
					</a>
				</li>
				
            </ul>
		</div>
		</div>
    </div>
    <div class="floatl">
	    <a href="" hidefocus="true" id="met_logo"><img src="/assets/statics/base/images/logo_7_26.png" alt="phpci企业网站管理系统" title="phpci企业网站管理系统" />
        </a>
	</div>
	</div>
</div>
<div id="content">
    <div class="floatl" id="metleft">
		<div class="floatl_box">
	    <div class="nav_list" id="leftnav">
			<div class="fast">
				<a target="_blank" href="" id="qthome" title="网站首页">后台首页</a>
			</div>
                        <ul  id="ul_1">
									<li ><a href="/admin/home/main" id="nav_1_2" target="main" class="on" title="系统信息" hidefocus="true">系统信息</a></li>
			       					<li ><a href="/admin/home/site" id="nav_1_49" target="main"  title="基本设置" hidefocus="true">基本设置</a></li>
			       					<li ><a href="/admin/home/category" id="nav_1_77" target="main"  title="栏目管理" hidefocus="true">栏目管理</a></li>
			       					<li ><a href="/admin/home/theme" id="nav_1_78" target="main"  title="界面风格" hidefocus="true">界面风格</a></li>
			       					 
			       		</ul>
                        <ul style="display:none;" id="ul_10">
										<li ><a href="/admin/home/content" id="nav_10_58" target="main"  title="内容管理" hidefocus="true">内容管理</a></li>
			       					 
			       					<li ><a href="/admin/home/recycle" id="nav_10_59" target="main"  title="内容回收站" hidefocus="true">内容回收站</a></li>
			       		</ul>
                        <ul style="display:none;" id="ul_37">
									 
			       					<li ><a href="/admin/home/expand_link" id="nav_37_13" target="main"  title="友情链接" hidefocus="true">友情链接</a></li>
			       					<li ><a href="/admin/home/expand_ad" id="nav_37_63" target="main"  title="站内广告" hidefocus="true">站内广告</a></li>
			       					 
			       			</ul>
                        <ul style="display:none;" id="ul_12">
										<li ><a href="/admin/home/app" id="nav_12_54" target="main"  title="我的应用" hidefocus="true">常用工具</a></li>
			       					<li ><a href="/admin/home/app_lists" id="nav_12_79" target="main"  title="应用市场" hidefocus="true">辅助工具</a></li>
			       			</ul>
                        <ul style="display:none;" id="ul_20">
									<li ><a href="/admin/home/category" id="nav_20_9" target="main"  title="栏目管理" hidefocus="true">栏目管理</a></li>
			       					<li ><a href="/admin/home/theme" id="nav_20_21" target="main"  title="界面风格" hidefocus="true">界面风格</a></li>
			       					<li ><a href="/admin/home/jpeg" id="nav_20_48" target="main"  title="水印缩图" hidefocus="true">水印缩图</a></li>
			       					<li ><a href="/admin/home/safe" id="nav_20_47" target="main"  title="网站安全" hidefocus="true">网站安全</a></li>
			       					<li ><a href="/admin/home/admin_user" id="nav_20_5" target="main"  title="管理员管理" hidefocus="true">管理员管理</a></li>
			       					<li ><a href="/admin/home/expand_backup" id="nav_20_35" target="main"  title="数据备份" hidefocus="true">数据备份</a></li>
			       			</ul>
             

	    </div>
		<div class="claer">
        
        </div>
	
		<div class="left_footer"><div class="left_footer_box"><a href="http://www.phpci.com" target="_blank">我要提建议</a></div></div>
		
		</div>
	</div>
    <div class="floatr" id="metright">
        <div class="iframe">
		    <div class="min">	
		      <iframe frameborder="0" id="main" name="main" src="/admin/home/main" height="100%" width="100%"  
			onload="this.height=this.contentWindow.document.documentElement.scrollHeight" scrolling="no">
              </iframe>
            </div>
		</div>
    </div>
	<div class="clear"></div>
	</div>
</div>
<div class="footer">
<!--Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 3.0590 seconds-->

<p>中国胸痛中心总部</p> 
<p>后台管理系统</p>

</div>
<script src="/assets/statics/base/js/metinfo.js" type="text/javascript"></script>
</body>
</html>
