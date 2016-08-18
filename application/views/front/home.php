<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>中国胸痛中心总部</title>

<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="screen, projection"/>
<link href="/assets/css/base.css" rel="stylesheet" type="text/css">

<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>
<script src="/assets/js/md5.min.js"></script>	


</head>

<body>

<div id="wrapper" class="homebg">
<!--header start-->
<?php  include 'common/_header.php'  ?>
<!--header end-->
	
<!--content start-->
<div id="container">

<div class="content_">
    <!--leftsidebar start-->
    <div class="leftsidebar">
    	<div class="project">
        	<div class="home-title"><span class="redbox"></span>用户登录<span class="more"><a href="/home/xwsj" target="_parent">
            更多</a></span>
            </div>
            
                <div class="project-msg">
                    <?php if(empty($account)){?>
                       <form action="/login/login_check" class="form-horizontal" method="post">
                        <div class="form-group">
                        
                            <div class="col-sm-4"><label for="account" class="control-label">账户名</label></div>
                            <div class="col-sm-7"><input type="text" class="form-control" id="account" name="account" placeholder="请输入账户名"required></div>   
                            
                        </div>
                        <div class="form-group">
                        <div class="col-sm-4"><label for="password" class="control-label">密码</label></div>
                        <div class="col-sm-7">
                            <input type="password" class="form-control" id="password" name="password"placeholder="请输入密码" required>
                           
                        </div>
                        </div>

                            <a href="/home/forget_pass" style="font-size:12px; padding-left:30px;">忘记密码</a>
                            <input type="submit" value="登陆" class="btn btn-primary btn-sm lg_submit" style="margin-left:50px;">
                            <a href="/login/reg" type="button" class="btn btn-sm btn-danger" >注册</a>
                    </form>
                    <?php }else{ ?>
                        <h5>欢迎您：注册机构第<?php echo $_SESSION['uid']?>号用户<br/><br/><i class="glyphicon glyphicon-user"></i> <?php echo $account ?> </h5>  
                        
                        <div><a href="/home/tiaoJianPingGu">进入 -->> 认证资质基本条件评估</a></div>
                        <div><a href="/home/verify_xize">进入 -->> 认证评分细则自评</a></div>
                        <div style="margin-left:150px;"><a href="/home/logout" type="button" class="btn btn-primary">退出登录</a></div>


                    <?php } ?>
                </div>
                
            <ul style="margin-top:60px;">
            	<li><img src="assets/img/qq.png" /><a href="underConstruction.html" target="_parent">认证指引</a></li>
                <li><img src="assets/img/ww.png" /><a href="underConstruction.html" target="_parent">数据直报</a></li>
            	<li><img src="assets/img/e.png" /><a href="underConstruction.html" target="_parent">认证地图</a></li>
            	
            </ul>
        </div>
    
    </div>
    <!--leftsidebar end-->
    
    <!--center start-->
    
    <div class="home-new">
        <div class="home-title"><span class="redbox"></span>最新通知<span class="more"><a href="/home/xwsj" target="_parent">
        更多</a></span>
        </div>
        
        <ul class="new-ul">
            <?php foreach ($zx as $k => $v) { ?>
 
            <li><a href="/home/aview/<?php echo $v['id']?>" target="_parent"><?php echo $v['title']?></a></li>
            <?php }?>

        </ul>
        
        <div class="home-title"><span class="redbox"></span>会议新闻 <span class="more"><a href="/home/xwsj">更多</a></span></div>
           	<ul class="new-ul">
                 <?php foreach ($hy as $k => $v) { ?>
                <li><a href="/home/aview/<?php echo $v['id']?>" target="_parent"><?php echo $v['title']?></a></li>
               <?php }?>
            
            </ul>
        
    </div>
    <!--center end-->
 
    <!--rightsidebar start-->
    <div class="project-new">
        <div class="home-title"><span class="redbox"></span>大事记<span class="more"><a href="/home/xwsj" target="_parent">更多</a></span>
        </div>
        <ul class="right-news">
        <?php foreach ($ds as $k => $v) { ?>
        
        <li><a href="/home/aview/<?php echo $v['id']?>" target="_parent"><?php echo $v['title']?></a></li>
        <?php }?>
        </ul>
        
        
         <div class="home-title"><span class="redbox" ></span>经验交流<span class="more"><a href="/home/xwsj">更多</a></span></div>
			<ul class="right-news">
            <?php foreach ($jy as $k => $v) { ?>
            
            <li><a href="/home/aview/<?php echo $v['id']?>" target="_parent"><?php echo $v['title']?></a></li>
            <?php }?>
            </ul>        
    
    </div>
    <!--rightsidebar end-->
 
</div>
<!--content end-->
</div>
<!-- container -->

<!--footer start-->

<?php include 'common/_footer.php' ?>

</div>
<script type="text/javascript">



</body>
</html>
