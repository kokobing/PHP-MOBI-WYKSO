<?php
require "./inc/index_core.php";



if($_GET[fun]=='dir1'){//创建一级目录



  ///////////////创建一级目录权限/////////////////////////////////////////
  
  $strSQL=" ALTER  TABLE pavy1 ADD  ".$_POST["bmurl"]." INT( 1 ) NOT NULL DEFAULT  '0' AFTER  id_hr ; ";
  $objDB->Execute($strSQL);//权限表
  $strSQL="update pavy1 set $_POST[bmurl]=1 where id_hr=1";
  $objDB->Execute($strSQL);//设置管理员可以访问 id_hr=1



    if ( is_uploaded_file( $_FILES['bmpic']['tmp_name'] ) ){//是否上传照片
        $image_file=upload_file("bmpic","upload/pics/",mktime());//上传图片
	}

  $strSQL="INSERT INTO backmenu(name,level,icon,pic,url) VALUES('".$_POST["bmname"]."','1','".$_POST["bmicon"]."','".$image_file."','".$_POST["bmurl"]."') ";
  $objDB->Execute($strSQL);//一级菜单名称入库
  
  $id = $objDB->getInsertID();//获取刚入库记录的ID
  $strSQL="update backmenu set ordernum='".$id."' where id_backmenu='".$id."'";
  $objDB->Execute($strSQL);//更改入库记录的ORDER顺序
  
  

  header('Location:setbmadd-'.$id.'.html'); exit();	
}





if($_GET[fun]=='dir2'){//创建二级目录


    if ( is_uploaded_file( $_FILES['bmpic']['tmp_name'] ) ){//是否上传照片
        $image_file=upload_file("bmpic","upload/pics/",mktime());//上传图片
	}

  $strSQL="INSERT INTO backmenu(name,level,icon,pic,url,fatherid) VALUES('".$_POST["bmname"]."','2','".$_POST["bmicon"]."','".$image_file."','".$_POST["bmurl"]."','".$_POST["fatherid"]."') ";
  $objDB->Execute($strSQL);//菜单名称入库
  
  $id = $objDB->getInsertID();//获取刚入库记录的ID
  $strSQL="update backmenu set ordernum='".$id."' where id_backmenu='".$id."'";
  $objDB->Execute($strSQL);//更改入库记录的ORDER顺序
  
  
  /////////////设置管理员权限 可以访问///////////////////////////
  
  $strSQL="INSERT INTO pavy2 (id_hr,id_backmenu,display_permit,add_permit,edit_permit,del_permit,group_list,group_edit,group_del) VALUES ('1','$id','1','1','1','1','1','1','1') ";
  $objDB->Execute($strSQL);//菜单名称入库
  
  

  header('Location:setbmadd-'.$_POST["fatherid"].'.html'); exit();	


}



if($_GET[fun]=='edit'){//编辑目录


    if ( is_uploaded_file( $_FILES['bmpic']['tmp_name'] ) ){//是否上传照片
        $image_file=upload_file("bmpic","upload/pics/",mktime());//上传图片
		
		$strSQL="UPDATE backmenu SET name='".$_POST["bmname"]."',icon='".$_POST["bmicon"]."',pic='".$image_file."',url='".$_POST["bmurl"]."' WHERE id_backmenu='".$_POST["currentid"]."' ";
  $objDB->Execute($strSQL);//菜单名称入库
  
        if($_POST["currentpic"]!=''){
			@unlink('upload/pics/'.$_POST["currentpic"]);
		}//删除旧图片
		
	}else{//不上传图片则不更新图片
		
	  $strSQL="UPDATE backmenu SET name='".$_POST["bmname"]."',icon='".$_POST["bmicon"]."',url='".$_POST["bmurl"]."' WHERE id_backmenu='".$_POST["currentid"]."' ";
  $objDB->Execute($strSQL);//菜单名称入库	
		
	}


  

  header('Location:setbm.html'); exit();	


}









if(isset($_GET[add])){//添加动作存在 抽取当前ID的目录名称
   $strSQL="SELECT id_backmenu as id,name,level FROM backmenu WHERE  id_backmenu='".$_GET["add"]."'";
   $objDB->Execute($strSQL);
   $current_dirinfo=$objDB->fields();
}


