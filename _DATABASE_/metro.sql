-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 अक्तूबर, 2021 को 08:53 ?????????
-- सर्वर संस्करण : 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metro`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `sno` int(5) NOT NULL,
  `uname` text NOT NULL,
  `upass` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `uname`, `upass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE IF NOT EXISTS `cat` (
  `sno` int(5) NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`sno`, `name`, `image`, `status`) VALUES
(1, 'Fashion Collection', 'Fashion Collection.jpg', 1),
(2, 'Electronics Collection', 'Electronics Collection.jpg', 1),
(3, 'Furniture Collection', 'Furniture Collection.jpg', 1),
(4, 'Kitchen Applances', 'Kitchen Applances.jpg', 1),
(5, 'Jwellary Collection', 'Jwellary Collection.jpg', 1),
(6, 'Cosmatics Collection', 'Cosmatics Collection.jpg', 1),
(7, 'Bathroom Collection', 'Bathroom Collection.jpg', 1),
(8, 'Book', 'Book.jpg', 1),
(9, '111', 'ERWFSADF.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `sno` int(5) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `pno` text NOT NULL,
  `eid` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`sno`, `name`, `address`, `image`, `pno`, `eid`, `status`) VALUES
(2, 'Metro Mall Jodhpur', 'Near Janta Sweets, Jalori Gate, Jodhpur', 'branch2.jpg', '9864435570', 'info@metromall.com', 1),
(3, 'Metro Mall Jodhpur', 'Near Janta Sweets, Jalori Gate, Jodhpur', 'branch3.jpg', '45935874535', 'info@metromall.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE IF NOT EXISTS `enquiry` (
  `sno` int(10) NOT NULL,
  `name` text NOT NULL,
  `enquiry` text NOT NULL,
  `phone` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`sno`, `name`, `enquiry`, `phone`) VALUES
