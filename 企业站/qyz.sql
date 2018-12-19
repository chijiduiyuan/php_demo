-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-07-17 06:24:31
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aa`
--

-- --------------------------------------------------------

--
-- 表的结构 `about`
--

CREATE TABLE IF NOT EXISTS `about` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='公司简介表' AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `about`
--

INSERT INTO `about` (`id`, `content`) VALUES
(1, '&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(91, 91, 91); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px; white-space: normal;&quot;&gt;深圳市诺博源软件技术有限公司成立于2006年，总部座落于深圳市高新科技园。我司是专业从事物流、快递行业信息化研究 ，ＩＴ系统建设、整体解决方案提供商。公司凭借多年在物流、 快递行业积累的系统开发经验，获得10多项计算机软件著作权专 利,被评定为《双软企业》。公司主要产品有K8快递管理系统、 Ｎ8网点版快递系统、Ｘ8干线物流信息管理系统、Ｍ8仓储配送 管理系统等。公司立足于物流、快递行业实际应用所需，本着实 用、易用的原则，为客户提供高效、安全、规范的信息化平台。诺博源针对不同客户的不同需求，采取定制开发模式，为客户“量身定做”极具竞争力、低成本、高收益的信息管理系统。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(91, 91, 91); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px; white-space: normal;&quot;&gt;诺博源坚持以技术创新为客户不断创造价值，7年来累积为70多家企业提供ＩＴ服务。每天有10多万客户端链接K8系统服务器端；每天超过1000万数据写入K8系统服务器。我们的客户遍布全国各地，占据物流行业的每一个分支，有物流、有快递、有电子商务、有配送、有仓储、还有干线运输。未来，我们将持续提升核心竞争能力与客户服务能力，致力于开发与推广更先进、更高效、更便捷、更安全的ＩＴ信息化产品，成为物流行业一流的IT专家。&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(91, 91, 91); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px; white-space: normal;&quot;&gt;诺博源倡导“稳定、高效、专业”的企业精神，具有良好的内部机制。优良的工作环境以及良好的激励机制，吸引了一批年轻的、有学识的、有实干精神的人才。公司拥有超过40人的专业研发团队和优秀的客户服务团队，为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展，最大化实现ＩＴ信息系统价值。&lt;img width=&quot;530&quot; height=&quot;340&quot; src=&quot;http://api.map.baidu.com/staticimage?center=117.272094,31.843713&amp;zoom=18&amp;width=530&amp;height=340&amp;markers=117.272094,31.843713&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;'),
(2, '&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; width: 440px; font-size: 14px; color: rgb(85, 85, 85); line-height: 35.7px; font-family: &amp;quot;Microsoft Yahei&amp;quot;; white-space: normal;&quot;&gt;公司电话：0755-86133118、86133119&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; width: 440px; font-size: 14px; color: rgb(85, 85, 85); line-height: 35.7px; font-family: &amp;quot;Microsoft Yahei&amp;quot;; white-space: normal;&quot;&gt;公司传真：0755-86133117&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; width: 440px; font-size: 14px; color: rgb(85, 85, 85); line-height: 35.7px; font-family: &amp;quot;Microsoft Yahei&amp;quot;; white-space: normal;&quot;&gt;公司邮箱：86133117@163.com&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 0px; padding: 0px; width: 440px; font-size: 14px; color: rgb(85, 85, 85); line-height: 35.7px; font-family: &amp;quot;Microsoft Yahei&amp;quot;; white-space: normal;&quot;&gt;公司地址：深圳市南山区科技园北区清华信息港科研楼605&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- 表的结构 `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(9) NOT NULL AUTO_INCREMENT COMMENT '记录id',
  `title` varchar(50) NOT NULL COMMENT '网站标题',
  `url` varchar(50) NOT NULL COMMENT '网站域名',
  `name` varchar(30) NOT NULL COMMENT '网站联系人',
  `address` varchar(50) NOT NULL COMMENT '公司地址',
  `keywords` varchar(30) NOT NULL COMMENT '网站关键词',
  `icp` varchar(30) NOT NULL COMMENT '备案号',
  `email` varchar(50) NOT NULL COMMENT '邮箱',
  `qq` varchar(20) NOT NULL COMMENT 'qq号码',
  `description` varchar(100) NOT NULL COMMENT '网站描述',
  `tel` varchar(11) NOT NULL COMMENT '手机号码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='网站配置表' AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `config`
--

INSERT INTO `config` (`id`, `title`, `url`, `name`, `address`, `keywords`, `icp`, `email`, `qq`, `description`, `tel`) VALUES
(1, '合肥诺博源软件科技有限公司 ', 'http://www.knowbyoo.com', '王总', '合肥市蜀山区', 'php编程', '皖备05007539号-7', 'chengyanjun506@163.com', '2416411477@qq.com', '以php编程为主', '15324491368');

-- --------------------------------------------------------

--
-- 表的结构 `cp`
--

