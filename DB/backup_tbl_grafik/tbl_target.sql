-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 03:41 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_grafikprocar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_target`
--

CREATE TABLE `tbl_target` (
  `WILAYAH` varchar(50) NOT NULL,
  `BranchName` varchar(50) NOT NULL,
  `JAN` varchar(50) NOT NULL,
  `FEB` varchar(50) NOT NULL,
  `MAR` varchar(50) NOT NULL,
  `APR` varchar(50) NOT NULL,
  `MEI` varchar(50) NOT NULL,
  `JUN` varchar(50) NOT NULL,
  `JUL` varchar(50) NOT NULL,
  `AGU` varchar(50) NOT NULL,
  `SEP` varchar(50) NOT NULL,
  `OKT` varchar(50) NOT NULL,
  `NOV` varchar(50) NOT NULL,
  `DES` int(50) NOT NULL,
  `TOTAL` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_target`
--

INSERT INTO `tbl_target` (`WILAYAH`, `BranchName`, `JAN`, `FEB`, `MAR`, `APR`, `MEI`, `JUN`, `JUL`, `AGU`, `SEP`, `OKT`, `NOV`, `DES`, `TOTAL`) VALUES
('1', 'PALEMBANG', '2000', '2000', '2500', '3000', '3000', '2000', '3000', '3500', '3500', '3500', '4000', 4000, 36000),
('1', 'MEDAN', '1000', '1100', '1200', '1300', '1400', '1200', '1300', '1350', '1400', '1500', '1700', 2000, 16450),
('1', 'PEKANBARU', '1600', '1650', '1800', '1800', '1650', '1300', '1300', '2000', '2000', '2000', '2000', 2000, 21100),
('1', 'ACEH', '1800', '1950', '1950', '1950', '1550', '1300', '1200', '1850', '2050', '2100', '2100', 2150, 21950),
('1', 'JAMBI', '1500', '1750', '2000', '2250', '2500', '2000', '2250', '2500', '2500', '2750', '3000', 3000, 28000),
('1', 'PADANG', '750', '1000', '1250', '1500', '1500', '1250', '1250', '1500', '1500', '1500', '1500', 1500, 16000),
('1', 'LAMPUNG', '1000', '1000', '1000', '1250', '1250', '1250', '1500', '1500', '1500', '2000', '2000', 2000, 17250),
('1', 'LHOKSEUMAWE', '1450', '1450', '1800', '1900', '1550', '1350', '1350', '2200', '2200', '2300', '2300', 2300, 22150),
('2', 'KALIMALANG', '4000', '4000', '4000', '4250', '4250', '4250', '4500', '4500', '4500', '5000', '5000', 5000, 53250),
('2', 'PURWAKARTA', '1450', '1450', '1450', '1650', '1650', '1650', '1750', '1750', '1750', '2000', '2000', 2000, 20550),
('2', 'TANGERANG', '500', '750', '750', '1000', '1000', '1000', '1500', '1500', '1500', '1500', '1500', 1500, 14000),
('2', 'SERANG', '2000', '2000', '2000', '2250', '2250', '2000', '2000', '2500', '2500', '3000', '3000', 3000, 28500),
('2', 'BOGOR', '1980', '2550', '2770', '2770', '2770', '2470', '2950', '3050', '3050', '2690', '2690', 2690, 32430),
('2', 'DEPOK', '1000', '1000', '1000', '1250', '1250', '1250', '1500', '1500', '1500', '1500', '1500', 1500, 15750),
('2', 'CIBUBUR', '500', '750', '750', '1000', '1000', '1000', '1000', '1000', '1000', '1000', '1000', 1000, 11000),
('2', 'SUKABUMI', '1000', '1000', '1000', '1250', '1250', '1250', '1500', '1500', '1500', '1500', '1500', 1500, 15750),
('3', 'TEGAL', '1000', '1000', '1150', '1300', '1300', '1100', '1500', '1775', '1825', '1950', '2000', 2100, 18000),
('5', 'YOGYAKARTA', '1500', '1800', '2000', '2250', '2250', '1500', '2000', '2000', '2200', '2250', '2250', 2000, 24000),
('5', 'SOLO', '1500', '3500', '1500', '1500', '1500', '1250', '1500', '1500', '1500', '1500', '1500', 1500, 19750),
('5', 'BALI', '2400', '2250', '1950', '2750', '1800', '2250', '2500', '2750', '2850', '2150', '2850', 2500, 29000),
('6', 'BALIKPAPAN', '1000', '1000', '1000', '1000', '1000', '1000', '1000', '1000', '1000', '1000', '1000', 1000, 12000),
('6', 'SAMARINDA', '2000', '2000', '2000', '2000', '2000', '2000', '2000', '2000', '2000', '2000', '2000', 2000, 24000),
('6', 'KOTAWARINGIN TIMUR', '1500', '1500', '1500', '1500', '1500', '1500', '1500', '1500', '1500', '1500', '1500', 1500, 18000),
('6', 'BANJARMASIN', '2000', '2000', '2000', '2000', '2000', '2000', '2000', '2000', '2000', '2000', '2000', 2000, 24000),
('6', 'PONTIANAK', '1700', '1500', '2000', '2000', '2100', '1800', '1800', '2000', '2200', '2300', '2500', 2500, 24400),
('7', 'PARE-PARE', '1650', '1650', '1650', '1650', '1700', '1700', '2050', '2050', '2100', '2100', '2100', 2100, 22500),
('7', 'PALOPO', '1500', '1500', '1800', '1800', '1500', '1800', '1800', '2000', '2000', '2000', '2550', 2550, 22800),
('7', 'MANADO', '2000', '2000', '2000', '2000', '2000', '1800', '2000', '2000', '2000', '2000', '2000', 1850, 23650),
('7', 'MAKASSAR', '2080', '2080', '2080', '2700', '2900', '2900', '3550', '3550', '3550', '4500', '4500', 4500, 38890),
('7', 'PALU', '1400', '1900', '2200', '2400', '2600', '2700', '2700', '2600', '2200', '2400', '2300', 1600, 27000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
