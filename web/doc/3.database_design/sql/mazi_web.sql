USE `mazi`;

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`group_id` int(11) DEFAULT NULL COMMENT 'Group ID',
	`account` varchar(45) DEFAULT NULL COMMENT 'Account Name',
	`password` varchar(64) DEFAULT NULL COMMENT 'Password',
	`role` tinytext COMMENT 'Each role have one permission sets.',
	`name` varchar(45) DEFAULT '' COMMENT 'Name',
	`email` varchar(64) DEFAULT '',
	`status` tinyint(4) DEFAULT NULL COMMENT '1:Normal,2:Disable,3:Delete.',
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	PRIMARY KEY (`id`),
	UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Admin Account';

DROP TABLE IF EXISTS `user_detail`;
CREATE TABLE `user_detail` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`first_name` varchar(64) NOT NULL,
  	`last_name` varchar(64) NOT NULL,
	`gender` tinyint(4) DEFAULT '1' COMMENT '1:Male,2:Female',
	`mobile` bigint(11) DEFAULT NULL COMMENT 'Mobile Phone',
	`remark` varchar(125) DEFAULT '',
	`follower_id` int(11) NOT NULL,
	`followee_id` int(11) NOT NULL,
	`follow_time` int(11) NOT NULL,
	`country` int(32) NOT NULL,
	`province` int(32) NOT NULL,
	`city` int(32) NOT NULL,
	`county` int(32) NOT NULL,
	`street` varchar(32) DEFAULT NULL,
	`created` datetime DEFAULT NULL,
	`modified` datetime DEFAULT NULL,
	KEY `follower_id` (`follower_id`, `followee_id`),
	KEY `followee_id` (`followee_id`),
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='User Account';

DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`pid` int(11) DEFAULT NULL,
	`uid` int(11) NOT NULL COMMENT 'Creator ID',

	`content` text NOT NULL,

	`ptitle` varchar(250) NOT NULL COMMENT 'Title',
	`psubtitle` varchar(128) DEFAULT NULL COMMENT 'Abstract',
	`cates` int(11) DEFAULT NULL COMMENT 'System Categories of posts',
	`pcates` int(11) DEFAULT NULL COMMENT 'Categories of posts',
	`tags` int(11) DEFAULT NULL COMMENT 'System tag of posts',
	`ptags` int(11) DEFAULT NULL COMMENT 'Tag of posts',
	
	`metadescription` text,
  	`metakeywords` text,
	`description` varchar(300) NOT NULL COMMENT 'Description',
	`detail`  text COMMENT 'Book Detail' ,

	`attention` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of attention',
	`hits` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of clicks',
	`likes` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Amount of likes',

	`is_show` int(11) NOT NULL DEFAULT 0 COMMENT 'Show in front pages',
	`is_top` int(11) NOT NULL DEFAULT 0 COMMENT 'Show on top in front pages',
	`img_src` varchar(200) COMMENT 'List of picture address',
	
	`price` decimal(10,2) NULL DEFAULT NULL COMMENT 'Default price',
	`discount` decimal(10,2) NULL DEFAULT NULL COMMENT 'Discount price',
	`is_discount` int(11) NOT NULL DEFAULT 0 COMMENT '1:Discount price 2:Default price',
	`seller_id` int(11) NOT NULL COMMENT 'Seller ID',
	`sales`  int(11) NULL DEFAULT 0 COMMENT 'Sales count',

	`created`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Posts from users.';

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`bid` int(11) DEFAULT NULL COMMENT 'Book ID',
	`uid` int(11) NOT NULL COMMENT 'Author ID',

	`content` text NOT NULL,

	`btitle` varchar(250) NOT NULL COMMENT 'Book Title',
	`bsubtitle` varchar(250) NOT NULL COMMENT 'Book Subtitle',
	`cates` int(11) DEFAULT NULL COMMENT 'System Categories of pobooksst',
	`bcates` int(11) DEFAULT NULL COMMENT 'Categories of books',
	`tags` int(11) DEFAULT NULL COMMENT 'System tag of books',
	`btags` int(11) DEFAULT NULL COMMENT 'Tag of books',
	
	`metadescription` text,
  	`metakeywords` text,
  	`description` varchar(300) NOT NULL COMMENT 'Description',
	`detail`  text COMMENT 'Book Detail' ,

	`attention` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of attention',
	`hits` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of clicks',
	`likes` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Amount of likes',
	
	`is_show` int(11) NOT NULL DEFAULT 0 COMMENT 'Show in front pages',
	`is_top` int(11) NOT NULL DEFAULT 0 COMMENT 'Show on top in front pages',
	`img_src` varchar(200) COMMENT 'List of picture address',

	`price` decimal(10,2) NULL DEFAULT NULL COMMENT 'Default price',
	`discount` decimal(10,2) NULL DEFAULT NULL COMMENT 'Discount price',
	`is_discount` int(11) NOT NULL DEFAULT 0 COMMENT '1:Discount price 2:Default price',
	`seller_id` int(11) NOT NULL COMMENT 'Seller ID',
	`sales`  int(11) NULL DEFAULT 0 COMMENT 'Sales count',
	
	`created`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Books from users.';

