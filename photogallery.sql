-- Adminer 4.8.1 MySQL 8.0.30 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `galleries` (`id`, `name`, `description`, `cover_image`, `owner_id`, `created_at`, `updated_at`) VALUES
(1,	'Virágok',	'Virágos képek',	'virag1.jpg',	1,	NULL,	NULL),
(2,	'Madarak',	'Madaras képek',	'parrot.jpg',	1,	NULL,	NULL),
(3,	'Állatok',	'Állatos képek',	'deers.jpg',	1,	NULL,	NULL);

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2023_06_08_190006_create_galleries_table',	1),
(6,	'2023_06_08_190025_create_photos_table',	1);

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('bela@gmail.com',	'$2y$10$z9hvmdLntuH..JQ2PIMI2.Cnr80d3H.Yt5JSOtk5eSjg97/UFXzL6',	'2023-06-12 17:42:37');

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `photos`;
CREATE TABLE `photos` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `gallery_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `photos` (`id`, `gallery_id`, `title`, `description`, `location`, `image`, `owner_id`, `created_at`, `updated_at`) VALUES
(1,	1,	'Első virág',	'valamilyen virág',	'kertben',	'virag1.jpg',	1,	NULL,	NULL),
(2,	1,	'Második virág',	'kék virág',	'kertben',	'virag2.jpg',	1,	NULL,	NULL),
(3,	1,	'Harmadik virág',	'valamilyen virág',	'kertben',	'virag3.jpg',	1,	NULL,	NULL),
(4,	2,	'Papagáj',	'valamilyen papagáj',	'állatkertben',	'parrot.jpg',	1,	NULL,	NULL),
(5,	2,	'Pingvinek',	'sok kis pingvin',	'állatkertben',	'penguins.jpg',	1,	NULL,	NULL),
(6,	2,	'Bagoly',	'valamilyen bagoly',	'állatkertben',	'owl.jpg',	1,	NULL,	NULL),
(7,	3,	'Őzek',	'sok kis őz',	'erdőben',	'deers.jpg',	1,	NULL,	NULL),
(8,	3,	'Majom',	'valamilyen majom',	'állatkertben',	'monkey.jpg',	1,	NULL,	NULL),
(9,	3,	'Tehén',	'Lorem ipsum dolor sit amet',	'vidéken',	'cow.jpg',	1,	NULL,	NULL);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'Béla',	'bela@gmail.com',	NULL,	'$2y$10$1o6EnTRJEhlImEMZ1Xc4xue1rPyHgfxESOnz4oKEzQ4ScyXncWDMO',	NULL,	'2023-06-12 16:15:54',	'2023-06-12 16:15:54'),
(2,	'Ödön',	'odon@gmail.com',	NULL,	'$2y$10$BS.NOPmOuYD04el9PKA2SuFixENvNJbQj4v3sVz8bM4czzBp8Io7C',	NULL,	'2023-06-12 16:18:40',	'2023-06-12 16:18:40'),
(3,	'demo',	'demo@demo',	NULL,	'$2y$10$/1AsFKDFvNZPFe4BQY/.euqgQ1j6PI/bnDvGccQuL4KJ8/rQYIIi2',	NULL,	'2023-06-16 17:38:14',	'2023-06-16 17:38:14');

-- 2023-06-16 19:40:52
