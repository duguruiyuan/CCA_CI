c<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>中国胸痛管理中心</title>


<link href="/assets/css/main.css" rel="stylesheet" type="text/css">
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <script src="/assets/js/data.js"></script>
    <script src="/assets/js/jquery-1.11.3.min.js"></script>
    <script src="/assets/js/jquery.city.select.min.js"></script>
    <script src="/assets/js/prettify.js"></script>

<style>
body{
    font-size: 14px;
     font-family: "Microsoft YaHei" ! important
}
checkbox{ width: 30px; height: 55px; padding: 0 5px 0 0; }
.form-control{
    width: 200px;
    display: block;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
    -webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;

}
</style>
<script>
    //jquery hide

  function showDiv(name){
      if("jigou"==name){
    document.getElementById(name).style.display="block";
    document.getElementById("personal").style.display="none";
    //机构注册 type：0
    $('#type').val("0");
   
   }
   if("personal"==name){
    document.getElementById(name).style.display="block";
    document.getElementById("jigou").style.display="none";
    //个人注册 type:1
    $('#type').val("1");
   
   }
   
  }
  </script>
</head>

<body style="background-color:#fff; z-index:-1">

<a href="/" style="position:absolute;right:50px;top:10px;">返回首页</a>

   <div style="width:50%;margin-left:25%;margin-bottom:20px;">
       <input  style=" margin-left:25%; margin-top:5%; font-size:16px; background:#6BCCF6;" type="button" value="机构会员注册" onclick="showDiv('jigou')"/>
       <input type="button" value="个人会员注册" style="  margin-left:10%; font-size:16px;  background:#6BCCF6" onclick="showDiv('personal')"/>
   </div>
