-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 10:50 AM
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
-- Table structure for table `tbl_sales`
--

CREATE TABLE `tbl_sales` (
  `BranchName` varchar(50) NOT NULL,
  `Bulan` varchar(20) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `TotalPenjualan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sales`
--

INSERT INTO `tbl_sales` (`BranchName`, `Bulan`, `Tahun`, `TotalPenjualan`) VALUES
('ACEH', '01', '2018', '99200000'),
('BALI', '01', '2018', '0'),
('BALIKPAPAN', '01', '2018', '66000000'),
('BANJARMASIN', '01', '2018', '243250000'),
('BATURAJA', '01', '2018', '0'),
('BOGOR', '01', '2018', '1228144000'),
('CIBUBUR', '01', '2018', '4628300000'),
('DEPOK', '01', '2018', '90000000'),
('GORONTALO', '01', '2018', '0'),
('JAMBI', '01', '2018', '444467000'),
('KALIMALANG', '01', '2018', '634000000'),
('KOTAWARINGIN TIMUR', '01', '2018', '0'),
('LAMPUNG', '01', '2018', '0'),
('LHOKSEUMAWE', '01', '2018', '149636000'),
('LUBUK LINGGAU', '01', '2018', '0'),
('MAKASSAR', '01', '2018', '396500000'),
('MAMUJU', '01', '2018', '0'),
('MANADO', '01', '2018', '513944242'),
('MEDAN', '01', '2018', '0'),
('PADANG', '01', '2018', '0'),
('PALANGKARAYA', '01', '2018', '0'),
('PALEMBANG', '01', '2018', '291848004'),
('PALOPO', '01', '2018', '0'),
('PALU', '01', '2018', '317285000'),
('PANGKAL PINANG', '01', '2018', '0'),
('PARE-PARE', '01', '2018', '240775000'),
('PEKANBARU', '01', '2018', '127840713'),
('PONTIANAK', '01', '2018', '87005000'),
('PURWAKARTA', '01', '2018', '122960000'),
('RANTAU PRAPAT', '01', '2018', '0'),
('SAMARINDA', '01', '2018', '389600000'),
('SERANG', '01', '2018', '956000000'),
('SOLO', '01', '2018', '209278000'),
('SUKABUMI', '01', '2018', '128950000'),
('TANGERANG', '01', '2018', '438183000'),
('TANJUNG', '01', '2018', '0'),
('TEGAL', '01', '2018', '73537791'),
('YOGYAKARTA', '01', '2018', '568028000'),
('ACEH', '02', '2018', '216900000'),
('BALI', '02', '2018', '439550000'),
('BALIKPAPAN', '02', '2018', '0'),
('BANJARMASIN', '02', '2018', '375028000'),
('BATURAJA', '02', '2018', '0'),
('BOGOR', '02', '2018', '757921000'),
('CIBUBUR', '02', '2018', '263450000'),
('DEPOK', '02', '2018', '0'),
('GORONTALO', '02', '2018', '0'),
('JAMBI', '02', '2018', '213793000'),
('KALIMALANG', '02', '2018', '1083200594'),
('KOTAWARINGIN TIMUR', '02', '2018', '0'),
('LAMPUNG', '02', '2018', '0'),
('LHOKSEUMAWE', '02', '2018', '247446000'),
('LUBUK LINGGAU', '02', '2018', '0'),
('MAKASSAR', '02', '2018', '314343846'),
('MAMUJU', '02', '2018', '0'),
('MANADO', '02', '2018', '213632000'),
('MEDAN', '02', '2018', '596500000'),
('PADANG', '02', '2018', '573783000'),
('PALANGKARAYA', '02', '2018', '0'),
('PALEMBANG', '02', '2018', '1063200000'),
('PALOPO', '02', '2018', '0'),
('PALU', '02', '2018', '160557000'),
('PANGKAL PINANG', '02', '2018', '0'),
('PARE-PARE', '02', '2018', '1038192000'),
('PEKANBARU', '02', '2018', '728500000'),
('PONTIANAK', '02', '2018', '494500000'),
('PURWAKARTA', '02', '2018', '74000000'),
('RANTAU PRAPAT', '02', '2018', '0'),
('SAMARINDA', '02', '2018', '0'),
('SERANG', '02', '2018', '1316050000'),
('SOLO', '02', '2018', '659004000'),
('SUKABUMI', '02', '2018', '0'),
('TANGERANG', '02', '2018', '56050000'),
('TANJUNG', '02', '2018', '0'),
('TEGAL', '02', '2018', '77000000'),
('YOGYAKARTA', '02', '2018', '218800000'),
('ACEH', '03', '2018', '336903000'),
('BALI', '03', '2018', '257059839'),
('BALIKPAPAN', '03', '2018', '55500000'),
('BANJARMASIN', '03', '2018', '203196301'),
('BATURAJA', '03', '2018', '0'),
('BOGOR', '03', '2018', '1719753000'),
('CIBUBUR', '03', '2018', '467172825'),
('DEPOK', '03', '2018', '0'),
('GORONTALO', '03', '2018', '0'),
('JAMBI', '03', '2018', '70516000'),
('KALIMALANG', '03', '2018', '1462200000'),
('KOTAWARINGIN TIMUR', '03', '2018', '0'),
('LAMPUNG', '03', '2018', '87920000'),
('LHOKSEUMAWE', '03', '2018', '93680000'),
('LUBUK LINGGAU', '03', '2018', '0'),
('MAKASSAR', '03', '2018', '489679896'),
('MAMUJU', '03', '2018', '0'),
('MANADO', '03', '2018', '779126000'),
('MEDAN', '03', '2018', '445500000'),
('PADANG', '03', '2018', '298703000'),
('PALANGKARAYA', '03', '2018', '0'),
('PALEMBANG', '03', '2018', '991800000'),
('PALOPO', '03', '2018', '294753000'),
('PALU', '03', '2018', '0'),
('PANGKAL PINANG', '03', '2018', '0'),
('PARE-PARE', '03', '2018', '382503000'),
('PEKANBARU', '03', '2018', '338500000'),
('PONTIANAK', '03', '2018', '0'),
('PURWAKARTA', '03', '2018', '317700000'),
('RANTAU PRAPAT', '03', '2018', '0'),
('SAMARINDA', '03', '2018', '349100000'),
('SERANG', '03', '2018', '908200000'),
('SOLO', '03', '2018', '111000000'),
('SUKABUMI', '03', '2018', '421000000'),
('TANGERANG', '03', '2018', '85000000'),
('TANJUNG', '03', '2018', '0'),
('TEGAL', '03', '2018', '137000000'),
('YOGYAKARTA', '03', '2018', '45300000'),
('ACEH', '04', '2018', '171056000'),
('BALI', '04', '2018', '472700000'),
('BALIKPAPAN', '04', '2018', '250000000'),
('BANJARMASIN', '04', '2018', '420776035'),
('BATURAJA', '04', '2018', '0'),
('BOGOR', '04', '2018', '1102275000'),
('CIBUBUR', '04', '2018', '422719000'),
('DEPOK', '04', '2018', '0'),
('GORONTALO', '04', '2018', '0'),
('JAMBI', '04', '2018', '477809000'),
('KALIMALANG', '04', '2018', '984394000'),
('KOTAWARINGIN TIMUR', '04', '2018', '0'),
('LAMPUNG', '04', '2018', '362425000'),
('LHOKSEUMAWE', '04', '2018', '0'),
('LUBUK LINGGAU', '04', '2018', '0'),
('MAKASSAR', '04', '2018', '844826000'),
('MAMUJU', '04', '2018', '0'),
('MANADO', '04', '2018', '383470256'),
('MEDAN', '04', '2018', '767000000'),
('PADANG', '04', '2018', '424072000'),
('PALANGKARAYA', '04', '2018', '0'),
('PALEMBANG', '04', '2018', '2105711849'),
('PALOPO', '04', '2018', '291436000'),
('PALU', '04', '2018', '505920787'),
('PANGKAL PINANG', '04', '2018', '0'),
('PARE-PARE', '04', '2018', '429436000'),
('PEKANBARU', '04', '2018', '565000000'),
('PONTIANAK', '04', '2018', '475000000'),
('PURWAKARTA', '04', '2018', '141500000'),
('RANTAU PRAPAT', '04', '2018', '0'),
('SAMARINDA', '04', '2018', '288070000'),
('SERANG', '04', '2018', '1380200113'),
('SOLO', '04', '2018', '276750000'),
('SUKABUMI', '04', '2018', '205000000'),
('TANGERANG', '04', '2018', '238796000'),
('TANJUNG', '04', '2018', '0'),
('TEGAL', '04', '2018', '89000000'),
('YOGYAKARTA', '04', '2018', '231300000'),
('ACEH', '05', '2018', '361150000'),
('BALI', '05', '2018', '778500000'),
('BALIKPAPAN', '05', '2018', '0'),
('BANJARMASIN', '05', '2018', '264850000'),
('BATURAJA', '05', '2018', '0'),
('BOGOR', '05', '2018', '1503650700'),
('CIBUBUR', '05', '2018', '354378000'),
('DEPOK', '05', '2018', '0'),
('GORONTALO', '05', '2018', '0'),
('JAMBI', '05', '2018', '984408000'),
('KALIMALANG', '05', '2018', '941725000'),
('KOTAWARINGIN TIMUR', '05', '2018', '121750000'),
('LAMPUNG', '05', '2018', '112140000'),
('LHOKSEUMAWE', '05', '2018', '632480000'),
('LUBUK LINGGAU', '05', '2018', '0'),
('MAKASSAR', '05', '2018', '602396770'),
('MAMUJU', '05', '2018', '0'),
('MANADO', '05', '2018', '351750000'),
('MEDAN', '05', '2018', '1028536345'),
('PADANG', '05', '2018', '640534000'),
('PALANGKARAYA', '05', '2018', '0'),
('PALEMBANG', '05', '2018', '1674800000'),
('PALOPO', '05', '2018', '906820000'),
('PALU', '05', '2018', '300558553'),
('PANGKAL PINANG', '05', '2018', '0'),
('PARE-PARE', '05', '2018', '427179000'),
('PEKANBARU', '05', '2018', '649739184'),
('PONTIANAK', '05', '2018', '515000000'),
('PURWAKARTA', '05', '2018', '627700000'),
('RANTAU PRAPAT', '05', '2018', '0'),
('SAMARINDA', '05', '2018', '879800000'),
('SERANG', '05', '2018', '1024300000'),
('SOLO', '05', '2018', '492222000'),
('SUKABUMI', '05', '2018', '240000000'),
('TANGERANG', '05', '2018', '166483000'),
('TANJUNG', '05', '2018', '0'),
('TEGAL', '05', '2018', '650650000'),
('YOGYAKARTA', '05', '2018', '665543500'),
('ACEH', '06', '2018', '626730000'),
('BALI', '06', '2018', '408500000'),
('BALIKPAPAN', '06', '2018', '0'),
('BANJARMASIN', '06', '2018', '557742487'),
('BATURAJA', '06', '2018', '0'),
('BOGOR', '06', '2018', '1719102000'),
('CIBUBUR', '06', '2018', '319680000'),
('DEPOK', '06', '2018', '0'),
('GORONTALO', '06', '2018', '0'),
('JAMBI', '06', '2018', '817136000'),
('KALIMALANG', '06', '2018', '227500000'),
('KOTAWARINGIN TIMUR', '06', '2018', '218400000'),
('LAMPUNG', '06', '2018', '0'),
('LHOKSEUMAWE', '06', '2018', '219460000'),
('LUBUK LINGGAU', '06', '2018', '0'),
('MAKASSAR', '06', '2018', '364587000'),
('MAMUJU', '06', '2018', '0'),
('MANADO', '06', '2018', '343175000'),
('MEDAN', '06', '2018', '505100000'),
('PADANG', '06', '2018', '99495000'),
('PALANGKARAYA', '06', '2018', '0'),
('PALEMBANG', '06', '2018', '1536600000'),
('PALOPO', '06', '2018', '233770000'),
('PALU', '06', '2018', '560040000'),
('PANGKAL PINANG', '06', '2018', '0'),
('PARE-PARE', '06', '2018', '684620000'),
('PEKANBARU', '06', '2018', '227000000'),
('PONTIANAK', '06', '2018', '293750000'),
('PURWAKARTA', '06', '2018', '326750000'),
('RANTAU PRAPAT', '06', '2018', '0'),
('SAMARINDA', '06', '2018', '626600000'),
('SERANG', '06', '2018', '728400000'),
('SOLO', '06', '2018', '321152000'),
('SUKABUMI', '06', '2018', '98656313'),
('TANGERANG', '06', '2018', '287770000'),
('TANJUNG', '06', '2018', '0'),
('TEGAL', '06', '2018', '484500000'),
('YOGYAKARTA', '06', '2018', '181400000'),
('ACEH', '07', '2018', '1088280000'),
('BALI', '07', '2018', '1207981000'),
('BALIKPAPAN', '07', '2018', '0'),
('BANJARMASIN', '07', '2018', '802070708'),
('BATURAJA', '07', '2018', '0'),
('BOGOR', '07', '2018', '1506207000'),
('CIBUBUR', '07', '2018', '525772000'),
('DEPOK', '07', '2018', '0'),
('GORONTALO', '07', '2018', '0'),
('JAMBI', '07', '2018', '1048651000'),
('KALIMALANG', '07', '2018', '1082100000'),
('KOTAWARINGIN TIMUR', '07', '2018', '662140000'),
('LAMPUNG', '07', '2018', '304455000'),
('LHOKSEUMAWE', '07', '2018', '470052000'),
('LUBUK LINGGAU', '07', '2018', '0'),
('MAKASSAR', '07', '2018', '556831000'),
('MAMUJU', '07', '2018', '0'),
('MANADO', '07', '2018', '620493000'),
('MEDAN', '07', '2018', '1239300000'),
('PADANG', '07', '2018', '417527000'),
('PALANGKARAYA', '07', '2018', '0'),
('PALEMBANG', '07', '2018', '2819470000'),
('PALOPO', '07', '2018', '748657000'),
('PALU', '07', '2018', '690248000'),
('PANGKAL PINANG', '07', '2018', '0'),
('PARE-PARE', '07', '2018', '653257000'),
('PEKANBARU', '07', '2018', '1361000000'),
('PONTIANAK', '07', '2018', '450094000'),
('PURWAKARTA', '07', '2018', '817450000'),
('RANTAU PRAPAT', '07', '2018', '0'),
('SAMARINDA', '07', '2018', '1100200000'),
('SERANG', '07', '2018', '2123800000'),
('SOLO', '07', '2018', '1190750000'),
('SUKABUMI', '07', '2018', '272153392'),
('TANGERANG', '07', '2018', '60000000'),
('TANJUNG', '07', '2018', '0'),
('TEGAL', '07', '2018', '529300000'),
('YOGYAKARTA', '07', '2018', '664650000'),
('ACEH', '08', '2018', '494780000'),
('BALI', '08', '2018', '1769250000'),
('BALIKPAPAN', '08', '2018', '0'),
('BANJARMASIN', '08', '2018', '3371000000'),
('BATURAJA', '08', '2018', '0'),
('BOGOR', '08', '2018', '1095600000'),
('CIBUBUR', '08', '2018', '368050000'),
('DEPOK', '08', '2018', '0'),
('GORONTALO', '08', '2018', '0'),
('JAMBI', '08', '2018', '1271615000'),
('KALIMALANG', '08', '2018', '1535095000'),
('KOTAWARINGIN TIMUR', '08', '2018', '587800000'),
('LAMPUNG', '08', '2018', '156529000'),
('LHOKSEUMAWE', '08', '2018', '1128178000'),
('LUBUK LINGGAU', '08', '2018', '0'),
('MAKASSAR', '08', '2018', '425757000'),
('MAMUJU', '08', '2018', '0'),
('MANADO', '08', '2018', '529741000'),
('MEDAN', '08', '2018', '593150000'),
('PADANG', '08', '2018', '911036000'),
('PALANGKARAYA', '08', '2018', '0'),
('PALEMBANG', '08', '2018', '2866918978'),
('PALOPO', '08', '2018', '778724000'),
('PALU', '08', '2018', '1276075000'),
('PANGKAL PINANG', '08', '2018', '0'),
('PARE-PARE', '08', '2018', '1163879000'),
('PEKANBARU', '08', '2018', '1778000000'),
('PONTIANAK', '08', '2018', '742000000'),
('PURWAKARTA', '08', '2018', '541300000'),
('RANTAU PRAPAT', '08', '2018', '0'),
('SAMARINDA', '08', '2018', '1364850000'),
('SERANG', '08', '2018', '2184850000'),
('SOLO', '08', '2018', '802500000'),
('SUKABUMI', '08', '2018', '213000000'),
('TANGERANG', '08', '2018', '311400000'),
('TANJUNG', '08', '2018', '0'),
('TEGAL', '08', '2018', '623450000'),
('YOGYAKARTA', '08', '2018', '1205150000'),
('ACEH', '09', '2018', '567450000'),
('BALI', '09', '2018', '1857000000'),
('BALIKPAPAN', '09', '2018', '0'),
('BANJARMASIN', '09', '2018', '1499950000'),
('BATURAJA', '09', '2018', '0'),
('BOGOR', '09', '2018', '1164332000'),
('CIBUBUR', '09', '2018', '765500000'),
('DEPOK', '09', '2018', '0'),
('GORONTALO', '09', '2018', '0'),
('JAMBI', '09', '2018', '1176138000'),
('KALIMALANG', '09', '2018', '1533100000'),
('KOTAWARINGIN TIMUR', '09', '2018', '924400000'),
('LAMPUNG', '09', '2018', '476367000'),
('LHOKSEUMAWE', '09', '2018', '477285000'),
('LUBUK LINGGAU', '09', '2018', '0'),
('MAKASSAR', '09', '2018', '865038000'),
('MAMUJU', '09', '2018', '0'),
('MANADO', '09', '2018', '926492000'),
('MEDAN', '09', '2018', '1052349904'),
('PADANG', '09', '2018', '732739000'),
('PALANGKARAYA', '09', '2018', '0'),
('PALEMBANG', '09', '2018', '3036041688'),
('PALOPO', '09', '2018', '580574000'),
('PALU', '09', '2018', '877529000'),
('PANGKAL PINANG', '09', '2018', '0'),
('PARE-PARE', '09', '2018', '796583000'),
('PEKANBARU', '09', '2018', '1289700000'),
('PONTIANAK', '09', '2018', '617500000'),
('PURWAKARTA', '09', '2018', '557050000'),
('RANTAU PRAPAT', '09', '2018', '0'),
('SAMARINDA', '09', '2018', '1038400000'),
('SERANG', '09', '2018', '1588050000'),
('SOLO', '09', '2018', '643538000'),
('SUKABUMI', '09', '2018', '273330000'),
('TANGERANG', '09', '2018', '306440000'),
('TANJUNG', '09', '2018', '0'),
('TEGAL', '09', '2018', '726000000'),
('YOGYAKARTA', '09', '2018', '380450000'),
('ACEH', '10', '2018', '316185000'),
('BALI', '10', '2018', '1372500000'),
('BALIKPAPAN', '10', '2018', '0'),
('BANJARMASIN', '10', '2018', '1722450000'),
('BATURAJA', '10', '2018', '0'),
('BOGOR', '10', '2018', '1727337000'),
('CIBUBUR', '10', '2018', '426950000'),
('DEPOK', '10', '2018', '0'),
('GORONTALO', '10', '2018', '0'),
('JAMBI', '10', '2018', '1519274000'),
('KALIMALANG', '10', '2018', '1204225000'),
('KOTAWARINGIN TIMUR', '10', '2018', '236100000'),
('LAMPUNG', '10', '2018', '621750000'),
('LHOKSEUMAWE', '10', '2018', '761452000'),
('LUBUK LINGGAU', '10', '2018', '0'),
('MAKASSAR', '10', '2018', '689400000'),
('MAMUJU', '10', '2018', '0'),
('MANADO', '10', '2018', '1004244000'),
('MEDAN', '10', '2018', '787200000'),
('PADANG', '10', '2018', '633560000'),
('PALANGKARAYA', '10', '2018', '0'),
('PALEMBANG', '10', '2018', '1866992508'),
('PALOPO', '10', '2018', '452487000'),
('PALU', '10', '2018', '0'),
('PANGKAL PINANG', '10', '2018', '0'),
('PARE-PARE', '10', '2018', '745978000'),
('PEKANBARU', '10', '2018', '1644500000'),
('PONTIANAK', '10', '2018', '1626000000'),
('PURWAKARTA', '10', '2018', '613700000'),
('RANTAU PRAPAT', '10', '2018', '0'),
('SAMARINDA', '10', '2018', '659300000'),
('SERANG', '10', '2018', '1527650000'),
('SOLO', '10', '2018', '493190000'),
('SUKABUMI', '10', '2018', '337200000'),
('TANGERANG', '10', '2018', '635500000'),
('TANJUNG', '10', '2018', '0'),
('TEGAL', '10', '2018', '840800000'),
('YOGYAKARTA', '10', '2018', '763750000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;