<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>机构注册</title>
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="/assets/css/style.css" type="text/css" media="screen, projection"/>
<link href="/assets/css/base.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
<link rel="stylesheet" type="text/css" href="/assets/css/pinggu.css">
<!-- <script src="/js/jquery.min.js"></script> -->
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>
<script src="/assets/js/md5.min.js"></script>
<style>

.table_kcyl {
	height: 400px;
	width: 700px;
	background: #b9b9b9; 
  margin:auto;
	  
}
.table_kcyl thead tr, td{
  background: #b9b9b9;
  font-size: 20px;
  line-height: 30px;
  text-align: center;
  font-weight: bold;
}
.table_kcyl tbody tr td   {
	border-collapse: collapse;
	border: 3px solid #F9F6F7;
	font-size:16px; 
  text-align:center;
  color:white;
  font-weight: normal;
} 
</style>
</head>
<?php include('common/_header.php'); ?>
<body>
<div class="content_pgu">
  <div class="about-sidebar">
    <ul class="menu">
      <li><a href="/home/jigou_info" target="content">机构信息</a></li>
      <li><a href="/home/tiaoJianPingGu" target="content">认证资质基本条件评估</a></li>
      <li><a href="/home/verify_xize" target="content">中国胸痛中心认证评分细则</a></li>
      <li><a href="/home/cloud" target="content">中国胸痛中心认证数据管理云平台</a></li>
    </ul>
  </div>
  <div class="pgu-right">
    <div class="title-wrap">

      <div class="breadcrumb">您的位置：<a href="/home">主页 </a> > <a href="/home/rzxz">认证</a> </div>
      <center>
        <div style="background-color:">
          <h5>机构注册（以机构名义注册并审核通过后，并激活启用数据管理云平台后，才可以申请参与认证）</h5>
        </div>
        <table   class="table_kcyl"  border = "3px" bordercolor = "0x4C96FF" style="margin-top:40px;">
          <thead>
            <tr>
              <td>机构名称:</td>
              <td ><?php echo $user['account']?></td>
            </tr>
          </thead>
          <tbody >
            <tr>
              <td>地址:</td>
              <td><?php echo "未填写"; ?></td>
            </tr>
            <tr>
              <td >法人:</td>
              <td ><?php echo $user['artificialPersonName']?></td>
            </tr>
            <tr>
              <td >相关信息:</td>
              <td><?php echo"未填写"; ?></td>
            </tr>
            <tr>
              <td >申请时间:</td>
              <td><?php echo $user['appliedDate']?></td>
            </tr>
            <tr>
              <td >胸痛中心试运时间:</td>
              <td><?php echo $user['runDuration']?></td>
            </tr>
            <tr>
              <td >认证负责人</td>
              <td ><?php echo $user['respPerson']?></td>
            </tr>
            <tr>
              <td >联络人</td>
              <td><?php echo $user['contPersonName']?></td>
            </tr>
          </tbody>
        </table>
      </center>
      <div style="height:100px; width:700px; background-color:#8BF583; margin:0 auto; "><h5 style=" padding-top:30px; text-align:center">如果贵院还没有激活启用数据管理云平台，请点击：<a href="#">现在即刻登录中国胸痛中心数据管理云平台 --》 前往！</a>
</h5></div>
    </div>
  </div>
</div>
<?php include('common/_footer.php')?>
</body>
</html>
