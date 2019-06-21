<!doctype html> 
<html> 
<head> 
<meta charset="UTF-8"> 
 <title>注册用户</title> 
</head> 
<body> 
 <?php
 session_start(); 
 $username=$_REQUEST["username"]; 
 $password=MD5 ($_REQUEST["password"]); 
  
 $con=mysql_connect("localhost","ccqbbgwx","440506"); 
 mysql_query("setnames utf8", $con);
 if (!$con) { 
 die('数据库连接失败'.$mysql_error()); 
 } 
 mysql_select_db("ccqbbgwx",$con); 
mysql_query("set names utf8");
 $dbusername=null; 
 $dbpassword=null; 

 $result=mysql_query("select * from user_info where username ='$username';"); 
 while ($row=mysql_fetch_array($result)) { 
 $dbusername=$row["username"]; 
 $dbpassword=$row["password"]; 
 } 
 if(!is_null($dbusername)){ 
 ?> 
 <script type="text/javascript"> 
 alert("用户已存在"); 
 window.location.href="register.html"; 
 </script> 
 <?php
 } 
 
 mysql_query("insert into user_info (username,password) values('$username','$password')") or die("存入数据库失败".mysql_error()) ; 
 mysql_close($con); 
 ?> 
 <script type="text/javascript"> 
 alert("注册成功"); 
 window.location.href="index.html"; 
 </script> 
  
  
</body> 
</html> 