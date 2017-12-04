<?php 
/*


isuservalid.php         新添加员工时 表单验证 输入的员工用户名 是否已经存在


*/

require "../../inc/ajax_config.php";


if( isset($_SESSION[username])){// 只有登陆用户才可以查询结果 


$need_username=$_REQUEST[username];//接收传递过来需要验证的变量
//判断用户名是否存在

   $strSQL = "select user from hr  where user='$need_username' " ;
   $objDB->Execute($strSQL);
   $is_user=$objDB->getrows();

if( sizeof($is_user)==0 ){//如果用户名不存在
  
     echo 'true'; //允许添加
   
 }else{
     echo 'false';//用户名存在，不允许添加

 }

}







?>

