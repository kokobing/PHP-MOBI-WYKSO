<?php 

/*

ajax_getsubdirselect.php   获取 下级分类 并组装成字符串 回填到指定的ID HTML里

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
$c_url='/news/newsmanage.html';//当前AJAX文件的 父级文件 对应出当前AJAX文件的权限  注意：菜单的URL文件名更换 一旦生成之后 保持固定 不要随意更换 更换后 相应修改此处
require "../../inc/ajax_permit.php";


if( isset($_SESSION[username]) && $ajaxispermit[ED]){// 只有登陆用户才可以删除 

     $arr['SelectNum']=$_POST[selectNum]+1;//$_POST[selectNum] 下一级下拉列表的值
	
	   $strSQL="SELECT id_newsdir,name FROM newsdir where fatherid='".$_POST[dirid]."'  order by ordernum asc";
       $objDB->Execute($strSQL);
       $arrnewsdirlIST=$objDB->GetRows();
	   
	   
	   if(sizeof($arrnewsdirlIST)!=0){
		   
	         $str.=' <select  class="width-30"  id="C_dir'.$arr['SelectNum'].'" name="C_dir'.$arr['SelectNum'].'" data-SelectNUM="'.$arr['SelectNum'].'" placeholder="信息类别" onChange="getsubdir(\'#C_dir'.$arr['SelectNum'].'\',\'#newsdirselectbox\');" >';
             $str.=' <option value="0" >信息类别</option>';
	   
          for($i=0;$i<sizeof($arrnewsdirlIST);$i++){
                 $str.='<option value="'.$arrnewsdirlIST[$i][id_newsdir].'" >'.$arrnewsdirlIST[$i][name].'</option>';
                }
                  $str.=' </select>';
				  
	            $arr['Dirhtml']=$str;
     
	   }else{
		   
		        $arr['Dirhtml']='0';
	   }
	 
	  
	$myjson= json_encode($arr);
	echo $myjson;


}







?>