DROP TABLE IF EXISTS `memos`;
CREATE TABLE `memos` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`mid` int(11) DEFAULT NULL COMMENT 'Memo Set ID',
	`uid` int(11) NOT NULL COMMENT 'Author ID',

	`content` text NOT NULL,

	`mtitle` varchar(40) COMMENT 'Title of memos',
	`msubtitle` varchar(40) COMMENT 'Subtitle of memos',
	`cates` int(11) DEFAULT NULL COMMENT 'System Categories of memos',
	`mcates` int(11) DEFAULT NULL COMMENT 'Categories of memos',
	`tags` int(11) DEFAULT NULL COMMENT 'System tag of memos',
	`mtags` int(11) DEFAULT NULL COMMENT 'Tag of memos',

	`metadescription` text,
  	`metakeywords` text,
  	`description` varchar(300) NOT NULL COMMENT 'Description',
	`detail`  text COMMENT 'Book Detail' ,

  	`attention` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of attention',
	`hits` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of clicks',
	`likes` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Amount of likes',

	`price` decimal(10,2) NULL DEFAULT NULL COMMENT 'Default price',
	`discount` decimal(10,2) NULL DEFAULT NULL COMMENT 'Discount price',
	`is_discount` int(11) NOT NULL DEFAULT 0 COMMENT '1:Discount price 2:Default price',
	`seller_id` int(11) NOT NULL COMMENT 'Seller ID',
	`sales`  int(11) NULL DEFAULT 0 COMMENT 'Sales count',

	`created`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Memos from users.';


