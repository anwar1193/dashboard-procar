-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 10:52 AM
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
-- Table structure for table `tbl_sales_merk`
--

CREATE TABLE `tbl_sales_merk` (
  `BranchName` varchar(30) NOT NULL,
  `MerkName` varchar(30) NOT NULL,
  `Bulan` varchar(10) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `TotalPenjualan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sales_merk`
--

INSERT INTO `tbl_sales_merk` (`BranchName`, `MerkName`, `Bulan`, `Tahun`, `TotalPenjualan`) VALUES
('BOGOR', 'DAIHATSU', '01', '2018', '117000000'),
('DEPOK', 'DAIHATSU', '01', '2018', '90000000'),
('KALIMALANG', 'DAIHATSU', '01', '2018', '139500000'),
('MANADO', 'DAIHATSU', '01', '2018', '330412000'),
('PARE-PARE', 'DAIHATSU', '01', '2018', '144200000'),
('PURWAKARTA', 'DAIHATSU', '01', '2018', '50000000'),
('SERANG', 'DAIHATSU', '01', '2018', '215850000'),
('TANGERANG', 'DAIHATSU', '01', '2018', '167942000'),
('TANGERANG', 'FORD', '01', '2018', '20000000'),
('BANJARMASIN', 'HINO', '01', '2018', '124600000'),
('PARE-PARE', 'HINO', '01', '2018', '96575000'),
('MAKASSAR', 'ISUZU', '01', '2018', '256500000'),
('PALEMBANG', 'ISUZU', '01', '2018', '108570316'),
('SOLO', 'ISUZU', '01', '2018', '94278000'),
('ACEH', 'MITSUBISHI', '01', '2018', '99200000'),
('BALIKPAPAN', 'MITSUBISHI', '01', '2018', '66000000'),
('BANJARMASIN', 'MITSUBISHI', '01', '2018', '118650000'),
('JAMBI', 'MITSUBISHI', '01', '2018', '444467000'),
('LHOKSEUMAWE', 'MITSUBISHI', '01', '2018', '86900000'),
('MAKASSAR', 'MITSUBISHI', '01', '2018', '140000000'),
('PALEMBANG', 'MITSUBISHI', '01', '2018', '109800000'),
('PALU', 'MITSUBISHI', '01', '2018', '156728000'),
('PEKANBARU', 'MITSUBISHI', '01', '2018', '127840713'),
('SAMARINDA', 'MITSUBISHI', '01', '2018', '326000000'),
('SERANG', 'MITSUBISHI', '01', '2018', '317750000'),
('SOLO', 'MITSUBISHI', '01', '2018', '115000000'),
('SUKABUMI', 'MITSUBISHI', '01', '2018', '37000000'),
('TEGAL', 'MITSUBISHI', '01', '2018', '73537791'),
('YOGYAKARTA', 'MITSUBISHI', '01', '2018', '429378000'),
('CIBUBUR', 'SERTIFIKAT TANAH&BANGUNAN', '01', '2018', '4450000000'),
('BOGOR', 'SUZUKI', '01', '2018', '1111144000'),
('CIBUBUR', 'SUZUKI', '01', '2018', '113300000'),
('KALIMALANG', 'SUZUKI', '01', '2018', '494500000'),
('LHOKSEUMAWE', 'SUZUKI', '01', '2018', '30906000'),
('MANADO', 'SUZUKI', '01', '2018', '183532242'),
('PALEMBANG', 'SUZUKI', '01', '2018', '73477688'),
('PURWAKARTA', 'SUZUKI', '01', '2018', '72960000'),
('SAMARINDA', 'SUZUKI', '01', '2018', '63600000'),
('SERANG', 'SUZUKI', '01', '2018', '422400000'),
('SUKABUMI', 'SUZUKI', '01', '2018', '91950000'),
('TANGERANG', 'SUZUKI', '01', '2018', '39511000'),
('CIBUBUR', 'TOYOTA', '01', '2018', '65000000'),
('LHOKSEUMAWE', 'TOYOTA', '01', '2018', '31830000'),
('PALU', 'TOYOTA', '01', '2018', '160557000'),
('PONTIANAK', 'TOYOTA', '01', '2018', '87005000'),
('TANGERANG', 'TOYOTA', '01', '2018', '210730000'),
('YOGYAKARTA', 'TOYOTA', '01', '2018', '138650000'),
('CIBUBUR', 'DAIHATSU', '02', '2018', '85000000'),
('KALIMALANG', 'DAIHATSU', '02', '2018', '229026000'),
('MANADO', 'DAIHATSU', '02', '2018', '80000000'),
('PARE-PARE', 'DAIHATSU', '02', '2018', '72115000'),
('SERANG', 'DAIHATSU', '02', '2018', '240000000'),
('TANGERANG', 'DAIHATSU', '02', '2018', '56050000'),
('BALI', 'HINO', '02', '2018', '99550000'),
('MAKASSAR', 'HINO', '02', '2018', '146343846'),
('PADANG', 'HINO', '02', '2018', '305782000'),
('PALEMBANG', 'HINO', '02', '2018', '60800000'),
('PARE-PARE', 'HINO', '02', '2018', '327640000'),
('PEKANBARU', 'HINO', '02', '2018', '170500000'),
('BANJARMASIN', 'ISUZU', '02', '2018', '97700000'),
('KALIMALANG', 'ISUZU', '02', '2018', '48310000'),
('SOLO', 'ISUZU', '02', '2018', '316004000'),
('ACEH', 'MITSUBISHI', '02', '2018', '115200000'),
('BALI', 'MITSUBISHI', '02', '2018', '340000000'),
('BANJARMASIN', 'MITSUBISHI', '02', '2018', '277328000'),
('JAMBI', 'MITSUBISHI', '02', '2018', '162236000'),
('LHOKSEUMAWE', 'MITSUBISHI', '02', '2018', '191070000'),
('MAKASSAR', 'MITSUBISHI', '02', '2018', '168000000'),
('MEDAN', 'MITSUBISHI', '02', '2018', '481500000'),
('PADANG', 'MITSUBISHI', '02', '2018', '222157000'),
('PALEMBANG', 'MITSUBISHI', '02', '2018', '512000000'),
('PEKANBARU', 'MITSUBISHI', '02', '2018', '357000000'),
('PONTIANAK', 'MITSUBISHI', '02', '2018', '494500000'),
('SERANG', 'MITSUBISHI', '02', '2018', '378650000'),
('TEGAL', 'MITSUBISHI', '02', '2018', '43000000'),
('YOGYAKARTA', 'MITSUBISHI', '02', '2018', '218800000'),
('ACEH', 'SUZUKI', '02', '2018', '46600000'),
('BOGOR', 'SUZUKI', '02', '2018', '757921000'),
('CIBUBUR', 'SUZUKI', '02', '2018', '111150000'),
('JAMBI', 'SUZUKI', '02', '2018', '51557000'),
('KALIMALANG', 'SUZUKI', '02', '2018', '387629000'),
('PALEMBANG', 'SUZUKI', '02', '2018', '109800000'),
('PARE-PARE', 'SUZUKI', '02', '2018', '46479000'),
('PURWAKARTA', 'SUZUKI', '02', '2018', '74000000'),
('SERANG', 'SUZUKI', '02', '2018', '697400000'),
('TEGAL', 'SUZUKI', '02', '2018', '34000000'),
('ACEH', 'TOYOTA', '02', '2018', '55100000'),
('CIBUBUR', 'TOYOTA', '02', '2018', '67300000'),
('KALIMALANG', 'TOYOTA', '02', '2018', '418235594'),
('LHOKSEUMAWE', 'TOYOTA', '02', '2018', '56376000'),
('MANADO', 'TOYOTA', '02', '2018', '133632000'),
('MEDAN', 'TOYOTA', '02', '2018', '115000000'),
('PADANG', 'TOYOTA', '02', '2018', '45844000'),
('PALEMBANG', 'TOYOTA', '02', '2018', '380600000'),
('PALU', 'TOYOTA', '02', '2018', '160557000'),
('PARE-PARE', 'TOYOTA', '02', '2018', '591958000'),
('PEKANBARU', 'TOYOTA', '02', '2018', '201000000'),
('SOLO', 'TOYOTA', '02', '2018', '343000000'),
('BOGOR', 'DAIHATSU', '03', '2018', '344975000'),
('CIBUBUR', 'DAIHATSU', '03', '2018', '247582160'),
('KALIMALANG', 'DAIHATSU', '03', '2018', '431700000'),
('MANADO', 'DAIHATSU', '03', '2018', '570917000'),
('PURWAKARTA', 'DAIHATSU', '03', '2018', '100000000'),
('SAMARINDA', 'DAIHATSU', '03', '2018', '58500000'),
('SERANG', 'DAIHATSU', '03', '2018', '383650000'),
('TANGERANG', 'DAIHATSU', '03', '2018', '85000000'),
('PADANG', 'HINO', '03', '2018', '298703000'),
('PALEMBANG', 'HINO', '03', '2018', '534400000'),
('BALI', 'ISUZU', '03', '2018', '157059839'),
('CIBUBUR', 'ISUZU', '03', '2018', '42070665'),
('KALIMALANG', 'ISUZU', '03', '2018', '20000000'),
('ACEH', 'MITSUBISHI', '03', '2018', '111530000'),
('BALIKPAPAN', 'MITSUBISHI', '03', '2018', '55500000'),
('BANJARMASIN', 'MITSUBISHI', '03', '2018', '203196301'),
('LAMPUNG', 'MITSUBISHI', '03', '2018', '87920000'),
('MAKASSAR', 'MITSUBISHI', '03', '2018', '249658000'),
('MEDAN', 'MITSUBISHI', '03', '2018', '331500000'),
('PALEMBANG', 'MITSUBISHI', '03', '2018', '358400000'),
('PALOPO', 'MITSUBISHI', '03', '2018', '198810000'),
('PEKANBARU', 'MITSUBISHI', '03', '2018', '338500000'),
('SAMARINDA', 'MITSUBISHI', '03', '2018', '175000000'),
('SERANG', 'MITSUBISHI', '03', '2018', '40700000'),
('SUKABUMI', 'MITSUBISHI', '03', '2018', '213000000'),
('TEGAL', 'MITSUBISHI', '03', '2018', '90000000'),
('YOGYAKARTA', 'MITSUBISHI', '03', '2018', '45300000'),
('BALI', 'NISSAN', '03', '2018', '100000000'),
('BOGOR', 'SUZUKI', '03', '2018', '1374778000'),
('CIBUBUR', 'SUZUKI', '03', '2018', '177520000'),
('KALIMALANG', 'SUZUKI', '03', '2018', '1010500000'),
('MANADO', 'SUZUKI', '03', '2018', '208209000'),
('PARE-PARE', 'SUZUKI', '03', '2018', '80000000'),
('PURWAKARTA', 'SUZUKI', '03', '2018', '217700000'),
('SERANG', 'SUZUKI', '03', '2018', '483850000'),
('SUKABUMI', 'SUZUKI', '03', '2018', '116000000'),
('TEGAL', 'SUZUKI', '03', '2018', '47000000'),
('ACEH', 'TOYOTA', '03', '2018', '225373000'),
('JAMBI', 'TOYOTA', '03', '2018', '70516000'),
('LHOKSEUMAWE', 'TOYOTA', '03', '2018', '93680000'),
('MAKASSAR', 'TOYOTA', '03', '2018', '240021896'),
('MEDAN', 'TOYOTA', '03', '2018', '114000000'),
('PALEMBANG', 'TOYOTA', '03', '2018', '99000000'),
('PALOPO', 'TOYOTA', '03', '2018', '95943000'),
('PARE-PARE', 'TOYOTA', '03', '2018', '302503000'),
('SAMARINDA', 'TOYOTA', '03', '2018', '115600000'),
('SOLO', 'TOYOTA', '03', '2018', '111000000'),
('SUKABUMI', 'TOYOTA', '03', '2018', '92000000'),
('BALIKPAPAN', 'DAIHATSU', '04', '2018', '42000000'),
('BOGOR', 'DAIHATSU', '04', '2018', '221600000'),
('CIBUBUR', 'DAIHATSU', '04', '2018', '68985000'),
('KALIMALANG', 'DAIHATSU', '04', '2018', '158382000'),
('MAKASSAR', 'DAIHATSU', '04', '2018', '73369000'),
('MANADO', 'DAIHATSU', '04', '2018', '144285256'),
('PONTIANAK', 'DAIHATSU', '04', '2018', '56000000'),
('SERANG', 'DAIHATSU', '04', '2018', '474550000'),
('TANGERANG', 'DAIHATSU', '04', '2018', '82595000'),
('BANJARMASIN', 'HINO', '04', '2018', '114000000'),
('MAKASSAR', 'HINO', '04', '2018', '149000000'),
('PALEMBANG', 'HINO', '04', '2018', '167500000'),
('PALU', 'HINO', '04', '2018', '154241349'),
('PARE-PARE', 'HINO', '04', '2018', '269743000'),
('SOLO', 'HINO', '04', '2018', '45250000'),
('YOGYAKARTA', 'HINO', '04', '2018', '146500000'),
('PALOPO', 'HONDA', '04', '2018', '69758000'),
('ACEH', 'ISUZU', '04', '2018', '38056000'),
('BALI', 'ISUZU', '04', '2018', '101000000'),
('CIBUBUR', 'ISUZU', '04', '2018', '60271000'),
('KALIMALANG', 'ISUZU', '04', '2018', '108611000'),
('MANADO', 'ISUZU', '04', '2018', '70438000'),
('MEDAN', 'ISUZU', '04', '2018', '195500000'),
('SOLO', 'ISUZU', '04', '2018', '115500000'),
('TANGERANG', 'ISUZU', '04', '2018', '101201000'),
('ACEH', 'MITSUBISHI', '04', '2018', '133000000'),
('BALIKPAPAN', 'MITSUBISHI', '04', '2018', '78000000'),
('BANJARMASIN', 'MITSUBISHI', '04', '2018', '236967062'),
('JAMBI', 'MITSUBISHI', '04', '2018', '477809000'),
('LAMPUNG', 'MITSUBISHI', '04', '2018', '362425000'),
('MAKASSAR', 'MITSUBISHI', '04', '2018', '498689000'),
('MANADO', 'MITSUBISHI', '04', '2018', '92713000'),
('MEDAN', 'MITSUBISHI', '04', '2018', '571500000'),
('PADANG', 'MITSUBISHI', '04', '2018', '400289000'),
('PALEMBANG', 'MITSUBISHI', '04', '2018', '1480950000'),
('PALU', 'MITSUBISHI', '04', '2018', '121297041'),
('PEKANBARU', 'MITSUBISHI', '04', '2018', '565000000'),
('PONTIANAK', 'MITSUBISHI', '04', '2018', '419000000'),
('PURWAKARTA', 'MITSUBISHI', '04', '2018', '45500000'),
('SAMARINDA', 'MITSUBISHI', '04', '2018', '288070000'),
('SERANG', 'MITSUBISHI', '04', '2018', '291300000'),
('SUKABUMI', 'MITSUBISHI', '04', '2018', '145000000'),
('TANGERANG', 'MITSUBISHI', '04', '2018', '55000000'),
('TEGAL', 'MITSUBISHI', '04', '2018', '54000000'),
('YOGYAKARTA', 'MITSUBISHI', '04', '2018', '21500000'),
('BOGOR', 'SUZUKI', '04', '2018', '880675000'),
('CIBUBUR', 'SUZUKI', '04', '2018', '198963000'),
('KALIMALANG', 'SUZUKI', '04', '2018', '717401000'),
('PALEMBANG', 'SUZUKI', '04', '2018', '353761849'),
('PALOPO', 'SUZUKI', '04', '2018', '74873000'),
('PURWAKARTA', 'SUZUKI', '04', '2018', '96000000'),
('SERANG', 'SUZUKI', '04', '2018', '614350113'),
('SUKABUMI', 'SUZUKI', '04', '2018', '60000000'),
('TEGAL', 'SUZUKI', '04', '2018', '35000000'),
('YOGYAKARTA', 'SUZUKI', '04', '2018', '63300000'),
('BALI', 'TOYOTA', '04', '2018', '371700000'),
('BALIKPAPAN', 'TOYOTA', '04', '2018', '130000000'),
('BANJARMASIN', 'TOYOTA', '04', '2018', '69808973'),
('CIBUBUR', 'TOYOTA', '04', '2018', '94500000'),
('MAKASSAR', 'TOYOTA', '04', '2018', '123768000'),
('MANADO', 'TOYOTA', '04', '2018', '76034000'),
('PADANG', 'TOYOTA', '04', '2018', '23783000'),
('PALEMBANG', 'TOYOTA', '04', '2018', '103500000'),
('PALOPO', 'TOYOTA', '04', '2018', '146805000'),
('PALU', 'TOYOTA', '04', '2018', '230382397'),
('PARE-PARE', 'TOYOTA', '04', '2018', '159693000'),
('SOLO', 'TOYOTA', '04', '2018', '116000000'),
('BOGOR', 'DAIHATSU', '05', '2018', '49500000'),
('CIBUBUR', 'DAIHATSU', '05', '2018', '167408000'),
('KALIMALANG', 'DAIHATSU', '05', '2018', '38000000'),
('LHOKSEUMAWE', 'DAIHATSU', '05', '2018', '31586000'),
('MANADO', 'DAIHATSU', '05', '2018', '206922000'),
('PALOPO', 'DAIHATSU', '05', '2018', '77500000'),
('PARE-PARE', 'DAIHATSU', '05', '2018', '130800000'),
('SERANG', 'DAIHATSU', '05', '2018', '480050000'),
('TANGERANG', 'DAIHATSU', '05', '2018', '75000000'),
('YOGYAKARTA', 'DAIHATSU', '05', '2018', '58343500'),
('BALI', 'HINO', '05', '2018', '659000000'),
('JAMBI', 'HINO', '05', '2018', '277384000'),
('MAKASSAR', 'HINO', '05', '2018', '120620000'),
('MEDAN', 'HINO', '05', '2018', '372500000'),
('PADANG', 'HINO', '05', '2018', '324174000'),
('PALEMBANG', 'HINO', '05', '2018', '325000000'),
('PALOPO', 'HINO', '05', '2018', '130300000'),
('YOGYAKARTA', 'HINO', '05', '2018', '233850000'),
('ACEH', 'HONDA', '05', '2018', '100200000'),
('SUKABUMI', 'HONDA', '05', '2018', '112000000'),
('ACEH', 'ISUZU', '05', '2018', '82600000'),
('BANJARMASIN', 'ISUZU', '05', '2018', '111100000'),
('MAKASSAR', 'ISUZU', '05', '2018', '230206770'),
('SOLO', 'ISUZU', '05', '2018', '212300000'),
('TANGERANG', 'ISUZU', '05', '2018', '91483000'),
('ACEH', 'MITSUBISHI', '05', '2018', '178350000'),
('BANJARMASIN', 'MITSUBISHI', '05', '2018', '153750000'),
('BOGOR', 'MITSUBISHI', '05', '2018', '70000000'),
('CIBUBUR', 'MITSUBISHI', '05', '2018', '71750000'),
('JAMBI', 'MITSUBISHI', '05', '2018', '513964000'),
('KOTAWARINGIN TIMUR', 'MITSUBISHI', '05', '2018', '121750000'),
('LHOKSEUMAWE', 'MITSUBISHI', '05', '2018', '425294000'),
('MAKASSAR', 'MITSUBISHI', '05', '2018', '173360000'),
('MEDAN', 'MITSUBISHI', '05', '2018', '364236345'),
('PADANG', 'MITSUBISHI', '05', '2018', '108566000'),
('PALEMBANG', 'MITSUBISHI', '05', '2018', '1218800000'),
('PALOPO', 'MITSUBISHI', '05', '2018', '335974000'),
('PALU', 'MITSUBISHI', '05', '2018', '50058000'),
('PEKANBARU', 'MITSUBISHI', '05', '2018', '468634758'),
('PONTIANAK', 'MITSUBISHI', '05', '2018', '515000000'),
('PURWAKARTA', 'MITSUBISHI', '05', '2018', '301650000'),
('SAMARINDA', 'MITSUBISHI', '05', '2018', '648600000'),
('SERANG', 'MITSUBISHI', '05', '2018', '173400000'),
('SOLO', 'MITSUBISHI', '05', '2018', '189922000'),
('SUKABUMI', 'MITSUBISHI', '05', '2018', '128000000'),
('TEGAL', 'MITSUBISHI', '05', '2018', '254150000'),
('YOGYAKARTA', 'MITSUBISHI', '05', '2018', '335000000'),
('BALI', 'NISSAN', '05', '2018', '119500000'),
('TEGAL', 'NISSAN', '05', '2018', '100000000'),
('BOGOR', 'SUZUKI', '05', '2018', '1298972000'),
('CIBUBUR', 'SUZUKI', '05', '2018', '115220000'),
('JAMBI', 'SUZUKI', '05', '2018', '48951000'),
('KALIMALANG', 'SUZUKI', '05', '2018', '903725000'),
('MAKASSAR', 'SUZUKI', '05', '2018', '78210000'),
('MANADO', 'SUZUKI', '05', '2018', '144828000'),
('MEDAN', 'SUZUKI', '05', '2018', '62500000'),
('PALEMBANG', 'SUZUKI', '05', '2018', '48000000'),
('PALOPO', 'SUZUKI', '05', '2018', '123985000'),
('PURWAKARTA', 'SUZUKI', '05', '2018', '269050000'),
('SERANG', 'SUZUKI', '05', '2018', '370850000'),
('TEGAL', 'SUZUKI', '05', '2018', '296500000'),
('YOGYAKARTA', 'SUZUKI', '05', '2018', '38350000'),
('BOGOR', 'TOYOTA', '05', '2018', '85178700'),
('JAMBI', 'TOYOTA', '05', '2018', '144109000'),
('LAMPUNG', 'TOYOTA', '05', '2018', '112140000'),
('LHOKSEUMAWE', 'TOYOTA', '05', '2018', '175600000'),
('MEDAN', 'TOYOTA', '05', '2018', '229300000'),
('PADANG', 'TOYOTA', '05', '2018', '207794000'),
('PALEMBANG', 'TOYOTA', '05', '2018', '83000000'),
('PALOPO', 'TOYOTA', '05', '2018', '239061000'),
('PALU', 'TOYOTA', '05', '2018', '250500553'),
('PARE-PARE', 'TOYOTA', '05', '2018', '296379000'),
('PEKANBARU', 'TOYOTA', '05', '2018', '181104426'),
('PURWAKARTA', 'TOYOTA', '05', '2018', '57000000'),
('SAMARINDA', 'TOYOTA', '05', '2018', '231200000'),
('SOLO', 'TOYOTA', '05', '2018', '90000000'),
('BANJARMASIN', 'DAIHATSU', '06', '2018', '67800000'),
('BOGOR', 'DAIHATSU', '06', '2018', '240000000'),
('MANADO', 'DAIHATSU', '06', '2018', '118231000'),
('MEDAN', 'DAIHATSU', '06', '2018', '119100000'),
('SERANG', 'DAIHATSU', '06', '2018', '215200000'),
('TANGERANG', 'DAIHATSU', '06', '2018', '74770000'),
('BALI', 'HINO', '06', '2018', '101500000'),
('PALEMBANG', 'HINO', '06', '2018', '75000000'),
('PALOPO', 'HINO', '06', '2018', '153738000'),
('PARE-PARE', 'HINO', '06', '2018', '171500000'),
('BALI', 'HONDA', '06', '2018', '107000000'),
('BALI', 'ISUZU', '06', '2018', '200000000'),
('LHOKSEUMAWE', 'ISUZU', '06', '2018', '139060000'),
('MAKASSAR', 'ISUZU', '06', '2018', '243687000'),
('SERANG', 'ISUZU', '06', '2018', '43750000'),
('TANGERANG', 'ISUZU', '06', '2018', '48000000'),
('YOGYAKARTA', 'ISUZU', '06', '2018', '143500000'),
('ACEH', 'MITSUBISHI', '06', '2018', '588880000'),
('BANJARMASIN', 'MITSUBISHI', '06', '2018', '489942487'),
('BOGOR', 'MITSUBISHI', '06', '2018', '55000000'),
('CIBUBUR', 'MITSUBISHI', '06', '2018', '167000000'),
('JAMBI', 'MITSUBISHI', '06', '2018', '700077000'),
('KOTAWARINGIN TIMUR', 'MITSUBISHI', '06', '2018', '183000000'),
('MEDAN', 'MITSUBISHI', '06', '2018', '289500000'),
('PADANG', 'MITSUBISHI', '06', '2018', '99495000'),
('PALEMBANG', 'MITSUBISHI', '06', '2018', '1461600000'),
('PALOPO', 'MITSUBISHI', '06', '2018', '80032000'),
('PALU', 'MITSUBISHI', '06', '2018', '389076000'),
('PARE-PARE', 'MITSUBISHI', '06', '2018', '240280000'),
('PEKANBARU', 'MITSUBISHI', '06', '2018', '227000000'),
('PONTIANAK', 'MITSUBISHI', '06', '2018', '293750000'),
('PURWAKARTA', 'MITSUBISHI', '06', '2018', '38100000'),
('SAMARINDA', 'MITSUBISHI', '06', '2018', '626600000'),
('SERANG', 'MITSUBISHI', '06', '2018', '164800000'),
('SOLO', 'MITSUBISHI', '06', '2018', '94152000'),
('SUKABUMI', 'MITSUBISHI', '06', '2018', '55000000'),
('TEGAL', 'MITSUBISHI', '06', '2018', '359150000'),
('ACEH', 'SUZUKI', '06', '2018', '37850000'),
('BOGOR', 'SUZUKI', '06', '2018', '1331102000'),
('CIBUBUR', 'SUZUKI', '06', '2018', '131280000'),
('KALIMALANG', 'SUZUKI', '06', '2018', '227500000'),
('KOTAWARINGIN TIMUR', 'SUZUKI', '06', '2018', '35400000'),
('MANADO', 'SUZUKI', '06', '2018', '224944000'),
('PURWAKARTA', 'SUZUKI', '06', '2018', '160650000'),
('SERANG', 'SUZUKI', '06', '2018', '227500000'),
('SUKABUMI', 'SUZUKI', '06', '2018', '43656313'),
('TEGAL', 'SUZUKI', '06', '2018', '125350000'),
('YOGYAKARTA', 'SUZUKI', '06', '2018', '37900000'),
('BOGOR', 'TOYOTA', '06', '2018', '93000000'),
('CIBUBUR', 'TOYOTA', '06', '2018', '21400000'),
('JAMBI', 'TOYOTA', '06', '2018', '117059000'),
('LHOKSEUMAWE', 'TOYOTA', '06', '2018', '80400000'),
('MAKASSAR', 'TOYOTA', '06', '2018', '120900000'),
('MEDAN', 'TOYOTA', '06', '2018', '96500000'),
('PALU', 'TOYOTA', '06', '2018', '170964000'),
('PARE-PARE', 'TOYOTA', '06', '2018', '272840000'),
('PURWAKARTA', 'TOYOTA', '06', '2018', '128000000'),
('SERANG', 'TOYOTA', '06', '2018', '77150000'),
('SOLO', 'TOYOTA', '06', '2018', '227000000'),
('TANGERANG', 'TOYOTA', '06', '2018', '165000000'),
('ACEH', 'DAIHATSU', '07', '2018', '76000000'),
('CIBUBUR', 'DAIHATSU', '07', '2018', '132590000'),
('KALIMALANG', 'DAIHATSU', '07', '2018', '206100000'),
('MAKASSAR', 'DAIHATSU', '07', '2018', '87500000'),
('MANADO', 'DAIHATSU', '07', '2018', '391321000'),
('PEKANBARU', 'DAIHATSU', '07', '2018', '65000000'),
('SERANG', 'DAIHATSU', '07', '2018', '667600000'),
('SOLO', 'DAIHATSU', '07', '2018', '65550000'),
('BALI', 'HINO', '07', '2018', '101500000'),
('JAMBI', 'HINO', '07', '2018', '82714000'),
('MAKASSAR', 'HINO', '07', '2018', '146718000'),
('MEDAN', 'HINO', '07', '2018', '149700000'),
('PALEMBANG', 'HINO', '07', '2018', '662300000'),
('PALOPO', 'HINO', '07', '2018', '128972000'),
('PALU', 'HINO', '07', '2018', '141650000'),
('PARE-PARE', 'HINO', '07', '2018', '184800000'),
('PEKANBARU', 'HINO', '07', '2018', '135000000'),
('SOLO', 'HINO', '07', '2018', '237000000'),
('ACEH', 'ISUZU', '07', '2018', '185350000'),
('BANJARMASIN', 'ISUZU', '07', '2018', '103000000'),
('KALIMALANG', 'ISUZU', '07', '2018', '120000000'),
('LHOKSEUMAWE', 'ISUZU', '07', '2018', '32480000'),
('MEDAN', 'ISUZU', '07', '2018', '128700000'),
('PEKANBARU', 'ISUZU', '07', '2018', '149500000'),
('SOLO', 'ISUZU', '07', '2018', '105500000'),
('YOGYAKARTA', 'ISUZU', '07', '2018', '200500000'),
('SUKABUMI', 'KIA', '07', '2018', '100000000'),
('ACEH', 'MITSUBISHI', '07', '2018', '608880000'),
('BALI', 'MITSUBISHI', '07', '2018', '1106481000'),
('BANJARMASIN', 'MITSUBISHI', '07', '2018', '555170708'),
('CIBUBUR', 'MITSUBISHI', '07', '2018', '110638000'),
('JAMBI', 'MITSUBISHI', '07', '2018', '781573000'),
('KOTAWARINGIN TIMUR', 'MITSUBISHI', '07', '2018', '629740000'),
('LAMPUNG', 'MITSUBISHI', '07', '2018', '249455000'),
('LHOKSEUMAWE', 'MITSUBISHI', '07', '2018', '328222000'),
('MAKASSAR', 'MITSUBISHI', '07', '2018', '131600000'),
('MANADO', 'MITSUBISHI', '07', '2018', '44564000'),
('MEDAN', 'MITSUBISHI', '07', '2018', '835200000'),
('PADANG', 'MITSUBISHI', '07', '2018', '417527000'),
('PALEMBANG', 'MITSUBISHI', '07', '2018', '1796520000'),
('PALOPO', 'MITSUBISHI', '07', '2018', '166531000'),
('PALU', 'MITSUBISHI', '07', '2018', '391598000'),
('PARE-PARE', 'MITSUBISHI', '07', '2018', '216755000'),
('PEKANBARU', 'MITSUBISHI', '07', '2018', '508000000'),
('PONTIANAK', 'MITSUBISHI', '07', '2018', '355094000'),
('PURWAKARTA', 'MITSUBISHI', '07', '2018', '530350000'),
('SAMARINDA', 'MITSUBISHI', '07', '2018', '793500000'),
('SERANG', 'MITSUBISHI', '07', '2018', '196500000'),
('SOLO', 'MITSUBISHI', '07', '2018', '307000000'),
('SUKABUMI', 'MITSUBISHI', '07', '2018', '95616280'),
('TEGAL', 'MITSUBISHI', '07', '2018', '356300000'),
('YOGYAKARTA', 'MITSUBISHI', '07', '2018', '105300000'),
('PALOPO', 'NISSAN', '07', '2018', '216789000'),
('BANJARMASIN', 'SUZUKI', '07', '2018', '29000000'),
('BOGOR', 'SUZUKI', '07', '2018', '1395207000'),
('CIBUBUR', 'SUZUKI', '07', '2018', '282544000'),
('KALIMALANG', 'SUZUKI', '07', '2018', '666000000'),
('KOTAWARINGIN TIMUR', 'SUZUKI', '07', '2018', '32400000'),
('LAMPUNG', 'SUZUKI', '07', '2018', '55000000'),
('LHOKSEUMAWE', 'SUZUKI', '07', '2018', '39170000'),
('MAKASSAR', 'SUZUKI', '07', '2018', '44713000'),
('MANADO', 'SUZUKI', '07', '2018', '184608000'),
('MEDAN', 'SUZUKI', '07', '2018', '55700000'),
('PALOPO', 'SUZUKI', '07', '2018', '51750000'),
('PURWAKARTA', 'SUZUKI', '07', '2018', '287100000'),
('SAMARINDA', 'SUZUKI', '07', '2018', '34200000'),
('SERANG', 'SUZUKI', '07', '2018', '975200000'),
('SUKABUMI', 'SUZUKI', '07', '2018', '76537112'),
('TANGERANG', 'SUZUKI', '07', '2018', '60000000'),
('TEGAL', 'SUZUKI', '07', '2018', '173000000'),
('YOGYAKARTA', 'SUZUKI', '07', '2018', '91800000'),
('ACEH', 'TOYOTA', '07', '2018', '218050000'),
('BANJARMASIN', 'TOYOTA', '07', '2018', '114900000'),
('BOGOR', 'TOYOTA', '07', '2018', '111000000'),
('JAMBI', 'TOYOTA', '07', '2018', '184364000'),
('KALIMALANG', 'TOYOTA', '07', '2018', '90000000'),
('LHOKSEUMAWE', 'TOYOTA', '07', '2018', '70180000'),
('MAKASSAR', 'TOYOTA', '07', '2018', '146300000'),
('MEDAN', 'TOYOTA', '07', '2018', '70000000'),
('PALEMBANG', 'TOYOTA', '07', '2018', '360650000'),
('PALOPO', 'TOYOTA', '07', '2018', '184615000'),
('PALU', 'TOYOTA', '07', '2018', '157000000'),
('PARE-PARE', 'TOYOTA', '07', '2018', '251702000'),
('PEKANBARU', 'TOYOTA', '07', '2018', '503500000'),
('PONTIANAK', 'TOYOTA', '07', '2018', '95000000'),
('SAMARINDA', 'TOYOTA', '07', '2018', '272500000'),
('SERANG', 'TOYOTA', '07', '2018', '284500000'),
('SOLO', 'TOYOTA', '07', '2018', '475700000'),
('YOGYAKARTA', 'TOYOTA', '07', '2018', '267050000'),
('BOGOR', 'DAIHATSU', '08', '2018', '298600000'),
('KALIMALANG', 'DAIHATSU', '08', '2018', '300000000'),
('MAKASSAR', 'DAIHATSU', '08', '2018', '70443000'),
('MANADO', 'DAIHATSU', '08', '2018', '221260000'),
('PALOPO', 'DAIHATSU', '08', '2018', '76000000'),
('SERANG', 'DAIHATSU', '08', '2018', '550600000'),
('TANGERANG', 'DAIHATSU', '08', '2018', '167500000'),
('BALI', 'HINO', '08', '2018', '720600000'),
('KOTAWARINGIN TIMUR', 'HINO', '08', '2018', '77000000'),
('MANADO', 'HINO', '08', '2018', '163247000'),
('MEDAN', 'HINO', '08', '2018', '283200000'),
('PALEMBANG', 'HINO', '08', '2018', '1193491695'),
('PALU', 'HINO', '08', '2018', '308000000'),
('SOLO', 'HINO', '08', '2018', '155000000'),
('BALI', 'ISUZU', '08', '2018', '98200000'),
('BANJARMASIN', 'ISUZU', '08', '2018', '195200000'),
('KALIMALANG', 'ISUZU', '08', '2018', '129600000'),
('LHOKSEUMAWE', 'ISUZU', '08', '2018', '186080000'),
('MAKASSAR', 'ISUZU', '08', '2018', '290500000'),
('MEDAN', 'ISUZU', '08', '2018', '309950000'),
('SOLO', 'ISUZU', '08', '2018', '105000000'),
('YOGYAKARTA', 'ISUZU', '08', '2018', '145300000'),
('BALI', 'MERCEDES', '08', '2018', '126000000'),
('ACEH', 'MITSUBISHI', '08', '2018', '440340000'),
('BALI', 'MITSUBISHI', '08', '2018', '824450000'),
('BANJARMASIN', 'MITSUBISHI', '08', '2018', '3073700000'),
('BOGOR', 'MITSUBISHI', '08', '2018', '108000000'),
('CIBUBUR', 'MITSUBISHI', '08', '2018', '136400000'),
('JAMBI', 'MITSUBISHI', '08', '2018', '1002090000'),
('KOTAWARINGIN TIMUR', 'MITSUBISHI', '08', '2018', '510800000'),
('LHOKSEUMAWE', 'MITSUBISHI', '08', '2018', '262215000'),
('PADANG', 'MITSUBISHI', '08', '2018', '782995000'),
('PALEMBANG', 'MITSUBISHI', '08', '2018', '1404818710'),
('PALOPO', 'MITSUBISHI', '08', '2018', '284076000'),
('PALU', 'MITSUBISHI', '08', '2018', '335400000'),
('PARE-PARE', 'MITSUBISHI', '08', '2018', '409596000'),
('PEKANBARU', 'MITSUBISHI', '08', '2018', '1399000000'),
('PONTIANAK', 'MITSUBISHI', '08', '2018', '742000000'),
('PURWAKARTA', 'MITSUBISHI', '08', '2018', '236000000'),
('SAMARINDA', 'MITSUBISHI', '08', '2018', '1335650000'),
('SERANG', 'MITSUBISHI', '08', '2018', '616600000'),
('SOLO', 'MITSUBISHI', '08', '2018', '246500000'),
('SUKABUMI', 'MITSUBISHI', '08', '2018', '213000000'),
('TANGERANG', 'MITSUBISHI', '08', '2018', '143900000'),
('TEGAL', 'MITSUBISHI', '08', '2018', '357150000'),
('YOGYAKARTA', 'MITSUBISHI', '08', '2018', '672200000'),
('SERANG', 'NISSAN', '08', '2018', '101100000'),
('ACEH', 'SUZUKI', '08', '2018', '54440000'),
('BANJARMASIN', 'SUZUKI', '08', '2018', '23350000'),
('BOGOR', 'SUZUKI', '08', '2018', '689000000'),
('CIBUBUR', 'SUZUKI', '08', '2018', '231650000'),
('JAMBI', 'SUZUKI', '08', '2018', '17237000'),
('KALIMALANG', 'SUZUKI', '08', '2018', '957495000'),
('LAMPUNG', 'SUZUKI', '08', '2018', '60730000'),
('MAKASSAR', 'SUZUKI', '08', '2018', '64814000'),
('MANADO', 'SUZUKI', '08', '2018', '75410000'),
('PALEMBANG', 'SUZUKI', '08', '2018', '24108573'),
('PALU', 'SUZUKI', '08', '2018', '62300000'),
('PURWAKARTA', 'SUZUKI', '08', '2018', '305300000'),
('SAMARINDA', 'SUZUKI', '08', '2018', '29200000'),
('SERANG', 'SUZUKI', '08', '2018', '856550000'),
('TEGAL', 'SUZUKI', '08', '2018', '266300000'),
('YOGYAKARTA', 'SUZUKI', '08', '2018', '55450000'),
('BANJARMASIN', 'TOYOTA', '08', '2018', '78750000'),
('JAMBI', 'TOYOTA', '08', '2018', '252288000'),
('KALIMALANG', 'TOYOTA', '08', '2018', '148000000'),
('LAMPUNG', 'TOYOTA', '08', '2018', '95799000'),
('LHOKSEUMAWE', 'TOYOTA', '08', '2018', '679883000'),
('MANADO', 'TOYOTA', '08', '2018', '69824000'),
('PADANG', 'TOYOTA', '08', '2018', '128041000'),
('PALEMBANG', 'TOYOTA', '08', '2018', '244500000'),
('PALOPO', 'TOYOTA', '08', '2018', '418648000'),
('PALU', 'TOYOTA', '08', '2018', '570375000'),
('PARE-PARE', 'TOYOTA', '08', '2018', '754283000'),
('PEKANBARU', 'TOYOTA', '08', '2018', '379000000'),
('SERANG', 'TOYOTA', '08', '2018', '60000000'),
('SOLO', 'TOYOTA', '08', '2018', '296000000'),
('YOGYAKARTA', 'TOYOTA', '08', '2018', '332200000'),
('CIBUBUR', 'DAIHATSU', '09', '2018', '87500000'),
('KALIMALANG', 'DAIHATSU', '09', '2018', '50100000'),
('LAMPUNG', 'DAIHATSU', '09', '2018', '98000000'),
('MANADO', 'DAIHATSU', '09', '2018', '455525000'),
('MEDAN', 'DAIHATSU', '09', '2018', '109600000'),
('PALOPO', 'DAIHATSU', '09', '2018', '150830000'),
('PARE-PARE', 'DAIHATSU', '09', '2018', '170114000'),
('PURWAKARTA', 'DAIHATSU', '09', '2018', '61900000'),
('SERANG', 'DAIHATSU', '09', '2018', '440650000'),
('BANJARMASIN', 'HINO', '09', '2018', '318200000'),
('KOTAWARINGIN TIMUR', 'HINO', '09', '2018', '61000000'),
('MAKASSAR', 'HINO', '09', '2018', '88000000'),
('MEDAN', 'HINO', '09', '2018', '149700000'),
('PADANG', 'HINO', '09', '2018', '189938000'),
('PALEMBANG', 'HINO', '09', '2018', '829500000'),
('PALOPO', 'HINO', '09', '2018', '146326000'),
('PARE-PARE', 'HINO', '09', '2018', '516878000'),
('SERANG', 'HINO', '09', '2018', '253500000'),
('SOLO', 'HINO', '09', '2018', '260000000'),
('TANGERANG', 'HINO', '09', '2018', '95000000'),
('CIBUBUR', 'HONDA', '09', '2018', '95000000'),
('BALI', 'ISUZU', '09', '2018', '849600000'),
('LHOKSEUMAWE', 'ISUZU', '09', '2018', '44170000'),
('MAKASSAR', 'ISUZU', '09', '2018', '281850000'),
('MEDAN', 'ISUZU', '09', '2018', '149500000'),
('PALEMBANG', 'ISUZU', '09', '2018', '65341688'),
('SOLO', 'ISUZU', '09', '2018', '202888000'),
('TANGERANG', 'ISUZU', '09', '2018', '112440000'),
('TEGAL', 'ISUZU', '09', '2018', '172000000'),
('YOGYAKARTA', 'ISUZU', '09', '2018', '252950000'),
('BALI', 'MERCEDES', '09', '2018', '255200000'),
('ACEH', 'MITSUBISHI', '09', '2018', '472450000'),
('BALI', 'MITSUBISHI', '09', '2018', '405100000'),
('BANJARMASIN', 'MITSUBISHI', '09', '2018', '1086750000'),
('CIBUBUR', 'MITSUBISHI', '09', '2018', '419900000'),
('JAMBI', 'MITSUBISHI', '09', '2018', '1176138000'),
('KOTAWARINGIN TIMUR', 'MITSUBISHI', '09', '2018', '863400000'),
('LAMPUNG', 'MITSUBISHI', '09', '2018', '378367000'),
('LHOKSEUMAWE', 'MITSUBISHI', '09', '2018', '125180000'),
('MAKASSAR', 'MITSUBISHI', '09', '2018', '284488000'),
('MEDAN', 'MITSUBISHI', '09', '2018', '643549904'),
('PADANG', 'MITSUBISHI', '09', '2018', '403860000'),
('PALEMBANG', 'MITSUBISHI', '09', '2018', '1804200000'),
('PALOPO', 'MITSUBISHI', '09', '2018', '109518000'),
('PALU', 'MITSUBISHI', '09', '2018', '585579000'),
('PEKANBARU', 'MITSUBISHI', '09', '2018', '1154700000'),
('PONTIANAK', 'MITSUBISHI', '09', '2018', '617500000'),
('PURWAKARTA', 'MITSUBISHI', '09', '2018', '495150000'),
('SAMARINDA', 'MITSUBISHI', '09', '2018', '890500000'),
('SERANG', 'MITSUBISHI', '09', '2018', '170300000'),
('SOLO', 'MITSUBISHI', '09', '2018', '65250000'),
('SUKABUMI', 'MITSUBISHI', '09', '2018', '83000000'),
('TANGERANG', 'MITSUBISHI', '09', '2018', '99000000'),
('TEGAL', 'MITSUBISHI', '09', '2018', '346000000'),
('YOGYAKARTA', 'MITSUBISHI', '09', '2018', '41000000'),
('BANJARMASIN', 'NISSAN', '09', '2018', '95000000'),
('BOGOR', 'SUZUKI', '09', '2018', '1051850000'),
('CIBUBUR', 'SUZUKI', '09', '2018', '163100000'),
('KALIMALANG', 'SUZUKI', '09', '2018', '1483000000'),
('MAKASSAR', 'SUZUKI', '09', '2018', '35500000'),
('SERANG', 'SUZUKI', '09', '2018', '723600000'),
('SUKABUMI', 'SUZUKI', '09', '2018', '38000000'),
('TEGAL', 'SUZUKI', '09', '2018', '89000000'),
('YOGYAKARTA', 'SUZUKI', '09', '2018', '86500000'),
('ACEH', 'TOYOTA', '09', '2018', '95000000'),
('BALI', 'TOYOTA', '09', '2018', '347100000'),
('BOGOR', 'TOYOTA', '09', '2018', '112482000'),
('LHOKSEUMAWE', 'TOYOTA', '09', '2018', '307935000'),
('MAKASSAR', 'TOYOTA', '09', '2018', '175200000'),
('MANADO', 'TOYOTA', '09', '2018', '470967000'),
('PADANG', 'TOYOTA', '09', '2018', '138941000'),
('PALEMBANG', 'TOYOTA', '09', '2018', '337000000'),
('PALOPO', 'TOYOTA', '09', '2018', '173900000'),
('PALU', 'TOYOTA', '09', '2018', '291950000'),
('PARE-PARE', 'TOYOTA', '09', '2018', '109591000'),
('PEKANBARU', 'TOYOTA', '09', '2018', '135000000'),
('SAMARINDA', 'TOYOTA', '09', '2018', '147900000'),
('SOLO', 'TOYOTA', '09', '2018', '115400000'),
('SUKABUMI', 'TOYOTA', '09', '2018', '152330000'),
('TEGAL', 'TOYOTA', '09', '2018', '119000000'),
('ACEH', 'DAIHATSU', '10', '2018', '66085000'),
('BANJARMASIN', 'DAIHATSU', '10', '2018', '36200000'),
('BOGOR', 'DAIHATSU', '10', '2018', '49980000'),
('CIBUBUR', 'DAIHATSU', '10', '2018', '124600000'),
('KALIMALANG', 'DAIHATSU', '10', '2018', '105000000'),
('KOTAWARINGIN TIMUR', 'DAIHATSU', '10', '2018', '59000000'),
('MANADO', 'DAIHATSU', '10', '2018', '312985000'),
('PARE-PARE', 'DAIHATSU', '10', '2018', '255613000'),
('SERANG', 'DAIHATSU', '10', '2018', '476250000'),
('SUKABUMI', 'DAIHATSU', '10', '2018', '105000000'),
('TEGAL', 'DAIHATSU', '10', '2018', '44000000'),
('BALI', 'HINO', '10', '2018', '943700000'),
('MAKASSAR', 'HINO', '10', '2018', '144000000'),
('PADANG', 'HINO', '10', '2018', '194805000'),
('PALEMBANG', 'HINO', '10', '2018', '308592508'),
('PALOPO', 'HINO', '10', '2018', '180357000'),
('PARE-PARE', 'HINO', '10', '2018', '333825000'),
('PEKANBARU', 'HINO', '10', '2018', '173000000'),
('SOLO', 'HINO', '10', '2018', '76000000'),
('YOGYAKARTA', 'HINO', '10', '2018', '166700000'),
('BALI', 'ISUZU', '10', '2018', '107000000'),
('MAKASSAR', 'ISUZU', '10', '2018', '147200000'),
('SOLO', 'ISUZU', '10', '2018', '60000000'),
('TEGAL', 'ISUZU', '10', '2018', '117000000'),
('YOGYAKARTA', 'ISUZU', '10', '2018', '219900000'),
('PURWAKARTA', 'MERCEDES', '10', '2018', '206150000'),
('ACEH', 'MITSUBISHI', '10', '2018', '190800000'),
('BALI', 'MITSUBISHI', '10', '2018', '85800000'),
('BANJARMASIN', 'MITSUBISHI', '10', '2018', '1547500000'),
('BOGOR', 'MITSUBISHI', '10', '2018', '87200000'),
('JAMBI', 'MITSUBISHI', '10', '2018', '1519274000'),
('KALIMALANG', 'MITSUBISHI', '10', '2018', '277175000'),
('KOTAWARINGIN TIMUR', 'MITSUBISHI', '10', '2018', '128100000'),
('LAMPUNG', 'MITSUBISHI', '10', '2018', '621750000'),
('LHOKSEUMAWE', 'MITSUBISHI', '10', '2018', '277604000'),
('MAKASSAR', 'MITSUBISHI', '10', '2018', '398200000'),
('MEDAN', 'MITSUBISHI', '10', '2018', '719700000'),
('PADANG', 'MITSUBISHI', '10', '2018', '438755000'),
('PALEMBANG', 'MITSUBISHI', '10', '2018', '1411400000'),
('PEKANBARU', 'MITSUBISHI', '10', '2018', '1471500000'),
('PONTIANAK', 'MITSUBISHI', '10', '2018', '1626000000'),
('PURWAKARTA', 'MITSUBISHI', '10', '2018', '312550000'),
('SAMARINDA', 'MITSUBISHI', '10', '2018', '507800000'),
('SERANG', 'MITSUBISHI', '10', '2018', '266900000'),
('SOLO', 'MITSUBISHI', '10', '2018', '357190000'),
('SUKABUMI', 'MITSUBISHI', '10', '2018', '163000000'),
('TANGERANG', 'MITSUBISHI', '10', '2018', '635500000'),
('TEGAL', 'MITSUBISHI', '10', '2018', '415000000'),
('YOGYAKARTA', 'MITSUBISHI', '10', '2018', '291800000'),
('MANADO', 'NISSAN', '10', '2018', '67645000'),
('SERANG', 'NISSAN', '10', '2018', '74350000'),
('BANJARMASIN', 'SUZUKI', '10', '2018', '30750000'),
('BOGOR', 'SUZUKI', '10', '2018', '1560757000'),
('CIBUBUR', 'SUZUKI', '10', '2018', '302350000'),
('KALIMALANG', 'SUZUKI', '10', '2018', '742050000'),
('KOTAWARINGIN TIMUR', 'SUZUKI', '10', '2018', '49000000'),
('LHOKSEUMAWE', 'SUZUKI', '10', '2018', '112594000'),
('MANADO', 'SUZUKI', '10', '2018', '306894000'),
('MEDAN', 'SUZUKI', '10', '2018', '67500000'),
('PURWAKARTA', 'SUZUKI', '10', '2018', '95000000'),
('SAMARINDA', 'SUZUKI', '10', '2018', '35000000'),
('SERANG', 'SUZUKI', '10', '2018', '440100000'),
('TEGAL', 'SUZUKI', '10', '2018', '264800000'),
('ACEH', 'TOYOTA', '10', '2018', '59300000'),
('BALI', 'TOYOTA', '10', '2018', '236000000'),
('BANJARMASIN', 'TOYOTA', '10', '2018', '108000000'),
('BOGOR', 'TOYOTA', '10', '2018', '29400000'),
('KALIMALANG', 'TOYOTA', '10', '2018', '80000000'),
('LHOKSEUMAWE', 'TOYOTA', '10', '2018', '371254000'),
('MANADO', 'TOYOTA', '10', '2018', '316720000'),
('PALEMBANG', 'TOYOTA', '10', '2018', '147000000'),
('PALOPO', 'TOYOTA', '10', '2018', '272130000'),
('PARE-PARE', 'TOYOTA', '10', '2018', '156540000'),
('SAMARINDA', 'TOYOTA', '10', '2018', '116500000'),
('SERANG', 'TOYOTA', '10', '2018', '270050000'),
('SUKABUMI', 'TOYOTA', '10', '2018', '69200000'),
('YOGYAKARTA', 'TOYOTA', '10', '2018', '85350000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
