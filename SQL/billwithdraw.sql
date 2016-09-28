-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 01:52 PM
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
-- Table structure for table `billwithdraw`
--

CREATE TABLE `billwithdraw` (
  `wd_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `emp_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `billsa_id` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `wd_num_wd` int(11) NOT NULL,
  `wd_credit` int(11) NOT NULL,
  `wd_remain` int(11) NOT NULL COMMENT 'คงเหลือ',
  `wd_date` date NOT NULL,
  `wd_note` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `billwithdraw`
--

INSERT INTO `billwithdraw` (`wd_id`, `emp_id`, `billsa_id`, `wd_num_wd`, `wd_credit`, `wd_remain`, `wd_date`, `wd_note`) VALUES
('W00000', 'E00000', 'B00000', 1, 500, 4000, '2016-07-15', ''),
('W11111', 'E12345', 'B22222', 1, 1000, 3500, '2016-07-31', ''),
('W22222', 'E55555', 'E55555', 1, 2000, 5500, '2016-08-28', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
