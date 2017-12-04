<?php  
require "../inc/config.php";
require "../inc/function.class.php";



$request_username = $_POST["username"];//用户名
$request_password = md5($_POST["password"]);//密码

//file_put_contents('aa.txt', $request_password); 

		$strSQL = "select user,id_member,name,status,level,memid  from member where user='$request_username' && password='$request_password' " ;
		$objDB->Execute($strSQL);
		$userinfo=$objDB->fields();

	    if(count($userinfo)!='1'){
						 
			$_SESSION[memberuser]=$userinfo[user];//用户名
			
			$_SESSION[memberid]=$userinfo[id_member];//用户ID
			$_SESSION[memid13]=$userinfo[memid];//用户13位识别码
			
			
			$_SESSION[membername]=$userinfo[name];//用户姓名
			$_SESSION[memberstatus]=$userinfo[status];//用户是否激活认证 1激活 0未激活
			$_SESSION[memberlevel]=$userinfo[level];//用户类型  1个人  2艺术家  3机构
			
			// 用于返回 setcookie 
			$arr['cookie_user']=$userinfo[user];//用户名
			$arr['cookie_pass']=$request_password;//密码
		
			$arr['errcode']="1";//正常登录
			$myjson= json_encode($arr);
			echo $myjson;
			
		}else{
			$arr['errcode']="0";//用户密或密码错误
			$myjson= json_encode($arr);
			echo $myjson;
		}








?>

