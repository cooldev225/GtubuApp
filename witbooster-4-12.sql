-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 07:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `witbooster`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adsType` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `configType` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adsName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adsId` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enable` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `adsType`, `configType`, `adsName`, `adsId`, `enable`, `created_at`, `updated_at`) VALUES
(1, 'bottom-ads', 'ads', 'Bottom Ads', 'ttttt', 0, '2021-03-01 04:19:56', '2021-03-01 22:25:17'),
(2, 'full-ads', 'ads', 'Full Screen', 'ssssss7', 1, '2021-03-02 04:19:56', '2021-03-01 22:24:49'),
(3, 'video-ads', 'ads', 'Video Reward', '', 1, '2021-03-01 04:21:18', '2021-03-01 04:21:18');

-- --------------------------------------------------------

--
-- Table structure for table `attach_files`
--

CREATE TABLE `attach_files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_kind` int(11) NOT NULL DEFAULT 0,
  `table_id` int(11) NOT NULL,
  `filename` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `body` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `path` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `boost_history`
--

CREATE TABLE `boost_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `stars` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 1,
  `boostStarsId` int(11) NOT NULL DEFAULT 0,
  `profile` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boost_history`
--

INSERT INTO `boost_history` (`id`, `userId`, `stars`, `created_at`, `updated_at`, `amount`, `boostStarsId`, `profile`) VALUES
(1, 1, '1', '2021-02-01 07:06:08', '2021-02-01 07:06:08', 1, 10, ''),
(2, 1, '1', '2021-02-01 07:06:08', '2021-02-01 07:06:08', 2, 10, ''),
(3, 1, '1', '2021-02-02 07:06:08', '2021-02-02 07:06:08', 1, 10, ''),
(4, 1, '1', '2021-02-03 07:06:08', '2021-02-03 07:06:08', 1, 10, ''),
(5, 1, '10', '2021-02-04 07:06:08', '2021-02-04 07:06:08', 1, 12, ''),
(6, 1, '1', '2021-02-05 07:06:08', '2021-02-05 07:06:08', 1, 10, ''),
(7, 1, '10', '2021-02-06 07:06:08', '2021-02-06 07:06:08', 1, 12, ''),
(8, 1, '10', '2021-02-07 07:06:08', '2021-02-07 07:06:08', 1, 12, ''),
(9, 1, '1', '2021-02-08 07:06:08', '2021-02-08 07:06:08', 12, 10, ''),
(10, 1, '2', '2021-02-09 07:06:08', '2021-02-09 07:06:08', 5, 2, ''),
(11, 1, '10', '2021-02-10 07:06:08', '2021-02-10 07:06:08', 1, 12, ''),
(12, 1, '1', '2021-02-11 07:06:08', '2021-02-11 07:06:08', 1, 10, ''),
(13, 1, '1', '2021-02-12 07:06:08', '2021-02-12 07:06:08', 1, 10, ''),
(14, 1, '1', '2021-02-13 07:06:08', '2021-02-13 07:06:08', 13, 10, ''),
(15, 1, '10', '2021-02-14 07:06:08', '2021-02-14 07:06:08', 1, 12, ''),
(16, 1, '10', '2021-02-15 01:16:08', '2021-02-15 07:06:08', 1, 12, ''),
(17, 1, '10', '2021-02-15 07:06:08', '2021-02-15 07:06:08', 10, 12, ''),
(18, 1, '10', '2021-02-16 07:06:08', '2021-02-16 07:06:08', 1, 12, ''),
(19, 1, '10', '2021-02-17 07:06:08', '2021-02-17 07:06:08', 1, 12, ''),
(20, 4, '4', '2021-03-09 20:33:20', '2021-03-09 20:33:20', 1, 10, 'iliadudenkov'),
(21, 4, '10', '2021-03-09 21:48:59', '2021-03-09 21:48:59', 1, 10, 'iliadudenkov'),
(22, 4, '10', '2021-03-09 21:58:36', '2021-03-09 21:58:36', 1, 10, 'iliadudenkov'),
(23, 4, '10', '2021-03-09 22:06:04', '2021-03-09 22:06:04', 1, 10, 'iliadudenkov');

-- --------------------------------------------------------

--
-- Table structure for table `boost_package`
--

CREATE TABLE `boost_package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `packageName` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `pricing` double NOT NULL DEFAULT 1,
  `packageStar` int(11) NOT NULL DEFAULT 1,
  `packageId` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `os` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boost_package`
--

INSERT INTO `boost_package` (`id`, `packageName`, `pricing`, `packageStar`, `packageId`, `os`, `created_at`, `updated_at`) VALUES
(1, 'pack 1', 55, 10, '1', 2, '2021-03-01 04:13:59', '2021-03-01 00:27:57'),
(2, 'pack 2', 20, 2, '2', 1, '2021-03-01 04:13:59', '2021-03-01 04:13:59'),
(13, 'pack-3', 1.2, 1, '122', 1, '2021-03-01 00:23:28', '2021-03-01 00:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `boost_stars`
--

CREATE TABLE `boost_stars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stars` int(11) NOT NULL,
  `numberOfFollower` int(11) NOT NULL,
  `boost_used` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boost_stars`
