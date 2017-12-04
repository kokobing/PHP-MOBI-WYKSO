<?php
require "./inc/login_config.php";

//登陆引导页加载语言 默认加载中文
define("SITE_TITLE", "易用云协作办公平台");
define("SITE_KEY", "易用云协作办公平台");
define("SITE_DESC", "易用云协作办公平台");


if(isset($_SESSION[username])){ //如果用户存在
//检查online表中登录的用户
$strSQL = "select id_online from online where user='$_SESSION[username]' and islock='0'" ;// 0为islock未锁定 1为锁定
$objDB->Execute($strSQL);
$login_userinfo=$objDB->getrows();

if(sizeof($login_userinfo)!=0){// 并且在表中也存在
	header('Location:/'.SITE_DIR.'/main.html');
}

}


//1200为20分钟的秒数。 0为islock未锁定 1为锁定  检查online表中长时间没有操作 并且没有锁定的用户 踢掉所有超时用户 
$strSQL = "delete from online where  UNIX_TIMESTAMP(use_time) <= UNIX_TIMESTAMP() - 1200  and islock='0' " ; 
$objDB->Execute($strSQL);




?>