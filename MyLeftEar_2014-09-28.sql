# ************************************************************
# Sequel Pro SQL dump
# Version 4135
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: localhost (MySQL 5.5.38)
# Database: MyLeftEar
# Generation Time: 2014-09-29 03:58:31 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;

INSERT INTO `admins` (`id`, `user_id`, `created_at`, `updated_at`)
VALUES
	(1,13,'2014-09-09 18:18:51',NULL);

/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table artists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artists`;

CREATE TABLE `artists` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `photo` varchar(50) DEFAULT NULL,
  `piece` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `artists` WRITE;
/*!40000 ALTER TABLE `artists` DISABLE KEYS */;

INSERT INTO `artists` (`id`, `user_id`, `created_at`, `updated_at`, `photo`, `piece`)
VALUES
	(1,3,'2014-08-19 17:58:55',NULL,'paul.jpg',NULL),
	(2,4,'2014-08-19 19:05:29',NULL,'kevin.jpg',NULL),
	(3,5,'2014-08-21 19:37:28',NULL,'bri.jpg',NULL),
	(4,6,'2014-08-21 19:59:24',NULL,'vanGogh.jpg',NULL);

/*!40000 ALTER TABLE `artists` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table blog_posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_posts`;

CREATE TABLE `blog_posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `published` int(11) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `url` varchar(64) NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `body` text NOT NULL,
  `created_at` datetime NOT NULL,
  `category` varchar(50) NOT NULL DEFAULT '',
  `post_img` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `blog_posts` WRITE;
/*!40000 ALTER TABLE `blog_posts` DISABLE KEYS */;

INSERT INTO `blog_posts` (`id`, `published`, `category_id`, `user_id`, `url`, `title`, `body`, `created_at`, `category`, `post_img`)
VALUES
	(20,1,1,13,'my-left-ear-blog-is-up-and-running','My Left Ear blog is up and running!','This is the first post on the site. We hope you enjoy everything we have to offer!','2014-09-27 19:34:50','site_news','97ed256a29e4bab0f2cf19cc461a3112.jpg'),
	(21,1,1,13,'the-front-page-has-been-fixed-up-a-little','The front page has been fixed up a little.','We hope you like it!','2014-09-27 19:36:39','site_news','b05e6d12cb8eafcdbfb9c3d85cc614dd.jpg');

/*!40000 ALTER TABLE `blog_posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migration
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migration`;

CREATE TABLE `migration` (
  `type` varchar(25) NOT NULL,
  `name` varchar(50) NOT NULL,
  `migration` varchar(100) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `migration` WRITE;
/*!40000 ALTER TABLE `migration` DISABLE KEYS */;

INSERT INTO `migration` (`type`, `name`, `migration`)
VALUES
	('package','auth','001_auth_create_usertables'),
	('package','auth','002_auth_create_grouptables'),
	('package','auth','003_auth_create_roletables'),
	('package','auth','004_auth_create_permissiontables'),
	('package','auth','005_auth_create_authdefaults'),
	('package','auth','006_auth_add_authactions'),
	('package','auth','007_auth_add_permissionsfilter'),
	('package','auth','008_auth_create_providers'),
	('package','auth','009_auth_create_oauth2tables'),
	('package','auth','010_auth_fix_jointables');

/*!40000 ALTER TABLE `migration` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table patrons
# ------------------------------------------------------------

DROP TABLE IF EXISTS `patrons`;

CREATE TABLE `patrons` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `patrons` WRITE;
/*!40000 ALTER TABLE `patrons` DISABLE KEYS */;

INSERT INTO `patrons` (`id`, `user_id`, `created_at`, `updated_at`)
VALUES
	(1,11,'2014-09-09 18:21:06',NULL);

/*!40000 ALTER TABLE `patrons` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table pieces
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pieces`;

CREATE TABLE `pieces` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(8) NOT NULL,
  `artist_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL DEFAULT '',
  `image` varchar(50) NOT NULL DEFAULT '',
  `price` varchar(10) NOT NULL DEFAULT '',
  `medium` varchar(50) NOT NULL DEFAULT '',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pieces` WRITE;
/*!40000 ALTER TABLE `pieces` DISABLE KEYS */;

INSERT INTO `pieces` (`id`, `uid`, `artist_id`, `name`, `image`, `price`, `medium`, `created_at`, `updated_at`)
VALUES
	(1,'img1',3,'test-Image1','place-holder-img.png','400','Photography','2014-08-26 19:23:05',NULL),
	(2,'img2',3,'test-image2','place-holder-img.png','300','Photography','2014-08-26 19:45:38',NULL),
	(3,'img3',3,'test-image3','place-holder-img.png','400','Photography','2014-08-27 00:25:56',NULL),
	(4,'img4',3,'test-image4','place-holder-img.png','200','Photography','2014-08-27 00:26:20',NULL),
	(5,'img5',3,'test-image5','place-holder-img.png','400','Photography','2014-08-27 00:29:19',NULL);

