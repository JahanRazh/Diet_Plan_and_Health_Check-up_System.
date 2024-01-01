-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2024 at 05:31 PM
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
-- Table structure for table `voucher`
--

CREATE TABLE `voucher` (
  `VID` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `VNumber` int(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Plan` varchar(20) NOT NULL,
  `Reason` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Phone_Number` int(10) NOT NULL,
  `Payment_Type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`VID`, `Name`, `VNumber`, `Email`, `Plan`, `Reason`, `Date`, `Phone_Number`, `Payment_Type`) VALUES
(1, 'Avishka', 0, 'avishkaniraj2001@gmail.com', 'Health checkup', 'Mental', '2023-06-08', 776237073, 'Online Payment'),
(3, 'Avishka', 123, 'avishkaniraj2001@gmail.com', 'Health checkup', 'Mental', '2023-06-09', 776237073, 'Pysical Payment'),
(5, 'Avishka', 123, 'avishkaniraj2001@gmail.com', 'Health checkup', 'Mental', '2023-06-09', 776237073, 'Pysical Payment'),
(6, 'Avishka', 123, 'avishkaniraj2001@gmail.com', 'Health checkup', 'Mental', '2023-06-09', 776237073, 'Pysical Payment'),
(7, 'Avishka', 123, 'avishkaniraj2001@gmail.com', 'Health checkup', 'Mental', '2023-06-10', 776237073, 'Online Payment'),
(8, 'Avishka', 123, 'avishkaniraj2001@gmail.com', 'Health checkup', 'Mental', '2023-06-10', 776237073, 'Online Payment'),
(9, 'Avishka', 123, 'avishkaniraj2001@gmail.com', 'Health checkup', 'Mental', '2023-06-10', 776237073, 'Online Payment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `VID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
