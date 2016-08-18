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
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

<!-- <script src="/js/jquery.min.js"></script> -->
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>
<script src="/assets/js/md5.min.js"></script>
</head>

<body>
<?php include('common/_header.php')?>
<!--header <end-->

<div id="container">
  <div class="content_">
    <div class="about-sidebar">
      <ul class="menu">
        <li><a href="/home/orgIntro" target="content">认证机构介绍</a></li>
        <li><a href="/home/flowIntro" target="content">认证流程介绍</a></li>
        <li><a href="/home/aims" target="content">认证的目的及意义</a></li>
        <li><a href="/home/standards" target="content">中国胸痛中心认证标准</a></li>
        <li><a href="/home/jiCengBan" target="content">中国胸痛中心认证基层版</a></li>
        <li><a href="/home/liuChengTu" target="content">胸痛中心建设流程图</a></li>
        <li><a href="/home/xiZe" target="content">认证标准和细则下载</a></li>
        <hr>
        <li><a href="/home/guanLiZhiDu" target="content">监督管理制度</a></li>
        <hr>
        <li><a href="/login/reg" target="content">在线机构注册</a></li>
	<?php if(!isset($_SESSION['uac'])){?>
          <li><a href="javascript:alert('请先登陆，然后查看！');window.location.href='/'">认证资质基本条件评估</a></li>
        <?php }else{ ?>
          <li><a href="/home/tiaoJianPingGu">认证资质基本条件评估</a></li>
        <?php } ?>      

</ul>
    </div>
    <div class="about-right">
      <div class="title-wrap">
        <div class="breadcrumb">您的位置：<a href="/home">主页</a> > <a href="/home/rzxz">认证</a> </div>
      </div>
      <div class="news-content">
        <iframe name="content" src="/home/orgIntro" frameborder="0" height="100%" width="100%"  onload="this.height=this.contentWindow.document.documentElement.scrollHeight" scrolling="no"> </iframe>
      </div>
    </div>
  </div>
</div>
</div>
<?php include('common/_footer.php')?>
</body>
