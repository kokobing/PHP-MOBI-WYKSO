<?php

$pagerandcode=rand(1,999999);//ajax加载页面时用于随机生成ID号，用于不重复的ID

//数据库初始连接
$objDB=new mysql($db_hostname,$db_username,$db_password,$db_database);
mysql_query("SET NAMES utf8"); 
mysql_query("set sql_mode=''"); 

////////////////////////////////////////////////////////验证COOKIE登陆/////////////////////////////////////////////////////////////////////////////




//如果cookie值存在 并且未登陆  则自动登陆
if ( isset($_COOKIE["cookie_user"]) && isset($_COOKIE["cookie_pass"]) && !isset($_SESSION[memberid]) ){
	
	$request_username = $_COOKIE["cookie_user"];//用户名
    $request_password = $_COOKIE["cookie_pass"];//密码
	
	$strSQL = "select user,id_member,name,status,level,memid  from member where user='$request_username' && password='$request_password' " ;
	$objDB->Execute($strSQL);
	$userinfo=$objDB->fields();

	    if(count($userinfo)!='1'){
						 
			$_SESSION[memberuser]=$userinfo[user];//用户名
			
			$_SESSION[memberid]=$userinfo[id_member];//用户ID
			$_SESSION[memid13]=$userinfo[memid];//用户13位识别码
			
			
			$_SESSION[membername]=$userinfo[name];//用户姓名
			$_SESSION[memberstatus]=$userinfo[status];//用户是否激活认证 1激活 0未激活
			$_SESSION[memberlevel]=$userinfo[level];//用户类型  1个人  2艺术家  3机构
			
			
		}
		
		
	
}

////////////////////////////////////////////////////////系统相关/////////////////////////////////////////////////////////////////////////////////


//获取当前文件名函数
function getcurrentfilename(){
$getfilename=explode('.php',$_SERVER["PHP_SELF"]);	
return end(explode('/',$getfilename[0]));	
}




////////////////////////////////////////////////////////字符处理/////////////////////////////////////////////////////////////////////////////////



function cutstr($string,$length,$tag) {//php utf-8 字符串截取 0不带后缀 1带...后缀
        preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $info);  
        for($i=0; $i<count($info[0]); $i++) {
                $wordscut .= $info[0][$i];
                $j = ord($info[0][$i]) > 127 ? $j + 2 : $j + 1;
                if ($j > $length - 3) {
                        if($tag==0){
						    return $wordscut;
						}elseif($tag==1)
						{
						    return $wordscut."......";
						}
                }
        }
        return join('', $info[0]);
}



/////////////////////////////////////////////////////////////图片相关//////////////////////////////////////////////////////////////////////


//图片文件上传
function upload_file($uploadfile,$savepath,$file_name){
	$upload_file=$_FILES[$uploadfile]['tmp_name'];
	$upload_file_name=$_FILES[$uploadfile]['name'];
	$upload_file_size=$_FILES[$uploadfile]['size'];
	if($upload_file_name==null) return null;
	$name=$file_name;
	$typeA=explode(".",basename($upload_file_name));
	$type=".".$typeA[count($typeA)-1];
	if($upload_file_size>3000000){
/*		print("<script> alert('上传的文件大小超过3M');</script>");
		print("<script> window.history.back();</script>");
*/		exit;
	}
	if(strtoupper($type)!=".JPEG"&&strtoupper($type)!=".JPG"&&strtoupper($type)!=".GIF"){
/*		print("<script> alert('上传文件类型不正确');</script>");
		print("<script> window.history.go(-1);</script>");
*/		exit;
	}
	if(!move_uploaded_file($upload_file,$savepath.$name.$type)){
/*		print("<script> alert('文件上传失败');</script>");
		print("<script> window.history.back();</script>");
*/		exit;
	}
	return $name.$type;
}


//旋转图片
function  flip($filename,$src,$degrees = 90)
 {
  //读取图片
  $data = @getimagesize($filename);
  if($data==false)return false;
  //读取旧图片
  switch ($data[2]) {
   case 1:
    $src_f = imagecreatefromgif($filename);break;
   case 2:
    $src_f = imagecreatefromjpeg($filename);break;
   case 3:
    $src_f = imagecreatefrompng($filename);break;
  } 
  if($src_f=="")return false;
  $rotate = @imagerotate($src_f, $degrees,0);
  if(!imagejpeg($rotate,$src,100))return false;
  @imagedestroy($rotate);
  return true;
 }


////////////////////////////////////////////////////////////////////////////////////////////////////////////////////




?>