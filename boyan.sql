-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2020 at 06:58 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boyan`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `fas_id` int(11) NOT NULL,
  `wis_id` int(11) NOT NULL,
  `fas_nama` varchar(200) NOT NULL,
  `fas_icon` text NOT NULL,
  `fas_date_created` date NOT NULL,
  `fas_date_update` date NOT NULL,
  `fas_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`fas_id`, `wis_id`, `fas_nama`, `fas_icon`, `fas_date_created`, `fas_date_update`, `fas_status`) VALUES
(1, 1, 'Musholla', '', '2020-02-03', '2020-04-28', 0);

-- --------------------------------------------------------

--
-- Table structure for table `fas_hotel`
--

CREATE TABLE `fas_hotel` (
  `fas_hot_id` int(11) NOT NULL,
  `hot_id` int(11) NOT NULL,
  `fas_hot_nama` varchar(200) NOT NULL,
  `fas_hot_icon` text NOT NULL,
  `fas_hot_date_created` date NOT NULL,
  `fas_hot_date_update` date NOT NULL,
  `fas_hot_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `halaman`
--

CREATE TABLE `halaman` (
  `hal_id` int(11) NOT NULL,
  `hal_nama` varchar(200) NOT NULL,
  `hal_detail` varchar(200) NOT NULL,
  `hal_date_created` date NOT NULL,
  `hal_date_update` date NOT NULL,
  `hal_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `hot_id` int(11) NOT NULL,
  `hot_nama` varchar(200) NOT NULL,
  `hot_img` varchar(200) NOT NULL,
  `hot_desc_short` text NOT NULL,
  `hot_desc_long` text NOT NULL,
  `hot_hrg_weekday` decimal(10,0) NOT NULL,
  `hot_hrg_weekend` decimal(10,0) NOT NULL,
  `hot_kuota_weekday` int(11) NOT NULL,
  `hot_kuota_weekend` int(11) NOT NULL,
  `hot_date_created` date NOT NULL,
  `hot_date_update` date NOT NULL,
  `hot_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `odr_id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `wis_id` int(11) NOT NULL,
  `hot_id` int(11) NOT NULL,
  `bank_id` varchar(20) NOT NULL,
  `odr_qty` int(11) NOT NULL,
  `odr_total` decimal(10,0) NOT NULL,
  `odr_file_confirmation` text NOT NULL,
  `odr_date_created` date NOT NULL,
  `odr_date_expired` date NOT NULL,
  `odr_date_update` date NOT NULL,
  `odr_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `us_id` int(11) NOT NULL,
  `us_nama` varchar(200) NOT NULL,
  `us_email` varchar(200) NOT NULL,
  `us_nohp` varchar(15) NOT NULL,
  `us_img` varchar(200) NOT NULL,
  `us_alamat` varchar(200) NOT NULL,
  `us_password` varchar(256) NOT NULL,
  `us_role` int(11) NOT NULL,
  `us_date_created` int(11) NOT NULL,
  `us_date_update` date NOT NULL,
  `us_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `wis_id` int(11) NOT NULL,
  `wis_nama` varchar(200) NOT NULL,
  `wis_img` varchar(200) NOT NULL,
  `wis_desc_short` text NOT NULL,
  `wis_desc_long` text NOT NULL,
  `wis_hrg_weekday` decimal(10,0) NOT NULL,
  `wis_hrg_weekend` decimal(10,0) NOT NULL,
  `wis_kuota_weekday` int(11) NOT NULL,
  `wis_kuota_weekend` int(11) NOT NULL,
  `wis_date_created` date NOT NULL,
  `wis_date_update` date NOT NULL,
  `wis_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`wis_id`, `wis_nama`, `wis_img`, `wis_desc_short`, `wis_desc_long`, `wis_hrg_weekday`, `wis_hrg_weekend`, `wis_kuota_weekday`, `wis_kuota_weekend`, `wis_date_created`, `wis_date_update`, `wis_status`) VALUES
(1, 'danau kastoba', 'kastoba.jpg', 'Dsn. Candi-Bawean', 'Danau di atas gunung', '3000', '5000', 50, 100, '2020-02-02', '2020-04-01', 1),
(2, 'Pulau Noko', 'noko.jpg', 'Ds. Sidogedungbatu-Bawean', '', '240000', '360000', 50, 100, '2020-05-01', '2020-05-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `wis_fasilitas`
--

CREATE TABLE `wis_fasilitas` (
  `wis_id` int(11) NOT NULL,
  `fas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fas_id`),
  ADD KEY `wis_id` (`wis_id`);

--
-- Indexes for table `fas_hotel`
--
ALTER TABLE `fas_hotel`
  ADD PRIMARY KEY (`fas_hot_id`),
  ADD KEY `hot_id` (`hot_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hot_id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`odr_id`),
  ADD KEY `us_id` (`us_id`,`wis_id`),
  ADD KEY `wis_id` (`wis_id`),
  ADD KEY `hot_id` (`hot_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`wis_id`);

--
-- Indexes for table `wis_fasilitas`
--
ALTER TABLE `wis_fasilitas`
  ADD KEY `wis_id` (`wis_id`,`fas_id`),
  ADD KEY `fas_id` (`fas_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fas_hotel`
--
ALTER TABLE `fas_hotel`
  MODIFY `fas_hot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `odr_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `wis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`wis_id`) REFERENCES `wisata` (`wis_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fas_hotel`
--
ALTER TABLE `fas_hotel`
  ADD CONSTRAINT `fas_hotel_ibfk_1` FOREIGN KEY (`hot_id`) REFERENCES `hotel` (`hot_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesan`
--
ALTER TABLE `pesan`
  ADD CONSTRAINT `pesan_ibfk_1` FOREIGN KEY (`us_id`) REFERENCES `user` (`us_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_2` FOREIGN KEY (`wis_id`) REFERENCES `wisata` (`wis_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesan_ibfk_3` FOREIGN KEY (`hot_id`) REFERENCES `hotel` (`hot_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
