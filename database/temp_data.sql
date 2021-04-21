-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2021 at 10:58 PM
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
-- Table structure for table `temp_data`
--

CREATE TABLE `temp_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `formdata` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `temp_data`
--

INSERT INTO `temp_data` (`id`, `user_id`, `formdata`) VALUES
(7, 6, 'shipmentPage.senderAddress.companyName=Kawal&shipmentPage.senderAddress.phone=08 94793399&shipmentPage.senderAddress.contactName=DESPATCH&shipmentPage.senderAddress.email=logistics@agllogistics.com&shipmentPage.senderAddress.country=12&shipmentPage.senderAddress.address=U1 / 11 FRICKER ROAD&shipmentPage.senderAddress.address2=&shipmentPage.senderAddress.address3=&shipmentPage.senderAddress.alternateUserName=&shipmentPage.senderAddress.city=PERTH AIRPORT&shipmentPage.senderAddress.postalCode=6105&shipmentPage.senderAddress.state=WA&shipmentPage.receiverAddress.companyName=test&shipmentPage.receiverAddress.phone=1234567895&shipmentPage.receiverAddress.contactName=test&shipmentPage.receiverAddress.email=&shipmentPage.receiverAddress.country=12&shipmentPage.receiverAddress.address=test address&shipmentPage.receiverAddress.address2=address2&shipmentPage.receiverAddress.address3=address 3&shipmentPage.receiverAddress.city=NAPPERBY STATION&shipmentPage.receiverAddress.postalCode=&shipmentPage.receiverAddress.state=&shipmentPage.serviceId=11&shipmentPage.shipmentTypeId=2&shipmentPage.packageId=3&shipmentPage.contentType=WPX&shipmentPage.weightUnit=KG&shipmentPage.dimensionUnit=CM&shipmentPage.currencyCode=AUD&shipmentPage.pieces.weight=1&total_weight=4.00&shipmentPage.pieces.dimensionL1=10&shipmentPage.pieces.dimensionW1=10&shipmentPage.pieces.dimensionH1=5&get_volume=24500.000&shipmentPage.pieces.quantity1=1&final_total=2&shipmentPage.pieces.weight1=3&shipmentPage.pieces.dimensionL1=50&shipmentPage.pieces.dimensionW1=60&shipmentPage.pieces.dimensionH1=8&shipmentPage.pieces.quantity1=1&shipmentPage.isAddPiece=true&shipmentPage.addCons[0].addConName=Dangerous Goods&shipmentPage.addCons[0].addConCode=dangerousgoods&shipmentPage.addCons[1].addConName=Authorized to Leave (ATL)&shipmentPage.addCons[1].addConCode=atl&shipmentPage.addCons[1].listProperties[0].addConDetailName=Where to leave&shipmentPage.addCons[1].listProperties[0].addConDetailCode=atltoleave&shipmentPage.addCons[1].listProperties[0].value=&shipmentPage.addCons[2].value=0&shipmentPage.addCons[2].addConName=agl Warranty&shipmentPage.addCons[2].addConCode=aglWarranty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `temp_data`
--
ALTER TABLE `temp_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `temp_data`
--
ALTER TABLE `temp_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
