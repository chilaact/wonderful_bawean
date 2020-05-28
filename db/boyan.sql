-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2020 pada 16.02
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.3.14

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
  `room_id` int(11) NOT NULL,
  `fas_hot_nama` varchar(200) NOT NULL,
  `fas_hot_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `fas_hotel`
--

INSERT INTO `fas_hotel` (`fas_hot_id`, `hot_id`, `room_id`, `fas_hot_nama`, `fas_hot_icon`) VALUES
(20, 1, 1, 'Size Room 4x4 meters', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(21, 1, 1, 'Double Bed', ''),
(22, 1, 1, 'In Bathroom', ''),
(23, 1, 1, 'Water Heater', ''),
(24, 1, 1, 'Air Conditioner', ''),
(25, 1, 1, 'TV Flat 34 inc', ''),
(26, 1, 1, 'Cupboard', ''),
(27, 1, 1, 'Breakfast ', ''),
(28, 1, 1, 'Welcome drink', ''),
(29, 1, 1, 'Coffee and tea in the morning', ''),
(30, 1, 2, 'Size Room 4x4 meters', '\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n'),
(31, 1, 2, 'Double Bed', ''),
(32, 1, 2, 'In Bathroom', ''),
(33, 1, 2, 'Air Conditioner', ''),
(34, 1, 2, 'TV Flat 34 inc', ''),
(35, 1, 2, 'Cupboard', ''),
(36, 1, 2, 'Breakfast ', ''),
(37, 1, 2, 'Welcome drink', ''),
(38, 1, 2, 'Coffee and tea in the morning', '');

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
  `hot_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hotel`
--

INSERT INTO `hotel` (`hot_id`, `hot_nama`, `hot_img`, `hot_desc_short`, `hot_desc_long`, `hot_status`) VALUES
(1, 'Hotel Miranda Bawean', 'hot_miranda.png', 'Jl. Umar Mas\'ud, Sawahmulya, Sangkapura, Kabupaten Gresik, Jawa Timur 61181', 'Miranda Hotel mempunyai 20 kamar, yaitu 3 kamar VIP dan 17 kamar eksekutif. Hotel Miranda adalah hotel dengan jumlah kamar terbanyak di Pulau Bawean.', 0),
(2, 'FATHIN MOTEL Bawean', 'fatmot.jpg', 'Jl. Dermaga No.8b, Sungai Tlk., Sangkapura, Kabupaten Gresik, Jawa Timur 61181', 'Fathin Mothel relatif baru. Berlokasi strategis, sekitar 200 meter dari gerbang Pelabuhan Sangkapura Bawean. Bangunan itu minimalis, tetapi tidak dengan fasilitas yang ditawarkan. Fathin Mothel hanya memiliki empat kamar.', 0),
(3, 'Senja Hotel', 'senja.jpg', 'Jl. Dermaga, Sungai Tlk., Sangkapura, Kabupaten Gresik, Jawa Timur 12230', 'Senja Hotel adalah hotel baru di Pulau Bawean. Berlokasi strategis, sekitar 200 meter dari gerbang Pelabuhan Sangkapura Bawean. Bangunan itu minimalis, tetapi tidak dengan fasilitas yang ditawarkan. Senja Hotel hanya memiliki delapan kamar', 0),
(4, 'Hotel INTAN', 'intan.jpg', 'Jl. Dermaga No.8b, Sungai Tlk., Sangkapura, Kabupaten Gresik, Jawa Timur 61181', 'Penginapan sederhana yang berada di pintu gerbang pelabuhan sangkapura ini memiliki fasilitas yang cukup lengkap. Ac, kamar mandi dalam, wifi. Tempatnya bersih. Pemandangan belakang hotel adalah dermaga dan laut.', 0),
(6, 'Hotel Pusaka', 'pusaka.jpg', 'Alamat di Kompleks Pertokoan Pusaka Bawean-Perikanan Dsn.Beringinan Ds. Sungaiteluk Kec. Sangkapura.', 'Hotel Pusaka berlokasi tepat di tengah, antara Hotel Intan dan Hotel Barokah dan hanya berjarak sekitar 5 menit saja dari pelabuhan. Terdapat sekitar 12 unit kamar di Hotel Pusaka yang cukup nyaman dan bersih untuk dijadikan tempat bermalam.', 0),
(7, 'Hotel Barokah', 'barokah.jpg', 'Jl. Pedoman No.4, Sungai Tlk., Sangkapura, Kabupaten Gresik, Jawa Timur 61181', 'Hotel Barokah memiliki total kamar sebanyak 11 kamar. Dan untuk tipe kamarnya ada 2 tipe kamar, yaitu tipe AC tersedia 7 kamar dan tipe Non AC tersedia 4 kamar.', 0);

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
(2, 2, 'malka', '2020-05-30'),
(3, 2, 'kambing', '2020-05-20'),
(4, 2, 'kambing', '2020-05-20'),
(5, 2, 'anjirrr', '2020-06-01');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan_wis`
--

