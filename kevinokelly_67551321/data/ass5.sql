-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2018 at 02:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment5`
--

-- --------------------------------------------------------

--
-- Table structure for table `ass5`
--

CREATE TABLE `ass5` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Name` varchar(50) NOT NULL,
  `URL` varchar(50) NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ass5`
--

INSERT INTO `ass5` (`ID`, `Date`, `Name`, `URL`, `Description`) VALUES
(9, '2018-04-24 00:00:29', 'Stack Overflow', 'https://stackoverflow.com/', 'Stack Overflow is the largest, most trusted online community for developers to learn, shareâ€‹ â€‹their programming â€‹knowledge, and build their careers.'),
(10, '2018-04-24 00:08:28', 'Udemy', 'https://www.udemy.com/', 'Udemy is an online learning and teaching marketplace with over 65000 courses and 15 million students. Learn programming, marketing, data science and more.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ass5`
--
ALTER TABLE `ass5`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ass5`
--
ALTER TABLE `ass5`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
