/*
Navicat MySQL Data Transfer

Source Server         : 本机
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : ep

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2016-11-25 12:36:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `ep_admin`
-- ----------------------------
DROP TABLE IF EXISTS `ep_admin`;
CREATE TABLE `ep_admin` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ep_admin
-- ----------------------------
INSERT INTO `ep_admin` VALUES ('1', 'admin', '123');

-- ----------------------------
-- Table structure for `ep_user`
-- ----------------------------
DROP TABLE IF EXISTS `ep_user`;
CREATE TABLE `ep_user` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `sex` varchar(16) NOT NULL,
  `phone` varchar(16) NOT NULL,
  `position` varchar(10) NOT NULL,
  `username` varchar(16) NOT NULL,
  `password` varchar(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ep_user
-- ----------------------------


-- ----------------------------
-- Table structure for `ep_notice`
-- ----------------------------
DROP TABLE IF EXISTS `ep_notice`;
CREATE TABLE `ep_notice` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `notice` text NOT NULL,
  `author` varchar(16) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ep_notice
-- ----------------------------

-- ----------------------------
-- Table structure for ep_ep
-- ----------------------------
DROP TABLE IF EXISTS `ep_express`;
CREATE TABLE `ep_express` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `number` varchar(20) NOT NULL,
  `jperson` varchar(10) NOT NULL,
  `sperson` varchar(10) NOT NULL,
  `jaddress` varchar(200) NOT NULL,
  `saddress` varchar(200) NOT NULL,
  `jphone` varchar(16) NOT NULL,
  `sphone` varchar(16) NOT NULL,
  `weight` decimal(12,2) NOT NULL,
  `price` decimal(12,2) NOT NULL,
  `state` varchar(16) NOT NULL,
  `username` varchar(16) ,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ep_express
-- ----------------------------

-- ----------------------------
-- Table structure for `ep_car`
-- ----------------------------
DROP TABLE IF EXISTS `ep_car`;
CREATE TABLE `ep_car` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `carnumber` varchar(10) NOT NULL,
  `caruser` int(8) NOT NULL,
  `create_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ep_car
-- ----------------------------

-- ----------------------------
-- Table structure for `ep_position`
-- ----------------------------
DROP TABLE IF EXISTS `ep_position`;
CREATE TABLE `ep_position` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(10) NOT NULL,
  `info` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ep_position
-- ----------------------------



