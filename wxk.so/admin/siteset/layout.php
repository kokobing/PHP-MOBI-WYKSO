<?php
require "../inc/core/site/layout_core.php";
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
          
          <? if( !isset($_GET[editlist]) && !isset($_GET[fun]) ||  $ispermit[ED]=='0'){ //编辑动作不存在 或者 当前登陆的人 没有编辑权限 只能在此列表 
			  ?>
          
          <div class="vd_content-section clearfix">
            
            
          <div class="row">
              <div class="col-md-12">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-<?=$leftmenu_icon;?>"></i> </span> 区块管理
                    
                    <div class="menu-icon" style="float:right; position:relative; width:80px;"> 
                         <a href="/<?=SITE_DIR?>/siteset/layout-add.html" class="custom_add" data-original-title="添加新区块" data-toggle="tooltip" data-placement="top" ><i class="fa fa-plus"></i></a>
                    </div>
                       
                    </h3>
                  </div>
                  <div class="panel-body  table-responsive">
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th width="2%">#</th>
                          <th width="13%">区块名称</th>
                          <th width="45%">区块简介</th>
                          <th width="10%">语言</th>
                          <th width="10%">状态</th>
                          <th width="20%">操作</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <?php for($i=0;$i<$LaylistNum;$i++){?>
                        <tr>
                          <td><?=$i+1;?></td>
                          <td><?=$Laylist[$i][title]?></td>
                          <td><?=cutstr($Laylist[$i][intro],70,1)?></td>
                          <td>
								<?php
                                      
                                    for($j=0;$j<$LangListNum;$j++){
                                         if($Laylist[$i][id_lang]==$LangList[$j][id_lang]){echo '<span class="label vd_bg-'.$LangList[$j][color].'" >'.$LangList[$j][lang].'</span>'; }
                                    }
                                                               
                                ?>                         
                          </td>
                          <td>
                          
                          <? if($ispermit[ED]){//有编辑权?>
                          
                             <? if($Laylist[$i][status]=='1'){ ?>
                                 <a href="javascript:void(0)" onClick="Mstatus('<?=$Laylist[$i][id_layout]?>','<?=$Laylist[$i][status]?>');"><span class="label label-success">开通</span></a>
                             <? }else{?>
                                 <a href="javascript:void(0)" onClick="Mstatus('<?=$Laylist[$i][id_layout]?>','<?=$Laylist[$i][status]?>');"><span class="label label-danger">暂停</span></a>
                              <? }?>   
                          
                          
                          <? }else{//无编辑权?>
                                
								<? if($Laylist[$i][status]=='1'){ ?>
                                    <span class="label label-success">开通</span>
                                <? }else{?>
                                    <span class="label label-danger">暂停</span>
                                 <? }?>
                                 
                            
                          <? }?>
                          
                          
                          </td>
                          <td class="menu-action rounded-btn">
                              <? if( $ispermit[ED]){?><a href="layouteditlist-<?=$Laylist[$i][id_layout];?>.html" data-original-title="编辑" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-yellow"> <i class="fa fa-pencil"></i> </a> <? }?>
                              <? if( $ispermit[DE]){?><a  href='javascript:void(0)' onclick='layoutdel(<?=$Laylist[$i][id_layout];?>);' data-original-title="删除" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-red"> <i class="fa fa-times"></i> </a><? }?>
                              
                              <? if( $ispermit[ED]){?>
                              <a href="javascript:void(0)" onClick="setdirarrow('<?=$Laylist[$i][id_layout];?>','up')" data-original-title="向上移动" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-blue"><i class="fa fa-arrow-up"></i></a> 
                               <a href="javascript:void(0)" onClick="setdirarrow('<?=$Laylist[$i][id_layout];?>','down')" data-original-title="向下移动" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-blue"><i class="fa fa-arrow-down"></i></a>
							   <? }?>
                                 
                          </td>
                        </tr>
                      <?php }?>
                        
                        <tr>
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
          
         <?php } 
		 
		 if( isset($_GET[editlist]) &&  $ispermit[ED]){ //编辑动作存在 并且当前用户拥有 编辑权
			 
	     ?>
          
<div class="vd_content-section clearfix">
            
            
          <div class="row">
              <div class="col-md-12">
                
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-<?=$leftmenu_icon;?>"></i> </span> 编辑 <?=$SetLayoutinfo[title]?> 区块 <div style=" float:right; margin:0;text-align:right"> <a href="javascript:void(0)" onClick="history.go(-1);" class="btn btn-primary btn-xs">返回上一层</a> </div> </h3>
                  </div>
                  <div class="panel-body">
                    <form class="form-horizontal" action="layoutedit-<?=$SetLayoutinfo[id_layout]?>.html" role="form"  method="post">
                     
                      <div class="form-group">
                        <label class="col-sm-2 control-label">区块名称</label>
                        <div class="col-sm-5 controls">
                          <input name="title" id="title" type="text" placeholder="请输入区块名称"  value="<?=$SetLayoutinfo[title]?>">
                          <span class="help-inline">区块名称将在列表页面显示</span> </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="col-sm-2 control-label">语言类别</label>
                        <div class="col-sm-7 controls">
                                  <select  class="width-40"   id="catalogdirlang" name="catalogdirlang" placeholder="语言类别" >
                                     <? for($i=0;$i<$LangListNum;$i++){?>
                                      <option value="<?=$LangList[$i][id_lang]?>" <? if($SetLayoutinfo[id_lang]==$LangList[$i][id_lang]){echo 'selected';}?>><?=$LangList[$i][lang]?></option>
                                      <? }?>
                                  </select>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-2 control-label">区块简介</label>
                        <div class="col-sm-7 controls">
                          <textarea name="layintro" id="layintro" rows="3" placeholder="请输入区块简介"><?=$SetLayoutinfo[intro]?></textarea>
                          <span class="help-inline">区块名称将在列表页面显示</span> </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">区块备注</label>
                        <div class="col-sm-7 controls">
                          <textarea name="remark" id="remark" rows="3" placeholder="请输入区块备注"><?=$SetLayoutinfo[remark]?></textarea>
                          <span class="help-inline">区块备注是预留字段</span> </div>
                      </div>




                      <div class="form-group">
                        <label class="col-sm-2 control-label">信息内容</label>
                        <div class="col-sm-7 controls">
                          <textarea name="content" id="content" data-rel="ckeditor" rows="3"><?=$SetLayoutinfo[content]?></textarea>
                          <script>CKEDITOR.replace( 'content', {uiColor: '#EAEAEA', height:500});	</script>
                        </div>
                      </div>

                      
                      
                      <div class="form-group">
                        <label class="col-sm-2 control-label">文件上传</label>
                        <div class="col-sm-7 controls">
                        
                           <div id="progress" class="progress progress-striped">
                              <div class="progress-bar progress-bar-info"></div>
                           </div>

                            <input id="file_upload" name="file_upload" type="file" multiple>
                          
                        </div>
                        
                      </div>
                      
                      <div class="form-group">
                        <label class="col-sm-2 control-label"></label>
                        <div class="col-sm-7 controls">
                          
                    
                    
                    
                    
                        <div id="dirimgsbox" class="newscallbackimgs">
                                   <?
									//抽取编辑区块名称
									$strSQL="SELECT opicname as pic,id_layoutpic as lid,title FROM layoutpic WHERE  id_layout='$_GET[editlist]' order by ordernum asc ";//需要编辑的区块
									$objDB->Execute($strSQL);
									$Layoutinfopics=$objDB->getrows();
									$Layoutinfopicsnum=sizeof($Layoutinfopics);
									for($i=0;$i<$Layoutinfopicsnum;$i++){
								   ?>
                                      <a href="/upload/layout/<?=$Layoutinfopics[$i][pic]?>" data-rel="prettyPhoto[<?=$_GET[editlist];?>]" data-img_id="<?=$Layoutinfopics[$i][lid]?>" title="<?=$Layoutinfopics[$i][title]?>"> 
                                      <img src="/upload/layout/<?=$Layoutinfopics[$i][pic]?>" width="50" height="50">
                                      </a>
                                      
                                   <? }?>
                               </div>                                                
                        </div>
                      </div>
                      
                      
                      

                      <div class="form-group form-actions">
                        <div class="col-sm-2"> </div>
                        <div class="col-sm-7">
                          <button class="btn vd_btn vd_bg-green vd_white" type="submit"><i class="icon-ok"></i> 保存</button>
                          <button class="btn vd_btn vd_black" type="reset">重置</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <!-- Panel Widget --> 
              </div>
              <!-- col-md-12 --> 
            </div>
   
   
               

            
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

<!-- Specific Page Scripts END -->

<script type="text/javascript">

<?  if( isset($_GET[editlist]) &&  $ispermit[ED]){//子分类 内页?>
$(function() {
//上传组件
UploadFiles('#file_upload',//绑定按钮ID
            '#dirimgsbox',//上传成功回填 ID
			'right',//回填方向
            '<?=$_GET[editlist];?>',//图片跟踪新闻
			'progress',//进度条ID
			'/<?=SITE_DIR?>/ajax_php/site/ajax_upload_layout.php',//处理脚本
			'/upload/layout/',//图片上传路径
            'btn vd_bg-green uploadicon',//按钮CLASS外观
			'上传图片',//按钮文字
			'80','35','6MB','jpg,png','true',//宽 高 限制上传大小 类型 自动上传
			'<?=time();?>','<?=md5('command_eable_say'.time());?>');//与处理脚本对照的令牌环
});



//编辑图片信息
function Edit_pic(picid){

//取出图片 原始信息
$.post('../ajax_php/site/ajax_getlayoutpicinfo.php',{picid:picid},function(data) {
     var myjson = '';eval('myjson=' + data + ';');
  
  (new PNotify({
    title: '编辑图片',
    text: '<p>添加图片标题、简介信息！</p><p><input type="text" id="pictitle" value="'+myjson.title+'" /></p><p><textarea rows="8" id="picintro">'+myjson.intro+'</textarea></p><p><input id="picurl" type="text" placeholder="图片URL"  value="'+myjson.url+'"></p>',
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
    

	 $.post('../ajax_php/site/ajax_editlayoutpicinfo.php',{picid:picid,picurl:$('#picurl').val(),pictitle:$('#pictitle').val(),picintro:CKEDITOR.instances.picintro.getData()},function() {
         window.location.reload(); 
      });
	
	
}).on('pnotify.cancel', function() {});

CKEDITOR.replace( 'picintro' );//CKEDITOR 初始化
	 
	    
});	//end 取出

	
	
}//END EDIT_PIC



function ORDER_pic(picid,arrow){
//信息图片排序
$.post('../ajax_php/site/ajax_orderlayoutpic.php',{picid:picid,arrow:arrow},function() {
  window.location.reload(); 
});

}






<? }?>


<?php if($ispermit[ED]=='1'){?>
function Mstatus(id_layout,status){
$.post('../ajax_php/site/ajax_setlayoutstatus.php',{id_layout:id_layout,status:status},function() {
  window.location.reload(); 
});

}
<?php }?>


<?php if($ispermit[DE]){?>
//删除员工
function layoutdel(layoutid) {

         (new PNotify({
            title: '区块删除提醒！',
             text: '确定删除么?',
             icon: 'glyphicon glyphicon-question-sign',
              hide: false,
             confirm: {confirm: true},
              buttons: {closer: false,sticker: false}
          })).get().on('pnotify.confirm', function() {
                   
				$.post('../ajax_php/site/ajax_dellayout.php',{layoutid:layoutid},function() {
					window.location.reload();		
				});
				
            }).on('pnotify.cancel', function() {
                   notice.cancelRemove().update();
            });

}


//删除某个区块中的图片
function Del_pic(picid){
	
 $.post('../ajax_php/site/ajax_dellayoutpic.php',{picid:picid},function() {
         window.location.reload(); 
      });
	
}

<?php }?>



<?php if($ispermit[ED]=='1'){?>
//区块排序
function setdirarrow(layoutid,arrow){
$.post('../ajax_php/site/ajax_layoutorder.php',{layoutid:layoutid,arrow:arrow},function() {
  window.location.reload(); 
});
}


<?php }?>


</script>


</body>
</html>