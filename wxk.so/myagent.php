<?php
require "./inc/cn_index_core.php";
//活动 10
$strSQL = "SELECT a.*,b.name as newsdirname,c.name as username,c.photo,c.id_member FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join member as c on a.id_member=c.id_member
		   where  find_in_set('10',a.dirtree) and c.photo!='' and a.id_member=$_SESSION[memberid]
           order by a.ordernum desc  limit 0,5" ;
$objDB->Execute($strSQL);
$allNewsInfo=$objDB->getrows();
$allNewsInfoNum=sizeof($allNewsInfo);


//抽取LAYOUT的图片 页脚图标
$getpicnuminfo=getlayoutpicnuminfo(1,9,'title,url,opicname as pic');


//查找特定艺术家
$strSQL = "select id_member,name,intro,photo,level  from member where id_member='".$_GET[fun]."' " ;
$objDB->Execute($strSQL);
$oneart=$objDB->fields();



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
        <li><a href="myworks.html">我的作品</a></li>
        <li><a href="myevents.html">我的活动</a></li>
        <li><a href="#" class="ui-btn-active">经纪人</a></li>
        <li><a href="myphoto.html">艺术人生</a></li>
    </ul>
</div><!-- /navbar -->

<div id="messageboxwarp-<?=$pagerandcode;?>">
<?
for($i=0;$i<$allNewsInfoNum;$i++){
	
//查找特定艺术家某个作品的图片
$strSQL = "select opicname from newspic where id_newsinfo='".$allNewsInfo[$i][id_newsinfo]."' order by ordernum asc " ;
$objDB->Execute($strSQL);
$artzuopinpic=$objDB->Getrows();

?>
<div class="messagebox">

<div class="innercontent">
   <div><?=$allNewsInfo[$i][title]?></div>
   
      <div class="innercontentimgs">
         <ul id="MyeventsGallery<?=$i?>" class="gallery">
          <?php for($j=0;$j<sizeof($artzuopinpic);$j++){?>
		   <li><a href="/upload/event/<?=$artzuopinpic[$j][opicname]?>"><img src="/upload/event/<?=$artzuopinpic[$j][opicname]?>" alt="<?=$allNewsInfo[$i][title];?>" /></a></li>
          <?php }?>
	     </ul>
         <div style="clear:both"></div>
      </div>
   
   <div style="clear:both"><?=$allNewsInfo[$i][newsdate]?></div>
</div>
<div style="clear:both"></div>
</div>



<? if(sizeof($artzuopinpic)!=0){?>
<script type="text/javascript">

		$(document).ready(function(){
				
				  $("#MyeventsGallery<?=$i?> a").photoSwipe();
			   
			});
		
</script>
<? }}?>
</div>



                
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