-- phpMyAdmin SQL Dump
-- version 5.1.1deb5ubuntu1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2022 at 10:39 AM
-- Server version: 8.0.31-0ubuntu0.22.04.1
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `premiumhomes`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `mission` text COLLATE utf8mb4_unicode_ci,
  `vision` text COLLATE utf8mb4_unicode_ci,
  `values` text COLLATE utf8mb4_unicode_ci,
  `image_one` text COLLATE utf8mb4_unicode_ci,
  `image_two` text COLLATE utf8mb4_unicode_ci,
  `image_three` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `accountbalance`
--

CREATE TABLE `accountbalance` (
  `accountBalID` int NOT NULL,
  `WorkingAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FloatAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UtilityAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ChargesPaidAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrganizationSettlementAccount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BOCompletedTime` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:16:07', '2022-11-16 03:16:07'),
(2, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:19:58', '2022-11-16 03:19:58'),
(3, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:21:10', '2022-11-16 03:21:10'),
(4, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:21:18', '2022-11-16 03:21:18'),
(5, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:22:16', '2022-11-16 03:22:16'),
(6, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:23:08', '2022-11-16 03:23:08'),
(7, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:23:47', '2022-11-16 03:23:47'),
(8, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:24:38', '2022-11-16 03:24:38'),
(9, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:25:00', '2022-11-16 03:25:00'),
(10, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:25:24', '2022-11-16 03:25:24'),
(11, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:25:47', '2022-11-16 03:25:47'),
(12, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:26:14', '2022-11-16 03:26:14'),
(13, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:26:37', '2022-11-16 03:26:37'),
(14, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:27:45', '2022-11-16 03:27:45'),
(15, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:28:44', '2022-11-16 03:28:44'),
(16, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:29:30', '2022-11-16 03:29:30'),
(17, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:29:55', '2022-11-16 03:29:55'),
(18, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:29:58', '2022-11-16 03:29:58'),
(19, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:42:30', '2022-11-16 03:42:30'),
(20, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:42:33', '2022-11-16 03:42:33'),
(21, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:42:39', '2022-11-16 03:42:39'),
(22, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:42:43', '2022-11-16 03:42:43'),
(23, 'default', 'Accessed Entrol Users Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:42:45', '2022-11-16 03:42:45'),
(24, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:42:51', '2022-11-16 03:42:51'),
(25, 'default', 'Accessed The All Privacy Privacy Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:43:01', '2022-11-16 03:43:01'),
(26, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:45:00', '2022-11-16 03:45:00'),
(27, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:45:30', '2022-11-16 03:45:30'),
(28, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:46:10', '2022-11-16 03:46:10'),
(29, 'default', 'User Made an update on the logo and the favicons page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:46:19', '2022-11-16 03:46:19'),
(30, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:46:20', '2022-11-16 03:46:20'),
(31, 'default', 'Access All users Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:46:35', '2022-11-16 03:46:35'),
(32, 'default', 'Edited User ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:46:38', '2022-11-16 03:46:38'),
(33, 'default', 'Evoked an edit user for user with ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:47:54', '2022-11-16 03:47:54'),
(34, 'default', 'Edited User ID number 2 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:47:55', '2022-11-16 03:47:55'),
(35, 'default', 'Accessed All Admins Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:48:05', '2022-11-16 03:48:05'),
(36, 'default', 'Edited User ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:48:07', '2022-11-16 03:48:07'),
(37, 'default', 'Evoked an edit user for user with ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:48:45', '2022-11-16 03:48:45'),
(38, 'default', 'Edited User ID number 1 ', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:48:45', '2022-11-16 03:48:45'),
(39, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:49:20', '2022-11-16 03:49:20'),
(40, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:49:35', '2022-11-16 03:49:35'),
(41, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:49:41', '2022-11-16 03:49:41'),
(42, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:49:44', '2022-11-16 03:49:44'),
(43, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 03:49:51', '2022-11-16 03:49:51'),
(44, 'default', 'User Accessed Site Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 04:46:57', '2022-11-16 04:46:57'),
(45, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 04:47:04', '2022-11-16 04:47:04'),
(46, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 04:47:10', '2022-11-16 04:47:10'),
(47, 'default', 'Evoked an update Social Media  Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 04:47:22', '2022-11-16 04:47:22'),
(48, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 04:47:25', '2022-11-16 04:47:25'),
(49, 'default', 'Evoked an update Social Media  Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:22:55', '2022-11-16 05:22:55'),
(50, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:22:58', '2022-11-16 05:22:58'),
(51, 'default', 'Evoked an update Social Media  Request', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:29:43', '2022-11-16 05:29:43'),
(52, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:29:46', '2022-11-16 05:29:46'),
(53, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:29:56', '2022-11-16 05:29:56'),
(54, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:29:58', '2022-11-16 05:29:58'),
(55, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:31:12', '2022-11-16 05:31:12'),
(56, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:31:22', '2022-11-16 05:31:22'),
(57, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:31:48', '2022-11-16 05:31:48'),
(58, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:32:24', '2022-11-16 05:32:24'),
(59, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:32:27', '2022-11-16 05:32:27'),
(60, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:36:31', '2022-11-16 05:36:31'),
(61, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:36:34', '2022-11-16 05:36:34'),
(62, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:37:09', '2022-11-16 05:37:09'),
(63, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:09', '2022-11-16 05:43:09'),
(64, 'default', 'User Accessed Logo & Favicon Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:12', '2022-11-16 05:43:12'),
(65, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:26', '2022-11-16 05:43:26'),
(66, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:31', '2022-11-16 05:43:31'),
(67, 'default', 'Accessed All Banners', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:35', '2022-11-16 05:43:35'),
(68, 'default', 'Accessed The All testimonials page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:38', '2022-11-16 05:43:38'),
(69, 'default', 'Accessed Add Testimonial Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:41', '2022-11-16 05:43:41'),
(70, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:46', '2022-11-16 05:43:46'),
(71, 'default', 'Accessed All Sliders Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:43:49', '2022-11-16 05:43:49'),
(72, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:44:23', '2022-11-16 05:44:23'),
(73, 'default', 'Accessed All Categories', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-16 05:44:26', '2022-11-16 05:44:26'),
(74, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-17 03:56:58', '2022-11-17 03:56:58'),
(75, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-17 04:06:34', '2022-11-17 04:06:34'),
(76, 'default', 'User Accessed Social Media Settings Page', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-17 04:12:24', '2022-11-17 04:12:24'),
(77, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-17 04:12:28', '2022-11-17 04:12:28'),
(78, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-17 04:14:10', '2022-11-17 04:14:10'),
(79, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-27 05:27:28', '2022-11-27 05:27:28'),
(80, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-27 05:30:11', '2022-11-27 05:30:11'),
(81, 'default', 'User Accessed the Admins Dashboard', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-11-27 05:31:25', '2022-11-27 05:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `b2b_api_response`
--

CREATE TABLE `b2b_api_response` (
  `b2bTransactionID` int NOT NULL,
  `TransactionID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InitiatorAccountCurrentBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitAccountCurrentBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyAffectedAccountBalance` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransCompletedTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyCharges` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReceiverPartyPublicName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Currency` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `b2c_api_response`
--

CREATE TABLE `b2c_api_response` (
  `b2bID` int NOT NULL,
  `TransactionReceipt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionAmount` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CWorkingAccountAvailableFunds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CUtilityAccountAvailableFunds` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionCompletedDateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReceiverPartyPublicName` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CChargesPaidAccountAvailableFunds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `B2CRecipientIsRegisteredCustomer` varchar(2) COLLATE utf8mb4_unicode_ci NOT NULL,
  `UpdatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cats`
--

CREATE TABLE `cats` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cats`
--

INSERT INTO `cats` (`id`, `title`, `icon`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Education', 'fas fa-graduation-cap', 'info', NULL, NULL),
(2, 'Health & Medical', 'fas fa-user-md', 'success', NULL, NULL),
(3, 'Transportation', 'fas fa-car', 'danger', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `post_id` int NOT NULL,
  `parent_id` int UNSIGNED NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` int UNSIGNED NOT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `copyright`
--

CREATE TABLE `copyright` (
  `id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `copyrights`
--

CREATE TABLE `copyrights` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Copyright Statement',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `email_settings`
--

CREATE TABLE `email_settings` (
  `id` int UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `port` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encryption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `smtp_status` tinyint NOT NULL DEFAULT '0',
  `email_body` blob,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `filename` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `filename`, `user_id`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 's-6.jpg', 2, '1', '2022-12-12 11:35:55', '2022-12-12 11:35:55'),
(2, 's-5.jpg', 2, '1', '2022-12-12 11:35:56', '2022-12-12 11:35:56'),
(3, 's-4.jpg', 2, '1', '2022-12-12 11:35:56', '2022-12-12 11:35:56'),
(4, 's-3.jpg', 2, '1', '2022-12-12 11:35:56', '2022-12-12 11:35:56'),
(5, 's-2.jpg', 2, '1', '2022-12-12 11:35:57', '2022-12-12 11:35:57'),
(6, 's-1.jpg', 2, '1', '2022-12-12 11:35:57', '2022-12-12 11:35:57'),
(7, 'p-1.jpg', 2, '1', '2022-12-12 12:05:38', '2022-12-12 12:05:38'),
(8, '1671023319.jpg', 2, '1', '2022-12-12 12:05:38', '2022-12-12 12:05:38'),
(12, 'b-1.jpg', 2, '2', '2022-12-13 10:01:26', '2022-12-13 10:01:26'),
(13, 'b-2.jpg', 2, '2', '2022-12-13 10:01:26', '2022-12-13 10:01:26'),
(14, 'b-3.jpg', 2, '2', '2022-12-13 10:01:26', '2022-12-13 10:01:26'),
(15, 'b-4.jpg', 2, '2', '2022-12-13 10:01:26', '2022-12-13 10:01:26'),
(16, 'b-5.jpg', 2, '2', '2022-12-13 10:01:27', '2022-12-13 10:01:27'),
(17, 'b-6.jpg', 2, '2', '2022-12-13 10:01:27', '2022-12-13 10:01:27'),
(18, 'b-7.jpg', 2, '2', '2022-12-13 10:01:27', '2022-12-13 10:01:27'),
(19, 'b-8.jpg', 2, '2', '2022-12-13 10:01:28', '2022-12-13 10:01:28'),
(20, 'b-9.jpg', 2, '2', '2022-12-13 10:01:28', '2022-12-13 10:01:28'),
(21, 'b-10.jpg', 2, '2', '2022-12-13 10:01:28', '2022-12-13 10:01:28'),
(22, 'b-11.jpg', 2, '2', '2022-12-13 10:01:28', '2022-12-13 10:01:28'),
(23, 'b-12.jpg', 2, '2', '2022-12-13 10:01:28', '2022-12-13 10:01:28'),
(24, 'p-1.jpg', 2, '3', '2022-12-14 07:30:30', '2022-12-14 07:30:30'),
(25, 'p-2.jpg', 2, '3', '2022-12-14 07:30:30', '2022-12-14 07:30:30'),
(26, 'p-3.jpg', 2, '3', '2022-12-14 07:30:31', '2022-12-14 07:30:31'),
(27, 'p-4.jpg', 2, '3', '2022-12-14 07:30:31', '2022-12-14 07:30:31'),
(28, 'p-5.jpg', 2, '3', '2022-12-14 07:30:32', '2022-12-14 07:30:32');

-- --------------------------------------------------------

--
-- Table structure for table `hows`
--

CREATE TABLE `hows` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint UNSIGNED NOT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_number`, `amount`, `content`, `qty`, `user_id`, `due`, `status`, `created_at`, `updated_at`) VALUES
(1, 'PREMIUM-1', '100', '10', '1', '2', '12/12/2022', '0', '2022-12-12 07:25:05', '2022-12-12 07:25:05'),
(2, 'PREMIUM-2', '100', '10', '1', '2', '12/12/2022', '0', '2022-12-12 08:27:00', '2022-12-12 08:27:00'),
(3, 'PREMIUM-3', '100', '10', '1', '2', '12/12/2022', '0', '2022-12-12 08:29:10', '2022-12-12 08:29:10'),
(4, 'PREMIUM-4', '100', '10', '1', '2', '12/12/2022', '0', '2022-12-12 08:32:47', '2022-12-12 08:32:47'),
(5, 'PREMIUM-5', '100', 'Your Google Play Order Receipt from 28 Nov 2022', '1', '2', '12/12/2022', '0', '2022-12-12 08:35:14', '2022-12-12 08:35:14'),
(6, 'PREMIUM-6', '100', 'Your Google Play Order Receipt from 28 Nov 2022', '1', '2', '12/12/2022', '0', '2022-12-12 08:39:06', '2022-12-12 08:39:06'),
(7, 'PREMIUM-7', '100', 'Your Google Play Order Receipt from 28 Nov 2022', '1', '2', '12/12/2022', '0', '2022-12-12 08:40:32', '2022-12-12 08:40:32'),
(8, 'PH-8', '100', 'Your Google Play Order Receipt from 28 Nov 2022', '1', '2', '12/12/2022', '0', '2022-12-12 08:41:17', '2022-12-12 08:41:17'),
(9, 'PH-9', '100', 'Your Google Play Order Receipt from 28 Nov 2022', '1', '2', '12/12/2022', '0', '2022-12-12 08:42:54', '2022-12-12 08:42:54');

-- --------------------------------------------------------

--
-- Table structure for table `lnmo_api_response`
--

CREATE TABLE `lnmo_api_response` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CheckoutRequestID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MerchantRequestID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MpesaReceiptNumber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransactionDate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `PhoneNumber` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lnmo_api_response`
--

INSERT INTO `lnmo_api_response` (`id`, `user_id`, `status`, `Amount`, `CheckoutRequestID`, `MerchantRequestID`, `MpesaReceiptNumber`, `TransactionDate`, `PhoneNumber`, `updateTime`, `created_at`, `updated_at`) VALUES
(1, 1, 0, NULL, 'ws_CO_06122022121920951723014032', '5465-56451846-1', NULL, NULL, NULL, '2022-12-06 12:19:44', '2022-12-06 06:19:44', '2022-12-06 06:19:44'),
(2, 1, 0, NULL, 'ws_CO_13122022170012593723014032', '2269-78261269-1', NULL, NULL, NULL, '2022-12-13 17:00:12', '2022-12-13 11:00:12', '2022-12-13 11:00:12');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_16_061547_create_activity_log_table', 2),
(6, '2022_11_16_061548_add_event_column_to_activity_log_table', 2),
(7, '2022_11_16_061549_add_batch_uuid_column_to_activity_log_table', 2),
(8, '2018_07_10_000000_create_reactions_table', 3),
(9, '2021_04_21_072753_create__credentials_table', 3),
(10, '2021_04_21_072753_create__site_settings_table', 3),
(11, '2021_04_21_072753_create_abouts_table', 3),
(12, '2021_04_21_072753_create_accountbalance_table', 3),
(13, '2021_04_21_072753_create_b2b_api_response_table', 3),
(14, '2021_04_21_072753_create_b2c_api_response_table', 3),
(15, '2021_04_21_072753_create_banners_table', 3),
(16, '2021_04_21_072753_create_blogs_table', 3),
(17, '2021_04_21_072753_create_categories_table', 3),
(18, '2021_04_21_072753_create_comments_table', 3),
(19, '2021_04_21_072753_create_copyright_table', 3),
(20, '2021_04_21_072753_create_copyrights_table', 3),
(21, '2021_04_21_072753_create_courses_table', 3),
(22, '2021_04_21_072753_create_email_settings_table', 3),
(23, '2021_04_21_072753_create_faq_table', 3),
(24, '2021_04_21_072753_create_hows_table', 3),
(25, '2021_04_21_072753_create_lnmo_api_response_table', 3),
(26, '2021_04_21_072753_create_messages_table', 3),
(27, '2021_04_21_072753_create_mobile_payments_table', 3),
(28, '2021_04_21_072753_create_notifications_table', 3),
(29, '2021_04_21_072753_create_post_views_table', 4),
(30, '2021_04_21_072753_create_privacies_table', 4),
(31, '2021_04_21_072753_create_reverse_transaction_table', 4),
(32, '2021_04_21_072753_create_sessions_table', 4),
(33, '2021_04_21_072753_create_signals_table', 4),
(34, '2021_04_21_072753_create_sliders_table', 4),
(35, '2021_04_21_072753_create_terms_table', 4),
(36, '2021_04_21_072753_create_testimonials_table', 4),
(37, '2021_04_21_072753_create_topics_table', 4),
(38, '2021_04_21_072753_create_transaction_status_table', 4),
(39, '2021_05_18_084722_create_payment_table', 5),
(40, '2021_05_27_052700_create_threads_table', 5),
(41, '2021_08_22_094509_create_rates_table', 5),
(42, '2021_09_14_162939_create_rate_e_u_r_s_table', 5),
(43, '2022_11_27_053202_create_properties_table', 6),
(44, '2022_12_05_123959_create_lnmo_api_response_table', 7),
(45, '2022_12_05_123959_create_mpesa_transactions_table', 7),
(46, '2022_12_07_081121_create_galleries_table', 8),
(47, '2022_12_09_141906_create_invoices_table', 9),
(48, '2022_12_13_150119_create_packages_table', 10),
(49, '2022_12_14_084658_create_nearbies_table', 11),
(50, '2022_12_14_113448_create_cats_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `mobile_payments`
--

CREATE TABLE `mobile_payments` (
  `transLoID` int NOT NULL,
  `user_id` int DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `TransactionType` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransTime` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransAmount` double NOT NULL,
  `BusinessShortCode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `BillRefNumber` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InvoiceNumber` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrgAccountBalance` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThirdPartyTransID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSISDN` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mpesa_transactions`
--

CREATE TABLE `mpesa_transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `status` tinyint NOT NULL DEFAULT '0',
  `TransactionType` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransTime` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransAmount` double NOT NULL,
  `BusinessShortCode` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BillRefNumber` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InvoiceNumber` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OrgAccountBalance` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ThirdPartyTransID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MSISDN` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FirstName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastUpdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `house_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nearbies`
--

CREATE TABLE `nearbies` (
  `id` bigint UNSIGNED NOT NULL,
  `amenities` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proximity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nearbies`
--

INSERT INTO `nearbies` (`id`, `amenities`, `category`, `proximity`, `rating`, `property_id`, `created_at`, `updated_at`) VALUES
(1, 'Peponi School', 'Education', '15.61 miles', '4.5', '1', NULL, NULL),
(2, 'International Schools', 'Education', '15.23', '4.0', '1', NULL, NULL),
(3, 'University of Nairobi', 'Education', '15.16 miles', '5.0', '1', NULL, NULL),
(4, 'Mp Sha Market', 'Health & Medical', '13.20 miles', '4.5', '1', NULL, '2022-12-14 12:13:27'),
(5, 'St. Ann\'s Hospital', 'Health & Medical', '13.22 miles', '4.5', '1', NULL, NULL),
(6, 'Nairobi Express Way', 'Transportation', '11.36 miles', '4.5', '1', NULL, NULL),
(7, 'NYC Executive Limo', 'Transportation', '11.87', '3.5', '1', NULL, NULL),
(8, 'Uber, Bolt & PTG', 'Transportation', '1 Mie', '5.0', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `content` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rate` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint UNSIGNED NOT NULL,
  `payment_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transactionid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `businessid` int DEFAULT NULL,
  `payer_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` double(10,2) DEFAULT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `payment_id`, `status`, `transactionid`, `businessid`, `payer_id`, `payer_email`, `amount`, `currency`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'NEW', 'PESAPALMt04VD1M1CGj955', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 07:47:25', '2022-12-06 07:47:25'),
(2, NULL, 'NEW', 'PESAPAL2m0MXlGhM6NiU3X', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 07:55:21', '2022-12-06 07:55:21'),
(3, NULL, 'NEW', 'PESAPALqCUCrNv5zlSGL6x', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:05:29', '2022-12-06 08:05:29'),
(4, NULL, 'NEW', 'PESAPAL88U5aLMIyjMzTiO', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:09:04', '2022-12-06 08:09:04'),
(5, NULL, 'NEW', 'PESAPALhO4Nrk9MjMhUk1F', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:12:03', '2022-12-06 08:12:03'),
(6, NULL, 'NEW', 'PESAPALZmQMub0S5FV5XjP', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:12:07', '2022-12-06 08:12:07'),
(7, NULL, 'NEW', 'PESAPALbV5hJE8rz9GknWA', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:14:01', '2022-12-06 08:14:01'),
(8, NULL, 'NEW', 'PESAPAL11ZPdVyuDqajML8', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:14:32', '2022-12-06 08:14:32'),
(9, NULL, 'NEW', 'PESAPALdegIKh8QZ9cZrsf', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:15:35', '2022-12-06 08:15:35'),
(10, NULL, 'NEW', 'PESAPALcANwuIoK9yAxk8R', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:16:42', '2022-12-06 08:16:42'),
(11, NULL, 'NEW', 'PESAPALZhu19EZl2Y5reES', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:16:49', '2022-12-06 08:16:49'),
(12, NULL, 'NEW', 'PESAPALOQEdcviXE4iV7dj', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:21:09', '2022-12-06 08:21:09'),
(13, NULL, 'NEW', 'PESAPALEVzeDmEayhFoPLa', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:26:16', '2022-12-06 08:26:16'),
(14, NULL, 'NEW', 'PESAPALIIc5nyxuXK8kFYE', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:27:17', '2022-12-06 08:27:17'),
(15, NULL, 'NEW', 'PESAPALbVnE5E3Ry7fg47s', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:28:33', '2022-12-06 08:28:33'),
(16, NULL, 'NEW', 'PESAPAL4hvzAUNkC8mDigj', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:29:10', '2022-12-06 08:29:10'),
(17, NULL, 'NEW', 'PESAPALXUyc22eILj2ZZOE', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:30:04', '2022-12-06 08:30:04'),
(18, NULL, 'NEW', 'PESAPALnU4eFpu0urnpLlQ', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:31:05', '2022-12-06 08:31:05'),
(19, NULL, 'NEW', 'PESAPALj7WIUyxNAvGIUdc', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:32:19', '2022-12-06 08:32:19'),
(20, NULL, 'NEW', 'PESAPALC0IBbqSE8JtfXOs', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:33:08', '2022-12-06 08:33:08'),
(21, NULL, 'NEW', 'PESAPALRyxuPRGLRShhOf5', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:35:45', '2022-12-06 08:35:45'),
(22, NULL, 'NEW', 'PESAPALqJjGMlfrkMxCOYs', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:37:11', '2022-12-06 08:37:11'),
(23, NULL, 'NEW', 'PESAPALQLQKjLcj1S0Uufv', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:37:32', '2022-12-06 08:37:32'),
(24, NULL, 'NEW', 'PESAPAL15ERCQNYFdHG6Hb', 1, NULL, NULL, 1.00, NULL, NULL, '2022-12-06 08:40:05', '2022-12-06 08:40:05'),
(25, NULL, 'NEW', 'PESAPALvDFG4r461YljLTa', 1, NULL, NULL, 32500.00, NULL, NULL, '2022-12-13 11:05:24', '2022-12-13 11:05:24');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_views`
--

CREATE TABLE `post_views` (
  `id` int UNSIGNED NOT NULL,
  `post_id` int UNSIGNED NOT NULL,
  `titleslug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int UNSIGNED DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `privacies`
--

CREATE TABLE `privacies` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint UNSIGNED NOT NULL,
  `property_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `property_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending Approval',
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heater` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `swimming` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sqft` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `property_description` text COLLATE utf8mb4_unicode_ci,
  `Bath` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bedroom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `garages` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `yom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rooms` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `swimmings` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `Fridge` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'off',
  `balcony` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `internet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parking` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dishwasher` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `floor_plan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `iframe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `featured_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `laundry` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gym` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alarm` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `window_covering` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscription` tinyint NOT NULL DEFAULT '0',
  `refrigerator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `microwave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `property_name`, `slung`, `property_id`, `type`, `city`, `status`, `active`, `price`, `address`, `heater`, `longitude`, `swimming`, `latitude`, `country`, `state`, `sqft`, `property_description`, `Bath`, `bedroom`, `garages`, `yom`, `rooms`, `ac`, `swimmings`, `Fridge`, `balcony`, `internet`, `cable`, `parking`, `dishwasher`, `bar`, `floor_plan`, `video`, `iframe`, `featured_image`, `created_at`, `updated_at`, `laundry`, `gym`, `alarm`, `window_covering`, `subscription`, `refrigerator`, `user_id`, `microwave`) VALUES
(1, '2Br Executive Master En-suite Apartments Rosehill Residence', '2br-executive-master-en-suite-apartments-rosehill-residence', 'OOw22RY', 'home', 'Nairobi', 'Sale', 'Pending Approval', '87900000', 'Westfields Apartments - Lower Kabete', 'on', '34.89', 'on', '1.32', 'Kenya', 'Kenya', '187', '<p>Modern living having incorporated good quality finishes and good use of space.3 and 2 bedrooms. journey for good and steady returns starting from only KES 9.5 million.<br />\r\nMain features include:<br />\r\nGym &amp; fitness center<br />\r\nHigh speed lift<br />\r\n127sqm plinth area.<br />\r\nSolar power<br />\r\nBack up genset<br />\r\nOn-site borehole<br />\r\nAmple parking<br />\r\nRooftop terrace</p>', '2', '3', NULL, '2022', '2', 'on', 'off', 'off', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'https://www.youtube.com/watch?v=hGiTSuJl1U8', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.557192204415!2d36.7201291!3d-1.2364671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e2f130aa1a43250!2sRosehill%20residence!5e0!3m2!1sen!2ske!4v1669530628064!5m2!1sen!2ske\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '1671089906.jpg', '2022-12-12 11:32:31', '2022-12-12 11:32:31', 'on', 'on', 'on', 'on', 1, 'on', '2', 'on'),
(2, '4BR Master En-Suite Apartment', '4br-master-en-suite-apartment', '4gSl33', 'apartment', 'Nairobi', 'Sale', 'Approved', '87900000', 'Lower Kabete', 'on', '34.2', 'on', '1.8', 'kenya', 'Kenya', '187', 'Modern living having incorporated good quality finishes and\n                                    good use of space.3 and 2 bedrooms.\n                                    journey for good and steady returns starting from only KES\n                                    9.5 million.\n                                    <br>\n                                    Main features include:<br>\n                                    Gym & fitness center<br>\n                                    High speed lift <br>\n                                    127sqm plinth area.<br>\n                                    Solar power <br>\n                                    Back up genset <br>\n                                    On-site borehole <br>\n                                    Ample parking <br>\n                                    Rooftop terrace<br>', '2', NULL, NULL, '2022', '4', 'on', 'off', 'off', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'https://www.youtube.com/watch?v=ur6I5m2nTvk', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.557192204415!2d36.7201291!3d-1.2364671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e2f130aa1a43250!2sRosehill%20residence!5e0!3m2!1sen!2ske!4v1669530628064!5m2!1sen!2ske\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '1670936451.jpg', '2022-12-13 10:00:51', '2022-12-13 10:00:51', 'on', 'on', 'on', 'on', 0, 'on', '2', 'on'),
(3, 'Rosehill Residence', 'rosehill-residence', 'x5Yh5jdp', 'apartment', 'Nairobi', 'Medium', 'Pending Approval', '130000000', '3571 Riverside Downs', 'on', '34.89', 'on', '1.89', 'Kenya', 'Kenya', '184', '<p>Modern living having incorporated good quality finishes and good use of space.3 and 2 bedrooms. journey for good and steady returns starting from only KES 9.5 million.<br />\r\nMain features include:<br />\r\nGym &amp; fitness center<br />\r\nHigh speed lift<br />\r\n127sqm plinth area.<br />\r\nSolar power<br />\r\nBack up genset<br />\r\nOn-site borehole<br />\r\nAmple parking<br />\r\nRooftop terrace</p>', '3', NULL, NULL, '2022`', '4', 'on', 'off', 'off', 'on', 'on', 'on', 'on', 'on', NULL, NULL, 'https://www.youtube.com/watch?v=ur6I5m2nTvk&list', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.557192204415!2d36.7201291!3d-1.2364671!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x1e2f130aa1a43250!2sRosehill%20residence!5e0!3m2!1sen!2ske!4v1669530628064!5m2!1sen!2ske\" width=\"100%\" height=\"100%\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '1671013768.jpg', '2022-12-14 07:29:28', '2022-12-14 07:29:28', 'on', 'on', 'on', 'on', 0, 'on', '2', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` bigint UNSIGNED NOT NULL,
  `USDAED` text COLLATE utf8mb4_unicode_ci,
  `USDAFN` text COLLATE utf8mb4_unicode_ci,
  `USDALL` text COLLATE utf8mb4_unicode_ci,
  `USDAMD` text COLLATE utf8mb4_unicode_ci,
  `USDANG` text COLLATE utf8mb4_unicode_ci,
  `USDAOA` text COLLATE utf8mb4_unicode_ci,
  `USDARS` text COLLATE utf8mb4_unicode_ci,
  `USDAUD` text COLLATE utf8mb4_unicode_ci,
  `USDAWG` text COLLATE utf8mb4_unicode_ci,
  `USDAZN` text COLLATE utf8mb4_unicode_ci,
  `USDBAM` text COLLATE utf8mb4_unicode_ci,
  `USDBBD` text COLLATE utf8mb4_unicode_ci,
  `USDBDT` text COLLATE utf8mb4_unicode_ci,
  `USDBGN` text COLLATE utf8mb4_unicode_ci,
  `USDBHD` text COLLATE utf8mb4_unicode_ci,
  `USDBIF` text COLLATE utf8mb4_unicode_ci,
  `USDBMD` text COLLATE utf8mb4_unicode_ci,
  `USDBND` text COLLATE utf8mb4_unicode_ci,
  `USDBOB` text COLLATE utf8mb4_unicode_ci,
  `USDBRL` text COLLATE utf8mb4_unicode_ci,
  `USDBSD` text COLLATE utf8mb4_unicode_ci,
  `USDBTC` text COLLATE utf8mb4_unicode_ci,
  `USDBTN` text COLLATE utf8mb4_unicode_ci,
  `USDBWP` text COLLATE utf8mb4_unicode_ci,
  `USDBYN` text COLLATE utf8mb4_unicode_ci,
  `USDBYR` text COLLATE utf8mb4_unicode_ci,
  `USDBZD` text COLLATE utf8mb4_unicode_ci,
  `USDCAD` text COLLATE utf8mb4_unicode_ci,
  `USDCDF` text COLLATE utf8mb4_unicode_ci,
  `USDCHF` text COLLATE utf8mb4_unicode_ci,
  `USDCLF` text COLLATE utf8mb4_unicode_ci,
  `USDCLP` text COLLATE utf8mb4_unicode_ci,
  `USDCNY` text COLLATE utf8mb4_unicode_ci,
  `USDCOP` text COLLATE utf8mb4_unicode_ci,
  `USDCRC` text COLLATE utf8mb4_unicode_ci,
  `USDCUC` text COLLATE utf8mb4_unicode_ci,
  `USDCUP` text COLLATE utf8mb4_unicode_ci,
  `USDCVE` text COLLATE utf8mb4_unicode_ci,
  `USDCZK` text COLLATE utf8mb4_unicode_ci,
  `USDDJF` text COLLATE utf8mb4_unicode_ci,
  `USDDKK` text COLLATE utf8mb4_unicode_ci,
  `USDDOP` text COLLATE utf8mb4_unicode_ci,
  `USDDZD` text COLLATE utf8mb4_unicode_ci,
  `USDEGP` text COLLATE utf8mb4_unicode_ci,
  `USDERN` text COLLATE utf8mb4_unicode_ci,
  `USDETB` text COLLATE utf8mb4_unicode_ci,
  `USDEUR` text COLLATE utf8mb4_unicode_ci,
  `USDFJD` text COLLATE utf8mb4_unicode_ci,
  `USDFKP` text COLLATE utf8mb4_unicode_ci,
  `USDGBP` text COLLATE utf8mb4_unicode_ci,
  `USDGEL` text COLLATE utf8mb4_unicode_ci,
  `USDGGP` text COLLATE utf8mb4_unicode_ci,
  `USDGHS` text COLLATE utf8mb4_unicode_ci,
  `USDGIP` text COLLATE utf8mb4_unicode_ci,
  `USDGMD` text COLLATE utf8mb4_unicode_ci,
  `USDGNF` text COLLATE utf8mb4_unicode_ci,
  `USDGTQ` text COLLATE utf8mb4_unicode_ci,
  `USDGYD` text COLLATE utf8mb4_unicode_ci,
  `USDHKD` text COLLATE utf8mb4_unicode_ci,
  `USDHNL` text COLLATE utf8mb4_unicode_ci,
  `USDHRK` text COLLATE utf8mb4_unicode_ci,
  `USDHTG` text COLLATE utf8mb4_unicode_ci,
  `USDHUF` text COLLATE utf8mb4_unicode_ci,
  `USDIDR` text COLLATE utf8mb4_unicode_ci,
  `USDILS` text COLLATE utf8mb4_unicode_ci,
  `USDIMP` text COLLATE utf8mb4_unicode_ci,
  `USDINR` text COLLATE utf8mb4_unicode_ci,
  `USDIQD` text COLLATE utf8mb4_unicode_ci,
  `USDIRR` text COLLATE utf8mb4_unicode_ci,
  `USDISK` text COLLATE utf8mb4_unicode_ci,
  `USDJEP` text COLLATE utf8mb4_unicode_ci,
  `USDJMD` text COLLATE utf8mb4_unicode_ci,
  `USDJOD` text COLLATE utf8mb4_unicode_ci,
  `USDJPY` text COLLATE utf8mb4_unicode_ci,
  `USDKES` text COLLATE utf8mb4_unicode_ci,
  `USDKGS` text COLLATE utf8mb4_unicode_ci,
  `USDKHR` text COLLATE utf8mb4_unicode_ci,
  `USDKMF` text COLLATE utf8mb4_unicode_ci,
  `USDKPW` text COLLATE utf8mb4_unicode_ci,
  `USDKRW` text COLLATE utf8mb4_unicode_ci,
  `USDKWD` text COLLATE utf8mb4_unicode_ci,
  `USDKYD` text COLLATE utf8mb4_unicode_ci,
  `USDKZT` text COLLATE utf8mb4_unicode_ci,
  `USDLAK` text COLLATE utf8mb4_unicode_ci,
  `USDLBP` text COLLATE utf8mb4_unicode_ci,
  `USDLKR` text COLLATE utf8mb4_unicode_ci,
  `USDLRD` text COLLATE utf8mb4_unicode_ci,
  `USDLSL` text COLLATE utf8mb4_unicode_ci,
  `USDLTL` text COLLATE utf8mb4_unicode_ci,
  `USDLVL` text COLLATE utf8mb4_unicode_ci,
  `USDLYD` text COLLATE utf8mb4_unicode_ci,
  `USDMAD` text COLLATE utf8mb4_unicode_ci,
  `USDMDL` text COLLATE utf8mb4_unicode_ci,
  `USDMGA` text COLLATE utf8mb4_unicode_ci,
  `USDMKD` text COLLATE utf8mb4_unicode_ci,
  `USDMMK` text COLLATE utf8mb4_unicode_ci,
  `USDMNT` text COLLATE utf8mb4_unicode_ci,
  `USDMOP` text COLLATE utf8mb4_unicode_ci,
  `USDMRO` text COLLATE utf8mb4_unicode_ci,
  `USDMUR` text COLLATE utf8mb4_unicode_ci,
  `USDMVR` text COLLATE utf8mb4_unicode_ci,
  `USDMWK` text COLLATE utf8mb4_unicode_ci,
  `USDMXN` text COLLATE utf8mb4_unicode_ci,
  `USDMYR` text COLLATE utf8mb4_unicode_ci,
  `USDMZN` text COLLATE utf8mb4_unicode_ci,
  `USDNAD` text COLLATE utf8mb4_unicode_ci,
  `USDNGN` text COLLATE utf8mb4_unicode_ci,
  `USDNIO` text COLLATE utf8mb4_unicode_ci,
  `USDNOK` text COLLATE utf8mb4_unicode_ci,
  `USDNPR` text COLLATE utf8mb4_unicode_ci,
  `USDNZD` text COLLATE utf8mb4_unicode_ci,
  `USDOMR` text COLLATE utf8mb4_unicode_ci,
  `USDPAB` text COLLATE utf8mb4_unicode_ci,
  `USDPEN` text COLLATE utf8mb4_unicode_ci,
  `USDPGK` text COLLATE utf8mb4_unicode_ci,
  `USDPHP` text COLLATE utf8mb4_unicode_ci,
  `USDPKR` text COLLATE utf8mb4_unicode_ci,
  `USDPLN` text COLLATE utf8mb4_unicode_ci,
  `USDPYG` text COLLATE utf8mb4_unicode_ci,
  `USDQAR` text COLLATE utf8mb4_unicode_ci,
  `USDRON` text COLLATE utf8mb4_unicode_ci,
  `USDRSD` text COLLATE utf8mb4_unicode_ci,
  `USDRUB` text COLLATE utf8mb4_unicode_ci,
  `USDRWF` text COLLATE utf8mb4_unicode_ci,
  `USDSAR` text COLLATE utf8mb4_unicode_ci,
  `USDSBD` text COLLATE utf8mb4_unicode_ci,
  `USDSCR` text COLLATE utf8mb4_unicode_ci,
  `USDSDG` text COLLATE utf8mb4_unicode_ci,
  `USDSEK` text COLLATE utf8mb4_unicode_ci,
  `USDSGD` text COLLATE utf8mb4_unicode_ci,
  `USDSHP` text COLLATE utf8mb4_unicode_ci,
  `USDSLL` text COLLATE utf8mb4_unicode_ci,
  `USDSOS` text COLLATE utf8mb4_unicode_ci,
  `USDSRD` text COLLATE utf8mb4_unicode_ci,
  `USDSTD` text COLLATE utf8mb4_unicode_ci,
  `USDSVC` text COLLATE utf8mb4_unicode_ci,
  `USDSYP` text COLLATE utf8mb4_unicode_ci,
  `USDSZL` text COLLATE utf8mb4_unicode_ci,
  `USDTHB` text COLLATE utf8mb4_unicode_ci,
  `USDTJS` text COLLATE utf8mb4_unicode_ci,
  `USDTMT` text COLLATE utf8mb4_unicode_ci,
  `USDTND` text COLLATE utf8mb4_unicode_ci,
  `USDTOP` text COLLATE utf8mb4_unicode_ci,
  `USDTRY` text COLLATE utf8mb4_unicode_ci,
  `USDTTD` text COLLATE utf8mb4_unicode_ci,
  `USDTWD` text COLLATE utf8mb4_unicode_ci,
  `USDTZS` text COLLATE utf8mb4_unicode_ci,
  `USDUAH` text COLLATE utf8mb4_unicode_ci,
  `USDUGX` text COLLATE utf8mb4_unicode_ci,
  `USDUSD` text COLLATE utf8mb4_unicode_ci,
  `USDUYU` text COLLATE utf8mb4_unicode_ci,
  `USDUZS` text COLLATE utf8mb4_unicode_ci,
  `USDVEF` text COLLATE utf8mb4_unicode_ci,
  `USDVND` text COLLATE utf8mb4_unicode_ci,
  `USDVUV` text COLLATE utf8mb4_unicode_ci,
  `USDWST` text COLLATE utf8mb4_unicode_ci,
  `USDXAF` text COLLATE utf8mb4_unicode_ci,
  `USDXAG` text COLLATE utf8mb4_unicode_ci,
  `USDXAU` text COLLATE utf8mb4_unicode_ci,
  `USDXCD` text COLLATE utf8mb4_unicode_ci,
  `USDXDR` text COLLATE utf8mb4_unicode_ci,
  `USDXOF` text COLLATE utf8mb4_unicode_ci,
  `USDXPF` text COLLATE utf8mb4_unicode_ci,
  `USDYER` text COLLATE utf8mb4_unicode_ci,
  `USDZAR` text COLLATE utf8mb4_unicode_ci,
  `USDZMK` text COLLATE utf8mb4_unicode_ci,
  `USDZMW` text COLLATE utf8mb4_unicode_ci,
  `USDZWL` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate_e_u_r_s`
--

CREATE TABLE `rate_e_u_r_s` (
  `id` bigint UNSIGNED NOT NULL,
  `EURAED` text COLLATE utf8mb4_unicode_ci,
  `EURAFN` text COLLATE utf8mb4_unicode_ci,
  `EURALL` text COLLATE utf8mb4_unicode_ci,
  `EURAMD` text COLLATE utf8mb4_unicode_ci,
  `EURANG` text COLLATE utf8mb4_unicode_ci,
  `EURAOA` text COLLATE utf8mb4_unicode_ci,
  `EURARS` text COLLATE utf8mb4_unicode_ci,
  `EURAUD` text COLLATE utf8mb4_unicode_ci,
  `EURAWG` text COLLATE utf8mb4_unicode_ci,
  `EURAZN` text COLLATE utf8mb4_unicode_ci,
  `EURBAM` text COLLATE utf8mb4_unicode_ci,
  `EURBBD` text COLLATE utf8mb4_unicode_ci,
  `EURBDT` text COLLATE utf8mb4_unicode_ci,
  `EURBGN` text COLLATE utf8mb4_unicode_ci,
  `EURBHD` text COLLATE utf8mb4_unicode_ci,
  `EURBIF` text COLLATE utf8mb4_unicode_ci,
  `EURBMD` text COLLATE utf8mb4_unicode_ci,
  `EURBND` text COLLATE utf8mb4_unicode_ci,
  `EURBOB` text COLLATE utf8mb4_unicode_ci,
  `EURBRL` text COLLATE utf8mb4_unicode_ci,
  `EURBSD` text COLLATE utf8mb4_unicode_ci,
  `EURBTC` text COLLATE utf8mb4_unicode_ci,
  `EURBTN` text COLLATE utf8mb4_unicode_ci,
  `EURBWP` text COLLATE utf8mb4_unicode_ci,
  `EURBYN` text COLLATE utf8mb4_unicode_ci,
  `EURBYR` text COLLATE utf8mb4_unicode_ci,
  `EURBZD` text COLLATE utf8mb4_unicode_ci,
  `EURCAD` text COLLATE utf8mb4_unicode_ci,
  `EURCDF` text COLLATE utf8mb4_unicode_ci,
  `EURCHF` text COLLATE utf8mb4_unicode_ci,
  `EURCLF` text COLLATE utf8mb4_unicode_ci,
  `EURCLP` text COLLATE utf8mb4_unicode_ci,
  `EURCNY` text COLLATE utf8mb4_unicode_ci,
  `EURCOP` text COLLATE utf8mb4_unicode_ci,
  `EURCRC` text COLLATE utf8mb4_unicode_ci,
  `EURCUC` text COLLATE utf8mb4_unicode_ci,
  `EURCUP` text COLLATE utf8mb4_unicode_ci,
  `EURCVE` text COLLATE utf8mb4_unicode_ci,
  `EURCZK` text COLLATE utf8mb4_unicode_ci,
  `EURDJF` text COLLATE utf8mb4_unicode_ci,
  `EURDKK` text COLLATE utf8mb4_unicode_ci,
  `EURDOP` text COLLATE utf8mb4_unicode_ci,
  `EURDZD` text COLLATE utf8mb4_unicode_ci,
  `EUREGP` text COLLATE utf8mb4_unicode_ci,
  `EURERN` text COLLATE utf8mb4_unicode_ci,
  `EURETB` text COLLATE utf8mb4_unicode_ci,
  `EUREUR` text COLLATE utf8mb4_unicode_ci,
  `EURFJD` text COLLATE utf8mb4_unicode_ci,
  `EURFKP` text COLLATE utf8mb4_unicode_ci,
  `EURGBP` text COLLATE utf8mb4_unicode_ci,
  `EURGEL` text COLLATE utf8mb4_unicode_ci,
  `EURGGP` text COLLATE utf8mb4_unicode_ci,
  `EURGHS` text COLLATE utf8mb4_unicode_ci,
  `EURGIP` text COLLATE utf8mb4_unicode_ci,
  `EURGMD` text COLLATE utf8mb4_unicode_ci,
  `EURGNF` text COLLATE utf8mb4_unicode_ci,
  `EURGTQ` text COLLATE utf8mb4_unicode_ci,
  `EURGYD` text COLLATE utf8mb4_unicode_ci,
  `EURHKD` text COLLATE utf8mb4_unicode_ci,
  `EURHNL` text COLLATE utf8mb4_unicode_ci,
  `EURHRK` text COLLATE utf8mb4_unicode_ci,
  `EURHTG` text COLLATE utf8mb4_unicode_ci,
  `EURHUF` text COLLATE utf8mb4_unicode_ci,
  `EURIDR` text COLLATE utf8mb4_unicode_ci,
  `EURILS` text COLLATE utf8mb4_unicode_ci,
  `EURIMP` text COLLATE utf8mb4_unicode_ci,
  `EURINR` text COLLATE utf8mb4_unicode_ci,
  `EURIQD` text COLLATE utf8mb4_unicode_ci,
  `EURIRR` text COLLATE utf8mb4_unicode_ci,
  `EURISK` text COLLATE utf8mb4_unicode_ci,
  `EURJEP` text COLLATE utf8mb4_unicode_ci,
  `EURJMD` text COLLATE utf8mb4_unicode_ci,
  `EURJOD` text COLLATE utf8mb4_unicode_ci,
  `EURJPY` text COLLATE utf8mb4_unicode_ci,
  `EURKES` text COLLATE utf8mb4_unicode_ci,
  `EURKGS` text COLLATE utf8mb4_unicode_ci,
  `EURKHR` text COLLATE utf8mb4_unicode_ci,
  `EURKMF` text COLLATE utf8mb4_unicode_ci,
  `EURKPW` text COLLATE utf8mb4_unicode_ci,
  `EURKRW` text COLLATE utf8mb4_unicode_ci,
  `EURKWD` text COLLATE utf8mb4_unicode_ci,
  `EURKYD` text COLLATE utf8mb4_unicode_ci,
  `EURKZT` text COLLATE utf8mb4_unicode_ci,
  `EURLAK` text COLLATE utf8mb4_unicode_ci,
  `EURLBP` text COLLATE utf8mb4_unicode_ci,
  `EURLKR` text COLLATE utf8mb4_unicode_ci,
  `EURLRD` text COLLATE utf8mb4_unicode_ci,
  `EURLSL` text COLLATE utf8mb4_unicode_ci,
  `EURLTL` text COLLATE utf8mb4_unicode_ci,
  `EURLVL` text COLLATE utf8mb4_unicode_ci,
  `EURLYD` text COLLATE utf8mb4_unicode_ci,
  `EURMAD` text COLLATE utf8mb4_unicode_ci,
  `EURMDL` text COLLATE utf8mb4_unicode_ci,
  `EURMGA` text COLLATE utf8mb4_unicode_ci,
  `EURMKD` text COLLATE utf8mb4_unicode_ci,
  `EURMMK` text COLLATE utf8mb4_unicode_ci,
  `EURMNT` text COLLATE utf8mb4_unicode_ci,
  `EURMOP` text COLLATE utf8mb4_unicode_ci,
  `EURMRO` text COLLATE utf8mb4_unicode_ci,
  `EURMUR` text COLLATE utf8mb4_unicode_ci,
  `EURMVR` text COLLATE utf8mb4_unicode_ci,
  `EURMWK` text COLLATE utf8mb4_unicode_ci,
  `EURMXN` text COLLATE utf8mb4_unicode_ci,
  `EURMYR` text COLLATE utf8mb4_unicode_ci,
  `EURMZN` text COLLATE utf8mb4_unicode_ci,
  `EURNAD` text COLLATE utf8mb4_unicode_ci,
  `EURNGN` text COLLATE utf8mb4_unicode_ci,
  `EURNIO` text COLLATE utf8mb4_unicode_ci,
  `EURNOK` text COLLATE utf8mb4_unicode_ci,
  `EURNPR` text COLLATE utf8mb4_unicode_ci,
  `EURNZD` text COLLATE utf8mb4_unicode_ci,
  `EUROMR` text COLLATE utf8mb4_unicode_ci,
  `EURPAB` text COLLATE utf8mb4_unicode_ci,
  `EURPEN` text COLLATE utf8mb4_unicode_ci,
  `EURPGK` text COLLATE utf8mb4_unicode_ci,
  `EURPHP` text COLLATE utf8mb4_unicode_ci,
  `EURPKR` text COLLATE utf8mb4_unicode_ci,
  `EURPLN` text COLLATE utf8mb4_unicode_ci,
  `EURPYG` text COLLATE utf8mb4_unicode_ci,
  `EURQAR` text COLLATE utf8mb4_unicode_ci,
  `EURRON` text COLLATE utf8mb4_unicode_ci,
  `EURRSD` text COLLATE utf8mb4_unicode_ci,
  `EURRUB` text COLLATE utf8mb4_unicode_ci,
  `EURRWF` text COLLATE utf8mb4_unicode_ci,
  `EURSAR` text COLLATE utf8mb4_unicode_ci,
  `EURSBD` text COLLATE utf8mb4_unicode_ci,
  `EURSCR` text COLLATE utf8mb4_unicode_ci,
  `EURSDG` text COLLATE utf8mb4_unicode_ci,
  `EURSEK` text COLLATE utf8mb4_unicode_ci,
  `EURSGD` text COLLATE utf8mb4_unicode_ci,
  `EURSHP` text COLLATE utf8mb4_unicode_ci,
  `EURSLL` text COLLATE utf8mb4_unicode_ci,
  `EURSOS` text COLLATE utf8mb4_unicode_ci,
  `EURSRD` text COLLATE utf8mb4_unicode_ci,
  `EURSTD` text COLLATE utf8mb4_unicode_ci,
  `EURSVC` text COLLATE utf8mb4_unicode_ci,
  `EURSYP` text COLLATE utf8mb4_unicode_ci,
  `EURSZL` text COLLATE utf8mb4_unicode_ci,
  `EURTHB` text COLLATE utf8mb4_unicode_ci,
  `EURTJS` text COLLATE utf8mb4_unicode_ci,
  `EURTMT` text COLLATE utf8mb4_unicode_ci,
  `EURTND` text COLLATE utf8mb4_unicode_ci,
  `EURTOP` text COLLATE utf8mb4_unicode_ci,
  `EURTRY` text COLLATE utf8mb4_unicode_ci,
  `EURTTD` text COLLATE utf8mb4_unicode_ci,
  `EURTWD` text COLLATE utf8mb4_unicode_ci,
  `EURTZS` text COLLATE utf8mb4_unicode_ci,
  `EURUAH` text COLLATE utf8mb4_unicode_ci,
  `EURUGX` text COLLATE utf8mb4_unicode_ci,
  `EURUSD` text COLLATE utf8mb4_unicode_ci,
  `EURUYU` text COLLATE utf8mb4_unicode_ci,
  `EURUZS` text COLLATE utf8mb4_unicode_ci,
  `EURVEF` text COLLATE utf8mb4_unicode_ci,
  `EURVND` text COLLATE utf8mb4_unicode_ci,
  `EURVUV` text COLLATE utf8mb4_unicode_ci,
  `EURWST` text COLLATE utf8mb4_unicode_ci,
  `EURXAF` text COLLATE utf8mb4_unicode_ci,
  `EURXAG` text COLLATE utf8mb4_unicode_ci,
  `EURXAU` text COLLATE utf8mb4_unicode_ci,
  `EURXCD` text COLLATE utf8mb4_unicode_ci,
  `EURXDR` text COLLATE utf8mb4_unicode_ci,
  `EURXOF` text COLLATE utf8mb4_unicode_ci,
  `EURXPF` text COLLATE utf8mb4_unicode_ci,
  `EURYER` text COLLATE utf8mb4_unicode_ci,
  `EURZAR` text COLLATE utf8mb4_unicode_ci,
  `EURZMK` text COLLATE utf8mb4_unicode_ci,
  `EURZMW` text COLLATE utf8mb4_unicode_ci,
  `EURZWL` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reactions`
--

CREATE TABLE `reactions` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `reactable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reactable_id` bigint UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reverse_transaction`
--

CREATE TABLE `reverse_transaction` (
  `transactionstatusID` int NOT NULL,
  `DebitAccountBalance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransCompletedTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OriginalTransactionID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Charge` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyPublicName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyPublicName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updateTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signals`
--

CREATE TABLE `signals` (
  `id` bigint UNSIGNED NOT NULL,
  `currency_pair` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sl` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `threads`
--

CREATE TABLE `threads` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` bigint UNSIGNED NOT NULL,
  `course_id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placeholder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta` text COLLATE utf8mb4_unicode_ci,
  `content` text COLLATE utf8mb4_unicode_ci,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_views` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT '2',
  `video_duration` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transaction_status`
--

CREATE TABLE `transaction_status` (
  `transactionStatusID` int NOT NULL,
  `ReceiptNo` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ConversationID` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `FinalisedTime` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionStatus` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ReasonType` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyCharges` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `DebitAccountType` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `InitiatedTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OriginatorConversationID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CreditPartyCharges` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `DebitPartyName` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updatedTime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`, `image`, `mobile`, `address`, `country`, `status`) VALUES
(1, 'System Admin', NULL, 'admin@premiumhomes.casa', NULL, 1, '$2y$10$Ngt8fO6j1XDDXX5.34evNuS/lnM3StIgJkgLc/ydtSxy7wOKzqPT.', NULL, '2022-11-14 05:37:05', '2022-11-14 05:37:05', '199259143_4389625377747506_3043984032264076715_n.jpg', '0723014032', '3571 Riverside Downs', NULL, 1),
(2, 'User', NULL, 'user@premiumhomes.casa', NULL, 0, '$2y$10$.9dfUrEVx/LHqQtA9wzoDeaAUDCIS5gTkvA6LdXKQnPutFEjHv/Z6', NULL, '2022-11-14 05:37:06', '2022-11-14 05:37:06', '199259143_4389625377747506_3043984032264076715_n.jpg', '0723014032', '3571 Riverside Down', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `_credentials`
--

CREATE TABLE `_credentials` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `_site_settings`
--

CREATE TABLE `_site_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `sitename` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_footer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_one` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_two` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mpesa` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tagline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske',
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `risks` text COLLATE utf8mb4_unicode_ci,
  `welcome` text COLLATE utf8mb4_unicode_ci,
  `tawkTo` text COLLATE utf8mb4_unicode_ci,
  `tawkToStatus` tinyint NOT NULL DEFAULT '1',
  `whatsAppStatus` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `_site_settings`
--

INSERT INTO `_site_settings` (`id`, `sitename`, `logo`, `logo_footer`, `logo_two`, `favicon`, `email`, `email_one`, `mobile_one`, `mobile_two`, `mpesa`, `paypal`, `tagline`, `url`, `location`, `map`, `address`, `facebook`, `whatsapp`, `telegram`, `twitter`, `linkedin`, `instagram`, `youtube`, `google`, `risks`, `welcome`, `tawkTo`, `tawkToStatus`, `whatsAppStatus`, `created_at`, `updated_at`) VALUES
(1, 'Premium Business Den Limited', 'Landscape logo premium-2 (1).png', NULL, NULL, NULL, NULL, NULL, '+254 707 190 188', '+254 707 190 188', NULL, NULL, NULL, NULL, NULL, 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15955.277444357953!2d36.8222756!3d-1.2821653!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb39310a139138d6!2sDesignekta%20Studios!5e0!3m2!1sen!2ske!4v1617719690195!5m2!1sen!2ske', 'Nelson\'S Court Serviced Apartments', 'https://www.facebook.com/premiumhomes.casa', NULL, NULL, NULL, 'https://www.linkedin.com/company/premium-casa/', 'https://www.instagram.com/premiumhomes.casa/', NULL, NULL, NULL, NULL, NULL, 1, 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accountbalance`
--
ALTER TABLE `accountbalance`
  ADD PRIMARY KEY (`accountBalID`);

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Indexes for table `b2b_api_response`
--
ALTER TABLE `b2b_api_response`
  ADD PRIMARY KEY (`b2bTransactionID`);

--
-- Indexes for table `b2c_api_response`
--
ALTER TABLE `b2c_api_response`
  ADD PRIMARY KEY (`b2bID`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_slung_unique` (`slung`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cats`
--
ALTER TABLE `cats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyright`
--
ALTER TABLE `copyright`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `copyrights`
--
ALTER TABLE `copyrights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `email_settings`
--
ALTER TABLE `email_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hows`
--
ALTER TABLE `hows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lnmo_api_response`
--
ALTER TABLE `lnmo_api_response`
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
-- Indexes for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  ADD PRIMARY KEY (`transLoID`),
  ADD UNIQUE KEY `TransID` (`TransID`);

--
-- Indexes for table `mpesa_transactions`
--
ALTER TABLE `mpesa_transactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `TransID` (`TransID`),
  ADD KEY `mpesa_transactions_user_id_foreign` (`user_id`),
  ADD KEY `mpesa_transactions_house_id_foreign` (`house_id`);

--
-- Indexes for table `nearbies`
--
ALTER TABLE `nearbies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `post_views`
--
ALTER TABLE `post_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacies`
--
ALTER TABLE `privacies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate_e_u_r_s`
--
ALTER TABLE `rate_e_u_r_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reactions`
--
ALTER TABLE `reactions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `react_user_unique` (`reactable_type`,`reactable_id`,`user_id`),
  ADD KEY `reactions_reactable_type_reactable_id_index` (`reactable_type`,`reactable_id`),
  ADD KEY `reactions_user_id_index` (`user_id`);

--
-- Indexes for table `reverse_transaction`
--
ALTER TABLE `reverse_transaction`
  ADD PRIMARY KEY (`transactionstatusID`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `signals`
--
ALTER TABLE `signals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `threads`
--
ALTER TABLE `threads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_status`
--
ALTER TABLE `transaction_status`
  ADD PRIMARY KEY (`transactionStatusID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `_credentials`
--
ALTER TABLE `_credentials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `_site_settings`
--
ALTER TABLE `_site_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `accountbalance`
--
ALTER TABLE `accountbalance`
  MODIFY `accountBalID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `b2b_api_response`
--
ALTER TABLE `b2b_api_response`
  MODIFY `b2bTransactionID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `b2c_api_response`
--
ALTER TABLE `b2c_api_response`
  MODIFY `b2bID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cats`
--
ALTER TABLE `cats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `copyright`
--
ALTER TABLE `copyright`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `copyrights`
--
ALTER TABLE `copyrights`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `email_settings`
--
ALTER TABLE `email_settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `hows`
--
ALTER TABLE `hows`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `lnmo_api_response`
--
ALTER TABLE `lnmo_api_response`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `mobile_payments`
--
ALTER TABLE `mobile_payments`
  MODIFY `transLoID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mpesa_transactions`
--
ALTER TABLE `mpesa_transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nearbies`
--
ALTER TABLE `nearbies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_views`
--
ALTER TABLE `post_views`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `privacies`
--
ALTER TABLE `privacies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rate_e_u_r_s`
--
ALTER TABLE `rate_e_u_r_s`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reactions`
--
ALTER TABLE `reactions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reverse_transaction`
--
ALTER TABLE `reverse_transaction`
  MODIFY `transactionstatusID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signals`
--
ALTER TABLE `signals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `threads`
--
ALTER TABLE `threads`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction_status`
--
ALTER TABLE `transaction_status`
  MODIFY `transactionStatusID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `_credentials`
--
ALTER TABLE `_credentials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `_site_settings`
--
ALTER TABLE `_site_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
