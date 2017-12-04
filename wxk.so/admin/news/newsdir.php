<?php
require "../inc/core/news/newsdir_core.php";
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


<head>
    <meta charset="utf-8" />
    <title><? echo SITE_TITLE;?></title>
    <meta name="keywords" content="<? echo SITE_KEY;?>" />
    <meta name="description" content="<? echo SITE_DESC;?>">
    <meta name="author" content="TYSH">
    
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    
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
    
    <script src="/<?=SITE_DIR?>/inc/js/ckeditor/ckeditor/ckeditor.js"></script>
    <script src="/<?=SITE_DIR?>/inc/js/ckeditor/ckfinder/ckfinder.js"></script>
    
    
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




 <? if(!isset($_GET[fatherid]) && !isset($_GET[fun]) && !isset($_GET[editlist])){?>

     <? for($i=0;$i<$arrnewsdir1Num;$i++){?>
         <div class="row">
         
                <div id="progress<?=$i;?>" class="progress progress-striped">
                  <div class="progress-bar progress-bar-info"></div>
                </div>
                
                  
                	<div class="col-sm-12">	
                        <div class="panel widget panel-bd-left light-widget">

                            <div class="panel-body">
                            
                              <div class="dirrighticon">
                              <? if($ispermit[AD]){?>  
                              <a href="newsdiraddsubdir-<?=$arrnewsdir1[$i][id_newsdir];?>.html" data-original-title="添加子分类" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-red"><i class="fa fa-plus"></i></a> 
                              
                                                                
                                 <input id="file_upload<?=$i;?>" name="file_upload<?=$i;?>" type="file" multiple>
                                 
                                 
                                <? }?>  
                                 
                            <? if($ispermit[ED]){?> 
                                 <a href="newsdireditlist-<?=$arrnewsdir1[$i][id_newsdir];?>.html" data-original-title="编辑分类" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-yellow"><i class="fa fa-pencil"></i></a> 
                                 
                                 <a href="javascript:void(0)" onClick="setdirarrow('<?=$arrnewsdir1[$i][id_newsdir];?>','up')" data-original-title="向上移动" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-blue"><i class="fa fa-arrow-up"></i></a> 
                                 
                                 <a href="javascript:void(0)" onClick="setdirarrow('<?=$arrnewsdir1[$i][id_newsdir];?>','down')" data-original-title="向下移动" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-blue"><i class="fa fa-arrow-down"></i></a> 
                                 <? }?>
                                 
                                                        
                            <? if($ispermit[DE]=='1'){?>
                           <a href="javascript:void(0)" onClick="delcatalog('<?=$arrnewsdir1[$i][id_newsdir];?>','newsdir.html');" data-original-title="删除" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-red"> <i class="fa fa-times"></i> </a> 
						     <? }?>      
                                
                               </div>
                               
	        					<h2 class="mgtp-20"><?=$arrnewsdir1[$i][name];?> 
                                   
								  
                                   <?php
					                 for($k=0;$k<$LangListNum;$k++){
						                  if($arrnewsdir1[$i][id_lang]==$LangList[$k][id_lang]){
											  echo '<span class="badge vd_bg-'.$LangList[$k][color].'" >'.$LangList[$k][lang].'</span>';  
										  }
					                  }
						             ?>
                                   
                                   
                                   
                                             
                                </h2>  
        						<p><?=$arrnewsdir1[$i][title];?></p>
                                
                                    <div class="row the-icons">
                                    
                                    <?  
									  //下级分类
									 $strSQL="SELECT * FROM newsdir WHERE  fatherid='".$arrnewsdir1[$i][id_newsdir]."' order by ordernum desc";
									 $objDB->Execute($strSQL);
									 $subdirlist=$objDB->GetRows();
									 $subdirlistNum=sizeof($subdirlist);
									  
									  for($j=0;$j<$subdirlistNum;$j++){
										  
										  //求本级的下级的数量
										  $strSQL = "SELECT COUNT(*) as num FROM newsdir WHERE fatherid='".$subdirlist[$j][id_newsdir]."' ";
										  $objDB->Execute($strSQL);
									      $CurrentsubNum=$objDB->fields();  
										  
									?>
                                    
                                    <div class="col-md-2 col-sm-4">
                                     <a href="newsdiraddsubdir-<?=$subdirlist[$j][id_newsdir]?>.html">
                                      <span class="label vd_bg-yellow"><?=$subdirlist[$j][name]?></span>
                                     </a>
                                       <? if($CurrentsubNum[num]!='0'){?>
                                       <span class="badge vd_bg-black"><?=$CurrentsubNum[num];?></span>
                                       <? }?>
                                       
                                    </div>
                                    
                                    <? }?>
                             

                                                                            
                                    </div>
                                    
                                    
                               <div id="dirimgsbox<?=$i;?>" class="dirimgsbox">
                                   <?
							 $strSQL="SELECT * FROM newsdir_pic WHERE  id_newsdir='".$arrnewsdir1[$i][id_newsdir]."' order by ordernum desc";
									 $objDB->Execute($strSQL);
									 $arrpiclist=$objDB->GetRows();
									 $arrpiclistNum=sizeof($arrpiclist);
								     for($k=0;$k<$arrpiclistNum;$k++){
								   ?>
                                      <a href="/upload/news/<?=$arrpiclist[$k][pic]?>" data-rel="prettyPhoto[<?=$arrnewsdir1[$i][id_newsdir];?>]" data-img_id="<?=$arrpiclist[$k][id_newsdirpic]?>" title="<?=$arrpiclist[$k][title]?>"> 
                                      <img src="/upload/news/<?=$arrpiclist[$k][pic]?>" width="35" height="35">
                                      </a>
                                      
                                   <? }?>
                               </div>     
                                    
                            </div>     
                        </div>
                     </div>
                </div>
            <? }?>     
                   
             
         <a class="btn vd_btn vd_btn-bevel vd_bg-green font-semibold" href="newsdir-add.html">添加新分类</a>
       
           <? }?>   
       
       
        <? if($_GET[fun]=='add' && $ispermit[AD]){?>
        
        
        <div class="row">
                 <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title" style="text-align:right"> <a href="javascript:void(0)" onClick="history.go(-1);" class="btn btn-primary btn-xs">返回列表页</a> </div>
              <form id="newsdir-in1" class="form-horizontal" action="newsdir-in1.html"  method="post" role="form" enctype="multipart/form-data">
                  <input type="hidden" style="display:none" id="backurl" name="backurl" value="<?=$_SERVER['HTTP_REFERER'];?>">
                    <div class="panel-body">
                      <h2 class="mgbt-xs-20"> 添加分类 </h2>
                      <br>
                      <div class="row">
                        
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">一级分类</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类标题</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" class="width-90" id="catalogdirname" name="catalogdirname" placeholder="分类名称"  >
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类副标题</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  id="catalogdirtitle" name="catalogdirtitle" placeholder="分类副标题"  >
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类简介</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-10">
                                 <textarea rows="8"  id="catalogdirintro" name="catalogdirintro" placeholder="分类简介" ></textarea>
								 <script>CKEDITOR.replace( 'catalogdirintro', {uiColor: '#EAEAEA'});	</script>
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类图标</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  class="width-60" id="catalogdiricon" name="catalogdiricon" placeholder="分类图标"  >
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                        <div class="form-group">
                            <label class="col-sm-3 control-label">语言类别</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                 
                                  <select  class="width-40"   id="catalogdirlang" name="catalogdirlang" placeholder="语言类别" >
                                     <? for($i=0;$i<$LangListNum;$i++){?>
                                      <option value="<?=$LangList[$i][id_lang]?>"><?=$LangList[$i][lang]?></option>
                                      <? }?>
                                  </select>
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
 
    
                          
                        </div>
                        
                        
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15">
                              <? if($Memberinfo[photo]!=''){?>
                                 <img alt="example image" src="../../upload/pics/<?php echo $Memberinfo[photo];?>">
                               <? }else{?>
                                  <img alt="example image" src="../inc/pics/catalogdefault.jpg">
                               <? }?>
                                </div>
                              <div class="form-img-action text-center mgbt-xs-20"> 
                              <input type="file"  id="UploadPic" name="UploadPic">
                              <input type="hidden" name="oldphoto" value="<?php echo $Memberinfo[photo];?>">
                              </div>
                              <br>
                              <div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                        
                        <!-- col-sm-12 --> 
                      </div>
                      <!-- row --> 
                      
                    </div>
                    <!-- panel-body -->
                    <div class="pd-20">
                      <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> 添加分类</button>
                     
                      
                    </div>
                  </form>
                </div>
                <!-- Panel Widget --> 
              </div> </div>
        
        
        
        
        
         <? }?>  
       
       
    <? if(isset($_GET[editlist]) && $ispermit[ED]){?>
        
        
        <div class="row">
                 <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title" style="text-align:right"> 
                  
                  <? if($CatalogInfo[level]=='1' || $CatalogInfo[level]=='2'){?>
                   <a href="newsdir.html"  class="btn btn-primary btn-xs">返回上级目录</a> 
                  <? }else{?>
                   <a href="newsdiraddsubdir-<?=$CatalogInfo[fatherid];?>.html"  class="btn btn-primary btn-xs">返回上级目录</a> 
                  <? }?>    
                  
                  </div>
              <form id="newsdir-in1" class="form-horizontal" action="newsdir-edit.html"  method="post" role="form" enctype="multipart/form-data">
                  <input type="hidden" style="display:none" id="backurl" name="backurl" value="<?=$_SERVER['HTTP_REFERER'];?>">
                  <input type="hidden" style="display:none" id="catalogid" name="catalogid" value="<?=$_GET[editlist];?>">
                    <div class="panel-body">
                    
                    
                      <h2 class="mgbt-xs-20"> <?=$CatalogInfo[name];?> </h2>
                      <br>
                      <div class="row">
                        
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">编辑分类信息</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类标题</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" class="width-90" id="catalogdirname" name="catalogdirname" placeholder="分类名称"  value="<?=$CatalogInfo[name];?>" >
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类副标题</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  id="catalogdirtitle" name="catalogdirtitle" placeholder="分类副标题"   value="<?=$CatalogInfo[title];?>" >
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类简介</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-10">
                                 <textarea rows="8"  id="catalogdirintro" name="catalogdirintro" placeholder="分类简介" ><?=$CatalogInfo[intro];?></textarea>
								 <script>CKEDITOR.replace( 'catalogdirintro', {uiColor: '#EAEAEA'});	</script>
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类图标</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  class="width-60" id="catalogdiricon" name="catalogdiricon" placeholder="分类图标" value="<?=$CatalogInfo[icon];?>" >
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                        <div class="form-group">
                            <label class="col-sm-3 control-label">语言类别</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                 
                                  <select  class="width-40"   id="catalogdirlang" name="catalogdirlang" placeholder="语言类别" >
                                    
                                      <? for($i=0;$i<$LangListNum;$i++){
										    if($CatalogInfo[id_lang]==$LangList[$i][id_lang]){?>
                                      <option value="<?=$LangList[$i][id_lang]?>" selected><?=$LangList[$i][lang]?></option>
                                      <? }}?>
                                      
                                      
                                  </select>
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
 
    
                          
                        </div>
                        
                        
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15">
                             
                                  <img alt="example image" src="../inc/pics/catalogdefault.jpg">
                             
                                </div>
                              <div class="form-img-action text-center mgbt-xs-20"> 
                             
                              <input type="hidden" name="oldphoto" value="">
                              </div>
                              <br>
                              <div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                        
                        <!-- col-sm-12 --> 
                      </div>
                      <!-- row --> 
                      
                    </div>
                    <!-- panel-body -->
                    <div class="pd-20">
                      <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> 编辑分类</button>
                     
                      
                    </div>
                  </form>
                </div>
                <!-- Panel Widget --> 
              </div> </div>
        
        
        
        
        
         <? }?>  
   
   
   
   
   
   
   
       
       
       
         <? if(isset($_GET[fatherid]) && $ispermit[AD] ){?>
        
        
        <div class="row">
        
              <div id="progress<?=$_GET[fatherid];?>" class="progress progress-striped">
                  <div class="progress-bar progress-bar-info"></div>
                </div>
        
        <div class="col-sm-12">	
                        <div class="panel widget panel-bd-left light-widget" style="border-left: 3px solid #F85D2C;">

                            <div class="panel-body">
                               
                               <div class="dirrighticon">
                              
                                                               
                               </div>
                                                       
	        					<h2 class="mgtp-20">同级分类：</h2>  
                                
                                    <div class="row the-icons">
                                    
                                    
                                   <?  
									  //同级分类
									 $strSQL="SELECT * FROM newsdir WHERE  fatherid=(select fatherid from newsdir where id_newsdir='".$Curr_fdirinfo[id_newsdir]."') order by ordernum desc";
									 $objDB->Execute($strSQL);
									 $tjdirlist=$objDB->GetRows();
									 $tjdirlistNum=sizeof($tjdirlist);
									  
									  for($j=0;$j<$tjdirlistNum;$j++){
										   //求本级的下级的数量
										  $strSQL = "SELECT COUNT(*) as num FROM newsdir WHERE fatherid='".$tjdirlist[$j][id_newsdir]."' ";
										  $objDB->Execute($strSQL);
									      $CurrentsubNum=$objDB->fields();  
									?>
                                    
                                    <div class="col-md-2 col-sm-4">
                                     <a href="newsdiraddsubdir-<?=$tjdirlist[$j][id_newsdir]?>.html">
                       <span class="label vd_bg-<? if($Curr_fdirinfo[id_newsdir]==$tjdirlist[$j][id_newsdir]){echo 'red';}else{echo 'grey';};?>">
									  <?=$tjdirlist[$j][name]?></span>
                                     </a> 
                                      <? if($CurrentsubNum[num]!='0'){?>
                                       <span class="badge vd_bg-black"><?=$CurrentsubNum[num];?></span>
                                       <? }?>
                                    </div>
                                    
                                    <? }?>
               
                                   
                             

                                                                            
                                    </div>
                                    
            
                                    
                            </div>     
                        </div>
                     </div>
        
        
        
        
        
        <div class="col-sm-12">	
                        <div class="panel widget panel-bd-left light-widget">

                            <div class="panel-body">
                               
                               <div class="dirrighticon">
                              
                                 <? if($ispermit[AD]){?>                            
                                 <input id="file_upload<?=$_GET[fatherid];?>" name="file_upload<?=$_GET[fatherid];?>" type="file" multiple>
                                 <? }?>
                                
                                 <? if($ispermit[ED]){?>  
                                 <a href="newsdireditlist-<?=$Curr_fdirinfo[id_newsdir];?>.html" data-original-title="编辑分类" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-yellow"><i class="fa fa-pencil"></i></a> 
                                 
                                 <a href="javascript:void(0)" onClick="setdirarrow('<?=$Curr_fdirinfo[id_newsdir];?>','up')" data-original-title="向上移动" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-blue"><i class="fa fa-arrow-up"></i></a> 
                                 
                                 <a href="javascript:void(0)" onClick="setdirarrow('<?=$Curr_fdirinfo[id_newsdir];?>','down')" data-original-title="向下移动" data-toggle="tooltip" data-placement="top" class="btn menu-icon vd_bg-blue"><i class="fa fa-arrow-down"></i></a> 
                                <? }?>
                                
                              <? if($ispermit[DE]=='1'){?>
                           <a href="javascript:void(0)" onClick="delcatalog('<?=$Curr_fdirinfo[id_newsdir];?>','<? if($Curr_fdirinfo[level]=='1' || $Curr_fdirinfo[level]=='2'){echo 'newsdir.html';}else{echo 'newsdiraddsubdir-'.$Curr_fdirinfo[fatherid].'.html';}?>');" data-original-title="删除" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-red"> <i class="fa fa-times"></i> </a> 
						     <? }?>   
                                
                                
                               </div>
                                                       
	        					<h2 class="mgtp-20"><?=$Curr_fdirinfo[name];?> <span class="badge vd_bg-red">中文</span></h2>  
        						<p><?=$Curr_fdirinfo[title];?></p>
                                
                                    <div class="row the-icons">
                                    
                                    <?  
									  //下级分类
									 $strSQL="SELECT * FROM newsdir WHERE  fatherid='$_GET[fatherid]' order by ordernum desc";
									 $objDB->Execute($strSQL);
									 $subdirlist=$objDB->GetRows();
									 $subdirlistNum=sizeof($subdirlist);
									  
									  for($j=0;$j<$subdirlistNum;$j++){
										   //求本级的下级的数量
										  $strSQL = "SELECT COUNT(*) as num FROM newsdir WHERE fatherid='".$subdirlist[$j][id_newsdir]."' ";
										  $objDB->Execute($strSQL);
									      $CurrentsubNum=$objDB->fields();  
									?>
                                    
                                    <div class="col-md-2 col-sm-4">
                                     <a href="newsdiraddsubdir-<?=$subdirlist[$j][id_newsdir]?>.html">
                                      <span class="label vd_bg-yellow"><?=$subdirlist[$j][name]?></span>
                                     </a> 
                                      <? if($CurrentsubNum[num]!='0'){?>
                                       <span class="badge vd_bg-black"><?=$CurrentsubNum[num];?></span>
                                       <? }?>
                                    </div>
                                    
                                    <? }?>
                                                                            
                                    </div>
                                    
                                    
                                    <div id="dirimgsbox<?=$_GET[fatherid];?>" class="dirimgsbox">
                                   <?
							 $strSQL="SELECT * FROM newsdir_pic WHERE  id_newsdir='".$Curr_fdirinfo[id_newsdir]."' order by ordernum desc";
									 $objDB->Execute($strSQL);
									 $arrpiclist=$objDB->GetRows();
									 $arrpiclistNum=sizeof($arrpiclist);
								     for($k=0;$k<$arrpiclistNum;$k++){
								   ?>
                                      <a href="/upload/news/<?=$arrpiclist[$k][pic]?>" data-rel="prettyPhoto[<?=$Curr_fdirinfo[id_newsdir];?>]" data-img_id="<?=$arrpiclist[$k][id_newsdirpic]?>" title="<?=$arrpiclist[$k][title]?>"> 
                                      <img src="/upload/news/<?=$arrpiclist[$k][pic]?>" width="35" height="35">
                                      </a>
                                      
                                   <? }?>
                               </div>
                                    
                                    
            
                                    
                            </div>     
                        </div>
                     </div>
        
        
        
                 <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title" style="text-align:right">
                  <? if($Curr_fdirinfo[level]=='1' || $Curr_fdirinfo[level]=='2'){?>
                   <a href="newsdir.html"  class="btn btn-primary btn-xs">返回上级目录</a> 
                  <? }else{?>
                   <a href="newsdiraddsubdir-<?=$Curr_fdirinfo[fatherid];?>.html"  class="btn btn-primary btn-xs">返回上级目录</a> 
                  <? }?>                   
                   </div>
              <form id="newsdir-in1" class="form-horizontal" action="newsdir-insub.html"  method="post" role="form" enctype="multipart/form-data">
                  <input type="hidden" style="display:none" id="backurl" name="backurl" value="<?=$_SERVER['HTTP_REFERER'];?>">
                  <input type="hidden" style="display:none" id="fatherid" name="fatherid" value="<?=$_GET[fatherid];?>">
                  <input type="hidden" style="display:none" id="fatherlevel" name="fatherlevel" value="<?=$Curr_fdirinfo[level];?>">
                    <div class="panel-body">
                      <h2 class="mgbt-xs-20"> 添加子分类 </h2>
                      <br>
                      <div class="row">
                        
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">为<span class="mgtp-5 vd_green font-md"><?=$Curr_fdirinfo[name];?></span>添加下级分类</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类标题</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" class="width-90" id="catalogdirname" name="catalogdirname" placeholder="分类名称"  >
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类副标题</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  id="catalogdirtitle" name="catalogdirtitle" placeholder="分类副标题"  >
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类简介</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-10">
                                 <textarea rows="8"  id="catalogdirintro" name="catalogdirintro" placeholder="分类简介" ></textarea>
								 <script>CKEDITOR.replace( 'catalogdirintro', {uiColor: '#EAEAEA'});	</script>
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分类图标</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text"  class="width-60" id="catalogdiricon" name="catalogdiricon" placeholder="分类图标"  >
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                        <div class="form-group">
                            <label class="col-sm-3 control-label">语言类别</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                 
                                  <select  class="width-40"   id="catalogdirlang" name="catalogdirlang" placeholder="语言类别" >
                                     <? for($i=0;$i<$LangListNum;$i++){
										    if($Curr_fdirinfo[id_lang]==$LangList[$i][id_lang]){?>
                                      <option value="<?=$LangList[$i][id_lang]?>" selected><?=$LangList[$i][lang]?></option>
                                      <? }}?>
                                  </select>
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
 
    
                          
                        </div>
                        
                        
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15">
                              <? if($Memberinfo[photo]!=''){?>
                                 <img alt="example image" src="../../upload/pics/<?php echo $Memberinfo[photo];?>">
                               <? }else{?>
                                  <img alt="example image" src="../inc/pics/catalogdefault.jpg">
                               <? }?>
                                </div>
                              <div class="form-img-action text-center mgbt-xs-20"> 
                              <input type="file"  id="UploadPic" name="UploadPic">
                              <input type="hidden" name="oldphoto" value="<?php echo $Memberinfo[photo];?>">
                              </div>
                              <br>
                              <div>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                        
                        
                        
                        
                        <!-- col-sm-12 --> 
                      </div>
                      <!-- row --> 
                      
                    </div>
                    <!-- panel-body -->
                    <div class="pd-20">
                      <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> 添加分类</button>
                     
                      
                    </div>
                  </form>
                </div>
                <!-- Panel Widget --> 
              </div> </div>
        
        
        
        
        
         <? }?>  
       
       
       
    
       
       
       
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

