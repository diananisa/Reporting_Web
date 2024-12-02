-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 02, 2024 at 09:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `Data`
--

CREATE TABLE `Data` (
  `Nim` varchar(10) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Prodi` varchar(50) NOT NULL,
  `Divisi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Data`
--

INSERT INTO `Data` (`Nim`, `Nama`, `Fakultas`, `Prodi`, `Divisi`) VALUES
('', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `nama`
--

CREATE TABLE `nama` (
  `Dian` varchar(100) NOT NULL,
  `Anisa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password`
--

CREATE TABLE `password` (
  `admin` varchar(20) NOT NULL,
  `123` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `Nama` varchar(50) NOT NULL,
  `Nim` varchar(50) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Prodi` varchar(50) NOT NULL,
  `Pilihan1` varchar(20) NOT NULL,
  `Pilihan2` varchar(20) NOT NULL,
  `Pilihan3` varchar(20) NOT NULL,
  `Alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`Nama`, `Nim`, `Fakultas`, `Prodi`, `Pilihan1`, `Pilihan2`, `Pilihan3`, `Alasan`) VALUES
('dian', '260', 'fti', 'informatika', '', '', '', ''),
('anisa', '123', '', 'infor', 'RSCUAD', 'RSCUAD', 'RSCUAD', ''),
('anisa', '123', '', 'infor', 'RSCUAD', 'RSCUAD', 'RSCUAD', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Data`
--
ALTER TABLE `Data`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
