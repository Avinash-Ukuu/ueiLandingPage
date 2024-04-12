/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 10.4.32-MariaDB : Database - uei_landing_pages
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`uei_landing_pages` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `uei_landing_pages`;

/*Table structure for table `enquiries` */

DROP TABLE IF EXISTS `enquiries`;

CREATE TABLE `enquiries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `number` text NOT NULL,
  `message` text DEFAULT NULL,
  `contact_consent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `enquiries` */

insert  into `enquiries`(`id`,`name`,`email`,`number`,`message`,`contact_consent`,`created_at`,`updated_at`) values 
(4,'satyam','satyam@gmail.com','8989898989','B school project completed',NULL,'2024-04-11 05:00:21','2024-04-11 05:00:21'),
(5,'shobit','shobit@gmail.com','8989898989','frontend design completed',NULL,'2024-04-11 05:00:55','2024-04-11 05:00:55'),
(6,'avinash','avinash@gmail.com','8989898989','testing',NULL,'2024-04-11 05:01:21','2024-04-11 05:01:21'),
(8,'raman','raman@gmail.com','8989898989','test',NULL,'2024-04-11 08:52:20','2024-04-11 08:52:20'),
(9,'ashish','ashish@gmail.com','8989898989','testing',NULL,'2024-04-11 08:53:13','2024-04-11 08:53:13'),
(12,'ramandeep singh','ramandeep@gmail.com','8989898989','test',NULL,'2024-04-12 04:40:29','2024-04-12 04:40:29'),
(13,'test','test2@gmail.com','7878787878','test',NULL,'2024-04-12 04:45:37','2024-04-12 04:45:37'),
(14,'asdasdasda','sdasdasda@gmail.com','1212121212','12121212121212',NULL,'2024-04-12 05:17:18','2024-04-12 05:17:18'),
(15,'ashish','ashish@gmail.com','8989898989','asdasdasdasdas',NULL,'2024-04-12 05:20:48','2024-04-12 05:20:48'),
(16,'SHOBIT','shobitthakur83@gmail.com','7508953470','Testing',NULL,'2024-04-12 07:57:23','2024-04-12 07:57:23'),
(17,'asdfasdf','asdfas@gmail.com','9898989898','rtyurtuyrtuyrt',NULL,'2024-04-12 10:30:19','2024-04-12 10:30:19'),
(18,'komal','komal@gmail.com','9898989898','testing',NULL,'2024-04-12 11:29:22','2024-04-12 11:29:22'),
(19,'asdasas','dasdas@gamil.com','8989898989','jkhsdlkfjhalsdf',NULL,'2024-04-12 11:33:47','2024-04-12 11:33:47'),
(20,'qweqwe','qwerqw@gmail.com','8989898989','test',NULL,'2024-04-12 11:34:35','2024-04-12 11:34:35'),
(21,'weqwe','qwerq@gmail.com','8989898989','jadkdfasd',NULL,'2024-04-12 11:36:30','2024-04-12 11:36:30'),
(22,'asdfasdf','asdfas@gmail.com','6767676767','asdasdasd',NULL,'2024-04-12 11:36:55','2024-04-12 11:36:55'),
(23,'gopal','gopal@gmail.com','7878787878','testing',NULL,'2024-04-12 11:38:25','2024-04-12 11:38:25');

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_reset_tokens_table',1),
(3,'2019_08_19_000000_create_failed_jobs_table',1),
(4,'2019_12_14_000001_create_personal_access_tokens_table',1);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

/*Table structure for table `personal_access_tokens` */

DROP TABLE IF EXISTS `personal_access_tokens`;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `personal_access_tokens` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'avinash','avinash@gmail.com',NULL,'$2y$10$ooHyofeeS9pZ1wRN1qTGkeM/g6zfMg/ElDY2p38CZwyPLX7DNbmbO',NULL,'2024-04-11 04:25:39','2024-04-11 04:25:39');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
