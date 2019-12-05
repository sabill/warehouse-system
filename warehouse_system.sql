-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 10:31 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `warehouse_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `operator`
--

CREATE TABLE `operator` (
  `operator_id` int(10) NOT NULL,
  `opName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `picking`
--

CREATE TABLE `picking` (
  `nomorPO` int(10) NOT NULL,
  `dataPemasok` varchar(255) NOT NULL,
  `dataMaterial` varchar(255) NOT NULL,
  `tanggalKeluar` date NOT NULL,
  `operator_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `receiving`
--

CREATE TABLE `receiving` (
  `nomorPO` int(10) NOT NULL,
  `dataPemasok` varchar(255) NOT NULL,
  `dataMaterial` varchar(255) NOT NULL,
  `tanggalMasuk` date NOT NULL,
  `operator_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `releaseorder`
--

CREATE TABLE `releaseorder` (
  `nomorPO` int(10) NOT NULL,
  `dataPemasok` varchar(255) NOT NULL,
  `dataMaterial` varchar(255) NOT NULL,
  `tanggalKirim` date NOT NULL,
  `operator_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestproduction`
--

CREATE TABLE `requestproduction` (
  `dataMaterial` varchar(255) NOT NULL,
  `tanggalRequest` date NOT NULL,
  `operator_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `operator_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `operator_id`) VALUES
(105216036, 'hanakar', 'farhanup16', 'akbarfarhan2005@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `operator`
--
ALTER TABLE `operator`
  ADD PRIMARY KEY (`operator_id`);

--
-- Indexes for table `picking`
--
ALTER TABLE `picking`
  ADD PRIMARY KEY (`nomorPO`);

--
-- Indexes for table `receiving`
--
ALTER TABLE `receiving`
  ADD PRIMARY KEY (`nomorPO`);

--
-- Indexes for table `releaseorder`
--
ALTER TABLE `releaseorder`
  ADD PRIMARY KEY (`nomorPO`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `operator`
--
ALTER TABLE `operator`
  MODIFY `operator_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `picking`
--
ALTER TABLE `picking`
  MODIFY `nomorPO` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `receiving`
--
ALTER TABLE `receiving`
  MODIFY `nomorPO` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `releaseorder`
--
ALTER TABLE `releaseorder`
  MODIFY `nomorPO` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105216037;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
