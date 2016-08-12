<?php

$conn = mysql_connect('localhost', 'root', ''); //连接mysql
mysql_select_db("cca", $conn);
$sql = "SELECT * FROM org WHERE id  = 1"; //sql语句
 
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
   .jg{ width:400px; height:400px; background:#C2C2C2;}
   </style> 
  
</head>
<body>
    <table class="jg" style=" border:1px solid #2166B8; ">
    <tr><td>机构名称</td> 
    <td><?php echo $row['orgName']; ?></td>
    </tr>
    <tr><td>省份</td> 
    <td><?php echo $row['artificialPersonName'] ?></td>
    </tr>
    <tr><td>城市</td> 
    <td><?php echo $row['city'] ?></td>
    </tr>
    <tr><td>法人</td> 
    <td><?php echo $row['state'] ?></td>
    </tr>
    <tr><td>等级</td> 
    <td><?php echo $row['orgLevel']; ?></td>
    </tr>
    <tr><td>申请时间</td> 
    <td><?php echo $row['appliedDate']; ?></td>
    </tr>
    <tr><td>胸痛中心运营时间</td> 
    <td><?php echo $row['runDuration']; ?></td>
    </tr>
    <tr><td>认证负责人</td> 
    <td><?php echo $row['respPerson']; ?></td>
    </tr>
    <tr><td>联络人</td> 
    <td><?php echo $row['contPersonName']; ?></td>
    </tr>
       
    </table>
</body>
</html>