-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 02:51 PM
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
-- Table structure for table `vender`
--

CREATE TABLE `vender` (
  `ver_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `ver_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ver_contact` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ver_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ver_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vender`
--

INSERT INTO `vender` (`ver_id`, `ver_name`, `ver_contact`, `ver_address`, `ver_phone`) VALUES
('V00001', 'นนที', 'ไทวัสดุ', 'กรุงเทพ', '0985768894'),
('V00002', 'สมชาย', 'ไทก่อสร้าง', 'ชลบุรี', '0958776545'),
('V00003', 'สมส่วน', 'ไทต่อเติม', 'ชลบุรี', '0985962111'),
('V00004', 'นที', 'การช่างค้าวัสดุ', 'ชลบุรี', '0986675566'),
('V00005', 'วิทยา', 'ค้าวัสดุ', 'ชลบุรี', '0985763456'),
('V00006', 'อมร', 'ไทค้าขาย', 'ชลบุรี', '0986223432'),
('V00007', 'สมรัก', 'ค้าอุปกรณ์ช่าง', 'ชลบุรี', '0985576323'),
('V00008', 'สมหมาย', 'ตราการค้า', 'ชลบุรี', '0921134456'),
('V00009', 'สมพร', 'วัสดุมากมี', 'ชลบุรี', '0955446765'),
('V00010', 'สมปอง', 'ช่างนิยม', 'ชลบุรี', '0985576435');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
