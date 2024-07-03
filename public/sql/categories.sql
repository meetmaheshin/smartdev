-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2024 at 07:04 AM
-- Server version: 8.0.37-0ubuntu0.20.04.3
-- PHP Version: 8.2.18

-- SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
-- SET AUTOCOMMIT = 0;
-- START TRANSACTION;
-- SET time_zone = "+00:00";


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


--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
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

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
