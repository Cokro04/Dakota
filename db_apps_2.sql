-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2018 at 07:13 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_apps_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms_otoritas`
--

CREATE TABLE `tbl_cms_otoritas` (
  `id` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `modul` varchar(250) NOT NULL,
  `nama` text CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `gid` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms_user`
--

CREATE TABLE `tbl_cms_user` (
  `userid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `username` varchar(30) COLLATE latin1_general_ci NOT NULL,
  `gid` int(11) NOT NULL,
  `employeeid` int(11) NOT NULL,
  `userfullname` varchar(25) COLLATE latin1_general_ci NOT NULL,
  `userpassword` varchar(32) COLLATE latin1_general_ci DEFAULT NULL,
  `userstatus` char(2) COLLATE latin1_general_ci NOT NULL,
  `useraddress` text COLLATE latin1_general_ci NOT NULL,
  `useremail` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `userphone` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `userhandphone` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `lastactivity` int(11) NOT NULL,
  `disabled` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cms_usergroup`
--

CREATE TABLE `tbl_cms_usergroup` (
  `gid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `namagroup` varchar(100) NOT NULL DEFAULT '',
  `description` varchar(200) NOT NULL DEFAULT '',
  `otoritas` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customerid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `tipeid` int(11) NOT NULL DEFAULT '1' COMMENT '1=biasa;2=khusus;',
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `negaraid` int(11) NOT NULL,
  `propinsiid` int(11) NOT NULL,
  `propinsikotaid` int(11) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `personal_nama` varchar(100) NOT NULL,
  `personal_hp` varchar(30) NOT NULL,
  `personal_email` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customer`
--

INSERT INTO `tbl_customer` (`customerid`, `create_date`, `create_userid`, `update_date`, `update_userid`, `tipeid`, `nama`, `alamat`, `negaraid`, `propinsiid`, `propinsikotaid`, `kodepos`, `telp`, `fax`, `email`, `website`, `personal_nama`, `personal_hp`, `personal_email`, `keterangan`) VALUES
(1, '2018-02-03 05:02:59', 1, '2018-02-02 22:02:59', 1, 1, 'cokro', '                        \r\n                      cianjur', 1, 1, 1, '43274', '1', '876', 'cokro@gmail.com', '11', '1', '123', '1', '1'),
(2, '2018-02-03 05:02:41', 1, '2018-02-02 22:02:41', 1, 1, 'cokro edi', 'naringgul                        \r\n                      ', 1, 1, 1, '43274', '1', '6543', 'cokro@gmail.com', '123', '1', '123', '1', '1'),
(3, '2018-02-03 05:02:29', 1, '2018-02-02 22:02:29', 1, 1, 'alibaba', 'sanghai                        \r\n                      ', 1, 1, 1, '12345', '1', '02213546', 'asdw123', '1231', '1', '0251356432', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota`
--

CREATE TABLE `tbl_kota` (
  `kotaid` int(10) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `namakota` varchar(30) COLLATE latin1_general_ci DEFAULT NULL,
  `propid` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kota_kecamatan`
--

CREATE TABLE `tbl_kota_kecamatan` (
  `kotakecamatanid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `kodepos` varchar(5) COLLATE latin1_general_ci NOT NULL,
  `propinsikotaid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_kota_kecamatan`
--

INSERT INTO `tbl_kota_kecamatan` (`kotakecamatanid`, `create_date`, `create_userid`, `update_date`, `update_userid`, `nama`, `kodepos`, `propinsikotaid`) VALUES
(1, '2018-02-03 03:02:35', 1, '2018-02-02 20:02:35', 1, 'sarijadi', '12345', 1),
(2, '2018-02-03 03:02:39', 1, '2018-02-02 20:02:39', 1, 'naringgul', '43274', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_layanan`
--

CREATE TABLE `tbl_layanan` (
  `layananid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `alias` varchar(50) NOT NULL,
  `ringkas` text NOT NULL,
  `lengkap` text NOT NULL,
  `gambar` text NOT NULL,
  `gambar1` text NOT NULL,
  `tanggalpost` datetime NOT NULL,
  `published` char(1) NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_layanan`
--

INSERT INTO `tbl_layanan` (`layananid`, `create_date`, `create_userid`, `update_date`, `update_userid`, `judul`, `alias`, `ringkas`, `lengkap`, `gambar`, `gambar1`, `tanggalpost`, `published`, `view`) VALUES
(1, '2018-02-02 02:02:27', 1, '2018-02-02 19:02:02', 1, 'alibaba', '                 ali   ', 'aliba', 'alibaba city', '1', '1', '2018-02-03 02:02:02', '1', 0),
(3, '2018-02-03 09:02:12', 1, '2018-02-03 02:02:12', 1, 'khusus', '                    khs', 'k', 'khusus banget', '1', '1', '2018-02-03 09:02:12', '1', 0),
(4, '2018-02-03 09:02:48', 1, '2018-02-03 02:02:48', 1, 'expres', '     exp               ', 'ex', 'expres cepat', '1', '1', '2018-02-03 09:02:48', '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mitra`
--

CREATE TABLE `tbl_mitra` (
  `mitraid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `negaraid` int(11) NOT NULL,
  `propinsiid` int(11) NOT NULL,
  `propinsikotaid` int(11) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `telp` varchar(30) NOT NULL,
  `fax` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `personal_nama` varchar(100) NOT NULL,
  `personal_hp` varchar(30) NOT NULL,
  `personal_email` varchar(100) NOT NULL,
  `keterangan` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mitra`
--

INSERT INTO `tbl_mitra` (`mitraid`, `create_date`, `create_userid`, `update_date`, `update_userid`, `nama`, `alamat`, `negaraid`, `propinsiid`, `propinsikotaid`, `kodepos`, `telp`, `fax`, `email`, `website`, `personal_nama`, `personal_hp`, `personal_email`, `keterangan`) VALUES
(1, '2018-02-03 05:02:49', 1, '2018-02-02 22:02:49', 1, 'cokro', '                        \r\nsarijadi                      ', 1, 1, 1, '12342', '1', '321', '123', '123', '1', '1234', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_negara`
--

CREATE TABLE `tbl_negara` (
  `negaraid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `kode` varchar(2) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `zona` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_negara`
--

INSERT INTO `tbl_negara` (`negaraid`, `create_date`, `create_userid`, `update_date`, `update_userid`, `kode`, `nama`, `zona`) VALUES
(1, '2018-01-30 04:01:36', 1, '2018-02-03 08:30:43', 1, 'IN', 'INDONESIA21', 'A'),
(2, '2018-01-30 04:01:00', 1, '2018-01-30 15:27:18', 1, 'IN', 'INDIA', 'A'),
(3, '2018-02-02 10:02:44', 1, '2018-02-02 09:23:05', 1, 'AR', 'ARAB', 'A'),
(4, '2018-02-03 09:02:12', 1, '2018-02-03 08:35:25', 1, 'tu', 'turkey', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_propinsi`
--

CREATE TABLE `tbl_propinsi` (
  `propinsiid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_propinsi`
--

INSERT INTO `tbl_propinsi` (`propinsiid`, `create_date`, `create_userid`, `update_date`, `update_userid`, `nama`) VALUES
(1, '2018-01-30 05:01:43', 1, '2018-01-29 22:01:43', 1, 'DKI Jakarta'),
(8, '2018-02-02 11:02:41', 1, '2018-02-02 04:02:41', 1, 'jawa tengah'),
(7, '2018-02-02 11:02:30', 1, '2018-02-02 04:02:30', 1, 'jawa barat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_propinsi_kota`
--

CREATE TABLE `tbl_propinsi_kota` (
  `propinsikotaid` int(11) NOT NULL,
  `create_date` datetime NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin1_general_ci DEFAULT NULL,
  `propinsiid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `tbl_propinsi_kota`
--

INSERT INTO `tbl_propinsi_kota` (`propinsikotaid`, `create_date`, `create_userid`, `update_date`, `update_userid`, `nama`, `propinsiid`) VALUES
(1, '2018-01-31 12:01:09', 1, '2018-01-30 18:01:03', 1, 'Jakarta Pusat', 1),
(2, '2018-02-02 10:02:42', 1, '2018-02-02 03:02:42', 1, 'bandung', 2),
(3, '2018-02-02 10:02:21', 1, '2018-02-02 03:02:21', 1, 'cianjur', 2),
(10, '2018-02-03 02:02:09', 1, '2018-02-02 19:02:09', 1, 'bandung', 7),
(11, '2018-02-03 02:02:22', 1, '2018-02-02 19:02:22', 1, 'cianjur', 7),
(12, '2018-02-03 02:02:45', 1, '2018-02-02 19:02:45', 1, 'diy', 8),
(9, '2018-02-03 02:02:46', 1, '2018-02-02 19:02:43', 1, 'madiun', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tarif`
--

CREATE TABLE `tbl_tarif` (
  `tarifid` int(11) NOT NULL,
  `create_date` date NOT NULL,
  `create_userid` int(11) NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `update_userid` int(11) NOT NULL,
  `propinsiid` int(11) NOT NULL,
  `propinsikotaid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `layananid` int(11) NOT NULL,
  `harga1` double NOT NULL,
  `harga2` double NOT NULL,
  `harimin` int(11) NOT NULL,
  `harimax` int(11) NOT NULL,
  `beratmin` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` varchar(50) NOT NULL,
  `nm_user` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level_user` enum('Admin','Petugas') NOT NULL,
  `alamat_user` varchar(100) NOT NULL,
  `notelp_user` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `nm_user`, `username`, `password`, `level_user`, `alamat_user`, `notelp_user`) VALUES
('1', 'Admin', 'admin123', '0192023a7bbd73250516f069df18b500', 'Admin', 'Jalan Sariasih No.54, Sarijadi, Sukasari, Kota Bandung, Jawa Barat 40151, Indonesia', '082295673583');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cms_otoritas`
--
ALTER TABLE `tbl_cms_otoritas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cms_user`
--
ALTER TABLE `tbl_cms_user`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `tbl_cms_usergroup`
--
ALTER TABLE `tbl_cms_usergroup`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customerid`);

--
-- Indexes for table `tbl_kota_kecamatan`
--
ALTER TABLE `tbl_kota_kecamatan`
  ADD PRIMARY KEY (`kotakecamatanid`);

--
-- Indexes for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  ADD PRIMARY KEY (`layananid`);

--
-- Indexes for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  ADD PRIMARY KEY (`mitraid`);

--
-- Indexes for table `tbl_negara`
--
ALTER TABLE `tbl_negara`
  ADD PRIMARY KEY (`negaraid`);

--
-- Indexes for table `tbl_propinsi`
--
ALTER TABLE `tbl_propinsi`
  ADD PRIMARY KEY (`propinsiid`);

--
-- Indexes for table `tbl_propinsi_kota`
--
ALTER TABLE `tbl_propinsi_kota`
  ADD PRIMARY KEY (`propinsikotaid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kota_kecamatan`
--
ALTER TABLE `tbl_kota_kecamatan`
  MODIFY `kotakecamatanid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_layanan`
--
ALTER TABLE `tbl_layanan`
  MODIFY `layananid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_mitra`
--
ALTER TABLE `tbl_mitra`
  MODIFY `mitraid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_negara`
--
ALTER TABLE `tbl_negara`
  MODIFY `negaraid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_propinsi`
--
ALTER TABLE `tbl_propinsi`
  MODIFY `propinsiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_propinsi_kota`
--
ALTER TABLE `tbl_propinsi_kota`
  MODIFY `propinsikotaid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
