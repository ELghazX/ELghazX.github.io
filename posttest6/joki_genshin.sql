-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2024 at 02:14 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `joki_genshin`
--
CREATE DATABASE IF NOT EXISTS `joki_genshin` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `joki_genshin`;

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `UID` int(10) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_joki` enum('quest','explore','material','build','rawat_akun') NOT NULL,
  `ss_map` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `Nama`, `UID`, `Username`, `password`, `jenis_joki`, `ss_map`) VALUES
(16, 'Ghazali', 808280114, 'ELghaz', 'rahasia', 'explore', NULL),
(17, 'Jorip', 819254555, 'Zixz', 'adaadasaja', 'quest', NULL),
(27, 'Ammar', 819254556, 'CRUX', '819254555', 'explore', '2024-10-15 02.13.19.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
