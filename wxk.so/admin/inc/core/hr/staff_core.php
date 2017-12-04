<?php
require "../inc/config.php";


/*  目前每个页面会产生7个 个人权限  用于判断用户当前权限
		 $ispermit[DP]='1'; //DISPLAY 
		 $ispermit[AD]='1'; //ADD 
		 $ispermit[ED]='1'; //EDIT
		 $ispermit[DE]='1'; //DEL
		 $ispermit[GL]='1'; //GROUP LIST
		 $ispermit[GE]='1'; //GROUP EDIT
		 $ispermit[GD]='1'; //GROUP DEL
*/

//统计当前帐户数量  将于常量比较 defined('USER_COUNT')  
$hr_count=HrcountSum();


//当前部门列表
    $strSQL="SELECT id_bm,bmname FROM hr_bm ";//列表部门
    $objDB->Execute($strSQL);
    $Bmlist=$objDB->getrows();
	$BmlistNum=sizeof($Bmlist);


//当前职务

    $strSQL="SELECT id_zw,zwname FROM hr_zw ";//列表部门
    $objDB->Execute($strSQL);
    $Zwlist=$objDB->getrows();
	$ZwlistNum=sizeof($Zwlist);





//提交动作存在 并且当前帐户数量在许可范围内   添加权限才可以 添加员工   此处权限后续修正 
if($_GET[fun]=='in' && defined('USER_COUNT') && $hr_count<=USER_COUNT  &&  $ispermit[AD] ){
	

//根据用户名创建员工 工作目录
if(@mkdir('../upload/staff/'.$_POST[username])){

   //初始员工随机数
   $intRand=rand(10000000,99999999);//随机码
   
   $pass_m=md5($_POST[password]);//md5密文
   

   //是否上传员工头像
   if ( is_uploaded_file( $_FILES['staffpic']['tmp_name'] ) ){
      $image_file=upload_file("staffpic","../upload/pics/",mktime());//上传图片
    }


   //员工入库	
   $strSQL="INSERT INTO hr(randcode,email,name,ext,user,password,photo,sex,birthday,ismarry,id_bm,id_zw,remark,mobi,hometel,address,indate,operator) values 
        ($intRand,'$_POST[companyemail]','$_POST[name]','$_POST[ext]','$_POST[username]','$pass_m','$image_file','$_POST[sex]','$_POST[birthday]','$_POST[ismarry]','$_POST[bm]','$_POST[zw]','$_POST[intro]','$_POST[mobiphone]','$_POST[hometel]','$_POST[address]',now(),'$_SESSION[username]')";
   $objDB->Execute($strSQL);



   //添加生成TXT缓存列表文件
     pulltohrlisttxt();
    //end 生成TXT缓存列表文件



}//end if mkdir 

	
header('Location:staff.html'); exit();	//处理完毕跳转	
}//end if($_GET[fun] && 添加权）
// END  提交动作存在 并且当前帐户数量在许可范围内   添加权限才可以 添加员工   此处权限后续修正


//编辑列表动作 存在
if(isset($_GET[editlist])){
	
	//抽取编辑人员的姓名
	$strSQL="SELECT * FROM hr WHERE  id_hr='$_GET[editlist]' ";//需要编辑的员工
    $objDB->Execute($strSQL);
    $oneUserinfo=$objDB->fields();

}

//编辑按钮提交动作
if($_GET[fun]=='edit' && $ispermit[ED] ){
	
	   //是否上传员工头像
      if ( is_uploaded_file( $_FILES['staffpic']['tmp_name'] ) ){
	  
          $image_file=upload_file("staffpic","../upload/pics/",mktime());//上传图片
		  @unlink('../upload/pics/'.$_POST[oldphoto]);
		
		}else{
		  $image_file=$_POST[oldphoto];
		}
		
	  //是否更换新密码	
	 if($_POST[password]!=''){
	 
	   $pass_m=md5($_POST[password]);
		 
       $strSQL="UPDATE hr SET email='$_POST[companyemail]',name='$_POST[name]',ext='$_POST[ext]',password='$pass_m',photo='$image_file',sex='$_POST[sex]',birthday='$_POST[birthday]',ismarry='$_POST[ismarry]',id_bm='$_POST[bm]',id_zw='$_POST[zw]',remark='$_POST[intro]',mobi='$_POST[mobiphone]',hometel='$_POST[hometel]',address='$_POST[address]',modate=now(),operator='$_SESSION[username]' where  user='$_POST[username]' ";
       $objDB->Execute($strSQL);
		 
	 }else{//不更换密码
		 
		  $strSQL="UPDATE hr SET email='$_POST[companyemail]',name='$_POST[name]',ext='$_POST[ext]',photo='$image_file',sex='$_POST[sex]',birthday='$_POST[birthday]',ismarry='$_POST[ismarry]',id_bm='$_POST[bm]',id_zw='$_POST[zw]',remark='$_POST[intro]',mobi='$_POST[mobiphone]',hometel='$_POST[hometel]',address='$_POST[address]',modate=now(),operator='$_SESSION[username]' where  user='$_POST[username]' ";
       $objDB->Execute($strSQL);
		 
		 
	 }


    //编辑之后生成TXT缓存列表文件
     pulltohrlisttxt();
    //end 生成TXT缓存列表文件

header('Location:staff.html'); exit();	//处理完毕跳转	
}













function pulltohrlisttxt(){
	global	 $objDB;//函数调用 声明全局变量
	global   $ispermit;//权限数组声明全局变量
	
		
	
    $arr_path="../upload/staff/".$_SESSION[username]."/".$_SESSION[randcode]."_hr.txt";//txt文件路径
	
         
		 //生成TXT缓存列表文件
   
		  $strSQL="SELECT a.id_hr,a.name,a.ext,a.operator,a.user,a.indate,a.stat,b.bmname FROM hr as a 
		  left join hr_bm as b  on a.id_bm=b.id_bm
		  WHERE  dele='1'  ";//搜索在职员工 不包括超级管理员 id_hr=1 为超级管理员
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
			  
			  
			  if($ispermit[ED]=='1'){//编辑权
				  $userstredit='<a  href=\'staffedit-'.$Userlist[$i][id_hr].'.html\'  class=\'btn custom-table-icon vd_bg-yellow\'> <i class=\'fa fa-pencil\'></i> </a>';
				  
			  }else{
				  $userstredit="";
			  }
			  
			 if($ispermit[DE]=='1'){//删除权
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
   
    //在当前登陆用户目录下生成 员工随机码的txt文件  示例 12345678_hr.txt
     file_put_contents($arr_path, $str); 

    //end 生成TXT缓存列表文件	
	
	
	
}





?>