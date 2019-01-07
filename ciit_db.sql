-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2019 at 11:16 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ciit_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ciit_login`
--

CREATE TABLE `ciit_login` (
  `u_name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `u_pass` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ciit_login`
--

INSERT INTO `ciit_login` (`u_name`, `u_pass`) VALUES
('it18088888', 'user1test'),
('st16511111', 'staff2test'),
('st16600000', 'staff1test'),
('st17577777', 'staff3test');

-- --------------------------------------------------------

--
-- Table structure for table `ciit_news_comments`
--

CREATE TABLE `ciit_news_comments` (
  `u_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_comment` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `ad_date` date NOT NULL,
  `ad_appr` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ciit_news_comments`
--

INSERT INTO `ciit_news_comments` (`u_id`, `u_email`, `u_comment`, `ad_date`, `ad_appr`) VALUES
('da', 'da@gm.cik', ',scsckzclclssc;scls', '2019-01-07', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ciit_u_details`
--

CREATE TABLE `ciit_u_details` (
  `u_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `u_fname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_lname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_dob` date NOT NULL,
  `u_address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `u_mobile` int(10) NOT NULL,
  `u_telephone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `u_nic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `u_role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `u_notes` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ciit_u_details`
--

INSERT INTO `ciit_u_details` (`u_id`, `u_fname`, `u_lname`, `u_dob`, `u_address`, `u_mobile`, `u_telephone`, `u_email`, `u_gender`, `u_nic`, `u_role`, `u_notes`) VALUES
('bm17099999', 'Mangali', 'Mindanayaka', '1996-01-04', 'No 234, Thuththukidiya', 772233445, '0112223349', 'mangali.m@my.ciit.lk', 'female', '967890123v', 'student', '-'),
('it18088888', 'Janith', 'Upendra', '1994-07-23', 'No 32, Piliyandala', 772233444, '0112334455', 'janith.u@my.ciit.lk', 'male', '941954673v', 'student', '-'),
('st16511111', 'Supun', 'Silva', '1990-12-25', 'No 32, Colombo', 772233444, '0112223344', 'supun.s@ciit.lk', 'male', '901234567v', 'lecturer', '-'),
('st16600000', 'Shakir', 'Khan', '1980-09-09', 'No 32, Colombo', 772233444, '0112334455', 'shakir.h@ciit.lk', 'male', '802345678v', 'lecturer', '-'),
('st17577777', 'Thushara', 'Joseph', '1985-01-01', 'No 323, Colombo', 772233444, '0112223344', 'thushara.j@ciit.lk', 'male', '85123457v', 'lecturer', '-');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ciit_login`
--
ALTER TABLE `ciit_login`
  ADD PRIMARY KEY (`u_name`);

--
-- Indexes for table `ciit_news_comments`
--
ALTER TABLE `ciit_news_comments`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_email_2` (`u_email`);

--
-- Indexes for table `ciit_u_details`
--
ALTER TABLE `ciit_u_details`
  ADD PRIMARY KEY (`u_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
