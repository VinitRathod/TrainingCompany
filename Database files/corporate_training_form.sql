-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 06, 2021 at 01:36 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `training_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `corporate_training_form`
--

DROP TABLE IF EXISTS `corporate_training_form`;
CREATE TABLE IF NOT EXISTS `corporate_training_form` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mobile_no` bigint NOT NULL,
  `email` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `company_name` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_of_emp` bigint NOT NULL,
  `course` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `found_us` varchar(200) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `comments` varchar(1500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `ip_addr` varchar(16) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mac_addr` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `time_stamp` varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `corporate_training_form`
--

INSERT INTO `corporate_training_form` (`id`, `name`, `mobile_no`, `email`, `company_name`, `no_of_emp`, `course`, `found_us`, `comments`, `ip_addr`, `mac_addr`, `time_stamp`) VALUES
(26, 'VinitRathod', 917046377115, 'vinitrathodmeera@gmail.com', 'NA', 655, 'python', 'Google', 'Write your queries here', '::1', '74-40-BB-29-0C-FF', '21-06-2021 10:30:49am'),
(27, 'VINIT RATHOD', 7041175145, 'vinitrathodmeera@gmail.com', 'adfadsf', 465, 'JAVA', 'adfasdf', 'adsfasdfasdf', '::1', '74-40-BB-29-0C-FF', '01-07-2021 12:14:42pm'),
(28, 'VINIT RATHOD', 9687061097, 'staff@xyz.com', 'adfasdf', 55, 'adfasdf', 'adfadsf', 'adfasdfasdf', '::1', 'F4-39-09-C6-07-24', '02-07-2021 09:59:28am');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
