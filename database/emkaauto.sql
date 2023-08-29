-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2022 at 05:56 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emkaauto`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tahun` int(20) NOT NULL,
  `jk_tempuh` int(20) NOT NULL,
  `harga` int(20) NOT NULL,
  `knd_mobil` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`, `tahun`, `jk_tempuh`, `harga`, `knd_mobil`) VALUES
(31, 'Toyota Rush', 2015, 72352, 162000000, 'Bagus'),
(33, 'Toyota Avanza', 2019, 135641, 125000000, 'Bagus'),
(37, 'Daihatsu Xenia', 2016, 108284, 130000000, 'Cukup Bagus'),
(34, 'Toyota Kijang Innova', 2005, 137782, 98000000, 'Cukup Bagus'),
(38, 'Toyota Cayla', 2019, 52739, 120000000, 'Sangat Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `ir`
--

CREATE TABLE `ir` (
  `jumlah` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ir`
--

INSERT INTO `ir` (`jumlah`, `nilai`) VALUES
(1, 0),
(2, 0),
(3, 0.58),
(4, 0.9),
(5, 1.12),
(6, 1.24),
(7, 1.32),
(8, 1.41),
(9, 1.45),
(10, 1.49),
(11, 1.51),
(12, 1.48),
(13, 1.56),
(14, 1.57),
(15, 1.59);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id`, `nama`) VALUES
(51, 'Kondisi Mobil'),
(50, 'Tahun'),
(49, 'Jarak Tempuh'),
(48, 'Harga');

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pgn` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Admin','User') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pgn`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Eza', 'zangga', '5f1592da2c2efd6d15348788bf0fc0cd', 'Admin'),
(2, 'Pembeli', 'pembeli1', '827ccb0eea8a706c4c34a16891f84e7b', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_alternatif`
--

CREATE TABLE `perbandingan_alternatif` (
  `id` int(11) NOT NULL,
  `alternatif1` int(11) NOT NULL,
  `alternatif2` int(11) NOT NULL,
  `pembanding` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_alternatif`
--

INSERT INTO `perbandingan_alternatif` (`id`, `alternatif1`, `alternatif2`, `pembanding`, `nilai`) VALUES
(159, 33, 34, 51, 2),
(158, 31, 34, 51, 2),
(157, 31, 33, 51, 1),
(171, 34, 37, 49, 2),
(170, 33, 38, 49, 3),
(187, 37, 38, 51, 0.333333),
(186, 34, 38, 51, 0.333333),
(185, 34, 37, 51, 1),
(184, 33, 38, 51, 0.5),
(150, 33, 34, 50, 5),
(149, 31, 34, 50, 5),
(148, 31, 33, 50, 0.5),
(169, 33, 37, 49, 2),
(168, 31, 38, 49, 2),
(183, 33, 37, 51, 2),
(182, 31, 38, 51, 0.5),
(167, 31, 37, 49, 0.333333),
(166, 37, 38, 48, 1),
(131, 31, 34, 48, 5),
(181, 31, 37, 51, 2),
(180, 37, 38, 50, 0.5),
(141, 33, 34, 49, 1),
(165, 34, 38, 48, 1),
(130, 31, 33, 48, 3),
(164, 34, 37, 48, 1),
(140, 31, 34, 49, 0.333333),
(139, 31, 33, 49, 0.333333),
(163, 33, 38, 48, 1),
(162, 33, 37, 48, 1),
(161, 31, 38, 48, 3),
(179, 34, 38, 50, 0.2),
(160, 31, 37, 48, 3),
(178, 34, 37, 50, 0.2),
(177, 33, 38, 50, 1),
(176, 33, 37, 50, 2),
(175, 31, 38, 50, 0.5),
(174, 31, 37, 50, 1),
(173, 37, 38, 49, 3),
(172, 34, 38, 49, 3),
(132, 33, 34, 48, 2);

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `id` int(11) NOT NULL,
  `kriteria1` int(11) NOT NULL,
  `kriteria2` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id`, `kriteria1`, `kriteria2`, `nilai`) VALUES
(31, 48, 49, 2),
(33, 48, 51, 1),
(32, 48, 50, 3),
(36, 50, 51, 1),
(35, 49, 51, 1),
(34, 49, 50, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pv_alternatif`
--

CREATE TABLE `pv_alternatif` (
  `id` int(11) NOT NULL,
  `id_alternatif` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pv_alternatif`
--

INSERT INTO `pv_alternatif` (`id`, `id_alternatif`, `id_kriteria`, `nilai`) VALUES
(115, 34, 51, 0.109444),
(114, 33, 51, 0.206389),
(123, 38, 51, 0.368333),
(112, 34, 50, 0.047427),
(100, 31, 50, 0.174635),
(97, 31, 49, 0.106251),
(94, 31, 48, 0.454645),
(111, 33, 50, 0.301651),
(103, 31, 51, 0.206389),
(119, 38, 49, 0.0800604),
(118, 37, 49, 0.205595),
(122, 37, 51, 0.109444),
(117, 38, 48, 0.138215),
(116, 37, 48, 0.138215),
(121, 38, 50, 0.301651),
(109, 34, 49, 0.304047),
(106, 34, 48, 0.110709),
(105, 33, 48, 0.158215),
(120, 37, 50, 0.174635),
(108, 33, 49, 0.304047);

-- --------------------------------------------------------

--
-- Table structure for table `pv_kriteria`
--

CREATE TABLE `pv_kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pv_kriteria`
--

INSERT INTO `pv_kriteria` (`id_kriteria`, `nilai`) VALUES
(48, 0.35987),
(49, 0.25806),
(50, 0.142393),
(51, 0.239678);

-- --------------------------------------------------------

--
-- Table structure for table `ranking`
--

CREATE TABLE `ranking` (
  `id_alternatif` int(11) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ranking`
--

INSERT INTO `ranking` (`id_alternatif`, `nilai`) VALUES
(34, 0.151288),
(38, 0.201634),
(37, 0.153893),
(31, 0.265366),
(33, 0.227819);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ir`
--
ALTER TABLE `ir`
  ADD PRIMARY KEY (`jumlah`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pgn`);

--
-- Indexes for table `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pv_kriteria`
--
ALTER TABLE `pv_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `ranking`
--
ALTER TABLE `ranking`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pgn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `perbandingan_alternatif`
--
ALTER TABLE `perbandingan_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pv_alternatif`
--
ALTER TABLE `pv_alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
