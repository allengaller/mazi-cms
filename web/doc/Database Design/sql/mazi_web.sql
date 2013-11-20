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
	UNIQUE KEY `email` (`email`)
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='Admin Account'

DROP TABLE IF EXISTS `accounts_user`;
CREATE TABLE `accounts_user` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`group_id` int(11) DEFAULT NULL COMMENT 'Group ID',
	`account` varchar(45) DEFAULT NULL COMMNET 'Account Name',
	`password` varchar(64) DEFAULT NULL COMMENT 'Password',
	`role` tinytext COMMENT 'Each role have one permission sets.',
	`name` varchar(45) DEFAULT '' COMMENT 'Name',
	`first_name` varchar(64) NOT NULL,
  	`last_name` varchar(64) NOT NULL,
	`gender` tinyint(4) DEFAULT '1' COMMENT '1:Male,2:Female',
	`mobile` bigint(11) DEFAULT NULL COMMNET 'Mobile Phone',
	`email` varchar(64) DEFAULT '',
	`remark` varchar(125) DEFAULT '',
	`follower_id` int(11) NOT NULL,
	`followee_id` int(11) NOT NULL,
	`follow_time` int(11) NOT NULL,
	`status` int(11) NOT NULL COMMNET '1:Normal,2:Disable,3:Delete.',
	`country` int(32) NOT NULL,
	`province` int(32) NOT NULL,
	`city` int(32) NOT NULL,
	`county` int(32) NOT NULL,
	`street` varchar(32) DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	KEY `follower_id` (`follower_id`, `followee_id`),
	KEY `followee_id` (`followee_id`)
	PRIMARY KEY (`id`),
	UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci COMMENT='User Account'

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`uid` int(11) NOT NULL,
	`pid` int(11) DEFAULT NULL,
	`content` text NOT NULL,
	`subtitle` varchar(128) DEFAULT NULL COMMENT 'Abstract',
	`title` varchar(250) NOT NULL COMMENT 'Title',
	`metadescription` text,
  	`metakeywords` text,
	`hits` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of clicks',
	`likes` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Amount of likes',
	`pcates` int(11) NOT NULL COMMENT 'Categories',
	`is_show` int(11) NOT NULL DEFAULT 0 COMMENT 'Show in front pages',
	`is_top` int(11) NOT NULL DEFAULT 0 COMMENT 'Show on top in front pages',
	`img_src` varchar(200) COMMENT 'List of picture address',
	`creator_id` int(11) NOT NULL,
	`post_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci COMMENT='Posts from users.'

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`title` varchar(250) NOT NULL COMMENT 'Book Title',
	`subtitle` varchar(250) NOT NULL COMMENT 'Book Subtitle',
	`attention` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of attention',
	`hits` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of clicks',
	`likes` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Amount of likes',
	`description` varchar(300) NOT NULL COMMENT 'Description',
	`detail`  text COMMENT 'Book Detail' ,
	`price` decimal(10,2) NULL DEFAULT NULL COMMENT 'Default price',
	`discount` decimal(10,2) NULL DEFAULT NULL COMMENT 'Discount price',
	`is_discount` int(11) NOT NULL DEFAULT 0 COMMENT '1:Discount price 2:Default price',
	`seller_id` int(11) NOT NULL COMMENT 'Seller ID',
	`sales`  int(11) NULL DEFAULT 0 COMMENT 'Sales count',
	`createtime`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci COMMENT='Books from users.'

DROP TABLE IF EXISTS `memos`;
CREATE TABLE `memos` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci COMMENT='Memos from users.'


DROP TABLE IF EXISTS `journals`;
CREATE TABLE `journals` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci COMMENT='Journals from users.'

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`session_id` int(11) NOT NULL,
	`uid` int(11) DEFAULT NULL,
	`pid` int(11) NOT NULL,
	`pcates` int(11) NOT NULL,
	`units` int(11) NOT NULL,
	`carts_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	KEY `session_id` (`session_id`,`user_id`,`product_id`),
  	KEY `user_id` (`user_id`),
  	KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci COMMENT='Carts from users.'

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`session_id` int(11) NOT NULL,
	`uid` int(11) DEFAULT NULL,
	`pid` int(11) NOT NULL,
	`pcates` int(11) NOT NULL,
	`units` int(11) NOT NULL,
	`status` tinyint(4) DEFAULT NULL COMMENT ''
	`carts_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`),
	KEY `session_id` (`session_id`,`user_id`,`product_id`),
  	KEY `user_id` (`user_id`),
  	KEY `product_id` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci COMMENT='Orders from user to user.'

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci COMMENT='Tags from users.'

DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates` (
	`id` INT(11) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL,
	`slug` VARCHAR(255) NOT NULL, `parent_id` INT(11) DEFAULT NULL,
	`lft` INT(11) DEFAULT NULL,
	`rght` INT(11) DEFAULT NULL,
	`link_count` INT(11) NOT NULL DEFAULT'0', 
	PRIMARY KEY (`id`)
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='Categories';

DROP TABLE IF EXISTS `posts_tags`;
CREATE TABLE `posts_tags` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='posts_tags';

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='pages';

DROP TABLE IF EXISTS `pages_tags`;
CREATE TABLE `pages_tags` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='pages_tags';

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='roles';

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='permissions';

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='media';

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
	`id` int(20) NOT NULL AUTO_INCREMENT,
	`parent_id` int(20) DEFAULT NULL,
	`content` varchar(45) NOT NULL COMMNET 'Content of comments',
	`iid` int(20) NOT NULL COMMNET 'Item ID',
	`itype` int(11) NOT NULL COMMNET 'Item type',
	`creator_id` int(11) COMMNET 'Comments creator ID',
	`email` varchar(100),
	`rating` int(11) DEFAULT NULL,
	`website` varchar(100) COMMNET 'Website of Commentee',
	`is_show` int(11) NOT NULL COMMNET 'Show in front pages',
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='comments';

DROP TABLE IF EXISTS `themes`;
CREATE TABLE `themes` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='themes';

DROP TABLE IF EXISTS `tools`;
CREATE TABLE `tools` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='tools';

DROP TABLE IF EXISTS `plugins`;
CREATE TABLE `plugins` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='plugins';

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`),
) ENGINE=MyISM DEFAULT CHARSET=utf8_general_ci COMMNET='settings';