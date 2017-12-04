<?php
require "../inc/config.php";
require "../inc/function.class.php";

//file_put_contents('aa.txt', $memberid); 
if(isset($_SESSION[memberid])){

$arr="";

$page=$_REQUEST[pagenum];//get page
$start=$page*5;// 1*10  2*10



//取出当前登陆用户的所有关注
$strSQL = "select gzid from guanzhu  where id_member='$_SESSION[memberid]' " ;
$objDB->Execute($strSQL);
$allgz=$objDB->GetRows();
$allgzNum=sizeof($allgz);

for($i=0;$i<$allgzNum;$i++){
	if($i!=$allgzNum-1){
	  $allgzid.=$allgz[$i][gzid].',';
	}else{
	  $allgzid.=$allgz[$i][gzid];	
	}
}


		   

//作品 活动
		   
$strSQL = "SELECT a.id_newsinfo as cid,a.title,a.intro,a.workdate,a.modate as orderdate,b.name as newsdirname,c.name as username,c.photo,c.id_member FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join member as c on a.id_member=c.id_member
		   where c.photo!='' and c.id_member in ($allgzid)

           UNION
		   
		   SELECT a.id_eventinfo as cid,a.title,a.intro,a.workdate,a.modate as orderdate,b.name as newsdirname,c.name as username,c.photo,c.id_member FROM eventinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join member as c on a.id_member=c.id_member
		   where c.photo!='' and c.id_member in ($allgzid)
		   
           order by orderdate desc  limit $start,5" ;		   
		   
$objDB->Execute($strSQL);
$allNewsInfo=$objDB->getrows();
$allNewsInfoNum=sizeof($allNewsInfo);



$arr[info]='';
$arr[picshowid]='';
for($i=0;$i<$allNewsInfoNum;$i++){
	
	//查找特定艺术家某个作品的图片
$strSQL = "select opicname from newspic where id_newsinfo='".$allNewsInfo[$i][cid]."' order by ordernum asc " ;
$objDB->Execute($strSQL);
$artzuopinpic=$objDB->Getrows();

$strpic='';
for($j=0;$j<sizeof($artzuopinpic);$j++){
	 $strpic.=' <li><a href="/upload/zuopin/'.$artzuopinpic[$j][opicname].'"><img src="/upload/zuopin/'.$artzuopinpic[$j][opicname].'" alt="'.$allNewsInfo[$i][title].'" /></a></li>';
      }


$arr[info].='
<div class="messagebox"><div class="innerleftimg"><img src="/upload/pics/'.$allNewsInfo[$i][photo].'" width="40" height="40" /></div><div class="innercontent"><div><a href="#">'.$allNewsInfo[$i][username]."(".$allNewsInfo[$i][newsdirname].")".'</a></div><div>'.$allNewsInfo[$i][title].'</div><div class="innercontentimgs"><ul id="myart_Gallery'.($start+$i).'" class="gallery">'.$strpic.'</ul><div style="clear:both"></div></div><div style="clear:both">'.$allNewsInfo[$i][workdate].'</div></div><div style="clear:both"></div></div>';


if(sizeof($artzuopinpic)!=0){
	if($i==$allNewsInfoNum-1){
	   $arr[picshowid].='#myart_Gallery'.($start+$i)." a";
	}else{
	   $arr[picshowid].='#myart_Gallery'.($start+$i)." a,";	
	}
}

}   

$arr[pagenum]=$page+1;

$myjson= json_encode($arr);
echo $myjson;

}

?>
