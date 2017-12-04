<?php
require "../inc/core/permit/permmanage_core.php";
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
          
          <? if( !isset($_GET[editlist]) ||  $ispermit[ED]=='0'){ //编辑动作不存在 或者 当前登陆的人 没有编辑权限 只能在此列表 
			  ?>
          
          <div class="vd_content-section clearfix">
            
            
          <div class="row">
              <div class="col-md-12">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-dot-circle-o"></i> </span>权限管理 </h3>
                  </div>
                  <div class="panel-body  table-responsive">
                    <table class="table table-bordered" id="permitlist">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>用户名</th>
                          <th>审核权</th>
                          <th>状态</th>
                          <th>编辑权限</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                      
                      <? for($i=0;$i<$UserlistNum;$i++){
						  
						  
						  ?>
                       <tr>
                          <th><?=$i+1;?></th>
                          <th><?=$Userlist[$i][name];?></th>
                          <th><input type="checkbox" name="my-checkbox" data-rel="switch"  data-on-text="审核" data-off-text="关闭" settype="shenhe" setid="<?=$Userlist[$i][id_hr];?>" data-size="mini" data-wrapper-class="green" <? if($Userlist[$i][shenhe]=='1'){echo 'checked';}?>></th>
                          <th><input type="checkbox" name="my-checkbox" data-rel="switch"  data-on-text="开通" data-off-text="暂停" settype="kaiton" setid="<?=$Userlist[$i][id_hr];?>" data-size="mini" data-wrapper-class="blue" <? if($Userlist[$i][stat]=='1'){echo 'checked';}?>></th>
                          <th  class="menu-action">
                         <? if( $ispermit[ED]){?> <a href="permmanageeditlist-<?=$Userlist[$i][id_hr];?>.html" class="btn menu-icon vd_bg-yellow"> <i class="fa fa-pencil"></i> </a><? }?>
                          
                          </th>
                        </tr>
                        
                        <? }?>
                        
                      </tbody>
                      
                      
                    </table>
                   
                    
                    
                    <?php echo $strNavigate;?>
                    
                    
                    
                  </div>
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-md-12 --> 
            </div>
   
   
   

            
          </div>
          
         <?  } 
		 
		 if( isset($_GET[editlist]) &&  $ispermit[ED]=='1'){ //编辑动作存在 并且当前用户拥有 编辑权
			 
			 
	     ?>
          
          
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-sm-8">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-green">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-magic"></i> </span> 设置 <?=$SetUserinfo[name];?> 权限 </h3>
                  </div>
                  <div id="wizard-1" class="panel-body vd_custom-product form-wizard">
                   
                      
                      <div class="progress progress-striped active">
                        <div class="progress-bar vd_bg-green" style="width:100%;"> </div>
                      </div>
                      <div class="tab-content no-bd" style="padding-top:0px;">
                        <div id="tab1" class="tab-pane active">
                        
                        
   <? 
	 for($i=0;$i<$arrMenu1list_num;$i++){
		 
		 //每个目录的当前访问权 $arrMenu1list[$i][url] 
		 $strSQL="SELECT ".$arrMenu1list[$i][url]." as permit FROM pavy1 WHERE  id_hr='$_GET[editlist]'";
         $objDB->Execute($strSQL);
		 $isdir=$objDB->fields();
		 
    ?>     
    <form class="form-horizontal" action="#" role="form">
                          <div class="form-group content-list">
                             <div style="font-size:36px">
                             <i class="fa fa-<?=$arrMenu1list[$i][icon];?>" style="float:left;margin-left:15px;"></i>
                             <div class="btn-group" style="float:right">
  <button type="button" class="btn btn-success  dropdown-toggle" data-toggle="dropdown">
    提交设置 <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="javascript:void(0)" onClick="permitset(<?=$i;?>,0,'<?=$arrMenu1list[$i][url];?>',<?=$arrMenu1list[$i][id];?>,<?=$_GET[editlist];?>);">禁止访问此目录</a></li>
     <li class="divider"></li>
    <li><a href="javascript:void(0)" onClick="permitset(<?=$i;?>,1,'<?=$arrMenu1list[$i][url];?>',<?=$arrMenu1list[$i][id];?>,<?=$_GET[editlist];?>);">全选</a></li>
    <li class="divider"></li>
    <li><a href="javascript:void(0)" onClick="permitset(<?=$i;?>,2,'<?=$arrMenu1list[$i][url];?>',<?=$arrMenu1list[$i][id];?>,<?=$_GET[editlist];?>);">只选个人权限</a></li>



  </ul>
</div>
                             </div>
                            <div class="menu-text" style="margin-left:80px;">
                              <h4 style="color:#39515F;"><?=$arrMenu1list[$i][name];?></h4>
                             
                       
                         <?
              $strSQL="SELECT id_backmenu as id,name FROM backmenu WHERE level='2' and fatherid='".$arrMenu1list[$i][id]."' order by ordernum ASC";
              $objDB->Execute($strSQL);
              $arrMenu2list=$objDB->GetRows();//取二级目录
			  $arrmenu2listNum=sizeof($arrMenu2list);
			  
			 for($j=0;$j<sizeof($arrMenu2list);$j++){
				 
				 //取当前二级菜单权限
				 
				 	$strSQL="SELECT * FROM pavy2 WHERE id_backmenu='".$arrMenu2list[$j][id]."' and  id_hr='$_GET[editlist]' ";
                    $objDB->Execute($strSQL);
                    $currentpvay2=$objDB->fields();
				 
			?>
                     <div class="form-group" <? if($j==($arrmenu2listNum-1)){echo 'style="border-bottom:none;"';}?>>
                        <label class="col-sm-2 control-label"><? echo $arrMenu2list[$j][name];?></label>
                        <div class="col-sm-7 controls">
                          <div class="vd_checkbox checkbox-danger">
                            <input type="checkbox" name="chkItem<?=$i;?>" class="personal_check<?=$i;?>" id="display_permit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"  <? if($currentpvay2[display_permit]=='1'){echo 'checked';}?> >
                            <label for="display_permit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"> 可见 </label>
                            
                            <input type="checkbox" name="chkItem<?=$i;?>" class="personal_check<?=$i;?>" id="add_permit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"  <? if($currentpvay2[add_permit]=='1'){echo 'checked';}?>>
                            <label for="add_permit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"> 添加 </label>
                            
                            <input type="checkbox" name="chkItem<?=$i;?>" class="personal_check<?=$i;?>" id="edit_permit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"   <? if($currentpvay2[edit_permit]=='1'){echo 'checked';}?>>
                            <label for="edit_permit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"> 编辑</label>
                            
                             <input type="checkbox" name="chkItem<?=$i;?>" class="personal_check<?=$i;?>" id="del_permit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"   <? if($currentpvay2[del_permit]=='1'){echo 'checked';}?>>
                            <label for="del_permit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"> 删除</label>
                            
                             <input type="checkbox" name="chkItem<?=$i;?>" class="group_check<?=$i;?>" id="group_list-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"  <? if($currentpvay2[group_list]=='1'){echo 'checked';}?>>
                            <label for="group_list-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"> 组查</label>
                            
                             <input type="checkbox" name="chkItem<?=$i;?>" class="group_check<?=$i;?>" id="group_edit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"  <? if($currentpvay2[group_edit]=='1'){echo 'checked';}?>>
                            <label for="group_edit-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"> 组编</label>
                            
                             <input type="checkbox" name="chkItem<?=$i;?>" class="group_check<?=$i;?>" id="group_del-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"  <? if($currentpvay2[group_del]=='1'){echo 'checked';}?>>
                            <label for="group_del-<?=$arrMenu1list[$i][url];?>-<?=$arrMenu2list[$j][id];?>"> 组删</label>
                          </div>
                        </div>
                      </div>
                        <? }?>  
                      
                              
                            </div>
                          </div>
                           </form>
                        <? }?>  
                          
                         
                          
                          
                        </div>
       
                                     
                      </div>
                      <!-- tab-content -->
                     
                   
                  </div>
                  <!-- panel-body --> 
                  
                </div>
                <!-- Panel Widget --> 
                
              </div>
              <!-- col-sm-8 -->
              
               <div class="col-sm-4 sidebar-affix">
                <div class="panel widget vd_summary-panel">
                  <div class="panel-heading vd_bg-yellow">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="icon-tools"></i> </span><?=$SetUserinfo[name];?> 拥有的权限</h3>
                  </div>
                  <div class="panel-body-list">
                    <form class="form-horizontal" action="#" role="form">
                      <div class="content-list menu-action-right">
                        <div data-rel="scroll" class="mCustomScrollbar _mCS_6" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_6" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container" style="position: relative; top: 0px;">
                        
                          <ul class="list-wrapper pd-lr-15">
                          
                                     <li> <span class="product-title"><strong>控制面板</strong></span>
                              <div class="menu-action"> 
                             
                                
                                 <i class="fa fa-eye"></i>
                                 <i class="fa fa-linkedin"></i> 
                                 <i class="fa fa-pencil"></i> 
                                 <i class="fa fa-times"></i>
                                 <i class="fa fa-align-left"></i>
                                 <i class="fa fa-floppy-o"></i>
                                 <i class="fa fa-recycle"></i>
                                 
                                 
                               </div>
                            </li>  
                          
                          
                          <? 
	 
	 
	 
              $strSQL="SELECT a.*,b.name FROM  pavy2 as a left join backmenu as b on a.id_backmenu=b.id_backmenu
			           WHERE a.id_hr='$_GET[editlist]' order by b.ordernum ASC ";
              $objDB->Execute($strSQL);
              $cuserpermitlist=$objDB->GetRows();//取二级目录 
			  
			 for($j=0;$j<sizeof($cuserpermitlist);$j++){
		
		        
               ?>   
                          
                                <li> <span class="product-title"><strong><?=$cuserpermitlist[$j][name];?></strong></span>
                              <div class="menu-action"> 
                             
                                
                                <? if($cuserpermitlist[$j][display_permit]=='1'){?> <i class="fa fa-eye"></i> <? }?>
                                <? if($cuserpermitlist[$j][add_permit]=='1'){?> <i class="fa fa-linkedin"></i> <? }?>
                                <? if($cuserpermitlist[$j][edit_permit]=='1'){?> <i class="fa fa-pencil"></i> <? }?>
                                <? if($cuserpermitlist[$j][del_permit]=='1'){?> <i class="fa fa-times"></i><? }?>
                                <? if($cuserpermitlist[$j][group_list]=='1'){?> <i class="fa fa-align-left"></i><? }?>
                                <? if($cuserpermitlist[$j][group_edit]=='1'){?> <i class="fa fa-floppy-o"></i><? }?>
                                <? if($cuserpermitlist[$j][group_del]=='1'){?> <i class="fa fa-recycle"></i><? }?>
                                 
                                 
                               </div>
                            </li>    
                            
               <?  }?>            
                                                                        
                          </ul>
                          
                        </div>
                        
                        </div></div>
                      </div>
                      <div class="closing text-right pd-15"  >
                       
                      </div>
                    </form>
                  </div>
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-sm-8 --> 
            </div>
            <!-- row --> 
            
          </div>
          
          <? }?>
          
          
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

