-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 07:42 AM
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `diatplanappointment`
--

INSERT INTO `diatplanappointment` (`Appid`, `Fullname`, `Email`, `Gender`, `Age`, `Pnumber`, `Nutrition_name`, `City`, `Date`, `Time`) VALUES
(1, 'Mr.kumara Disanayaka', 'www.kumara3165@gmail.com', 'Male', 25, 767445689, 'Mr.smarakoon', 'Kurunegala', '2023-07-31', '8.30-10.30 AM');

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
  MODIFY `Appid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
