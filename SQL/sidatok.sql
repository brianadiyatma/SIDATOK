-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2021 at 01:05 PM
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
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('superadmin','admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `password`, `status`) VALUES
(1, 'nabil', '$2y$10$8.0DZkar1yhjfp3H5FsQAeySkRC2Aeo/hDGVbo7FfWAUThavrPW72', 'superadmin'),
(2, 'nabil1', '$2y$10$Yb0UXy5QnoNareqhnh7kpOm3sXwst2qdRqtBDux3.ksyI0Zq3S4hK', 'admin'),
(3, 'nabil2', '$2y$10$Xxk.wgl2TsL8s3bWPNUpSeH5pq5l.ONTOWDYskgHcKW4hQEhurNrS', 'user');

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
(0, '1222', 'asmsn', '50000', '80000', '2021-03-12', '60000', '80000', '111', 'yoo');

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
