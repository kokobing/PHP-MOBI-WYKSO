<?php
require "./inc/cn_index_core.php";



//查找特定艺术家
$strSQL = "select id_member,memid,name,intro,photo,level  from member where memid='".$_GET[fun]."' " ;
$objDB->Execute($strSQL);
$oneart=$objDB->fields();

//查找特定艺术家所有文章
$strSQL = "select id_newsinfo,id_newsdir,title,intro from newsinfo where id_member='".$oneart[id_member]."' order by modate desc limit 10" ;
$objDB->Execute($strSQL);
$artzuopin=$objDB->Getrows();
$artzuopinNum=sizeof($artzuopin);


//判断是否关注
if($_SESSION["memberid"]!=$oneart[id_member]){//是否可以关注 首先不是自己
$strSQL = "select id_member from guanzhu where id_member='".$_SESSION["memberid"]."' && gzid='".$oneart[id_member]."' " ;
$objDB->Execute($strSQL);
$gzinfo=$objDB->getrows();
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

<div data-role="content" id="contentinnnerbg" style="margin:0px;padding:0px;" >

 <div style="border-bottom:1px solid #ccc">
    <div class="art_pic">
    <img src="/upload/pics/<?=$oneart[photo]?>">
   
    </div>

    <div class="art_info">
        <h3><?=$oneart[name]?>  
        <span id="guanzhu<?=$oneart[id_member]?>">
        <? if($oneart[id_member]!=$_SESSION[memberid] && isset($_SESSION[memberid])){ //如果登陆用户不是自己 可以关注别人
		      if(sizeof($gzinfo)==0){//关注
		?>
        <a href="#" onclick="guanzhu('<?=$oneart[id_member]?>');" class="ui-btn ui-mini  ui-corner-all  ui-btn-c  ui-btn-inline" id="guanzhu">关注</a>   
        <? }else{?>
        
        <a href="#" onclick="cancelguanzhu('<?=$oneart[id_member]?>');" class="ui-btn ui-mini  ui-corner-all  ui-btn-c  ui-btn-inline" id="guanzhu">取消关注</a>
        
        
       <? }}?>
        <span>
        </h3>
        <p>ID : <?=$oneart[memid]?></p>
        <p><?=$oneart[intro]?></p>
    </div>
    <div style="clear:both"></div>
 </div>

<?
for($i=0;$i<$artzuopinNum;$i++){
//查找特定艺术家某个作品的图片
$strSQL = "select opicname from newspic where id_newsinfo='".$artzuopin[$i][id_newsinfo]."' order by ordernum asc " ;
$objDB->Execute($strSQL);
$artzuopinpic=$objDB->Getrows();

?>
<div class="messagebox" >

<div class="innercontent100">
   <div><a href="#"><?=$artzuopin[$i][title]?></a></div>
   <div><?=$artzuopin[$i][intro]?></div>
   
   <div class="innercontentimgs">
      <ul id="artsinfo<?=$i?>" class="gallery">
          <?php for($j=0;$j<sizeof($artzuopinpic);$j++){?>
		   <li><a href="/upload/<? if($artzuopin[$i][id_newsdir]=='11'){echo 'zuopin';};if($artzuopin[$i][id_newsdir]=='10'){echo 'event';}?>/<?=$artzuopinpic[$j][opicname]?>"><img src="/upload/<? if($artzuopin[$i][id_newsdir]=='11'){echo 'zuopin';};if($artzuopin[$i][id_newsdir]=='10'){echo 'event';}?>/<?=$artzuopinpic[$j][opicname]?>" alt="<?=$allNewsInfo[$i][title];?>" /></a></li>
          <?php }?>
	     </ul>
         <div style="clear:both"></div>
   </div>
   
   
</div>
<div style="clear:both"></div>
</div>

<? if(sizeof($artzuopinpic)!=0){?>
<script type="text/javascript">

		$(document).ready(function(){
				
				  $("#artsinfo<?=$i?> a").photoSwipe();
			   
			});
		
</script>
<? }}?>






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







<? require "footer.php"; ?>   



</div><!-- /page -->



</body>
</html>