<?php
require "../inc/core/news/newsmanage_core.php";
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
          

   
          <?php if( !isset($_GET[editlist]) && !isset($_GET[fun]) ||  $ispermit[ED]=='0'){ //编辑动作不存在 或者 当前登陆的人 没有编辑权限 只能在此列表 ?>

 <div class="vd_content-section clearfix">
            
            
          <div class="row">
              <div class="col-md-12">
                <div class="panel widget">
                  <div class="panel-heading vd_bg-grey">
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-<?=$leftmenu_icon;?>"></i> </span> 信息管理
                    
                    <div class="menu-icon" style="float:right; position:relative;"> 
                         <a href="/<?=SITE_DIR?>/news/newsmanage-add.html" class="custom_add" data-original-title="<p style='width:60px;'>添加新信息</p>" data-toggle="tooltip" data-placement="top" data-html="true" ><i class="fa fa-plus"></i></a>
                    </div>
                       
                    </h3>
                    
                  </div>
                  
                  
                  
                  <div class="panel-body  table-responsive">
                  
                  
                  
                  <div class="panel-heading" style="text-align:right;border-bottom: 1px solid #DEDEDE; margin-top:-15px; line-height:50px;">
                  <input type="text" id="search_keywords"  name="search_keywords"  class="input-sm" placeholder="搜索标题" style="width:35%;" value="<?=$_SESSION[webnews_keywords];?>">
                  
                  <a href="javascript:void(0)" onClick="searchkeywords('1');" data-toggle="tooltip" data-original-title="搜索" id="search-btn" class="btn vd_btn vd_round-btn btn-xs vd_bg-red append-icon" ><i class="fa fa-search fa-fw "></i></a>
                  
                  <a href="javascript:void(0)" onClick="searchkeywords('0');" data-toggle="tooltip" data-original-title="重置" id="filter-reset-btn" class="btn vd_btn vd_round-btn btn-xs vd_bg-yellow append-icon" ><i class="fa fa-undo fa-fw "></i></a>
                  
                  
                  
                    </div>
                  
                  
                  
                  
                    <table class="table table-striped table-hover">
                      <thead>
                        <tr>
                          <th width="2%">#</th>
                          <th width="12%">所属类别</th>
                          <th width="15%">信息标题</th>
                          <th width="13%">建档人</th>
                          <th width="13%">发布日期</th>
                          <th width="5%"></th>
                          <th width="10%">语言</th>
                          <th width="10%">状态</th>
                          <th width="20%">操作</th>
                        </tr>
                      </thead>
                      <tbody>
                      
                      <?php for($i=0;$i<$NewslistNum;$i++){?>
                        <tr>
                          <td><?=$i+1;?></td>
                          <td>
							<?=$Newslist[$i][newsdirname];?>
                          </td>
                          <td><a href="javascript:void(0);" data-original-title="<?=$Newslist[$i][title];?>" data-toggle="tooltip" data-placement="top" style="color:#5e656b"> <?=cutstr($Newslist[$i][title],16,0);?></a></td>
                          <td>
                          <?=$Newslist[$i][username];?>
                          </td>
                          <td><?=$Newslist[$i][newsdate]?></td>
                          <td><a href="javascript:void(0)" style="color:gray;"  data-toggle="popover" data-html="true" data-trigger="hover" title="扫描二维码" data-content="<img src='getqrcode.php?nid=1&ndir2=1&lang=1&ecc=Q&size=4' width='100' height='100'>"><i class="glyphicon glyphicon-qrcode"></i></a></td>
                          <td><?php
						  
					for($j=0;$j<$LangListNum;$j++){
						 if($Newslist[$i][id_lang]==$LangList[$j][id_lang]){echo '<span class="label vd_bg-'.$LangList[$j][color].'" >'.$LangList[$j][lang].'</span>'; }
					}
						   						   
						 ?></td>
                          <td>
                          
                        
                          
                             <? if($Newslist[$i][rz]=='1'){ ?>
                                 <a href="javascript:void(0)" onClick="Mstatus('<?=$Newslist[$i][id_newsinfo]?>','<?=$Newslist[$i][rz]?>');"><span class="label label-success">作品认证</span></a>
                             <? }else{?>
                                 <a href="javascript:void(0)" onClick="Mstatus('<?=$Newslist[$i][id_newsinfo]?>','<?=$Newslist[$i][rz]?>');"><span class="label label-danger">未认证</span></a>
                              <? }?>   
                          
                
                          
                          
                          </td>
                          <td class="menu-action rounded-btn">
                          <!--组编功能-->
                          <?php if($ispermit[GE]=='1'){?>
                          
                              <a href="newsmanageeditlist-<?=$Newslist[$i][id_newsinfo];?>.html" data-original-title="编辑" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-yellow"> 
                              <i class="fa fa-pencil"></i> 
                              </a> 
                              
						  <?php }elseif($ispermit[GE]=='0'){?>
                          
                              <? if($ispermit[ED] && $Newslist[$i][id_hr]==$_SESSION[userid]){?>
                              <a href="newsmanageeditlist-<?=$Newslist[$i][id_newsinfo];?>.html" data-original-title="编辑" data-toggle="tooltip" data-placement="top" class="btn custom-table-icon vd_bg-yellow"> 
                              <i class="fa fa-pencil"></i> 
                              </a> 
							  <? }?>

						 <?php }?>
                         
                        
                              
                              
                             

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
                    <h3 class="panel-title"> <span class="menu-icon"> <i class="fa fa-<?=$leftmenu_icon;?>"></i> </span> 编辑 <?=$OneNewsInfo[title]?> 信息 <div style=" float:right; margin:0;text-align:right"> <a href="javascript:void(0)" onClick="history.go(-1);" class="btn btn-primary btn-xs">返回上一层</a> </div> </h3>
                  </div>
                  <div class="panel-body">
                    <form id="newsmanageedit" class="form-horizontal" action="newsmanageedit-<?=$OneNewsInfo[id_newsinfo]?>.html" role="form"  method="post">
                       
                       <input type="hidden" style="display:none" id="backurl" name="backurl" value="<?=$_SERVER['HTTP_REFERER'];?>">
                      <div class="form-group">
                        <label class="col-sm-2 control-label">信息标题</label>
                        <div class="col-sm-5 controls">
                          <input name="newstitle" id="newstitle" type="text" placeholder="请输入信息标题"  value="<?=$OneNewsInfo[title]?>">
                          <span class="help-inline">信息标题将在列表页面显示</span> </div>
                      </div>
                      
                       <div class="form-group">
                        <label class="col-sm-2 control-label">信息类别</label>
                        <div class="col-sm-7 controls" id="newsdirselectbox">
                                 
                                  <input type="hidden" style="display:none" id="selectNum" name="selectNum" >    
                                  
                              <? 
								if($OneNewsInfo[dirtree]!=''){//输出目录树
								
								$dirtree=explode(',',$OneNewsInfo[dirtree]);
								
								for($i=0;$i<sizeof($dirtree);$i++){
								
								   	//输出同级目录  
								$strSQL="SELECT id_newsdir,name,fatherid FROM newsdir WHERE  fatherid=(select fatherid from newsdir where id_newsdir='".$dirtree[$i]."') order by ordernum asc";
                                       $objDB->Execute($strSQL);
                                       $arrnewsSamedir=$objDB->GetRows();
								
								?>                   
                                  <select  class="width-30"   id="C_dir<?=$i?>" name="C_dir<?=$i?>" data-SelectNUM="<?=$i?>" placeholder="信息类别" 
                                   onChange="getsubdir('#C_dir<?=$i?>','#newsdirselectbox');" >
                                      <option value="0" >信息类别</option>
                                   <?php for($j=0;$j<sizeof($arrnewsSamedir);$j++){?>
                                      <option value="<?=$arrnewsSamedir[$j][id_newsdir]?>" <? if($dirtree[$i]==$arrnewsSamedir[$j][id_newsdir]){echo 'selected';}?>><?=$arrnewsSamedir[$j][name]?></option>
                                    <?php }?>
                                  </select>
                                  
                                <? 
								}//end for
							}else{//没有目录树，初始一级目录
								  	//初始一级目录  
									$strSQL="SELECT id_newsdir,name FROM newsdir where  level='1' order by ordernum asc";
									$objDB->Execute($strSQL);
									$arrnewsdir1=$objDB->GetRows();
                                  ?>                 
                                  <select  class="width-30"   id="C_dir0" name="C_dir0" data-SelectNUM="0" placeholder="信息类别" 
                                   onChange="getsubdir('#C_dir0','#newsdirselectbox');" >
                                      <option value="0" >信息类别</option>
                                   <?php for($i=0;$i<sizeof($arrnewsdir1);$i++){?>
                                      <option value="<?=$arrnewsdir1[$i][id_newsdir]?>" ><?=$arrnewsdir1[$i][name]?></option>
                                    <?php }?>
                                  </select>
                            
                             
                             <? }?>
                                 
                        </div>
                        
                      
                        
                      </div>
                      
                                           
                      <div class="form-group">
                        <label class="col-sm-2 control-label">语言类别</label>
                        <div class="col-sm-7 controls">
                                  <select  class="width-30"   id="catalogdirlang" name="catalogdirlang" placeholder="语言类别" >
                                     <? for($i=0;$i<$LangListNum;$i++){?>
                                      <option value="<?=$LangList[$i][id_lang]?>" <? if($OneNewsInfo[id_lang]==$LangList[$i][id_lang]){echo 'selected';}?>><?=$LangList[$i][lang]?></option>
                                      <? }?>
                                  </select>
                        </div>
                      </div>
                      
                      

                      <div class="form-group">
                        <label class="col-sm-2 control-label">信息简介</label>
                        <div class="col-sm-7 controls">
                          <textarea name="newsintro" id="newsintro" rows="3" placeholder="请输入信息简介"><?=$OneNewsInfo[intro]?></textarea>
                          <span class="help-inline">信息简介可能将在网页列表页面显示</span> </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-2 control-label">信息备注</label>
                        <div class="col-sm-7 controls">
                          <textarea name="remark" id="remark" rows="3" placeholder="请输入版面备注"><?=$OneNewsInfo[remark]?></textarea>
                          <span class="help-inline">信息备注是预留字段</span> </div>
                      </div>


                     <div class="form-group">
                            <label class="col-sm-2 control-label">信息标签</label>
                            <div class="col-sm-7 controls">
                              <input  type="text" class="tags" data-rel="tags-input" name="input_tags" id="input_tags" value="<?=$OneNewsInfo[tag]?>" />
                      	    <span class="help-inline">信息标签是预留字段</span> </div>

                      </div>

                      
                      <div class="form-group">
                        <label class="col-sm-2 control-label">信息内容</label>
                        <div class="col-sm-7 controls">
                          <textarea name="content" id="content" data-rel="ckeditor" rows="3"><?=$OneNewsInfo[content]?></textarea>
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
					    $strSQL="SELECT opicname as pic,id_newspic as pid FROM newspic WHERE  id_newsinfo='$_GET[editlist]' order by ordernum asc ";
						$objDB->Execute($strSQL);
						$OneNewsInfopics=$objDB->getrows();
						$OneNewsInfopicsnum=sizeof($OneNewsInfopics);
						for($i=0;$i<$OneNewsInfopicsnum;$i++){
							 if($OneNewsInfo[id_newsdir]=='11'){//作品
								   ?>
                                      <a href="/upload/zuopin/<?=$OneNewsInfopics[$i][pic]?>" data-rel="prettyPhoto[<?=$_GET[editlist];?>]" data-img_id="<?=$OneNewsInfopics[$i][pid]?>" title="<?=$OneNewsInfopics[$i][title]?>"> 
                                      <img src="/upload/zuopin/<?=$OneNewsInfopics[$i][pic]?>" width="50" height="50">
                                      </a>
                                    <? }elseif($OneNewsInfo[id_newsdir]=='10'){//活动?>  
                                      
                                      <a href="/upload/event/<?=$OneNewsInfopics[$i][pic]?>" data-rel="prettyPhoto[<?=$_GET[editlist];?>]" data-img_id="<?=$OneNewsInfopics[$i][pid]?>" title="<?=$OneNewsInfopics[$i][title]?>"> 
                                      <img src="/upload/event/<?=$OneNewsInfopics[$i][pic]?>" width="50" height="50">
                                      </a>
                                      
                                      <? }else{?>
                                      
                                      <a href="/upload/pics/<?=$OneNewsInfopics[$i][pic]?>" data-rel="prettyPhoto[<?=$_GET[editlist];?>]" data-img_id="<?=$OneNewsInfopics[$i][pid]?>" title="<?=$OneNewsInfopics[$i][title]?>"> 
                                      <img src="/upload/pics/<?=$OneNewsInfopics[$i][pic]?>" width="50" height="50">
                                      </a>
                                      
                                      <? }?>
                                      
                                   <? }?>
                               </div>
                                                
                        </div>
                      </div>
                      
                       
                     <div class="form-group">
                        <label class="col-sm-2 control-label">链接地址</label>
                        <div class="col-sm-5 controls">
                          <input name="newsurl" id="newsurl" type="text" placeholder="请输入URL"  value="<?=$OneNewsInfo[url]?>">
                          <span class="help-inline">链接地址可以自由指定</span> </div>
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

 <?php }?>



       
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
				"use strict";
				
	// 表单验证	   
		$('#newsmanageedit').validate({
            rules: {
                newsdir0: {required: true,min: 1}
				
            },
			messages: {    
                newsdir0: "请选择新闻分类"
             } 
			
			
        });	
				
				
				
		} );
