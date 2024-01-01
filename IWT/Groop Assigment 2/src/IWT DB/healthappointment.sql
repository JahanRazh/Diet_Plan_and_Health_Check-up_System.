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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
