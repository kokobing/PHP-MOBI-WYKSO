<?php
require "./inc/cn_index_core.php";

if(!isset($_SESSION[memberid])){//如果未登陆 退回首页
  header('Location:/index.html');ob_end_flush();exit();
}else{

	if($_SESSION[memberstatus]!='1'){//如果登陆 未激活 也不可以进入发布作品页
	  header('Location:/index.html');ob_end_flush();exit();
	}
	
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


<div data-role="content" id="contentinnnerbg" >


<div style="width:80%;margin:0 auto;">
 <form  id="formforbmset" action="#" method="post" >
          <div style="margin-top:15px;font-size:120%;font-weight:bold;">发布活动</div>
          <div style="margin-top:15px;"><input name="title" id="title"   type="text"  placeholder="标题"  style="padding: .6em 20px;padding-left:30px; background:url(/inc/pics/m_reg_icon01.png) no-repeat"></div>
          

  
         
         <div style="margin-top:15px;"><textarea name="intro" id="intro"  type="text" placeholder="简介"  style="padding: .6em 20px;padding-left:30px;height:200px !important; background:url(/inc/pics/m_reg_icon04.png) no-repeat"></textarea></div>
         
          
        <div style="margin-top:15px;">
        <select id="hdtype"  name="hdtype">
          <option value="0">选择活动类别</option>
          <option value="7">线下活动</option>
          <option value="8">展览</option>
        </select>
       </div>
       

       
        <div style="margin-top:15px;">
        <label for="date">活动开始日期:</label>
        <input type="date" id="hddate"  name="hddate" value="">
        <label for="date">活动结束日期:</label>
        <input id="hddate_end"  name="hddate_end" type="date"  value="">
        </div> 
      
          
      
         <div id="upbtnstyle" style="margin-top:15px;">
         
            
              	
		         <input id="file_upload_event-<?=$pagerandcode;?>" name="file_upload" type="file" multiple >
                 <div id="queue_event" style="margin-top:10px;"></div>
            
         
         </div>
          
          <div style="margin-top:15px;"><a href="javascript:void(0)" onclick="nowuploadeventbtn();" class="ui-shadow ui-btn ui-btn-b ui-corner-all">发布活动</a></div>
          
      </form>    
       </div>



                
</div><!-- /content -->

 <? require "footer.php"; ?>   

<div class="pagerandcode" style="display:none;"><?=$pagerandcode;?></div>



<script type="text/javascript" language="javascript" src="/inc/js/jquery.uploadifive.min.js"></script>
<script type="text/javascript">
		<?php $timestamp = time();?>
		$(function() {
			var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
			$('#file_upload_event-'+pagerandcode).uploadifive({
				'auto'             : false,
				'buttonClass'      : 'ui-btn ui-bt-a',
				'removeTimeout' : 1,
				'buttonText'      : '选择上传照片',
				'queueID'          : 'queue_event',
				'removeCompleted' : true,
				'uploadScript'     : '/ajax_php/pullevent_uploadifive.php',
		        'onUpload': function(filesToUpload) {},
				'onQueueComplete' : function(uploads) {
					   $.mobile.changePage("event.html", "slideup");
					   
					 }
				
			});
		});
		
		
		function nowuploadeventbtn(){
		  var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
	     if($('#title').val()!='' && $('#hddate').val()!='' && $('#hddate_end').val()!=''){	//not null
			$.post('/ajax_php/ajax_pullevent.php',{title:$('#title').val(),intro:$('#intro').val(),hddate:$('#hddate').val(),hddate_end:$('#hddate_end').val(),hdtype:$('#hdtype').val()},function(data) {
					 var myjson = '';eval('myjson=' + data + ';');//
					 if(myjson.insertid){//获取入库ID 开始上传图片
						 //alert(myjson.insertid);
										
							$('#file_upload_event-'+pagerandcode).data('uploadifive').settings.formData = { 
								 'insertid' : myjson.insertid,
								 'timestamp' : '<?php echo $timestamp;?>',
								 'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
							 };
						
						    $('#file_upload_event-'+pagerandcode).uploadifive('upload');
						 
					 }
					
			});
		  }//end if 
			
	      
			
			 
			
		}//end nowuploadbtn
		
		
		
		
		
		
	</script>

</div><!-- /page -->


</body>
</html>