/*!40000 ALTER TABLE `pieces` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL,
  `last_login` varchar(25) NOT NULL,
  `previous_login` varchar(25) NOT NULL DEFAULT '0',
  `login_hash` varchar(255) NOT NULL,
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(255) NOT NULL DEFAULT '',
  `shipping_address` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `user_id`, `username`, `password`, `group_id`, `email`, `last_login`, `previous_login`, `login_hash`, `created_at`, `updated_at`, `fullname`, `shipping_address`)
VALUES
	(0,0,'guest','YOU CAN NOT USE THIS TO LOGIN',2,'','0','0','',1407883890,0,'',''),
	(1,1,'admin','CFJ0jzB92JM9a5ANOx2WCkaqWrIFxqtCNJS+mYddeIo=',6,'admin@example.org','1408483128','1408203197','5032fc71c0b90e51226c8ad2517df1d350d30a4d',1407883890,1408483128,'',''),
	(3,3,'Paul','tAps+SypQZVn/fGj0r47z9nGYJvDB9PTe2M0b0gEznQ=',7,'testing@test.com','1411103817','1409080363','917cd8276f52d7015178791dd814770cd36f9373',1407887277,1411103817,'',''),
	(4,4,'Kevin','tAps+SypQZVn/fGj0r47z9nGYJvDB9PTe2M0b0gEznQ=',7,'paul@burge.com','1411604922','1411524827','489e8fff8cbd2f14c087c259191e93f68cb5d2fb',1408060422,1411604922,'',''),
	(5,5,'Bri','tAps+SypQZVn/fGj0r47z9nGYJvDB9PTe2M0b0gEznQ=',7,'supertest@test.com','1411103003','1408061824','3575605175fc31a8b15cc0f9e6b14ffd96ebfd2c',1408061824,1411103003,'',''),
	(6,6,'VanGogh','aV4oP9f0jWwUHu25qDPu0FUn8v7spErqp2EUNi3nAMI=',7,'dwa@dwa.com','1410588948','1410588487','3be5a8057787ef8d3c6fac786a6d79d261802fb0',1408086580,1410588948,'',''),
	(7,7,'dwadwa','aV4oP9f0jWwUHu25qDPu0FUn8v7spErqp2EUNi3nAMI=',3,'dwadwa@dwa.com','1408483128','1408203172','0ef4abb66bed876f213a938b0a92bd0250235aea',1408202646,1408483128,'',''),
	(8,8,'pop','P6efAvW9InLGxri2nLvP+GEnAPCtbybIs5DzKRHh7mo=',3,'paul.burge8@gmail.com','1408666291','0','9e20e3846e6cef55d9027f65f0fcdb630b5ffaec',1408666291,1408666291,'',''),
	(9,9,'goes','1nV/TTZOFuGUkgBQJ8yLqBDkGSu3BflvFFLQeQQKMtA=',3,'dwadwadwa@dwa.com','1408666321','0','dd9ce967a487a4838e22b0b513a540321d293ac8',1408666321,1408666321,'',''),
	(10,10,'the','OZ6qfono8qz85eFzkn3rZoebtaFQWi9tMYK2xHoTS1k=',3,'dwadwa@dwadwa.com','1408666335','0','b927422f5dc16fcf344ac6d02ebf75bc68d90121',1408666335,1408666335,'',''),
	(11,11,'weasel','aV4oP9f0jWwUHu25qDPu0FUn8v7spErqp2EUNi3nAMI=',3,'dwadwadwa@dwadwa.com','1409958991','1409860743','e9a8b21dff5b503e1c5227743cff98c4a0cbe4c5',1409860743,1409958991,'',''),
	(13,13,'rootPaul','j6pT6BRoWGeyLwwwn+d8vsP4fZBDYApK/N2nW5rY9g8=',6,'none@none.com','1411846333','1411417494','68058864a27c83ce63ee4d23eab4a5c517cc2393',1410212421,1411846333,'',''),
	(14,14,'usertest','tAps+SypQZVn/fGj0r47z9nGYJvDB9PTe2M0b0gEznQ=',7,'dwadwadwa@dwadwadwa.com','1411605047','0','0c612d72e29ccd0bb86d72060792dd8057ae8418',1411605047,1411605047,'','');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_clients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_clients`;

CREATE TABLE `users_clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '',
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `client_secret` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `auto_approve` tinyint(1) NOT NULL DEFAULT '0',
  `autonomous` tinyint(1) NOT NULL DEFAULT '0',
  `status` enum('development','pending','approved','rejected') NOT NULL DEFAULT 'development',
  `suspended` tinyint(1) NOT NULL DEFAULT '0',
  `notes` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `client_id` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_group_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_group_permissions`;

CREATE TABLE `users_group_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `perms_id` int(11) NOT NULL,
  `actions` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_group_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_group_roles`;

CREATE TABLE `users_group_roles` (
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`group_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users_group_roles` WRITE;
/*!40000 ALTER TABLE `users_group_roles` DISABLE KEYS */;

