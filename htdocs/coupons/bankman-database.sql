-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2019 at 08:48 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankman`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit_cash`
--

CREATE TABLE `credit_cash` (
  `id` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `owner` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_cash`
--

INSERT INTO `credit_cash` (`id`, `saldo`, `owner`) VALUES
(1, 0, 1233108100);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `Acc_no` int(30) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `DOB` date NOT NULL,
  `Contact_No` bigint(12) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Created_on` date NOT NULL,
  `Amount` int(11) NOT NULL,
  `ATM_NO` bigint(20) NOT NULL,
  `PIN` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`Acc_no`, `First_name`, `Status`, `DOB`, `Contact_No`, `Address`, `Created_on`, `Amount`, `ATM_NO`, `PIN`) VALUES
(1233108100, 'Hrithik', 'Administrator', '2000-01-02', 9112542365, 'Mumbai', '2014-11-03', 9953798, 1234, 8272),
(1237912995, 'Deepika', 'Member', '2003-03-03', 9421352012, 'Bengaluru', '2014-11-03', 4003901, 4591720349994488, 5125),
(1238069768, 'Kareena', 'Member', '2001-02-03', 7525992132, 'Pataudi', '2014-11-03', 45001000, 4591706200773827, 8457),
(1238153062, 'Ranbeer', 'Member', '2002-02-03', 9421356821, 'Punjab', '2014-11-03', 8001000, 4591996880438644, 1730),
(1239799042, 'Akshay', 'Member', '2002-04-01', 9431568452, 'Ludhiana', '2014-11-03', 2147483647, 4591869573610369, 3843);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_id` varchar(30) NOT NULL,
  `Password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Emp_id`, `Password`) VALUES
('alex_banker', '32250170a0dca92d53ec9624f336ca24'),
('ATM_banker', '1ccd6af4a2ca8d765ba5be68caa7c2dd');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `Trans_id` int(11) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Acc_no1` int(11) DEFAULT NULL,
  `Acc_no2` int(11) DEFAULT NULL,
  `Remark` varchar(30) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`Trans_id`, `Date`, `Acc_no1`, `Acc_no2`, `Remark`, `Amount`) VALUES
(1, '2019-10-26 20:38:58', 1233108100, 1237912995, 'CREDIT CASH', 1),
(5, '2019-10-26 20:44:28', 1237912995, 1237912995, 'TRANSFER', 1000),
(11, '2019-10-26 20:44:28', NULL, 1237912995, 'TRANSFER', 1000),
(13, '2019-10-26 20:44:28', NULL, 1237912995, 'TRANSFER', 1000),
(14, '2019-10-26 20:44:28', 1237912995, NULL, 'TRANSFER', 1000),
(15, '2019-10-26 20:44:28', NULL, 1237912995, 'TRANSFER', 5000),
(16, '2019-10-26 20:44:28', 1233108100, NULL, 'TRANSFER', 1000),
(19, '2019-10-26 20:44:28', 1233108100, 1238153062, 'TRANSFER', 1000),
(20, '2019-10-26 20:44:28', 1233108100, NULL, 'TRANSFER', 1000),
(26, '2019-10-26 20:44:28', 1233108100, 1239799042, 'TRANSFER', 100),
(27, '2019-10-26 20:44:28', 1233108100, 1239799042, 'TRANSFER', 10000),
(28, '2019-10-26 20:44:28', 1233108100, 1239799042, 'TRANSFER', 10000),
(29, '2019-10-26 20:44:28', 1233108100, 1239799042, 'TRANSFER', 10000),
(30, '2019-10-26 20:44:28', 1233108100, 1239799042, 'TRANSFER', 10000),
(36, '2019-10-26 20:44:28', 1233108100, 1239799042, 'TRANSFER', 100),
(37, '2019-10-26 20:44:28', 1233108100, NULL, 'TRANSFER', 1000),
(38, '2019-10-26 20:44:28', 1233108100, NULL, 'TRANSFER', 1000),
(39, '2019-10-26 20:44:28', 1233108100, 1238069768, 'TRANSFER', 1000),
(41, '2019-10-26 20:38:58', 1233108100, NULL, 'CREDIT CASH', 1),
(42, '2019-10-26 20:38:58', 1233108100, 1237912995, 'CREDIT CASH', 1),
(43, '2019-10-26 20:38:58', 1233108100, NULL, 'CREDIT CASH', 1),
(44, '2019-10-26 20:43:00', 1237912995, 1233108100, 'TRANSFER', 1),
(45, '2019-10-26 20:32:26', 1233108100, NULL, 'CREDIT CASH', 5),
(46, '2019-10-27 18:13:08', 1233108100, NULL, 'CREDIT CASH', 2),
(47, '2019-10-27 18:55:41', 1233108100, NULL, 'CREDIT CASH', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_count`
--

CREATE TABLE `transaction_count` (
  `Trans_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_count`
--

INSERT INTO `transaction_count` (`Trans_count`) VALUES
(47);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit_cash`
--
ALTER TABLE `credit_cash`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Transaction_ibfk_2` (`owner`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`Acc_no`),
  ADD UNIQUE KEY `ATM_NO` (`ATM_NO`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`Trans_id`),
  ADD KEY `Acc_no1` (`Acc_no1`),
  ADD KEY `Acc_no2` (`Acc_no2`);

--
-- Indexes for table `transaction_count`
--
ALTER TABLE `transaction_count`
  ADD PRIMARY KEY (`Trans_count`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credit_cash`
--
ALTER TABLE `credit_cash`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `credit_cash`
--
ALTER TABLE `credit_cash`
  ADD CONSTRAINT `Transaction_ibfk_2` FOREIGN KEY (`owner`) REFERENCES `customers` (`Acc_no`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `Transaction_ibfk_1` FOREIGN KEY (`Acc_no1`) REFERENCES `customers` (`Acc_no`),
  ADD CONSTRAINT `Transaction_ibfk_3` FOREIGN KEY (`Acc_no2`) REFERENCES `customers` (`Acc_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
