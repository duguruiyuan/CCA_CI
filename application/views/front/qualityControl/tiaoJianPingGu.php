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
<script type="text/javascript">
$(function(){

  $('#nav-left').on('click',function(e){
      var src = e?e.target:event.srcElement;
      if(src.tagName == "H4"){
       var next = src.nextElementSibling || src.nextSibling;
       next.style.display = (next.style.display =="block")?"none":"block";
      }
    });

});
</script>
<style type="text/css">
a:link {color: #FF0000} /* 未访问的链接 */
a:visited {color: #0000FF} /* 已访问的链接00FF00 */
a:hover {color: #FF0000} /* 鼠标移动到链接上 FF00FF*/
a:active {color: #0000FF} /* 选定的链接0000FF */
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
     <h5>特刊推荐</h5>
    <HR style="BORDER-RIGHT: #00686b 1px dotted; BORDER-TOP: #00686b 1px dotted; BORDER-LEFT: #00686b 1px dotted; BORDER-BOTTOM: #00686b 1px dotted" noShade SIZE=1>
    <img src="../../../../assets/img/tk2.jpg"><p>规范化胸痛中心建设与STEMI救治</p>
    <img src="../../../../assets/img/tk1.jpg"><p>2011首届中国胸痛中心高峰论坛</p>
  </div>
  <div class="pgu-right">
    <div class="title-wrap">
      <div class="breadcrumb">您的位置：<a href="/home">主页 </a> > <a href="/home/rzxz"> 认证</a> </div>
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
      <h4 class="yaosu_first">要素一 基本条件与资质</h4>
      <div>
        <fieldset class="fieldset_pgu" >
          <legend >胸痛中心的组织机构</legend>
          <table class="table_pgu_first">
            <h5 style="margin-top:3px; margin-bottom:10px; margin-top:15px;"><strong>医院发布正式文件成立胸痛中心及胸痛中心委员会，要求：</strong></h5>
            <tr>
              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td >1.10 &nbsp;由医院院长或分管医疗的副院长担任胸痛中员会主建设和重大决策</td>
              <td style="width:50px;"><label>
                  <input  name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
              <td><a href="javascript:" class="zl_upload">上传资料</a></td>
            </tr>
            <tr>

              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td>1.11 &nbsp;胸痛中心成立并实际运作至少6个月以上才	能申请认证</td>
              <td><label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
              <!-- <td><a href="javascript:" class="zl_upload">上传资料</a></td> -->
              <td><a href="javascript:void(0)" class="zl_upload">上传资料</a></td>
            </tr>
            <tr>

              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td>1.12 &nbsp;由医院院长或分管医疗的副院长担任胸痛中员会主建设和重大决策</td>
              <td><label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
              <td><a href="javascript:" class="zl_upload">上传资料</a></td>
            </tr>
            <tr>

              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td>1.13 &nbsp;由医院院长或分管医疗的副院长担任胸痛中员会主建设和重大决策</td>
              <td><label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
              <td><a href="javascript:" class="zl_upload">上传资料</a></td>
            </tr>
            <tr>

              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td><h5><strong>任命胸痛中心医疗总监,要求：</strong></h5>
                <br>

                1.14 &nbsp;医院正式任命一名具有心血管内科专业背景的高级职称医师担任胸痛中心医疗总监，且该医师应具备较强的组织协；</td>
              <td><label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
              <td><a href="javascript:" class="zl_upload">上传资料</a></td>
            </tr>
            <tr>

              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td>1.15 &nbsp;由医院院长或分管医疗的副院长担任胸痛中员会主建设和重大决策</td>
              <td><label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
              <td><a href="javascript:" class="zl_upload">上传资料</a></td>
            </tr>
            <tr>

              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td><h5><strong>任命胸痛中心协调员，要求：</strong></h5>
                <br>
                1.16 &nbsp;指定一名具有急诊或心血管内科专业背景的医师担任胸痛中心协调员，协调员必须具备正确处理ACS及其它急性胸痛的能力</td>
              <td><label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
              <td><a href="javascript:" class="zl_upload">上传资料</a></td>
            </tr>
            <tr>

              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td>
               1.17 &nbsp;书面文件明确协调员的具体工作职责</td>
              <td><label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
              <td><a href="javascript:" class="zl_upload">上传资料</a></td>
            </tr>
            <tr>
              <input type="hidden" value="" class="xiaojie_id">
              <input type="hidden" class="xiaojie">
              <td>1.18 &nbsp;协调员每年至少参加ACS和胸痛中心相关的培训不少于10学时</td>
              <td><label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label></td>
                <td><a href="#" class="zl_upload">上传资料</a></td>
            </tr>
          </table>
        </fieldset>

      <!-- 要素二 -->
        <table class="table_pgu_first">
          <h5 style="margin-top:3px; margin-bottom:10px; margin-top:15px;"><strong>医院对胸痛中心的支持与承诺</strong></h5>
          <tr>

            <td >由医院院长或分管医疗的副院长担任胸痛中员会主建设和重大决策</td>
            <td style="width:50px;"><label>
                <input  name="Fruit" type="checkbox" value="" />
                满足 </label></td>
              <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
          <tr>
            <td>胸痛中心成立并实际运作至少6个月以上才	能申请认证</td>
            <td><label>
                <input name="Fruit" type="checkbox" value="" />
                满足 </label></td>
             <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
          <tr>
            <td>由医院院长或分管医疗的副院长担任胸痛中员会主建设和重大决策</td>
            <td><label>
                <input name="Fruit" type="checkbox" value="" />
                满足 </label></td>
             <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
          <tr>
            <td>由医院院长或分管医疗的副院长担任胸痛中员会主建设和重大决策</td>
            <td><label>
                <input name="Fruit" type="checkbox" value="" />
                满足 </label></td>
              <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
          <tr>
            <td><h5><strong>任命胸痛中心医疗总监,要求：</strong></h5>
              <br>
              医院正式任命一名具有心血管内科专业背景的高级职称医师担任胸痛中心医疗总监，且该医师应具备较强的组织协；</td>
            <td><label>
                <input name="Fruit" type="checkbox" value="" />
                满足 </label></td>
             <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
          <tr>
            <td>由医院院长或分管医疗的副院长担任胸痛中员会主建设和重大决策</td>
            <td><label>
                <input name="Fruit" type="checkbox" value="" />
                满足 </label></td>
             <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
          <tr>
            <td><h5><strong>任命胸痛中心协调员，要求：</strong></h5>
              <br>
              指定一名具有急诊或心血管内科专业背景的医师担任胸痛中心协调员，协调员必须具备正确处理ACS及其它急性胸痛的能力</td>
            <td><label>
                <input name="Fruit" type="checkbox" value="" />
                满足 </label></td>
              <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
          <tr>
            <td>书面文件明确协调员的具体工作职责</td>
            <td><label>
                <input name="Fruit" type="checkbox" value="" />
                满足 </label></td>
             <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
          <tr>
            <td>协调员每年至少参加ACS和胸痛中心相关的培训不少于10学时</td>
            <td><label>
                <input name="Fruit" type="checkbox" value="" />
                满足 </label></td>
              <td><a href="#" class="zl_upload">上传资料</a></td>
          </tr>
        </table>
        
        <!--<ul>
          <li>  
            <p style="margin-top:3px">医院发布正式文件成立胸痛中心及胸痛中心委员会，要求：</p>
            
            <ul class="firstchildren">
            
              <li> 由医院院长或分管医疗的副院长担任胸痛中心委员会主建设和重大决策<span >
                <label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label> <a href="javascript:" class="zl_upload">上传资料</a>
                </span> </li>
              <li>主持胸痛中心委员会的建设和重大院长担任胸痛中心委员会主任委员决策 <span >

                <label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label><a href="javascript:" class="zl_upload">上传资料</a>
                </span> </li>
              <li>明确胸痛中心委员会具有调动医院所有资源为胸痛中心建设和运行提供保障的权力 <span>
                <label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label><a href="javascript:" class="zl_upload">上传资料</a>
                </span> </li>
              <li>胸痛中心成立并实际运作至少6个月以上才能申请认证 <span >
                <label>
                  <input name="Fruit" type="checkbox" value="" />
                  满足 </label><a href="javascript:" class="zl_upload">上传资料</a> 
                </span> </li>
                
            </ul>
           
          </li>
         
          
          <li>医院对胸痛中心的支持与承</li>
          <li>胸痛急救的配套功能区域设置及标识</li>
          <li>人员资质及专科救治条件</li>
          <li>胸痛诊断及鉴别诊断的基本支持条件</li>
          <li>时钟统一方案及管理</li>
          <li>数据库的填报与管理</li>
        </ul>--> 
      </div>
      <h4 class="yaosu_second">要素二 对急性胸痛患者的评估及救治</h4>
      <div>
        <ul>
          <li>胸痛中心的组织机构</li>
          <li>医院对胸痛中心的支持与承</li>
          <li>胸痛急救的配套功能区域设置及标识</li>
          <li>人员资质及专科救治条件</li>
          <li>胸痛诊断及鉴别诊断的基本支持条件</li>
          <li>时钟统一方案及管理</li>
          <li>数据库的填报与管理</li>
        </ul>
      </div>
      <h4 class="yaosu_third">要素三 院前急救系统与院内绿色通道的整合</h4>
      <div>
        <ul>
          <li>胸痛中心的组织机构</li>
          <li>医院对胸痛中心的支持与承</li>
          <li>胸痛急救的配套功能区域设置及标识</li>
          <li>人员资质及专科救治条件</li>
          <li>胸痛诊断及鉴别诊断的基本支持条件</li>
          <li>时钟统一方案及管理</li>
          <li>数据库的填报与管理</li>
        </ul>
      </div>
      <h4 class="yaosu_forth">要素四 培训与教育</h4>
      <div>
        <ul>
          <li>胸痛中心的组织机构</li>
          <li>医院对胸痛中心的支持与承</li>
          <li>胸痛急救的配套功能区域设置及标识</li>
          <li>人员资质及专科救治条件</li>
          <li>胸痛诊断及鉴别诊断的基本支持条件</li>
          <li>时钟统一方案及管理</li>
          <li>数据库的填报与管理</li>
        </ul>
      </div>
      <h4 class="yaosu_fifth">要素五 持续改进</h4>
      <div>
        <ul>
          <li>胸痛中心的组织机构</li>
          <li>医院对胸痛中心的支持与承</li>
          <li>胸痛急救的配套功能区域设置及标识</li>
          <li>人员资质及专科救治条件</li>
          <li>胸痛诊断及鉴别诊断的基本支持条件</li>
          <li>时钟统一方案及管理</li>
          <li>数据库的填报与管理</li>
        </ul>
      </div>
    </div>
  </div>
</div>
</div>
<?php include('common/_footer.php') ?>
</body>
<script type="text/javascript">
   
  // 查找兄弟元素

  // 当前点击的元素
  // 弹出框框之前
  
  // 全局设置完毕，然后就开始显示提示框

  // 框框点击上传的时候，需要做两件事情
  // 1.组装account_id 目录名
  // 2.组装小结的目录

  // 小结目录


  




</script>
</html>
