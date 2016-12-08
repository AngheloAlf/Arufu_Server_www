/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50714
Source Host           : 127.0.0.1:3306
Source Database       : realm_server

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2016-12-05 21:11:47
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for accounts
-- ----------------------------
DROP TABLE IF EXISTS `accounts`;
CREATE TABLE `accounts` (
  `guid` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(30) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` int(11) NOT NULL DEFAULT '0',
  `subscription` int(11) NOT NULL DEFAULT '0',
  `email` varchar(100) NOT NULL,
  `lastIP` varchar(15) NOT NULL DEFAULT '',
  `lastConnectionDate` varchar(100) NOT NULL DEFAULT '',
  `question` varchar(100) NOT NULL DEFAULT 'DELETE?',
  `reponse` varchar(100) NOT NULL DEFAULT 'DELETE',
  `pseudo` varchar(30) NOT NULL,
  `banned` tinyint(3) NOT NULL DEFAULT '0',
  `curIP` varchar(15) NOT NULL DEFAULT '',
  `logged` int(1) NOT NULL DEFAULT '0',
  `giftID` varchar(100) NOT NULL DEFAULT '' COMMENT 'giftID1;giftID2 ...',
  PRIMARY KEY (`guid`),
  UNIQUE KEY `account` (`account`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of accounts
-- ----------------------------
INSERT INTO `accounts` VALUES ('18', 'Test', 'Test', '4', '0', 'Test@test.test', '127.0.0.1', '2016~11~23~20~15', 'Test', 'Test', 'Test', '0', '', '0', '');
INSERT INTO `accounts` VALUES ('17', 'Anghelo95', 'Alf', '4', '0', 'angheloalf95@gmail.com', '127.0.0.1', '2016~12~04~13~31', 'Arf', 'Arufu', 'Arufu', '0', '', '0', '');

-- ----------------------------
-- Table structure for banip
-- ----------------------------
DROP TABLE IF EXISTS `banip`;
CREATE TABLE `banip` (
  `ip` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of banip
-- ----------------------------

-- ----------------------------
-- Table structure for gameservers
-- ----------------------------
DROP TABLE IF EXISTS `gameservers`;
CREATE TABLE `gameservers` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `ServerIP` text NOT NULL,
  `ServerPort` int(11) NOT NULL,
  `State` int(11) NOT NULL,
  `ServerBDD` text NOT NULL,
  `ServerDBName` text NOT NULL,
  `ServerUser` text NOT NULL,
  `ServerPassword` text NOT NULL,
  `key` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=904 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of gameservers
-- ----------------------------
INSERT INTO `gameservers` VALUES ('1', '127.0.0.1', '5555', '0', '127.0.0.1', 'alfus_server', 'root', '', 'server1');

-- ----------------------------
-- Table structure for rss
-- ----------------------------
DROP TABLE IF EXISTS `rss`;
CREATE TABLE `rss` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `icono` varchar(255) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `noticia` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of rss
-- ----------------------------
