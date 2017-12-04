<?php 
require "../inc/config.php";
require "../inc/function.class.php";




if(isset($_SESSION[memberid])){
	
	
//作品是否认证
$rz='0';//未认证
if($_SESSION[memberstatus]=='1' && $_SESSION[memberlevel]=='2'){
   $rz='1';	//会员状态为激活 级别为艺术家的 发布作品直接为认证
}

$newsdir=$_POST[zptype];//分类	
$dirtree='1,'.$newsdir;	//目录树	



$strSQL="INSERT INTO newsinfo(title,intro,indate,modate,workdate,id_member,id_newsdir,dirtree,rz) 
         values('$_POST[title]','$_POST[intro]',now(),now(),'$_POST[zpdate]','$_SESSION[memberid]','$newsdir','$dirtree','$rz')";
$objDB->Execute($strSQL);
$arr[insertid]=$objDB->getInsertID();//获取插入到数据库记录的ID号



$myjson= json_encode($arr);
echo $myjson;


}



?>

