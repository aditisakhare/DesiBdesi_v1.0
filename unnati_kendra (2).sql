-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2017 at 11:15 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unnati_kendra`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer_adv_post`
--

CREATE TABLE `buyer_adv_post` (
  `adv_id` int(11) NOT NULL,
  `buyer_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `quantity` int(11) NOT NULL,
  `request_price` int(11) NOT NULL,
  `delivery_district_id` int(11) NOT NULL,
  `delivery_months` int(11) NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `adv_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_adv_post`
--

INSERT INTO `buyer_adv_post` (`adv_id`, `buyer_id`, `item_id`, `description`, `quantity`, `request_price`, `delivery_district_id`, `delivery_months`, `timestamp`, `adv_status`) VALUES
(1, 1, 1, 'Require Mango pickle', 1000, 100000, 1, 2, '2017-04-01 18:49:54', 0),
(2, 2, 4, 'Require Wooden Horse toys.', 500, 40000, 2, 1, '2017-04-01 18:52:27', 0),
(3, 2, 7, 'Require Silk Sarees', 100, 50000, 5, 1, '2017-04-01 18:52:27', 0),
(4, 2, 6, 'Require classic baskets', 1000, 30000, 12, 4, '2017-04-01 19:25:37', 0),
(5, 2, 6, 'Require green baskets', 200, 30000, 4, 4, '2017-04-01 19:27:41', 0),
(6, 1, 9, 'Earrings. Require 500 gold color earrings', 500, 10000, 11, 1, '2017-04-01 19:27:41', 0),
(7, 1, 8, 'Require Jute mats as soon as possible', 1000, 50000, 11, 2, '2017-04-01 19:30:18', 0),
(8, 2, 10, 'Necklaces pls. Require 1500 necklaces', 1000, 100000, 4, 1, '2017-04-01 19:30:18', 0),
(9, 2, 1, 'Require Lemon Pickle', 2000, 130000, 6, 3, '2017-04-01 19:30:18', 0),
(10, 1, 4, 'wooden horses please.', 400, 10000, 7, 1, '2017-04-01 19:30:18', 0),
(11, 2, 3, 'Huge order for Banana Chips', 2000, 30000, 4, 6, '2017-04-01 19:30:18', 0),
(12, 1, 2, 'Require garlic chilli papad', 1500, 90000, 9, 3, '2017-04-01 19:30:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `buyer_reg`
--

CREATE TABLE `buyer_reg` (
  `buyer_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `aadhar` bigint(20) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `street` varchar(200) NOT NULL,
  `city` varchar(100) NOT NULL,
  `district_id` int(11) NOT NULL,
  `state` varchar(30) NOT NULL,
  `zip` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer_reg`
--

INSERT INTO `buyer_reg` (`buyer_id`, `name`, `email`, `password`, `company_name`, `aadhar`, `phone`, `street`, `city`, `district_id`, `state`, `zip`) VALUES
(1, 'Avinash', 'avinash@gmail.com', 'avinash', 'Unnati', 9876543210987654, 9999999999, 'Street 1', 'Lucknow', 1, 'UP', 400000),
(2, 'Abhi', 'abhi@gmail.com', 'abhi', 'Grammin', 1234567890987654, 34543454345, 'Lane 2', 'Mumbai', 1, 'Maharashtra', 123456),
(4, '', '', '', '', 0, 0, '', '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Food'),
(2, 'Wooden'),
(3, 'Clothes'),
(4, 'Ornaments');

-- --------------------------------------------------------

--
-- Table structure for table `completed_raw_orders`
--

CREATE TABLE `completed_raw_orders` (
  `order_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `total_qty` int(11) NOT NULL,
  `shg_leader_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `district_table`
--

CREATE TABLE `district_table` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL,
  `district_code` varchar(5) NOT NULL,
  `state_id` int(11) NOT NULL,
  `state_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `district_table`
--

INSERT INTO `district_table` (`district_id`, `district_name`, `district_code`, `state_id`, `state_code`) VALUES
(1, 'Thane', 'TH', 21, 'MH'),
(2, 'Nashik', 'NS', 21, 'MH'),
(3, 'Nicobar', 'NI', 1, 'AN'),
(4, 'Nagpur', 'NG', 21, 'MH'),
(5, 'Ahmednagar', 'AH', 21, 'MH'),
(6, 'Solapur', 'SO', 21, 'MH'),
(7, 'Krishna', 'KR', 2, 'AP'),
(8, 'Jalgaon', 'JG', 21, 'MH'),
(9, 'Visakhapatnam', 'VS', 2, 'AP'),
(10, 'Kolhapur', 'KO', 21, 'MH'),
(11, 'Aurangabad', 'AU', 21, 'MH'),
(12, 'Latur', 'LA', 21, 'MH'),
(13, 'Ratnagiri', 'RT', 21, 'MH');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `group_id` int(11) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `remaining_quantity` int(11) NOT NULL,
  `shg_id_leader` int(11) NOT NULL,
  `proposed_price` int(11) NOT NULL,
  `confirmation_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`group_id`, `adv_id`, `district_id`, `remaining_quantity`, `shg_id_leader`, `proposed_price`, `confirmation_status`) VALUES
(12, 9, 1, 1600, 5, 6000, 0),
(13, 9, 2, 1800, 2, 6000, 0),
(14, 11, 1, -11, 1, 20010, 0),
(15, 1, 1, 0, 5, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `interested_shgs`
--

CREATE TABLE `interested_shgs` (
  `adv_id` int(11) NOT NULL,
  `shg_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `commited_quantity` int(11) NOT NULL,
  `price_per_unit` int(11) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `interested_shgs`
--

INSERT INTO `interested_shgs` (`adv_id`, `shg_id`, `group_id`, `commited_quantity`, `price_per_unit`, `district_id`) VALUES
(1, 5, 15, 1000, 0, 1),
(9, 1, 12, 200, 30, 1),
(9, 2, 13, 200, 30, 2),
(9, 5, 12, 200, 30, 1),
(11, 1, 14, 2001, 10, 1),
(11, 5, 14, 10, 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `item_name` varchar(200) NOT NULL,
  `category_id` int(11) NOT NULL,
  `unit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_name`, `category_id`, `unit_id`) VALUES
(1, 'Pickle', 1, 2),
(2, 'Papad', 1, 1),
(3, 'Banana Chips', 1, 2),
(4, 'Horse', 2, 1),
(5, 'Camel', 2, 1),
(6, 'Baskets', 2, 1),
(7, 'Silk Sarees', 3, 1),
(8, 'Jute Mats', 3, 1),
(9, 'Earrings', 4, 1),
(10, 'Necklace', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngo` (
  `ngo_id` int(11) NOT NULL,
  `ngo_name` varchar(50) NOT NULL,
  `chairperson_name` varchar(50) NOT NULL,
  `office_phone` varchar(50) NOT NULL,
  `mobile_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngo` (`ngo_id`, `ngo_name`, `chairperson_name`, `office_phone`, `mobile_no`) VALUES
(1, 'Adichanallur', 'P.Vijayanirmala', '0474- 2590065', '9847032124'),
(2, 'Alappad', 'Malathi', '0476-2826104', '9746180373'),
(3, 'Alayamon', 'Annamma Francis', '4752304112', '9447997808'),
(4, 'Anchal', 'Mini Vijajan', '4752270308', '9526342046'),
(5, 'Ariencavu', 'ROSEMERY CHACKO', '0475-2344023', '9495240443'),
(6, 'Chadayamangalam', 'Indirabhai B', '0474-2475101', '9747268875'),
(7, 'Chathannur', 'Latha Anil', '4742590221', '9567298281'),
(8, 'Chavara', 'SASIKALA', '0476-2680383', '9400684419'),
(9, 'Chirakkara', 'Ushakumari  T', '0474-2512170', '9995591043'),
(10, 'Chithara', 'Ambili.S', '0474-2427080', '9048032819'),
(11, 'Clappana', 'REVAMMA. T. S', '4762690535', '9745599774'),
(12, 'Edamulakkal', 'Ambika TS', '4752270622', '9562784694'),
(13, 'Elamadu', 'Molly Suresh (9526342498)', '0474 2670071', '8281770290'),
(14, 'Elampalloor', 'GEETHA KUMARI .L', '4742520005', '9497776710'),
(15, 'Eroor', 'S Omana', '4752270290', '9446988047'),
(16, 'Ezhukone', 'Rema T', '0474-2482071', '9961408461'),
(17, 'Ittiva', 'RAMANI.S', '4742438100', '9746862225'),
(18, 'Kadakkal', 'Sobhana Kumari.D', '0474-2422111', '8943510015'),
(19, 'Kalluvathukkal', 'RENUKA R', '4742572404', '8593984144'),
(20, 'Karavaloor', 'JAMEELABEEVI.M', '0475-2250110', '8086932087'),
(21, 'Kareepra', 'Laila b.s', '4742520300', '8281770298'),
(22, 'Kizhakkekallada', 'AmbikaRadhakrishan', '4742585504', '8281770299'),
(23, 'Kottamkara', 'LETHA.S', '2715150', '8281144261'),
(24, 'Kottarakkara', 'KunjikuttyThankappan', '0474-2450313', '9048042016'),
(25, 'Kulakkada', 'Bindurani . O', '0474 2418096', '8891316901'),
(26, 'Kulasekharapuram', 'Sulochana', '4762640205', '9746593886'),
(27, 'Kulathupuzha', 'Mini varghese', '4752317007', '9496093172'),
(28, 'Kummil', 'SULABHA .S', '4742447207', '9961972947'),
(29, 'Kundara', 'VALSALA SATHEESHAN', '4742521350', '9633922131'),
(30, 'Kunnathoor', 'SUJATHA', '0476-2856310', '9539189390'),
(31, 'Mayyanad', 'USHAKUMARI.O', '0474-2555253', '9656477455'),
(32, 'Melila', 'SREELATHA VISWANATH', '0474 240220', '9496269471'),
(33, 'Mundrothuruthu', 'Maya Nepolian', '0474-2542088', '8943257963'),
(34, 'Mylam', 'THULASI BHAI   S', '0474-2450032', '9544795816'),
(35, 'Mynagappally', 'Sajitha S', '4762846050', '9526925146'),
(36, 'Nedumpana', 'K.LEKSHMIKKUTTY', '0474-2562230', '9645667557'),
(37, 'Neduvathoor', 'Radhamaniamma P', '0474-2450243', '8281770314'),
(38, 'Neendakara', 'SUNITHAJOY', '0476-2680289', '9946941543'),
(39, 'Nilamel', 'Lekha. M.Pillai', '4742433402', '9446110576'),
(40, 'Oachira', 'Bindu.P', '4762690281', '9847112015'),
(41, 'Panayam', 'Remany.K', '4742550280', '9656750721'),
(42, 'Panmana', 'Babysaleena', '0476-2670002', '9633816015'),
(43, 'Pathanapuram', 'Mani Soman', '4752350420', '9947540862'),
(44, 'Pattazhi', 'Renjini S', '0475-2397150', '8281770321'),
(45, 'Pattazhi North', 'SOBHANA SASIDHAREN', '4752397030', '8943485104'),
(46, 'Pavithreswaram', 'ANITHAKUMARI A', '0474-2417150', '8547608249'),
(47, 'Perayam', 'LAILAMMA HENTRY', '4742520287', '9446855866'),
(48, 'Perinad', 'B.Maniyamma', '4742550069', '9447242151'),
(49, 'Piravanthoor', 'Chandrika', '4752220128', '8281770326'),
(50, 'Poothakkulam', 'sujatha.v', '4742512201', '9633787638'),
(51, 'Pooyappally', 'GEETHA VAMANAN', '4742463640', '9746345506'),
(52, 'Poruvazhy', 'Lalitha Kumari', '0476-2820090', '8281770329'),
(53, 'Sasthamcotta', 'Zeenath.H', '0476-2830072', '9744009440'),
(54, 'Sooranadu North', 'Bharathy Ravendran', '4762851013', '8281770331'),
(55, 'Sooranadu South', 'Remadevi', '4762851013', '9995389803'),
(56, 'Thalavoor', 'SYAMALA AMMA', '4752327601', '9995520507'),
(57, 'Thazhava', 'Sobha', '4762660157', '9497619405'),
(58, 'Thekkumbhagom', 'GRACY VINCENT', '0476-2882235', '9496819014'),
(59, 'Thenmala', 'Chandrika. P', '0475-2344011', '9446853593'),
(60, 'Thevalkkara', 'Sujayakumari', '4762872023', '9495791288'),
(61, 'Thodiyoor', 'R . Lethika kumari', '4762660385', '9495347652'),
(62, 'Thrikkadavur', 'K.VASANTHY', '0474-2700637', '9544013514'),
(63, 'Thrikkaruva', 'Geepthi ', '4742701450', '9847135045'),
(64, 'Thrikkovilvattom', 'Sudharma S', '4742501210', '9496813382'),
(65, 'Ummannur', 'Bindhu Prakash', '4742492211', '9526818038'),
(66, 'Velinallur', 'K.Sushama Kumary', '4742466335', '9447926930'),
(67, 'Veliyam', 'JAYANTHIMADHU', '0474 2463675', '9496740641'),
(68, 'Vettikkavala', 'SONU.S NAIR', '4742402004', '9495209011'),
(69, 'Vilakkudy', 'AmbiliSivaprasad', '4752324656', '9495328030'),
(70, 'West Kallada', 'Sobha.V', '4762830310', '9747766349'),
(71, 'Kollam', 'BEEMA', '0474-2750660', '9847791899'),
(72, 'Kollam East', 'JAYASREE.T', '0474-2760283', '9747606981'),
(73, 'Punalur', 'Thaslima Jacob', '0475-2220612', '9497171157'),
(74, 'Paravoor', 'Smt.Rasheeda.S', '0474 2512208', '9567044260'),
(75, 'Karunagappally', 'Ushakumari.L', '4762620340', '9142051712');

-- --------------------------------------------------------

--
-- Table structure for table `nodal_officers`
--

CREATE TABLE `nodal_officers` (
  `s_no` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `officer_name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `mobile_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nodal_officers`
--

INSERT INTO `nodal_officers` (`s_no`, `state_name`, `officer_name`, `email_id`, `mobile_number`) VALUES
(1, 'Andhra Pradesh', 'P Naga Raju', 'ita.it.serp@gmail.com', '+91-8106211455'),
(2, 'Arunachal Pradesh', 'Rakesh Srivastava', 'srlmceo@gmail.com', '+91-9436044112'),
(3, 'Assam', 'Kankan Borah', 'mism.asrlms@gmail.com', '+91-9864108181'),
(4, 'Bihar', 'Md Hasnain', 'hasnain@brlp.in', '+91-9771478330'),
(5, 'Chhattisgarh', 'Elwin Ritesh Dayal', 'elwin.elwin@rediffmail.com', '+91-9827128768'),
(6, 'Dadra And Nagar Haveli', 'Sharmistha Desai', 'darshita.naik@gmail.com', '+91-7600677595'),
(7, 'Goa', 'Gurudatta Naik', 'nrega.ngoa@gmail.com', '+91-9764599548'),
(8, 'Gujarat', 'Siddharth Dave', 'gmsm@glpc.co.in', '+91-9099955231'),
(9, 'Haryana', 'Balwinder Kaur', 'prghsrlm@gmail.com', '+91-8728048555'),
(10, 'Himachal Pradesh', 'Rakesh Chauhan', 'rakeshchauhan21@gmail.com', '+91-9418109177'),
(11, 'Jammu And Kashmir', 'Khalid Hussain Zargar', 'zargarkhalid3@gmail.com', '+91-9419024652'),
(12, 'Jharkhand', 'Amit Jain', 'amitjn28@gmail.com', '+91-9031930470'),
(13, 'Karnataka', 'M Prakash Kumar', 'prakashkumar.sanjeevini@gmail.com', '+91-9945004588'),
(14, 'Kerala', 'Jaya N K', 'info@kudumbashree.org', '+91-9496588518'),
(15, 'Madhya Pradesh', 'Sudesh Sahni', 'sahnisudesh1@gmail.com', '+91-9406808705'),
(16, 'Maharashtra', 'Rajendra Patel', 'rajendrapatel@umed.in', '+91-9594881559'),
(17, 'Manipur', 'Gurumayum Kavita Devi', 'gkavita25@gmail.com', '+91-8415981782'),
(18, 'Meghalaya', 'Shanlong F Lyngdoh', 'shanlangf@gmail.com', '+91-9436700653'),
(19, 'Mizoram', 'Ruth Lalawmpuii', 'ruthhnamte@gmail.com', '+91-9862304683'),
(20, 'Nagaland', 'Imonenla Imkong Phom', 'imonsrlm@gmail.com', '+91-9856727684'),
(21, 'Odisha', 'Sujeet Kumar Lala', 'miso.tripti@gmail.com', '+91-8984577365'),
(22, 'Puducherry', 'J M K Durga Prasad', 'raviprakash2525@gmail.com', '+91-9443288034'),
(23, 'Punjab', 'Ravinder Kumar', 'srlmmis.ravinder@gmail.com', '+91-8194890099'),
(24, 'Rajasthan', 'Manoj Gupta', 'mkg.rrlp@gmail.com', '+91-8829007796'),
(25, 'Sikkim', 'Chhitiz Sundas', 'chhitizsundas50@gmail.com', '+91-7872985334'),
(26, 'Tamil Nadu', 'M Manohara Sing', 'tncdw.tn@nic.in', '+91-9445034306'),
(27, 'Telangana', 'Ch Ramyasri', 'ita.ramya@gmail.com', '+91-7032903043'),
(28, 'Tripura', 'Gopal Debnath', 'pm.mis.trlm@gmail.com', '+91-9402582155'),
(29, 'Uttarakhand', 'Ajay Singh Khadwal', 'ajayinkhadwal@gmail.com', '+91-9410104160'),
(30, 'Uttar Pradesh', 'Syed Mohd Imran', 'imran.syedmohd@gmail.com', '+91-9794200786'),
(31, 'West Bengal', 'Tanmoy K Pal', 'to.tanmoy@gmail.com', '+91-9434655183');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `adv_id` int(11) NOT NULL,
  `time_agreed` int(11) NOT NULL,
  `price_agreed` int(11) NOT NULL,
  `terms_and_conditions` varchar(500) NOT NULL,
  `special_requirements` int(11) NOT NULL,
  `advance_payment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rawmaterialitems`
--

CREATE TABLE `rawmaterialitems` (
  `raw_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `raw_name` varchar(50) NOT NULL,
  `unit_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_groups`
--

CREATE TABLE `request_groups` (
  `group_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `shg_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `shg`
--

CREATE TABLE `shg` (
  `shg_id` int(11) NOT NULL,
  `shg_name` varchar(50) NOT NULL,
  `member_count` int(11) NOT NULL,
  `leader` varchar(50) NOT NULL,
  `leader_email` varchar(100) NOT NULL,
  `leader_password` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `aadhar` varchar(20) NOT NULL,
  `address` text NOT NULL,
  `district_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shg`
--

INSERT INTO `shg` (`shg_id`, `shg_name`, `member_count`, `leader`, `leader_email`, `leader_password`, `contact_no`, `aadhar`, `address`, `district_id`, `city`, `state`, `zipcode`, `item_id`) VALUES
(1, 'SHG A', 10, 'a', 'abc@gmail.com', 'abc', '987654321', '987654321987', 'Something', 1, 'Navi Mumbai', 'Maharashtra', '410206', 0),
(2, 'SHG A2', 10, 'a', 'abc1@gmail.com', 'abc@gmail.com', '987654321', '987654321987', 'Something', 2, 'Navi Mumbai', 'Maharashtra', '410206', 0),
(3, 'SHG B1', 10, 'a', 'abc2@gmail.com', 'abc@gmail.com', '987654321', '987654321987', 'Something', 2, 'Navi Mumbai', 'Maharashtra', '410206', 0),
(4, 'SHG Z1', 10, 'a', 'abc4@gmail.com', 'abc@gmail.com', '987654321', '987654321987', 'Something', 2, 'Navi Mumbai', 'Maharashtra', '410206', 0),
(5, 'SHG BZ', 10, 'a', 'abc5@gmail.com', 'abc@gmail.com', '987654321', '987654321987', 'Something', 1, 'Navi Mumbai', 'Maharashtra', '410206', 1);

-- --------------------------------------------------------

--
-- Table structure for table `shg_member`
--

CREATE TABLE `shg_member` (
  `shg_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `aadhar` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shg_member`
--

INSERT INTO `shg_member` (`shg_id`, `member_id`, `name`, `age`, `aadhar`) VALUES
(0, 16, 'harshit', 21, '2676'),
(0, 17, 'abhi', 23, '313'),
(0, 18, 'jahj', 21, '23465465'),
(0, 19, 'harshut', 56, 'ghfhgfh');

-- --------------------------------------------------------

--
-- Table structure for table `shg_raw_request`
--

CREATE TABLE `shg_raw_request` (
  `request_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `request_status` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `standard_rates`
--

CREATE TABLE `standard_rates` (
  `sr_id` int(11) NOT NULL,
  `district` varchar(50) NOT NULL,
  `product` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `standard_rates`
--

INSERT INTO `standard_rates` (`sr_id`, `district`, `product`, `price`) VALUES
(1, 'aurangabad', 'pickle', 50),
(2, 'thane', 'pickle', 40),
(3, 'ahmednagar', 'pickle', 45),
(4, 'latur', 'pickle', 60),
(5, 'nashik', 'pickle', 55),
(6, 'pune', 'pickle', 60),
(7, 'raigad', 'pickle', 50),
(8, 'washim', 'pickle', 45),
(9, 'nagpur', 'pickle', 50),
(10, 'aurangabad', 'papad', 45),
(11, 'thane', 'papad', 40),
(12, 'ahmednagar', 'papad', 45),
(13, 'latur', 'papad', 50),
(14, 'nashik', 'papad', 55),
(15, 'pune', 'papad', 60),
(16, 'raigad', 'papad', 50),
(17, 'washim', 'papad', 45),
(18, 'nagpur', 'papad', 50),
(19, 'aurangabad', 'toys', 50),
(20, 'thane', 'toys', 40),
(21, 'ahmednagar', 'toys', 45),
(22, 'latur', 'toys', 60),
(23, 'nashik', 'toys', 55),
(24, 'pune', 'toys', 60),
(25, 'raigad', 'toys', 50),
(26, 'washim', 'toys', 45),
(27, 'nagpur', 'toys', 50),
(28, 'aurangabad', 'silk', 50),
(29, 'thane', 'silk', 40),
(30, 'ahmednagar', 'silk', 45),
(31, 'latur', 'silk', 60),
(32, 'nashik', 'silk', 55),
(33, 'pune', 'silk', 60),
(34, 'raigad', 'silk', 50),
(35, 'washim', 'silk', 45),
(36, 'nagpur', 'silk', 50),
(37, 'aurangabad', 'cotton', 50),
(38, 'thane', 'cotton', 40),
(39, 'ahmednagar', 'cotton', 45),
(40, 'latur', 'cotton', 60),
(41, 'nashik', 'cotton', 55),
(42, 'pune', 'cotton', 60),
(43, 'raigad', 'cotton', 50),
(44, 'washim', 'cotton', 45),
(45, 'nagpur', 'cotton', 50),
(46, 'aurangabad', 'crafts', 50),
(47, 'thane', 'crafts', 40),
(48, 'ahmednagar', 'crafts', 45),
(49, 'latur', 'crafts', 60),
(50, 'nashik', 'crafts', 55),
(51, 'pune', 'crafts', 60),
(52, 'raigad', 'crafts', 50),
(53, 'washim', 'crafts', 45),
(54, 'nagpur', 'crafts', 50);

-- --------------------------------------------------------

--
-- Table structure for table `state_table`
--

CREATE TABLE `state_table` (
  `state_id` int(11) NOT NULL,
  `state_name` varchar(50) NOT NULL,
  `state_code` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state_table`
--

INSERT INTO `state_table` (`state_id`, `state_name`, `state_code`) VALUES
(1, 'Andaman and Nicobar ', 'AN'),
(2, 'Andhra Pradesh ', 'AP'),
(3, 'Arunachal Pradesh ', 'AR'),
(4, 'Assam ', 'AS'),
(5, 'Bihar ', 'BR'),
(6, 'Chandigarh ', 'CH'),
(7, 'Chhattisgarh ', 'CG'),
(8, 'Dadra and Nagar Haveli ', 'DN'),
(9, 'Daman and Diu ', 'DD'),
(10, 'Delhi ', 'DL'),
(11, 'Goa ', 'GA'),
(12, 'Gujarat ', 'GJ'),
(13, 'Haryana ', 'HR'),
(14, 'Himachal Pradesh ', 'HP'),
(15, 'Jammu and Kashmir ', 'JK'),
(16, 'Jharkhand ', 'JH'),
(17, 'Karnataka ', 'KA'),
(18, 'Kerala ', 'KL'),
(19, 'Lakshadweep ', 'LD'),
(20, 'Madhya Pradesh ', 'MP'),
(21, 'Maharashtra ', 'MH'),
(22, 'Manipur ', 'MN'),
(23, 'Meghalaya ', 'ML'),
(24, 'Mizoram ', 'MZ'),
(25, 'Odisha ', 'OD'),
(26, 'Puducherry ', 'PY'),
(27, 'Punjab ', 'PB'),
(28, 'Rajasthan ', 'RJ'),
(29, 'Sikkim ', 'SK'),
(30, 'Tamil Nadu ', 'TN'),
(31, 'Telangana ', 'TS'),
(32, 'Tripura ', 'TR'),
(33, 'Uttar Pradesh ', 'UP'),
(34, 'Uttarakhand ', 'UK'),
(35, 'West Bengal ', 'WB');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_reg`
--

CREATE TABLE `supplier_reg` (
  `supplier_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier_reg`
--

INSERT INTO `supplier_reg` (`supplier_id`, `name`, `email`, `password`, `contact`, `district_id`) VALUES
(1, 'Sarthak', 'sarthak@gmail.com', 'sarthak', 9876543210, 375);

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int(11) NOT NULL,
  `unit_symbol` varchar(50) NOT NULL,
  `unit_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `unit_symbol`, `unit_description`) VALUES
(1, 'Piece', 'Number of pieces in the order'),
(2, 'KGs', 'Kilograms of quantity per order'),
(3, 'Dozens', '12 Pieces in a dozen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer_adv_post`
--
ALTER TABLE `buyer_adv_post`
  ADD PRIMARY KEY (`adv_id`);

--
-- Indexes for table `buyer_reg`
--
ALTER TABLE `buyer_reg`
  ADD PRIMARY KEY (`buyer_id`),
  ADD UNIQUE KEY `aadhar` (`aadhar`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `cat_id` (`category_id`);

--
-- Indexes for table `completed_raw_orders`
--
ALTER TABLE `completed_raw_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `district_table`
--
ALTER TABLE `district_table`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `interested_shgs`
--
ALTER TABLE `interested_shgs`
  ADD UNIQUE KEY `adv_id` (`adv_id`,`shg_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `subcat_id` (`item_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `rawmaterialitems`
--
ALTER TABLE `rawmaterialitems`
  ADD PRIMARY KEY (`raw_id`);

--
-- Indexes for table `request_groups`
--
ALTER TABLE `request_groups`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `shg`
--
ALTER TABLE `shg`
  ADD PRIMARY KEY (`shg_id`);

--
-- Indexes for table `shg_member`
--
ALTER TABLE `shg_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `shg_raw_request`
--
ALTER TABLE `shg_raw_request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `standard_rates`
--
ALTER TABLE `standard_rates`
  ADD PRIMARY KEY (`sr_id`);

--
-- Indexes for table `state_table`
--
ALTER TABLE `state_table`
  ADD PRIMARY KEY (`state_id`),
  ADD UNIQUE KEY `state_name` (`state_name`),
  ADD UNIQUE KEY `state_code` (`state_code`);

--
-- Indexes for table `supplier_reg`
--
ALTER TABLE `supplier_reg`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer_adv_post`
--
ALTER TABLE `buyer_adv_post`
  MODIFY `adv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `buyer_reg`
--
ALTER TABLE `buyer_reg`
  MODIFY `buyer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `completed_raw_orders`
--
ALTER TABLE `completed_raw_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `rawmaterialitems`
--
ALTER TABLE `rawmaterialitems`
  MODIFY `raw_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `request_groups`
--
ALTER TABLE `request_groups`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `shg`
--
ALTER TABLE `shg`
  MODIFY `shg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shg_member`
--
ALTER TABLE `shg_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `standard_rates`
--
ALTER TABLE `standard_rates`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `state_table`
--
ALTER TABLE `state_table`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `supplier_reg`
--
ALTER TABLE `supplier_reg`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
