-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2019 at 10:19 AM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

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
-- Table structure for table `challengerDetails`
--

CREATE TABLE `challengerDetails` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `timeEnter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `timeLeave` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `score` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `challengerDetails`
--

INSERT INTO `challengerDetails` (`userId`, `userName`, `timeEnter`, `timeLeave`, `score`) VALUES
(10026, 'dclaude', '2019-02-05 05:19:09pm', NULL, NULL),
(10027, 'claude', '2019-02-06 10:06:47am', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `challengerDetails`
--
ALTER TABLE `challengerDetails`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `challengerDetails`
--
ALTER TABLE `challengerDetails`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10028;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
