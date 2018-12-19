-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2015 年 12 月 30 日 15:18
-- 服务器版本: 5.5.24-log
-- PHP 版本: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `ee`
--

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `aid` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `content` text NOT NULL,
  `uid` int(9) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`aid`, `title`, `content`, `uid`) VALUES
(1, '文章1', '文章1正文内容...\r\n', 1),
(2, '文章2', '文章2正文内容...\r\n', 1),
(3, '文章3', '文章3正文内容...\r\n', 2),
(4, '文章4', '文章４文章４.........', 4);

-- --------------------------------------------------------

--
-- 表的结构 `author`
--

CREATE TABLE IF NOT EXISTS `author` (
  `autid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '作者id',
  `autname` varchar(30) NOT NULL COMMENT '作者名',
  PRIMARY KEY (`autid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='作者表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `author`
--

INSERT INTO `author` (`autid`, `autname`) VALUES
(1, '张三'),
(2, '李四'),
(3, '王五'),
(4, '赵六');

-- --------------------------------------------------------

--
-- 表的结构 `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `bid` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '图书id',
  `bname` varchar(30) NOT NULL COMMENT '书名',
  `btime` date NOT NULL COMMENT '出版日期',
  PRIMARY KEY (`bid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='图书表' AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `book`
--

INSERT INTO `book` (`bid`, `bname`, `btime`) VALUES
(1, '语文', '2015-12-09'),
(2, '数学', '2015-12-07'),
(3, '英语', '2015-12-08'),
(4, '物理', '2015-12-02');

-- --------------------------------------------------------

--
-- 表的结构 `bookauthor`
--

CREATE TABLE IF NOT EXISTS `bookauthor` (
  `bid` int(11) NOT NULL COMMENT '书的id',
  `autid` int(11) NOT NULL COMMENT '作者的id'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='关系表';

--
-- 转存表中的数据 `bookauthor`
--

INSERT INTO `bookauthor` (`bid`, `autid`) VALUES
(1, 1),
(2, 1),
(1, 2),
(3, 3),
(1, 4),
(4, 3),
(1, 3);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `email`) VALUES
(1, 'admin', 'b7e591c246d010bb2ccd77d52490c8', 'admin@5idev.com'),
(2, '小明', 'a193686a53e4de85ee3f2ff0576adf', 'xiao@163.com'),
(3, 'Jack', '0193686a35e4de85ee3f2ff0567adf', 'jack@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
