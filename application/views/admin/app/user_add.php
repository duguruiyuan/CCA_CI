<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>添加会员</title>
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

function userpwd2null(userpwd2){
	$('#userpwd2').text('请输入确认密码！');
	$('#userpwd2').show();
	$("input[type='submit']").attr('disabled',true);
}

function userpwdnull(userpwd){
	$('#userpwd').text('请输入登录密码！');
	$('#userpwd').show();
	$("input[type='submit']").attr('disabled',true);
}

function userpwdnot(userpwd2){
	
	$('#userpwd2').text('两次密码输入不一致！');
	$('#userpwd2').show();
	$("input[type='submit']").attr('disabled',true);
	
}

function usercheck(username){
	$.ajax({
	   type: "POST",
	   url: "index.php/admin/user/usercheck?username="+username.val(),
	   success: function(msg){
		   username.next('span').html(msg);
	   }
	});
}

$(document).ready(function(){
    var userpwd = $("input[name='userpwd']");
    var userpwd2 = $("input[name='userpwd2']");
	
	userpwd.focusout(function(){
		if($(this).val()==''){
		    userpwdnull($(this));
		}else if(userpwd2.val()!='' && userpwd2.val()!=userpwd.val()){
		    $('#userpwd').hide();
			userpwdnot(userpwd2);
		}else if(userpwd2.val()==''){
		    $('#userpwd').hide();
			userpwd2null(userpwd2);
		}else{ 
			$('#userpwd').hide();
			$("input[type='submit']").attr('disabled',false);
		}
	});
	
	userpwd2.focusout(function(){
		if($(this).val()==''){
		    userpwd2null($(this));
		}else if(userpwd.val()!='' && userpwd2.val()!=userpwd.val()){
			userpwdnot($(this));
		}else if(userpwd.val()==''){
		    $('#userpwd2').hide();
			userpwdnull(userpwd);
		}else{ 
			$('#userpwd2').hide();
			$("input[type='submit']").attr('disabled',false);
		}
	});
	
	$('#username').focusout(function(){
		if($(this).val()!=''){
			usercheck($(this));
		}
	});
	
});
</script>

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

	<div class="position">简体中文 > 企业应用 > <a href="user.html">会员管理</a> > 添加会员</div>


	<div class="return"><a href="javascript:metreturn('');">&lt;&lt;返回</a></div>

	</div>
	<div class="clear"></div>

<script type="text/javascript">
$("html", parent.document).find('.returnover').remove();
</script>



<div class="stat_list">
	<ul>
		<li class="now"><a href="user.html" title="会员管理">会员管理</a></li>
		<li ><a href="user_group.html" title="会员组设置">会员组设置</a></li>
		<li ><a href="user_config.html" title="会员功能设置">会员功能设置</a></li>
	</ul>
</div>
<div style="clear:both;"></div>
<form method="POST" name="myform" id="myform" action="addUser.php" target="_self">
<div class="v52fmbx_tbmax v52fmbx_tbmaxmt">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
		<div class="v52fmbx_dlbox">
				<dl>
			<dt>登陆账户名：</dt>
			<dd>
				<input id='username' name="username" type="text" autocomplete="off" class="text nonull" value="<?php echo $user['id']?>">
			    <span class="red"></span>
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>登录密码：</dt>
			<dd>
				<input name="userpwd" type="password" autocomplete="off" class="text nonull"><span id='userpwd'></span>
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>密码确认：</dt>
			<dd>
				<input name="userpwd2" type="password" autocomplete="off" class="text nonull"><span id='userpwd2'></span>
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>机构名称：</dt>
			<dd>
				<input name="name" type="text" class="text">
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>法人：</dt>
			<dd>
				<input name="sex" type="text" value="1" class="text">
			
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>等级：</dt>
			<dd>
				<input name="level" type="text">
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>胸痛中心运行时间</dt>
			<dd>
				<input name="run_duration" type="text" value="1" class="text">
			</dd>
		</dl>
		</div>

		<div class="v52fmbx_dlbox">
		<dl>
			<dt>认证负责人:</dt>
			<dd>
				<input name="level" type="text" value="1" class="text">
				
			</dd>
		</dl>
		</div>

		<div class="v52fmbx_dlbox">
		<dl>
			<dt>认证负责人职务:</dt>
			<dd>
				<input name="level" type="text" value="1" class="text">
				
			</dd>
		</dl>
		</div>


		<div class="v52fmbx_dlbox">
		<dl>
			<dt>联系电话：</dt>
			<dd>
				<input name="tel" type="text" class="text">
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>负责人邮箱：</dt>
			<dd>
				<input name="mobile" type="text" class="text nonull">
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>联络人姓名</dt>
			<dd>
				<input name="name" type="text" class="text nonull">
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>联络人职务</dt>
			<dd>
				<input name="qq" type="text" class="text">
			</dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>联络人职务</dt>
			<dd>
				<input name="qq" type="text" class="text">
			</dd>
		</dl>
		</div>

		
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>会员类型：</dt>
			<dd>
			  <select name="gid" id="usertype" >
				  <option value='' >选择类型</option>
  				  <option value='0' >机构</option>
  				  <option value="1">个人</option>
  			  </select>
			</dd>
		</dl>
		</div>

		<div class="v52fmbx_dlbox v52fmbx_mo">
		<dl>
			<dt></dt>
			<dd>
				<input type="submit" id="passsubmit" value="保存" class="submit" onclick="return Smit($(this),'myform')" />
			</dd>
		</dl>
		</div>
</div>
</div>
</div>
</form>
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1856 seconds </div>
</body>
</html>

