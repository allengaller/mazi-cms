NO_DIR_IN_CREATE DATABASE  IF NOT EXISTS `mysql`
USE `mysql`;

DROP TABLE IF EXISTS `accounts_admin`;
CREATE TABLE `accounts_admin` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`group_id` int(11) DEFAULT NULL COMMENT 'Group ID',
	`account` varchar(45) DEFAULT NULL COMMNET 'Account Name',
	`password` varchar(64) DEFAULT NULL COMMENT 'Password',
	`role` tinytext COMMENT 'Each role have one permission sets.',
	`name` varchar(45) DEFAULT '' COMMENT 'Name',
	`gender` tinyint(4) DEFAULT '1' COMMENT '1:Male,2:Female',
	`mobile` bigint(11) DEFAULT NULL COMMNET 'Mobile Phone',
	`email` varchar(64) DEFAULT '',
	`remark` varchar(125) DEFAULT '',
	`status` tinyint(4) DEFAULT NULL COMMNET '1:Normal,2:Disable,3:Delete.',
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	PRIMARY KEY ('id')
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='Admin Account'

DROP TABLE IF EXISTS `accounts_user`;
CREATE TABLE `accounts_user` (

) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMENT='User Account'

DROP TABLE IF EXISTS `posts`;
DROP TABLE IF EXISTS `books`;
DROP TABLE IF EXISTS `memos`;
DROP TABLE IF EXISTS `journals`;

DROP TABLE IF EXISTS `tags`;

DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates` (
`id` INT(11) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL,
`slug` VARCHAR(255) NOT NULL, `parent_id` INT(11) DEFAULT NULL,
`lft` INT(11) DEFAULT NULL,
`rght` INT(11) DEFAULT NULL,
`link_count` INT(11) NOT NULL DEFAULT'0', PRIMARYKEY (`id`)
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='Categories';

DROP TABLE IF EXISTS `posts_tags`;

DROP TABLE IF EXISTS `posts_cates`;

DROP TABLE IF EXISTS `pages`;

DROP TABLE IF EXISTS `pages_tags`;

DROP TABLE IF EXISTS `pages_tags`;

DROP TABLE IF EXISTS `roles`;

DROP TABLE IF EXISTS `permissions`;

DROP TABLE IF EXISTS `media`;

DROP TABLE IF EXISTS `comments`;

DROP TABLE IF EXISTS `themes`;

DROP TABLE IF EXISTS `tools`;

DROP TABLE IF EXISTS `plugins`;

DROP TABLE IF EXISTS `settings`;



DROP TABLE IF EXISTS `account_user`;