INSERT INTO `users_group_roles` (`group_id`, `role_id`)
VALUES
	(1,1),
	(2,2),
	(3,3),
	(4,3),
	(4,4),
	(5,3),
	(5,4),
	(5,5),
	(6,6);

/*!40000 ALTER TABLE `users_group_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_groups`;

CREATE TABLE `users_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users_groups` WRITE;
/*!40000 ALTER TABLE `users_groups` DISABLE KEYS */;

INSERT INTO `users_groups` (`id`, `name`, `user_id`, `created_at`, `updated_at`)
VALUES
	(1,'Banned',0,0,0),
	(2,'Guests',0,0,0),
	(3,'Users',0,0,0),
	(4,'Moderators',0,0,0),
	(5,'Administrators',0,0,0),
	(6,'Super Admins',0,0,0),
	(7,'Artists',0,0,0);

/*!40000 ALTER TABLE `users_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_metadata
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_metadata`;

CREATE TABLE `users_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `key` varchar(20) NOT NULL,
  `value` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users_metadata` WRITE;
/*!40000 ALTER TABLE `users_metadata` DISABLE KEYS */;

INSERT INTO `users_metadata` (`id`, `parent_id`, `key`, `value`, `user_id`, `created_at`, `updated_at`)
VALUES
	(1,1,'fullname','System administrator',0,1407883890,0),
	(2,0,'fullname','Guest',0,0,0);

/*!40000 ALTER TABLE `users_metadata` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_permissions`;

CREATE TABLE `users_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area` varchar(25) NOT NULL,
  `permission` varchar(25) NOT NULL,
  `description` varchar(255) NOT NULL,
  `actions` text,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `permission` (`area`,`permission`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_providers
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_providers`;

CREATE TABLE `users_providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `provider` varchar(50) NOT NULL,
  `uid` varchar(255) NOT NULL,
  `secret` varchar(255) DEFAULT NULL,
  `access_token` varchar(255) DEFAULT NULL,
  `expires` int(12) DEFAULT '0',
  `refresh_token` varchar(255) DEFAULT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_role_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_role_permissions`;

CREATE TABLE `users_role_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `perms_id` int(11) NOT NULL,
  `actions` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_roles`;

CREATE TABLE `users_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `filter` enum('','A','D','R') NOT NULL DEFAULT '',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `created_at` int(11) NOT NULL DEFAULT '0',
  `updated_at` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users_roles` WRITE;
/*!40000 ALTER TABLE `users_roles` DISABLE KEYS */;

INSERT INTO `users_roles` (`id`, `name`, `filter`, `user_id`, `created_at`, `updated_at`)
VALUES
	(1,'banned','D',0,0,0),
	(2,'public','',0,0,0),
	(3,'user','',0,0,0),
	(4,'moderator','',0,0,0),
	(5,'administrator','',0,0,0),
	(6,'superadmin','A',0,0,0);

/*!40000 ALTER TABLE `users_roles` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users_scopes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_scopes`;

CREATE TABLE `users_scopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `scope` varchar(64) NOT NULL DEFAULT '',
  `name` varchar(64) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `scope` (`scope`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_sessions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_sessions`;

CREATE TABLE `users_sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_id` varchar(32) NOT NULL DEFAULT '',
  `redirect_uri` varchar(255) NOT NULL DEFAULT '',
  `type_id` varchar(64) NOT NULL,
  `type` enum('user','auto') NOT NULL DEFAULT 'user',
  `code` text NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `stage` enum('request','granted') NOT NULL DEFAULT 'request',
  `first_requested` int(11) NOT NULL,
  `last_updated` int(11) NOT NULL,
  `limited_access` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `oauth_sessions_ibfk_1` (`client_id`),
  CONSTRAINT `oauth_sessions_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `users_clients` (`client_id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_sessionscopes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_sessionscopes`;

CREATE TABLE `users_sessionscopes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` int(11) NOT NULL,
  `access_token` varchar(50) NOT NULL DEFAULT '',
  `scope` varchar(64) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  KEY `session_id` (`session_id`),
  KEY `access_token` (`access_token`),
  KEY `scope` (`scope`),
  CONSTRAINT `oauth_sessionscopes_ibfk_1` FOREIGN KEY (`scope`) REFERENCES `users_scopes` (`scope`),
  CONSTRAINT `oauth_sessionscopes_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `users_sessions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_user_permissions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_user_permissions`;

CREATE TABLE `users_user_permissions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `perms_id` int(11) NOT NULL,
  `actions` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table users_user_roles
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users_user_roles`;

CREATE TABLE `users_user_roles` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
