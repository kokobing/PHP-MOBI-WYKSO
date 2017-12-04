<?php  

         
		 //生成人事列表 TXT缓存列表文件 统一组装TXT
   
		  $strSQL="SELECT a.id_hr,a.name,a.ext,a.operator,a.user,a.indate,a.stat,b.bmname FROM hr as a 
		  left join hr_bm as b  on a.id_bm=b.id_bm
		  WHERE  dele='1'   ";//搜索在职员工 不包括超级管理员 id_hr=1 为超级管理
		 $objDB->Execute($strSQL);
		 $Userlist=$objDB->getrows();
		 $UserlistNum=sizeof($Userlist);
   
		 $str.='{"data": [';//txt 头部
		 
		 for($i=0;$i<$UserlistNum;$i++){
			 
			 if($Userlist[$i][stat]=='1'){
				 $userstatstr1='正常';$userstatstr2='success';
			  }else{
				 $userstatstr1='暂停';$userstatstr2='danger';  
			  }
			  
			  
			  
			  if($ajaxispermit[ED]=='1'){//编辑权
				  $userstredit='<a  href=\'staffedit-'.$Userlist[$i][id_hr].'.html\'  class=\'btn custom-table-icon vd_bg-yellow\'> <i class=\'fa fa-pencil\'></i> </a>';
				  
			  }else{
				  $userstredit="";
			  }
			  
			 if($ajaxispermit[DE]=='1'){//删除权
				  $userstrdel='<a  href=\'javascript:void(0)\' onclick=\'staffdel('.$Userlist[$i][id_hr].');\'  class=\'btn custom-table-icon vd_bg-red\'> <i class=\'fa fa-times\'></i> </a>';
				  
			  }else{
				  $userstrdel="";
			  }
			  
			  
			 
		   $str.='[
            "'.$Userlist[$i][name].'",
            "'.$Userlist[$i][user].'",
            "'.$Userlist[$i][bmname].'",
            "'.$Userlist[$i][ext].'",
			"'.$Userlist[$i][indate].'",
			"'.$Userlist[$i][operator].'",
            "<span  class=\'label label-'.$userstatstr2.'\' style=\'cursor:pointer\'>'.$userstatstr1.'</span>",
            "'.$userstredit.$userstrdel.'"
        ]';
	       if($i!=($UserlistNum-1)){$str.=',';}
	    }
		
       $str.=']}';//txt 尾部
   





?>

