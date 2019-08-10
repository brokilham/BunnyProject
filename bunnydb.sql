/*
Navicat MySQL Data Transfer

Source Server         : mysql_localhost
Source Server Version : 100130
Source Host           : localhost:3306
Source Database       : bunnydb

Target Server Type    : MYSQL
Target Server Version : 100130
File Encoding         : 65001

Date: 2019-08-10 09:12:40
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for t_about
-- ----------------------------
DROP TABLE IF EXISTS `t_about`;
CREATE TABLE `t_about` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(255) DEFAULT NULL,
  `ControlNumber` int(11) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `UpdatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `CreatedBy` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_about
-- ----------------------------
INSERT INTO `t_about` VALUES ('1', 'We are professional, but we are informal and open. 1', '1', '2019-07-31 14:18:31', '2019-07-31 14:18:31', 'admin');
INSERT INTO `t_about` VALUES ('2', 'We create the most powerful values. ', '2', '2019-07-31 14:18:32', '2019-07-31 14:18:32', 'admin');
INSERT INTO `t_about` VALUES ('3', 'We know what\'s worth working for, even the smalllest details. ', '3', '2019-07-31 14:18:32', '2019-07-31 14:18:32', 'admin');
INSERT INTO `t_about` VALUES ('4', 'We know what our clients need and do best for them. ', '4', '2019-07-31 14:18:33', '2019-07-31 14:18:33', 'admin');
INSERT INTO `t_about` VALUES ('5', 'We’re thinkers and problem solvers. ', '5', '2019-07-31 14:18:34', '2019-07-31 14:18:34', 'admin');
INSERT INTO `t_about` VALUES ('6', 'We like and enjoy what we do. ', '6', '2019-07-31 14:18:34', '2019-07-31 14:18:34', 'admin');
INSERT INTO `t_about` VALUES ('7', 'We are in a creative and collaborative environment.', '7', '2019-07-31 14:18:35', '2019-07-31 14:18:35', 'admin');
INSERT INTO `t_about` VALUES ('8', 'We always love the unknow, love the new ideas.', '8', '2019-07-31 14:18:36', '2019-07-31 14:18:36', 'admin');
INSERT INTO `t_about` VALUES ('9', 'We are here to welcome you, work with us.', '9', '2019-07-31 14:18:38', '2019-07-31 14:18:38', 'admin');
INSERT INTO `t_about` VALUES ('10', 'asdsad', '0', '2019-08-03 10:56:50', '2019-08-03 10:56:50', 'admin');
INSERT INTO `t_about` VALUES ('11', 'asdsf', '0', '2019-08-03 10:57:55', '2019-08-03 10:57:55', 'admin');
INSERT INTO `t_about` VALUES ('12', 'fdgfdgfd', '0', '2019-08-03 11:01:49', '2019-08-03 11:01:49', 'admin');
INSERT INTO `t_about` VALUES ('13', 'asdsad', '0', '2019-08-03 11:03:49', '2019-08-03 11:03:49', 'admin');
INSERT INTO `t_about` VALUES ('14', 'asdsad fafa', '0', '2019-08-03 11:03:55', '2019-08-03 11:03:55', 'admin');
INSERT INTO `t_about` VALUES ('15', 'sdfdsfdsf', '0', '2019-08-03 11:04:31', '2019-08-03 11:04:31', 'admin');
INSERT INTO `t_about` VALUES ('16', 'safdf', '0', '2019-08-03 11:05:49', '2019-08-03 11:05:49', 'admin');
INSERT INTO `t_about` VALUES ('17', 'asdfasfds', '0', '2019-08-03 11:06:15', '2019-08-03 11:06:15', 'admin');
INSERT INTO `t_about` VALUES ('18', 'asdsag', '0', '2019-08-03 11:06:47', '2019-08-03 11:06:47', 'admin');
INSERT INTO `t_about` VALUES ('19', 'asdsag', '0', '2019-08-03 11:06:48', '2019-08-03 11:06:48', 'admin');
INSERT INTO `t_about` VALUES ('20', 'asdsag', '0', '2019-08-03 11:06:48', '2019-08-03 11:06:48', 'admin');
INSERT INTO `t_about` VALUES ('21', 'asdsag', '0', '2019-08-03 11:06:48', '2019-08-03 11:06:48', 'admin');
INSERT INTO `t_about` VALUES ('22', 'asdsag', '0', '2019-08-03 11:06:48', '2019-08-03 11:06:48', 'admin');
INSERT INTO `t_about` VALUES ('23', 'asdsag', '0', '2019-08-03 11:06:49', '2019-08-03 11:06:49', 'admin');
INSERT INTO `t_about` VALUES ('24', 'asdsag', '0', '2019-08-03 11:06:49', '2019-08-03 11:06:49', 'admin');
INSERT INTO `t_about` VALUES ('25', 'asdsag', '0', '2019-08-03 11:06:49', '2019-08-03 11:06:49', 'admin');
INSERT INTO `t_about` VALUES ('26', 'asdsag', '0', '2019-08-03 11:06:50', '2019-08-03 11:06:50', 'admin');
INSERT INTO `t_about` VALUES ('27', 'asdsag', '0', '2019-08-03 11:06:50', '2019-08-03 11:06:50', 'admin');
INSERT INTO `t_about` VALUES ('28', 'asdsag', '0', '2019-08-03 11:06:50', '2019-08-03 11:06:50', 'admin');
INSERT INTO `t_about` VALUES ('29', 'asdsad', '0', '2019-08-03 11:07:02', '2019-08-03 11:07:02', 'admin');
INSERT INTO `t_about` VALUES ('30', 'sdsaf', '0', '2019-08-03 11:08:21', '2019-08-03 11:08:21', 'admin');
INSERT INTO `t_about` VALUES ('31', 'sdsaf', '0', '2019-08-03 11:08:26', '2019-08-03 11:08:26', 'admin');

-- ----------------------------
-- Table structure for t_blog
-- ----------------------------
DROP TABLE IF EXISTS `t_blog`;
CREATE TABLE `t_blog` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `UpdatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `CreatedBy` varchar(255) DEFAULT NULL,
  `Category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_blog
-- ----------------------------
INSERT INTO `t_blog` VALUES ('1', 'article 1', '2019-07-31 11:39:25', '2019-07-31 11:39:28', 'admin', 'tes');
INSERT INTO `t_blog` VALUES ('2', 'article 2', '2019-07-31 11:39:50', '2019-07-31 11:39:50', 'admin', 'tes');

-- ----------------------------
-- Table structure for t_contact
-- ----------------------------
DROP TABLE IF EXISTS `t_contact`;
CREATE TABLE `t_contact` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `CreatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `UpdatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `Adress` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone1` varchar(255) DEFAULT NULL,
  `Phone2` varchar(255) DEFAULT NULL,
  `City` varchar(255) DEFAULT NULL,
  `ZipCode` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_contact
-- ----------------------------
INSERT INTO `t_contact` VALUES ('1', '2019-07-31 12:16:33', '2019-07-31 12:16:33', 'Ds tempel', 'Plato.ilham@gmail.com', '123', '456', 'Sidoarjo', '61262');

-- ----------------------------
-- Table structure for t_works
-- ----------------------------
DROP TABLE IF EXISTS `t_works`;
CREATE TABLE `t_works` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Client` varchar(255) DEFAULT NULL,
  `CreatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `UpdatedDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_works
-- ----------------------------
INSERT INTO `t_works` VALUES ('1', 'tes', 'tes', '2019-07-29 13:50:49', '2019-07-29 13:50:52');
INSERT INTO `t_works` VALUES ('2', 'tes1', 'tes1', '2019-07-29 13:58:14', '2019-07-29 13:58:14');
INSERT INTO `t_works` VALUES ('3', 'tes2', 'tes2', '2019-07-29 13:58:18', '2019-07-29 13:58:18');
INSERT INTO `t_works` VALUES ('4', 'tes3', 'tes3', '2019-07-29 13:58:22', '2019-07-29 13:58:22');
INSERT INTO `t_works` VALUES ('5', 'tes4', 'tes4', '2019-07-29 13:58:27', '2019-07-29 13:58:27');
INSERT INTO `t_works` VALUES ('6', 'tes5', 'tes5', '2019-07-29 13:58:32', '2019-07-29 13:58:32');

-- ----------------------------
-- Table structure for t_works_detail
-- ----------------------------
DROP TABLE IF EXISTS `t_works_detail`;
CREATE TABLE `t_works_detail` (
  `Id` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Challenge` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of t_works_detail
-- ----------------------------
