<?php
require "../inc/core/member/member_core.php";
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
                    <h3 class="panel-title"> <span class="menu-icon">  <i class="<?=$leftmenu_icon;?>"></i> </span>会员档案 </h3>
                  </div>
                  <div class="panel-body  table-responsive">
                    
                    
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>类别</th>
                          <th>用户名</th>
                          <th>姓名</th>
                          <th>手机</th>
                          <th>邮箱</th>
                          <th>注册日期</th>
                          <th>认证</th>
                          <th>动作</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <? for($i=0;$i<$MemberlistNum;$i++){?>
                        <tr>
                          <td><?=$i+1;?></td>
                          <td><? 
						      if($Memberlist[$i][level]=='1'){echo '个人';};
							  if($Memberlist[$i][level]=='2'){echo '艺术家';};
							  if($Memberlist[$i][level]=='3'){echo '机构';};
						  
						  ?></td>
                          <td><?=$Memberlist[$i][user]?></td>
                          <td><?=$Memberlist[$i][name]?></td>
                          <td class="center"><?=$Memberlist[$i][mobi]?></td>
                          <td class="center"><?=$Memberlist[$i][email]?></td>
                          <td class="center"><?=substr($Memberlist[$i][indate],0,10)?></td>
                          <td class="center">
                          <? if($ispermit[ED]){//有编辑权?>
                          
                              <? if($Memberlist[$i][status]=='1'){ ?>
                                 <a href="javascript:void(0)" onClick="Mstatus('<?=$Memberlist[$i][id_member]?>','<?=$Memberlist[$i][status]?>');"><span class="label label-success">激活</span></a>
                                 
                                 <? }else{
									 
									 
                               $strSQL="SELECT pic FROM idcardup  WHERE  id_member='".$Memberlist[$i][id_member]."' ";//申请上传身份认证
							   $objDB->Execute($strSQL);
							   $isupidcardpic=$objDB->fields();
								
								if($isupidcardpic[pic]!=''){
							 
							 ?>
                              
                              <a href="javascript:void(0)"><span class="label label-danger">申请身份认证</span></a>
                                
                             <? }else{?>
                             
                                 
                                 <a href="javascript:void(0)" onClick="Mstatus('<?=$Memberlist[$i][id_member]?>','<?=$Memberlist[$i][status]?>');"><span class="label label-danger">未认证</span></a>
                                 
                             
                             <? }}?>
                              
                              
                                
                          
                          
                          <? }else{//无编辑权?>
                                
								<? if($Memberlist[$i][status]=='1'){ ?>
                                    <span class="label label-success">激活</span>
                                <? }else{?>
                                    <span class="label label-danger">暂停</span>
                                 <? }?>
                                 
                            
                          <? }?>
                          
                          </td>
                          <td class="menu-action">
                           <? if($ispermit[ED]){?>
                           <a href="membereditlist-<?=$Memberlist[$i][id_member]?>.html" data-original-title="编辑" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-yellow"> <i class="fa fa-pencil"></i> </a> 
                           <? }?>
                            <? if($ispermit[DE]=='1'){?>
                           <a href="javascript:void(0)" onClick="delmember('<?=$Memberlist[$i][id_member]?>');" data-original-title="删除" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-red"> <i class="fa fa-times"></i> </a> <? }?>
                           
                           </td>
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
          
         <?  }   ?>
         
         
         
         
          <? if(isset($_GET[editlist]) && $ispermit[ED]){?>
         
          <div class="vd_content-section clearfix">
         
         
         <div class="row">
                 <div class="col-sm-12">
                <div class="panel widget light-widget">
                  <div class="panel-heading no-title" style="text-align:right"> <a href="javascript:void(0)" onClick="history.go(-1);" class="btn btn-primary btn-xs">返回列表页</a> </div>
                <form id="editstaff" class="form-horizontal" action="member-edit.html"  method="post" role="form" enctype="multipart/form-data">
                  <input type="password" style="display:none" id="dispasswordautointable">
                  <input type="hidden" style="display:none" id="current_member_id" name="current_member_id" value="<?=$_GET[editlist];?>">
                  <input type="hidden" style="display:none" id="backurl" name="backurl" value="<?=$_SERVER['HTTP_REFERER'];?>">
                    <div class="panel-body">
                      <h2 class="mgbt-xs-20"> 编辑会员 </h2>
                      <br>
                      <div class="row">
                        <div class="col-sm-3 mgbt-xs-20">
                          <div class="form-group">
                            <div class="col-xs-12">
                              <div class="form-img text-center mgbt-xs-15">
                              <? if($Memberinfo[photo]!=''){?>
                                 <img alt="example image" src="../../upload/pics/<?php echo $Memberinfo[photo];?>">
                               <? }else{?>
                                  <img alt="example image" src="../inc/pics/big.jpg">
                               <? }?>
                                </div>
                              <div class="form-img-action text-center mgbt-xs-20"> 
                              <input type="file"  id="staffpic" name="staffpic">
                              <input type="hidden" name="oldphoto" value="<?php echo $Memberinfo[photo];?>">
                              </div>
                              <br>
                              <div>
                                <table class="table table-striped table-hover">
                                  <tbody>
                                    <tr>
                                      <td style="width:60%;">当前状态</td>
                                      <td>
                               
                         <? if($ispermit[ED]){//有编辑权?>
                          
                             <? if($Memberinfo[status]=='1'){ ?>
                                 <a href="javascript:void(0)" onClick="Mstatus('<?=$Memberinfo[id_member]?>','<?=$Memberinfo[status]?>');"><span class="label label-success">激活</span></a>
                             <? }else{?>
                                 <a href="javascript:void(0)" onClick="Mstatus('<?=$Memberinfo[id_member]?>','<?=$Memberinfo[status]?>');"><span class="label label-danger">暂停</span></a>
                              <? }?>   
                          
                          
                          <? }else{//无编辑权?>
                                
								<? if($Memberinfo[status]=='1'){ ?>
                                    <span class="label label-success">激活</span>
                                <? }else{?>
                                    <span class="label label-danger">暂停</span>
                                 <? }?>
                                 
                            
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
                            <label class="col-sm-3 control-label">邮箱</label>
                            <div class="col-sm-9 controls">
                              <div class="row mgbt-xs-0">
                                <div class="col-xs-9">
                                  <input type="email" id="companyemail" name="companyemail" placeholder="email@yourcompany.com" value="<?=$Memberinfo[email];?>" autocomplete="off">
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
                                  <input type="text" id="username" name="username" placeholder="username"  value="<?=$Memberinfo[user];?>"  autocomplete="off" readonly>
                                  
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
                                  <input type="text" id="name" name="name"  placeholder="真实姓名"  value="<?=$Memberinfo[name];?>" >
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
                                    <input type="radio" <? if($Memberinfo[sex]=='1'){echo 'checked';}?> value="1" id="optionsRadios3" name="sex">
                                    <label for="optionsRadios3"> 男性 </label>
                                  </span>
                                  <span class="vd_radio  radio-danger"> 
                                    
                                    <input type="radio"  <? if($Memberinfo[sex]=='0'){echo 'checked';}?> value="0" id="optionsRadios4" name="sex">
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
                                  <input type="text" id="datepicker-normal" name="birthday" class="width-40"  placeholder="1981-01-01"  value="<?=$Memberinfo[birthday];?>">
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
                                  <input type="text" name="mobiphone" placeholder="Mobile phone" value="<?=$Memberinfo[mobi];?>">
                                </div>
                                <!-- col-xs-12 -->
                                
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
                                  <input type="text" name="address" placeholder="Home address"  value="<?=$Memberinfo[address];?>">
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
                      <button class="btn vd_btn vd_bg-green col-md-offset-3"><span class="menu-icon"><i class="fa fa-fw fa-check"></i></span> 修改会员信息</button>
                     
                      
                    </div>
                  </form>
                </div>
                <!-- Panel Widget --> 
              </div> </div>
         
         
          </div>
         
         <?  }   ?>
         
          
       
          
          
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



   
<script type="text/javascript">
$(document).ready(function() {
				
});


 <? if($ispermit[DE]=='1'){?>
//删除 弹屏
function delmember(memberid){
	

         (new PNotify({
            title: '会员删除提醒！',
             text: 'Are you sure?',
             icon: 'glyphicon glyphicon-question-sign',
              hide: false,
             confirm: {confirm: true},
              buttons: {closer: false,sticker: false}
          })).get().on('pnotify.confirm', function() {
                   
				$.post('../ajax_php/member/ajax_delmember.php',{memberid:memberid},function() {
					fake_load('正在删除！','消息提醒！','已经删除，正在准备为您刷新列表页！','fa fa-envelope-o','success','1');	
				});
				
				   
            }).on('pnotify.cancel', function() {
                   notice.cancelRemove().update();
            });


	
}
<? }?>


<? if($ispermit[ED]=='1'){?>
function Mstatus(memberid,status){
$.post('../ajax_php/member/ajax_setstatus.php',{memberid:memberid,status:status},function() {
  window.location.reload(); 
});

}
<? }?>

		
</script>

</body>
</html>