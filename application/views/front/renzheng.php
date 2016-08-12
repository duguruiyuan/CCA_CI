<!DOCTYPE html>
<html>
<head>
	<title>认证资料临时上传</title>
</head>
<body>
	<form method="post" action="/home/renzheng" id="renzheng">
		
		要素分步（1.表示要素一）<input type="text" name="step" value="1" /><br/>
		名称标题<input type="text" name="title" />名称标题ID<input type="text" name="title_id" /><br/>
		内容<textarea  name="content"></textarea><br/>


		是否需要上传(0不需要1需要)：<input type="text" name="is_up" value="0" /><br/> <br/> <br/> 

		<input type="submit" value="submit" style="margin-left:50px;" >
	</form>
	

	<script type="text/javascript" src="/assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript">
		$(function() { 
			$('#renzheng').on('submit', function(e) {

			e.preventDefault();


		
		
		});
		});
	</script>
	<?php var_dump($rz_arr);
	echo "<br>";
	
	foreach ($rz_arr as $k => $v) {
		# code...

		echo $v['title'] . "<br>"; 
	}


	?>


</body>
</html>

