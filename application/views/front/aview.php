<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>中国急性心肌梗死救治项目</title>
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link  href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/assets/css/base.css" rel="stylesheet" type="text/css">
<link href="/assets/css/query.css" rel="stylesheet" type="text/css">
<link href="/assets/css/style.css" rel="stylesheet" type="text/css">
<!-- <script src="/js/jquery.min.js"></script> -->
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/md5.min.js"></script> 
<script src="/assets/js/index.js"></script>

<script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>
<style>

.load{
	
	background-image:url('img/loader.gif');
	background-position:right;
	background-repeat:no-repeat;
	
}
.table_f  td, tr{
	
	border:1px solid #20a06b;
	height:40px;
	
	}

</style>	

</head>

<body>

<div id="wrapper" class="homebg">
<!--header start-->
<?php  include 'common/_header.php'  ?>
<!--header end-->
  
  <div id="container">
    <div style="width:800px; margin:0 auto;">
      <p>
        <h2 style="text-align:center;"><?php echo $art['title']?></h2>
        <br>
        <?php echo $art['content']?>
      </p>
      
      
<div style="padding-left:500px; text-align:right;">
    <?php echo $art['publish_user']?><br><br>
    中国胸痛中心认证工作委员会<br><br>
    中国胸痛中心认证办公室<br><br>
    <?php echo $art['update_time']?>
</div>
      <hr>
    </div>
  </div>
  
  <!--content end--> 
  
<!--footer start-->
<?php include 'common/_footer.php' ?>
<!--footer end-->
</div>

</body>
</html>
