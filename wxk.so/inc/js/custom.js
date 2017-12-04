
$(document).bind("mobileinit", function(){
 $.mobile.ajaxEnabled = false;
 //$.mobile.defaultPageTransition = 'flip';
});
/////////////////////////////////////////////////////////////////////////////////////

//获取当前页文件名
function getcurrentfilename(){
	
	pathnameurl=window.location.pathname;//当前URL
	pathnameurl = pathnameurl.split(".html");//折开URL
	pathnameurl = pathnameurl[0].split("/");//折开URL
	urllength=pathnameurl.length-1;//数组最后一位长度
	return pathnameurl[urllength];//取出文件名
	
	
}	




/////////////////////////////////////////////////////////////////////////////////////
//系统登录
function login() {
var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
					 $.post('/ajax_php/ajax_login.php',{username:$(".username:last").val(),password:$(".password:last").val()},function(data){
					 var myjson = '';eval('myjson=' + data + ';');
					 if(myjson.errcode=='1'){ 
					         
							 //设置cookie 7天 用于登陆
							 $.cookie("cookie_user",myjson.cookie_user,{expires:7});  
							 $.cookie("cookie_pass",myjson.cookie_pass,{expires:7});  
							 
							 $( "#MessagePopbox"+pagerandcode+" p" ).text( "恭喜您，登录成功！" );
							 $( "#MessagePopbox"+pagerandcode ).popup( "open" );
							

							 window.location.reload();
							 return true;
							 	
						}else{
							
						    alert( "用户名或密码错误，请重新输入！" );
						    return true;	
						}
						 
					 

					 });
	
	
	
}



//注销登录
function logout() {
var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
	$.post('/ajax_php/ajax_logout.php',function() {
        
		//删除cookie
		$.removeCookie('cookie_user');
		$.removeCookie('cookie_pass');
		
		$( "#MessagePopbox"+pagerandcode+" p" ).text( "退出成功！" );
	    $( "#MessagePopbox"+pagerandcode ).popup( "open" );
		window.location.href='/';
     });

}

function norz() {
var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
		$( "#MessagePopbox"+pagerandcode+" p" ).text( "您需要先身份认证！" );
	    $( "#MessagePopbox"+pagerandcode ).popup( "open" );

}




///////////////////////////////////////////关注//////////////////////////////////////////

//关注
function guanzhu(memberid) {

	$.post('/ajax_php/ajax_guanzhu.php',{gzid:memberid},function() {
		$("#guanzhu"+memberid).html('<a href="#" onclick="cancelguanzhu('+memberid+');" class="ui-btn ui-mini  ui-corner-all  ui-btn-c  ui-btn-inline" id="guanzhu">取消关注</a>');
     });

}


//取消关注
function cancelguanzhu(memberid) {

	$.post('/ajax_php/ajax_cancelguanzhu.php',{gzid:memberid},function() {
		$("#guanzhu"+memberid).html('<a href="#" onclick="guanzhu('+memberid+');" class="ui-btn ui-mini  ui-corner-all  ui-btn-c  ui-btn-inline" id="guanzhu">关注</a>');
     });

}




/////////////////////////////////////////////////////////////////////////////////////


