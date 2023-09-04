-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 08:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

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
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `aid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `age` int(100) NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `Time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `name`, `email`, `gender`, `age`, `doctor_name`, `city`, `date`, `Time`) VALUES
(21, 'chamoth dilshan', 'kcdilshan123@gmail.com', 'Male', 23, 'Dr.priyantha', 'udubaddawa', '2023-06-14', '12.30-2.30 PM'),
(22, 'nipun lakshan', 'nipun123@gmail.com', 'Male', 32, 'Dr.gunawardane', 'kuliyapitiya', '2023-06-30', '8.30-10.30 AM'),
(23, 'naveen fernando', 'naveen33@gmail.com', 'Male', 20, 'Dr.priyantha', 'colombo', '2023-06-22', '8.30-10.30 AM'),
(24, 'ranudi imalsha', 'ranudi@gmail.com', 'Female', 22, 'Dr.thilakawardene', 'wattala', '2023-07-08', '2.30-4.30 PM'),
(25, 'tharindi perera', 'tharindi069@gmail.com', 'Female', 30, 'Dr.gunawardane', 'colombo', '2023-06-29', '12.30-2.30 PM'),
(26, 'fcewe', 'dewq@h.com', 'Male', 2, 've', 'fe', '2023-06-13', '10.30-12.30 PM');

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
(82, 'kanishka', 'behan@gmail.com', 'Male', 23, 2147483647, 'SDAD', 'matale', '2023-06-14', '8.30-10.30 AM'),
(83, 'kumara', 'kumar@gmail.com', 'Male', 2, 2147483647, 'sdcsdc', 'sadxaD', '2023-07-06', '6.30-8.30 PM');

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
(14, 'behan', 'behan@gmail.com', 'galewela', 'matale', 'srilanka', 123456, 'behan', 2147483647, 'march', 2022, 1234),
(15, 'kanishka', 'kanishka2@gmail.com', 'Galewela', 'matale', 'Srilanka', 123456, 'Kanishka GKP', 2147483647, 'May', 2023, 1234),
(16, 'swwsqw', 'kanishka2@gmail.com', 'ewdew', 'ewdewd', 'ewd', 123456, 'd', 2147483647, 'WEDD', 2022, 1234);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `RID` int(50) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `phoneNumber` int(30) NOT NULL,
  `country` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RID`, `Fname`, `Lname`, `Email`, `Password`, `phoneNumber`, `country`, `address`, `nic`) VALUES
(40, 'kanishka', 'wijekoon', 'kanishka2@gmail.com', '123', 714985025, 'srilanka', 'Galewela', '2000019001080'),
(41, 'imaya', 'wijekoon', 'imaya@gmail.com', '123456', 714985025, 'srilanka', 'Galewela', '200017001082');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher`
--

INSERT INTO `voucher` (`VID`, `Name`, `VNumber`, `Email`, `Plan`, `Reason`, `Date`, `Phone_Number`, `Payment_Type`) VALUES
(17, '34at4t', 2, '3r@gg.com', 'rd2w', '2rd32', '2023-06-30', 714985025, 'Online Payment');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `diatplanappointment`
--
ALTER TABLE `diatplanappointment`
  ADD PRIMARY KEY (`Appid`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`Payid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`RID`);

--
-- Indexes for table `voucher`
--
ALTER TABLE `voucher`
  ADD PRIMARY KEY (`VID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `diatplanappointment`
--
ALTER TABLE `diatplanappointment`
  MODIFY `Appid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `Payid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `RID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `VID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
