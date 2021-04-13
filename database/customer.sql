-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 06:05 PM
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
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(200) NOT NULL,
  `customer_id` int(200) NOT NULL,
  `customerName` varchar(100) DEFAULT NULL,
  `contact_name` varchar(250) DEFAULT NULL,
  `contact_title` varchar(250) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `postal_code` int(50) DEFAULT NULL,
  `state_code` int(50) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `fax` int(50) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` int(50) DEFAULT NULL,
  `alt_contact` int(50) DEFAULT NULL,
  `billing_customer_name` varchar(150) DEFAULT NULL,
  `billing_contact_name` varchar(150) DEFAULT NULL,
  `billing_contact_title` varchar(150) DEFAULT NULL,
  `billing_address` longtext DEFAULT NULL,
  `billing_address2` varchar(200) DEFAULT NULL,
  `billing_city` varchar(50) DEFAULT NULL,
  `billing_country` varchar(50) DEFAULT NULL,
  `billing_postal_code` int(50) DEFAULT NULL,
  `billing_state_code` int(50) DEFAULT NULL,
  `billing_phone` int(50) DEFAULT NULL,
  `billing_fax` int(50) DEFAULT NULL,
  `billing_email` varchar(150) DEFAULT NULL,
  `billing_mobile` int(50) DEFAULT NULL,
  `billing_alt_contact` int(50) DEFAULT NULL,
  `owner` varchar(50) DEFAULT NULL,
  `other_phone` int(50) DEFAULT NULL,
  `other_email` varchar(50) DEFAULT NULL,
  `other_contact` int(50) DEFAULT NULL,
  `other_phone1` int(50) DEFAULT NULL,
  `other_email1` varchar(50) DEFAULT NULL,
  `other_contact1` int(50) DEFAULT NULL,
  `other_phone2` int(50) DEFAULT NULL,
  `other_email2` varchar(50) DEFAULT NULL,
  `other_contact2` int(50) DEFAULT NULL,
  `other_phone3` int(50) DEFAULT NULL,
  `other_email3` varchar(50) DEFAULT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_id`, `customerName`, `contact_name`, `contact_title`, `address`, `city`, `country`, `postal_code`, `state_code`, `phone`, `fax`, `email`, `mobile`, `alt_contact`, `billing_customer_name`, `billing_contact_name`, `billing_contact_title`, `billing_address`, `billing_address2`, `billing_city`, `billing_country`, `billing_postal_code`, `billing_state_code`, `billing_phone`, `billing_fax`, `billing_email`, `billing_mobile`, `billing_alt_contact`, `owner`, `other_phone`, `other_email`, `other_contact`, `other_phone1`, `other_email1`, `other_contact1`, `other_phone2`, `other_email2`, `other_contact2`, `other_phone3`, `other_email3`, `created_date`) VALUES
(3, 10000001, 'Pankaj', 'Pankaj Saharan', '', 'Ward No. 9 ', 'TDI City', 'Australia', 6105, 0, 846575855, 0, 'pankaj@gmail.com', 0, 0, 'pankaj', 'Pankaj Saharan', '', 'Ward No. 9', '', 'TDI City', '98', 0, 0, 2147483647, 43743773, '', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', 0, 0, '', '2021-04-12 02:05:07'),
(5, 10000002, 'Kawal', 'Batth', '', '49 a Arkana ', 'Perth', '12', 6105, 0, 846573646, 0, 'kawalbatth@gmail.com', 0, 0, 'Kawal', 'Batth', '', '49 a Arkana', '', 'Perth', '12', 6105, 0, 846573646, 0, 'kawalbatth@gmail.com', 0, 0, '', 0, '', 0, 0, '', 0, 0, '', 0, 0, '', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
