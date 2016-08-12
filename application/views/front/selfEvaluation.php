<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>评估认证</title>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">

<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>


<style>
body {
	
	font-family:"Microsoft YaHei", Microsoft NSimSun,  SimHei, FangSong, KaiTi
	}
</style>

</head>

<body>

<header class="jumbotron" id="top">
	<div class="container">
    	<div class="row row-header">
            <h2>中国胸痛中心认证自我评估</h2>
            <div class="row-content">
            填报申请表
            </div>
        </div>
    </div>
    


</header>

<!--<div class="container">

    example progress bar
    <div class="progress">
      <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
        60%
      </div>
    </div>

</div>-->
<div class="container">
     <div class="row">
   		<p class="bg-primary col-sm-1 lead col-sm-offset-10">是 &nbsp;&nbsp;否</p>
    
    </div>
    <form action="#" method="post" onSubmit="return sum();" id="form"> 
    
       
        <div class="bg-info" style="border-radius:4px; padding:20px">       
            <div class="row">
               <div class="col-sm-8">
                    <p class="lead">1、贵医院是否成立胸痛中心满六个月  </p>
                </div>
                
                <div class="col-sm-1 col-sm-offset-2 radio-grp">
                   <input class="radio-1" type="radio" style="margin-right:30px" name="radio1" value="1"> 
                   <input type="radio" name="radio1" value="0"> 
                </div>	
       
            </div>
            <div class="row">
               <div class="col-sm-8">
                    <p class="lead">2、贵医院是都具备两名及以上接受过专业培训，具备急诊PCI能力的心血管专科医师</p>
                </div>
                
                <div class="col-sm-1 col-sm-offset-2 radio-grp">
                   <input type="radio" style="margin-right:30px" name="radio2" value="1"> 
                   <input type="radio" name="radio2" value="0"> 
                </div>	
       
            </div>
            <div class="row">
               <div class="col-sm-8">
                    <p class="lead">3、贵医院是否具备配额套的功能区域设施及标示</p>
                </div>
                
                <div class="col-sm-1 col-sm-offset-2 radio-grp">
                   <input type="radio" style="margin-right:30px" name="radio3" value="1"> 
                   <input type="radio" name="radio3" value="0"> 
                </div>	
       
            </div>                         
            <div class="row">
               <div class="col-sm-8">
                    <p class="lead">4、贵医院是否全力支持发展胸痛联网事业</p>
                </div>
                
                <div class="col-sm-1 col-sm-offset-2 radio-grp">
                   <input type="radio" style="margin-right:30px" name="radio4" value="1"> 
                   <input type="radio" name="radio4" value="0"> 
                </div>	
       
            </div>
          
        </div>
       <div class="row">
            <div class="col-sm-2 col-sm-offset-10">
                <button class="btn btn-success" type="submit" name="getValue">提交</button>                
            </div>
        
        </div>
    </form>
    
    <script type="text/javascript">
	function sum() {
		
		var value1 = jQuery( 'input[name=radio1]:checked').val();
		var value2 = jQuery( 'input[name=radio2]:checked').val();
		var value3 = jQuery( 'input[name=radio3]:checked').val();
		var value4 = jQuery( 'input[name=radio4]:checked').val();
		
		
		var sum = parseInt(value1,10) + parseInt(value2,10) +
					parseInt(value3, 10) + parseInt(value4,10);
		alert(sum);
		if (sum == 2) {
			
			alert("贵医院不能申请胸痛中心认证，如需要可以认证基层胸痛中心")
			}
			
		if (sum == 0) {
			
			confirm ("贵医院暂不具备申请资质")
			}			
		if (sum > 2) {
			
			confirm ("贵医院具备申请资质，即将前往认证页面");
			}
	
	
	}
	
//		function sum() {
//			
//			var form = document.forms;
//			
//			var name = 
//			function getRadioValue(form, name) {
//				var val;
//				var radios = form.elements[name];
//				for (var i =0, len = radios.length; i < len; i++) {
//					
//					if ( radios[i].checked ) {
//						
//						val = radios[i].value;
//						break;
//						}
//					}	
//					return val;	
//			
//			}
//
//
//		}
    </script>


</div>
<div style="padding:200px">

</div>

<div class="container">
	<a href="#top">Back to top.</a>

</div>


</body>
</html>
