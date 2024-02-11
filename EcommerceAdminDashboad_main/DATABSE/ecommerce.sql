-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 11, 2024 at 04:44 PM
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
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`Email`, `Pass`) VALUES
('admin', '1234'),
('Admin2', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `managers_tb`
--

CREATE TABLE `managers_tb` (
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `managers_tb`
--

INSERT INTO `managers_tb` (`Email`, `Pass`) VALUES
('manager', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `order_tb`
--

CREATE TABLE `order_tb` (
  `ProdID` varchar(50) NOT NULL,
  `OrdQuant` varchar(50) NOT NULL,
  `CustFN` varchar(50) NOT NULL,
  `CustLN` varchar(50) NOT NULL,
  `CONTACT` varchar(13) NOT NULL,
  `Payment` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Prov` varchar(50) NOT NULL,
  `City` varchar(50) NOT NULL,
  `BRGY` varchar(50) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `Ordstat` varchar(50) DEFAULT NULL,
  `Ordtrac` varchar(50) DEFAULT NULL,
  `Paystat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_tb`
--

INSERT INTO `order_tb` (`ProdID`, `OrdQuant`, `CustFN`, `CustLN`, `CONTACT`, `Payment`, `Email`, `Prov`, `City`, `BRGY`, `Address`, `Ordstat`, `Ordtrac`, `Paystat`) VALUES
('12ST', '2', 'John Cedric', 'Aloba', '09085432112', '1', 'aloba@gmail.com', 'Laguna', 'Binan', 'Santo Tomas', 'Olivarez', 'Pending', 'Warehouse', 'Not Paid');

-- --------------------------------------------------------

--
-- Table structure for table `prod_tb`
--

CREATE TABLE `prod_tb` (
  `IMG` blob NOT NULL,
  `ID` varchar(50) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `BRAND` varchar(50) NOT NULL,
  `STOCK` varchar(50) NOT NULL,
  `PRICE` varchar(50) NOT NULL,
  `CATEGORY` varchar(50) NOT NULL,
  `DESCR` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prod_tb`
--

INSERT INTO `prod_tb` (`IMG`, `ID`, `NAME`, `BRAND`, `STOCK`, `PRICE`, `CATEGORY`, `DESCR`) VALUES
(0x696d675f322e6a7067, 'EAD02P', 'Adidas', 'Women t-shirt', '200', '1,260', 'D', 'Description');

-- --------------------------------------------------------

--
-- Table structure for table `sadmin_tb`
--

CREATE TABLE `sadmin_tb` (
  `Email` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sadmin_tb`
--

INSERT INTO `sadmin_tb` (`Email`, `Pass`) VALUES
('ADMIN', 'ADMIN');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