if(isset($_GET[edit])){//编辑动作存在 抽取当前ID的目录名称
   $strSQL="SELECT id_backmenu as id,name,icon,pic,url,level FROM backmenu WHERE  id_backmenu='".$_GET["edit"]."'";
   $objDB->Execute($strSQL);
   $current_dirinfoedit=$objDB->fields();
}



if(isset($_GET[del1])){//删除动作存在 删除一级ID的目录

   $strSQL="SELECT pic,url FROM backmenu WHERE  id_backmenu='".$_GET["del1"]."'";
   $objDB->Execute($strSQL);
   $current_delpic=$objDB->fields();
   @unlink('upload/pics/'.$current_delpic["pic"]);//取出一级目录图片 先删除图片
 
    $strSQL="DELETE FROM backmenu WHERE id_backmenu='".$_GET["del1"]."'";//删除一级目录
	$objDB->Execute($strSQL);
	
	
	//删除相关二级目录图片
	 $strSQL="SELECT pic,id_backmenu as id FROM backmenu WHERE level='2' and fatherid='".$_GET["del1"]."' ";
     $objDB->Execute($strSQL);
     $current_del2pic=$objDB->GetRows();//取二级目录  先删除图片 及二级目录相关权限
	 for($i=0;$i<sizeof($current_del2pic);$i++){
		  
		  	/////删除有关二级目录所有人的权限///////////////////
  
          $strSQL="DELETE FROM pavy2 WHERE id_backmenu='".$current_del2pic[$i]["id"]."'";
	      $objDB->Execute($strSQL);
		  
		  @unlink('upload/pics/'.$current_del2pic[$i]["pic"]);
		  
		  }
	
	$strSQL="DELETE FROM backmenu WHERE fatherid='".$_GET["del1"]."'";//删除一级目录下的子目录
	$objDB->Execute($strSQL);
	
	///////////////删除一级目录权限////////////////////////////
	
	$strSQL="ALTER TABLE  pavy1 DROP $current_delpic[url]  ";
	$objDB->Execute($strSQL);
	

	
	
	
	
	header('Location:setbm.html'); exit();	
 
}




if(isset($_GET[del2])){//删除动作存在 删除一级ID的目录


   $strSQL="SELECT pic FROM backmenu WHERE  id_backmenu='".$_GET["del2"]."'";
   $objDB->Execute($strSQL);
   $current_delpic=$objDB->fields();
   @unlink('upload/pics/'.$current_delpic["pic"]);//取出二级目录图片 先删除图片
 
    $strSQL="DELETE FROM backmenu WHERE id_backmenu='".$_GET["del2"]."'";//删除二级目录
	$objDB->Execute($strSQL);


/////删除有关二级目录所有人的权限///////////////////
  
    $strSQL="DELETE FROM pavy2 WHERE id_backmenu='".$_GET["del2"]."'";
	$objDB->Execute($strSQL);

}



if(isset($_GET[updir]) && isset($_GET[level])){//向上移动目录

    if($_GET[level]=='1'){//如果是一级目录向上移动 查所有一级目录
          $strSQL="SELECT id_backmenu as id,ordernum FROM backmenu WHERE level='".$_GET[level]."' order by ordernum ASC";
	 }
	
	 if($_GET[level]=='2'){//如果是二级目录 向上移动 查属于自己的所有二级同级目录
	       $strSQL="SELECT id_backmenu as id,ordernum  FROM backmenu WHERE level='".$_GET[level]."' and fatherid=(select fatherid from backmenu where id_backmenu='".$_GET[updir]."') order by ordernum ASC";
	 }
		
	 
     $objDB->Execute($strSQL);
     $orderdir=$objDB->GetRows();
	 $intnum=sizeof($orderdir);
	 
	 for($i=0;$i<$intnum;$i++){
		 
		 if(($_GET[updir]==$orderdir[$i][id]) && $i!=0){//判断一级目录是否位置在最前，如果不到顶部就可以向上移动
			 
	             //$_GET[updir] $orderdir[$i][id] 当前ID      $orderdir[$i][ordernum]  当前顺序
				 //             $orderdir[$i-1][id] 交换ID      $orderdir[$i-1][ordernum]  交换顺序
				 
				 $strSQL="UPDATE backmenu SET ordernum=". $orderdir[$i-1][ordernum]." WHERE id_backmenu=".$orderdir[$i][id]."";
				 $objDB->Execute($strSQL);
				 $strSQL="UPDATE backmenu SET ordernum=".$orderdir[$i][ordernum]." WHERE id_backmenu=".$orderdir[$i-1][id]."";	
				 $objDB->Execute($strSQL);
				 
			 
		 }

		 
	 }
	 
	 

	   

  header('Location:setbmedit-'.$_GET[updir].'.html'); exit();		 


}//end  向上移动目录





