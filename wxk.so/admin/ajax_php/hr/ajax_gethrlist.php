<?php 

/*  列表初始化   员工档案  

ajax_gethrlist.php    回传给 /hr/staff.php 使用以便staff.php获取登陆用户的txt列表文件 如果TXT文件不存在 则按用户生成


*/

 
require "../../inc/ajax_config.php";
$c_url='/hr/staff.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";

      	// global   $ajaxispermit;//权限数组声明全局变量

		 


if( isset($_SESSION[username])){// 只有登陆用户才可以查询结果 



   
	$arr['path']="../upload/staff/".$_SESSION[username]."/".$_SESSION[randcode]."_hr.txt";//ajax 回传给 /hr/staff.php 使用
	
	
	if (!file_exists('../'.$arr['path'])) {//如果当前路径寻址的文件不存在 则生成TXT
         
		 //如果工作目录不存在 则生成员工目录
		 if(!file_exists("../../upload/staff/".$_SESSION[username])){mkdir("../../upload/staff/".$_SESSION[username]);}
		 
         require "gethrlist.php";		 
         //在当前登陆用户目录下生成 员工随机码的txt文件  示例 12345678_hr.txt
          file_put_contents('../'.$arr['path'], $str); 

		 
    }  //end 生成TXT缓存列表文件
	
	
	
	


	$myjson= json_encode($arr);
	echo $myjson;




}







?>

