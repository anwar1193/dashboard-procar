-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 10:53 AM
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
-- Table structure for table `tbl_sales_surveyor`
--

CREATE TABLE `tbl_sales_surveyor` (
  `BranchName` varchar(50) NOT NULL,
  `Surveyor` varchar(40) NOT NULL,
  `Bulan` varchar(20) NOT NULL,
  `Tahun` varchar(4) NOT NULL,
  `TotalPenjualan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sales_surveyor`
--

INSERT INTO `tbl_sales_surveyor` (`BranchName`, `Surveyor`, `Bulan`, `Tahun`, `TotalPenjualan`) VALUES
('SERANG', 'AHMAD MUHYI CHAISAR', '01', '2018', '309250000'),
('SERANG', 'AHMAD SAPRONI', '01', '2018', '318950000'),
('JAMBI', 'ALI MUSTAQIM', '01', '2018', '133729000'),
('PARE-PARE', 'ANDI SULTAN', '01', '2018', '87310000'),
('MANADO', 'ANDREE GERRY LAPIAN', '01', '2018', '268316000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '01', '2018', '187378000'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '01', '2018', '73537791'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '01', '2018', '86900000'),
('PONTIANAK', 'ANNAFI', '01', '2018', '87005000'),
('PURWAKARTA', 'ASEP HERYANA', '01', '2018', '72960000'),
('PARE-PARE', 'ASRI', '01', '2018', '96575000'),
('MAKASSAR', 'ASWAN ADIPRAJA', '01', '2018', '396500000'),
('BOGOR', 'BEBEN NURSOBAH', '01', '2018', '240400000'),
('BOGOR', 'BUGGI PERMADI', '01', '2018', '357000000'),
('PALU', 'DIDIK HARIYANTO SE', '01', '2018', '156728000'),
('PARE-PARE', 'FACHWYN SYARIEF', '01', '2018', '56890000'),
('TANGERANG', 'FAUZAN IHSAN', '01', '2018', '349172000'),
('SAMARINDA', 'HADI RAHMADI', '01', '2018', '326000000'),
('PALEMBANG', 'HARIANSYAH', '01', '2018', '108570316'),
('LHOKSEUMAWE', 'HARIS OKTIAN', '01', '2018', '62736000'),
('YOGYAKARTA', 'HERI DWIYANTO', '01', '2018', '380650000'),
('SUKABUMI', 'IMAM MAULANA', '01', '2018', '128950000'),
('CIBUBUR', 'IMRON NOVIAN', '01', '2018', '178300000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '01', '2018', '243000000'),
('JAMBI', 'KIKI APRIADINATA', '01', '2018', '310738000'),
('KALIMALANG', 'KISYANTO', '01', '2018', '217500000'),
('DEPOK', 'LUKMAN NURHAKIM', '01', '2018', '90000000'),
('SAMARINDA', 'M. ANNASRULLAH', '01', '2018', '63600000'),
('CIBUBUR', 'MAMAN SUPARMAN', '01', '2018', '4450000000'),
('ACEH', 'MAULIADI S', '01', '2018', '99200000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '01', '2018', '327800000'),
('TANGERANG', 'MUHAMAD YUSUF', '01', '2018', '89011000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '01', '2018', '118650000'),
('BANJARMASIN', 'MUHAMMAD ALI', '01', '2018', '124600000'),
('BOGOR', 'MULYA DODI', '01', '2018', '475874000'),
('PEKANBARU', 'MULYANI', '01', '2018', '127840713'),
('BOGOR', 'PEDRO PRASETYO', '01', '2018', '154870000'),
('KALIMALANG', 'ROBI', '01', '2018', '106500000'),
('KALIMALANG', 'SUPARYADI', '01', '2018', '67000000'),
('PURWAKARTA', 'TEDDY MULYANA', '01', '2018', '50000000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '01', '2018', '245628242'),
('SOLO', 'WAHYUDI', '01', '2018', '209278000'),
('PALU', 'WAWAN A. LADJIDJA', '01', '2018', '160557000'),
('BALIKPAPAN', 'WINANTO', '01', '2018', '66000000'),
('PALEMBANG', 'YUDI ADE FIRDAUS', '01', '2018', '183277688'),
('SERANG', 'AHMAD MUHYI CHAISAR', '02', '2018', '432300000'),
('MEDAN', 'AHMAD RICKY PRABOWO', '02', '2018', '115000000'),
('SERANG', 'AHMAD SAPRONI', '02', '2018', '378450000'),
('TEGAL', 'AJI GUNAWAN', '02', '2018', '77000000'),
('JAMBI', 'ALI MUSTAQIM', '02', '2018', '51557000'),
('PADANG', 'ANDI SAPUTRA', '02', '2018', '45844000'),
('MEDAN', 'ANDREANO', '02', '2018', '356500000'),
('MANADO', 'ANDREE GERRY LAPIAN', '02', '2018', '66500000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '02', '2018', '75100000'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '02', '2018', '191070000'),
('PONTIANAK', 'ANNAFI', '02', '2018', '494500000'),
('MEDAN', 'APRIZA PAHLEVI', '02', '2018', '125000000'),
('PARE-PARE', 'ASRI', '02', '2018', '338292000'),
('MAKASSAR', 'ASWAN ADIPRAJA', '02', '2018', '168000000'),
('BOGOR', 'BEBEN NURSOBAH', '02', '2018', '238215000'),
('PEKANBARU', 'BENI SAPUTRA', '02', '2018', '84000000'),
('BOGOR', 'BUGGI PERMADI', '02', '2018', '350126000'),
('PADANG', 'EKA SATRIA', '02', '2018', '305782000'),
('PALEMBANG', 'EVAN PRAYOGA', '02', '2018', '532600000'),
('PARE-PARE', 'FACHWYN SYARIEF', '02', '2018', '699900000'),
('TANGERANG', 'FAUZAN IHSAN', '02', '2018', '56050000'),
('PALEMBANG', 'FEBRI KUMALA', '02', '2018', '263600000'),
('PEKANBARU', 'HABIBI HASAN', '02', '2018', '287500000'),
('PALEMBANG', 'HARIANSYAH', '02', '2018', '72700000'),
('LHOKSEUMAWE', 'HARIS OKTIAN', '02', '2018', '56376000'),
('BALI', 'I GUSTI NGURAH ALIT NANJAYA', '02', '2018', '99550000'),
('CIBUBUR', 'IMRON NOVIAN', '02', '2018', '263450000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '02', '2018', '213624000'),
('PADANG', 'JUMADIL AWAL', '02', '2018', '56000000'),
('PEKANBARU', 'KAUTSAR', '02', '2018', '177000000'),
('JAMBI', 'KIKI APRIADINATA', '02', '2018', '162236000'),
('KALIMALANG', 'KISYANTO', '02', '2018', '241500000'),
('ACEH', 'MAULIADI S', '02', '2018', '161800000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '02', '2018', '505300000'),
('MAKASSAR', 'MUH SATRIA DJALIL', '02', '2018', '146343846'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '02', '2018', '266628000'),
('BANJARMASIN', 'MUHAMMAD ALI', '02', '2018', '108400000'),
('BOGOR', 'MULYA DODI', '02', '2018', '169580000'),
('PEKANBARU', 'MULYANI', '02', '2018', '180000000'),
('YOGYAKARTA', 'MUSTOFA', '02', '2018', '143700000'),
('SOLO', 'RASIANA MUHAMAD SIDIK', '02', '2018', '113254000'),
('KALIMALANG', 'ROBI', '02', '2018', '209841000'),
('KALIMALANG', 'SUPARYADI', '02', '2018', '418235594'),
('ACEH', 'T. REZA ANANDA', '02', '2018', '55100000'),
('PURWAKARTA', 'TEDDY MULYANA', '02', '2018', '74000000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '02', '2018', '147132000'),
('SOLO', 'WAHYUDI', '02', '2018', '545750000'),
('PALU', 'WAWAN A. LADJIDJA', '02', '2018', '160557000'),
('BALI', 'YANDE RENDI JONIARTANA', '02', '2018', '340000000'),
('PALEMBANG', 'YUDI ADE FIRDAUS', '02', '2018', '194300000'),
('PADANG', 'ZULFIKRI', '02', '2018', '166157000'),
('SERANG', 'AHMAD MUHYI CHAISAR', '03', '2018', '224250000'),
('MEDAN', 'AHMAD RICKY PRABOWO', '03', '2018', '114000000'),
('SERANG', 'AHMAD SAPRONI', '03', '2018', '417000000'),
('TEGAL', 'AJI GUNAWAN', '03', '2018', '47000000'),
('ACEH', 'AL FAJRI', '03', '2018', '226353000'),
('JAMBI', 'ALI MUSTAQIM', '03', '2018', '70516000'),
('MEDAN', 'ANDREANO', '03', '2018', '153500000'),
('MANADO', 'ANDREE GERRY LAPIAN', '03', '2018', '571126000'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '03', '2018', '90000000'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '03', '2018', '93680000'),
('MEDAN', 'APRIZA PAHLEVI', '03', '2018', '178000000'),
('PARE-PARE', 'ASRI', '03', '2018', '80000000'),
('PALOPO', 'ASWAN', '03', '2018', '294753000'),
('MAKASSAR', 'ASWAN ADIPRAJA', '03', '2018', '361690896'),
('BOGOR', 'BEBEN NURSOBAH', '03', '2018', '451250000'),
('PEKANBARU', 'BENI SAPUTRA', '03', '2018', '250000000'),
('BOGOR', 'BUGGI PERMADI', '03', '2018', '816153000'),
('PALEMBANG', 'EVAN PRAYOGA', '03', '2018', '99000000'),
('PARE-PARE', 'FACHWYN SYARIEF', '03', '2018', '302503000'),
('TANGERANG', 'FAUZAN IHSAN', '03', '2018', '85000000'),
('PALEMBANG', 'FEBRI KUMALA', '03', '2018', '780400000'),
('PEKANBARU', 'HABIBI HASAN', '03', '2018', '88500000'),
('SAMARINDA', 'HADI RAHMADI', '03', '2018', '213600000'),
('PALEMBANG', 'HARIANSYAH', '03', '2018', '112400000'),
('LAMPUNG', 'HARUN JAUHARI', '03', '2018', '87920000'),
('YOGYAKARTA', 'HERI DWIYANTO', '03', '2018', '45300000'),
('BALI', 'I GUSTI NGURAH ALIT NANJAYA', '03', '2018', '166059839'),
('SUKABUMI', 'IMAM MAULANA', '03', '2018', '338000000'),
('CIBUBUR', 'IMRON NOVIAN', '03', '2018', '179200000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '03', '2018', '493000000'),
('PADANG', 'JUMADIL AWAL', '03', '2018', '298703000'),
('KALIMALANG', 'KISYANTO', '03', '2018', '488000000'),
('SAMARINDA', 'M. ANNASRULLAH', '03', '2018', '135500000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '03', '2018', '266950000'),
('MAKASSAR', 'MUH SATRIA DJALIL', '03', '2018', '127989000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '03', '2018', '82561220'),
('BANJARMASIN', 'MUHAMMAD ALI', '03', '2018', '120635081'),
('BOGOR', 'MULYA DODI', '03', '2018', '212500000'),
('BOGOR', 'PEDRO PRASETYO', '03', '2018', '239850000'),
('SUKABUMI', 'RIKY ANDRIAN', '03', '2018', '83000000'),
('CIBUBUR', 'RINDANG KUSWANTO', '03', '2018', '287972825'),
('KALIMALANG', 'ROBI', '03', '2018', '281200000'),
('KALIMALANG', 'SUPARYADI', '03', '2018', '200000000'),
('ACEH', 'T. REZA ANANDA', '03', '2018', '110550000'),
('PURWAKARTA', 'TEDDY MULYANA', '03', '2018', '317700000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '03', '2018', '208000000'),
('SOLO', 'WAHYUDI', '03', '2018', '111000000'),
('BALIKPAPAN', 'WINANTO', '03', '2018', '55500000'),
('BALI', 'YANDE RENDI JONIARTANA', '03', '2018', '91000000'),
('PURWAKARTA', 'ADI ARIA KIANSANTANG', '04', '2018', '45500000'),
('SERANG', 'AHMAD MUHYI CHAISAR', '04', '2018', '252750113'),
('MEDAN', 'AHMAD RICKY PRABOWO', '04', '2018', '125500000'),
('SERANG', 'AHMAD SAPRONI', '04', '2018', '509050000'),
('ACEH', 'AL FAJRI', '04', '2018', '38056000'),
('JAMBI', 'ALI MUSTAQIM', '04', '2018', '248554000'),
('PADANG', 'ANDI SAPUTRA', '04', '2018', '274722000'),
('MEDAN', 'ANDREANO', '04', '2018', '349000000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '04', '2018', '21500000'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '04', '2018', '89000000'),
('PONTIANAK', 'ANNAFI', '04', '2018', '332000000'),
('MEDAN', 'APRIZA PAHLEVI', '04', '2018', '292500000'),
('PALOPO', 'ASWAN', '04', '2018', '221678000'),
('MAKASSAR', 'ASWAN ADIPRAJA', '04', '2018', '322800000'),
('BOGOR', 'BEBEN NURSOBAH', '04', '2018', '551925000'),
('BOGOR', 'BUGGI PERMADI', '04', '2018', '504850000'),
('PALU', 'DIDIK HARIYANTO SE', '04', '2018', '262489273'),
('PALEMBANG', 'EVAN PRAYOGA', '04', '2018', '993730000'),
('PARE-PARE', 'FACHWYN SYARIEF', '04', '2018', '429436000'),
('TANGERANG', 'FAUZAN IHSAN', '04', '2018', '55000000'),
('PALEMBANG', 'FEBRI KUMALA', '04', '2018', '597820000'),
('PALOPO', 'FIKRAM HAMSA', '04', '2018', '69758000'),
('MANADO', 'GERRY GLENDY KAMBEY', '04', '2018', '51905742'),
('PEKANBARU', 'HABIBI HASAN', '04', '2018', '83000000'),
('SAMARINDA', 'HADI RAHMADI', '04', '2018', '288070000'),
('PALEMBANG', 'HARIANSYAH', '04', '2018', '514161849'),
('LAMPUNG', 'HARUN JAUHARI', '04', '2018', '362425000'),
('YOGYAKARTA', 'HERI DWIYANTO', '04', '2018', '63300000'),
('SUKABUMI', 'IMAM MAULANA', '04', '2018', '100000000'),
('CIBUBUR', 'IMRON NOVIAN', '04', '2018', '388734000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '04', '2018', '256861000'),
('PADANG', 'JUMADIL AWAL', '04', '2018', '149350000'),
('PEKANBARU', 'KAUTSAR', '04', '2018', '155000000'),
('JAMBI', 'KIKI APRIADINATA', '04', '2018', '229255000'),
('KALIMALANG', 'KISYANTO', '04', '2018', '254151000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '04', '2018', '618400000'),
('MAKASSAR', 'MUH SATRIA DJALIL', '04', '2018', '522026000'),
('TANGERANG', 'MUHAMAD YUSUF', '04', '2018', '183796000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '04', '2018', '148367062'),
('BANJARMASIN', 'MUHAMMAD ALI', '04', '2018', '272408973'),
('PEKANBARU', 'MULYANI', '04', '2018', '327000000'),
('YOGYAKARTA', 'MUSTOFA', '04', '2018', '146500000'),
('BOGOR', 'PEDRO PRASETYO', '04', '2018', '45500000'),
('PONTIANAK', 'RAHMAD GUNALI', '04', '2018', '143000000'),
('SOLO', 'RASIANA MUHAMAD SIDIK', '04', '2018', '116000000'),
('MANADO', 'RICO KEINTJEM', '04', '2018', '92379514'),
('SUKABUMI', 'RIKY ANDRIAN', '04', '2018', '105000000'),
('CIBUBUR', 'RINDANG KUSWANTO', '04', '2018', '33985000'),
('KALIMALANG', 'ROBI', '04', '2018', '353382000'),
('KALIMALANG', 'SUPARYADI', '04', '2018', '120000000'),
('ACEH', 'T. REZA ANANDA', '04', '2018', '133000000'),
('PURWAKARTA', 'TEDDY MULYANA', '04', '2018', '96000000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '04', '2018', '239185000'),
('SOLO', 'WAHYUDI', '04', '2018', '160750000'),
('PALU', 'WAWAN A. LADJIDJA', '04', '2018', '243431514'),
('BALIKPAPAN', 'WINANTO', '04', '2018', '250000000'),
('BALI', 'YANDE RENDI JONIARTANA', '04', '2018', '472700000'),
('SERANG', 'AHMAD MUHYI CHAISAR', '05', '2018', '362000000'),
('MEDAN', 'AHMAD RICKY PRABOWO', '05', '2018', '311236345'),
('SERANG', 'AHMAD SAPRONI', '05', '2018', '202000000'),
('TEGAL', 'AJI GUNAWAN', '05', '2018', '206500000'),
('ACEH', 'AL FAJRI', '05', '2018', '82600000'),
('JAMBI', 'ALI MUSTAQIM', '05', '2018', '528392000'),
('PADANG', 'ANDI SAPUTRA', '05', '2018', '432740000'),
('MEDAN', 'ANDREANO', '05', '2018', '386800000'),
('MANADO', 'ANDREE GERRY LAPIAN', '05', '2018', '73545000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '05', '2018', '289993500'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '05', '2018', '254150000'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '05', '2018', '226480000'),
('PONTIANAK', 'ANNAFI', '05', '2018', '249000000'),
('MEDAN', 'APRIZA PAHLEVI', '05', '2018', '330500000'),
('PARE-PARE', 'ASRI', '05', '2018', '267229000'),
('PALOPO', 'ASWAN', '05', '2018', '664227000'),
('MAKASSAR', 'ASWAN ADIPRAJA', '05', '2018', '112821770'),
('BOGOR', 'BEBEN NURSOBAH', '05', '2018', '609475000'),
('PEKANBARU', 'BENI SAPUTRA', '05', '2018', '337000000'),
('BOGOR', 'BUGGI PERMADI', '05', '2018', '720497000'),
('PALEMBANG', 'DARMA SETIAWAN', '05', '2018', '376100000'),
('KOTAWARINGIN TIMUR', 'DENI RUSDIYANTO', '05', '2018', '121750000'),
('PALEMBANG', 'EVAN PRAYOGA', '05', '2018', '919000000'),
('PARE-PARE', 'FACHWYN SYARIEF', '05', '2018', '159950000'),
('TANGERANG', 'FAUZAN IHSAN', '05', '2018', '75000000'),
('PALEMBANG', 'FEBRI KUMALA', '05', '2018', '379700000'),
('PALOPO', 'FIKRAM HAMSA', '05', '2018', '242593000'),
('MANADO', 'GERRY GLENDY KAMBEY', '05', '2018', '76000000'),
('PEKANBARU', 'HABIBI HASAN', '05', '2018', '119000000'),
('SAMARINDA', 'HADI RAHMADI', '05', '2018', '307000000'),
('LHOKSEUMAWE', 'HARIS OKTIAN', '05', '2018', '220800000'),
('LAMPUNG', 'HARUN JAUHARI', '05', '2018', '112140000'),
('TEGAL', 'HENGKY IRAWAN', '05', '2018', '190000000'),
('YOGYAKARTA', 'HERI DWIYANTO', '05', '2018', '375550000'),
('BALI', 'I GUSTI NGURAH ALIT NANJAYA', '05', '2018', '239000000'),
('SUKABUMI', 'IMAM MAULANA', '05', '2018', '240000000'),
('CIBUBUR', 'IMRON NOVIAN', '05', '2018', '144900000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '05', '2018', '483725000'),
('LHOKSEUMAWE', 'IRWANDA', '05', '2018', '185200000'),
('PEKANBARU', 'KAUTSAR', '05', '2018', '193739184'),
('JAMBI', 'KIKI APRIADINATA', '05', '2018', '383483000'),
('SAMARINDA', 'M. ANNASRULLAH', '05', '2018', '264500000'),
('ACEH', 'MAULIADI S', '05', '2018', '100200000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '05', '2018', '460300000'),
('MAKASSAR', 'MUH SATRIA DJALIL', '05', '2018', '489575000'),
('TANGERANG', 'MUHAMAD YUSUF', '05', '2018', '91483000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '05', '2018', '210950000'),
('BANJARMASIN', 'MUHAMMAD ALI', '05', '2018', '53900000'),
('BOGOR', 'MULYA DODI', '05', '2018', '88500000'),
('ACEH', 'MUSFIKAR', '05', '2018', '178350000'),
('BOGOR', 'PEDRO PRASETYO', '05', '2018', '85178700'),
('PONTIANAK', 'RAHMAD GUNALI', '05', '2018', '266000000'),
('SOLO', 'RASIANA MUHAMAD SIDIK', '05', '2018', '64422000'),
('PURWAKARTA', 'RIKY ANDRIAN', '05', '2018', '306800000'),
('SAMARINDA', 'RINALDO VENOWASKY LUKAS', '05', '2018', '308300000'),
('CIBUBUR', 'RINDANG KUSWANTO', '05', '2018', '209478000'),
('KALIMALANG', 'ROBI', '05', '2018', '258000000'),
('KALIMALANG', 'SUPARYADI', '05', '2018', '200000000'),
('JAMBI', 'SUYONO', '05', '2018', '72533000'),
('PURWAKARTA', 'TEDDY MULYANA', '05', '2018', '320900000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '05', '2018', '202205000'),
('SOLO', 'WAHYUDI', '05', '2018', '427800000'),
('PALU', 'WAWAN A. LADJIDJA', '05', '2018', '300558553'),
('BALI', 'YANDE RENDI JONIARTANA', '05', '2018', '539500000'),
('PADANG', 'ZULFIKRI', '05', '2018', '207794000'),
('SERANG', 'AHMAD MUHYI CHAISAR', '06', '2018', '152350000'),
('SERANG', 'AHMAD SAPRONI', '06', '2018', '271250000'),
('TEGAL', 'AJI GUNAWAN', '06', '2018', '27500000'),
('JAMBI', 'ALI MUSTAQIM', '06', '2018', '583812000'),
('PADANG', 'ANDI SAPUTRA', '06', '2018', '49500000'),
('MEDAN', 'ANDREANO', '06', '2018', '96500000'),
('MANADO', 'ANDREE GERRY LAPIAN', '06', '2018', '117195000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '06', '2018', '143500000'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '06', '2018', '86500000'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '06', '2018', '219460000'),
('PONTIANAK', 'ANNAFI', '06', '2018', '51750000'),
('MEDAN', 'APRIZA PAHLEVI', '06', '2018', '408600000'),
('PARE-PARE', 'ASRI', '06', '2018', '94500000'),
('BOGOR', 'BEBEN NURSOBAH', '06', '2018', '622125000'),
('BOGOR', 'BUGGI PERMADI', '06', '2018', '948977000'),
('PALEMBANG', 'DARMA SETIAWAN', '06', '2018', '592400000'),
('KOTAWARINGIN TIMUR', 'DENI RUSDIYANTO', '06', '2018', '218400000'),
('PALU', 'DIDIK HARIYANTO SE', '06', '2018', '163999000'),
('PALEMBANG', 'EVAN PRAYOGA', '06', '2018', '553900000'),
('PARE-PARE', 'FACHWYN SYARIEF', '06', '2018', '590120000'),
('TANGERANG', 'FAUZAN IHSAN', '06', '2018', '239770000'),
('PALEMBANG', 'FEBRI KUMALA', '06', '2018', '390300000'),
('PALOPO', 'FIKRAM HAMSA', '06', '2018', '233770000'),
('PEKANBARU', 'HABIBI HASAN', '06', '2018', '82000000'),
('SAMARINDA', 'HADI RAHMADI', '06', '2018', '161000000'),
('TEGAL', 'HENGKY IRAWAN', '06', '2018', '370500000'),
('YOGYAKARTA', 'HERI DWIYANTO', '06', '2018', '37900000'),
('BALI', 'I GUSTI NGURAH ALIT NANJAYA', '06', '2018', '189500000'),
('SUKABUMI', 'IMAM MAULANA', '06', '2018', '98656313'),
('CIBUBUR', 'IMRON NOVIAN', '06', '2018', '87952000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '06', '2018', '118500000'),
('PEKANBARU', 'KAUTSAR', '06', '2018', '145000000'),
('JAMBI', 'KIKI APRIADINATA', '06', '2018', '233324000'),
('SAMARINDA', 'M. ANNASRULLAH', '06', '2018', '131300000'),
('PONTIANAK', 'MARWIYANTO', '06', '2018', '92000000'),
('ACEH', 'MAULIADI S', '06', '2018', '292030000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '06', '2018', '304800000'),
('MAKASSAR', 'MUH SATRIA DJALIL', '06', '2018', '134662000'),
('MAKASSAR', 'MUHAJAR', '06', '2018', '229925000'),
('TANGERANG', 'MUHAMAD YUSUF', '06', '2018', '48000000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '06', '2018', '305642487'),
('BANJARMASIN', 'MUHAMMAD ALI', '06', '2018', '252100000'),
('BOGOR', 'MULYA DODI', '06', '2018', '148000000'),
('ACEH', 'MUSFIKAR', '06', '2018', '101000000'),
('PONTIANAK', 'RAHMAD GUNALI', '06', '2018', '150000000'),
('MANADO', 'RICO KEINTJEM', '06', '2018', '196926000'),
('PURWAKARTA', 'RIKY ANDRIAN', '06', '2018', '233250000'),
('SAMARINDA', 'RINALDO VENOWASKY LUKAS', '06', '2018', '183300000'),
('CIBUBUR', 'RINDANG KUSWANTO', '06', '2018', '231728000'),
('KALIMALANG', 'ROBI', '06', '2018', '109000000'),
('ACEH', 'T. REZA ANANDA', '06', '2018', '233700000'),
('PURWAKARTA', 'TEDDY MULYANA', '06', '2018', '93500000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '06', '2018', '29054000'),
('SOLO', 'WAHYUDI', '06', '2018', '321152000'),
('PALU', 'WAWAN A. LADJIDJA', '06', '2018', '396041000'),
('SAMARINDA', 'WINANTO', '06', '2018', '151000000'),
('BALI', 'YANDE RENDI JONIARTANA', '06', '2018', '219000000'),
('PADANG', 'ZULFIKRI', '06', '2018', '49995000'),
('SERANG', 'AHMAD MUHYI CHAISAR', '07', '2018', '388000000'),
('MEDAN', 'AHMAD RICKY PRABOWO', '07', '2018', '70000000'),
('SERANG', 'AHMAD SAPRONI', '07', '2018', '767000000'),
('ACEH', 'AL FAJRI', '07', '2018', '222850000'),
('JAMBI', 'ALI MUSTAQIM', '07', '2018', '372397000'),
('PARE-PARE', 'ANDI RAJIB PRATAMA', '07', '2018', '99702000'),
('PADANG', 'ANDI SAPUTRA', '07', '2018', '345777000'),
('MEDAN', 'ANDREANO', '07', '2018', '587900000'),
('MANADO', 'ANDREE GERRY LAPIAN', '07', '2018', '211796000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '07', '2018', '220250000'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '07', '2018', '199300000'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '07', '2018', '109350000'),
('PONTIANAK', 'ANNAFI', '07', '2018', '355094000'),
('MEDAN', 'APRIZA PAHLEVI', '07', '2018', '581400000'),
('PEKANBARU', 'ARMEN. Z', '07', '2018', '130000000'),
('BOGOR', 'BEBEN NURSOBAH', '07', '2018', '229630000'),
('PEKANBARU', 'BENI SAPUTRA', '07', '2018', '432500000'),
('BOGOR', 'BUGGI PERMADI', '07', '2018', '1060587000'),
('PALOPO', 'CHIDIR BASRI', '07', '2018', '180722000'),
('PALEMBANG', 'DARMA SETIAWAN', '07', '2018', '488000000'),
('KOTAWARINGIN TIMUR', 'DENI RUSDIYANTO', '07', '2018', '662140000'),
('PALU', 'DIDIK HARIYANTO SE', '07', '2018', '570994000'),
('PALEMBANG', 'EVAN PRAYOGA', '07', '2018', '1034270000'),
('PARE-PARE', 'FACHWYN SYARIEF', '07', '2018', '553555000'),
('PALEMBANG', 'FEBRI KUMALA', '07', '2018', '1297200000'),
('PALOPO', 'FIKRAM HAMSA', '07', '2018', '567935000'),
('PEKANBARU', 'HABIBI HASAN', '07', '2018', '526500000'),
('LHOKSEUMAWE', 'HARIS OKTIAN', '07', '2018', '360702000'),
('LAMPUNG', 'HARUN JAUHARI', '07', '2018', '304455000'),
('TEGAL', 'HENGKY IRAWAN', '07', '2018', '330000000'),
('YOGYAKARTA', 'HERI DWIYANTO', '07', '2018', '243700000'),
('SUKABUMI', 'IMAM MAULANA', '07', '2018', '272153392'),
('CIBUBUR', 'IMRON NOVIAN', '07', '2018', '504182000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '07', '2018', '153000000'),
('PADANG', 'JUMADIL AWAL', '07', '2018', '71750000'),
('PEKANBARU', 'KAUTSAR', '07', '2018', '272000000'),
('JAMBI', 'KIKI APRIADINATA', '07', '2018', '676254000'),
('KALIMALANG', 'KISYANTO', '07', '2018', '283100000'),
('SAMARINDA', 'M. ANNASRULLAH', '07', '2018', '490600000'),
('ACEH', 'MAULIADI S', '07', '2018', '159390000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '07', '2018', '968800000'),
('MAKASSAR', 'MUH SATRIA DJALIL', '07', '2018', '191431000'),
('MAKASSAR', 'MUHAJAR', '07', '2018', '365400000'),
('TANGERANG', 'MUHAMAD YUSUF', '07', '2018', '60000000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '07', '2018', '802070708'),
('BOGOR', 'MULYA DODI', '07', '2018', '104990000'),
('ACEH', 'MUSFIKAR', '07', '2018', '187900000'),
('YOGYAKARTA', 'MUSTOFA', '07', '2018', '200700000'),
('PONTIANAK', 'RAHMAD GUNALI', '07', '2018', '95000000'),
('SOLO', 'RASIANA MUHAMAD SIDIK', '07', '2018', '311500000'),
('MANADO', 'RICO KEINTJEM', '07', '2018', '190316000'),
('PURWAKARTA', 'RIKY ANDRIAN', '07', '2018', '723600000'),
('SAMARINDA', 'RINALDO VENOWASKY LUKAS', '07', '2018', '493600000'),
('CIBUBUR', 'RINDANG KUSWANTO', '07', '2018', '132590000'),
('KALIMALANG', 'ROBI', '07', '2018', '426000000'),
('KALIMALANG', 'SUPARYADI', '07', '2018', '220000000'),
('ACEH', 'T. REZA ANANDA', '07', '2018', '518140000'),
('PURWAKARTA', 'TEDDY MULYANA', '07', '2018', '93850000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '07', '2018', '218381000'),
('SOLO', 'WAHYUDI', '07', '2018', '879250000'),
('PALU', 'WAWAN A. LADJIDJA', '07', '2018', '119254000'),
('SAMARINDA', 'WINANTO', '07', '2018', '116000000'),
('BALI', 'YANDE RENDI JONIARTANA', '07', '2018', '1207981000'),
('SERANG', 'AHMAD MUHYI CHAISAR', '08', '2018', '757350000'),
('SERANG', 'AHMAD SAPRONI', '08', '2018', '828050000'),
('ACEH', 'AL FAJRI', '08', '2018', '59210000'),
('JAMBI', 'ALI MUSTAQIM', '08', '2018', '924299000'),
('PARE-PARE', 'ANDI RAJIB PRATAMA', '08', '2018', '157000000'),
('PADANG', 'ANDI SAPUTRA', '08', '2018', '300989000'),
('MEDAN', 'ANDREANO', '08', '2018', '233700000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '08', '2018', '804000000'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '08', '2018', '358500000'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '08', '2018', '595920000'),
('MEDAN', 'APRIZA PAHLEVI', '08', '2018', '359450000'),
('PEKANBARU', 'ARMEN. Z', '08', '2018', '542000000'),
('PALOPO', 'ASWAN', '08', '2018', '266021000'),
('BOGOR', 'BEBEN NURSOBAH', '08', '2018', '302000000'),
('PEKANBARU', 'BENI SAPUTRA', '08', '2018', '432000000'),
('BOGOR', 'BUGGI PERMADI', '08', '2018', '479000000'),
('PALEMBANG', 'DARMA SETIAWAN', '08', '2018', '118000000'),
('KOTAWARINGIN TIMUR', 'DENI RUSDIYANTO', '08', '2018', '587800000'),
('PALU', 'DIDIK HARIYANTO SE', '08', '2018', '614975000'),
('PALEMBANG', 'EVAN PRAYOGA', '08', '2018', '1437900000'),
('PARE-PARE', 'FACHWYN SYARIEF', '08', '2018', '518900000'),
('PARE-PARE', 'FATURACHMAN', '08', '2018', '487979000'),
('TANGERANG', 'FAUZAN IHSAN', '08', '2018', '216400000'),
('PALEMBANG', 'FEBRI KUMALA', '08', '2018', '1125910405'),
('PALOPO', 'FIKRAM HAMSA', '08', '2018', '512703000'),
('PEKANBARU', 'HABIBI HASAN', '08', '2018', '379000000'),
('SAMARINDA', 'HADI RAHMADI', '08', '2018', '522100000'),
('LHOKSEUMAWE', 'HARIS OKTIAN', '08', '2018', '491448000'),
('LAMPUNG', 'HARUN JAUHARI', '08', '2018', '156529000'),
('TEGAL', 'HENGKY IRAWAN', '08', '2018', '264950000'),
('YOGYAKARTA', 'HERI DWIYANTO', '08', '2018', '330750000'),
('BALI', 'I GEDE ARDANA', '08', '2018', '241850000'),
('BALI', 'I GUSTI NGURAH ALIT NANJAYA', '08', '2018', '238000000'),
('SUKABUMI', 'IMAM MAULANA', '08', '2018', '213000000'),
('CIBUBUR', 'IMRON NOVIAN', '08', '2018', '308450000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '08', '2018', '347500000'),
('LHOKSEUMAWE', 'IRWANDA', '08', '2018', '40810000'),
('PEKANBARU', 'KAUTSAR', '08', '2018', '425000000'),
('JAMBI', 'KIKI APRIADINATA', '08', '2018', '347316000'),
('KALIMALANG', 'KISYANTO', '08', '2018', '652995000'),
('SAMARINDA', 'M. ANNASRULLAH', '08', '2018', '524150000'),
('ACEH', 'MAULIADI S', '08', '2018', '98220000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '08', '2018', '599450000'),
('MAKASSAR', 'MUH SATRIA DJALIL', '08', '2018', '135257000'),
('MAKASSAR', 'MUHAJAR', '08', '2018', '290500000'),
('TANGERANG', 'MUHAMAD YUSUF', '08', '2018', '95000000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '08', '2018', '801150000'),
('BANJARMASIN', 'MUHAMMAD ALI', '08', '2018', '2569850000'),
('BOGOR', 'MULYA DODI', '08', '2018', '314600000'),
('ACEH', 'MUSFIKAR', '08', '2018', '109000000'),
('YOGYAKARTA', 'MUSTOFA', '08', '2018', '70400000'),
('PONTIANAK', 'RAHMAD GUNALI', '08', '2018', '742000000'),
('SOLO', 'RASIANA MUHAMAD SIDIK', '08', '2018', '351500000'),
('PALEMBANG', 'RAYEN PETER', '08', '2018', '185108573'),
('MANADO', 'RICO KEINTJEM', '08', '2018', '71043000'),
('PURWAKARTA', 'RIKY ANDRIAN', '08', '2018', '489800000'),
('SAMARINDA', 'RINALDO VENOWASKY LUKAS', '08', '2018', '182600000'),
('CIBUBUR', 'RINDANG KUSWANTO', '08', '2018', '59600000'),
('KALIMALANG', 'ROBI', '08', '2018', '534600000'),
('ACEH', 'T. REZA ANANDA', '08', '2018', '228350000'),
('PURWAKARTA', 'TEDDY MULYANA', '08', '2018', '51500000'),
('MANADO', 'VALEN ALFALERY RAWUNG', '08', '2018', '151406000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '08', '2018', '307292000'),
('SOLO', 'WAHYUDI', '08', '2018', '451000000'),
('PALU', 'WAWAN A. LADJIDJA', '08', '2018', '661100000'),
('SAMARINDA', 'WINANTO', '08', '2018', '136000000'),
('BALI', 'YANDE RENDI JONIARTANA', '08', '2018', '1289400000'),
('PADANG', 'ZULFIKRI', '08', '2018', '610047000'),
('SERANG', 'AHMAD MUHYI CHAISAR', '09', '2018', '45000000'),
('SERANG', 'AHMAD SAPRONI', '09', '2018', '512150000'),
('ACEH', 'AL FAJRI', '09', '2018', '212000000'),
('JAMBI', 'ALI MUSTAQIM', '09', '2018', '707206000'),
('PARE-PARE', 'ANDI RAJIB PRATAMA', '09', '2018', '152418000'),
('PADANG', 'ANDI SAPUTRA', '09', '2018', '413979000'),
('MEDAN', 'ANDREANO', '09', '2018', '342200000'),
('MANADO', 'ANDREE GERRY LAPIAN', '09', '2018', '52428000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '09', '2018', '189400000'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '09', '2018', '267500000'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '09', '2018', '285780000'),
('PONTIANAK', 'ANNAFI', '09', '2018', '174000000'),
('MEDAN', 'APRIZA PAHLEVI', '09', '2018', '544100000'),
('PALOPO', 'ARIFANDI ALIAS', '09', '2018', '116000000'),
('PEKANBARU', 'ARMEN. Z', '09', '2018', '334000000'),
('PALOPO', 'ASWAN', '09', '2018', '146326000'),
('BOGOR', 'BEBEN NURSOBAH', '09', '2018', '562850000'),
('PEKANBARU', 'BENI SAPUTRA', '09', '2018', '331000000'),
('BOGOR', 'BUGGI PERMADI', '09', '2018', '442482000'),
('KOTAWARINGIN TIMUR', 'DENI RUSDIYANTO', '09', '2018', '433950000'),
('PALU', 'DIDIK HARIYANTO SE', '09', '2018', '585620000'),
('CIBUBUR', 'EDY SUYONO', '09', '2018', '135100000'),
('PALEMBANG', 'EVAN PRAYOGA', '09', '2018', '1486000000'),
('PARE-PARE', 'FACHWYN SYARIEF', '09', '2018', '486474000'),
('PARE-PARE', 'FATURACHMAN', '09', '2018', '157691000'),
('PALEMBANG', 'FEBRI KUMALA', '09', '2018', '1077900000'),
('PALOPO', 'FIKRAM HAMSA', '09', '2018', '318248000'),
('PEKANBARU', 'HABIBI HASAN', '09', '2018', '411000000'),
('LHOKSEUMAWE', 'HARIS OKTIAN', '09', '2018', '191505000'),
('SERANG', 'HARUN', '09', '2018', '463800000'),
('LAMPUNG', 'HARUN JAUHARI', '09', '2018', '390754000'),
('TEGAL', 'HENGKY IRAWAN', '09', '2018', '458500000'),
('YOGYAKARTA', 'HERI DWIYANTO', '09', '2018', '191050000'),
('BALI', 'I GEDE ARDANA', '09', '2018', '415200000'),
('BALI', 'I GUSTI NGURAH ALIT NANJAYA', '09', '2018', '792800000'),
('SUKABUMI', 'IMAM MAULANA', '09', '2018', '273330000'),
('CIBUBUR', 'IMRON NOVIAN', '09', '2018', '248100000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '09', '2018', '583000000'),
('KOTAWARINGIN TIMUR', 'JEFRI ANDREYANTO', '09', '2018', '490450000'),
('PEKANBARU', 'KAUTSAR', '09', '2018', '213700000'),
('JAMBI', 'KIKI APRIADINATA', '09', '2018', '468932000'),
('KALIMALANG', 'KISYANTO', '09', '2018', '391100000'),
('LAMPUNG', 'KURNIAWAN', '09', '2018', '85613000'),
('SAMARINDA', 'M. ANNASRULLAH', '09', '2018', '890500000'),
('ACEH', 'MAULIADI S', '09', '2018', '250650000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '09', '2018', '567100000'),
('MAKASSAR', 'MUH SATRIA DJALIL', '09', '2018', '562838000'),
('MAKASSAR', 'MUHAJAR', '09', '2018', '302200000'),
('TANGERANG', 'MUHAMAD YUSUF', '09', '2018', '99000000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '09', '2018', '634750000'),
('BANJARMASIN', 'MUHAMMAD ALI', '09', '2018', '865200000'),
('BOGOR', 'MULYA DODI', '09', '2018', '159000000'),
('TANGERANG', 'NANANG JUNAEDI', '09', '2018', '207440000'),
('PONTIANAK', 'RAHMAD GUNALI', '09', '2018', '443500000'),
('SOLO', 'RASIANA MUHAMAD SIDIK', '09', '2018', '134500000'),
('PALEMBANG', 'RAYEN PETER', '09', '2018', '472141688'),
('MANADO', 'RICO KEINTJEM', '09', '2018', '273867000'),
('PURWAKARTA', 'RIKY ANDRIAN', '09', '2018', '515050000'),
('SAMARINDA', 'RINALDO VENOWASKY LUKAS', '09', '2018', '55400000'),
('CIBUBUR', 'RINDANG KUSWANTO', '09', '2018', '28000000'),
('KALIMALANG', 'ROBI', '09', '2018', '559000000'),
('ACEH', 'T. REZA ANANDA', '09', '2018', '104800000'),
('PURWAKARTA', 'TEDDY MULYANA', '09', '2018', '42000000'),
('MANADO', 'VALEN ALFALERY RAWUNG', '09', '2018', '149583000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '09', '2018', '450614000'),
('SOLO', 'WAHYUDI', '09', '2018', '509038000'),
('PALU', 'WAWAN A. LADJIDJA', '09', '2018', '291909000'),
('SAMARINDA', 'WINANTO', '09', '2018', '92500000'),
('BALI', 'YANDE RENDI JONIARTANA', '09', '2018', '649000000'),
('CIBUBUR', 'ZAINAL ARIFIN', '09', '2018', '354300000'),
('PADANG', 'ZULFIKRI', '09', '2018', '318760000'),
('MEDAN', 'ZULPAN IRWANSYAH', '09', '2018', '166049904'),
('SERANG', 'AHMAD SAPRONI', '10', '2018', '512000000'),
('JAMBI', 'ALI MUSTAQIM', '10', '2018', '1068029000'),
('PADANG', 'ANDI SAPUTRA', '10', '2018', '289255000'),
('MEDAN', 'ANDREANO', '10', '2018', '475900000'),
('MANADO', 'ANDREE GERRY LAPIAN', '10', '2018', '67500000'),
('YOGYAKARTA', 'ANDRIAN PRASETYA HADI', '10', '2018', '394350000'),
('TEGAL', 'ANDRIES YUDI AFRIANA', '10', '2018', '287000000'),
('LHOKSEUMAWE', 'ANDY ARMAYA', '10', '2018', '268980000'),
('MEDAN', 'APRIZA PAHLEVI', '10', '2018', '311300000'),
('PALOPO', 'ARIFANDI ALIAS', '10', '2018', '164668000'),
('PEKANBARU', 'ARMEN. Z', '10', '2018', '407000000'),
('PALOPO', 'ASWAN', '10', '2018', '72326000'),
('BOGOR', 'BEBEN NURSOBAH', '10', '2018', '474880000'),
('PEKANBARU', 'BENI SAPUTRA', '10', '2018', '422000000'),
('BOGOR', 'BUGGI PERMADI', '10', '2018', '851700000'),
('CIBUBUR', 'EDY SUYONO', '10', '2018', '182100000'),
('PALEMBANG', 'EVAN PRAYOGA', '10', '2018', '806000000'),
('PARE-PARE', 'FACHWYN SYARIEF', '10', '2018', '418936000'),
('MAKASSAR', 'FADLI KASIM', '10', '2018', '427200000'),
('PARE-PARE', 'FATURACHMAN', '10', '2018', '327042000'),
('TANGERANG', 'FAUZAN IHSAN', '10', '2018', '470500000'),
('PALEMBANG', 'FEBRI KUMALA', '10', '2018', '394992508'),
('PEKANBARU', 'HABIBI HASAN', '10', '2018', '569500000'),
('LHOKSEUMAWE', 'HARIS OKTIAN', '10', '2018', '492472000'),
('PONTIANAK', 'HARRY KURNIAWAN', '10', '2018', '235000000'),
('SERANG', 'HARUN', '10', '2018', '480850000'),
('LAMPUNG', 'HARUN JAUHARI', '10', '2018', '489550000'),
('TEGAL', 'HENGKY IRAWAN', '10', '2018', '553800000'),
('YOGYAKARTA', 'HERI DWIYANTO', '10', '2018', '166700000'),
('BALI', 'I GEDE ARDANA', '10', '2018', '345200000'),
('SUKABUMI', 'IMAM MAULANA', '10', '2018', '337200000'),
('CIBUBUR', 'IMRON NOVIAN', '10', '2018', '244850000'),
('KALIMALANG', 'IRFAN SARIPUDIN', '10', '2018', '185000000'),
('KOTAWARINGIN TIMUR', 'JEFRI ANDREYANTO', '10', '2018', '236100000'),
('PEKANBARU', 'KAUTSAR', '10', '2018', '246000000'),
('JAMBI', 'KIKI APRIADINATA', '10', '2018', '451245000'),
('KALIMALANG', 'KISYANTO', '10', '2018', '295000000'),
('LAMPUNG', 'KURNIAWAN', '10', '2018', '132200000'),
('SAMARINDA', 'M. ANNASRULLAH', '10', '2018', '392800000'),
('ACEH', 'MAULIADI S', '10', '2018', '159885000'),
('SERANG', 'MOCHAMAD SUFRIYADI', '10', '2018', '534800000'),
('MAKASSAR', 'MUHAJAR', '10', '2018', '262200000'),
('BANJARMASIN', 'MUHAMMAD ALFIANNOR', '10', '2018', '517500000'),
('BANJARMASIN', 'MUHAMMAD ALI', '10', '2018', '1204950000'),
('BOGOR', 'MULYA DODI', '10', '2018', '400757000'),
('ACEH', 'MUSFIKAR', '10', '2018', '156300000'),
('YOGYAKARTA', 'MUSTOFA', '10', '2018', '202700000'),
('TANGERANG', 'NANANG JUNAEDI', '10', '2018', '165000000'),
('PONTIANAK', 'RAHMAD GUNALI', '10', '2018', '1391000000'),
('SOLO', 'RASIANA MUHAMAD SIDIK', '10', '2018', '60000000'),
('PALEMBANG', 'RAYEN PETER', '10', '2018', '666000000'),
('MANADO', 'RICO KEINTJEM', '10', '2018', '500119000'),
('PURWAKARTA', 'RIKY ANDRIAN', '10', '2018', '246400000'),
('SAMARINDA', 'RINALDO VENOWASKY LUKAS', '10', '2018', '150000000'),
('KALIMALANG', 'ROBI', '10', '2018', '724225000'),
('PALOPO', 'SUHARNO', '10', '2018', '215493000'),
('PURWAKARTA', 'TEDDY MULYANA', '10', '2018', '367300000'),
('MANADO', 'VALEN ALFALERY RAWUNG', '10', '2018', '300382000'),
('MANADO', 'VICTOR NORIS KARAMAHA', '10', '2018', '136243000'),
('SOLO', 'WAHYUDI', '10', '2018', '433190000'),
('SAMARINDA', 'WINANTO', '10', '2018', '116500000'),
('BALI', 'YANDE RENDI JONIARTANA', '10', '2018', '1027300000'),
('PADANG', 'ZULFIKRI', '10', '2018', '344305000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;