if(isset($_GET[downdir]) && isset($_GET[level])){//向下移动目录

    if($_GET[level]=='1'){//如果是一级目录
           $strSQL="SELECT id_backmenu as id,ordernum FROM backmenu WHERE level='".$_GET[level]."' order by ordernum ASC";
	   }//end if($_GET[level]=='1'){ 
	   
	
	 if($_GET[level]=='2'){//如果是二级目录  查属于自己的所有二级同级目录
	       $strSQL="SELECT id_backmenu as id,ordernum  FROM backmenu WHERE level='".$_GET[level]."' and fatherid=(select fatherid from backmenu where id_backmenu='".$_GET[downdir]."') order by ordernum ASC";
	 }  
	   
	 
     $objDB->Execute($strSQL);
     $orderdir=$objDB->GetRows();
	 $intnum=sizeof($orderdir);
	 
	 for($i=0;$i<$intnum;$i++){
		 
		 if(($_GET[downdir]==$orderdir[$i][id]) && $i!=$intnum-1){//判断一级目录是否位置在最后，如果不在最后就可以向下移动
			 
	             //$_GET[updir] $orderdir[$i][id] 当前ID      $orderdir[$i][ordernum]  当前顺序
				 //             $orderdir[$i+1][id] 交换ID      $orderdir[$i+1][ordernum]  交换顺序
				 
				 $strSQL="UPDATE backmenu SET ordernum=". $orderdir[$i+1][ordernum]." WHERE id_backmenu=".$orderdir[$i][id]."";
				 $objDB->Execute($strSQL);
				 $strSQL="UPDATE backmenu SET ordernum=".$orderdir[$i][ordernum]." WHERE id_backmenu=".$orderdir[$i+1][id]."";	
				 $objDB->Execute($strSQL);
				 
			 
		 }

		 
	 }
	 
	 


header('Location:setbmedit-'.$_GET[downdir].'.html'); exit();		 


}//end  向上移动目录






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
    <link href="/<?=SITE_DIR?>/inc/css/colorpicker.css" rel="stylesheet" type="text/css">            

 
     
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
<!-- Header Start -->
  <header class="header-1" id="header">
      <div class="vd_top-menu-wrapper">
        <div class="container ">
          <div class="vd_top-nav vd_nav-width  ">
          <div class="vd_panel-header">
          	<div class="logo">
            	<a href="index.html"><img alt="logo" src="/<?=SITE_DIR?>/inc/pics/logo-white.png"></a>
            </div>
            <!-- logo -->
            <div class="vd_panel-menu  hidden-sm hidden-xs" data-intro="<strong>Minimize Left Navigation</strong><br/>Toggle navigation size to medium or small size. You can set both button or one button only. See full option at documentation." data-step=1>
            	

            
                    
                                       
            </div>
            <div class="vd_panel-menu left-pos visible-sm visible-xs">
                                 
                        <span class="menu" data-action="toggle-navbar-left">
                            <i class="fa fa-ellipsis-v"></i>
                        </span>  
                            
                              
            </div>
            <div class="vd_panel-menu visible-sm visible-xs">
                	<span class="menu visible-xs" data-action="submenu">
	                    <i class="fa fa-bars"></i>
                    </span>        
                          
                        <span class="menu visible-sm visible-xs" data-action="toggle-navbar-right">
                            <i class="fa fa-comments"></i>
                        </span>                   
                   	 
            </div>                                     
            <!-- vd_panel-menu -->
          </div>
          <!-- vd_panel-header -->
            
          </div>    
          <div class="vd_container">
          	<div class="row">
            	<div class="col-sm-5 col-xs-12">
            		<? require "searchbox.php"; ?> 

                </div>
                <div class="col-sm-7 col-xs-12">
              		 <? require "toprightqucikbar.php"; ?>  
                </div>

            </div>
          </div>
        </div>
        <!-- container --> 
      </div>
      <!-- vd_primary-menu-wrapper --> 

  </header>
  <!-- Header Ends --> 
  
   <div class="alert alert-danger fade in" style="display:none">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>警告!</h4>
        <p style="font-size:14px;">您当前的操作会影响到整体系统的运行.</p>
        <p>
          <input type="hidden" name="paramsHidden" id="paramsHidden"/> 
          <button type="button" class="btn btn-danger" onClick="location.href=$('#paramsHidden').val();">继续执行</button>
          <button type="button" class="btn btn-default" onClick='$(".alert").hide();'>退出</button>
        </p>
      </div>
  
  
  
