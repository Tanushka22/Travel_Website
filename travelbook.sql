-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 02:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel2`
--

-- --------------------------------------------------------

--
-- Table structure for table `air`
--

CREATE TABLE `air` (
  `id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `NumPpl` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `air`
--

INSERT INTO `air` (`id`, `country_name`, `Email`, `Source`, `Destination`, `Date`, `Time`, `NumPpl`) VALUES
(1, 'Ross', 'ross@bbc.com', 'Bengaluru', 'London', '2021-04-22', '00:00:00', 6),
(3, 'Adam', 'adam@abc.com', 'Kolkata', 'New York City', '2021-04-22', '12:02:00', 4),
(5, 'sample2', 'sample2@gmail.com', 'Kolkata', 'New York City', '2021-04-21', '17:47:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `NumPpl` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `country_name`, `Email`, `Source`, `Destination`, `Date`, `Time`, `NumPpl`) VALUES
(4, 'Shelly', 'shelly@ggg.com', 'Goa', 'Mysore', '2021-04-29', '11:28:00', 2),
(16, 'Howard', 'howard@tbbt.com', 'Mumbai', 'Hyderabad', '2021-04-30', '18:00:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Return_date` date NOT NULL,
  `Time` time NOT NULL,
  `NumPpl` int(50) NOT NULL,
  `Car_model` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`id`, `country_name`, `Email`, `Source`, `Destination`, `Date`, `Return_date`, `Time`, `NumPpl`, `Car_model`) VALUES
(1, 'Sara', 'sara@abc.com', 'Goa', 'Mysore', '2021-04-22', '2021-04-24', '00:00:00', 5, 'Swift Dzire'),
(6, 'Anna', 'anna@frozen.com', 'Goa', 'Mysore', '2021-04-28', '2021-05-06', '00:51:00', 4, 'Skoda'),
(7, 'Robin', 'rob@abc.com', 'Goa', 'Mysore', '2021-04-22', '2021-04-25', '06:00:00', 4, 'Innova'),
(11, 'sample1', 'sample1@mail.com', 'Delhi', 'Hyderabad', '2021-04-22', '2021-04-29', '21:45:00', 3, 'Skoda'),
(12, 'Steve', 'steve@rogers.com', 'Goa', 'Mysore', '2021-04-21', '2021-04-29', '07:03:00', 3, 'Swift Dzire'),
(15, 'Frank', 'frank@frank.com', 'Goa', 'Mysore', '2021-04-21', '2021-04-22', '08:07:00', 2, 'Skoda');

-- --------------------------------------------------------

--
-- Table structure for table `train`
--

CREATE TABLE `train` (
  `id` int(11) NOT NULL,
  `country_name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Source` varchar(50) NOT NULL,
  `Destination` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `NumPpl` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train`
--

INSERT INTO `train` (`id`, `country_name`, `Email`, `Source`, `Destination`, `Date`, `Time`, `NumPpl`) VALUES
(1, 'Rachel', 'rach@ray.com', 'Goa', 'Mysore', '2021-04-21', '00:00:00', 3),
(2, 'Diana', 'diana@eng.com', 'Mumbai', 'Hyderabad', '2021-04-14', '00:00:00', 3),
(3, 'Michelle', 'michell@obama.com', 'Goa', 'Mysore', '2021-04-23', '16:00:00', 3),
(5, 'abc', 'abc@abc.com', 'Goa', 'Mysore', '2021-04-22', '08:50:00', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `air`
--
ALTER TABLE `air`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train`
--
ALTER TABLE `train`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `air`
--
ALTER TABLE `air`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rent`
--
ALTER TABLE `rent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `train`
--
ALTER TABLE `train`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
