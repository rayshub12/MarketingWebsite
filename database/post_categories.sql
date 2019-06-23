-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2019 at 01:13 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nationlive`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_cat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) DEFAULT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `category_name`, `category_url`, `parent_cat`, `description`, `status`, `category_image`, `created_at`, `updated_at`) VALUES
(3, 'मनोरंजन', 'entertainment', '0', NULL, 1, NULL, '2019-04-02 03:51:08', '2019-04-02 03:51:08'),
(4, 'लाइफ़', 'lifestyle', '0', NULL, 1, NULL, '2019-04-02 03:51:57', '2019-04-02 03:51:57'),
(5, 'मोबाइल-टेक', 'tech', '0', NULL, 1, NULL, '2019-04-02 03:52:24', '2019-04-02 03:52:24'),
(6, 'क्रिकेट', 'cricket', '0', NULL, 1, NULL, '2019-04-02 03:52:44', '2019-04-02 03:52:44'),
(7, 'क्राइम', 'crime', '0', NULL, 1, NULL, '2019-04-02 03:53:06', '2019-04-02 03:53:06'),
(9, 'नॉलेज', 'knowledge', '0', NULL, 1, NULL, '2019-04-02 03:53:34', '2019-04-02 03:53:34'),
(10, 'दुनिया', 'world', '0', NULL, 1, NULL, '2019-04-02 03:53:59', '2019-04-02 03:53:59'),
(11, 'राजनीति', 'politics', '0', NULL, 1, NULL, '2019-04-02 04:00:18', '2019-04-02 04:00:18'),
(12, 'खेल', 'game', '0', NULL, 1, NULL, '2019-04-02 04:25:43', '2019-04-02 04:25:43'),
(13, 'लोकसभा चुनाव 2019', 'lok-sabha-elections-2019', 'politics', 'लोकसभा चुनाव 2019', 1, NULL, '2019-04-06 16:41:31', '2019-04-06 16:41:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
