<?php 

require "../inc/config.php";
require "../inc/function.class.php";





	
$user= $_POST["username"];
$password=md5($_POST["password"]);
$membertype=$_POST["membertype"];
$phoneNumber=$_POST["phoneNumber"];


$intRand=uniqid();//随机码


$strSQL="INSERT INTO member(user,memid,password,level,mobi,indate,status) 
         values('$user','$intRand','$password','$membertype','$user',now(),'0')";
$objDB->Execute($strSQL);

$myjson= json_encode($arr);
echo $myjson;










?>

