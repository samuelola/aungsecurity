-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 15, 2026 at 01:57 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'default', '{\"uuid\":\"211c9d85-cf05-4888-a401-9381615c85ab\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:2:\\\"id\\\";s:36:\\\"28858fe5-eb87-4dc1-b027-2425e7c7bfb9\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766577157,\"delay\":null}', 0, NULL, 1766577157, 1766577157),
(2, 'default', '{\"uuid\":\"ecc3d3a8-54f5-4ff5-b7e9-f90d2e700da3\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:2:\\\"id\\\";s:36:\\\"8866237d-d199-453a-806b-934af7d9f578\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766577533,\"delay\":null}', 0, NULL, 1766577533, 1766577533),
(3, 'default', '{\"uuid\":\"668ab2ac-0bf5-470c-b082-c8a177d5c641\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:2:\\\"id\\\";s:36:\\\"4f5aeef5-d245-4d2e-8dd9-da66f0f78456\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766578558,\"delay\":null}', 0, NULL, 1766578558, 1766578558),
(4, 'default', '{\"uuid\":\"47473c0f-2540-4f1b-a262-ea30a7a5e3b0\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:2:\\\"id\\\";s:36:\\\"240020f5-8730-4d35-b02a-769271865f35\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766578754,\"delay\":null}', 0, NULL, 1766578754, 1766578754),
(5, 'default', '{\"uuid\":\"67081933-7ac5-4e76-8bd4-004b4767d39c\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦1000 is successful\\\";s:2:\\\"id\\\";s:36:\\\"2ef69915-4b59-4ff4-96cd-8f1bf98b4159\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦1000 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766581044,\"delay\":null}', 0, NULL, 1766581044, 1766581044),
(6, 'default', '{\"uuid\":\"df971f16-b344-4d5b-971d-a494e18e9db4\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦200 is successful\\\";s:2:\\\"id\\\";s:36:\\\"f1927c03-b008-4348-8c81-8c9008d2e189\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦200 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766581089,\"delay\":null}', 0, NULL, 1766581089, 1766581089),
(7, 'default', '{\"uuid\":\"b4894431-1f2b-440e-8eef-03e6682ed188\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦600 is successful\\\";s:2:\\\"id\\\";s:36:\\\"f9798c2b-33da-4dbe-9e0c-7e68d566ab3d\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦600 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766582835,\"delay\":null}', 0, NULL, 1766582835, 1766582836),
(8, 'default', '{\"uuid\":\"661423c5-7811-4697-b355-2e2081f5797e\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦400 is successful\\\";s:2:\\\"id\\\";s:36:\\\"9731e093-3169-42ac-ad04-6f71772e96bb\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦400 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766582870,\"delay\":null}', 0, NULL, 1766582870, 1766582870),
(9, 'default', '{\"uuid\":\"e6c794ee-d9e4-428e-a781-559e5467b65e\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦1500 is successful\\\";s:2:\\\"id\\\";s:36:\\\"077ff2f8-8b76-4dac-9e94-5d29a600057d\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦1500 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766583262,\"delay\":null}', 0, NULL, 1766583262, 1766583262),
(10, 'default', '{\"uuid\":\"d5188fc4-cbcf-4cd3-8592-737fcbfe6b8b\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦120 is successful\\\";s:2:\\\"id\\\";s:36:\\\"786c12f7-df04-4cc3-a4e5-35fe51feeb09\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦120 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766583621,\"delay\":null}', 0, NULL, 1766583621, 1766583621),
(11, 'default', '{\"uuid\":\"d312af14-4685-4115-9c90-ca2fc22f8e4c\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":3:{s:5:\\\"title\\\";s:17:\\\"Top-up Successful\\\";s:7:\\\"message\\\";s:34:\\\"Your topup of ₦450 is successful\\\";s:2:\\\"id\\\";s:36:\\\"432f7262-f984-46a6-abcf-ee1aa2c3935b\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦450 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766587479,\"delay\":null}', 0, NULL, 1766587479, 1766587479),
(12, 'default', '{\"uuid\":\"72707576-3b17-457d-9ae3-431d87a8ba8f\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":3:{s:5:\\\"title\\\";s:17:\\\"Top-up Successful\\\";s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:2:\\\"id\\\";s:36:\\\"7a0e6988-84a6-493f-896e-e5f039d4f868\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766654722,\"delay\":null}', 0, NULL, 1766654722, 1766654722),
(13, 'default', '{\"uuid\":\"29ba296f-c588-4881-a03e-a1e906d8f2d1\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":3:{s:5:\\\"title\\\";s:17:\\\"Top-up Successful\\\";s:7:\\\"message\\\";s:34:\\\"Your topup of ₦359 is successful\\\";s:2:\\\"id\\\";s:36:\\\"89e0a411-a59a-4ea2-9507-f3641b95661c\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦359 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766654747,\"delay\":null}', 0, NULL, 1766654747, 1766654747),
(14, 'default', '{\"uuid\":\"54157a47-dc17-428a-95e4-4916adb73936\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:3;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":3:{s:5:\\\"title\\\";s:17:\\\"Top-up Successful\\\";s:7:\\\"message\\\";s:34:\\\"Your topup of ₦100 is successful\\\";s:2:\\\"id\\\";s:36:\\\"b6598b7f-5177-42f4-a35f-521fac32d8cb\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:34:\\\"Your topup of ₦100 is successful\\\";s:7:\\\"user_id\\\";i:3;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766654770,\"delay\":null}', 0, NULL, 1766654770, 1766654770),
(15, 'default', '{\"uuid\":\"5b98b53b-7aa7-459c-b4e5-3f5278158308\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:4;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":3:{s:5:\\\"title\\\";s:17:\\\"Top-up Successful\\\";s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:2:\\\"id\\\";s:36:\\\"5e962fe0-7432-4fc2-9a56-e485ff56ce13\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:7:\\\"user_id\\\";i:4;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1766998381,\"delay\":null}', 0, NULL, 1766998381, 1766998381),
(16, 'default', '{\"uuid\":\"e2103e20-eccd-4797-926a-073f00375703\",\"displayName\":\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\",\"command\":\"O:38:\\\"Illuminate\\\\Broadcasting\\\\BroadcastEvent\\\":17:{s:5:\\\"event\\\";O:60:\\\"Illuminate\\\\Notifications\\\\Events\\\\BroadcastNotificationCreated\\\":3:{s:10:\\\"notifiable\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":5:{s:5:\\\"class\\\";s:15:\\\"App\\\\Models\\\\User\\\";s:2:\\\"id\\\";i:5;s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";s:15:\\\"collectionClass\\\";N;}s:12:\\\"notification\\\";O:40:\\\"App\\\\Notifications\\\\NewMessageNotification\\\":3:{s:5:\\\"title\\\";s:17:\\\"Top-up Successful\\\";s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:2:\\\"id\\\";s:36:\\\"30320eed-1835-4011-a646-a9894767f706\\\";}s:4:\\\"data\\\";a:2:{s:7:\\\"message\\\";s:35:\\\"Your topup of ₦3000 is successful\\\";s:7:\\\"user_id\\\";i:5;}}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:7:\\\"backoff\\\";N;s:13:\\\"maxExceptions\\\";N;s:23:\\\"deleteWhenMissingModels\\\";b:1;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";N;s:12:\\\"messageGroup\\\";N;s:12:\\\"deduplicator\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;}\"},\"createdAt\":1767010296,\"delay\":null}', 0, NULL, 1767010296, 1767010296);

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
  `kyc_completed` tinyint(1) NOT NULL DEFAULT '0',
  `current_step` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'bio',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `face_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `face_completed` tinyint(1) NOT NULL DEFAULT '0',
  `face_confidence` double DEFAULT NULL,
  `face_verified` tinyint(1) NOT NULL DEFAULT '0',
  `occupants` int DEFAULT NULL,
  `resident_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kycs_resident_id_unique` (`resident_id`),
  KEY `kycs_user_id_foreign` (`user_id`),
  KEY `kycs_tenant_id_foreign` (`tenant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kycs`
--

INSERT INTO `kycs` (`id`, `user_id`, `tenant_id`, `phone`, `address`, `state_id`, `lga_id`, `id_type`, `id_document`, `bio_completed`, `doc_completed`, `kyc_completed`, `current_step`, `created_at`, `updated_at`, `face_image`, `face_completed`, `face_confidence`, `face_verified`, `occupants`, `resident_id`) VALUES
(1, 2, 6, '08067932796', 'This is a test,  This is a test,  This is a test,  This is a test,  This is a test,  This is a test,  This is a test,  This is a test,  This is a test,  This is a test,  This is a test,', '13', '251', 'Passport', 'kyc_docs/tenant_6/GhF2j9ySvqBKQd4VuUEcX1vQNDG4HfXvd3E2sKqa.jpg', 1, 1, 1, 'completed', '2025-12-19 14:53:18', '2025-12-19 14:54:14', 'kyc_faces/tenant_6/live_2.jpg', 1, 87.92, 1, 2, NULL),
(5, 3, 6, '08067932797', 'cncncncn', '15', '276', 'National ID', 'kyc_docs/tenant_6/nBhybA4GyAWQ4aP0MmeN94ExGIjCnRWD3HMYvqeY.jpg', 1, 1, 1, 'completed', '2025-12-20 13:52:05', '2025-12-20 13:54:53', 'kyc_faces/tenant_6/live_3.jpg', 1, 86.472, 1, 4, 'SAM-ESTATE-000001'),
(7, 5, 8, '08067932793', 'tytytytyty', '10', '194', 'Passport', 'kyc_docs/tenant_8/zd3yS5328Hex2D4yZc4i7YZG1NZRn9DE3En80PYT.jpg', 1, 1, 1, 'completed', '2025-12-29 10:57:03', '2025-12-29 11:07:21', 'kyc_faces/tenant_8/live_5.jpg', 1, 87.931, 1, 4, 'DEMO-ESTATE-000001');

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
-- Table structure for table `lgas`
--

DROP TABLE IF EXISTS `lgas`;
CREATE TABLE IF NOT EXISTS `lgas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_09_202025_create_tenants_table', 1),
(5, '2025_12_09_203206_add_tenant_id_to_users_table', 1),
(6, '2025_12_15_164256_add_soft_deletes_to_tenants_table', 2),
(7, '2025_12_15_164537_add_soft_deletes_to_users_table', 3),
(8, '2025_12_15_165404_create_personal_access_tokens_table', 4),
(9, '2025_12_16_144501_add_role_to_users_table', 5),
(10, '2025_12_17_132839_add_face_verification_to_users_table', 6),
(11, '2025_12_17_172835_create_kycs_table', 7),
(12, '2025_12_18_002931_create_states_table', 8),
(13, '2025_12_18_002944_create_lgas_table', 8),
(14, '2025_12_19_013753_add_face_image_to_kycs_table', 8),
(15, '2025_12_19_024208_add_face_confidence_to_kycs_table', 9),
(16, '2025_12_20_112252_create_resident_wallets_table', 10),
(18, '2025_12_20_131610_add_occupants_to_kycs_table', 11),
(19, '2025_12_20_141127_add_resident_id_to_kycs_table', 12);

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
('30320eed-1835-4011-a646-a9894767f706', 'App\\Notifications\\NewMessageNotification', 'App\\Models\\User', 5, '{\"title\":\"Top-up Successful\",\"message\":\"Your topup of \\u20a63000 is successful\",\"icon\":\"bitcoin-icons:verify-outline\",\"time\":\"0 seconds ago\"}', '2025-12-29 11:13:03', '2025-12-29 11:11:36', '2025-12-29 11:13:03');

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resident_wallets`
--

INSERT INTO `resident_wallets` (`id`, `uuid`, `user_id`, `currency_code`, `balance`, `minimium_balance`, `status`, `currency_id`, `created_at`, `updated_at`) VALUES
(1, '1aafedc8-ed43-4e34-b428-337441f4002f', 3, 'NGN', 3459.00, 0.00, 1, 87, '2025-12-24 11:13:14', '2025-12-24 11:13:14'),
(2, '1d6dae99-561e-4c99-98a5-991fba2a11ba', 4, 'NGN', 3000.00, 0.00, 1, 87, '2025-12-29 07:46:51', '2025-12-29 07:46:51'),
(3, 'ded47b62-1048-48b1-bbbd-c229eae13323', 5, 'NGN', 3000.00, 0.00, 1, 87, '2025-12-29 10:57:03', '2025-12-29 10:57:03');

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
('SQ70QakgckynyfpWTNw67D04AQWXg9nqNmC562vq', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNXVIcWEzZ1hmQWRSaE53d1ByZGlmeHBkdmpBdGprT003QUQ1S25WaSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9kZW1vLmxvY2FsaG9zdDo4MDAwL2Z1bmR3YWxsZXQiO3M6NToicm91dGUiO3M6MTA6ImZ1bmR3YWxsZXQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1768387347),
('virzEUHWS2Jy9qZ8KLGAyqGPh096PJbjE1cTZeSV', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiY0pxR1J5SGtVcEc3aXdaemVCcEJMaXdSVW5QTlMzOUlCcTJhSWtOYSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767011994),
('kpL30loASR8WneYp4zUdCSLmfBsFm4PC8RkLTcos', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicU1wS09YcUdzOG14ODRvbkNtMGhBRTdNUXFqa0tXMFc2OWRnR0JvWiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly9hdW5nc2VjdXJpdHkudGVzdCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1768485416),
('7WYoploAYa7xI02t92DKvaKugHtAz5kajBImD0I1', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibWZod1NVUVBrNFRYTkJrVE03NlQyQUVrM1BhU3FSc1FFbHpXZnlOSSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9kZW1vLmxvY2FsaG9zdC9yZXNpZGVudF90cmFuc2FjdGlvbiI7czo1OiJyb3V0ZSI7czoyMDoicmVzaWRlbnRfdHJhbnNhY3Rpb24iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1767010403),
('dWukiP1mW3xz1U6rlExWMds9CQ6qMsR2zxycLvHW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiN09tblM5b0V6WUFhSXR5bngzSU5PbVBOQjVobmZmYnV0VXd4bVhINiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1768390398),
('poGpCwjQ99qTh0Nu7ef5I47D4HnqqHpKnYEVuqS8', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMUZQSzI0SG1kaGswRFpBN3dFa2NxWFFYZFdUQ1VWOGI0ZGZPQWZ1ZSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9zYW0ubG9jYWxob3N0OjgwMDAvZXN0YXRlX2xvZ2luIjtzOjU6InJvdXRlIjtzOjE3OiJ0ZW5hbnRfdXNlcl9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1768387272),
('AaLu3konec3UOtvkPnAdIPkG0U7MixZZbB5EUqPh', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZTNRaktnVnkyZEhqRUZtUlB4MTFNZEhNMkl6UFF3UnAydWhxRklSbCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767002549),
('qeRxUtgFTLQoc2JKZ69QjSjaMX9XXK5M3vyODhIt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieHJ6bTVzQlZEREtNWHZaTkFGSVJ3Sk5BdDdSeHluSTE3VVdkMldUdiI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767002623),
('nltVE5N1txpkHpVQEfehiXi0mcXCeLJzKLvSeALU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWkJUZEV2c3VXNlNoQ0R0WG4yMnM1MW8yNktPbWFURWtsR2M3bjd3NyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMCI7czo1OiJyb3V0ZSI7czo0OiJob21lIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767002772);

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
-- Table structure for table `tenants`
--

DROP TABLE IF EXISTS `tenants`;
CREATE TABLE IF NOT EXISTS `tenants` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subdomain` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estate_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tenants_subdomain_unique` (`subdomain`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tenants`
--