<div class="content">
  <div class="container">
    <div class="vd_navbar vd_nav-width vd_navbar-tabs-menu vd_navbar-left  ">
	
	
   
   <? require "leftquickbar.php"; ?>   
     


<div class="navbar-menu clearfix">
        <div class="vd_panel-menu hidden-xs">
            
            
           <a href="main.html">  <span data-original-title="返回操作平台" data-toggle="tooltip"  data-placement="bottom" class="menuadd"  >
               <i class="fa fa-reply" style="margin-top:5px;"></i>
            </span>     
            </a>    
            
             <a href="setbm.html"> <span data-original-title="添加部门组" data-toggle="tooltip"  data-placement="bottom" class="menuadd"  >
                <i class="fa fa-plus"></i>
            </span>     
            </a>
                       
        </div>
    	<h3 class="menu-title hide-nav-medium hide-nav-small">部门组</h3>
        <div class="vd_menu">
        	 <ul>
             
     <? 
	 $strSQL="SELECT id_backmenu as id,name,icon FROM backmenu WHERE level='1' order by ordernum ASC";
     $objDB->Execute($strSQL);
     $arrMenu1list=$objDB->GetRows();//取一级目录
	 
	 for($i=0;$i<sizeof($arrMenu1list);$i++){?>        
    <li>
        <div style="padding:10px;">
        	<span class="menu-icon"><i class="fa fa-<? echo $arrMenu1list[$i][icon];?>"></i></span> 
            <span class="menu-text"><? echo $arrMenu1list[$i][name];?></span>  
            <span class="menu-badge">              
              <span class="badge vd_bg-black-30"><a href="setbmadd-<?=$arrMenu1list[$i][id];?>.html"><i class="fa fa-plus"></i></a></span>
              <span class="badge vd_bg-black-30"><a href="javascript:void(0)" onClick="setopen('setbmdel1-<?=$arrMenu1list[$i][id];?>.html');"><i class="fa fa-minus"></i></a></span>
             <span class="badge vd_bg-black-30"> <a href="setbmedit-<?=$arrMenu1list[$i][id];?>.html"><i class="fa fa-edit"></i></a></span>
            </span>
        </div>
     	<div class="child-menu"   style="display:block">
            <ul>
            
            
            <?
              $strSQL="SELECT id_backmenu as id,name,icon FROM backmenu WHERE level='2' and fatherid='".$arrMenu1list[$i][id]."' order by ordernum ASC";
              $objDB->Execute($strSQL);
              $arrMenu2list=$objDB->GetRows();//取二级目录
			  
			 for($j=0;$j<sizeof($arrMenu2list);$j++){
			?>
                <li>
                    <div  style="position:relative">
                     <span style="margin-left:50px;"><i class="fa fa-<?=$arrMenu2list[$j][icon];?>"></i></span> 
                      <span><? echo $arrMenu2list[$j][name];?></span>
                       <div style="position:absolute;right:0px;top:0px;">
                       
              <span class="badge vd_bg-black-30"> <a href="javascript:void(0)" onClick="setopen('setbmdel2-<?=$arrMenu2list[$j][id];?>.html');" style="padding:0px;"><i class="fa fa-minus"></i></a></span>
               <span class="badge vd_bg-black-30"><a href="setbmedit-<?=$arrMenu2list[$j][id];?>.html" style="padding:0px;"><i class="fa fa-edit"></i></a></span>
                       
                       </div>
                    </div>  
                        
                </li>  
             
               <? }?> 

                
                
                                                                                  
            </ul>   
      	</div>
    </li>  
    
    <? }?>   
    
  
                 
