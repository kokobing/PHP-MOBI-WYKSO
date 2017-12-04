<?php  

/*
手工刷新

ajax_pullfiles.php      强制刷新txt列表文件



*/


require "../../inc/ajax_config.php";
$c_url='/hr/staff.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";


if( isset($_SESSION[username])){// 只有登陆用户才可以生成TXT 



   
	$arr_path="../../upload/staff/".$_SESSION[username]."/".$_SESSION[randcode]."_hr.txt";//txt文件路径
	
         
		 
     require "gethrlist.php";	   
    //在当前登陆用户目录下生成 员工随机码的txt文件  示例 12345678_hr.txt
     file_put_contents($arr_path, $str); 

    //end 生成TXT缓存列表文件
		 
	

}







?>

