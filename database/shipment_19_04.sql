-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 05:12 PM
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
-- Table structure for table `shipment`
--

CREATE TABLE `shipment` (
  `id` int(50) NOT NULL,
  `sender_company` varchar(50) NOT NULL,
  `sender_contact_name` varchar(50) NOT NULL,
  `sender_phone` int(11) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `sender_country` varchar(50) NOT NULL,
  `sender_address` varchar(50) NOT NULL,
  `sender_address1` varchar(50) NOT NULL,
  `sender_address2` varchar(50) NOT NULL,
  `sender_save_address_book` varchar(50) NOT NULL,
  `sender_residence` varchar(50) NOT NULL,
  `sender_alt_name` varchar(50) NOT NULL,
  `sender_city` varchar(50) NOT NULL,
  `sender_postal_code` int(50) NOT NULL,
  `sender_state` varchar(50) NOT NULL,
  `receiver_company` varchar(50) NOT NULL,
  `receiver_contact_name` varchar(50) NOT NULL,
  `receiver_country` varchar(50) NOT NULL,
  `receiver_phone` int(11) NOT NULL,
  `receiver_email` varchar(50) NOT NULL,
  `receiver_address` varchar(50) NOT NULL,
  `receiver_address1` varchar(50) NOT NULL,
  `receiver_address2` varchar(50) NOT NULL,
  `shipping_date` date NOT NULL,
  `receiver_save_address` varchar(50) NOT NULL,
  `receiver_residence` varchar(50) NOT NULL,
  `receiver_city` varchar(50) NOT NULL,
  `receiver_postal_code` int(50) NOT NULL,
  `receiver_state` varchar(50) NOT NULL,
  `carrier_name` varchar(50) NOT NULL,
  `service_type` varchar(50) NOT NULL,
  `package_type` varchar(50) NOT NULL,
  `contents` varchar(50) NOT NULL,
  `weight_unit` double NOT NULL,
  `dimension_unit` double NOT NULL,
  `currency` double NOT NULL,
  `weight` double NOT NULL,
  `length` double NOT NULL,
  `width` double NOT NULL,
  `height` double NOT NULL,
  `quantity` double NOT NULL,
  `dangerous_goods` tinyint(4) NOT NULL,
  `authorized_to_leave` tinyint(4) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
