-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 26, 2024 at 05:54 PM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

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
  `admin_hash_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `school_id` int NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_admin_hash_id_unique` (`admin_hash_id`),
  UNIQUE KEY `admins_school_id_unique` (`school_id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `admin_hash_id`, `school_id`, `name`, `email`, `email_verified_at`, `password`, `verify`, `remember_token`, `created_at`, `updated_at`, `pin`, `user_status`) VALUES
(1, 'test', 101, 'Admin', 'admin@email.com', '2024-03-20 15:41:12', '$2y$10$q4ZkRYTsjHn8RpcD3Agf4.7KGPRFoeioVF0gbtc7asWFXXwuT9HRa', 1, NULL, '2024-10-25 12:51:23', '2024-10-25 12:51:23', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_title_short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_match_result` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_match_result_short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_main` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `mission` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `vision` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `values` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `upcoming_match` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upcoming_match_short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `gallery` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gallery_short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ready_to_play` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ready_to_play_short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meet_the_teams` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meet_the_team_short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `testimonial` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `testimonial_short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_short_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `footer_text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informations`
--

INSERT INTO `informations` (`id`, `title`, `home_title`, `home_title_short_description`, `last_match_result`, `last_match_result_short_desc`, `about_main`, `mission`, `vision`, `values`, `upcoming_match`, `upcoming_match_short_desc`, `gallery`, `gallery_short_desc`, `ready_to_play`, `ready_to_play_short_desc`, `meet_the_teams`, `meet_the_team_short_desc`, `testimonial`, `testimonial_short_desc`, `address`, `phone`, `email`, `footer_short_desc`, `footer_text`, `created_at`, `updated_at`) VALUES
(1, 'Amateur Corporate Cricket League', 'Empowering Corporate Teams Through Cricket!', 'At ACCL, we bring corporate teams together through the excitement of cricket, building camaraderie and a competitive spirit. Join us to experience the perfect blend of professionalism and passion on the field!', 'Recent Match Highlights', 'Catch up on the latest action with our most recent game results.<br> See how your favorite corporate teams <br>performed and relive the key moments from the field!', '<p>The Amateur Corporate Cricket League (ACCL) is a non-commercial cricket league organized in collaboration with many reputed multinational corporations (MNCs) and professional associations in Bangladesh. Nowadays, many organizations in Bangladesh are hiring employees to strengthen their cricket teams and be competitive in the corporate arena.</p><p><br></p><p> </p><p>ACCL appreciates this initiative. However, many organizations cannot afford to hire people solely focusing on the cricket team rather than their business and other reasons. Therefore, we would like to collect only those corporate teams and organize this league to promote more competitive cricket on the field. Our aim is to establish a standard of cricket with the maximum number of matches at a very minimal cost.</p>', 'To foster a vibrant and competitive cricket culture among corporate teams in Bangladesh by organizing an inclusive league that promotes teamwork, sportsmanship, and the love of the game while ensuring affordability for all participants', 'To be the premier platform for corporate cricket in Bangladesh, uniting organizations through the spirit of competition and camaraderie, and raising the standard of corporate sportsmanship in the country.', '<ul>\r\n    <li><strong>Inclusivity:</strong> We believe in creating a welcoming environment for all corporate teams, regardless of their size or experience.</li>\r\n    <li><strong>Integrity:</strong> We uphold fairness and transparency in our league operations, ensuring a level playing field for all participants.</li>\r\n    <li><strong>Teamwork:</strong> We encourage collaboration and unity among teams, emphasizing the importance of working together both on and off the field.</li>\r\n    <li><strong>Passion for Cricket:</strong> We are dedicated to promoting the love of cricket and its values, inspiring teams to play with enthusiasm and commitment.</li>\r\n    <li><strong>Affordability:</strong> We strive to make participation accessible to all organizations by keeping costs low while maximizing the quality of our league.</li>\r\n</ul>', 'Upcoming Game Lineup', 'Stay tuned for our exciting lineup of upcoming matches!<br>Check out the schedule to see when your favorite corporate teams<br>are set to compete and don\'t miss a moment of the action!', 'Moments Captured', 'Explore the highlights of our thrilling matches!<br>Relive the excitement and camaraderie of corporate cricket through stunning photographs.<br>Join us in celebrating every unforgettable moment on and off the field!', 'Ready to Hit the Field? Get Started Now!', 'Join us in the thrilling world of corporate cricket!<br>Whether you\'re a seasoned player or new to the game,<br>it\'s time to showcase your skills and be part of the action!', 'Competing Teams', 'Discover the diverse teams competing in our league!<br>Each team brings unique talent<br>and spirit to the field,<br>making every match a thrilling showcase of skill and sportsmanship!', 'What Our Players Say', 'Hear directly from our players about their experiences!<br>From unforgettable moments on the field to the camaraderie built off it,<br>discover why they love being part of our league!', 'Dhaka, Bangladesh', '01716552497', 'cricket@acclbd.xyz', NULL, NULL, NULL, '2024-10-25 09:07:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '2024_10_23_054349_create_information_table', 2),
(8, '2024_10_23_075937_create_teams_table', 3),
(10, '2024_10_26_150506_create_players_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
-- Table structure for table `players`
--

DROP TABLE IF EXISTS `players`;
CREATE TABLE IF NOT EXISTS `players` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `pl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL,
  `player_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nick_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jersey_no` int DEFAULT NULL,
  `player_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `player_type` enum('Batsman','Bowler','All Rounder') COLLATE utf8mb4_unicode_ci NOT NULL,
  `special_type` enum('Captain','Vice Captain','Wicket Keeper') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biography` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `year` year DEFAULT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `players_slug_unique` (`slug`),
  KEY `players_team_id_foreign` (`team_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

DROP TABLE IF EXISTS `teams`;
CREATE TABLE IF NOT EXISTS `teams` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `team_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `full_name`, `team_slug`, `short_name`, `group_name`, `logo`, `team_image`, `description`, `year`, `status`, `created_at`, `updated_at`) VALUES
(3, 'BLCC', 'blcc', 'BLCC', 'Group A', 'logos/60DBbDEPFwgkXm0PTg1sSuU2MC9r3iLMRmau9hJT.png', 'team_images/vCFk0rleFAVZOQuNpqTg3lhoMGIPvIhC02T741I8.png', NULL, '2024', 1, '2024-10-26 11:46:40', '2024-10-26 11:46:40'),
(4, 'Fiber at Home', 'fiber-at-home', 'FAH', 'Group A', 'logos/5wwEEufBVZ8Egbkrndgx3zFxQq1qW1gx0eP6b4LO.png', NULL, NULL, '2024', 1, '2024-10-26 11:47:04', '2024-10-26 11:47:04'),
(5, 'Golder Wheels Bd', 'golder-wheels-bd', 'GWB', 'Group A', 'logos/L7MZtRjG60vKKr29O55PnKq5rnGXJt7IKlt7k0xf.png', NULL, NULL, '2024', 1, '2024-10-26 11:47:30', '2024-10-26 11:47:30'),
(6, 'Grameenphone', 'grameenphone', 'GP', 'Group A', 'logos/FMlNNs32Kspt1wg7ytBPAp8pRmR71FmnmLG1roIR.png', NULL, 'fdf', 'fdf', 1, '2024-10-26 11:47:58', '2024-10-26 11:47:58'),
(7, 'HSBC', 'hsbc', 'HSPC', 'Group A', 'logos/8V7n9hPEj9lV2PAL41OLsOELE24qwqf3kCqpKIEo.png', NULL, NULL, '2024', 1, '2024-10-26 11:48:20', '2024-10-26 11:51:11'),
(8, 'LCAB', 'lcab', 'LCAB', 'Group A', 'logos/xttwMsOVOV67MnrT1ySQUndtQ1FxfddVc0ALYrKf.png', NULL, NULL, '2024', 1, '2024-10-26 11:48:42', '2024-10-26 11:48:42'),
(9, 'Robi', 'robi', 'Robi', 'Group A', 'logos/F1QqgU1FsMpsaHornlVhVEewFEgZR98gM0bXsP3e.png', NULL, NULL, '2024', 1, '2024-10-26 11:49:03', '2024-10-26 11:49:03'),
(10, 'United', 'united', 'United', 'Group A', 'logos/lUpYDqsaJ4e2hB4j8ul8wlgVNMZ6pATGo4qB6tfN.png', NULL, NULL, '2024', 1, '2024-10-26 11:49:18', '2024-10-26 11:49:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_hash_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pin` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_user_hash_id_unique` (`user_hash_id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
