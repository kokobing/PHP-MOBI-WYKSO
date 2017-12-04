<?php
require "../inc/config.php";
require "../inc/function.class.php";

//file_put_contents('aa.txt', '1111'); 

$arr="";

$page=$_REQUEST[pagenum];//get page
$start=$page*5;// 1*10  2*10


//抽出艺术家 level=2 
$strSQL = "select id_member,memid,name,intro,photo from member  where status='1' and level='2' order by id_member desc limit $start,5" ;
$objDB->Execute($strSQL);
$arrartlist=$objDB->GetRows();


$arr[info]='';
for($i=0;$i<sizeof($arrartlist);$i++){

$arr[info].='<li>
            <a href="artsinfo-'.$arrartlist[$i][memid].'.html">
                <img src="/upload/pics/'.$arrartlist[$i][photo].'">
                <h2>'.$arrartlist[$i][name].'</h2>
                <p>'.$arrartlist[$i][intro].'</p>
            </a>
        </li>';




}   

$arr[pagenum]=$page+1;

$myjson= json_encode($arr);
echo $myjson;

?>
