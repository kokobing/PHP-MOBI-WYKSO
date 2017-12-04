<?php
require "../inc/core/hr/hrzw_core.php";
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
  <?php require "../rightchat.php";?>	  
    
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
                    <h3 class="panel-title"> <span class="menu-icon">  <i class="fa fa-<?=$leftmenu_icon;?>"></i> </span>职务设置
                   
                    <? if($ispermit[AD]=='1'){?>
                     <div class="menu-icon" style="float:right; position:relative"> 
                         <a href="javascript:void(0)" onclick="addbm();" class="custom_add"><i class="fa fa-plus"></i></a>
                       </div>
                     <? }?>
                           
                     </h3>
                  </div>
                  <div class="panel-body  table-responsive">
                    <table class="table table-bordered" id="zwlist">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>职务名称 / 人数</th>
                          <th>设置时间</th>
                          <th>动作</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <? 
					  
    $strSQL="SELECT zwname,zw_count,indate FROM hr_zw ";//列表职务
    $objDB->Execute($strSQL);
    $zwlist=$objDB->getrows();
	$zwlistNum=sizeof($zwlist);
	
					  for($i=0;$i<$zwlistNum;$i++){
					  ?>
                        <tr>
                          <td><?=$i+1;?></td>
                          <td><?=$zwlist[$i][zwname]?><span class="badge vd_bg-<? if($zwlist[$i][zw_count]==0){echo 'red';}else{echo 'blue';}?>"><?=$zwlist[$i][zw_count]?></span></td>
                          <td><?=$zwlist[$i][indate]?></td>
                          <td class="menu-action">
                      <? if($ispermit[ED]=='1'){?> <a  href="javascript:void(0)" onClick="editzw('<?=$zwlist[$i][zwname]?>');" class="btn menu-icon vd_bg-yellow"> <i class="fa fa-pencil"></i> </a> <? }?>
                       <? if($ispermit[DE]=='1'){?> <a  href="javascript:void(0)" onClick="delzw('<?=$zwlist[$i][zwname]?>','<?=$zwlist[$i][zw_count]?>');" class="btn menu-icon vd_bg-yellow"> <i class="fa fa-times"></i> </a><? }?></td>
                        </tr>
                        
                        <? }?>
                        
                        
                      </tbody>
                    </table>
                    
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
 
 <?php require "../chat.php";?>	 
               
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
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/pnotify.confirm.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/pnotify.callbacks.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/pnotify.reference.js"></script>

<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/theme.js"></script>
<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/custom.js"></script>
   

<script type="text/javascript">
$(document).ready(function() {
	

			
  
});



 <? if($ispermit[AD]=='1'){?>
//增加职务 弹屏
function addbm(){
	
	
(new PNotify({
    title: '添加职务',
    icon: 'glyphicon glyphicon-question-sign',
    hide: false,
	buttons: {closer: true,sticker: false},
    confirm: {prompt: true,prompt_default:'', buttons: [{text: '确定',addClass: 'btn-default'},{text: '取消',addClass: 'btn-default'}]}
	
})).get().on('pnotify.confirm', function(e, notice, val) {
	
 if($('<div/>').text(val).html()==''){
	 
	   notice.cancelRemove().update({
        title: '添加职务不为空值',
        text:  $('<div/>').text(val).html() + '添加未完成.',
        icon: true,
        type: 'info',
        hide: true,
        buttons: {closer: true,sticker: false}
    });

 
 }else{
	 
	 	$.post('../ajax_php/hr/ajax_addzw.php',{zwname:$('<div/>').text(val).html()},function() {
		
           notice.cancelRemove().update({
           title: '添加职务',
           text:  $('<div/>').text(val).html() + '添加完成.',
           icon: true,
           type: 'info',
           hide: true,
           buttons: {closer: true,sticker: false}
            });
			
			
			$('<tr><td><span class="label label-danger">新增</span></td><td>'+$('<div/>').text(val).html()+'</td><td>刚刚</td><td class="menu-action"><a  href="javascript:void(0)" onClick="editzw(\''+$('<div/>').text(val).html()+'\');" class="btn menu-icon vd_bg-yellow"> <i class="fa fa-pencil"></i> </a><a  href="javascript:void(0)" onClick="delzw(\''+$('<div/>').text(val).html()+'\',\'0\');" class="btn menu-icon vd_bg-yellow"> <i class="fa fa-times"></i> </a></td></tr>').insertBefore($('#zwlist tbody tr:eq(0)'));
			
		
		});
	 
	 
	 
 }
	
    
}).on('pnotify.cancel', function() {
    notice.cancelRemove().update();
});	
	
	
}



<? }?>


 <? if($ispermit[ED]=='1'){?>

//编辑职务 弹屏
function editzw(oldzwname){
	
	
(new PNotify({
    title: '编辑职务',
    icon: 'glyphicon glyphicon-question-sign',
    hide: false,
	buttons: {closer: true,sticker: false},
    confirm: {prompt: true,prompt_default:oldzwname, buttons: [{text: '确定',addClass: 'btn-default'},{text: '取消',addClass: 'btn-default'}]}
	
})).get().on('pnotify.confirm', function(e, notice, val) {
	
 if($('<div/>').text(val).html()==''){
	   //输入为空值 弹屏
	   notice.cancelRemove().update({
        title: '编辑职务不为空值',
        text:  $('<div/>').text(val).html() + '编辑未完成.',
        icon: true,
        type: 'info',
        hide: true,
        buttons: {closer: true,sticker: false}
    });

 
 }else{
	 
	 if(oldzwname!=$('<div/>').text(val).html()){ //旧的名称和新输入的名称不一致 才入库 则刷新本页 	
	 
	 	$.post('../ajax_php/hr/ajax_editzw.php',{newzwname:$('<div/>').text(val).html(),oldzwname:oldzwname},function() {
		
           notice.cancelRemove().update({
           title: '编辑职务',
           text:  $('<div/>').text(val).html() + '编辑完成.',
           icon: true,
           type: 'info',
           hide: true,
           buttons: {closer: true,sticker: false}
            });
		 
		  setTimeout(function() {  window.location.reload();  },1500)	 ; 	
		
		});
	 
	 	}	
	 
 }
	
    
}).on('pnotify.cancel', function() {
    notice.cancelRemove().update();
});	
	
	
}


<? }?>


 <? if($ispermit[DE]=='1'){?>


//删除职务 弹屏
function delzw(oldzwname,zw_count){
	
	if(zw_count!=0){
		
		new PNotify({
             title: 'Oh No!',
             text: '职务不为空，无法删除！',
             type: 'error'
          });
		 
		}else{
			

         (new PNotify({
            title: oldzwname+'职务删除提醒！',
             text: 'Are you sure?',
             icon: 'glyphicon glyphicon-question-sign',
              hide: false,
             confirm: {confirm: true},
              buttons: {closer: false,sticker: false}
          })).get().on('pnotify.confirm', function() {
                   
				$.post('../ajax_php/hr/ajax_delzw.php',{oldzwname:oldzwname},function() {
					fake_load('正在删除！','消息提醒！','已经删除，正在准备为您刷新列表页！','fa fa-envelope-o','success','1');	
				});
				
				   
				   
            }).on('pnotify.cancel', function() {
                   notice.cancelRemove().update();
            });


			
		}
	
}



<? }?>




</script>
<!-- Specific Page Scripts END -->



</body>
</html>