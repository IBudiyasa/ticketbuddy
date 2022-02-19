-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2022 at 12:53 PM
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
-- Database: `dbtiket`
--
CREATE DATABASE IF NOT EXISTS `dbtiket` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `dbtiket`;

-- --------------------------------------------------------

--
-- Table structure for table `tbbus`
--

CREATE TABLE `tbbus` (
  `idtiket` int(11) NOT NULL,
  `namatransport` varchar(50) NOT NULL,
  `tglberangkat` date NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `tempatawal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbkri`
--

CREATE TABLE `tbkri` (
  `idtiket` int(11) NOT NULL,
  `stasiun` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `waktu` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbpesawat`
--

CREATE TABLE `tbpesawat` (
  `idtiket` int(11) NOT NULL,
  `namapesawat` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `bandara` varchar(50) NOT NULL,
  `waktu` varchar(5) NOT NULL,
  `tglberangkat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `namalengkap` varchar(50) NOT NULL,
  `tgllahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `username`, `password`, `namalengkap`, `tgllahir`) VALUES
(1, 'admin', 'ticketbuddyadm', 'admin', '0000-00-00'),
(2, 'budi', 'budiyasa', 'Budiyasa', '2002-02-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbus`
--
ALTER TABLE `tbbus`
  ADD PRIMARY KEY (`idtiket`);

--
-- Indexes for table `tbkri`
--
ALTER TABLE `tbkri`
  ADD PRIMARY KEY (`idtiket`);

--
-- Indexes for table `tbpesawat`
--
ALTER TABLE `tbpesawat`
  ADD PRIMARY KEY (`idtiket`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbbus`
--
ALTER TABLE `tbbus`
  MODIFY `idtiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbkri`
--
ALTER TABLE `tbkri`
  MODIFY `idtiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbpesawat`
--
ALTER TABLE `tbpesawat`
  MODIFY `idtiket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
