-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 02:23 PM
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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `pay_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `phase_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `proj_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `pay_date` date NOT NULL,
  `pay_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `phase_id`, `proj_id`, `pay_date`, `pay_price`) VALUES
('000001', '01', 'P00000', '2016-05-04', 200000),
('000002', '02', 'P00000', '2016-06-05', 250000),
('000003', '03', 'P00000', '2016-07-07', 150000),
('000004', '04', 'P00000', '2016-08-05', 200000),
('000005', '00', 'P11111', '2016-08-02', 200000),
('000006', '01', 'P11111', '2016-08-22', 200000),
('000007', '03', 'P11111', '2016-09-02', 150000),
('000008', '04', 'P11111', '2016-09-06', 200000),
('000008', '01', 'P22222', '2016-09-01', 6000),
('000010', '01', 'P33333', '2016-09-06', 3000),
('000011', '01', 'P44444', '2016-07-05', 25000),
('000012', '02', 'P44444', '2016-07-16', 200000),
('000013', '01', 'P55555', '2016-06-15', 600000),
('000014', '02', 'P55555', '2016-07-16', 1000000),
('000015', '01', 'P66666', '2016-01-14', 900000),
('000016', '02', 'P66666', '2016-03-21', 500000),
('000017', '01', 'P77777', '2016-01-11', 700000),
('000018', '02', 'P77777', '2016-02-12', 700000),
('000018', '03', 'P77777', '2016-03-13', 250000),
('000019', '04', 'P77777', '2016-04-01', 250000),
('000020', '01', 'P88888', '2016-06-07', 800000),
('000021', '02', 'P88888', '2016-07-07', 500000),
('000022', '01', 'P99999', '2016-08-01', 800000),
('000023', '02', 'P99999', '2016-08-16', 400000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
