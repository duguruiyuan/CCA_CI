<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>编辑留言</title>
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


$(function(){

	$('.ly_hf').on('click',function(){

		// 在ajax 调用之前，要先进行数据提交的验证

		var reply_txt = $('.reply').val();
		var ly_id = $('.ly_id').val();


		$.ajax({
		  url:"/admin/home/expand_book_reply",
		  type:"POST",
		  data:{reply:reply_txt,ly_id:ly_id},
		  cache:false,
		  dataType:"json",
		  success: function(data) {
		    if(data.code){
		        alert(data.msg);
		    }else{
		        alert(data.msg);
		    }
		  },
		  error: function(e) {
		    alert('系统繁忙，请稍后重试！');
		    return false;
		  }
		});


	});
});

</script>
</head>
<body>
	<div class="metinfotop">
	<div class="position">简体中文：内容管理 > <a href="/admin/home/expand_book">在线留言</a> > 编辑留言</div>
	<div class="return"><a href="javascript:;" onClick="location.href='javascript:history.go(-1)'">&lt;&lt;返回</a></div>
	</div>
	<div class="clear"></div>
	
	 
<div style="clear:both;"></div>
	
<!-- <form  method="post" name="myform"  action="index.php/admin/expand_book/edit?id=5&?id=5&nat=0&page=1"> -->
<div class="v52fmbx_tbmax">
<div class="v52fmbx_tbbox">
<div class="v52fmbx">
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>留言姓名：</dt>
			<dd>
				<?php echo $ly['name']?>
			 </dd>
		</dl>
		</div>
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>留言内容：</dt>
			<dd>
				<?php echo $ly['content']?>
			 </dd>
		</dl>
		</div>		
		
		
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>联系邮箱：</dt>
			<dd>
				<?php echo $ly['mail']?>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>提交时间：</dt>
			<dd>
				<?php echo $ly['time']?>		</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>回复留言：</dt>
			<dd>
				<textarea name="reply" cols="50" class="textarea gen reply" rows="5"><?php if(!empty($ly['reply'])) echo $ly['reply']?></textarea>
			</dd>
		</dl>
		</div>
		
		<div class="v52fmbx_dlbox">
		<dl>
			<dt>回复审核：</dt>
			<dd>
				<input name="status" type="checkbox" class="checkbox" value="1" checked>
			</dd>
		</dl>
		</div>
		
		<input type="hidden" value="<?php echo $ly['id']?>" class="ly_id" />
		<div class="v52fmbx_dlbox v52fmbx_mo">
			<dl>
				<dt></dt>
				<dd>
					<!-- <input type="submit"  value="保存aluee" class="submit" onclick="return Smit($(this),'myform')" /> -->
					<a href="#" style="display:block;width:90px;height:40px;line-height:40px;text-align:center;background:#005bac;color:#fff;" class="ly_hf">回复</a>
				</dd>
			</dl>
		</div>
	</div>
	
</div>
</div>
</div>      
<!-- </form> -->
<div class="footer">Powered by <b><a href="http://www.phpci.com" target="_blank">phpci 6.0.0 </a></b> &copy;2008-2015 &nbsp;<a href="http://www.phpci.com" target="_blank">phpci Inc.</a> in 0.1297 seconds </div>
</body>


</html>