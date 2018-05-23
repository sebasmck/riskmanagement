# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.20)
# Database: riskmanagement
# Generation Time: 2018-05-23 15:37:15 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table business_sector
# ------------------------------------------------------------

DROP TABLE IF EXISTS `business_sector`;

CREATE TABLE `business_sector` (
  `id_sector` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `business_sector` WRITE;
/*!40000 ALTER TABLE `business_sector` DISABLE KEYS */;

INSERT INTO `business_sector` (`id_sector`, `name`)
VALUES
	(1,'manofacturing'),
	(2,'communicatios');

/*!40000 ALTER TABLE `business_sector` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table category
# ------------------------------------------------------------

DROP TABLE IF EXISTS `category`;

CREATE TABLE `category` (
  `id_category` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_category`),
  KEY `category_company_id` (`id_company`),
  CONSTRAINT `category_company_id` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;

INSERT INTO `category` (`id_category`, `id_company`, `name`, `is_active`)
VALUES
	(2,1,'Seguridad',b'1'),
	(3,1,'costos',b'1'),
	(4,1,'Reservas',b'1'),
	(6,1,'Produccion',b'1'),
	(7,NULL,'Presupuestos',NULL),
	(8,NULL,'Salud',NULL);

/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table company
# ------------------------------------------------------------

DROP TABLE IF EXISTS `company`;

CREATE TABLE `company` (
  `id_company` int(11) NOT NULL AUTO_INCREMENT,
  `id_country` int(11) DEFAULT NULL,
  `id_sector` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_company`),
  KEY `sector_company_fkey` (`id_sector`),
  KEY `company_country_fkey` (`id_country`),
  CONSTRAINT `company_country_fkey` FOREIGN KEY (`id_country`) REFERENCES `country` (`id`),
  CONSTRAINT `sector_company_fkey` FOREIGN KEY (`id_sector`) REFERENCES `business_sector` (`id_sector`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `company` WRITE;
/*!40000 ALTER TABLE `company` DISABLE KEYS */;

INSERT INTO `company` (`id_company`, `id_country`, `id_sector`, `name`, `is_active`)
VALUES
	(1,NULL,1,'Chevrolet',b'1');

/*!40000 ALTER TABLE `company` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table country
# ------------------------------------------------------------

DROP TABLE IF EXISTS `country`;

CREATE TABLE `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `country_company_fkey` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `country` WRITE;
/*!40000 ALTER TABLE `country` DISABLE KEYS */;

INSERT INTO `country` (`id`, `id_company`, `name`, `is_active`)
VALUES
	(2,1,'United States',b'1'),
	(6,NULL,'Colombia',NULL);

/*!40000 ALTER TABLE `country` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employee
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employee`;

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_employee`),
  KEY `employee_company_fkey` (`id_company`),
  CONSTRAINT `employee_company_fkey` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;

INSERT INTO `employee` (`id_employee`, `id_company`, `name`, `position`, `email`, `phone`, `is_active`)
VALUES
	(1,1,'Sebastian Farias','Operations','corporate.att@gmail.com','94938102',b'1'),
	(2,1,'Daniel Martinez','Engineer','Dmartinez@gmail.com','324934',b'1'),
	(3,1,'Camilo Suarez','CEO','cami@cami.com','0941923491',b'1'),
	(4,1,'Sebastian','CEO2','corporate.att@mailer.com','439054583',b'1'),
	(5,1,'Maykos Velazco','Ingeniero','m@velazco.com','234932498',b'1'),
	(8,1,'William Fajardo','Professor','Wf@uean.edu.com','399827199',b'1');

/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table employee_r
# ------------------------------------------------------------

DROP TABLE IF EXISTS `employee_r`;

CREATE TABLE `employee_r` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `id_employee` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `employee_r_project_fkey` (`id_project`),
  KEY `employee_employeer_fkey` (`id_employee`),
  CONSTRAINT `employee_employeer_fkey` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id_employee`),
  CONSTRAINT `employee_r_project_fkey` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `employee_r` WRITE;
/*!40000 ALTER TABLE `employee_r` DISABLE KEYS */;

INSERT INTO `employee_r` (`id`, `id_project`, `id_employee`)
VALUES
	(1,5,4),
	(2,6,2),
	(3,6,4),
	(4,6,2),
	(5,6,4),
	(6,6,2);

/*!40000 ALTER TABLE `employee_r` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table group
# ------------------------------------------------------------

DROP TABLE IF EXISTS `group`;

CREATE TABLE `group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gorup_company_fkey` (`id_company`),
  CONSTRAINT `gorup_company_fkey` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `group` WRITE;
/*!40000 ALTER TABLE `group` DISABLE KEYS */;

INSERT INTO `group` (`id`, `id_company`, `name`, `is_active`)
VALUES
	(1,1,'Perforacion',b'1'),
	(2,1,'Subsuelos',b'1'),
	(3,1,'Ingenieria',b'1');

/*!40000 ALTER TABLE `group` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('leonperez76@outlook.com','$2y$10$OlJfknbrl7mw2swqjXarA.SeaZxkM8fUjICiuqdB069xQQvBum3K6','2018-04-16 00:56:29'),
	('rubenswilm@gmail.com','$2y$10$rmEEp5A/tvkkqdUaya91feh2RCeP9cPB/sqOUMmQoF6uLXVvRvVhG','2018-04-16 13:17:53'),
	('rbakalarz@gmail.com','$2y$10$A.AYDhW6V4.Sc.UlznGEzObUJ9tEeSAQinHHobpcq.QQwcKojeHri','2018-04-17 01:15:02'),
	('leonps@yahoo.com','$2y$10$VwNtA69sDOKruj7jeuiFD.gfVAUUblKMLLO8cLjS87jV5FM6HqdXe','2018-04-17 02:32:43');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table project
# ------------------------------------------------------------

DROP TABLE IF EXISTS `project`;

CREATE TABLE `project` (
  `id_project` int(11) NOT NULL AUTO_INCREMENT,
  `company_id` int(11) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `description` text,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id_project`),
  KEY `project_company_fkey` (`company_id`),
  KEY `country_project_fkey` (`country_id`),
  CONSTRAINT `country_project_fkey` FOREIGN KEY (`country_id`) REFERENCES `country` (`id`),
  CONSTRAINT `project_company_fkey` FOREIGN KEY (`company_id`) REFERENCES `company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;

INSERT INTO `project` (`id_project`, `company_id`, `name`, `status`, `date`, `country_id`, `description`, `is_active`)
VALUES
	(1,NULL,'Project 1','Pending',NULL,NULL,'This is a testing project',NULL),
	(2,NULL,'Project 2','Pending',NULL,NULL,'This is another project for testing purposes',NULL),
	(3,NULL,'Proyecto de prueba','Pending',NULL,NULL,'This is another project',NULL),
	(4,1,'adsfasdf',NULL,NULL,NULL,'qsadfasdf',NULL),
	(5,1,'Project testing 1',NULL,NULL,2,'sadfasdf',NULL),
	(6,1,'Project testing 2',NULL,NULL,6,'Colombia',NULL);

/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table risk
# ------------------------------------------------------------

DROP TABLE IF EXISTS `risk`;

CREATE TABLE `risk` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_project` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `id_employee` int(11) DEFAULT NULL,
  `id_category` int(11) DEFAULT NULL,
  `id_group` int(11) DEFAULT NULL,
  `id_stage` int(11) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  KEY `id_project` (`id_project`),
  CONSTRAINT `id_project` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table stage
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stage`;

CREATE TABLE `stage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `id_project` int(11) DEFAULT NULL,
  `is_active` bit(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `stage_project_fkey` (`id_project`),
  CONSTRAINT `stage_project_fkey` FOREIGN KEY (`id_project`) REFERENCES `project` (`id_project`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `stage` WRITE;
/*!40000 ALTER TABLE `stage` DISABLE KEYS */;

INSERT INTO `stage` (`id`, `name`, `id_project`, `is_active`)
VALUES
	(3,'Pre-evaluacion',NULL,NULL),
	(4,'Evaluacion',NULL,NULL),
	(5,'Detalle',NULL,NULL);

/*!40000 ALTER TABLE `stage` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_company` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_approved` bit(1) DEFAULT NULL,
  `cellphone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `user_company_fkey` (`id_company`),
  CONSTRAINT `user_company_fkey` FOREIGN KEY (`id_company`) REFERENCES `company` (`id_company`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `id_company`, `name`, `lastname`, `email`, `password`, `remember_token`, `is_approved`, `cellphone`, `role`, `company`)
VALUES
	(3,1,'Ruben','Wilches','email2@email.com','$2y$10$TA5W.HrM2GpVgc2Z9efgxOnvOSvBzarO2em9VcFKDO5RCFcYSYlMG','CckqbyPTdU20siNzQEfK6tilXlHYT2aikfYMEc19ht69x6YwnTDq2QlRHlum',b'1','202919992','admin',NULL),
	(100,NULL,'Sebastian','Farias','corporate.att@gmail.com','$2y$10$ElUlZqAFFbLExkiWOGEC4.kAALt..YL2bnASclmhXUK7DtuMnihY6','zHhE5TGbUH5GSdk8mDWyF6IfkJS0MPgoP2mRm5sEm9OSRC111uq4qtDlemce',b'1','23877863',NULL,'projectnow');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
