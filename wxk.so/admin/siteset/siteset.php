<?php
require "../inc/core/site/site_core.php";
 /*  目前每个页面会产生7个 个人权限  用于判断用户当前权限
		 $ispermit[DP]='1'; //DISPLAY       0  1
		 $ispermit[AD]='1'; //ADD           0  1
		 $ispermit[ED]='1'; //EDIT          0  1
		 $ispermit[DE]='1'; //DEL           0  1
		 $ispermit[GL]='1'; //GROUP LIST    0  1
		 $ispermit[GE]='1'; //GROUP EDIT    0  1
		 $ispermit[GD]='1'; //GROUP DEL     0  1
 */
?>
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html><!--<![endif]-->

<!-- Specific Page Data -->

<!-- End of Data -->

<head>
    <meta charset="utf-8" />
    <title><? echo SITE_TITLE;?></title>
    <meta name="keywords" content="<? echo SITE_KEY;?>" />
    <meta name="description" content="<? echo SITE_DESC;?>">
    <meta name="author" content="TYSH">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/<?=SITE_DIR?>/inc/pics/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/<?=SITE_DIR?>/inc/pics/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/<?=SITE_DIR?>/inc/pics/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/<?=SITE_DIR?>/inc/pics/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/<?=SITE_DIR?>/inc/pics/favicon.png">
    
    
    <!-- CSS -->
       
    <!-- Bootstrap & FontAwesome & Entypo CSS -->
    <link href="/<?=SITE_DIR?>/inc/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/<?=SITE_DIR?>/inc/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!--[if IE 7]><link type="text/css" rel="stylesheet" href="/<?=SITE_DIR?>/inc/css/font-awesome-ie7.min.css"><![endif]-->
    <link href="/<?=SITE_DIR?>/inc/css/font-entypo.css" rel="stylesheet" type="text/css">    

    <!-- Fonts CSS -->
    <link href="/<?=SITE_DIR?>/inc/css/fonts.css"  rel="stylesheet" type="text/css">
               
    <!-- Plugin CSS -->
    <link href="/<?=SITE_DIR?>/inc/css/jquery-ui.custom.min.css" rel="stylesheet" type="text/css">    
    <link href="/<?=SITE_DIR?>/inc/css/prettyPhoto.css" rel="stylesheet" type="text/css">
    <link href="/<?=SITE_DIR?>/inc/css/isotope.css" rel="stylesheet" type="text/css">
    <link href="/<?=SITE_DIR?>/inc/css/jquery.pnotify.css" media="screen" rel="stylesheet" type="text/css">    
	<link href="/<?=SITE_DIR?>/inc/css/prettify.css" rel="stylesheet" type="text/css"> 
   
         
    <link href="/<?=SITE_DIR?>/inc/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
    <link href="/<?=SITE_DIR?>/inc/css/jquery.tagsinput.css" rel="stylesheet" type="text/css">
    <link href="/<?=SITE_DIR?>/inc/css/bootstrap-switch.css" rel="stylesheet" type="text/css">    
    <link href="/<?=SITE_DIR?>/inc/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css">    
    <link href="/<?=SITE_DIR?>/inc/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css">
     
    <!-- Theme CSS -->
    <link href="/<?=SITE_DIR?>/inc/css/theme.min.css" rel="stylesheet" type="text/css">
    <!--[if IE]> <link href="/<?=SITE_DIR?>/inc/css/ie.css" rel="stylesheet" > <![endif]-->
    <link href="/<?=SITE_DIR?>/inc/css/chrome.css" rel="stylesheet" type="text/chrome"> <!-- chrome only css -->    


        
    <!-- Responsive CSS -->
    <link href="/<?=SITE_DIR?>/inc/css/theme-responsive.min.css" rel="stylesheet" type="text/css"> 

	  
    
    
    <!-- Custom CSS -->
    <link href="/<?=SITE_DIR?>/inc/css/custom.css" rel="stylesheet" type="text/css">



    <!-- Head SCRIPTS -->
    <script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/modernizr.js"></script> 
    <script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/mobile-detect.min.js"></script> 
    <script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/mobile-detect-modernizr.js"></script> 
 
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/html5shiv.js"></script>
      <script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/respond.min.js"></script>     
    <![endif]-->
    
</head>    

<body id="dashboard" class="full-layout  nav-right-hide nav-right-start-hide  nav-top-fixed      responsive    clearfix" data-active="dashboard "  data-smooth-scrolling="1">     
<div class="vd_body">

 <? require "../header.php"; ?>  

<div class="content">
  <div class="container">
    <div class="vd_navbar  vd_bg-<?=$c_themecolor;?> vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
	
	
   
   <? require "../leftquickbar.php"; ?>   
     
   <? require "../leftmenu.php";?>     
    
    
    <div class="navbar-spacing clearfix"></div>
    
    <? require "../logout.php";?>  
         
</div>   

 <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
    
    <div class="navbar-spacing clearfix"> </div>