(1, 'kamal', 'dhbhasdbkasbjhsadbh', '654984654165'),
(2, 'sdcjkb', 'jbjkbjkbkjcfgxch', '6546546354'),
(3, 'dscasd', 'dsvjksfjknkjnjkfkdbkhb', '5454544654'),
(4, 'sdafadbhb', 'jkbnkjbjkbhklvhcghckghkckg', '46874641321654'),
(5, 'asdbhajh', 'jkjkhjkhjk', '54654684684'),
(6, 'this is 7', 'skjdasn', '789451122'),
(7, 'kamal', 'ajhdjas sajfja asfashnfo', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `oder`
--

CREATE TABLE IF NOT EXISTS `oder` (
  `sno` int(5) NOT NULL,
  `uid` int(5) NOT NULL,
  `name` text NOT NULL,
  `price` varchar(7) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `oder`
--

INSERT INTO `oder` (`sno`, `uid`, `name`, `price`, `date`) VALUES
(1, 9, 'Men Black T-Shirt	', '350', '2018-08-08');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `sno` int(5) NOT NULL,
  `name` text NOT NULL,
  `offerdec` text NOT NULL,
  `image` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`sno`, `name`, `offerdec`, `image`, `status`) VALUES
(1, '20% OFF on Men Shoes', 'On this festival season, 20% is off on every Men Shoes product.\r\nSo hurry up! Go on for Shopping.', 'offer 1.jpg', 1),
(2, '25% OFF on Jwellery', 'On this festival season, 25% is off on every Jwellary Items.\r\nSo hurry up! Go on for Shopping.', 'offer 2.jpg', 1),
(3, '50% OFF on Furnitures', 'On this festival season, 20% is off on every Furniture product.\r\nSo hurry up! Go on for Shopping.', 'offer 3.jpg', 1),
(4, '25% OFF on Men Shirts', 'On this festival season, 20% is off on Men Shirts item.\nSo hurry up! Go on for Shopping.', 'offer 4.jpg', 1),
(5, '10% OFF on Kid Shirts', 'On this festival season, 10% is off on Kid Shirts item.\nSo hurry up! Go on for Shopping.', 'Kid Discount.png', 0),
(6, '123', '123', 'girlhandbag.png', 0),
(7, 'qwe', 'qwe', 'ERWFSADF.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `sno` int(11) NOT NULL,
  `name` text NOT NULL,
  `cat` text NOT NULL,
  `subcat` text NOT NULL,
  `procode` text NOT NULL,
  `fo` text NOT NULL,
  `mrp` text NOT NULL,
  `dismrp` text NOT NULL,
  `i1` text NOT NULL,
  `i2` text NOT NULL,
  `i3` text NOT NULL,
  `i4` text NOT NULL,
  `about` text NOT NULL,
  `status` text NOT NULL,
  `lat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`sno`, `name`, `cat`, `subcat`, `procode`, `fo`, `mrp`, `dismrp`, `i1`, `i2`, `i3`, `i4`, `about`, `status`, `lat`) VALUES
(19, 'Man Black T-Shirt', 'Fashion Collection', 'Men Shirt', 'BT-0023', 'Man', '499', '449', '1.webp', '2.webp', '3.jpg', '4.jpg', 'Black Shirt ', '1', '1'),
(22, 'Kid T-shirt ', 'Fashion Collection', 'Kids Shirts', 'KT-501', 'Kids', '599', '549', 'ASDGTRE.webp', 'ASDFASDF.jpg', 'ASDFRGR.jpg', 'ERWFSADF.jpg', 'Kid T-Shirt ', 'on', '1'),
(24, 'kamal kumar', 'Fashion Collection', 'Men Shirt', '', 'All', '11', '11', 'ASDGTRE.webp', 'ASDFASDF.jpg', 'ASDFRGR.jpg', 'ERWFSADF.jpg', '', '', '1'),
(26, 'qweqweqwe', 'Fashion Collection', 'Men Shirt', '', 'All', '', '', '', '', '', '', '123', '', '0');

-- --------------------------------------------------------

--
-- Table structure for table `regis`
--

CREATE TABLE IF NOT EXISTS `regis` (
  `sno` int(5) NOT NULL,
  `name` text NOT NULL,
  `gender` text NOT NULL,
  `dob` date NOT NULL,
  `address` text NOT NULL,
  `state` text NOT NULL,
  `check1` text NOT NULL,
  `phone` text NOT NULL,
  `email` text NOT NULL,
  `photo` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regis`
--

INSERT INTO `regis` (`sno`, `name`, `gender`, `dob`, `address`, `state`, `check1`, `phone`, `email`, `photo`, `password`) VALUES
(9, 'kamal', 'male', '2018-03-09', 'asjbcjsdbjkbc', 'sadas', '12', '9874563210', 'abc@qaz.com', 'avatar.png', 'kamal'),
(10, 'ankit', '', '2018-03-08', 'sdasd', 'asdas', '12', '6516541', 'klcdsnlk@kcdsnjka.cds', 'avatar.png', 'ankit');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `sno` int(5) NOT NULL,
  `name` text NOT NULL,
  `decp` text NOT NULL,
  `image1` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`sno`, `name`, `decp`, `image1`, `status`) VALUES
(1, 'PVR', 'PVR cinema', 'pvr.jpg', '1'),
(2, 'Dominos', 'Food', 'dominos.png', '1'),
(3, 'KFC', 'Foor', 'kfc.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `subcat`
--

CREATE TABLE IF NOT EXISTS `subcat` (
  `sno` int(5) NOT NULL,
  `cat` text NOT NULL,
  `name` text NOT NULL,
  `image` text NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcat`
--

INSERT INTO `subcat` (`sno`, `cat`, `name`, `image`, `status`) VALUES
(1, 'Fashion Collection', 'Men Shirt', 'Men Shirt.jpg', 1),
(2, 'Fashion Collection', 'Women Shirts', 'Women Shirts.jpg', 1),
(3, 'Fashion Collection', 'Kids Shirts', 'Kids Shirts.jpg', 1),
(4, 'Fashion Collection', 'Men Jeans', 'Men Jeans.jpg', 1),
(5, 'Fashion Collection', 'Women Jeans', 'Women Jeans.jpg', 1),
(6, 'Fashion Collection', 'Kids Jeans', 'Kids Jeans.jpg', 1),
(7, 'Fashion Collection', 'Men T-Shirts', 'Men T-Shirts.jpg', 1),
(8, 'Fashion Collection', 'Women T-Shirts', 'Women T-Shirts.jpg', 1),
(9, 'Fashion Collection', 'Kids T-Shirts', 'Kids T-Shirts.jpg', 1),
(10, 'Fashion Collection', 'Men Trousers', 'Men Trousers.jpg', 1),
(11, 'Fashion Collection', 'Women Trousers', 'Women Trousers.jpg', 1),
(12, 'Fashion Collection', 'Kids Trousers', 'Kids Trousers.jpg', 1),
(13, 'Fashion Collection', 'Women Handwatch', 'Women Handwatch.jpg', 1),
(14, 'Fashion Collection', 'Kids Handwatch', 'Kids Handwatch.jpg', 1),
(15, 'Fashion Collection', 'Men Goggles', 'Men Goggles.jpg', 1),
(16, 'Fashion Collection', 'Women Goggles', 'Women Goggles.jpg', 1),
(17, 'Fashion Collection', 'Kids Goggles', 'Kids Goggles.jpg', 1),
(18, 'Fashion Collection', 'Kids Frauk', 'Kids Frauk.jpg', 1),
(19, 'Fashion Collection', 'Men Wallet', 'Men Wallet.jpg', 1),
(20, 'Fashion Collection', 'Women Wallet', 'Women Wallet.jpg', 1),
(21, 'Fashion Collection', 'Kids Wallet', 'Kids Wallet.jpg', 1),
(22, 'Fashion Collection', 'Men Shoes', 'Men Shoes.jpg', 1),
(23, 'Fashion Collection', 'Women Shoes', 'Women Shoes.jpg', 1),
(24, 'Fashion Collection', 'Kids Shoes', 'Kids Shoes.jpg', 1),
(25, 'Electronics Collection', 'Mobiles', 'Mobiles.jpg', 1),
(26, 'Electronics Collection', 'Laptops', 'Laptops.jpg', 1),
(27, 'Electronics Collection', 'Camera', 'Camera.jpg', 1),
(28, 'Electronics Collection', 'Television', 'Television.jpg', 1),
(29, 'Electronics Collection', 'Refridgrator', 'Refridgrator.png', 1),
(30, 'Electronics Collection', 'Washing Machine', 'Washing Machine.jpg', 1),
(31, 'Electronics Collection', 'Iron', 'Iron.jpg', 1),
(32, 'Electronics Collection', 'Cooler', 'Cooler.jpg', 1),
(33, 'Furniture Collection', 'Dining Table Set', 'Dining Table Set.jpeg', 1),
(34, 'Furniture Collection', 'Tea Table Set', 'Tea Table Set.jpg', 1),
(35, 'Furniture Collection', 'Wooden Sofa Set', 'Wooden Sofa Set.jpg', 1),
(36, 'Furniture Collection', 'Wooden Bed Set', 'Wooden Bed Set.png', 1),
(37, 'Furniture Collection', 'Computer Table', 'Computer Table.jpg', 1),
(38, 'Furniture Collection', 'Wooden Almirah', 'Wooden Almirah.jpg', 1),
(39, 'Furniture Collection', 'Plain Tables', 'Plain Tables.jpg', 1),
(40, 'Furniture Collection', 'Plain Chairs', 'Plain Chairs.jpg', 1),
(41, 'Furniture Collection', 'Wooden Doors', 'Wooden Doors.jpg', 1),
(42, 'Furniture Collection', 'Wooden Windows', 'Wooden Windows.jpg', 1),
(43, 'Kitchen Applances', 'Cupcake Maker', 'cupcake maker.jpg', 1),
(44, 'Kitchen Applances', 'Cup-plate Set', 'Cup-plate Set.jpg', 1),
(45, 'Kitchen Applances', 'Fry-pan Set', 'Fry-pan Set.jpg', 1),
(46, 'Kitchen Applances', 'Thali Set', 'Thali Set.jpg', 1),
(47, 'Kitchen Applances', 'Tiffin Box', 'Tiffin Box.jpg', 1),
(48, 'Kitchen Applances', 'Plates Set', 'Plates Set.jpg', 1),
(49, 'Kitchen Applances', 'Spoons Set', 'Spoons Set.jpg', 1),
(50, 'Jwellary Collection', 'Gold Jwellary', 'Gold Jwellary.jpg', 1),
(51, 'Jwellary Collection', 'Silver Jwellary', 'Silver Jwellary.jpeg', 1),
(52, 'Jwellary Collection', 'Artificial Jwellary', 'Artificial Jwellary.jpg', 1),
(53, 'Jwellary Collection', 'Jwells', 'Jwells.jpg', 1),
(54, 'Bathroom Collection', 'Washbasin', 'Washbasin.jpg', 1),
(55, 'Bathroom Collection', 'Toilet Set', 'Toilet Set.jpg', 1),
(56, 'Bathroom Collection', 'Bathroom Mirror', 'Bathroom Mirror.jpg', 1),
(57, 'Bathroom Collection', 'Soap Holder', 'Soap Holder.jpg', 1),
(58, 'Bathroom Collection', 'Bathroom Net', 'Bathroom Net.jpg', 1),
(59, 'Bathroom Collection', 'Bathroom Taps', 'Bathroom Taps.jpg', 1),
(60, 'Book', 'Comics', 'Comics.jpg', 1),
(61, 'Book', 'Novel', 'Novel.jpg', 1),
(62, 'Book', 'Science Bokks', 'Science Bokks.jpg', 1),
(63, 'Book', 'Sports Books', 'Sports Books.jpg', 1),
(64, 'Book', 'Reciepe Books', 'Reciepe Books.jpg', 1),
(65, 'Book', 'Stories Books', 'Stories Books.jpg', 1),
(66, 'Electronics Collection', 'test1', 'branch3.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `oder`
--
ALTER TABLE `oder`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `regis`
--
ALTER TABLE `regis`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `subcat`
--
ALTER TABLE `subcat`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `oder`
--
ALTER TABLE `oder`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `regis`
--
ALTER TABLE `regis`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `subcat`
--
ALTER TABLE `subcat`
  MODIFY `sno` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=67;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
