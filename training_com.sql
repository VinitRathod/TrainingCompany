-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 05, 2021 at 06:02 AM
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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(0, 'example@gmail.com', 'vinit123');

-- --------------------------------------------------------

--
-- Table structure for table `calendar`
--

DROP TABLE IF EXISTS `calendar`;
CREATE TABLE IF NOT EXISTS `calendar` (
  `Cal_id` int NOT NULL,
  `C_name` varchar(50) NOT NULL,
  `amount` int NOT NULL,
  `From_date` date NOT NULL,
  `To_date` date NOT NULL,
  `time` time(6) NOT NULL,
  PRIMARY KEY (`Cal_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `number` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `subject` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`number`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`number`, `name`, `email`, `subject`, `message`) VALUES
(16, 'Vinit Rathod', 'vinitrathod123@gmail.com', 'IMP!!', 'Hello my name is Vinit Rathod'),
(17, 'Iron', 'ironman@gmail.com', 'Man', 'Hello I am iron man');

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

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `C_id` int NOT NULL,
  `C_name` text NOT NULL,
  `C_hours` int NOT NULL,
  `amount` int NOT NULL,
  `details` varchar(200) NOT NULL,
  `From_date` date NOT NULL,
  `To_date` date NOT NULL,
  `time` time(6) NOT NULL,
  `pdf` varchar(50) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `course_enrollment`
--

DROP TABLE IF EXISTS `course_enrollment`;
CREATE TABLE IF NOT EXISTS `course_enrollment` (
  `C_id` int NOT NULL,
  `L_id` int NOT NULL,
  `T_id` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

DROP TABLE IF EXISTS `enquiry`;
CREATE TABLE IF NOT EXISTS `enquiry` (
  `E_id` int NOT NULL,
  `name` text NOT NULL,
  `C_name` varchar(50) NOT NULL,
  `contact` int NOT NULL,
  `email` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  PRIMARY KEY (`E_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `F_id` int NOT NULL AUTO_INCREMENT,
  `C_id` int NOT NULL,
  `L_id` int NOT NULL,
  `C_reason` text NOT NULL,
  `start` text NOT NULL,
  `effort_invested` text NOT NULL,
  `end` text NOT NULL,
  `recommend` text NOT NULL,
  `suggestion` varchar(100) NOT NULL,
  `rating` int NOT NULL,
  PRIMARY KEY (`F_id`),
  KEY `C_id` (`C_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `learner`
--

DROP TABLE IF EXISTS `learner`;
CREATE TABLE IF NOT EXISTS `learner` (
  `L_id` int NOT NULL,
  `L_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int NOT NULL,
  `feedback` varchar(200) NOT NULL,
  PRIMARY KEY (`L_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `P_id` bigint NOT NULL AUTO_INCREMENT,
  `U_id` int NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `contact` bigint NOT NULL,
  `address` varchar(500) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `course` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `amount` int NOT NULL,
  `currency` varchar(7) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `payment_id` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `order_id` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `receipt` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`P_id`),
  UNIQUE KEY `receipt` (`receipt`),
  KEY `fk_uid` (`U_id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_id`, `U_id`, `name`, `email`, `contact`, `address`, `course`, `amount`, `currency`, `payment_id`, `order_id`, `receipt`, `created_at`) VALUES
(24, 16, 'Meera Rathod', 'meerarathod123@gmail.com', 9687061097, 'Hello my name is meera', 'java', 5000, 'INR', 'pay_HTXg892hIAv9F4', 'order_HTXfzOgkPexNci', 'txn_60dd4ac065a5d', '01-07-21 10:25:41');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

DROP TABLE IF EXISTS `trainer`;
CREATE TABLE IF NOT EXISTS `trainer` (
  `T_id` int NOT NULL,
  `T_name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint NOT NULL,
  `experience` varchar(20) NOT NULL,
  `resume` varchar(200) NOT NULL,
  PRIMARY KEY (`T_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`T_id`, `T_name`, `email`, `contact`, `experience`, `resume`) VALUES
(0, 'Vinit', 'vinitrathod123@gmail.com', 704637711, '1', ''),
(1, 'VInitRathod', '', 7046377115, '2', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

DROP TABLE IF EXISTS `usertable`;
CREATE TABLE IF NOT EXISTS `usertable` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `code` mediumint NOT NULL,
  `status` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(16, 'Meera Rathod', 'meerarathod123@gmail.com', '$2y$10$bHisd8wHEr4pYESiUAKHgeoIx1MRVs./qsUAfZiA.TyVJU5wv4iYW', 0, 'verified'),
(17, 'Vinit Rathod', 'vinitrathod123@gmail.com', '$2y$10$sjRIEdfigz3yMhGQpABpo.lWqvsWQj8q4zLh/zTxyB9.AaVY8vdCe', 0, 'verified');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`C_id`) REFERENCES `course` (`C_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`U_id`) REFERENCES `usertable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
