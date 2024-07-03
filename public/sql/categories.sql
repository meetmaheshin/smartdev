-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2024 at 06:17 AM
-- Server version: 8.0.37-0ubuntu0.20.04.3
-- PHP Version: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dev3_dao`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int NOT NULL DEFAULT '0' COMMENT '0:web2,1:web3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Accounting & Consulting', 0, NULL, NULL),
(2, 'Admin Support', 0, NULL, NULL),
(3, 'Customer Service', 0, NULL, NULL),
(4, 'Data Science & Analytics', 0, NULL, NULL),
(5, 'Design & Creative', 0, NULL, NULL),
(6, 'Engineering & Architecture', 0, NULL, NULL),
(7, 'IT & Networking', 0, NULL, NULL),
(8, 'Legal', 0, NULL, NULL),
(9, 'Sales & Marketing', 0, NULL, NULL),
(10, 'Web, Mobile & Software Dev', 0, NULL, NULL),
(11, 'Blockchain Development Platforms', 1, NULL, NULL),
(12, 'Web Mobile and Software Development', 1, NULL, NULL),
(13, 'Smart Contracts Development', 1, NULL, NULL),
(14, 'Decentralized Applications (DApps)', 1, NULL, NULL),
(15, 'Cryptocurrency Development', 1, NULL, NULL),
(16, 'Blockchain Integration', 1, NULL, NULL),
(17, 'Tokenization and NFTs (Non-Fungible Tokens)', 1, NULL, NULL),
(18, 'Blockchain Security', 1, NULL, NULL),
(19, 'Blockchain Consulting and Strategy', 1, NULL, NULL),
(20, 'Blockchain Tools and Infrastructure', 1, NULL, NULL),
(21, 'Regulatory Compliance for Blockchain', 1, NULL, NULL),
(22, 'Governance and DAOs', 1, NULL, NULL),
(23, 'Web3 Infrastructure', 1, NULL, NULL),
(24, 'Design & Creatives', 1, NULL, NULL),
(25, 'Decentralized Creative Marketplaces', 1, NULL, NULL),
(26, 'Blockchain for Creative Collaborations\r\n', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
