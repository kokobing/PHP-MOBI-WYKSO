<?php
require "./inc/cn_index_core.php";

if(!isset($_SESSION[memberid])){
  header('Location:/index.html');ob_end_flush();exit();
}

//取出当前登陆用户的所有关注
$strSQL = "select gzid from guanzhu  where id_member='$_SESSION[memberid]' " ;
$objDB->Execute($strSQL);
$allgz=$objDB->GetRows();
$allgzNum=sizeof($allgz);

for($i=0;$i<$allgzNum;$i++){
	if($i!=$allgzNum-1){
	  $allgzid.=$allgz[$i][gzid].',';
	}else{
	  $allgzid.=$allgz[$i][gzid];	
	}
}




if($allgzid!=''){
//查找所有艺术家 level 1个人 2艺术家 3机构
$strSQL = "select id_member,memid,name,intro,photo from member  where status='1' and level='2' and id_member in ($allgzid) order by id_member desc limit 0,5" ;
$objDB->Execute($strSQL);
$arrartlist=$objDB->GetRows();
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


<div data-role="navbar"  id="topmenu">
    <ul>
        <li><a href="myart.html" >关注作品</a></li>
        <li><a href="gzevent.html" >关注活动</a></li>
        <li><a href="#" class="ui-btn-active">关注社群</a></li>
    </ul>
</div><!-- /navbar -->



<ul data-role="listview"  data-inset="false"  class="ui-nodisc-icon ui-alt-icon resetplist"  id="type-myartslist-<?=$pagerandcode;?>"  style="padding:0px;margin:0px;">

	<?php for($i=0;$i<sizeof($arrartlist);$i++){?>
        <li>
            <a href="artsinfo-<?=$arrartlist[$i][memid]?>.html">
                <img src="/upload/pics/<?=$arrartlist[$i][photo]?>" width="50">
                <h2><?=$arrartlist[$i][name]?></h2>
                <p><?=$arrartlist[$i][intro]?></p>
            </a>
        </li>
    <?php }?>
    
</ul>

</div><!-- /content -->


<div id="isloading-<?=$pagerandcode;?>" style="display:none">0</div>   
<div id="pagenum-<?=$pagerandcode;?>" style="display:none">1</div>




 <? require "footer.php"; ?>   



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