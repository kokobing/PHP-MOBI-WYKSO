<?php 

/*  权限管理  单击审核 开通 按钮 开通权限



*/

 
require "../../inc/ajax_config.php";
$c_url='/permit/permmanage.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";







if( isset($_SESSION[username]) && $ajaxispermit[DP]=='1' && $ajaxispermit[AD]=='1' && $ajaxispermit[ED]=='1' && $ajaxispermit[DE]=='1'  && $ajaxispermit[GL]=='1'  && $ajaxispermit[GE]=='1'  && $ajaxispermit[GD]=='1'){// 只有登陆用户 及 七项全部为1 才可以设置其他用户权限  


 $settype=$_REQUEST[settype];//shenhe  kaiton  两个选项判断
 $Setuserid=$_REQUEST[setuserid];//设置的用户ID
 $state_type=$_REQUEST[state];//是否开通 或 关闭 true  false
 
 
  
  if($settype=='shenhe'){
	 
	 if($state_type=='true'){$str="shenhe='1'";}else{$str="shenhe='0'";}
  	 
  }
 
  if($settype=='kaiton'){
	 
  	 if($state_type=='true'){$str="stat='1'";}else{$str="stat='0'";}
	 
  }
 
  $strSQL="UPDATE hr SET ".$str." where  id_hr='".$Setuserid."' ";
  $objDB->Execute($strSQL);




}

















?>