INSERT INTO `tenants` (`id`, `first_name`, `last_name`, `subdomain`, `estate_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(6, 'John', 'Doe', 'sam', 'sam', '2025-12-18 23:41:08', '2025-12-18 23:41:08', NULL),
(8, 'demo', 'demo', 'demo', 'demo', '2025-12-29 10:54:54', '2025-12-29 10:54:54', NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `reference`, `amount`, `user_id`, `receiver_id`, `status`, `currency`, `webhook_status`, `paid_at`, `remarks`, `gateway`, `subscription_id`, `created_at`, `updated_at`) VALUES
(1, 'yozy97r8ed', 3000, '3', NULL, 'success', 'NGN', NULL, '2025-12-25T09:25:21.000Z', 'Fund wallet', 'Paystack', NULL, '2025-12-25 08:25:22', '2025-12-25 08:25:22'),
(2, '3lge2hgog6', 359, '3', NULL, 'success', 'NGN', NULL, '2025-12-25T09:25:46.000Z', 'Fund wallet', 'Paystack', NULL, '2025-12-25 08:25:47', '2025-12-25 08:25:47'),
(3, '8ljshy3bkl', 100, '3', NULL, 'success', 'NGN', NULL, '2025-12-25T09:26:10.000Z', 'Fund wallet', 'Paystack', NULL, '2025-12-25 08:26:10', '2025-12-25 08:26:10'),
(4, 'r4fmj08hfu', 3000, '4', NULL, 'success', 'NGN', NULL, '2025-12-29T08:52:51.000Z', 'Fund wallet', 'Paystack', NULL, '2025-12-29 07:53:01', '2025-12-29 07:53:01'),
(5, 'jzh0xb9qrt', 3000, '5', NULL, 'success', 'NGN', NULL, '2025-12-29T12:11:33.000Z', 'Fund wallet', 'Paystack', NULL, '2025-12-29 11:11:36', '2025-12-29 11:11:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_tenant_id_foreign` (`tenant_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tenant_id`, `deleted_at`, `role`, `face_verified`, `face_image`) VALUES
(1, 'james', 'doe', 'sammyola121@gmail.com', NULL, '$2y$12$BYUmMuGcVSUPVKTCWxd.cu.4BQncCcbGPQ/m8C2YWXchiKxwc1jBW', NULL, '2025-12-16 12:26:18', '2025-12-16 12:26:18', 6, NULL, 'admin', 0, NULL),
(2, 'test', 'sample', 'oladelesamuel48@gmail.com', NULL, '$2y$12$CPqkU58JCM/eJ9rb8IsPBO7yoccE9ghDg35tDMvgt5i0Q30l0eeve', NULL, '2025-12-16 15:25:06', '2025-12-16 15:25:06', 6, NULL, 'user', 0, NULL),
(3, 'james', 'ola', 'sammyola122@gmail.com', NULL, '$2y$12$GOz.ttIttFURIrOOuyG/kOMOb1VrIlU/rAhW5Y.Z.UlOEvfBYrhS.', NULL, '2025-12-18 23:42:16', '2025-12-18 23:42:16', 6, NULL, 'user', 0, NULL),
(5, 'jude', 'doe', 'jude@gmail.com', NULL, '$2y$12$hG311sGexrdjhkz4zhLe4OXxz8PLK4Eda28XjdAQP1x/nrblUeG4W', NULL, '2025-12-29 10:57:03', '2025-12-29 10:57:03', 8, NULL, 'user', 0, NULL);

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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_auto_code`
--

INSERT INTO `user_auto_code` (`id`, `user_id`, `auth_code`, `amount`, `last4`, `exp_month`, `exp_year`, `card_type`, `bank`, `country_code`) VALUES
(1, '3', 'AUTH_3wqu3uiqsc', '100', '4081', '12', '2030', 'visa ', 'TEST BANK', 'NG'),
(2, '4', 'AUTH_g3z31a7z20', '3000', '4081', '12', '2030', 'visa ', 'TEST BANK', 'NG'),
(3, '5', 'AUTH_4m9ms6bhfx', '3000', '4081', '12', '2030', 'visa ', 'TEST BANK', 'NG');

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
