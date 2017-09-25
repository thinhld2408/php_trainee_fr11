/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : fresher11

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-09-25 18:38:15
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `tbl_trainee`
-- ----------------------------
DROP TABLE IF EXISTS `tbl_trainee`;
CREATE TABLE `tbl_trainee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` int(255) DEFAULT NULL,
  `gender` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of tbl_trainee
-- ----------------------------
INSERT INTO `tbl_trainee` VALUES ('1', 'AnhNT9', 'anhnt9@smartosc.com', 'HN', '966607094', 'male', 'VN');
INSERT INTO `tbl_trainee` VALUES ('27', 'anhnt9', 'thuhang_d8cnpm.epu@gmail.com', 'HN', '966607094', 'male', 'VN');
INSERT INTO `tbl_trainee` VALUES ('28', 'anhnt9', 'thuhang_d8cnpm.epu@gmail.com', 'HN', '966607094', 'male', 'VN');
INSERT INTO `tbl_trainee` VALUES ('29', 'admin', 'anhnt30194@gmail.com', 'HN', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('30', 'admin', 'anhnt30194@gmail.com', 'HN', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('31', 'anhnt81', 'thuhang_d8cnpm.epu@gmail.com', 'HN', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('32', 'anhnt81', 'thuhang_d8cnpm.epu@gmail.com', 'HN', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('33', 'anhnt81', 'thuhang_d8cnpm.epu@gmail.com', 'HN', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('34', 'anhnt81', 'thuhang_d8cnpm.epu@gmail.com', 'HN', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('35', 'AnhNT81', 'anhntd00199@fpt.edu.vn', 'hn', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('36', 'AnhNT81', 'anhntd00199@fpt.edu.vn', 'hn', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('37', 'AnhNT81', 'anhntd00199@fpt.edu.vn', 'hn', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('38', 'AnhNT81', 'anhntd00199@fpt.edu.vn', 'hn', '966607094', 'female', 'VN');
INSERT INTO `tbl_trainee` VALUES ('39', 'anhnt81', 'anhntd00199@fpt.edu.vn', 'HN', '966607094', 'male', 'VN');
INSERT INTO `tbl_trainee` VALUES ('42', 'anhnt81', 'anhntd00199@fpt.edu.vn', 'HN', '966607094', 'female', 'aaaaaa');
