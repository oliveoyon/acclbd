-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 23, 2024 at 07:53 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acclbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_hash_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_admin_hash_id_unique` (`admin_hash_id`),
  UNIQUE KEY `admins_school_id_unique` (`school_id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `informations`
--

DROP TABLE IF EXISTS `informations`;
CREATE TABLE IF NOT EXISTS `informations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_title_short_description` text COLLATE utf8mb4_unicode_ci,
  `last_match_result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_match_result_short_desc` text COLLATE utf8mb4_unicode_ci,
  `about_main` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `vision` text COLLATE utf8mb4_unicode_ci,
  `values` text COLLATE utf8mb4_unicode_ci,
  `upcoming_match` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upcoming_match_short_desc` text COLLATE utf8mb4_unicode_ci,
  `gallery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_short_desc` text COLLATE utf8mb4_unicode_ci,
  `ready_to_play` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ready_to_play_short_desc` text COLLATE utf8mb4_unicode_ci,
  `meet_the_teams` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meet_the_team_short_desc` text COLLATE utf8mb4_unicode_ci,
  `testimonial` text COLLATE utf8mb4_unicode_ci,
  `testimonial_short_desc` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_short_desc` text COLLATE utf8mb4_unicode_ci,
  `footer_text` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `title`, `home_title`, `home_title_short_description`, `last_match_result`, `last_match_result_short_desc`, `about_main`, `mission`, `vision`, `values`, `upcoming_match`, `upcoming_match_short_desc`, `gallery`, `gallery_short_desc`, `ready_to_play`, `ready_to_play_short_desc`, `meet_the_teams`, `meet_the_team_short_desc`, `testimonial`, `testimonial_short_desc`, `address`, `phone`, `email`, `footer_short_desc`, `footer_text`, `created_at`, `updated_at`) VALUES
(1, 'Amateur Corporate Cricket League', 'Empowering Corporate Teams Through Cricket!', 'At ACCL, we bring corporate teams together through the excitement of cricket, building camaraderie and a competitive spirit. Join us to experience the perfect blend of professionalism and passion on the field!', 'Recent Match Highlights', 'Catch up on the latest action with our most recent game results.<br> See how your favorite corporate teams <br>performed and relive the key moments from the field!', 'The Amateur Corporate Cricket League (ACCL) is a non-commercial cricket league organized in collaboration with many reputed multinational corporations (MNCs) and professional associations in Bangladesh. Nowadays, many organizations in Bangladesh are hiring employees to strengthen their cricket teams and be competitive in the corporate arena. ACCL appreciates this initiative. However, many organizations cannot afford to hire people solely focusing on the cricket team rather than their business and other reasons. Therefore, we would like to collect only those corporate teams and organize this league to promote more competitive cricket on the field. Our aim is to establish a standard of cricket with the maximum number of matches at a very minimal cost.', 'To foster a vibrant and competitive cricket culture among corporate teams in Bangladesh by organizing an inclusive league that promotes teamwork, sportsmanship, and the love of the game while ensuring affordability for all participants', 'To be the premier platform for corporate cricket in Bangladesh, uniting organizations through the spirit of competition and camaraderie, and raising the standard of corporate sportsmanship in the country.', '<ul>\r\n    <li><strong>Inclusivity:</strong> We believe in creating a welcoming environment for all corporate teams, regardless of their size or experience.</li>\r\n    <li><strong>Integrity:</strong> We uphold fairness and transparency in our league operations, ensuring a level playing field for all participants.</li>\r\n    <li><strong>Teamwork:</strong> We encourage collaboration and unity among teams, emphasizing the importance of working together both on and off the field.</li>\r\n    <li><strong>Passion for Cricket:</strong> We are dedicated to promoting the love of cricket and its values, inspiring teams to play with enthusiasm and commitment.</li>\r\n    <li><strong>Affordability:</strong> We strive to make participation accessible to all organizations by keeping costs low while maximizing the quality of our league.</li>\r\n</ul>\r\n', 'Upcoming Game Lineup', 'Stay tuned for our exciting lineup of upcoming matches!<br>Check out the schedule to see when your favorite corporate teams<br>are set to compete and don\'t miss a moment of the action!', 'Moments Captured', 'Explore the highlights of our thrilling matches!<br>Relive the excitement and camaraderie of corporate cricket through stunning photographs.<br>Join us in celebrating every unforgettable moment on and off the field!', 'Ready to Hit the Field? Get Started Now!', 'Join us in the thrilling world of corporate cricket!<br>Whether you\'re a seasoned player or new to the game,<br>it\'s time to showcase your skills and be part of the action!', 'Competing Teams', 'Discover the diverse teams competing in our league!<br>Each team brings unique talent<br>and spirit to the field,<br>making every match a thrilling showcase of skill and sportsmanship!', 'What Our Players Say', 'Hear directly from our players about their experiences!<br>From unforgettable moments on the field to the camaraderie built off it,<br>discover why they love being part of our league!', 'Dhaka, Bangladesh', '01716552497', 'cricket@acclbd.xyz', 'Thank you for visiting the Amateur Corporate Cricket League!<br>Stay connected with us for updates, match schedules, and more.<br>Together, let\'s celebrate the spirit of corporate cricket!', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_09_13_155619_create_admins_table', 1),
(7, '2024_10_23_054349_create_information_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_hash_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_user_hash_id_unique` (`user_hash_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
