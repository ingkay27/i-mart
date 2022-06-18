-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 04:55 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `kode_barang` varchar(5) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(50) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`kode_barang`, `nama_barang`, `jenis_barang`, `harga_beli`, `harga_jual`, `stok`) VALUES
('00001', 'es krim', 'minuman', 2000, 2500, 101),
('00002', 'makaroni', 'makanan', 3000, 5000, 175),
('00003', 'taro', 'makanan', 800, 1000, 195);

-- --------------------------------------------------------

--
-- Table structure for table `faktur`
--

CREATE TABLE `faktur` (
  `id_faktur` int(11) NOT NULL,
  `no_faktur` int(11) NOT NULL,
  `total_faktur` int(11) NOT NULL,
  `bayar_faktur` int(11) NOT NULL,
  `kembali_faktur` int(11) NOT NULL,
  `tanggal_faktur` varchar(100) NOT NULL,
  `kasir` varchar(50) NOT NULL,
  `id_suplier` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faktur`
--

INSERT INTO `faktur` (`id_faktur`, `no_faktur`, `total_faktur`, `bayar_faktur`, `kembali_faktur`, `tanggal_faktur`, `kasir`, `id_suplier`) VALUES
(1, 471815, 280000, 300000, 20000, '0000-00-00', 'admin', 2),
(2, 291639, 300000, 300000, 0, '04-03-2021', 'admin', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faktur_detail`
--

CREATE TABLE `faktur_detail` (
  `id_faktur_detail` int(11) NOT NULL,
  `id_faktur` int(11) NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faktur_detail`
--

INSERT INTO `faktur_detail` (`id_faktur_detail`, `id_faktur`, `kode_barang`, `qty`, `total`) VALUES
(1, 1, '00001', 100, 200000),
(2, 1, '00003', 100, 80000),
(3, 2, '00002', 100, 300000);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE `suplier` (
  `id_suplier` int(11) NOT NULL,
  `nama_suplier` varchar(50) NOT NULL,
  `alamat_suplier` varchar(200) NOT NULL,
  `no_suplier` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`id_suplier`, `nama_suplier`, `alamat_suplier`, `no_suplier`) VALUES
(2, 'inky ', 'burujul wetan', '081214134521'),
(3, 'dinda', 'sindang wasa', '084237788443');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `no_transaksi` int(11) NOT NULL,
  `total_transaksi` int(11) NOT NULL,
  `bayar_transaksi` int(11) NOT NULL,
  `kembali_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` varchar(100) NOT NULL,
  `nama_kasir` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `no_transaksi`, `total_transaksi`, `bayar_transaksi`, `kembali_transaksi`, `tanggal_transaksi`, `nama_kasir`) VALUES
(1, 613633, 32500, 40000, 7500, '0000-00-00', 'admin'),
(2, 121826, 25000, 30000, 5000, '04-03-2021', 'admin'),
(3, 461154, 4000, 5000, 1000, '04-03-2021', 'admin'),
(4, 815836, 25000, 30000, 5000, '04-03-2021', 'admin'),
(5, 412516, 15000, 20000, 5000, '04-03-2021', 'admin'),
(6, 774956, 7500, 10000, 2500, '04-03-2021', 'admin'),
(7, 734293, 15000, 20000, 5000, '04-03-2021', 'admin'),
(8, 707085, 32500, 35000, 2500, '04-03-2021', 'admin'),
(9, 822916, 85000, 100000, 15000, '04-03-2021', 'admin'),
(10, 490532, 5000, 10000, 5000, '04-03-2021', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_detail`
--

CREATE TABLE `transaksi_detail` (
  `id_transaksi_detail` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `kode_barang` varchar(5) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_detail`
--

INSERT INTO `transaksi_detail` (`id_transaksi_detail`, `id_transaksi`, `kode_barang`, `qty`, `total`) VALUES
(1, 7, '00002', 3, 15000),
(2, 8, '00002', 4, 20000),
(3, 8, '00001', 5, 12500),
(4, 9, '00001', 34, 85000),
(5, 10, '00001', 2, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'inky27', 'pramud2711', 'officer'),
(3, 'ujang', 'ujang123', 'admin'),
(11, 'kasja', '12345678', 'officer'),
(12, 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`kode_barang`);

--
-- Indexes for table `faktur`
--
ALTER TABLE `faktur`
  ADD PRIMARY KEY (`id_faktur`),
  ADD KEY `id_suplier` (`id_suplier`);

--
-- Indexes for table `faktur_detail`
--
ALTER TABLE `faktur_detail`
  ADD PRIMARY KEY (`id_faktur_detail`),
  ADD KEY `id_faktur` (`id_faktur`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD PRIMARY KEY (`id_transaksi_detail`),
  ADD KEY `id_transaksi` (`id_transaksi`),
  ADD KEY `kode_barang` (`kode_barang`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faktur`
--
ALTER TABLE `faktur`
  MODIFY `id_faktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faktur_detail`
--
ALTER TABLE `faktur_detail`
  MODIFY `id_faktur_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  MODIFY `id_transaksi_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `faktur`
--
ALTER TABLE `faktur`
  ADD CONSTRAINT `faktur_ibfk_1` FOREIGN KEY (`id_suplier`) REFERENCES `suplier` (`id_suplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `faktur_detail`
--
ALTER TABLE `faktur_detail`
  ADD CONSTRAINT `faktur_detail_ibfk_1` FOREIGN KEY (`id_faktur`) REFERENCES `faktur` (`id_faktur`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `faktur_detail_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi_detail`
--
ALTER TABLE `transaksi_detail`
  ADD CONSTRAINT `transaksi_detail_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_detail_ibfk_2` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
