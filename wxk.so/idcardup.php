<?php
require "./inc/cn_index_core.php";

if(!isset($_SESSION[memberid])){//如果未登陆 退回首页
  header('Location:/index.html');ob_end_flush();exit();
}



if($_GET[act]=='up'){
	
	 //是否上传员工头像
      if ( is_uploaded_file( $_FILES['idcarduploadpic']['tmp_name'] ) ){
        $image_file=upload_file("idcarduploadpic","upload/idcard/",mktime());//上传图片
		$strSQL="INSERT INTO idcardup(id_member,pic) values('$_SESSION[memberid]','$image_file')";
        $objDB->Execute($strSQL);
       }
	   
	   header('Location:/idcardup.html');ob_end_flush();exit();
	
}


//查找是否已经上传
$strSQL = "select pic  from idcardup where id_member='".$_SESSION[memberid]."' " ;
$objDB->Execute($strSQL);
$upidcradonepic=$objDB->fields();


?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="微艺库" />
<meta name="description" content="微艺库" />
<title>微艺库</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="/inc/css/jquery.mobile.theme-1.4.0.css" />
<link rel="stylesheet" href="/inc/css/jquery.mobile.icons-1.4.0.min.css" />
<link rel="stylesheet" href="/inc/css/jquery.mobile.structure-1.4.0.min.css" /> 
<link href="/inc/css/font-awesome.min.css" rel="stylesheet">
<link href="/inc/css/photoswipe.css" type="text/css" rel="stylesheet" />
<link href="/inc/css/resetui.css" media="screen" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="/inc/js/klass.min.js"></script> <!--photoswipe-->  
<script src="/inc/js/jquery.js" type="text/javascript"></script>
<script src="/inc/js/slider.min.js"></script>
<script>$(document).bind("mobileinit", function(){$.mobile.defaultPageTransition = 'slide';});</script>
<script src="/inc/js/jquery.mobile-1.4.0.min.js" type="text/javascript"></script>
<script src="/inc/js/custom.js" type="text/javascript"></script>
<script src="/inc/js/jquery.easing.js"></script>
<script src="/inc/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/inc/js/code.photoswipe.jquery-3.0.5.1.min.js"></script> 


</head>
<body>

<div data-role="page" id="mobistyle-webapp" class="my-page" >

 <? require "header.php"; ?>   


<div data-role="content" id="contentinnnerbg" >

<? if($upidcradonepic[pic]==''){//未上传身份认证?>

<div style="width:80%;margin:0 auto;">
<form  id="IDcardupload" action="idcardup.html?act=up"  method="post" enctype="multipart/form-data"  data-ajax='false'  data-role="none" >
          <div style="margin-top:15px;font-size:120%;font-weight:bold;">身份认证</div>
      
         
      
         <div id="upbtnstyle" style="margin-top:15px;">
		   <input type="file" name="idcarduploadpic" id="idcarduploadpic" value=""   data-role="none" >
         </div>
          
          <div style="margin-top:15px;">
           <input type="submit" value="上传认证"  data-theme="b">
           </div>
          
      </form>    
</div>
<? }else{?>

<div style="width:80%;margin:0 auto;">
您的身份认证已经提交，请耐心等待。。。<br>
<a href="/index.html"  class="ui-shadow ui-btn ui-btn-b ui-corner-all">返回首页</a>
</div>
<? }?>


                
</div><!-- /content -->

 <? require "footer.php"; ?>   

<div class="pagerandcode" style="display:none;"><?=$pagerandcode;?></div>




</div><!-- /page -->







</body>
</html>