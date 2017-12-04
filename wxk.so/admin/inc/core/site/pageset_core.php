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
$strSQLNum = "SELECT COUNT(*) as num FROM pageset  ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];
$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);
$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 
$strSQL = "SELECT * FROM pageset order by id_pageset desc " ;//搜索会员
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$Pagelist=$objDB->getrows();
$PagelistNum=sizeof($Pagelist);


}



if( isset($_GET[editlist]) &&  $ispermit[ED]){ 
	
	//抽取编辑版面名称
	$strSQL="SELECT * FROM pageset WHERE  id_pageset='$_GET[editlist]' ";//需要编辑的版面
    $objDB->Execute($strSQL);
    $SetPagesetinfo=$objDB->fields();
	
}



if(isset($_GET[edit]) && $ispermit[ED] ){
	
		
	  $strSQL="UPDATE pageset SET 
	  id_lang='$_POST[catalogdirlang]', title='$_POST[title]',pagetitle='$_POST[pagetitle]',keywords='$_POST[keywords]',description='$_POST[description]',intro='$_POST[pageintro]',remark='$_POST[remark]',content='$_POST[content]'
	  where id_pageset='$_GET[edit]' ";
	  
      $objDB->Execute($strSQL);
		 
   header('Location:pageseteditlist-'.$_GET[edit].'.html'); exit();	//处理完毕跳转当前页	
}


if($_GET[fun]=='add' && $ispermit[AD] ){
	
	$strSQL="INSERT INTO pageset(title,intro) 
	                     values('新增空白版面','新增空白版面简介')";
	  
      $objDB->Execute($strSQL);
		 
   header('Location:pageset.html'); exit();	//处理完毕跳转当前页	
}

?>