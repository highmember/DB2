-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 03:03 PM
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
-- Table structure for table `catalog`
--

CREATE TABLE `catalog` (
  `cat_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ver_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `cat_descript` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียดแคตตาล็อค',
  `cat_price` int(11) NOT NULL,
  `cat_discount` int(11) NOT NULL COMMENT 'ส่วนลดแคตตาล็อค',
  `cat_date_update` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `catalog`
--

INSERT INTO `catalog` (`cat_id`, `ver_id`, `cat_descript`, `cat_price`, `cat_discount`, `cat_date_update`) VALUES
('C00001', 'V00001', 'ซื้อปูน กระเบื้อง', 30000, 0, '2016-05-03'),
('C00002', 'V00002', 'ซื้อสี', 20000, 0, '2016-05-19'),
('C00003', 'V00003', 'ซื้อตะปู', 3000, 0, '2016-05-31'),
('C00004', 'V00004', 'ซื้อทราย', 10000, 0, '2016-05-31'),
('C00005', 'V00005', 'ซื้อกระเบื้องปูหลังคา', 20000, 0, '2016-08-25'),
('C00006', 'V00006', 'ซื้อกระเบื้องปูพื้น', 30000, 0, '2016-06-03'),
('C00007', 'V00007', 'ซื้อสี', 40000, 0, '2016-07-23'),
('C00008', 'V00008', 'ซื้อเหล็ก', 7000, 0, '2016-04-03'),
('C00009', 'V00009', 'ซื้อไม้อัด', 20000, 0, '2016-06-28'),
('C00010', 'V00010', 'ซื้อสว่าน2ตัว', 6000, 0, '2016-06-25');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
