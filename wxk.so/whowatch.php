<?php
require "./inc/cn_index_core.php";


//当前ID艺术家
//查找特定艺术家
$strSQL = "select id_member,name,intro,photo,level  from member where id_member='".$_GET[fun]."' " ;
$objDB->Execute($strSQL);
$oneart=$objDB->fields();

//取出谁在关注他
$strSQL = "select id_member  from guanzhu  where gzid='$_GET[fun]' " ;
$objDB->Execute($strSQL);
$allgz=$objDB->GetRows();
$allgzNum=sizeof($allgz);

for($i=0;$i<$allgzNum;$i++){
	if($i!=$allgzNum-1){
	  $allgzid.=$allgz[$i][id_member].',';
	}else{
	  $allgzid.=$allgz[$i][id_member];	
	}
}


//查找他的关注
$strSQL = "select id_member,name,intro,photo from member  where id_member in ($allgzid)  order by id_member desc limit 0,5" ;

$objDB->Execute($strSQL);
$arrartlist=$objDB->GetRows();

//抽取LAYOUT的图片 页脚图标
$getpicnuminfo=getlayoutpicnuminfo(1,9,'title,url,opicname as pic');

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


<a href="artsinfo-<?=$oneart[id_member];?>.html" class="ui-btn" style="margin:0px;"><i class="fa fa-bell"></i> <?=$oneart[name];?></a>



<div data-role="navbar">
    <ul>
        <li><a href="watch.html?fun=<?=$_GET[fun];?>" ><i class="fa fa-comment"></i> 他的关注</a></li>
        <li><a href="#" class="ui-btn-active"><i class="fa fa-users"></i> 谁在关注</a></li>
    </ul>
</div><!-- /navbar -->



<ul data-role="listview"  data-inset="false"  class="ui-nodisc-icon ui-alt-icon resetplist"  id="type-artslist-<?=$pagerandcode;?>"  style="padding:0px;margin:0px;">

	<?php for($i=0;$i<sizeof($arrartlist);$i++){?>
        <li>
            <a href="artsinfo-<?=$arrartlist[$i][id_member]?>.html">
                <img src="/upload/pics/<?=$arrartlist[$i][photo]?>" width="50">
                <h2><?=$arrartlist[$i][name]?></h2>
                <p><?=$arrartlist[$i][intro]?></p>
            </a>
        </li>
    <?php }?>
    
</ul>

</div><!-- /content -->



<!-- //artsinfo  works   watch   whowatch   artevents   agent  introduction -->
<div data-role="footer" data-theme="b" id="footerbox"  data-position="fixed" style="background:none;border:none;" >

<div data-role="navbar" data-iconpos="top">

	 <ul  id="footerquickbar">
     
         <li><a href="works.html?fun=<?=$_GET[fun]?>" id="footericonset0" data-icon="custom">作品</a></li>
         <li><a href="artevents.html?fun=<?=$_GET[fun]?>" id="footericonset1" data-icon="custom" >活动</a></li>

        <? if($oneart[level]=='2'){?>
         <li><a href="agent.html?fun=<?=$_GET[fun]?>" id="footericonset2" data-icon="custom" >经纪</a></li>
        <? }?>
        
         <li><a href="watch.html?fun=<?=$_GET[fun]?>" id="footericonset3" data-icon="custom" >关注</a></li>
         <li><a href="introduction.html?fun=<?=$_GET[fun]?>" id="footericonset4" data-icon="custom" >介绍</a></li>
	 </ul>
	</div>

</div><!-- /footer -->



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