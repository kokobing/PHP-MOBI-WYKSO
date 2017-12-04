<?php
require "../inc/config.php";


//语言分类
$strSQL="SELECT * FROM lang order by id_lang asc ";
$objDB->Execute($strSQL);
$LangList=$objDB->getrows();
$LangListNum=sizeof($LangList);	


if(!isset($_GET[fatherid]) && !isset($_GET[fun]) && !isset($_GET[editlist])){//如果动作都不存在 列表一级分类
//一级分类
$strSQL="SELECT * FROM newsdir WHERE level='1' and dele='1' order by ordernum desc";
$objDB->Execute($strSQL);
$arrnewsdir1=$objDB->GetRows();
$arrnewsdir1Num=sizeof($arrnewsdir1);
}





if($_GET[fun]=='in1'  &&  $ispermit[AD] ){//一级分类入库


  $strSQL="INSERT INTO newsdir(id_lang,name,title,intro,icon,level) 
           VALUES('".$_POST[catalogdirlang]."','".$_POST[catalogdirname]."','".$_POST[catalogdirtitle]."','".$_POST[catalogdirintro]."','".$_POST[catalogdiricon]."','1') ";
  $objDB->Execute($strSQL);//一级菜单名称入库
  
  $catalogid = $objDB->getInsertID();//获取刚入库记录的ID
  $strSQL="update newsdir set ordernum='".$catalogid."' where id_newsdir='".$catalogid."'";
  $objDB->Execute($strSQL);//更改入库记录的ORDER顺序
  
  
       //是否上传一级目录头像
   if ( is_uploaded_file( $_FILES['UploadPic']['tmp_name'] ) ){
	   
       $image_file=upload_file("UploadPic","../upload/pics/",mktime());//上传图片
	   
	   $strSQL="INSERT INTO newsdir_pic(id_newsdir,pic) 
                VALUES('".$catalogid."','".$image_file."') ";
       $objDB->Execute($strSQL);//图片入库
	   
	   $pid = $objDB->getInsertID();//获取刚入库记录的ID
       $strSQL="update newsdir_pic set ordernum='".$pid."' where id_newsdirpic='".$pid."'";
       $objDB->Execute($strSQL);//更改入库记录的ORDER顺序
	   
    }
  
  

  


  header('Location:newsdir.html'); exit();	//处理完毕跳转上一页	

}





if(isset($_GET[fatherid]) && $ispermit[AD] ){//添加子分类时列表当前 父分类的信息
	
$strSQL="SELECT * FROM newsdir WHERE  id_newsdir='".$_GET[fatherid]."'";
$objDB->Execute($strSQL);
$Curr_fdirinfo=$objDB->fields();
	
}



if($_GET[fun]=='insub'  &&  $ispermit[AD] ){//下级分类入库    $_POST[fatherid]当前分类的FATHERID   $_POST[fatherlevel] 父级目录等级

   $current_level=$_POST[fatherlevel]+1;//当前目录的等级为父级目录+1

  $strSQL="INSERT INTO newsdir(id_lang,name,title,intro,icon,level,fatherid) 
           VALUES('".$_POST[catalogdirlang]."','".$_POST[catalogdirname]."','".$_POST[catalogdirtitle]."','".$_POST[catalogdirintro]."','".$_POST[catalogdiricon]."','".$current_level."','".$_POST[fatherid]."') ";
  $objDB->Execute($strSQL);//下级菜单入库
  
  $catalogid = $objDB->getInsertID();//获取刚入库记录的ID
  $strSQL="update newsdir set ordernum='".$catalogid."' where id_newsdir='".$catalogid."'";
  $objDB->Execute($strSQL);//更改入库记录的ORDER顺序
  
  
       //是否上传一级目录头像
   if ( is_uploaded_file( $_FILES['UploadPic']['tmp_name'] ) ){
	   
       $image_file=upload_file("UploadPic","../upload/pics/",mktime());//上传图片
	   
	   $strSQL="INSERT INTO newsdir_pic(id_newsdir,pic) 
                VALUES('".$catalogid."','".$image_file."') ";
       $objDB->Execute($strSQL);//图片入库
	   
	   $pid = $objDB->getInsertID();//获取刚入库记录的ID
       $strSQL="update newsdir_pic set ordernum='".$pid."' where id_newsdirpic='".$pid."'";
       $objDB->Execute($strSQL);//更改入库记录的ORDER顺序
	   
    }




 header('Location:newsdiraddsubdir-'.$_POST[fatherid].'.html'); exit();//跳转当前页
}






//编辑列表动作 存在
if(isset($_GET[editlist])){
	
	
	//抽取编辑的分类信息
	$strSQL="SELECT * FROM newsdir WHERE  id_newsdir='$_GET[editlist]' ";
    $objDB->Execute($strSQL);
    $CatalogInfo=$objDB->fields();

}


//编辑提交
if($_GET[fun]=='edit' && $ispermit[ED] ){

$strSQL="UPDATE newsdir SET  
         id_lang='$_POST[catalogdirlang]',
		 name='$_POST[catalogdirname]',
		 title='$_POST[catalogdirtitle]',
		 intro='$_POST[catalogdirintro]',
		 icon='$_POST[catalogdiricon]'
		 WHERE  id_newsdir='$_POST[catalogid]' ";
$objDB->Execute($strSQL);

 header('Location:newsdireditlist-'.$_POST[catalogid].'.html'); exit();//跳转当前页

}












?>