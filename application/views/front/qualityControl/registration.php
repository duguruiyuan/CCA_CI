 <?php

require_once('../app/login.php');// Start Session and check if have the session stored.

//if(isset($_SESSION['login_user'])) { // if has the session called 'login_user' then 
									// head to profile.php  
	
	//echo "ok"; //test
	
//	header('Location:profile.php');
	
//	}
//else echo "not";	// if not work-->
error_reporting(0);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>中国胸痛中心总部</title>
<link href="../css/base.css" rel="stylesheet" type="text/css">

<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen, projection"/>


<!-- <script src="/js/jquery.min.js"></script> -->
<script src="../js/jquery-1.11.3.min.js"></script>
<script src="../js/bootstrap.min.js"></script>

<script type="text/javascript" language="javascript" src="../js/jquery.dropdownPlain.js"></script>
<script src="../js/md5.min.js"></script>

<style>
.reg{ font-size:16px; text-align:center; padding-left:180px;}
.reg li{ float:left; list-style:none; margin-left:30px;font-family:'Microsoft YaHei','Hiragino Sans GB',Helvetica,Arial,'Lucida Grande',sans-serif;}

</style>	

</head>

<body>


<!--header start-->

	

</div>
<!--header end-->
<!--content end-->


		  
<div class="reg">
	      <ul class="menu">
                <li style=" "><a href="../verify/registrationForm.php">认证机构注册</a></li>
                <li><a href="../verify/personal.php" target="content">个人注册</a></li>        
            </ul>
</div>

         </div>
         <div class="about-right">
            
             <div class="news-content">
    
                <iframe name="content" src="../verify/registrationForm.php" frameborder="0" height="100%" width="100%"  onload="this.height=this.contentWindow.document.documentElement.scrollHeight" scrolling="no">
                    
                </iframe>
            </div>

<!--content end-->

<!--footer start-->


<!--footer end-->
</div>

</body>
</html>
