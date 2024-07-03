-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 19, 2023 at 04:53 PM
-- Server version: 8.0.31-0ubuntu0.20.04.2
-- PHP Version: 8.2.1




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



--
-- Dumping data for table `specialties`
--

INSERT INTO `specialties` (`id`, `title`,`type`, `created_at`, `updated_at`) VALUES
(1, 'Personal Virtual Assistance',0, NULL, NULL),
(2, 'Executive Virtual Assistance',0, NULL, NULL),
(3, 'Legal Virtual Assistance',0, NULL, NULL),
(4, 'Other Virtual Assistance',0, NULL, NULL),
(5, 'Medical Virtual Assistance',0, NULL, NULL),
(6, 'General Virtual Assistance',0, NULL, NULL),
(7, 'Data Entry',0, NULL, NULL),
(8, 'Other Data Entry & Transcription Services',0, NULL, NULL),
(9, 'Transcription',0, NULL, NULL),
(10, 'Dropshipping & Order Processing',0, NULL, NULL),
(11, 'Digital Project Management',0, NULL, NULL),
(12, 'Customer Onboarding',0, NULL, NULL),
(13, 'Other Customer Service & Tech Support',0, NULL, NULL),
(14, 'IT Support',0, NULL, NULL),
(15, 'Customer Success',0, NULL, NULL),
(16, 'Tech Support',0, NULL, NULL),
(17, 'Email, Phone & Chat Support',0, NULL, NULL),
(18, 'Other Community Management & Tagging',0, NULL, NULL),
(19, 'Content Moderation',0, NULL, NULL),
(20, 'Data Mining',0, NULL, NULL),
(21, 'Data Engineering',0, NULL, NULL),
(22, 'Data Visualization',0, NULL, NULL),
(23, 'Data Extraction',0, NULL, NULL),
(24, 'Data Processing',0, NULL, NULL),
(25, 'Deep Learning',0, NULL, NULL),
(26, 'Knowledge Representation',0, NULL, NULL),
(27, 'Machine Learning',0, NULL, NULL),
(28, 'Brand Identity Design',0, NULL, NULL),
(29, 'Logo Design',0, NULL, NULL),
(30, 'Structural Engineering',0, NULL, NULL),
(31, '3D Modeling & Rendering',0, NULL, NULL),
(32, 'CAD',0, NULL, NULL),
(33, 'Network Security',0, NULL, NULL),
(34, 'IT Compliance',0, NULL, NULL),
(35, 'Information Security',0, NULL, NULL),
(36, 'Database Administration',0, NULL, NULL),
(37, 'Network Administration',0, NULL, NULL),
(38, 'General Counsel',0, NULL, NULL),
(39, 'Other Marketing, PR & Brand Strategy',0, NULL, NULL),
(40, 'Marketing Strategy',0, NULL, NULL),
(41, 'Content Strategy',0, NULL, NULL),
(42, 'Email Marketing',0, NULL, NULL),
(43, 'SEO',0, NULL, NULL),
(44, 'Live Interpretation',0, NULL, NULL),
(45, 'Sign Language Interpretation',0, NULL, NULL),
(46, 'Mobile App Development',0, NULL, NULL),
(47, 'Back-End Development',0, NULL, NULL),
(48, 'Front-End Development',0, NULL, NULL),
(49, 'Full Stack Development',0, NULL, NULL),
(50, 'CMS Development',0, NULL, NULL),
(51, 'Agile Leadership',0, NULL, NULL),
(52, 'Copy Editing',0, NULL, NULL),
(53, 'Sales Copywriting',0, NULL, NULL),
(54, 'Technical Writing',0, NULL, NULL),
(55, 'Legal Writing',0, NULL, NULL),
(57, 'Personal Coaching',0, NULL, NULL),
(59, 'Career Coaching',0, NULL, NULL),
(60, 'Business Analysis & Strategy',0, NULL, NULL),
(61, 'Management Consulting',0, NULL, NULL),
(62, 'Instructional Design',0, NULL, NULL),
(63, 'HR Administration',0, NULL, NULL),
(64, 'Recruiting & Talent Sourcing',0, NULL, NULL),
(65, 'Training & Development',0, NULL, NULL),
(66, 'Singing',0, NULL, NULL),
(67, 'Acting',0, NULL, NULL),
(68, 'Voice Talent',0, NULL, NULL),
(69, 'Music Performance',0, NULL, NULL),
(70, 'Visual Effects',0, NULL, NULL),
(71, '2D Animation',0, NULL, NULL),
(72, 'Video Editing',0, NULL, NULL),
(73, 'Video Production',0, NULL, NULL),
(74, 'Civil Engineering',0, NULL, NULL),
(75, 'Landscape Architecture',0, NULL, NULL),
(76, 'Architecture Design',0, NULL, NULL),
(77, 'Interior Design',0, NULL, NULL),
(78, 'Trade show Design',0, NULL, NULL),
(79, 'Energy Engineering',0, NULL, NULL),
(80, 'Cloud Engineering',0, NULL, NULL),
(81, 'DevOps Engineering',0, NULL, NULL),
(82, 'Solution Architecture',0, NULL, NULL),
(83, 'Business & Corporate Law',0, NULL, NULL),
(84, 'Intellectual Property Law',0, NULL, NULL),
(85, 'Tax Law',0, NULL, NULL),
(86, 'Securities & Finance Law',0, NULL, NULL),
(87, 'Social Media Strategy',0, NULL, NULL),
(88, 'Brand Strategy',0, NULL, NULL),
(89, 'Public Relations',0, NULL, NULL),
(90, 'Other Language Tutoring & Interpretation',0, NULL, NULL),
(91, 'Language Tutoring',0, NULL, NULL),
(92, 'Technical Document Translation',0, NULL, NULL),
(93, 'Legal Document Translation',0, NULL, NULL),
(94, 'Manual Testing',0, NULL, NULL),
(95, 'Automation Testing',0, NULL, NULL),
(96, 'Mobile Design',0, NULL, NULL),
(97, 'Web Design',0, NULL, NULL),
(98, 'UI/UX Design',0, NULL, NULL),
(99, 'Grant Writing',0, NULL, NULL),
(100, 'Medical Writing',0, NULL, NULL),
(101, 'Scriptwriting',0, NULL, NULL),
(102, 'Writing Tutoring',0, NULL, NULL),
(103, 'Resume & Cover Letter Writing',0, NULL, NULL),
(104, 'Ecommerce Website Development',0, NULL, NULL),
(105, 'Destop Software Development',0, NULL, NULL),
(106, 'Coding Tutoring',0, NULL, NULL),


(108, 'Development',1, NULL, NULL),
(109, 'Audit',1, NULL, NULL),
(110, 'Consulting & Advisory',1, NULL, NULL),
(111, 'Tokonomics',1, NULL, NULL),
(112, 'Listing on Exchanges',1, NULL, NULL),
(113, 'Fund Raising',1, NULL, NULL),
(114, 'Community management',1, NULL, NULL),
(115, 'Social Media Marketing',1, NULL, NULL),
(116, 'New Communities Creation / management',1, NULL, NULL),
(117, 'Influencer Marketing',1, NULL, NULL),
(118, 'Airdrop Campaigns',1, NULL, NULL),
(119, 'Listing on CMC / CoinGecko',1, NULL, NULL),
(120, 'App/Web Design',1, NULL, NULL),
(121, 'Banner Design for Campaigns',1, NULL, NULL),
(122, 'Front-End Development',1, NULL, NULL),
(123, 'Full Stack Development',1, NULL, NULL),
(124, 'Back-End Development',1, NULL, NULL),
(125, 'Mobile App Development',1, NULL, NULL),
(126, 'Others',1, NULL, NULL),
(127, 'Others',1, NULL, NULL),
(128, 'Others',1, NULL, NULL);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `specialties`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
