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

.load{
	
	background-image:url('../img/loader.gif');
	background-position:right;
	background-repeat:no-repeat;
	
}

</style>	

</head>

<body>

<div id="wrapper" class="homebg">
<!--header start-->
<div id="header">

<div class="header-top">

	<div class="top-right">
    	<div class="top-link">
          <a href="../aboutus.php" style="padding-left:1px;text-decoration:underline">关于我们</a>
          &nbsp; 
           <a href="../index_28.php" style="text-decoration:underline">返回首页</a>
           &nbsp; 
           <a href="../index_28.php" style="text-decoration:underline">反馈意见</a>
           
        </div>
        <div class="QRCode">	
        <a href="#"><img id="first" src="../img/weixin二维码.jpg" alt="" style="float:left"></a>
            
        <img id="sec" src="../images/weixin.jpg" alt="" >
         <img id="sec" src="../images/sina.jpg" alt="" >	
     	
        </div>
    </div>
	<div class="logo"><a href="../index_28.php"><img src="../img/logo.png" width="100%" height="100%"/></a>
    </div>
    <div class="title">
    	<p>中国胸痛中心总部</p>
        <div class="eng">Headquarter of China Chest Pain Centers</div>
    </div>
<!--    <div class="login" style="float:left; margin-left:200px;padding-top:20px;width:100px">
		<?php if($_SESSION['login_user']): ?>
         
         <a href="profile.php"><i class="glyphicon glyphicon-user"></i>
       
         <?php echo $_SESSION['login_user']; ?>
          </a> <a href="./app/logout.php">登出</a>
          <?php else: ?>
          <a href="#account">登陆</a>
         <?php endif ?>
        
     </div>-->
    <div class="search-box">
    
    	<form class="search-form" id="form" action="#" method="post">
       
                <input type="text" name="country" id="country" onkeyup="suggest(this.value)" 
                onblur="fill();" placeholder=" 站内搜索..."; autocomplete="off">
                <button class="search-btn" value="搜索" style="float:left">搜索</button>
        

          <div id="suggestions" class="suggestionsBox" style="display:none;">
            	               
                <div id="suggestionList" class="suggestionList">
                &nbsp;
                </div>
            </div>
        </form>
        
    </div>
   </div> 
<div class="mainnav2">

 <ul class="dropdown">
 
        	<li><a href="../verify22_iframeTest.php">我想</a>
        		<ul class="sub_menu">
        			 <li><a href="../verify/verify22_iframeTest.php">认证须知</a></li>
      
        			 <li><a href="../verify/selfEvaluation.html">自我评估</a></li>
        			 <li><a href="../verify/registrationForm.php">认证申请</a></li>
        			 <li><a href="../verify/Phase query.html">进度查询</a></li>
        			 <li><a href="../verify/Qualification_inquiry.html">资质查询</a></li>
  
        		</ul>
        	</li>
 
        	<li><a href="../verify22_iframeTest.php">认证</a>
        		<ul class="sub_menu">
        			<li><a href="../verify/verify22_iframeTest.php">认证须知</a></li>
      
        			 <li><a href="../verify/selfEvaluation.html">自我评估</a></li>
        			 <li><a href="../verify/registrationForm.php">认证申请</a></li>
        			 <li><a href="../verify/Phase query.html">进度查询</a></li>
        			 <li><a href="../verify/Qualification_inquiry.html">资质查询</a></li>
  
        		</ul>
        	</li>
        	<li><a href="#">培训</a>
        		<ul class="sub_menu">
        			<li><a href="../train/zxrc.html">最新日程</a></li>
                            <li><a href="../train/pxdt.html">培训动态</a></li>
                            <li><a href="../train/kcyl.html">课程一览</a></li>
                            <li><a href="../train/TTT.html">讲师申请</a></li>
                            <li><a href="#">讲师风采</a></li>
  
        		</ul>        
        	</li>
        	<li><a href="#">质控</a>
         		<ul class="sub_menu">
        			<li><a href="zkzb.html">质控指标</a></li>
      
        			 <li><a href="#">统计分析</a></li>
        			 <li><a href="#">我的质控</a></li>
        			 <li><a href="#">科研课题</a></li>
  
        		</ul>          		
        	</li>
        	<li><a href="#">发展动态</a>
        		<ul class="sub_menu">
        			 <li><a href="../development/news.html">新闻事件</a></li>
        			 <li><a href="../development/map.php">认证地图</a></li>
        			 <li><a href="#">阶段目标</a></li>
        		</ul>
        	</li>
            <li><a href="#">区域认证</a>
        		<ul class="sub_menu">
        			 <li><a href="../development/news.html">新闻事件</a></li>
        			 <li><a href="../development/map.php">认证地图</a></li>
        			 <li><a href="#">阶段目标</a></li>
        		</ul>
        	</li>
        	<li><a href="#">示范中心</a>
        		<ul class="sub_menu">
        			 <li><a href="#">认证标准</a></li>
        			 <li><a href="#">成果展示</a></li>
        			 <li><a href="#">信息化专栏</a></li>
        		</ul>
        	</li>
        	<li><a href="#">基层胸痛</a>
        		<ul class="sub_menu">
        			 <li><a href="#">认证标准</a></li>
        			 <li><a href="#">基层风采</a></li>
        		</ul>
        	</li>
            <li><a href="">星火计划</a>
            <ul class="sub_menu">
        			 <li><a href="#">计划简介</a></li>
        			 <li><a href="#">最新进展</a></li>
        			 <li><a href="#">成员一览</a></li>
        		</ul></li>
			<li><a href="#">胸痛学院</a>
        		<ul class="sub_menu">
        			 <li><a href="#">指南共识</a></li>
        			 <li><a href="#">在线学习</a></li>
        			 <li><a href="#">下载区</a></li>
        		</ul>
        	</li>
			
        </ul>