<script>

$(function() {

  //审核  开通  按钮
$('input[name="my-checkbox"]').on('switchChange.bootstrapSwitch', function(event, state) {
	
$.post('../ajax_php/permit/ajax_permanage-shenhekaiton.php',{state:state,setuserid:$(this).attr('setid'),settype:$(this).attr('settype')});

}); 


});



</script>


<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/theme.js"></script>

<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/custom.js"></script>
   

<script type="text/javascript">
$(document).ready(function() {
	
  
  


//复选框被单选
$(":checkbox").click(function(){
	
   
	   
	if(this.checked == true){
			
			 var checkvalue=1; 
        }else{
    
	         var checkvalue=0; 
        }
		
		
	$.post('../ajax_php/permit/ajax_permanage-clickclickcheck.php',{attrid:$(this).attr("id"),userid:<?=$_GET[editlist];?>,checked:checkvalue});
		
		
		

		
})






////////////////////////////飘浮跟随////////////////////////////////////////////
 "use strict";
  	
  var tablet_width = 751;

  var top_value;
  var bottom_value;
  
  setValue();
  resizePanel();
  setAffix();  

  $(window).on("resize", function(){
		if ($(window).width()>tablet_width){	  
			resizePanel();	 
			setValue();	
		} else{
			$('.sidebar-affix .panel').removeAttr('style');
		}


  });		  

 

  function setAffix(){
	  $('.sidebar-affix').before('<style>.affix{top:'+top_value+'px; position:fixed !important;} .affix-bottom{position:absolute; }</style>');
	  $('.sidebar-affix .panel').affix({
		offset: {
		  top: top_value,
		  bottom: bottom_value
		}
	  })
  }
  
  function resizePanel(){
	  $('.sidebar-affix .panel').css('width',($('.vd_content-section').innerWidth()-114)/3+'px');
	  if ($(window).width()<=tablet_width)	{
			$('.sidebar-affix .panel').removeAttr('style');		  
	  }
  }
  function setValue(){
	  top_value = $('#header').outerHeight() + $('.vd_content .vd_head-section').height() + $('.vd_content .vd_title-section').height() - 39;
	  bottom_value = $('#footer').outerHeight() + 61 ;		  
  } 
  function clearAffix(){
	  $('.sidebar-affix .panel').removeClass('affix');
	  $('.sidebar-affix .panel').removeClass('affix-top');
	  $('.sidebar-affix .panel').removeClass('affix-bottom');
	  $('.sidebar-affix .panel').removeAttr('style');	  	  	  
  }

/////////////////////////////////////////////////////////////////////////////////////////////






  
});


