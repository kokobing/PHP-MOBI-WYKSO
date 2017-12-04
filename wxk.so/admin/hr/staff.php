<?php
require "../inc/core/hr/staff_core.php";
/*  目前每个页面会产生7个 个人权限  用于判断用户当前权限
		 $ispermit[DP]='1'; //DISPLAY 
		 $ispermit[AD]='1'; //ADD 
		 $ispermit[ED]='1'; //EDIT
		 $ispermit[DE]='1'; //DEL
		 $ispermit[GL]='1'; //GROUP LIST
		 $ispermit[GE]='1'; //GROUP EDIT
		 $ispermit[GD]='1'; //GROUP DEL
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
 
 
 	<!-- Specific CSS -->
	<link href="/<?=SITE_DIR?>/inc/css/jquery.dataTables.css" rel="stylesheet" type="text/css">
    <link href="/<?=SITE_DIR?>/inc/css/dataTables.bootstrap.css" rel="stylesheet" type="text/css">   
     
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
            
           <? if($_GET[fun]=='add' && $ispermit[AD]){?>
                  <div class="row">
                 <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title" style="text-align:right"> <a href="staff.html" class="btn btn-primary btn-xs">返回列表页</a> </div>
                  <form id="addstaff" class="form-horizontal" action="staff-in.html"  method="post" role="form" enctype="multipart/form-data">
                  <input type="password" style="display:none" id="dispasswordautointable">
                    <div class="panel-body">
                      <h2 class="mgbt-xs-20"> 新增员工 </h2>
                      <br>
                      <div class="row">
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15"> <img alt="example image" src="../inc/pics/big.jpg"> </div>
                              <div class="form-img-action text-center mgbt-xs-20"> <input type="file"  id="staffpic" name="staffpic"></div>
                              <br>
                              <div>
                                <table class="table table-striped table-hover">
                                  <tbody>
                                    <tr>
                                      <td style="width:60%;">开通状态</td>
                                      <td><span class="label label-success">激活</span></td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">帐户设置</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">公司邮箱</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="email" id="companyemail" name="companyemail" placeholder="email@yourcompany.com">
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">用户名</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="username" name="username" placeholder="username">
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">密码</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="password" id="password" name="password" class="width-40" placeholder="password">
                                  
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">确认密码</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="password" id="password_again" name="password_again" class="width-40" placeholder="password">
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <hr>
                          <h3 class="mgbt-xs-15">个人信息</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">姓名</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="name" name="name"  placeholder="真实姓名">
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分机号</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="ext" name="ext"  placeholder="分机号">
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                                                   
                          <div class="form-group">
                            <label class="col-sm-3 control-label">性别</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <span class="vd_radio radio-info">
                                    <input type="radio" checked="" value="1" id="optionsRadios3" name="sex">
                                    <label for="optionsRadios3"> 男性 </label>
                                  </span>
                                  <span class="vd_radio  radio-danger"> 
                                    
                                    <input type="radio" value="0" id="optionsRadios4" name="sex">
                                    <label for="optionsRadios4"> 女性 </label>
                                  </span> 
                                    
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">生日</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="datepicker-normal" name="birthday" class="width-40"  placeholder="1981-01-01">
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">婚姻状况</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40" name="ismarry">
                                    <option value="0">单身</option>
                                    <option value="1">已婚</option>
                                  </select>
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">部门</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40" name="bm" id="bm">
                                  <? for($i=0;$i<$BmlistNum;$i++){?>
                                    <option value="<?=$Bmlist[$i][id_bm];?>"><?=$Bmlist[$i][bmname];?></option>
                                  <? }?> 
                                  </select>
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">职位</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40" name="zw" id="zw">
                                  <? for($i=0;$i<$ZwlistNum;$i++){?>
                                    <option value="<?=$Zwlist[$i][id_zw];?>" <? if($Zwlist[$i][zwname]=='员工'){echo 'selected';}?>><?=$Zwlist[$i][zwname];?></option>
                                  <? }?> 
                                  </select>
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">简介</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <textarea rows="3" name="intro"></textarea>
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <hr>
                          <h3 class="mgbt-xs-15">联系方式</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">移动电话</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="mobiphone" placeholder="Mobile phone">
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">家庭固话</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="hometel" placeholder="Home tel">
                                </div>
                                <!-- col-xs-9 -->
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">家庭住址</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="address" placeholder="Home address">
                                </div>
                                                          
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          <!-- form-group --> 
                          
                        </div>
                        <!-- col-sm-12 --> 
                      </div>
                      <!-- row --> 
                      
                    </div>
                    <!-- panel-body -->
                    <div class="pd-20">
                    <? if(defined('USER_COUNT') && $hr_count<=USER_COUNT){?>
                      <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> 提交员工信息</button>
                      <? }else{?>
                      
                       当前已经用户已经超出许可数量，请删除不用的帐户，或者增加帐户数量授权。
                      
                      <? }?>
                      
                    </div>
                  </form>
                </div>
                <!-- Panel Widget --> 
              </div> </div>


           <? }?>
           
      
      <!-- ------------------EDIT ON STAFF------------------------------------------------------ --> 
           
         <? if(isset($_GET[editlist]) && $ispermit[ED]){?>
         
           <div class="row">
                 <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title" style="text-align:right"> <a href="staff.html" class="btn btn-primary btn-xs">返回列表页</a> </div>
                  <form id="editstaff" class="form-horizontal" action="staff-edit.html"  method="post" role="form" enctype="multipart/form-data">
                  <input type="password" style="display:none" id="dispasswordautointable">
                    <div class="panel-body">
                      <h2 class="mgbt-xs-20"> 编辑员工 </h2>
                      <br>
                      <div class="row">
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15">
                              <? if($oneUserinfo[photo]!=''){?>
                                 <img alt="example image" src="../upload/pics/<?php echo $oneUserinfo[photo];?>">
                               <? }else{?>
                                  <img alt="example image" src="../inc/pics/big.jpg">
                               <? }?>
                                </div>
                              <div class="form-img-action text-center mgbt-xs-20"> 
                              <input type="file"  id="staffpic" name="staffpic">
                              <input type="hidden" name="oldphoto" value="<?php echo $oneUserinfo[photo];?>">
                              </div>
                              <br>
                              <div>
                                <table class="table table-striped table-hover">
                                  <tbody>
                                    <tr>
                                      <td style="width:60%;">开通状态</td>
                                      <td>
                                      <?php if($oneUserinfo[stat]=='1'){?>
                                        <span class="label label-success">激活</span>
                                      <? }else{?>
                                        <span class="label label-danger">暂停</span>
                                      <? }?>
                                      </td>
                                    </tr>
                                    
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-9">
                          <h3 class="mgbt-xs-15">帐户设置</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">公司邮箱</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="email" id="companyemail" name="companyemail" placeholder="email@yourcompany.com" value="<?=$oneUserinfo[email];?>" autocomplete="off">
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">用户名</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="username" name="username" placeholder="username"  value="<?=$oneUserinfo[user];?>"  autocomplete="off" readonly>
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">密码</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="password" id="password" name="password" class="width-40" autocomplete="off"   >
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">确认密码</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="password" id="password_again" name="password_again" class="width-40"  >
                                </div>
                                <!-- col-xs-12 --> 
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <hr>
                          <h3 class="mgbt-xs-15">个人信息</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">姓名</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="name" name="name"  placeholder="真实姓名"  value="<?=$oneUserinfo[name];?>" >
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">分机号</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="ext" name="ext"  placeholder="分机号"  value="<?=$oneUserinfo[ext];?>" >
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                                                   
                          <div class="form-group">
                            <label class="col-sm-3 control-label">性别</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <span class="vd_radio radio-info">
                                    <input type="radio" <? if($oneUserinfo[sex]=='1'){echo 'checked';}?> value="1" id="optionsRadios3" name="sex">
                                    <label for="optionsRadios3"> 男性 </label>
                                  </span>
                                  <span class="vd_radio  radio-danger"> 
                                    
                                    <input type="radio"  <? if($oneUserinfo[sex]=='0'){echo 'checked';}?> value="0" id="optionsRadios4" name="sex">
                                    <label for="optionsRadios4"> 女性 </label>
                                  </span> 
                                    
                                  
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">生日</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" id="datepicker-normal" name="birthday" class="width-40"  placeholder="1981-01-01"  value="<?=$oneUserinfo[birthday];?>">
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">婚姻状况</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40" name="ismarry">
                                    <option value="0" <? if($oneUserinfo[ismarry]=='0'){echo 'selected';}?>>单身</option>
                                    <option value="1" <? if($oneUserinfo[ismarry]=='1'){echo 'selected';}?>>已婚</option>
                                  </select>
                                </div>
                                <!-- col-xs-9 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">部门</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40" name="bm" id="bm">
                                  <? for($i=0;$i<$BmlistNum;$i++){?>
                                    <option value="<?=$Bmlist[$i][id_bm];?>" <? if($oneUserinfo[id_bm]==$Bmlist[$i][id_bm]){echo 'selected';}?>><?=$Bmlist[$i][bmname];?></option>
                                  <? }?> 
                                  </select>
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">职位</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <select class="width-40" name="zw" id="zw">
                                  <? for($i=0;$i<$ZwlistNum;$i++){?>
                                    <option value="<?=$Zwlist[$i][id_zw];?>" <? if($oneUserinfo[id_zw]==$Zwlist[$i][id_zw]){echo 'selected';}?>><?=$Zwlist[$i][zwname];?></option>
                                  <? }?> 
                                  </select>
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">简介</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <textarea rows="3" name="intro"><?=$oneUserinfo[remark];?></textarea>
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <hr>
                          <h3 class="mgbt-xs-15">联系方式</h3>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">移动电话</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="mobiphone" placeholder="Mobile phone" value="<?=$oneUserinfo[mobi];?>">
                                </div>
                                <!-- col-xs-12 -->
                                
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">家庭固话</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="hometel" placeholder="Home tel"  value="<?=$oneUserinfo[hometel];?>">
                                </div>
                                <!-- col-xs-9 -->
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          <div class="form-group">
                            <label class="col-sm-3 control-label">家庭住址</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="text" name="address" placeholder="Home address"  value="<?=$oneUserinfo[address];?>">
                                </div>
                                                          
                              </div>
                              <!-- row --> 
                            </div>
                            <!-- col-sm-10 --> 
                          </div>
                          <!-- form-group -->
                          
                          
                          <!-- form-group --> 
                          
                        </div>
                        <!-- col-sm-12 --> 
                      </div>
                      <!-- row --> 
                      
                    </div>
                    <!-- panel-body -->
                    <div class="pd-20">
                      <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> 修改员工信息</button>
                     
                      
                    </div>
                  </form>
                </div>
                <!-- Panel Widget --> 
              </div> </div>

         
         <? }?>  
           
   <!----------------------------------------------------------------------------------------- --> 
   
     <? if(!isset($_GET[editlist]) && !isset($_GET[fun])){?>
              <div class="row">
              <div class="col-md-12">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> 
                    
                      <span class="menu-icon"> 
                       <i class="fa fa-<?=$leftmenu_icon;?>"></i>
                       </span>
                       人事档案列表
                       <div class="menu-icon" style="float:right; position:relative"> 
                         <a href="#" class="custom_add" data-toggle="dropdown"><i class="fa fa-cog"></i></a>
                         <ul class="dropdown-menu" role="menu" style="left:-150px;">
                         <? if($ispermit[AD]=='1'){?>
                            <li><a href="/<?=SITE_DIR?>/hr/staff-add.html">添加新员工</a></li>
                          <? }?>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)" onClick="pullfiles();">同步数据缓存</a></li>
                         </ul>
                       
                       </div>
                     
                    </h3>
                     
                  </div>
                  <div class="panel-body table-responsive">
                    <table class="table table-striped table-hover" id="data-tables"  width="100%">
                      <thead>
        <tr>
            <th>姓名</th>
            <th>用户名</th>
            <th>部门</th>
            <th>分机号</th>
            <th>建档时间</th>
            <th>建档人</th>
            <th>状态</th>
            <th>动作</th>
        </tr>
    </thead>
 
    <tfoot>
        <tr>
            <th>姓名</th>
            <th>用户名</th>
            <th>部门</th>
            <th>分机号</th>
            <th>建档时间</th>
            <th>建档人</th>
            <th>状态</th>
            <th>动作</th>
        </tr>
    </tfoot>
                    </table>
                  </div>
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-md-12 --> 
            </div>
   
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

<script type="text/javascript" src="/<?=SITE_DIR?>/inc/js/dataTables.bootstrap.js"></script>

   
<script type="text/javascript">
		$(document).ready(function() {
			
		
		//初始时间选择器	
		$( "#datepicker-normal" ).datepicker({ 
		            dateFormat: 'yy-mm-dd',
		            changeMonth: true,
		            changeYear: true,
					monthNamesShort:['一月','二月','三月','四月','五月','六月','七月','八月','九月','十月','十一月','十二月']
	
	      });
			   
		
		//增加员工 表单验证	   
		$('#addstaff').validate({
            rules: {
				
                companyemail: {required: true,email: true },
				name: {required: true},
				username: {required: true,minlength: 4, remote: "/<?=SITE_DIR?>/ajax_php/hr/isuservalid.php"},
                password: {required: true,minlength: 6},
				password_again: { equalTo: "#password" }

				
            },
			messages: {    
                companyemail: "请输入正确的邮箱",
                name:"请输入员工姓名",
                username:{required:"输入的用户名不为空值。",minlength:"输入的用户名最少4位。",remote:"用户名已经存在！"},
                password:"请输入最少6位密码",
				password_again:"两次输入的密码不正确！"
       
             } 
			
			
        });	
		
		
		//编辑员工 表单验证	   
		$('#editstaff').validate({
            rules: {
				
                companyemail: {required: true,email: true },
				name: {required: true},
                password: {minlength: 6},
				password_again: { equalTo: "#password" }

				
            },
			messages: {    
                companyemail: "请输入正确的邮箱",
                name:"请输入员工姓名",
                password:"请输入最少6位密码",
				password_again:"两次输入的密码不正确！"
       
             } 
			
			
        });	
			
		
			   
			
	//初始化人事列表页		
	    $.post('../ajax_php/hr/ajax_gethrlist.php',function(data) {
            var myjson = '';eval('myjson=' + data + ';');
		
            $('#data-tables').dataTable( 
				   {
					   
					   "ajax": myjson.path,
					   "aLengthMenu": [[20, 40, 80, -1], [20, 40, 80, "显示所有"]],
					   "aaSorting": [[ 4, "desc" ]],
//					   "columnDefs": [{"targets": [ 1 ],"visible": false},
//					                  {"targets": [ 2 ],"visible": false},
//									  {"targets": [ 3 ],"visible": false},
//									  {"targets": [ 4 ],"visible": false},
//									  {"targets": [ 5 ],"visible": false}
//									  ],
					   
					   "oLanguage": {
	                         "sLengthMenu": "每页显示 _MENU_条",
	                         "sZeroRecords": "没有找到符合条件的数据",
	                         "sProcessing": "<img src='/admin/inc/pics/loading.gif' />",
	                         "sInfo": "当前第 _START_ - _END_ 条　共计 _TOTAL_ 条",
	                         "sInfoEmpty": "木有记录",
	                         "sInfoFiltered": "(从 _MAX_ 条记录中过滤)",
	                         "sSearch": "搜索：",
                	          "oPaginate": {
    	            	           "sFirst": "首页",
    	            	           "sPrevious": "前一页",
    	            	           "sNext": "后一页",
    	            	           "sLast": "尾页"
    		                  }
					   }		  
				   
				   });
	   
	   
	    });		
				

				   

				 
				
				
		} );
		
		
//更新缓存文件		
function pullfiles() {

	$.post('../ajax_php/hr/ajax_pullfiles.php',function() {
		
           fake_load('正在更新！','消息提醒！','同步缓存文件已经为您更新完毕,请自行刷新当前列表页面！','fa fa-envelope-o','success','0');
		
		});

}


<? if($ispermit[DE]){?>
//删除员工
function staffdel(staffid) {


   $.post('../ajax_php/hr/ajax_delstaff.php',{staffid:staffid},function(data) {
		  
		  var myjson = '';eval('myjson=' + data + ';');
		  if(myjson.errcode!=0){ 
              fake_load('正在删除！','消息提醒！','无法删除，该员工目录下存在'+myjson.errcode+'个文件！','fa fa-envelope-o','error','0');
		  }else{
			  fake_load('正在删除！','消息提醒！','已经删除，正在为您更新！','fa fa-envelope-o','success','1');
		  }
			  
		
		});


}

<? }?>
/*//状态设定
function statset(staffuser){
	
	 (new PNotify({
             title: '状态设置提醒！',
			 type: 'success',
             text: '切换'+staffuser+'员工的状态',
             icon: 'fa fa-foursquare',
             hide: false,
             confirm: {confirm: true, buttons: [{text: '暂停',addClass: 'btn-danger'},{text: '正常',addClass: 'btn-success'}]},
              buttons: {closer: true,sticker: false}
          })).get().on('pnotify.confirm', function() {
                   
			   alert(22);
				   
				   
            }).on('pnotify.cancel', function() {
                  alert(11);
            });
	
	
}
*/


		
		
</script>



</body>
</html>