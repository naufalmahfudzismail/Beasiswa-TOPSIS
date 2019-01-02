-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2019 at 11:36 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_beasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `ipk` float NOT NULL,
  `keaktifan` float NOT NULL,
  `penghargaan` float NOT NULL,
  `toefl_itp` float NOT NULL,
  `toefl_ibt` float NOT NULL,
  `ielts` float NOT NULL,
  `toeic` float NOT NULL,
  `bobot_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`ipk`, `keaktifan`, `penghargaan`, `toefl_itp`, `toefl_ibt`, `ielts`, `toeic`, `bobot_id`) VALUES
(5, 3, 2, 4, 4, 3, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nilai_alternatif`
--

CREATE TABLE `nilai_alternatif` (
  `id` int(20) NOT NULL,
  `id_peserta` int(20) NOT NULL,
  `ipk` int(20) NOT NULL,
  `keaktifan` int(20) NOT NULL,
  `penghargaan` int(20) NOT NULL,
  `toefl_itp` int(20) NOT NULL,
  `toefl_ibt` int(20) NOT NULL,
  `ielts` int(20) NOT NULL,
  `toeic` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai_alternatif`
--

INSERT INTO `nilai_alternatif` (`id`, `id_peserta`, `ipk`, `keaktifan`, `penghargaan`, `toefl_itp`, `toefl_ibt`, `ielts`, `toeic`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 3, 2, 3, 4, 3, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(2, 2, 2, 2, 5, 5, 1, 5, 3, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(3, 3, 4, 1, 1, 5, 1, 4, 2, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(4, 4, 3, 1, 3, 1, 1, 5, 0, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(5, 5, 4, 3, 2, 5, 1, 4, 5, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(6, 6, 2, 3, 3, 1, 1, 4, 2, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(7, 7, 4, 2, 2, 5, 1, 5, 2, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(8, 8, 4, 1, 5, 1, 2, 2, 0, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(9, 9, 4, 1, 2, 5, 3, 1, 0, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(10, 10, 4, 1, 3, 5, 0, 5, 4, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(11, 11, 4, 2, 3, 4, 1, 4, 2, '2018-12-26 08:20:16', '2018-12-26 08:20:16'),
(12, 12, 2, 3, 5, 5, 0, 5, 5, '2018-12-26 08:20:16', '2018-12-26 08:20:16');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(15) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `institusi` varchar(255) NOT NULL,
  `ni_mhs` varchar(255) NOT NULL,
  `ip_1` float NOT NULL,
  `ip_2` float NOT NULL,
  `ip_3` float NOT NULL,
  `ip_4` float NOT NULL,
  `ip_5` float NOT NULL,
  `ip_6` float NOT NULL,
  `ip_7` float NOT NULL,
  `ip_8` float NOT NULL,
  `keaktifan` int(10) NOT NULL,
  `penghargaan` int(10) NOT NULL,
  `toefel_itp` int(10) NOT NULL,
  `toefel_ibt` int(10) NOT NULL,
  `ielts` int(10) NOT NULL,
  `toeic` int(10) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `institusi`, `ni_mhs`, `ip_1`, `ip_2`, `ip_3`, `ip_4`, `ip_5`, `ip_6`, `ip_7`, `ip_8`, `keaktifan`, `penghargaan`, `toefel_itp`, `toefel_ibt`, `ielts`, `toeic`, `updated_at`, `created_at`) VALUES
(1, 'Naufal Mahfudz Ismail', 'PNJ', '4616010053', 3.3, 3.4, 3.6, 3.7, 3.5, 3.3, 3.7, 3.6, 2, 3, 510, 90, 7, 701, '2018-12-25', '2018-12-25'),
(2, 'Diana Ambarwati', 'PNJ', '4616010035', 3.7, 3.4, 3.5, 3.2, 3.3, 3.6, 3.6, 3.7, 3, 5, 600, 70, 8, 701, '2018-12-25', '2018-12-25'),
(3, 'Nisya Yunita', 'PNJ', '4616010015', 3.4, 3.7, 3.5, 3.3, 3.6, 3.6, 3.4, 3.7, 2, 1, 525, 70, 7, 700, '2018-12-25', '2018-12-25'),
(4, 'Mohammad yasin', 'PNJ', '4616010045', 3.3, 3.3, 3.5, 3.5, 3.3, 3.3, 3.5, 3.5, 2, 3, 500, 70, 8, 600, '2018-12-25', '2018-12-25'),
(5, 'Viranita Julianti', 'PNJ', '4615010031', 3.4, 3.5, 3.3, 3.4, 3.4, 3.5, 3.5, 3.3, 5, 2, 600, 70, 7, 900, '2018-12-25', '2018-12-25'),
(6, 'Azam Mukhtar', 'PNJ', '4616050065', 3.5, 3.6, 3.7, 3.5, 3.5, 3.4, 3.4, 3.5, 4, 3, 500, 70, 7, 700, '2018-12-25', '2018-12-25'),
(7, 'Belfalas', 'PNJ', '4616010032', 3.5, 3.6, 3.5, 3.7, 3.5, 3.3, 3.5, 3.5, 3, 2, 600, 70, 8, 700, '2018-12-25', '2018-12-25'),
(8, 'Furion', 'PNJ', '4616010057', 3.4, 3.6, 3.6, 3.4, 3.4, 3.6, 3.5, 3.4, 2, 7, 500, 80, 5, 600, '2018-12-25', '2018-12-25'),
(9, 'Mas indigo', 'PNJ', '4616010047', 3.2, 3.8, 3.8, 3.2, 3.2, 3.8, 3.4, 3.2, 1, 2, 600, 90, 4, 600, '2018-12-25', '2018-12-25'),
(10, 'Ismail', 'PNJ', '4616010045', 3.2, 3.3, 3.4, 3.7, 3.1, 3.2, 3.5, 3.4, 2, 3, 525, 60, 8, 800, '2018-12-26', '2018-12-26'),
(11, 'Fathi', 'PNJ', '4616010009', 3.4, 3.5, 3.6, 3.4, 3.5, 3.5, 3.4, 3.8, 3, 3, 520, 70, 7, 700, '2018-12-26', '2018-12-26'),
(12, 'Vladimir', 'PNJ', '4616010046', 3.2, 3.3, 3.5, 3.3, 3.4, 3.5, 3.5, 3.3, 4, 6, 525, 7, 8, 850, '2018-12-26', '2018-12-26');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(10) NOT NULL,
  `id_peserta` int(10) NOT NULL,
  `nilai_topsis` float NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `Keterangan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `id_peserta`, `nilai_topsis`, `updated_at`, `created_at`, `Keterangan`) VALUES
(1, 1, 21.2598, '2018-12-26 08:20:16', '2018-12-26', 'TIDAK LOLOS'),
(2, 2, 46.1173, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(3, 3, 43.0134, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(4, 4, 34.3826, '2018-12-26 08:20:16', '2018-12-26', 'TIDAK LOLOS'),
(5, 5, 70.5943, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(6, 6, 50.9898, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(7, 7, 58.8164, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(8, 8, 55.1652, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(9, 9, 45.7264, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(10, 10, 49.0102, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(11, 11, 64.4225, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS'),
(12, 12, 56.9866, '2018-12-26 08:20:16', '2018-12-26', 'LOLOS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`bobot_id`);

--
-- Indexes for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bobot`
--
ALTER TABLE `bobot`
  MODIFY `bobot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `nilai_alternatif`
--
ALTER TABLE `nilai_alternatif`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
