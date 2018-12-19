/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-19 12:19:38
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `keywords`
-- ----------------------------
DROP TABLE IF EXISTS `keywords`;
CREATE TABLE `keywords` (
  `kid` int(8) NOT NULL AUTO_INCREMENT,
  `word` varchar(20) NOT NULL,
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COMMENT='关键字表';

-- ----------------------------
-- Records of keywords
-- ----------------------------
INSERT INTO `keywords` VALUES ('1', 'PHP');
INSERT INTO `keywords` VALUES ('2', 'HTML');
INSERT INTO `keywords` VALUES ('3', 'MySql');
