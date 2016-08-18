<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>中国胸痛中心总部--忘记密码</title>
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<link rel="stylesheet" href="/assets/css/session.css">
<link rel="stylesheet" href="/assets/css/font-awesome.min.css">

<script src="/assets/js/data.js"></script>
<script src="/assets/js/jquery-1.11.3.min.js"></script>
<script src="/assets/js/jquery.city.select.min.js"></script>
<script src="/assets/js/prettify.js"></script>
</head>

   

<body>

<div id="session">

	 <!-- <h1><a href="/"></a><em class="icon-refresh"></em></h1> -->

    <h2><a href="#" type="button" class="btn" id="organization_">机构注册</a> &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" type="button" class="btn" id="person_">个人注册</a></h2>
	<form class="commonForm" action="/login/reg" id="session-form" method="post">

    <fieldset>
   		
        <ul class="errorlist">
    		<!-- <li>此邮箱没有关联机构会员账户，您确定该邮箱已注册？</li> -->
        
        </ul>
        <input type="hidden" value="0" name="type" >    
        <div id = "organization">
    	<p><label for="orgName">机构名称：</label>
    	<input type="text" placeholder="机构名称" name="orgName" maxlength="75">
        </p>
        <p><label for="province">省份：</label>
		    <select id ="province" name="province">
	        	<option value="载入中">-载入中-</option>
	        </select>
        </p>
        <p><label for="city">城市：</label>
		    <select id ="city" name="city">
	        	<option value="载入中">-载入中-</option>
	        </select>
        </p>
        <p><label for="address">地址：</label>
        	<input type="text" placeholder="地址" name="address" maxlength="75">
        </p>

        <p><label for="faren">法人：</label>
        	<input type="text" placeholder="法人" name="faren" maxlength="75">
        </p>
        <p><label for="level">等级：</label>
        	<input type="text" placeholder="等级" name="level" maxlength="75">
        </p>
        <p><label for="beds">床位：</label>
        	<input type="text" placeholder="床位" name="beds" maxlength="75">
        </p>
        <p><label for="staff">职工人数：</label>
        	<input type="text" placeholder="城市" name="staff" maxlength="75">
        </p>
        <p><label for="applied_date">申请时间：</label>
        	<input type="text" placeholder="申请时间" name="applied_date" maxlength="75">
        </p>
        <p><label for="run_duration">胸痛中心试运行时间：</label>
        	<input type="text" placeholder="胸痛中心试运行时间" name="run_duration" maxlength="75">
        </p>
        <p><label for="resp">认证负责人：</label>
        	<input type="text" placeholder="认证负责人" name="resp" maxlength="75">
        </p>
        <p><label for="resp_title">认证负责人职务：</label>
        	<input type="text" placeholder="认证负责人职务" name="resp_title" maxlength="75">
        </p>
        <p><label for="resp_email">认证负责人邮箱：</label>
        	<input type="text" placeholder="认证负责人职务" name="resp_email" maxlength="75">
        </p>
        <p><label for="cont">联络员姓名：</label>
        	<input type="text" placeholder="认证负责人职务" name="cont" maxlength="75">
        </p>
        <p><label for="cont_title">联络员职务：</label>
        	<input type="text" placeholder="认证负责人职务" name="cont_title" maxlength="75">
        </p>
        <p><label for="cont_tele">联系电话：</label>
            <input type="text" placeholder="认证负责人职务" name="cont_tele" maxlength="75">
        </p>
        <p><label for="cont_email">邮箱</label>
        	<input type="text" placeholder="认证负责人职务" name="cont_email" maxlength="75">
        </p>
        <p><label for="id_email">登陆账号：</label>
        <input type="text" placeholder="登陆账号" name="account" maxlength="75">
        </p>
        <p><label for="pssd">密码：</label>
        	<input type="password" placeholder="认证负责人职务" name="pssd" maxlength="75">
        </p>
        <p><label for="pssd_2">确认密码：</label>
        	<input type="password" placeholder="认证负责人职务" name="pssd_2" maxlength="75">
        </p>
        <p><input type="radio" name="terms">我已认真阅读并同意 <a href="aler('aaa');">&nbsp;&nbsp;使用条款和隐私政策</a></p>
        <div class="submitCont">
        	<input type="submit" value="注册"> <a href="#">我已是会员，点击登陆</a>
        </div>
        </div>		
   </fieldset>
</form>

<form class="commonForm" action="/login/reg" id="session-form" method="post">
<fieldset>
        <div id="person">
        	<p><label for="_name">姓名：</label>
        	<input type="text" placeholder="姓名" name="_name" maxlength="75">
	        </p>
	        <p><label for="_account">登陆账号名称：</label>
	        	<input type="text" placeholder="登陆账号" name="_account" maxlength="75">
	        </p>
	        <p><label for="_email">邮箱：</label>
	        	<input type="text" placeholder="邮箱" name="_email" maxlength="75">
	        </p>
	        <p><label for="_pssd">密码：</label>
	        	<input type="text" placeholder="密码" name="_pssd" maxlength="75">
	        </p>
	        <p><label for="_pssd_2">确认密码：</label>
	        	<input type="text" placeholder="确认密码" name="_pssd_2" maxlength="75">
	        </p>
	        <p><input type="radio" name="terms">我已认真阅读并同意 <a href="#">&nbsp;&nbsp;使用条款和隐私政策</a></p>
	        <div class="submitCont">
	        	<input type="submit" value="注册"> <a href="#">我已是会员，点击登陆</a>
	        </div>
             <input type="hidden" value="1" name="type" >    

        </div>

    
   
    </fieldset>
    </form>


<script type="text/javascript">

	// 默认隐藏个人用户注册
    $('#person').hide();

	$(function(){
        $('#organization_').on('click', function(){

        $(this).addClass('btn-info');
        
        $('#person').hide();
        $('#organization').show();

        if($('#person').hasClass('btn-info')){

            $('#person').removeClass('btn-info');


        }
     
    });

    $('#person_').on('click', function(){

        $(this).addClass('btn-info');
         $('#organization').hide();
          $('#person').show();

      

        if ($('#organization').hasClass('btn-info')) 

            $('#organization').removeClass('btn-info');
        
    });
    });
</script>
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