<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/jquery.uploadifive.min.js"></script>



   
<script type="text/javascript">
$(document).ready(function() {


		//添加分类1 表单验证	   
		$('#newsdir-in1').validate({
            rules: {
                catalogdirname: {required: true}
            },
			messages: {    
                catalogdirname: "请输入标题"
             } 
			
			
        });	


	
	
				
});


<? if($ispermit[ED]=='1'){?>


function setdirarrow(dirid,arrow){//目录排序
$.post('../ajax_php/news/ajax_catalogorder.php',{dirid:dirid,arrow:arrow},function() {
  window.location.reload(); 
});
}




$(function() {
//上传组件
<? if(!isset($_GET[fatherid]) && !isset($_GET[fun]) && !isset($_GET[editlist]) && $ispermit[AD]){//列表页
for($i=0;$i<$arrnewsdir1Num;$i++){?>
UploadFiles('#file_upload<?=$i;?>',//绑定按钮ID
            '#dirimgsbox<?=$i;?>',//上传成功回填 ID
			'left',//回填方向
            '<?=$arrnewsdir1[$i][id_newsdir];?>',//跟踪表ID
			'progress<?=$i;?>',//进度条ID
			'/<?=SITE_DIR?>/ajax_php/news/ajax_upload_newsdir.php',//处理脚本
			'/upload/news/',//图片上传路径
            'btn vd_bg-green uploadicon',//按钮CLASS外观
			'<i class="glyphicon glyphicon-upload "></i>',//按钮文字
			'26','24','6MB','jpg,png','true',//宽 高 限制上传大小 类型 自动上传
			'<?=time();?>','<?=md5('command_eable_say'.time());?>');//与处理脚本对照的令牌环
<? } }?>



<? if(isset($_GET[fatherid]) && $ispermit[AD] ){//子分类 内页?>
UploadFiles('#file_upload<?=$_GET[fatherid];?>',//绑定按钮ID
            '#dirimgsbox<?=$_GET[fatherid];?>',//上传成功回填 ID
			'left',//回填方向
            '<?=$Curr_fdirinfo[id_newsdir];?>',//跟踪表ID
			'progress<?=$_GET[fatherid];?>',//进度条ID
			'/<?=SITE_DIR?>/ajax_php/news/ajax_upload_newsdir.php',//处理脚本
			'/upload/news/',//图片上传路径
            'btn vd_bg-green uploadicon',//按钮CLASS外观
			'<i class="glyphicon glyphicon-upload "></i>',//按钮文字
			'26','24','6MB','jpg,png','true',//宽 高 限制上传大小 类型 自动上传
			'<?=time();?>','<?=md5('command_eable_say'.time());?>');//与处理脚本对照的令牌环

<? }?>
});


//编辑图片信息
function Edit_pic(picid){

//取出图片 原始信息
$.post('../ajax_php/news/ajax_getnewsdirpicinfo.php',{picid:picid},function(data) {
     var myjson = '';eval('myjson=' + data + ';');
  
  (new PNotify({
    title: '编辑图片',
    text: '<p>添加图片标题、简介信息！</p><p><input type="text" id="pictitle" value="'+myjson.title+'" /></p><p><textarea rows="8" id="picintro">'+myjson.intro+'</textarea></p>',
    icon: 'glyphicon glyphicon-question-sign',
    hide: false,
	width: '700px',
    min_height: '500px',
	addclass: "stack-bottomright",
    stack: stack_bottomright,
    confirm: {
        confirm: true
    },
    buttons: {
        closer: false,
        sticker: false
    },
    history: {
        history: false
    }
})).get().on('pnotify.confirm', function() {
    

	 $.post('../ajax_php/news/ajax_editnewsdirpicinfo.php',{picid:picid,pictitle:$('#pictitle').val(),picintro:CKEDITOR.instances.picintro.getData()},function() {
         window.location.reload(); 
      });
	
	
}).on('pnotify.cancel', function() {});

CKEDITOR.replace( 'picintro' );//CKEDITOR 初始化
	 
	    
});	//end 取出

	
	
}//END EDIT_PIC



function ORDER_pic(picid,arrow){

$.post('../ajax_php/news/ajax_ordernewsdirpic.php',{picid:picid,arrow:arrow},function() {
  window.location.reload(); 
});

}






<? }//end ED?>

<? if($ispermit[DE]=='1'){?>

//删除图片
function Del_pic(picid){
	
 $.post('../ajax_php/news/ajax_delnewsdirpic.php',{picid:picid},function() {
         window.location.reload(); 
      });
	
}



//删除分类
	
function delcatalog(dirid,callbackurl){
	
   $.post('../ajax_php/news/ajax_delcatalog.php',{dirid:dirid},function(data) {
	      var myjson = '';eval('myjson=' + data + ';');
		  if(myjson.errorcode!='0'){
			  
			 pulltz('分类无法删除！','当前分类可能存在关联的信息及下级分类！','fa fa-envelope-o','error');
			 
		  }else{
			  window.location.href=callbackurl;  
      
		  }
	  });
	
}	




<? }?>







</script>

</body>
</html>