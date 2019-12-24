-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2019 at 06:36 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gitbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `user_id` int(10) DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`user_id`, `country`, `state`, `district`, `city`, `created_at`, `updated_at`) VALUES
(NULL, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', '2019-03-06 00:04:17', '2019-03-06 00:04:17'),
(NULL, 'Bangladesh', 'Khulana', 'Kushtia', 'Kushtia sadar', '2019-03-06 00:09:24', '2019-03-06 00:09:24'),
(NULL, 'fgbgf', 'fghfd', 'fghnfg', 'fghfg', '2019-03-06 21:32:27', '2019-03-06 21:32:27'),
(NULL, 'Bangladesh', 'Bangladesh', 'country', 'asdfd', '2019-03-06 21:33:58', '2019-03-06 21:33:58'),
(NULL, 'Bangladesh', 'Rangpur', 'Kurigram', 'kurigram sadar', '2019-03-09 04:59:45', '2019-03-09 04:59:45'),
(NULL, 'Bangladesh', 'Rangpur', 'Kurigram', 'kuurigram sadar', '2019-03-09 05:02:14', '2019-03-09 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `hyrarcy` int(11) DEFAULT NULL,
  `job` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_26_171634_create_shops_table', 1),
(4, '2018_11_27_120525_create_shop_types_table', 1),
(5, '2018_11_27_122511_create_user_roles_table', 1),
(6, '2018_11_29_032924_create_countries_table', 1),
(7, '2018_11_29_033302_create_states_table', 1),
(8, '2018_11_29_033333_create_districts_table', 1),
(9, '2018_11_29_033414_create_cities_table', 1),
(10, '2018_11_29_042701_create_shop_users_table', 1),
(11, '2018_11_29_042829_create_shop_admins_table', 1),
(12, '2018_11_29_043158_create_user_profiles_table', 1),
(13, '2018_12_03_120230_create_shop_addresses_table', 1),
(14, '2018_12_03_120509_create_shop_contacts_table', 1),
(15, '2018_12_03_144007_create_shop_notices_table', 1),
(16, '2018_12_04_064115_create_shop_complains_table', 1),
(17, '2018_12_08_083815_create_products_table', 1),
(18, '2018_12_14_063742_create_product_categories_table', 1),
(19, '2018_12_14_063955_create_product_types_table', 1),
(20, '2019_01_18_131337_create_shop_likes_table', 1),
(21, '2019_01_18_131402_create_shop_comments_table', 1),
(22, '2019_01_18_131426_create_shop_views_table', 1),
(23, '2019_01_18_131736_create_product_images_table', 1),
(24, '2019_01_18_140202_create_order_users_table', 1),
(25, '2019_01_19_122111_create_shop_ratings_table', 1),
(26, '2019_01_31_122857_create_private_product_clothes_images_table', 1),
(27, '2019_02_03_090441_create_private_products_table', 1),
(28, '2019_02_03_090553_create_private_product_infos_table', 1),
(29, '2019_02_03_090914_create_ptrshops_table', 1),
(30, '2019_02_03_091148_create_ptrshop_likes_table', 1),
(31, '2019_02_03_091302_create_ptrshop_comments_table', 1),
(32, '2019_02_03_091433_create_ptrshop_connects_table', 1),
(33, '2019_02_04_115327_create_orders_table', 1),
(34, '2019_02_04_121037_create_wishlists_table', 1),
(35, '2019_02_04_121641_create_private_product_likes_table', 1),
(36, '2019_02_04_121732_create_private_product_comments_table', 1),
(37, '2019_02_04_121906_create_private_product_ratings_table', 1),
(38, '2019_02_04_150059_create_ptrshop_ratings_table', 1),
(39, '2019_02_04_150351_create_ptrproduct_ratings_table', 1),
(40, '2019_02_04_150429_create_ptrproduct_likes_table', 1),
(41, '2019_02_04_150450_create_ptrproduct_comments_table', 1),
(42, '2019_02_04_150709_create_ptrproducts_table', 1),
(43, '2019_02_04_150827_create_ptrproduct_infos_table', 1),
(44, '2019_02_26_124319_create_private_product_images_table', 1),
(45, '2019_02_26_124524_create_private_product_clothes_sizes_table', 1),
(46, '2019_02_26_124659_create_private_product_shoe_sizes_table', 1),
(47, '2019_02_26_124836_create_private_product_hotel_bookings_table', 1),
(48, '2019_03_13_034726_create_employers_table', 2),
(49, '2019_03_18_022234_create_variables_table', 3),
(50, '2019_03_22_163413_create_bookings_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trxid` varchar(192) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_type`, `id`, `user_name`, `user_id`, `customer_name`, `contact_info`, `payment_method`, `payment_amount`, `account_number`, `trxid`, `address`, `action`, `created_at`, `updated_at`) VALUES
('order', 1, 'Admin', 2, '1231133412', 'fdjhfd', 'fgjf sadf ndhbd thn dfh fhjg n dhg dfhdf dhfgjffdjfdfgjhfdfdjfd', NULL, NULL, '12341243124124', NULL, 'checked', '2019-03-09 00:03:59', '2019-04-10 05:29:59'),
('order', 2, 'Admin', 2, '1231133412', 'fdjhfd', 'fgjf sadf ndhbd thn dfh fhjg n dhg dfhdf dhfgjffdjfdfgjhfdfdjfd', NULL, NULL, '12341243124124', NULL, 'checked', '2019-03-09 00:05:50', '2019-04-10 05:30:06'),
('order', 3, 'Admin', 2, '01856279041', 'l01856279041', 'bkash', NULL, NULL, '12231231214124514', NULL, 'checked', '2019-03-09 00:08:56', '2019-04-10 09:34:37'),
('order', 4, 'Admin', 2, '01856279041', 'l01856279041', 'bkash', NULL, NULL, '12231231214124514', NULL, 'checked', '2019-03-09 00:13:12', '2019-04-10 05:30:12'),
('order', 5, 'Admin', 2, 'Shariful hasan', 'l01856279041', 'rocket', NULL, '01856279041', '01856279041', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'checked', '2019-03-09 00:14:40', '2019-04-10 09:42:06'),
('order', 6, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '01856279041', '01856279041', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'checked', '2019-03-09 00:15:55', '2019-04-10 09:42:10'),
('order', 7, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '01856279041', '01856279041', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'checked', '2019-03-09 01:49:27', '2019-04-10 09:42:12'),
('order', 8, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '01856279041', '01856279041', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'checked', '2019-03-09 01:49:30', '2019-04-10 09:42:13'),
('order', 9, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '01856279041', '01856279041', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'checked', '2019-03-09 01:49:58', '2019-04-10 09:52:44'),
('order', 10, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '01856279041', '01856279041', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'checked', '2019-03-09 01:57:58', '2019-04-13 08:15:34'),
('order', 11, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '01856279041', '01856279041', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'checked', '2019-03-09 01:58:02', '2019-04-13 08:15:39'),
('order', 12, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '01856279041', '01856279041', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'checked', '2019-03-09 01:58:37', '2019-04-13 08:15:40'),
('order', 13, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, 'xczbvxzcbx', 'sgsdgbvs gbd', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'cancled', '2019-03-09 01:59:11', '2019-04-13 08:15:44'),
('order', 14, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '12313', '1312312', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'cancled', '2019-03-09 02:01:38', '2019-04-13 08:15:46'),
('order', 15, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '12313', '1312312', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'cancled', '2019-03-09 02:01:43', '2019-04-13 08:15:47'),
('order', 16, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '018562790410', '123342423542352', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-09 02:04:49', '2019-03-09 02:04:49'),
('order', 17, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '018562790410', '123342423542352', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-09 02:12:32', '2019-03-09 02:12:32'),
('order', 18, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '018562790410', '018562790410', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-09 02:41:35', '2019-03-09 02:41:35'),
('order', 19, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1231312312312', '1312312312', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'Hide', '2019-03-09 02:50:19', '2019-04-10 09:59:41'),
('order', 20, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1231312312312', '1312312312', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'Hide', '2019-03-09 02:50:28', '2019-04-10 09:59:32'),
('order', 21, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, 'dsgfsdgbhd', 'ftyhnfgjn', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-09 12:10:37', '2019-03-09 12:10:37'),
('order', 22, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, 'rtgdgvb', 'gshdsfg', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'Hide', '2019-03-09 12:27:15', '2019-04-10 10:00:58'),
('order', 23, 'ali', 4, '.,m ,l, l;,,;\'', ';;l.lp[lp[lp[', 'bkash', NULL, 'mzxn', 'mmmz', NULL, 'pending', '2019-03-12 07:12:25', '2019-03-12 07:12:25'),
('order', 24, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1014054052102', '0410014420510', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-13 01:10:39', '2019-03-13 01:10:39'),
('order', 25, 'user', 3, 'sdfg', 'dfghdfsh', 'rocket', NULL, '456345356', '456+546+56', 'shiping_address,hj hfdhfghdshdfsdfhdsdfhdsfh', 'pending', '2019-03-15 05:25:05', '2019-03-15 05:25:05'),
('order', 26, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '5454', '56231', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 07:03:38', '2019-03-17 07:03:38'),
('order', 27, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '123', '123', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:01:07', '2019-03-17 10:01:07'),
('order', 28, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1223', '123213', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:02:55', '2019-03-17 10:02:55'),
('order', 29, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '123333', '123213', 'sadam hosen hall room:413Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:08:29', '2019-03-17 10:08:29'),
('order', 30, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, '2342352', '2452342342', NULL, 'pending', '2019-03-17 10:16:52', '2019-03-17 10:16:52'),
('order', 31, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1233213', '13221312', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:18:58', '2019-03-17 10:18:58'),
('order', 32, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1233213', '13221312', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:23:33', '2019-03-17 10:23:33'),
('order', 33, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1233213', '13221312', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:27:37', '2019-03-17 10:27:37'),
('order', 34, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '12312312', '123213213', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:29:34', '2019-03-17 10:29:34'),
('order', 35, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '12312312', '123213213', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:30:21', '2019-03-17 10:30:21'),
('order', 36, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '123424', '2134234234', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:34:37', '2019-03-17 10:34:37'),
('order', 37, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '123424', '2134234234', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:35:21', '2019-03-17 10:35:21'),
('order', 38, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '12313', '1321123', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:35:33', '2019-03-17 10:35:33'),
('order', 39, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '12321', '123123', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:39:01', '2019-03-17 10:39:01'),
('order', 40, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '12321', '123123', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:40:20', '2019-03-17 10:40:20'),
('order', 41, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '123213', '13212312', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:40:59', '2019-03-17 10:40:59'),
('order', 42, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, 'ewtfrs', 'wetgrestg', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:44:15', '2019-03-17 10:44:15'),
('order', 43, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, 'e42qrwqr2', '2352345235423', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 10:45:18', '2019-03-17 10:45:18'),
('order', 44, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '123412421', '2134234231', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 11:39:33', '2019-03-17 11:39:33'),
('order', 45, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, '1234124', '21342134231', NULL, 'pending', '2019-03-17 20:44:34', '2019-03-17 20:44:34'),
('order', 46, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, '13123', '12312312', NULL, 'pending', '2019-03-17 20:49:49', '2019-03-17 20:49:49'),
('order', 47, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1321', '234123423', 'sadam hosen hall room:413 555Kushtia sadarKushtiakhulnaBangladesh', 'pending', '2019-03-17 21:07:55', '2019-03-17 21:07:55'),
('order', 48, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, '12321', '2342134', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-17 21:11:15', '2019-03-17 21:11:15'),
('order', 49, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, '12331321', '12312312', NULL, 'pending', '2019-03-17 21:42:07', '2019-03-17 21:42:07'),
('order', 50, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, '131231232131', '12321321321231', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-17 21:52:09', '2019-03-17 21:52:09'),
('order', 51, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '1234566', '1235654456', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-18 04:12:44', '2019-03-18 04:12:44'),
('order', 52, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '11', '11', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-18 06:56:04', '2019-03-18 06:56:04'),
('order', 53, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, 'oik', '45', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-18 07:01:49', '2019-03-18 07:01:49'),
('order', 54, 'user', 3, 'sdfg', 'dfghdfsh', 'bkash', NULL, '441', '44', 'shiping_address,hj h, fdhfgh, dshdfs, dfhds, dfhdsfh', 'pending', '2019-03-18 07:09:40', '2019-03-18 07:09:40'),
('order', 55, 'user', 3, 'sdfg', 'dfghdfsh', 'rocket', NULL, '5', '5', 'shiping_address,hj h, fdhfgh, dshdfs, dfhds, dfhdsfh', 'pending', '2019-03-18 07:11:41', '2019-03-18 07:11:41'),
('order', 56, 'user', 3, 'julfikar', '321564849+', 'rocket', NULL, '545', '14', 'bangladesg, 878421, 454, 6556, bn', 'pending', '2019-03-18 07:15:55', '2019-03-18 07:15:55'),
('order', 57, 'user', 3, 'julfikar', '321564849+', 'rocket', NULL, '234234', '2341231413', 'bangladesg, 878421, 454, 6556, bn', 'pending', '2019-03-21 08:29:31', '2019-03-21 08:29:31'),
('order', 58, 'Admin', 2, 'Shariful hasan', '01856279041', 'rocket', NULL, '12321', '23423', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-21 10:16:15', '2019-03-21 10:16:15'),
('order', 59, 'user', 3, 'julfikar', '321564849+', 'rocket', NULL, '21321', '23423', 'bangladesgb c  fgjgh, 878421, 454, 6556, bn', 'pending', '2019-03-21 10:22:55', '2019-03-21 10:22:55'),
('order', 60, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '12312', '12312312312', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 00:34:46', '2019-03-22 00:34:46'),
('order', 61, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '21321', '42314', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 00:38:12', '2019-03-22 00:38:12'),
('booking', 63, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '12342143214', '`42`34234423', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:11:55', '2019-03-22 05:11:55'),
('booking', 64, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '1234242132143', '21342314231432', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:13:42', '2019-03-22 05:13:42'),
('booking', 65, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, '32121424324', '2342314231', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:19:36', '2019-03-22 05:19:36'),
('booking', 66, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '21342423', '21341234234', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:24:23', '2019-03-22 05:24:23'),
('booking', 67, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '21342423', '21341234234', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:25:11', '2019-03-22 05:25:11'),
('booking', 68, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '21342423', '21341234234', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:26:03', '2019-03-22 05:26:03'),
('booking', 69, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '21342423', '21341234234', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:26:35', '2019-03-22 05:26:35'),
('booking', 70, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '21342423', '21341234234', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:27:12', '2019-03-22 05:27:12'),
('booking', 71, 'Admin', 2, 'Shariful hasan', '01856279041', 'gitbazar', NULL, '21342423', '21341234234', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 05:29:42', '2019-03-22 05:29:42'),
('order', 72, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, '42314234', '231423434', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 09:23:46', '2019-03-22 09:23:46'),
('order', 73, 'Admin', 2, 'Shariful hasan', '01856279041', 'bkash', NULL, 'qwetet', 'qteqrtqert', 'sadam hosen hall room:413 555, Kushtia sadar, Kushtia, khulna, Bangladesh', 'pending', '2019-03-22 22:41:35', '2019-03-22 22:41:35'),
('order', 74, 'user', 3, 'julfikar', '321564849+', 'bkash', NULL, '1243234', '2342342', 'bangladesgb c  fgjgh, 878421, 454, 6556, bn', 'pending', '2019-03-25 09:34:25', '2019-03-25 09:34:25'),
('order', 75, 'user', 3, 'akash', '321564849+', 'bkash', NULL, '854897489', '21+', 'bangladesgb c  fgjgh, 878421, 454, 6556, bn', 'pending', '2019-03-25 22:10:10', '2019-03-25 22:10:10');

-- --------------------------------------------------------

--
-- Table structure for table `order_users`
--

CREATE TABLE `order_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shiping_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_users`
--

INSERT INTO `order_users` (`id`, `user_name`, `customer_name`, `contact_info`, `country`, `state`, `district`, `city`, `shiping_address`, `created_at`, `updated_at`) VALUES
(1, 'shsohag1995', 'Hasan', '01856279041', 'Bangladesh', 'Khulna', 'Khuklna', 'Khulna', 'sdgsdgdsag', '2019-02-26 21:59:42', '2019-04-13 12:30:00'),
(2, 'Admin', 'Shariful hasan', '01856279041', 'Bangladesh', 'khulna', 'Kushtia', 'Kushtia sadar', 'sadam hosen hall room:413 555', '2019-02-26 22:12:11', '2019-03-22 22:41:28'),
(3, 'user', 'akash', '321564849+', 'bn', '6556', '454', '878421', 'bangladesgb c  fgjgh', '2019-03-04 02:24:07', '2019-03-25 22:10:02'),
(4, 'ali', '.,m ,l, l;,,;\'', ';;l.lp[lp[lp[', '.,mm l;,;p.', 'eiojoiwk', 'kjmkl', 'kmjkl', 'kjmklmsd', '2019-03-12 07:06:16', '2019-03-12 07:12:11'),
(5, 'shsohag9041@gmail.com', 'md shariful', '123424213324bangladesh', 'bangladesh', 'rangpur', 'kurigram', 'kurigram', 'dbgfn mnhm bsd mhb fsd njhnmfsd', '2019-04-07 21:47:28', '2019-04-11 04:45:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_products`
--

CREATE TABLE `private_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `ptrproduct_id` int(10) UNSIGNED DEFAULT NULL,
  `ptrshop_id` int(10) UNSIGNED DEFAULT NULL,
  `ptr_sp_counter_number` int(10) UNSIGNED DEFAULT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `p_image_counter` int(10) DEFAULT '1',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_order` int(11) NOT NULL DEFAULT '1',
  `price_bdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_cgc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_usd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seller_profit_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `profit_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5',
  `like` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `view` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_products`
--

INSERT INTO `private_products` (`id`, `shop_name`, `shop_slug`, `shop_id`, `user_id`, `ptrproduct_id`, `ptrshop_id`, `ptr_sp_counter_number`, `sp_counter_number`, `p_image_counter`, `title`, `category`, `type`, `brand`, `quantity`, `unit`, `minimum_order`, `price_bdt`, `price_cgc`, `price_usd`, `seller_profit_rate`, `profit_rate`, `like`, `comment`, `view`, `slug`, `payment_info`, `action`, `image`, `created_at`, `updated_at`) VALUES
(8, 'baby toy kids gift store', 'baby-toy-kids-gift-store', 4, 2, NULL, NULL, NULL, 1, 1, 'sfcsd', 'dsgdsafg', 'sdfgds', 'sdg', 1, 'piece', 1, '10', NULL, NULL, '0', '5', 0, 0, 0, 'sfcsd', 'online', 'show', 'public/shop/baby/baby-toy-kids-gift-store/product/M2N4yv0qNliBsIccpwK9RMKCW9UE9XehMAiqr168.jpeg', '2019-03-07 23:03:02', '2019-03-21 01:35:03'),
(11, 'baby toy kids gift store', 'baby-toy-kids-gift-store', 4, 2, NULL, NULL, NULL, 2, 1, 'gift', 'qwdwqe', 'weqrwqe', 'werweq', 1, 'piece', 1, '1231', NULL, NULL, '0', '5', 0, 0, 0, 'gift', 'online', 'show', 'public/shop/baby/baby-toy-kids-gift-store/product/LC03f3JuyJsUnR4f8Mycx6wpRIzioy0Kvl9mZ7k2.jpeg', '2019-03-09 04:06:02', '2019-03-09 04:06:02'),
(12, 'baby toy kids gift store', 'baby-toy-kids-gift-store', 4, 2, NULL, NULL, NULL, 3, 1, 'sadgsad', 'sadgsad', 'sdagsda', 'sdagsad', 1, 'piece', 1, 'sadgsad', NULL, NULL, '0', '5', 0, 0, 0, 'sadgsad', 'online', 'show', 'public/shop/baby/baby-toy-kids-gift-store/product/UJSX3Ag4AleoDXNn2vTT4pZZ1cZLcnL5yEi7iVNl.jpeg', '2019-03-09 04:06:20', '2019-03-09 04:06:20'),
(13, 'baby toy kids gift store', 'baby-toy-kids-gift-store', 4, 2, NULL, NULL, NULL, 4, 1, 'sdgasdg', 'sadgsad', 'sadgasd', 'sadgsdag', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sdgasdg', 'online', 'show', 'public/shop/baby/baby-toy-kids-gift-store/product/PoRbtRfGhzRFTiBWuWUUXdBzGdRVgwYXUkcTmi1e.jpeg', '2019-03-09 04:06:41', '2019-03-09 04:06:41'),
(14, 'baby toy kids gift store', 'baby-toy-kids-gift-store', 4, 2, NULL, NULL, NULL, 5, 1, 'qwewr', 'qwerwr', 'qwerweq', 'wqrweq', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'qwewr', 'online', 'show', 'public/shop/baby/baby-toy-kids-gift-store/product/2HTux7dy96dkKAJHLIdtRrTZnrcQqbekbCGbEbBS.jpeg', '2019-03-09 04:07:01', '2019-03-09 04:07:01'),
(15, 'baby toy kids gift store', 'baby-toy-kids-gift-store', 4, 2, NULL, NULL, NULL, 6, 1, 'wqerwe', 'wqerweq', 'wqerwe', 'wqerweq', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 1, 0, 0, 'wqerwe', 'online', 'show', 'public/shop/baby/baby-toy-kids-gift-store/product/mVeYfRtQDQXp21iwNWW5jtuKaSK2waLB65VDD4vP.jpeg', '2019-03-09 04:07:18', '2019-03-14 07:04:04'),
(16, 'baby toy kids gift store', 'baby-toy-kids-gift-store', 4, 2, NULL, NULL, NULL, 7, 1, 'qeq', 'qeqe', 'eqeewe', 'ewewe', 123, 'piece', 1, '1231', NULL, NULL, '0', '5', 0, 0, 0, 'qeq', 'online', 'show', 'public/shop/baby/baby-toy-kids-gift-store/product/tcSF6rWvjCjXr331utksN6CC6hkQAkxY2YtJ5eQ9.jpeg', '2019-03-09 04:07:42', '2019-03-14 07:05:56'),
(21, 'bakery shop', 'bakery-shop', 6, 2, NULL, NULL, NULL, 1, 1, 'sadfsda', 'sadf', 'sdfsa', 'sdf', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sadfsda', 'online', 'show', 'public/shop/bakery/bakery-shop/product/GCPbMTnBWdV7BUsLortqkSQtUzHWL1KhEqmpB6Iz.jpeg', '2019-03-09 04:16:42', '2019-03-09 04:16:42'),
(22, 'bakery shop', 'bakery-shop', 6, 2, NULL, NULL, NULL, 2, 1, 'sadfsa', 'xcvxczv', 'CzxC', 'zXVCxz', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sadfsa', 'online', 'show', 'public/shop/bakery/bakery-shop/product/D02c1rAgKQMfznv37VttdNsoOZDjv7n5mxNeeVUo.jpeg', '2019-03-09 04:17:11', '2019-03-09 04:17:11'),
(23, 'bakery shop', 'bakery-shop', 6, 2, NULL, NULL, NULL, 3, 1, 'sadfds', 'asfdsaf', 'fsdasad', 'sdfsd', 1, 'piece', 1, '12345', NULL, NULL, '0', '5', 0, 0, 0, 'sadfds', 'online', 'show', 'public/shop/bakery/bakery-shop/product/2cgLZv2ztUtqyvjBfKzOZTUnlQ0pjZ9HVtnnrGXJ.jpeg', '2019-03-09 04:17:32', '2019-03-09 04:17:32'),
(24, 'bakery shop', 'bakery-shop', 6, 2, NULL, NULL, NULL, 4, 1, 'were', 'werwqer', 'wrewqer', 'wqerwq', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'were', 'online', 'show', 'public/shop/bakery/bakery-shop/product/KEHBsQTiXSHa9VnP6aKpholOIVApEP22X6oTC49U.jpeg', '2019-03-09 04:17:56', '2019-03-09 04:17:56'),
(25, 'bakery shop', 'bakery-shop', 6, 2, NULL, NULL, NULL, 5, 1, 'qqewqwq', 'qrewyhtuh', 'eqwerwq', 'aDSADAd', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'qqewqwq', 'online', 'show', 'public/shop/bakery/bakery-shop/product/Mn7LnYj5f95E7cvJzcse1co3PFPW5oJSCSkNPAS6.jpeg', '2019-03-09 04:18:24', '2019-03-15 04:36:39'),
(26, 'books shop', 'books-shop', 7, 2, NULL, NULL, NULL, 1, 1, 'gvdfg', 'sadfsda', 'sdfsda', 'sdfsda', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'gvdfg', 'online', 'show', 'public/shop/books/books-shop/product/2dc2HwiIwBZpifElwde9xfMMSYvk6u0hJbE7Hfc5.jpeg', '2019-03-09 04:24:13', '2019-03-12 21:33:06'),
(27, 'books shop', 'books-shop', 7, 2, NULL, NULL, NULL, 2, 1, 'qeqwq', 'qwe', 'qwerqw', 'qqewqw', 12123, 'piece', 1, NULL, NULL, NULL, '0', '5', 0, 0, 0, 'qeqwq', 'online', 'hide', 'public/shop/books/books-shop/product/80EewWGZ0ZARNxoSubzdEJiTzJ4I8BmLVLEjYCJt.jpeg', '2019-03-09 04:24:39', '2019-03-17 07:07:44'),
(28, 'books shop', 'books-shop', 7, 2, NULL, NULL, NULL, 3, 1, 'qwe', 'qweqwe', 'qwe', 'qweqwe', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'qwe', 'online', 'show', 'public/shop/books/books-shop/product/N5rRjPsPQOEVG2sutnH8p1i3Q3M1CnwMKhYjAxxO.jpeg', '2019-03-09 04:24:56', '2019-03-09 04:24:56'),
(29, 'books shop', 'books-shop', 7, 2, NULL, NULL, NULL, 4, 1, 'qweqw', 'qweqw', 'qweqw', 'qweqw', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 2, 0, 0, 'qweqw', 'online', 'show', 'public/shop/books/books-shop/product/9esnEe5DudDE2UQr2WWiwp9v61yX5c7KBaVV2oCF.jpeg', '2019-03-09 04:25:14', '2019-04-11 00:42:17'),
(30, 'books shop', 'books-shop', 7, 2, NULL, NULL, NULL, 5, 1, 'qe', 'qweqw', 'qweq', 'qweqw', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'qe', 'online', 'show', 'public/shop/books/books-shop/product/pEBgRd0st49lYx16bAIlvGvXy9oAnZkJv5nIFPjW.jpeg', '2019-03-09 04:25:34', '2019-03-09 04:25:34'),
(31, 'books shop', 'books-shop', 7, 2, NULL, NULL, NULL, 6, 1, 'qwerqw', 'qwere', 'qrrw', 'rqwrewq', 1, 'piece', 1, '123', NULL, NULL, '0', '5', 0, 0, 0, 'qwerqw', 'online', 'hide', 'public/shop/books/books-shop/product/YWnFQ1tLR4mnLUtCq2pAAbLIQXPGzj9uRomNgQJT.png', '2019-03-09 04:25:51', '2019-03-17 07:00:10'),
(32, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 1, 1, 'sdafsadf', 'sdafsda', 'sdfsdaf', 'sadfsdaf', 1, 'piece', 1, '12134', NULL, NULL, '0', '5', 0, 0, 0, 'sdafsadf', 'online', 'show', 'public/shop/Electrical/electrical-store/product/SlJ6DqzjA2r7nk3xBgxKwjE1s9Jy9sPCbX127CSw.jpeg', '2019-03-09 04:31:19', '2019-03-09 04:31:19'),
(33, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 2, 1, 'werwqer', 'weqrewq', 'weqrweqr', 'werwe', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'werwqer', 'online', 'show', 'public/shop/Electrical/electrical-store/product/kZFSmATJc9x0ebmN3RR9gJRUdUNpOLkO1v1d67TF.jpeg', '2019-03-09 04:31:37', '2019-03-09 04:31:37'),
(34, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 3, 1, 'sadsa', 'asdas', 'sadsa', 'asdas', 1, 'piece', 1, '1231', NULL, NULL, '0', '5', 0, 0, 0, 'sadsa', 'online', 'hide', 'public/shop/Electrical/electrical-store/product/36bOF0d0MIcfUocLvaITRt1zVjAYNsMIJP0Xz3Ip.jpeg', '2019-03-09 04:31:53', '2019-04-05 09:21:18'),
(35, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 4, 1, 'sdfgdsg', 'dfsgdfg', 'sdgfsd', 'sadgfsad', 1, 'piece', 1, '1233', NULL, NULL, '0', '5', 0, 0, 0, 'sdfgdsg', 'online', 'show', 'public/shop/Electrical/electrical-store/product/NMkY1kjlI67WLbNfQCojYrrkGd7otQeNgDihoL9G.jpeg', '2019-03-09 04:32:17', '2019-03-09 04:32:17'),
(36, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 5, 1, 'weqrwe', 'wqerweq', 'werweq', 'werweq', 1, 'piece', 1, 'rfdrqwre', NULL, NULL, '0', '5', 0, 0, 0, 'weqrwe', 'online', 'show', 'public/shop/Electrical/electrical-store/product/l48fK9hUjvrDptPSa6BViyiVMSqum4yoIfulAbEE.jpeg', '2019-03-09 04:32:48', '2019-03-09 04:32:48'),
(37, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 6, 1, 'werrwe', 'ertre', 'werweq', 'weqrwqe', 1, 'piece', 1, '123', NULL, NULL, '0', '5', 0, 0, 0, 'werrwe', 'online', 'show', 'public/shop/Electrical/electrical-store/product/MKh1r4FK5sLDhFwxs35viOXr3LqHsaj471qo3nnj.jpeg', '2019-03-09 04:33:10', '2019-03-09 04:33:10'),
(38, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 7, 1, 'erwtr', 'ert', 'erttewr', 'erwtewt', 1, 'piece', 1, 'ewrtewr', NULL, NULL, '0', '5', 0, 0, 0, 'erwtr', 'online', 'show', 'public/shop/Electrical/electrical-store/product/k8VjTzOTrpMLjxnqpoifoXznpMNU9pmvVqLb5yff.jpeg', '2019-03-09 04:33:37', '2019-03-09 04:33:37'),
(39, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 8, 1, 'ewrt', 'ewrte', 'erter', 'erter', 1, 'piece', 1, 'erte', NULL, NULL, '0', '5', 0, 0, 0, 'ewrt', 'online', 'show', 'public/shop/Electrical/electrical-store/product/pfhvQndf6gmAILEMcgDgS6IcBCiRnC0Zw1AJJYx5.jpeg', '2019-03-09 04:33:51', '2019-03-09 04:33:51'),
(40, 'electrical store', 'electrical-store', 9, 2, NULL, NULL, NULL, 9, 1, 'erwtewrt', 'ewrter', 'erterw', 'ertewr', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'erwtewrt', 'online', 'show', 'public/shop/Electrical/electrical-store/product/0udtMSQ4nnztdR1eCRx7aYboxytq94trxpYcrFRw.jpeg', '2019-03-09 04:34:08', '2019-03-09 04:34:08'),
(41, 'electronice store', 'electronice-store', 10, 2, NULL, NULL, NULL, 1, 1, 'xcvgxcz', 'sdgdsf', 'sdafg', 'sdfgsd', 1, 'piece', 1, '1233', NULL, NULL, '0', '5', 0, 0, 0, 'xcvgxcz', 'online', 'show', 'public/shop/Electronice/electronice-store/product/5ZAzaD3eORrcznAzN0CtW5w1Y6ZZtoBjxCQpUd0V.jpeg', '2019-03-09 04:40:10', '2019-03-09 04:40:10'),
(42, 'electronice store', 'electronice-store', 10, 2, NULL, NULL, NULL, 2, 1, 'sadf', 'sdfsd', 'sdfsd', 'sdfds', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sadf', 'online', 'show', 'public/shop/Electronice/electronice-store/product/Pa96d7a9PqVmKwkywplQoZ9VpNkj0pwIjo7edom4.jpeg', '2019-03-09 04:40:25', '2019-03-09 04:40:25'),
(43, 'electronice store', 'electronice-store', 10, 2, NULL, NULL, NULL, 3, 1, 'ewrtfe', 'ewqrt', 'retttewq v', 'weqrtwqe', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'ewrtfe', 'online', 'show', 'public/shop/Electronice/electronice-store/product/szkc9FBIEUe1x3SMuXDOGfcfLHKamHlVTkt20hb3.jpeg', '2019-03-09 04:40:43', '2019-03-09 04:40:43'),
(44, 'electronice store', 'electronice-store', 10, 2, NULL, NULL, NULL, 4, 1, 'hnfgvb', 'sdfgdsa', 'sdagdfg', 'dsfagdfsg', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 1, 0, 0, 'hnfgvb', 'online', 'show', 'public/shop/Electronice/electronice-store/product/1BZx5F7VRBAIcJZSt0cdZ8DWPaqmmc5UwTcmlLmt.jpeg', '2019-03-09 04:41:30', '2019-03-27 23:10:11'),
(45, 'fish store', 'fish-store', 11, 2, NULL, NULL, NULL, 1, 1, 'gjnmgh', 'dsfgdsf', 'dfsgdf', 'dfsgdfg', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'gjnmgh', 'online', 'show', 'public/shop/fish/fish-store/product/idxInB3s5yYqZi2M0o0spyZRpIoPhFoSsixm5D0Q.jpeg', '2019-03-09 04:44:48', '2019-03-09 04:44:48'),
(46, 'fish store', 'fish-store', 11, 2, NULL, NULL, NULL, 2, 1, 'aSFCdf', 'sdfsa', 'sadfsda', 'sdfsd', 1, 'piece', 1, 'sadf', NULL, NULL, '0', '5', 0, 0, 0, 'aSFCdf', 'online', 'show', 'public/shop/fish/fish-store/product/KnUtyiA8TslAPWCGayWNpmeC1Bvq9qme1HaJudI1.jpeg', '2019-03-09 04:45:00', '2019-03-09 04:45:00'),
(47, 'fish store', 'fish-store', 11, 2, NULL, NULL, NULL, 3, 1, 'edit', 'sadgsad', 'sdagsda', 'sdagsad', 1, 'piece', 1, '121', NULL, NULL, '0', '5', 0, 0, 0, 'sdafgds', 'online', 'show', 'public/shop/fish/fish-store/product/ESRmHhtIBuSkYIat9EH4M5uq0hWiJVGIXm8fqrAD.jpeg', '2019-03-09 04:45:14', '2019-03-14 00:48:46'),
(48, 'fish store', 'fish-store', 11, 2, NULL, NULL, NULL, 4, 1, 'new', 'sadgsad', 'sadgasd', 'sadgsdag', 1, 'kilogram', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sadfsaf', 'online', 'show', 'public/shop/fish/fish-store/product/g1ejMRYzWU1YNOXFpNtbYwHJ8B9deVNIZcsbF5HV.jpeg', '2019-03-09 04:45:30', '2019-03-14 00:55:44'),
(49, 'fish store', 'fish-store', 11, 2, NULL, NULL, NULL, 5, 1, 'sdaf', 'sdaf', 'sdfsdf', 'sdafsd', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sdaf', 'online', 'show', 'public/shop/fish/fish-store/product/3hfKRNuVHq0zi1sdJfBN3gldGkr5KYul3oKIqIzH.jpeg', '2019-03-09 04:45:50', '2019-03-09 04:45:50'),
(50, 'fruits store', 'fruits-store', 12, 2, NULL, NULL, NULL, 1, 1, 'sdaf', 'sdafsda', 'sdfsd', 'sdfsd', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sdaf', 'online', 'show', 'public/shop/fruits/fruits-store/product/N0VVL7Fi7GvYp3W2CVDG7qLPWlFglHxYn4RR6L0F.jpeg', '2019-03-09 04:49:47', '2019-03-09 04:49:47'),
(51, 'fruits store', 'fruits-store', 12, 2, NULL, NULL, NULL, 2, 1, 'zxcv', 'xcv', 'xcv', 'xcv', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'zxcv', 'online', 'show', 'public/shop/fruits/fruits-store/product/jDgDPE0Nnj7zwwe8LH5nNBUHE4eS0njRAtJI6lro.jpeg', '2019-03-09 04:50:01', '2019-03-09 04:50:01'),
(52, 'fruits store', 'fruits-store', 12, 2, NULL, NULL, NULL, 3, 1, 'wefrwe', 'werweq', 'weqrw', 'weqr', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'wefrwe', 'online', 'show', 'public/shop/fruits/fruits-store/product/f7dnob6Snsvwcyb26jOHDkAy1fV8T6HkI2B9K50b.jpeg', '2019-03-09 04:50:15', '2019-03-09 04:50:15'),
(53, 'fruits store', 'fruits-store', 12, 2, NULL, NULL, NULL, 4, 1, 'sdfs', 'sdfs', 'sdf', 'sdf', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sdfs', 'online', 'hide', 'public/shop/fruits/fruits-store/product/v8EGRupcGqLDYXpLUxKbhb9vsGaJoTIFJoiXvt4M.jpeg', '2019-03-09 04:50:28', '2019-03-14 08:03:10'),
(54, 'fruits store', 'fruits-store', 12, 2, NULL, NULL, NULL, 5, 1, 'wqerwq', 'werqwqe', 'weqrq', 'wqerq', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'wqerwq', 'online', 'hide', 'public/shop/fruits/fruits-store/product/TxPzAXHIqDb5vPv7YUbbebsfyiBylSZHmeTSCxRd.png', '2019-03-09 04:50:45', '2019-03-14 08:03:03'),
(55, 'furniture shopifies store', 'furniture-shopifies-store', 13, 2, NULL, NULL, NULL, 1, 1, 'sdafg', 'sdg', 'sdfg', 'sadfgs', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sdafg', 'online', 'show', 'public/shop/furniture/furniture-shopifies-store/product/YpM5NeZEeZnpDOb5oJI7tZPDf0sgubvNKD92jfKQ.jpeg', '2019-03-09 04:53:47', '2019-03-09 04:53:47'),
(56, 'furniture shopifies store', 'furniture-shopifies-store', 13, 2, NULL, NULL, NULL, 2, 1, 'dvbgdf', 'dgdf', 'dfgd', 'dfgdf', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'dvbgdf', 'online', 'show', 'public/shop/furniture/furniture-shopifies-store/product/EZiChhZsdauNXXuwQTwJaCupNV0Ti4hXapK2xbmz.jpeg', '2019-03-09 04:54:16', '2019-03-09 04:54:16'),
(57, 'furniture shopifies store', 'furniture-shopifies-store', 13, 2, NULL, NULL, NULL, 3, 1, 'erteer', 'ertert', 'ertewr', 'erwt', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'erteer', 'online', 'show', 'public/shop/furniture/furniture-shopifies-store/product/kg1X81j8BXZy25YYdH1Zr0lP1gZQaHStS3MKCAgz.jpeg', '2019-03-09 04:54:37', '2019-03-09 04:54:37'),
(58, 'furniture shopifies store', 'furniture-shopifies-store', 13, 2, NULL, NULL, NULL, 4, 1, 'sdfsd', 'sdfs', 'sdf', 'sdf', 1, 'piece', 1, 'sdfds', NULL, NULL, '0', '5', 0, 0, 0, 'sdfsd', 'online', 'show', 'public/shop/furniture/furniture-shopifies-store/product/r7lSsdbbrFYGVSKkaiN5lFT0zyujx0LFs3m28JEw.jpeg', '2019-03-09 04:54:54', '2019-03-09 04:54:54'),
(59, 'furniture shopifies store', 'furniture-shopifies-store', 13, 2, NULL, NULL, NULL, 5, 1, '123', 'dsfgdfg', 'dfg', 'dfg', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'vgdfgdfg', 'online', 'show', 'public/shop/furniture/furniture-shopifies-store/product/u0t6z7xE1sdfNOay6pC24Sg0Ad0vS58FWlk8q6RW.jpeg', '2019-03-09 04:55:25', '2019-03-14 01:05:18'),
(60, 'butcher shop', 'butcher-shop', 22, 2, NULL, NULL, NULL, 1, 1, 'frfhgvbg', 'fgcfghg', 'gfcfgcvg', 'gcvfggh', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'frfhgvbg', 'online', 'show', 'public/shop/butcher/butcher-shop/product/aqpJwA342LEUlyd2UfUydmZQb77QbfgSG0EVA5Fu.jpeg', '2019-03-09 05:14:19', '2019-03-09 05:14:19'),
(61, 'butcher shop', 'butcher-shop', 22, 2, NULL, NULL, NULL, 2, 1, 'bvhgb h', 'bv b', 'bn vb', 'bnv hbj', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'bvhgb-h', 'online', 'show', 'public/shop/butcher/butcher-shop/product/qCkIydycfxDqhb6jme3stxt0OcYFdBEQeecqf9mO.jpeg', '2019-03-09 05:14:55', '2019-03-09 05:14:55'),
(62, 'butcher shop', 'butcher-shop', 22, 2, NULL, NULL, NULL, 3, 1, 'vb b bn', 'vc bb', 'nbvfgh', 'nbv bgv', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'vb-b-bn', 'online', 'show', 'public/shop/butcher/butcher-shop/product/gVbTac4TaFOdRwxtI51IC4pjvEtBAwZlz3gwQ4tO.jpeg', '2019-03-09 05:15:19', '2019-03-09 05:15:19'),
(63, 'butcher shop', 'butcher-shop', 22, 2, NULL, NULL, NULL, 4, 1, 'bn nh', 'bvcvgh', 'hgfvgh', 'njbjhnj', 1, 'piece', 1, '1231', NULL, NULL, '0', '5', 0, 0, 0, 'bn-nh-', 'online', 'hide', 'public/shop/butcher/butcher-shop/product/FP3NelMBIbEqxaLoDlP62ICRi5RyP5kZiRBI1wSG.jpeg', '2019-03-09 05:15:43', '2019-03-14 08:14:53'),
(64, 'hotel', 'hotel', 15, 2, NULL, NULL, NULL, 2, 1, 'sdfs', 'sd', NULL, NULL, 1, NULL, 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sdfs', 'online', 'show', 'public/shop/hotel/hotel/product/hk19wKfzsNdv3l2dCri5XrSBmPgr6QvVuKipDMsJ.jpeg', '2019-03-09 05:18:19', '2019-03-09 05:18:19'),
(65, 'hotel', 'hotel', 15, 2, NULL, NULL, NULL, 3, 1, 'sadf', 'sdfsdfs', NULL, NULL, 1, NULL, 1, 'sdffds', NULL, NULL, '0', '5', 0, 0, 0, 'sadf', 'online', 'show', 'public/shop/hotel/hotel/product/dusPpO613TdUpfEjyXpWP3saasVuMZ5tA0luvIIZ.jpeg', '2019-03-09 05:20:07', '2019-03-22 10:22:17'),
(66, 'hotel', 'hotel', 15, 2, NULL, NULL, NULL, 4, 1, 'sdaf', 'sdaf', NULL, NULL, 1, NULL, 1, 'sdaf', NULL, NULL, '0', '5', 0, 0, 0, 'sdaf', 'online', 'show', 'public/shop/hotel/hotel/product/OCBvSnOJEKZD2iTxBnWrwJ2IjnSnbVXBsQwFr8iH.jpeg', '2019-03-09 05:20:30', '2019-03-22 10:22:19'),
(67, 'hotel', 'hotel', 15, 2, NULL, NULL, NULL, 5, 1, 'room:123', 'sdf', NULL, NULL, 1, 'piece', 1, '5000', NULL, NULL, '0', '5', 0, 0, 0, 'sdfs', 'online', 'show', 'public/shop/hotel/hotel/product/hHhKE1Bkc1ajeMoh9NbOcUELOg3b3pZ69TbbKA0I.jpeg', '2019-03-09 05:20:49', '2019-03-22 10:22:21'),
(68, 'vegetables store', 'vegetables-store', 21, 2, NULL, NULL, NULL, 1, 1, 'fgev  b', NULL, NULL, NULL, 1, 'piece', 1, 'ereer e', NULL, NULL, '0', '5', 0, 0, 0, 'fgev--b', 'online', 'show', 'public/shop/vegetables/vegetables-store/product/lQZ5nDqVygJocjfOmNE3yfl5WyV1KAHHW4SwyHGI.jpeg', '2019-03-09 05:25:00', '2019-03-09 05:25:00'),
(69, 'vegetables store', 'vegetables-store', 21, 2, NULL, NULL, NULL, 2, 1, 'erfgv c', NULL, NULL, NULL, 1, 'piece', 1, 'werfc', NULL, NULL, '0', '5', 0, 0, 0, 'erfgv-c-', 'online', 'show', 'public/shop/vegetables/vegetables-store/product/GUeQId7TPci9saj7pxyf2XWEQ02lh1RX7ryxei7w.jpeg', '2019-03-09 05:25:12', '2019-03-09 05:25:12'),
(70, 'vegetables store', 'vegetables-store', 21, 2, NULL, NULL, NULL, 3, 1, 'ADSq', NULL, NULL, NULL, 1, 'piece', 1, '123', NULL, NULL, '0', '5', 0, 0, 0, 'ADSq', 'online', 'show', 'public/shop/vegetables/vegetables-store/product/aIL7h3paOSX0IliGIr7Ka1Qdg1vCsIJEgcCLJDZB.jpeg', '2019-03-09 05:25:26', '2019-03-09 05:25:26'),
(71, 'vegetables store', 'vegetables-store', 21, 2, NULL, NULL, NULL, 4, 1, 'asdfsa', NULL, NULL, NULL, 1, 'piece', 1, '123', NULL, NULL, '0', '5', 0, 0, 0, 'asdfsa', 'online', 'show', 'public/shop/vegetables/vegetables-store/product/itHssDWzCplLPSPUdMAI8869obFZ7vT9RkTHA6CI.png', '2019-03-09 05:25:41', '2019-03-09 05:25:41'),
(72, 'restaurent', 'restaurent', 17, 2, NULL, NULL, NULL, 1, 1, 'sdfsd', 'sfdfs', 'sdaf', 'sdf', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sdfsd', 'online', 'show', 'public/shop/restaurent/restaurent/product/p40qoh1t584UiEIOn99T5mmnbYrWDj0Og0d6pxa8.jpeg', '2019-03-09 05:29:31', '2019-03-09 05:29:31'),
(73, 'medicine pharmacy store', 'medicine-pharmacy-store', 16, 2, NULL, NULL, NULL, 1, 1, 'werwe', 'werew', 'wqerwe', 'weqr', 1, 'piece', 1, 'weqr', NULL, NULL, '0', '5', 0, 0, 0, 'werwe', 'online', 'show', 'public/shop/medicine/medicine-pharmacy-store/product/DWJiD5tCKJxzJSqatLuEppAx044NlyzaQabjUOpY.jpeg', '2019-03-09 05:33:22', '2019-03-09 05:33:22'),
(74, 'medicine pharmacy store', 'medicine-pharmacy-store', 16, 2, NULL, NULL, NULL, 2, 1, 'sdfcsda', 'sdfsda', 'sadfsd', 'sdafsd', 1, 'piece', 1, '1234', NULL, NULL, '0', '5', 0, 0, 0, 'sdfcsda', 'online', 'show', 'public/shop/medicine/medicine-pharmacy-store/product/7AmTWLhmaFZ5RMBvkXQLorqinRUrT4Hgk9dyJoVB.jpeg', '2019-03-09 05:34:02', '2019-03-09 05:34:02'),
(75, 'medicine pharmacy store', 'medicine-pharmacy-store', 16, 2, NULL, NULL, NULL, 3, 1, 'zXC', '213', 'zxc', 'zxc', 1, 'piece', 1, '1232', NULL, NULL, '0', '5', 0, 0, 0, 'zXC', 'online', 'show', 'public/shop/medicine/medicine-pharmacy-store/product/xdEK83iLShBCOEFcgIug46vTEzO1x61mHgp4k0Jz.jpeg', '2019-03-09 05:34:49', '2019-03-09 05:34:49'),
(76, 'sport hunting fitness store', 'sport-hunting-fitness-store', 19, 2, NULL, NULL, NULL, 1, 1, 'dfgdsf', 'gsdfg', 'dfg', 'dfg', 1, 'piece', 1, '123', NULL, NULL, '0', '5', 0, 0, 0, 'dfgdsf', 'online', 'show', 'public/shop/sport/sport-hunting-fitness-store/product/bgZ36H44Qdp7xg4YF310Ks2omYc6znigJDxqcK0B.jpeg', '2019-03-09 05:38:41', '2019-03-09 05:38:41'),
(77, 'books shop', 'books-shop', 7, 2, NULL, NULL, NULL, 7, 1, 'sdfsdfsdf', 'sdafsd', 'hasan', 'hasan book dupo', 1, 'piece', 1, '123', NULL, NULL, '0', '5', 0, 0, 0, 'sdfsdfsdf', 'online', 'show', 'public/shop/books/books-shop/product/efIT6LnxRGIBtccMw4B6sIMcCu86BqoQZVXt2CzY.png', '2019-03-14 00:15:31', '2019-03-17 07:00:44'),
(81, 'clothes store', 'clothes-store', 2, 2, NULL, NULL, NULL, 22, 1, 'tshart', 'Man', 'tshart', 'smart', 1000, 'piece', 1, '121', NULL, NULL, '0', '5', 1, 0, 0, 'tshart', 'online', 'show', 'public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', '2019-03-17 01:15:43', '2019-03-28 01:18:05');

-- --------------------------------------------------------

--
-- Table structure for table `private_product_clothes_images`
--

CREATE TABLE `private_product_clothes_images` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `m` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `x` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `xl` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `2xl` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `3xl` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_product_clothes_sizes`
--

CREATE TABLE `private_product_clothes_sizes` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_product_comments`
--

CREATE TABLE `private_product_comments` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_product_hotel_bookings`
--

CREATE TABLE `private_product_hotel_bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `customer_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enter_at` datetime DEFAULT NULL,
  `exit_at` datetime DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_product_images`
--

CREATE TABLE `private_product_images` (
  `p_image_counter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_product_images`
--

INSERT INTO `private_product_images` (`p_image_counter`, `user_id`, `shop_id`, `sp_counter_number`, `image`, `size`, `created_at`, `updated_at`) VALUES
(NULL, 2, 2, 6, 'public/shop/clothes/clothes-store/product/zdkWyOf9aER0h2QWdd4FNTO45VawWYtMQSRL24NN.jpeg', '109798', '2019-02-28 10:49:13', '2019-02-28 10:49:13'),
(NULL, 2, 2, 6, 'public/shop/clothes/clothes-store/product/bUqWyOPrxCGIUwjibbEGNynjft8ot5U54dkoAEnm.jpeg', '97722', '2019-03-01 00:31:17', '2019-03-01 00:31:17'),
(NULL, 2, 2, 6, 'public/shop/clothes/clothes-store/product/VgvVHbmDMqbryFTUrNRJWhkcwUm3PLbEY2djwhjt.jpeg', '142184', '2019-03-01 00:31:17', '2019-03-01 00:31:17'),
(NULL, 2, 4, 1, 'public/shop/baby/baby-toy-kids-gift-store/product/M2N4yv0qNliBsIccpwK9RMKCW9UE9XehMAiqr168.jpeg', '6858', '2019-03-08 22:33:00', '2019-03-08 22:33:00'),
(NULL, 2, 4, 2, 'public/shop/baby/baby-toy-kids-gift-store/product/LC03f3JuyJsUnR4f8Mycx6wpRIzioy0Kvl9mZ7k2.jpeg', NULL, '2019-03-09 04:06:02', '2019-03-09 04:06:02'),
(NULL, 2, 4, 3, 'public/shop/baby/baby-toy-kids-gift-store/product/UJSX3Ag4AleoDXNn2vTT4pZZ1cZLcnL5yEi7iVNl.jpeg', NULL, '2019-03-09 04:06:20', '2019-03-09 04:06:20'),
(NULL, 2, 4, 4, 'public/shop/baby/baby-toy-kids-gift-store/product/PoRbtRfGhzRFTiBWuWUUXdBzGdRVgwYXUkcTmi1e.jpeg', NULL, '2019-03-09 04:06:41', '2019-03-09 04:06:41'),
(NULL, 2, 4, 5, 'public/shop/baby/baby-toy-kids-gift-store/product/2HTux7dy96dkKAJHLIdtRrTZnrcQqbekbCGbEbBS.jpeg', NULL, '2019-03-09 04:07:02', '2019-03-09 04:07:02'),
(NULL, 2, 4, 6, 'public/shop/baby/baby-toy-kids-gift-store/product/mVeYfRtQDQXp21iwNWW5jtuKaSK2waLB65VDD4vP.jpeg', NULL, '2019-03-09 04:07:18', '2019-03-09 04:07:18'),
(NULL, 2, 6, 1, 'public/shop/bakery/bakery-shop/product/GCPbMTnBWdV7BUsLortqkSQtUzHWL1KhEqmpB6Iz.jpeg', NULL, '2019-03-09 04:16:42', '2019-03-09 04:16:42'),
(NULL, 2, 6, 2, 'public/shop/bakery/bakery-shop/product/D02c1rAgKQMfznv37VttdNsoOZDjv7n5mxNeeVUo.jpeg', NULL, '2019-03-09 04:17:11', '2019-03-09 04:17:11'),
(NULL, 2, 6, 3, 'public/shop/bakery/bakery-shop/product/2cgLZv2ztUtqyvjBfKzOZTUnlQ0pjZ9HVtnnrGXJ.jpeg', NULL, '2019-03-09 04:17:32', '2019-03-09 04:17:32'),
(NULL, 2, 6, 4, 'public/shop/bakery/bakery-shop/product/KEHBsQTiXSHa9VnP6aKpholOIVApEP22X6oTC49U.jpeg', NULL, '2019-03-09 04:17:56', '2019-03-09 04:17:56'),
(NULL, 2, 6, 5, 'public/shop/bakery/bakery-shop/product/Mn7LnYj5f95E7cvJzcse1co3PFPW5oJSCSkNPAS6.jpeg', NULL, '2019-03-09 04:18:24', '2019-03-09 04:18:24'),
(NULL, 2, 7, 1, 'public/shop/books/books-shop/product/2dc2HwiIwBZpifElwde9xfMMSYvk6u0hJbE7Hfc5.jpeg', NULL, '2019-03-09 04:24:13', '2019-03-09 04:24:13'),
(NULL, 2, 7, 2, 'public/shop/books/books-shop/product/80EewWGZ0ZARNxoSubzdEJiTzJ4I8BmLVLEjYCJt.jpeg', NULL, '2019-03-09 04:24:39', '2019-03-09 04:24:39'),
(NULL, 2, 7, 3, 'public/shop/books/books-shop/product/N5rRjPsPQOEVG2sutnH8p1i3Q3M1CnwMKhYjAxxO.jpeg', NULL, '2019-03-09 04:24:56', '2019-03-09 04:24:56'),
(NULL, 2, 7, 4, 'public/shop/books/books-shop/product/FKj35WuQ7DwvnFIzWGAD8BogmZ6qVcXu1G8uQphn.jpeg', NULL, '2019-03-09 04:25:14', '2019-03-09 04:25:14'),
(NULL, 2, 7, 5, 'public/shop/books/books-shop/product/pEBgRd0st49lYx16bAIlvGvXy9oAnZkJv5nIFPjW.jpeg', NULL, '2019-03-09 04:25:34', '2019-03-09 04:25:34'),
(NULL, 2, 7, 6, 'public/shop/books/books-shop/product/YWnFQ1tLR4mnLUtCq2pAAbLIQXPGzj9uRomNgQJT.png', NULL, '2019-03-09 04:25:51', '2019-03-09 04:25:51'),
(NULL, 2, 9, 1, 'public/shop/Electrical/electrical-store/product/SlJ6DqzjA2r7nk3xBgxKwjE1s9Jy9sPCbX127CSw.jpeg', NULL, '2019-03-09 04:31:19', '2019-03-09 04:31:19'),
(NULL, 2, 9, 2, 'public/shop/Electrical/electrical-store/product/kZFSmATJc9x0ebmN3RR9gJRUdUNpOLkO1v1d67TF.jpeg', NULL, '2019-03-09 04:31:37', '2019-03-09 04:31:37'),
(NULL, 2, 9, 3, 'public/shop/Electrical/electrical-store/product/36bOF0d0MIcfUocLvaITRt1zVjAYNsMIJP0Xz3Ip.jpeg', NULL, '2019-03-09 04:31:53', '2019-03-09 04:31:53'),
(NULL, 2, 9, 4, 'public/shop/Electrical/electrical-store/product/NMkY1kjlI67WLbNfQCojYrrkGd7otQeNgDihoL9G.jpeg', NULL, '2019-03-09 04:32:17', '2019-03-09 04:32:17'),
(NULL, 2, 9, 5, 'public/shop/Electrical/electrical-store/product/l48fK9hUjvrDptPSa6BViyiVMSqum4yoIfulAbEE.jpeg', NULL, '2019-03-09 04:32:48', '2019-03-09 04:32:48'),
(NULL, 2, 9, 6, 'public/shop/Electrical/electrical-store/product/MKh1r4FK5sLDhFwxs35viOXr3LqHsaj471qo3nnj.jpeg', NULL, '2019-03-09 04:33:10', '2019-03-09 04:33:10'),
(NULL, 2, 9, 7, 'public/shop/Electrical/electrical-store/product/k8VjTzOTrpMLjxnqpoifoXznpMNU9pmvVqLb5yff.jpeg', NULL, '2019-03-09 04:33:37', '2019-03-09 04:33:37'),
(NULL, 2, 9, 8, 'public/shop/Electrical/electrical-store/product/pfhvQndf6gmAILEMcgDgS6IcBCiRnC0Zw1AJJYx5.jpeg', NULL, '2019-03-09 04:33:51', '2019-03-09 04:33:51'),
(NULL, 2, 9, 9, 'public/shop/Electrical/electrical-store/product/0udtMSQ4nnztdR1eCRx7aYboxytq94trxpYcrFRw.jpeg', NULL, '2019-03-09 04:34:09', '2019-03-09 04:34:09'),
(NULL, 2, 10, 1, 'public/shop/Electronice/electronice-store/product/5ZAzaD3eORrcznAzN0CtW5w1Y6ZZtoBjxCQpUd0V.jpeg', NULL, '2019-03-09 04:40:11', '2019-03-09 04:40:11'),
(NULL, 2, 10, 2, 'public/shop/Electronice/electronice-store/product/Pa96d7a9PqVmKwkywplQoZ9VpNkj0pwIjo7edom4.jpeg', NULL, '2019-03-09 04:40:25', '2019-03-09 04:40:25'),
(NULL, 2, 10, 3, 'public/shop/Electronice/electronice-store/product/szkc9FBIEUe1x3SMuXDOGfcfLHKamHlVTkt20hb3.jpeg', NULL, '2019-03-09 04:40:43', '2019-03-09 04:40:43'),
(NULL, 2, 10, 4, 'public/shop/Electronice/electronice-store/product/1BZx5F7VRBAIcJZSt0cdZ8DWPaqmmc5UwTcmlLmt.jpeg', NULL, '2019-03-09 04:41:30', '2019-03-09 04:41:30'),
(NULL, 2, 11, 1, 'public/shop/fish/fish-store/product/idxInB3s5yYqZi2M0o0spyZRpIoPhFoSsixm5D0Q.jpeg', NULL, '2019-03-09 04:44:48', '2019-03-09 04:44:48'),
(NULL, 2, 11, 2, 'public/shop/fish/fish-store/product/KnUtyiA8TslAPWCGayWNpmeC1Bvq9qme1HaJudI1.jpeg', NULL, '2019-03-09 04:45:00', '2019-03-09 04:45:00'),
(NULL, 2, 11, 3, 'public/shop/fish/fish-store/product/ESRmHhtIBuSkYIat9EH4M5uq0hWiJVGIXm8fqrAD.jpeg', NULL, '2019-03-09 04:45:14', '2019-03-09 04:45:14'),
(NULL, 2, 11, 4, 'public/shop/fish/fish-store/product/g1ejMRYzWU1YNOXFpNtbYwHJ8B9deVNIZcsbF5HV.jpeg', NULL, '2019-03-09 04:45:31', '2019-03-09 04:45:31'),
(NULL, 2, 11, 5, 'public/shop/fish/fish-store/product/3hfKRNuVHq0zi1sdJfBN3gldGkr5KYul3oKIqIzH.jpeg', NULL, '2019-03-09 04:45:50', '2019-03-09 04:45:50'),
(NULL, 2, 12, 1, 'public/shop/fruits/fruits-store/product/N0VVL7Fi7GvYp3W2CVDG7qLPWlFglHxYn4RR6L0F.jpeg', NULL, '2019-03-09 04:49:47', '2019-03-09 04:49:47'),
(NULL, 2, 12, 2, 'public/shop/fruits/fruits-store/product/jDgDPE0Nnj7zwwe8LH5nNBUHE4eS0njRAtJI6lro.jpeg', NULL, '2019-03-09 04:50:01', '2019-03-09 04:50:01'),
(NULL, 2, 12, 3, 'public/shop/fruits/fruits-store/product/f7dnob6Snsvwcyb26jOHDkAy1fV8T6HkI2B9K50b.jpeg', NULL, '2019-03-09 04:50:15', '2019-03-09 04:50:15'),
(NULL, 2, 12, 4, 'public/shop/fruits/fruits-store/product/v8EGRupcGqLDYXpLUxKbhb9vsGaJoTIFJoiXvt4M.jpeg', NULL, '2019-03-09 04:50:28', '2019-03-09 04:50:28'),
(NULL, 2, 12, 5, 'public/shop/fruits/fruits-store/product/TxPzAXHIqDb5vPv7YUbbebsfyiBylSZHmeTSCxRd.png', NULL, '2019-03-09 04:50:45', '2019-03-09 04:50:45'),
(NULL, 2, 13, 1, 'public/shop/furniture/furniture-shopifies-store/product/YpM5NeZEeZnpDOb5oJI7tZPDf0sgubvNKD92jfKQ.jpeg', NULL, '2019-03-09 04:53:47', '2019-03-09 04:53:47'),
(NULL, 2, 13, 2, 'public/shop/furniture/furniture-shopifies-store/product/EZiChhZsdauNXXuwQTwJaCupNV0Ti4hXapK2xbmz.jpeg', NULL, '2019-03-09 04:54:16', '2019-03-09 04:54:16'),
(NULL, 2, 13, 3, 'public/shop/furniture/furniture-shopifies-store/product/kg1X81j8BXZy25YYdH1Zr0lP1gZQaHStS3MKCAgz.jpeg', NULL, '2019-03-09 04:54:37', '2019-03-09 04:54:37'),
(NULL, 2, 13, 4, 'public/shop/furniture/furniture-shopifies-store/product/r7lSsdbbrFYGVSKkaiN5lFT0zyujx0LFs3m28JEw.jpeg', NULL, '2019-03-09 04:54:54', '2019-03-09 04:54:54'),
(NULL, 2, 13, 5, 'public/shop/furniture/furniture-shopifies-store/product/u0t6z7xE1sdfNOay6pC24Sg0Ad0vS58FWlk8q6RW.jpeg', NULL, '2019-03-09 04:55:25', '2019-03-09 04:55:25'),
(NULL, 2, 22, 1, 'public/shop/butcher/butcher-shop/product/aqpJwA342LEUlyd2UfUydmZQb77QbfgSG0EVA5Fu.jpeg', NULL, '2019-03-09 05:14:19', '2019-03-09 05:14:19'),
(NULL, 2, 22, 2, 'public/shop/butcher/butcher-shop/product/qCkIydycfxDqhb6jme3stxt0OcYFdBEQeecqf9mO.jpeg', NULL, '2019-03-09 05:14:55', '2019-03-09 05:14:55'),
(NULL, 2, 22, 3, 'public/shop/butcher/butcher-shop/product/gVbTac4TaFOdRwxtI51IC4pjvEtBAwZlz3gwQ4tO.jpeg', NULL, '2019-03-09 05:15:20', '2019-03-09 05:15:20'),
(NULL, 2, 22, 4, 'public/shop/butcher/butcher-shop/product/FP3NelMBIbEqxaLoDlP62ICRi5RyP5kZiRBI1wSG.jpeg', NULL, '2019-03-09 05:15:43', '2019-03-09 05:15:43'),
(NULL, 2, 15, 2, 'public/shop/hotel/hotel/product/hk19wKfzsNdv3l2dCri5XrSBmPgr6QvVuKipDMsJ.jpeg', NULL, '2019-03-09 05:18:19', '2019-03-09 05:18:19'),
(NULL, 2, 15, 3, 'public/shop/hotel/hotel/product/dusPpO613TdUpfEjyXpWP3saasVuMZ5tA0luvIIZ.jpeg', NULL, '2019-03-09 05:20:07', '2019-03-09 05:20:07'),
(NULL, 2, 15, 4, 'public/shop/hotel/hotel/product/OCBvSnOJEKZD2iTxBnWrwJ2IjnSnbVXBsQwFr8iH.jpeg', NULL, '2019-03-09 05:20:30', '2019-03-09 05:20:30'),
(NULL, 2, 15, 5, 'public/shop/hotel/hotel/product/hHhKE1Bkc1ajeMoh9NbOcUELOg3b3pZ69TbbKA0I.jpeg', NULL, '2019-03-09 05:20:49', '2019-03-09 05:20:49'),
(NULL, 2, 21, 1, 'public/shop/vegetables/vegetables-store/product/lQZ5nDqVygJocjfOmNE3yfl5WyV1KAHHW4SwyHGI.jpeg', NULL, '2019-03-09 05:25:00', '2019-03-09 05:25:00'),
(NULL, 2, 21, 2, 'public/shop/vegetables/vegetables-store/product/GUeQId7TPci9saj7pxyf2XWEQ02lh1RX7ryxei7w.jpeg', NULL, '2019-03-09 05:25:12', '2019-03-09 05:25:12'),
(NULL, 2, 21, 3, 'public/shop/vegetables/vegetables-store/product/aIL7h3paOSX0IliGIr7Ka1Qdg1vCsIJEgcCLJDZB.jpeg', NULL, '2019-03-09 05:25:26', '2019-03-09 05:25:26'),
(NULL, 2, 21, 4, 'public/shop/vegetables/vegetables-store/product/itHssDWzCplLPSPUdMAI8869obFZ7vT9RkTHA6CI.png', NULL, '2019-03-09 05:25:41', '2019-03-09 05:25:41'),
(NULL, 2, 17, 1, 'public/shop/restaurent/restaurent/product/p40qoh1t584UiEIOn99T5mmnbYrWDj0Og0d6pxa8.jpeg', NULL, '2019-03-09 05:29:31', '2019-03-09 05:29:31'),
(NULL, 2, 16, 1, 'public/shop/medicine/medicine-pharmacy-store/product/DWJiD5tCKJxzJSqatLuEppAx044NlyzaQabjUOpY.jpeg', NULL, '2019-03-09 05:33:22', '2019-03-09 05:33:22'),
(NULL, 2, 16, 2, 'public/shop/medicine/medicine-pharmacy-store/product/7AmTWLhmaFZ5RMBvkXQLorqinRUrT4Hgk9dyJoVB.jpeg', NULL, '2019-03-09 05:34:02', '2019-03-09 05:34:02'),
(NULL, 2, 16, 3, 'public/shop/medicine/medicine-pharmacy-store/product/xdEK83iLShBCOEFcgIug46vTEzO1x61mHgp4k0Jz.jpeg', NULL, '2019-03-09 05:34:49', '2019-03-09 05:34:49'),
(NULL, 2, 19, 1, 'public/shop/sport/sport-hunting-fitness-store/product/bgZ36H44Qdp7xg4YF310Ks2omYc6znigJDxqcK0B.jpeg', NULL, '2019-03-09 05:38:41', '2019-03-09 05:38:41'),
(NULL, 2, 7, 7, 'public/shop/books/books-shop/product/efIT6LnxRGIBtccMw4B6sIMcCu86BqoQZVXt2CzY.png', NULL, '2019-03-14 00:15:31', '2019-03-14 00:15:31'),
(NULL, 2, 7, 7, 'public/shop/books/books-shop/product/XHAzQzjFO1wHuTnrPcMzeVJSK4EPJUDBuVAuYO5b.jpeg', '20742', '2019-03-14 04:54:07', '2019-03-14 04:54:07'),
(NULL, 2, 4, 7, 'public/shop/baby/baby-toy-kids-gift-store/product/V188fTbspvEK5I1EKdN16if7PfdmhxkFw5wtXWA6.jpeg', '3045', '2019-03-14 07:05:17', '2019-03-14 07:05:17'),
(NULL, 2, 4, 7, 'public/shop/baby/baby-toy-kids-gift-store/product/tcSF6rWvjCjXr331utksN6CC6hkQAkxY2YtJ5eQ9.jpeg', '2943', '2019-03-14 07:05:51', '2019-03-14 07:05:51'),
(NULL, 2, 2, 22, 'public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', NULL, '2019-03-17 01:15:43', '2019-03-17 01:15:43'),
(NULL, 2, 7, 4, 'public/shop/books/books-shop/product/9esnEe5DudDE2UQr2WWiwp9v61yX5c7KBaVV2oCF.jpeg', '5092', '2019-03-17 07:01:33', '2019-03-17 07:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `private_product_infos`
--

CREATE TABLE `private_product_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `view` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `rating` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `rate` double(4,2) UNSIGNED NOT NULL DEFAULT '0.00',
  `description` text COLLATE utf8mb4_unicode_ci,
  `details_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_product_infos`
--

INSERT INTO `private_product_infos` (`id`, `shop_id`, `sp_counter_number`, `comment`, `view`, `rating`, `rate`, `description`, `details_link`, `created_at`, `updated_at`) VALUES
(1, 2, 6, 0, 0, 0, 0.00, 'dsfjdsj djfgsdjkgndfkj kjjgdfkjghdfklg df', NULL, '2019-02-27 07:21:08', '2019-02-27 07:21:08'),
(8, 4, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-07 23:03:02', '2019-03-07 23:03:02'),
(11, 4, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:06:02', '2019-03-09 04:06:02'),
(12, 4, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:06:20', '2019-03-09 04:06:20'),
(13, 4, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:06:41', '2019-03-09 04:06:41'),
(14, 4, 5, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:07:01', '2019-03-09 04:07:01'),
(15, 4, 6, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:07:18', '2019-03-09 04:07:18'),
(16, 4, 7, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:07:42', '2019-03-09 04:07:42'),
(21, 6, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:16:42', '2019-03-09 04:16:42'),
(22, 6, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:17:11', '2019-03-09 04:17:11'),
(23, 6, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:17:32', '2019-03-09 04:17:32'),
(24, 6, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:17:56', '2019-03-09 04:17:56'),
(25, 6, 5, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:18:24', '2019-03-09 04:18:24'),
(26, 7, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:24:13', '2019-03-09 04:24:13'),
(27, 7, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:24:39', '2019-03-09 04:24:39'),
(28, 7, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:24:56', '2019-03-09 04:24:56'),
(29, 7, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:25:14', '2019-03-09 04:25:14'),
(30, 7, 5, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:25:34', '2019-03-09 04:25:34'),
(31, 7, 6, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:25:51', '2019-03-09 04:25:51'),
(32, 9, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:31:19', '2019-03-09 04:31:19'),
(33, 9, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:31:37', '2019-03-09 04:31:37'),
(34, 9, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:31:53', '2019-03-09 04:31:53'),
(35, 9, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:32:17', '2019-03-09 04:32:17'),
(36, 9, 5, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:32:48', '2019-03-09 04:32:48'),
(37, 9, 6, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:33:10', '2019-03-09 04:33:10'),
(38, 9, 7, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:33:37', '2019-03-09 04:33:37'),
(39, 9, 8, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:33:51', '2019-03-09 04:33:51'),
(40, 9, 9, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:34:09', '2019-03-09 04:34:09'),
(41, 10, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:40:10', '2019-03-09 04:40:10'),
(42, 10, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:40:25', '2019-03-09 04:40:25'),
(43, 10, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:40:43', '2019-03-09 04:40:43'),
(44, 10, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:41:30', '2019-03-09 04:41:30'),
(45, 11, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:44:48', '2019-03-09 04:44:48'),
(46, 11, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:45:00', '2019-03-09 04:45:00'),
(47, 11, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:45:14', '2019-03-09 04:45:14'),
(48, 11, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:45:30', '2019-03-09 04:45:30'),
(49, 11, 5, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:45:50', '2019-03-09 04:45:50'),
(50, 12, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:49:47', '2019-03-09 04:49:47'),
(51, 12, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:50:01', '2019-03-09 04:50:01'),
(52, 12, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:50:15', '2019-03-09 04:50:15'),
(53, 12, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:50:28', '2019-03-09 04:50:28'),
(54, 12, 5, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:50:45', '2019-03-09 04:50:45'),
(55, 13, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:53:47', '2019-03-09 04:53:47'),
(56, 13, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:54:16', '2019-03-09 04:54:16'),
(57, 13, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:54:37', '2019-03-09 04:54:37'),
(58, 13, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:54:54', '2019-03-09 04:54:54'),
(59, 13, 5, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 04:55:25', '2019-03-09 04:55:25'),
(60, 22, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:14:19', '2019-03-09 05:14:19'),
(61, 22, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:14:55', '2019-03-09 05:14:55'),
(62, 22, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:15:20', '2019-03-09 05:15:20'),
(63, 22, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:15:43', '2019-03-09 05:15:43'),
(64, 15, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:18:19', '2019-03-09 05:18:19'),
(65, 15, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:20:07', '2019-03-09 05:20:07'),
(66, 15, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:20:30', '2019-03-09 05:20:30'),
(67, 15, 5, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:20:49', '2019-03-09 05:20:49'),
(68, 21, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:25:00', '2019-03-09 05:25:00'),
(69, 21, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:25:12', '2019-03-09 05:25:12'),
(70, 21, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:25:26', '2019-03-09 05:25:26'),
(71, 21, 4, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:25:41', '2019-03-09 05:25:41'),
(72, 17, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:29:31', '2019-03-09 05:29:31'),
(73, 16, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:33:22', '2019-03-09 05:33:22'),
(74, 16, 2, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:34:02', '2019-03-09 05:34:02'),
(75, 16, 3, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:34:49', '2019-03-09 05:34:49'),
(76, 19, 1, 0, 0, 0, 0.00, NULL, NULL, '2019-03-09 05:38:41', '2019-03-09 05:38:41'),
(77, 7, 7, 0, 0, 0, 0.00, NULL, NULL, '2019-03-14 00:15:31', '2019-03-14 00:15:31'),
(81, 2, 22, 0, 0, 0, 0.00, NULL, NULL, '2019-03-17 01:15:43', '2019-03-17 01:15:43');

-- --------------------------------------------------------

--
-- Table structure for table `private_product_likes`
--

CREATE TABLE `private_product_likes` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `private_product_likes`
--

INSERT INTO `private_product_likes` (`shop_id`, `sp_counter_number`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 6, 2, '2019-03-14 07:04:04', '2019-03-14 07:04:04'),
(7, 4, 3, '2019-03-18 07:08:31', '2019-03-18 07:08:31'),
(10, 4, 1, '2019-03-27 23:10:11', '2019-03-27 23:10:11'),
(2, 22, 1, '2019-03-27 23:11:22', '2019-03-27 23:11:22'),
(7, 4, 5, '2019-04-11 00:42:16', '2019-04-11 00:42:16');

-- --------------------------------------------------------

--
-- Table structure for table `private_product_ratings`
--

CREATE TABLE `private_product_ratings` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` double(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `private_product_shoe_sizes`
--

CREATE TABLE `private_product_shoe_sizes` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_order` int(11) NOT NULL DEFAULT '1',
  `price_bdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_cgc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_usd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5',
  `condition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `like` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `view` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `using_info` text COLLATE utf8mb4_unicode_ci,
  `payment_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_name`, `user_id`, `shop_name`, `shop_slug`, `shop_id`, `sp_counter_number`, `title`, `category`, `type`, `brand`, `quantity`, `unit`, `minimum_order`, `price_bdt`, `price_cgc`, `price_usd`, `profit_rate`, `condition`, `like`, `comment`, `view`, `slug`, `description`, `using_info`, `payment_info`, `action`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Admin', 2, 'rangpur public shop', 'rangpur-public-shop', 1, 4, '121', '12', '12', '12', 1, 'piece', 1, '121', NULL, NULL, '5', 'old', 0, 0, 0, '121', NULL, NULL, 'online', 'show', 'public/shop/public/rangpur-public-shop/product/4MYkj2MUHKXsgHZcmkyx0zvpUd0T5o1M53GYMgDm.jpeg', '2019-03-05 10:02:42', '2019-04-07 22:07:10'),
(8, 'Admin', 2, 'kushtia public shop', 'kushtia-public-shop', 3, 1, 'dfsda', 'sdafsda', 'sdafsd', 'sadfsda', 1, NULL, 1, '123', NULL, NULL, '5', 'old', 0, 0, 0, 'dfsda-1', NULL, NULL, 'online', 'show', 'public/shop/public/kushtia-public-shop/product/MPGabEyAE0m7uBo8yhS4uKMjAJxjcsKeIAdZ5FW7.jpeg', '2019-03-14 08:09:54', '2019-03-21 00:56:08'),
(10, 'user', 3, 'rangpur public shop', 'rangpur-public-shop', 1, 9, 'cloythew', 'jama', 'jlkdsfkls', 'kiof', 1, NULL, 1, '256', NULL, NULL, '5', 'old', 0, 0, 0, 'cloythew-9', NULL, NULL, 'online', 'show', 'public/shop/public/rangpur-public-shop/product/dwlDhZt5uHv8Tbnc7U09aMV7DPh7qZsHr8wVsrXE.jpeg', '2019-03-18 07:19:59', '2019-04-07 22:03:03'),
(11, 'user', 3, 'kushtia sadar public shop', 'kushtia-sadar-public-shop', 5, 1, 'fsdf', 'sdfsd', NULL, NULL, 1, NULL, 1, NULL, NULL, NULL, '5', 'old', 0, 0, 0, 'fsdf-1', NULL, NULL, 'online', 'show', 'public/shop/public/kushtia-sadar-public-shop/product/rVTEVFsarf776Si6Hh0cktK5CEWq41BgTMDI9Qja.jpeg', '2019-03-18 08:30:44', '2019-03-18 08:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`user_id`, `shop_id`, `sp_counter_number`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 'public/shop/public/rangpur-public-shop/product/4MYkj2MUHKXsgHZcmkyx0zvpUd0T5o1M53GYMgDm.jpeg', '2019-03-14 07:17:21', '2019-03-14 07:17:21'),
(2, 3, 1, 'public/shop/public/kushtia-public-shop/product/MPGabEyAE0m7uBo8yhS4uKMjAJxjcsKeIAdZ5FW7.jpeg', '2019-03-14 08:09:54', '2019-03-14 08:09:54'),
(2, 1, 4, 'public/shop/public/rangpur-public-shop/product/01XJbfT3jW2jVasFBUTvvqvyWAXijIsYfASUriHT.jpeg', '2019-03-16 11:10:19', '2019-03-16 11:10:19'),
(3, 1, 9, 'public/shop/public/rangpur-public-shop/product/dwlDhZt5uHv8Tbnc7U09aMV7DPh7qZsHr8wVsrXE.jpeg', '2019-03-18 07:23:38', '2019-03-18 07:23:38'),
(3, 1, 9, 'public/shop/public/rangpur-public-shop/product/VU58Rrawg1lGyZI9wVVyAL9B5pOdIpIU2e9zBos3.jpeg', '2019-03-18 07:23:45', '2019-03-18 07:23:45'),
(3, 5, 1, 'public/shop/public/kushtia-sadar-public-shop/product/rVTEVFsarf776Si6Hh0cktK5CEWq41BgTMDI9Qja.jpeg', '2019-03-18 08:30:44', '2019-03-18 08:30:44');

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collamon 1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrproducts`
--

CREATE TABLE `ptrproducts` (
  `id` int(10) UNSIGNED NOT NULL,
  `ptrshop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptrshop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ptrshop_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ptr_sp_counter_number` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '1',
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minimum_order` int(11) NOT NULL DEFAULT '1',
  `price_bdt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_cgc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price_usd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profit_rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '5',
  `like` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'show',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrproduct_comments`
--

CREATE TABLE `ptrproduct_comments` (
  `ptrshop_id` int(10) UNSIGNED NOT NULL,
  `ptr_sp_counter_number` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrproduct_infos`
--

CREATE TABLE `ptrproduct_infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `ptrshop_id` int(10) UNSIGNED NOT NULL,
  `sp_counter_number` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `view` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `rating` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `rate` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `description` text COLLATE utf8mb4_unicode_ci,
  `details_link` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrproduct_likes`
--

CREATE TABLE `ptrproduct_likes` (
  `ptrshop_id` int(10) UNSIGNED NOT NULL,
  `ptr_sp_counter_number` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrproduct_ratings`
--

CREATE TABLE `ptrproduct_ratings` (
  `ptrshop_id` int(10) UNSIGNED NOT NULL,
  `ptr_sp_counter_number` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` double(3,1) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrshops`
--

CREATE TABLE `ptrshops` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Basic',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Private',
  `ptrsp_counter` int(11) NOT NULL DEFAULT '0',
  `star` double(5,2) NOT NULL DEFAULT '0.00',
  `rating` double(8,2) NOT NULL DEFAULT '1.00',
  `like` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `unlike` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `connected` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `view` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `profit_rate` double(4,2) NOT NULL DEFAULT '5.00',
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_bdt` double(18,2) NOT NULL DEFAULT '0.00',
  `balance_cgc` double(18,3) NOT NULL DEFAULT '0.000',
  `balance_usd` double(18,3) NOT NULL DEFAULT '0.000',
  `storage` double(18,2) NOT NULL DEFAULT '2175345.00',
  `storage_limit` double(18,2) NOT NULL DEFAULT '128974848.00',
  `string` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `center_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_q1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_q2` int(11) DEFAULT NULL,
  `security_q3` int(11) DEFAULT NULL,
  `safety_number` int(11) DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrshop_comments`
--

CREATE TABLE `ptrshop_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `ptrshop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrshop_connects`
--

CREATE TABLE `ptrshop_connects` (
  `ptrshop_id` int(10) UNSIGNED NOT NULL,
  `ptrshop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrshop_likes`
--

CREATE TABLE `ptrshop_likes` (
  `ptrshop_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ptrshop_ratings`
--

CREATE TABLE `ptrshop_ratings` (
  `ptrshop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` double(3,1) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE `shops` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `creator_id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `market` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Basic',
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Private',
  `sp_counter` int(11) NOT NULL DEFAULT '1',
  `star` double(5,2) NOT NULL DEFAULT '0.00',
  `rating` double(8,2) NOT NULL DEFAULT '1.00',
  `like` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `unlike` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `connected` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `view` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `profit_rate` double(4,2) NOT NULL DEFAULT '5.00',
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance_bdt` double(18,2) NOT NULL DEFAULT '0.00',
  `balance_cgc` double(18,3) NOT NULL DEFAULT '0.000',
  `balance_usd` double(18,3) NOT NULL DEFAULT '0.000',
  `storage` double(18,2) NOT NULL DEFAULT '2175345.00',
  `storage_limit` double(18,2) NOT NULL DEFAULT '128974848.00',
  `string` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `center_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_q1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `security_q2` int(11) DEFAULT NULL,
  `security_q3` int(11) DEFAULT NULL,
  `safety_number` int(11) DEFAULT NULL,
  `agent` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Show',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`id`, `user_name`, `user_id`, `creator_id`, `country`, `state`, `district`, `city`, `market`, `name`, `mode`, `slug`, `shop_type`, `type`, `sp_counter`, `star`, `rating`, `like`, `unlike`, `comment`, `connected`, `view`, `profit_rate`, `currency`, `balance_bdt`, `balance_cgc`, `balance_usd`, `storage`, `storage_limit`, `string`, `front_image`, `right_image`, `center_image`, `left_image`, `security_q1`, `security_q2`, `security_q3`, `safety_number`, `agent`, `action`, `created_at`, `updated_at`) VALUES
(1, 'shsohag1995', 1, 2, 'Bangladesh', 'Rangpur', 'Rangpur', 'Rangpur', 'Rangpur', 'rangpur public shop', 'Basic', 'rangpur-public-shop', 'public', 'Public', 10, 3.00, 1.00, 2, 0, 0, 1, 245, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-02-26 22:19:23', '2019-04-13 12:28:23'),
(2, 'Admin', 2, 2, 'Bangladesh', 'Rangpur', 'Rangpur', 'Rangpur', 'Rangpur', 'clothes store', 'Basic', 'clothes-store', 'clothes', 'Private', 23, 2.50, 1.00, 1, 1, 0, 0, 595, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/clothes/clothes-store/profile/TP9E1VBgHnVdKEW2XM9STqwng219RJqQQ2j7U2Lu.jpeg', 'public/shop/clothes/clothes-store/profile/MCt4dAD5VjAYZwugGLTXim8gC46jjL0TMQ2W6Oil.jpeg', 'public/shop/clothes/clothes-store/profile/LfphoaVlQk9DpzcMRjqz91zNsQmtxtAAr0TccjNB.jpeg', 'public/shop/clothes/clothes-store/profile/tV19OCCr8nnoFjOtmxSavptZLZIpYLua5KaSjFkC.jpeg', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-02-26 22:19:23', '2019-04-07 08:42:27'),
(3, 'shsohag1995', 1, 2, 'Bangladesh', 'Khulna', 'Khulna', 'islamic university', 'islamic university', 'islamic university public shop', 'Basic', 'islamic-university-public-shop', 'public', 'Public', 2, 1.00, 1.00, 0, 0, 0, 1, 12, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/public/islamic-university-public-shop/profile/Nb837GebHcDczTRxgWCDjVj9gFvKWUZjvNLVplCw.jpeg', 'public/shop/public/islamic-university-public-shop/profile/IfQMsJkMZvkpFcMQqCJToqZpzYUvMCXAfvOqhTP3.jpeg', 'public/shop/public/islamic-university-public-shop/profile/xW8pAZQilN2kVnZOSh0gUUNphPyohtNKS4BKY3Pr.jpeg', 'public/shop/public/islamic-university-public-shop/profile/Fjfb6J7LHZmoRUpQYLurjac64Kkh5ec36OJdv8Ah.jpeg', NULL, NULL, NULL, NULL, 'agent', 'Show', '2019-03-04 23:31:09', '2019-04-13 10:45:02'),
(4, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Khulna', 'Kushtia', 'NS Road', 'baby toy kids gift store', 'Basic', 'baby-toy-kids-gift-store', 'baby', 'Private', 8, 2.00, 1.00, 1, 1, 0, 0, 70, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/baby/baby-toy-kids-gift-store/profile/aDLw6kvLB0NtqHiLeavOHk7JOLgMwuaCNTsN2jhu.jpeg', 'public/shop/baby/baby-toy-kids-gift-store/profile/3UUVq4S951P9QMaxgZLAv2KN0nxc8V04DBRYQOKi.jpeg', 'public/shop/baby/baby-toy-kids-gift-store/profile/m3TA2528zjzrJBR5WXIfFVZabHj4qhWlyiCU6ZJS.jpeg', 'public/shop/baby/baby-toy-kids-gift-store/profile/NKr8d8ZnACz7L0J85hSpMTJ4wKJFKjbTkJBFuKCm.jpeg', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-04 23:31:10', '2019-04-10 10:05:05'),
(5, 'shsohag1995', 1, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'kushtia sadar', 'NS Road', 'kushtia sadar public shop', 'Basic', 'kushtia-sadar-public-shop', 'public', 'Public', 2, 1.00, 1.00, 0, 1, 0, 1, 28, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 'Show', '2019-03-04 23:33:57', '2019-04-13 10:43:49'),
(6, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'kushtia sadar', 'NS Road', 'bakery shop', 'Basic', 'bakery-shop', 'bakery', 'Private', 6, 1.00, 1.00, 0, 1, 0, 0, 56, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/bakery/bakery-shop/profile/ivXkYfzZCGc5B7DrmAS4iwhfnsgzSNwLdedNAAyt.jpeg', 'public/shop/bakery/bakery-shop/profile/7WkKQDLMU01TjUlqB4DtumDhlWN6h7O7MzsXnJzd.jpeg', 'public/shop/bakery/bakery-shop/profile/56A2vx74FjZbljudsoN8Cpso7yuQx8IwyQAQa7h6.jpeg', 'public/shop/bakery/bakery-shop/profile/xCqsuVSDnIOkQQH7WALeKV49tuQ3Nuvd4p28iMcy.jpeg', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-04 23:33:57', '2019-04-13 10:44:05'),
(7, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'books shop', 'Basic', 'books-shop', 'books', 'Private', 8, 3.00, 1.00, 1, 0, 0, 2, 109, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/books/books-shop/profile/07JxnDxMNQrrZRqiFFwNfvWpzRqjxsfTOONWjW0e.jpeg', 'public/shop/books/books-shop/profile/jbS6t7m5NgxlJpxEgmVibHs4zYezlJ6qME1oXpDc.jpeg', 'public/shop/books/books-shop/profile/IJACqfSe4ZM8kcRzWAmCYW7HGfzUltiQs6B6Ce99.jpeg', 'public/shop/books/books-shop/profile/aq8d6Ajg1DvPcicIlSGNrVcTT9JtkvJVMr6d6eAx.jpeg', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-04 23:35:35', '2019-04-13 12:20:29'),
(8, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'kushtia sadar', 'NS Road', 'diagnostic center', 'Basic', 'diagnostic-center', 'diagnostic', 'Private', 1, 2.00, 1.00, 1, 1, 0, 0, 11, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/diagnostic/diagnostic-center/profile/front-image.png', 'public/shop/diagnostic/diagnostic-center/profile/right-image.png', 'public/shop/diagnostic/diagnostic-center/profile/center-image.png', 'public/shop/diagnostic/diagnostic-center/profile/left-image.png', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-04 23:38:29', '2019-04-10 10:04:35'),
(9, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia Sadar', 'NS Road', 'electrical store', 'Basic', 'electrical-store', 'electrical', 'Private', 10, 3.00, 1.00, 1, 0, 0, 1, 43, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/electrical/electrical-store/profile/V74oGvGvyhCPonLQt1smrlyruHTx04oi59qJBbnQ.jpeg', 'public/shop/electrical/electrical-store/profile/AN7F4m2bRmgd0LFibi2ZhQAqIq4bz35l2DXVKgDH.jpeg', 'public/shop/electrical/electrical-store/profile/XOwUJ6tYHyCOjDyoAYFkAiWoMi9RFVMN2ISg7Bv5.jpeg', 'public/shop/electrical/electrical-store/profile/4Z5V7HNU4JJgZX5FZWXgGYqCxWvtoFDBxkY2nLEd.jpeg', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-04 23:40:41', '2019-04-10 11:28:55'),
(10, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'electronice store', 'Basic', 'electronice-store', 'electronice', 'Private', 5, 3.00, 1.00, 1, 0, 0, 0, 31, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/electronice/electronice-store/profile/HJv3Pu1seUzkDMQhqaHAzoFhnzb4yLPJOEOjjNlb.jpeg', 'public/shop/electronice/electronice-store/profile/YDkyihMDfRbvp2qs3z0vY5IICDxXjsdmDMF9nmRe.jpeg', 'public/shop/electronice/electronice-store/profile/eCfh2h7LEIQSm1NzbGiMfuAt8191j4t158gmUyGr.jpeg', 'public/shop/electronice/electronice-store/profile/1coir9HG4TDAsHfROOC2t0FhuYBEHvRRLBT0D9Wz.jpeg', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-04 23:42:17', '2019-04-10 10:04:21'),
(11, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'fish store', 'Basic', 'fish-store', 'fish', 'Private', 7, 1.00, 1.00, 0, 0, 0, 0, 52, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/fish/fish-store/profile/fnHbHpxk9noXXMnn8YolDq7nnEcIMaywo7uEfoCz.jpeg', 'public/shop/fish/fish-store/profile/nLCczHBf07pKeKvmQefjjJLv9rjcWJK1xsToAoNw.jpeg', 'public/shop/fish/fish-store/profile/sJlMaq7C3ZgAI8nksbTYlgrCw9WAlzb8cjZG3iPw.jpeg', 'public/shop/fish/fish-store/profile/DWClld3O33Eg0sJjwHnAUor7Ah9zFsvpkzAmpwdd.jpeg', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-04 23:45:31', '2019-03-14 07:11:58'),
(12, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'Kushtia', 'fruits store', 'Basic', 'fruits-store', 'fruits', 'Private', 6, 1.00, 1.00, 1, 0, 0, 1, 13, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/fruits/fruits-store/profile/kHbeTlPNpQ3ZL6SAoUWfdPDDSwLzvQPoXgXUC1wt.jpeg', 'public/shop/fruits/fruits-store/profile/rTHp7y1vlTxgCZVegdopWP3siB6AGfWfotmtGTHo.jpeg', 'public/shop/fruits/fruits-store/profile/2p11kKpB626fDPrEqPxYtSy69liEzecv7orKsAY8.jpeg', 'public/shop/fruits/fruits-store/profile/oSkPwhGBRXtgaZspZ4p7ltQaup0g9F8yzq5uH9Fm.jpeg', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-04 23:51:18', '2019-04-09 07:29:40'),
(13, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia Sadar', 'NS Road', 'furniture shopifies store', 'Basic', 'furniture-shopifies-store', 'furniture', 'Private', 6, 1.00, 1.00, 0, 0, 0, 0, 20, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/furniture/furniture-shopifies-store/profile/CoeJhbxMMnAnLy7TWrGMVLJ9hyAsv637OTqGVfeN.jpeg', 'public/shop/furniture/furniture-shopifies-store/profile/c9QgFE1dsKgiEIdpi0cUsIXcaByry1ph0TYhU9bI.jpeg', 'public/shop/furniture/furniture-shopifies-store/profile/ZP3qKWSLnme9FAqIWezjauBM1FVp8Ky3NT1mjU03.jpeg', 'public/shop/furniture/furniture-shopifies-store/profile/9IE6l7br925wgy3WveRAAfXpTFeoHs0gDzzxcubP.jpeg', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-04 23:53:36', '2019-04-10 10:03:08'),
(14, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'grocery store', 'Basic', 'grocery-store', 'grocery', 'Private', 1, 1.00, 1.00, 0, 0, 0, 0, 7, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/grocery/grocery-store/profile/c0DdAf8kZeKK27Mjy50Lcdb2ToEopuQmQXkfwHwn.jpeg', 'public/shop/grocery/grocery-store/profile/2hZQCpk2jAOJrLbgSDz7BVSfQk3pdfCewuobJhCz.jpeg', 'public/shop/grocery/grocery-store/profile/center-image.png', 'public/shop/grocery/grocery-store/profile/left-image.png', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-04 23:58:46', '2019-04-08 03:41:54'),
(15, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia Sadar', 'NS Road', 'hotel', 'Basic', 'hotel', 'hotel', 'Private', 7, 1.00, 1.00, 0, 0, 0, 0, 89, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/hotel/hotel/profile/Rb2HQvjlOqmRi3w6JijJnBFCOglvCpLr70u27ZyQ.jpeg', 'public/shop/hotel/hotel/profile/Oz8zLJquUSXfpRaYI5y6Jb5yJyQQiH9NTpU2tawH.jpeg', 'public/shop/hotel/hotel/profile/qxuOEgPSeq8bHX0bov8zaH3RUFuhFTc1A5NBzt6E.jpeg', 'public/shop/hotel/hotel/profile/TDCh9OYS39mewRVmfWS69ULKzzwwKdrkTKLk8zqf.jpeg', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-05 00:01:28', '2019-04-13 12:29:50'),
(16, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'medicine pharmacy store', 'Basic', 'medicine-pharmacy-store', 'medicine', 'Private', 4, 1.00, 1.00, 0, 0, 0, 1, 7, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/medicine/medicine-pharmacy-store/profile/GkSVjkpvL8yCCwlsD3HKQwkZsDnpaH0YTLNNHj0H.jpeg', 'public/shop/medicine/medicine-pharmacy-store/profile/57yZKoFoP27KxiczNJgkk0cZWZjraTKh7tSfLamJ.jpeg', 'public/shop/medicine/medicine-pharmacy-store/profile/kOZBxV2lTeVzEfNjOU7ARHMLvfpwwRi65623k2z5.jpeg', 'public/shop/medicine/medicine-pharmacy-store/profile/MMD8dApkjvrE1h2otzMOnwQtQU96pS9zE8o9V9Ri.jpeg', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-05 00:04:42', '2019-04-10 10:02:51'),
(17, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'restaurent', 'Basic', 'restaurent', 'restaurent', 'Private', 2, 1.00, 1.00, 1, 0, 0, 0, 10, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/restaurent/restaurent/profile/0lmLHA0pLbcXSopvS4NOGG79R3bCaRlTT22thw2y.jpeg', 'public/shop/restaurent/restaurent/profile/jkWaWF0PhrFeWCuhdrnCHF7b8hxcn08SLjId2YOo.jpeg', 'public/shop/restaurent/restaurent/profile/jIgVnwe6T2CXGWz7p33RfqyTHkGDBULKNlJnCBVz.jpeg', 'public/shop/restaurent/restaurent/profile/xgl0xPaJf7i6WSHm7WudJQuhwlpvItTWs8zgYIRT.jpeg', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-05 00:07:02', '2019-04-13 08:13:00'),
(18, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'shoes store', 'Basic', 'shoes-store', 'shoes', 'Private', 1, 1.00, 1.00, 0, 0, 0, 0, 4, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/shoes/shoes-store/profile/front-image.png', 'public/shop/shoes/shoes-store/profile/right-image.png', 'public/shop/shoes/shoes-store/profile/center-image.png', 'public/shop/shoes/shoes-store/profile/left-image.png', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-05 00:10:56', '2019-04-10 10:02:41'),
(19, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'sport hunting fitness store', 'Basic', 'sport-hunting-fitness-store', 'sport', 'Private', 2, 1.00, 1.00, 0, 0, 0, 0, 9, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/sport/sport-hunting-fitness-store/profile/gl0xZTDHDVOjEjEGb6UP1HlCqDkPXX4gvZIeCTGE.jpeg', 'public/shop/sport/sport-hunting-fitness-store/profile/fiQXU5kT58p2LaYZA0jNQuKQJm9YDwSFBmhDzyUn.jpeg', 'public/shop/sport/sport-hunting-fitness-store/profile/mQ4I0RQy80qt9Z3FOM6XTpnAj415fNZA2hO2Ovmm.jpeg', 'public/shop/sport/sport-hunting-fitness-store/profile/2Y1YlsI2ZcecmuAAS1Ra2QT3IbXtNRfh5jJKzmC5.jpeg', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-05 00:13:22', '2019-04-10 10:02:37'),
(20, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'stationery store', 'Basic', 'stationery-store', 'stationery', 'Private', 1, 1.00, 1.00, 0, 0, 0, 0, 2, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/stationery/stationery-store/profile/front-image.png', 'public/shop/stationery/stationery-store/profile/right-image.png', 'public/shop/stationery/stationery-store/profile/center-image.png', 'public/shop/stationery/stationery-store/profile/left-image.png', NULL, NULL, NULL, NULL, NULL, 'Hide', '2019-03-05 00:15:59', '2019-04-10 10:04:04'),
(21, 'Admin', 2, 2, 'Bangladesh', 'Khulna', 'Kushtia', 'Kushtia sadar', 'NS Road', 'vegetables store', 'Basic', 'vegetables-store', 'vegetables', 'Private', 5, 1.00, 1.00, 0, 0, 0, 1, 13, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/vegetables/vegetables-store/profile/jUWmo8Kr0Z00M7ii3jXmDjE9wyapAa1uzcZKlFlx.jpeg', 'public/shop/vegetables/vegetables-store/profile/7ZXu3R8eClzLo0biaHfJRalUt3bqafk8FsLHQgnL.jpeg', 'public/shop/vegetables/vegetables-store/profile/J0V1Uc3XyhDNQczNxw0hhaAvEX8OTZlJiyTklEZL.jpeg', 'public/shop/vegetables/vegetables-store/profile/agWYeYp2Nf28g8z6A5HaZHron2cwr3SnculUWNA8.jpeg', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-05 00:17:09', '2019-04-09 19:33:13'),
(22, 'Admin', 2, 2, 'Bangladesh', 'Rangpur', 'Kurigram', 'kuurigram sadar', 'dsfds', 'butcher shop', 'Basic', 'butcher-shop', 'butcher', 'Private', 5, 1.00, 1.00, 0, 1, 0, 0, 22, 5.00, NULL, 0.00, 0.000, 0.000, 2175345.00, 128974848.00, NULL, 'public/shop/butcher/butcher-shop/profile/u5EOiS5kuKVDm1e3l4swz2hsc3mfbIpuYtjs8aIX.jpeg', 'public/shop/butcher/butcher-shop/profile/zdYeWosdyQ4YM59LqDpw8AUjUvJZKP6RoVVGRqxW.jpeg', 'public/shop/butcher/butcher-shop/profile/MNF5sdQrHvSZVCDB0F8cd2FvnTdJ6V7dpkiSKTvp.jpeg', 'public/shop/butcher/butcher-shop/profile/CpCg2wJWAuVoPSclOoV03OPPnFQVuJnsrL8JwncS.jpeg', NULL, NULL, NULL, NULL, NULL, 'Show', '2019-03-09 05:02:14', '2019-04-10 10:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `shop_addresses`
--

CREATE TABLE `shop_addresses` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `visitcost` text COLLATE utf8mb4_unicode_ci,
  `maplink` text COLLATE utf8mb4_unicode_ci,
  `colamon 1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_addresses`
--

INSERT INTO `shop_addresses` (`id`, `shop_id`, `shop_slug`, `user_id`, `visitcost`, `maplink`, `colamon 1`, `colamon 2`, `colamon 3`, `colamon 4`, `colamon 5`, `created_at`, `updated_at`) VALUES
(1, 1, 'rangpur-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:19:23', '2019-02-26 22:19:23'),
(2, 2, 'clothes-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:19:23', '2019-02-26 22:19:23'),
(3, 3, 'islamic-university-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:31:09', '2019-03-04 23:31:09'),
(4, 4, 'baby-toy-kids-gift-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:31:10', '2019-03-04 23:31:10'),
(5, 5, 'kushtia-sadar-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:33:57', '2019-03-04 23:33:57'),
(6, 6, 'bakery-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:33:57', '2019-03-04 23:33:57'),
(7, 7, 'books-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:35:35', '2019-03-04 23:35:35'),
(8, 8, 'diagnostic-center', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:38:29', '2019-03-04 23:38:29'),
(9, 9, 'electrical-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:40:41', '2019-03-04 23:40:41'),
(10, 10, 'electronice-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:42:18', '2019-03-04 23:42:18'),
(11, 11, 'fish-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:45:32', '2019-03-04 23:45:32'),
(12, 12, 'fruits-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:51:18', '2019-03-04 23:51:18'),
(13, 13, 'furniture-shopifies-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:53:36', '2019-03-04 23:53:36'),
(14, 14, 'grocery-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:58:46', '2019-03-04 23:58:46'),
(15, 15, 'hotel', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:01:28', '2019-03-05 00:01:28'),
(16, 16, 'medicine-pharmacy-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:04:43', '2019-03-05 00:04:43'),
(17, 17, 'restaurent', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:07:02', '2019-03-05 00:07:02'),
(18, 18, 'shoes-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:10:56', '2019-03-05 00:10:56'),
(19, 19, 'sport-hunting-fitness-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:13:22', '2019-03-05 00:13:22'),
(20, 20, 'stationery-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:15:59', '2019-03-05 00:15:59'),
(21, 21, 'vegetables-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:17:09', '2019-03-05 00:17:09'),
(22, 22, 'butcher-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-09 05:02:14', '2019-03-09 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `shop_admins`
--

CREATE TABLE `shop_admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_jobs` int(11) NOT NULL DEFAULT '1',
  `colamon 1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_admins`
--

INSERT INTO `shop_admins` (`id`, `shop_id`, `shop_slug`, `user_id`, `user_name`, `user_jobs`, `colamon 1`, `colamon 2`, `colamon 3`, `colamon 4`, `colamon 5`, `created_at`, `updated_at`) VALUES
(1, 1, 'rangpur-public-shop', 1, 'shsohag1995', 1, NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:19:23', '2019-02-26 22:19:23'),
(2, 2, 'clothes-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:19:23', '2019-02-26 22:19:23'),
(3, 3, 'islamic-university-public-shop', 1, 'shsohag1995', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:31:10', '2019-03-04 23:31:10'),
(4, 4, 'baby-toy-kids-gift-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:31:10', '2019-03-04 23:31:10'),
(5, 5, 'kushtia-sadar-public-shop', 1, 'shsohag1995', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:33:57', '2019-03-04 23:33:57'),
(6, 6, 'bakery-shop', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:33:57', '2019-03-04 23:33:57'),
(7, 7, 'books-shop', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:35:35', '2019-03-04 23:35:35'),
(8, 8, 'diagnostic-center', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:38:29', '2019-03-04 23:38:29'),
(9, 9, 'electrical-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:40:41', '2019-03-04 23:40:41'),
(10, 10, 'electronice-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:42:18', '2019-03-04 23:42:18'),
(11, 11, 'fish-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:45:32', '2019-03-04 23:45:32'),
(12, 12, 'fruits-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:51:18', '2019-03-04 23:51:18'),
(13, 13, 'furniture-shopifies-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:53:36', '2019-03-04 23:53:36'),
(14, 14, 'grocery-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:58:46', '2019-03-04 23:58:46'),
(15, 15, 'hotel', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:01:28', '2019-03-05 00:01:28'),
(16, 16, 'medicine-pharmacy-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:04:43', '2019-03-05 00:04:43'),
(17, 17, 'restaurent', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:07:02', '2019-03-05 00:07:02'),
(18, 18, 'shoes-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:10:56', '2019-03-05 00:10:56'),
(19, 19, 'sport-hunting-fitness-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:13:23', '2019-03-05 00:13:23'),
(20, 20, 'stationery-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:16:00', '2019-03-05 00:16:00'),
(21, 21, 'vegetables-store', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:17:09', '2019-03-05 00:17:09'),
(22, 22, 'butcher-shop', 2, 'Admin', 1, NULL, NULL, NULL, NULL, NULL, '2019-03-09 05:02:14', '2019-03-09 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `shop_comments`
--

CREATE TABLE `shop_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `rating` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_comments`
--

INSERT INTO `shop_comments` (`id`, `shop_id`, `user_id`, `comment`, `rating`, `created_at`, `updated_at`) VALUES
(1, 15, 3, NULL, '5', '2019-03-08 03:16:56', '2019-03-08 03:16:56'),
(2, 15, 3, 'dfgdf hdfdf', '5', '2019-03-08 03:20:12', '2019-03-08 03:20:12'),
(3, 15, 3, 'This is a very good shop .', '5', '2019-03-08 04:49:07', '2019-03-08 04:49:07'),
(4, 6, 2, 'hgkhjk,hjil, juiop', '5', '2019-03-12 20:23:07', '2019-03-12 20:23:07'),
(5, 2, 2, 'b nhdf r fgjhfgv ng', '5', '2019-03-14 01:28:24', '2019-03-14 01:28:24'),
(6, 4, 2, 'this is a good shop', '5', '2019-03-14 07:06:34', '2019-03-14 07:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `shop_complains`
--

CREATE TABLE `shop_complains` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `complain` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_contacts`
--

CREATE TABLE `shop_contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `contact` text COLLATE utf8mb4_unicode_ci,
  `notice` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `colamon 1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_contacts`
--

INSERT INTO `shop_contacts` (`id`, `shop_id`, `shop_slug`, `user_id`, `contact`, `notice`, `address`, `colamon 1`, `colamon 2`, `colamon 3`, `colamon 4`, `colamon 5`, `created_at`, `updated_at`) VALUES
(1, 1, 'rangpur-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:19:23', '2019-02-26 22:19:23'),
(2, 2, 'clothes-store', 2, 'edb hxcver6t tyijkm fujnf tykuygv 56ujmc  tyujnm c djhnfgujh t6', NULL, 'zxc vbxcb fgb nhfgxjmn xvf ukm vnchv  jyf n', NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:19:23', '2019-03-14 07:00:36'),
(3, 3, 'islamic-university-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:31:09', '2019-03-04 23:31:09'),
(4, 4, 'baby-toy-kids-gift-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:31:10', '2019-03-04 23:31:10'),
(5, 5, 'kushtia-sadar-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:33:57', '2019-03-04 23:33:57'),
(6, 6, 'bakery-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:33:57', '2019-03-04 23:33:57'),
(7, 7, 'books-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:35:35', '2019-03-04 23:35:35'),
(8, 8, 'diagnostic-center', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:38:29', '2019-03-04 23:38:29'),
(9, 9, 'electrical-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:40:41', '2019-03-04 23:40:41'),
(10, 10, 'electronice-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:42:18', '2019-03-04 23:42:18'),
(11, 11, 'fish-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:45:32', '2019-03-04 23:45:32'),
(12, 12, 'fruits-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:51:18', '2019-03-04 23:51:18'),
(13, 13, 'furniture-shopifies-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:53:36', '2019-03-04 23:53:36'),
(14, 14, 'grocery-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:58:46', '2019-03-04 23:58:46'),
(15, 15, 'hotel', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:01:28', '2019-03-05 00:01:28'),
(16, 16, 'medicine-pharmacy-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:04:43', '2019-03-05 00:04:43'),
(17, 17, 'restaurent', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:07:02', '2019-03-05 00:07:02'),
(18, 18, 'shoes-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:10:56', '2019-03-05 00:10:56'),
(19, 19, 'sport-hunting-fitness-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:13:22', '2019-03-05 00:13:22'),
(20, 20, 'stationery-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:16:00', '2019-03-05 00:16:00'),
(21, 21, 'vegetables-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:17:09', '2019-03-05 00:17:09'),
(22, 22, 'butcher-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-09 05:02:14', '2019-03-09 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `shop_likes`
--

CREATE TABLE `shop_likes` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `confirmed` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_likes`
--

INSERT INTO `shop_likes` (`shop_id`, `user_id`, `confirmed`, `created_at`, `updated_at`) VALUES
(2, 3, 1, '2019-03-04 10:09:59', '2019-03-04 10:10:07'),
(1, 3, 1, '2019-03-04 10:21:37', '2019-03-04 10:21:43'),
(4, 3, 0, '2019-03-07 09:01:14', '2019-03-07 09:02:40'),
(8, 2, 1, '2019-03-09 04:19:26', '2019-03-09 04:19:26'),
(4, 2, 1, '2019-03-09 04:35:20', '2019-03-09 04:35:20'),
(6, 2, 0, '2019-03-09 04:35:37', '2019-03-14 07:08:32'),
(10, 2, 1, '2019-03-09 12:09:32', '2019-03-09 12:09:32'),
(1, 4, 1, '2019-03-12 07:13:04', '2019-03-12 07:13:11'),
(5, 2, 0, '2019-03-13 22:30:31', '2019-03-13 22:30:34'),
(8, 1, 0, '2019-03-27 23:13:51', '2019-03-27 23:13:51'),
(2, 2, 0, '2019-04-05 06:31:14', '2019-04-05 06:31:17'),
(9, 2, 1, '2019-04-05 09:22:08', '2019-04-05 09:22:10'),
(12, 1, 1, '2019-04-09 07:29:40', '2019-04-09 07:29:40'),
(22, 5, 0, '2019-04-09 19:53:42', '2019-04-09 19:53:44'),
(7, 5, 1, '2019-04-11 00:42:26', '2019-04-11 00:42:26'),
(17, 5, 1, '2019-04-13 08:13:00', '2019-04-13 08:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `shop_notices`
--

CREATE TABLE `shop_notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `shop_id` int(10) UNSIGNED NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `notice_info` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notice` text COLLATE utf8mb4_unicode_ci,
  `colamon 1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_notices`
--

INSERT INTO `shop_notices` (`id`, `shop_id`, `shop_slug`, `user_id`, `notice_info`, `title`, `notice`, `colamon 1`, `colamon 2`, `colamon 3`, `colamon 4`, `colamon 5`, `created_at`, `updated_at`) VALUES
(1, 1, 'rangpur-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:19:23', '2019-02-26 22:19:23'),
(2, 2, 'clothes-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:19:23', '2019-02-26 22:19:23'),
(3, 3, 'kushtia-public-shopislamic-university-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:31:10', '2019-03-04 23:31:10'),
(4, 4, 'baby-toy-kids-gift-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:31:10', '2019-03-04 23:31:10'),
(5, 5, 'kushtia-sadar-public-shop', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:33:57', '2019-03-04 23:33:57'),
(6, 6, 'bakery-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:33:57', '2019-03-04 23:33:57'),
(7, 7, 'books-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:35:35', '2019-03-04 23:35:35'),
(8, 8, 'diagnostic-center', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:38:29', '2019-03-04 23:38:29'),
(9, 9, 'electrical-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:40:41', '2019-03-04 23:40:41'),
(10, 10, 'electronice-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:42:18', '2019-03-04 23:42:18'),
(11, 11, 'fish-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:45:32', '2019-03-04 23:45:32'),
(12, 12, 'fruits-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:51:18', '2019-03-04 23:51:18'),
(13, 13, 'furniture-shopifies-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:53:36', '2019-03-04 23:53:36'),
(14, 14, 'grocery-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 23:58:46', '2019-03-04 23:58:46'),
(15, 15, 'hotel', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:01:28', '2019-03-05 00:01:28'),
(16, 16, 'medicine-pharmacy-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:04:43', '2019-03-05 00:04:43'),
(17, 17, 'restaurent', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:07:02', '2019-03-05 00:07:02'),
(18, 18, 'shoes-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:10:56', '2019-03-05 00:10:56'),
(19, 19, 'sport-hunting-fitness-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:13:23', '2019-03-05 00:13:23'),
(20, 20, 'stationery-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:16:00', '2019-03-05 00:16:00'),
(21, 21, 'vegetables-store', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-05 00:17:09', '2019-03-05 00:17:09'),
(22, 22, 'butcher-shop', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-09 05:02:14', '2019-03-09 05:02:14');

-- --------------------------------------------------------

--
-- Table structure for table `shop_ratings`
--

CREATE TABLE `shop_ratings` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `rating` double(3,1) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_types`
--

CREATE TABLE `shop_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `front_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `center_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `left-image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `shop_users`
--

CREATE TABLE `shop_users` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `shop_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shop_users`
--

INSERT INTO `shop_users` (`shop_id`, `user_id`, `shop_name`, `shop_slug`, `created_at`, `updated_at`) VALUES
(12, 4, 'fruits store', 'fruits-store', '2019-03-12 07:15:36', '2019-03-12 07:15:36'),
(16, 4, 'medicine pharmacy store', 'medicine-pharmacy-store', '2019-03-12 07:15:40', '2019-03-12 07:15:40'),
(21, 4, 'vegetables store', 'vegetables-store', '2019-03-12 07:15:46', '2019-03-12 07:15:46'),
(1, 1, 'rangpur public shop', 'rangpur-public-shop', '2019-03-14 07:16:05', '2019-03-14 07:16:05'),
(9, 2, 'electrical store', 'electrical-store', '2019-03-18 07:04:12', '2019-03-18 07:04:12'),
(7, 2, 'books shop', 'books-shop', '2019-03-18 07:04:31', '2019-03-18 07:04:31'),
(3, 2, 'kushtia public shop', 'kushtia-public-shop', '2019-03-18 07:04:38', '2019-03-18 07:04:38'),
(7, 3, 'books shop', 'books-shop', '2019-03-18 07:08:18', '2019-03-18 07:08:18'),
(5, 2, 'kushtia sadar public shop', 'kushtia-sadar-public-shop', '2019-03-21 07:18:34', '2019-03-21 07:18:34');

-- --------------------------------------------------------

--
-- Table structure for table `shop_views`
--

CREATE TABLE `shop_views` (
  `shop_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `balance_bdt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.00',
  `balance_cgc` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.000',
  `balance_usd` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0.000',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logintype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Unverified',
  `user_role_id` int(11) NOT NULL DEFAULT '2',
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `balance_bdt`, `balance_cgc`, `balance_usd`, `first_name`, `last_name`, `user_name`, `logintype`, `email`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`, `user_role_id`, `user_type`) VALUES
(1, '0.00', '0.000', '0.000', 'Md Shariful Hasan', 'Sohag', 'shsohag1995', NULL, 'shsohag1995@gmail.com', NULL, NULL, '$2y$10$F90wgpaV/Nx17ZaOxu2qceALXY.wRbKV0k/kkGYPeHB24hBjtri7y', 'bkUQ6hznJ8LD3H95mU3XCgxjorb7Wk2PnQ2AhLbZnEcPjiVnLDNNWuQvrWOL', '2019-02-26 21:59:42', '2019-02-26 21:59:42', 'Verified', 3, NULL),
(2, '0.00', '0.000', '0.000', 'Admin', 'Admin', 'Admin', NULL, 'admin@gmail.com', NULL, NULL, '$2y$10$3NYvkwQnL7hxRQC4Jqli6u5BPYCevii9GLzjiqxZIqg5g/v1jvpe6', 'sHr57qArNV7ZSjtjCwisZPRjJzOWvr2BkPlKWnIEpoeZpgnKIQxstDlS9CEJ', '2019-02-26 22:12:11', '2019-02-26 22:12:11', 'Verified', 2, NULL),
(3, '0.00', '0.000', '0.000', 'user', 'user', 'user', NULL, 'user@gmail.com', NULL, NULL, '$2y$10$RG1NDc4cAA2xwm30qoN79.uJ0PJKX3J1lwDVAAL6DnzZkkZ06Lttq', 'WmRRTQuKacB1JKXG8vY8wGxoYBBsis60jr5wU0dDxVKQi84mCnlDVhYBfWQg', '2019-03-04 02:24:07', '2019-03-04 02:24:07', 'Unverified', 2, NULL),
(4, '0.00', '0.000', '0.000', 'jk', 'ali', 'ali', NULL, 'jk@gmail.com', NULL, NULL, '$2y$10$cG9kJGPTHXNmqeRMKFa8ie50yBrpvHsMZAiUIKQsR0o.AZW4HV6aq', 'qpPK54pZdGTwZTioAIPPlg1vpCsPT1njNuisAe3HiN6ty6H6qhNOKRXMr3xd', '2019-03-12 07:06:17', '2019-03-12 07:06:17', 'Unverified', 2, NULL),
(5, '0.00', '0.000', '0.000', 'Md Shariful Hasan', 'Sohag', 'shsohag9041@gmail.com', NULL, 'shsohag9041@gmail.com', NULL, NULL, '$2y$10$ygeAX6d8CB/aSxqzDe3ixuBv7CB8.9XsP4V3Dt7bSDiO38xXAH2ZW', 'MHDT0YSRWCsiWtXMjsEFRVWvGvsFb8zKizTyVtMzNvKoDoAMKtXbEm0ZfPX8', '2019-04-07 21:47:28', '2019-04-07 21:47:28', 'Verified', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_profiles`
--

CREATE TABLE `user_profiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `balance_bdt` double(18,2) NOT NULL DEFAULT '0.00',
  `balance_cgc` double(18,3) NOT NULL DEFAULT '0.000',
  `balance_usd` double(18,3) NOT NULL DEFAULT '0.000',
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `road` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_day` timestamp NULL DEFAULT NULL,
  `blood_group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifing_id_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifing_address_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_profiles`
--

INSERT INTO `user_profiles` (`id`, `user_name`, `user_id`, `balance_bdt`, `balance_cgc`, `balance_usd`, `country`, `state`, `district`, `city`, `road`, `birth_day`, `blood_group`, `address`, `image`, `verifing_id_image`, `verifing_address_image`, `colamon 1`, `colamon 2`, `colamon 3`, `colamon 4`, `colamon 5`, `created_at`, `updated_at`) VALUES
(1, 'shsohag1995', NULL, 0.00, 0.000, 0.000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-26 21:59:41', '2019-02-26 21:59:41'),
(2, 'Admin', NULL, 0.00, 0.000, 0.000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-02-26 22:12:11', '2019-02-26 22:12:11'),
(3, 'user', NULL, 0.00, 0.000, 0.000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-04 02:24:07', '2019-03-04 02:24:07'),
(4, 'ali', NULL, 0.00, 0.000, 0.000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-12 07:06:16', '2019-03-12 07:06:16'),
(5, 'shsohag9041@gmail.com', NULL, 0.00, 0.000, 0.000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-04-07 21:47:28', '2019-04-07 21:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci,
  `jobs` text COLLATE utf8mb4_unicode_ci,
  `collamon 1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `collamon 2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 3` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 4` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `colamon 5` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `user_id`, `details`, `jobs`, `collamon 1`, `collamon 2`, `colamon 3`, `colamon 4`, `colamon 5`, `created_at`, `updated_at`) VALUES
(1, 'developer', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-03-14 07:14:10', '2019-03-14 07:14:10');

-- --------------------------------------------------------

--
-- Table structure for table `variables`
--

CREATE TABLE `variables` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` int(11) NOT NULL,
  `sp_counter_number` int(11) NOT NULL,
  `ptrshop_id` int(11) DEFAULT NULL,
  `ptr_sp_counter_number` int(11) DEFAULT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`image`, `order_id`, `user_id`, `user_name`, `shop_slug`, `shop_id`, `sp_counter_number`, `ptrshop_id`, `ptr_sp_counter_number`, `product_name`, `product_slug`, `price`, `quantity`, `unit`, `info`, `action`, `created_at`, `updated_at`) VALUES
('public/shop/clothes/clothes-store/product/zuJwKDMQgJKhiG4mTuhAVM72i4597Gx5oY5FqDR4.jpeg', 13, 0, 'shsohag1995', 'clothes-store', 2, 8, NULL, NULL, NULL, '121', '127.05', 1, 'piece', 'S', 'cancled', '2019-03-03 22:55:39', '2019-03-17 01:04:44'),
('public/shop/clothes/clothes-store/product/zuJwKDMQgJKhiG4mTuhAVM72i4597Gx5oY5FqDR4.jpeg', 15, 0, 'Admin', 'clothes-store', 2, 8, NULL, NULL, NULL, '121', '127.05', 1, 'piece', NULL, 'cancled', '2019-03-03 23:08:47', '2019-03-17 01:08:53'),
('public/shop/clothes/clothes-store/product/4amdHabmrcUOgja7pwpXHTI3rqExImaZDx7tD9lq.jpeg', 15, 0, 'Admin', 'clothes-store', 2, 9, NULL, NULL, NULL, '121', '12.6', 1, 'piece', NULL, 'cancled', '2019-03-03 23:12:58', '2019-03-17 01:08:50'),
('public/shop/clothes/clothes-store/product/4amdHabmrcUOgja7pwpXHTI3rqExImaZDx7tD9lq.jpeg', 13, 0, 'user', 'clothes-store', 2, 9, NULL, NULL, NULL, '121', '12.6', 1, 'piece', 's', 'cancled', '2019-03-04 02:25:51', '2019-03-17 01:04:49'),
('public/shop/clothes/clothes-store/product/zuJwKDMQgJKhiG4mTuhAVM72i4597Gx5oY5FqDR4.jpeg', 13, 0, 'user', 'clothes-store', 2, 8, NULL, NULL, NULL, '121', '127.05', 1, 'piece', 'M', 'cancled', '2019-03-04 09:56:37', '2019-03-17 01:04:44'),
('public/shop/baby/baby-toy-kids-gift-store/product/6ry1xThjkwzPvAozTgFltVCpy9VxE8FIS8YvsBLk.png', 18, 0, 'Admin', 'baby-toy-kids-gift-store', 4, 1, NULL, NULL, NULL, 'sfcsd', '0', 10, 'piece', NULL, 'pending', '2019-03-07 23:30:09', '2019-03-09 02:42:55'),
('public/shop/public/rangpur-public-shop/product/6A1Xeu7TOmhW2QgH0BNwXPNbxxCQAQEbK1liXOcN.png', 57, 0, 'user', 'rangpur-public-shop', 1, 7, NULL, NULL, NULL, 'cxbc-7', '127.05', 10, NULL, NULL, 'cancled', '2019-03-08 02:46:21', '2019-04-07 22:03:52'),
('public/shop/baby/baby-toy-kids-gift-store/product/6ry1xThjkwzPvAozTgFltVCpy9VxE8FIS8YvsBLk.png', NULL, 0, 'user', 'baby-toy-kids-gift-store', 4, 1, NULL, NULL, NULL, 'sfcsd', '0', 10, 'piece', NULL, 'wish', '2019-03-08 02:50:54', '2019-03-08 02:50:54'),
('public/shop/public/rangpur-public-shop/product/wPi90alrzdpEWHsjqvfZ85zZGS3d5dhbF3agkMFH.jpeg', 55, 0, 'user', 'rangpur-public-shop', 1, 4, NULL, NULL, NULL, '121-4', '127.05', 1, NULL, NULL, 'cancled', '2019-03-08 07:50:43', '2019-04-07 22:04:03'),
('public/shop/baby/baby-toy-kids-gift-store/product/6ry1xThjkwzPvAozTgFltVCpy9VxE8FIS8YvsBLk.png', 19, 0, 'Admin', 'baby-toy-kids-gift-store', 4, 1, NULL, NULL, NULL, 'sfcsd', '0', 1, 'piece', NULL, 'pending', '2019-03-09 02:50:02', '2019-03-09 02:50:19'),
('public/shop/bakery/bakery-shop/product/Mn7LnYj5f95E7cvJzcse1co3PFPW5oJSCSkNPAS6.jpeg', 21, 0, 'Admin', 'bakery-shop', 6, 5, NULL, NULL, NULL, 'qqewqwq', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-09 12:10:04', '2019-03-09 12:10:37'),
('public/shop/bakery/bakery-shop/product/KEHBsQTiXSHa9VnP6aKpholOIVApEP22X6oTC49U.jpeg', 21, 0, 'Admin', 'bakery-shop', 6, 4, NULL, NULL, NULL, 'were', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-09 12:10:08', '2019-03-09 12:10:37'),
('public/shop/bakery/bakery-shop/product/2cgLZv2ztUtqyvjBfKzOZTUnlQ0pjZ9HVtnnrGXJ.jpeg', 21, 0, 'Admin', 'bakery-shop', 6, 3, NULL, NULL, NULL, 'sadfds', '12962.25', 1, 'piece', NULL, 'pending', '2019-03-09 12:10:11', '2019-03-09 12:10:37'),
('public/shop/bakery/bakery-shop/product/KEHBsQTiXSHa9VnP6aKpholOIVApEP22X6oTC49U.jpeg', 22, 0, 'Admin', 'bakery-shop', 6, 4, NULL, NULL, NULL, 'were', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-09 12:26:46', '2019-03-09 12:27:15'),
('public/shop/bakery/bakery-shop/product/2cgLZv2ztUtqyvjBfKzOZTUnlQ0pjZ9HVtnnrGXJ.jpeg', 22, 0, 'Admin', 'bakery-shop', 6, 3, NULL, NULL, NULL, 'sadfds', '12962.25', 1, 'piece', NULL, 'pending', '2019-03-09 12:26:49', '2019-03-09 12:27:15'),
('public/shop/bakery/bakery-shop/product/D02c1rAgKQMfznv37VttdNsoOZDjv7n5mxNeeVUo.jpeg', 22, 0, 'Admin', 'bakery-shop', 6, 2, NULL, NULL, NULL, 'sadfsa', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-09 12:26:52', '2019-03-09 12:27:15'),
('public/shop/public/rangpur-public-shop/product/6A1Xeu7TOmhW2QgH0BNwXPNbxxCQAQEbK1liXOcN.png', 23, 0, 'ali', 'rangpur-public-shop', 1, 7, NULL, NULL, NULL, 'cxbc-7', '127.05', 1, NULL, NULL, 'cancled', '2019-03-12 07:11:38', '2019-04-07 22:04:11'),
('public/shop/clothes/clothes-store/product/jYMGAcbJAvc4BxzUMSuMMrpNZLmWm1MAooAsuCKb.jpeg', 24, 0, 'Admin', 'clothes-store', 2, 16, NULL, NULL, NULL, '1234', '0', 1, 'piece', NULL, 'cancled', '2019-03-12 07:30:50', '2019-03-17 01:07:34'),
('public/shop/clothes/clothes-store/product/r8MrrAj6qa8vLWhAc8aMpmqkGcHjjgojVwc1OIOv.jpeg', 24, 0, 'Admin', 'clothes-store', 2, 15, NULL, NULL, NULL, 'wrweq', '1295.7', 1, 'piece', NULL, 'cancled', '2019-03-12 07:30:53', '2019-03-17 01:07:31'),
('public/shop/clothes/clothes-store/product/4Ec7VmgHCLB5D4JaMyMcAanDESOJMrLsw7Y6Cvsk.jpeg', 24, 0, 'Admin', 'clothes-store', 2, 14, NULL, NULL, NULL, 'wfdwqe', '1295.7', 1, 'piece', NULL, 'cancled', '2019-03-12 10:00:50', '2019-03-17 01:07:29'),
('public/shop/books/books-shop/product/N5rRjPsPQOEVG2sutnH8p1i3Q3M1CnwMKhYjAxxO.jpeg', 26, 0, 'Admin', 'books-shop', 7, 3, NULL, NULL, NULL, 'qwe', '1295.7', 1, 'piece', NULL, 'cancled', '2019-03-14 04:52:27', '2019-03-17 07:05:53'),
('public/shop/bakery/bakery-shop/product/KEHBsQTiXSHa9VnP6aKpholOIVApEP22X6oTC49U.jpeg', 44, 0, 'Admin', 'bakery-shop', 6, 4, NULL, NULL, 'were', 'were', '1295.7', 10, 'piece', NULL, 'pending', '2019-03-14 07:07:39', '2019-03-17 11:39:33'),
('public/shop/baby/baby-toy-kids-gift-store/product/mVeYfRtQDQXp21iwNWW5jtuKaSK2waLB65VDD4vP.jpeg', 44, 0, 'Admin', 'baby-toy-kids-gift-store', 4, 6, NULL, NULL, NULL, 'wqerwe', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-14 08:08:48', '2019-03-17 11:39:33'),
('public/shop/clothes/clothes-store/product/UsxEZiQHPu3NI5NAxV0rWqA21j9AxOBAJ1l6T6LP.jpeg', 25, 0, 'user', 'clothes-store', 2, 18, NULL, NULL, NULL, 'qeqweqw', '1273.65', 1, 'piece', NULL, 'cancled', '2019-03-15 05:21:58', '2019-03-17 01:07:09'),
('public/shop/clothes/clothes-store/product/02a6Yqx7RGrP6TzFAuZ1Cfhb87cSsOD3bzQev19f.jpeg', 25, 0, 'user', 'clothes-store', 2, 12, NULL, NULL, NULL, 'Tshart', '1295.7', 10, 'piece', 's', 'cancled', '2019-03-15 05:23:32', '2019-03-17 01:07:02'),
('public/shop/bakery/bakery-shop/product/D02c1rAgKQMfznv37VttdNsoOZDjv7n5mxNeeVUo.jpeg', 43, 2, 'Admin', 'bakery-shop', 6, 2, NULL, NULL, 'sadfsa', 'sadfsa', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-16 11:12:14', '2019-03-17 10:45:18'),
('public/shop/books/books-shop/product/9esnEe5DudDE2UQr2WWiwp9v61yX5c7KBaVV2oCF.jpeg', 26, 2, 'Admin', 'books-shop', 7, 4, NULL, NULL, 'qweqw', 'qweqw', '1295.7', 1, 'piece', NULL, 'cancled', '2019-03-17 07:02:04', '2019-03-17 07:05:51'),
('public/shop/books/books-shop/product/2dc2HwiIwBZpifElwde9xfMMSYvk6u0hJbE7Hfc5.jpeg', 26, 2, 'Admin', 'books-shop', 7, 1, NULL, NULL, 'gvdfg', 'gvdfg', '1295.7', 1, 'piece', NULL, 'cancled', '2019-03-17 07:03:18', '2019-03-17 07:05:34'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 27, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-17 10:00:34', '2019-03-17 10:01:07'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 28, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-17 10:02:40', '2019-03-17 10:02:56'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 29, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-17 10:08:10', '2019-03-17 10:08:29'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 30, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'cancled', '2019-03-17 10:15:22', '2019-03-17 19:55:36'),
('public/shop/Electronice/electronice-store/product/1BZx5F7VRBAIcJZSt0cdZ8DWPaqmmc5UwTcmlLmt.jpeg', 40, 2, 'Admin', 'electronice-store', 10, 4, NULL, NULL, 'hnfgvb', 'hnfgvb', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-17 10:18:32', '2019-03-17 10:40:20'),
('public/shop/Electronice/electronice-store/product/szkc9FBIEUe1x3SMuXDOGfcfLHKamHlVTkt20hb3.jpeg', 41, 2, 'Admin', 'electronice-store', 10, 3, NULL, NULL, 'ewrtfe', 'ewrtfe', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-17 10:18:35', '2019-03-17 10:40:59'),
('public/shop/Electronice/electronice-store/product/Pa96d7a9PqVmKwkywplQoZ9VpNkj0pwIjo7edom4.jpeg', 42, 2, 'Admin', 'electronice-store', 10, 2, NULL, NULL, 'sadf', 'sadf', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-17 10:43:59', '2019-03-17 10:44:15'),
('public/shop/Electronice/electronice-store/product/szkc9FBIEUe1x3SMuXDOGfcfLHKamHlVTkt20hb3.jpeg', 49, 2, 'Admin', 'electronice-store', 10, 3, NULL, NULL, 'ewrtfe', 'ewrtfe', '1295.7', 1, 'piece', NULL, 'packed', '2019-03-17 11:49:10', '2019-03-17 21:44:27'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 45, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-17 20:44:08', '2019-03-17 20:44:34'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 46, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'packed', '2019-03-17 20:49:32', '2019-03-17 20:57:51'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 47, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-17 21:07:38', '2019-03-17 21:07:55'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 48, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'packed', '2019-03-17 21:10:53', '2019-03-17 21:34:12'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 49, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-17 21:40:51', '2019-03-17 21:42:07'),
('public/shop/Electrical/electrical-store/product/0udtMSQ4nnztdR1eCRx7aYboxytq94trxpYcrFRw.jpeg', 49, 2, 'Admin', 'electrical-store', 9, 9, NULL, NULL, 'erwtewrt', 'erwtewrt', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-17 21:41:03', '2019-03-17 21:42:07'),
('public/shop/baby/baby-toy-kids-gift-store/product/tcSF6rWvjCjXr331utksN6CC6hkQAkxY2YtJ5eQ9.jpeg', 49, 2, 'Admin', 'baby-toy-kids-gift-store', 4, 7, NULL, NULL, 'qeq', 'qeq', '1292.55', 1, 'piece', NULL, 'pending', '2019-03-17 21:41:16', '2019-03-17 21:42:07'),
('public/shop/Electronice/electronice-store/product/Pa96d7a9PqVmKwkywplQoZ9VpNkj0pwIjo7edom4.jpeg', 50, 2, 'Admin', 'electronice-store', 10, 2, NULL, NULL, 'sadf', 'sadf', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-17 21:49:14', '2019-03-17 21:52:09'),
('public/shop/Electronice/electronice-store/product/szkc9FBIEUe1x3SMuXDOGfcfLHKamHlVTkt20hb3.jpeg', 50, 2, 'Admin', 'electronice-store', 10, 3, NULL, NULL, 'ewrtfe', 'ewrtfe', '1295.7', 1, 'piece', NULL, 'pending', '2019-03-17 21:51:08', '2019-03-17 21:52:09'),
('public/shop/Electrical/electrical-store/product/k8VjTzOTrpMLjxnqpoifoXznpMNU9pmvVqLb5yff.jpeg', 50, 2, 'Admin', 'electrical-store', 9, 7, NULL, NULL, 'erwtr', 'erwtr', '0', 1, 'piece', NULL, 'pending', '2019-03-17 21:51:20', '2019-03-17 21:52:09'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 50, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-17 21:51:29', '2019-03-17 21:52:09'),
('public/shop/bakery/bakery-shop/product/KEHBsQTiXSHa9VnP6aKpholOIVApEP22X6oTC49U.jpeg', 50, 2, 'Admin', 'bakery-shop', 6, 4, NULL, NULL, 'were', 'were', '1295.7', 1, 'piece', NULL, 'packed', '2019-03-17 21:51:38', '2019-03-17 21:52:51'),
('public/shop/bakery/bakery-shop/product/2cgLZv2ztUtqyvjBfKzOZTUnlQ0pjZ9HVtnnrGXJ.jpeg', 50, 2, 'Admin', 'bakery-shop', 6, 3, NULL, NULL, 'sadfds', 'sadfds', '12962.25', 1, 'piece', NULL, 'packed', '2019-03-17 21:51:41', '2019-03-17 21:52:47'),
('public/shop/baby/baby-toy-kids-gift-store/product/6ry1xThjkwzPvAozTgFltVCpy9VxE8FIS8YvsBLk.png', 51, 2, 'Admin', 'baby-toy-kids-gift-store', 4, 1, NULL, NULL, 'sfcsd', 'sfcsd', '10.5', 10, 'piece', NULL, 'pending', '2019-03-18 03:51:41', '2019-03-18 04:12:44'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 51, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-18 04:11:46', '2019-03-18 04:12:44'),
('public/shop/books/books-shop/product/9esnEe5DudDE2UQr2WWiwp9v61yX5c7KBaVV2oCF.jpeg', 51, 2, 'Admin', 'books-shop', 7, 4, NULL, NULL, 'qweqw', 'qweqw', '1295.7', 1, 'piece', NULL, 'cancled', '2019-03-18 04:12:11', '2019-03-18 04:14:53'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 53, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'packed', '2019-03-18 07:01:08', '2019-03-21 01:03:27'),
('public/shop/Electrical/electrical-store/product/0udtMSQ4nnztdR1eCRx7aYboxytq94trxpYcrFRw.jpeg', 53, 2, 'Admin', 'electrical-store', 9, 9, NULL, NULL, 'erwtewrt', 'erwtewrt', '1295.7', 1, 'piece', NULL, 'cancled', '2019-03-18 07:01:27', '2019-03-18 07:02:42'),
('public/shop/books/books-shop/product/2dc2HwiIwBZpifElwde9xfMMSYvk6u0hJbE7Hfc5.jpeg', 56, 3, 'user', 'books-shop', 7, 1, NULL, NULL, 'gvdfg', 'gvdfg', '1295.7', 1, 'piece', NULL, 'packed', '2019-03-18 07:06:01', '2019-03-18 07:16:26'),
('public/shop/books/books-shop/product/9esnEe5DudDE2UQr2WWiwp9v61yX5c7KBaVV2oCF.jpeg', 54, 3, 'user', 'books-shop', 7, 4, NULL, NULL, 'qweqw', 'qweqw', '1295.7', 2, 'piece', NULL, 'pending', '2019-03-18 07:08:41', '2019-03-18 07:09:40'),
('public/shop/books/books-shop/product/efIT6LnxRGIBtccMw4B6sIMcCu86BqoQZVXt2CzY.png', NULL, 2, 'Admin', 'books-shop', 7, 7, NULL, NULL, 'sdfsdfsdf', 'sdfsdfsdf', '129.15', 1, 'piece', NULL, 'wish', '2019-03-18 07:17:33', '2019-03-25 22:19:37'),
('public/shop/public/rangpur-public-shop/product/VU58Rrawg1lGyZI9wVVyAL9B5pOdIpIU2e9zBos3.jpeg', NULL, 3, 'user', 'rangpur-public-shop', 1, 9, NULL, NULL, 'cloythew', 'cloythew-9', '268.8', 10, NULL, NULL, 'wish', '2019-03-18 08:28:57', '2019-03-18 08:28:57'),
('public/shop/baby/baby-toy-kids-gift-store/product/UJSX3Ag4AleoDXNn2vTT4pZZ1cZLcnL5yEi7iVNl.jpeg', NULL, 2, 'Admin', 'baby-toy-kids-gift-store', 4, 3, NULL, NULL, 'sadgsad', 'sadgsad', '0', 1, 'piece', NULL, 'wish', '2019-03-21 01:35:32', '2019-03-21 01:35:32'),
('public/shop/public/kushtia-sadar-public-shop/product/rVTEVFsarf776Si6Hh0cktK5CEWq41BgTMDI9Qja.jpeg', 58, 2, 'Admin', 'kushtia-sadar-public-shop', 5, 1, NULL, NULL, NULL, 'fsdf-1', '0', 1, NULL, NULL, 'pending', '2019-03-21 10:14:51', '2019-03-21 10:16:15'),
('public/shop/public/rangpur-public-shop/product/4MYkj2MUHKXsgHZcmkyx0zvpUd0T5o1M53GYMgDm.jpeg', 59, 3, 'user', 'rangpur-public-shop', 1, 4, NULL, NULL, NULL, '121', '127.05', 1, 'piece', NULL, 'pending', '2019-03-21 10:22:40', '2019-03-21 10:22:55'),
('public/shop/hotel/hotel/product/OCBvSnOJEKZD2iTxBnWrwJ2IjnSnbVXBsQwFr8iH.jpeg', 64, 2, 'Admin', 'hotel', 15, 4, NULL, NULL, 'sdaf', 'sdaf', '0', 1, NULL, NULL, 'pending', '2019-03-22 05:13:42', '2019-03-22 05:13:42'),
('public/shop/hotel/hotel/product/OCBvSnOJEKZD2iTxBnWrwJ2IjnSnbVXBsQwFr8iH.jpeg', 65, 2, 'Admin', 'hotel', 15, 4, NULL, NULL, 'sdaf', 'sdaf', '0', 1, NULL, NULL, 'pending', '2019-03-22 05:19:36', '2019-03-22 05:19:36'),
('public/shop/hotel/hotel/product/dusPpO613TdUpfEjyXpWP3saasVuMZ5tA0luvIIZ.jpeg', 66, 2, 'Admin', 'hotel', 15, 3, NULL, NULL, 'sadf', 'sadf', '0', 1, NULL, NULL, 'pending', '2019-03-22 05:24:23', '2019-03-22 05:24:23'),
('public/shop/hotel/hotel/product/dusPpO613TdUpfEjyXpWP3saasVuMZ5tA0luvIIZ.jpeg', 67, 2, 'Admin', 'hotel', 15, 3, NULL, NULL, 'sadf', 'sadf', '0', 1, NULL, NULL, 'pending', '2019-03-22 05:25:12', '2019-03-22 05:25:12'),
('public/shop/hotel/hotel/product/dusPpO613TdUpfEjyXpWP3saasVuMZ5tA0luvIIZ.jpeg', 68, 2, 'Admin', 'hotel', 15, 3, NULL, NULL, 'sadf', 'sadf', '0', 1, NULL, NULL, 'pending', '2019-03-22 05:26:03', '2019-03-22 05:26:03'),
('public/shop/hotel/hotel/product/dusPpO613TdUpfEjyXpWP3saasVuMZ5tA0luvIIZ.jpeg', 69, 2, 'Admin', 'hotel', 15, 3, NULL, NULL, 'sadf', 'sadf', '0', 1, NULL, NULL, 'pending', '2019-03-22 05:26:35', '2019-03-22 05:26:35'),
('public/shop/hotel/hotel/product/dusPpO613TdUpfEjyXpWP3saasVuMZ5tA0luvIIZ.jpeg', 70, 2, 'Admin', 'hotel', 15, 3, NULL, NULL, 'sadf', 'sadf', '0', 1, NULL, NULL, 'pending', '2019-03-22 05:27:13', '2019-03-22 05:27:13'),
('public/shop/hotel/hotel/product/dusPpO613TdUpfEjyXpWP3saasVuMZ5tA0luvIIZ.jpeg', 71, 2, 'Admin', 'hotel', 15, 3, NULL, NULL, 'sadf', 'sadf', '0', 1, NULL, NULL, 'cancled', '2019-03-22 05:29:42', '2019-03-22 10:03:25'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', 72, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'pending', '2019-03-22 09:23:21', '2019-03-22 09:23:46'),
('public/shop/public/rangpur-public-shop/product/dwlDhZt5uHv8Tbnc7U09aMV7DPh7qZsHr8wVsrXE.jpeg', 73, 2, 'Admin', 'rangpur-public-shop', 1, 9, NULL, NULL, NULL, 'cloythew-9', '268.8', 1, NULL, NULL, 'pending', '2019-03-22 22:40:28', '2019-03-22 22:41:35'),
('public/shop/public/rangpur-public-shop/product/6A1Xeu7TOmhW2QgH0BNwXPNbxxCQAQEbK1liXOcN.png', 74, 3, 'user', 'rangpur-public-shop', 1, 7, NULL, NULL, NULL, 'cxbc-7', '127.05', 1, NULL, NULL, 'cancled', '2019-03-25 09:34:12', '2019-04-07 22:03:39'),
('public/shop/public/rangpur-public-shop/product/4MYkj2MUHKXsgHZcmkyx0zvpUd0T5o1M53GYMgDm.jpeg', 75, 3, 'user', 'rangpur-public-shop', 1, 4, NULL, NULL, NULL, '121', '127.05', 1, 'piece', NULL, 'cancled', '2019-03-25 22:09:31', '2019-04-07 22:03:26'),
('public/shop/clothes/clothes-store/product/uqaRjH8whk5YNrptHtb7j3W9LBoT8juFnYFobjM6.jpeg', NULL, 2, 'Admin', 'clothes-store', 2, 22, NULL, NULL, 'tshart', 'tshart', '127.05', 1, 'piece', NULL, 'wish', '2019-03-25 22:26:14', '2019-04-05 07:08:11'),
('public/shop/Electrical/electrical-store/product/k8VjTzOTrpMLjxnqpoifoXznpMNU9pmvVqLb5yff.jpeg', NULL, 2, 'Admin', 'electrical-store', 9, 7, NULL, NULL, 'erwtr', 'erwtr', '0', 1, 'piece', NULL, 'wish', '2019-04-05 09:17:10', '2019-04-05 09:17:10'),
('public/shop/Electrical/electrical-store/product/36bOF0d0MIcfUocLvaITRt1zVjAYNsMIJP0Xz3Ip.jpeg', NULL, 2, 'Admin', 'electrical-store', 9, 3, NULL, NULL, 'sadsa', 'sadsa', '1292.55', 1, 'piece', NULL, 'wish', '2019-04-05 09:21:15', '2019-04-05 09:21:15'),
('public/shop/books/books-shop/product/2dc2HwiIwBZpifElwde9xfMMSYvk6u0hJbE7Hfc5.jpeg', NULL, 5, 'shsohag9041@gmail.com', 'books-shop', 7, 1, NULL, NULL, 'gvdfg', 'gvdfg', '1295.7', 1, 'piece', NULL, 'wish', '2019-04-11 03:41:38', '2019-04-11 03:41:38'),
('public/shop/books/books-shop/product/efIT6LnxRGIBtccMw4B6sIMcCu86BqoQZVXt2CzY.png', NULL, 5, 'shsohag9041@gmail.com', 'books-shop', 7, 7, NULL, NULL, 'sdfsdfsdf', 'sdfsdfsdf', '129.15', 1, 'piece', NULL, 'wish', '2019-04-11 03:41:42', '2019-04-11 03:41:42'),
('public/shop/books/books-shop/product/efIT6LnxRGIBtccMw4B6sIMcCu86BqoQZVXt2CzY.png', NULL, 1, 'shsohag1995', 'books-shop', 7, 7, NULL, NULL, 'sdfsdfsdf', 'sdfsdfsdf', '129.15', 1, 'piece', NULL, 'wish', '2019-04-13 10:52:55', '2019-04-13 10:52:55'),
('public/shop/books/books-shop/product/2dc2HwiIwBZpifElwde9xfMMSYvk6u0hJbE7Hfc5.jpeg', NULL, 1, 'shsohag1995', 'books-shop', 7, 1, NULL, NULL, 'gvdfg', 'gvdfg', '1295.7', 1, 'piece', NULL, 'wish', '2019-04-13 11:54:30', '2019-04-13 11:54:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_users`
--
ALTER TABLE `order_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `private_products`
--
ALTER TABLE `private_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_product_clothes_images`
--
ALTER TABLE `private_product_clothes_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_product_hotel_bookings`
--
ALTER TABLE `private_product_hotel_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `private_product_infos`
--
ALTER TABLE `private_product_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptrproducts`
--
ALTER TABLE `ptrproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptrproduct_infos`
--
ALTER TABLE `ptrproduct_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ptrshops`
--
ALTER TABLE `ptrshops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ptrshops_name_unique` (`name`);

--
-- Indexes for table `ptrshop_comments`
--
ALTER TABLE `ptrshop_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shops_name_unique` (`name`);

--
-- Indexes for table `shop_addresses`
--
ALTER TABLE `shop_addresses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_admins`
--
ALTER TABLE `shop_admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_comments`
--
ALTER TABLE `shop_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_complains`
--
ALTER TABLE `shop_complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_contacts`
--
ALTER TABLE `shop_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_notices`
--
ALTER TABLE `shop_notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shop_types`
--
ALTER TABLE `shop_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_user_name_unique` (`user_name`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- Indexes for table `user_profiles`
--
ALTER TABLE `user_profiles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_profiles_user_name_unique` (`user_name`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variables`
--
ALTER TABLE `variables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `order_users`
--
ALTER TABLE `order_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `private_products`
--
ALTER TABLE `private_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `private_product_clothes_images`
--
ALTER TABLE `private_product_clothes_images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_product_hotel_bookings`
--
ALTER TABLE `private_product_hotel_bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `private_product_infos`
--
ALTER TABLE `private_product_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptrproducts`
--
ALTER TABLE `ptrproducts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptrproduct_infos`
--
ALTER TABLE `ptrproduct_infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptrshops`
--
ALTER TABLE `ptrshops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ptrshop_comments`
--
ALTER TABLE `ptrshop_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shop_addresses`
--
ALTER TABLE `shop_addresses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shop_admins`
--
ALTER TABLE `shop_admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shop_comments`
--
ALTER TABLE `shop_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `shop_complains`
--
ALTER TABLE `shop_complains`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_contacts`
--
ALTER TABLE `shop_contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shop_notices`
--
ALTER TABLE `shop_notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shop_types`
--
ALTER TABLE `shop_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_profiles`
--
ALTER TABLE `user_profiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `variables`
--
ALTER TABLE `variables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
