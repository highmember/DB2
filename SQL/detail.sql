-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 03:44 PM
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
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `lne_num` int(11) NOT NULL,
  `pay_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `cat_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `det_descript` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `det_num` int(11) NOT NULL,
  `det_price` int(11) NOT NULL,
  `det_tot_price` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`lne_num`, `pay_id`, `cat_id`, `det_descript`, `det_num`, `det_price`, `det_tot_price`) VALUES
(1, '000001', 'C00001', 'ซื้อปูน กระเบื้อง เป็นกล่องแยก ', 5, 600, '203000'),
(2, '000002', 'C00002', 'ซื้อสี', 10, 2000, '20000'),
(3, '000003', 'C00003', 'ซื้อตะปู', 30, 100, '3000'),
(4, '000004', 'C00004', 'ซื้อทราย', 10, 1000, '10000'),
(5, '000005', 'C00005', 'ซื้อกระเบื้องปูหลังคา', 40, 500, '20000');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
