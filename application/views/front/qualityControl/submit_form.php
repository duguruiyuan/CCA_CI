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

  <script type="text/javascript" src="/assets/pljs/plupload.full.min.js"></script>
  <style>
.table_jigou tr {
	height: 50px;
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
        <div class="breadcrumb">您的位置：<a href="/home">主页</a> <a href="/home/rzxz">认证</a> 
        </div>
                <p style="text-align:left; padding-top:5px; font-size:20px; width:500xp; height:40px; background-color:#b9d1ea">上传材料</p>

        <div style="border:1px solid #2076CF; width:600px; margin:0 auto;">
          <strong style=" font-size:16px; margin-left:20px">选择文件</strong>
         <!--  <table style="text-align:center; line-height:50px; margin:0 auto; margin-top:30px "> 
            <tr style="background-color:#A9C3DE; line-height:30px"><th style="text-align:center; width:150px; font-size:25px; height:50px">文件名</th> <th style="text-align:center; width:100px; font-size:25px;">状态</th><th style="text-align:center; width:150px; font-size:25px">进度</th><th style="text-align:center; width:150px; font-size:25px">操作</th></tr>
            <tr ><td>文件名.doc</td> <td>成功</td><td>100%</td><td><button><input type="button" value="取消" style=" background-color:#6AA9E8; height:45px; width:60px; font-size:10px; color:#FCFEFF"></button></td></tr>
            <tr><td>文件名.doc</td> <td>上传中</td><td>45%</td><td><button><input type="button" value="取消" style=" background-color:#6AA9E8; height:45px; width:60px; color:#FCFEFF"></td></tr>
            <tr><td>文件名.doc</td> <td>队列中</td><td>0%</td><td><button><input type="button" value="取消" style=" background-color:#6AA9E8; height:45px; width:60px;color:#FCFEFF "></td></tr>
        </table> -->
        <div id="filelist">Your browser doesn't have Flash, Silverlight or HTML5 support.</div>
        <div  style=" padding-top:100px; padding-left:300px">
        <!-- <button id="pickfiles" name="pickfiles" style=" background-color:#6aa9e8; height:30px; width:50px;color:#FCFEFF"> 选择</button>
        <button id="uploadfiles" name="uploadfiles" style=" background-color:#6aa9e8; height:30px; width:50px;color:#FCFEFF"> 上传</button> -->
        <div id="container">
            <a id="pickfiles" href="javascript:;">选择文件</a> 
            <a id="uploadfiles" href="javascript:;">上传</a>
        </div>
        <button id="butoon3" name="cancle"  style=" background-color:#6aa9e8; margin-left:30px ; margin-bottom:20px;height:30px; width:50px;color:#FCFEFF"> 取消</button></div>
      </div>

       </div>
       </div>
  </div>
<?php include('common/_footer.php')?>
</body>
<script type="text/javascript">
// Custom example logic

var file = 'abc';


// 1.上传的时候，要知道是哪个用户，现在固定一个account,id   这是由于session 会存储account,id

var account = 'user';
var id = '3';

var file_path1 = account+'_'+id;


  // 小结目录
  // var xiaojie = $('.qj_xiaojie').val();
  var xiaojie = '1_10';

  // 最总目录
  var path = file_path1 + '_' + xiaojie;
// 2. 获取是哪个小结的文件上传 

var uploader = new plupload.Uploader({
  runtimes : 'html5,flash,silverlight,html4',
  browse_button : 'pickfiles', // you can pass an id...
  container: document.getElementById('container'), // ... or DOM Element itself
  url : '/home/sz_upload?file='+path,
  flash_swf_url : '/assets/pljs/Moxie.swf',
  silverlight_xap_url : '/assets/pljs/Moxie.xap',
  
  filters : {
    max_file_size : '10mb',
    mime_types: [
      {title : "Image files", extensions : "jpg,gif,png"},
      {title : "Zip files", extensions : "zip"}
    ]
  },

  init: {
    PostInit: function() {
      document.getElementById('filelist').innerHTML = '';

      document.getElementById('uploadfiles').onclick = function() {
        uploader.start();
        return false;
      };
    },

    FilesAdded: function(up, files) {
      plupload.each(files, function(file) {
        document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
      });
    },

    UploadProgress: function(up, file) {
      document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<span>' + file.percent + "%</span>";
    },

    Error: function(up, err) {
      document.getElementById('console').appendChild(document.createTextNode("\nError #" + err.code + ": " + err.message));
    }
  }
});

uploader.init();

</script>
</html>
