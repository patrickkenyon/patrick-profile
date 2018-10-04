# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.41)
# Database: portfolio
# Generation Time: 2018-10-04 09:22:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table about_me
# ------------------------------------------------------------

DROP TABLE IF EXISTS `about_me`;

CREATE TABLE `about_me` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bio_title` varchar(255) NOT NULL DEFAULT '',
  `bio` text NOT NULL,
  `contact_title` varchar(255) NOT NULL DEFAULT '',
  `email` varchar(255) NOT NULL DEFAULT '',
  `telephone` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `about_me` WRITE;
/*!40000 ALTER TABLE `about_me` DISABLE KEYS */;

INSERT INTO `about_me` (`id`, `bio_title`, `bio`, `contact_title`, `email`, `telephone`)
VALUES
	(1,'About me','With a background in education and project management I have a strong communication and organisational skill set. I am currently cutting my teeth in the world of coding with Mayden Academy, a highly regarded coding academy based in Bath. Through personal study and my education with Mayden Academy I have experience of HTML5 and CSS.','Contact info.','patrick.kenyon@gmail.com','+447814742276');

/*!40000 ALTER TABLE `about_me` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table content
# ------------------------------------------------------------

DROP TABLE IF EXISTS `content`;

CREATE TABLE `content` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '',
  `sub_title` varchar(255) DEFAULT '',
  `tagline` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `content` WRITE;
/*!40000 ALTER TABLE `content` DISABLE KEYS */;

INSERT INTO `content` (`id`, `name`, `sub_title`, `tagline`)
VALUES
	(1,'Patrick Kenyon','Trainee Full Stack developer','I am a fledgling developer at the start of my career, hungry to learn and to prove myself within a supportive company.');

/*!40000 ALTER TABLE `content` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table projects
# ------------------------------------------------------------

DROP TABLE IF EXISTS `projects`;

CREATE TABLE `projects` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '',
  `mini_description` text NOT NULL,
  `background_image` text NOT NULL,
  `project_url` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `projects` WRITE;
/*!40000 ALTER TABLE `projects` DISABLE KEYS */;

INSERT INTO `projects` (`id`, `title`, `mini_description`, `background_image`, `project_url`)
VALUES
	(1,'Example project 1','Here is a short desctiption of one of my projects. 1Here is a short desctiption of one of my projects. 7Here is a short desctiption of one of my projects. 7Here is a short desctiption of one of my projects. 7Here is a short desctiption of one of my projects. 7Here is a short desctiption of one of my projects. 7Here is a short desctiption of one of my projects. 7\r\n','https://images.unsplash.com/photo-1536499657529-2d09e5c71539?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ccc131c58f5da1e893e2605dda9de842&auto=format&fit=crop&w=500&q=60','http://www.google.com'),
	(2,'Example project 2','Here is a short desctiption of one of my projects. 2','https://images.unsplash.com/photo-1536499657529-2d09e5c71539?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=ccc131c58f5da1e893e2605dda9de842&auto=format&fit=crop&w=500&q=60','http://www.google.com'),
	(3,'Example project 3','Here is a short desctiption of one of my projects 3','https://images.unsplash.com/photo-1536506252322-a4cb9cae8655?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=79ac811fe55d39710f4d9d6cb2ac1d27&auto=format&fit=crop&w=500&q=60','http://www.google.com'),
	(4,'Example project 4','Here is a short desctiption of one of my projects. 4','https://images.unsplash.com/photo-1536559692556-79e8be88e8ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=97d54d56f7e8c363cda42b6651896f68&auto=format&fit=crop&w=500&q=60','http://www.google.com'),
	(5,'Example project 5','Here is a short desctiption of one of my projects. 5','https://images.unsplash.com/photo-1536559692556-79e8be88e8ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=97d54d56f7e8c363cda42b6651896f68&auto=format&fit=crop&w=500&q=60','http://www.google.com\n'),
	(6,'Example project 6','Here is a short desctiption of one of my projects. 6','https://images.unsplash.com/photo-1536559692556-79e8be88e8ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=97d54d56f7e8c363cda42b6651896f68&auto=format&fit=crop&w=500&q=60','http://www.google.com'),
	(7,'Example project 7','Here is a short desctiption of one of my projects. 7','https://images.unsplash.com/photo-1536559692556-79e8be88e8ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=97d54d56f7e8c363cda42b6651896f68&auto=format&fit=crop&w=500&q=60','http://www.google.com'),
	(8,'Example project 8','Here is a short desctiption of one of my projects. 8','https://images.unsplash.com/photo-1536559692556-79e8be88e8ab?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=97d54d56f7e8c363cda42b6651896f68&auto=format&fit=crop&w=500&q=60','http://www.google.com');

/*!40000 ALTER TABLE `projects` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