</div>    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <?php require "navibar.php";?>	
          </div>
          <!-- vd_head-section -->
          
          <?php require "../tz.php";?>	
          <!-- vd_title-section               -->
          
          <div class="vd_content-section clearfix">
            
            
          <div class="row">
              <div class="col-md-12">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-<?=$leftmenu_icon;?>"></i> </span> 站点设定 </h3>
                  </div>
                  <div class="panel-body">
                    <form class="form-horizontal" action="siteset-edit.html" role="form"  method="post">
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">站点标题</label>
                        <div class="col-sm-7 controls">
                          <input id="title" name="title" type="text" placeholder="可自由设定网站的标题" class="width-50" value="<?php echo $arrsiteset[title];?>">
                          <span class="help-inline">全局设定</span> </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">关健词</label>
                        <div class="col-sm-7 controls">
                          <input id="keywords" name="keywords" type="text" placeholder="可自由设定网站的关健词" class="width-50" value="<?php echo $arrsiteset[keywords];?>" >
                          <span class="help-inline">Meta Keywords（全局设定）</span> </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">描述</label>
                        <div class="col-sm-7 controls">
                          <input id="description" name="description" type="text" placeholder="可自由设定网站的描述" class="width-50" value="<?php echo $arrsiteset[description];?>" >
                          <span class="help-inline">Meta Description（全局设定）</span> </div>
                      </div>

                      
                     <div class="form-group">
                        <label class="col-sm-4 control-label">网站防拷贝</label>
                        <div class="col-sm-7 controls">
                          <div class="vd_radio radio-success">
                            <input type="radio" name="iscopy" id="iscopy1" value="1" <?php if($arrsiteset[iscopy]=='1'){echo 'checked';}?>>
                            <label for="iscopy1"> 是</label>
                            <input type="radio" name="iscopy" id="iscopy2" value="0" <?php if($arrsiteset[iscopy]=='0'){echo 'checked';}?>>
                            <label for="iscopy2"> 否</label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">每页信息数量</label>
                        <div class="col-sm-7 controls">
                          <input name="newsnum" id="newsnum" type="text" placeholder="填入数字即可" class="width-50" value="<?php echo $arrsiteset[newsnum];?>" >
                          <span class="help-inline">设定的是发现、艺术家、最新活动的每页数量</span> </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-4 control-label">每页产品数量</label>
                        <div class="col-sm-7 controls">
                          <input name="productnum" id="productnum" type="text" placeholder="填入数字即可" class="width-50" value="<?php echo $arrsiteset[productnum];?>" >
                          <span class="help-inline">可自由设定网站产品每页数量</span> </div>
                      </div>


                      
                      <div class="form-group">
                        <label class="col-sm-4 control-label">插件代码</label>
                        <div class="col-sm-7 controls">
                          <textarea name="statistics" id="statistics" rows="5" class="width-50"><?php echo $arrsiteset[statistics];?></textarea>
                          <span class="help-inline">可插入统计代码、即时聊天代码等</span>
                        </div>
                      </div>

                      <div class="form-group form-actions">
                        <div class="col-sm-4"> </div>
                        <div class="col-sm-7">
                        <?php if( $ispermit[ED]=='1'){?>
                          <button class="btn vd_btn vd_bg-green vd_white" type="submit"><i class="icon-ok"></i> 保存</button>
                          <button class="btn vd_btn vd_black" type="reset">重置</button>
                         <? }?> 
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-md-12 --> 
            </div>
   
   
   

            
          </div>
          
          
          
          
          
          <!-- .vd_content-section --> 
          
        </div>
        <!-- .vd_content --> 
      </div>
      <!-- .vd_container --> 
    </div>
    <!-- .vd_content-wrapper --> 
    
    <!-- Middle Content End --> 
    
  </div>
  <!-- .container --> 
</div>
<!-- .content -->

 <?php require "../footer.php";?>	
 
 <?php require "../hideopenwindow.php";?>	                  


</div>


<!-- .vd_body END  -->
<a id="back-top" href="#" data-action="backtop" class="vd_back-top visible"> <i class="fa  fa-angle-up"> </i> </a>

<!--
<a class="back-top" href="#" id="back-top"> <i class="icon-chevron-up icon-white"> </i> </a> -->

<!-- Javascript =============================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.js"></script> 
<!--[if lt IE 9]>
  <script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/excanvas.js"></script>      
<![endif]-->
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/bootstrap.min.js"></script> 
<script type="text/javascript" src='/<?=SITE_DIR?>/inc/js/jquery-ui.custom.min.js'></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.ui.touch-punch.min.js"></script>

<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/caroufredsel.js"></script> 
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/plugins.js"></script>

<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/breakpoints.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.prettyPhoto.js"></script> 

<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.blockUI.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.pnotify.min.js"></script>



<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/theme.js"></script>

<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/custom.js"></script>
   




</body>
</html>