<?php
session_start();
require_once("mysql.class.php");
require_once("dbinfo.php");//数据库配置
require_once("common.php");//常用常量
require_once("function.class.php");//常用函数

//判断用户是否登陆并刷新在线表 未登陆将跳转
   $strSQL = "select id_online from online where user='$_SESSION[username]' and islock='0' " ;
   $objDB->Execute($strSQL);
   $login_userinfo=$objDB->getrows();

if(!isset($_SESSION[username]) || sizeof($login_userinfo)==0){//如果没登陆 或  自已不在线
	  
	   ob_end_flush();
	   exit();
   
   
 } 





?>