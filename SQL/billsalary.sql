-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2016 at 01:26 PM
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
-- Table structure for table `billsalary`
--

CREATE TABLE `billsalary` (
  `billsa_id` char(12) COLLATE utf8_unicode_ci NOT NULL,
  `emp_id` char(6) COLLATE utf8_unicode_ci NOT NULL,
  `billsa_date` date NOT NULL COMMENT 'วันที่ออกบิล',
  `billsa_salary` int(11) NOT NULL COMMENT 'เงินเดือน',
  `billsa_withdawn` int(11) NOT NULL COMMENT 'เบิก',
  `billsa_balance` int(11) NOT NULL COMMENT 'คงเหลือ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `billsalary`
--

INSERT INTO `billsalary` (`billsa_id`, `emp_id`, `billsa_date`, `billsa_salary`, `billsa_withdawn`, `billsa_balance`) VALUES
('B00000', 'E00000', '2016-07-31', 4500, 500, 4000),
('B11111', 'E11111', '2016-08-20', 4500, 0, 4500),
('B22222', 'E12345', '2016-08-04', 4500, 1000, 3500),
('B33333', 'E22222', '2016-05-30', 4500, 0, 4500),
('B44444', 'E33333', '2016-05-28', 4500, 0, 4500),
('B55555', 'E44444', '2016-08-02', 6000, 0, 6000),
('B66666', 'E45634', '2016-10-06', 4500, 0, 4500),
('B77777', 'E55555', '2016-09-01', 7500, 2000, 5500),
('B88888', 'E56337', '2016-09-01', 1500, 0, 1500),
('B99999', 'E67245', '2016-09-08', 1200, 0, 1200);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
