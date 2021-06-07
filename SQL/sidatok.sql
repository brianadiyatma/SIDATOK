-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 07:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidatok`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin','user') NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `nama`, `username`, `password`, `status`, `gambar`) VALUES
(1, 'M Nabil', 'naaa', '$2y$10$9RBmA94PZsn.QODAl2p1mOKMuRd98rkA3wWkiZ2sQHf8wmTJ8Ygaq', 'superadmin', '2021060744057.jpg'),
(4, 'Muhammad Nabil', 'nabil111', '$2y$10$R/ka9q2QHXdUrXAKB/si7O8HGm.c9VNXNq6vBa/C25mPvaIxqHqb.', 'admin', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `data_barang`
--

CREATE TABLE `data_barang` (
  `id` int(11) NOT NULL,
  `barcode` text NOT NULL,
  `nama_barang` text NOT NULL,
  `harga_beli` text NOT NULL,
  `harga_jual` text NOT NULL,
  `expired` date NOT NULL,
  `harga_grosir` text NOT NULL,
  `jenis_barang` text NOT NULL,
  `jumlah_barang` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_barang`
--

INSERT INTO `data_barang` (`id`, `barcode`, `nama_barang`, `harga_beli`, `harga_jual`, `expired`, `harga_grosir`, `jenis_barang`, `jumlah_barang`, `deskripsi`) VALUES
(3, '12345', 'Aqua', '10000', '12000', '2021-12-02', '11000', 'Minuman', '1', 'SANGAT HALAL'),
(4, '9099009', 'Orang Tua', '10000', '12000', '2013-01-10', '11000', 'Haram', '2', 'INI HARAM'),
(5, '9090999', 'fanta', '11000', '12000', '2001-02-01', '11500', 'Minum', '1', 'yoo'),
(6, '100299', 'Mabil', '80000', '90000', '2001-07-03', '85000', 'Makanan', '2', 'uhuy'),
(7, '898655', 'Motar', '60000', '70000', '2009-05-03', '65000', 'Motor', '2', 'tyty'),
(16, '1828382', 'Mangga', '10000', '20000', '2021-06-07', '15000', 'sarung', '2', 'sarung ngganteng');

-- --------------------------------------------------------

--
-- Table structure for table `pemasukan`
--

CREATE TABLE `pemasukan` (
  `id` int(11) NOT NULL,
  `nomor_nota` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `jumlah_item` varchar(50) NOT NULL,
  `tanggal` varchar(50) NOT NULL,
  `laba` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemasukan`
--

INSERT INTO `pemasukan` (`id`, `nomor_nota`, `total`, `jumlah_item`, `tanggal`, `laba`) VALUES
(2, '915', '900000', '2', '2021-06-01', ''),
(3, '3933', '21000', '2', '2021-06-02', ''),
(4, '2726', '56000', '5', '2021-06-07', '10000');

-- --------------------------------------------------------

--
-- Table structure for table `pengeluaran`
--

CREATE TABLE `pengeluaran` (
  `id` int(11) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `nominal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengeluaran`
--

INSERT INTO `pengeluaran` (`id`, `tgl`, `ket`, `nominal`) VALUES
(6, '2021-06-01', 'Sewaaaa', '100000'),
(7, '2021-06-03', 'Sewas', '10000'),
(9, '2021-06-07', 'Sewa rumah', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `rincian_transaksi`
--

CREATE TABLE `rincian_transaksi` (
  `id` int(11) NOT NULL,
  `kode_transaksi` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `stok` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `pelanggan` enum('umum','grosir') NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rincian_transaksi`
--

INSERT INTO `rincian_transaksi` (`id`, `kode_transaksi`, `nama_barang`, `barcode`, `harga`, `stok`, `jumlah`, `pelanggan`, `deskripsi`) VALUES
(6, 282, 'Aqua', '12345', '10000', '1', '1', 'umum', 'SANGAT HALAL'),
(7, 282, 'Mabil', '100299', '80000', '2', '1', 'umum', 'uhuy'),
(8, 8258, 'Aqua', '12345', '11000', '1', '1', 'grosir', 'SANGAT HALAL'),
(9, 8258, 'Mabil', '100299', '80000', '2', '1', 'umum', 'uhuy'),
(12, 915, 'Aqua', '12345', '10000', '1', '1', 'umum', 'SANGAT HALAL'),
(13, 915, 'Mabil', '100299', '80000', '2', '1', 'umum', 'uhuy'),
(14, 3933, 'Orang Tua', '9099009', '10000', '2', '1', 'umum', 'INI HARAM'),
(15, 3933, 'Aqua', '12345', '11000', '1', '1', 'grosir', 'SANGAT HALAL'),
(16, 2726, 'fanta', '9090999', '12000', '1', '3', 'umum', 'yoo'),
(17, 2726, 'Mangga', '1828382', '10000', '2', '2', 'umum', 'sarung ngganteng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_barang`
--
ALTER TABLE `data_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pemasukan`
--
ALTER TABLE `pemasukan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rincian_transaksi`
--
ALTER TABLE `rincian_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `data_barang`
--
ALTER TABLE `data_barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pemasukan`
--
ALTER TABLE `pemasukan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pengeluaran`
--
ALTER TABLE `pengeluaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `rincian_transaksi`
--
ALTER TABLE `rincian_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
