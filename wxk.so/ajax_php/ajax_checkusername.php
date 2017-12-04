<?php  
require "../inc/config.php";
require "../inc/function.class.php";



$username= $_REQUEST["username"];
  

$strSQL = "SELECT user FROM member WHERE user='$username' " ;
$objDB->Execute($strSQL);
$arronestaff=$objDB->getrows();

if(sizeof($arronestaff)>0){
  $arr['errcode']=0;//用户名重复
}else{
  $arr['errcode']=1;//可以注册
}


  $myjson= json_encode($arr);
  echo $myjson;





?>

