-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 31, 2026 at 04:49 PM
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
-- Database: `aungproject`
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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access_logs`
--

INSERT INTO `access_logs` (`id`, `invitation_id`, `gate_name`, `security_id`, `action`, `created_at`, `updated_at`) VALUES
(1, 1, 'Main Gate', NULL, 'entry', '2026-02-11 13:56:47', '2026-02-11 13:56:47'),
(2, 2, 'Main Gate', NULL, 'entry', '2026-02-11 14:45:40', '2026-02-11 14:45:40'),
(3, 3, 'Main Gate', NULL, 'entry', '2026-02-11 15:17:48', '2026-02-11 15:17:48'),
(4, 2, 'Main Gate', NULL, 'exit', '2026-02-11 15:18:10', '2026-02-11 15:18:10'),
(5, 1, 'Main Gate', NULL, 'entry', '2026-02-11 15:19:18', '2026-02-11 15:19:18'),
(6, 2, 'Main Gate', NULL, 'exit', '2026-02-11 15:21:16', '2026-02-11 15:21:16'),
(7, 2, 'Main Gate', NULL, 'exit', '2026-02-11 15:24:01', '2026-02-11 15:24:01'),
(8, 2, 'Main Gate', NULL, 'exit', '2026-02-11 15:26:34', '2026-02-11 15:26:34'),
(9, 2, 'Main Gate', NULL, 'exit', '2026-02-11 15:27:38', '2026-02-11 15:27:38'),
(10, 2, 'Main Gate', NULL, 'exit', '2026-02-11 15:28:53', '2026-02-11 15:28:53');

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(17, 'default', '{\"uuid\":\"cef93fbe-ccf7-4a15-8f2d-fbcd7d077c81\",\"displayName\":\"App\\\\Mail\\\\VisitorMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Mail\\\\SendQueuedMailable\",\"command\":\"O:34:\\\"Illuminate\\\\Mail\\\\SendQueuedMailable\\\":17:{s:8:\\\"mailable\\\";O:20:\\\"App\\\\Mail\\\\VisitorMail\\\":6:{s:7:\\\"visitor\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:18:\\\"App\\\\Models\\\\Visitor\\\";s:2:\\\"id\\\";i:4;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:10:\\\"invitation\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:28:\\\"App\\\\Models\\\\VisitorInvitation\\\";s:2:\\\"id\\\";i:8;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:6:\\\"tenant\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:17:\\\"App\\\\Models\\\\Tenant\\\";s:2:\\\"id\\\";i:1;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:16:\\\"isResidentInvite\\\";b:0;s:2:\\\"to\\\";a:1:{i:0;a:2:{s:4:\\\"name\\\";N;s:7:\\\"address\\\";s:14:\\\"bobb@gmail.com\\\";}}s:6:\\\"mailer\\\";s:4:\\\"smtp\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:13:\\\"maxExceptions\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:3:\\\"job\\\";N;}\"},\"createdAt\":1774890787,\"delay\":null}', 0, NULL, 1774890787, 1774890787);

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
  `state_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lga_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `kycs_resident_id_unique` (`resident_id`),
  KEY `kycs_user_id_foreign` (`user_id`),
  KEY `kycs_tenant_id_foreign` (`tenant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kycs`
--

INSERT INTO `kycs` (`id`, `user_id`, `tenant_id`, `phone`, `address`, `state_id`, `lga_id`, `id_type`, `id_document`, `bio_completed`, `doc_completed`, `face_completed`, `kyc_completed`, `current_step`, `created_at`, `updated_at`, `face_image`, `face_confidence`, `face_verified`, `occupants`, `resident_id`, `flat_number`, `agent_name`, `agent_number`) VALUES
(1, 1, 1, '08067932796', 'This is a test testing', '6', '111', 'Passport', 'kyc_docs/tenant_1/dsaf1wWs0t2vUY8ZvVJeTFIV4mlhFk6ScPfcL6sE.jpg', 1, 1, 1, 1, 'completed', '2026-01-22 15:51:05', '2026-01-22 16:41:00', 'kyc_faces/tenant_1/live_1.jpg', 87.542, 1, 4, 'DEMO-ESTATE-000001', 1, 'peter', '08038372503'),
(2, 2, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'bio', '2026-02-14 16:31:20', '2026-02-14 16:31:20', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL),
(3, 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'bio', '2026-02-15 08:27:29', '2026-02-15 08:27:29', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL),
(4, 17, 2, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'bio', '2026-02-24 20:55:05', '2026-02-24 20:55:05', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL),
(5, 19, 1, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, 0, 'bio', '2026-02-24 21:25:11', '2026-02-24 21:25:11', NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=117 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(116, '2026_03_05_143355_create_subscription_plans_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE IF NOT EXISTS `notifications` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint UNSIGNED NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
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
('7a0e6988-84a6-493f-896e-e5f039d4f868', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 3, '{\"title\":\"Top-up Successful\",\"message\":\"Your topup of \\u20a63000 is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', NULL, '2025-12-25 08:25:22', '2025-12-25 08:25:22'),
('89e0a411-a59a-4ea2-9507-f3641b95661c', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 3, '{\"title\":\"Top-up Successful\",\"message\":\"Your topup of \\u20a6359 is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', '2025-12-25 10:08:19', '2025-12-25 08:25:47', '2025-12-25 10:08:19'),
('b6598b7f-5177-42f4-a35f-521fac32d8cb', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 3, '{\"title\":\"Top-up Successful\",\"message\":\"Your topup of \\u20a6100 is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', '2025-12-25 10:04:02', '2025-12-25 08:26:10', '2025-12-25 10:04:02'),
('5e962fe0-7432-4fc2-9a56-e485ff56ce13', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 4, '{\"title\":\"Top-up Successful\",\"message\":\"Your topup of \\u20a63000 is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', '2025-12-29 07:53:21', '2025-12-29 07:53:01', '2025-12-29 07:53:21'),
('30320eed-1835-4011-a646-a9894767f706', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 5, '{\"title\":\"Top-up Successful\",\"message\":\"Your topup of \\u20a63000 is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', '2025-12-29 11:13:03', '2025-12-29 11:11:36', '2025-12-29 11:13:03'),
('1c24c439-4261-40e6-9405-a9a24fede149', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 1, '{\"title\":\"Top-up Successful\",\"message\":\"Your topup of \\u20a62000 is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', NULL, '2026-02-15 10:18:35', '2026-02-15 10:18:35');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `resident_wallets_uuid_unique` (`uuid`),
  KEY `resident_wallets_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_wallets`
--

INSERT INTO `resident_wallets` (`id`, `uuid`, `user_id`, `currency_code`, `balance`, `minimium_balance`, `status`, `currency_id`, `created_at`, `updated_at`) VALUES
(1, '8398ece4-4e79-4033-a9a9-d06d6a4d2147', 1, 'NGN', 2000.00, 0.00, 1, 87, '2026-01-22 15:51:04', '2026-01-22 15:51:04'),
(2, '78a258ba-cb57-4b9e-880d-227294985253', 2, 'NGN', 0.00, 0.00, 1, 87, '2026-02-14 16:31:20', '2026-02-14 16:31:20'),
(3, '9825e331-b6ab-43a8-8d25-6e4ec65befd0', 3, 'NGN', 0.00, 0.00, 1, 87, '2026-02-15 08:27:29', '2026-02-15 08:27:29'),
(20, '40c2b41d-ddff-4470-85bc-00e6261d1360', 21, 'NGN', 0.00, 0.00, 1, 87, '2026-02-24 21:29:50', '2026-02-24 21:29:50'),
(17, '97a05dc5-a78a-4d77-8ed1-941ba0e0a5ba', 17, 'NGN', 0.00, 0.00, 1, 87, '2026-02-24 19:41:41', '2026-02-24 19:41:41');

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
('niIiZalL9FqpFGgJIk0w57Oqj6yD1nnVtAD7sTvM', 22, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOXlEZ1VrMkRlYWFRQmF2bGpCbmk0a1NaSmhnZTM2cFp6TlZ1cWpPZSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdXBlcmFkbWluX2Rhc2hib2FyZCI7czo1OiJyb3V0ZSI7czoyMDoic3VwZXJhZG1pbl9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMjt9', 1774975756),
('9jtzEqZsgQhvUeb7gWVtgVmkrHOwJHiMB6OVrf6Y', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibnBhZ1JkYWR6YzBqeGJwdll0dThRSVhBdmliWFk1Y0FBWEFRcW8xNiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdXBlcmFkbWluX2Rhc2hib2FyZCI7czo1OiJyb3V0ZSI7czoyMDoic3VwZXJhZG1pbl9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1774975082),
('RG7gEuwvD2PLXEOcl3WKdHbtClN22s2sImlTfV76', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:149.0) Gecko/20100101 Firefox/149.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTEJXTUduUXR5T2t1bW5nUEpWZGFZU083Wkl6YnFBdUpLR29CeTFyciI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zdXBlcmFkbWluX2xvZ2luIjtzOjU6InJvdXRlIjtzOjE2OiJzdXBlcmFkbWluX2xvZ2luIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1774975082);

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
(1, 'Test Plan', 'This is a test plan', 200.00, 'monthly', 1, 1, '2026-03-05 18:17:40', '2026-03-05 18:17:40'),
(2, 'Premium', 'This is a premium', 1200.00, 'yearly', 1, 1, '2026-03-05 18:19:49', '2026-03-05 18:19:49');

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenants_subdomain_unique` (`subdomain`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `first_name`, `last_name`, `estate_name`, `subdomain`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'demo', 'doe', 'demoo', 'demo', '2026-01-22 15:50:25', '2026-01-22 15:50:25', NULL),
(2, 'Sam', 'Deo', 'Glorious', 'sam', '2026-02-24 10:09:56', '2026-02-24 10:09:56', NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `reference`, `amount`, `user_id`, `receiver_id`, `status`, `currency`, `webhook_status`, `paid_at`, `remarks`, `gateway`, `subscription_id`, `created_at`, `updated_at`) VALUES
(1, 'fq6j4sw2ww', 2000, '1', NULL, 'success', 'NGN', NULL, '2026-02-15T10:18:33.000Z', 'Fund wallet', 'Paystack', NULL, '2026-02-15 10:18:35', '2026-02-15 10:18:35');

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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_tenant_id_foreign` (`tenant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tenant_id`, `deleted_at`, `role`, `face_verified`, `face_image`, `status`, `fees_status`, `verification_code`, `verification_code_sent_at`) VALUES
(1, 'jude', 'doe', 'oladelesamuel48@gmail.com', '2026-02-25 21:51:58', '$2y$12$mMuj2wr1Ih.xPEnFV1jJZ.F9.VKgGNeqKcpgWiO70VzYpqqfGw5uy', NULL, '2026-01-22 15:51:04', '2026-02-25 21:58:23', 1, NULL, 'user', 0, NULL, 'active', 'clear', '8039', '2026-02-25 21:58:23'),
(2, 'Amos', 'doe', 'oladelesamuel488@gmail.com', NULL, '$2y$12$6eIq86a8j.6FfJEIekLvseWK47yh3/JYeLxBcFzz7hcsN6nXJt/Ta', NULL, '2026-02-14 16:31:19', '2026-02-14 16:31:19', 1, NULL, 'user', 0, NULL, 'active', 'clear', NULL, NULL),
(3, 'tester', 'deo', 'tester@gmail.com', NULL, '$2y$12$vX3Vpgy61EwcbY6QGRoBj.qKkrpJRFl7N4382zUM7EdF2gSqsMblC', NULL, '2026-02-15 08:27:29', '2026-02-15 08:27:29', 1, NULL, 'user', 0, NULL, 'active', 'clear', NULL, NULL),
(21, 'demo', 'doe', 'sammyola122@gmail.com', '2026-02-24 21:35:59', '$2y$12$c./tUDzaOcER4dNTBjcmVu8tF5vgPegz4ynR85J77CfIEsfGn2ME6', NULL, '2026-02-24 21:29:50', '2026-02-24 21:35:59', 1, NULL, 'admin', 0, NULL, 'active', 'clear', NULL, NULL),
(22, 'Super ', 'Admin', 'superadmin@gmail.com', '2026-02-24 20:55:05', '$2y$12$qKsGkUPOq8ed2eagiwKcRe6ReN3ATasPEH088wQEx0idyV8yaQILu', NULL, '2026-02-24 19:41:41', '2026-02-24 20:55:05', NULL, NULL, 'superadmin', 0, NULL, 'active', 'clear', NULL, NULL),
(17, 'Tester', 'test', 'oladelesamuel448@gmail.com', '2026-02-24 20:55:05', '$2y$12$qKsGkUPOq8ed2eagiwKcRe6ReN3ATasPEH088wQEx0idyV8yaQILu', NULL, '2026-02-24 19:41:41', '2026-02-24 20:55:05', 2, NULL, 'user', 0, NULL, 'active', 'clear', NULL, NULL);

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
(1, '1', 'AUTH_59gvk1jgz1', '2000', '4081', '12', '2030', 'visa ', 'TEST BANK', 'NG');

-- --------------------------------------------------------

--
-- Table structure for table `user_statistics`
--

DROP TABLE IF EXISTS `user_statistics`;
CREATE TABLE IF NOT EXISTS `user_statistics` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `login_count` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `invite_members` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `upload_release` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `funds_added_count` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `login_date` date DEFAULT NULL,
  `referral_code` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referred_by` bigint UNSIGNED DEFAULT NULL,
  `invite_points` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet_topup` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coin_balance` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `account_creation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sub_purchase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `first_name`, `last_name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'willo', 'gerr', 'oladelesamuel48@gmail.com', '08067932796', '2026-02-14 19:25:32', '2026-02-14 19:25:32'),
(3, 'Amos', 'ola', 'oladelesamuel48@gmail.com', NULL, '2026-03-03 14:54:40', '2026-03-03 14:54:40'),
(4, 'Bobb', 'rawlings', 'bobb@gmail.com', '08067932791', '2026-03-30 17:13:07', '2026-03-30 17:13:07');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_invitation`
--

DROP TABLE IF EXISTS `visitor_invitation`;
CREATE TABLE IF NOT EXISTS `visitor_invitation` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `resident_id` bigint UNSIGNED NOT NULL,
  `visitor_id` bigint UNSIGNED DEFAULT NULL,
  `purpose` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
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
  KEY `visitor_invitation_resident_id_foreign` (`resident_id`),
  KEY `visitor_invitation_visitor_id_foreign` (`visitor_id`),
  KEY `visitor_invitation_invited_resident_id_foreign` (`invited_resident_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitor_invitation`
--

INSERT INTO `visitor_invitation` (`id`, `resident_id`, `visitor_id`, `purpose`, `visit_date`, `valid_from`, `valid_to`, `qr_token`, `status`, `used_at`, `exited_at`, `created_at`, `updated_at`, `delete_status`, `access_code`, `invited_resident_id`, `tenant_id`) VALUES
(1, 1, NULL, NULL, '2026-02-14', '20:24:00', '23:24:00', 'eyJpdiI6InFJWU15VGx1STZFWmFUQ2hHSzRXYUE9PSIsInZhbHVlIjoiQmxBck5BRVdlamVlV1hoQnNTekMvdTV4SmNabTJhK25GSjQ4VE00RzhEWVVEOThWb0MvWk1IZDk2Y1hHd0l3NjgrZTVGVVprZTBqaUxJWXZPQlR6UXZUOFdVVEc2TWFyU29Ya3VLbXNOd0QxaUFKcjdieVNRYVZKelpVS2NZREM5aHlMbjMyRmtuK21kR2MvRnFkUDFRMTg4YnBWQVp0Y0g3a0F3SnRzTEUwPSIsIm1hYyI6IjUyNWRlMTc5ZDZlNDEzZTJlZDQxZTg3MGU4OTk2MWIwOGUzMjM2MmUyY2M2NjZjYWZiOWI1YjAwMzMzOGVlMTMiLCJ0YWciOiIifQ==', 'pending', NULL, NULL, '2026-02-14 19:24:25', '2026-02-14 19:24:25', 'no', '575705', 1, 1),
(2, 1, NULL, NULL, '2026-02-14', '20:24:00', '23:24:00', 'eyJpdiI6InUwVDlWNEJ6dm9KRy9XaUxQQTNoMWc9PSIsInZhbHVlIjoiaDljWGFqYWJPdVhSSlFISmlUbXNCeXBmYjNIc1Y5NE9wOUlueTgwVmVFVnBiWXJ5ZU81cHYydVBIRWo1Mnd4ZUlWdHZXNzZqRisrZXk0TEh6WlVMK0VicHJhUHNLUW5EdWtNUDNtWTE0SmFxc0F5RU4zaHU0eGU0Y1lzdCtLanhMdWFPd0dWZi9yS3U1a2hRNG9DQkxBeHpCaWFyYmtGbGhEejRTVXQvMFdBPSIsIm1hYyI6IjM5Nzk2MGJhNDM2ODFhOTNhYzg3ZGEyZDIyM2JmZmEyOGQ5N2JjN2UwYjQ2ZGNhMTY4ZjZhMWEzZjFiYmQ4YjMiLCJ0YWciOiIifQ==', 'pending', NULL, NULL, '2026-02-14 19:25:01', '2026-02-15 07:48:06', 'yes', '640854', 2, 1),
(3, 1, 1, NULL, '2026-02-14', '20:25:00', '23:25:00', 'eyJpdiI6IjBMVUhBbXRFYjRkcURQTmdhNXVGWUE9PSIsInZhbHVlIjoiTm83Q1ZTNHpJdktYQzQ3OXFrYXdabXRVN3dmVHU2eVFhdzVDdHNFRWtNbUNaei9Yb0RkOUtsVXZ0QjJsMnFwRE1NR2FudXRQRVM2MUFGT2Z2cDFtTllBc0dkVEgvbU5kUG5qd1hKRUxUdjZiZU1XQ1c5ZEdLbEJxdzd3cFpoQkhXc3B4Y2hrZXJOV3FxYng3cEVlYUFxN3RodDRMemduVXMzSWZMZkIxS3R3PSIsIm1hYyI6IjhkMmQxYTNkYThkYTMwNzU0OTY4YTM1YTM0YTdhMjdhZWY4YTc4ZWEwM2QwNjg1NmU0MmUwMzU0NDY0NWNjMzgiLCJ0YWciOiIifQ==', 'pending', NULL, NULL, '2026-02-14 19:25:32', '2026-02-14 19:25:32', 'no', '595805', NULL, 1),
(7, 1, 3, NULL, '2026-03-03', '15:54:00', '18:54:00', 'eyJpdiI6Ik9Ua0VkemRtSkJJazlOSWtGWnZIVEE9PSIsInZhbHVlIjoiY0FzcWhRSWhnN09WdEF4SEdBUlhFY2kxY0FiWmIyS2ZyMXhIRzFLNFdxK2h3SkNmeHNhd21jM3pzMkxveXhIWm1QVm5zNXo3eVFwUmwxbGFVWHROWHlVSW0veUN6SkdxQzhBUjJUMU1YWERGUEI3dHA1dU5Za25oQTVRYVpTc05sWWhqOWNzMWdnUjAzUEprcXVJamw4SnlUa1VnUTVKVUZQUGp1ZW1vWjBZPSIsIm1hYyI6IjRkNzdkY2E1NGI0ZWM3YmNmNjAyY2EwNDczMTAwNjAyODI4ZWZjNjcyMGM5ZmY1YzMxMjQ3ZjcxY2IzMWYyMjQiLCJ0YWciOiIifQ==', 'pending', NULL, NULL, '2026-03-03 14:54:40', '2026-03-03 14:54:40', 'no', '519772', 1, 1),
(6, 1, NULL, NULL, '2026-03-03', '16:49:00', '19:49:00', 'eyJpdiI6ImZMZVh3QVNtVitGUG9XRVJINFJWY1E9PSIsInZhbHVlIjoiZEFEZitqYytJYjlBVVhHMzhycVdJN2tzQ0o0WmtwMUNFUXBMUnJwZDYwY3ZHK1V1ZEpyZ3E5a2tNQ1g4V0tIeWtHS1JnZC9aRGhqWTFldlpaQVJCeGpYYUM3UjhORGFNaUE3VkV5QkIwNjNpNm5ldmtQMWhvcDJ2dExBbllOUklaZUJGdzI3d3VYYi90TjNpRXJhY0RyMWtVQVVqaldPL0hDczZwaFNWNFJ3PSIsIm1hYyI6ImJmYzUyMDgyMmRiNGU3ZWUwMTE0MDAwYmQ0YzM2OWNjMDUyYWYyMWY2MGIzMTI4ODUyOWY0YjQ4OWE4YTllMzciLCJ0YWciOiIifQ==', 'pending', NULL, NULL, '2026-03-03 14:50:00', '2026-03-03 14:50:00', 'no', '234295', 1, 1),
(8, 1, 4, NULL, '2026-03-30', '19:13:00', '22:13:00', 'eyJpdiI6InNtK0xQSk1JMGtwMzFOU3l0VS9zNFE9PSIsInZhbHVlIjoiRXRESUxuVFJFVlIvMDBZbmZlMStJeEtMdVRrUGdRQXNTYkg5OHJTdzhXTGlwT2VzeEZxcUF2aVdwUGxYTXloUDRUZzBpZ2t1NytvTFRhZnZPQ3l5T2VOZ1J5S3ZYeEVBbDR5YjlzU2s1NUgvY0RhQngvZ2dwMTh3M1ZkVE9xWHhuTnJDUlVmV1BmZnQxTWJ6bm5FZzVkdld6YjhFUEl4ZlFIRTMzbEx4NlZVPSIsIm1hYyI6IjM0ZjU4ZDY2MzUxODE3ZGY1YTY4MjdjZmZmMjhkMzNmZTExY2Y2YzEyZTdjNDU0YzQ2NDBhZWZlMzM4OWI3MzYiLCJ0YWciOiIifQ==', 'pending', NULL, NULL, '2026-03-30 17:13:07', '2026-03-30 17:13:07', 'no', '147452', NULL, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