CREATE TABLE `pesanan_wis` (
  `id_pes_wis` int(11) NOT NULL,
  `id_inv_wis` int(11) NOT NULL,
  `produk_id` int(11) NOT NULL,
  `produk_nama` varchar(30) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `produk_hrg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pesanan_wis`
--

INSERT INTO `pesanan_wis` (`id_pes_wis`, `id_inv_wis`, `produk_id`, `produk_nama`, `jumlah`, `produk_hrg`) VALUES
(1, 1, 1, 'danau kastoba', 1, 3000),
(2, 1, 2, 'Pulau Noko', 2, 240000),
(3, 2, 1, 'danau kastoba', 1, 3000),
(4, 2, 2, 'Pulau Noko', 1, 240000),
(5, 4, 13, 'VIP Room', 2, 225000),
(6, 5, 2, 'Pulau Noko', 1, 240000),
(7, 5, 4, 'Superior Room', 1, 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_room`
--

CREATE TABLE `type_room` (
  `room_id` int(11) NOT NULL,
  `hot_id` int(11) NOT NULL,
  `room_nama` varchar(200) NOT NULL,
  `room_img` varchar(200) NOT NULL,
  `room_hrg` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type_room`
--

INSERT INTO `type_room` (`room_id`, `hot_id`, `room_nama`, `room_img`, `room_hrg`) VALUES
(1, 1, 'VIP Room', '', '300000'),
(2, 1, 'Executive Room', '', '250000'),
(3, 2, 'Suite Room', '', '280000'),
(4, 2, 'Superior Room', '', '250000'),
(5, 2, 'Deluxe Room', '', '200000'),
(6, 2, 'Standart Room', '', '160000'),
(7, 3, 'VIP  Room', '', '250000'),
(8, 3, 'Standard Room', '', '150000'),
(9, 4, 'VIP 1', '', '300000'),
(10, 4, 'VIP 2', '', '250000'),
(11, 4, 'Standard 1', '', '200000'),
(12, 4, 'Standart 2', '', '150000'),
(13, 6, 'VIP Room', '', '225000'),
(14, 6, 'Eksekutive Room', '', '125000'),
(15, 7, 'Eksekutive Room', '', '150000'),
(16, 7, 'Ekonomi Room', '', '75000');

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
(2, 'Namamu disini', 'user@gmail.com', '1234567', 'Screenshot_(1).png', 'rumah user', 'ee11cbb19052e40b07aac0ca060c23ee', 1, '2020-05-28', '2020-05-28', 1);

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
  ADD KEY `room_id` (`room_id`),
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
-- Indeks untuk tabel `type_room`
--
ALTER TABLE `type_room`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `hot_id` (`hot_id`);

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
  MODIFY `fas_hot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `inv_wis`
--
ALTER TABLE `inv_wis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pesanan_wis`
--
ALTER TABLE `pesanan_wis`
  MODIFY `id_pes_wis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `type_room`
--
ALTER TABLE `type_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  ADD CONSTRAINT `fas_hotel_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `type_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fas_hotel_ibfk_2` FOREIGN KEY (`hot_id`) REFERENCES `hotel` (`hot_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `type_room`
--
ALTER TABLE `type_room`
  ADD CONSTRAINT `type_room_ibfk_1` FOREIGN KEY (`hot_id`) REFERENCES `hotel` (`hot_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
