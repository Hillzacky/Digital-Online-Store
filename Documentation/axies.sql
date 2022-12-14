-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2022 at 04:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axies`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_senses`
--

CREATE TABLE `ad_senses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Display` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `Active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `url` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) DEFAULT 1,
  `Title_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `Title_ar`, `Title_en`, `Title_fr`, `slug`, `color`, `created_at`, `updated_at`) VALUES
(42, 2, 2, 'المختلف', 'Different', 'Different', 'laravel-framework', 'primary', '2020-05-04 08:55:23', '2022-02-16 21:55:51'),
(46, 1, 1, 'حيوية', 'Animation', 'Animation', 'animation', 'danger', '2022-02-16 21:58:39', '2022-02-16 21:58:39'),
(47, 2, 2, 'العلامة التجارية', 'Branding', 'Branding', 'branding', 'danger', '2022-02-16 21:59:12', '2022-02-16 21:59:12'),
(48, 4, 4, 'توضيح', 'Illustration', 'Illustration', 'illustration', 'danger', '2022-02-16 21:59:41', '2022-02-16 21:59:41'),
(49, 2, 2, 'الموبيل', 'Mobile', 'Mobile', 'mobile', 'danger', '2022-02-16 22:00:20', '2022-02-16 22:00:20'),
(50, 6, 6, 'تصميم المنتج', 'Product Design', 'Product Design', 'product-design', 'complete', '2022-02-16 22:00:47', '2022-02-16 22:00:47'),
(51, 8, 8, 'الطباعة', 'Typography', 'Typography', 'typography', 'danger', '2022-02-16 22:01:26', '2022-02-16 22:01:26'),
(52, 2, 2, 'تصميم المواقع', 'Web Design', 'Web Design', 'web-design', 'danger', '2022-02-16 22:02:28', '2022-02-16 22:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Post_id` int(11) NOT NULL DEFAULT 1,
  `User_id` int(11) NOT NULL DEFAULT 1,
  `Comment` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `Post_id`, `User_id`, `Comment`, `created_at`, `updated_at`) VALUES
