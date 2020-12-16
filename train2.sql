-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 04:46 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `train2`
--

CREATE TABLE `train2` (
  `trainno` varchar(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `totalseats` varchar(5) NOT NULL,
  `avail` varchar(5) NOT NULL,
  `source` varchar(10) NOT NULL,
  `destination` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train2`
--

INSERT INTO `train2` (`trainno`, `name`, `totalseats`, `avail`, `source`, `destination`) VALUES
('12345', 'Pandian Express', '200', '200', 'Chennai', 'Madurai'),
('12346', 'Pearl City', '200', '200', 'Madurai', 'Chennai'),
('12347', 'Shahapti Express', '200', '200', 'Chennai', 'Mumbai'),
('12348', 'Siberian Express', '200', '200', 'Mumbai', 'Chennai'),
('12349', 'Delhi Express', '200', '200', 'Chennai', 'Delhi'),
('12350', 'Ecity Express', '200', '200', 'Chennai', 'Banglore'),
('12351', 'Blue Train', '200', '200', 'Chennai', 'Kolkata'),
('12352', 'Orient Express', '200', '200', 'Delhi', 'Chennai'),
('12353', 'Golden Arrow', '200', '200', 'Banglore', 'Chennai'),
('12354', 'Andalus Express', '200', '200', 'Kolkata', 'Chennai');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
