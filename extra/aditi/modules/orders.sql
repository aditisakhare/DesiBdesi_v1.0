-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 08:11 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `unnati_kendra`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `completion_time` date NOT NULL,
  `price_agreed` int(11) NOT NULL,
  `terms_and_conditions` varchar(500) NOT NULL,
  `special_requirements` varchar(500) NOT NULL,
  `advance_payment` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `group_id`, `adv_id`, `completion_time`, `price_agreed`, `terms_and_conditions`, `special_requirements`, `advance_payment`) VALUES
(1, 1, 1, '2017-02-15', 10000, 'Strict', 'Red Packets with Company Name', 5000),
(2, 2, 2, '2017-03-27', 50000, 'Order should be completed by deadline', 'Delievery till destiation', 20000),
(3, 3, 3, '2017-01-31', 90000, 'Quality should be maintained', 'Proper Packaging', 10000),
(4, 4, 4, '2017-02-16', 54000, 'No such terms', 'Quality should be maintained', 20000),
(5, 5, 5, '2017-03-07', 80000, 'Strictly follow deadline', 'Packaging should be proper', 45000),
(6, 6, 6, '2017-02-21', 7000, 'Should be strictly completed on time', 'Packaging', 3000),
(7, 7, 7, '2017-01-28', 30000, 'Strictly follow deadline', 'Square Packets with Company Name', 15000),
(8, 8, 8, '2017-03-30', 50000, 'Quality should be maintained', 'Delievery till destiation', 25000),
(9, 9, 9, '2017-02-26', 70000, 'Should be strictly completed on time', 'Packaging', 20000),
(10, 10, 10, '2017-03-09', 100000, 'Order should be completed by deadline', 'Quality should be maintained', 40000),
(11, 11, 11, '2017-01-11', 30000, 'Should be strictly completed on time', 'Packets with Company Name', 14000),
(12, 12, 12, '2017-01-13', 40000, 'Quality should be maintained', 'Delievery till destiation', 20000),
(13, 13, 13, '2017-02-04', 2000, 'Strictly follow deadline', 'Packaging', 500),
(14, 14, 14, '2017-01-03', 10000, 'No such terms', 'Quality should be maintained', 2000),
(15, 15, 15, '2017-02-02', 40000, 'Should be strictly completed on time', 'Delievery till destiation', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
