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
<link href="./inc/css/resetui.css" media="screen" rel="stylesheet" type="text/css" />

</head>
<body>

<div data-role="page" id="mobistyle-webapp" class="my-page" >

 <? require "header.php"; ?>   


<div data-role="content" id="contentinnnerbg" style="padding:0px;padding-bottom:5px;" >

<div style="padding:15px;">
<ul data-role="listview" data-theme="a"  class="ui-alt-icon ui-nodisc-icon " >
<li><a href="/found.html" ><i class="fa fa-globe fa-lg homeiconcolor"></i> 发现</a></li>

<li><?php if(!isset($_SESSION[memberid])){?><a href="#popupLogin<?=$pagerandcode?>" data-rel="popup" data-position-to="window"  data-transition="pop"><?php }else{?><a href="myart.html"><?php }?><i class="fa fa-paper-plane-o fa-lg homeiconcolor"></i> 艺术圈</a></li>
<li><?php if(!isset($_SESSION[memberid])){?><a href="#popupLogin<?=$pagerandcode?>" data-rel="popup" data-position-to="window"  data-transition="pop"><?php }else{?><a href="favo.html"><?php }?><i class="fa fa-life-ring fa-lg homeiconcolor"></i> 收藏工具</a></li>
<li><?php if(!isset($_SESSION[memberid])){?><a href="#popupLogin<?=$pagerandcode?>" data-rel="popup" data-position-to="window"  data-transition="pop"><?php }else{?><a href="myworks.html"><?php }?><i class="fa fa-comment fa-lg homeiconcolor"></i> 艺术助理</a></li>
<li><a href="/about/about.html" ><i class="fa fa-flag-checkered fa-lg homeiconcolor"></i> 关于我们</a></li>

</ul>
</div>


                
</div><!-- /content -->




<div data-role="footer" data-theme="b" id="footerbox"  data-position="fixed" style="background:none;border:none;" >

<div id="main" role="main" style="clear:both;">
      <section class="slider">
        <div class="flexslider">
          <ul class="slides">
           <li><img src="/upload/adv/01.jpg" /></li>
           <li><img src="/upload/adv/02.jpg" /></li>
           <li><img src="/upload/adv/03.jpg" /></li>
           <li><img src="/upload/adv/04.jpg" /></li>
           <li><img src="/upload/adv/05.jpg" /></li>
         </ul>
        </div>
      </section>
</div><!-- /main -->

</div><!-- /footer -->




 <? require "footer.php"; ?>   






</div><!-- /page -->


<script type="text/javascript" src="/inc/js/klass.min.js"></script> <!--photoswipe-->  
<script src="/inc/js/jquery.js" type="text/javascript"></script>
<script src="/inc/js/slider.min.js"></script>
<script>$(document).bind("mobileinit", function(){$.mobile.defaultPageTransition = 'slide';});</script>
<script src="/inc/js/jquery.mobile-1.4.0.min.js" type="text/javascript"></script>
<script src="./inc/js/custom.js" type="text/javascript"></script>
<script src="/inc/js/jquery.easing.js"></script>
<script src="/inc/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/inc/js/code.photoswipe.jquery-3.0.5.1.min.js"></script>   



</body>
</html>