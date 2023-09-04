-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2023 at 09:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diet_and_health`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `Payid` int(50) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` int(50) NOT NULL,
  `ownername` varchar(100) NOT NULL,
  `cardno` int(50) NOT NULL,
  `month` char(20) NOT NULL,
  `year` int(50) NOT NULL,
  `cvv` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`Payid`, `fullname`, `email`, `Address`, `city`, `state`, `zipcode`, `ownername`, `cardno`, `month`, `year`, `cvv`) VALUES
(1, 'xcsc', '', 'scs', 'bjkbk', 'ffhfhf', 524224, 'scsc', 1242424, 'hjbk', 1235, 2122),
(2, 'xcsc', '', 'scs', 'bjkbk', 'ffhfhf', 524224, 'scsc', 1242424, 'hjbk', 1235, 2122),
(3, 'xcsc', 'scsc@dggd.bbn', 'scs', 'bjkbk', 'ffhfhf', 524224, 'scsc', 1242424, 'hjbk', 1235, 2122),
(4, 'xcsc', 'scsc@dggd.bbn', 'scs', 'bjkbk', 'ffhfhf', 524224, 'scsc', 1242424, 'hjbk', 1235, 2122),
(5, 'xcsc', 'scsc@dggd.bbn', 'scs', 'bjkbk', 'ffhfhf', 524224, 'scsc', 1242424, 'hjbk', 1235, 2122),
(6, 'xcsc', 'scsc@dggd.bbn', 'scs', 'bjkbk', 'ffhfhf', 524224, 'scsc', 1242424, 'hjbk', 1235, 2122),
(7, 'xcsc', 'scsc@dggd.bbn', 'scs', 'bjkbk', 'ffhfhf', 524224, 'scsc', 1242424, 'hjbk', 1235, 2122);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`Payid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `Payid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
