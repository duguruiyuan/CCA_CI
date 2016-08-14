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
<link rel="stylesheet" type="text/css" href="/assets/css/pinggu.css">
<!-- <script src="/js/jquery.min.js"></script> -->
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>
<script src="/assets/js/md5.min.js"></script>
<style>
.table_self {
	width: 700px;
	border: 1px solid #111;
	margin-top: 50px;
}
.table_self tr td {
	border: 1px solid #111;
	line-height: 60px;
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
      <div class="breadcrumb">您的位置：<a href="/home">主页 </a> > <a href="/home/rzxz"> 认证</a> </div>
      <div>
        <p style="height:40px; width:700px;background-color:#85ABF9; margin:0 auto; text-align:center; font-size:18px;text-align:center">中国中证评分细则--自我评估</p>
        <div style="font-size:16px; line-height:40px;">
          <p>状态：新的提交</p>
          <hr/>
          <a href="#">中国胸痛中心认证标准(第五版)下载</a><br>
          <a href="#">中国胸痛中心认证评分细则(第五版)下载</a> </div>
        <center>
          <table   class="table_self"  border = "3px" bordercolor = "0x4C96FF" align = "center" >
            <tr>
              <td>医院名称</td>
              <td><?php echo $user['account'] ?></td>
              <td>地址</td>
              <td><?php echo $user['state']." ".$user['city']?></td>
            </tr>
            <tr>
              <td >评审编号</td>
              <td ><?php echo "数据暂无"?></td>
              <td>认证类型</td>
              <td><?php echo"认证/用户数据库暂无"?></td>
            </tr>
            <tr>
              <td >申请时间</td>
              <td><?php echo $user['appliedDate']; ?></td>
              <td>评审日期</td>
              <td><?php echo"数据库信息暂无"?></td>
            </tr>
            <tr>
              <td >负责人</td>
              <td><?php echo $user['respPerson']; ?></td>
              <td>联系邮箱</td>
              <td><?php echo $user['respEmail']; ?></td>
            </tr>
            <tr>
              <td >联系人</td>
              <td><?php echo $user['contPersonName']?></td>
              <td>联系电话</td>
              <td><?php echo $user['contPhone']; ?></td>
            </tr>
            <tr>
              <td 
colspan="4" style="color:red; font-size:16px">新注册的机构，需要等工作人员审核！</td>
            </tr>
          </table>
        </center><hr/>
        <div style=" margin-left:30px; margin-bottom:30px;">自评得分：</div>
        <div  >
        <button id="butoon3" name="保存数据" style=" background-color:#6aa9e8; margin-left:20px; height:30px; width:80px;color:#FCFEFF"> 保存数据</button></a> 
         <p style=" margin-left:100px; margin-bottom:30px; margin-right:30px; float:right">只有完成材料的提交，才能点击"申请认证"！</p> 
        <button id="butoon3" name="申请认证"  style=" background-color:#6aa9e8; height:30px; margin-left:30px;width:80px;color:#FCFEFF"> 申请认证</button>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php include('common/_footer.php')?>
</body>
</html>
