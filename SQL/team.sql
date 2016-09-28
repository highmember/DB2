-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 01:02 PM
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
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `proj_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `team_pay_day` int(11) NOT NULL,
  `team_date` date NOT NULL,
  `team_num_emp` int(11) NOT NULL,
  `team_emp_come` int(11) NOT NULL,
  `team_note` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `proj_id`, `team_pay_day`, `team_date`, `team_num_emp`, `team_emp_come`, `team_note`) VALUES
('T00000', 'P00000', 300, '2016-05-04', 1, 1, ''),
('T11111', 'P11111', 300, '2016-08-02', 1, 1, ''),
('T22222', 'P22222', 300, '2016-09-01', 1, 1, ''),
('T33333', 'P33333', 400, '2016-09-06', 1, 1, ''),
('T44444', 'P44444', 400, '2016-07-05', 1, 1, ''),
('T55555', 'P55555', 500, '2016-06-15', 1, 1, ''),
('T66666', 'P66666', 300, '2016-01-14', 1, 1, ''),
('T77777', 'P77777', 300, '2016-01-11', 1, 1, ''),
('T88888', 'P88888', 300, '2016-06-07', 1, 1, ''),
('T99999', 'P99999', 300, '2016-08-01', 1, 1, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
