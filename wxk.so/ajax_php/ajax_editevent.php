<?php 
require "../inc/config.php";
require "../inc/function.class.php";



if(isset($_SESSION[memberid])){
	

$strSQL="UPDATE newsinfo SET title='$_POST[title]',intro='$_POST[intro]' where id_newsinfo=$_POST[newsid] and id_member=$_SESSION[memberid]";
$objDB->Execute($strSQL);

$arr[newsid]=$_POST[newsid];


$myjson= json_encode($arr);
echo $myjson;


}




?>

