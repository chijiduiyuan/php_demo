/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : demo

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-19 12:19:30
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `news_keywords`
-- ----------------------------
DROP TABLE IF EXISTS `news_keywords`;
CREATE TABLE `news_keywords` (
  `news_id` int(8) NOT NULL,
  `kid` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='新闻关键字,中间表';

-- ----------------------------
-- Records of news_keywords
-- ----------------------------
INSERT INTO `news_keywords` VALUES ('1', '1');
INSERT INTO `news_keywords` VALUES ('1', '2');
INSERT INTO `news_keywords` VALUES ('1', '3');
INSERT INTO `news_keywords` VALUES ('2', '1');
INSERT INTO `news_keywords` VALUES ('2', '3');
INSERT INTO `news_keywords` VALUES ('3', '2');
INSERT INTO `news_keywords` VALUES ('3', '1');
