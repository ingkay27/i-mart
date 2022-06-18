-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 07:20 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `nama_barang` varchar(30) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `id_merk` int(11) DEFAULT NULL,
  `kode_supplier` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kode_barang`, `nama_barang`, `harga`, `stok`, `id_jenis`, `id_merk`, `kode_supplier`) VALUES
(3, 'BRG0003', 'kacang merah', 500000, 17, 1, 1, 'sp002'),
(5, 'BRG0005', 'kacang joglo', 50000, 20, 1, 1, 'sp001'),
(6, 'BRG0006', 'sayur kol', 3000, 994, 1, 1, 'sp001'),
(10, 'BRG0010', 'kacang panjang', 2000, 109, 2, NULL, 'sp001');

-- --------------------------------------------------------

--
-- Table structure for table `detail_faktur`
--

CREATE TABLE `detail_faktur` (
  `kode_faktur` varchar(10) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_po`
--

CREATE TABLE `detail_po` (
  `kode_po` varchar(10) DEFAULT NULL,
  `kode_barang` varchar(10) DEFAULT NULL,
  `qty` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_po`
--

INSERT INTO `detail_po` (`kode_po`, `kode_barang`, `qty`) VALUES
('TR00002', 'BRG0006', 900),
('TR00003', 'BRG0006', 3),
('TR00004', 'BRG0007', 555),
('TR00005', 'BRG0006', 90),
('TR00006', 'BRG0004', 3),
('TR00006', 'BRG0007', 4),
('TR00006', 'BRG0006', 555),
('TR00007', 'BRG0005', 80),
('TR00007', 'BRG0004', 8),
('TR00007', 'BRG0006', 10),
('TR00008', 'BRG0009', 9),
('TR00008', 'BRG0008', 9),
('TR00009', 'BRG0006', 11),
('TR00009', 'BRG0005', 11),
('TR00010', 'BRG0005', 100),
('TR00011', 'BRG0004', 20),
('TR00011', 'BRG0007', 1),
('TR00012', 'BRG0010', 99),
('TR00013', 'BRG0006', 9000000),
('TR00014', 'BRG0004', 77),
('TR00016', 'BRG0009', 90),
(NULL, 'BRG0006', 11),
('PO00029', 'BRG0008', 22),
('PO00029', 'BRG0005', 12),
('PO00029', 'BRG0009', 12),
('PO00034', 'BRG0003', 200),
('PO00035', 'BRG0003', 3),
('PO00038', 'BRG0006', 6);

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `id_faktur` int(11) NOT NULL,
  `kode_faktur` varchar(10) NOT NULL,
  `tgl_faktur` date NOT NULL,
  `total_harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenis_barang`
--

CREATE TABLE `jenis_barang` (
  `id_jenis` int(11) NOT NULL,
  `jenis_barang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_barang`
--

INSERT INTO `jenis_barang` (`id_jenis`, `jenis_barang`) VALUES
(1, 'sayur organik'),
(2, 'sayur basah'),
(8, 'sayur import'),
(9, 'sayur export'),
(10, 'sayur-sayuran');

-- --------------------------------------------------------

--
-- Table structure for table `merk_barang`
--

CREATE TABLE `merk_barang` (
  `id_merk` int(11) NOT NULL,
  `merk_barang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `merk_barang`
--

INSERT INTO `merk_barang` (`id_merk`, `merk_barang`) VALUES
(1, 'Merk Super');

-- --------------------------------------------------------

--
-- Table structure for table `po`
--

CREATE TABLE `po` (
  `id_po` int(11) NOT NULL,
  `kode_po` varchar(10) DEFAULT NULL,
  `tgl_po` date DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `po`
--

INSERT INTO `po` (`id_po`, `kode_po`, `tgl_po`, `total_harga`) VALUES
(31, 'PO00029', '2019-09-14', 702000),
(34, 'PO00034', '2021-03-09', 100000000),
(37, 'PO00035', '2021-03-16', 1500000),
(38, 'PO00038', '2021-03-16', 18000);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `kode_supplier` varchar(10) DEFAULT NULL,
  `nama_supplier` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_telp` int(15) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `kode_supplier`, `nama_supplier`, `username`, `password`, `no_telp`, `alamat`) VALUES
(1, 'sp001', 'Supplier A', 'suppliera', 'suppliera', 8989, 'hhhhhhhh'),
(2, 'sp002', 'Supplier B', 'supplierb', 'supplierb', 900, 'pemalang');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faktur`
--

CREATE TABLE `tbl_faktur` (
  `id_faktur` varchar(10) NOT NULL,
  `no_faktur` varchar(10) NOT NULL,
  `id_po` int(11) NOT NULL,
  `kode_barang` varchar(10) NOT NULL,
  `nama_barang` varchar(30) NOT NULL,
  `qty` int(5) NOT NULL,
  `harga` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `kode_supplier` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `level` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama_user`, `username`, `password`, `level`) VALUES
(1, 'Administrator', 'admin', 'admin', 'admin'),
(2, 'Petugas Gudang', 'gudang', 'gudang', 'petugas gudang'),
(3, 'Manajer', 'manajer', 'manajer', 'manajer'),
(4, 'oficer', 'oficer', 'oficer', 'petugas gudang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_merk` (`id_merk`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indexes for table `detail_faktur`
--
ALTER TABLE `detail_faktur`
  ADD PRIMARY KEY (`kode_faktur`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `id_faktur` (`id_faktur`),
  ADD KEY `kode_faktur` (`kode_faktur`);

--
-- Indexes for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `merk_barang`
--
ALTER TABLE `merk_barang`
  ADD PRIMARY KEY (`id_merk`);

--
-- Indexes for table `po`
--
ALTER TABLE `po`
  ADD PRIMARY KEY (`id_po`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `tbl_faktur`
--
ALTER TABLE `tbl_faktur`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `id_faktur` (`id_faktur`),
  ADD KEY `id_faktur_2` (`id_faktur`),
  ADD KEY `id_po` (`id_po`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jenis_barang`
--
ALTER TABLE `jenis_barang`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `merk_barang`
--
ALTER TABLE `merk_barang`
  MODIFY `id_merk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `po`
--
ALTER TABLE `po`
  MODIFY `id_po` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_merk`) REFERENCES `merk_barang` (`id_merk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `barang_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_barang` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faktur`
--
ALTER TABLE `faktur`
  ADD CONSTRAINT `faktur_ibfk_1` FOREIGN KEY (`kode_faktur`) REFERENCES `detail_faktur` (`kode_faktur`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_faktur`
--
ALTER TABLE `tbl_faktur`
  ADD CONSTRAINT `tbl_faktur_ibfk_1` FOREIGN KEY (`id_po`) REFERENCES `po` (`id_po`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
