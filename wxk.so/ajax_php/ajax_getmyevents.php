<?php
require "../inc/config.php";
require "../inc/function.class.php";

//file_put_contents('aa.txt', $memberid); 

$arr="";

$page=$_REQUEST[pagenum];//get page
$start=$page*5;// 1*10  2*10
		   

//活动 10
$strSQL = "SELECT a.*,b.name as newsdirname,c.name as username,c.photo FROM newsinfo as a
           left join newsdir as b on a.id_newsdir=b.id_newsdir
		   left join member as c on a.id_member=c.id_member
		   where  find_in_set('10',a.dirtree)  and c.photo!='' and a.id_member=$_SESSION[memberid]
           order by a.ordernum desc  limit $start,5" ;
		   
$objDB->Execute($strSQL);
$allNewsInfo=$objDB->getrows();
$allNewsInfoNum=sizeof($allNewsInfo);





$arr[info]='';
for($i=0;$i<$allNewsInfoNum;$i++){
	
//查找某个活动的第一张图片
$strSQL = "select opicname from newspic where id_newsinfo='".$allNewsInfo[$i][id_newsinfo]."' order by ordernum desc limit 1" ;
$objDB->Execute($strSQL);
$arteventpic=$objDB->fields();

$arr[info].='
    <li><a href="editevent-'.$allNewsInfo[$i][id_newsinfo].'.html">
    <img src="/upload/event/'.$arteventpic[opicname].'" width="50" height="50">
    <h2>'.$allNewsInfo[$i][title].'</h2>
    <p>'.$allNewsInfo[$i][intro].'</p></a>
    </li>

';




}   

$arr[pagenum]=$page+1;

$myjson= json_encode($arr);
echo $myjson;

?>
