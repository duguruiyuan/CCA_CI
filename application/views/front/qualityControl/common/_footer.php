

<!-- tip div -->
  <div class="tip_up" style="display:none;border:1px solid #2076CF; width:60%; margin:0 auto;position:fixed;left:20%;top:40%;background:#d7d7d7;z-index:999;">
  <div style="margin:0 auto;text-align:center;width:100%;color:#005bac;font-size:16px;">选择文件</div>
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
      <a href="javascript:void(0)" class="upload_qx">完成上传</a>
  </div>
  <!-- <button id="butoon3" name="cancle"  style=" background-color:#6aa9e8; margin-left:30px ; margin-bottom:20px;height:30px; width:50px;color:#FCFEFF"> 取消</button></div> -->
</div>

    <hr/>

    <div>
        <div style="width:100%;text-align:center;padding-bottom:50px;">已经上传的文件</div>

        <!-- 以前已经上传的文件列表 -->
        <div class="old_up">
            <ul class="ul_up">
                
            </ul>
        </div>

    </div>

    </div>

<script type="text/javascript">
    $(function(){
        $('.upload_qx').on('click',function(){
            $('.tip_up').css('display','none');
        });

    });


    $(".zl_upload").on('click',function(){

    $('.tip_up').css('display','block');

     var xj_id = $(this).parent().parent().find('.xiaojie_id').val();
      var xj =  $(this).parent().parent().find('.xiaojie').val();
      $('.qj_id').val(xj_id);
      $('.qj_xiaojie').val(xj);

      // account_id_xiaojie 目录
      var dir = 'user_3_1_10';
      // ajax 获取以前已经上传的文件列表
      $.ajax({
        url:"/home/old_upload",
        type:"POST",
        data:{dir:dir},
        cache:false,
        dataType:"json",
        success: function(data) {
          if(data.code){
             $('.ul_up').html(data.msg);
          }else{
              alert(data.msg);
          }
        },
        error: function(e) {
          alert('系统繁忙，请稍后重试！');
          return false;
        }
      });


    });

    var account = '';
    var id = '';
    var file_path1 = '';
    var xiaojie = '';
    var path = '';

    $('#pickfiles').on('click',function(){

        // 选择文件时候，获取需要的东西
        var account = 'user';
        var id = '3';
        var file_path1 = account+'_'+id;

          // 小结目录
          // var xiaojie = $('.qj_xiaojie').val();
          var qj_id = $('.qj_id').val();
          var qj_xiaojie = $('.qj_xiaojie').val();
          var xiaojie = '1_10';
          // 最总目录
          var path = file_path1 + '_' + xiaojie;
        // 2. 获取是哪个小结的文件上传 

    });


    var uploader = new plupload.Uploader({
      runtimes : 'html5,flash,silverlight,html4',
      browse_button : 'pickfiles', // you can pass an id...
      container: document.getElementById('container'), // ... or DOM Element itself
      url : '/home/sz_upload?file2 ='+path,
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

<!--footer start-->
<div id="footer">

<div class="link_">
        <ul>
        <li><a href="/home">首页</a></li>
        <li><a href="/home/rzxz">认证</a></li>
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