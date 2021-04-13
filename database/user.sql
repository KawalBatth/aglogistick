-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2021 at 07:52 PM
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `webshipId` varchar(100) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `language` varchar(60) NOT NULL,
  `allowExportAddressBook` int(11) DEFAULT NULL,
  `isRequireChangePassword` int(11) DEFAULT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `webshipId`, `customer_id`, `user_name`, `password`, `language`, `allowExportAddressBook`, `isRequireChangePassword`, `created_date`) VALUES
(1, '', 10000002, 'Testinguser', 'MTIzNDU=', 'english', 0, 0, '2021-04-13 22:22:04'),
(3, '16721', 10000002, 'edumailtest', 'bWFpbGVkdUAyMDIx', 'english', 0, 0, '2021-04-13 23:09:58'),
(4, '16721', 10000002, 'newuser', 'MTIzNA==', 'english', 0, 0, '2021-04-13 23:12:15'),
(5, '16721', 10000002, 'panky', 'cGFua2FqNTQzMg==', 'english', 0, 0, '2021-04-13 23:21:25'),
(6, '16721', 10000002, 'arvind', 'Y29kZUAxMjM=', 'english', 0, 0, '2021-04-13 23:21:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
