-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2017 at 01:39 PM
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
-- Table structure for table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) NOT NULL,
  `end_date` date NOT NULL,
  `discounted_price` decimal(10,0) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `charges` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `shg_name` varchar(200) NOT NULL,
  `contact` bigint(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`pro_id`, `pro_name`, `end_date`, `discounted_price`, `currency`, `charges`, `image`, `description`, `shg_name`, `contact`) VALUES
(1, 'Mango Pickle', '2017-05-03', '10000', 'Rs.', 'applicable', 'images/pickle.jpeg', 'Quantity: 100kgs', 'Gramin Udyog', 9819397043),
(2, 'Candles', '2017-04-28', '700', 'Rupees', 'Applicable', 'images/candles.jpeg', 'Qunatity 10 kgs', 'Vikas Ayojan', 9819397942),
(3, 'Basket', '2017-05-12', '5000', 'Rupees', 'Applicable', 'images/basket.jpeg', 'Quantity 100 baskets', 'Udhyag Kendra', 983456434),
(4, 'Papad', '2017-04-28', '600', 'Rupees', 'Free of Cost', 'images/papad.jpg', 'Quantity 200 kgs', 'Mahila Ayojan Kendra', 998077001),
(5, 'Embroidery', '2017-05-31', '14000', 'Rupees', 'Free of Cost', 'images/clothes.jpg', 'Quantity 70 pieces', 'Gramin Mahila', 9856743890),
(6, 'Masala', '2017-05-10', '50000', 'Rupees', 'Applicable', 'images/masala.jpg', 'Quantity 100 kgs', 'Gharguti Masala', 9864738291);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`pro_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
