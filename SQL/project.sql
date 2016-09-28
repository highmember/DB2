-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 11:29 AM
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
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `proj_id` char(6) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสงาน',
  `cus_id` char(13) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รหัสลูกค้า',
  `proj_detail` varchar(100) COLLATE utf8_unicode_ci NOT NULL COMMENT 'รายละเอียดงาน',
  `proj_start` date NOT NULL COMMENT 'วันเริ่มงาน',
  `proj_end` date NOT NULL COMMENT 'วันจบงาน',
  `proj_phase_total` int(10) NOT NULL COMMENT 'จำนวนเฟส',
  `proj_price` int(11) NOT NULL COMMENT 'ราคางาน',
  `proj_offer_price` int(11) NOT NULL COMMENT 'ราคาที่เสนอ',
  `proj_curr_income` int(11) NOT NULL COMMENT 'รายได้ปัจจุบัน',
  `proj_curr_payment` int(11) NOT NULL COMMENT 'รายจ่ายปัจจุบัน',
  `proj_net_income` int(11) NOT NULL COMMENT 'รายได้สุทธิ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`proj_id`, `cus_id`, `proj_detail`, `proj_start`, `proj_end`, `proj_phase_total`, `proj_price`, `proj_offer_price`, `proj_curr_income`, `proj_curr_payment`, `proj_net_income`) VALUES
('P00000', '8423546512644', 'สร้างบ้าน2ชั้น', '2016-05-04', '2016-09-09', 4, 4000000, 4000000, 4000000, 800000, 3200000),
('P11111', '8407154166578', 'บ้าน1ชั้น', '2016-08-02', '2016-10-06', 4, 4000000, 4000000, 4000000, 750000, 3250000),
('P22222', '8377031832571', 'ทำหลังคา', '2016-09-01', '2016-09-05', 1, 10000, 10000, 10000, 6000, 4000),
('P33333', '7882360474456', 'ทาสีบ้าน', '2016-09-06', '2016-09-08', 1, 6000, 6000, 6000, 3000, 3000),
('P44444', '7106635167583', 'สระว่ายน้ำ', '2016-07-05', '2016-07-31', 2, 400000, 400000, 400000, 225000, 175000),
('P55555', '6670666014110', 'ตึก2ชั้น', '2016-06-15', '2016-08-20', 2, 4000000, 4000000, 4000000, 1600000, 2400000),
('P66666', '6083176685172', 'ตึก1ชั้น', '2016-01-14', '2016-05-30', 2, 3000000, 3000000, 3000000, 1400000, 1600000),
('P77777', '5703864618554', 'บ้านแฝด2ชั้น', '2016-01-11', '2016-05-28', 4, 5000000, 5000000, 5000000, 1900000, 3100000),
('P88888', '5572171617159', 'บ้านเดี่ยว1ชั้น', '2016-06-07', '2016-08-02', 2, 3000000, 3000000, 1500000, 1300000, 1700000),
('P99999', '5136425313641', 'ทำบ้าน1ชั้น', '2016-08-01', '2016-09-01', 2, 2000000, 2000000, 2000000, 1200000, 800000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`proj_id`),
  ADD UNIQUE KEY `PROJ_ID` (`proj_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