</div>


<div id="carousel1" class="carousel slide" data-ride="carousel" style="margin-top:1px">
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="../img/任重道远100 242版本3.png" alt="First slide image" class="center-block">
<!--      <div class="carousel-caption">
        <h3>First slide Heading</h3>
        <p>First slide Caption</p>
    </div>-->
    </div>
    <div class="item"><img src="../img/构建胸痛中心1100 242.png" alt="Second slide image" class="center-block" >
<!--      <div class="carousel-caption">
        <h3>Second slide Heading</h3>
        <p>Second slide Caption</p>
      </div>-->
    </div>
    <div class="item"><img src="../img/构建心血管病急救网络.png" alt="Third slide image" class="center-block">
<!--      <div class="carousel-caption">
        <h3>Third slide Heading</h3>
        <p>Third slide Caption</p>
      </div>-->
    </div>
  </div>
  <a class="left carousel-control" href="#carousel1" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">前页</span></a><a class="right carousel-control" href="#carousel1" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">后页</span></a>

</div>

</div>
<!--header end-->
	
<!--content start-->
<div id="container">

<div class="content_">

    <!--leftsidebar start-->
    <div class="leftsidebar">
    	<div class="project">
        	<div class="home-title"><span class="redbox"></span>用户登录<span class="more"><a href="/plus/list.php?tid=6" target="_parent">
            更多</a></span>
            </div>
            <div class="project-msg">
            	<?php if($_SESSION['login_user']): ?>
         
         欢迎您：<a href="#profile.php"><i class="glyphicon glyphicon-user"></i>
       
         <?php echo $_SESSION['login_user']; ?>
          </a> <a href="../app/logout.php">登出</a>
          <?php else: ?>
                      	<form action="../app/login.php" class="form-horizontal" method="post" id="login" onSubmit="return checkLogin();">
                	<div class="form-group">
                    
                    <div class="col-sm-4"><label for="account">账户名</label></div>
                    <div class="col-sm-7"><input type="text" class="form-control" id="account" name="account" placeholder="请输入账户名"required></div>	
                        
                    </div>
                    <div class="form-group">
                    <div class="col-sm-4"><label for="password">密码</label></div>
                    <div class="col-sm-7">
                    <input type="password" class="form-control" id="password" placeholder="请输入密码" required>
                    <input type="hidden" id="md5-password" name="password">
                    
                    </div>
                    
                    </div>
                   
                    	<button type="submit" class="btn btn-default btn-sm" value="submit" name="submit" style="margin-left:100px;">登录</button>
                        <a href="../verify/registrationForm.php" type="button" class="btn btn-sm btn-danger" >注册</a>
                    
                	
                </form>
         <?php endif ?>

                
            </div>
            
            <ul style="margin-top:60px;">
            	<li><img src="../images/w.png" /><a href="../underConstruction.html" target="_parent">认证指引</a></li>
                <li><img src="../images/e.png" /><a href="../underConstruction.html" target="_parent">数据直报</a></li>
            	<li><img src="../images/q.png" /><a href="../underConstruction.html" target="_parent">认证地图</a></li>
            	
            </ul>
        </div>
    
    </div>
    <!--leftsidebar end-->
    
    <!--center start-->
    
    <div class="home-new">
        <div class="home-title"><span class="redbox"></span>最新通知<span class="more"><a href="../underConstruction.html" target="_parent">
        更多</a></span>
        </div>
