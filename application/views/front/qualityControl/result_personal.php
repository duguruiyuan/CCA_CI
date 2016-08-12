<?php

$conn = mysql_connect('localhost', 'root', ''); //连接mysql
mysql_select_db("cca", $conn);
$sql = "SELECT * FROM per WHERE id  = 1"; //sql语句
 
$hd = mysql_query($sql,$conn); //查询
$row = mysql_fetch_assoc($hd); //取数据
 
?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Document</title>
    
   <style>
   .jg tr,td{border:1px solid #2166B8;}
   .jg{ width:400px; height:300px; background:#C2C2C2;}
   </style> 
  
</head>
<body>
    <table class="jg" style=" border:1px solid #2166B8; ">	
    <tr><td>姓名</td> 
    <td><?php echo $row['name']; ?></td>
    </tr>
    <tr><td>手机号</td> 
    <td><?php echo $row['phonenumber'] ?></td>
    </tr>
    <tr><td>用户名</td> 
    <td><?php echo $row['idname'] ?></td>
    </tr>
    <tr><td>邮箱</td> 
   <td><?php echo $row['email'] ?></td>
       
    </table>
</body>
</html>