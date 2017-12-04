<?php

/*

ajax_upload_layout.php   区块管理 上传图片

         目前每个AJAX页面会产生6个 个人权限  用于判断用户当前权限
	     $ajaxispermit[DP]='1'; //DISPLAY             0  1
		 $ajaxispermit[AD]='1'; //ADD                 0  1
		 $ajaxispermit[ED]='1'; //EDIT                0  1
		 $ajaxispermit[DE]='1'; //DEL                 0  1
		 $ajaxispermit[GL]='1'; //GROUP LIST          0  1
		 $ajaxispermit[GE]='1'; //GROUP EDIT          0  1
		 $ajaxispermit[GD]='1'; //GROUP DEL           0  1
		 
		 



*/

require "../../inc/ajax_config.php";
$c_url='/siteset/layout.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";


if( isset($_SESSION[username]) && $ajaxispermit[ED]){// 只有登陆用户才可以 并且拥有编辑权 

$uploadDir = $_POST['uploadPath'];//图片上传路径

$fileTypes = explode(',',$_POST['fileType']); // 允许上传的文件

$verifyToken = md5('command_eable_say'.$_POST['timestamp']);//令牌校验

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {//如果上传不为空 并且令牌相等
	
	$tempFile   = $_FILES['Filedata']['tmp_name'];
	$new_file_name = new_name( $_FILES['Filedata']['name']);//文件重命名
	$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
	$targetFile = $uploadDir . $new_file_name;//原图路径+文件名
	

	// 检查扩展名正确性
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	if (in_array(strtolower($fileParts['extension']), $fileTypes)) {//扩展名正确匹配

		// 保存文件至目录
		move_uploaded_file($tempFile, $targetFile);
		
		
		
		//文件名入库
	     $strSQL="INSERT INTO layoutpic(id_layout,opicname) values ('".$_POST[Tableid]."','".$new_file_name."')";
		 $objDB->Execute($strSQL);
		 
		 $pid = $objDB->getInsertID();//获取刚入库记录的ID
         $strSQL="update layoutpic set ordernum='".$pid."' where id_layoutpic='".$pid."'";
         $objDB->Execute($strSQL);//更改入库记录的ORDER顺序
		
		
		
		
		
		//回填HTML
		echo '<a href="'.$_POST['uploadPath'].$new_file_name.'" data-rel="prettyPhoto['.$_POST[Tableid].']" data-img_id="'.$pid.'" title="" ><img src="'.$_POST['uploadPath'].$new_file_name.'" width="50" height="50"></a>';
		

	} else {

		// 无效的扩展名
		echo 'Invalid file type.';

	}
}




}



function new_name($filename){
	$ext = pathinfo($filename);
	$ext = strtolower($ext['extension']);
	if ($ext=='jpg'||$ext=='gif'||$ext=='png') 
	{
	$name = basename($filename,$ext); 
	$name = md5($name.mktime().rand(10000,99999)).'.'.$ext;
	return $name;
	}
	else
	{
	return;
	}
 }


?>