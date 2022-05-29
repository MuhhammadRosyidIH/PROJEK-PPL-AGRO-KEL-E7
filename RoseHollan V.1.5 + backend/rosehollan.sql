-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2022 at 09:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rosehollan`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_akun_customer`
--

CREATE TABLE `data_akun_customer` (
  `id` int(20) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nomor_telephone` varchar(20) NOT NULL,
  `password` varchar(5000) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_akun_owner`
--

CREATE TABLE `data_akun_owner` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `password_hash` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_akun_owner`
--

INSERT INTO `data_akun_owner` (`id`, `nama_lengkap`, `email`, `password`, `password_hash`) VALUES
(1, 'Muhammad Rosyid Iqbal Haqiqi', 'ownerrosehollan1@gmail.com', 'Rosehollan_1', '$2y$10$T2nbDfxMFmPjwHWkEOuAre7ko7oZllkHm6qZzhlv8ToM/0URuPh5G');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `nomor_telephone` varchar(20) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `password_hash` varchar(5000) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`id`, `nama_lengkap`, `email`, `nomor_telephone`, `password`, `password_hash`, `domisili`, `tanggal_lahir`) VALUES
(4, 'Muhammad Rosyid Iqbal Haqiqi', '202410103025@mail.unej.ac.id', '081252930545', 'Ocii2002_', '$2y$10$WhRmhDQcj/fS/ZtbL.nHZ.0SykOVTxe0uvvENvY1jzS6uAGbJI5Bm', 'Jawa Timur', '2002-06-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_akun_customer`
--
ALTER TABLE `data_akun_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_akun_owner`
--
ALTER TABLE `data_akun_owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testing`
--
ALTER TABLE `testing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_akun_customer`
--
ALTER TABLE `data_akun_customer`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_akun_owner`
--
ALTER TABLE `data_akun_owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testing`
--
ALTER TABLE `testing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