function permitset(tag,selectmenuid,permitdir_url,permitdir_id,userid){
	
   if(selectmenuid==0){//禁用	
   
     $("[name = chkItem"+tag+"]:checkbox").each(function() {this.checked = false;});//取消全选
	 $("[name = chkItem"+tag+"]:checkbox").each(function() {this.disabled = true;});//禁用	
	 
	    $.post('../ajax_php/permit/ajax_permanage.php',{selectmenuid:selectmenuid,permitdir_url:permitdir_url,permitdir_id:permitdir_id,userid:userid},function(data) {
		  alert('禁用成功');
		 // window.location.reload(); 
		});
	 
   }
   
   
   if(selectmenuid==1){// 全选 
   
      $.post('../ajax_php/permit/ajax_permanage.php',{selectmenuid:selectmenuid,permitdir_url:permitdir_url,permitdir_id:permitdir_id,userid:userid},function(data) {
		  alert('全选成功');
		 // window.location.reload(); 
		});
      
   
      $("[name = chkItem"+tag+"]:checkbox").each(function() {this.disabled = false;});//先取消禁用
	  $("[name = chkItem"+tag+"]:checkbox").each(function() {this.checked = true;});
   }
   

   
    if(selectmenuid==2){// 只选个人
	
	   $.post('../ajax_php/permit/ajax_permanage.php',{selectmenuid:selectmenuid,permitdir_url:permitdir_url,permitdir_id:permitdir_id,userid:userid},function(data) {
		  alert('个人成功');
		 // window.location.reload(); 
		});
	
	 $("[name = chkItem"+tag+"]:checkbox").each(function() {this.disabled = false;});//先取消禁用
	 $(".personal_check"+tag).each(function() {this.checked = true;});
   }
   

	
}






</script>
<!-- Specific Page Scripts END -->



</body>
</html>