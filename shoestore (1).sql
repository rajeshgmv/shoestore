-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2016 at 08:25 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `shoestore`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE IF NOT EXISTS `address` (
  `address` varchar(200) NOT NULL,
  `cust_Id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  KEY `cust_Id` (`cust_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address`, `cust_Id`, `type`) VALUES
('UT,9501,NC -28262', 1, 'shipping'),
('UTN,9523,NC-28263', 2, 'shipping'),
('UT,9509,NC-28262', 3, 'shipping'),
('UT,9540,NC-28262', 4, 'shipping'),
('UT,9540,NC-28262', 4, 'billing'),
('UTN,9550,NC-28263', 5, 'shipping'),
('9500 Grove Crest Ln', 6, 'billing'),
('9500 Grove Crest Ln', 6, 'shipping'),
('9500 Grove Crest Ln', 7, 'billing'),
('9500 Grove Crest Ln', 7, 'shipping');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_Id` char(5) NOT NULL,
  `admin_Pwd` varchar(10) NOT NULL,
  PRIMARY KEY (`admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_Id`, `admin_Pwd`) VALUES
('pg05', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `admindefinesfaqcategory`
--

CREATE TABLE IF NOT EXISTS `admindefinesfaqcategory` (
  `category_id` varchar(4) NOT NULL,
  `category_name` varchar(56) NOT NULL,
  `admin_Id` char(5) NOT NULL DEFAULT '',
  PRIMARY KEY (`category_id`,`admin_Id`),
  KEY `admin_Id` (`admin_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindefinesfaqcategory`
--

INSERT INTO `admindefinesfaqcategory` (`category_id`, `category_name`, `admin_Id`) VALUES
('c001', 'Order status', 'pg05'),
('c002', 'Returns & exchanges', 'pg05'),
('c003', 'Product information', 'pg05'),
('c004', 'our Website', 'pg05'),
('c005', 'stores', 'pg05');

-- --------------------------------------------------------

--
-- Table structure for table `alsohasorderhistory`
--

CREATE TABLE IF NOT EXISTS `alsohasorderhistory` (
  `order_Id` int(5) NOT NULL AUTO_INCREMENT,
  `cust_Id` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `shoe_Id` char(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Review` decimal(4,2) NOT NULL,
  `totalcost` decimal(6,2) NOT NULL,
  PRIMARY KEY (`order_Id`),
  KEY `cust_Id` (`cust_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data for table `alsohasorderhistory`
--

INSERT INTO `alsohasorderhistory` (`order_Id`, `cust_Id`, `orderdate`, `shoe_Id`, `quantity`, `Review`, `totalcost`) VALUES
(1, 1, '2016-10-15', '101', 1, '5.00', '40.00'),
(2, 2, '2016-09-25', '105', 1, '3.50', '80.00'),
(3, 3, '2016-10-15', '108', 1, '4.00', '100.00'),
(4, 4, '2016-10-19', '109', 1, '4.50', '140.00'),
(5, 5, '2016-10-11', '112', 1, '5.00', '220.00'),
(19, 1, '2016-12-09', '101', 1, '0.00', '40.00'),
(20, 1, '2016-12-11', '101', 1, '1.00', '20.00'),
(21, 1, '2016-12-07', '102', 3, '1.00', '30.00'),
(22, 1, '2016-12-05', '103', 1, '4.00', '40.00'),
(23, 1, '2016-12-02', '102', 1, '3.00', '100.00'),
(24, 6, '2016-12-07', '101', 1, '0.00', '40.00'),
(25, 6, '2016-12-12', '110', 1, '0.00', '237.60'),
(26, 6, '2016-12-12', '114', 1, '0.00', '19.50'),
(27, 6, '2016-12-12', '106', 1, '0.00', '72.00'),
(28, 6, '2016-12-12', '101', 1, '0.00', '34.00'),
(29, 6, '2016-12-12', '111', 1, '0.00', '45.00'),
(30, 6, '2016-12-12', '102', 1, '0.00', '50.00'),
(31, 6, '2016-12-12', '102', 1, '0.00', '50.00'),
(32, 6, '2016-12-12', '102', 1, '0.00', '50.00'),
(33, 6, '2016-12-12', '106', 1, '0.00', '72.00'),
(34, 6, '2016-12-12', '102', 1, '0.00', '50.00'),
(35, 6, '2016-12-12', '112', 1, '0.00', '165.00'),
(36, 6, '2016-12-12', '101', 1, '0.00', '34.00'),
(37, 6, '2016-12-12', '115', 1, '0.00', '48.00'),
(38, 6, '2016-12-12', '114', 1, '0.00', '19.50'),
(39, 6, '2016-12-12', '102', 1, '0.00', '50.00'),
(40, 6, '2016-12-12', '114', 1, '0.00', '19.50'),
(41, 7, '2016-12-14', '114', 1, '0.00', '19.50');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE IF NOT EXISTS `brand` (
  `brand_Id` char(5) NOT NULL DEFAULT '',
  `brand_Name` varchar(30) NOT NULL,
  PRIMARY KEY (`brand_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`brand_Id`, `brand_Name`) VALUES
('Ad102', 'Addidas'),
('Ca105', 'Catwalk'),
('Cr101', 'Croc'),
('Fi104', 'Fila'),
('Pd106', 'Prada'),
('Re103', 'Reebok');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `shoe_Img` blob NOT NULL,
  `shoe_Id` char(5) NOT NULL,
  `cust_Id` int(11) NOT NULL,
  `brand_Name` varchar(30) NOT NULL,
  `color_Name` varchar(15) NOT NULL,
  `size_Number` float(5,1) NOT NULL,
  `discount` decimal(9,9) NOT NULL,
  `cost` decimal(6,2) NOT NULL,
  `cost_after_discount` decimal(9,2) NOT NULL,
  KEY `shoe_Id` (`shoe_Id`),
  KEY `cust_Id` (`cust_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`shoe_Img`, `shoe_Id`, `cust_Id`, `brand_Name`, `color_Name`, `size_Number`, `discount`, `cost`, `cost_after_discount`) VALUES
('', '103', 2, '', '', 0.0, '0.000000000', '0.00', '0.00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_Id` char(5) NOT NULL DEFAULT '',
  `category_Name` varchar(30) NOT NULL,
  PRIMARY KEY (`category_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_Id`, `category_Name`) VALUES
('Bo105', 'Boots'),
('Ca102', 'Casuals'),
('Fl106', 'Flats'),
('Fo101', 'Formals'),
('He107', 'Heels'),
('Lo104', 'Loafers'),
('Sn103', 'Sneakers'),
('Sp108', 'Sports');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE IF NOT EXISTS `color` (
  `color_Id` char(5) NOT NULL DEFAULT '',
  `color_Name` varchar(15) NOT NULL,
  PRIMARY KEY (`color_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`color_Id`, `color_Name`) VALUES
('c101', 'white'),
('c102', 'black'),
('c103', 'white'),
('c104', 'grey'),
('c105', 'brown'),
('c106', 'balck'),
('c107', 'green'),
('c108', 'pink'),
('c109', 'red'),
('c110', 'black'),
('c111', 'yellow'),
('c112', 'red'),
('c113', 'white'),
('c114', 'brown'),
('c115', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dob` date NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `middle_name` varchar(30) DEFAULT NULL,
  `last_name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `password` varchar(8) NOT NULL,
  `emailId` varchar(40) NOT NULL,
  `registeredDate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `dob`, `first_name`, `middle_name`, `last_name`, `gender`, `password`, `emailId`, `registeredDate`) VALUES
(1, '1990-02-22', 'john', NULL, 'doe', 'Male', 'John@123', 'Johndoe@gmail.com', '2016-12-09'),
(2, '1989-07-10', 'mary', NULL, 'rose', 'Female', 'Mary@123', 'Mary@gmail.com', '2016-12-09'),
(3, '1992-07-23', 'Usman', NULL, 'khan', 'Male', 'Usma@123', 'Usman@gmail.com', '2016-12-09'),
(4, '1994-08-17', 'Anudeesh', NULL, 'U', 'Male', 'Desh@123', 'Deesh@gmail.com', '2016-12-09'),
(5, '1991-06-18', 'Narendra', NULL, 'Modi', 'Male', 'Modi@123', 'Modi@gmail.com', '2016-12-09'),
(6, '1991-09-20', 'rajesh', ' ', 'Guttikonda', 'Male', '1234', 'raj.gmvr123@gmail.com', '2016-12-11'),
(7, '1994-02-24', 'himaja', ' ', 'Muppalla ', 'Male', '1234', 'himajafeb8@gmail.com', '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `faqlist`
--

CREATE TABLE IF NOT EXISTS `faqlist` (
  `category_id` varchar(4) NOT NULL,
  `faqid` varchar(4) NOT NULL,
  `question` varchar(56) NOT NULL,
  `Answer` varchar(456) NOT NULL,
  PRIMARY KEY (`category_id`,`faqid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqlist`
--

INSERT INTO `faqlist` (`category_id`, `faqid`, `question`, `Answer`) VALUES
('c001', 'q001', 'How can I track my order?', 'Once you have submitted your order, you will receive an order confirmation by email to confirm that your order has been received. This email will contain your order number, you can tracke using that order iD'),
('c001', 'q002', 'How can I change/cancel my order? ', 'nfortunately, once an order has been shipped, it cannot be changed or cancelled. If you are not fully satisfied with your purchase, you will have the option of returning it.'),
('c002', 'q001', 'How can I return/exchange my order?', 'Please allow 1-2 business days for handling time. Once you receive a shipping confirmation email, your item (s) will be delivered depending on the shipping method you select. '),
('c003', 'q001', 'What are your size conversions? ', 'Our footwear is labeled with US sizes'),
('c003', 'q002', 'How can I locate styles available in my size? ', 'You can shop our full collection by size by using the SHOP BY SIZE filter on the webpage'),
('c004', 'q001', 'is it safe to shop on our site?', 'yes.. it is safe to shop on our site'),
('c005', 'q001', 'are there any stores available', 'no.. not yet started any physical stores');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE IF NOT EXISTS `gender` (
  `gender_id` char(10) NOT NULL,
  PRIMARY KEY (`gender_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`gender_id`) VALUES
('KIDS'),
('MEN'),
('UNISEX'),
('WOMEN');

-- --------------------------------------------------------

--
-- Table structure for table `hascarddetails`
--

CREATE TABLE IF NOT EXISTS `hascarddetails` (
  `cust_Id` int(11) NOT NULL,
  `card_no` bigint(16) NOT NULL,
  `nameoncard` varchar(60) NOT NULL,
  `exp_date` date NOT NULL,
  PRIMARY KEY (`cust_Id`,`card_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hascarddetails`
--

INSERT INTO `hascarddetails` (`cust_Id`, `card_no`, `nameoncard`, `exp_date`) VALUES
(1, 987654321123456, 'gfhgfkj', '2012-12-12'),
(1, 1144223355664478, 'john doe', '2019-10-10'),
(1, 1234567890123456, 'rajeshf', '2012-12-12'),
(1, 1234567891234567, 'rajesh', '2012-12-12'),
(1, 3214123443211234, 'rajesh', '2012-12-12'),
(1, 9876543211234567, 'rajesh', '2012-12-12'),
(2, 1177000011112222, 'mary rose', '2020-08-25'),
(3, 4444888899992222, 'usman khan', '2017-11-28'),
(4, 4477999933335555, 'anudessh u', '2019-04-19'),
(5, 4141525289897632, 'narendra modi', '2021-09-09');

-- --------------------------------------------------------

--
-- Table structure for table `mightforgotpassword`
--

CREATE TABLE IF NOT EXISTS `mightforgotpassword` (
  `cust_Id` int(11) NOT NULL,
  `emailId` varchar(40) NOT NULL,
  `newpwd` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`cust_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mightforgotpassword`
--

INSERT INTO `mightforgotpassword` (`cust_Id`, `emailId`, `newpwd`) VALUES
(1, 'Johndoe@gmail.com', NULL),
(2, 'Mary@gmail.com', NULL),
(3, 'Usman@gmail.com', NULL),
(4, 'Deesh@gmail.com', NULL),
(5, 'Modi@gmail.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_Id` int(5) NOT NULL AUTO_INCREMENT,
  `cust_Id` int(11) NOT NULL,
  `orderdate` date NOT NULL,
  `shoe_Id` char(5) NOT NULL,
  `quantity` int(11) NOT NULL,
  `Review` decimal(4,2) NOT NULL,
  `totalcost` decimal(6,2) NOT NULL,
  PRIMARY KEY (`order_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phonenumber`
--

CREATE TABLE IF NOT EXISTS `phonenumber` (
  `ph_no` bigint(13) NOT NULL,
  `cust_Id` int(11) NOT NULL,
  PRIMARY KEY (`ph_no`,`cust_Id`),
  KEY `cust_Id` (`cust_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `phonenumber`
--

INSERT INTO `phonenumber` (`ph_no`, `cust_Id`) VALUES
(9876543321, 1),
(9887765432, 2),
(9888776654, 3),
(9988776652, 4),
(9877765432, 5),
(9802513059, 6),
(9802513059, 7);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE IF NOT EXISTS `sale` (
  `discount` decimal(9,9) NOT NULL,
  `sale_Id` char(5) NOT NULL,
  PRIMARY KEY (`sale_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sale`
--

INSERT INTO `sale` (`discount`, `sale_Id`) VALUES
('0.000000000', 's0'),
('0.150000000', 's1'),
('0.010000000', 's10'),
('0.120000000', 's11'),
('0.250000000', 's12'),
('0.500000000', 's13'),
('0.350000000', 's14'),
('0.100000000', 's15'),
('0.300000000', 's2'),
('0.200000000', 's3'),
('0.400000000', 's4'),
('0.250000000', 's5'),
('0.200000000', 's6'),
('0.400000000', 's7'),
('0.300000000', 's9');

-- --------------------------------------------------------

--
-- Table structure for table `shoes`
--

CREATE TABLE IF NOT EXISTS `shoes` (
  `admin_Id` char(5) DEFAULT NULL,
  `brand_Id` char(5) NOT NULL,
  `shoe_Id` char(5) NOT NULL,
  `shoe_Img` varchar(30) NOT NULL,
  `category_Id` char(5) NOT NULL,
  `cost` decimal(6,2) NOT NULL,
  PRIMARY KEY (`shoe_Id`),
  KEY `admin_Id` (`admin_Id`),
  KEY `brand_Id` (`brand_Id`),
  KEY `category_Id` (`category_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoes`
--

INSERT INTO `shoes` (`admin_Id`, `brand_Id`, `shoe_Id`, `shoe_Img`, `category_Id`, `cost`) VALUES
('pg05', 'Ad102', '101', 's1.jpg', 'Sp108', '40.00'),
('pg05', 'Cr101', '102', 's2.jpg', 'Ca102', '50.00'),
('pg05', 'Fi104', '103', 's3.jpg', 'Sp108', '60.00'),
('pg05', 'Re103', '104', 's4.jpg', 'Lo104', '70.00'),
('pg05', 'Pd106', '105', 's5.jpg', 'Bo105', '80.00'),
('pg05', 'Ca105', '106', 's6.jpg', 'Fo101', '90.00'),
('pg05', 'Fi104', '107', 's7.jpg', 'Sp108', '20.00'),
('pg05', 'Re103', '108', 's8.jpg', 'Sn103', '100.00'),
('pg05', 'Ad102', '109', 's9.jpg', 'Sp108', '140.00'),
('pg05', 'Pd106', '110', 's10.jpg', 'Fo101', '240.00'),
('pg05', 'Ad102', '111', 's11.jpg', 'Sp108', '45.00'),
('pg05', 'Cr101', '112', 's12.jpg', 'Ca102', '220.00'),
('pg05', 'Fi104', '113', 's13.jpg', 'Sp108', '65.00'),
('pg05', 'Pd106', '114', 's14.jpg', 'Fo101', '30.00'),
('pg05', 'Re103', '115', 's15.jpg', 'Sp108', '48.00');

-- --------------------------------------------------------

--
-- Table structure for table `shoesareofcolor`
--

CREATE TABLE IF NOT EXISTS `shoesareofcolor` (
  `color_Id` char(5) NOT NULL,
  `shoe_Id` char(5) NOT NULL,
  PRIMARY KEY (`color_Id`,`shoe_Id`),
  KEY `shoe_Id` (`shoe_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoesareofcolor`
--

INSERT INTO `shoesareofcolor` (`color_Id`, `shoe_Id`) VALUES
('c101', '101'),
('c102', '102'),
('c103', '103'),
('c104', '104'),
('c105', '105'),
('c106', '106'),
('c107', '107'),
('c108', '108'),
('c109', '109'),
('c110', '110'),
('c111', '111'),
('c112', '112'),
('c113', '113'),
('c114', '114'),
('c115', '115');

-- --------------------------------------------------------

--
-- Table structure for table `shoesgoondeal`
--

CREATE TABLE IF NOT EXISTS `shoesgoondeal` (
  `shoe_Id` char(5) NOT NULL,
  `sale_Id` char(5) NOT NULL,
  PRIMARY KEY (`shoe_Id`,`sale_Id`),
  KEY `sale_Id` (`sale_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoesgoondeal`
--

INSERT INTO `shoesgoondeal` (`shoe_Id`, `sale_Id`) VALUES
('102', 's0'),
('103', 's0'),
('105', 's0'),
('107', 's0'),
('108', 's0'),
('111', 's0'),
('113', 's0'),
('115', 's0'),
('101', 's1'),
('110', 's10'),
('112', 's12'),
('114', 's14'),
('104', 's4'),
('106', 's6'),
('109', 's9');

-- --------------------------------------------------------

--
-- Table structure for table `shoeshavesize`
--

CREATE TABLE IF NOT EXISTS `shoeshavesize` (
  `size_Number` float(5,1) NOT NULL,
  `shoe_Id` char(5) NOT NULL,
  PRIMARY KEY (`size_Number`,`shoe_Id`),
  KEY `shoe_Id` (`shoe_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoeshavesize`
--

INSERT INTO `shoeshavesize` (`size_Number`, `shoe_Id`) VALUES
(7.0, '101'),
(7.5, '102'),
(8.0, '103'),
(8.5, '104'),
(9.0, '105'),
(5.0, '106'),
(5.5, '107'),
(6.0, '108'),
(6.5, '109'),
(4.5, '110'),
(3.0, '111'),
(3.5, '112'),
(4.0, '113'),
(4.5, '114'),
(5.0, '115');

-- --------------------------------------------------------

--
-- Table structure for table `shoe_gender`
--

CREATE TABLE IF NOT EXISTS `shoe_gender` (
  `gender_id` char(10) NOT NULL,
  `shoe_id` char(10) NOT NULL,
  PRIMARY KEY (`gender_id`,`shoe_id`),
  KEY `shoe_id` (`shoe_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shoe_gender`
--

INSERT INTO `shoe_gender` (`gender_id`, `shoe_id`) VALUES
('MEN', '101'),
('MEN', '102'),
('MEN', '103'),
('MEN', '104'),
('MEN', '105'),
('WOMEN', '106'),
('WOMEN', '107'),
('WOMEN', '108'),
('WOMEN', '109'),
('KIDS', '110'),
('KIDS', '111'),
('KIDS', '112'),
('KIDS', '113'),
('unisex', '114'),
('unisex', '115');

-- --------------------------------------------------------

--
-- Table structure for table `shops`
--

CREATE TABLE IF NOT EXISTS `shops` (
  `shoe_Id` char(5) NOT NULL,
  `cust_Id` int(11) NOT NULL,
  PRIMARY KEY (`shoe_Id`,`cust_Id`),
  KEY `cust_Id` (`cust_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shops`
--

INSERT INTO `shops` (`shoe_Id`, `cust_Id`) VALUES
('101', 1),
('106', 1),
('111', 1),
('102', 2),
('107', 2),
('112', 2),
('103', 3),
('108', 3),
('113', 3),
('104', 4),
('109', 4),
('114', 4),
('105', 5),
('110', 5),
('115', 5);

-- --------------------------------------------------------

--
-- Table structure for table `size`
--

CREATE TABLE IF NOT EXISTS `size` (
  `size_Number` float(5,1) NOT NULL,
  `shoe_Id` char(5) NOT NULL,
  PRIMARY KEY (`size_Number`,`shoe_Id`),
  KEY `shoe_Id` (`shoe_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `size`
--

INSERT INTO `size` (`size_Number`, `shoe_Id`) VALUES
(7.0, '101'),
(7.5, '102'),
(8.0, '103'),
(8.5, '104'),
(9.0, '105'),
(5.0, '106'),
(5.5, '107'),
(6.0, '108'),
(6.5, '109'),
(4.5, '110'),
(3.0, '111'),
(3.5, '112'),
(4.0, '113'),
(4.5, '114'),
(5.0, '115');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `address`
--
ALTER TABLE `address`
  ADD CONSTRAINT `address_ibfk_1` FOREIGN KEY (`cust_Id`) REFERENCES `customer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `admindefinesfaqcategory`
--
ALTER TABLE `admindefinesfaqcategory`
  ADD CONSTRAINT `admindefinesfaqcategory_ibfk_1` FOREIGN KEY (`admin_Id`) REFERENCES `admin` (`admin_Id`);

--
-- Constraints for table `alsohasorderhistory`
--
ALTER TABLE `alsohasorderhistory`
  ADD CONSTRAINT `alsohasorderhistory_ibfk_1` FOREIGN KEY (`cust_Id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`shoe_Id`) REFERENCES `shoes` (`shoe_Id`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`cust_Id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `faqlist`
--
ALTER TABLE `faqlist`
  ADD CONSTRAINT `faqlist_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `admindefinesfaqcategory` (`category_id`);

--
-- Constraints for table `hascarddetails`
--
ALTER TABLE `hascarddetails`
  ADD CONSTRAINT `hascarddetails_ibfk_1` FOREIGN KEY (`cust_Id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `mightforgotpassword`
--
ALTER TABLE `mightforgotpassword`
  ADD CONSTRAINT `mightforgotpassword_ibfk_1` FOREIGN KEY (`cust_Id`) REFERENCES `customer` (`id`);

--
-- Constraints for table `phonenumber`
--
ALTER TABLE `phonenumber`
  ADD CONSTRAINT `phonenumber_ibfk_1` FOREIGN KEY (`cust_Id`) REFERENCES `customer` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shoes`
--
ALTER TABLE `shoes`
  ADD CONSTRAINT `shoes_ibfk_1` FOREIGN KEY (`admin_Id`) REFERENCES `admin` (`admin_Id`),
  ADD CONSTRAINT `shoes_ibfk_2` FOREIGN KEY (`brand_Id`) REFERENCES `brand` (`brand_Id`),
  ADD CONSTRAINT `shoes_ibfk_3` FOREIGN KEY (`category_Id`) REFERENCES `categories` (`category_Id`);

--
-- Constraints for table `shoesareofcolor`
--
ALTER TABLE `shoesareofcolor`
  ADD CONSTRAINT `shoesareofcolor_ibfk_1` FOREIGN KEY (`color_Id`) REFERENCES `color` (`color_Id`),
  ADD CONSTRAINT `shoesareofcolor_ibfk_2` FOREIGN KEY (`shoe_Id`) REFERENCES `shoes` (`shoe_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `shoesgoondeal`
--
ALTER TABLE `shoesgoondeal`
  ADD CONSTRAINT `shoesgoondeal_ibfk_1` FOREIGN KEY (`shoe_Id`) REFERENCES `shoes` (`shoe_Id`),
  ADD CONSTRAINT `shoesgoondeal_ibfk_2` FOREIGN KEY (`sale_Id`) REFERENCES `sale` (`sale_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `shoeshavesize`
--
ALTER TABLE `shoeshavesize`
  ADD CONSTRAINT `shoeshavesize_ibfk_1` FOREIGN KEY (`size_Number`) REFERENCES `size` (`size_Number`),
  ADD CONSTRAINT `shoeshavesize_ibfk_2` FOREIGN KEY (`shoe_Id`) REFERENCES `shoes` (`shoe_Id`) ON UPDATE CASCADE;

--
-- Constraints for table `shoe_gender`
--
ALTER TABLE `shoe_gender`
  ADD CONSTRAINT `shoe_gender_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`gender_id`),
  ADD CONSTRAINT `shoe_gender_ibfk_2` FOREIGN KEY (`shoe_id`) REFERENCES `shoes` (`shoe_Id`);

--
-- Constraints for table `shops`
--
ALTER TABLE `shops`
  ADD CONSTRAINT `shops_ibfk_1` FOREIGN KEY (`shoe_Id`) REFERENCES `shoes` (`shoe_Id`),
  ADD CONSTRAINT `shops_ibfk_2` FOREIGN KEY (`cust_Id`) REFERENCES `customer` (`id`) ON UPDATE CASCADE;

--
-- Constraints for table `size`
--
ALTER TABLE `size`
  ADD CONSTRAINT `size_ibfk_1` FOREIGN KEY (`shoe_Id`) REFERENCES `shoes` (`shoe_Id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
