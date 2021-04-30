-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 11:41 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webfreight`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_margin`
--

CREATE TABLE `customer_margin` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `margin_rate` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_margin`
--

INSERT INTO `customer_margin` (`id`, `customer_id`, `origin`, `margin_rate`, `created_at`) VALUES
(1, '10000013', 'A10', '[{\"service_name\":\"Overnight\",\"customer_service_type\":\"1\",\"margin_rate\":\"11\"},{\"service_name\":\"Road Express\",\"customer_service_type\":\"1\",\"margin_rate\":\"12\"},{\"service_name\":\"Fixed Price Premium 1kg\",\"customer_service_type\":\"1\",\"margin_rate\":\"13\"},{\"service_name\":\"Fixed Price Premium 3kg\",\"customer_service_type\":\"1\",\"margin_rate\":\"14\"},{\"service_name\":\"Fixed Price Premium 20kg\",\"customer_service_type\":\"1\",\"margin_rate\":\"15\"},{\"service_name\":\"Fixed Price Premium 5kg\",\"customer_service_type\":\"1\",\"margin_rate\":\"16\"},{\"service_name\":\"Fixed Price Premium 10kg\",\"customer_service_type\":\"1\",\"margin_rate\":\"17\"}]', '2021-04-30 15:11:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_margin`
--
ALTER TABLE `customer_margin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_margin`
--
ALTER TABLE `customer_margin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
