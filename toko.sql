-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 02:56 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `size` enum('S','M','L','XL','XXL') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `qty`, `subtotal`, `size`) VALUES
(77, 110, 1, 400000, 'M'),
(78, 111, 1, 30000000, 'S');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `telp`, `username`, `password`) VALUES
(22, 'fikri', 'mojokerto', '0857364', 'fikri', '202cb962ac59075b964b07152d234b70'),
(23, 'abyyy', 'malang', '0821', 'abyyy', '827ccb0eea8a706c4c34a16891f84e7b'),
(24, 'abyyyy', 'malang', '0857364', 'abyyyy', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `level` enum('Admin','Petugas') NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `level`, `foto`) VALUES
(12, 'naufal', 'naufal', '827ccb0eea8a706c4c34a16891f84e7b', 'Admin', 'asep058.jpg'),
(13, 'rasyid', 'rasyid', '827ccb0eea8a706c4c34a16891f84e7b', 'Petugas', 'DSCF4647.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `harga`, `foto`) VALUES
(31, 'JAKET COACH ERIGO NAGA HITAM', 'ini jaket bagus', 1000000, 'produk1-min.jpg'),
(32, 'BAJU OVERSIZE', 'ini keren', 30000000, 'produk3-min.jpg'),
(33, 'BAJU TREND SEKARANG', 'ini bagus', 400000, 'produk6-min.jpg'),
(34, 'BAJU KECE BANGET', 'ini kece', 250000, 'produk5-min.jpg'),
(35, 'KEMEJA HITAM', 'ini bikin lau goks', 150000, 'kemeja hitam.png'),
(36, 'JACKET MOTOR', 'ini bikin lo kece abis', 100000, 'jaket motor.png'),
(37, 'KAOS GOKU', 'ini bikin wibu keren', 250000, 'produk2-min (1).jpg'),
(38, 'KAOS PUTIH', 'ini simple', 99000, 'baju putih.png'),
(41, 'baju seragam', 'ini baju seragam', 10000, 'DSCF4647.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `tgl_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_pelanggan`, `id_petugas`, `id_produk`, `tgl_transaksi`) VALUES
(17, 14, 0, 0, '2022-09-11'),
(18, 14, 0, 0, '2022-09-11'),
(19, 14, 0, 0, '2022-09-11'),
(20, 14, 0, 0, '2022-09-11'),
(21, 14, 0, 0, '2022-09-11'),
(22, 14, 0, 0, '2022-09-11'),
(23, 14, 0, 0, '2022-09-11'),
(24, 14, 0, 0, '2022-09-11'),
(25, 14, 0, 0, '2022-09-11'),
(26, 14, 0, 0, '2022-09-12'),
(27, 2, 0, 0, '2022-09-13'),
(28, 2, 0, 0, '2022-09-13'),
(29, 2, 0, 0, '2022-09-13'),
(30, 2, 0, 0, '2022-09-13'),
(31, 2, 0, 0, '2022-09-13'),
(32, 2, 0, 18, '2022-09-13'),
(33, 2, 0, 18, '2022-09-13'),
(84, 14, 0, 18, '2022-09-14'),
(85, 14, 0, 18, '2022-09-14'),
(86, 14, 0, 20, '2022-09-14'),
(88, 2, 0, 18, '2022-09-17'),
(94, 2, 0, 32, '2022-09-18'),
(95, 2, 0, 31, '2022-09-18'),
(97, 2, 0, 31, '2022-09-18'),
(102, 2, 0, 36, '2022-09-19'),
(103, 2, 0, 31, '2022-09-19'),
(104, 2, 0, 32, '2022-09-19'),
(105, 20, 0, 32, '2022-09-19'),
(106, 20, 0, 33, '2022-09-19'),
(107, 20, 0, 32, '2022-09-19'),
(110, 23, 0, 33, '2022-09-20'),
(111, 23, 0, 32, '2022-09-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `id_produk` (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
