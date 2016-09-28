-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2016 at 02:28 PM
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
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `proj_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `emp_fname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `emp_lname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `team_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `emp_tel` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `emp_address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `emp_frist_date` date NOT NULL,
  `emp_inc_day` int(11) NOT NULL,
  `emp_num_work` int(11) NOT NULL,
  `emp_pay_week` int(11) NOT NULL,
  `emp_last_pay` date NOT NULL,
  `emp_come_work` tinyint(1) NOT NULL,
  `emp_curr_date` date NOT NULL,
  `emp_tot_work` int(11) NOT NULL,
  `emp_lea_bus` int(11) NOT NULL,
  `emp_lea_sick` int(11) NOT NULL,
  `emp_lea_special` int(11) NOT NULL,
  `emp_tot_lea` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `proj_id`, `emp_fname`, `emp_lname`, `team_id`, `emp_tel`, `emp_address`, `emp_frist_date`, `emp_inc_day`, `emp_num_work`, `emp_pay_week`, `emp_last_pay`, `emp_come_work`, `emp_curr_date`, `emp_tot_work`, `emp_lea_bus`, `emp_lea_sick`, `emp_lea_special`, `emp_tot_lea`) VALUES
('E00000', 'P44444', 'ชัยยศ', 'พรหมจารีย์พินาศ', '', '0958744489', 'กรุงเทพ', '2016-07-05', 300, 7800, 4500, '2016-07-31', 1, '2016-07-31', 26, 0, 0, 0, 0),
('E11111', 'P55555', 'วรต', 'อกระโทก', '', '0855967834', 'ชลบุรี', '2016-06-15', 300, 15000, 4500, '2016-08-20', 1, '2016-08-20', 35, 0, 0, 0, 0),
('E12345', 'P00000', 'ทวีชัย', 'มีสุข', '', '0988876761', 'กรุงเทพ', '2016-05-04', 300, 27000, 4500, '2016-08-04', 1, '2016-08-04', 88, 0, 2, 0, 0),
('E22222', 'P66666', 'ติ๊บ', 'บุญนำ', '', '0995558846', 'ชลบุรี', '2016-01-14', 300, 36000, 4500, '2016-05-30', 1, '2016-05-30', 120, 0, 0, 0, 0),
('E33333', 'P77777', 'แคน', 'อัครฮาก', '', '0943223341', 'กรุงเทพ', '2016-01-11', 300, 18000, 4500, '2016-05-28', 1, '2016-05-28', 60, 0, 0, 0, 0),
('E44444', 'P88888', 'บรรพต', 'เจ็ดพี่น้องร่วมใจ', '', '0977885463', 'กรุงเทพ', '2016-06-07', 400, 20000, 6000, '2016-08-02', 1, '2016-08-02', 50, 0, 0, 0, 0),
('E45634', 'P11111', 'สุรศักดิ์', 'มนตรี', '', '0983664872', 'ชลบุรี', '2016-08-02', 300, 15000, 4500, '2016-10-06', 1, '2016-10-06', 50, 0, 0, 0, 0),
('E55555', 'P99999', 'ชาติชาญ', 'เล่นเอาขำ', '', '0998432211', 'กรุงเทพ', '2016-08-01', 500, 15000, 7500, '2016-09-01', 1, '2016-09-01', 30, 0, 0, 0, 0),
('E56337', 'P22222', 'กวี', 'ชัยยา', '', '0923355612', 'กรุงเทพ', '2016-09-01', 300, 1500, 1500, '2016-09-01', 1, '2016-09-01', 5, 0, 0, 0, 0),
('E67245', 'P33333', 'นวพล', 'สุขดี', '', '0947753741', 'ชลบุรี', '2016-09-06', 400, 1200, 1200, '2016-09-08', 1, '2016-09-08', 3, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
