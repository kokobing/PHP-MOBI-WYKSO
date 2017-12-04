<?php
require "../inc/config.php";
require "../inc/function.class.php";


if($_SESSION["memberid"]){//如果登陆

	$strSQL = "select id_member from guanzhu where id_member='".$_SESSION["memberid"]."' && gzid='".$_POST[gzid]."' " ;
	$objDB->Execute($strSQL);
	$gzinfo=$objDB->getrows();
	
	 if(sizeof($gzinfo)==0){//不存在关注

		$strSQL="INSERT INTO guanzhu (id_member,gzid) values ('".$_SESSION["memberid"]."','".$_POST[gzid]."')";
		$objDB->Execute($strSQL);

	 }


}






?>
