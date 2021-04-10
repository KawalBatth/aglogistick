-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2021 at 08:17 PM
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
-- Database: `webnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `carriers`
--

CREATE TABLE `carriers` (
  `id` int(11) NOT NULL,
  `carrier_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carriers`
--

INSERT INTO `carriers` (`id`, `carrier_name`) VALUES
(11, 'star track'),
(12, 'second');

-- --------------------------------------------------------

--
-- Table structure for table `ci_users`
--

CREATE TABLE `ci_users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_no` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL DEFAULT 0,
  `last_ip` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ci_users`
--

INSERT INTO `ci_users` (`id`, `username`, `firstname`, `lastname`, `email`, `mobile_no`, `password`, `is_admin`, `last_ip`, `created_at`, `updated_at`) VALUES
(3, 'demo', 'admin', 'admin', 'admin@admin.com', '12345', '21232f297a57a5a743894a0e4a801fc3', 1, '', '2017-09-29 10:09:44', '2017-09-30 08:09:29'),
(10, 'Pankaj Saharan', 'Pankaj', 'Saharan', 'test@test.com', '08949790120', '827ccb0eea8a706c4c34a16891f84e7b', 0, '', '2021-04-04 00:00:00', '2021-04-04 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `contactName` varchar(100) NOT NULL,
  `contactTitle` varchar(100) NOT NULL,
  `address1` varchar(200) NOT NULL,
  `address2` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `postalCode` varchar(100) NOT NULL,
  `stateCode` varchar(100) NOT NULL,
  `fax` varchar(100) NOT NULL,
  `alternatePhone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `contactName`, `contactTitle`, `address1`, `address2`, `city`, `country`, `postalCode`, `stateCode`, `fax`, `alternatePhone`) VALUES
(10, 'Pankaj Saharan', '', 'Ward No. 9', '', 'Sri Ganganagar', '98', '335022', 'Rajasthan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `surcharges_list`
--

CREATE TABLE `surcharges_list` (
  `id` int(11) NOT NULL,
  `carrier_id` int(11) DEFAULT NULL,
  `surcharge_name` varchar(100) DEFAULT NULL,
  `surcharge_price` varchar(100) DEFAULT NULL,
  `surcharge_type` int(11) NOT NULL,
  `last_modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surcharges_list`
--

INSERT INTO `surcharges_list` (`id`, `carrier_id`, `surcharge_name`, `surcharge_price`, `surcharge_type`, `last_modified`) VALUES
(5, 12, 'test', '50', 1, '2021-04-10 19:14:44'),
(6, 11, 'dsd', '34', 0, '2021-04-10 19:18:02'),
(8, 11, '1234', '23', 2, '2021-04-10 20:16:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carriers`
--
ALTER TABLE `carriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ci_users`
--
ALTER TABLE `ci_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surcharges_list`
--
ALTER TABLE `surcharges_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carriers`
--
ALTER TABLE `carriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ci_users`
--
ALTER TABLE `ci_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `surcharges_list`
--
ALTER TABLE `surcharges_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
