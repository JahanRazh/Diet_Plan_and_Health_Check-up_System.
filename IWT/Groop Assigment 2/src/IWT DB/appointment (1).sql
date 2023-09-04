-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2023 at 12:23 PM
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
  `Time` varchar(100) NOT NULL,
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`aid`, `name`, `email`, `gender`, `age`, `doctor_name`, `city`, `date`, `Time`, `userID`) VALUES
(21, 'chamoth dilshan', 'kcdilshan123@gmail.com', 'Male', 23, 'Dr.priyantha', 'udubaddawa', '2023-06-14', '12.30-2.30 PM', 0),
(22, 'nipun lakshan', 'nipun123@gmail.com', 'Male', 32, 'Dr.gunawardane', 'kuliyapitiya', '2023-06-30', '8.30-10.30 AM', 0),
(23, 'naveen fernando', 'naveen33@gmail.com', 'Male', 20, 'Dr.priyantha', 'colombo', '2023-06-22', '8.30-10.30 AM', 0),
(24, 'ranudi imalsha', 'ranudi@gmail.com', 'Female', 22, 'Dr.thilakawardene', 'wattala', '2023-07-08', '2.30-4.30 PM', 0),
(25, 'tharindi perera', 'tharindi069@gmail.com', 'Female', 30, 'Dr.gunawardane', 'colombo', '2023-06-29', '12.30-2.30 PM', 0),
(26, 'fcewe', 'dewq@h.com', 'Male', 2, 've', 'fe', '2023-06-13', '10.30-12.30 PM', 0),
(27, '', '', 'Male', 0, '', '', '0000-00-00', '8.30-10.30 AM', 0),
(37, 'wqewqew', 'kanishka2@gmail.com', 'Male', 34, 'sdadsa', 'efewfvew', '2023-06-29', '8.30-10.30 AM', 40);

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
