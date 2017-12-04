<?php  
require "../../inc/login_config.php";



if($_SESSION[bind_domain]=='1'){//如果绑定的域名正确 允许登陆


$request_username = $_REQUEST["username"];//用户名
$request_password = $_REQUEST["password"];//密码
$request_checkcode = $_REQUEST["checkcode"];//验证码
$request_language = $_REQUEST["language"];//用户选择的语言
$request_device = $_REQUEST["device"];//用户设备




//检查online表中有没有登录
$strSQL = "select user,use_time from online where user='$request_username'" ;
$objDB->Execute($strSQL);
$login_userinfo=$objDB->getrows();



if(sizeof($login_userinfo)=='0'){//如果没有登陆 判断用户名密码 
	
	if($request_checkcode==$_SESSION["login_check_num"]){

			$strSQL = "select user,randcode,name,id_hr from hr where user='$request_username' && password='$request_password' && stat='1'" ;
			$objDB->Execute($strSQL);
			$userinfo=$objDB->fields();

	    if(count($userinfo)!='1'){
			
			$strSQL="INSERT INTO online (user,device,ip) values ('$request_username','$request_device','$_SERVER[REMOTE_ADDR]')";
			$objDB->Execute($strSQL);//创建登录者
						 
			$_SESSION[username]=$userinfo[user];//用户名
			$_SESSION[userid]=$userinfo[id_hr];//用户ID
			$_SESSION[realname]=$userinfo[name];//用户姓名
			$_SESSION[randcode]=$userinfo[randcode];//用户随机码
			$_SESSION[language]=$request_language; //语言 1中文、2英文
		
			$arr['errcode']="1";//正常登录
			$myjson= json_encode($arr);
			echo $myjson;
		}else{
			$arr['errcode']="0";//用户密或密码错误
			$myjson= json_encode($arr);
			echo $myjson;
		}
	}else{
			$arr['errcode']="3";//验证码错误
			$myjson= json_encode($arr);
			echo $myjson;
		 }
		

}else{//如果表中存在记录 表示用户已经登录 如需再登陆 重新验证用户名密码


 
		    $arr['errcode']="2";//已经登陆，但用户名密码不正确
		    $myjson= json_encode($arr);
		    echo $myjson;

}


}else{//非绑定域名

         $arr['errcode']="4";//非绑定域名 不允许登陆
		 $myjson= json_encode($arr);
		 echo $myjson;


}






?>

