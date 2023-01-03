-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 01:23 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blooms`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `ID` int(11) NOT NULL,
  `CAT` varchar(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `PRICE` int(11) NOT NULL,
  `IMG` varchar(255) NOT NULL,
  `DES` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`ID`, `CAT`, `NAME`, `PRICE`, `IMG`, `DES`) VALUES
(1, 'Flower', 'rrrrrr', 123123, 'BOOMS (10).png', 'dfsfsfds'),
(2, 'Flower', 'qqqq', 12312, 'BOOMS 1.png', 'fasfasasd'),
(3, 'Flower', 'fsdfsd', 155, 'BOOMS 1.png', 'dffsfsd'),
(4, 'Flower', 'dasdsa', 31231, 'BOOMS (1).png', 'asdasd'),
(5, 'Special', 'adsasd', 123123, 'BOOMS (12).png', ' beautiful selection of fresh, seasonal blooms arranged in a chic white box. Perfect for any occasion, this gift is sure to delight and impress.'),
(6, 'Special', 'adsasd', 123123, 'BOOMS (12).png', ' beautiful selection of fresh, seasonal blooms arranged in a chic white box. Perfect for any occasion, this gift is sure to delight and impress.'),
(7, 'Special', 'adsasd', 123123, 'BOOMS (12).png', ' beautiful selection of fresh, seasonal blooms arranged in a chic white box. Perfect for any occasion, this gift is sure to delight and impress.'),
(8, 'Special', 'adsasd', 123123, 'BOOMS (12).png', ' beautiful selection of fresh, seasonal blooms arranged in a chic white box. Perfect for any occasion, this gift is sure to delight and impress.'),
(10, 'Special', 'dasasd', 21312312, 'BOOMS (5).png', 'dsfsfsdf'),
(11, 'Flower', 'afas\'asdas\"', 321123, 'BOOMS (6).png', 'asdasdasdas'),
(12, 'Flower', 'gggggg', 123123, 'BOOMS (6).png', 'adsada');

-- --------------------------------------------------------

--
-- Table structure for table `ordertbl`
--

CREATE TABLE `ordertbl` (
  `OID` int(11) NOT NULL,
  `CNAME` varchar(255) NOT NULL,
  `CONTACT` int(11) NOT NULL,
  `POSTAL` int(11) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `ProductID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordertbl`
--

INSERT INTO `ordertbl` (`OID`, `CNAME`, `CONTACT`, `POSTAL`, `ADDRESS`, `ProductID`, `UserID`, `Quantity`) VALUES
(4, 'adsasa', 213131, 1234, 'f@gmail.com', 4, 12, 1),
(5, 'adsasa', 213131, 1234, 'f@gmail.com', 4, 12, 1),
(6, 'dsaasd', 321, 1234, 'f@gmail.com', 11, 12, 1),
(7, 'dsaasd', 321, 1234, 'f@gmail.com', 11, 12, 1),
(8, 'asas', 12312, 1231231, 'adsa', 12, 12, 1),
(9, 'dinali', 1234, 11200, 'colombo', 11, 12, 1),
(10, 'dfdsfds', 43211, 1234, 'asdsad', 4, 12, 2),
(11, 'dinali', 22134566, 11400, 'habarana', 12, 12, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(9, 'VenujaK', 'v@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(10, 'gg', 'abcd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 'ffff', 'f@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(13, 'dinali', 'd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(14, 'dinalis', 's@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `ordertbl`
--
ALTER TABLE `ordertbl`
  ADD PRIMARY KEY (`OID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ordertbl`
--
ALTER TABLE `ordertbl`
  MODIFY `OID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
