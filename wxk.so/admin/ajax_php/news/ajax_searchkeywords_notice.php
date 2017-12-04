<?php 


require "../../inc/ajax_config.php";



if( isset($_SESSION[username])){// 只有登陆用户才可以  


  if($_POST[status]=='1'){//设成全局变量
     $_SESSION[notice_keywords]=$_POST[search_keywords];
  }
  
  if($_POST[status]=='0'){//注销
     session_unregister(notice_keywords);
  }


}







?>

