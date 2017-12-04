<?php
require "./inc/core/login/login_core.php";
require "./inc/mobile_device_detect.php";//设备判断
$device = mobile_device_detect();//获取当前设备

//引导页域名绑定判断 记忆session  绑定的常量是否存在 并且等于当前使用的域名
if(defined('SITE_URL') && $_SERVER['HTTP_HOST']==SITE_URL){
	$_SESSION[bind_domain]='1';//正确绑定域名
}else{
	$_SESSION[bind_domain]='0';//非绑定域名
}



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
    <link href="/<?=SITE_DIR?>/inc/css/colorpicker.css" rel="stylesheet" type="text/css">            

	<!-- Specific CSS -->
	    
     
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

<body id="pages" class="full-layout no-nav-left no-nav-right  nav-top-fixed background-login     responsive remove-navbar login-layout   clearfix" data-active="pages "  data-smooth-scrolling="1">     
<div class="vd_body">
<!-- Header Start -->

<!-- Header Ends --> 
<div class="content">
  <div class="container"> 
    
    <!-- Middle Content Start -->
    
    <div class="vd_content-wrapper">
      <div class="vd_container">
        <div class="vd_content clearfix">
          <div class="vd_content-section clearfix">
            <div class="vd_login-page">
              <div class="heading clearfix">
                <div class="logo">
                  <h2 class="mgbt-xs-5"><img src="./inc/pics/logo.png" alt="logo"></h2>
                </div>
                <h4 class="text-center font-semibold vd_grey">LOGIN TO YOUR ACCOUNT</h4>
                
                              
              </div>
              <div class="panel widget">
                <div class="panel-body">
                  <div class="login-icon entypo-icon" style="position:relative"> 
                  <i class="icon-key"></i>
                   <div style="width:120px; position:absolute;right:0px;top:-55px;" >                        
                   <select class="form-control" id="language" onchange="changlange(this)">
                   <option <? if($_GET[fun]!='en'){echo 'selected';}?> value="1">中文版</option>
                   <option <? if($_GET[fun]=='en'){echo 'selected';}?> value="2">ENGLISH</option>
                   </select>
                 </div>    
                  
                   </div>
                  <form class="form-horizontal" id="login-form" action="#" role="form">
                  <div class="alert alert-danger vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-exclamation-circle vd_red"></i></span>
					<?php if($_GET[fun]=='en'){?><strong>Oh snap!</strong> Change a few things up and try submitting again. <?php }?>
					<?php if($_GET[fun]!='en'){?>噢,抱歉! 请修改后，再次尝试提交。<?php }?>
                    </div>
                  <div class="alert alert-success vd_hidden">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true"><i class="icon-cross"></i></button>
                    <span class="vd_alert-icon"><i class="fa fa-check-circle vd_green"></i></span><strong><?php if($_GET[fun]=='en'){echo 'Well done!';}elseif($_GET[fun]!='en'){echo '恭喜您登录成功！';}?></strong> </div>                  
                    <div class="form-group  mgbt-xs-20">
                      <div class="col-md-12">
                      
                        <div class="label-wrapper sr-only">
                          <label class="control-label" for="username">username</label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="text" placeholder="<?php if($_GET[fun]=='en'){echo 'Username';}else{echo '用户名';}?>" id="username" name="username" class="required" required>
                        </div>
                        <div class="label-wrapper">
                          <label class="control-label sr-only" for="password">Password</label>
                        </div>
                        <div class="vd_input-wrapper" id="password-input-wrapper" > <span class="menu-icon"> <i class="fa fa-lock"></i> </span>
                          <input type="password" placeholder="<?php if($_GET[fun]=='en'){echo 'Password';}else{echo '密码';}?>" id="password" name="password" class="required" required>
                        </div>
                        
                        <div class="label-wrapper sr-only">
                          <label class="control-label" for="checkcode">checkcode</label>
                        </div>
                        <div class="vd_input-wrapper" id="email-input-wrapper" style="position:relative"> <span class="menu-icon"> <i class="fa fa-envelope"></i> </span>
                          <input type="text" placeholder="<?php if($_GET[fun]=='en'){echo 'Verification code';}else{echo '验证码';}?>" id="checkcode" name="checkcode" class="required" required>
                          <div style="position:absolute;right:10px;top:8px;"><img src=inc/checknum.class.php></div>
                        </div>
                        
                    
                        
                      </div>
                    </div>
                    <div id="vd_login-error" class="alert alert-danger hidden"><i class="fa fa-exclamation-circle fa-fw"></i> Please fill the necessary field </div>
                    <div class="form-group">
                      <div class="col-md-12 text-center mgbt-xs-5">
                        <button class="btn vd_bg-blue vd_white width-100" type="submit" id="login-submit"><?php if($_GET[fun]=='en'){echo 'Submit';}else{echo '登陆';}?></button>
                      </div>
                      
                    </div>
                  </form>
                </div>
              </div>
              <!-- Panel Widget -->
              <div class="register-panel text-center font-semibold"> <a href="#"><?php if($_GET[fun]=='en'){echo 'Eable Cloud Office Platform';}else{echo '易用云协作办公平台';}?><span class="menu-icon"><i class="fa fa-angle-double-right fa-fw"></i></span></a> </div>
            </div>
            <!-- vd_login-page --> 
            
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
 