DROP TABLE IF EXISTS `journals`;
CREATE TABLE `journals` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`jid` int(11) DEFAULT NULL COMMENT 'Journals Set ID',
	`uid` int(11) NOT NULL COMMENT 'Author ID',

	`content` text NOT NULL,
	
	`mtitle` varchar(40) COMMENT 'Title of memos',
	`msubtitle` varchar(40) COMMENT 'Subtitle of memos',
	`cates` int(11) DEFAULT NULL COMMENT 'System Categories of journals',
	`jcates` int(11) DEFAULT NULL COMMENT 'Categories of journals',
	`tags` int(11) DEFAULT NULL COMMENT 'System tag of journals',
	`jtags` int(11) DEFAULT NULL COMMENT 'Tag of journals',

	`metadescription` text,
  	`metakeywords` text,
  	`description` varchar(300) NOT NULL COMMENT 'Description',
	`detail`  text COMMENT 'Journals Detail' ,

	`attention` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of attention',
	`hits` int(11) NOT NULL DEFAULT 0 COMMENT 'Amount of clicks',
	`likes` int(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT 'Amount of likes',

	`price` decimal(10,2) NULL DEFAULT NULL COMMENT 'Default price',
	`discount` decimal(10,2) NULL DEFAULT NULL COMMENT 'Discount price',
	`is_discount` int(11) NOT NULL DEFAULT 0 COMMENT '1:Discount price 2:Default price',
	`seller_id` int(11) NOT NULL COMMENT 'Seller ID',
	`sales`  int(11) NULL DEFAULT 0 COMMENT 'Sales count',

	`created`  timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ,
	`modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Journals from users.';

DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`pname` varchar(20) COMMENT 'Page name',
	`pcates` int(20) COMMENT 'Page categories',
	`ptitle` varchar(40) COMMENT 'Page title',
	`psubtitle` varchar(40) COMMENT 'Subtitle of page',
	`metadescription` text,
  	`metakeywords` text,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='pages';

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`session_id` int(11) NOT NULL,
	`uid` int(11) DEFAULT NULL,
	`pid` int(11) NOT NULL,
	`pcates` int(11) NOT NULL,
	`units` int(11) NOT NULL,
	`carts_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Carts from users.';

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`session_id` int(11) NOT NULL,
	`uid` int(11) DEFAULT NULL,
	`pid` int(11) NOT NULL,
	`pcates` int(11) NOT NULL,
	`units` int(11) NOT NULL,
	`status` tinyint(4) DEFAULT NULL COMMENT '',
	`carts_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Orders from user to user.';

DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`tname` varchar(20),
	`tcount` int(20) COMMENT 'Amount of this tag',
	`ptag` varchar(20) COMMENT 'Parent tag id',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Tags from users.';

DROP TABLE IF EXISTS `cates`;
CREATE TABLE `cates` (
	`id` INT(11) NOT NULL AUTO_INCREMENT, `name` VARCHAR(255) NOT NULL,
	`slug` VARCHAR(255) NOT NULL, `parent_id` INT(11) DEFAULT NULL,
	`lft` INT(11) DEFAULT NULL,
	`rght` INT(11) DEFAULT NULL,
	`link_count` INT(11) NOT NULL DEFAULT'0', 
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Categories';

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='roles';

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='permissions';

DROP TABLE IF EXISTS `media`;
CREATE TABLE `media` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`mname` varchar(20) COMMENT 'Media name',
	`mlocation` varchar(40) COMMENT 'Media file location',
	`mdescription` varchar(200) COMMENT 'Media description',
	`mnotes` varchar(200) DEFAULT NULL COMMENT 'Media notes',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='media';

DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
	`id` int(20) NOT NULL AUTO_INCREMENT,
	`parent_id` int(20) DEFAULT NULL,
	`content` varchar(45) NOT NULL COMMENT 'Content of comments',
	`iid` int(20) NOT NULL COMMENT 'Item ID',
	`itype` int(11) NOT NULL COMMENT 'Item type',
	`creator_id` int(11) COMMENT 'Comments creator ID',
	`email` varchar(100),
	`rating` int(11) DEFAULT NULL,
	`website` varchar(100) COMMENT 'Website of Commentee',
	`is_show` int(11) NOT NULL COMMENT 'Show in front pages',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='comments';

DROP TABLE IF EXISTS `themes`;
CREATE TABLE `themes` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`thname` varchar(20) COMMENT 'Theme name',
	`thlocation` varchar(40) COMMENT 'Theme file location',
	`thdescription` varchar(200) COMMENT 'Theme description',
	`thnotes` varchar(200) DEFAULT NULL COMMENT 'Theme notes',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='themes';

DROP TABLE IF EXISTS `tools`;
CREATE TABLE `tools` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`tname` varchar(20) COMMENT 'Tool name',
	`tlocation` varchar(40) COMMENT 'Tool file location',
	`tdescription` varchar(200) COMMENT 'Tool description',
	`tnotes` varchar(200) DEFAULT NULL COMMENT 'Tool notes',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='tools';

DROP TABLE IF EXISTS `plugins`;
CREATE TABLE `plugins` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`pname` varchar(20) COMMENT 'Plugin name',
	`plocation` varchar(40) COMMENT 'Plugin file location',
	`pdescription` varchar(200) COMMENT 'Plugin description',
	`pnotes` varchar(200) DEFAULT NULL COMMENT 'Plugin notes',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='plugins';

DROP TABLE IF EXISTS `settings`;
CREATE TABLE `settings` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
	`sname` varchar(40) NOT NULL COMMENT 'Setting name',
	`svalue` varchar(40) NOT NULL COMMENT 'Setting value',
	`sdescription` varchar(200) COMMENT 'Setting description',
	`snotes` varchar(200) DEFAULT NULL COMMENT 'Setting notes',
	PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='settings';