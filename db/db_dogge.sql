-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2024 at 04:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_dogge`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `firsName` varchar(50) DEFAULT NULL,
  `lastName` varchar(50) DEFAULT NULL,
  `contactNumber` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `address` longtext DEFAULT NULL,
  `dateRegister` datetime(6) DEFAULT current_timestamp(6),
  `customerstatus` varchar(50) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `firsName`, `lastName`, `contactNumber`, `email`, `username`, `password`, `address`, `dateRegister`, `customerstatus`) VALUES
(1, 'asdsda', 'sdfdsf', 23232323, 'badeboytulabing0127@gmail.com', 'dsdfsdfs', '77a7512993e38b96d112f85fc9aae927', 'dfsdfsdfs', '2024-04-03 09:44:56.388388', 'Active'),
(2, 'mave', 'diloy', 2147483647, 'user@gmail.com', 'user', '6ad14ba9986e3615423dfca256d04e3f', 'bacoor', '2024-04-03 10:16:38.244240', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
