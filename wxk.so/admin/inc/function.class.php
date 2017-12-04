<?php

//数据库初始连接
$objDB=new mysql($db_hostname,$db_username,$db_password,$db_database);
mysql_query("SET NAMES utf8"); 
mysql_query("set sql_mode=''"); 




//php utf-8 字符串截取 0不带后缀 1带...后缀
function cutstr($string,$length,$tag) {
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

function Replacestr($str){
	for($i=1;$i<=80;$i++){
		$str=str_replace("&nbsp;","",$str);
	}
	return $str;
}

//获取当前文件名函数
function getcurrentfilename(){
return end(explode('/',$_SERVER["PHP_SELF"]));	
}


function getcurrentdirname($getServer_type){
	  
	  if($getServer_type=="win"){
       $c_cwd_win=getcwd();$c_dir_win=explode("\\",$c_cwd_win);$c_dir_n_win=sizeof($c_dir_win)-1;//获取当前WIN目录		
       if($c_dir_win!=''){$c_dir=$c_dir_win[$c_dir_n_win];}//目录名	
      }

       if($getServer_type=="linux"){
         $c_cwd_linux=getcwd();$c_dir_linux=explode("/",$c_cwd_linux);$c_dir_n_linux=sizeof($c_dir_linux)-1;//获取当前LINUX目录
         if($c_dir_linux!=''){$c_dir=$c_dir_linux[$c_dir_n_linux];}
      }
	  
	  return 	$c_dir;
	
}


//指定路径的目录存在几个文件
function DirFileNum( $path ) 
{ 
$fileNum=0;
 if ($handle = @opendir($path))
            {
                while (false !== ($file = readdir($handle)))//读取文件夹里的文件
                {
                   if($file!="."&&$file!="..")
                   {
                         $file_array[$i]["filename"]=$file;
                         $fileNum++;
                   }
 
                }
                closedir($handle);//关闭文件夹
 }

return $fileNum;

}


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


// 刷新自己最后的活动时间
function refreshtime(){
    global	$objDB;//函数调用 声明全局变量
	  $strSQL = "UPDATE online SET use_time=CURRENT_TIMESTAMP WHERE user = '$_SESSION[username]'";
	  $objDB->Execute($strSQL);
}//end refreshtime


//统计人事系统 员工帐户数量
function  HrcountSum(){
global	 $objDB;//函数调用 声明全局变量	
$strSQLNum = "SELECT COUNT(*) as num from hr ";  
$objDB->Execute($strSQLNum);
$arrNum = $objDB->fields();	
return $arrNum[num];	
}




?>