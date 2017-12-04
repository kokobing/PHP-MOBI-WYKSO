<?php
require "../inc/config.php";
require "../inc/function.class.php";

//file_put_contents('aa.txt', $memberid); 

$arr="";

$page=$_REQUEST[pagenum];//get page
$start=$page*5;// 1*10  2*10
		   

//作品 11
$strSQL = "SELECT a.*,b.name as newsdirname,c.name as username,c.photo FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join member as c on a.id_member=c.id_member
		   where  c.photo!='' and a.id_member=$_SESSION[memberid]
           order by a.modate desc  limit $start,5" ;
		   
$objDB->Execute($strSQL);
$allNewsInfo=$objDB->getrows();
$allNewsInfoNum=sizeof($allNewsInfo);





$arr[info]='';
$arr[picshowid]='';
for($i=0;$i<$allNewsInfoNum;$i++){
	
	//查找特定艺术家某个作品的图片
$strSQL = "select opicname from newspic where id_newsinfo='".$allNewsInfo[$i][id_newsinfo]."' order by ordernum asc " ;
$objDB->Execute($strSQL);
$artzuopinpic=$objDB->Getrows();

$strpic='';
for($j=0;$j<sizeof($artzuopinpic);$j++){
	 $strpic.=' <li><a href="/upload/zuopin/'.$artzuopinpic[$j][opicname].'"><img src="/upload/zuopin/'.$artzuopinpic[$j][opicname].'" alt="'.$allNewsInfo[$i][title].'" /></a></li>';
      }


$arr[info].='<div class="messagebox" style="position:relative"><div class="innercontent100"><div><a href="editzuopin-'.$allNewsInfo[$i][id_newsinfo].'.html">'.$allNewsInfo[$i][title].'</a></div><div class="innercontentimgs"><ul id="MyworksGallery'.($start+$i).'" class="gallery">'.$strpic.'</ul><div style="clear:both"></div></div><div style="clear:both">'.$allNewsInfo[$i][newsdate].'</div></div><div style="clear:both"></div></div>';




if(sizeof($artzuopinpic)!=0){
	if($i==$allNewsInfoNum-1){
	   $arr[picshowid].='#MyworksGallery'.($start+$i)." a";
	}else{
	   $arr[picshowid].='#MyworksGallery'.($start+$i)." a,";	
	}
}

}   

$arr[pagenum]=$page+1;

$myjson= json_encode($arr);
echo $myjson;

?>
