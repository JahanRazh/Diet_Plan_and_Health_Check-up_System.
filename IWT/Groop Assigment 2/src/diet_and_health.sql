-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 01, 2024 at 05:27 PM
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
  `Time` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `name`, `email`, `gender`, `age`, `doctor_name`, `city`, `date`, `Time`, `userID`) VALUES
(21, 'chamoth dilshan', 'kcdilshan123@gmail.com', 'Male', 23, 'Dr.priyantha', 'udubaddawa', '2023-06-14', '12.30-2.30 PM', 0),
(23, 'naveen fernando', 'naveen33@gmail.com', 'Male', 20, 'Dr.priyantha', 'colombo', '2023-06-22', '8.30-10.30 AM', 0),
(24, 'ranudi imalsha', 'ranudi@gmail.com', 'Female', 22, 'Dr.thilakawardene', 'wattala', '2023-07-08', '2.30-4.30 PM', 0),
(25, 'tharindi perera', 'tharindi069@gmail.com', 'Female', 30, 'Dr.gunawardane', 'colombo', '2023-06-29', '12.30-2.30 PM', 0),
(26, 'fcewe', 'dewq@h.com', 'Male', 2, 've', 'fe', '2023-06-13', '10.30-12.30 PM', 0);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`RID`, `Fname`, `Lname`, `Email`, `Password`, `phoneNumber`, `country`, `address`, `nic`) VALUES
(40, 'kanishka', 'wijekoon', 'kanishka2@gmail.com', '123', 714985025, 'srilanka', 'Galewela', '2000019001080'),
(41, 'JAHAN', 'RAMESH', 'jahanrazh@gmail.com', 'Razh@3165', 767221436, 'sri lanaka', 'kawisigamuwa,Morathiha', '200013502372');

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
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `diatplanappointment`
--
ALTER TABLE `diatplanappointment`
  MODIFY `Appid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `Payid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `RID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `voucher`
--
ALTER TABLE `voucher`
  MODIFY `VID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