function nextarts() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('/ajax_php/ajax_getarts.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#type-artslist-"+pagerandcode).append(myjson.info).listview('refresh'); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}


//发现
function nextfound() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('ajax_php/ajax_getfound.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#messageboxwarp-"+pagerandcode).append(myjson.info); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
					picshowid=myjson.picshowid;
					picshowid = picshowid.split(",");
					for (var i=0;i<picshowid.length;i++){$(picshowid[i]).photoSwipe();}
					//$(myjson.picshowid).photoSwipe();
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}



//活动
function nextevent() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('ajax_php/ajax_getevent.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#messageboxwarp-"+pagerandcode).append(myjson.info); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
					picshowid=myjson.picshowid;
					picshowid = picshowid.split(",");
					for (var i=0;i<picshowid.length;i++){$(picshowid[i]).photoSwipe();}
					//$(myjson.picshowid).photoSwipe();
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}


//作品
function nextworks() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('ajax_php/ajax_getworks.php',{pagenum:$('#pagenum-'+pagerandcode).text(),c_memberid:$('#memberid-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#messageboxwarp-"+pagerandcode).append(myjson.info); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
					picshowid=myjson.picshowid;
					picshowid = picshowid.split(",");
					for (var i=0;i<picshowid.length;i++){$(picshowid[i]).photoSwipe();}
					//$(myjson.picshowid).photoSwipe();
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}


//某个艺术家活动
function nextartevents() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('ajax_php/ajax_getartevents.php',{pagenum:$('#pagenum-'+pagerandcode).text(),c_memberid:$('#memberid-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#messageboxwarp-"+pagerandcode).append(myjson.info); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
					picshowid=myjson.picshowid;
					picshowid = picshowid.split(",");
					for (var i=0;i<picshowid.length;i++){$(picshowid[i]).photoSwipe();}
					//$(myjson.picshowid).photoSwipe();
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}


//艺术助手 作品
function nextmyworks() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('ajax_php/ajax_getmyworks.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#messageboxwarp-"+pagerandcode).append(myjson.info); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
					picshowid=myjson.picshowid;
					picshowid = picshowid.split(",");
					for (var i=0;i<picshowid.length;i++){$(picshowid[i]).photoSwipe();}
					//$(myjson.picshowid).photoSwipe();
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}

//艺术助手 我的活动
function nextmyevents() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('ajax_php/ajax_getmyevents.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#type-myevents-"+pagerandcode).append(myjson.info).listview('refresh'); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}


//我的艺术圈
function nextmyart() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('/ajax_php/ajax_getmyart.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#messageboxwarp-"+pagerandcode).append(myjson.info); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
					picshowid=myjson.picshowid;
					picshowid = picshowid.split(",");
					for (var i=0;i<picshowid.length;i++){$(picshowid[i]).photoSwipe();}
					//$(myjson.picshowid).photoSwipe();
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}


//我关注的艺术家
function nextmyartslist() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('/ajax_php/ajax_getmyartslist.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#type-myartslist-"+pagerandcode).append(myjson.info).listview('refresh'); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}




//我关注的艺术家发布的活动
function nextgzevent() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('/ajax_php/ajax_getgzevent.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#messageboxwarp-"+pagerandcode).append(myjson.info); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
					picshowid=myjson.picshowid;
					picshowid = picshowid.split(",");
					for (var i=0;i<picshowid.length;i++){$(picshowid[i]).photoSwipe();}
					//$(myjson.picshowid).photoSwipe();
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}

//我的收藏
function nextfavo() {
	var pagerandcode=$(".pagerandcode:last").text(); //取页面随机数
    $.mobile.loading( "show", {text: "正在载入...", textVisible: "false", theme: "b" });
	$("#isloading-"+pagerandcode).text('2');	//暂停 不在加载
	setTimeout(function () {
        $.mobile.loading( "hide" );
        $.post('/ajax_php/ajax_getfavo.php',{pagenum:$('#pagenum-'+pagerandcode).text()},function(data){
            var myjson = '';eval('myjson=' + data + ';');
				if(myjson.info!=''){
					$("#isloading-"+pagerandcode).text('0');	//中止暂停 可以加载
					$("#messageboxwarp-"+pagerandcode).append(myjson.info); 
					$("#pagenum-"+pagerandcode).text(myjson.pagenum);
					
					picshowid=myjson.picshowid;
					picshowid = picshowid.split(",");
					for (var i=0;i<picshowid.length;i++){$(picshowid[i]).photoSwipe();}
					//$(myjson.picshowid).photoSwipe();
					
				}else{
					$("#isloading-"+pagerandcode).text('1');	//已经结束 不在加载
					return false;
				}
							
		});
	}, 2000);	
}



/////////////////////////////////////////////////////////////////////////////////////

//加入收藏  或 取消 xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
function favourite(newsid){
	
	var pagerandcode=$(".pagerandcode:last").text(); //获取页面随机数
	$.post('/ajax_php/ajax_myfavourite.php',{newsid:newsid},function(data) {
		var myjson = '';eval('myjson=' + data + ';');
		if(myjson.isfavo=='0'){
		   $("#favourite"+newsid).css("color","#f00");	
	       $( "#MessagePopbox"+pagerandcode+" p" ).text( "已经加入收藏夹！" );
		}else{
		   $("#favourite"+newsid).css("color","#ccc");	
	       $( "#MessagePopbox"+pagerandcode+" p" ).text( "已经移除收藏夹！" );
		}
	    $( "#MessagePopbox"+pagerandcode ).popup( "open" );
     });
	
	
}




/////////////////////////////////////////////////////////////////////////////////////
 
 
$(document).delegate("[data-role='page'].my-page", "pageshow", function() {

$('.searchbox-list,.quickmenubox').hide();

	
		
	  
		
	$('.flexslider').flexslider({
        animation: "slide",
		controlNav: false, 
		directionNav: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });		
		



});
 
 

 
/////////////////////////////页面初始化//////////////////////////////////////////////////////// 
 

 
$( document ).on( "pagecreate", "#mobistyle-webapp", function() {

	 $(document).on( "scrollstop", function( event ) { 
			 var pagerandcode=$(".pagerandcode:last").text(); //获取页面随机数

			 var Currentfilename=getcurrentfilename();//取当前文件名
			  bottomhight=$(document).height() - $(window).height() - $(window).scrollTop();
	          if  (bottomhight<100){//滚动到底
			 
			     var Currisloading=$('#isloading-'+pagerandcode).text();//是否加载
			     if(Currentfilename=='artslist' && Currisloading=='0' ){nextarts();}//
				 if(Currentfilename=='found' && Currisloading=='0' ){nextfound();}//发现
				 if(Currentfilename=='event' && Currisloading=='0' ){nextevent();}//活动
				 if(Currentfilename=='works' && Currisloading=='0' ){nextworks();}//作品
				 if(Currentfilename=='artevents' && Currisloading=='0' ){nextartevents();}//
				 if(Currentfilename=='myworks' && Currisloading=='0' ){nextmyworks();}//
				 if(Currentfilename=='myevents' && Currisloading=='0' ){nextmyevents();}//
				 if(Currentfilename=='myart' && Currisloading=='0' ){nextmyart();}//我关注的艺术圏
				 if(Currentfilename=='myartslist' && Currisloading=='0' ){nextmyartslist();}//我关注的艺术家
				 if(Currentfilename=='gzevent' && Currisloading=='0' ){nextgzevent();}//我关注的艺术家发布的活动
				 if(Currentfilename=='favo' && Currisloading=='0' ){nextfavo();}//我收藏的作品
				 
				 
		       }
			   
			  //if($(window).scrollTop()>160){$(".gettop").show();}else{$(".gettop").hide();}
			
			 });//end scrollstop		

     
	 $( window ).on( "vclick", "#contentinnnerbg", function() {$('.quickmenubox').hide();});
      /*	 
	   $( document ).on( "vclick", "#contentinnnerbg", function() {$('.quickmenubox').hide();});
	   $( window ).on( "tap", function( event ) { $('.quickmenubox').hide(); } )	
	  */
	 
		
			
});







/*
$( document ).on( "pagecreate", function() {
    $( ".photopopup" ).on({
        popupbeforeposition: function() {
            var maxHeight = $( window ).height() - 30 + "px";
            $( ".photopopup img" ).css( "max-height", maxHeight );
        }
    });
});
		*/
		
//////////////////////////////////////////////////////////////////////////////////////////////////////////////











		