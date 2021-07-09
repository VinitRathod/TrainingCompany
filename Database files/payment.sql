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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`P_id`, `U_id`, `name`, `email`, `contact`, `address`, `course`, `amount`, `currency`, `payment_id`, `order_id`, `receipt`, `created_at`) VALUES
(24, 19, 'Meera Rathod', 'meerarathod123@gmail.com', 9687061097, 'Hello my name is meera', 'java', 5000, 'INR', 'pay_HTXg892hIAv9F4', 'order_HTXfzOgkPexNci', 'txn_60dd4ac065a5d', '01-07-21 10:25:41'),
(25, 19, 'VinitRathod', 'vinitrathod100901@gmail.com', 7041175145, 'hello', 'python', 5000, 'INR', 'pay_HVH9xH7NoKmiM9', 'order_HVH9rAOp73wiZE', 'txn_60e3114b317b5', '05-07-21 07:34:05'),
(26, 19, 'VinitRathod', 'vinitrathod100901@gmail.com', 7041175145, 'Hello', 'java', 7500, 'INR', 'pay_HVHGCsbcP1k6Qd', 'order_HVHG4fFSR3Y1KF', 'txn_60e312ac86343', '05-07-21 07:40:03');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_uid` FOREIGN KEY (`U_id`) REFERENCES `usertable` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
