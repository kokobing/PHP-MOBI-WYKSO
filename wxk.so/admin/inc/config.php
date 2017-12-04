<?php
session_start();
require_once("mysql.class.php");
require_once("dbinfo.php");//数据库配置
require_once("common.php");//常用常量
require_once("function.class.php");//常用函数

//判断用户是否登陆并刷新在线表 未登陆将跳转
   $strSQL = "select id_online from online where user='$_SESSION[username]' and islock='0' " ;
   $objDB->Execute($strSQL);
   $login_userinfo=$objDB->getrows();

if(!isset($_SESSION[username]) || sizeof($login_userinfo)==0){//如果没登陆 或  自已不在线
	  
	   header('Location:/'.SITE_DIR.'/index.html');
	   ob_end_flush();
	   exit();
   
   
 }else{//如果登陆
	    
	  
	  
	  ////////////////////////////////////////////   配置 判断是否允许访问 ///////////////////////////////////////////
	  
	  $c_dirname=getcurrentdirname(SERVER_TYPE);//当前目录名
	    
		if($c_dirname!=SITE_DIR){//根目录允许进入 用户权限判断不包括根目录

	  
	      $c_filename = end(explode('/',$_SERVER["PHP_SELF"])); //当前文件名
          $c_url='/'.$c_dirname.'/'.$c_filename;//当前文件路径名及文件名
	      $c_url=str_replace(".php", ".html", $c_url);//当前文件名转后缀
	  

	     //判断目录访问权 及 用户权限是否存在 pvay1 表

		 $strSQL="SELECT $c_dirname as permit FROM pavy1 WHERE $c_dirname='1' and id_hr='$_SESSION[userid]'";
         $objDB->Execute($strSQL);
		 $permitdir1=$objDB->fields();
		 
		 if($permitdir1[permit]!='1'){header('Location:/'.SITE_DIR.'/index.html');ob_end_flush();exit();}//不允许此目录访问 跳转
		 
		 
		//判断文件访问权  pvay2 表 并设置当前用户当前页面的 相关权限 b.fatherid为当前页面的父目录 b.name 当前页面菜单的名称 
         $strSQL="select a.display_permit as DP,b.fatherid,b.name,b.id_backmenu,
		                 add_permit as AD,
						 edit_permit as ED,
						 del_permit as DE,
						 group_list as GL,
						 group_edit as GE,
						 group_del as GD
						 from pavy2 as a left join backmenu as b on a.id_backmenu=b.id_backmenu
                  WHERE a.id_hr='$_SESSION[userid]'  and b.url='".$c_url."'";
         $objDB->Execute($strSQL);
         $ispermit=$objDB->fields();
         if($ispermit[DP]!='1'){//不允许此目录访问 跳转
			 header('Location:/'.SITE_DIR.'/index.html');ob_end_flush();exit();
		  }
		 
		 /*  目前每个页面会产生7个 个人权限  用于判断用户当前权限
		 $ispermit[DP]='1'; //DISPLAY 
		 $ispermit[AD]='1'; //ADD 
		 $ispermit[ED]='1'; //EDIT
		 $ispermit[DE]='1'; //DEL
		 $ispermit[GL]='1'; //GROUP LIST
		 $ispermit[GE]='1'; //GROUP EDIT
		 $ispermit[GD]='1'; //GROUP DEL
		 */
		 if($ispermit[DP]==''){$ispermit[DP]=0;} //不存在置为0
	 	 if($ispermit[AD]==''){$ispermit[AD]=0;} 
		 if($ispermit[ED]==''){$ispermit[ED]=0;} 
		 if($ispermit[DE]==''){$ispermit[DE]=0;} 
		 if($ispermit[GL]==''){$ispermit[GL]=0;} 
		 if($ispermit[GE]==''){$ispermit[GE]=0;} 
	     if($ispermit[GD]==''){$ispermit[GD]=0;} 	

		 
	  }
	  
     //////////////////////////////////////////// END  配置 判断是否允许访问 ///////////////////////////////////////////

	  

	  //刷新自己最后的活动时间
        refreshtime();
		
      //加载语言包
      if($_SESSION[language]=='1'){require_once("lang_cn.php");
	  }elseif($_SESSION[language]=='2'){require_once("lang_en.php");}

  
	  
	  //加载主题颜色red、 yellow、 blue、 green 、 grey、 white、  black 
	  // dark-yellow  、 dark-blue   dark-green  ....
	  // soft-yellow  、 soft-blue   soft-green  ....
	  // black-10  black-20 .....  black-90  
	  // white-10  white-20 .....  white-90
	  //twitter  facebook   linkedin  googleplus
	  
	  $c_themecolor='twitter';//顶部、左侧
	  $c_openwindowcolor='soft-blue';//弹窗主色调
	  
	  
      //加载主菜单
      $strSQL="SELECT id_backmenu as id,name,icon,url FROM backmenu WHERE level='1' order by ordernum ASC";
      $objDB->Execute($strSQL);
      $arrMenu1list=$objDB->GetRows();//取一级目录
      $arrMenu1list_num=sizeof($arrMenu1list);
	   
	  

		
	
 }  





?>