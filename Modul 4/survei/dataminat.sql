-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 07:36 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataminat`
--

-- --------------------------------------------------------

--
-- Table structure for table `peminat`
--

CREATE TABLE `peminat` (
  `id` int(6) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `profesi` varchar(10) NOT NULL,
  `minat` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminat`
--

INSERT INTO `peminat` (`id`, `nama`, `profesi`, `minat`) VALUES
(1, 'Muhammad Arifin', 'Mahasiswa', 'Badminton'),
(2, 'Arif', 'Pelajar', 'Catur'),
(3, 'Ali', 'Pelajar', 'Catur'),
(4, 'Andi', 'Mahasiswa', 'Badminton'),
(5, 'Lia', 'Pelajar', 'Tenis Meja'),
(6, 'Lina', 'Mahasiswa', 'Tenis Meja'),
(7, 'Siti', 'Mahasiswa', 'Catur'),
(8, 'Budi', 'Pelajar', 'Renang'),
(9, 'Aldo', 'Pelajar', 'Renang'),
(10, 'Gio', 'Pelajar', 'Catur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peminat`
--
ALTER TABLE `peminat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminat`
--
ALTER TABLE `peminat`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1391;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
