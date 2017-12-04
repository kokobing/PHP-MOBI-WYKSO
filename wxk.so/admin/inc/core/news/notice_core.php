<?php
require "../inc/config.php";
require_once("../inc/navipage.php");//分页

//语言分类
$strSQL="SELECT * FROM lang order by id_lang asc ";
$objDB->Execute($strSQL);
$LangList=$objDB->getrows();
$LangListNum=sizeof($LangList);	

//搜索存在
if(isset($_SESSION[notice_keywords])){
	$search_keywords=" and a.title like '%".$_SESSION[notice_keywords]."%' ";
}


//编辑列表动作不存在
if(!isset($_GET[editlist])){
	
$intRows = 5;//每页5行 
if($ispermit[GL]){
$strSQLNum = "SELECT COUNT(*) as num FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join hr as c on a.id_hr=c.id_hr
		   where find_in_set('25',a.dirtree) $search_keywords";   
}else{
$strSQLNum = "SELECT COUNT(*) as num FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join hr as c on a.id_hr=c.id_hr
		   where a.id_hr='$_SESSION[userid]' and find_in_set('25',a.dirtree) $search_keywords";   
}
$rs = $objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();
$intTotalNum=$arrNum["num"];
$objPage = new PageNav($intCurPage,$intTotalNum,$intRows);
$objPage->setvar($arrParam);
$objPage->init_page($intRows ,$intTotalNum);
$strNavigate = $objPage->output(1);
$intStartNum=$objPage->StartNum(); 

if($ispermit[GL]){
$strSQL = "SELECT a.*,b.name as newsdirname,c.name as username FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join hr as c on a.id_hr=c.id_hr
		   where find_in_set('25',a.dirtree) $search_keywords
           order by a.ordernum desc " ;//搜索会员
}else{
$strSQL = "SELECT a.*,b.name as newsdirname,c.name as username FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join hr as c on a.id_hr=c.id_hr
		   where a.id_hr='$_SESSION[userid]' and find_in_set('25',a.dirtree) $search_keywords
           order by a.ordernum desc " ;//搜索会员
}
$objDB->SelectLimit($strSQL,$intRows,$intStartNum);
$Newslist=$objDB->getrows();
$NewslistNum=sizeof($Newslist);


}





//编辑列表动作 存在
if(isset($_GET[editlist])){
	
	
	//抽取编辑的分类信息
	$strSQL="SELECT * FROM newsinfo WHERE  id_newsinfo='$_GET[editlist]' ";
    $objDB->Execute($strSQL);
    $OneNewsInfo=$objDB->fields();

}


//编辑提交
if(isset($_GET[edit]) && $ispermit[ED] ){
	
	
//组装目录树
for($i=0;$i<=$_POST[selectNum];$i++){
  if($_POST['C_dir'.$i]!=0){	
	 $dirtree.=$_POST['C_dir'.$i];
	 if($i!=$_POST[selectNum]){$dirtree.=',';}
   }else{
	 $dirtree= substr($dirtree,0,strlen($dirtree)-1);  
   }
   $last_newsdir=explode(',',$dirtree);//折分目录数 $last_newsdir[sizeof($last_newsdir)-1] 最后一个目录ID
}
$last_newsdir=$last_newsdir[sizeof($last_newsdir)-1];

$strSQL="UPDATE newsinfo SET  
         id_lang='$_POST[catalogdirlang]',
		 id_newsdir='$last_newsdir',
		 dirtree='$dirtree',
		 title='$_POST[newstitle]',
		 intro='$_POST[newsintro]',
		 remark='$_POST[remark]',
		 tag='$_POST[input_tags]',
		 url='$_POST[newsurl]',
		 content='$_POST[content]'
		 
		 WHERE  id_newsinfo='$_GET[edit]' ";
$objDB->Execute($strSQL);

 header('Location:noticeeditlist-'.$_GET[edit].'.html'); exit();//跳转当前页

}




if($_GET[fun]=='add' && $ispermit[AD] ){
	
	$strSQL="INSERT INTO newsinfo(id_newsdir,dirtree,title,intro,newsdate,id_hr) 
	        values('25','25','新增空白信息','新增空白信息简介',now(),'".$_SESSION[userid]."')";
      $objDB->Execute($strSQL);

	$ordernumid=$objDB->getInsertID();//获取插入到数据库记录的ID号
	$strSQL="UPDATE newsinfo SET ordernum='$ordernumid'   where id_newsinfo='$ordernumid'";
	$objDB->Execute($strSQL);

   header('Location:notice.html'); exit();	//处理完毕跳转当前页	
}








?>