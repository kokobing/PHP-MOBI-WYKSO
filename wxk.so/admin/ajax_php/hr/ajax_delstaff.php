<?php 

/*

ajax_delzw.php    职务删除


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
$c_url='/hr/staff.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";


if( isset($_SESSION[username]) && $ajaxispermit[DE]){// 只有登陆用户才可以删除 


   //查找被删除的人的信息
	$strSQL="SELECT user FROM hr WHERE  id_hr='$_POST[staffid]' ";
    $objDB->Execute($strSQL);
    $delUserinfo=$objDB->fields();
	
	//被删除人的文件存放路径
    $arr_path="../../upload/staff/".$delUserinfo[user];//目录路径
    $deluserFlienum=DirFileNum($arr_path);//求几个文件

    if($deluserFlienum!=0){
		
		$arr[errcode]=$deluserFlienum;//存在几个文件
		
	}else{
		
		
	  $arr[errcode]=0;//不存在文件
		
	  $strSQL="DELETE FROM hr WHERE id_hr='".$_POST[staffid]."' ";//删除用户
      $objDB->Execute($strSQL);
	  
	  @rmdir($arr_path);//删除空目录用户
	  
	   ////更新列表
	   $arr_path="../../upload/staff/".$_SESSION[username]."/".$_SESSION[randcode]."_hr.txt";//txt文件路径
	   require "gethrlist.php";	 
	   file_put_contents($arr_path, $str); 
	  //end 生成TXT缓存列表文件
		
		
		
	}
   
   

	
	$myjson= json_encode($arr);
	echo $myjson;




}







?>