(20, 91, 43, 'Curabitur vestibulum est eu convallis malesuada. Quisque ultricies feugiat ipsum, sed dictum ante interdum ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Curabitur vestibulum est eu convallis malesuada. Quisque ultricies feugiat ipsum, sed dictum ante interdum ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae', '2020-05-07 15:13:00', '2020-05-07 15:13:00'),
(21, 91, 43, 'Curabitur vestibulum est eu convallis malesuada. Quisque ultricies feugiat ipsum, sed dictum ante interdum ac. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Curabitur vestibulum est eu convallis malesuada. Quisque ultricies feugiat ipsum, sed dictum ante interdum ac.', '2020-05-07 15:13:58', '2020-05-07 15:13:58'),
(25, 107, 43, 'True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.', '2022-02-20 22:29:35', '2022-02-20 22:29:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageUpload_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'كريسبين بيري', 'Crispin Berry', 'Crispin Berry', '214.2 ETH', '214.2 ETH', '214.2 ETH', '561', 'Crispin-Berry', '2022-02-19 15:48:55', '2022-02-20 23:21:18'),
(2, 'شمشون فروست', 'Samson Frost', 'Samson Frost', '214.2 ETH', '214.2 ETH', '214.2 ETH', '562', 'samson-frost', '2022-02-19 16:08:41', '2022-02-20 23:21:34'),
(3, 'تومي الرز', 'Tommy Alrez', 'Tommy Alrez', '214.2 ETH', '214.2 ETH', '214.2 ETH', '563', 'tommy-alrez', '2022-02-19 16:13:53', '2022-02-20 23:21:48'),
(4, 'وندسور لين', 'Windsor Lane', 'Windsor Lane', '214.2 ETH', '214.2 ETH', '214.2 ETH', '564', 'windsor-lane', '2022-02-19 16:14:36', '2022-02-20 23:22:02'),
(5, 'آندي هيرلبوت', 'Andy Hurlbutt', 'Andy Hurlbutt', '214.2 ETH', '214.2 ETH', '214.2 ETH', '565', 'andy-hurlbutt', '2022-02-19 16:15:28', '2022-02-20 23:22:14'),
(6, 'بليك بانكس', 'Blake Banks', 'Blake Banks', '214.2 ETH', '214.2 ETH', '214.2 ETH', '566', 'blake-banks', '2022-02-19 16:16:17', '2022-02-20 23:22:26'),
(7, 'مونيكا لوكاس', 'Monica Lucas', 'Monica Lucas', '214.2 ETH', '214.2 ETH', '214.2 ETH', '567', 'monica-lucas', '2022-02-19 16:17:03', '2022-02-20 23:22:39'),
(8, 'مات راموس', 'Matt Ramos', 'Matt Ramos', '214.2 ETH', '214.2 ETH', '214.2 ETH', '568', 'matt-ramos', '2022-02-19 16:18:03', '2022-02-20 23:22:50'),
(9, 'الهاربر ويلشر', 'Harper', 'Harper Wilcher', '214.2 ETH', '214.2 ETH', '214.2 ETH', '569', 'harper-wilcher', '2022-02-19 16:24:35', '2022-02-20 23:23:03'),
(10, 'انتعاش الرقص', 'garlic bread', 'garlic bread', '214.2 ETH', '214.2 ETH', 'garlic bread', '570', 'garlic-bread', '2022-02-20 05:17:00', '2022-02-20 23:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `image_uploads`
--

CREATE TABLE `image_uploads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_uploads`
--

INSERT INTO `image_uploads` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(327, 'images/favicon-32x32.png', '2020-03-09 13:16:49', '2020-03-09 13:16:49'),
(335, 'images/avatar.png', '2020-03-09 13:26:00', '2020-03-09 13:26:00'),
(403, 'images/logo.png', '2020-04-12 17:10:24', '2020-04-12 17:10:24'),
(481, 'images/620b920f7095davt-8.jpg', '2022-02-15 19:44:15', '2022-02-15 19:44:15'),
(538, 'images/62125a43a6e9f5.jpg', '2022-02-20 23:12:03', '2022-02-20 23:12:03'),
(539, 'images/62125a5f2b73d5.jpg', '2022-02-20 23:12:31', '2022-02-20 23:12:31'),
(540, 'images/62125a72409895.jpg', '2022-02-20 23:12:50', '2022-02-20 23:12:50'),
(541, 'images/62125a89baab95.jpg', '2022-02-20 23:13:13', '2022-02-20 23:13:13'),
(542, 'images/62125b0c196aa5.jpg', '2022-02-20 23:15:24', '2022-02-20 23:15:24'),
(543, 'images/62125b24501675.jpg', '2022-02-20 23:15:48', '2022-02-20 23:15:48'),
(544, 'images/62125b57a260c5.jpg', '2022-02-20 23:16:39', '2022-02-20 23:16:39'),
(545, 'images/62125b7fd7c322.jpg', '2022-02-20 23:17:19', '2022-02-20 23:17:19'),
(546, 'images/62125b8d274bb2.jpg', '2022-02-20 23:17:33', '2022-02-20 23:17:33'),
(547, 'images/62125b97f36ff2.jpg', '2022-02-20 23:17:43', '2022-02-20 23:17:43'),
(548, 'images/62125ba38592e2.jpg', '2022-02-20 23:17:55', '2022-02-20 23:17:55'),
(549, 'images/62125bafe976a2.jpg', '2022-02-20 23:18:07', '2022-02-20 23:18:07'),
(550, 'images/62125bbb9146d2.jpg', '2022-02-20 23:18:19', '2022-02-20 23:18:19'),
(551, 'images/62125bc897ef02.jpg', '2022-02-20 23:18:32', '2022-02-20 23:18:32'),
(552, 'images/62125bd8ad48a2.jpg', '2022-02-20 23:18:48', '2022-02-20 23:18:48'),
(554, 'images/62125bf4a9a692.jpg', '2022-02-20 23:19:16', '2022-02-20 23:19:16'),
(555, 'images/62125c04646f72.jpg', '2022-02-20 23:19:32', '2022-02-20 23:19:32'),
(556, 'images/62125c1c6f1d32.jpg', '2022-02-20 23:19:56', '2022-02-20 23:19:56'),
(557, 'images/62125c29d19c12.jpg', '2022-02-20 23:20:09', '2022-02-20 23:20:09'),
(558, 'images/62125c36d097e2.jpg', '2022-02-20 23:20:22', '2022-02-20 23:20:22'),
(559, 'images/62125c45e0cf22.jpg', '2022-02-20 23:20:37', '2022-02-20 23:20:37'),
(560, 'images/62125c545975a2.jpg', '2022-02-20 23:20:52', '2022-02-20 23:20:52'),
(561, 'images/62125c67b75265.jpg', '2022-02-20 23:21:11', '2022-02-20 23:21:11'),
(562, 'images/62125c7a6c3b05.jpg', '2022-02-20 23:21:30', '2022-02-20 23:21:30'),
(563, 'images/62125c88b3b675.jpg', '2022-02-20 23:21:44', '2022-02-20 23:21:44'),
(564, 'images/62125c972aea05.jpg', '2022-02-20 23:21:59', '2022-02-20 23:21:59'),
(565, 'images/62125ca51672e5.jpg', '2022-02-20 23:22:13', '2022-02-20 23:22:13'),
(566, 'images/62125cb08b83c5.jpg', '2022-02-20 23:22:24', '2022-02-20 23:22:24'),
(567, 'images/62125cbc4a93b5.jpg', '2022-02-20 23:22:36', '2022-02-20 23:22:36'),
(568, 'images/62125cc8d220f5.jpg', '2022-02-20 23:22:48', '2022-02-20 23:22:48'),
(569, 'images/62125cd4af21e5.jpg', '2022-02-20 23:23:00', '2022-02-20 23:23:00'),
(570, 'images/62125ce234c745.jpg', '2022-02-20 23:23:14', '2022-02-20 23:23:14'),
(571, 'images/62125f5d3bc552.jpg', '2022-02-20 23:33:49', '2022-02-20 23:33:49'),
(572, 'images/62125f93e13ce1.png', '2022-02-20 23:34:43', '2022-02-20 23:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `Title`, `created_at`, `updated_at`) VALUES
(1, 'Main-menu', '2020-01-02 11:39:50', '2020-01-02 11:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` int(11) DEFAULT 0,
  `order` int(11) DEFAULT 0,
  `Title_en` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_ar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `order`, `Title_en`, `Title_ar`, `Title_fr`, `url`, `target`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Home', 'الصفحة الرئيسية', 'Accueil', '/', '_blank', '2020-01-13 10:48:19', '2020-01-13 10:48:19'),
(20, 1, 1, 'Contact Us', 'اتصل بنا', 'Contact Us', 'Contact', '_self', '2022-02-19 22:08:24', '2022-02-19 22:08:24'),
(21, 1, 1, 'Downloads', 'التحميلات', 'Downloads', 'Downloads', '_self', '2022-02-20 19:38:24', '2022-02-20 19:38:24');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Subject` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mail` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `User_id` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_09_143619_create_permission_tables', 2),
(5, '2016_09_13_070520_add_verification_to_user_table', 3),
(6, '2014_10_12_000000_create_users_table', 4),
(7, '2019_12_29_153111_create_image_uploads_table', 5),
(8, '2019_12_30_141843_create_posts_table', 6),
(9, '2019_12_30_142016_create_categories_table', 7),
(10, '2019_12_30_142116_create_clients_table', 7),
(11, '2019_12_30_142137_create_ad_senses_table', 7),
(12, '2019_12_30_142156_create_menus_table', 7),
(13, '2019_12_30_142250_create_menu_items_table', 7),
(14, '2019_12_30_142326_create_galleries_table', 7),
(15, '2019_12_30_142339_create_instagrams_table', 7),
(16, '2019_12_30_142418_create_messages_table', 7),
(17, '2019_12_30_170524_create_comments_table', 8),
(18, '2019_12_30_171111_create_menu_items_table', 9),
(19, '2017_03_03_100000_create_options_table', 10),
(20, '2020_04_14_162242_create_audio_table', 11),
(21, '2014_10_12_200000_add_two_factor_columns_to_users_table', 12),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 12),
(23, '2021_03_07_183215_create_sessions_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(31, 'App\\User', 43);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(30, 'App\\User', 43),
(34, 'App\\User', 44),
(34, 'App\\User', 45),
(34, 'App\\User', 46),
(34, 'App\\User', 47),
(34, 'App\\User', 49),
(35, 'App\\User', 48),
(35, 'App\\User', 49),
(35, 'App\\User', 50),
(35, 'App\\User', 51),
(36, 'App\\User', 45),
(36, 'App\\User', 46),
(36, 'App\\User', 48),
(36, 'App\\User', 49),
(36, 'App\\User', 50),
(36, 'App\\User', 51);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `key`, `value`) VALUES
(2, 'Home_fr', '\"Axies - Premium Downloads Scripts System with Website.\"'),
(3, 'Home_ar', '\"\\u0627\\u0643\\u0633\\u064a\\u0633 - \\u0646\\u0638\\u0627\\u0645 \\u0627\\u0644\\u0628\\u0631\\u0627\\u0645\\u062c \\u0627\\u0644\\u0646\\u0635\\u064a\\u0629 \\u0644\\u0644\\u062a\\u0646\\u0632\\u064a\\u0644 \\u0627\\u0644\\u0645\\u062a\\u0645\\u064a\\u0632 \\u0645\\u0639 \\u0645\\u0648\\u0642\\u0639 \\u0627\\u0644\\u0648\\u064a\\u0628\"'),
(4, 'Home_en', '\"Axies - Premium Downloads Scripts System with Website.\"'),
(5, 'Favicon', '\"images/favicon-32x32.png\"'),
(8, 'youtube', '\"https:\\/\\/www.youtube.com\"'),
(9, 'GitHub', '\"https:\\/\\/github.com\"'),
(10, 'Twitter', '\"https:\\/\\/twitter.com\"'),
(11, 'Pinterest', '\"https:\\/\\/www.pinterest.com\"'),
(12, 'Tumblr', '\"https:\\/\\/www.tumblr.com\"'),
(13, 'Snapchat', '\"https:\\/\\/www.snapchat.com\"'),
(14, 'LinkedIn', '\"https:\\/\\/www.linkedin.com\"'),
(15, 'Instagram', '\"https:\\/\\/www.instagram.com\"'),
(16, 'Facebook', '\"https://www.facebook.com/\"'),
(17, 'MetaKeyWords', '\"Axies - Premium Downloads Scripts System with Website.\"'),
(18, 'MetaDescription', '\"Axies - Premium Downloads Scripts System with Website.\"'),
(19, 'video', '\"video\"'),
(20, 'Googlemap', '\"Googlemap\"'),
(21, 'Email', '\"Axies@gmail.com\"'),
(22, 'PhoneNumber', '\"+90(5539102492)\"'),
(23, 'Address', '\"3891 Ranchview Dr. Richardson, California 62639\"'),
(24, 'SiteTitle', '\"Axies\"'),
(25, 'Language', '\"on\"'),
(28, 'Metaauthor', '\"Axies - Premium Downloads Scripts System with Website.\"'),
(29, 'Metarobots', '\"Axies - Premium Downloads Scripts System with Website.\"'),
(37, 'logo', '\"images/logo.png\"'),
(39, 'coveruser', '\"images\\/62125f93e13ce1.png\"'),
(40, 'covernew', '\"images\\/62125f93e13ce1.png\"'),
(41, 'covermessage', '\"images\\/62125f93e13ce1.png\"'),
(42, 'coveradvertisement', '\"images\\/62125f93e13ce1.png\"'),
(43, 'coverinstagram', '\"images\\/62125f93e13ce1.png\"'),
(46, 'settings', '\"images\\/62125f93e13ce1.png\"'),
(47, 'home_background', '\"images\\/62125f93e13ce1.png\"'),
(48, 'other_background', '\"images\\/62125f93e13ce1.png\"');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('admin@admin.com', '$2y$10$bui5fl4azCrQhE2fjJQ6YOvAdyRJHXJVsJeAYuVLNWOGWCl9QFXM2', '2019-12-09 14:13:59');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(31, 'edit articles', 'web', '2020-01-04 14:37:28', '2020-01-04 14:37:28'),
(35, 'User', 'web', '2020-01-04 16:05:35', '2020-01-04 16:05:35'),
(36, 'supervisor', 'web', '2022-02-15 18:36:17', '2022-02-15 18:36:17'),
(37, 'Data entry', 'web', '2022-02-15 18:36:32', '2022-02-15 18:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `Title_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_ar` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_en` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_fr` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageUpload_id` int(11) DEFAULT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Downloud` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `featured` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT 'out',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `Title_ar`, `Title_en`, `Title_fr`, `body_ar`, `body_en`, `body_fr`, `ImageUpload_id`, `slug`, `Downloud`, `featured`, `created_at`, `updated_at`) VALUES
(106, 45, 42, 'هاملت يتأمل', 'Hamlet Contemplates Contemplates', 'Hamlet Contemplates Contemplates', 'هاملت يتأمل', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Hamlet Contemplates Contemplates', 559, 'hamlet-contemplates-contemplates', '50 mb', 'on', '2022-02-16 21:44:51', '2022-02-20 23:20:39'),
(107, 45, 46, 'يتأمل الصحوة المنتصرة', 'Triumphant Awakening Contemplates', 'Triumphant Awakening Contemplates', 'يتأمل الصحوة المنتصرة', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Triumphant Awakening Contemplates', 560, 'triumphant-awakening-contemplates', '50 mb', 'on', '2022-02-16 22:08:45', '2022-02-20 23:20:54'),
(108, 45, 46, 'مزهرية المعيشة', 'Living Vase 01 by Lanza Contemplates', 'Living Vase 01 by Lanza Contemplates', 'مزهرية المعيشة', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Living Vase 01 by Lanza Contemplates', 558, 'living-vase-01-by-lanza-contemplates', '50 mb', 'on', '2022-02-16 22:10:46', '2022-02-20 23:20:26'),
(109, 46, 47, 'التصميم أكثر من مجرد صورة', 'Flame Dress\' by Balmain Contemplates', 'Flame Dress\' by Balmain Contemplates', 'التصميم أكثر من مجرد صورة', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Flame Dress\' by Balmain Contemplates', 557, 'flame-dress-by-balmain-contemplates', '50 mb', 'on', '2022-02-16 22:28:39', '2022-02-20 23:20:11'),
(110, 46, 47, 'الرقص تشرق الشمس', 'The RenaiXance Rising the sun Contemplates', 'The RenaiXance Rising the sun', 'الرقص تشرق الشمس', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'The RenaiXance Rising the sun', 556, 'the-renaixance-rising-the-sun', '50 mb', 'on', '2022-02-16 22:32:13', '2022-02-20 23:19:58'),
(111, 43, 47, 'انتعاش الرقص', 'The RenaiXance Rising', 'The RenaiXance Rising', 'انتعاش الرقص', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'The RenaiXance Rising', 555, 'the-renaixance-rising', '50 mb', 'on', '2022-02-19 15:09:35', '2022-02-20 23:19:34'),
(112, 43, 46, 'انتعاش الرقص', 'The RenaiXance Contemplates', 'The RenaiXance', 'انتعاش الرقص', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.', 554, 'the-renaixance', '50 mb', 'on', '2022-02-19 15:10:36', '2022-02-20 23:19:18'),
(113, 43, 48, 'فستان فليم بالمين', 'Flame Dress\' by Balmain', 'Flame Dress\' by Balmain', 'فستان فليم بالمين', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Flame Dress\' by Balmain', 571, 'flame-dress-by-balmain', '50 mb', 'on', '2022-02-19 15:23:10', '2022-02-20 23:33:52'),
(114, 43, 46, 'الفستان فليم بالمين', 'Contemplates Contemplates', 'Contemplates Contemplates', 'الفستان فليم بالمين', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Contemplates Contemplates', 552, 'contemplates-contemplates', '50 mb', 'on', '2022-02-19 15:25:27', '2022-02-20 23:18:52'),
(115, 43, 46, 'هاملت يتأمل', 'Hamlet Contemplates', 'Hamlet Contemplates', 'هاملت يتأمل', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n<p><br></p>\r\n<p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Hamlet Contemplates', 551, 'hamlet-contemplates', '50 mb', 'on', '2022-02-19 15:27:15', '2022-02-20 23:18:34'),
(116, 43, 47, 'يتأمل المنتصر', 'Triumphant Contemplates', 'Triumphant Contemplates', 'يتأمل المنتصر', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Triumphant Contemplates', 550, 'triumphant-contemplates', '50 mb', 'on', '2022-02-19 15:28:32', '2022-02-20 23:18:21'),
(117, 43, 47, 'انتصار يتأمل زائد', 'Triumphant Contemplates Plus', 'Triumphant Contemplates Plus', 'انتصار يتأمل زائد', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p><p><br></p><p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Triumphant Contemplates Plus', 549, 'triumphant-contemplates-plus', '50 mb', 'on', '2022-02-19 15:37:05', '2022-02-20 23:18:10'),
(118, 43, 48, 'ليفينغ زهرية لانزا يتأمل', 'Living Vase Lanza Contemplates', 'Living Vase Lanza Contemplates', 'ليفينغ زهرية لانزا يتأمل', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Living Vase Lanza Contemplates', 548, 'living-vase-lanza-contemplates', '50 mb', 'on', '2022-02-19 15:38:35', '2022-02-20 23:17:58'),
(119, 43, 46, 'الصحوة المنتصرة تتأمل زائد', 'Triumphant Awakening Contemplates Plus', 'Triumphant Awakening Contemplates Plus', 'الصحوة المنتصرة تتأمل زائد', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Triumphant Awakening Contemplates Plus', 547, 'triumphant-awakening-contemplates-plus', '50 mb', 'on', '2022-02-19 15:40:09', '2022-02-20 23:17:45'),
(120, 43, 46, 'يتأمل أربعة', 'Contemplates Contemplates Four', 'Contemplates Contemplates Four', 'يتأمل أربعة', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Contemplates Contemplates Four', 546, 'contemplates-contemplates-four', '50 mb', 'on', '2022-02-19 15:41:18', '2022-02-20 23:17:34'),
(121, 45, 46, 'التصميم الحقيقي قصة', 'Contemplates Contemplates qure', 'Contemplates Contemplates qure', 'التصميم الحقيقي قصة', '<p><span style=\"font-weight: bold;\">Design is more than just a picture.</span></p>\r\n        <p>True design is a story. Where the main character can be a product or service. It depends on the designer whether this story will be watched to the end or closed and forgotten This option has not been accepted by the client, and is available for sale.</p>', 'Contemplates Contemplates qure', 545, 'contemplates-contemplates-qure', '50 mb', 'on', '2022-02-19 15:42:31', '2022-02-20 23:17:22');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(30, 'Super-Admin', 'web', '2020-01-04 14:37:28', '2020-01-04 14:37:28'),
(34, 'User', 'web', '2020-01-04 16:05:35', '2020-01-04 16:05:35'),
(35, 'Supervisor', 'web', '2022-02-15 18:36:16', '2022-02-15 18:36:16'),
(36, 'Data entry', 'web', '2022-02-15 18:36:31', '2022-02-15 18:36:31');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('7RAGqvAqXRJfPMfIoA4pIpLXH0ThhFzCkPfcjYvy', 43, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:98.0) Gecko/20100101 Firefox/98.0', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiSTNweUJ2R1ZYc0dwSXlwQU9PRnZVODJmVWllUWhqMDhjSjBlcm9qaSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9lbiI7fXM6NjoibG9jYWxlIjtzOjI6ImVuIjtzOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDM7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNjQ1MzY3MzcwO31zOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJFYwQXBMTWVkZ3ZacjVtRkd1Sk5YR2ViUGNaT3h4T1VHdGV5ekRaSjF0dW4yY3JtdW9pWWxxIjt9', 1645371371);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageUpload_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '335',
  `Phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `ImageUpload_id`, `Phone`, `slug`, `remember_token`, `created_at`, `updated_at`) VALUES
(43, 'Axies', 'Dashbourd@axies.com', NULL, '$2y$10$V0ApLMedgvZr5mFGuJNXGebPcZOxxOUGteyzDZJ1tun2crmuoiYlq', NULL, NULL, '481', '666-88-721', 'axies', 'lePc70FJK04TRfrwi0W8f6DIFJvIsIUAqWHwbGOP7jN5UAc8oplZDCebCv57', '2020-01-25 15:16:19', '2022-02-15 19:44:20'),
(45, 'Crispin Berry', 'CrispinBerry@axies.com', NULL, '$2y$10$hApn8Gb10xpYAX9BmOOw6Oo88VZyC2lszii7n0H548wcNQOUOxvm2', NULL, NULL, '538', '333-444-777', 'Crispin-Berry', NULL, '2022-02-15 19:46:44', '2022-02-20 23:12:07'),
(46, 'Samson Frost', 'Samson-Frost@axies.com', NULL, '$2y$10$BJopVgb5EHPG5kas8c270uJa8M2SSVVRk8xAB6lasUmgS4Ak./k1S', NULL, NULL, '539', '333-444-777', 'samson-frost', NULL, '2022-02-15 19:51:02', '2022-02-20 23:12:33'),
(47, 'Tommy Alvarez', 'Tommy-Alvarez@axies.com', NULL, '$2y$10$lAh3AXGXsVyIhzl608Sz3uLamq7LOiityat1n5/FGApzUDoOisu0m', NULL, NULL, '540', '0212-1654-98', 'tommy-alvarez', NULL, '2022-02-15 19:52:15', '2022-02-20 23:12:53'),
(48, 'Windsor Lane', 'WindsorLane@axies.com', NULL, '$2y$10$8N32t9GR11WE6IxKW.gCje3RW7HUO7PO.9OaN9clY4/7ucqpcNuza', NULL, NULL, '541', '3434-879789', 'windsor-lane', NULL, '2022-02-15 19:53:30', '2022-02-20 23:13:16'),
(49, 'Andy Hurlbutt', 'AndyHurlbutt@axies.com', NULL, '$2y$10$wSrfYHiZGqViSEeLB5UtjOJWIJSftxVK5bxieadLOn.4.J6I5odi2', NULL, NULL, '542', '0212-1654-98', 'andy-hurlbutt', NULL, '2022-02-15 19:54:48', '2022-02-20 23:15:27'),
(50, 'Blake Banks', 'Blake-Banks@axies.com', NULL, '$2y$10$K.CBo4zFNa3Y7tKEjXEyGOe9qoERMuBcsVRltY0Gxsec6AJFmtr4O', NULL, NULL, '543', '6555-887741', 'blake-banks', NULL, '2022-02-15 19:55:39', '2022-02-20 23:15:50'),
(51, 'Harper Wilcher', 'Harper-Wilcher@axies.com', NULL, '$2y$10$iGpM4sfV7PAp6qXt87DEIuKzjj3EYzv45xPjrmkYj1vj8UdaBCO5m', NULL, NULL, '544', '555-999-88', 'harper-wilcher', NULL, '2022-02-15 19:56:51', '2022-02-20 23:16:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_senses`
--
ALTER TABLE `ad_senses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_uploads`
--
ALTER TABLE `image_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `options_key_unique` (`key`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_senses`
--
ALTER TABLE `ad_senses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `image_uploads`
--
ALTER TABLE `image_uploads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=573;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
