-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Bulan Mei 2020 pada 18.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.3

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
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `fas_id` int(11) NOT NULL,
  `wis_id` int(11) NOT NULL,
  `fas_nama` varchar(200) NOT NULL,
  `fas_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`fas_id`, `wis_id`, `fas_nama`, `fas_icon`) VALUES
(1, 1, 'Musholla', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `fas_hotel`
--

CREATE TABLE `fas_hotel` (
  `fas_hot_id` int(11) NOT NULL,
  `hot_id` int(11) NOT NULL,
  `fas_hot_nama` varchar(200) NOT NULL,
  `fas_hot_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `halaman`
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
-- Struktur dari tabel `hotel`
--

CREATE TABLE `hotel` (
  `hot_id` int(11) NOT NULL,
  `hot_nama` varchar(200) NOT NULL,
  `hot_img` varchar(200) NOT NULL,
  `hot_desc_short` text NOT NULL,
  `hot_desc_long` text NOT NULL,
  `hot_hrg_weekday` decimal(10,0) NOT NULL,
  `hot_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inv_wis`
--

CREATE TABLE `inv_wis` (
  `id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `atasnama` varchar(30) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inv_wis`
--

INSERT INTO `inv_wis` (`id`, `us_id`, `atasnama`, `tgl_pesan`) VALUES
(1, 2, 'Dobleh', '2020-05-20'),
(2, 2, 'malka', '2020-05-30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_wis`
--

CREATE TABLE `pesanan_wis` (
  `id_pes_wis` int(11) NOT NULL,
  `id_inv_wis` int(11) NOT NULL,
  `wis_id` int(11) NOT NULL,
  `wis_nama` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `wis_hrg_weekday` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan_wis`
--

INSERT INTO `pesanan_wis` (`id_pes_wis`, `id_inv_wis`, `wis_id`, `wis_nama`, `jumlah`, `wis_hrg_weekday`) VALUES
(1, 1, 1, 'danau kastoba', 1, 3000),
(2, 1, 2, 'Pulau Noko', 2, 240000),
(3, 2, 1, 'danau kastoba', 1, 3000),
(4, 2, 2, 'Pulau Noko', 1, 240000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
  `us_date_created` date NOT NULL,
  `us_date_update` date NOT NULL,
  `us_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`us_id`, `us_nama`, `us_email`, `us_nohp`, `us_img`, `us_alamat`, `us_password`, `us_role`, `us_date_created`, `us_date_update`, `us_status`) VALUES
(1, 'Admin', 'admin@gmail.com', '0909090', '-', 'alamat admin', '21232f297a57a5a743894a0e4a801fc3', 0, '2020-05-14', '2020-05-14', 1),
(2, 'User', 'user@gmail.com', '28173921', 'sadsad', 'sdlkjajd', 'ee11cbb19052e40b07aac0ca060c23ee', 1, '2020-05-14', '2020-05-14', 1),
(3, 'user', 'userr@gmail.com', '012930193', 'user.jpg', 'sdada', 'ee11cbb19052e40b07aac0ca060c23ee', 1, '0000-00-00', '0000-00-00', 1),
(4, 'test@gmail.com', 'test@gmail.com', '08090', 'user.jpg', 'sjdkajhd', '147538da338b770b61e592afc92b1ee6', 1, '2020-05-14', '2020-05-14', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `wis_id` int(11) NOT NULL,
  `wis_nama` varchar(200) NOT NULL,
  `wis_img` varchar(200) NOT NULL,
  `wis_desc_short` text NOT NULL,
  `wis_desc_long` text NOT NULL,
  `wis_hrg_weekday` decimal(10,0) NOT NULL,
  `wis_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`wis_id`, `wis_nama`, `wis_img`, `wis_desc_short`, `wis_desc_long`, `wis_hrg_weekday`, `wis_status`) VALUES
(1, 'danau kastoba', 'kastoba.jpg', 'Dsn. Candi-Bawean', 'Danau di atas gunung', '3000', 1),
(2, 'Pulau Noko', 'noko.jpg', 'Ds. Sidogedungbatu-Bawean', '', '240000', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wis_fasilitas`
--

CREATE TABLE `wis_fasilitas` (
  `wis_id` int(11) NOT NULL,
  `fas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`fas_id`),
  ADD KEY `wis_id` (`wis_id`);

--
-- Indeks untuk tabel `fas_hotel`
--
ALTER TABLE `fas_hotel`
  ADD PRIMARY KEY (`fas_hot_id`),
  ADD KEY `hot_id` (`hot_id`);

--
-- Indeks untuk tabel `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hot_id`);

--
-- Indeks untuk tabel `inv_wis`
--
ALTER TABLE `inv_wis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan_wis`
--
ALTER TABLE `pesanan_wis`
  ADD PRIMARY KEY (`id_pes_wis`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`us_id`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`wis_id`);

--
-- Indeks untuk tabel `wis_fasilitas`
--
ALTER TABLE `wis_fasilitas`
  ADD KEY `wis_id` (`wis_id`,`fas_id`),
  ADD KEY `fas_id` (`fas_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fas_hotel`
--
ALTER TABLE `fas_hotel`
  MODIFY `fas_hot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hot_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `inv_wis`
--
ALTER TABLE `inv_wis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pesanan_wis`
--
ALTER TABLE `pesanan_wis`
  MODIFY `id_pes_wis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `wis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD CONSTRAINT `fasilitas_ibfk_1` FOREIGN KEY (`wis_id`) REFERENCES `wisata` (`wis_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `fas_hotel`
--
ALTER TABLE `fas_hotel`
  ADD CONSTRAINT `fas_hotel_ibfk_1` FOREIGN KEY (`hot_id`) REFERENCES `hotel` (`hot_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
