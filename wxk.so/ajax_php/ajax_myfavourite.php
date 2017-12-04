<?php
require "../inc/config.php";
require "../inc/function.class.php";

if(isset($_SESSION[memberid])){

    //是否已经收藏
	$strSQL = "select id_favourite from favourite  where id_member='$_SESSION[memberid]' && id_newsinfo='$_POST[newsid]' " ;
	$objDB->Execute($strSQL);
	$ismyfavourite=$objDB->getrows();
	$ismyfavouriteNum=sizeof($ismyfavourite);
	
	
	
	if($ismyfavouriteNum==0){//未收藏 加入收藏
		
		$arr[isfavo]='0';
		
		$strSQL="INSERT INTO favourite(id_member,id_newsinfo) values('$_SESSION[memberid]','$_POST[newsid]')";
        $objDB->Execute($strSQL);
		
		
	}else{ //已经收藏  删除收藏
		$arr[isfavo]='1';
		
		$strSQL="delete from favourite where id_member='$_SESSION[memberid]' && id_newsinfo='$_POST[newsid]'";
        $objDB->Execute($strSQL);
		
	}






	$myjson= json_encode($arr);
	echo $myjson;

}

?>
