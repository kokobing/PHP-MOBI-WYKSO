<?php
require "./inc/cn_index_core.php";
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

</head>
<body>


<div data-role="page" id="mobistyle-webapp" class="my-page" >

 <? require "header.php"; ?>   

<div data-role="content" id="contentinnnerbg" style="margin:0px;padding:0px;" >

<a href="#" class="ui-btn" style="margin:0px;">作品名称作品名称作品名称作品名称</a>

<ol data-role="listview" data-count-theme="b" class="ui-nodisc-icon ui-alt-icon "  style="padding:0px;margin:0px;">
    <li><a href="#">  <i class="fa fa-angle-double-down"></i> Sura <span class="ui-li-count">2014-03-15</span> </a> </li>
    <li><a href="#">  <i class="fa fa-angle-double-down"></i> Koko  <span class="ui-li-count">2014-03-15</span></a></li>
    <li><a href="#">  <i class="fa fa-angle-double-down"></i> Alex  <span class="ui-li-count">2014-03-15</span></a></li>
    <li><a href="#">  <i class="fa fa-angle-double-down"></i> Jmeas  <span class="ui-li-count">2014-03-15</span></a></li>

</ol>


<a href="#popguohu<?=$pagerandcode?>" data-rel="popup" data-position-to="window"  data-transition="pop" class="ui-btn ui-btn-d" style="margin:0px;">申请过户</a>


</div><!-- /content -->


<div id="isloading-<?=$pagerandcode;?>" style="display:none">0</div>   
<div id="pagenum-<?=$pagerandcode;?>" style="display:none">1</div>



 <? require "footer.php"; ?>   
 
 
 
 <div data-role="popup" id="popguohu<?=$pagerandcode?>" data-theme="a" class="ui-corner-all">
    <form method="post">
        <div style="padding:10px 20px;">
           
            <p>输入对方用户名及姓名：</p>
            
            <input type="text" name="user" id="user"  value="" placeholder="用户名" data-theme="a">
            <input type="text" name="name" id="name" value="" placeholder="姓名" data-theme="a">
            <button type="submit" class="ui-btn ui-corner-all ui-shadow ui-btn-b ui-btn-icon-left ui-icon-check" onClick="login();">发送过户邀请</button>

               
        </div>
    </form>
</div>
 

</div><!-- /page -->

<script type="text/javascript" src="/inc/js/klass.min.js"></script> <!--photoswipe-->  
<script src="/inc/js/jquery.js" type="text/javascript"></script>
<script src="/inc/js/slider.min.js"></script>
<script>$(document).bind("mobileinit", function(){$.mobile.defaultPageTransition = 'slide';});</script>
<script src="/inc/js/jquery.mobile-1.4.0.min.js" type="text/javascript"></script>
<script src="/inc/js/custom.js" type="text/javascript"></script>
<script src="/inc/js/jquery.easing.js"></script>
<script src="/inc/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/inc/js/code.photoswipe.jquery-3.0.5.1.min.js"></script>  


</body>
</html>