</script>

<!-- Specific Page Scripts END -->

   
<script type="text/javascript">


<? if($ispermit[ED]=='1'){?>
function setnewsarrow(newsid,arrow){
$.post('../ajax_php/news/ajax_newsorder.php',{newsid:newsid,arrow:arrow},function() {
  window.location.reload(); 
});
}
<? }?>


//切换信息状态 开通或关闭
function Mstatus(newsid,status){
$.post('../ajax_php/news/ajax_newstatus.php',{newsid:newsid,status:status},function() {
  window.location.reload(); 
});
}



<?php if($ispermit[DE]){?>
//删除某条信息
function newsdel(newsid) {

         (new PNotify({
            title: '信息删除提醒！',
             text: '确定删除么?',
             icon: 'glyphicon glyphicon-question-sign',
              hide: false,
             confirm: {confirm: true},
              buttons: {closer: false,sticker: false}
          })).get().on('pnotify.confirm', function() {
                   
				$.post('../ajax_php/news/ajax_delnews.php',{newsid:newsid},function() {
					window.location.reload();		
				});
				
				   
            }).on('pnotify.cancel', function() {
                   notice.cancelRemove().update();
            });
}

<?php }?>

<?  if( isset($_GET[editlist]) &&  $ispermit[ED]){//子分类 内页?>
$(function() {
//上传组件
UploadFiles('#file_upload',//绑定按钮ID
            '#dirimgsbox',//上传成功回填 ID
			'right',//回填方向
            '<?=$_GET[editlist];?>',//图片跟踪新闻
			'progress',//进度条ID
			'/<?=SITE_DIR?>/ajax_php/news/ajax_upload_newsmanage.php',//处理脚本
			'/upload/news/',//图片上传路径
            'btn vd_bg-green uploadicon',//按钮CLASS外观
			'上传图片',//按钮文字
			'80','35','6MB','jpg,png','true',//宽 高 限制上传大小 类型 自动上传
			'<?=time();?>','<?=md5('command_eable_say'.time());?>');//与处理脚本对照的令牌环
});



//编辑图片信息
function Edit_pic(picid){

//取出图片 原始信息
$.post('../ajax_php/news/ajax_getnewsmanagepicinfo.php',{picid:picid},function(data) {
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
    

	 $.post('../ajax_php/news/ajax_editnewsmanagepicinfo.php',{picid:picid,pictitle:$('#pictitle').val(),picintro:CKEDITOR.instances.picintro.getData()},function() {
         window.location.reload(); 
      });
	
	
}).on('pnotify.cancel', function() {});

CKEDITOR.replace( 'picintro' );//CKEDITOR 初始化
	 
	    
});	//end 取出

	
	
}//END EDIT_PIC



