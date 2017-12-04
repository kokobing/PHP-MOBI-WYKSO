<?php
require "./inc/cn_index_core.php";



if($_GET[act]=='up'){
	
	 //是否上传员工头像
      if ( is_uploaded_file( $_FILES['idcarduploadpic']['tmp_name'] ) ){
        $image_file=upload_file("idcarduploadpic","upload/test/",mktime());//上传图片
       }
	   
	   header('Location:/tst.php');ob_end_flush();exit();
	
}





?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="微艺库" />
<meta name="description" content="微艺库" />
<title>微艺库</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">





</head>
<body>

<form  id="IDcardupload" action="test.php?act=up"   method="post" enctype="multipart/form-data"  >
<input type="file" name="idcarduploadpic" id="idcarduploadpic">
<input type="submit" value="上传认证"  data-theme="b">
</form>
</body>
</html>