</ul>
     </div>             
    </div>
    













 
    
    
    <div class="navbar-spacing clearfix">
    </div>
    <div class="vd_menu vd_navbar-bottom-widget">
        <ul>
            <li>
                <a href="pages-logout.html">
                    <span class="menu-icon"><i class="fa fa-sign-out"></i></span>          
                    <span class="menu-text">Logout</span>             
                </a>
                
            </li>
        </ul>
    </div>     
</div>    <div class="vd_navbar vd_nav-width vd_navbar-chat vd_bg-black-80 vd_navbar-right   ">
	
	
  <?php require "rightchat.php";?>	  
    
    <div class="navbar-spacing clearfix">
    </div>
</div>    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_head-section clearfix">
            <div class="vd_panel-header">
              <ul class="breadcrumb">
                <li><a href="index.html">首页</a> </li>
                <li class="active">主面板</li>
              </ul>
              <div class="vd_panel-menu hidden-sm hidden-xs" data-intro="<strong>Expand Control</strong><br/>To expand content page horizontally, vertically, or Both. If you just need one button just simply remove the other button code." data-step=5  data-position="left">
    <div data-action="remove-navbar" data-original-title="Remove Navigation Bar Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-navbar-button menu"> <i class="fa fa-arrows-h"></i> </div>
      <div data-action="remove-header" data-original-title="Remove Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="remove-header-button menu"> <i class="fa fa-arrows-v"></i> </div>
      <div data-action="fullscreen" data-original-title="Remove Navigation Bar and Top Menu Toggle" data-toggle="tooltip" data-placement="bottom" class="fullscreen-button menu"> <i class="glyphicon glyphicon-fullscreen"></i> </div>
      
</div>
 
            </div>
          </div>
          <!-- vd_head-section -->
          
          <div class="vd_title-section clearfix">
            <div class="vd_panel-header">
              <h1>通知中心</h1>
              <small class="subtitle">所有销售员工予2014-5-25日下午三点钟到大会议室开会！</small>
              <div class="vd_panel-menu  hidden-xs">
  <div class="menu no-bg vd_red" data-original-title="Start Layout Tour Guide" data-toggle="tooltip" data-placement="bottom" onClick="javascript:introJs().setOption('showBullets', false).start();"> <span class="menu-icon font-md"><i class="fa fa-question-circle"></i></span> </div>
  <!-- menu -->
  
  <div class="menu">
    <div data-action="click-trigger"> <span class="menu-icon mgr-10"><i class="fa fa-filter"></i></span>QUICK MENU <i class="fa fa-angle-down"></i> </div>
    <div class="vd_mega-menu-content width-xs-2 left-xs" data-action="click-target">
      <div class="child-menu">
        <div class="content-list content-menu">
          <ul class="list-wrapper pd-lr-10">
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-user"></i></div> <div class="menu-text">Filter User</div> </a> </li>
            <li> <a href="#"> <div class="menu-icon"><i class=" fa fa-calendar"></i></div> <div class="menu-text">Filter Date</div> </a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- menu --> 
</div>
<!-- vd_panel-menu --> 
            </div>
            <!-- vd_panel-header --> 
          </div>
          <!-- vd_title-section -->
          
          <div class="vd_content-section clearfix">
            <div class="row">
              <div class="col-md-10 mgbt-md-20 mgbt-lg-0">
                <div class="panel vd_interactive-widget light-widget widget">
  <div class="panel-body-list">
    <div class="vd_panel-menu">
  <div data-action="refresh" class="menu entypo-icon smaller-font" data-placement="bottom" data-toggle="tooltip" data-original-title="Refresh"> <i class="icon-cycle"></i> </div>
  
  
