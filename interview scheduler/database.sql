-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2022 at 05:08 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scaler`
--

-- --------------------------------------------------------

--
-- Table structure for table `interview`
--

CREATE TABLE `interview` (
  `id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interview`
--

INSERT INTO `interview` (`id`, `name`, `contact`, `email`, `status`) VALUES
('pr1', 'avi', '7742460269', 'b20131@students.iitmandi.ac.in', 'scheduled'),
('pr2', 'avi', '9929707295', 'xyz@gmail.com', 'not_scheduled'),
('pr3', 'sanjeet choudhary', '9912696', 'abc@gmail.com', 'not_scheduled');

-- --------------------------------------------------------

--
-- Table structure for table `interviewer`
--

CREATE TABLE `interviewer` (
  `id` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `interviewer`
--

INSERT INTO `interviewer` (`id`, `email`, `date`, `start_time`, `end_time`) VALUES
('pr1', 'sanjeetchodharydb@gmail.com', '2022-11-25', '10:00:00', '12:00:00'),
('pr1', 'b20131@students.iitmandi.ac.in', '2022-11-25', '10:00:00', '12:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
