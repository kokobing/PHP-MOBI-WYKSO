<?php
require "../inc/config.php";
require_once("../inc/navipage.php");//分页



//生成人事列表
   

$intRows = 20;//每页20行 
$strSQLNum = "SELECT COUNT(*) as num FROM hr as a left join hr_bm as b  on a.id_bm=b.id_bm WHERE  dele='1'  ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];
$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);
$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 
$strSQL = "SELECT a.id_hr,a.name,a.stat,a.shenhe,a.user,a.indate,b.bmname FROM hr as a 
		  left join hr_bm as b  on a.id_bm=b.id_bm
		  WHERE  dele='1' " ;
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$Userlist=$objDB->GetRows();
$UserlistNum=sizeof($Userlist);






if( isset($_GET[editlist]) &&  $ispermit[ED]=='1'){ 
	
	//抽取编辑人员的姓名
	$strSQL="SELECT name FROM hr WHERE  id_hr='$_GET[editlist]' ";//需要编辑的员工
    $objDB->Execute($strSQL);
    $SetUserinfo=$objDB->fields();
	
}
	


?>