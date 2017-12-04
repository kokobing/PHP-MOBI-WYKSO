
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//退出函数
function logout(SITE_DIR_REQUEST) {

	$.post('/'+SITE_DIR_REQUEST+'/ajax_php/login/ajax_logout.php',function(data) {
        var myjson = '';eval('myjson=' + data + ';');
		window.location.href='/'+SITE_DIR_REQUEST+'/'+myjson.homefile;
     });

}



//////////////////////////////////////////////////////////////////////////////////////////////

//上传图片
function UploadFiles(Btnid,callbackid,callbackarrow,Tableid,queueID,uploadScript,uploadPath,buttonClass,buttonText,buttonWidth,buttonHeight,fileSizeLimit,fileType,isauto,timestamp,token){
	

    $(Btnid).uploadifive({
				'auto'         : isauto,
				'buttonClass'  : buttonClass,
				'buttonText'   : buttonText,
				'width'        : buttonWidth,
				'height'       : buttonHeight,
				'fileSizeLimit' : fileSizeLimit,
				'removeCompleted' : true,
				'formData'         : {
									   'timestamp' : timestamp,
									   'token'     : token,
									   'Tableid'   : Tableid,
									   'uploadPath': uploadPath,
									   'fileType'  : fileType
				                     },
				'queueID'          : queueID,
				'uploadScript'     : uploadScript,
				
				'onProgress'   : function(file, e) {
					 
					 if (e.lengthComputable) {
                         var progress = parseInt(e.loaded / e.total * 100, 10);
                      }
					  
					
                     $('#'+queueID+' .progress-bar').css('width',progress + '%');  
                     
					  
					    

                  },
				  'onError'      : function(errorType,file) {
					  
                        //alert('The error was: ' + errorType);
	
						
						if(errorType=='FILE_SIZE_LIMIT_EXCEEDED'){
							pulltz('消息提醒！',file.queueItem.find('.filename').html()+'的文件大小不超过'+fileSizeLimit+'!','fa fa-envelope-o','error');
						}
						
						if(errorType=='Invalid file type.'){
							pulltz('消息提醒！',file.queueItem.find('.filename').html()+'当前上传文件类型不正确！','fa fa-envelope-o','error');
						}
						
						
						
						setTimeout("$('#"+queueID+" .progress-bar').css('width', '0%')",5000); 
						
                  },
				
				
				
				'onUploadComplete' : function(file, data) {
					 //alert('The file ' + file.name + ' uploaded successfully.');
					 setTimeout("$('#"+queueID+" .progress-bar').css('width', '0%')",5000); 
					 
					 if(callbackarrow=='left'){
					   $(callbackid).prepend(file.xhr.responseText);//回填
					   $('a[data-rel^="prettyPhoto"]').each(function() {
			              $(this).attr('rel', $(this).data('rel'));
		                });
		                $("a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square'});	
					 }
					 
					 if(callbackarrow=='right'){
					   $(callbackid).append(file.xhr.responseText);//回填
					   $('a[data-rel^="prettyPhoto"]').each(function() {
			              $(this).attr('rel', $(this).data('rel'));
		                });
		                $("a[rel^='prettyPhoto']").prettyPhoto({theme:'light_square'});	
					 }
					 
					 
					 
					 pulltz('消息提醒！',file.queueItem.find('.filename').html()+'上传成功！','fa fa-envelope-o','sucess');
					 
				 }
	});			
	
	
}
///////////////////////////////////////////search_topbox////////////////////////////////////////////////////////////////////////

function search_topbox(){
	
	if($('input[name="search-topbox"]:checked').val()!=''){//如果存在选择目录
			$.post('../ajax_php/search_topbox.php',{search_keywords:$('#search-topbox-input').val(),target:$('input[name="search-topbox"]:checked').val()},function(data) {
				  var myjson = '';eval('myjson=' + data + ';'); 
				  window.location.href="/"+$('#Current_System_Dir').val()+myjson.targeturl; 
			});
  }
	
	
}






/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		