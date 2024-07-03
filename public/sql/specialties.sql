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
-- Table structure for table `specialties`
--

CREATE TABLE `specialties` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int NOT NULL DEFAULT '0' COMMENT '0:web2,1:web3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `title`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Personal Virtual Assistance', 0, NULL, NULL),
(2, 'Executive Virtual Assistance', 0, NULL, NULL),
(3, 'Legal Virtual Assistance', 0, NULL, NULL),
(4, 'Other Virtual Assistance', 0, NULL, NULL),
(5, 'Medical Virtual Assistance', 0, NULL, NULL),
(6, 'General Virtual Assistance', 0, NULL, NULL),
(7, 'Data Entry', 0, NULL, NULL),
(8, 'Other Data Entry & Transcription Services', 0, NULL, NULL),
(9, 'Transcription', 0, NULL, NULL),
(10, 'Dropshipping & Order Processing', 0, NULL, NULL),
(11, 'Digital Project Management', 0, NULL, NULL),
(12, 'Customer Onboarding', 0, NULL, NULL),
(13, 'Other Customer Service & Tech Support', 0, NULL, NULL),
(14, 'IT Support', 0, NULL, NULL),
(15, 'Customer Success', 0, NULL, NULL),
(16, 'Tech Support', 0, NULL, NULL),
(17, 'Email, Phone & Chat Support', 0, NULL, NULL),
(18, 'Other Community Management & Tagging', 0, NULL, NULL),
(19, 'Content Moderation', 0, NULL, NULL),
(20, 'Data Mining', 0, NULL, NULL),
(21, 'Data Engineering', 0, NULL, NULL),
(22, 'Data Visualization', 0, NULL, NULL),
(23, 'Data Extraction', 0, NULL, NULL),
(24, 'Data Processing', 0, NULL, NULL),
(25, 'Deep Learning', 0, NULL, NULL),
(26, 'Knowledge Representation', 0, NULL, NULL),
(27, 'Machine Learning', 0, NULL, NULL),
(28, 'Brand Identity Design', 0, NULL, NULL),
(29, 'Logo Design', 0, NULL, NULL),
(30, 'Structural Engineering', 0, NULL, NULL),
(31, '3D Modeling & Rendering', 0, NULL, NULL),
(32, 'CAD', 0, NULL, NULL),
(33, 'Network Security', 0, NULL, NULL),
(34, 'IT Compliance', 0, NULL, NULL),
(35, 'Information Security', 0, NULL, NULL),
(36, 'Database Administration', 0, NULL, NULL),
(37, 'Network Administration', 0, NULL, NULL),
(38, 'General Counsel', 0, NULL, NULL),
(39, 'Other Marketing, PR & Brand Strategy', 0, NULL, NULL),
(40, 'Marketing Strategy', 0, NULL, NULL),
(41, 'Content Strategy', 0, NULL, NULL),
(42, 'Email Marketing', 0, NULL, NULL),
(43, 'SEO', 0, NULL, NULL),
(44, 'Live Interpretation', 0, NULL, NULL),
(45, 'Sign Language Interpretation', 0, NULL, NULL),
(46, 'Mobile App Development', 0, NULL, NULL),
(47, 'Back-End Development', 0, NULL, NULL),
(48, 'Front-End Development', 0, NULL, NULL),
(49, 'Full Stack Development', 0, NULL, NULL),
(50, 'CMS Development', 0, NULL, NULL),
(51, 'Agile Leadership', 0, NULL, NULL),
(52, 'Copy Editing', 0, NULL, NULL),
(53, 'Sales Copywriting', 0, NULL, NULL),
(54, 'Technical Writing', 0, NULL, NULL),
(55, 'Legal Writing', 0, NULL, NULL),
(57, 'Personal Coaching', 0, NULL, NULL),
(59, 'Career Coaching', 0, NULL, NULL),
(60, 'Business Analysis & Strategy', 0, NULL, NULL),
(61, 'Management Consulting', 0, NULL, NULL),
(62, 'Instructional Design', 0, NULL, NULL),
(63, 'HR Administration', 0, NULL, NULL),
(64, 'Recruiting & Talent Sourcing', 0, NULL, NULL),
(65, 'Training & Development', 0, NULL, NULL),
(66, 'Singing', 0, NULL, NULL),
(67, 'Acting', 0, NULL, NULL),
(68, 'Voice Talent', 0, NULL, NULL),
(69, 'Music Performance', 0, NULL, NULL),
(70, 'Visual Effects', 0, NULL, NULL),
(71, '2D Animation', 0, NULL, NULL),
(72, 'Video Editing', 0, NULL, NULL),
(73, 'Video Production', 0, NULL, NULL),
(74, 'Civil Engineering', 0, NULL, NULL),
(75, 'Landscape Architecture', 0, NULL, NULL),
(76, 'Architecture Design', 0, NULL, NULL),
(77, 'Interior Design', 0, NULL, NULL),
(78, 'Trade show Design', 0, NULL, NULL),
(79, 'Energy Engineering', 0, NULL, NULL),
(80, 'Cloud Engineering', 0, NULL, NULL),
(81, 'DevOps Engineering', 0, NULL, NULL),
(82, 'Solution Architecture', 0, NULL, NULL),
(83, 'Business & Corporate Law', 0, NULL, NULL),
(84, 'Intellectual Property Law', 0, NULL, NULL),
(85, 'Tax Law', 0, NULL, NULL),
(86, 'Securities & Finance Law', 0, NULL, NULL),
(87, 'Social Media Strategy', 0, NULL, NULL),
(88, 'Brand Strategy', 0, NULL, NULL),
(89, 'Public Relations', 0, NULL, NULL),
(90, 'Other Language Tutoring & Interpretation', 0, NULL, NULL),
(91, 'Language Tutoring', 0, NULL, NULL),
(92, 'Technical Document Translation', 0, NULL, NULL),
(93, 'Legal Document Translation', 0, NULL, NULL),
(94, 'Manual Testing', 0, NULL, NULL),
(95, 'Automation Testing', 0, NULL, NULL),
(96, 'Mobile Design', 0, NULL, NULL),
(97, 'Web Design', 0, NULL, NULL),
(98, 'UI/UX Design', 0, NULL, NULL),
(99, 'Grant Writing', 0, NULL, NULL),
(100, 'Medical Writing', 0, NULL, NULL),
(101, 'Scriptwriting', 0, NULL, NULL),
(102, 'Writing Tutoring', 0, NULL, NULL),
(103, 'Resume & Cover Letter Writing', 0, NULL, NULL),
(104, 'Ecommerce Website Development', 0, NULL, NULL),
(105, 'Destop Software Development', 0, NULL, NULL),
(106, 'Coding Tutoring', 0, NULL, NULL),
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
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
