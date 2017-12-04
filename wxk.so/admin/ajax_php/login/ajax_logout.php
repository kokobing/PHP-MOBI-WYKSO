<?php  
require "../../inc/ajax_config.php";
// file_put_contents('aa.txt', $strSQL); 

$request_language = $_SESSION[language];//用户选择的语言

	$strSQL = "delete from online where user = '$_SESSION[username]';" ;
	$objDB->Execute($strSQL);
	
	session_unregister(username);//注销用户名
	session_unregister(userid);//注销用户id
	session_unregister(realname);//注销姓名
	session_unregister(randcode);//注销随机码
	session_unregister(language);//注销语言
	session_unregister(bind_domain);//注销域名识别

	

	if($request_language=='2'){
		$arr['info']="Successful Exit";
		$arr['homefile']="index-en.html";//退出时 如果原来进入的是英文，退出到英文登录页面
	}
	if($request_language=='1'){
		$arr['info']="您已成功退出!";
		$arr['homefile']="index.html";//退出时 如果原来进入的是中文，退出到中文登录页面
	}

	$myjson= json_encode($arr);
	echo $myjson;

?>

