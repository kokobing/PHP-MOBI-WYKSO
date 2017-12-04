<?php 

/*

ajax_delcatalog.php  删除 分类目录 

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
$c_url='/news/newsdir.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";


//file_put_contents('aa.txt', '11'); 

if( isset($_SESSION[username]) && $ajaxispermit[ED]){// 只有登陆用户才可以 并且拥有编辑权 


 //查找关联产品的数量
 
	 
	 $strSQL=" SELECT COUNT(*) as errorcode FROM newsinfo where find_in_set(".$_POST[dirid].",dirtree) ";
     $objDB->Execute($strSQL);
     $currproductNum=$objDB->fields();
	 
	 
	 
//查找关联的下级目录
 		
	 $strSQL=" SELECT COUNT(*) as errorcode FROM newsdir  where fatherid=".$_POST[dirid]." ";
     $objDB->Execute($strSQL);
     $currsubdirNum=$objDB->fields();
		 
    
	
	 $arr[errorcode]=$currproductNum[errorcode]+$currsubdirNum[errorcode];
 
     //无关联产品 无关联目录 可以删除
     if($arr[errorcode]==0){
		 
          $strSQL="DELETE FROM newsdir WHERE id_newsdir='".$_POST[dirid]."' ";
          $objDB->Execute($strSQL);	 
		 
	 }
  
	  
	 $myjson= json_encode($arr);
	 echo $myjson;  
	  
   




}







?>