--

INSERT INTO `boost_stars` (`id`, `stars`, `numberOfFollower`, `boost_used`, `created_at`, `updated_at`) VALUES
(10, 1, 50, 0, '2021-03-01 03:26:10', '2021-02-28 23:46:41'),
(12, 10, 2, 0, '2021-03-01 03:26:10', '2021-03-01 03:26:10'),
(13, 2, 22, 0, '2021-02-28 23:06:54', '2021-02-28 23:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uniqueId` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `following` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heart` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fans` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `covers` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stars` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isNew` tinyint(1) NOT NULL,
  `tokens` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `upsert` tinyint(1) NOT NULL,
  `boost_date` timestamp NULL DEFAULT NULL,
  `bought_date` timestamp NULL DEFAULT NULL,
  `boost_completion` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hasFollowTiktok` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `uniqueId`, `following`, `heart`, `fans`, `covers`, `stars`, `isNew`, `tokens`, `upsert`, `boost_date`, `bought_date`, `boost_completion`, `created_at`, `updated_at`, `hasFollowTiktok`) VALUES
(1, 'sonhoaing34', '34343434', '1334323', '9489233', '/metronic/media/users/2.png', '10⭐️', 0, '', 0, '2021-03-01 02:20:49', '2021-03-01 02:20:49', '2021-03-01 02:20:49', '2021-03-01 02:20:49', '2021-02-28 20:59:21', 0),
(2, 'sonhoaing2', '3', '1', '1', '/metronic/media/users/1.png', '10⭐️', 0, '', 0, '2021-03-01 02:20:49', '2021-03-01 02:20:49', '2021-03-01 02:20:49', '2021-03-01 02:20:49', '2021-03-01 02:20:49', 0),
(4, 'iliadudenkov', '0', '0', '0', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=115581740551446&height=240&width=240&ext=1617841711&hash=AeT6W6Fd8uHk1ZHLbls', '188', 0, 'asdasd', 1, NULL, NULL, NULL, '2021-03-09 17:57:16', '2021-03-11 15:30:26', 0),
(5, 'villageculture01', '31100', '144800', '11', 'https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/42d6634dc3b3d423983e5549f6258851.jpeg?x-expires=1615604400&x-signature=McSYd2ZgEcOPZeluQML3dQOirZY%3D', '5', 0, '', 0, NULL, NULL, NULL, '2021-03-11 15:15:10', '2021-03-11 15:21:26', 0),
(6, '3', '442', '0', '0', 'https://p16-sign-sg.tiktokcdn.com/aweme/1080x1080/tos-alisg-avt-0068/smg523412d02f5de3b93d56cc229dc4dbf3.jpeg?x-expires=1615608000&x-signature=aFzcK%2BGIbtNtT7WJrBktAw%2Facq4%3D', '5', 0, '', 0, NULL, NULL, NULL, '2021-03-11 16:22:16', '2021-03-11 16:22:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dev_alerts`
--

CREATE TABLE `dev_alerts` (
  `alert` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feeds`
--

CREATE TABLE `feeds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uniqueId` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nickname` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `following` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heart` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fans` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `covers` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boostStars` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `boost_date` timestamp NULL DEFAULT NULL,
  `bought_date` timestamp NULL DEFAULT NULL,
  `boost_completion` timestamp NULL DEFAULT NULL,
  `isNew` tinyint(1) NOT NULL DEFAULT 1,
  `tokens` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `upsert` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `signature` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feeds`
--

INSERT INTO `feeds` (`id`, `uniqueId`, `nickname`, `following`, `heart`, `fans`, `covers`, `boostStars`, `boost_date`, `bought_date`, `boost_completion`, `isNew`, `tokens`, `upsert`, `created_at`, `updated_at`, `signature`) VALUES
(1, 'iliadudenkov', NULL, '0', '0', '0', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=115581740551446&height=240&width=240&ext=1617841711&hash=AeT6W6Fd8uHk1ZHLbls', '9', NULL, NULL, NULL, 0, 'sfdsdfsdfsfdsdwetrwer', 1, '2021-03-09 22:06:04', '2021-03-09 22:09:13', '');

-- --------------------------------------------------------

--
-- Table structure for table `follow_history`
--

CREATE TABLE `follow_history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `feedId` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `last_login`
--

CREATE TABLE `last_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userId` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `last_login`
--

INSERT INTO `last_login` (`id`, `userId`, `time`) VALUES
(1, 1, '2021-03-01 18:02:53'),
(2, 1, '2021-03-01 20:49:23'),
(3, 1, '2021-03-02 20:49:28'),
(4, 1, '2021-03-03 20:49:33'),
(5, 1, '2021-03-03 20:49:38'),
(6, 1, '2021-03-03 20:49:43'),
(7, 1, '2021-03-03 20:49:49'),
(8, 4, '2021-03-09 18:08:01'),
(9, 4, '2021-03-09 18:20:40'),
(10, 4, '2021-03-09 18:43:11'),
(11, 4, '2021-03-09 23:25:11'),
(12, 4, '2021-03-09 23:32:47'),
(13, 4, '2021-03-09 23:43:28'),
(14, 4, '2021-03-11 05:11:25'),
(15, 4, '2021-03-11 14:03:42'),
(16, 4, '2021-03-11 14:11:47'),
(17, 4, '2021-03-11 14:18:47'),
(18, 4, '2021-03-11 14:22:51'),
(19, 4, '2021-03-11 14:24:54'),
(20, 4, '2021-03-11 14:26:58'),
(21, 4, '2021-03-11 14:27:35'),
(22, 4, '2021-03-11 14:30:14'),
(23, 4, '2021-03-11 14:30:24'),
(24, 4, '2021-03-11 14:30:52'),
(25, 4, '2021-03-11 14:31:45'),
(26, 4, '2021-03-11 14:31:57'),
(27, 4, '2021-03-11 14:32:06'),
(28, 4, '2021-03-11 14:34:31'),
(29, 4, '2021-03-11 14:36:13'),
(30, 4, '2021-03-11 14:41:10'),
(31, 4, '2021-03-11 14:41:22'),
(32, 4, '2021-03-11 14:41:30'),
(33, 4, '2021-03-11 14:50:22'),
(34, 4, '2021-03-11 14:50:34'),
(35, 4, '2021-03-11 15:01:36'),
(36, 5, '2021-03-11 15:15:10'),
(37, 5, '2021-03-11 15:18:15'),
(38, 5, '2021-03-11 15:20:14'),
(39, 5, '2021-03-11 15:21:26'),
(40, 4, '2021-03-11 15:30:26'),
(41, 6, '2021-03-11 16:22:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2020_09_11_193327_create_users_table', 1),
(3, '2020_09_11_193452_create_roles_table', 1),
(4, '2020_09_11_193608_create_roleuser_table', 1),
(5, '2020_09_14_200945_update_users_table', 1),
(6, '2020_09_22_060610_create_attach_files_table', 1),
(7, '2020_12_01_192528_create_sessions_table', 1),
(8, '2020_12_08_224127_create_dev_notifications', 1),
(9, '2020_12_20_063314_add_logout_user', 1),
(10, '2021_02_28_220442_create_customer_table', 2),
(11, '2021_02_28_223447_create_customer_01_table', 3),
(12, '2021_02_28_225118_create_boost_history_table', 4),
(13, '2021_02_28_225803_create_transactions_table', 5),
(14, '2021_02_28_230029_create_boost_package_table', 6),
(15, '2021_02_28_230334_create_transactions_01_table', 7),
(16, '2021_02_28_230710_create_boosts_table', 8),
(17, '2021_02_28_231016_create_boost_stars_table', 9),
(18, '2021_02_28_231101_create_boost_stars_table', 10),
(19, '2021_02_28_231823_create_ads_table', 11),
(20, '2021_03_01_004025_create_boost_stars_01_table', 12),
(21, '2021_03_01_004307_create_boost_stars_02_table', 13),
(22, '2021_03_01_010919_create_boost_package_table', 14),
(23, '2021_03_01_021253_create_boost_history_01_table', 15),
(24, '2021_03_01_061057_create_boost_history_02_table', 16),
(25, '2021_03_01_061157_create_transactions_02_table', 17),
(26, '2021_03_01_061228_create_transactions_02_table', 18),
(27, '2021_03_04_022639_create_last_login_table', 19),
(28, '2021_03_04_045506_create_boost_history_03_table', 20),
(29, '2021_03_10_025255_create_customer_table_02', 21),
(30, '2021_03_10_033410_create_customer_table_03', 22),
(31, '2021_03_10_040832_create_customer_table_04', 23),
(32, '2021_03_10_041653_create_transaction_table_03', 24),
(33, '2021_03_10_044620_create_transaction_table_04', 25),
(34, '2021_03_10_050117_create_feed_table', 26),
(35, '2021_03_10_052326_create_boost_history_table_04', 27),
(36, '2021_03_10_060645_create_feed_table_01', 28),
(37, '2021_03_10_063428_create_follow_history_table', 29),
(38, '2021_03_14_103903_create_customer_table_05', 30);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles_users`
--

CREATE TABLE `roles_users` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`, `created_at`, `updated_at`) VALUES
('YqfytnJiHEAfhLCkwCutyOzmULf95n1BXzFDLeSp', 1, '::1', '', 'login', 1, '2021-03-03 20:49:49', '2021-03-03 20:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` double NOT NULL DEFAULT 1,
  `stars` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchaseToken` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchaseState` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `purchaseTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `packageName` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderId` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `productId`, `userId`, `created_at`, `updated_at`, `amount`, `stars`, `purchaseToken`, `purchaseState`, `purchaseTime`, `packageName`, `orderId`) VALUES
(1, 1, 4, '2021-02-27 16:52:15', '2021-03-09 19:52:01', 55, '225', 'aasdasd', '1', '2021-03-09 15:00:00', 'asd', '1'),
(2, 2, 1, '2021-03-01 07:55:08', '2021-03-01 07:55:08', 10, '', '', '', '2021-03-10 07:22:11', '', '2'),
(3, 1, 1, '2021-02-27 16:52:15', '2021-02-27 16:52:15', 1, '', '', '', '2021-03-10 07:22:11', '', '3'),
(4, 2, 1, '2021-03-01 07:55:08', '2021-03-01 07:55:08', 1, '', '', '', '2021-03-10 07:22:11', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstName` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `lastName` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_office` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_mobile` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logins` int(11) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `logout` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `username`, `password`, `email`, `phone_office`, `phone_mobile`, `avatar`, `logins`, `email_verified_at`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`, `logout`) VALUES
(1, 'Ilia', 'Dudenkov', 'idudenkov225', '$2y$10$3t.f9M9toNrQL1b0xGDL3.C4LHvH3UI9Osgfu.Tl3ZBl93CN6sFDm', 'idudenkov@internet.ru', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, '2021-02-27 16:51:53', '2021-02-27 18:40:41', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attach_files`
--
ALTER TABLE `attach_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boost_history`
--
ALTER TABLE `boost_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boost_package`
--
ALTER TABLE `boost_package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boost_stars`
--
ALTER TABLE `boost_stars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feeds`
--
ALTER TABLE `feeds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `follow_history`
--
ALTER TABLE `follow_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `last_login`
--
ALTER TABLE `last_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `users_id_uniq` (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `attach_files`
--
ALTER TABLE `attach_files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boost_history`
--
ALTER TABLE `boost_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `boost_package`
--
ALTER TABLE `boost_package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `boost_stars`
--
ALTER TABLE `boost_stars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feeds`
--
ALTER TABLE `feeds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `follow_history`
--
ALTER TABLE `follow_history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `last_login`
--
ALTER TABLE `last_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
