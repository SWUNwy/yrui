/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : wyecho

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-12-14 22:53:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `yr_auth_group`
-- ----------------------------
DROP TABLE IF EXISTS `yr_auth_group`;
CREATE TABLE `yr_auth_group` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `title` char(100) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `rules` char(80) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_auth_group
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_auth_group_access`
-- ----------------------------
DROP TABLE IF EXISTS `yr_auth_group_access`;
CREATE TABLE `yr_auth_group_access` (
  `uid` mediumint(8) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL,
  UNIQUE KEY `uid_group_id` (`uid`,`group_id`),
  KEY `uid` (`uid`),
  KEY `group_id` (`group_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_auth_group_access
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_auth_rule`
-- ----------------------------
DROP TABLE IF EXISTS `yr_auth_rule`;
CREATE TABLE `yr_auth_rule` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `name` char(80) NOT NULL DEFAULT '',
  `title` char(20) NOT NULL DEFAULT '',
  `type` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `condition` char(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_auth_rule
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_blog`
-- ----------------------------
DROP TABLE IF EXISTS `yr_blog`;
CREATE TABLE `yr_blog` (
  `id` int(16) NOT NULL AUTO_INCREMENT COMMENT '博文Id自增主键',
  `title` varchar(32) NOT NULL COMMENT '博文标题',
  `author` varchar(32) NOT NULL COMMENT '博文作者',
  `content` mediumtext NOT NULL COMMENT '博文内容',
  `keyword` varchar(255) NOT NULL COMMENT '博文关键字',
  `pic_url` varchar(255) NOT NULL COMMENT '博文图片URL',
  `category_id` int(16) NOT NULL COMMENT '博文所属分类Id',
  `is_up` tinyint(3) NOT NULL COMMENT '是否置顶',
  `type_id` int(9) NOT NULL COMMENT '栏目Id',
  `label` int(3) NOT NULL COMMENT '博文标签',
  `status` int(3) NOT NULL COMMENT '状态; 1为启用；0为禁用',
  `is_support` tinyint(3) NOT NULL COMMENT '是否为推荐文章',
  `remove` int(3) NOT NULL COMMENT '是否进入回收站：1：否；0：是',
  `add_time` datetime DEFAULT NULL COMMENT '首次添加时间',
  `last_time` datetime DEFAULT NULL COMMENT '最后修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_blog
-- ----------------------------
INSERT INTO `yr_blog` VALUES ('1', 'test', 'test', 'test', 'test', 'test', '1', '1', '1', '1', '0', '1', '0', '2017-12-06 21:58:25', '2017-12-08 22:40:36');

-- ----------------------------
-- Table structure for `yr_category`
-- ----------------------------
DROP TABLE IF EXISTS `yr_category`;
CREATE TABLE `yr_category` (
  `category_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '分类Id自增主键',
  `parent_id` int(16) NOT NULL COMMENT '父级分类Id',
  `sort_id` tinyint(3) NOT NULL COMMENT '排序Id',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '分类状态；启用：1，禁用：0，默认0',
  `is_show` tinyint(3) NOT NULL COMMENT '是否前台展示',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_category
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_category_description`
-- ----------------------------
DROP TABLE IF EXISTS `yr_category_description`;
CREATE TABLE `yr_category_description` (
  `category_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '分类Id自增主键',
  `name` varchar(32) NOT NULL COMMENT '分类名称',
  `description` text NOT NULL COMMENT '详细描述',
  `meta_title` varchar(32) NOT NULL COMMENT 'meta标题',
  `meta_keyword` varchar(32) NOT NULL COMMENT 'meta关键字',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_category_description
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_email`
-- ----------------------------
DROP TABLE IF EXISTS `yr_email`;
CREATE TABLE `yr_email` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `protocol` varchar(64) NOT NULL COMMENT '邮件协议',
  `host` varchar(128) NOT NULL COMMENT 'SMTP服务器主机',
  `user` varchar(128) NOT NULL COMMENT 'SMTP用户',
  `port` varchar(32) NOT NULL COMMENT 'SMTP端口号',
  `account` varchar(128) NOT NULL COMMENT '邮箱账号',
  `pwd` varchar(128) NOT NULL COMMENT '邮箱密码',
  `modified_time` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_email
-- ----------------------------
INSERT INTO `yr_email` VALUES ('1', '123', '123', '123', '123', '123', '123', '2017-11-13 00:02:11');

-- ----------------------------
-- Table structure for `yr_feedback`
-- ----------------------------
DROP TABLE IF EXISTS `yr_feedback`;
CREATE TABLE `yr_feedback` (
  `fb_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '评论feedback自增主键',
  `user_id` int(16) NOT NULL COMMENT '会员Id',
  `session_id` int(64) NOT NULL COMMENT '访问session',
  `content` text NOT NULL COMMENT '评论内容',
  `add_time` datetime NOT NULL COMMENT '评论时间',
  `modified_time` datetime NOT NULL COMMENT '回复时间',
  PRIMARY KEY (`fb_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_feedback
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_files`
-- ----------------------------
DROP TABLE IF EXISTS `yr_files`;
CREATE TABLE `yr_files` (
  `id` int(16) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(255) NOT NULL COMMENT '文件名',
  `path` varchar(255) NOT NULL COMMENT '文件路径',
  `md5` varchar(255) NOT NULL COMMENT 'md5',
  `sha1` varchar(255) NOT NULL COMMENT 'sha1',
  `add_time` datetime NOT NULL COMMENT '上传时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_files
-- ----------------------------

-- ----------------------------
-- Table structure for `yr_member`
-- ----------------------------
DROP TABLE IF EXISTS `yr_member`;
CREATE TABLE `yr_member` (
  `id` int(16) NOT NULL AUTO_INCREMENT COMMENT '会员Id自增主键',
  `uname` varchar(32) NOT NULL COMMENT '会员昵称',
  `email` varchar(64) NOT NULL COMMENT '登录邮箱/联系邮箱',
  `phone` int(16) NOT NULL COMMENT '会员电话/登录电话',
  `sex` tinyint(3) NOT NULL COMMENT '会员性别；0：女；1：男',
  `introduction` text NOT NULL COMMENT '自我介绍',
  `ip` varchar(255) NOT NULL COMMENT '最后一次访问IP',
  `last_time` datetime NOT NULL COMMENT '最后访问时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_member
-- ----------------------------
INSERT INTO `yr_member` VALUES ('1', 'yrui', 'yrui@cdyrui.com', '1234567890', '1', 'yrui', '::1', '2017-11-25 13:46:59');
INSERT INTO `yr_member` VALUES ('4', 'cdyrui', 'cdyrui@cdyrui.com', '1234567890', '1', 'cdyrui', '::1', '2017-11-20 23:25:32');

-- ----------------------------
-- Table structure for `yr_news`
-- ----------------------------
DROP TABLE IF EXISTS `yr_news`;
CREATE TABLE `yr_news` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `theme` varchar(16) NOT NULL COMMENT '主题',
  `content` varchar(16) NOT NULL COMMENT '内容',
  `introduction` varchar(16) NOT NULL COMMENT '资讯简介',
  `user` varchar(16) NOT NULL COMMENT '发布者',
  `email` varchar(16) NOT NULL COMMENT '邮箱',
  `add_time` datetime NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_news
-- ----------------------------
INSERT INTO `yr_news` VALUES ('1', 'theme', 'content', 'introduction', 'user', 'email@email.com', '2017-11-25 23:19:10');

-- ----------------------------
-- Table structure for `yr_system`
-- ----------------------------
DROP TABLE IF EXISTS `yr_system`;
CREATE TABLE `yr_system` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL COMMENT '标题',
  `keywords` varchar(255) NOT NULL COMMENT '关键词',
  `description` varchar(255) NOT NULL COMMENT '描述，简介',
  `icp` varchar(255) NOT NULL COMMENT 'ICP',
  `copyright` varchar(255) NOT NULL COMMENT 'copyright',
  `modified_time` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_system
-- ----------------------------
INSERT INTO `yr_system` VALUES ('1', 'wyecho', 'wyecho', 'wyecho', 'wyecho', 'wyecho', '2017-11-26 23:34:12');

-- ----------------------------
-- Table structure for `yr_user`
-- ----------------------------
DROP TABLE IF EXISTS `yr_user`;
CREATE TABLE `yr_user` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `uname` varchar(32) NOT NULL COMMENT '管理员名称',
  `pwd` varchar(255) NOT NULL COMMENT '管理员密码',
  `status` int(3) NOT NULL COMMENT '状态',
  `role_id` int(3) NOT NULL COMMENT '角色Id',
  `last_ip` varchar(255) DEFAULT NULL COMMENT '登录IP',
  `create_time` datetime DEFAULT NULL,
  `last_time` datetime DEFAULT NULL COMMENT '最后登录时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_user
-- ----------------------------
INSERT INTO `yr_user` VALUES ('1', 'yrui', '4ca3c2def8fdf3a054fc405e0f3b3f78', '0', '0', '0.0.0.0', '2017-12-10 00:00:00', '2017-12-12 22:42:38');

-- ----------------------------
-- Table structure for `yr_visit`
-- ----------------------------
DROP TABLE IF EXISTS `yr_visit`;
CREATE TABLE `yr_visit` (
  `v_id` int(16) NOT NULL AUTO_INCREMENT COMMENT '访客表自增主键Id',
  `v_time` datetime NOT NULL COMMENT '访问时间',
  `v_ip` varchar(255) NOT NULL COMMENT '访问IP',
  `type_id` tinyint(3) NOT NULL COMMENT '访问板块',
  PRIMARY KEY (`v_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of yr_visit
-- ----------------------------