</div>
<!-- vd_panel-menu --> 
 
    
    <div class="pd-20">
   
     
           <h5 class="mgbt-xs-20 mgtp-20"><span class="menu-icon append-icon"><i class="icon-vk"></i></span>
            <strong><?
			            if(isset($_GET[add])){
							echo $current_dirinfo[name];
						}elseif(isset($_GET[edit])){
							echo $current_dirinfoedit[name];
			            }else{?>部门组设置<? }?>
            </strong> 
			<? if(isset($_GET[add])){?>(添加子目录)<? }elseif(isset($_GET[edit])){?>(编辑目录)<? }else{?>(添加主目录)<? }?>
            
            </h5>
      <div id="revenue-line-chart" style=" position:relative ">
      
 <form  id="formforbmset"  action="<? if(isset($_GET[add])){?>setbm-dir2.html<? }elseif(isset($_GET[edit])){?>setbm-edit.html<? }else{?>setbm-dir1.html<? }?>" method="post" role="form"  enctype="multipart/form-data">
  <div class="form-group">
    <label for="bmforname">模块组名称</label>
    <input type="text"  id="bmname" name="bmname"   placeholder="名称"  <? if(isset($_GET[edit])){?>value="<?=$current_dirinfoedit[name];?>"<? }?> required>
  </div>
  
  <div class="form-group">
    <label for="bmforicon">URL</label>
    <input type="text" id="bmurl" name="bmurl" placeholder="URL" <? if(isset($_GET[edit])){?>value="<?=$current_dirinfoedit[url];?>" readonly<? }?> required >
  </div>
  
  <div class="form-group">
    <label for="bmforicon">图标</label>
    <input type="text" id="bmicon" name="bmicon" placeholder="图标" <? if(isset($_GET[edit])){?>value="<?=$current_dirinfoedit[icon];?>"<? }?> required>
  </div>
  <div class="form-group">
    <label for="bmforpic">选择图片文件</label>
    <input type="file"  id="bmpic" name="bmpic">
    <p class="help-block">只允许JPG上传.</p>
  </div>

<? if(isset($_GET[add])){?>
 <input type="text" id="fatherid" name="fatherid" value="<?=$current_dirinfo[id];?>" style="display:none" hidden>
<? }?>

<? if(isset($_GET[edit])){?>
 <input type="text" id="currentid" name="currentid" value="<?=$current_dirinfoedit[id];?>" style="display:none" hidden>
 <input type="text" id="currentpic" name="currentpic" value="<?=$current_dirinfoedit[pic];?>" style="display:none" hidden>
 
  
    <div style="position:absolute;right:0px;bottom:0px;">
      <a href="setbmup-<?=$current_dirinfoedit[id];?>-<?=$current_dirinfoedit[level];?>.html"><button type="button" class="btn btn-warning">上移</button></a>
      <a href="setbmdown-<?=$current_dirinfoedit[id];?>-<?=$current_dirinfoedit[level];?>.html"><button type="button" class="btn btn-danger">下移</button></a>
    </div>

  

  
  
 
<? }?>

  <button type="submit" class="btn btn-primary">提交</button>
</form>





      
      </div>
     
    
    </div>
    
  </div>
</div>
<!-- Panel Widget -->               </div>
              <!--col-md-7 -->
              
              <!-- .col-md-5 --> 
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

<!-- Footer Start -->
  <footer class="footer-1"  id="footer">      
    <div class="vd_bottom ">
        <div class="container">
            <div class="row">
              <div class=" col-xs-12">
                <div class="copyright">
                  	易用云协作办公平台/上海腾岩信息科技有限公司
                </div>
              </div>
            </div><!-- row -->
        </div><!-- container -->
    </div>
  </footer>
<!-- Footer END -->
 
 <?php require "chat.php";?>	 
 
 
 



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
 

<script type="text/javascript">


function setopen(url){
		
	 $("#paramsHidden").val(url);//存储动作
	 $(".alert").toggle();
		
		
	}
	



$(document).ready(function() {

        $('#formforbmset').validate({
            rules: {
				
                bmname: {required: true},
				bmurl: {required: true,chrnum:true},
				bmicon: {required: true}
				
            },
			messages: {    
                bmname: "请输入名称",
                bmurl: "请输入正确URL",
			    bmicon: "请输入图标"
       
             } 
			
			
        });	
		
	
	<? if(!isset($_GET[add]) && !isset($_GET[edit])  ){?>
		
      jQuery.validator.addMethod("chrnum", function(value, element) {
         var chrnum = /^([a-zA-Z0-9]+)$/;
          return this.optional(element) || (chrnum.test(value));
      }, "只能输入数字和字母(字符A-Z, a-z, 0-9)");
		
	<? }?>
	
	
});
</script>
<!-- Specific Page Scripts END -->



</body>
</html>