<!-- Specific Page Scripts Put Here -->
<script type="text/javascript">
$(document).ready(function() {
	
		"use strict";
	
        var form_register_2 = $('#login-form');
        var error_register_2 = $('.alert-danger', form_register_2);
        var success_register_2 = $('.alert-success', form_register_2);

        form_register_2.validate({
            errorElement: 'div', //default input error message container
            errorClass: 'vd_red', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",
            rules: {
				
                username: {
                    required: true,
					
                },				
                password: {
                    required: true,
					minlength: 6,
                },
                checkcode: {
                    required: true,
					minlength: 4,
                },
				
            },
			
			errorPlacement: function(error, element) {
				if (element.parent().hasClass("vd_checkbox") || element.parent().hasClass("vd_radio")){
					element.parent().append(error);
				} else if (element.parent().hasClass("vd_input-wrapper")){
					error.insertAfter(element.parent());
				}else {
					error.insertAfter(element);
				}
			}, 
			
            invalidHandler: function (event, validator) { //display error alert on form submit              
                success_register_2.hide();
                error_register_2.show();


            },

            highlight: function (element) { // hightlight error inputs
		
				$(element).addClass('vd_bd-red');
				$(element).parent().siblings('.help-inline').removeClass('help-inline hidden');
				if ($(element).parent().hasClass("vd_checkbox") || $(element).parent().hasClass("vd_radio")) {
					$(element).siblings('.help-inline').removeClass('help-inline hidden');
				}

            },

            unhighlight: function (element) { // revert the change dony by hightlight
                $(element)
                    .closest('.control-group').removeClass('error'); // set error class to the control group
            },

            success: function (label, element) {
                label
                    .addClass('valid').addClass('help-inline hidden') // mark the current input as valid and display OK icon
                	.closest('.control-group').removeClass('error').addClass('success'); // set success class to the control group
				$(element).removeClass('vd_bd-red');

					
            },



            submitHandler: function (form) {

					 $.post('ajax_php/login/ajax_login.php',{username:$("#username").val(),password:$("#password").val(),checkcode:$("#checkcode").val(),language:$("#language").val(),device:'<?=$device;?>'},function(data){
					 var myjson = '';eval('myjson=' + data + ';');
					 if(myjson.errcode==1){ 
					 
						$(form).find('#login-submit').prepend('<i class="fa fa-spinner fa-spin mgr-10"></i>')/*.addClass('disabled').attr('disabled')*/;					
						success_register_2.show();
						error_register_2.hide();		
					    
						setTimeout(function(){window.location.href = "/admin/siteset/siteset.html"},2000);return true;
					 	}
						
						 if(myjson.errcode==0){
						 alert('用户密或密码错误，请重新输入！');
						 return false;
						 }
						 
						 if(myjson.errcode==2){
						 alert('该用户已登录！');
						 return false;
						 }
						 
						 if(myjson.errcode==3){
						 alert('验证码错误，请重新输入验证码！');
						 return false;
						 }
						 
						 if(myjson.errcode==4){
						 alert('非授权的域名，无法登陆！');
						 return false;
						 }
						 

					 });
		 

						
							
            }
        });	
	
<?php if($_GET[fun]!='en'){?>
		jQuery.extend(jQuery.validator.messages, { 
		required: "必选字段", 
		remote: "请修正该字段", 
		email: "请输入正确格式的电子邮件", 
		url: "请输入合法的网址", 
		date: "请输入合法的日期", 
		dateISO: "请输入合法的日期 (ISO).", 
		number: "请输入合法的数字", 
		digits: "只能输入整数", 
		creditcard: "请输入合法的信用卡号",
		equalTo: "请再次输入相同的值", 
		accept: "请输入拥有合法后缀名的字符串", 
		maxlength: jQuery.validator.format("请输入一个 长度最多是 {0} 的字符串"), 
		minlength: jQuery.validator.format("请输入一个 长度最少是 {0} 的字符串"), 
		rangelength: jQuery.validator.format("请输入 一个长度介于 {0} 和 {1} 之间的字符串"), 
		range: jQuery.validator.format("请输入一个介于 {0} 和 {1} 之间的值"), 
		max: jQuery.validator.format("请输入一个最大为{0} 的值"), 
		min: jQuery.validator.format("请输入一个最小为{0} 的值")});
<?php }?>	
	
});



function changlange(obj)
{

  if(obj.value=='2'){//跳转英文版
    location.href='index-en.html';
  }
  
  if(obj.value=='1'){//跳转到中文版
    location.href='index.html';
  }
  
  
  

}



</script>
<!-- Specific Page Scripts END -->


</body>
</html>