<!--    	<div class="new-img">
            <div><a href="underConstruction.html" target="_parent"><img src="img/1-1511301I12c21.png" width="398" height="222"/></a>
            </div>
            <div style="width:398px; height:40px; background:#666; text-align:center; color:#FFF; line-height:40px; 
            overflow:hidden; position:relative; margin-top:-45px; z-index:10;filter:alpha(opacity=50);  项目
            -moz-opacity:0.50;opacity:0.50; ">完善救治网络，普及公众宣传--“心
            </div>

        </div>-->
        
        <ul class="new-ul">
        <li><a href="../notice/notice_1.php" target="_parent">第八批通过中国胸痛中心认证单位公告</a></li>
        <li><a href="../notice/notice_2.php" target="_parent">关于接受第九批中国胸痛中心认证申请及第一批中国基层胸痛中心认证申请通知</a></li>
        <li><a href="../notice/notice_3.php" target="_parent">关于公示中国胸痛中心示范基地遴选标准中质量控制指标的通知</a></li>
        <li><a href="../notice/notice_4.php" target="_parent">关于观摩第八批胸痛中心现场核查的通知</a></li>
        <li><a href="../notice/notice_5.php" target="_parent"> 关于申请中国胸痛中心示范基地的通知</a></li>

        </ul>
        
        <div class="home-title"><span class="redbox"></span>会议新闻 <span class="more"><a href="#">更多</a></span></div>
           	<ul class="new-ul">
         
                <li><a href="../meetingNews/first_mettingNews.html" target="_parent">第七次执委会会议纪要</a></li>
                <li><a href="../meetingNews/second_mettingNews.html" target="_parent">第三次全体委员会会议纪要</a></li>
                <li><a href="../meetingNews/third_mettingNews.html" target="_parent">中国胸痛中心认证工作委员会第五次执委会会议纪要</a></li>
                <li><a href="../meetingNews/forth_mettingNews.html" target="_parent">中国胸痛中心认证工作委员会第二次全体委员会会议纪要</a></li>
                <li><a href="../meetingNews/fifth_mettingNews.html" target="_parent">中国胸痛中心认证工作委员会第三次执行委员会会</a></li>
            
            </ul>
        
    </div>
    <!--center end-->
 
    <!--rightsidebar start-->
    <div class="project-new">
        <div class="home-title"><span class="redbox"></span>大事记<span class="more"><a href="/plus/list.php?tid=12" target="_parent">更多</a></span>
        </div>
        <ul class="right-news">
        <li><span><a href="../event/event_2.php" target="_parent">>></a></span><a href="../event/event_2.php" target="_parent">中国胸痛中心总部正式揭牌</a></li>
            <li><span><a href="../event/event_1.php" target="_parent">>></a></span> <a href="../event/event_1.php" target="_parent">中国胸痛中心认证工作委员会第一次执行委员会会议召开</a></li>

