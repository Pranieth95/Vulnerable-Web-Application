-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2019 at 05:56 AM
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
('bm17099999', 'user2test'),
('it18088888', 'user1test'),
('st16511111', 'staff2test'),
('st16600000', 'staff1test'),
('st17544444', 'staff4test'),
('st17577777', 'staff3test'),
('st17588888', 'staff1test');

-- --------------------------------------------------------

--
-- Table structure for table `ciit_news_comments`
--

CREATE TABLE `ciit_news_comments` (
  `u_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `u_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `u_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `u_comment` varchar(400) COLLATE utf8_unicode_ci NOT NULL,
  `ad_date` datetime NOT NULL,
  `ad_appr` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ciit_news_comments`
--

INSERT INTO `ciit_news_comments` (`u_id`, `u_name`, `u_email`, `u_comment`, `ad_date`, `ad_appr`) VALUES
('bm17099999', 'Mangali Mindanayaka', 'mangali.m@my.ciit.lk', 'This is so interesting article', '2019-01-08 02:33:17', 1),
('it18088888', 'Janith Upendra', 'janith.u@my.ciit.lk', 'This is truly Awesome Sir', '2019-01-08 03:34:23', 1);

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
('st17544444', 'Supun', 'Dahanayake', '1990-12-25', 'No 63, Dambulla', 772233444, '0112223344', 'supun.da@ciit.lk', 'male', '902345678v', 'lecturer', 'new'),
('st17577777', 'Thushara', 'Joseph', '1985-01-01', 'No 323, Colombo', 772233444, '0112223344', 'thushara.j@ciit.lk', 'male', '85123457v', 'lecturer', '-'),
('st17588888', 'Joseph', 'Damian', '1992-10-20', 'No 234A, California, USA', 1923456789, '1098765432', 'joseph.d@ciit.lk', 'male', '923453456v', 'lecturer', 'Foreign');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `name`, `image`, `price`) VALUES
(1, 'Introduction to CS', '1.jpg', 150.00),
(2, 'How to be a Hacker', '2.jpg', 200.00),
(3, 'Concepts of Ethical Hacking', '3.jpg', 175.00);

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
  ADD PRIMARY KEY (`u_id`,`ad_date`);

--
-- Indexes for table `ciit_u_details`
--
ALTER TABLE `ciit_u_details`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
