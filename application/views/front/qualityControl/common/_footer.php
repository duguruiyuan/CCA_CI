<style>
.ul_up li{
text-align:center;
}
</style>
  <div class="tip_up" style="display:none;border:1px solid #2076CF; width:60%; margin:0 auto;position:fixed;left:20%;top:20%;background:#d7d7d7;z-index:999;">
    <div style="margin:0 auto;text-align:center;width:100%;color:#005bac;font-size:16px;">选择文件</div>
    <div id="filelist">Your browser doesn't have Flash, Silverlight or HTML5 support.</div>
    <div  style=" padding-top:100px; padding-left:300px">
    <div id="container">
        <a style="width:80px;height:30px;display:inline-block;background:#005bac;color:#fff;line-height:30px;text-align:center;" id="pickfiles" href="javascript:;">选择文件</a> 
        <a style="width:80px;height:30px;display:inline-block;background:#005bac;color:#fff;line-height:30px;text-align:center;" id="uploadfiles" href="javascript:;">上传</a>
        <a style="width:80px;height:30px;display:inline-block;background:#005bac;color:#fff;line-height:30px;text-align:center;" href="javascript:void(0)" class="upload_qx">完成上传</a>
    </div>
  </div>

      <hr/>
      <div>
          <div style="width:100%;text-align:center;padding-bottom:50px;">已经上传的文件</div>
          <div class="old_up">
              <ul class="ul_up">
              </ul>
          </div>

      </div>
    </div>
<script type="text/javascript">

  var uploader = new plupload.Uploader({
    runtimes : 'html5,flash,silverlight,html4',
    browse_button : 'pickfiles', // you can pass an id...
    container: document.getElementById('container'), // ... or DOM Element itself
    url : '/home/sz_upload?file2='+window.path,
    flash_swf_url : '/assets/pljs/Moxie.swf',
    silverlight_xap_url : '/assets/pljs/Moxie.xap',
    
    filters : {
      max_file_size : '10mb',
    },

    init: {
      PostInit: function() {
        document.getElementById('filelist').innerHTML = '';

        document.getElementById('uploadfiles').onclick = function() {
          uploader.settings.url = '/home/sz_upload?file2='+window.path;
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
    $(function(){
        $('.upload_qx').on('click',function(){
            document.getElementById('filelist').innerHTML = '';
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
      var acc = "<?php echo $_SESSION['uac']?>";
      var uid = "<?php echo $_SESSION['uid']?>";

      var dir =  uid+'_'+xj;

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
        var acc = "<?php echo $_SESSION['uac']?>";
        var uid = "<?php echo $_SESSION['uid']?>";
        var file_path1 = uid;

          // 小结目录
          // var xiaojie = $('.qj_xiaojie').val();
          var qj_id = $('.qj_id').val();
          var xiaojie = $('.qj_xiaojie').val();
          // 最总目录
          window.path = file_path1 + '_' + xiaojie;



    });
    
    

    

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
