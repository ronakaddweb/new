-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 23, 2022 at 03:04 PM
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
-- Database: `task1`
--

-- --------------------------------------------------------

--
-- Table structure for table `Agents`
--

CREATE TABLE `Agents` (
  `Id` bigint(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `Code` int(11) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `Country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Agents`
--

INSERT INTO `Agents` (`Id`, `fname`, `lname`, `Code`, `phone_no`, `Country`) VALUES
(10, 'Ram', 'nsubj', 123, 5675648564, 'India'),
(20, 'asd', 'asfsr', 1585, 2584665312, 'India'),
(30, 'Bhau', 'Jk', 21, 648538956, 'India'),
(40, 'Ddg', 'DGtr', 631, 958545321, 'Japan'),
(50, 'jkkhy', 'KSfa', 1532, 1816541151, 'China'),
(60, 'Gkjsai', 'KHUcd', 5485, 5896541188, 'Miami'),
(70, 'HJGyd', 'KLHnj', 5411, 6574895284, 'India'),
(80, 'fxdgh', 'MKD', 45, 986532986, 'Daman'),
(90, 'Dlhf', 'MKh', 165, 1648354189, 'HDG'),
(100, 'KLHJyu', 'KNS', 546, 3158965320, 'HSY');

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Code` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `salary` bigint(20) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`Id`, `name`, `Code`, `City`, `salary`, `age`) VALUES
(1, 'Michal', 556, 'raj', 22563, 30),
(2, 'shyam', 1585, 'kota', 51232, 26),
(3, 'RJ', 21, 'Baran', 20000, 40),
(4, 'Rocky', 630, 'Jammu', 30000, 30),
(5, 'Raju', 153, 'HDhyu', 60000, 30),
(6, 'Sk', 548, 'IHJKD', 30000, 35),
(7, 'DK', 541, 'jaipur', 35000, 26),
(8, 'Cha', 450, 'ajmer', 55000, 40),
(9, 'shyam', 160, 'churu', 38000, 30),
(10, 'om', 545, 'pali', 40000, 49);

-- --------------------------------------------------------

--
-- Table structure for table `ecommerce`
--

CREATE TABLE `ecommerce` (
  `Id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile no` int(12) NOT NULL,
  `Price` int(100) NOT NULL,
  `Review` varchar(100) NOT NULL,
  `Brand` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ecommerce`
--

INSERT INTO `ecommerce` (`Id`, `name`, `mobile no`, `Price`, `Review`, `Brand`) VALUES
(10, 'ronak ', 98287738, 5000, 'Good Product', 'Puma'),
(20, 'shyam', 548531523, 60000, 'Good', 'nike'),
(30, 'Rj', 648915215, 10000, 'Nice', 'Reebok'),
(40, 'Rocky', 51685315, 50000, 'worst', 'ABC'),
(50, 'Raju', 95965329, 5555, 'bad product', 'redtape'),
(60, 'Sk', 948521555, 2899, 'klahf', 'roadstar'),
(70, 'DK', 558564898, 54451, 'sfdf', 'viu'),
(80, 'brand', 666486584, 5623, 'uSGf hsdgujn', 'Puma'),
(90, 'ram', 98242759, 60000, 'ksduj jsic', 'isdj'),
(10, 'Shubham', 982877382, 50002, 'kjhgre jgtgh', 'Puma jkkg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `Id` varchar(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile no` int(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `salary` int(10) NOT NULL,
  `age` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`Id`, `name`, `mobile no`, `address`, `salary`, `age`) VALUES
('10', 'ronak ', 98287738, 'sumer nagar', 50000, 22),
('20', 'ram', 479456169, 'add web', 60000, 25),
('10', 'ronak ', 98287738, 'sumer nagar', 50000, 22),
('20', 'ram', 479456169, 'add web', 60000, 25),
('30 ', 'ronak ds', 982877382, 'sumer', 56000, 30),
('10', 'somay', 15849641, 'gopalpura', 20000, 30),
('32', 'ronak jain', 98287738, 'sumer paradise', 50500, 22),
('20', 'shyam', 548965411, 'add web', 60000, 26),
('70', 'Shubham', 620015821, 'gopalpura', 50000, 30),
('60', 'shyam', 515496521, 'add web', 68000, 40);

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `Id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Zip_code` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`Id`, `fname`, `lname`, `City`, `Zip_code`, `age`) VALUES
(10, 'Ram', 'nsubj', 'jammu', 44512, 30),
(20, 'ronak', 'asfsr', 'jaipur', 946512, 25),
(30, 'Bhau', 'Jk', 'kota', 84536, 55),
(40, 'somay', 'DGt', 'patna', 24553, 40),
(50, 'kalu', 'KSfa', 'pushkar', 32467, 60),
(60, 'gajju', 'bahi', 'pali', 23678, 42),
(70, 'anish', 'verma', 'mumbai', 44544, 35),
(80, 'raju', 'rajan', 'anta', 46548, 36),
(90, 'Dlhf', 'MKh', 'mumbai', 325664, 22),
(100, 'jatin', 'jatin', 'london', 43633, 56);

-- --------------------------------------------------------

--
-- Table structure for table `Office`
--

CREATE TABLE `Office` (
  `officeCode` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `Review` varchar(50) NOT NULL,
  `phone_no` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Office`
--

INSERT INTO `Office` (`officeCode`, `city`, `postalcode`, `address`, `Review`, `phone_no`) VALUES
(231, 'jaipur', 93448, 'gopalpura', 'good office', 5675648564),
(12324, 'kota', 213445, 'add web', 'good office', 5675648564),
(1245, 'baran', 2345, 'railway station', 'good office', 5675648564),
(87242, 'pune', 245234, 'railway station', 'good office', 5675648564),
(23435, 'mumbai', 24532, 'railway station', 'good office', 5675648564),
(4353, 'ajmer', 345223, 'railway station', 'good office', 5675648564),
(235345, 'patna', 235342, 'railway station', 'good office', 5675648564),
(23455, 'pali', 235677, 'railway station', 'good office', 5675648564),
(325363, 'pushkar', 346788, 'railway station', 'good office', 5675648564),
(35566, 'anta', 32987, 'railway station', 'good office', 5675648564);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `store_Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile no` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `order_no` int(11) NOT NULL,
  `mode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`store_Id`, `name`, `mobile no`, `City`, `order_no`, `mode`) VALUES
(213, 'somay', 546497289, 'jammu', 201, 'ofline'),
(234, 'shyam', 546497289, 'jaipur', 5439, 'online'),
(976, 'Rjain', 546497289, 'kota', 982, 'ofline'),
(313, 'Rocky', 546497289, 'patna', 46985, 'online'),
(7599, '', 546497289, 'pushkar', 6289, 'offline'),
(13469, 'SkJ', 546497289, 'pali', 365, 'offline'),
(655, 'dinesh', 546497289, 'mumbai', 390, 'offline'),
(3620, 'ramu', 546497289, 'anta', 9765, 'online'),
(5412, 'mukesh', 546497289, 'mumbai', 6975, 'online'),
(4863, 'raju', 546497289, 'london', 3200, 'online');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `Code` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`Id`, `name`, `Code`, `City`, `salary`, `age`) VALUES
(10, 'somay', 123, 'jammu', 56000, 30),
(20, 'shyam', 1585, 'jaipur', 60000, 25),
(30, 'Rj', 21, 'kota', 90000, 55),
(40, 'Rocky', 631, 'patna', 20000, 40),
(50, 'Raju', 1532, 'pushkar', 30000, 60),
(60, 'SkJ', 5485, 'pali', 54630, 42),
(70, 'DsK', 5411, 'Fdh', 10000, 35),
(80, 'ramu', 45, 'anta', 24000, 36),
(90, 'gth', 165, 'sfg', 5500, 22),
(100, 'raju', 546, 'vbfg', 6523, 56);

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `credit` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`Id`, `name`, `credit`, `marks`, `class`, `grade`) VALUES
(10, 'Shubham', 4, 50, 12, 'A'),
(20, 'shyam', 5, 67, 12, 'b'),
(30, 'Rjain', 4, 70, 12, 'b'),
(40, 'Rocky', 7, 56, 12, 'A'),
(50, 'Raju', 7, 76, 12, 'c'),
(60, 'somay', 8, 78, 12, 'b'),
(70, 'dinesh', 6, 65, 12, 'd'),
(80, 'ramu', 6, 56, 12, 'b'),
(90, 'mukesh', 7, 78, 12, 'B'),
(100, 'raju', 8, 90, 12, 'A');

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `Id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile no` int(11) NOT NULL,
  `City` varchar(50) NOT NULL,
  `zip_code` int(11) NOT NULL,
  `store_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`Id`, `name`, `mobile no`, `City`, `zip_code`, `store_Id`) VALUES
(10, 'somay', 256972846, 'jammu', 456456, 213),
(20, 'shyam', 256972846, 'jaipur', 123432, 234),
(30, 'Rjain', 256972846, 'kota', 124789, 976),
(40, 'Rocky', 256972846, 'patna', 253436, 313),
(50, 'Raju', 256972846, 'pushkar', 597697, 759946),
(60, 'SkJ', 256972846, 'pali', 565289, 13469),
(70, 'DsK', 256972846, 'Fdh', 63260, 655),
(80, 'ramu', 256972846, 'anta', 96415, 362),
(90, 'mukesh', 256972846, 'mumbai', 46856, 5412),
(100, 'raju', 256972846, 'london', 469356, 4863);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
