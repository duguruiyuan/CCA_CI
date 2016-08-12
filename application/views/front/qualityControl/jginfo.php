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
.table_jigou tr {
	height: 50px;
}
.select{ color:#F31317}

</style>
  <script type="text/javascript">

    function $(id){return document.getElementById(id)}
    window.onload = function(){
     $("nav-left").onclick = function(e){
      var src = e?e.target:event.srcElement;
      if(src.tagName == "H3"){
       var next = src.nextElementSibling || src.nextSibling;
       next.style.display = (next.style.display =="block")?"none":"block";
      }
     }
    }
  </script>
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
        <div class="breadcrumb">您的位置：<a href="/home">主页</a> <a href="/home/rzxz">认证</a> </div>
      </div>
    <div style="width:100%;height:120px;background:#9ff6a7; font-size:16px; text-indent:2em; padding-top:30px;"> 如果贵院希望参与中国胸痛中心认证，请首先完成下面的自评；如果暂时还不具备申请认证的条件，请先行启用中国胸痛中心数据管理云平台，进行实时胸痛数据的填报，对胸痛患者进行管理，以引导贵院胸痛中心规范化建设。
        现在即刻登录中国胸痛中心数据管理云平台 --》 前往！ </div>
    <div style="width:100%;padding:20px;text-align:left;background:#fbfbfb;height:200px;">
        <table>
        <tr style="line-height:20px;">
            <td style="width:300px;">机构名称</td>
            <td>苏州金阊医院</td>
          </tr>
        <tr style="line-height:20px;">
            <td>地址：</td>
            <td>江苏省苏州市金门路202号</td>
          </tr>
        <tr style="line-height:20px;">
            <td style="width:300px;">法人：</td>
            <td>张成</td>
          </tr>
        <tr style="line-height:20px;">
            <td style="width:300px;">相关信息</td>
            <td>床位：280，职工：355，二级乙等</td>
          </tr>
        <tr style="line-height:20px;">
            <td>申请时间：</td>
            <td>2016-08-08</td>
          </tr>
        <tr style="line-height:20px;">
            <td style="width:300px;">胸痛中心试运时间</td>
            <td>2016-08-08</td>
          </tr>
        <tr style="line-height:20px;">
            <td>认证负责人：</td>
            <td>心内科室助理王仙，15895406047@163.com，15895406047</td>
          </tr>
        <tr style="line-height:20px;">
            <td>联络员：</td>
            <td>心内科室助理王仙，15895406047@163.com，15895406047</td>
          </tr>
      </table>
      </div>
    <div>
        <form>
        <table style="width:100%;padding:20px;text-align:center;background:#83A3D5;height:600px;">
            <tr class="table_jigou" style="line-height:20px; text-aline:left">
            <td style="width:500px;">贵院是否已经启动中国胸痛中心数据管理云平台，实时填写胸痛患者的相关急救数据？ </td>
            <td style="width:100px;"><input  type="radio"  name="radio1" value="1">
                <label class="select">是</label>
                <input type="radio" name="radio1" value="0">
                <label class="select">否</label></td>
          </tr>
            <tr style="line-height:20px;">
            <td>贵院是否已经启动中国胸痛中心数据管理云平台，实时填写胸痛患者的相关急救数据？</td>
            <td><input  type="radio"  name="radio2" value="1">
                <label class="select">是</label>
                <input type="radio" name="radio2" value="0">
                <label class="select">否</label></td>
          </tr>
            <tr style="line-height:20px;">
            <td style="text-align:left;padding-left:40px">1. 上一年度PCI总量大于等于200例？
                <input type="file" class="inputstyle">
              <td style="text-align:left; padding-left:30px;"><input  type="radio"  name="radio3" value="1">
                <label class="select">是</label>
                <input type="radio" name="radio3" value="0">
                <label class="select">否</label></td>
          </tr>
            <tr style="line-height:20px;">
            <td style="text-align:left;padding-left:40px">2. 上一年度PCI总量大于等于200例？
                <input type="file" class="inputstyle"></td>
            <td style="text-align:left; padding-left:30px;"><input  type="radio"  name="radio4" value="1">
                <label class="select">是</label>
                <input type="radio" name="radio4" value="0">
                <label class="select">否</label></td>
          </tr>
            <tr style="line-height:20px;">
            <td style="text-align:left; padding-left:40px">3. 具备PPCI资质且年介入量不少于75例的医师大于等于2人（确保24小时行PPCI）？
                <input type="file" class="inputstyle"></td>
            <td style="text-align:left; padding-left:30px;"><input  type="radio"  name="radio5" value="1">
                <label class="select">是</label>
                <input type="radio" name="radio5" value="0">
                <label class="select">否</label></td>
          </tr>
            <tr style="line-height:20px;"> <br>
            <td ><button style="color:#213A9A">
                <input type="submit" value="申请胸痛中心认证"/>
                </button></td>
          </tr>
           <tr style="line-height:20px;">
            <td style="text-align:left;padding-left:40px">年急性心肌梗死患者大于等于30例：
                
            <td style="text-align:left; padding-left:30px;"><input  type="radio"  name="radio6" value="1">
                <label class="select">是</label>
                <input type="radio" name="radio6" value="0">
                <label class="select">否</label></td>
          </tr>
           <tr style="line-height:20px;"  >
            <td style="text-align:left;padding-left:40px" colspan="2">请选择目前实际开展的再灌注治疗方法（至少选择一个，已经开展的必须选择）: <input type="checkbox" value="1" >溶栓<input type="checkbox" value="1">转运PPCI<input type="checkbox" value="1">本院PPCI
             
          </tr>
               <tr style="line-height:20px;"> <br>
            <td ><button style="color:#213A9A">
                <input type="submit" value="申请基层认证"/>
                </button></td>
          </tr>
          </table>
      </form>
      </div>
  </div>
  </div>
<?php include('common/_footer.php')?>
</body>
</html>
