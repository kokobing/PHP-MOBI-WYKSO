<?php 
require "../inc/config.php";
require "../inc/function.class.php";




if(isset($_SESSION[memberid])){
	
$newsdir=$_POST[hdtype];//分类	
$dirtree='2,'.$newsdir;	//活动目录树	



$strSQL="INSERT INTO eventinfo(title,intro,indate,modate,workdate,enddate,id_member,id_newsdir,dirtree) 
         values('$_POST[title]','$_POST[intro]',now(),now(),'$_POST[hddate]','$_POST[hddate_end]','$_SESSION[memberid]','$newsdir','$dirtree')";
$objDB->Execute($strSQL);

$insertid=$objDB->getInsertID();//获取插入到数据库记录的ID号

$arr[insertid]=$insertid;

$myjson= json_encode($arr);
echo $myjson;


}



?>