<div class="container" style=";padding:50px; width:75% ;background:-webkit-gradient(linear, 0% 0%, 0% 100%,from(#87DDF4), to(#E8D3E4)); opacity:0.8 ">
    <div class="row" id="jigou">
        <form class="form-horizontal" action="/login/reg" role="form" method="post" name="signup-form" onSubmit="return checkForm();">
        <input type="hidden" value="0" name="type" >
	<div style="float:left; width:50%">
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="orgName">机构名称</label>
                </div>
                
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="orgName" id="orgName" placeholder="请输入所在医疗机构名称" required>
                </div>
            </div>    
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="province">省份</label>
                    
                </div>
                <div class="col-sm-4">
                    <select id ="province" name="province">
                    <option value="载入中">载入中</option>
                    <!-- supplement all provinces in China -->
                    </select>
                </div>
                
         <!--       <div class="col-sm-4 dropdown">
                    <button type="button" id="province" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    省份
                    </button>
                    <span class="caret"></span>
                    <ul class="dropdown-menu">
                        <li>河北省</li>
                        <li>江苏省</li>
                        
                    </ul>
                </div> -->
            </div>   
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="city">城市</label>
                </div>
                
                 <div class="col-sm-5">
                    <select id ="city" name="city">
                    <option value="载入中">-载入中-</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="artificialPersonName">法人</label>
                </div>
                
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="artificialPersonName" id="artificialPersonName" placeholder="请输入法人">
                </div>
            </div> 
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="orgLevel">等级</label>
                </div>
                
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="orgLevel" id="orgLevel" placeholder="请输入所在医疗机构名称等级">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="appliedDate">申请时间</label>
                </div>
                
                <div class="col-sm-5">
                    <input type="date" class="form-control" name="appliedDate" id="appliedDate" placeholder="请输入申请时间">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="runDuration">胸痛中心试运行时间</label>
                </div>
                
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="runDuration" id="runDuration" placeholder="请输入试运行时间" required>
                </div>
            </div>
            
            
           
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="respPerson">认证负责人</label>
                </div>
 
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="respPerson" id="respPerson" placeholder="请输入所在医疗机构认证负责人">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="respTitle">认证负责人职务</label>
                </div>
                
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="respTitle" id="respTitle" placeholder="请输入认证负责人职务">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-4">
                    <label for="contPhone">联系电话</label>
                </div>
                
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="contPhone" id="contPhone" placeholder="请输入联系电话">
                </div>
            </div>
           </div>
             <div style=" float:right;width:50%;padding-left:10%;">
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="respEmail">负责人邮箱</label>
                </div>
                
                <div class="col-sm-4">
                    <input type="email" class="form-control" name="respEmail" id="respEmail" placeholder="请输入负责人邮箱" required>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="contPersonName">联络员姓名</label>
                </div>
                
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="contPersonName" id="contPersonName" placeholder="请输入联络员姓名">
                </div>
            </div>
            
            
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="contTitle">联络员职务</label>
                </div>
                
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="contTitle" id="contTitle" placeholder="请输入联络员职务">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="email">邮箱</label>
                </div>
                
                <div class="col-sm-4">
                    <input type="email" class="form-control" name="email" id="email" placeholder="请输入邮箱" required>
                </div>
            </div>
             <div class="form-group">
                <div class="col-sm-3">
                    <label for="contPhone">手机</label>
                </div>
                
                <div class="col-sm-4">
                    <input type="text" class="form-control" name="contPhone" id="contPhone" placeholder="请输入手机号">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="account">登录账号名称</label>
                </div>
                
                <div class="col-sm-4" >
                    <input type="text" class="form-control" name="account" id="account" placeholder="请输入账号名" required>
                    
                </div>
                
            </div>
             <div class="form-group">
                <div class="col-sm-3">
                    <label for="input-password">密码</label>
                </div>
                
                <div class="col-sm-4">
                    <input type="password" class="form-control" id="input-password" name="input-password"placeholder="请输入密码" required>
                    
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-3">
                    <label for="input-password-2">确认密码</label>
                </div>
                
                <div class="col-sm-4">
                    <input type="password" class="form-control" name="input-password-2" id="input-password-2" 
                    placeholder="请再次输入密码" required>
                </div>
            </div> 
            <div class="form-group" style=" margin-left:-300px; margin-top:100px;">
                <input style="width:18px; height: 20px; " type="checkbox">我已认真阅读并同意 <a href="#items.html" style="color:blue">使用条款和隐私政策</a>
            </div>
           
            <div  style="margin-left:170px;margin-left:-200px; ">
                <button type="submit">提交</button> 
            </div>  
            </div>     
        </form>
        
    </div>
    <div  id="personal" style="display:none;padding-left:30%;">
        <form class="form-horizontal" action="" role="form" method="post" name="signup-form" onSubmit="return checkForm();">
        <input type="hidden" value="1" name="type" >       
	 <div class="form-group">
                    <div class="col-sm-2">
                        <label for="_name">个人姓名</label>
                    </div>
                    
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="_name" id="_name" placeholder="请输真实姓名" required>
                    </div>
                </div>    
               
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="_account">登录账号名称</label>
                    </div>
                    
                    <div class="col-sm-4" >
                        <input type="text" class="form-control" name="_account" id="_account" placeholder="请输入账号名" required>
                        
                    </div>
                   
                </div>
                 <div class="form-group">
                    <div class="col-sm-2">
                        <label for="_input-password">密码</label>
                    </div>
                    
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="_input-password" name="_input-password" placeholder="请输入密码" required>

                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-2">
                        <label for="_input-password-2">确认密码</label>
                    </div>
                    
                    <div class="col-sm-4">
                        <input type="password" class="form-control" name="_input-password-2" id="_input-password-2" 

                        placeholder="请再次输入密码" required>
                    </div>
                </div> 
                <div class="form-group" style="margin-left:100px">
                    <input type="checkbox" style="width:18px; height: 20px; ">我已认真阅读并同意 <a href="#items.html" style="color:blue">使用条款和隐私政策</a>
                </div>
                
                <div class="form-group" style="margin-left:170px">
                <input type="hidden" name="type" value="" id="type">
                     <button type="submit" class="btn btn-twitter">提交</button>
                     
                </div>       
        </form>
    </div>
</div> 

<script type="text/javascript" id="main">

$(function () {

    $('#province, #city').citylist({
        data    : data,
        id      : 'id',
        children: 'cities',
        name    : 'name',
        metaTag : 'name'
    });

    $('#all').citylist({
        data    : data,
        id      : 'id',
        children: 'cities',
        name    : 'name',
        metaTag : 'name'
    });

    $('#pre-province, #pre-city').citylist({
        data    : data,
        id      : 'id',
        children: 'cities',
        name    : 'name',
        metaTag : 'name',
        selected: [16, 1601]
    });

    $('#pre-all').citylist({
        data    : data,
        id      : 'id',
        children: 'cities',
        name    : 'name',
        metaTag : 'name',
        idVal   : true,
        selected: 1601
    });
});
</script>
<script>
    // 本页面高亮代码
    $(function(){
        $('.prettyprint').html($('#main').text());
        window.prettyPrint && prettyPrint();
    })
	
    function checkForm(){
    return true;
}

</script>
</body>

</html>
