<?php
require "../inc/config.php";
require "../inc/function.class.php";

//file_put_contents('aa.txt', '1111'); 

$arr="";

$page=$_REQUEST[pagenum];//get page
$start=$page*5;// 1*10  2*10


$strSQL = "SELECT a.*,b.name as newsdirname,c.name as username,c.photo,c.id_member,c.level,c.status  FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join member as c on a.id_member=c.id_member
		   where c.photo!=''
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
 
 



//当前会员属性
if($allNewsInfo[$i][level]=='2' && $allNewsInfo[$i][status]=='1'){
 $c_levelstr='<div class="c_level">艺术家</div>';
}elseif($allNewsInfo[$i][level]=='3' && $allNewsInfo[$i][status]=='1'){
 $c_levelstr='<div class="c_level">机构</div>';
}else{
 $c_levelstr='<div class="c_level">个人</div>';
}


$arr[info].='
<div class="messagebox"><div class="innerleftimg"><a href="/artsinfo-'.$allNewsInfo[$i][id_member].'.html"><img src="/upload/pics/'.$allNewsInfo[$i][photo].'" width="40" height="40" /></a>'.$c_levelstr.'</div><div class="innercontent"><div><a href="#">'.$allNewsInfo[$i][username].'</a></div><div>'.$allNewsInfo[$i][title].'</div><div class="innercontentimgs"><ul id="Gallery'.($start+$i).'" class="gallery">'.$strpic.'</ul><div style="clear:both"></div></div><div  style="clear:both">'.$allNewsInfo[$i][intro].'</div><div style="clear:both">'.$allNewsInfo[$i][newsdate].'</div></div><div style="clear:both"></div></div>';

if(sizeof($artzuopinpic)!=0){
	if($i==$allNewsInfoNum-1){
	   $arr[picshowid].='#Gallery'.($start+$i)." a";
	}else{
	   $arr[picshowid].='#Gallery'.($start+$i)." a,";	
	}
}

}   

$arr[pagenum]=$page+1;

$myjson= json_encode($arr);
echo $myjson;

?>
