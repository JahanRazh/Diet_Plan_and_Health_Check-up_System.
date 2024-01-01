-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2024 at 05:30 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`Payid`, `fullname`, `email`, `Address`, `city`, `state`, `zipcode`, `ownername`, `cardno`, `month`, `year`, `cvv`) VALUES
(1, 'ganesh pathirana', 'ganeshpathirana@gmail.com', 'kawisigamuwa udagama', 'kurunegala', 'sri lanaka', 524247, 'g pathirana', 4563287, 'januvary', 2025, 789),
(2, 'sulakshana karunathilaka ', 'sulakshanakarunathilaka@gmail.com ', 'udulupola,morathiaha', 'kandy', 'sri lanaka', 224852, 's karunathilaka', 7892465, 'february', 2024, 258),
(3, 'kamal namal', 'kamalnamal@gmail.com', 'dodangaslanda,reedigama', 'jaffna', 'sri lanaka', 756148, 'k namal', 1247532, 'march', 2026, 212),
(4, 'kumara siriwardhana', 'kumarasiriwardhana@gmail.com', 'monaragala,monargala', 'colombo', 'sri lanaka', 963247, 'k siriwardhana', 1242478, 'december', 2030, 122);

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
