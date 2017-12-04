<?php
require "../inc/config.php";

if($_GET[fun]=='edit'){//修改

    $strSQL="UPDATE siteset SET title='".$_POST[title]."',keywords='".$_POST[keywords]."',description='".$_POST[description]."',
	statistics='".$_POST[statistics]."',iscopy='".$_POST[iscopy]."',productnum='".$_POST[productnum]."',newsnum='".$_POST[newsnum]."' where id_siteset='1'";
	$objDB->Execute($strSQL);

}

$strSQL="SELECT * FROM siteset WHERE id_siteset='1'";
$objDB->Execute($strSQL);
$arrsiteset=$objDB->fields();


?>