<?php 

/*  权限管理



*/

 
require "../../inc/ajax_config.php";
$c_url='/permit/permmanage.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";



 
 function ispavy1($Setuserid,$Userdir){//判断用户目录在权限1表中是否存在 不存在则新建空白 
	  global	$objDB;//函数调用 声明全局变量
	  
	$strSQL="SELECT ".$Userdir." FROM pavy1 WHERE  id_hr='$Setuserid' ";//需要编辑的员工
    $objDB->Execute($strSQL);
    $ispavy1=$objDB->getrows();

	
	if(sizeof($ispavy1)==0){//如果不存在 则为用户初始一行
	         
			 //初始用户在权限1表中的记录 如果不存在 新建该用户一行权限 初始的权限所有目录为不可访问
             $strSQL="INSERT INTO pavy1(id_hr) values  ('$Setuserid')";
             $objDB->Execute($strSQL);
		   
	}
	
	 
 }









if( isset($_SESSION[username]) && $ajaxispermit[DP]=='1' && $ajaxispermit[AD]=='1' && $ajaxispermit[ED]=='1' && $ajaxispermit[DE]=='1'  && $ajaxispermit[GL]=='1'  && $ajaxispermit[GE]=='1'  && $ajaxispermit[GD]=='1'){// 只有登陆用户 及 七项全部为1 才可以设置其他用户权限  


 $permitdir_id=$_REQUEST[permitdir_id];//菜单一级目录ID
 $permitdir_url=$_REQUEST[permitdir_url];//菜单一级目录URL
 $Setuserid=$_REQUEST[userid];//需要设置用户权限ID
 $selectmenuid=$_REQUEST[selectmenuid];//下拉列表的动作
 
 

 
 
 
 //动作0为禁用
 if($selectmenuid=='0'){
	 
	 
	
	  ispavy1($Setuserid,$permitdir_url);//初始用户在权限1表中的记录 如果不存在 新建该用户一行权限 初始的权限所有目录为不可访问
	 
     $strSQL="UPDATE pavy1 SET ".$permitdir_url."='0' where id_hr='$Setuserid' ";//用户目录禁用
     $objDB->Execute($strSQL);
	 
     $strSQL="DELETE a.* FROM pavy2 as a left join backmenu as b on a.id_backmenu=b.id_backmenu
	           WHERE a.id_hr='".$Setuserid."' and b.fatherid='".$permitdir_id."' ";//删除权限表2中的用户记录
     $objDB->Execute($strSQL);
   
 file_put_contents('aa.txt', $strSQL); 
	 
	 
 }
 
 
  //动作1为全选 
 if($selectmenuid=='1'){
	 
   

    ispavy1($Setuserid,$permitdir_url);//初始用户在权限1表中的记录 如果不存在 新建该用户一行权限 初始的权限所有目录为不可访问

    $strSQL="UPDATE pavy1 SET ".$permitdir_url."='1' where id_hr='$Setuserid' ";//用户目录允许访问
    $objDB->Execute($strSQL);


  
    //搜索当前设置用户 当前目录的 二级菜单的列表 并设权限为全部访问
	
	 $strSQL="SELECT id_backmenu as id FROM backmenu WHERE level='2' and fatherid='".$permitdir_id."' ";
     $objDB->Execute($strSQL);
     $ajaxMenu2list=$objDB->GetRows();//取当前目录的二级目录 
     $ajaxMenu2listNum=sizeof($ajaxMenu2list);
	
     for($i=0;$i<$ajaxMenu2listNum;$i++){
		 
		    $strSQL="DELETE FROM pavy2 WHERE id_hr='".$Setuserid."' and id_backmenu='".$ajaxMenu2list[$i][id]."' ";
			//全选前 先删除权限表2中的历史记录
            $objDB->Execute($strSQL);
		 
		    $strSQL="INSERT INTO pavy2 (id_hr,id_backmenu,display_permit,add_permit,edit_permit,del_permit,group_list,group_edit,group_del) VALUES ('$Setuserid','".$ajaxMenu2list[$i][id]."','1','1','1','1','1','1','1') ";
            $objDB->Execute($strSQL);//当前USERID 的二级菜单权限 全部访问
			
	  }
   
   
	 
	 
 }
 
 
 
   //只选个人
 if($selectmenuid=='2'){
	 
	ispavy1($Setuserid,$permitdir_url);//初始用户在权限1表中的记录 如果不存在 新建该用户一行权限 初始的权限所有目录为不可访问

    $strSQL="UPDATE pavy1 SET ".$permitdir_url."='1' where id_hr='$Setuserid' ";//用户目录允许访问
    $objDB->Execute($strSQL);
 
 
  //搜索当前设置用户 当前目录的 二级菜单的列表 并设权限为全部访问
	
	 $strSQL="SELECT id_backmenu as id FROM backmenu WHERE level='2' and fatherid='".$permitdir_id."' ";
     $objDB->Execute($strSQL);
     $ajaxMenu2list=$objDB->GetRows();//取当前目录的二级目录 
     $ajaxMenu2listNum=sizeof($ajaxMenu2list);
	
     for($i=0;$i<$ajaxMenu2listNum;$i++){
		 
		    $strSQL="DELETE FROM pavy2 WHERE id_hr='".$Setuserid."' and id_backmenu='".$ajaxMenu2list[$i][id]."' ";
			//全选前 先删除权限表2中的历史记录
            $objDB->Execute($strSQL);
		 
		    $strSQL="INSERT INTO pavy2 (id_hr,id_backmenu,display_permit,add_permit,edit_permit,del_permit,group_list,group_edit,group_del) VALUES ('$Setuserid','".$ajaxMenu2list[$i][id]."','1','1','1','1','0','0','0') ";
            $objDB->Execute($strSQL);//当前USERID 的二级菜单权限 全部访问
			
	  }
 
   


 }



	$myjson= json_encode($arr);
	echo $myjson;




}

















?>

