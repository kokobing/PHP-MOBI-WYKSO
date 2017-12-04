<?php
require "../inc/config.php";
require "../inc/function.class.php";

if($_SESSION["memberid"]){//如果登陆

$uploadDir = '/upload/zuopin/';

// Set the allowed file extensions
$fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // Allowed file extensions

$verifyToken = md5('unique_salt' . $_POST['timestamp']);




if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	
	$tempFile   = $_FILES['Filedata']['tmp_name'];
	$new_file_name = new_name( $_FILES['Filedata']['name']);//文件重命名
	
	
	$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
	$targetFile = $uploadDir . $new_file_name;//原图路径+文件名

	// Validate the filetype
	$fileParts = pathinfo($_FILES['Filedata']['name']);
	if (in_array(strtolower($fileParts['extension']), $fileTypes)) {

		// Save the file
		move_uploaded_file($tempFile, $targetFile);
		
		 $exif = exif_read_data($targetFile);
         $ort = $exif['Orientation'];
		 
		 ini_set('memory_limit','100M');
		 include_once( '../inc/csmallpic.php' );//缩咯图类
	     CreateThumbnail($targetFile,$targetFile,600,0);//建缩略图
		 
		 switch($ort)
            {

                case 3: // 180 rotate left
                    flip($targetFile,$targetFile,180);
                    break;

                case 6: // 90 rotate right
                    flip($targetFile,$targetFile,-90);
                    break;

                case 8:    // 90 rotate left
                    flip($targetFile,$targetFile,90);
                    break;
            }
		 
		
		
		
		
		
		
		$strSQL="INSERT INTO newspic(id_newsinfo,id_member,opicname,indate) values ('".$_POST['newsid']."','".$_SESSION[memberid]."','$new_file_name',now())";
		$objDB->Execute($strSQL);
	
//file_put_contents('aa.txt',$strSQL); 

		$ordernumid=$objDB->getInsertID();//获取插入到数据库记录的ID号
		$strSQL="UPDATE newspic SET ordernum='$ordernumid'   where id_newspic='$ordernumid'";
		$objDB->Execute($strSQL);

		
		
		
		echo 1;

	} else {

		// The file type wasn't allowed
		echo 'Invalid file type.';

	}
}


}// if($_SESSION["UserID"]){




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