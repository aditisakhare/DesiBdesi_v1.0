-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 09:41 AM
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
-- Table structure for table `exhibition`
--

CREATE TABLE IF NOT EXISTS `exhibition` (
  `ex_id` int(11) NOT NULL,
  `ex_name` varchar(200) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `place` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `organizer_name` varchar(200) NOT NULL,
  `description` varchar(300) NOT NULL,
  `lat` double NOT NULL,
  `long` double NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exhibition`
--

INSERT INTO `exhibition` (`ex_id`, `ex_name`, `start_date`, `end_date`, `place`, `city`, `state`, `organizer_name`, `description`, `lat`, `long`) VALUES
(1, 'LED India 2017', '2017-04-06', '2017-04-08', 'BIEC', 'Bangalore', 'Karnataka', 'Star Exhibitions', 'Exhibition for selling local goods', 12.9716, 77.5946),
(5, 'RENEWABLE ASIA 2017', '2017-04-12', '2017-04-14', 'Bombay Exhibition Center', 'Mumbai', 'Maharashtra', 'Reed Triune Exhibitions Pvt.Ltd.', 'Exhibition for displaying renewable items produced by local SHGs', 19.076, 72.8777),
(6, 'EXPO 2017', '2017-05-11', '2017-05-13', 'Bombay Exhibition Centre', 'Pune', 'Maharashtra', 'Messe Frankfurt', 'Displaying items which can be exported to other countries', 18.5204, 73.8567),
(7, 'Power Purchase Agreement', '2017-10-11', '2017-10-20', 'Hill Palace, Tripunithura', 'Kochi', 'Kerala', 'Infocus International', 'To sell items in bulk', 9.9312, 76.2673),
(8, 'Udhyog 2017', '2017-04-05', '2017-04-08', 'Anamudi', 'Munnar', 'Kerala', 'Ministry of Kerala', 'Items which are produced by several SHGs to be sold in bulk', 10.0889, 77.0595);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exhibition`
--
ALTER TABLE `exhibition`
  ADD PRIMARY KEY (`ex_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exhibition`
--
ALTER TABLE `exhibition`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
