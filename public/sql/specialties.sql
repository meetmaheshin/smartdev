-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 03, 2024 at 07:04 AM
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
-- Table structure for table `specialties`
--

-- CREATE TABLE `specialties` (
--   `id` bigint UNSIGNED NOT NULL,
--   `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
--   `type` int NOT NULL DEFAULT '0' COMMENT '0:web2,1:web3',
--   `created_at` timestamp NULL DEFAULT NULL,
--   `updated_at` timestamp NULL DEFAULT NULL
-- ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(108, 'Ethereum', 1, NULL, NULL),
(109, 'Hyperledger', 1, NULL, NULL),
(110, 'Solana', 1, NULL, NULL),
(111, 'Cardano', 1, NULL, NULL),
(112, 'Corda', 1, NULL, NULL),
(113, 'Stellar', 1, NULL, NULL),
(114, 'Contract Deployment Tools (Truffle, Solidity, Rust)', 1, NULL, NULL),
(115, 'Smart Contract Auditing', 1, NULL, NULL),
(116, 'Smart Contract Security', 1, NULL, NULL),
(117, 'DApp Development', 1, NULL, NULL),
(118, 'Web3.js Integration', 1, NULL, NULL),
(119, 'IPFS (InterPlanetary File System) Integration', 1, NULL, NULL),
(120, 'Token Creation', 1, NULL, NULL),
(121, 'Wallet Development', 1, NULL, NULL),
(122, 'Front-End Development', 1, NULL, NULL),
(123, 'Full Stack Development', 1, NULL, NULL),
(124, 'Back-End Development', 1, NULL, NULL),
(125, 'Mobile App Development', 1, NULL, NULL),
(126, 'Tokenomics', 1, NULL, NULL),
(127, 'API Integration with Blockchain Networks', 1, NULL, NULL),
(128, 'Blockchain Middleware Development', 1, NULL, NULL),
(129, 'Oracles Integration', 1, NULL, NULL),
(130, 'ERC-20, ERC-721 Standards', 1, NULL, NULL),
(131, 'Token Economics', 1, NULL, NULL),
(132, 'NFT Marketplaces', 1, NULL, NULL),
(133, 'Secure Smart Contract Development', 1, NULL, NULL),
(134, 'Auditing Blockchain Networks', 1, NULL, NULL),
(135, 'Penetration Testing for Blockchain Applications', 1, NULL, NULL),
(136, 'Blockchain Use Case Analysis', 1, NULL, NULL),
(137, 'Implementation Strategy', 1, NULL, NULL),
(138, 'Blockchain Governance', 1, NULL, NULL),
(139, 'Blockchain Node Setup and Management', 1, NULL, NULL),
(140, 'Development Tools (Truffle, Remix)', 1, NULL, NULL),
(141, 'Blockchain Explorer Development', 1, NULL, NULL),
(142, 'KYC/AML Compliance', 1, NULL, NULL),
(143, 'Legal Frameworks for Blockchain Applications', 1, NULL, NULL),
(144, 'GDPR and Blockchain', 1, NULL, NULL),
(145, 'DAO Frameworks', 1, NULL, NULL),
(146, 'Voting Mechanisms', 1, NULL, NULL),
(147, 'Governance Tokens', 1, NULL, NULL),
(148, 'Wallet Integration (MetaMask, WalletConnect)', 1, NULL, NULL),
(149, 'Blockchain Explorers', 1, NULL, NULL),
(150, 'Oracles (Chainlink)', 1, NULL, NULL),
(151, 'NFT Design and Artwork Creation', 1, NULL, NULL),
(152, 'NFT Marketplaces Development', 1, NULL, NULL),
(153, 'NFT Standards and Tokenization (e.g., ERC-721, ERC-1155)', 1, NULL, NULL),
(154, 'Platforms for Artists and Creators', 1, NULL, NULL),
(155, 'Peer-to-Peer Trading of Digital Art and Collectibles', 1, NULL, NULL),
(156, 'Blockchain-based Royalty Systems', 1, NULL, NULL),
(157, 'Collaborative Platforms for Artists and Designers', 1, NULL, NULL),
(158, 'Smart Contracts for Royalty Distribution', 1, NULL, NULL),
(159, 'Transparent and Decentralized Creative Projects Funding', 1, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `specialties`
--
-- ALTER TABLE `specialties`
--   ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `specialties`
--
-- ALTER TABLE `specialties`
--   MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
