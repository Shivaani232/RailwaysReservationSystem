-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 03:19 PM
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
-- Database: `ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `passenger`
--

CREATE TABLE `passenger` (
  `name` varchar(15) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `passenger`
--

INSERT INTO `passenger` (`name`, `email`, `phone`, `password`) VALUES
('Rahul', 'rahul@gmail.com', '8907654321', 'pass1'),
('Shiva', 'shiva@gmail.com', '9887260551', 'pass2'),
('Raina', 'raina@gmail.com', '9718470657', 'pass3'),
('Sai', 'sai@gmail.com', '3950067901', 'pass4'),
('Sahi', 'sahi@gmail.com', '2056784990', 'pass5'),
('Shivs', 'shivs@gmail.com', '1234678890', 'pass6'),
('Shobia', 'shobia@gmail.com', '1233456789', 'pass7'),
('Shreyas', 'shreyas@gmail.com', '3456778907', 'pass8'),
('Sneha', 'sne@gmail.com', '1103456789', 'pass9'),
('Dhoni', 'dhoni@gmail.com', '3609088770', 'pass10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
