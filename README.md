
README
===========================
PHP-MOBI-WYKSO 微艺库微网站，一个WEBAPP，前端框架用的是JQM，后端PHP，数据库MYSQL，因为项目生命周期完结，并得到项目甲方的许可，整理到仓库中以做总结，代码仅供学习，禁止任何与商业有关的行为！
站点前后端未用任何MVC框架、未用任何第三方CMS系统，不存在复杂的一堆看不明白的代码，全程序均手写，非常适合PHP初学者入门。  

主要应用技术：PHP，JQM，MYSQL  

|![](https://github.com/Kokobing/PHP-MOBI-WYKSO/blob/master/home1.jpg)  |![](https://github.com/Kokobing/PHP-MOBI-WYKSO/blob/master/home2.jpg)   |![](https://github.com/Kokobing/PHP-MOBI-WYKSO/blob/master/home3.jpg)  


运行环境
===========================
 * 集成环境 XAMPP xampp-win32-5.6.31-0-VC11-installer.exe
 * 下载地址：https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/5.6.31/

安装调试
===========================
 * 导入数据库SQL  Phpmyadim中新建website数据库，并导入website.sql，注意新建数据库排序规则为utf8_general_ci  
 
 * 配置数据库连接信息 /www/inc/dbinfo.php
 
 	$db_hostname="localhost"; //服务器  
	$db_username="root"; //用户名  
	$db_password="123456"; //密码  
	$db_database="website"; //数据库  
	$db_port=3306; //port  
	$db_charset='utf8'; //port  
	
 * apache 禁止访问目录,httpd.conf中找到如下行信息，去除Indexes  
	Options `Indexes` FollowSymLinks Includes ExecCGI ------- httpd.conf去除 Indexes   
	
 * httpd.conf中找到如下行，去掉#，开启VHOST扩展  
	Include conf/extra/httpd-vhosts.conf    
   
 * php.ini 中报错提示找到error_reporting行信息，并追加  & ~E_NOTICE

   error_reporting=E_ALL & ~E_DEPRECATED & ~E_STRICT  `& ~E_NOTICE`  -----  追加 & ~E_NOTICE

 * php.ini 短标记 short_open_tag = On
 
运行设置
=========================== 
 
 *  安装盘：\xampp\apache\conf\extra\httpd-vhosts.conf 设定主机信息  追加如下
 
	\<VirtualHost *:80\>  
		ServerAdmin webmaster@dummy-host2.example.com  
		DocumentRoot "C:/xampp/htdocs/website/www"  
		ServerName www.website.com  
		ErrorLog "logs/dummy-host2.example.com-error.log"  
		CustomLog "logs/dummy-host2.example.com-access.log" common  
	\</VirtualHost\>  
	

 *  C:\Windows\System32\drivers\etc\hosts    域名重定向 追加下行
    127.0.0.1       www.website.com

 *  重启APACHE后，在浏览器中运行 http://www.website.com
****
	
|Author|Koko Lv|
|---|---
|E-mail|495105@qq.com


