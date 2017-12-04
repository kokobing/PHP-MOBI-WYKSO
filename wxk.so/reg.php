<?php
require "./inc/cn_index_core.php";
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


<div data-role="content" id="contentinnnerbg" >


<div style="width:80%;margin:0 auto;">
 <form  id="formforbmset" action="#" method="post" >
 <input type="password" style="display:none" id="dispasswordautointable">
          <div style="margin-top:15px;font-size:120%;font-weight:bold;">注册会员</div>
          <div style="margin-top:15px;"><input name="username" id="username"  onblur="checkusername();"  type="text"  placeholder="手机号码" style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon01.png) no-repeat"></div>
          <div style="margin-top:15px;"><input name="password" id="password"  type="password"  placeholder="密码" style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon02.png) no-repeat"></div>
          <div style="margin-top:15px;"><input name="passwordzaici" id="passwordzaici"  onblur="checkpassword();"   type="password"  placeholder="再次输入密码" style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon02.png) no-repeat"></div>
         
      
        <div style="margin-top:15px;">
        <select id="memtype"  name="memtype">
          <option value="0">选择会员类别</option>
          <option value="1">我是个人</option>
          <option value="2">我是艺术家</option>
          <option value="3">我是机构</option>
        </select>
       </div>
          
          
          <div style="margin-top:15px;"><a href="javascript:void(0)" data-role="button" data-inline="true" data-theme="b" onclick="regmember();" >免费注册</a></div>
      </form>    
       </div>



                
</div><!-- /content -->

 <? require "footer.php"; ?>   

<div data-role="popup" id="errorinforegbox" data-overlay-theme="b" data-theme="b" class="ui-content" style="max-width:280px">
    <a href="#" data-rel="back" data-role="button" data-theme="f" data-icon="delete" data-iconpos="notext" class="ui-btn-right">Close</a>
    <p class="errorinfo">Error!</p>
</div>

<div data-role="popup" id="popupDialog_enroll" data-overlay-theme="a" data-theme="a" data-dismissible="false" style="max-width:400px;" class="ui-corner-all">
    <div data-role="header" data-theme="a" class="ui-corner-top">
        <h1>注册成功</h1>
    </div>
    <div data-role="content" data-theme="a" class="ui-corner-bottom ui-content">
        <h3>感谢您的参与</h3>
           <div style="margin:0 auto; width:220px;">
                <a href="/" data-role="button" data-inline="true"  data-theme="b">关闭</a>
                
            </div>
    </div>
</div>


<div id="checkname_hide" style="display:none">0</div>
<div id="checkpassword_hide" style="display:none">0</div>


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



<script>


function regmember(){
	
if($("#checkname_hide").text()=='0'){	
		$(".errorinfo").html('用户名错误，请重新输入！');
		$("#errorinforegbox" ).popup( "open");
		return false;
}else if($("#checkpassword_hide").text()=='0'){	
		$(".errorinfo").html('密码错误，请重新输入！');
		$("#errorinforegbox" ).popup( "open");
		return false;
}else if($("#memtype").val()=='0'){
        $(".errorinfo").html('您必须选择会员类别，一旦注册不可以更改！');
		$("#errorinforegbox" ).popup( "open");
		return false;
}


	
if($("#checkname_hide").text()=='1' && $("#checkpassword_hide").text()=='1' && $("#memtype").val()!='0' ){	

 		
		$.post('/ajax_php/ajax_regmember.php',{username:$("#username").val(),password:$("#password").val(),membertype:$("#memtype").val(),phoneNumber:$("#phoneNumber").val()},function(){
				      
					   $( "#popupDialog_enroll" ).popup( "open");
		               return true;
	
			 
		 });
		 
	}




	
}



//注册检测信息
function checkusername(){
	
	if($('#username').val()==''){//如果为空
		$(".errorinfo").html('用户名不能为空，请重新输入！');
		$("#errorinforegbox" ).popup( "open");
		return false;
	}else{
		  
	  strlen=$("#username").val();  
	  
      if(strlen.length<4 || strlen.length>16){
		$(".errorinfo").html('用户名为4-16字符，请重新输入！');
		$("#errorinforegbox" ).popup( "open");
		  return false;
	   };
       
		
	}//不为空

	$.post('/ajax_php/ajax_checkusername.php',{username:$("#username").val()},function(data){
             var myjson = '';eval('myjson=' + data + ';');
             if(myjson.errcode==0){
				$(".errorinfo").html('用户名已存在，请重新输入！');
				$("#errorinforegbox" ).popup( "open");
				return false;}
			 if(myjson.errcode==1){$("#checkname_hide").text(1);}
         
		 });	
	
}

function checkpassword(){
	
	if($('#password').val()!=$('#passwordzaici').val()){
				$(".errorinfo").html('两次密码输入不一致，请重新输入!');
				$("#errorinforegbox" ).popup( "open");
				return false;
		 return false;
		}
	
	if($('#password').val()==''){//如果为空
				$(".errorinfo").html('密码不能为空，请重新输入！');
				$("#errorinforegbox" ).popup( "open");
				return false;
	}else{
		$("#checkpassword_hide").text(1);
		return true;
	}
	
	
}

		

</script>


</body>
</html>