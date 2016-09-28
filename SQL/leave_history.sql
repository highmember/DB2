-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 01:08 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dw_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `leave history`
--

CREATE TABLE `leave history` (
  `his_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `emp_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `his_detail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `his_start` date NOT NULL,
  `his_end` date NOT NULL,
  `his_note` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `leave history`
--

INSERT INTO `leave history` (`his_id`, `emp_id`, `his_detail`, `his_start`, `his_end`, `his_note`) VALUES
('H12345', 'E12345', 'ประวัติวันหยุดของ ทวีชัย มีสุข', '2016-05-20', '2016-05-21', 'ทวีชัยลาป่วย 2วัน');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
