/*
SQLyog Community v13.3.0 (64 bit)
MySQL - 8.0.40 : Database - etaxhelper
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`etaxhelper` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `etaxhelper`;

/*Table structure for table `ORGANIZATION` */

DROP TABLE IF EXISTS `ORGANIZATION`;

CREATE TABLE `ORGANIZATION` (
  `org_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `org_type` enum('Proprietorship','Partnership','Private Limited','Public Limited','LLP','NGO','Cooperative','Government','Individual','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_work` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` bigint unsigned DEFAULT NULL,
  PRIMARY KEY (`org_id`),
  KEY `ix_org_display_name` (`display_name`),
  KEY `ix_org_group` (`group_id`),
  CONSTRAINT `fk_org_group` FOREIGN KEY (`group_id`) REFERENCES `organization_group` (`group_id`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_bank` */

DROP TABLE IF EXISTS `organization_bank`;

CREATE TABLE `organization_bank` (
  `bank_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `org_id` bigint unsigned NOT NULL,
  `bank_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_no` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ifsc_code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swift_code` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_type` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mode_of_operation` enum('Singly','Jointly','Any two jointly','Either or survivor','Other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`bank_id`),
  UNIQUE KEY `ux_bank_org_acct` (`org_id`,`account_no`),
  KEY `ix_bank_org` (`org_id`),
  CONSTRAINT `fk_bank_org` FOREIGN KEY (`org_id`) REFERENCES `ORGANIZATION` (`org_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_bank_signatory` */

DROP TABLE IF EXISTS `organization_bank_signatory`;

CREATE TABLE `organization_bank_signatory` (
  `signatory_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `bank_id` bigint unsigned NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`signatory_id`),
  KEY `ix_signatory_bank` (`bank_id`),
  CONSTRAINT `fk_signatory_bank` FOREIGN KEY (`bank_id`) REFERENCES `organization_bank` (`bank_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_branch` */

DROP TABLE IF EXISTS `organization_branch`;

CREATE TABLE `organization_branch` (
  `branch_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `org_id` bigint unsigned NOT NULL,
  `branch_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_line` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`branch_id`),
  KEY `ix_branch_org` (`org_id`),
  CONSTRAINT `fk_branch_org` FOREIGN KEY (`org_id`) REFERENCES `ORGANIZATION` (`org_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_contact` */

DROP TABLE IF EXISTS `organization_contact`;

CREATE TABLE `organization_contact` (
  `contact_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `org_id` bigint unsigned NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `city` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`contact_id`),
  KEY `ix_contact_org` (`org_id`),
  CONSTRAINT `fk_contact_org` FOREIGN KEY (`org_id`) REFERENCES `ORGANIZATION` (`org_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_director` */

DROP TABLE IF EXISTS `organization_director`;

CREATE TABLE `organization_director` (
  `director_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `org_id` bigint unsigned NOT NULL,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `din_number` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `city` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_of_appointment` date DEFAULT NULL,
  PRIMARY KEY (`director_id`),
  KEY `ix_director_org` (`org_id`),
  CONSTRAINT `fk_director_org` FOREIGN KEY (`org_id`) REFERENCES `ORGANIZATION` (`org_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_group` */

DROP TABLE IF EXISTS `organization_group`;

CREATE TABLE `organization_group` (
  `group_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  UNIQUE KEY `ux_group_name` (`group_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_login` */

DROP TABLE IF EXISTS `organization_login`;

CREATE TABLE `organization_login` (
  `login_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `org_id` bigint unsigned NOT NULL,
  `related_social_id` bigint unsigned DEFAULT NULL,
  `website` varchar(512) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PASSWORD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notes` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`login_id`),
  KEY `ix_login_org` (`org_id`),
  KEY `ix_login_website` (`website`(191)),
  KEY `fk_login_social` (`related_social_id`),
  CONSTRAINT `fk_login_org` FOREIGN KEY (`org_id`) REFERENCES `ORGANIZATION` (`org_id`) ON DELETE CASCADE ON UPDATE RESTRICT,
  CONSTRAINT `fk_login_social` FOREIGN KEY (`related_social_id`) REFERENCES `organization_social_media` (`social_id`) ON DELETE SET NULL ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_registration` */

DROP TABLE IF EXISTS `organization_registration`;

CREATE TABLE `organization_registration` (
  `reg_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `org_id` bigint unsigned NOT NULL,
  `reg_type` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reg_number` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valid_from` date DEFAULT NULL,
  `valid_to` date DEFAULT NULL,
  PRIMARY KEY (`reg_id`),
  KEY `ix_reg_org` (`org_id`),
  CONSTRAINT `fk_reg_org` FOREIGN KEY (`org_id`) REFERENCES `ORGANIZATION` (`org_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `organization_social_media` */

DROP TABLE IF EXISTS `organization_social_media`;

CREATE TABLE `organization_social_media` (
  `social_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `org_id` bigint unsigned NOT NULL,
  `platform` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `handle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_app` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`social_id`),
  KEY `ix_social_org` (`org_id`),
  CONSTRAINT `fk_social_org` FOREIGN KEY (`org_id`) REFERENCES `ORGANIZATION` (`org_id`) ON DELETE CASCADE ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `uggroups` */

DROP TABLE IF EXISTS `uggroups`;

CREATE TABLE `uggroups` (
  `GroupID` int NOT NULL AUTO_INCREMENT,
  `Label` varchar(300) DEFAULT NULL,
  `Provider` varchar(10) DEFAULT '',
  `Comment` longtext,
  PRIMARY KEY (`GroupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `ugmembers` */

DROP TABLE IF EXISTS `ugmembers`;

CREATE TABLE `ugmembers` (
  `UserName` varchar(100) NOT NULL,
  `GroupID` int NOT NULL,
  `Provider` varchar(10) NOT NULL DEFAULT '',
  PRIMARY KEY (`UserName`,`GroupID`,`Provider`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `ugrights` */

DROP TABLE IF EXISTS `ugrights`;

CREATE TABLE `ugrights` (
  `TableName` varchar(100) NOT NULL,
  `GroupID` int NOT NULL,
  `AccessMask` varchar(10) DEFAULT NULL,
  `Page` longtext,
  PRIMARY KEY (`TableName`,`GroupID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `groupid` varchar(255) DEFAULT NULL,
  `active` int DEFAULT NULL,
  `ext_security_id` varchar(100) DEFAULT NULL,
  `apikey` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
