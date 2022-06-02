-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 07:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `task2`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` int(10) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phonenumber` bigint(10) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `code`, `country`, `phonenumber`, `lname`) VALUES
(10, 'ronak', 255, 'kota', 50000, '25'),
(20, 'shubham', 255, 'india', 60000, 'jian'),
(30, 'shivam', 255, 'india', 20000, 'kumar'),
(40, 'jatin', 255, 'japan', 30000, 'kumar'),
(50, 'somay', 255, 'china', 50000, 'garg'),
(60, 'RJ', 255, 'india', 35000, 'jain'),
(70, 'raj', 255, 'america', 55000, 'jain'),
(80, 'Raja', 255, 'india', 35000, 'garg'),
(90, 'mradul', 255, 'uk', 50000, 'garg'),
(100, 'ronak', 255, 'usa', 50000, 'kumar');

-- --------------------------------------------------------

--
-- Table structure for table `agents`
--

CREATE TABLE `agents` (
  `agent_code` bigint(10) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `area` varchar(50) DEFAULT NULL,
  `number` int(10) DEFAULT NULL,
  `phone_no` int(11) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agents`
--

INSERT INTO `agents` (`agent_code`, `name`, `area`, `number`, `phone_no`, `country`) VALUES
(270, 'alex', 'jaipur', 4, 511523155, 'india'),
(270, 'bolt', 'pushkar', 4, 511512655, 'india'),
(270, 'jack', 'ajmer', 6, 511524655, 'austria'),
(270, 'raj', 'jaipur', 3, 511523155, 'london'),
(270, 'rajat', 'jaipur', 4, 51236789, 'india'),
(270, 'ram', 'banglore', 5, 545115368, 'india'),
(270, 'rommy', 'raipur', 2, 511523189, 'india'),
(270, 'ronak', 'jaipur', 4, 511523155, 'london'),
(270, 'somay', 'baran', 8, 511512600, 'new-york'),
(270, 'yash', 'mumbai', 4, 516412655, 'india');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `phone_no` bigint(11) DEFAULT NULL,
  `mode` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `city`, `country`, `phone_no`, `mode`) VALUES
(10, 'ronak', 'jaipur', 'india', 9264587820, 'ofline'),
(20, 'somay', 'jaipur', 'india', 9264587820, 'online'),
(30, 'ram', 'kota', 'india', 926458720, 'ofline'),
(40, 'raju', 'punr', 'india', 9269587820, 'online'),
(50, 'shanu', 'jaipur', 'india', 9264587820, 'online'),
(60, 'jain', 'mumbai', 'india', 926487920, 'ofline'),
(70, 'ronak Jain', 'florida', 'usa', 7264587820, 'online'),
(80, 'shubham', 'jaipur', 'india', 9264586500, 'ofline'),
(90, 'ravi', 'pune', 'india', 9265587820, 'online'),
(100, 'RJ', 'jaipur', 'india', 9264587820, 'ofline');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `postalCode` int(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `review` varchar(50) DEFAULT NULL,
  `phone_no` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ecommerce`
--

CREATE TABLE `ecommerce` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `postalCode` int(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `review` varchar(50) DEFAULT NULL,
  `phone_no` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecommerce`
--

INSERT INTO `ecommerce` (`id`, `name`, `postalCode`, `address`, `review`, `phone_no`) VALUES
(10, 'ronak', 356023, 'railway station', 'good', 9756415879),
(10, 'ronak', 356023, 'railway station', 'good', 9756415879),
(20, 'jatin', 356023, 'railway station', 'good', 9756415879),
(30, 'shyam', 356023, 'railway station', 'good', 9756415879),
(50, 'raj', 356023, 'railway station', 'good', 9756415879),
(60, 'raju', 356023, 'railway station', 'good', 9756415879),
(80, 'ram', 356023, 'railway station', 'good', 9756415879),
(90, 'somay', 356023, 'railway station', 'good', 9756415879),
(100, 'shubham', 356023, 'railway station', 'good', 9756415879),
(110, 'mradul', 356023, 'railway station', 'good', 9756415879),
(10, 'ronak', 356023, 'railway station', 'good', 9756415879),
(10, 'ronak', 356023, 'railway station', 'good', 9756415879),
(20, 'jatin', 356023, 'railway station', 'good', 9756415879),
(30, 'shyam', 356023, 'railway station', 'good', 9756415879),
(50, 'raj', 356023, 'railway station', 'good', 9756415879),
(60, 'raju', 356023, 'railway station', 'good', 9756415879),
(80, 'ram', 356023, 'railway station', 'good', 9756415879),
(90, 'somay', 356023, 'railway station', 'good', 9756415879),
(100, 'shubham', 356023, 'railway station', 'good', 9756415879),
(110, 'mradul', 356023, 'railway station', 'good', 9756415879);

-- --------------------------------------------------------

--
-- Table structure for table `hpspital`
--

CREATE TABLE `hpspital` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `zip_code` int(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hpspital`
--

INSERT INTO `hpspital` (`id`, `name`, `zip_code`, `city`, `age`, `lname`) VALUES
(100, 'ronak', 264634, 'jaipur', 22, 'jain'),
(100, 'ronak', 264634, 'jaipur', 22, 'jain'),
(100, 'Ram', 264634, 'kota', 26, 'jain'),
(100, 'raju', 264634, 'jaipur', 25, 'jain'),
(100, 'shubham', 264634, 'amjer', 32, 'jain'),
(100, 'mradul', 264634, 'jaipur', 52, 'jain'),
(100, 'jatin', 264634, 'pushkar', 40, 'jain'),
(100, 'shyam', 264634, 'jaipur', 60, 'jain'),
(100, 'pranav', 264634, 'jaipur', 25, 'jain'),
(100, 'ronak', 264634, 'jaipur', 29, 'jain');

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `postalCode` bigint(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `review` varchar(50) DEFAULT NULL,
  `phone_no` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`, `postalCode`, `address`, `review`, `phone_no`) VALUES
(10, 'ronak', 356023, 'railway station', 'good', 9756415879),
(10, 'ronak', 356023, 'railway station', 'good', 9756415879),
(20, 'jatin', 356023, 'railway station', 'good', 9756415879),
(30, 'shyam', 356023, 'railway station', 'good', 9756415879),
(50, 'raj', 356023, 'railway station', 'good', 9756415879),
(60, 'raju', 356023, 'railway station', 'good', 9756415879),
(80, 'ram', 356023, 'railway station', 'good', 9756415879),
(90, 'somay', 356023, 'railway station', 'good', 9756415879),
(100, 'shubham', 356023, 'railway station', 'good', 9756415879),
(110, 'mradul', 356023, 'railway station', 'good', 9756415879);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` int(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `salary` bigint(15) DEFAULT NULL,
  `age` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `name`, `code`, `city`, `salary`, `age`) VALUES
(10, 'ronak', 255, 'kota', 50000, 25),
(20, 'shubham', 255, 'kota', 60000, 25),
(30, 'shivam', 255, 'kota', 20000, 25),
(40, 'jatin', 255, 'kota', 30000, 25),
(50, 'somay', 255, 'kota', 50000, 25),
(60, 'RJ', 255, 'kota', 35000, 25),
(70, 'raj', 255, 'kota', 55000, 25),
(80, 'Raja', 255, 'kota', 35000, 25),
(90, 'mradul', 255, 'kota', 50000, 25),
(100, 'ronak', 255, 'kota', 50000, 25);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `code` int(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `salary` bigint(15) DEFAULT NULL,
  `phone_no` bigint(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`id`, `name`, `code`, `city`, `salary`, `phone_no`) VALUES
(10, 'ronak', 648123, 'jaipur', 546200, 9564721686),
(10, 'ronak', 648123, 'jaipur', 546200, 9564721686),
(11, 'Rj', 648123, 'ajmer', 546200, 9564721686),
(12, 'rjain', 648123, 'jaipur', 826200, 9564721686),
(13, 'somay', 648123, 'jaipur', 546200, 9564721686),
(14, 'ram', 648123, 'kota', 64200, 9564721686),
(15, 'shyam', 648123, 'baran', 546200, 9564721686),
(16, 'jeetu', 648123, 'ramgarh', 545600, 9564721686),
(17, 'bablu', 648123, 'anta', 546200, 9564721686),
(18, 'raju', 648123, 'alwar', 546200, 9564721686);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `Emp_id` int(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `Zipcode` int(10) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `mobile_no` bigint(12) DEFAULT NULL,
  `store_id` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`Emp_id`, `name`, `Zipcode`, `city`, `mobile_no`, `store_id`) VALUES
(10, 'ronak', 648123, 'jaipur', 9564721686, 123),
(10, 'ronak', 648123, 'jaipur', 9564721686, 562),
(11, 'Rj', 648123, 'jaipur', 9564721686, 575),
(12, 'rjain', 648123, 'jaipur', 9564721686, 287),
(13, 'somay', 648123, 'jaipur', 9564721686, 369),
(14, 'ram', 648123, 'jaipur', 9564721686, 796),
(15, 'shyam', 648123, 'jaipur', 9564721686, 583),
(16, 'jeetu', 648123, 'jaipur', 9564721686, 257),
(17, 'bablu', 648123, 'jaipur', 9564721686, 249),
(18, 'raju', 648123, 'jaipur', 9564721686, 946);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agents`
--
ALTER TABLE `agents`
  ADD PRIMARY KEY (`name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
