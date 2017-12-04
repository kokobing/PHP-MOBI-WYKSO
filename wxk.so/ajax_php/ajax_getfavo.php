<?php
require "../inc/config.php";
require "../inc/function.class.php";

//file_put_contents('aa.txt', '1111'); 

if(isset($_SESSION[memberid])){

$arr="";

$page=$_REQUEST[pagenum];//get page
$start=$page*5;// 1*10  2*10


//取出我的收藏作品的ID
$strSQL = "select id_newsinfo as newsid  from favourite   where id_member='$_SESSION[memberid]' " ;
$objDB->Execute($strSQL);
$allSc=$objDB->GetRows();
$allScNum=sizeof($allSc);

for($i=0;$i<$allScNum;$i++){
	if($i!=$allScNum-1){
	  $allScid.=$allSc[$i][newsid].',';
	}else{
	  $allScid.=$allSc[$i][newsid];	
	}
}




$strSQL = "SELECT a.*,b.name as newsdirname,c.name as username,c.photo FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join member as c on a.id_member=c.id_member
		   where  c.photo!=''  and a.id_newsinfo in ($allScid)
           order by a.ordernum desc  limit $start,5" ;

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
 
 
if(isset($_SESSION[memberid])){
	//文章是否收藏
	$strSQL = "select id_favourite as id from favourite  where id_member='$_SESSION[memberid]' && id_newsinfo='".$allNewsInfo[$i][id_newsinfo]."' " ;
	$objDB->Execute($strSQL);
	$ismyfavourite=$objDB->fields();
    if($ismyfavourite[id]!=''){$favostyle='style="color:#f00;"'; }else{ $favostyle='style="color:#ccc;"'; }
	
	
  $strfavo='<div class="favoboxwrap"><a href="javascript:void(0);" id="favourite'.$allNewsInfo[$i][id_newsinfo].'" '.$favostyle.'  onClick="favourite('.$allNewsInfo[$i][id_newsinfo].')"><i class="fa fa-heart"></i></a></div>';
}else{
  $strfavo='';
}


$arr[info].='
<div class="messagebox"><div class="innerleftimg"><img src="/upload/pics/'.$allNewsInfo[$i][photo].'" width="40" height="40" /></div><div class="innercontent"><div><a href="#">'.$allNewsInfo[$i][username].'</a></div><div>'.$allNewsInfo[$i][title].'</div><div class="innercontentimgs"><ul id="Galleryfavo'.($start+$i).'" class="gallery">'.$strpic.'</ul><div style="clear:both"></div></div><div  style="clear:both">'.$allNewsInfo[$i][intro].'</div><div style="clear:both">'.$allNewsInfo[$i][newsdate].'</div>'.$strfavo.'</div><div style="clear:both"></div></div>';

if(sizeof($artzuopinpic)!=0){
	if($i==$allNewsInfoNum-1){
	   $arr[picshowid].='#Galleryfavo'.($start+$i)." a";
	}else{
	   $arr[picshowid].='#Galleryfavo'.($start+$i)." a,";	
	}
}

}   

$arr[pagenum]=$page+1;

$myjson= json_encode($arr);
echo $myjson;

}

?>
