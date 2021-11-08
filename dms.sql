-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2021 at 07:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(6) NOT NULL,
  `identification` varchar(10) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile_number` varchar(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `health_status` varchar(20) NOT NULL,
  `pre_existing` varchar(100) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patient_id`, `identification`, `patient_name`, `address`, `mobile_number`, `email`, `blood_group`, `health_status`, `pre_existing`, `date_of_birth`, `gender`) VALUES
(4, 'PC59034', 'musa', 'jsjssjsjs', 'jjjdjdjdj', 'jdjdjdj@jdjdjdj', 'B+', 'Severe', 'jdjdjdjdjdd', '2021-08-17', 'Male'),
(5, 'PC8476574', 'ace hood', 'groove street', '07638933', 'ace@gmail.com', 'B+', 'Severe', 'athma', '2021-08-12', 'Male'),
(6, '332233232', 'kjnkndjksjdn', 'Bojang Kunda', '332323', 'musabojang33413@gmail.com', 'B+', 'Bad', 'ddsdsds', '2021-11-22', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `treatment`
--

CREATE TABLE `treatment` (
  `treatment_id` int(11) NOT NULL,
  `treatment` varchar(1000) NOT NULL,
  `treated_by` varchar(60) NOT NULL,
  `treatment_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `treatment`
--
ALTER TABLE `treatment`
  ADD PRIMARY KEY (`treatment_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `treatment`
--
ALTER TABLE `treatment`
  MODIFY `treatment_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
