<?php
require "../inc/config.php";
require_once("../inc/navipage.php");//分页

//语言分类
$strSQL="SELECT * FROM lang order by id_lang asc ";
$objDB->Execute($strSQL);
$LangList=$objDB->getrows();
$LangListNum=sizeof($LangList);	


//编辑列表动作不存在
if(!isset($_GET[editlist]) ){

$intRows = 15;//每页20行 
$strSQLNum = "SELECT COUNT(*) as num FROM layout  ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];
$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);
$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 
$strSQL = "SELECT * FROM layout order by id_layout desc " ;//搜索区块
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$Laylist=$objDB->getrows();
$LaylistNum=sizeof($Laylist);


}



if( isset($_GET[editlist]) &&  $ispermit[ED]){ 
	
	//抽取编辑区块名称
	$strSQL="SELECT * FROM layout WHERE  id_layout='$_GET[editlist]' ";//需要编辑的区块
    $objDB->Execute($strSQL);
    $SetLayoutinfo=$objDB->fields();
	
}



if(isset($_GET[edit]) && $ispermit[ED] ){
	
		
	  $strSQL="UPDATE layout SET 
	  id_lang='$_POST[catalogdirlang]', title='$_POST[title]',intro='$_POST[layintro]',remark='$_POST[remark]',content='$_POST[content]'
	  where id_layout='$_GET[edit]' ";
	  
      $objDB->Execute($strSQL);
		 
   header('Location:layouteditlist-'.$_GET[edit].'.html'); exit();	//处理完毕跳转当前页	
}


if($_GET[fun]=='add' && $ispermit[AD] ){
	
	$strSQL="INSERT INTO layout(title,intro) 
	                     values('新增空白区块','新增空白区块简介')";
	  
      $objDB->Execute($strSQL);
		 
   header('Location:layout.html'); exit();	//处理完毕跳转当前页	
}

?>