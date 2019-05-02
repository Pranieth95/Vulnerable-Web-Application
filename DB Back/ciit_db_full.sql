-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 02, 2019 at 03:48 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.33-0ubuntu0.16.04.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `challengerComplete`
--

CREATE TABLE `challengerComplete` (
  `userName` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ch1` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch3` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch4` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch5` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch6` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch7` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch8` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch9` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch10` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `challengerComplete`
--

INSERT INTO `challengerComplete` (`userName`, `ch1`, `ch2`, `ch3`, `ch4`, `ch5`, `ch6`, `ch7`, `ch8`, `ch9`, `ch10`, `userId`) VALUES
('kanchana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 19),
('denver', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20),
('emanuel', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 21),
('claude', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 22),
('claude', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 23),
('claude', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 24),
('dc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 25),
('damitha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 26),
('damitha', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 27),
('denvwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 28),
('denvwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 29),
('denvwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 30),
('denvwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 31),
('denvwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 32),
('denvwer', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 33),
('dc', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 34),
('dracaris', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35),
('suricata', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 36),
('claude', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 37);

-- --------------------------------------------------------

--
-- Table structure for table `challengerDetails`
--

CREATE TABLE `challengerDetails` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `timeEnter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `timeLeave` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `score` double DEFAULT NULL,
  `Hint1` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hint2` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hint3` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hint4` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hint5` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hint6` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hint7` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Hint8` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch1` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch2` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch3` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch4` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch5` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch6` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch7` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ch8` varchar(5) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `challengerDetails`
--

INSERT INTO `challengerDetails` (`userId`, `userName`, `timeEnter`, `timeLeave`, `score`, `Hint1`, `Hint2`, `Hint3`, `Hint4`, `Hint5`, `Hint6`, `Hint7`, `Hint8`, `ch1`, `ch2`, `ch3`, `ch4`, `ch5`, `ch6`, `ch7`, `ch8`) VALUES
(10111, 'dc', '2019-04-08 04:08:42pm', '2019-04-08 04:23:40pm', NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 'Yes', NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, 'Yes', NULL),
(10112, 'dracaris', '2019-04-08 04:30:02pm', NULL, NULL, NULL, NULL, NULL, NULL, 'Yes', 'Yes', 'Yes', NULL, 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', NULL, NULL, NULL),
(10113, 'suricata', '2019-04-17 09:24:58am', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10114, 'claude', '2019-04-18 11:18:39am', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  `ad_date` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ad_appr` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ciit_news_comments`
--

INSERT INTO `ciit_news_comments` (`u_id`, `u_name`, `u_email`, `u_comment`, `ad_date`, `ad_appr`) VALUES
('it18088888', 'Janith Upendra', 'janith.u@my.ciit.lk', 'this is an interesting article', '19-03-25 03:12:46pm', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ciit_student`
--

CREATE TABLE `ciit_student` (
  `st_id` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `st_year` int(11) NOT NULL,
  `st_semester` int(11) NOT NULL,
  `st_major` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ciit_student`
--

INSERT INTO `ciit_student` (`st_id`, `st_year`, `st_semester`, `st_major`) VALUES
('bm17099999', 3, 1, 'Software Engineering'),
('it18088888', 3, 1, 'Cyber Security');

-- --------------------------------------------------------

--
-- Table structure for table `ciit_s_course`
--

CREATE TABLE `ciit_s_course` (
  `c_id` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `c_major` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `c_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `c_year` int(11) NOT NULL,
  `c_semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ciit_s_course`
--

INSERT INTO `ciit_s_course` (`c_id`, `c_major`, `c_name`, `c_year`, `c_semester`) VALUES
('IT_103', 'Information Technology', 'Advanced Algorithm Desgining I', 2, 1),
('IT_105', 'Information Technology', 'Database Management Systems I', 2, 1),
('IT_106', 'Information Technology', 'Software Engineering I', 2, 1),
('IT_109', 'Information Technology', 'Computer Graphics and Designing', 2, 1),
('IT_132', 'Information Technology', 'Object Oriented Concepts', 2, 2),
('IT_134', 'Information Technology', 'Internet and Web Technologies ', 2, 2),
('IT_136', 'Information Technology', 'Software Engineering II', 2, 2),
('IT_139', 'Information Technology', 'Software Process Modelling', 2, 2),
('IT_191', 'Cyber Security', 'Network Security', 3, 1),
('IT_192', 'Cyber Security', 'Applied Information Assuarance', 3, 1),
('IT_195', 'Cyber Security', 'Information Security and Risk Management', 3, 1),
('IT_197', 'Cyber Security', 'Secure Software Systems', 3, 1),
('IT_198', 'Cyber Security', 'Introduction to Cyber Security', 3, 1),
('IT_210', 'Software Engineering', 'Structured Analysis and Design', 3, 1),
('IT_211', 'Software Engineering', 'Information Systems Analysis', 3, 1),
('IT_216', 'Software Engineering', 'Database Management Systems II', 3, 1),
('IT_217', 'Software Engineering', 'Design and Management of Computing Infrastructure', 3, 1),
('IT_218', 'Software Engineering', 'Operating Systems and System Administration', 3, 1),
('IT_220', 'Cyber Security', 'Information Security Project', 3, 2),
('IT_221', 'Cyber Security', 'Information Security and Project Management', 3, 2),
('IT_224', 'Cyber Security', 'Data Security I', 3, 2),
('IT_226', 'Cyber Security', 'Enterprise Security and Industrial Standards', 3, 2),
('IT_229', 'Cyber Security', 'Cryptography', 3, 2),
('IT_290', 'Software Engineering ', 'Industry Placement', 3, 2);

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
-- Table structure for table `ciit_u_permissions`
--

CREATE TABLE `ciit_u_permissions` (
  `perm_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `perm_type` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `perm_grant_u` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `perm_grant_l` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `perm_grant_a` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
-- Indexes for table `challengerComplete`
--
ALTER TABLE `challengerComplete`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `challengerDetails`
--
ALTER TABLE `challengerDetails`
  ADD PRIMARY KEY (`userId`);

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
-- Indexes for table `ciit_student`
--
ALTER TABLE `ciit_student`
  ADD PRIMARY KEY (`st_id`,`st_year`);

--
-- Indexes for table `ciit_s_course`
--
ALTER TABLE `ciit_s_course`
  ADD PRIMARY KEY (`c_id`);

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
-- AUTO_INCREMENT for table `challengerComplete`
--
ALTER TABLE `challengerComplete`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `challengerDetails`
--
ALTER TABLE `challengerDetails`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10115;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
