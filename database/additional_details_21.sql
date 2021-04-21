-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 02:15 PM
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
-- Table structure for table `additional_details`
--

CREATE TABLE `additional_details` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `content_desc` int(11) NOT NULL,
  `billing_ref` int(11) NOT NULL,
  `special_delivery` int(11) NOT NULL,
  `collection_ref` int(11) NOT NULL,
  `collect_company` varchar(150) NOT NULL,
  `collect_Contact_name` varchar(150) NOT NULL,
  `collect_address` varchar(150) NOT NULL,
  `collect_address1` varchar(150) NOT NULL,
  `collect_city` varchar(150) NOT NULL,
  `collect_phone` int(50) NOT NULL,
  `contact_postal_code` int(50) NOT NULL,
  `collect_state` varchar(150) NOT NULL,
  `collect_ready_time` time NOT NULL,
  `collect_close_time` time NOT NULL,
  `collect_pickup_location` varchar(150) NOT NULL,
  `collect_location_code` int(50) NOT NULL,
  `collect_location_description` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `additional_details`
--
ALTER TABLE `additional_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `additional_details`
--
ALTER TABLE `additional_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
