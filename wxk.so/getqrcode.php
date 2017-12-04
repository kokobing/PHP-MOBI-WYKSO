<?
require "inc/phpqrcode.php";//PHP 二维码类


$qrcodeurl=$_REQUEST[url];//路径

//生成图片 size=1，2，3，4图片小大 ECC图片密度L（低度） M（中等） Q（较好） H(高密度) 二维码越小需要密码越高
QRcode::png($qrcodeurl, false, M, 4);

?>