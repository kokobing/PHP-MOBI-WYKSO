<?php
require "../inc/config.php";
require "../inc/function.class.php";


if($_SESSION["memberid"]){//如果登陆

	$strSQL = "DELETE FROM guanzhu where id_member='".$_SESSION["memberid"]."' && gzid='".$_POST[gzid]."' " ;
	$objDB->Execute($strSQL);


}






?>
