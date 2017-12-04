<?php


	 ////////////////////////////////////////////   配置 判断是否允许访问 ///////////////////////////////////////////
	  
	      
	  
		//判断文件访问权  pvay2 表 并设置当前用户当前页面的 相关权限
         $strSQL="select a.display_permit as DP,
		                 add_permit as AD,
						 edit_permit as ED,
						 del_permit as DE,
						 group_list as GL,
						 group_edit as GE,
						 group_del as GD
						 from pavy2 as a left join backmenu as b on a.id_backmenu=b.id_backmenu
                  WHERE a.id_hr='$_SESSION[userid]'  and b.url='".$c_url."'";
         $objDB->Execute($strSQL);
         $ajaxispermit=$objDB->fields();
         if($ajaxispermit[DP]!='1'){ob_end_flush();exit(); }//不允许 程序终止
		 
	
      /*  目前每个AJAX页面会产生6个 个人权限  用于判断用户当前权限
	     $ajaxispermit[DP]='1'; //DISPLAY
		 $ajaxispermit[AD]='1'; //ADD 
		 $ajaxispermit[ED]='1'; //EDIT
		 $ajaxispermit[DE]='1'; //DEL
		 $ajaxispermit[GL]='1'; //GROUP LIST
		 $ajaxispermit[GE]='1'; //GROUP EDIT
		 $ajaxispermit[GD]='1'; //GROUP DEL
		 
		 
		 */
		 
		 if($ajaxispermit[DP]==''){$ajaxispermit[DP]=0;} //不存在置为0
	 	 if($ajaxispermit[AD]==''){$ajaxispermit[AD]=0;} 
		 if($ajaxispermit[ED]==''){$ajaxispermit[ED]=0;} 
		 if($ajaxispermit[DE]==''){$ajaxispermit[DE]=0;} 
		 if($ajaxispermit[GL]==''){$ajaxispermit[GL]=0;} 
		 if($ajaxispermit[GE]==''){$ajaxispermit[GE]=0;} 
	     if($ajaxispermit[GD]==''){$ajaxispermit[GD]=0;} 	
		 
		 
		 
	  
     //////////////////////////////////////////// END  配置 判断是否允许访问 ///////////////////////////////////////////




?>