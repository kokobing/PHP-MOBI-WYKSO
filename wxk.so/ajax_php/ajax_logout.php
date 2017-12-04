<?php  
require "../inc/config.php";
require "../inc/function.class.php";
// file_put_contents('aa.txt', $strSQL); 


	
	session_unregister(memberuser);//注销用户名
	session_unregister(memberid);//注销用户id
	session_unregister(memid13);//注销用户13位识别码
	session_unregister(membername);//注销姓名
    session_unregister(memberstatus);//注销
	session_unregister(memberlevel);//注销
	


	$myjson= json_encode($arr);
	echo $myjson;

?>

