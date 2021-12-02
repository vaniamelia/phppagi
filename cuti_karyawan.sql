-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 01:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpregpagi`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti_karyawan`
--

CREATE TABLE `cuti_karyawan` (
  `id_karyawan` int(20) NOT NULL,
  `NIK` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `bagian` varchar(50) NOT NULL,
  `mulai_cuti` date NOT NULL,
  `berakhir_cuti` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cuti_karyawan`
--

INSERT INTO `cuti_karyawan` (`id_karyawan`, `NIK`, `nama`, `jabatan`, `bagian`, `mulai_cuti`, `berakhir_cuti`, `keterangan`) VALUES
(10, '32122333444', 'raden', 'Admin', 'Produksi', '2021-12-11', '2021-12-13', 'menikah'),
(11, '3654321111', 'martin', 'Spv', 'Hrd', '2021-12-05', '2021-12-07', 'menikah'),
(12, '326756541424', 'haris', 'Manager', 'Marketing', '2021-12-05', '2021-12-07', 'menikah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti_karyawan`
--
ALTER TABLE `cuti_karyawan`
  MODIFY `id_karyawan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
