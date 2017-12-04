<?php 

/*  权限管理  单击CHECK单选开通权限



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


 $attrid=$_REQUEST[attrid];//click的值
 $Setuserid=$_REQUEST[userid];//设置的用户ID
 $checked=$_REQUEST[checked];//是否开通
 
 

 $attrid=explode('-',$attrid);//$attrid[0] 权限表2对应的字段动作  $attrid[1] 权限1表的字段名   $attrid[2] 二级菜单ID
 



    //搜索当前设置用户 二级菜单ID 在权限表2中是否存在
	
	 $strSQL="SELECT ".$attrid[0]." FROM pavy2 WHERE id_hr='$Setuserid' and id_backmenu='".$attrid[2]."' ";
     $objDB->Execute($strSQL);
     $ajaxpavy2menu=$objDB->GetRows();// 
	 
	 

     if(sizeof($ajaxpavy2menu)==0){//记录不存在 则初始一条 如有禁用 先取消禁用 因为系统默认不存在 为禁用
	    
		 ispavy1($Setuserid,$attrid[1]);//初始用户在权限1表中的记录 如果不存在 新建该用户一行权限 初始的权限所有目录为不可访问
         $strSQL="UPDATE pavy1 SET ".$attrid[1]."='1' where id_hr='$Setuserid' ";//用户目录允许访问
         $objDB->Execute($strSQL);
		 
		 
		 $strSQL="INSERT INTO pavy2 (id_hr,id_backmenu,display_permit,add_permit,edit_permit,del_permit,group_list,group_edit,group_del) VALUES ('$Setuserid','".$attrid[2]."','0','0','0','0','0','0','0') ";
         $objDB->Execute($strSQL);//当前USERID 的二级菜单权限 初始一条全部不可访问 因为本身就不存在 
		 
         $strSQL="UPDATE pavy2 SET ".$attrid[0]."='$checked' where id_hr='$Setuserid' and id_backmenu='".$attrid[2]."' ";
         $objDB->Execute($strSQL);//更新CLICK CHECK的字段为$checked  $checked为传递过来的0 或 1
		 
		 file_put_contents('aa.txt', $strSQL); 		 
		 
	 }else{//权限2表存在记录 不需要初始
		 
		 
		 $strSQL="UPDATE pavy2 SET ".$attrid[0]."='$checked' where id_hr='$Setuserid' and id_backmenu='".$attrid[2]."' ";
         $objDB->Execute($strSQL);//更新CLICK CHECK的字段为$checked $checked为传递过来的0 或 1		
		 
		 
	 }
	





}

















?>