CREATE TABLE IF NOT EXISTS `cp` (
  `cpid` int(9) NOT NULL AUTO_INCREMENT,
  `cpname` varchar(30) NOT NULL,
  `cppic` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `cp_type` int(9) NOT NULL,
  `con` text NOT NULL,
  PRIMARY KEY (`cpid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='产品表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `cp`
--

INSERT INTO `cp` (`cpid`, `cpname`, `cppic`, `content`, `cp_type`, `con`) VALUES
(1, 'S3专属定制移动终端', 'cp/2017-07-13/20170713110559.jpg', '&lt;p&gt;&lt;span style=&quot;color: rgb(255, 255, 255); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 14px;&quot;&gt;S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......&lt;/span&gt;&lt;/p&gt;', 1, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......'),
(2, 'S3专属定制移动终端', 'cp/2017-07-13/20170713112021.jpg', '', 1, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......'),
(3, 'S3专属定制移动终端', 'cp/2017-07-13/20170713112056.jpg', '', 1, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......'),
(4, 'S3专属定制移动终端', 'cp/2017-07-13/20170713114359.jpg', '', 2, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......'),
(5, 'S3专属定制移动终端', 'cp/2017-07-13/20170713114419.jpg', '', 2, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......'),
(6, 'S3专属定制移动终端', 'cp/2017-07-13/20170713114511.jpg', '', 2, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......'),
(7, 'S3专属定制移动终端', 'cp/2017-07-13/20170713114550.jpg', '', 3, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......'),
(8, 'S3专属定制移动终端', 'cp/2017-07-13/20170713114619.jpg', '', 3, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......'),
(9, 'S3专属定制移动终端', 'cp/2017-07-13/20170713114642.jpg', '', 3, 'S3为每一位客户提供即时、可靠、专业的技术支持；完善、快速的售后服务；帮助客户建立持续的 IT 运营体系，支持企业快速发展......');

-- --------------------------------------------------------

--
-- 表的结构 `cp_type`
--

CREATE TABLE IF NOT EXISTS `cp_type` (
  `typeid` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='产品分类表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `cp_type`
--

INSERT INTO `cp_type` (`typeid`, `name`) VALUES
(1, '企业应用软件'),
(2, 'IT互联网产品系统'),
(3, '手机软件');

-- --------------------------------------------------------

--
-- 表的结构 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `content` text NOT NULL,
  `shijian` varchar(40) NOT NULL,
  `newsid` int(9) NOT NULL,
  `userid` int(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=140 ;

--
-- 转存表中的数据 `message`
--

INSERT INTO `message` (`id`, `content`, `shijian`, `newsid`, `userid`) VALUES
(73, '今天天气好热', '2017-07-07 12:02:06', 63, 2),
(74, '88888', '2017-07-10 09:35:16', 63, 2),
(75, '777777', '2017-07-10 09:44:17', 63, 2),
(76, '今天气温30度，大家要注意防署', '2017-07-10 09:53:07', 63, 1),
(77, '大家好', '2017-07-10 09:59:12', 63, 1),
(78, '大家要多多留言', '2017-07-10 09:59:38', 63, 1),
(79, '人气好少', '2017-07-10 10:00:23', 64, 1),
(80, '88888', '2017-07-10 10:36:32', 63, 2),
(81, '67890', '2017-07-10 10:38:45', 63, 2),
(85, '8888888', '2017-07-10 11:51:45', 63, 1),
(86, '098765', '2017-07-10 11:53:01', 63, 1),
(87, '567890', '2017-07-10 11:53:50', 63, 1),
(88, '888888', '2017-07-10 11:57:15', 63, 1),
(90, '888888', '2017-07-11 09:22:01', 65, 1),
(91, '999999', '2017-07-11 09:22:05', 65, 1),
(92, '6666666', '2017-07-11 09:22:08', 65, 1),
(93, '55555555', '2017-07-11 09:22:10', 65, 1),
(94, '不错', '2017-07-11 09:22:29', 66, 1),
(95, '不错', '2017-07-11 09:22:31', 66, 1),
(96, '不错', '2017-07-11 09:22:32', 66, 1),
(97, '不错', '2017-07-11 09:22:32', 66, 1),
(98, '不错', '2017-07-11 09:46:27', 66, 1),
(99, '不错', '2017-07-11 09:46:32', 66, 1),
(100, '不错', '2017-07-11 09:46:32', 66, 1),
(101, '不错', '2017-07-11 09:46:33', 66, 1),
(102, '不错', '2017-07-11 09:46:33', 66, 1),
(103, '不错', '2017-07-11 09:46:33', 66, 1),
(104, '不错', '2017-07-11 09:46:33', 66, 1),
(105, '不错', '2017-07-11 09:46:34', 66, 1),
(106, '不错', '2017-07-11 09:46:34', 66, 1),
(107, '不错', '2017-07-11 09:46:34', 66, 1),
(108, '不错', '2017-07-11 09:46:34', 66, 1),
(109, '不错', '2017-07-11 09:46:34', 66, 1),
(110, '不错', '2017-07-11 09:46:35', 66, 1),
(111, '不错', '2017-07-11 09:46:35', 66, 1),
(112, '不错', '2017-07-11 09:46:35', 66, 1),
(113, '不错', '2017-07-11 09:46:35', 66, 1),
(114, '不错', '2017-07-11 09:46:35', 66, 1),
(115, '不错', '2017-07-11 09:46:35', 66, 1),
(116, '8', '2017-07-11 09:57:28', 65, 1),
(117, '8', '2017-07-11 09:57:29', 65, 1),
(118, '8', '2017-07-11 09:57:29', 65, 1),
(119, '8', '2017-07-11 09:57:29', 65, 1),
(120, '8', '2017-07-11 09:57:29', 65, 1),
(121, '8', '2017-07-11 09:57:30', 65, 1),
(122, '8', '2017-07-11 09:57:30', 65, 1),
(123, '8', '2017-07-11 09:57:30', 65, 1),
(124, '8', '2017-07-11 09:57:30', 65, 1),
(125, '8', '2017-07-11 09:57:30', 65, 1),
(126, '8', '2017-07-11 09:57:30', 65, 1),
(127, '8', '2017-07-11 09:57:30', 65, 1),
(128, '8', '2017-07-11 09:57:31', 65, 1),
(129, '8', '2017-07-11 09:57:31', 65, 1),
(130, '8', '2017-07-11 09:57:31', 65, 1),
(131, '8', '2017-07-11 09:57:31', 65, 1),
(132, '8', '2017-07-11 09:57:31', 65, 1),
(133, '8', '2017-07-11 09:57:31', 65, 1),
(134, '8', '2017-07-11 09:57:32', 65, 1),
(135, '8', '2017-07-11 09:57:32', 65, 1),
(136, '8', '2017-07-11 09:57:32', 65, 1),
(137, '8', '2017-07-11 09:57:32', 65, 1),
(138, '8', '2017-07-11 09:57:32', 65, 1),
(139, '8', '2017-07-11 09:57:32', 65, 1);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(9) NOT NULL AUTO_INCREMENT,
  `title` varchar(40) DEFAULT NULL,
  `content` text NOT NULL,
  `sj` varchar(30) NOT NULL,
  `type` varchar(3) NOT NULL,
  `newspic` varchar(50) NOT NULL,
  `count` int(9) NOT NULL,
  `tj` int(9) NOT NULL,
  `con` text NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻表' AUTO_INCREMENT=98 ;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`newsid`, `title`, `content`, `sj`, `type`, `newspic`, `count`, `tj`, `con`) VALUES
(61, '美国会棒球赛枪击:枪手连开50余枪 有议员受伤3', '&lt;p&gt;8888888888&lt;/p&gt;', '2017-07-12 11:53:20', '3', 'news/2017-07-07/20170707092116.png', 2, 0, ''),
(62, '收入分配改革有了新动作 这七大重点群体会增收', '&lt;p&gt;33333&lt;/p&gt;', '2017-07-07 09:22:10', '5', 'news/2017-07-07/20170707092210.jpg', 10, 0, ''),
(63, '收入分配改革有了新动作 这七大重点群体会增收', '&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;7月4日至8日，习近平主席对德国进行国事访问并出席在德国汉堡举行的二十国集团领导人第十二次峰会。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;近100小时、30多场双边和多边活动。习近平主席德国之行，为中德关系注入动力，为中欧合作夯实基础，为全球治理指明方向。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;开启中德“成功故事”新篇章&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;盛情邀请，应约而至。这是习近平担任国家主席后第二次踏上德国土地。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;2014年，习近平主席首访德国，双方确立中德全方位战略伙伴关系新定位。3年多来，中德关系蓬勃发展，进入历史最好时期。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;宾至如归，友好情谊扑面而来。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2017-07-10 09:36:32', '4', 'news/2017-07-07/20170707092225.jpg', 63, 0, ''),
(64, '行业新闻专家健康主题讲座、专家问诊和专属调养咨询、三餐定制......', '', '2017-07-07 09:58:23', '4', 'news/2017-07-07/20170707095823.png', 9, 0, ''),
(65, '专家健康主题讲座、专家问诊和专属调养咨询、三餐定制......', '', '2017-07-13 09:33:00', '5', 'news/2017-07-07/20170707095848.png', 19, 0, ''),
(66, '习近平会见韩国总统文在寅:希望韩方重视中方正当关切4', '&lt;h2 class=&quot;rv-title&quot; style=&quot;margin: 0px; padding: 0px; font-size: 16px; font-weight: normal; overflow: hidden;&quot;&gt;&lt;a href=&quot;http://v.qq.com/page/b/0/b/b0522vzjqjb.html&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; outline: 0px; color: rgb(255, 255, 255); display: block; font-size: 17px; text-indent: 12px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;&quot;&gt;习近平会见韩国总统文在寅&lt;/a&gt;&lt;/h2&gt;&lt;p&gt;&lt;a target=&quot;_self&quot; class=&quot;rv-player-mini-ctrl-mute mute-on&quot; title=&quot;声音开关&quot; style=&quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -180px;&quot;&gt;&lt;/a&gt;&lt;a target=&quot;_self&quot; class=&quot;rv-player-mini-ctrl-close&quot; title=&quot;关闭&quot; style=&quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px 0px;&quot;&gt;&lt;/a&gt;&lt;a target=&quot;_self&quot; class=&quot;rv-player-mini-ctrl-resize&quot; title=&quot;调整尺寸&quot; style=&quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -30px;&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;新华社柏林7月6日电（记者&lt;span class=&quot;infoMblog&quot;&gt;&lt;a class=&quot;a-tips-Article-QQ&quot; href=&quot;http://t.qq.com/luckylch2011#pref=qqcom.keyword&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&quot;&gt;刘畅&lt;/a&gt;&lt;/span&gt;&amp;nbsp;孙奕）国家主席习近平6日在柏林会见韩国总统文在寅。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;习近平指出，中韩地理相近、文化相通，互补优势明显。建交25年来，中韩双方秉持建交联合公报精神，本着相互理解、相互尊重原则，推动中韩关系实现跨越式发展，给两国和两国人民带来巨大福祉，也为地区和平稳定繁荣作出了重要贡献。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;习近平强调，文在寅总统派韩国政府代表团出席“一带一路”国际合作高峰论坛，派特使来华转交亲署信，表达改善和发展中韩关系、妥善处理敏感问题的积极意愿，我对此表示赞赏。一段时间以来，中韩关系面临困难，这是我们不愿看到的。中方重视韩国和中韩关系，致力于发展中韩友好的立场没有变。我们愿利用中韩建交25周年这一契机，同韩方认真回顾总结建交以来的经验教训，不忘初心、携手共进，推动中韩关系早日重回健康稳定发展的正确轨道。维护好、发展好中韩关系，是双方共同的责任。双方要立足大局，放眼长远，尊重彼此核心利益和重大关切。希望韩方重视中方正当关切，妥善处理有关问题，为中韩关系改善和发展扫除障碍。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;文在寅表示，韩方高度重视对华关系。韩中两国交往历史悠久，拥有广泛共同利益，已成为重要合作伙伴。我就任韩国总统以来，积极同中方开展良好互动。韩方也非常感谢中方企业协助打捞“世越”号沉船。韩方愿同中方一道，加强高层交往及各领域交流合作，将韩中关系打造成实质性战略伙伴关系。我充分理解中方有关关切，愿同中方进行深入沟通。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;两国元首还就朝鲜半岛形势交换了看法。习近平指出，中方坚持实现半岛无核化，坚持维护半岛和平稳定，坚持通过对话协商解决问题，主张所有有关各方严格遵守&lt;span class=&quot;infoMblog&quot;&gt;&lt;a class=&quot;a-tips-Article-QQ&quot; href=&quot;http://t.qq.com/WorldFoodProgramme#pref=qqcom.keyword&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&quot;&gt;联合国&lt;/a&gt;&lt;/span&gt;安理会有关决议。中方支持韩国新政府积极尝试同朝方重启接触对话、改善关系。国际社会应该一道努力，为缓和半岛局势发挥积极作用。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;文在寅表示，韩方积极评价中方为妥善解决朝鲜半岛核问题所作努力，赞同应尽力通过对话协商解决问题。韩方希望就实现朝鲜半岛无核化、维护本地区和平稳定同中方密切协调合作。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2017-07-10 09:23:50', '3', 'news/2017-07-07/20170707105127.png', 6, 0, ''),
(67, '收入分配改革有了新动作 这七大重点群体会增收', '', '2017-07-10 09:10:02', '4', '', 0, 0, ''),
(68, '收入分配改革有了新动作 这七大重点群体会增收', '', '2017-07-10 09:10:11', '4', '', 0, 0, ''),
(69, '收入分配改革有了新动作 这七大重点群体会增收', '', '2017-07-10 09:10:19', '4', '', 0, 0, ''),
(70, '收入分配改革有了新动作 这七大重点群体会增收', '', '2017-07-10 09:10:27', '4', '', 0, 0, ''),
(71, '收入分配改革有了新动作 这七大重点群体会增收', '', '2017-07-10 09:10:35', '4', '', 0, 0, ''),
(72, '收入分配改革有了新动作 这七大重点群体会增收', '', '2017-07-10 09:10:42', '4', '', 0, 0, ''),
(73, '收入分配改革有了新动作 这七大重点群体会增收1', '', '2017-07-10 09:23:19', '3', '', 0, 0, ''),
(74, '收入分配改革有了新动作 这七大重点群体会增收2', '', '2017-07-10 09:23:26', '3', '', 0, 0, ''),
(75, '专家健康主题讲座、专家问诊和专属调养咨询、三餐定制......', '&lt;p&gt;88&lt;/p&gt;', '2017-07-12 11:02:04', '9', '', 2, 0, ''),
(76, '专家健康主题讲座、专家问诊和专属调养咨询、三餐定制......', '', '2017-07-12 11:02:21', '9', '', 0, 0, ''),
(77, '专家健康主题讲座、专家问诊和专属调养咨询、三餐定制......', '', '2017-07-12 11:02:29', '9', '', 1, 0, ''),
(78, '专家健康主题讲座、专家问诊和专属调养咨询、三餐定制......', '', '2017-07-12 11:02:37', '9', '', 0, 0, ''),
(79, '专家健康主题讲座、专家问诊和专属调养咨询、三餐定制......', '', '2017-07-12 11:02:45', '9', '', 0, 0, ''),
(80, '专家健康主题讲座、专家问诊和专属调养咨询、三餐定制......', '', '2017-07-12 11:03:08', '9', '', 0, 0, ''),
(81, '软件技术大亨', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 12px; text-indent: 24px;&quot;&gt;深圳市诺博源软件技术有限公司成立于2006年，总部座落于深圳市高新科技园。我司是专业从事物流...&lt;/span&gt;&lt;/p&gt;', '2017-07-13 09:33:07', '4', 'news/2017-07-12/20170712115604.jpg', 2, 1, '深圳市诺博源软件技术有限公司成立于2006年，总部座落于深圳市高新科技园。我司是专业从事物流...'),
(82, '软件技术大亨', '&lt;p&gt;深圳市诺博源软件技术有限公司成立于2006年，总部座落于深圳市高新科技园。我司是专业从事物流...&lt;/p&gt;', '2017-07-13 09:25:47', '5', 'news/2017-07-12/20170712115534.jpg', 2, 1, '深圳市诺博源软件技术有限公司成立于2006年，总部座落于深圳市高新科技园。我司是专业从事物流...'),
(83, '软件技术大亨', '&lt;p&gt;&lt;span style=&quot;color: rgb(51, 51, 51); font-family: &amp;quot;Microsoft Yahei&amp;quot;; font-size: 12px; text-indent: 24px;&quot;&gt;深圳市诺博源软件技术有限公司成立于2006年，总部座落于深圳市高新科技园。我司是专业从事物流...&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', '2017-07-13 09:27:24', '5', 'news/2017-07-12/20170712115547.jpg', 1, 1, '深圳市诺博源软件技术有限公司成立于2006年，总部座落于深圳市高新科技园。我司是专业从事物流...'),
(84, '美国会棒球赛枪击:枪手连开50余枪 有议员受伤3', '&lt;p&gt;8888888888&lt;/p&gt;', '2017-07-12 11:53:20', '3', '', 2, 0, ''),
(85, '习近平会见韩国总统文在寅:希望韩方重视中方正当关切4', '&lt;h2 class=&quot;rv-title&quot; style=&quot;margin: 0px; padding: 0px; font-size: 16px; font-weight: normal; overflow: hidden;&quot;&gt;&lt;a href=&quot;http://v.qq.com/page/b/0/b/b0522vzjqjb.html&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; outline: 0px; color: rgb(255, 255, 255); display: block; font-size: 17px; text-indent: 12px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;&quot;&gt;习近平会见韩国总统文在寅&lt;/a&gt;&lt;/h2&gt;&lt;p&gt;&lt;a target=&quot;_self&quot; class=&quot;rv-player-mini-ctrl-mute mute-on&quot; title=&quot;声音开关&quot; style=&quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -180px;&quot;&gt;&lt;/a&gt;&lt;a target=&quot;_self&quot; class=&quot;rv-player-mini-ctrl-close&quot; title=&quot;关闭&quot; style=&quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px 0px;&quot;&gt;&lt;/a&gt;&lt;a target=&quot;_self&quot; class=&quot;rv-player-mini-ctrl-resize&quot; title=&quot;调整尺寸&quot; style=&quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -30px;&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;p style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;&lt;br/&gt;&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;新华社柏林7月6日电（记者&lt;span class=&quot;infoMblog&quot;&gt;&lt;a class=&quot;a-tips-Article-QQ&quot; href=&quot;http://t.qq.com/luckylch2011#pref=qqcom.keyword&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&quot;&gt;刘畅&lt;/a&gt;&lt;/span&gt;&amp;nbsp;孙奕）国家主席习近平6日在柏林会见韩国总统文在寅。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;习近平指出，中韩地理相近、文化相通，互补优势明显。建交25年来，中韩双方秉持建交联合公报精神，本着相互理解、相互尊重原则，推动中韩关系实现跨越式发展，给两国和两国人民带来巨大福祉，也为地区和平稳定繁荣作出了重要贡献。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;习近平强调，文在寅总统派韩国政府代表团出席“一带一路”国际合作高峰论坛，派特使来华转交亲署信，表达改善和发展中韩关系、妥善处理敏感问题的积极意愿，我对此表示赞赏。一段时间以来，中韩关系面临困难，这是我们不愿看到的。中方重视韩国和中韩关系，致力于发展中韩友好的立场没有变。我们愿利用中韩建交25周年这一契机，同韩方认真回顾总结建交以来的经验教训，不忘初心、携手共进，推动中韩关系早日重回健康稳定发展的正确轨道。维护好、发展好中韩关系，是双方共同的责任。双方要立足大局，放眼长远，尊重彼此核心利益和重大关切。希望韩方重视中方正当关切，妥善处理有关问题，为中韩关系改善和发展扫除障碍。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;文在寅表示，韩方高度重视对华关系。韩中两国交往历史悠久，拥有广泛共同利益，已成为重要合作伙伴。我就任韩国总统以来，积极同中方开展良好互动。韩方也非常感谢中方企业协助打捞“世越”号沉船。韩方愿同中方一道，加强高层交往及各领域交流合作，将韩中关系打造成实质性战略伙伴关系。我充分理解中方有关关切，愿同中方进行深入沟通。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;两国元首还就朝鲜半岛形势交换了看法。习近平指出，中方坚持实现半岛无核化，坚持维护半岛和平稳定，坚持通过对话协商解决问题，主张所有有关各方严格遵守&lt;span class=&quot;infoMblog&quot;&gt;&lt;a class=&quot;a-tips-Article-QQ&quot; href=&quot;http://t.qq.com/WorldFoodProgramme#pref=qqcom.keyword&quot; target=&quot;_blank&quot; style=&quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&quot;&gt;联合国&lt;/a&gt;&lt;/span&gt;安理会有关决议。中方支持韩国新政府积极尝试同朝方重启接触对话、改善关系。国际社会应该一道努力，为缓和半岛局势发挥积极作用。&lt;/p&gt;&lt;p class=&quot;text&quot; style=&quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;quot;Microsoft Yahei&amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&quot;&gt;文在寅表示，韩方积极评价中方为妥善解决朝鲜半岛核问题所作努力，赞同应尽力通过对话协商解决问题。韩方希望就实现朝鲜半岛无核化、维护本地区和平稳定同中方密切协调合作。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2017-07-10 09:23:50', '3', '', 6, 0, ''),
(86, '美国会棒球赛枪击:枪手连开50余枪 有议员受伤3', '&amp;lt;p&amp;gt;8888888888&amp;lt;/p&amp;gt;', '2017-07-12 11:53:20', '3', '', 2, 0, ''),
(87, '习近平会见韩国总统文在寅:希望韩方重视中方正当关切4', '&amp;lt;h2 class=&amp;quot;rv-title&amp;quot; style=&amp;quot;margin: 0px; padding: 0px; font-size: 16px; font-weight: normal; overflow: hidden;&amp;quot;&amp;gt;&amp;lt;a href=&amp;quot;http://v.qq.com/page/b/0/b/b0522vzjqjb.html&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(255, 255, 255); display: block; font-size: 17px; text-indent: 12px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;&amp;quot;&amp;gt;习近平会见韩国总统文在寅&amp;lt;/a&amp;gt;&amp;lt;/h2&amp;gt;&amp;lt;p&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-mute mute-on&amp;quot; title=&amp;quot;声音开关&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -180px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-close&amp;quot; title=&amp;quot;关闭&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px 0px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-resize&amp;quot; title=&amp;quot;调整尺寸&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -30px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&amp;quot;&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;新华社柏林7月6日电（记者&amp;lt;span class=&amp;quot;infoMblog&amp;quot;&amp;gt;&amp;lt;a class=&amp;quot;a-tips-Article-QQ&amp;quot; href=&amp;quot;http://t.qq.com/luckylch2011#pref=qqcom.keyword&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&amp;quot;&amp;gt;刘畅&amp;lt;/a&amp;gt;&amp;lt;/span&amp;gt;&amp;amp;nbsp;孙奕）国家主席习近平6日在柏林会见韩国总统文在寅。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;习近平指出，中韩地理相近、文化相通，互补优势明显。建交25年来，中韩双方秉持建交联合公报精神，本着相互理解、相互尊重原则，推动中韩关系实现跨越式发展，给两国和两国人民带来巨大福祉，也为地区和平稳定繁荣作出了重要贡献。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;习近平强调，文在寅总统派韩国政府代表团出席“一带一路”国际合作高峰论坛，派特使来华转交亲署信，表达改善和发展中韩关系、妥善处理敏感问题的积极意愿，我对此表示赞赏。一段时间以来，中韩关系面临困难，这是我们不愿看到的。中方重视韩国和中韩关系，致力于发展中韩友好的立场没有变。我们愿利用中韩建交25周年这一契机，同韩方认真回顾总结建交以来的经验教训，不忘初心、携手共进，推动中韩关系早日重回健康稳定发展的正确轨道。维护好、发展好中韩关系，是双方共同的责任。双方要立足大局，放眼长远，尊重彼此核心利益和重大关切。希望韩方重视中方正当关切，妥善处理有关问题，为中韩关系改善和发展扫除障碍。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;文在寅表示，韩方高度重视对华关系。韩中两国交往历史悠久，拥有广泛共同利益，已成为重要合作伙伴。我就任韩国总统以来，积极同中方开展良好互动。韩方也非常感谢中方企业协助打捞“世越”号沉船。韩方愿同中方一道，加强高层交往及各领域交流合作，将韩中关系打造成实质性战略伙伴关系。我充分理解中方有关关切，愿同中方进行深入沟通。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;两国元首还就朝鲜半岛形势交换了看法。习近平指出，中方坚持实现半岛无核化，坚持维护半岛和平稳定，坚持通过对话协商解决问题，主张所有有关各方严格遵守&amp;lt;span class=&amp;quot;infoMblog&amp;quot;&amp;gt;&amp;lt;a class=&amp;quot;a-tips-Article-QQ&amp;quot; href=&amp;quot;http://t.qq.com/WorldFoodProgramme#pref=qqcom.keyword&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&amp;quot;&amp;gt;联合国&amp;lt;/a&amp;gt;&amp;lt;/span&amp;gt;安理会有关决议。中方支持韩国新政府积极尝试同朝方重启接触对话、改善关系。国际社会应该一道努力，为缓和半岛局势发挥积极作用。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;文在寅表示，韩方积极评价中方为妥善解决朝鲜半岛核问题所作努力，赞同应尽力通过对话协商解决问题。韩方希望就实现朝鲜半岛无核化、维护本地区和平稳定同中方密切协调合作。&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;/p&amp;gt;', '2017-07-10 09:23:50', '3', '', 6, 0, ''),
(88, '收入分配改革有了新动作 这七大重点群体会增收1', '', '2017-07-10 09:23:19', '3', '', 0, 0, ''),
(89, '美国会棒球赛枪击:枪手连开50余枪 有议员受伤3', '&amp;lt;p&amp;gt;8888888888&amp;lt;/p&amp;gt;', '2017-07-12 11:53:20', '3', '', 2, 0, ''),
(90, '习近平会见韩国总统文在寅:希望韩方重视中方正当关切4', '&amp;lt;h2 class=&amp;quot;rv-title&amp;quot; style=&amp;quot;margin: 0px; padding: 0px; font-size: 16px; font-weight: normal; overflow: hidden;&amp;quot;&amp;gt;&amp;lt;a href=&amp;quot;http://v.qq.com/page/b/0/b/b0522vzjqjb.html&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(255, 255, 255); display: block; font-size: 17px; text-indent: 12px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;&amp;quot;&amp;gt;习近平会见韩国总统文在寅&amp;lt;/a&amp;gt;&amp;lt;/h2&amp;gt;&amp;lt;p&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-mute mute-on&amp;quot; title=&amp;quot;声音开关&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -180px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-close&amp;quot; title=&amp;quot;关闭&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px 0px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-resize&amp;quot; title=&amp;quot;调整尺寸&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -30px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&amp;quot;&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;新华社柏林7月6日电（记者&amp;lt;span class=&amp;quot;infoMblog&amp;quot;&amp;gt;&amp;lt;a class=&amp;quot;a-tips-Article-QQ&amp;quot; href=&amp;quot;http://t.qq.com/luckylch2011#pref=qqcom.keyword&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&amp;quot;&amp;gt;刘畅&amp;lt;/a&amp;gt;&amp;lt;/span&amp;gt;&amp;amp;nbsp;孙奕）国家主席习近平6日在柏林会见韩国总统文在寅。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;习近平指出，中韩地理相近、文化相通，互补优势明显。建交25年来，中韩双方秉持建交联合公报精神，本着相互理解、相互尊重原则，推动中韩关系实现跨越式发展，给两国和两国人民带来巨大福祉，也为地区和平稳定繁荣作出了重要贡献。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;习近平强调，文在寅总统派韩国政府代表团出席“一带一路”国际合作高峰论坛，派特使来华转交亲署信，表达改善和发展中韩关系、妥善处理敏感问题的积极意愿，我对此表示赞赏。一段时间以来，中韩关系面临困难，这是我们不愿看到的。中方重视韩国和中韩关系，致力于发展中韩友好的立场没有变。我们愿利用中韩建交25周年这一契机，同韩方认真回顾总结建交以来的经验教训，不忘初心、携手共进，推动中韩关系早日重回健康稳定发展的正确轨道。维护好、发展好中韩关系，是双方共同的责任。双方要立足大局，放眼长远，尊重彼此核心利益和重大关切。希望韩方重视中方正当关切，妥善处理有关问题，为中韩关系改善和发展扫除障碍。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;文在寅表示，韩方高度重视对华关系。韩中两国交往历史悠久，拥有广泛共同利益，已成为重要合作伙伴。我就任韩国总统以来，积极同中方开展良好互动。韩方也非常感谢中方企业协助打捞“世越”号沉船。韩方愿同中方一道，加强高层交往及各领域交流合作，将韩中关系打造成实质性战略伙伴关系。我充分理解中方有关关切，愿同中方进行深入沟通。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;两国元首还就朝鲜半岛形势交换了看法。习近平指出，中方坚持实现半岛无核化，坚持维护半岛和平稳定，坚持通过对话协商解决问题，主张所有有关各方严格遵守&amp;lt;span class=&amp;quot;infoMblog&amp;quot;&amp;gt;&amp;lt;a class=&amp;quot;a-tips-Article-QQ&amp;quot; href=&amp;quot;http://t.qq.com/WorldFoodProgramme#pref=qqcom.keyword&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&amp;quot;&amp;gt;联合国&amp;lt;/a&amp;gt;&amp;lt;/span&amp;gt;安理会有关决议。中方支持韩国新政府积极尝试同朝方重启接触对话、改善关系。国际社会应该一道努力，为缓和半岛局势发挥积极作用。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;文在寅表示，韩方积极评价中方为妥善解决朝鲜半岛核问题所作努力，赞同应尽力通过对话协商解决问题。韩方希望就实现朝鲜半岛无核化、维护本地区和平稳定同中方密切协调合作。&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;/p&amp;gt;', '2017-07-10 09:23:50', '3', '', 6, 0, ''),
(91, '收入分配改革有了新动作 这七大重点群体会增收1', '', '2017-07-10 09:23:19', '3', '', 0, 0, ''),
(92, '美国会棒球赛枪击:枪手连开50余枪 有议员受伤3', '&amp;lt;p&amp;gt;8888888888&amp;lt;/p&amp;gt;', '2017-07-12 11:53:20', '3', '', 2, 0, ''),
(93, '习近平会见韩国总统文在寅:希望韩方重视中方正当关切4', '&amp;lt;h2 class=&amp;quot;rv-title&amp;quot; style=&amp;quot;margin: 0px; padding: 0px; font-size: 16px; font-weight: normal; overflow: hidden;&amp;quot;&amp;gt;&amp;lt;a href=&amp;quot;http://v.qq.com/page/b/0/b/b0522vzjqjb.html&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(255, 255, 255); display: block; font-size: 17px; text-indent: 12px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;&amp;quot;&amp;gt;习近平会见韩国总统文在寅&amp;lt;/a&amp;gt;&amp;lt;/h2&amp;gt;&amp;lt;p&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-mute mute-on&amp;quot; title=&amp;quot;声音开关&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -180px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-close&amp;quot; title=&amp;quot;关闭&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px 0px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-resize&amp;quot; title=&amp;quot;调整尺寸&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -30px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&amp;quot;&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;新华社柏林7月6日电（记者&amp;lt;span class=&amp;quot;infoMblog&amp;quot;&amp;gt;&amp;lt;a class=&amp;quot;a-tips-Article-QQ&amp;quot; href=&amp;quot;http://t.qq.com/luckylch2011#pref=qqcom.keyword&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&amp;quot;&amp;gt;刘畅&amp;lt;/a&amp;gt;&amp;lt;/span&amp;gt;&amp;amp;nbsp;孙奕）国家主席习近平6日在柏林会见韩国总统文在寅。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;习近平指出，中韩地理相近、文化相通，互补优势明显。建交25年来，中韩双方秉持建交联合公报精神，本着相互理解、相互尊重原则，推动中韩关系实现跨越式发展，给两国和两国人民带来巨大福祉，也为地区和平稳定繁荣作出了重要贡献。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;习近平强调，文在寅总统派韩国政府代表团出席“一带一路”国际合作高峰论坛，派特使来华转交亲署信，表达改善和发展中韩关系、妥善处理敏感问题的积极意愿，我对此表示赞赏。一段时间以来，中韩关系面临困难，这是我们不愿看到的。中方重视韩国和中韩关系，致力于发展中韩友好的立场没有变。我们愿利用中韩建交25周年这一契机，同韩方认真回顾总结建交以来的经验教训，不忘初心、携手共进，推动中韩关系早日重回健康稳定发展的正确轨道。维护好、发展好中韩关系，是双方共同的责任。双方要立足大局，放眼长远，尊重彼此核心利益和重大关切。希望韩方重视中方正当关切，妥善处理有关问题，为中韩关系改善和发展扫除障碍。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;文在寅表示，韩方高度重视对华关系。韩中两国交往历史悠久，拥有广泛共同利益，已成为重要合作伙伴。我就任韩国总统以来，积极同中方开展良好互动。韩方也非常感谢中方企业协助打捞“世越”号沉船。韩方愿同中方一道，加强高层交往及各领域交流合作，将韩中关系打造成实质性战略伙伴关系。我充分理解中方有关关切，愿同中方进行深入沟通。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;两国元首还就朝鲜半岛形势交换了看法。习近平指出，中方坚持实现半岛无核化，坚持维护半岛和平稳定，坚持通过对话协商解决问题，主张所有有关各方严格遵守&amp;lt;span class=&amp;quot;infoMblog&amp;quot;&amp;gt;&amp;lt;a class=&amp;quot;a-tips-Article-QQ&amp;quot; href=&amp;quot;http://t.qq.com/WorldFoodProgramme#pref=qqcom.keyword&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&amp;quot;&amp;gt;联合国&amp;lt;/a&amp;gt;&amp;lt;/span&amp;gt;安理会有关决议。中方支持韩国新政府积极尝试同朝方重启接触对话、改善关系。国际社会应该一道努力，为缓和半岛局势发挥积极作用。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;文在寅表示，韩方积极评价中方为妥善解决朝鲜半岛核问题所作努力，赞同应尽力通过对话协商解决问题。韩方希望就实现朝鲜半岛无核化、维护本地区和平稳定同中方密切协调合作。&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;/p&amp;gt;', '2017-07-10 09:23:50', '3', '', 6, 0, ''),
(94, '收入分配改革有了新动作 这七大重点群体会增收1', '', '2017-07-10 09:23:19', '3', '', 0, 0, ''),
(95, '美国会棒球赛枪击:枪手连开50余枪 有议员受伤3', '&amp;lt;p&amp;gt;8888888888&amp;lt;/p&amp;gt;', '2017-07-12 11:53:20', '3', '', 2, 0, '');
INSERT INTO `news` (`newsid`, `title`, `content`, `sj`, `type`, `newspic`, `count`, `tj`, `con`) VALUES
(96, '习近平会见韩国总统文在寅:希望韩方重视中方正当关切4', '&amp;lt;h2 class=&amp;quot;rv-title&amp;quot; style=&amp;quot;margin: 0px; padding: 0px; font-size: 16px; font-weight: normal; overflow: hidden;&amp;quot;&amp;gt;&amp;lt;a href=&amp;quot;http://v.qq.com/page/b/0/b/b0522vzjqjb.html&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(255, 255, 255); display: block; font-size: 17px; text-indent: 12px; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;&amp;quot;&amp;gt;习近平会见韩国总统文在寅&amp;lt;/a&amp;gt;&amp;lt;/h2&amp;gt;&amp;lt;p&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-mute mute-on&amp;quot; title=&amp;quot;声音开关&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -180px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-close&amp;quot; title=&amp;quot;关闭&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px 0px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;a target=&amp;quot;_self&amp;quot; class=&amp;quot;rv-player-mini-ctrl-resize&amp;quot; title=&amp;quot;调整尺寸&amp;quot; style=&amp;quot;outline: 0px; display: block; margin-top: 3px; width: 30px; height: 30px; line-height: 30px; background-color: rgba(0, 0, 0, 0.6); background-image: url(&amp;amp;quot;http://mat1.gtimg.com/news/dc/images/rv_mini_sprites_v2.png&amp;amp;quot;); background-repeat: no-repeat; text-align: center; background-position: 0px -30px;&amp;quot;&amp;gt;&amp;lt;/a&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255);&amp;quot;&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;新华社柏林7月6日电（记者&amp;lt;span class=&amp;quot;infoMblog&amp;quot;&amp;gt;&amp;lt;a class=&amp;quot;a-tips-Article-QQ&amp;quot; href=&amp;quot;http://t.qq.com/luckylch2011#pref=qqcom.keyword&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&amp;quot;&amp;gt;刘畅&amp;lt;/a&amp;gt;&amp;lt;/span&amp;gt;&amp;amp;nbsp;孙奕）国家主席习近平6日在柏林会见韩国总统文在寅。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;习近平指出，中韩地理相近、文化相通，互补优势明显。建交25年来，中韩双方秉持建交联合公报精神，本着相互理解、相互尊重原则，推动中韩关系实现跨越式发展，给两国和两国人民带来巨大福祉，也为地区和平稳定繁荣作出了重要贡献。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;习近平强调，文在寅总统派韩国政府代表团出席“一带一路”国际合作高峰论坛，派特使来华转交亲署信，表达改善和发展中韩关系、妥善处理敏感问题的积极意愿，我对此表示赞赏。一段时间以来，中韩关系面临困难，这是我们不愿看到的。中方重视韩国和中韩关系，致力于发展中韩友好的立场没有变。我们愿利用中韩建交25周年这一契机，同韩方认真回顾总结建交以来的经验教训，不忘初心、携手共进，推动中韩关系早日重回健康稳定发展的正确轨道。维护好、发展好中韩关系，是双方共同的责任。双方要立足大局，放眼长远，尊重彼此核心利益和重大关切。希望韩方重视中方正当关切，妥善处理有关问题，为中韩关系改善和发展扫除障碍。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;文在寅表示，韩方高度重视对华关系。韩中两国交往历史悠久，拥有广泛共同利益，已成为重要合作伙伴。我就任韩国总统以来，积极同中方开展良好互动。韩方也非常感谢中方企业协助打捞“世越”号沉船。韩方愿同中方一道，加强高层交往及各领域交流合作，将韩中关系打造成实质性战略伙伴关系。我充分理解中方有关关切，愿同中方进行深入沟通。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;两国元首还就朝鲜半岛形势交换了看法。习近平指出，中方坚持实现半岛无核化，坚持维护半岛和平稳定，坚持通过对话协商解决问题，主张所有有关各方严格遵守&amp;lt;span class=&amp;quot;infoMblog&amp;quot;&amp;gt;&amp;lt;a class=&amp;quot;a-tips-Article-QQ&amp;quot; href=&amp;quot;http://t.qq.com/WorldFoodProgramme#pref=qqcom.keyword&amp;quot; target=&amp;quot;_blank&amp;quot; style=&amp;quot;text-decoration: none; outline: 0px; color: rgb(0, 0, 0); border-bottom: 1px dotted rgb(83, 109, 166);&amp;quot;&amp;gt;联合国&amp;lt;/a&amp;gt;&amp;lt;/span&amp;gt;安理会有关决议。中方支持韩国新政府积极尝试同朝方重启接触对话、改善关系。国际社会应该一道努力，为缓和半岛局势发挥积极作用。&amp;lt;/p&amp;gt;&amp;lt;p class=&amp;quot;text&amp;quot; style=&amp;quot;margin-top: 0px; margin-bottom: 28px; padding: 0px; word-wrap: break-word; font-family: &amp;amp;quot;Microsoft Yahei&amp;amp;quot;, Helvetica, sans-serif; white-space: normal; background-color: rgb(255, 255, 255); text-indent: 2em;&amp;quot;&amp;gt;文在寅表示，韩方积极评价中方为妥善解决朝鲜半岛核问题所作努力，赞同应尽力通过对话协商解决问题。韩方希望就实现朝鲜半岛无核化、维护本地区和平稳定同中方密切协调合作。&amp;lt;/p&amp;gt;&amp;lt;p&amp;gt;&amp;lt;br/&amp;gt;&amp;lt;/p&amp;gt;', '2017-07-10 09:23:50', '3', '', 6, 0, ''),
(97, '收入分配改革有了新动作 这七大重点群体会增收1', '', '2017-07-10 09:23:19', '3', '', 0, 0, '');

-- --------------------------------------------------------

--
-- 表的结构 `news_type`
--

CREATE TABLE IF NOT EXISTS `news_type` (
  `typeid` int(9) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `sno` int(9) NOT NULL,
  PRIMARY KEY (`typeid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='新闻分类表' AUTO_INCREMENT=10 ;

--
-- 转存表中的数据 `news_type`
--

INSERT INTO `news_type` (`typeid`, `name`, `sno`) VALUES
(3, '国际新闻', 20),
(4, '行业新闻', 3),
(5, '国内新闻', 9),
(8, '娱乐新闻', 23),
(9, '公司新闻', 1);

-- --------------------------------------------------------

--
-- 表的结构 `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `tel` varchar(20) NOT NULL,
  `shijian` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pic` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `register`
--

INSERT INTO `register` (`id`, `username`, `pwd`, `tel`, `shijian`, `email`, `pic`) VALUES
(1, 'cyj506', 'e10adc3949ba59abbe56e057f20f883e', '15324491369', '1484374831', 'cyj506@163.com', 'person/2017-07-10/20170710113002.jpg'),
(2, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '15324491360', '1487002221', 'abc@163.com', 'person/2017-07-10/20170710112153.png'),
(3, 'admin1', 'e10adc3949ba59abbe56e057f20f883e', '15324491367', '1487002778', '123@163.com', ''),
(5, '_cyj', 'e10adc3949ba59abbe56e057f20f883e', '13688888899', '2017-07-05 11:21:17', 'cyj5068@163.com', '');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(9) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='用户表' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`userid`, `username`, `pwd`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'liubei', '21232f297a57a5a743894a0e4a801fc3'),
(3, 'cyj', '123456');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
