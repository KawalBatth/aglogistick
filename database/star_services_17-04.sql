-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 05:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `star_services`
--

CREATE TABLE `star_services` (
  `id` int(50) NOT NULL,
  `service_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `star_services`
--

INSERT INTO `star_services` (`id`, `service_name`) VALUES
(1, 'Overnight'),
(2, 'Road Express'),
(3, 'Fixed Price Premium 1kg'),
(4, 'Fixed Price Premium 3kg'),
(8, 'Fixed Price Premium 20kg'),
(9, 'Fixed Price Premium 5kg'),
(10, 'Fixed Price Premium 10kg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `star_services`
--
ALTER TABLE `star_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `star_services`
--
ALTER TABLE `star_services`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
