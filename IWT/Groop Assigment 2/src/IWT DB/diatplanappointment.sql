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
-- Table structure for table `diatplanappointment`
--

CREATE TABLE `diatplanappointment` (
  `Appid` int(50) NOT NULL,
  `Fullname` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` char(20) NOT NULL,
  `Age` int(10) NOT NULL,
  `Pnumber` int(50) NOT NULL,
  `Nutrition_name` varchar(50) NOT NULL,
  `City` char(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diatplanappointment`
--

INSERT INTO `diatplanappointment` (`Appid`, `Fullname`, `Email`, `Gender`, `Age`, `Pnumber`, `Nutrition_name`, `City`, `Date`, `Time`) VALUES
(1, 'Mr.kumara Disanayaka', 'www.kumara3165@gmail.com', 'Male', 25, 767445689, 'Mr.smarakoon', 'Kurunegala', '2023-07-31', '8.30-10.30 AM'),
(81, 'Mrs.wiwiyam Randunupura', 'wiwiyanrandunupura@gmail.com', 'Female', 58, 377221436, 'Mr. wasantha', 'kurunegala', '2024-01-18', '8.30-10.30 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diatplanappointment`
--
ALTER TABLE `diatplanappointment`
  ADD PRIMARY KEY (`Appid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `diatplanappointment`
--
ALTER TABLE `diatplanappointment`
  MODIFY `Appid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
