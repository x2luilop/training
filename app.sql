CREATE DATABASE `training` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `training`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`,`name`,`email`) VALUES 
(1,'Mrs. Tania Will','effertz.aliza@example.org'),
(2,'Eric Gutkowski','eriberto.rosenbaum@example.com'),
(3,'Franz Koepp','conroy.tyrese@example.net'),
(4,'Mr. Humberto Hettinger III','olaf.murphy@example.com'),
(5,'Prudence Little','rashad33@example.net'),
(6,'Evalyn Kunze','dewitt18@example.net'),
(7,'Aisha Powlowski','zoey95@example.org'),
(8,'Willard Brekke','savannah69@example.org'),
(9,'Mrs. Laney Johnson','henri.sanford@example.com'),
(10,'Cindy Sawayn','margot.veum@example.net');