function ORDER_pic(picid,arrow){
//信息图片排序
$.post('../ajax_php/news/ajax_ordernewsmanagepic.php',{picid:picid,arrow:arrow},function() {
  window.location.reload(); 
});

}


// 获取下级分类目录 并回填  $('#C_dir0').val()
//selectid 当前下拉列表的ID  callbackid 回填追加
//dirid:$(selectid).val() 当前下拉列表所选择的值
//selectNum:$(selectid).attr('data-SelectNUM') 下拉列表自定义属性值 0 1 2 3 表示第几级下拉列表
function getsubdir(selectid,callbackid){
	
 if($(selectid).val()!=0){
   $.post('../ajax_php/news/ajax_getsubdirselect.php',{dirid:$(selectid).val(),selectNum:$(selectid).attr('data-SelectNUM')},function(data) {
      var myjson = '';eval('myjson=' + data + ';');  
	  
	  var NextselectNum=myjson.SelectNum;//当前选择的下一个下拉值
	 
	  
	  if(myjson.Dirhtml!='0'){//存在下一级子分类
		  
		  if($("#C_dir"+NextselectNum).length>0){  //如果下一级下拉ID存在 则全部移除
			   for (var i=NextselectNum;i<100;i++){$("#C_dir"+i).remove();}
	       }
	      $(callbackid).append(myjson.Dirhtml);//回填下一级分类
		  $('#selectNum').val(NextselectNum);//赋值总分类数量
	  
	  }else{//没有下级分类
		  
		  if($("#C_dir"+NextselectNum).length>0){  //如果下一级下拉ID存在 则全部移除
			   for (var i=NextselectNum;i<100;i++){$("#C_dir"+i).remove();}
	       }
		   $('#selectNum').val(NextselectNum-1);//赋值总分类数量
		  
	  }
		
    });//end post
	
 }//end if 0
  
}





<? }?>

<? if($ispermit[DE]=='1'){?>

//删除图片
function Del_pic(picid){
	
 $.post('../ajax_php/news/ajax_delnewsmanagepic.php',{picid:picid},function() {
         window.location.reload(); 
      });
	
}

<? }?>


//搜索
function searchkeywords(status){
	
	if(status=='0'){//重置为空
		$('#search_keywords').val('');//搜索框置为空值
	}
	
	$.post('../ajax_php/news/ajax_searchkeywords.php',{search_keywords:$('#search_keywords').val(),status:status},function() {
             window.location.reload(); 
     });

	
}







</script>


</body>
</html>