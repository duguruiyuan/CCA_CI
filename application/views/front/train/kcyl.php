   
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <title>课程一览</title>

  <link href="/assets/css/base.css" rel="stylesheet" type="text/css">
  <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link  href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="/assets/css/base.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" type="text/css" href="/assets/css/peixun.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/style.css">


  <!-- <script src="/js/jquery.min.js"></script> -->
  <script src="/assets/js/jquery-1.11.3.min.js"></script>
  <script src="/assets/js/bootstrap.min.js"></script>
  <script src="/assets/js/md5.min.js"></script> 
  <script type="text/javascript" language="javascript" src="/assets/js/jquery.dropdownPlain.js"></script>
  <style>

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
<center>
  <div><h1>培训课表</h1></div>
  <table   class="table_kcyl"  border = "3px" bordercolor = "0x4C96FF" align = "center" >  
    <thead>
      <tr>
        <td>项目</td>  
        <td colspan = "5" align = "center">上课</td>  
        <td colspan = "2" align = "center">休息</td>  
      </tr>  
    </thead> 
    <tbody >
      <tr>  
        <td>星期</td>  
        <th>星期一</th>  
        <th>星期二</th>  
        <th>星期三</th>  
        <th>星期四</th>  
        <th>星期五</th>  
        <th>星期六</th>  
        <th>星期天</th>  
      </tr>  
      
      <tr>  
        <td rowspan = "4">上午</td>  
        <td >星期一</td>  
        <td>星期二</td>  
        <td>星期三</td>  
        <td>星期四</td>  
        <td>星期五</td>  
        <td>星期六</td>  
        <td  rowspan = "4">休息</td>  
      </tr>  
      
      <tr>  
        <td >星期一</td>  
        <td>星期二</td>  
        <td>星期三</td>  
        <td>星期四</td>  
        <td>星期五</td>  
        <td>星期六</td>  
      </tr>  
      
      <tr>  
        <td >星期一</td>  
        <td>星期二</td>  
        <td>星期三</td>  
        <td>星期四</td>  
        <td>星期五</td>  
        <td>星期六</td>  
      </tr>  
      
      <tr>  
        <td >星期一</td>  
        <td>星期二</td>  
        <td>星期三</td>  
        <td>星期四</td>  
        <td>星期五</td>  
        <td>星期六</td>  
      </tr>  
      <tr/>  
      <tr>  
        <td rowspan = '2'>下午</td>  
        <td >星期一</td>  
        <td>星期二</td>  
        <td>星期三</td>  
        <td>星期四</td>  
        <td>星期五</td>  
        <td>星期六</td>  
        <td rowspan = "2">休息</td>  
      </tr>  
      
      <tr>  
        <td >星期一</td>  
        <td>星期二</td>  
        <td>星期三</td>  
        <td>星期四</td>  
        <td>星期五</td>  
        <td>星期六</td>  
      </tr>  
    </tbody>
  </table> 
</center> 
<!--content end-->

<!--footer start-->

<?php include 'common/_footer.php' ?>
<!--footer end-->
</div>
</body>
</html>
