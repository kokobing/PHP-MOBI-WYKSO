<?php
require "../inc/config.php";
require_once("../inc/navipage.php");//分页


//编辑列表动作不存在
if(!isset($_GET[editlist]) ){

$intRows = 20;//每页20行 
$strSQLNum = "SELECT COUNT(*) as num FROM member  ";   
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];
$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);
$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 
$strSQL = "SELECT * FROM member order by id_member desc " ;//搜索会员
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$Memberlist=$objDB->getrows();
$MemberlistNum=sizeof($Memberlist);


}



//编辑列表动作 存在
if(isset($_GET[editlist])){
	
	//抽取编辑人员的姓名
	$strSQL="SELECT * FROM member WHERE  id_member='$_GET[editlist]' ";//需要编辑的员工
    $objDB->Execute($strSQL);
    $Memberinfo=$objDB->fields();

}




if($_GET[fun]=='edit' && $ispermit[ED] ){
	
	   //是否上传员工头像
      if ( is_uploaded_file( $_FILES['staffpic']['tmp_name'] ) ){
	  
          $image_file=upload_file("staffpic","../../upload/pics/",mktime());//上传图片
		  @unlink('../../upload/pics/'.$_POST[oldphoto]);
		
		}else{
		  $image_file=$_POST[oldphoto];
		}
		
	  //是否更换新密码	
	 if($_POST[password]!=''){
	 
	   $pass_m=$_POST[password];
		 
       $strSQL="UPDATE member SET email='$_POST[companyemail]',name='$_POST[name]',password='$pass_m',photo='$image_file',sex='$_POST[sex]',birthday='$_POST[birthday]',mobi='$_POST[mobiphone]',address='$_POST[address]',modate=now() where  user='$_POST[username]' ";
       $objDB->Execute($strSQL);
		 
	 }else{//不更换密码
		 
	  $strSQL="UPDATE member SET email='$_POST[companyemail]',name='$_POST[name]',photo='$image_file',sex='$_POST[sex]',birthday='$_POST[birthday]',mobi='$_POST[mobiphone]',address='$_POST[address]',modate=now() where  user='$_POST[username]' ";
       $objDB->Execute($strSQL);
		 
		 
	 }

    //header('Location:membereditlist-'.$current_member_id.'.html'); exit();//跳转当前页
   header('Location:'.$_POST[backurl]); exit();	//处理完毕跳转上一页	
}





?>