<?php 

/*

ajax_delpagesetpic.php    删除版面某图片


         目前每个AJAX页面会产生6个 个人权限  用于判断用户当前权限
	     $ajaxispermit[DP]='1'; //DISPLAY             0  1
		 $ajaxispermit[AD]='1'; //ADD                 0  1
		 $ajaxispermit[ED]='1'; //EDIT                0  1
		 $ajaxispermit[DE]='1'; //DEL                 0  1
		 $ajaxispermit[GL]='1'; //GROUP LIST          0  1
		 $ajaxispermit[GE]='1'; //GROUP EDIT          0  1
		 $ajaxispermit[GD]='1'; //GROUP DEL           0  1
		 
		 



*/

 
require "../../inc/ajax_config.php";
$c_url='/siteset/pageset.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";


if( isset($_SESSION[username]) && $ajaxispermit[DE]){// 只有登陆用户才可以删除 


	   //抽取需要删除图片的图片文件名
	   $strSQL="SELECT opicname FROM pagesetpic WHERE id_pagesetpic='".$_POST[picid]."' ";
	   $objDB->Execute($strSQL);
	   $onepagesetpic=$objDB->fields();

		
	  $strSQL="DELETE FROM pagesetpic WHERE id_pagesetpic='".$_POST[picid]."' ";//删除版面
      $objDB->Execute($strSQL);
	  
	@unlink("../../../upload/layout/".$onepagesetpic[opicname]);
	
	$myjson= json_encode($arr);
	echo $myjson;




}







?>

