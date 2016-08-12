
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>中国急性心肌梗死救治项目</title>
<link href="/assets/css/base.css" rel="stylesheet" type="text/css">

<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="screen, projection"/>

<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

<script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>

<style>

.load{
	
	background-image:url('img/loader.gif');
	background-position:right;
	background-repeat:no-repeat;
	
}

</style>	

</head>

<body>

<div id="wrapper" class="homebg">
<!--header start-->
<?php include('common/_header.php'); ?>
<!--header end-->
    <div id="container">
    	<div class="content_">
        
    <!--    	<div class="about-sidebar">
                <ul class="submenu">
					<a href="aboutus.php" target="_parent">
                    联系我们
                    </a>                
                </ul>
                <div class="img-box">
                	<p><img src="./images/about_img1.jpg" alt=""></p>
                    <p><img src="./images/about_img2.jpg" alt=""></p>
                    <p><img src="./images/about_img3.jpg" alt=""></p>
                </div>
            </div>-->
            
        
        	<div class="about-right noborder">
            
            	<div class="title-wrap">
                <!--	<div class="title">联系我们</div>-->
                	<div class="breadcrumb">您的位置：<a href="/home">主页</a> > <a href="aboutus.php"> 联系我们</a></div>
                   	
                </div>
                
                <div class="show-content">
                <p style="font-family:Microsoft YaHei; font-size:16px;color:#666666;background-color:#FFFFFF;padding-left:30px;">项目办公室</p>
                <p style="font-family:Microsoft YaHei; font-size:14px;color:#666666;background-color:#FFFFFF;padding-left:30px;">地址：苏州工业园区苏州大道东123号汇金大厦1506室</p>
                <p style="font-family:Microsoft YaHei; font-size:14px;color:#666666;background-color:#FFFFFF;padding-left:30px;">联系电话：0512-68290030</p>
                 <p style="font-family:Microsoft YaHei; font-size:14px;color:#666666;background-color:#FFFFFF;padding-left:30px;">邮箱：<a href="mailto:xu.yan11@icloud.com">x.y@ccahouse.org</a><input type="text"></p>
                </div>
                
            </div>
        <!--反馈部分 -->
        <div class="container">
           <div class="row row-content">
               <div class="col-sm-12 col-md-7">
                   <div class="row"><h1 class="col-sm-4 col-sm-offset-5">反馈留言</h1></div>
               </div>
                <div class="col-sm-9 col-md-7">
                     <form action="" class="form-horizontal" role="form"> 
                         <div class="form-group">
                             <label for="name" class="col-sm-2 control-label">用户</label>
                             <div class="col-sm-10">
                                 <input type="text" class="form-control ly_name" name="name" value="" placeholder="请输入姓名">
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="email" class="col-sm-2 control-label">邮箱</label>
                             <div class="col-sm-10">
                                 <input type="text" class="form-control ly_mail" name="email"  value="" placeholder="请输入邮箱">
                             </div>
                         </div>
                         <div class="form-group">
                             <label for="content" class="col-sm-2 control-label">留言信息</label>
                             <div class="col-sm-10">
                                 <textarea name="content" rows="10" class="ly_text form-control"></textarea>
                             </div>
                         </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <a href="#" class="ly_submit" style="display:block;width:120px;height:50px;background:#005bac;color:#fff;text-align:center;line-height:50px;">提交</a>
                            </div>
                        </div>
                     </form>
                </div>
           </div>
        </div>
        <!--反馈部分 结束-->
        
        </div>

        
    </div><!-- container end -->
 </div> <!-- wrap end-->
<!--footer start-->
<div id="footer">
<div class="link_">
    	<ul>
        <li><a href="/application/views/templates/default.php">首页</a></li>
        <li><a href="/application/views/verify">认证</a></li>
        <li><a href="underConstruction.html">质控</a></li>
        <li><a href="underConstruction.html">培训</a></li>
        <li><a href="underConstruction.html">发展动态</a></li>
        <li><a href="underConstruction.html">示范中心</a></li>
        <li><a href="underConstruction.html">基层胸痛</a></li>
        <li><a href="underConstruction.html">学习天地</a></li>
        <li><a href="underConstruction.html">星火计划</a></li>
        
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

<script type="text/javascript">
  
$(function(){

  $('.ly_submit').on('click',function(){

    var ly_name = $('.ly_name').val();
    var ly_mail = $('.ly_mail').val();
    var ly_text = $('.ly_text').val();

    $.ajax({
      url:"/home/about",
      type:"POST",
      data:{ly_name:ly_name,ly_mail:ly_mail,ly_text:ly_text},
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


    // PDO 留言信息验证



  });


});

</script>


</body>
</html>