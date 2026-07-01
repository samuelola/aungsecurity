-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 01, 2026 at 04:53 PM
-- Server version: 8.4.7
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aung_solutions`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_logs`
--

DROP TABLE IF EXISTS `access_logs`;
CREATE TABLE IF NOT EXISTS `access_logs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `invitation_id` bigint UNSIGNED NOT NULL,
  `gate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Main Gate',
  `security_id` bigint UNSIGNED DEFAULT NULL,
  `action` enum('entry','exit') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `access_logs_invitation_id_foreign` (`invitation_id`),
  KEY `access_logs_security_id_foreign` (`security_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

DROP TABLE IF EXISTS `activity_log`;
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `log_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'created', 'App\\Models\\Kyc', 'created', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"phone\":null,\"address\":null,\"lga_id\":null,\"state_id\":null,\"occupants\":null,\"flat_number\":null,\"agent_name\":null,\"agent_number\":null}}', NULL, '2026-06-09 11:56:33', '2026-06-09 11:56:33'),
(2, 'default', 'updated', 'App\\Models\\Kyc', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"phone\":\"08067932796\",\"address\":\"No 14 adepeju street bariga lagos\",\"lga_id\":\"516\",\"state_id\":\"25\",\"occupants\":3,\"flat_number\":13},\"old\":{\"phone\":null,\"address\":null,\"lga_id\":null,\"state_id\":null,\"occupants\":null,\"flat_number\":null}}', NULL, '2026-06-09 12:08:26', '2026-06-09 12:08:26'),
(3, 'default', 'created', 'App\\Models\\Kyc', 'created', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"phone\":null,\"address\":null,\"lga_id\":null,\"state_id\":null,\"occupants\":null,\"flat_number\":null,\"agent_name\":null,\"agent_number\":null}}', NULL, '2026-06-09 12:59:29', '2026-06-09 12:59:29'),
(4, 'default', 'updated', 'App\\Models\\Kyc', 'updated', 1, 'App\\Models\\User', 1, '{\"attributes\":{\"phone\":\"08067932796\",\"address\":\"No 14 adepeju street bariga lagos\",\"lga_id\":\"519\",\"state_id\":\"25\",\"occupants\":6,\"flat_number\":13},\"old\":{\"phone\":null,\"address\":null,\"lga_id\":null,\"state_id\":null,\"occupants\":null,\"flat_number\":null}}', NULL, '2026-06-09 13:00:07', '2026-06-09 13:00:07'),
(5, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-09 16:51:03', '2026-06-09 16:51:03'),
(6, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/147.0.0.0 Safari\\/537.36 OPR\\/131.0.0.0 (Edition 360-1)\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-09 17:04:54', '2026-06-09 17:04:54'),
(7, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-10 12:20:02', '2026-06-10 12:20:02'),
(8, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-11 12:55:39', '2026-06-11 12:55:39'),
(9, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-12 13:38:52', '2026-06-12 13:38:52'),
(10, 'default', 'created', 'App\\Models\\Kyc', 'created', 2, 'App\\Models\\User', 2, '{\"attributes\":{\"phone\":null,\"address\":null,\"lga_id\":null,\"state_id\":null,\"occupants\":null,\"flat_number\":null,\"agent_name\":null,\"agent_number\":null}}', NULL, '2026-06-12 14:45:35', '2026-06-12 14:45:35'),
(11, 'default', 'updated', 'App\\Models\\Kyc', 'updated', 2, 'App\\Models\\User', 2, '{\"attributes\":{\"phone\":\"08067932796\",\"address\":\"12 Sammy street\",\"lga_id\":\"252\",\"state_id\":\"13\",\"occupants\":1,\"flat_number\":2,\"agent_name\":\"djdjjd\",\"agent_number\":\"07047326188\"},\"old\":{\"phone\":null,\"address\":null,\"lga_id\":null,\"state_id\":null,\"occupants\":null,\"flat_number\":null,\"agent_name\":null,\"agent_number\":null}}', NULL, '2026-06-12 14:47:47', '2026-06-12 14:47:47'),
(12, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-12 15:20:26', '2026-06-12 15:20:26'),
(13, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-12 15:20:53', '2026-06-12 15:20:53'),
(14, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-12 15:31:58', '2026-06-12 15:31:58'),
(15, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-12 16:21:12', '2026-06-12 16:21:12'),
(16, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-12 16:21:42', '2026-06-12 16:21:42'),
(17, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-12 16:22:16', '2026-06-12 16:22:16'),
(18, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-12 16:22:25', '2026-06-12 16:22:25'),
(19, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-13 07:36:09', '2026-06-13 07:36:09'),
(20, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-15 12:26:47', '2026-06-15 12:26:47'),
(21, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-15 16:15:47', '2026-06-15 16:15:47'),
(22, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-18 14:37:41', '2026-06-18 14:37:41'),
(23, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-19 09:11:50', '2026-06-19 09:11:50'),
(24, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 09:23:57', '2026-06-19 09:23:57'),
(25, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 09:51:20', '2026-06-19 09:51:20'),
(26, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 09:51:25', '2026-06-19 09:51:25'),
(27, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 09:51:32', '2026-06-19 09:51:32'),
(28, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 09:51:37', '2026-06-19 09:51:37'),
(29, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36 Edg\\/149.0.0.0\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 09:51:53', '2026-06-19 09:51:53'),
(30, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-19 10:00:38', '2026-06-19 10:00:38'),
(31, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-19 10:00:57', '2026-06-19 10:00:57'),
(32, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-19 10:03:50', '2026-06-19 10:03:50'),
(33, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 10:04:07', '2026-06-19 10:04:07'),
(34, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 10:04:20', '2026-06-19 10:04:20'),
(35, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-19 11:20:54', '2026-06-19 11:20:54'),
(36, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-19 12:25:12', '2026-06-19 12:25:12'),
(37, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 12:25:35', '2026-06-19 12:25:35'),
(38, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 12:53:08', '2026-06-19 12:53:08'),
(39, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-19 12:53:35', '2026-06-19 12:53:35'),
(40, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-19 12:53:44', '2026-06-19 12:53:44'),
(41, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 12:55:40', '2026-06-19 12:55:40'),
(42, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-19 13:05:13', '2026-06-19 13:05:13'),
(43, 'default', 'created', 'App\\Models\\Kyc', 'created', 3, 'App\\Models\\User', 5, '{\"attributes\":{\"phone\":null,\"address\":null,\"lga_id\":null,\"state_id\":null,\"occupants\":null,\"flat_number\":null,\"agent_name\":null,\"agent_number\":null}}', NULL, '2026-06-22 15:36:27', '2026-06-22 15:36:27'),
(44, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 5, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-22 15:36:48', '2026-06-22 15:36:48'),
(45, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 5, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-22 15:37:05', '2026-06-22 15:37:05'),
(46, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 5, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-22 15:37:28', '2026-06-22 15:37:28'),
(47, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-23 12:32:08', '2026-06-23 12:32:08'),
(48, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-23 12:32:19', '2026-06-23 12:32:19'),
(49, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-23 12:32:32', '2026-06-23 12:32:32'),
(50, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-23 12:44:57', '2026-06-23 12:44:57'),
(51, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-23 12:45:16', '2026-06-23 12:45:16'),
(52, 'default', 'User logged out', NULL, NULL, NULL, 'App\\Models\\User', 2, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"user\"}', NULL, '2026-06-23 12:45:40', '2026-06-23 12:45:40'),
(53, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-23 12:45:51', '2026-06-23 12:45:51'),
(54, 'default', 'User logged in', NULL, NULL, NULL, 'App\\Models\\User', 1, '{\"ip\":\"127.0.0.1\",\"browser\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/149.0.0.0 Safari\\/537.36\",\"tenant_id\":1,\"estate_name\":\"demo\",\"role\":\"admin\"}', NULL, '2026-06-26 10:23:54', '2026-06-26 10:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `audit_logs`
--

DROP TABLE IF EXISTS `audit_logs`;
CREATE TABLE IF NOT EXISTS `audit_logs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `tenant_id` int DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `old_values` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `new_values` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `login_time` timestamp NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `audit_logs_model_type_model_id_index` (`model_type`,`model_id`),
  KEY `audit_logs_user_id_index` (`user_id`),
  KEY `audit_logs_tenant_id_index` (`tenant_id`)
) ;

--
-- Dumping data for table `audit_logs`
--

INSERT INTO `audit_logs` (`id`, `user_id`, `tenant_id`, `action`, `model_type`, `model_id`, `old_values`, `new_values`, `ip_address`, `user_agent`, `login_time`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-09 16:51:03', '2026-06-09 16:51:03', '2026-06-09 16:51:03'),
(2, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/147.0.0.0 Safari/537.36 OPR/131.0.0.0 (Edition 360-1)', '2026-06-09 17:04:54', '2026-06-09 17:04:54', '2026-06-09 17:04:54'),
(3, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-10 12:20:02', '2026-06-10 12:20:02', '2026-06-10 12:20:02'),
(4, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-11 12:55:39', '2026-06-11 12:55:39', '2026-06-11 12:55:39'),
(5, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-12 13:38:52', '2026-06-12 13:38:52', '2026-06-12 13:38:52'),
(6, 1, 1, 'logout', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-12 15:20:26', '2026-06-12 15:20:26', '2026-06-12 15:20:26'),
(7, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-12 15:20:53', '2026-06-12 15:20:53', '2026-06-12 15:20:53'),
(8, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-12 15:31:58', '2026-06-12 15:31:58', '2026-06-12 15:31:58'),
(9, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-12 16:21:12', '2026-06-12 16:21:12', '2026-06-12 16:21:12'),
(10, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-12 16:21:42', '2026-06-12 16:21:42', '2026-06-12 16:21:42'),
(11, 1, 1, 'logout', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-12 16:22:16', '2026-06-12 16:22:16', '2026-06-12 16:22:16'),
(12, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-12 16:22:25', '2026-06-12 16:22:25', '2026-06-12 16:22:25'),
(13, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-13 07:36:09', '2026-06-13 07:36:09', '2026-06-13 07:36:09'),
(14, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-15 12:26:47', '2026-06-15 12:26:47', '2026-06-15 12:26:47'),
(15, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-15 16:15:47', '2026-06-15 16:15:47', '2026-06-15 16:15:47'),
(16, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-18 14:37:41', '2026-06-18 14:37:41', '2026-06-18 14:37:41'),
(17, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 09:11:50', '2026-06-19 09:11:50', '2026-06-19 09:11:50'),
(18, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 09:23:57', '2026-06-19 09:23:57', '2026-06-19 09:23:57'),
(19, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 09:51:20', '2026-06-19 09:51:20', '2026-06-19 09:51:20'),
(20, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 09:51:25', '2026-06-19 09:51:25', '2026-06-19 09:51:25'),
(21, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 09:51:32', '2026-06-19 09:51:32', '2026-06-19 09:51:32'),
(22, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 09:51:37', '2026-06-19 09:51:37', '2026-06-19 09:51:37'),
(23, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', '2026-06-19 09:51:53', '2026-06-19 09:51:53', '2026-06-19 09:51:53'),
(24, 1, 1, 'logout', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 10:00:38', '2026-06-19 10:00:38', '2026-06-19 10:00:38'),
(25, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 10:00:57', '2026-06-19 10:00:57', '2026-06-19 10:00:57'),
(26, 1, 1, 'logout', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 10:03:50', '2026-06-19 10:03:50', '2026-06-19 10:03:50'),
(27, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 10:04:07', '2026-06-19 10:04:07', '2026-06-19 10:04:07'),
(28, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 10:04:20', '2026-06-19 10:04:20', '2026-06-19 10:04:20'),
(29, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 11:20:54', '2026-06-19 11:20:54', '2026-06-19 11:20:54'),
(30, 1, 1, 'logout', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 12:25:12', '2026-06-19 12:25:12', '2026-06-19 12:25:12'),
(31, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 12:25:35', '2026-06-19 12:25:35', '2026-06-19 12:25:35'),
(32, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 12:53:08', '2026-06-19 12:53:08', '2026-06-19 12:53:08'),
(33, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 12:53:35', '2026-06-19 12:53:35', '2026-06-19 12:53:35'),
(34, 1, 1, 'logout', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 12:53:44', '2026-06-19 12:53:44', '2026-06-19 12:53:44'),
(35, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 12:55:40', '2026-06-19 12:55:40', '2026-06-19 12:55:40'),
(36, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-19 13:05:13', '2026-06-19 13:05:13', '2026-06-19 13:05:13'),
(37, 5, 1, 'logout', 'App\\Models\\User', 5, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 15:36:48', '2026-06-22 15:36:48', '2026-06-22 15:36:48'),
(38, 5, 1, 'login', 'App\\Models\\User', 5, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 15:37:05', '2026-06-22 15:37:05', '2026-06-22 15:37:05'),
(39, 5, 1, 'logout', 'App\\Models\\User', 5, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-22 15:37:28', '2026-06-22 15:37:28', '2026-06-22 15:37:28'),
(40, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 12:32:08', '2026-06-23 12:32:08', '2026-06-23 12:32:08'),
(41, 1, 1, 'logout', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 12:32:19', '2026-06-23 12:32:19', '2026-06-23 12:32:19'),
(42, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 12:32:32', '2026-06-23 12:32:32', '2026-06-23 12:32:32'),
(43, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 12:44:58', '2026-06-23 12:44:58', '2026-06-23 12:44:58'),
(44, 2, 1, 'login', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 12:45:16', '2026-06-23 12:45:16', '2026-06-23 12:45:16'),
(45, 2, 1, 'logout', 'App\\Models\\User', 2, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 12:45:40', '2026-06-23 12:45:40', '2026-06-23 12:45:40'),
(46, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-23 12:45:51', '2026-06-23 12:45:51', '2026-06-23 12:45:51'),
(47, 1, 1, 'login', 'App\\Models\\User', 1, NULL, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', '2026-06-26 10:23:54', '2026-06-26 10:23:54', '2026-06-26 10:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

DROP TABLE IF EXISTS `banks`;
CREATE TABLE IF NOT EXISTS `banks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` text,
  `slug` text,
  `code` varchar(255) DEFAULT NULL,
  `longcode` varchar(255) DEFAULT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `pay_with_bank` varchar(255) DEFAULT NULL,
  `active` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `supports_transfer` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=205 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `name`, `slug`, `code`, `longcode`, `gateway`, `pay_with_bank`, `active`, `country`, `currency`, `type`, `supports_transfer`) VALUES
(1, '9mobile 9Payment Service Bank', '9mobile-9payment-service-bank-ng', '120001', '120001', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(2, 'Abbey Mortgage Bank', 'abbey-mortgage-bank-ng', '404', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(3, 'Above Only MFB', 'above-only-mfb', '51204', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(4, 'Abulesoro MFB', 'abulesoro-mfb-ng', '51312', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(5, 'Access Bank', 'access-bank', '044', '044150149', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(6, 'Access Bank (Diamond)', 'access-bank-diamond', '063', '063150162', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(7, 'Accion Microfinance Bank', 'accion-microfinance-bank-ng', '602', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(8, 'Aella MFB', 'aella-mfb-ng', '50315', '50315', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(9, 'AG Mortgage Bank', 'ag-mortgage-bank-ng', '90077', '100028', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(10, 'Ahmadu Bello University Microfinance Bank', 'ahmadu-bello-university-microfinance-bank-ng', '50036', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(11, 'Airtel Smartcash PSB', 'airtel-smartcash-psb-ng', '120004', '120004', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(12, 'AKU Microfinance Bank', 'aku-mfb', '51336', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(13, 'Akuchukwu Microfinance Bank Limited', 'akuchukwu-microfinance-bank-limited-ng', '090561', '090561', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(14, 'ALAT by WEMA', 'alat-by-wema', '035A', '035150103', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(15, 'Alpha Morgan Bank', 'alpha-morgan', '108', '000041', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(16, 'Alternative bank', 'the-alternative-bank-ng', '000304', '000304', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(17, 'Amegy Microfinance Bank', 'amegy-microfinance-bank-ng', '090629', '090629', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(18, 'Amju Unique MFB', 'amju-unique-mfb', '50926', '511080896', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(19, 'Aramoko MFB', 'aramoko-mfb', '50083', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(20, 'ASO Savings and Loans', 'asosavings', '401', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(21, 'Assets Microfinance Bank', 'assets-microfinance-bank-ng', '50092', '50092', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(22, 'Astrapolaris MFB LTD', 'astrapolaris-mfb', 'MFB50094', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(23, 'AVUENEGBE MICROFINANCE BANK', 'avuenegbe-microfinance-bank-ng', '090478', '090478', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(24, 'AWACASH MICROFINANCE BANK', 'awacash-microfinance-bank-ng', '51351', '51351', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(25, 'AZTEC MICROFINANCE BANK LIMITED', 'aztec-microfinance-bank-limited-ng', '51337', '090540', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(26, 'Bainescredit MFB', 'bainescredit-mfb', '51229', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(27, 'Banc Corp Microfinance Bank', 'banc-corp-microfinance-bank-ng', '50117', '50117', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(28, 'BANKIT MICROFINANCE BANK LTD', 'bankit-microfinance-bank-ltd-ng', '50572', '090275', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(29, 'BANKLY MFB', 'ampersand-microfinance-bank-ng', '51341', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(30, 'Baobab Microfinance Bank', 'baobab-microfinance-bank-ng', 'MFB50992', 'MFB50992', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(31, 'BellBank Microfinance Bank', 'bellbank-microfinance-bank-ng', '51100', '51100', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(32, 'Benysta Microfinance Bank Limited', 'benysta-microfinance-bank-limited', '51267', '51267', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(33, 'Beststar Microfinance Bank', 'beststar-microfinance-bank-ng', '50123', '090615', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(34, 'BOLD MFB', 'bold-mfb-ng', '50725', '090753', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(35, 'Bosak Microfinance Bank', 'bosak-microfinance-bank-ng', '650', '650', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(36, 'Bowen Microfinance Bank', 'bowen-microfinance-bank', '50931', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(37, 'Branch International Finance Company Limited', 'branch', 'FC40163', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(38, 'BuyPower MFB', 'buypower-mfb-ng', '50645', '50645', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(39, 'Carbon', 'carbon', '565', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(40, 'Cashbridge Microfinance Bank Limited', 'cashbridge-mfb-ng', '51353', '51353', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(41, 'CASHCONNECT MFB', 'cashconnect-mfb-ng', '865', '865', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(42, 'CEMCS Microfinance Bank', 'cemcs-microfinance-bank', '50823', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(43, 'Chanelle Microfinance Bank Limited', 'chanelle-microfinance-bank-limited-ng', '50171', '50171', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(44, 'Chikum Microfinance bank', 'chikum-microfinance-bank-ng', '312', 'null', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(45, 'Citibank Nigeria', 'citibank-nigeria', '023', '023150005', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(46, 'CITYCODE MORTAGE BANK', 'citycode-mortage-bank-ng', '070027', '070027', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(47, 'Consumer Microfinance Bank', 'consumer-microfinance-bank-ng', '50910', '50910', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(48, 'Corestep MFB', 'corestep-mfb', '50204', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(49, 'Coronation Merchant Bank', 'coronation-merchant-bank-ng', '559', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(50, 'County Finance Limited', 'county-finance-limited', 'FC40128', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(51, 'Credit Direct Limited', 'credit-direct-limited-ng', '40119', '110049', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(52, 'Crescent MFB', 'crescent-mfb', '51297', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(53, 'Crust Microfinance Bank', 'crust-microfinance-bank-ng', '090560', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(54, 'CRUTECH MICROFINANCE BANK LTD', 'crutech-microfinance-bank-ltd-ng', '50216', '090414', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(55, 'Davenport MICROFINANCE BANK', 'davenport-microfinance-bank-ng', '51334', '51334', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(56, 'Dillon Microfinance Bank', 'dillon-microfinance-bank-ng', '51450', '09828', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(57, 'Dot Microfinance Bank', 'dot-microfinance-bank-ng', '50162', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(58, 'EBSU Microfinance Bank', 'ebsu-microfinance-bank-ng', '50922', '090427', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(59, 'Ecobank Nigeria', 'ecobank-nigeria', '050', '050150010', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(60, 'Ekimogun MFB', 'ekimogun-mfb-ng', '50263', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(61, 'Ekondo Microfinance Bank', 'ekondo-microfinance-bank-ng', '098', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(62, 'EXCEL FINANCE BANK', 'excel-finance-bank-ng', '090678', '090678', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(63, 'Eyowo', 'eyowo', '50126', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(64, 'Fairmoney Microfinance Bank', 'fairmoney-microfinance-bank-ng', '51318', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(65, 'Fedeth MFB', 'fedeth-mfb-ng', '50298', '090482', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(66, 'Fidelity Bank', 'fidelity-bank', '070', '070150003', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(67, 'Firmus MFB', 'firmus-mfb', '51314', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(68, 'First Bank of Nigeria', 'first-bank-of-nigeria', '011', '011151003', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(69, 'First City Monument Bank', 'first-city-monument-bank', '214', '214150018', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(70, 'FIRST ROYAL MICROFINANCE BANK', 'first-royal-microfinance-bank-ng', '090164', '090164', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(71, 'FIRSTMIDAS MFB', 'firstmidas-mfb-ng', '51333', '090575', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(72, 'FirstTrust Mortgage Bank Nigeria', 'firsttrust-mortgage-bank-nigeria-ng', '413', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(73, 'FSDH Merchant Bank Limited', 'fsdh-merchant-bank-limited', '501', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(74, 'FUTMINNA MICROFINANCE BANK', 'futminna-microfinance-bank-ng', '832', '832', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(75, 'Garun Mallam MFB', 'garun-mallam-mfb-ng', 'MFB51093', 'MFB51093', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(76, 'Gateway Mortgage Bank LTD', 'gateway-mortgage-bank', '812', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(77, 'Globus Bank', 'globus-bank', '00103', '103015001', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(78, 'Goldman MFB', 'goldman-mfb-ng', '090574', '950356', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(79, 'GoMoney', 'gomoney', '100022', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(80, 'GOOD SHEPHERD MICROFINANCE BANK', 'good-shepherd-microfinance-bank-ng', '090664', '090664', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(81, 'Goodnews Microfinance Bank', 'goodnews-microfinance-bank-ng', '50739', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(82, 'Greenwich Merchant Bank', 'greenwich-merchant-bank-ng', '562', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(83, 'GROOMING MICROFINANCE BANK', 'grooming-microfinance-bank-ng', '51276', '51276', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(84, 'GTI MFB', 'gti-mfb-ng', '50368', '090385', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(85, 'Guaranty Trust Bank', 'guaranty-trust-bank', '058', '058152036', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(86, 'Hackman Microfinance Bank', 'hackman-microfinance-bank', '51251', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(87, 'Hasal Microfinance Bank', 'hasal-microfinance-bank', '50383', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(88, 'HopePSB', 'hopepsb-ng', '120002', '120002', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(89, 'IBANK Microfinance Bank', 'IBANK-mfb', '51211', '090115', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(90, 'IBBU MFB', 'ibbu-mfb-ng', '51279', '51279', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(91, 'Ibile Microfinance Bank', 'ibile-mfb', '51244', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(92, 'Ibom Mortgage Bank', 'ibom-mortgage-bank-ng', '90012', '070025', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(93, 'Ikoyi Osun MFB', 'ikoyi-osun-mfb', '50439', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(94, 'Ilaro Poly Microfinance Bank', 'ilaro-poly-microfinance-bank-ng', '50442', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(95, 'Imowo MFB', 'imowo-mfb-ng', '50453', '50453', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(96, 'IMPERIAL HOMES MORTAGE BANK', 'imperial-homes-mortage-bank-ng', '415', '100024', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(97, 'INDULGE MFB', 'indulge-mfb-ng', '51392', '090772', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(98, 'Infinity MFB', 'infinity-mfb', '50457', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(99, 'Infinity trust  Mortgage Bank', 'infinity-trust-mortgage-bank-ng', '070016', '070016', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(100, 'ISUA MFB', 'isua-mfb-ng', '090701', '090701', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(101, 'Jaiz Bank', 'jaiz-bank', '301', '301080020', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(102, 'Kadpoly MFB', 'kadpoly-mfb', '50502', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(103, 'KANOPOLY MFB', 'kanopoly-mfb-ng', '51308', '090592', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(104, 'Keystone Bank', 'keystone-bank', '082', '082150017', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(105, 'Kolomoni MFB', 'kolomoni-mfb-ng', '899', '090480', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(106, 'KONGAPAY (Kongapay Technologies Limited)(formerly Zinternet)', 'kongapay-tech-ltd', '100025', '100025', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(107, 'Kredi Money MFB LTD', 'kredi-money-mfb', '50200', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(108, 'Kuda Bank', 'kuda-bank', '50211', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(109, 'Lagos Building Investment Company Plc.', 'lbic-plc', '90052', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(110, 'Letshego Microfinance Bank', 'letshego-microfinance-bank', '090420', '090420', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(111, 'Links MFB', 'links-mfb', '50549', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(112, 'Living Trust Mortgage Bank', 'living-trust-mortgage-bank', '031', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(113, 'LOMA MFB', 'loma-mfb-ng', '50491', '090620', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(114, 'Lotus Bank', 'lotus-bank', '303', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(115, 'MAINSTREET MICROFINANCE BANK', 'mainstreet-microfinance-bank-ng', '090171', '090171', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(116, 'Mayfair MFB', 'mayfair-mfb', '50563', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(117, 'Mint MFB', 'mint-mfb', '50304', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(118, 'Money Master PSB', 'money-master-psb-ng', '946', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(119, 'Moniepoint MFB', 'moniepoint-mfb-ng', '50515', 'null', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(120, 'MTN Momo PSB', 'mtn-momo-psb-ng', '120003', '120003', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(121, 'MUTUAL BENEFITS MICROFINANCE BANK', 'mutual-benefits-microfinance-bank-ng', '090190', '090190', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(122, 'NDCC MICROFINANCE BANK', 'ndcc-microfinance-bank-ng', '090679', '090679', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(123, 'NET MICROFINANCE BANK', 'net-microfinance-bank-ng', '51361', '51361', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(124, 'Nigerian Navy Microfinance Bank Limited', 'nigerian-navy-microfinance-bank-limited-ng', '51142', '090263', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(125, 'Nombank MFB', 'nombank-mfb-ng', '50072', '090645', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(126, 'NOVA BANK', 'nova-bank-ng', '561', '060003', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(127, 'Novus MFB', 'novus-mfb-ng', '51371', '090734', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(128, 'NPF MICROFINANCE BANK', 'npf-microfinance-bank-ng', '50629', '50629', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(129, 'NSUK MICROFINANACE BANK', 'nsuk-microfinanace-bank-ng', '51261', '090491', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(130, 'OLUCHUKWU MICROFINANCE BANK LTD', 'oluchukwu-microfinance-bank-ltd-ng', '50697', '50697', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(131, 'OPay Digital Services Limited (OPay)', 'paycom', '999992', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(132, 'Optimus Bank Limited', 'optimus-bank-ltd', '107', '00107', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(133, 'Paga', 'paga', '100002', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(134, 'PalmPay', 'palmpay', '999991', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(135, 'Parallex Bank', 'parallex-bank', '104', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(136, 'Parkway - ReadyCash', 'parkway-ready-cash', '311', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(137, 'PATHFINDER MICROFINANCE BANK LIMITED', 'pathfinder-microfinance-bank-limited-ng', '090680', '090680', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(138, 'Paystack-Titan', 'titan-paystack', '100039', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(139, 'Peace Microfinance Bank', 'peace-microfinance-bank-ng', '50743', '50743', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(140, 'PECANTRUST MICROFINANCE BANK LIMITED', 'pecantrust-microfinance-bank-limited-ng', '51226', '51226', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(141, 'Personal Trust MFB', 'personal-trust-mfb-ng', '51146', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(142, 'Petra Mircofinance Bank Plc', 'petra-microfinance-bank-plc', '50746', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(143, 'Pettysave MFB', 'pettysave-mfb-ng', 'MFB51452', '090768', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(144, 'PFI FINANCE COMPANY LIMITED', 'pfi-finance-company-limited-ng', '050021', '050021', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(145, 'Platinum Mortgage Bank', 'platinum-mortgage-bank-ng', '268', 'null', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(146, 'Pocket App', 'pocket', '00716', '00716', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(147, 'Polaris Bank', 'polaris-bank', '076', '076151006', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(148, 'Polyunwana MFB', 'polyunwana-mfb-ng', '50864', 'null', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(149, 'PremiumTrust Bank', 'premiumtrust-bank-ng', '105', '000031', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(150, 'Prospa Capital Microfinance Bank', 'prospa-capital-microfinance-bank-ng', '50739', '50739', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(151, 'PROSPERIS FINANCE LIMITED', 'prosperis-finance-limited-ng', '050023', '050023', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(152, 'Providus Bank', 'providus-bank', '101', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(153, 'QuickFund MFB', 'quickfund-mfb', '51293', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(154, 'Rand Merchant Bank', 'rand-merchant-bank', '502', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(155, 'RANDALPHA MICROFINANCE BANK', 'randalpha-microfinance-bank-ng', '090496', '090496', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(156, 'Refuge Mortgage Bank', 'refuge-mortgage-bank', '90067', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(157, 'REHOBOTH MICROFINANCE BANK', 'rehoboth-microfinance-bank-ng', '50761', '090463', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(158, 'Rephidim Microfinance Bank', 'rephidim', '50994', '221151615', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(159, 'Rigo Microfinance Bank Limited', 'rigo-microfinance-bank-limited-ng', '51286', '51286', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(160, 'ROCKSHIELD MICROFINANCE BANK', 'rockshield-microfinance-bank-ng', '50767', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(161, 'Rubies MFB', 'rubies-mfb', '125', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(162, 'Safe Haven MFB', 'safe-haven-mfb-ng', '51113', '51113', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(163, 'SAGE GREY FINANCE LIMITED', 'sage-grey-finance-limited-ng', '40165', 'null', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(164, 'Shield MFB', 'shield-mfb-ng', '50582', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(165, 'Signature Bank Ltd', 'signature-bank-ltd-ng', '106', '000034', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(166, 'Solid Allianze MFB', 'solid-allianze-mfb', '51062', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(167, 'Solid Rock MFB', 'solid-rock-mfb', '50800', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(168, 'Sparkle Microfinance Bank', 'sparkle-microfinance-bank', '51310', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(169, 'Springfield Microfinance Bank', 'springfield-microfinance-bank-ng', '51429', '090806', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(170, 'Stanbic IBTC Bank', 'stanbic-ibtc-bank', '221', '221159522', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(171, 'Standard Chartered Bank', 'standard-chartered-bank', '068', '068150015', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(172, 'STANFORD MICROFINANCE BANK', 'stanford-microfinance-bank-ng', '090162', '090162', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(173, 'STATESIDE MICROFINANCE BANK', 'stateside-microfinance-bank-ng', '50809', '50809', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(174, 'STB Mortgage Bank', 'stb-mortgage-bank-ng', '070022', '070022', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(175, 'Stellas MFB', 'stellas-mfb', '51253', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(176, 'Sterling Bank', 'sterling-bank', '232', '232150016', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(177, 'Suntrust Bank', 'suntrust-bank', '100', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(178, 'Supreme MFB', 'supreme-mfb-ng', '50968', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(179, 'TAJ Bank', 'taj-bank', '302', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(180, 'Tangerine Money', 'tangerine-money', '51269', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(181, 'TENN', 'tenn-ng', '51403', '090716', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(182, 'Titan Bank', 'titan-bank', '102', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(183, 'TransPay MFB', 'transpay-mfb-ng', '090708', '090708', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(184, 'U&C Microfinance Bank Ltd (U AND C MFB)', 'uc-microfinance-bank-ltd-u-and-c-mfb-ng', '50840', '50840', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(185, 'UCEE MFB', 'ucee-mfb-ng', '090706', '090706', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(186, 'Uhuru MFB', 'uhuru-mfb-ng', '51322', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(187, 'Ultraviolet Microfinance Bank', 'ultraviolet-microfinance-bank-ng', '51080', '090781', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(188, 'Unaab Microfinance Bank Limited', 'unaab-microfinance-bank-limited-ng', '50870', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(189, 'UNIABUJA MFB', 'uniabuja-mfb', '51447', 'MFB51447', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(190, 'Unical MFB', 'unical-mfb', '50871', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(191, 'Unilag Microfinance Bank', 'unilag-microfinance-bank-ng', '51316', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(192, 'UNIMAID MICROFINANCE BANK', 'unimaid-microfinance-bank-ng', '50875', '090464', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(193, 'Union Bank of Nigeria', 'union-bank-of-nigeria', '032', '032080474', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(194, 'United Bank For Africa', 'united-bank-for-africa', '033', '033153513', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(195, 'Unity Bank', 'unity-bank', '215', '215154097', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(196, 'Uzondu Microfinance Bank Awka Anambra State', 'uzondu-microfinance-bank-awka-anambra-state-ng', '50894', '50894', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(197, 'Vale Finance Limited', 'vale-finance', '050020', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(198, 'VFD Microfinance Bank Limited', 'vfd', '566', '', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(199, 'Waya Microfinance Bank', 'waya-microfinance-bank-ng', '51355', '51355', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(200, 'Wema Bank', 'wema-bank', '035', '035150103', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(201, 'Weston Charis MFB', 'weston-charis-mfb-ng', '51386', '090741', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(202, 'Xpress Wallet', 'xpress-wallet-ng', '100040', '100040', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(203, 'Yes MFB', 'yes-mfb-ng', '594', '090142', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1'),
(204, 'Zenith Bank', 'zenith-bank', '057', '057150013', NULL, NULL, '1', 'Nigeria', 'NGN', 'nuban', '1');

-- --------------------------------------------------------

--
-- Table structure for table `blocked_ips`
--

DROP TABLE IF EXISTS `blocked_ips`;
CREATE TABLE IF NOT EXISTS `blocked_ips` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blocked_until` timestamp NULL DEFAULT NULL,
  `reason` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `blocked_ips_ip_unique` (`ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `currency`
--

DROP TABLE IF EXISTS `currency`;
CREATE TABLE IF NOT EXISTS `currency` (
  `id` int NOT NULL AUTO_INCREMENT,
  `country` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `code` varchar(100) DEFAULT NULL,
  `symbol` varchar(100) DEFAULT NULL,
  `status` int DEFAULT NULL,
  `rate` varchar(255) DEFAULT NULL,
  `rate_symbol` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=133 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `currency`
--

INSERT INTO `currency` (`id`, `country`, `currency`, `code`, `symbol`, `status`, `rate`, `rate_symbol`) VALUES
(1, 'Albania', 'Leke', 'ALL', 'Lek', NULL, '82.482123', 'USD'),
(3, 'Afghanistan', 'Afghanis', 'AFN', '؋', NULL, '67.475889', 'USD'),
(4, 'Argentina', 'Pesos', 'ARS', '$', NULL, '1337.603613', 'USD'),
(5, 'Aruba', 'Guilders', 'AWG', 'ƒ', NULL, '1.8025', 'USD'),
(6, 'Australia', 'Dollars', 'AUD', '$', NULL, '1.517409', 'USD'),
(7, 'Azerbaijan', 'New Manats', 'AZN', 'ман', NULL, '1.7', 'USD'),
(8, 'Bahamas', 'Dollars', 'BSD', '$', NULL, '1', 'USD'),
(9, 'Barbados', 'Dollars', 'BBD', '$', NULL, '2', 'USD'),
(10, 'Belarus', 'Rubles', 'BYR', 'p.', NULL, NULL, NULL),
(11, 'Belgium', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(12, 'Beliz', 'Dollars', 'BZD', 'BZ$', NULL, '2.011832', 'USD'),
(13, 'Bermuda', 'Dollars', 'BMD', '$', NULL, '1', 'USD'),
(14, 'Bolivia', 'Bolivianos', 'BOB', '$b', NULL, '6.912666', 'USD'),
(15, 'Bosnia and Herzegovina', 'Convertible Marka', 'BAM', 'KM', NULL, '1.664787', 'USD'),
(16, 'Botswana', 'Pula', 'BWP', 'P', NULL, '13.315458', 'USD'),
(17, 'Bulgaria', 'Leva', 'BGN', 'лв', NULL, '1.6646', 'USD'),
(18, 'Brazil', 'Reais', 'BRL', 'R$', NULL, '5.3297', 'USD'),
(19, 'Britain (United Kingdom)', 'Pounds', 'GBP', '£', NULL, '0.743693', 'USD'),
(20, 'Brunei Darussalam', 'Dollars', 'BND', '$', NULL, '1.287725', 'USD'),
(21, 'Cambodia', 'Riels', 'KHR', '៛', NULL, '4008.385638', 'USD'),
(22, 'Canada', 'Dollars', 'CAD', '$', NULL, '1.389519', 'USD'),
(23, 'Cayman Islands', 'Dollars', 'KYD', '$', NULL, '0.833585', 'USD'),
(24, 'Chile', 'Pesos', 'CLP', '$', NULL, '952.51', 'USD'),
(25, 'China', 'Yuan Renminbi', 'CNY', '¥', NULL, '7.123', 'USD'),
(26, 'Colombia', 'Pesos', 'COP', '$', NULL, '3858.941201', 'USD'),
(27, 'Costa Rica', 'Colón', 'CRC', '₡', NULL, '504.355977', 'USD'),
(28, 'Croatia', 'Kuna', 'HRK', 'kn', NULL, '6.412409', 'USD'),
(29, 'Cuba', 'Pesos', 'CUP', '₱', NULL, '25.75', 'USD'),
(30, 'Cyprus', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(31, 'Czech Republic', 'Koruny', 'CZK', 'Kč', NULL, '20.6709', 'USD'),
(32, 'Denmark', 'Kroner', 'DKK', 'kr', NULL, '6.353939', 'USD'),
(33, 'Dominican Republic', 'Pesos', 'DOP ', 'RD$', NULL, NULL, NULL),
(34, 'East Caribbean', 'Dollars', 'XCD', '$', NULL, '2.70255', 'USD'),
(35, 'Egypt', 'Pounds', 'EGP', '£', NULL, '48.1308', 'USD'),
(36, 'El Salvador', 'Colones', 'SVC', '$', NULL, '8.752942', 'USD'),
(37, 'England (United Kingdom)', 'Pounds', 'GBP', '£', NULL, '0.743693', 'USD'),
(38, 'Euro', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(39, 'Falkland Islands', 'Pounds', 'FKP', '£', NULL, '0.743693', 'USD'),
(40, 'Fiji', 'Dollars', 'FJD', '$', NULL, '2.2549', 'USD'),
(41, 'France', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(42, 'Ghana', 'Cedis', 'GHC', '¢', NULL, NULL, NULL),
(43, 'Gibraltar', 'Pounds', 'GIP', '£', NULL, '0.743693', 'USD'),
(44, 'Greece', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(45, 'Guatemala', 'Quetzales', 'GTQ', 'Q', NULL, '7.662581', 'USD'),
(46, 'Guernsey', 'Pounds', 'GGP', '£', NULL, '0.743693', 'USD'),
(47, 'Guyana', 'Dollars', 'GYD', '$', NULL, '209.286731', 'USD'),
(48, 'Holland (Netherlands)', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(49, 'Honduras', 'Lempiras', 'HNL', 'L', NULL, '26.253608', 'USD'),
(50, 'Hong Kong', 'Dollars', 'HKD', '$', NULL, '7.777256', 'USD'),
(51, 'Hungary', 'Forint', 'HUF', 'Ft', NULL, '332.539966', 'USD'),
(52, 'Iceland', 'Kronur', 'ISK', 'kr', NULL, '121.22', 'USD'),
(53, 'India', 'Rupees', 'INR', 'Rp', NULL, '88.698008', 'USD'),
(54, 'Indonesia', 'Rupiahs', 'IDR', 'Rp', NULL, '16746.607052', 'USD'),
(55, 'Iran', 'Rials', 'IRR', '﷼', NULL, '42075', 'USD'),
(56, 'Ireland', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(57, 'Isle of Man', 'Pounds', 'IMP', '£', NULL, '0.743693', 'USD'),
(58, 'Israel', 'New Shekels', 'ILS', '₪', NULL, '3.341105', 'USD'),
(59, 'Italy', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(60, 'Jamaica', 'Dollars', 'JMD', 'J$', NULL, '159.957758', 'USD'),
(61, 'Japan', 'Yen', 'JPY', '¥', NULL, '148.8016', 'USD'),
(62, 'Jersey', 'Pounds', 'JEP', '£', NULL, '0.743693', 'USD'),
(63, 'Kazakhstan', 'Tenge', 'KZT', 'лв', NULL, '541.945372', 'USD'),
(64, 'Korea (North)', 'Won', 'KPW', '₩', NULL, '900', 'USD'),
(65, 'Korea (South)', 'Won', 'KRW', '₩', NULL, '1401.506563', 'USD'),
(66, 'Kyrgyzstan', 'Soms', 'KGS', 'лв', NULL, '87.45', 'USD'),
(67, 'Laos', 'Kips', 'LAK', '₭', NULL, '21664.204106', 'USD'),
(68, 'Latvia', 'Lati', 'LVL', 'Ls', NULL, NULL, NULL),
(69, 'Lebanon', 'Pounds', 'LBP', '£', NULL, '89572.563885', 'USD'),
(70, 'Liberia', 'Dollars', 'LRD', '$', NULL, '180.05618', 'USD'),
(71, 'Liechtenstein', 'Switzerland Francs', 'CHF', 'CHF', NULL, '0.795573', 'USD'),
(72, 'Lithuania', 'Litai', 'LTL', 'Lt', NULL, NULL, NULL),
(73, 'Luxembourg', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(74, 'Macedonia', 'Denars', 'MKD', 'ден', NULL, '52.432219', 'USD'),
(75, 'Malaysia', 'Ringgits', 'MYR', 'RM', NULL, '4.2105', 'USD'),
(76, 'Malta', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(77, 'Mauritius', 'Rupees', 'MUR', '₨', NULL, '45.480002', 'USD'),
(78, 'Mexico', 'Pesos', 'MXN', '$', NULL, '18.426555', 'USD'),
(79, 'Mongolia', 'Tugriks', 'MNT', '₮', NULL, '3597.8', 'USD'),
(80, 'Mozambique', 'Meticais', 'MZN', 'MT', NULL, '63.909994', 'USD'),
(81, 'Namibia', 'Dollars', 'NAD', '$', NULL, '17.321173', 'USD'),
(82, 'Nepal', 'Rupees', 'NPR', '₨', NULL, '142.073137', 'USD'),
(83, 'Netherlands Antilles', 'Guilders', 'ANG', 'ƒ', NULL, '1.79', 'USD'),
(84, 'Netherlands', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(85, 'New Zealand', 'Dollars', 'NZD', '$', NULL, '1.718851', 'USD'),
(86, 'Nicaragua', 'Cordobas', 'NIO', 'C$', NULL, '36.815247', 'USD'),
(87, 'Nigeria', 'Naira', 'NGN', '₦', 1, '1490.92', 'USD'),
(88, 'North Korea', 'Won', 'KPW', '₩', NULL, '900', 'USD'),
(89, 'Norway', 'Krone', 'NOK', 'kr', NULL, '9.943559', 'USD'),
(90, 'Oman', 'Rials', 'OMR', '﷼', NULL, '0.3845', 'USD'),
(91, 'Pakistan', 'Rupees', 'PKR', '₨', NULL, '283.608463', 'USD'),
(92, 'Panama', 'Balboa', 'PAB', 'B/.', NULL, '1', 'USD'),
(93, 'Paraguay', 'Guarani', 'PYG', 'Gs', NULL, '7115.306543', 'USD'),
(94, 'Peru', 'Nuevos Soles', 'PEN', 'S/.', NULL, '3.501602', 'USD'),
(95, 'Philippines', 'Pesos', 'PHP', 'Php', NULL, '58.065502', 'USD'),
(96, 'Poland', 'Zlotych', 'PLN', 'zł', NULL, '3.628696', 'USD'),
(97, 'Qatar', 'Rials', 'QAR', '﷼', NULL, '3.646578', 'USD'),
(98, 'Romania', 'New Lei', 'RON', 'lei', NULL, '4.3197', 'USD'),
(99, 'Russia', 'Rubles', 'RUB', 'руб', NULL, '83.825705', 'USD'),
(100, 'Saint Helena', 'Pounds', 'SHP', '£', NULL, '0.743693', 'USD'),
(101, 'Saudi Arabia', 'Riyals', 'SAR', '﷼', NULL, '3.75058', 'USD'),
(102, 'Serbia', 'Dinars', 'RSD', 'Дин.', NULL, '99.765315', 'USD'),
(103, 'Seychelles', 'Rupees', 'SCR', '₨', NULL, '14.836312', 'USD'),
(104, 'Singapore', 'Dollars', 'SGD', '$', NULL, '1.288631', 'USD'),
(105, 'Slovenia', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(106, 'Solomon Islands', 'Dollars', 'SBD', '$', NULL, '8.223773', 'USD'),
(107, 'Somalia', 'Shillings', 'SOS', 'S', NULL, '571.667327', 'USD'),
(108, 'South Africa', 'Rand', 'ZAR', 'R', NULL, '17.308263', 'USD'),
(109, 'South Korea', 'Won', 'KRW', '₩', NULL, '1401.506563', 'USD'),
(110, 'Spain', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(111, 'Sri Lanka', 'Rupees', 'LKR', '₨', NULL, '302.594842', 'USD'),
(112, 'Sweden', 'Kronor', 'SEK', 'kr', NULL, '9.401034', 'USD'),
(113, 'Switzerland', 'Francs', 'CHF', 'CHF', NULL, '0.795573', 'USD'),
(114, 'Suriname', 'Dollars', 'SRD', '$', NULL, '38.1175', 'USD'),
(115, 'Syria', 'Pounds', 'SYP', '£', NULL, '13002', 'USD'),
(116, 'Taiwan', 'New Dollars', 'TWD', 'NT$', NULL, '30.437302', 'USD'),
(117, 'Thailand', 'Baht', 'THB', '฿', NULL, '32.142', 'USD'),
(118, 'Trinidad and Tobago', 'Dollars', 'TTD', 'TT$', NULL, '6.790063', 'USD'),
(119, 'Turkey', 'Lira', 'TRY', 'TL', NULL, '41.469602', 'USD'),
(120, 'Turkey', 'Liras', 'TRL', '£', NULL, NULL, NULL),
(121, 'Tuvalu', 'Dollars', 'TVD', '$', NULL, NULL, NULL),
(122, 'Ukraine', 'Hryvnia', 'UAH', '₴', NULL, '41.466547', 'USD'),
(123, 'United Kingdom', 'Pounds', 'GBP', '£', NULL, '0.743693', 'USD'),
(124, 'United States of America', 'Dollars', 'USD', '$', NULL, '1', 'USD'),
(125, 'Uruguay', 'Pesos', 'UYU', '$U', NULL, '39.902572', 'USD'),
(126, 'Uzbekistan', 'Sums', 'UZS', 'лв', NULL, '12174.597563', 'USD'),
(127, 'Vatican City', 'Euro', 'EUR', '€', NULL, '0.851297', 'USD'),
(128, 'Venezuela', 'Bolivares Fuertes', 'VEF', 'Bs', NULL, NULL, NULL),
(129, 'Vietnam', 'Dong', 'VND', '₫', NULL, '26402.640724', 'USD'),
(130, 'Yemen', 'Rials', 'YER', '﷼', NULL, '239.25', 'USD'),
(131, 'Zimbabwe', 'Zimbabwe Dollars', 'ZWD', 'Z$', NULL, NULL, NULL),
(132, 'India', 'Rupees', 'INR', '₹', NULL, '88.698008', 'USD');

-- --------------------------------------------------------

--
-- Table structure for table `emergency_pin_logs`
--

DROP TABLE IF EXISTS `emergency_pin_logs`;
CREATE TABLE IF NOT EXISTS `emergency_pin_logs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `kyc_id` bigint UNSIGNED DEFAULT NULL,
  `resident_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenant_id` int DEFAULT NULL,
  `user_id` int DEFAULT NULL,
  `action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_pin_used_at` timestamp NULL DEFAULT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exports`
--

DROP TABLE IF EXISTS `exports`;
CREATE TABLE IF NOT EXISTS `exports` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `file_path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'processing',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exports`
--

INSERT INTO `exports` (`id`, `tenant_id`, `user_id`, `file_path`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'exports/residents_demo_20260611_190515.xlsx', 'done', '2026-06-11 18:05:13', '2026-06-11 18:05:15'),
(2, 1, 1, 'exports/residents_demo_20260612_173440.xlsx', 'done', '2026-06-12 16:34:34', '2026-06-12 16:34:41'),
(3, 1, 1, NULL, 'processing', '2026-06-13 07:36:25', '2026-06-13 07:36:25'),
(4, 1, 1, NULL, 'processing', '2026-06-13 07:37:27', '2026-06-13 07:37:27'),
(5, 1, 1, NULL, 'processing', '2026-06-13 07:42:20', '2026-06-13 07:42:20'),
(6, 1, 1, 'exports/residents_demo_20260613_085049.xlsx', 'done', '2026-06-13 07:50:38', '2026-06-13 07:50:49'),
(7, 1, 5, 'exports/residents_demo_20260626_120602.xlsx', 'done', '2026-06-26 11:06:00', '2026-06-26 11:06:03'),
(8, 1, 5, NULL, 'processing', '2026-06-26 11:11:14', '2026-06-26 11:11:14'),
(9, 1, 5, 'exports/residents_demo_20260626_122153.xlsx', 'done', '2026-06-26 11:21:29', '2026-06-26 11:21:53'),
(10, 1, 5, 'exports/residents_demo_20260626_124315.xlsx', 'done', '2026-06-26 11:43:13', '2026-06-26 11:43:15'),
(11, 1, 5, 'exports/residents_demo_20260626_124840.xlsx', 'done', '2026-06-26 11:48:40', '2026-06-26 11:48:41'),
(12, 1, 5, 'exports/residents_demo_20260626_125409.xlsx', 'done', '2026-06-26 11:54:09', '2026-06-26 11:54:09'),
(13, 1, 5, 'exports/residents_demo_20260626_125835.xlsx', 'done', '2026-06-26 11:58:31', '2026-06-26 11:58:37'),
(14, 1, 5, 'exports/residents_demo_20260626_130103.xlsx', 'done', '2026-06-26 12:01:01', '2026-06-26 12:01:04'),
(15, 1, 5, 'exports/residents_demo_20260626_130435.xlsx', 'done', '2026-06-26 12:04:33', '2026-06-26 12:04:37'),
(16, 1, 5, 'exports/residents_demo_20260626_131236.xlsx', 'done', '2026-06-26 12:12:34', '2026-06-26 12:12:37'),
(17, 1, 5, 'exports/residents_demo_20260626_131727.xlsx', 'done', '2026-06-26 12:17:24', '2026-06-26 12:17:29'),
(18, 1, 5, 'exports/residents_demo_20260626_131826.xlsx', 'done', '2026-06-26 12:18:25', '2026-06-26 12:18:27');

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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kycs`
--

DROP TABLE IF EXISTS `kycs`;
CREATE TABLE IF NOT EXISTS `kycs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `tenant_id` bigint UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `state_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_document` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio_completed` tinyint(1) NOT NULL DEFAULT '0',
  `doc_completed` tinyint(1) NOT NULL DEFAULT '0',
  `face_completed` tinyint(1) NOT NULL DEFAULT '0',
  `kyc_completed` tinyint(1) NOT NULL DEFAULT '0',
  `current_step` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bio',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `face_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `face_confidence` double DEFAULT NULL,
  `face_verified` tinyint(1) NOT NULL DEFAULT '0',
  `occupants` int DEFAULT NULL,
  `resident_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flat_number` bigint UNSIGNED DEFAULT NULL,
  `agent_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agent_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_pin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emergency_pin_used_at` timestamp NULL DEFAULT NULL,
  `emergency_visitor_pin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocr_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocr_gender` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ocr_text` longtext COLLATE utf8mb4_unicode_ci,
  `ocr_verified` tinyint(1) NOT NULL DEFAULT '0',
  `emergency_pin_expires_at` timestamp NULL DEFAULT NULL,
  `emergency_visitor_pin_expires_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kycs_resident_id_unique` (`resident_id`),
  KEY `kycs_user_id_foreign` (`user_id`),
  KEY `kycs_tenant_id_foreign` (`tenant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kycs`
--

INSERT INTO `kycs` (`id`, `user_id`, `tenant_id`, `phone`, `address`, `state_id`, `lga_id`, `id_type`, `id_document`, `bio_completed`, `doc_completed`, `face_completed`, `kyc_completed`, `current_step`, `created_at`, `updated_at`, `face_image`, `face_confidence`, `face_verified`, `occupants`, `resident_id`, `flat_number`, `agent_name`, `agent_number`, `emergency_pin`, `emergency_pin_used_at`, `emergency_visitor_pin`, `gender`, `ocr_name`, `ocr_gender`, `ocr_text`, `ocr_verified`, `emergency_pin_expires_at`, `emergency_visitor_pin_expires_at`) VALUES
(1, 1, 1, '08067932796', 'No 14 adepeju street bariga lagos', '25', '519', 'National ID', 'kyc_docs/tenant_1/mRwW4Iuf8NtAHEe5yVPuQhemLAAV61SqcDB3WpMw.jpg', 1, 1, 1, 1, 'face', '2026-06-09 12:59:29', '2026-06-23 15:18:57', 'kyc_faces/tenant_1/live_1.jpg', 80.162, 1, 6, 'DEMO-ESTATE-000001', 13, NULL, NULL, '663266', '2026-06-11 17:22:28', '704730', 'male', 'SAMUEL OLADELE', 'male', 'Tracking ID:\nS7Y0OG22800075S\nNational Identity Management System\nFederal Republic of Nigeria\nNational Identification Number Slip (NINS)\nSurname: OLADELE\nAddress:\nBLOCK 12 ROOM 3 IJEH POLICE BARRACKS\nNimic\nNIN:\n37743781042\nFirst Name: SAMUEL\nMiddle Name: OLAWOLE\nTIKOYI\nGender:\nM\nLA\nNote: The National Identification Number (NIN) is your identity. It is confidential and may only be released for legitimate transactions.\nYou will be notified when your National Identity Card is ready (for any enquiries please contact)\nhelpdesk@nimc.gov.ng\nwww.nimc.gov.ng\nG700-CALL-NIMC\n(0700-2255-646)\nNational Identity Management Commission\n11, Sokode Crescent, Off Dalaba Street, Zone 5 Wuse, Abuja Nigeria', 1, NULL, NULL),
(2, 2, 1, '08067932796', '12 Sammy street', '13', '252', 'National ID', 'kyc_docs/tenant_1/gnzCQxXefa7nMWVgQAuBMGsv0lKZxnvp0TXLJ3Lk.jpg', 1, 1, 1, 1, 'completed', '2026-06-12 14:45:35', '2026-06-23 16:33:32', 'kyc_faces/tenant_1/live_2.jpg', 80.483, 1, 1, 'DEMO-ESTATE-000002', 2, 'djdjjd', '07047326188', '932936', '2026-06-19 09:43:23', '201479', 'male', 'SAMUEL OLADELE', 'male', 'Tracking ID:\nS7Y0OG22800075S\nNational Identity Management System\nFederal Republic of Nigeria\nNational Identification Number Slip (NINS)\nSurname: OLADELE\nAddress:\nBLOCK 12 ROOM 3 IJEH POLICE BARRACKS\nNimic\nNIN:\n37743781042\nFirst Name: SAMUEL\nMiddle Name: OLAWOLE\nTIKOYI\nGender:\nM\nLA\nNote: The National Identification Number (NIN) is your identity. It is confidential and may only be released for legitimate transactions.\nYou will be notified when your National Identity Card is ready (for any enquiries please contact)\nhelpdesk@nimc.gov.ng\nwww.nimc.gov.ng\nG700-CALL-NIMC\n(0700-2255-646)\nNational Identity Management Commission\n11, Sokode Crescent, Off Dalaba Street, Zone 5 Wuse, Abuja Nigeria', 1, '2026-06-23 16:13:08', NULL),
(3, 5, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'bio', '2026-06-22 15:36:27', '2026-06-22 15:36:27', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lga`
--

DROP TABLE IF EXISTS `lga`;
CREATE TABLE IF NOT EXISTS `lga` (
  `id` int NOT NULL AUTO_INCREMENT,
  `state_id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=775 DEFAULT CHARSET=utf32 COMMENT='Local governments in Nigeria.';

--
-- Dumping data for table `lga`
--

INSERT INTO `lga` (`id`, `state_id`, `name`) VALUES
(1, 1, 'Aba North'),
(2, 1, 'Aba South'),
(3, 1, 'Arochukwu'),
(4, 1, 'Bende'),
(5, 1, 'Ikwuano'),
(6, 1, 'Isiala Ngwa North'),
(7, 1, 'Isiala Ngwa South'),
(8, 1, 'Isuikwuato'),
(9, 1, 'Obi Ngwa'),
(10, 1, 'Ohafia'),
(11, 1, 'Osisioma'),
(12, 1, 'Ugwunagbo'),
(13, 1, 'Ukwa East'),
(14, 1, 'Ukwa West'),
(15, 1, 'Umuahia North'),
(16, 1, 'Umuahia South'),
(17, 1, 'Umu Nneochi'),
(18, 2, 'Demsa'),
(19, 2, 'Fufure'),
(20, 2, 'Ganye'),
(21, 2, 'Gayuk'),
(22, 2, 'Gombi'),
(23, 2, 'Grie'),
(24, 2, 'Hong'),
(25, 2, 'Jada'),
(26, 2, 'Larmurde'),
(27, 2, 'Madagali'),
(28, 2, 'Maiha'),
(29, 2, 'Mayo Belwa'),
(30, 2, 'Michika'),
(31, 2, 'Mubi North'),
(32, 2, 'Mubi South'),
(33, 2, 'Numan'),
(34, 2, 'Shelleng'),
(35, 2, 'Song'),
(36, 2, 'Toungo'),
(37, 2, 'Yola North'),
(38, 2, 'Yola South'),
(39, 3, 'Abak'),
(40, 3, 'Eastern Obolo'),
(41, 3, 'Eket'),
(42, 3, 'Esit Eket'),
(43, 3, 'Essien Udim'),
(44, 3, 'Etim Ekpo'),
(45, 3, 'Etinan'),
(46, 3, 'Ibeno'),
(47, 3, 'Ibesikpo Asutan'),
(48, 3, 'Ibiono-Ibom'),
(49, 3, 'Ika'),
(50, 3, 'Ikono'),
(51, 3, 'Ikot Abasi'),
(52, 3, 'Ikot Ekpene'),
(53, 3, 'Ini'),
(54, 3, 'Itu'),
(55, 3, 'Mbo'),
(56, 3, 'Mkpat-Enin'),
(57, 3, 'Nsit-Atai'),
(58, 3, 'Nsit-Ibom'),
(59, 3, 'Nsit-Ubium'),
(60, 3, 'Obot Akara'),
(61, 3, 'Okobo'),
(62, 3, 'Onna'),
(63, 3, 'Oron'),
(64, 3, 'Oruk Anam'),
(65, 3, 'Udung-Uko'),
(66, 3, 'Ukanafun'),
(67, 3, 'Uruan'),
(68, 3, 'Urue-Offong/Oruko'),
(69, 3, 'Uyo'),
(70, 4, 'Aguata'),
(71, 4, 'Anambra East'),
(72, 4, 'Anambra West'),
(73, 4, 'Anaocha'),
(74, 4, 'Awka North'),
(75, 4, 'Awka South'),
(76, 4, 'Ayamelum'),
(77, 4, 'Dunukofia'),
(78, 4, 'Ekwusigo'),
(79, 4, 'Idemili North'),
(80, 4, 'Idemili South'),
(81, 4, 'Ihiala'),
(82, 4, 'Njikoka'),
(83, 4, 'Nnewi North'),
(84, 4, 'Nnewi South'),
(85, 4, 'Ogbaru'),
(86, 4, 'Onitsha North'),
(87, 4, 'Onitsha South'),
(88, 4, 'Orumba North'),
(89, 4, 'Orumba South'),
(90, 4, 'Oyi'),
(91, 5, 'Alkaleri'),
(92, 5, 'Bauchi'),
(93, 5, 'Bogoro'),
(94, 5, 'Damban'),
(95, 5, 'Darazo'),
(96, 5, 'Dass'),
(97, 5, 'Gamawa'),
(98, 5, 'Ganjuwa'),
(99, 5, 'Giade'),
(100, 5, 'Itas/Gadau'),
(101, 5, 'Jama\'are'),
(102, 5, 'Katagum'),
(103, 5, 'Kirfi'),
(104, 5, 'Misau'),
(105, 5, 'Ningi'),
(106, 5, 'Shira'),
(107, 5, 'Tafawa Balewa'),
(108, 5, 'Toro'),
(109, 5, 'Warji'),
(110, 5, 'Zaki'),
(111, 6, 'Brass'),
(112, 6, 'Ekeremor'),
(113, 6, 'Kolokuma/Opokuma'),
(114, 6, 'Nembe'),
(115, 6, 'Ogbia'),
(116, 6, 'Sagbama'),
(117, 6, 'Southern Ijaw'),
(118, 6, 'Yenagoa'),
(119, 7, 'Agatu'),
(120, 7, 'Apa'),
(121, 7, 'Ado'),
(122, 7, 'Buruku'),
(123, 7, 'Gboko'),
(124, 7, 'Guma'),
(125, 7, 'Gwer East'),
(126, 7, 'Gwer West'),
(127, 7, 'Katsina-Ala'),
(128, 7, 'Konshisha'),
(129, 7, 'Kwande'),
(130, 7, 'Logo'),
(131, 7, 'Makurdi'),
(132, 7, 'Obi'),
(133, 7, 'Ogbadibo'),
(134, 7, 'Ohimini'),
(135, 7, 'Oju'),
(136, 7, 'Okpokwu'),
(137, 7, 'Oturkpo'),
(138, 7, 'Tarka'),
(139, 7, 'Ukum'),
(140, 7, 'Ushongo'),
(141, 7, 'Vandeikya'),
(142, 8, 'Abadam'),
(143, 8, 'Askira/Uba'),
(144, 8, 'Bama'),
(145, 8, 'Bayo'),
(146, 8, 'Biu'),
(147, 8, 'Chibok'),
(148, 8, 'Damboa'),
(149, 8, 'Dikwa'),
(150, 8, 'Gubio'),
(151, 8, 'Guzamala'),
(152, 8, 'Gwoza'),
(153, 8, 'Hawul'),
(154, 8, 'Jere'),
(155, 8, 'Kaga'),
(156, 8, 'Kala/Balge'),
(157, 8, 'Konduga'),
(158, 8, 'Kukawa'),
(159, 8, 'Kwaya Kusar'),
(160, 8, 'Mafa'),
(161, 8, 'Magumeri'),
(162, 8, 'Maiduguri'),
(163, 8, 'Marte'),
(164, 8, 'Mobbar'),
(165, 8, 'Monguno'),
(166, 8, 'Ngala'),
(167, 8, 'Nganzai'),
(168, 8, 'Shani'),
(169, 9, 'Abi'),
(170, 9, 'Akamkpa'),
(171, 9, 'Akpabuyo'),
(172, 9, 'Bakassi'),
(173, 9, 'Bekwarra'),
(174, 9, 'Biase'),
(175, 9, 'Boki'),
(176, 9, 'Calabar Municipal'),
(177, 9, 'Calabar South'),
(178, 9, 'Etung'),
(179, 9, 'Ikom'),
(180, 9, 'Obanliku'),
(181, 9, 'Obubra'),
(182, 9, 'Obudu'),
(183, 9, 'Odukpani'),
(184, 9, 'Ogoja'),
(185, 9, 'Yakuur'),
(186, 9, 'Yala'),
(187, 10, 'Aniocha North'),
(188, 10, 'Aniocha South'),
(189, 10, 'Bomadi'),
(190, 10, 'Burutu'),
(191, 10, 'Ethiope East'),
(192, 10, 'Ethiope West'),
(193, 10, 'Ika North East'),
(194, 10, 'Ika South'),
(195, 10, 'Isoko North'),
(196, 10, 'Isoko South'),
(197, 10, 'Ndokwa East'),
(198, 10, 'Ndokwa West'),
(199, 10, 'Okpe'),
(200, 10, 'Oshimili North'),
(201, 10, 'Oshimili South'),
(202, 10, 'Patani'),
(203, 10, 'Sapele, Delta'),
(204, 10, 'Udu'),
(205, 10, 'Ughelli North'),
(206, 10, 'Ughelli South'),
(207, 10, 'Ukwuani'),
(208, 10, 'Uvwie'),
(209, 10, 'Warri North'),
(210, 10, 'Warri South'),
(211, 10, 'Warri South West'),
(212, 11, 'Abakaliki'),
(213, 11, 'Afikpo North'),
(214, 11, 'Afikpo South'),
(215, 11, 'Ebonyi'),
(216, 11, 'Ezza North'),
(217, 11, 'Ezza South'),
(218, 11, 'Ikwo'),
(219, 11, 'Ishielu'),
(220, 11, 'Ivo'),
(221, 11, 'Izzi'),
(222, 11, 'Ohaozara'),
(223, 11, 'Ohaukwu'),
(224, 11, 'Onicha'),
(225, 12, 'Akoko-Edo'),
(226, 12, 'Egor'),
(227, 12, 'Esan Central'),
(228, 12, 'Esan North-East'),
(229, 12, 'Esan South-East'),
(230, 12, 'Esan West'),
(231, 12, 'Etsako Central'),
(232, 12, 'Etsako East'),
(233, 12, 'Etsako West'),
(234, 12, 'Igueben'),
(235, 12, 'Ikpoba Okha'),
(236, 12, 'Orhionmwon'),
(237, 12, 'Oredo'),
(238, 12, 'Ovia North-East'),
(239, 12, 'Ovia South-West'),
(240, 12, 'Owan East'),
(241, 12, 'Owan West'),
(242, 12, 'Uhunmwonde'),
(243, 13, 'Ado Ekiti'),
(244, 13, 'Efon'),
(245, 13, 'Ekiti East'),
(246, 13, 'Ekiti South-West'),
(247, 13, 'Ekiti West'),
(248, 13, 'Emure'),
(249, 13, 'Gbonyin'),
(250, 13, 'Ido Osi'),
(251, 13, 'Ijero'),
(252, 13, 'Ikere'),
(253, 13, 'Ikole'),
(254, 13, 'Ilejemeje'),
(255, 13, 'Irepodun/Ifelodun'),
(256, 13, 'Ise/Orun'),
(257, 13, 'Moba'),
(258, 13, 'Oye'),
(259, 14, 'Aninri'),
(260, 14, 'Awgu'),
(261, 14, 'Enugu East'),
(262, 14, 'Enugu North'),
(263, 14, 'Enugu South'),
(264, 14, 'Ezeagu'),
(265, 14, 'Igbo Etiti'),
(266, 14, 'Igbo Eze North'),
(267, 14, 'Igbo Eze South'),
(268, 14, 'Isi Uzo'),
(269, 14, 'Nkanu East'),
(270, 14, 'Nkanu West'),
(271, 14, 'Nsukka'),
(272, 14, 'Oji River'),
(273, 14, 'Udenu'),
(274, 14, 'Udi'),
(275, 14, 'Uzo Uwani'),
(276, 15, 'Abaji'),
(277, 15, 'Bwari'),
(278, 15, 'Gwagwalada'),
(279, 15, 'Kuje'),
(280, 15, 'Kwali'),
(281, 15, 'Municipal Area Council'),
(282, 16, 'Akko'),
(283, 16, 'Balanga'),
(284, 16, 'Billiri'),
(285, 16, 'Dukku'),
(286, 16, 'Funakaye'),
(287, 16, 'Gombe'),
(288, 16, 'Kaltungo'),
(289, 16, 'Kwami'),
(290, 16, 'Nafada'),
(291, 16, 'Shongom'),
(292, 16, 'Yamaltu/Deba'),
(293, 17, 'Aboh Mbaise'),
(294, 17, 'Ahiazu Mbaise'),
(295, 17, 'Ehime Mbano'),
(296, 17, 'Ezinihitte'),
(297, 17, 'Ideato North'),
(298, 17, 'Ideato South'),
(299, 17, 'Ihitte/Uboma'),
(300, 17, 'Ikeduru'),
(301, 17, 'Isiala Mbano'),
(302, 17, 'Isu'),
(303, 17, 'Mbaitoli'),
(304, 17, 'Ngor Okpala'),
(305, 17, 'Njaba'),
(306, 17, 'Nkwerre'),
(307, 17, 'Nwangele'),
(308, 17, 'Obowo'),
(309, 17, 'Oguta'),
(310, 17, 'Ohaji/Egbema'),
(311, 17, 'Okigwe'),
(312, 17, 'Orlu'),
(313, 17, 'Orsu'),
(314, 17, 'Oru East'),
(315, 17, 'Oru West'),
(316, 17, 'Owerri Municipal'),
(317, 17, 'Owerri North'),
(318, 17, 'Owerri West'),
(319, 17, 'Unuimo'),
(320, 18, 'Auyo'),
(321, 18, 'Babura'),
(322, 18, 'Biriniwa'),
(323, 18, 'Birnin Kudu'),
(324, 18, 'Buji'),
(325, 18, 'Dutse'),
(326, 18, 'Gagarawa'),
(327, 18, 'Garki'),
(328, 18, 'Gumel'),
(329, 18, 'Guri'),
(330, 18, 'Gwaram'),
(331, 18, 'Gwiwa'),
(332, 18, 'Hadejia'),
(333, 18, 'Jahun'),
(334, 18, 'Kafin Hausa'),
(335, 18, 'Kazaure'),
(336, 18, 'Kiri Kasama'),
(337, 18, 'Kiyawa'),
(338, 18, 'Kaugama'),
(339, 18, 'Maigatari'),
(340, 18, 'Malam Madori'),
(341, 18, 'Miga'),
(342, 18, 'Ringim'),
(343, 18, 'Roni'),
(344, 18, 'Sule Tankarkar'),
(345, 18, 'Taura'),
(346, 18, 'Yankwashi'),
(347, 19, 'Birnin Gwari'),
(348, 19, 'Chikun'),
(349, 19, 'Giwa'),
(350, 19, 'Igabi'),
(351, 19, 'Ikara'),
(352, 19, 'Jaba'),
(353, 19, 'Jema\'a'),
(354, 19, 'Kachia'),
(355, 19, 'Kaduna North'),
(356, 19, 'Kaduna South'),
(357, 19, 'Kagarko'),
(358, 19, 'Kajuru'),
(359, 19, 'Kaura'),
(360, 19, 'Kauru'),
(361, 19, 'Kubau'),
(362, 19, 'Kudan'),
(363, 19, 'Lere'),
(364, 19, 'Makarfi'),
(365, 19, 'Sabon Gari'),
(366, 19, 'Sanga'),
(367, 19, 'Soba'),
(368, 19, 'Zangon Kataf'),
(369, 19, 'Zaria'),
(370, 20, 'Ajingi'),
(371, 20, 'Albasu'),
(372, 20, 'Bagwai'),
(373, 20, 'Bebeji'),
(374, 20, 'Bichi'),
(375, 20, 'Bunkure'),
(376, 20, 'Dala'),
(377, 20, 'Dambatta'),
(378, 20, 'Dawakin Kudu'),
(379, 20, 'Dawakin Tofa'),
(380, 20, 'Doguwa'),
(381, 20, 'Fagge'),
(382, 20, 'Gabasawa'),
(383, 20, 'Garko'),
(384, 20, 'Garun Mallam'),
(385, 20, 'Gaya'),
(386, 20, 'Gezawa'),
(387, 20, 'Gwale'),
(388, 20, 'Gwarzo'),
(389, 20, 'Kabo'),
(390, 20, 'Kano Municipal'),
(391, 20, 'Karaye'),
(392, 20, 'Kibiya'),
(393, 20, 'Kiru'),
(394, 20, 'Kumbotso'),
(395, 20, 'Kunchi'),
(396, 20, 'Kura'),
(397, 20, 'Madobi'),
(398, 20, 'Makoda'),
(399, 20, 'Minjibir'),
(400, 20, 'Nasarawa'),
(401, 20, 'Rano'),
(402, 20, 'Rimin Gado'),
(403, 20, 'Rogo'),
(404, 20, 'Shanono'),
(405, 20, 'Sumaila'),
(406, 20, 'Takai'),
(407, 20, 'Tarauni'),
(408, 20, 'Tofa'),
(409, 20, 'Tsanyawa'),
(410, 20, 'Tudun Wada'),
(411, 20, 'Ungogo'),
(412, 20, 'Warawa'),
(413, 20, 'Wudil'),
(414, 21, 'Bakori'),
(415, 21, 'Batagarawa'),
(416, 21, 'Batsari'),
(417, 21, 'Baure'),
(418, 21, 'Bindawa'),
(419, 21, 'Charanchi'),
(420, 21, 'Dandume'),
(421, 21, 'Danja'),
(422, 21, 'Dan Musa'),
(423, 21, 'Daura'),
(424, 21, 'Dutsi'),
(425, 21, 'Dutsin Ma'),
(426, 21, 'Faskari'),
(427, 21, 'Funtua'),
(428, 21, 'Ingawa'),
(429, 21, 'Jibia'),
(430, 21, 'Kafur'),
(431, 21, 'Kaita'),
(432, 21, 'Kankara'),
(433, 21, 'Kankia'),
(434, 21, 'Katsina'),
(435, 21, 'Kurfi'),
(436, 21, 'Kusada'),
(437, 21, 'Mai\'Adua'),
(438, 21, 'Malumfashi'),
(439, 21, 'Mani'),
(440, 21, 'Mashi'),
(441, 21, 'Matazu'),
(442, 21, 'Musawa'),
(443, 21, 'Rimi'),
(444, 21, 'Sabuwa'),
(445, 21, 'Safana'),
(446, 21, 'Sandamu'),
(447, 21, 'Zango'),
(448, 22, 'Aleiro'),
(449, 22, 'Arewa Dandi'),
(450, 22, 'Argungu'),
(451, 22, 'Augie'),
(452, 22, 'Bagudo'),
(453, 22, 'Birnin Kebbi'),
(454, 22, 'Bunza'),
(455, 22, 'Dandi'),
(456, 22, 'Fakai'),
(457, 22, 'Gwandu'),
(458, 22, 'Jega'),
(459, 22, 'Kalgo'),
(460, 22, 'Koko/Besse'),
(461, 22, 'Maiyama'),
(462, 22, 'Ngaski'),
(463, 22, 'Sakaba'),
(464, 22, 'Shanga'),
(465, 22, 'Suru'),
(466, 22, 'Wasagu/Danko'),
(467, 22, 'Yauri'),
(468, 22, 'Zuru'),
(469, 23, 'Adavi'),
(470, 23, 'Ajaokuta'),
(471, 23, 'Ankpa'),
(472, 23, 'Bassa'),
(473, 23, 'Dekina'),
(474, 23, 'Ibaji'),
(475, 23, 'Idah'),
(476, 23, 'Igalamela Odolu'),
(477, 23, 'Ijumu'),
(478, 23, 'Kabba/Bunu'),
(479, 23, 'Kogi'),
(480, 23, 'Lokoja'),
(481, 23, 'Mopa Muro'),
(482, 23, 'Ofu'),
(483, 23, 'Ogori/Magongo'),
(484, 23, 'Okehi'),
(485, 23, 'Okene'),
(486, 23, 'Olamaboro'),
(487, 23, 'Omala'),
(488, 23, 'Yagba East'),
(489, 23, 'Yagba West'),
(490, 24, 'Asa'),
(491, 24, 'Baruten'),
(492, 24, 'Edu'),
(493, 24, 'Ekiti, Kwara State'),
(494, 24, 'Ifelodun'),
(495, 24, 'Ilorin East'),
(496, 24, 'Ilorin South'),
(497, 24, 'Ilorin West'),
(498, 24, 'Irepodun'),
(499, 24, 'Isin'),
(500, 24, 'Kaiama'),
(501, 24, 'Moro'),
(502, 24, 'Offa'),
(503, 24, 'Oke Ero'),
(504, 24, 'Oyun'),
(505, 24, 'Pategi'),
(506, 25, 'Agege'),
(507, 25, 'Ajeromi-Ifelodun'),
(508, 25, 'Alimosho'),
(509, 25, 'Amuwo-Odofin'),
(510, 25, 'Apapa'),
(511, 25, 'Badagry'),
(512, 25, 'Epe'),
(513, 25, 'Eti Osa'),
(514, 25, 'Ibeju-Lekki'),
(515, 25, 'Ifako-Ijaiye'),
(516, 25, 'Ikeja'),
(517, 25, 'Ikorodu'),
(518, 25, 'Kosofe'),
(519, 25, 'Lagos Island'),
(520, 25, 'Lagos Mainland'),
(521, 25, 'Mushin'),
(522, 25, 'Ojo'),
(523, 25, 'Oshodi-Isolo'),
(524, 25, 'Shomolu'),
(525, 25, 'Surulere, Lagos State'),
(526, 26, 'Akwanga'),
(527, 26, 'Awe'),
(528, 26, 'Doma'),
(529, 26, 'Karu'),
(530, 26, 'Keana'),
(531, 26, 'Keffi'),
(532, 26, 'Kokona'),
(533, 26, 'Lafia'),
(534, 26, 'Nasarawa'),
(535, 26, 'Nasarawa Egon'),
(536, 26, 'Obi'),
(537, 26, 'Toto'),
(538, 26, 'Wamba'),
(539, 27, 'Agaie'),
(540, 27, 'Agwara'),
(541, 27, 'Bida'),
(542, 27, 'Borgu'),
(543, 27, 'Bosso'),
(544, 27, 'Chanchaga'),
(545, 27, 'Edati'),
(546, 27, 'Gbako'),
(547, 27, 'Gurara'),
(548, 27, 'Katcha'),
(549, 27, 'Kontagora'),
(550, 27, 'Lapai'),
(551, 27, 'Lavun'),
(552, 27, 'Magama'),
(553, 27, 'Mariga'),
(554, 27, 'Mashegu'),
(555, 27, 'Mokwa'),
(556, 27, 'Moya'),
(557, 27, 'Paikoro'),
(558, 27, 'Rafi'),
(559, 27, 'Rijau'),
(560, 27, 'Shiroro'),
(561, 27, 'Suleja'),
(562, 27, 'Tafa'),
(563, 27, 'Wushishi'),
(564, 28, 'Abeokuta North'),
(565, 28, 'Abeokuta South'),
(566, 28, 'Ado-Odo/Ota'),
(567, 28, 'Egbado North'),
(568, 28, 'Egbado South'),
(569, 28, 'Ewekoro'),
(570, 28, 'Ifo'),
(571, 28, 'Ijebu East'),
(572, 28, 'Ijebu North'),
(573, 28, 'Ijebu North East'),
(574, 28, 'Ijebu Ode'),
(575, 28, 'Ikenne'),
(576, 28, 'Imeko Afon'),
(577, 28, 'Ipokia'),
(578, 28, 'Obafemi Owode'),
(579, 28, 'Odeda'),
(580, 28, 'Odogbolu'),
(581, 28, 'Ogun Waterside'),
(582, 28, 'Remo North'),
(583, 28, 'Shagamu'),
(584, 29, 'Akoko North-East'),
(585, 29, 'Akoko North-West'),
(586, 29, 'Akoko South-West'),
(587, 29, 'Akoko South-East'),
(588, 29, 'Akure North'),
(589, 29, 'Akure South'),
(590, 29, 'Ese Odo'),
(591, 29, 'Idanre'),
(592, 29, 'Ifedore'),
(593, 29, 'Ilaje'),
(594, 29, 'Ile Oluji/Okeigbo'),
(595, 29, 'Irele'),
(596, 29, 'Odigbo'),
(597, 29, 'Okitipupa'),
(598, 29, 'Ondo East'),
(599, 29, 'Ondo West'),
(600, 29, 'Ose'),
(601, 29, 'Owo'),
(602, 30, 'Atakunmosa East'),
(603, 30, 'Atakunmosa West'),
(604, 30, 'Aiyedaade'),
(605, 30, 'Aiyedire'),
(606, 30, 'Boluwaduro'),
(607, 30, 'Boripe'),
(608, 30, 'Ede North'),
(609, 30, 'Ede South'),
(610, 30, 'Ife Central'),
(611, 30, 'Ife East'),
(612, 30, 'Ife North'),
(613, 30, 'Ife South'),
(614, 30, 'Egbedore'),
(615, 30, 'Ejigbo'),
(616, 30, 'Ifedayo'),
(617, 30, 'Ifelodun'),
(618, 30, 'Ila'),
(619, 30, 'Ilesa East'),
(620, 30, 'Ilesa West'),
(621, 30, 'Irepodun'),
(622, 30, 'Irewole'),
(623, 30, 'Isokan'),
(624, 30, 'Iwo'),
(625, 30, 'Obokun'),
(626, 30, 'Odo Otin'),
(627, 30, 'Ola Oluwa'),
(628, 30, 'Olorunda'),
(629, 30, 'Oriade'),
(630, 30, 'Orolu'),
(631, 30, 'Osogbo'),
(632, 31, 'Afijio'),
(633, 31, 'Akinyele'),
(634, 31, 'Atiba'),
(635, 31, 'Atisbo'),
(636, 31, 'Egbeda'),
(637, 31, 'Ibadan North'),
(638, 31, 'Ibadan North-East'),
(639, 31, 'Ibadan North-West'),
(640, 31, 'Ibadan South-East'),
(641, 31, 'Ibadan South-West'),
(642, 31, 'Ibarapa Central'),
(643, 31, 'Ibarapa East'),
(644, 31, 'Ibarapa North'),
(645, 31, 'Ido'),
(646, 31, 'Irepo'),
(647, 31, 'Iseyin'),
(648, 31, 'Itesiwaju'),
(649, 31, 'Iwajowa'),
(650, 31, 'Kajola'),
(651, 31, 'Lagelu'),
(652, 31, 'Ogbomosho North'),
(653, 31, 'Ogbomosho South'),
(654, 31, 'Ogo Oluwa'),
(655, 31, 'Olorunsogo'),
(656, 31, 'Oluyole'),
(657, 31, 'Ona Ara'),
(658, 31, 'Orelope'),
(659, 31, 'Ori Ire'),
(660, 31, 'Oyo'),
(661, 31, 'Oyo East'),
(662, 31, 'Saki East'),
(663, 31, 'Saki West'),
(664, 31, 'Surulere, Oyo State'),
(665, 32, 'Bokkos'),
(666, 32, 'Barkin Ladi'),
(667, 32, 'Bassa'),
(668, 32, 'Jos East'),
(669, 32, 'Jos North'),
(670, 32, 'Jos South'),
(671, 32, 'Kanam'),
(672, 32, 'Kanke'),
(673, 32, 'Langtang South'),
(674, 32, 'Langtang North'),
(675, 32, 'Mangu'),
(676, 32, 'Mikang'),
(677, 32, 'Pankshin'),
(678, 32, 'Qua\'an Pan'),
(679, 32, 'Riyom'),
(680, 32, 'Shendam'),
(681, 32, 'Wase'),
(682, 33, 'Abua/Odual'),
(683, 33, 'Ahoada East'),
(684, 33, 'Ahoada West'),
(685, 33, 'Akuku-Toru'),
(686, 33, 'Andoni'),
(687, 33, 'Asari-Toru'),
(688, 33, 'Bonny'),
(689, 33, 'Degema'),
(690, 33, 'Eleme'),
(691, 33, 'Emuoha'),
(692, 33, 'Etche'),
(693, 33, 'Gokana'),
(694, 33, 'Ikwerre'),
(695, 33, 'Khana'),
(696, 33, 'Obio/Akpor'),
(697, 33, 'Ogba/Egbema/Ndoni'),
(698, 33, 'Ogu/Bolo'),
(699, 33, 'Okrika'),
(700, 33, 'Omuma'),
(701, 33, 'Opobo/Nkoro'),
(702, 33, 'Oyigbo'),
(703, 33, 'Port Harcourt'),
(704, 33, 'Tai'),
(705, 34, 'Binji'),
(706, 34, 'Bodinga'),
(707, 34, 'Dange Shuni'),
(708, 34, 'Gada'),
(709, 34, 'Goronyo'),
(710, 34, 'Gudu'),
(711, 34, 'Gwadabawa'),
(712, 34, 'Illela'),
(713, 34, 'Isa'),
(714, 34, 'Kebbe'),
(715, 34, 'Kware'),
(716, 34, 'Rabah'),
(717, 34, 'Sabon Birni'),
(718, 34, 'Shagari'),
(719, 34, 'Silame'),
(720, 34, 'Sokoto North'),
(721, 34, 'Sokoto South'),
(722, 34, 'Tambuwal'),
(723, 34, 'Tangaza'),
(724, 34, 'Tureta'),
(725, 34, 'Wamako'),
(726, 34, 'Wurno'),
(727, 34, 'Yabo'),
(728, 35, 'Ardo Kola'),
(729, 35, 'Bali'),
(730, 35, 'Donga'),
(731, 35, 'Gashaka'),
(732, 35, 'Gassol'),
(733, 35, 'Ibi'),
(734, 35, 'Jalingo'),
(735, 35, 'Karim Lamido'),
(736, 35, 'Kumi'),
(737, 35, 'Lau'),
(738, 35, 'Sardauna'),
(739, 35, 'Takum'),
(740, 35, 'Ussa'),
(741, 35, 'Wukari'),
(742, 35, 'Yorro'),
(743, 35, 'Zing'),
(744, 36, 'Bade'),
(745, 36, 'Bursari'),
(746, 36, 'Damaturu'),
(747, 36, 'Fika'),
(748, 36, 'Fune'),
(749, 36, 'Geidam'),
(750, 36, 'Gujba'),
(751, 36, 'Gulani'),
(752, 36, 'Jakusko'),
(753, 36, 'Karasuwa'),
(754, 36, 'Machina'),
(755, 36, 'Nangere'),
(756, 36, 'Nguru'),
(757, 36, 'Potiskum'),
(758, 36, 'Tarmuwa'),
(759, 36, 'Yunusari'),
(760, 36, 'Yusufari'),
(761, 37, 'Anka'),
(762, 37, 'Bakura'),
(763, 37, 'Birnin Magaji/Kiyaw'),
(764, 37, 'Bukkuyum'),
(765, 37, 'Bungudu'),
(766, 37, 'Gummi'),
(767, 37, 'Gusau'),
(768, 37, 'Kaura Namoda'),
(769, 37, 'Maradun'),
(770, 37, 'Maru'),
(771, 37, 'Shinkafi'),
(772, 37, 'Talata Mafara'),
(773, 37, 'Chafe'),
(774, 37, 'Zurmi');

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
) ENGINE=MyISAM AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(79, '0001_01_01_000000_create_users_table', 1),
(80, '0001_01_01_000001_create_cache_table', 1),
(81, '0001_01_01_000002_create_jobs_table', 1),
(82, '2025_12_09_202025_create_tenants_table', 1),
(83, '2025_12_09_203206_add_tenant_id_to_users_table', 1),
(84, '2025_12_15_164256_add_soft_deletes_to_tenants_table', 1),
(85, '2025_12_15_164537_add_soft_deletes_to_users_table', 1),
(86, '2025_12_15_165404_create_personal_access_tokens_table', 1),
(87, '2025_12_16_144501_add_role_to_users_table', 1),
(88, '2025_12_17_132839_add_face_verification_to_users_table', 1),
(89, '2025_12_17_172835_create_kycs_table', 1),
(90, '2025_12_18_002931_create_states_table', 1),
(91, '2025_12_18_002944_create_lgas_table', 1),
(92, '2025_12_19_013753_add_face_image_to_kycs_table', 1),
(93, '2025_12_19_024208_add_face_confidence_to_kycs_table', 1),
(94, '2025_12_20_112252_create_resident_wallets_table', 1),
(95, '2025_12_20_131610_add_occupants_to_kycs_table', 1),
(96, '2025_12_20_141127_add_resident_id_to_kycs_table', 1),
(97, '2026_01_22_120536_create_visitor_invitation_table', 1),
(98, '2026_01_22_131905_add_status_and_fees_status_to_users_table', 1),
(99, '2026_01_22_161234_create_visitors_table', 1),
(100, '2026_01_22_170504_add_flat_number_agent_name_agent_number_to_kycs_table', 2),
(103, '2026_01_22_171641_add_name_to_states_table', 3),
(104, '2026_01_25_174530_create_access_logs_table', 4),
(105, '2026_01_25_175703_add_exit_fields_to_visitor_invitations', 5),
(106, '2026_01_31_092521_add_delete_status_to_visitor_invitation', 6),
(107, '2026_01_31_101702_add_access_code_to_visitor_invitation', 7),
(108, '2026_02_14_161109_add_invited_resident_id_to_visitor_invitation', 8),
(110, '2026_02_24_132738_add_verification_code_to_users_table', 9),
(115, '2026_03_05_132911_create_subscriptions_table', 10),
(116, '2026_03_05_143355_create_subscription_plans_table', 10),
(117, '2026_04_01_135335_create_subaccounts_table', 11),
(118, '2026_04_04_182113_add_service_agreement_to_tenants_table', 12),
(119, '2026_06_09_132055_add_emergency_pin_to_kycs_table', 13),
(123, '2026_06_09_151541_create_emergency_pin_logs_table', 14),
(124, '2026_06_10_163142_create_exports_table', 15),
(125, '2026_06_11_172623_add_emergency_visitor_pin_to_kycs_table', 16),
(126, '2026_06_12_144127_add_gender_to_kycs_table', 17),
(127, '2026_06_15_125701_add_ocr_columns_to_kycs_table', 18),
(128, '2026_06_22_162202_add_user_agreement_to_users_table', 19),
(129, '2026_06_22_162740_add_user_agreement_to_users_table', 20),
(130, '2026_06_23_164911_add_emergency_pin_expires_at_to_kycs_table', 21),
(131, '2026_06_23_171859_add_emergency_visitor_pin_expires_at_to_kycs_table', 22);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('747afb26-6ad6-4a0d-800e-45610e2df255', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 2, '{\"title\":\"KYC Successful\",\"message\":\"Your KYC  is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', NULL, '2026-06-12 14:49:19', '2026-06-12 14:49:19'),
('feb371e0-7144-490c-9c2e-6c5f7e34d5f0', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 2, '{\"title\":\"KYC Successful\",\"message\":\"Your KYC  is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', NULL, '2026-06-19 09:43:23', '2026-06-19 09:43:23'),
('150628ed-f9b7-4668-a002-3ab930c923a7', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 2, '{\"title\":\"Top-up Successful\",\"message\":\"Your topup of \\u20a65000 is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', NULL, '2026-06-19 12:49:15', '2026-06-19 12:49:15');

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
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  KEY `personal_access_tokens_expires_at_index` (`expires_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resident_wallets`
--

DROP TABLE IF EXISTS `resident_wallets`;
CREATE TABLE IF NOT EXISTS `resident_wallets` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `currency_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` decimal(16,2) NOT NULL DEFAULT '0.00',
  `minimium_balance` decimal(16,2) NOT NULL DEFAULT '0.00',
  `status` int DEFAULT NULL,
  `currency_id` int DEFAULT NULL,
  `tenant_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `resident_wallets_uuid_unique` (`uuid`),
  KEY `resident_wallets_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_wallets`
--

INSERT INTO `resident_wallets` (`id`, `uuid`, `user_id`, `currency_code`, `balance`, `minimium_balance`, `status`, `currency_id`, `tenant_id`, `created_at`, `updated_at`) VALUES
(1, '5f378e03-5356-4be0-9f1b-05edc9c9a52f', 1, 'NGN', 0.00, 0.00, 1, 87, 1, '2026-06-09 11:56:00', '2026-06-09 11:56:00'),
(2, 'f3667d99-1ed0-4223-a91f-da4d88c29b66', 2, 'NGN', 5000.00, 0.00, 1, 87, 1, '2026-06-12 14:44:29', '2026-06-12 14:44:29'),
(3, 'c51d9c3e-a622-490d-ade4-8dbfc42e4c55', 4, 'NGN', 0.00, 0.00, 1, 87, 1, '2026-06-22 15:33:08', '2026-06-22 15:33:08'),
(4, 'f744a9ee-ee8e-47b3-ae57-83af7c4f2b86', 5, 'NGN', 0.00, 0.00, 1, 87, 1, '2026-06-22 15:36:00', '2026-06-22 15:36:00');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('cHGcdG9Lms2owPkKI0eLCU9F3TC8gZiW2KP5mH4x', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSTZBcnhHTFdYanI2ZllBRWVlODhoWTBObTdXSFNzdXVQckRsVzViVSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly9kZW1vLmxvY2FsaG9zdDo4MDAwL2FsbHJlc2lkZW50cyI7czo1OiJyb3V0ZSI7czoxOToiYWxscmVzaWRlbnQuZGV0YWlscyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1782469440),
('4kcmmfLZQmhQuceDQeqjrXuRKgnkfbkNdiyKJNcS', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZE1IRTZGZ1B1WHpEenpDMU5aWFpFRUhUbGpQQVJVSTk2d216WTZYWCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782828965),
('lk8e85ALq5bb00NGNVN8gwr3mlm0bV9w8QLW3RNX', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOWZGekJBSkttaEppVU5oMml5bzBMSGxOaWlsRGNNWmUyZ1EweUJuUiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC90ZXJtc19wZGYvYXVuZ19vbmVfdGVybXMucGRmIjtzOjU6InJvdXRlIjtzOjk6Im5ld190ZXJtcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1782829778),
('WPUR6i1cBq0YZlBDmARVi7yOftQCAaRKxAKWAeXx', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMWFxNHlzaVV5NVpxVXQ2YjVvMkp3TjVQakhUTjlMMmVhQ0tkYzhHeSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NTU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zZXJ2aWNlX3BkZi9zZXJ2aWNlX2FncmVlbWVudC5wZGYiO3M6NToicm91dGUiO3M6MjE6Im5ld19zZXJ2aWNlX2FncmVlbWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTc6ImxvZ2luX3N1cGVyYWRtaW5fNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO30=', 1782479255),
('VosTJbymQWdJTAiI7ROIhLm1DPwqValhtxudEq4Q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiamQ2d3FnTkxkUlJzN2UzcHhBeXlDOWh2NXI2c0d6b2ZJSWoybVIxNCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782571469),
('XknhYixJa1Xo0774ATjcWuMZL0O8e8QvD72cJovN', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiOXhBZkVpVnp5SUJndFdzNlFNcFRUVVluN2dMNGkyZFZDTDRtWGxRZCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782571835),
('uccgT3iM9GapaLxDhQxlkhKWm6ZGZgSXxiEtctjc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib2p0eFlKNDE0WVc0MXl2eE5UNmVpVDVqZTlEbDVtMWFjWnRTd3RCMyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782572654),
('YfpSDSQy2r66bdHbY0B0NpvkjeQEIeqjRbgES3sh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/149.0.0.0 Safari/537.36 Edg/149.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZFVBckIyNlBqanRVaDJQbk9DOHdXSDJhMENMVkJ6QUo3MjFQS01FMCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1782573066);

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='States in Nigeria.';

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`) VALUES
(1, 'Abia'),
(2, 'Adamawa'),
(3, 'Akwa Ibom'),
(4, 'Anambra'),
(5, 'Bauchi'),
(6, 'Bayelsa'),
(7, 'Benue'),
(8, 'Borno'),
(9, 'Cross River'),
(10, 'Delta'),
(11, 'Ebonyi'),
(12, 'Edo'),
(13, 'Ekiti'),
(14, 'Enugu'),
(15, 'FCT'),
(16, 'Gombe'),
(17, 'Imo'),
(18, 'Jigawa'),
(19, 'Kaduna'),
(20, 'Kano'),
(21, 'Katsina'),
(22, 'Kebbi'),
(23, 'Kogi'),
(24, 'Kwara'),
(25, 'Lagos'),
(26, 'Nasarawa'),
(27, 'Niger'),
(28, 'Ogun'),
(29, 'Ondo'),
(30, 'Osun'),
(31, 'Oyo'),
(32, 'Plateau'),
(33, 'Rivers'),
(34, 'Sokoto'),
(35, 'Taraba'),
(36, 'Yobe'),
(37, 'Zamfara');

-- --------------------------------------------------------

--
-- Table structure for table `subaccounts`
--

DROP TABLE IF EXISTS `subaccounts`;
CREATE TABLE IF NOT EXISTS `subaccounts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tenant_id` bigint UNSIGNED NOT NULL,
  `subaccount_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `business_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subaccounts_tenant_id_foreign` (`tenant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED NOT NULL,
  `subscription_plan_id` bigint UNSIGNED NOT NULL,
  `billing_cycle` enum('monthly','yearly') COLLATE utf8mb4_unicode_ci NOT NULL,
  `starts_at` timestamp NOT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `status` enum('active','cancelled','expired') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `authorization_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tenant_id` int DEFAULT NULL,
  `auto_renew_queued` tinyint(1) NOT NULL DEFAULT '0',
  `reminder_sent_at` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subscriptions_user_id_foreign` (`user_id`),
  KEY `subscriptions_subscription_plan_id_foreign` (`subscription_plan_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscription_plans`
--

DROP TABLE IF EXISTS `subscription_plans`;
CREATE TABLE IF NOT EXISTS `subscription_plans` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `price` decimal(10,2) NOT NULL,
  `duration` enum('monthly','yearly') COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `tenant_id` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscription_plans`
--

INSERT INTO `subscription_plans` (`id`, `name`, `description`, `price`, `duration`, `is_active`, `tenant_id`, `created_at`, `updated_at`) VALUES
(1, 'pro', 'This is a pro subscription', 100.00, 'monthly', 1, 1, '2026-06-19 09:12:46', '2026-06-19 09:12:46'),
(2, 'Gold', 'This is a gold subscription', 1200.00, 'yearly', 1, 1, '2026-06-19 09:13:22', '2026-06-19 09:13:22');

-- --------------------------------------------------------

--
-- Table structure for table `tenants`
--

DROP TABLE IF EXISTS `tenants`;
CREATE TABLE IF NOT EXISTS `tenants` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdomain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `service_agreement_accepted` tinyint(1) NOT NULL DEFAULT '0',
  `service_agreement_accepted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenants_subdomain_unique` (`subdomain`),
  KEY `tenants_subdomain_index` (`subdomain`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `first_name`, `last_name`, `estate_name`, `subdomain`, `created_at`, `updated_at`, `deleted_at`, `service_agreement_accepted`, `service_agreement_accepted_at`) VALUES
(1, 'demo', 'doe', 'demo', 'demo', '2026-06-08 18:26:10', '2026-06-08 18:26:10', NULL, 1, '2026-06-08 18:26:10');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

DROP TABLE IF EXISTS `transactions`;
CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reference` varchar(225) DEFAULT NULL,
  `amount` int DEFAULT NULL,
  `user_id` varchar(255) DEFAULT NULL,
  `receiver_id` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `currency` varchar(255) DEFAULT NULL,
  `webhook_status` varchar(255) DEFAULT NULL,
  `paid_at` varchar(255) DEFAULT NULL,
  `remarks` varchar(255) DEFAULT NULL,
  `gateway` varchar(255) DEFAULT NULL,
  `subscription_id` int DEFAULT NULL,
  `tenant_id` int DEFAULT NULL,
  `platform_earning` int DEFAULT NULL,
  `tenant_earning` int DEFAULT NULL,
  `channel` varchar(255) DEFAULT NULL,
  `fees` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `reference`, `amount`, `user_id`, `receiver_id`, `status`, `currency`, `webhook_status`, `paid_at`, `remarks`, `gateway`, `subscription_id`, `tenant_id`, `platform_earning`, `tenant_earning`, `channel`, `fees`, `created_at`, `updated_at`) VALUES
(1, 'xnomi5m8o3', 5000, '2', NULL, 'success', 'NGN', NULL, '2026-06-19T12:49:10.000Z', 'Fund wallet', 'Paystack', NULL, 1, NULL, NULL, NULL, NULL, '2026-06-19 12:49:15', '2026-06-19 12:49:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tenant_id` bigint UNSIGNED DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `face_verified` tinyint(1) NOT NULL DEFAULT '0',
  `face_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `fees_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'clear',
  `verification_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_code_sent_at` timestamp NULL DEFAULT NULL,
  `user_agreement_accepted` tinyint(1) NOT NULL DEFAULT '0',
  `user_agreement_accepted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_tenant_id_foreign` (`tenant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tenant_id`, `deleted_at`, `role`, `face_verified`, `face_image`, `status`, `fees_status`, `verification_code`, `verification_code_sent_at`, `user_agreement_accepted`, `user_agreement_accepted_at`) VALUES
(1, 'Samuel', 'Oladele', 'oladelesamuel488@gmail.com', '2026-06-09 11:56:33', '$2y$12$SgPGXBf.jugbOHpeiXzpc.wdlPtXrwkFlCmVX5sUILj2lqgGiqyyi', NULL, '2026-06-09 11:56:00', '2026-06-19 11:24:03', 1, NULL, 'admin', 0, NULL, 'active', 'clear', NULL, NULL, 0, NULL),
(2, 'Samuel', 'Oladele', 'sammyola122@gmail.com', '2026-06-12 14:45:34', '$2y$12$dus4n5etfZpjnHA/nQhrzutNxyb3dQ9iGNVD6lQGgn9hOn5XnnKVu', NULL, '2026-06-12 14:44:29', '2026-06-19 09:40:11', 1, NULL, 'user', 0, NULL, 'active', 'clear', NULL, NULL, 0, NULL),
(3, 'Super', 'Admin', 'superadmin@gmail.com', '2026-06-09 11:56:33', '$2y$12$SgPGXBf.jugbOHpeiXzpc.wdlPtXrwkFlCmVX5sUILj2lqgGiqyyi', NULL, '2026-06-09 11:56:00', '2026-06-18 16:19:17', NULL, NULL, 'superadmin', 0, NULL, 'active', 'clear', NULL, NULL, 0, NULL),
(5, 'kelvin', 'Deo', 'kelvin@gmail.com', '2026-06-22 15:36:26', '$2y$12$dgpjDrjoPA.PdgOUO/jpaeJtQifa97MyTwaAEh/RIwqwIK2OFEzZq', NULL, '2026-06-22 15:35:59', '2026-06-22 15:36:26', 1, NULL, 'user', 0, NULL, 'active', 'clear', NULL, NULL, 1, '2026-06-22 15:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `user_auto_code`
--

DROP TABLE IF EXISTS `user_auto_code`;
CREATE TABLE IF NOT EXISTS `user_auto_code` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) DEFAULT NULL,
  `auth_code` text,
  `amount` varchar(255) DEFAULT NULL,
  `last4` varchar(255) DEFAULT NULL,
  `exp_month` varchar(225) DEFAULT NULL,
  `exp_year` varchar(255) DEFAULT NULL,
  `card_type` varchar(255) DEFAULT NULL,
  `bank` varchar(255) DEFAULT NULL,
  `country_code` varchar(225) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_auto_code`
--

INSERT INTO `user_auto_code` (`id`, `user_id`, `auth_code`, `amount`, `last4`, `exp_month`, `exp_year`, `card_type`, `bank`, `country_code`) VALUES
(1, '2', 'AUTH_bk1vyvh0kj', '5000', NULL, NULL, NULL, NULL, NULL, 'NG');

-- --------------------------------------------------------

--
-- Table structure for table `user_statistics`
--

DROP TABLE IF EXISTS `user_statistics`;
CREATE TABLE IF NOT EXISTS `user_statistics` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `login_count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `invite_members` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `upload_release` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `funds_added_count` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login_date` date DEFAULT NULL,
  `referral_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by` bigint UNSIGNED DEFAULT NULL,
  `invite_points` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_topup` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coin_balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `account_creation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_purchase` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_statistics_referral_code_unique` (`referral_code`),
  KEY `user_statistics_user_id_foreign` (`user_id`),
  KEY `user_statistics_referred_by_foreign` (`referred_by`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

DROP TABLE IF EXISTS `visitors`;
CREATE TABLE IF NOT EXISTS `visitors` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_invitation`
--

DROP TABLE IF EXISTS `visitor_invitation`;
CREATE TABLE IF NOT EXISTS `visitor_invitation` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `resident_id` bigint UNSIGNED NOT NULL,
  `visitor_id` bigint UNSIGNED DEFAULT NULL,
  `purpose` longtext COLLATE utf8mb4_unicode_ci,
  `visit_date` date NOT NULL,
  `valid_from` time NOT NULL,
  `valid_to` time NOT NULL,
  `qr_token` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('pending','used','exited','expired') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `used_at` timestamp NULL DEFAULT NULL,
  `exited_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `delete_status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `access_code` longtext COLLATE utf8mb4_unicode_ci,
  `invited_resident_id` bigint UNSIGNED DEFAULT NULL,
  `tenant_id` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `visitor_invitation_visitor_id_foreign` (`visitor_id`),
  KEY `visitor_invitation_invited_resident_id_foreign` (`invited_resident_id`),
  KEY `visitor_invitation_index` (`resident_id`,`visitor_id`,`tenant_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
