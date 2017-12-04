-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主机: localhost
-- 生成日期: 2017 年 12 月 04 日 06:08
-- 服务器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 数据库: `wyk`
-- 

-- --------------------------------------------------------

-- 
-- 表的结构 `backmenu`
-- 

CREATE TABLE `backmenu` (
  `id_backmenu` int(11) NOT NULL auto_increment,
  `name` varchar(250) NOT NULL,
  `url` varchar(100) NOT NULL,
  `fatherid` int(11) NOT NULL,
  `level` int(1) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `pic` varchar(250) NOT NULL,
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_backmenu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

-- 
-- 导出表中的数据 `backmenu`
-- 

INSERT INTO `backmenu` VALUES (1, '站点管理', 'siteset', 0, 1, 'home', '', 29);
INSERT INTO `backmenu` VALUES (2, '站点设定', '/siteset/siteset.html', 1, 2, 'home', '', 2);
INSERT INTO `backmenu` VALUES (3, '区块管理', '/siteset/layout.html', 1, 2, 'file-archive-o', '', 3);
INSERT INTO `backmenu` VALUES (4, '版面管理', '/siteset/pageset.html', 1, 2, 'file-powerpoint-o', '', 4);
INSERT INTO `backmenu` VALUES (9, '信息系统', 'news', 0, 1, 'envelope-square', '', 17);
INSERT INTO `backmenu` VALUES (10, '信息分类', '/news/newsdir.html', 9, 2, 'paper-plane-o ', '', 10);
INSERT INTO `backmenu` VALUES (11, '信息管理', '/news/newsmanage.html', 9, 2, 'pencil-square-o', '', 11);
INSERT INTO `backmenu` VALUES (12, '信息回收站', '/news/newsrecycle.html', 9, 2, 'trash-o', '', 12);
INSERT INTO `backmenu` VALUES (13, '人事系统', 'hr', 0, 1, 'group', '', 41);
INSERT INTO `backmenu` VALUES (14, '员工档案', '/hr/staff.html', 13, 2, 'user', '', 14);
INSERT INTO `backmenu` VALUES (15, '权限系统', 'permit', 0, 1, 'cogs', '', 32);
INSERT INTO `backmenu` VALUES (16, '权限管理', '/permit/permmanage.html', 15, 2, 'jsfiddle', '', 16);
INSERT INTO `backmenu` VALUES (41, '会员系统', 'member', 0, 1, 'fa fa-user', '', 9);
INSERT INTO `backmenu` VALUES (42, '会员管理', '/member/member.html', 41, 2, 'fa fa-group', '', 42);
INSERT INTO `backmenu` VALUES (34, '部门设置', '/hr/hrbm.html', 13, 2, 'cubes ', '', 34);
INSERT INTO `backmenu` VALUES (35, '职务设置', '/hr/hrzw.html', 13, 2, 'external-link-square', '', 35);

-- --------------------------------------------------------

-- 
-- 表的结构 `dept`
-- 

CREATE TABLE `dept` (
  `id_dept` int(11) NOT NULL auto_increment,
  `dept` varchar(25) NOT NULL,
  `lang` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id_dept`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

-- 
-- 导出表中的数据 `dept`
-- 

INSERT INTO `dept` VALUES (36, '111', 1);
INSERT INTO `dept` VALUES (35, 'q', 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `eventinfo`
-- 

CREATE TABLE `eventinfo` (
  `id_eventinfo` int(11) NOT NULL auto_increment,
  `id_newsdir` int(11) NOT NULL,
  `dirtree` text NOT NULL,
  `id_member` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `intro` text NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `workdate` date NOT NULL,
  `enddate` date NOT NULL,
  `indate` datetime NOT NULL,
  `modate` datetime NOT NULL,
  `rz` int(1) NOT NULL default '0',
  `browsecount` int(11) NOT NULL,
  PRIMARY KEY  (`id_eventinfo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- 导出表中的数据 `eventinfo`
-- 

INSERT INTO `eventinfo` VALUES (1, 8, '2,8', 1, '活动c', '活动c活动c', '', '', '0000-00-00', '0000-00-00', '2014-09-12 13:07:44', '2014-09-12 13:07:44', 1, 0);
INSERT INTO `eventinfo` VALUES (2, 8, '2,8', 1, '活动d', '活动d活动d', '', '', '0000-00-00', '0000-00-00', '2014-09-12 13:16:10', '2014-09-12 13:16:10', 1, 0);
INSERT INTO `eventinfo` VALUES (3, 8, '2,8', 1, '活动e', '活动e活动e', '', '', '2014-09-04', '0000-00-00', '2014-09-12 16:49:56', '2014-09-12 16:49:56', 1, 0);
INSERT INTO `eventinfo` VALUES (4, 0, '', 129, '1111111', '122222222222', '', '', '2014-10-19', '0000-00-00', '2014-10-13 10:21:33', '2014-10-13 10:21:33', 0, 0);
INSERT INTO `eventinfo` VALUES (5, 0, '', 129, 'eeeeeee', 'rrrrrrrrrrrrrr', '', '', '2014-10-10', '2014-12-12', '2014-10-13 10:22:33', '2014-10-13 10:22:33', 0, 0);
INSERT INTO `eventinfo` VALUES (6, 8, '2,8', 129, 'fdsfdas', 'fdafda', '', '', '0000-00-00', '0000-00-00', '2014-10-13 10:36:48', '2014-10-13 10:36:48', 0, 0);
INSERT INTO `eventinfo` VALUES (7, 8, '2,8', 129, 'Ggggggggg', 'Feuffhjfxg', '', '', '2014-12-13', '2015-10-13', '2014-10-13 10:46:54', '2014-10-13 10:46:54', 0, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `eventpic`
-- 

CREATE TABLE `eventpic` (
  `id_eventpic` int(11) NOT NULL auto_increment,
  `id_eventinfo` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `opicname` varchar(250) NOT NULL,
  `spicname` varchar(250) NOT NULL,
  `ordernum` int(11) NOT NULL,
  `indate` datetime NOT NULL,
  PRIMARY KEY  (`id_eventpic`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

-- 
-- 导出表中的数据 `eventpic`
-- 

INSERT INTO `eventpic` VALUES (1, 2, 1, '80a82773343e018858ac4814533ec5c9.jpg', '', 2, '2014-09-12 13:16:11');
INSERT INTO `eventpic` VALUES (2, 2, 1, '9022aea106993be1ae02b6864443ace0.jpg', '', 2, '2014-09-12 13:16:12');
INSERT INTO `eventpic` VALUES (3, 1, 1, 'c003d302540a644011880223ca3ca2fa.jpg', '', 3, '2014-09-12 13:39:53');
INSERT INTO `eventpic` VALUES (4, 3, 1, 'a2311415260f2c6da5a0c670c650e110.jpg', '', 0, '2014-09-12 16:49:57');
INSERT INTO `eventpic` VALUES (5, 7, 129, '8505b9d888f5f2ea6765a5969d7d557d.jpg', '', 0, '2014-10-13 10:46:56');
INSERT INTO `eventpic` VALUES (6, 7, 129, '9350f249cfa860118878fbe0a8843221.jpg', '', 0, '2014-10-13 10:46:57');

-- --------------------------------------------------------

-- 
-- 表的结构 `exam`
-- 

CREATE TABLE `exam` (
  `id_exam` int(11) NOT NULL auto_increment,
  `lang` int(1) NOT NULL default '1',
  `name` varchar(25) NOT NULL,
  `level` varchar(1) NOT NULL,
  `examdate` date NOT NULL,
  PRIMARY KEY  (`id_exam`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `exam`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `favourite`
-- 

CREATE TABLE `favourite` (
  `id_favourite` int(11) NOT NULL auto_increment,
  `id_member` int(11) NOT NULL,
  `id_newsinfo` int(11) NOT NULL,
  PRIMARY KEY  (`id_favourite`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

-- 
-- 导出表中的数据 `favourite`
-- 

INSERT INTO `favourite` VALUES (16, 129, 21);
INSERT INTO `favourite` VALUES (15, 129, 17);
INSERT INTO `favourite` VALUES (19, 1, 58);
INSERT INTO `favourite` VALUES (14, 129, 46);
INSERT INTO `favourite` VALUES (12, 129, 9);

-- --------------------------------------------------------

-- 
-- 表的结构 `guanzhu`
-- 

CREATE TABLE `guanzhu` (
  `id_guanzhu` int(11) NOT NULL auto_increment,
  `id_member` int(11) NOT NULL,
  `gzid` int(11) NOT NULL,
  PRIMARY KEY  (`id_guanzhu`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

-- 
-- 导出表中的数据 `guanzhu`
-- 

INSERT INTO `guanzhu` VALUES (16, 132, 1);
INSERT INTO `guanzhu` VALUES (19, 129, 132);
INSERT INTO `guanzhu` VALUES (12, 1, 132);
INSERT INTO `guanzhu` VALUES (17, 132, 133);
INSERT INTO `guanzhu` VALUES (20, 129, 1);
INSERT INTO `guanzhu` VALUES (22, 132, 0);
INSERT INTO `guanzhu` VALUES (23, 132, 129);

-- --------------------------------------------------------

-- 
-- 表的结构 `hr`
-- 

CREATE TABLE `hr` (
  `id_hr` int(11) NOT NULL auto_increment,
  `id_bm` int(11) NOT NULL,
  `id_zw` int(11) NOT NULL,
  `randcode` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `sex` int(1) NOT NULL default '1',
  `birthday` date NOT NULL,
  `idcard` varchar(28) NOT NULL,
  `ismarry` int(1) NOT NULL,
  `nation` varchar(30) NOT NULL,
  `native` varchar(30) NOT NULL,
  `address` varchar(60) NOT NULL,
  `hometel` varchar(20) NOT NULL,
  `ext` varchar(8) NOT NULL,
  `mobi` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `remark` text NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dele` int(1) NOT NULL default '1',
  `level` int(1) NOT NULL default '1',
  `operator` text NOT NULL,
  `stat` int(1) NOT NULL default '1',
  `shenhe` int(1) NOT NULL default '0',
  `indate` datetime NOT NULL,
  `modate` datetime NOT NULL,
  PRIMARY KEY  (`id_hr`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

-- 
-- 导出表中的数据 `hr`
-- 

INSERT INTO `hr` VALUES (1, 3, 2, 88021234, 'administrator', 1, '2014-06-01', '', 0, '', '', '', '', '801', '', '', '', 'admin', 'admin888', 'admin@eable.cn', 1, 1, 'admin', 1, 1, '2011-01-29 18:08:13', '2014-06-19 20:30:14');
INSERT INTO `hr` VALUES (72, 2, 1, 86280822, 'Koko', 1, '1981-01-01', '', 1, '', '', '', '', '806', '', '', '', 'koko', '123456', 'koko@eable.cn', 1, 1, 'admin', 1, 1, '2014-06-23 08:51:59', '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- 
-- 表的结构 `hr_bm`
-- 

CREATE TABLE `hr_bm` (
  `id_bm` int(11) NOT NULL auto_increment,
  `bmname` varchar(100) NOT NULL,
  `hr_count` int(4) NOT NULL,
  `stat` int(1) NOT NULL default '1',
  `indate` datetime NOT NULL,
  PRIMARY KEY  (`id_bm`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

-- 
-- 导出表中的数据 `hr_bm`
-- 

INSERT INTO `hr_bm` VALUES (2, '行政部', 12, 1, '2014-06-18 15:23:22');
INSERT INTO `hr_bm` VALUES (3, '财务部', 5, 1, '2014-06-18 15:51:56');
INSERT INTO `hr_bm` VALUES (4, '销售部', 33, 1, '2014-06-18 15:55:28');
INSERT INTO `hr_bm` VALUES (5, '设计部', 15, 1, '2014-06-18 15:57:17');
INSERT INTO `hr_bm` VALUES (6, '人事部', 2, 1, '2014-06-18 15:59:00');
INSERT INTO `hr_bm` VALUES (7, 'IT部', 0, 1, '2014-06-18 16:00:15');
INSERT INTO `hr_bm` VALUES (8, '客服部', 35, 1, '2014-06-18 16:10:40');

-- --------------------------------------------------------

-- 
-- 表的结构 `hr_zw`
-- 

CREATE TABLE `hr_zw` (
  `id_zw` int(11) NOT NULL auto_increment,
  `zwname` varchar(50) NOT NULL,
  `zw_count` int(4) NOT NULL,
  `indate` datetime NOT NULL,
  PRIMARY KEY  (`id_zw`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- 导出表中的数据 `hr_zw`
-- 

INSERT INTO `hr_zw` VALUES (1, 'CEO', 1, '2014-06-19 09:28:51');
INSERT INTO `hr_zw` VALUES (2, '总经理', 2, '2014-06-19 09:33:16');
INSERT INTO `hr_zw` VALUES (3, '部门经理', 5, '2014-06-19 09:39:08');
INSERT INTO `hr_zw` VALUES (4, '组长', 15, '2014-06-19 09:40:06');
INSERT INTO `hr_zw` VALUES (5, '员工', 36, '2014-06-19 09:40:31');
INSERT INTO `hr_zw` VALUES (6, '设计师', 0, '2014-06-19 09:41:22');

-- --------------------------------------------------------

-- 
-- 表的结构 `idcardup`
-- 

CREATE TABLE `idcardup` (
  `id_idcardup` int(11) NOT NULL auto_increment,
  `id_member` int(11) NOT NULL,
  `pic` varchar(250) NOT NULL,
  PRIMARY KEY  (`id_idcardup`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- 
-- 导出表中的数据 `idcardup`
-- 

INSERT INTO `idcardup` VALUES (3, 129, '1413426461.jpg');

-- --------------------------------------------------------

-- 
-- 表的结构 `lang`
-- 

CREATE TABLE `lang` (
  `id_lang` int(2) NOT NULL auto_increment,
  `lang` varchar(50) NOT NULL,
  `color` varchar(25) NOT NULL,
  PRIMARY KEY  (`id_lang`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 导出表中的数据 `lang`
-- 

INSERT INTO `lang` VALUES (1, '中文', 'red');
INSERT INTO `lang` VALUES (2, '英文', 'blue');

-- --------------------------------------------------------

-- 
-- 表的结构 `layout`
-- 

CREATE TABLE `layout` (
  `id_layout` int(11) NOT NULL auto_increment,
  `id_lang` int(1) NOT NULL default '1',
  `title` varchar(250) NOT NULL,
  `url` text NOT NULL,
  `intro` text NOT NULL,
  `icon` text NOT NULL,
  `content` text NOT NULL,
  `remark` text NOT NULL,
  `status` int(1) NOT NULL default '1',
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_layout`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `layout`
-- 

INSERT INTO `layout` VALUES (1, 1, '页脚快捷菜单', '', '作品、活动、经纪、关注、介绍', '', '', '', 1, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `layoutpic`
-- 

CREATE TABLE `layoutpic` (
  `id_layoutpic` int(11) NOT NULL auto_increment,
  `id_layout` int(11) NOT NULL,
  `id_hr` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `intro` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `opicname` varchar(250) NOT NULL,
  `spicname` varchar(250) NOT NULL,
  `dele` int(1) NOT NULL default '1',
  `type` varchar(3) NOT NULL,
  `indate` datetime NOT NULL,
  `modate` datetime NOT NULL,
  `deldate` datetime NOT NULL,
  `browsecount` int(11) NOT NULL,
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_layoutpic`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- 
-- 导出表中的数据 `layoutpic`
-- 

INSERT INTO `layoutpic` VALUES (1, 1, 0, '作品', '', 'works.php', 'acaaf6e66727cec4f54daf8c9e0a270d.png', '', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 1);
INSERT INTO `layoutpic` VALUES (2, 1, 0, '活动', '', '', 'deebdf771e62c3f33427ada97c8bbcb8.png', '', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 2);
INSERT INTO `layoutpic` VALUES (3, 1, 0, '经纪', '', '', 'f213f9fc3277cb7e9e8749059bdb2f9f.png', '', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 3);
INSERT INTO `layoutpic` VALUES (4, 1, 0, '关注', '', '', '91e0e07fb106f5bf45cdde69e96a47b9.png', '', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 4);
INSERT INTO `layoutpic` VALUES (5, 1, 0, '介绍', '', '', '126cc99028092d5a9155e1fc1f4c4dbe.png', '', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 5);

-- --------------------------------------------------------

-- 
-- 表的结构 `member`
-- 

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL auto_increment,
  `name` varchar(25) NOT NULL,
  `intro` text NOT NULL,
  `memid` varchar(13) NOT NULL,
  `sex` int(1) NOT NULL default '1',
  `age` varchar(4) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `birthday` date NOT NULL,
  `city` varchar(4) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobi` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user` varchar(20) NOT NULL,
  `password` varchar(64) NOT NULL,
  `status` int(1) NOT NULL default '1',
  `level` int(1) NOT NULL default '1',
  `indate` datetime NOT NULL,
  `modate` datetime NOT NULL,
  `logindate` datetime NOT NULL,
  `loginip` varchar(16) NOT NULL,
  PRIMARY KEY  (`id_member`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=135 ;

-- 
-- 导出表中的数据 `member`
-- 

INSERT INTO `member` VALUES (1, '唐伯虎', '唐寅玩世不恭而又才华横溢，诗文擅名，与祝允明、文徵明、徐祯卿并称“江南四大才子（吴门四才子）”，画名更著，与沈周、文征明、仇英并称“吴门四家”，又称为“明四家”。', '4415297e3af8c', 0, '', '1410499026.JPG', '0000-00-00', '', '', '13818126021', 'mofangci@163.com', 'alex', '96e79218965eb72c92a549dd5a330112', 1, 2, '2013-10-01 03:46:29', '0000-00-00 00:00:00', '2013-10-09 13:30:34', '116.234.154.232');
INSERT INTO `member` VALUES (129, 'Koko lv', 'Jj', '54058dc31a8f', 0, '1981', '1409707430.jpg', '0000-00-00', 'Shan', '', '13511111', '', 'koko', '96e79218965eb72c92a549dd5a330112', 1, 2, '2014-07-15 09:17:29', '2014-08-07 10:00:27', '0000-00-00 00:00:00', '');
INSERT INTO `member` VALUES (130, '王羲之', '其书法兼善隶、草、楷、行各体，精研体势，心摹手追，广采众长，备精诸体，冶于一炉，摆脱了汉魏笔风，自成一家，影响深远。', '54058e23761ca', 1, '', '1404382577.jpg', '0000-00-00', '', '', '11111111112', '', 'test2', '96e79218965eb72c92a549dd5a330112', 0, 2, '2014-07-15 13:12:46', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');
INSERT INTO `member` VALUES (132, '聂健宏', '写真依次为先辈曾祖父，外祖父，祖父，和父亲。我，姓聂名健宏，外文名James，字德贤。广东新会人士，聂昌公后裔江门梅湾支二十六世。早年移居旧金山，信仰基督，求学复旦。\r\n“德宅兆成光耀 帮家宏振荣华”  ', '54058e33818e5', 0, '1981', '1414068389.jpg', '0000-00-00', '上海上海', '', '18616101610', '', '18616101610', 'b90cbc4d278146091986762ddff37a93', 1, 2, '2014-07-19 15:13:42', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');
INSERT INTO `member` VALUES (133, '小王', 'Hhfffd', '54058e433913a', 0, '1981', '1409034808.jpg', '0000-00-00', 'Sh', '', '12345678912', '', '12345678912', '96e79218965eb72c92a549dd5a330112', 0, 2, '2014-07-19 15:21:14', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '');

-- --------------------------------------------------------

-- 
-- 表的结构 `newsdir`
-- 

CREATE TABLE `newsdir` (
  `id_newsdir` int(11) NOT NULL auto_increment,
  `id_lang` int(2) NOT NULL default '1',
  `name` varchar(50) NOT NULL,
  `title` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `intro` text NOT NULL,
  `dele` int(1) NOT NULL default '1',
  `fatherid` int(11) NOT NULL,
  `level` int(1) NOT NULL,
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_newsdir`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- 导出表中的数据 `newsdir`
-- 

INSERT INTO `newsdir` VALUES (1, 1, '作品', '', '', '', 1, 0, 1, 3);
INSERT INTO `newsdir` VALUES (2, 1, '活动', '', '', '', 1, 0, 1, 2);
INSERT INTO `newsdir` VALUES (3, 1, '艺术人生', '', '', '', 1, 0, 1, 1);
INSERT INTO `newsdir` VALUES (4, 1, '国画', '', '', '', 1, 1, 2, 4);
INSERT INTO `newsdir` VALUES (5, 1, '油画', '', '', '', 1, 1, 2, 5);
INSERT INTO `newsdir` VALUES (6, 1, '陶瓷', '', '', '', 1, 1, 2, 6);
INSERT INTO `newsdir` VALUES (7, 1, '线下活动', '', '', '', 1, 2, 2, 7);
INSERT INTO `newsdir` VALUES (8, 1, '展览', '', '', '', 1, 2, 2, 8);
INSERT INTO `newsdir` VALUES (9, 1, '艺术人生', '', '', '', 1, 3, 2, 9);

-- --------------------------------------------------------

-- 
-- 表的结构 `newsdir_pic`
-- 

CREATE TABLE `newsdir_pic` (
  `id_newsdirpic` int(11) NOT NULL auto_increment,
  `id_newsdir` int(11) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_newsdirpic`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- 
-- 导出表中的数据 `newsdir_pic`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `newsinfo`
-- 

CREATE TABLE `newsinfo` (
  `id_newsinfo` int(11) NOT NULL auto_increment,
  `id_newsdir` int(11) NOT NULL,
  `dirtree` text NOT NULL,
  `id_member` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `intro` text NOT NULL,
  `content` text NOT NULL,
  `url` text NOT NULL,
  `workdate` date NOT NULL,
  `indate` datetime NOT NULL,
  `modate` datetime NOT NULL,
  `rz` int(1) NOT NULL default '0',
  `browsecount` int(11) NOT NULL,
  PRIMARY KEY  (`id_newsinfo`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=67 ;

-- 
-- 导出表中的数据 `newsinfo`
-- 

INSERT INTO `newsinfo` VALUES (1, 2, '2', 129, 'testsss22222', 'testsssswwwwwww', '', '', '2014-08-12', '2014-08-12 14:59:19', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (5, 11, '2,11', 132, '作品测试3', '作品测试3作品测试3作品测试3', '', '', '2014-08-13', '2014-08-13 10:26:14', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (6, 11, '2,11', 129, 'testhhh', 'test', '', '', '2014-08-13', '2014-08-13 11:00:03', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (7, 11, '2,11', 129, 'test', 'test', '', '', '2014-08-13', '2014-08-13 11:01:31', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (9, 11, '2,11', 132, ' 作品测试5', ' 作品测试5 作品测试5 作品测试5作品测试5 作品测试5 作品测试5作品测试5 作品测试5 作品测试5作品测试5 作品测试5 作品测试5作品测试5 作品测试5 作品测试5作品测试5 作品测试5 作品测试5作品测试5 作品测试5 作品测试5', '', '', '2014-08-13', '2014-08-13 11:04:07', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (41, 10, '2,10', 132, '888', '888', '', '', '2014-08-14', '2014-08-14 16:02:17', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (40, 10, '2,10', 129, '7777', 'fsfdsfsdfsd', '', '', '2014-08-14', '2014-08-14 16:00:47', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (39, 10, '2,10', 129, '6666', '66666', '', '', '2014-08-14', '2014-08-14 15:58:11', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (38, 10, '2,10', 132, '555', '5555', '', '', '2014-08-14', '2014-08-14 15:56:54', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (36, 11, '2,11', 129, 'eeeeeeeeeeeee', '222fsfdsfdsfdsfds', '', '', '2014-08-14', '2014-08-14 15:53:48', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (37, 10, '2,10', 129, '333', '333', '', '', '2014-08-14', '2014-08-14 15:54:07', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (35, 10, '2,10', 129, '1111', '111', '', '', '2014-08-14', '2014-08-14 15:53:18', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (21, 11, '2,11', 129, 'test', 'fdsafdas', '', '', '2014-08-14', '2014-08-14 15:03:59', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (17, 11, '2,11', 132, '作品测试33', '作品测试33作品测试33作品测试33', '', '', '2014-08-14', '2014-08-14 14:58:31', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (34, 10, '2,10', 129, 'test111', 'test1111', '', '', '2014-08-14', '2014-08-14 15:51:22', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (30, 10, '2,10', 132, '活动11', '1111', '', '', '2014-08-14', '2014-08-14 15:39:34', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (31, 10, '2,10', 132, 'tsfdsf', 'asfdasfda', '', '', '2014-08-14', '2014-08-14 15:40:06', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (32, 10, '2,10', 132, '111', '11', '', '', '2014-08-14', '2014-08-14 15:40:41', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (33, 11, '2,11', 129, 'Wwtest', 'test', '', '', '2014-08-14', '2014-08-14 15:50:28', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (43, 10, '2,10', 132, '9999', '99999', '', '', '2014-08-14', '2014-08-14 16:04:12', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (44, 10, '2,10', 129, '99999', '999999999999', '', '', '2014-08-14', '2014-08-14 16:15:29', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (45, 11, '2,11', 1, 'a作品1', 'a作品1a作品1a作品1a作品1', '', '', '2014-08-14', '2014-08-14 17:08:10', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (46, 11, '2,11', 1, '作品2', '作品2作品2作品2', '', '', '2014-08-14', '2014-08-14 17:31:02', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (47, 11, '2,11', 1, '作品333', '作品333作品333作品333', '', '', '2014-08-14', '2014-08-14 17:31:43', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (50, 11, '2,11', 1, '作品4', '作品44作品44作品44作品44作品44567788', '', '', '2014-08-15', '2014-08-15 14:14:33', '0000-00-00 00:00:00', 0, 0);
INSERT INTO `newsinfo` VALUES (66, 5, '1,5', 129, 'test', 'test', '', '', '2014-10-11', '2014-10-11 14:59:24', '2014-10-11 14:59:24', 1, 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `newspic`
-- 

CREATE TABLE `newspic` (
  `id_newspic` int(11) NOT NULL auto_increment,
  `id_newsinfo` int(11) NOT NULL,
  `id_member` int(11) NOT NULL,
  `opicname` varchar(250) NOT NULL,
  `spicname` varchar(250) NOT NULL,
  `ordernum` int(11) NOT NULL,
  `indate` datetime NOT NULL,
  PRIMARY KEY  (`id_newspic`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=97 ;

-- 
-- 导出表中的数据 `newspic`
-- 

INSERT INTO `newspic` VALUES (1, 1, 129, 'da00a5fd9e15b3532293d66c59f1f2b9.jpg', '', 1, '2014-08-12 14:59:20');
INSERT INTO `newspic` VALUES (2, 1, 129, '71d93ee5a34997e18cab4840b7835b44.jpg', '', 2, '2014-08-12 14:59:20');
INSERT INTO `newspic` VALUES (3, 1, 129, '69f2ac172510a13aeef03db60a1e7ca8.jpg', '', 3, '2014-08-12 14:59:20');
INSERT INTO `newspic` VALUES (4, 1, 129, 'e4f846ed62bd43163a36241e081307f1.jpg', '', 4, '2014-08-12 14:59:20');
INSERT INTO `newspic` VALUES (5, 1, 129, '6561d217384d95be406b4cd086b68b84.jpg', '', 5, '2014-08-12 14:59:20');
INSERT INTO `newspic` VALUES (6, 2, 129, 'db7e4afcd96253b43809646438668528.jpg', '', 6, '2014-08-12 15:12:42');
INSERT INTO `newspic` VALUES (7, 2, 129, '0cbff26f28bee657b775903c77802fdc.jpg', '', 7, '2014-08-12 15:12:42');
INSERT INTO `newspic` VALUES (8, 2, 129, 'e491661e02ca50a255be089b5ea28ef9.jpg', '', 8, '2014-08-12 15:12:42');
INSERT INTO `newspic` VALUES (32, 17, 132, 'a4c7c5b8d4d56542bd807a13cf1f8d06.jpg', '', 32, '2014-08-14 14:58:32');
INSERT INTO `newspic` VALUES (33, 17, 132, '5deccebfd8ff3de1cecd58d12bbc205f.jpg', '', 33, '2014-08-14 14:58:33');
INSERT INTO `newspic` VALUES (41, 24, 129, '39e07cf03fe3cae0cf021ab26d758801.jpg', '', 41, '2014-08-14 15:09:05');
INSERT INTO `newspic` VALUES (35, 19, 132, 'd652c064707a9bb1e9b4b299136c20b1.jpg', '', 35, '2014-08-14 15:02:20');
INSERT INTO `newspic` VALUES (17, 7, 129, '6f100c20e189d862d26e31958d2a4932.jpg', '', 17, '2014-08-13 11:01:32');
INSERT INTO `newspic` VALUES (18, 8, 132, '2b76fbf1ebd897142487fad8ba1e0f66.jpg', '', 18, '2014-08-13 11:02:15');
INSERT INTO `newspic` VALUES (19, 9, 132, 'abd5b27392d266740fe8cde369b9c44c.jpg', '', 19, '2014-08-13 11:04:10');
INSERT INTO `newspic` VALUES (20, 9, 132, 'd17f5284d293d9656ae9a09726f3abbe.jpg', '', 20, '2014-08-13 11:04:10');
INSERT INTO `newspic` VALUES (21, 9, 132, '5d9c901c3eeb3227e239c45552dd1759.jpg', '', 21, '2014-08-13 11:04:11');
INSERT INTO `newspic` VALUES (22, 9, 132, 'e10c48b83d2ede6596e68dafd396a91a.jpg', '', 22, '2014-08-13 11:04:12');
INSERT INTO `newspic` VALUES (23, 9, 132, 'ce9672435d1cc2d0a4f73957ac73a282.jpg', '', 23, '2014-08-13 11:04:13');
INSERT INTO `newspic` VALUES (36, 19, 132, '960fe88e8f4707eb3f783a44c6591de4.jpg', '', 36, '2014-08-14 15:02:21');
INSERT INTO `newspic` VALUES (45, 30, 132, 'ef06a942a5f705789b15a76c88236808.jpg', '', 45, '2014-08-14 15:39:35');
INSERT INTO `newspic` VALUES (46, 31, 132, '1f1a09dd9e5ea19ae71e858291340b1a.jpg', '', 46, '2014-08-14 15:40:06');
INSERT INTO `newspic` VALUES (47, 32, 132, '80c4c98253b034449894032dba3ca67d.jpg', '', 47, '2014-08-14 15:40:41');
INSERT INTO `newspic` VALUES (48, 33, 129, '0e0647b257c234bf6b5f5c6920fc7bf3.jpg', '', 48, '2014-08-14 15:50:29');
INSERT INTO `newspic` VALUES (49, 34, 129, 'cf2efd4b781c06f7eeee6be81de5cb65.jpg', '', 49, '2014-08-14 15:51:22');
INSERT INTO `newspic` VALUES (50, 35, 129, '98498489faeb744029ad6c7cff72b55b.jpg', '', 50, '2014-08-14 15:53:18');
INSERT INTO `newspic` VALUES (51, 36, 129, 'ee768e68a2725b289cce59bbad1a0b59.jpg', '', 51, '2014-08-14 15:53:48');
INSERT INTO `newspic` VALUES (52, 37, 129, '7da3fa486737b7daf7fae98afe671592.jpg', '', 52, '2014-08-14 15:54:07');
INSERT INTO `newspic` VALUES (53, 38, 132, '17953ab9763559538d959533f136ea8c.jpg', '', 53, '2014-08-14 15:56:54');
INSERT INTO `newspic` VALUES (54, 39, 129, 'd4dc8938e1f71418e183104f25fd8c6e.jpg', '', 54, '2014-08-14 15:58:11');
INSERT INTO `newspic` VALUES (55, 40, 129, 'ba51534756f947f2ac1b9fad195a3848.jpg', '', 55, '2014-08-14 16:00:47');
INSERT INTO `newspic` VALUES (56, 41, 132, 'e735c30f365838ea45b6454d201628ac.jpg', '', 56, '2014-08-14 16:02:17');
INSERT INTO `newspic` VALUES (57, 42, 1, 'dbd7fdd7a928674b85918d90c6831821.jpg', '', 57, '2014-08-14 16:02:59');
INSERT INTO `newspic` VALUES (58, 43, 132, '418a8d7cdc8c0c89abf952d9dd7b8aff.jpg', '', 58, '2014-08-14 16:04:12');
INSERT INTO `newspic` VALUES (59, 44, 129, '146906c32af77f674f229e2e86ff9048.jpg', '', 59, '2014-08-14 16:15:29');
INSERT INTO `newspic` VALUES (60, 45, 1, '04d9751a387675a0b5ef6dbeb9ae04cf.jpg', '', 60, '2014-08-14 17:08:11');
INSERT INTO `newspic` VALUES (61, 46, 1, '162d41247477b16fca190a2f2633b7d3.jpg', '', 61, '2014-08-14 17:31:03');
INSERT INTO `newspic` VALUES (62, 47, 1, 'b482a44c4c21ec8dc80ca843097f4209.jpg', '', 62, '2014-08-14 17:31:45');
INSERT INTO `newspic` VALUES (63, 47, 1, 'b07cef1185fa214dfe9fffcdf9e04ee5.jpg', '', 63, '2014-08-14 17:31:45');
INSERT INTO `newspic` VALUES (64, 48, 1, 'fe6d7b4c1823ba0c0fc0ee7700001cb4.jpg', '', 64, '2014-08-14 18:09:44');
INSERT INTO `newspic` VALUES (65, 49, 1, 'c67eefd1f3e759224245725cdd878936.jpg', '', 65, '2014-08-14 18:10:17');
INSERT INTO `newspic` VALUES (66, 49, 1, 'c6cd826d5f97be1607357dfcb9d808c4.jpg', '', 66, '2014-08-14 18:10:18');
INSERT INTO `newspic` VALUES (67, 50, 1, '1fda05a8668b43a6868ff0e239d3c7b4.jpg', '', 67, '2014-08-15 14:14:34');
INSERT INTO `newspic` VALUES (72, 50, 1, '0971d3f5777395844df3c1c29b89c96c.jpg', '', 72, '2014-08-15 16:54:55');
INSERT INTO `newspic` VALUES (71, 50, 1, 'a7df8e27732dd686e70fd7fae2bb68a6.jpg', '', 71, '2014-08-15 16:54:27');
INSERT INTO `newspic` VALUES (73, 50, 1, '59b05a7d23f96dc57d6383274f11e041.jpg', '', 73, '2014-08-15 16:55:13');
INSERT INTO `newspic` VALUES (74, 50, 1, 'eb8602e70c0765a6824a251c4367fb15.jpg', '', 74, '2014-08-15 16:55:13');
INSERT INTO `newspic` VALUES (75, 50, 1, '6efc7b266721eeee1e95273a08047df9.jpg', '', 75, '2014-08-15 16:56:11');
INSERT INTO `newspic` VALUES (76, 50, 1, '5ccd3d6592017638c5df91cdfddafdea.jpg', '', 76, '2014-08-18 09:18:37');
INSERT INTO `newspic` VALUES (77, 51, 1, '51693f7468f5675c3cd2b3ce43d54a19.jpg', '', 77, '2014-08-20 17:38:34');
INSERT INTO `newspic` VALUES (78, 51, 1, 'ebffec6c04ff6a93d7b2be4cf140cb36.jpg', '', 78, '2014-08-20 17:38:51');
INSERT INTO `newspic` VALUES (79, 51, 1, '126e2d9ca371101a92cccdec3aaf1d13.jpg', '', 79, '2014-08-20 17:42:24');
INSERT INTO `newspic` VALUES (80, 8, 132, 'aa4cfc779eff5c57ff79965d2023407e.jpg', '', 80, '2014-08-24 11:29:43');
INSERT INTO `newspic` VALUES (81, 6, 129, '02c2710ebbe4215d2df751fb80403367.jpg', '', 81, '2014-08-26 11:22:42');
INSERT INTO `newspic` VALUES (82, 52, 133, '44e5b9b884fabe3bca4299e352169821.jpg', '', 82, '2014-08-26 14:35:53');
INSERT INTO `newspic` VALUES (83, 52, 133, '362bcf3db76439092969eb5500d7c14e.jpg', '', 83, '2014-08-26 14:36:13');
INSERT INTO `newspic` VALUES (84, 52, 133, '3db4fb883f491ed6f19c50ba14d70cb6.jpg', '', 84, '2014-08-26 14:36:34');
INSERT INTO `newspic` VALUES (85, 58, 129, 'a710ce29fc9141884a5cd339653872d3.jpg', '', 85, '2014-09-02 14:23:27');
INSERT INTO `newspic` VALUES (86, 58, 129, '61483dafc549af0db3d871670df1bd97.jpg', '', 86, '2014-09-02 14:23:27');
INSERT INTO `newspic` VALUES (87, 58, 129, 'a2a6121605c144c01636d06185f20731.jpg', '', 87, '2014-09-02 14:23:27');
INSERT INTO `newspic` VALUES (88, 1, 129, '967a48aae8007283dff67ec4d03a819e.png', '', 88, '2014-09-03 09:39:37');
INSERT INTO `newspic` VALUES (89, 1, 129, '5c9f641fdcb94b28fdf80872227b9696.png', '', 89, '2014-09-03 09:40:25');
INSERT INTO `newspic` VALUES (90, 65, 1, '66d4e60534d0e41de8136dbc644e4aa0.jpg', '', 90, '2014-09-12 12:56:49');
INSERT INTO `newspic` VALUES (91, 1, 1, 'de1490544d276b1e0a48ee123525b807.jpg', '', 91, '2014-09-12 13:07:46');
INSERT INTO `newspic` VALUES (92, 1, 1, '89ca9d93c552cf653e057ba8abceff83.jpg', '', 92, '2014-09-12 13:07:46');
INSERT INTO `newspic` VALUES (93, 2, 1, '5e745831c1f384953fad7f968577986c.jpg', '', 93, '2014-09-12 13:37:15');
INSERT INTO `newspic` VALUES (94, 66, 129, '84afad774b46f512ced0c4b1ae3e458c.png', '', 94, '2014-10-11 14:59:24');
INSERT INTO `newspic` VALUES (95, 66, 129, '846d6d6f8dc98290693b4364fda1ffe6.jpg', '', 95, '2014-10-11 14:59:24');
INSERT INTO `newspic` VALUES (96, 66, 129, '55e99d3e96024cfc83657fb46c17c690.jpg', '', 96, '2014-10-11 14:59:25');

-- --------------------------------------------------------

-- 
-- 表的结构 `online`
-- 

CREATE TABLE `online` (
  `id_online` int(11) NOT NULL auto_increment,
  `user` varchar(20) NOT NULL,
  `device` varchar(50) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `use_time` timestamp NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `islock` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id_online`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=134 ;

-- 
-- 导出表中的数据 `online`
-- 

INSERT INTO `online` VALUES (133, 'admin', 'Desktop', '101.85.41.162', '2014-10-30 08:18:36', 0);

-- --------------------------------------------------------

-- 
-- 表的结构 `pageset`
-- 

CREATE TABLE `pageset` (
  `id_pageset` int(11) NOT NULL auto_increment,
  `id_lang` int(2) NOT NULL default '1',
  `title` varchar(250) NOT NULL,
  `intro` text NOT NULL,
  `url` text NOT NULL,
  `pagetitle` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `remark` text NOT NULL,
  `status` int(1) NOT NULL default '1',
  `location` int(2) NOT NULL default '1',
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_pageset`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `pageset`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `pagesetpic`
-- 

CREATE TABLE `pagesetpic` (
  `id_pagesetpic` int(11) NOT NULL auto_increment,
  `id_pageset` int(11) NOT NULL,
  `id_hr` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `intro` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `opicname` varchar(250) NOT NULL,
  `spicname` varchar(250) NOT NULL,
  `dele` int(1) NOT NULL default '1',
  `type` varchar(3) NOT NULL,
  `indate` datetime NOT NULL,
  `modate` datetime NOT NULL,
  `deldate` datetime NOT NULL,
  `browsecount` int(11) NOT NULL,
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_pagesetpic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `pagesetpic`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `pavy1`
-- 

CREATE TABLE `pavy1` (
  `id_pavy1` int(11) NOT NULL auto_increment,
  `id_hr` int(11) NOT NULL,
  `member` int(1) NOT NULL default '0',
  `permit` int(1) NOT NULL default '0',
  `hr` int(1) NOT NULL default '0',
  `news` int(1) NOT NULL default '0',
  `siteset` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id_pavy1`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

-- 
-- 导出表中的数据 `pavy1`
-- 

INSERT INTO `pavy1` VALUES (1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy1` VALUES (3, 2, 0, 0, 0, 0, 0);
INSERT INTO `pavy1` VALUES (5, 73, 0, 0, 0, 0, 0);
INSERT INTO `pavy1` VALUES (6, 90, 0, 0, 0, 0, 0);
INSERT INTO `pavy1` VALUES (7, 72, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `pavy2`
-- 

CREATE TABLE `pavy2` (
  `id_pvay2` int(11) NOT NULL auto_increment,
  `id_hr` int(11) NOT NULL,
  `id_backmenu` int(11) NOT NULL,
  `display_permit` int(1) NOT NULL default '0',
  `add_permit` int(1) NOT NULL default '0',
  `edit_permit` int(1) NOT NULL default '0',
  `del_permit` int(1) NOT NULL default '0',
  `group_list` int(1) NOT NULL default '0',
  `group_edit` int(1) NOT NULL default '0',
  `group_del` int(1) NOT NULL default '0',
  PRIMARY KEY  (`id_pvay2`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=169 ;

-- 
-- 导出表中的数据 `pavy2`
-- 

INSERT INTO `pavy2` VALUES (166, 1, 2, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (167, 1, 3, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (168, 1, 4, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (7, 1, 10, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (8, 1, 11, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (9, 1, 12, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (10, 1, 14, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (11, 1, 16, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (22, 1, 34, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (23, 1, 35, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (165, 72, 42, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (163, 72, 4, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (162, 72, 3, 0, 0, 0, 0, 0, 0, 0);
INSERT INTO `pavy2` VALUES (161, 72, 2, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (160, 72, 12, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (151, 72, 14, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (152, 72, 34, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (153, 72, 35, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (164, 1, 42, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (159, 72, 11, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (158, 72, 10, 1, 1, 1, 1, 1, 1, 1);
INSERT INTO `pavy2` VALUES (157, 72, 16, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `post`
-- 

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL auto_increment,
  `post` varchar(25) NOT NULL,
  `lang` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id_post`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

-- 
-- 导出表中的数据 `post`
-- 

INSERT INTO `post` VALUES (1, '普通员工', 1);
INSERT INTO `post` VALUES (2, '物料收发员', 1);
INSERT INTO `post` VALUES (3, 'IQC', 1);
INSERT INTO `post` VALUES (4, '仓库主管', 1);
INSERT INTO `post` VALUES (5, '采购主管', 1);
INSERT INTO `post` VALUES (6, '销售主管', 1);
INSERT INTO `post` VALUES (7, '副总经理', 1);
INSERT INTO `post` VALUES (8, '总经理', 1);
INSERT INTO `post` VALUES (9, '网站管理员', 1);

-- --------------------------------------------------------

-- 
-- 表的结构 `productdir`
-- 

CREATE TABLE `productdir` (
  `id_proddir` int(11) NOT NULL auto_increment,
  `lang` int(1) NOT NULL,
  `name` varchar(50) NOT NULL default '1',
  `intro` text NOT NULL,
  `dele` int(1) NOT NULL default '1',
  `dirurl` varchar(50) NOT NULL,
  `fatherid` int(11) NOT NULL,
  `level` int(1) NOT NULL,
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_proddir`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `productdir`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `productinfo`
-- 

CREATE TABLE `productinfo` (
  `id_prodinfo` int(11) NOT NULL auto_increment,
  `id_proddir` int(11) NOT NULL,
  `id_hr` int(11) NOT NULL,
  `lang` int(1) NOT NULL default '1',
  `title` varchar(250) NOT NULL,
  `intro` text NOT NULL,
  `content` longtext NOT NULL,
  `tag` text NOT NULL,
  `dele` int(1) NOT NULL default '1',
  `isnew` int(1) NOT NULL default '1',
  `indate` datetime NOT NULL,
  `modate` datetime NOT NULL,
  `deldate` datetime NOT NULL,
  `browsecount` int(11) NOT NULL,
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_prodinfo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `productinfo`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `productpic`
-- 

CREATE TABLE `productpic` (
  `id_prodpic` int(11) NOT NULL auto_increment,
  `id_prodinfo` int(11) NOT NULL,
  `id_hr` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `intro` text NOT NULL,
  `url` varchar(250) NOT NULL,
  `opicname` varchar(250) NOT NULL,
  `spicname` varchar(250) NOT NULL,
  `dele` int(1) NOT NULL default '1',
  `type` varchar(3) NOT NULL,
  `indate` datetime NOT NULL,
  `modate` datetime NOT NULL,
  `deldate` datetime NOT NULL,
  `browsecount` int(11) NOT NULL,
  PRIMARY KEY  (`id_prodpic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `productpic`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `siteset`
-- 

CREATE TABLE `siteset` (
  `id_siteset` int(11) NOT NULL auto_increment,
  `lang` int(1) NOT NULL default '1',
  `title` text NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `otherheader` text NOT NULL,
  `iscopy` int(1) NOT NULL default '0',
  `rmailbox` varchar(50) NOT NULL,
  `smailbox` varchar(50) NOT NULL,
  `smailboxpass` varchar(50) NOT NULL,
  `icp` varchar(25) NOT NULL,
  `mapcode` text NOT NULL,
  `statistics` text NOT NULL,
  `isstyle` varchar(8) NOT NULL,
  `weburl` text NOT NULL,
  `newsnum` int(2) NOT NULL,
  `productnum` int(2) NOT NULL,
  `bannertime` int(11) NOT NULL default '3000',
  `pagetransition` varchar(20) NOT NULL default 'none',
  PRIMARY KEY  (`id_siteset`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `siteset`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `title`
-- 

CREATE TABLE `title` (
  `id_title` int(11) NOT NULL auto_increment,
  `title` varchar(25) NOT NULL,
  `lang` int(1) NOT NULL default '1',
  PRIMARY KEY  (`id_title`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `title`
-- 


-- --------------------------------------------------------

-- 
-- 表的结构 `webmenu`
-- 

CREATE TABLE `webmenu` (
  `id_webmenu` int(11) NOT NULL auto_increment,
  `lang` int(1) NOT NULL default '1',
  `name` varchar(25) NOT NULL,
  `url` text NOT NULL,
  `dele` int(1) NOT NULL default '1',
  `fatherid` int(11) NOT NULL,
  `level` int(1) NOT NULL,
  `ordernum` int(11) NOT NULL,
  PRIMARY KEY  (`id_webmenu`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 导出表中的数据 `webmenu`
-- 

