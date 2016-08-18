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
<script src="/assets/js/jquery-1.10.2.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>
<script type="text/javascript" src="/assets/pljs/plupload.full.min.js"></script>

<style type="text/css">
  a:link {color: #FF0000} /* 未访问的链接 */
  a:visited {color: #0000FF} /* 已访问的链接00FF00 */
  a:hover {color: #FF0000} /* 鼠标移动到链接上 FF00FF*/
  a:active {color: #0000FF} /* 选定的链接0000FF */

	table tr td{
		font-size:14px;
	}
</style>
</head>
<?php include('common/_header.php') ?>
<!--header end-->
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
    <div class="pgu_right_top">
      <p style="color:red; text-align:center; background-color:#E7EFF7; height:40px; padding-top:10px">认证资质基本条件评估（只有满足以下全部基本条件的胸痛中心，才能正式申请认证）</p>
      <label style="float:left">状态：</label>
      <p> 新提交机构注册，如果您希望继续下一步中国胸痛中心认证申请，请填写认证资质基本条件评估，只有满足以下全部基本条件的胸痛中心，才能正式申请认证！</p><hr style="border:1px solid red"/>
      <div style="font-size:16px; line-height:25px;">
       <a href="download/1.rar">中国胸痛中心认证标准(第五版)下载</a><br>
          <a href="download/1.zip">中国胸痛中心认证评分细则(第五版)下载</a>
          </div> 
          <div style="font-size:16px; line-height:25px; background-color:#9FF6A7">
          <p>目前贵单位参与的认证类型是：PCI版；目前中国胸痛中心认证支持两类认证：<a href="#">PCI版</a>和<a href="#">基层版</a>；</p>
           <p>如果贵单位根据实际情况希望更改认证类型，<a href="/home/chongxrz">请点击此处，重新选择认证类型！</a></p>
          </div> 
         
    </div>
    <input type="hidden" value="" class="qj_id">
    <input type="hidden" value="" class="qj_xiaojie">
    <div id="nav-left">

      <?php 



      $ys = '1';$ys_ct = '0'; $t_id = '1';$t_ct = '0';$step = '';$ys_end = '';
      foreach ($rz_cl as $k => $v) {

        
        switch ($v['step']) {
          case '1':
            $step = '要素一 基本条件与资质';
            $ys_end = 'first';
            break;
          case '2':
            $step = '要素二 对急性胸痛患者的评估及救治';
            $ys_end = 'second';
            break;
          case '3':
            $step = '要素三 院前急救系统与院内绿色通道的整合';
            $ys_end = 'third';
            break;
          case '4':
            $step = '要素四 培训与教育';
            $ys_end = 'forth';
            break;
          case '5':
            $step = '要素五 持续改进';
            $ys_end = 'fifth';
            break;
        }

        if($v['step'] === $ys && $ys_ct==='0'){
          $ys_ct = '1';
          echo '<h4 class="yaosu_first">要素一 基本条件与资质</h4>';
          echo '<table style="width:95%;" class="table_pgu_'.$ys_end.'">';
          $t_ct = '1';
          echo '<tr><h5 class="h5_'.$ys_end.'" style="margin-top:3px; margin-bottom:10px; margin-top:15px;"><strong>'.$v['title'].'</strong></h5></tr>';
          if(!empty($v['is_up'])){
            echo '<tr><input type="hidden" value="" class="xiaojie_id"><input type="hidden" class="xiaojie" value="'.$v['xiaojie'].'"><td style="width:85%;">'.$v['content'].'</td><td style="width:50px;"><label><input  name="Fruit" type="checkbox" value="" />满足</label></td><td><a href="javascript:" class="zl_upload">上传资料</a></td></tr>';
          }else{
            echo '<tr><input type="hidden" value="" class="xiaojie_id"><input type="hidden" class="xiaojie" value="'.$v['xiaojie'].'"><td style="width:85%;">'.$v['content'].'</td><td style="width:50px;"><label><input  name="Fruit" type="checkbox" value="" />满足</label></td><td></td></tr>';
          }

        }elseif($v['step'] === $ys){
          if($v['title_id'] === $t_id && $t_ct=='0'){
            // $t_ct = '1';
            // echo '<tr><h5 style="margin-top:3px; margin-bottom:10px; margin-top:15px;"><strong>'.$v['title'].'</strong></h5></tr>';
            // echo '<tr><input type="hidden" value="" class="xiaojie_id"><input type="hidden" class="xiaojie" value="'.$v['xiaojie'].'"><td >'.$v['content'].'</td><td style="width:50px;"><label><input  name="Fruit" type="checkbox" value="" />满足</label></td><td><a href="javascript:" class="zl_upload">上传资料</a></td></tr>';
          }elseif($v['title_id'] === $t_id){
             if(!empty($v['is_up'])){
               echo '<tr><input type="hidden" value="" class="xiaojie_id"><input type="hidden" class="xiaojie" value="'.$v['xiaojie'].'"><td style="width:85%;">'.$v['content'].'</td><td style="width:50px;"><label><input  name="Fruit" type="checkbox" value="" />满足</label></td><td><a href="javascript:" class="zl_upload">上传资料</a></td></tr>';
             }else{
               echo '<tr><input type="hidden" value="" class="xiaojie_id"><input type="hidden" class="xiaojie" value="'.$v['xiaojie'].'"><td style="width:85%;">'.$v['content'].'</td><td style="width:50px;"><label><input  name="Fruit" type="checkbox" value="" />满足</label></td><td></td></tr>';
             }
          }else{
            echo '</table>';
             echo '<table style="width:95%;" class="table_pgu_'.$ys_end.'">';
             if(!empty($v['title'])){
                echo '<tr><h5 class="h5_'.$ys_end.'" style="margin-top:3px; margin-bottom:10px; margin-top:15px;"><strong>'.$v['title'].'</strong></h5></tr>';
              }
            if(!empty($v['is_up'])){
              echo '<tr><input type="hidden" value="" class="xiaojie_id"><input type="hidden" class="xiaojie" value="'.$v['xiaojie'].'"><td style="width:85%;">'.$v['content'].'</td><td style="width:50px;"><label><input  name="Fruit" type="checkbox" value="" />满足</label></td><td><a href="javascript:" class="zl_upload">上传资料</a></td></tr>';
            }else{
              echo '<tr><input type="hidden" value="" class="xiaojie_id"><input type="hidden" class="xiaojie" value="'.$v['xiaojie'].'"><td style="width:85%;">'.$v['content'].'</td><td style="width:50px;"><label><input  name="Fruit" type="checkbox" value="" />满足</label></td><td></td></tr>';
            }

            $t_id = $v['title_id'];
          }

        }else{
          echo '</table>';
          echo '<h4 class="yaosu_'.$ys_end.'">'.$step.'</h4>';
          echo '<table class="table_pgu_'.$ys_end.'">';
          if(!empty($v['title'])){
            echo '<tr><h5 class="h5_'.$ys_end.'" style="margin-top:3px; margin-bottom:10px; margin-top:15px;"><strong>'.$v['title'].'</strong></h5></tr>';
            }
          $ys = $v['step'];

        }
      }
      echo '</table>';

      ?>
    </div></div>
    <div style="clear:both;"></div>
      <input type="hidden" class="first" value="none">
      <input type="hidden" class="second" value="none">
      <input type="hidden" class="third" value="none">
      <input type="hidden" class="forth" value="none">
      <input type="hidden" class="fifth" value="none">

<?php include('common/_footer.php') ?>
</body>
<script type="text/javascript">
$(function(){
  $('.table_pgu_first').css('display','none');
  $('.h5_first').css('display','none');
  $('.table_pgu_second').css('display','none');
  $('.h5_second').css('display','none');
  $('.table_pgu_third').css('display','none');
  $('.h5_third').css('display','none');
  $('.table_pgu_forth').css('display','none');
  $('.h5_forth').css('display','none');
  $('.table_pgu_fifth').css('display','none');
  $('.h5_fifth').css('display','none');
});

   $('h4').on('click',function(){

    var cla = $(this).attr('class');
    var cla_arr = cla.split('_');

    var dpl = $('.'+cla_arr[1]).val();
    
    if(dpl === 'block'){
      $('.table_pgu_'+cla_arr[1]).css('display','none');
      $('.h5_'+cla_arr[1]).css('display','none');
      $('.'+cla_arr[1]).val('none');
    }else if(dpl === 'none'){
      $('.table_pgu_'+cla_arr[1]).css('display','block');
      $('.h5_'+cla_arr[1]).css('display','block');
      $('.'+cla_arr[1]).val('block');
    }

    
   });
</script>


</html>
