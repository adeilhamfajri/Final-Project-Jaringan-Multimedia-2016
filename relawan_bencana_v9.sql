-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 04:58 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `relawan_bencana`
--
CREATE DATABASE IF NOT EXISTS `relawan_bencana` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `relawan_bencana`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`) VALUES
(1, 'Mie Instan'),
(2, 'Selimut'),
(3, 'Pakaian Dewasa'),
(4, 'Pakaian Anak'),
(5, 'Pembalut'),
(6, 'Popok Bayi'),
(7, 'Celana Dalam'),
(8, 'Susu'),
(9, 'Biskuit'),
(10, 'Makanan Ringan'),
(11, 'Beras'),
(12, 'Obat-obatan');

-- --------------------------------------------------------

--
-- Table structure for table `dana`
--

CREATE TABLE `dana` (
  `id_dana` int(11) NOT NULL,
  `nominal` int(11) DEFAULT NULL,
  `nama_donatur` varchar(75) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dana`
--

INSERT INTO `dana` (`id_dana`, `nominal`, `nama_donatur`, `tanggal`) VALUES
(1, 700000, 'Imam Zarqoni', '2016-12-18'),
(2, 5000000, 'Ade Ilham', '2016-12-18'),
(3, 100000, 'Divi Jaya', '2016-12-18'),
(4, 80000, 'Luqman Ahmad', '2016-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `donasi`
--

CREATE TABLE `donasi` (
  `id_donasi` int(11) NOT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_donasi` int(11) DEFAULT NULL,
  `nama_donatur` varchar(75) DEFAULT NULL,
  `tanggal_donasi` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `donasi`
--

INSERT INTO `donasi` (`id_donasi`, `id_barang`, `jumlah_donasi`, `nama_donatur`, `tanggal_donasi`) VALUES
(1, 1, 10, 'Divi Jaya', '2016-12-18'),
(2, 2, 5, 'Imam Zarqoni', '2016-12-18'),
(3, 6, 7, 'Ade Ilham', '2016-12-18'),
(4, 12, 2, 'Luqman Ahmad', '2016-12-18');

-- --------------------------------------------------------

--
-- Table structure for table `gambar`
--

CREATE TABLE `gambar` (
  `id_gambar` int(11) NOT NULL,
  `nama_gambar` varchar(50) NOT NULL,
  `deskripsi_gambar` varchar(500) NOT NULL,
  `tanggal_gambar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar`
--

INSERT INTO `gambar` (`id_gambar`, `nama_gambar`, `deskripsi_gambar`, `tanggal_gambar`) VALUES
(6, 'cepet.jpg', 'qwqwqw', '2016-12-19 17:00:00'),
(7, 'Untitled design.png', 'cvcvcv', '2016-12-19 17:00:00'),
(8, 'Untitled design.png', 'ccvcvcvcv', '2016-12-19 17:00:00'),
(9, '29.jpg', 'wqwqwqwqwqasas', '2016-12-19 21:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan`
--

CREATE TABLE `kebutuhan` (
  `id_kebutuhan` int(11) NOT NULL,
  `id_lokasi` int(11) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `jumlah_kebutuhan` int(11) DEFAULT NULL,
  `jumlah_terpenuhi` int(11) DEFAULT '0',
  `status` varchar(50) DEFAULT NULL,
  `tanggal_permintaan` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kebutuhan`
--

INSERT INTO `kebutuhan` (`id_kebutuhan`, `id_lokasi`, `id_barang`, `jumlah_kebutuhan`, `jumlah_terpenuhi`, `status`, `tanggal_permintaan`) VALUES
(1, 1, 4, 57, 0, NULL, '2016-12-18 16:22:46'),
(2, 1, 2, 13, 0, NULL, '2016-12-18 16:23:09'),
(3, 2, 11, 4, 0, NULL, '2016-12-18 16:23:20'),
(4, 2, 3, 5, 0, NULL, '2016-12-18 16:23:32'),
(5, 3, 9, 10, 0, NULL, '2016-12-18 16:23:43'),
(6, 3, 7, 4, 0, NULL, '2016-12-18 16:23:50');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `id_kondisi` int(11) NOT NULL,
  `deskripsi` text,
  `filepath` varchar(255) DEFAULT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_lokasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `id_log` int(11) NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `jumlah` int(75) DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_lokasi` int(11) NOT NULL,
  `nama_lokasi` varchar(75) DEFAULT NULL,
  `latitude` varchar(50) DEFAULT NULL,
  `longitude` varchar(50) DEFAULT NULL,
  `deskripsi` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_lokasi`, `nama_lokasi`, `latitude`, `longitude`, `deskripsi`) VALUES
(1, 'Aceh', '4.724616', '96.525879', 'Banjir setinggi pinggang menerjang saat warga tengah tertidur lelap'),
(2, 'Bondowoso', '-7.925229', '113.837585', 'Gempa bumi merusak ratusan rumah warga'),
(3, 'Sukabumi', '-6.933880', '106.932678', 'Tanah longsor terjadi secara tiba-tiba seusai hujan deras yang menerjang perbatasan Sukabumi');

-- --------------------------------------------------------

--
-- Table structure for table `relawan`
--

CREATE TABLE `relawan` (
  `id_relawan` int(11) NOT NULL,
  `username` varchar(75) DEFAULT NULL,
  `password` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relawan`
--

INSERT INTO `relawan` (`id_relawan`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `total_dana`
--

CREATE TABLE `total_dana` (
  `total_dana` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `dana`
--
ALTER TABLE `dana`
  ADD PRIMARY KEY (`id_dana`);

--
-- Indexes for table `donasi`
--
ALTER TABLE `donasi`
  ADD PRIMARY KEY (`id_donasi`),
  ADD KEY `FK_donasi_barang` (`id_barang`);

--
-- Indexes for table `gambar`
--
ALTER TABLE `gambar`
  ADD PRIMARY KEY (`id_gambar`);

--
-- Indexes for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  ADD PRIMARY KEY (`id_kebutuhan`),
  ADD KEY `FK_kebutuhan_barang` (`id_barang`),
  ADD KEY `FK_lokasi_kebutuhan` (`id_lokasi`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`id_kondisi`),
  ADD KEY `FK_kondisi` (`id_lokasi`);

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id_log`),
  ADD KEY `FK_log` (`id_barang`);

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_lokasi`);

--
-- Indexes for table `relawan`
--
ALTER TABLE `relawan`
  ADD PRIMARY KEY (`id_relawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `dana`
--
ALTER TABLE `dana`
  MODIFY `id_dana` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `donasi`
--
ALTER TABLE `donasi`
  MODIFY `id_donasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gambar`
--
ALTER TABLE `gambar`
  MODIFY `id_gambar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  MODIFY `id_kebutuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `kondisi`
--
ALTER TABLE `kondisi`
  MODIFY `id_kondisi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_lokasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `relawan`
--
ALTER TABLE `relawan`
  MODIFY `id_relawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `donasi`
--
ALTER TABLE `donasi`
  ADD CONSTRAINT `FK_donasi_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

--
-- Constraints for table `kebutuhan`
--
ALTER TABLE `kebutuhan`
  ADD CONSTRAINT `FK_kebutuhan_barang` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`),
  ADD CONSTRAINT `FK_lokasi_kebutuhan` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`);

--
-- Constraints for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD CONSTRAINT `FK_kondisi` FOREIGN KEY (`id_lokasi`) REFERENCES `lokasi` (`id_lokasi`);

--
-- Constraints for table `log`
--
ALTER TABLE `log`
  ADD CONSTRAINT `FK_log` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
