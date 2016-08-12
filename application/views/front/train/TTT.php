 
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <title>讲师申请</title>

  <link href="/assets/css/base.css" rel="stylesheet" type="text/css">
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link  href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/assets/css/base.css" rel="stylesheet" type="text/css">
   <link rel="stylesheet" type="text/css" href="/assets/css/style.css">



  <!-- <script src="/js/jquery.min.js"></script> -->
  <script src="/assets/js/jquery-1.11.3.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/md5.min.js"></script> 
  <script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>
  <style>
input{border:1px solid #938182;}
textarea{border:1px solid #938182;}
tr{ height:30px;}
    .load{
      background-image:url(../loader.gif);
      background-position:right;
      background-repeat:no-repeat;
    }


  </style>  

</head>

<body>

  <div id="wrapper" class="homebg">
    <!--header start-->
   <?php  include 'common/_header.php'  ?>
<!--header end-->

<!--content start-->
<form action="../request.php" method="post" name="registForm">
<center>
  <table>
    <tr>讲师申请</tr>
    <tr>
    <td>真实姓名:</td>
      <td><label for="name"></label>
        <input name="name" type="text"  id="name" size="20" maxlength="100" />
      </td>
    </tr>
    <tr>
      <td align="right">性别：</td>
      <td>男<input type="radio" name="Sex" value="0" checked="checked"/>女<input type="radio" name="Sex" value="1" /></td>
    </tr>
    <tr>
      <td>职称:</td>
      <td><label for="zhicheng"></label>
        <input name="zhicheng" type="text"  id="zhicheng" size="20" maxlength="100"/>
      </td>
    </tr>
    <tr>
      <td>联系电话:</td>
      <td><label for="phonenumber"></label>
        <input name="phonenumber" type="text"  id="phonenumber" size="20" maxlength="100"/>
      </td>
    </tr>
    <tr>
      <td>工作单位:</td>
      <td><label for="danwei"></label>
        <input name="danwei" type="text"  id="danwei" size="20" maxlength="100"/>
      </td>
    </tr>
    <tr>
      <td align="right">个人描述:</td>
      <td><label for="idmemo"></label>
        <textarea name="idmemo"  cols="50" rows="5" id="idmemo"></textarea> 
      </td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input  type="submit" value="submit" name="submit" />
      <input type="reset" name="btnreset" id="btnreset" value="reset" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="idNumber" id="idNumber" /></td>
    </tr>
  </table>
  </center>
</form>
<!--content end-->

<!--footer start-->

<?php include 'common/_footer.php' ?>
<!--footer end-->
</div>
</body>
</html>
