-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2018 at 07:05 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `Currency1` varchar(5) DEFAULT NULL,
  `Currency2` varchar(5) DEFAULT NULL,
  `Rate` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rate`
--

INSERT INTO `rate` (`Currency1`, `Currency2`, `Rate`) VALUES
('USD', 'EUR', '0.88'),
('USD', 'CAD', '1.31'),
('EUR', 'USD', '1.14'),
('EUR', 'CAD', '1.49'),
('EUR', 'GBP', '0.88'),
('CAD', 'USD', '0.77'),
('CAD', 'EUR', '0.67'),
('CAD', 'GBP', '0.59'),
('GBP', 'USD', '1.29'),
('GBP', 'EUR', '1.13'),
('GBP', 'CAD', '1.69'),
('USD', 'GBP', '0.76');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(20) DEFAULT NULL,
  `Password` varchar(20) DEFAULT NULL,
  `USD` decimal(10,2) DEFAULT NULL,
  `EUR` decimal(10,2) DEFAULT NULL,
  `CAD` decimal(10,2) DEFAULT NULL,
  `GBP` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `USD`, `EUR`, `CAD`, `GBP`) VALUES
('a', '1', '206.96', '352.00', '24.00', '295.00'),
('c', '3', '100.00', '100.00', '0.00', '0.00'),
('d', '4', '0.00', '100.00', '500.00', '0.00'),
('b', '2', '400.00', '400.00', '0.00', '0.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
