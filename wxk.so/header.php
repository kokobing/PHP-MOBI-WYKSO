<div data-role="header"  data-theme="a"    id="headerbg" >
 
 
 
<div id="logobar">

<div id="logo"><a href="/">微艺库</a></div>

<div id="menu"><a  href="#" onclick="$('.quickmenubox').slideToggle('fast');"><i class="fa fa-bars "></i></a></div>
<div id="menu-plus"><a  href="#" ><i class="fa fa-plus "></i></a></div>
<div class="searchicon"><a  href="#" onclick="$('.searchbox-list').slideToggle('fast');"><i class="fa fa-search "></i></a></div>

<div class="clearfix"></div> 


<div class="quickmenubox">
<div id="quickmenuboxtop"><div id="quickmenuboxtopimg">&nbsp;</div></div>


<?php if(!isset($_SESSION[memberid])){//未登陆?>
<div class="menutitle off"><a href="/reg.html">会员注册</a></div>
<div class="menutitle off"><a href="#popupLogin<?=$pagerandcode?>" data-rel="popup" data-position-to="window"  data-transition="pop">登陆系统</a></div>

<?php }?>

<?php if(isset($_SESSION[memberid])){//登陆?>
<div class="menutitle off"><a href="/artsinfo-<?=$_SESSION[memid13];?>.html" >我的主页</a></div>
<div class="menutitle off"><a href="/memberinfo.html" >个人资料</a></div>


   <? if($_SESSION[memberstatus]=='1'){//如果登陆 已经激活 可以发布?>
        <div class="menutitle off"><a href="/pullzuopin.html"  data-ajax='false'>发布作品</a></div>
        <div class="menutitle off"><a href="/pullevent.html" >发布活动</a></div>
   <? }else{?>
         <div class="menutitle off"><a href="idcardup.html"  data-ajax='false'>身份认证</a></div>
         <div class="menutitle off"><a href="javascript:void(0)" onClick="norz();">发布作品</a></div>
         <div class="menutitle off"><a href="javascript:void(0)" onClick="norz();">发布活动</a></div>
   <? }?>



<div class="menutitle off"><a href="javascript:void(0)" onClick="logout();">注销登陆</a></div>
<?php }?>

</div><!-- /header -->

</div>


<div id="searchbox" class="searchbox-list">
<form action="#" method="post">
    <div style="float:left;width:90%;margin-left:15px; position:relative">
      <div><input type="search" name="searchkeyother" id="searchkeyother" placeholder="Search..."  ></div>
      <div id="searchbtn"> <input type="submit" value="搜索" data-icon="search" data-iconpos="right" data-inline="true" data-mini="true" data-theme="b"></div>
    </div>
    
</form>

</div>




</div><!-- /header -->