<li><span><a href="../event/event_3.php" target="_parent">>></a></span><a href="../event/event_3.php" target="_parent">中国胸痛中心自助认证工作正式启动</a></li
	<li></li>
    <li></li>
        </ul>
        
        
         <div class="home-title"><span class="redbox" ></span>经验交流<span class="more"><a href="#">更多</a></span></div>
			<ul class="right-news">
            <li><span><a href="../ideaExchange/first_exchangement">>></a></span><a href="../ideaExchange/first_exchangement.php">胸痛中心建设-天津模式</a></li>
             <li><span><a href="../ideaExchange/second_exchangement">>></a></span><a href="../ideaExchange/second_exchangement.php">上海交通大学医学院附属苏州九龙医院胸痛中心</a></li>
             
             <li><span><a href="../ideaExchange/third_exchangement">>></a></span><a href="../ideaExchange/third_exchangement.php"> 郑州市第一人民医院胸痛中心</a></li>
            
            </ul>        
        <!--<div class="img-banner"><a href="http://rzmed.gensee.com/webcast/site/vod/play-1ffcdacd5bd84a4fa9c46cf113ae6ee0" target="_blank"><img src="/templets/default/images/home_img3.jpg" /></a></div>-->
    </div>
    <!--rightsidebar end-->
 
</div>
<!--content end-->
</div>
<!-- container -->

<!--footer start-->
<div id="footer">
<div class="link_">
    	<ul>
        <li><a href="../index_28.php">首页</a></li>
        <li><a href="../verify22_iframeTest.php">认证</a></li>
        <li><a href="../underConstruction.html">质控</a></li>
        <li><a href="../underConstruction.html">培训</a></li>
        <li><a href="../underConstruction.html">发展动态</a></li>
        <li><a href="../underConstruction.html">示范中心</a></li>
        <li><a href="../underConstruction.html">基层胸痛</a></li>
        <li><a href="../underConstruction.html">学习天地</a></li>
        <li><a href="../underConstruction.html">星火计划</a></li>
        
        </ul>
        </div>
	<div class="link">
 
    	<ul>
            <li>相关链接</li>
            <li><a href="http://csc.cma.org.cn/" target="_parent">中华医学会心血管病分会</a></li>
            <li><a href="http://www.chhouse.org/" target="_parent">中国心血管健康联盟</a></li>
    	</ul>
    </div>

	<div class="copyright"><p><!---<span>© 悟提供技术支持：QQ724070605</span>-->苏ICP备10000000号-7</p></div>
	
</div>

<!--footer end-->
</div>
<script type="text/javascript">
function suggest(inputString){
	if (inputString == 0) {
		$('#suggestions').fadeOut();
		} 
	else {
			
		$('#country').addClass('load');
		$.post('app/autoSuggest.php',{queryString: "" + inputString + ""}, function (data) {
			
			if(data.length > 0) {
				
				$('#suggestions').fadeIn();
				$('#suggestionList').html(data);
				$('#Item').removeClass('load');
				
				}
			});
		}
	
	}
function fill(value) {
	
	$('#country').val(value);
	setTimeout("$('#suggestions').fadeOut();", 600);
	
	
	}

</script>
<script type="text/javascript" language="javascript">

function checkLogin() {
	
	var input_pssd = document.getElementById('password');
	var md5_pssd = document.getElementById('md5-password');
	var account = document.getElementById('account');

	//alert(input_pssd.value);

	if (input_pssd.value == "" || input_pssd.value == null) {
		alert("Passwords illegal");
		
		return false;
		
		}
	
	if (account.value == "" || account.value == null ) {
		
		alert("Account illegal.")
		
		return false;
		
		}
	md5_pssd.value = md5(input_pssd.value);
	//alert(md5_pssd.value);			
		
		return true;
	
}


</script>
<script>
$('#verify_dropdown').hide();

$('#verify').mouseover(function(){
	
	$('#verify_dropdown').slideDown('slow');
	
	});
$('#verify').mouseleave(function() {
	
	
	$('#verify_dropdown').slideUp('slow');
	
	});
        

$("#citydrop").hide();

$("#cityclick").mouseover(function () {
    $("#citydrop").slideDown('slow');
});

$("#citydrop").mouseleave(function () {
    $("#citydrop").slideUp('slow');
});
      </script>
</body>
</html>
