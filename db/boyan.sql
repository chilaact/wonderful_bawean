-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2020 at 12:01 PM
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
  `fas_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`fas_id`, `wis_id`, `fas_nama`, `fas_icon`) VALUES
(1, 1, 'Musholla', ''),
(2, 1, 'Toilet', ''),
(3, 2, 'Gazebo', ''),
(4, 2, 'Toilet', ''),
(5, 3, 'Musholla', ''),
(6, 3, 'Toilet', ''),
(7, 4, 'Toilet', ''),
(8, 4, 'Tempat Sewa Banana Boat', ''),
(9, 5, 'Gazebo', ''),
(10, 5, 'Musholla', ''),
(11, 5, 'Toilet', ''),
(12, 6, 'Toilet', ''),
(13, 6, 'Area Parkir', ''),
(14, 7, 'Musholla', ''),
(15, 7, 'Toilet', ''),
(16, 7, 'Tempat Istirahat', ''),
(17, 7, 'Tempat Makan', ''),
(18, 8, 'Toilet', ''),
(19, 8, 'Area Parkir', ''),
(20, 9, 'Masjid', ''),
(21, 9, 'Gazebo', ''),
(22, 9, 'Toilet', ''),
(23, 10, 'Musholla', ''),
(24, 10, 'Toilet', ''),
(25, 11, 'Toilet', ''),
(26, 11, 'Area Parkir', ''),
(27, 12, 'Gazebo', ''),
(28, 12, 'Rumah Apung', '');

-- --------------------------------------------------------

--
-- Table structure for table `fas_hotel`
--

CREATE TABLE `fas_hotel` (
  `fas_hot_id` int(11) NOT NULL,
  `hot_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `fas_hot_nama` varchar(200) NOT NULL,
  `fas_hot_icon` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fas_hotel`
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
(38, 1, 2, 'Coffee and tea in the morning', ''),
(39, 2, 3, 'single+dublebed', ''),
(40, 2, 3, 'Bathroom', ''),
(41, 2, 3, 'AC', ''),
(42, 2, 3, 'TV Flat', ''),
(43, 2, 4, 'Single Bed', ''),
(44, 2, 4, 'Bathroom', ''),
(45, 2, 4, 'AC', ''),
(46, 2, 4, 'TV Flat', ''),
(47, 2, 5, 'Single Bed', ''),
(48, 2, 5, 'AC', ''),
(49, 2, 6, 'Single Bed', ''),
(50, 2, 6, 'AC', ''),
(51, 3, 7, 'Single Bed', '\r\n'),
(52, 3, 7, 'Bathroom', ''),
(53, 3, 7, 'Air Conditioner', '\r\n\r\n\r\n\r\n'),
(54, 3, 7, 'TV Flat', ''),
(55, 3, 7, 'Breakfast ', ''),
(56, 3, 7, 'Welcome drink', ''),
(57, 3, 7, 'Coffee and tea in the morning', ''),
(58, 3, 8, 'Single Bed', '\r\n\r\n\r\n\r\n'),
(59, 3, 8, 'Bathroom', ''),
(60, 3, 8, 'Breakfast ', ''),
(61, 3, 8, 'Fan', ''),
(62, 3, 8, 'Welcome drink', ''),
(63, 3, 8, 'Coffee and tea in the morning', ''),
(64, 4, 9, 'Double bed', '\r\n\r\n\r\n'),
(65, 4, 9, 'Air Conditioner', ''),
(66, 4, 9, 'In Bathroom', ''),
(67, 4, 9, 'Tv Flat', ''),
(68, 4, 9, 'Breakfast', ''),
(69, 4, 9, 'Welcome drink', ''),
(70, 4, 9, 'Free Coffee & tea', ''),
(71, 4, 9, 'Free Wifi', ''),
(72, 4, 10, 'Single bed', ''),
(73, 4, 10, 'Air Conditioner', ''),
(74, 4, 10, 'In Bathroom', ''),
(75, 4, 10, 'Tv Flat', ''),
(76, 4, 10, 'Breakfast', ''),
(77, 4, 10, 'Welcome drink', ''),
(78, 4, 10, 'Free Coffee & tea', ''),
(79, 4, 10, 'Free Wifi', ''),
(80, 4, 11, 'Double Bed ', ''),
(81, 4, 11, 'Fan', ''),
(82, 4, 11, 'Out Bathroom', ''),
(83, 4, 11, 'Breakfast', ''),
(84, 4, 11, 'Welcome drink', ''),
(85, 4, 11, 'Free Coffee & tea', ''),
(86, 4, 11, 'Free Wifi', ''),
(87, 4, 12, 'Double Bed', '\r\n\r\n'),
(88, 4, 12, 'Fan', ''),
(89, 4, 12, 'Out Bathroom', ''),
(90, 4, 12, 'Breakfast', ''),
(91, 4, 12, 'Welcome drink', ''),
(92, 4, 12, 'Free Coffee & tea', ''),
(93, 4, 12, 'Free Wifi', ''),
(94, 6, 13, 'AC', ''),
(95, 6, 13, 'WIfi', ''),
(96, 6, 13, 'Kamar mandi dalam', ''),
(97, 6, 13, 'Teh hangat', ''),
(98, 6, 13, 'Snack untuk pagi dan sore hari', ''),
(99, 6, 14, 'Kipas angin', ''),
(100, 6, 14, 'Wifi', ''),
(101, 6, 14, 'Kamar mandi dalam', ''),
(102, 6, 14, 'Teh hangat', ''),
(103, 6, 14, 'Snack untuk pagi dan sore hari', ''),
(104, 7, 15, 'Lemari', ''),
(105, 7, 15, 'Kamar mandi', ''),
(106, 7, 16, 'Kipas angin', ''),
(107, 7, 16, 'Kamar mandi berada di luar kamar', '');

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
  `hot_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
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
-- Table structure for table `inv_wis`
--

CREATE TABLE `inv_wis` (
  `id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `atasnama` varchar(30) NOT NULL,
  `tgl_pesan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inv_wis`
--

INSERT INTO `inv_wis` (`id`, `us_id`, `atasnama`, `tgl_pesan`) VALUES
(1, 2, 'Dobleh', '2020-05-20'),
(2, 2, 'malka', '2020-05-30'),
(3, 2, 'kambing', '2020-05-20'),
(4, 2, 'kambing', '2020-05-20'),
(5, 2, 'anjirrr', '2020-06-01');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_wis`
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
-- Dumping data for table `pesanan_wis`
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
-- Table structure for table `type_room`
--

CREATE TABLE `type_room` (
  `room_id` int(11) NOT NULL,
  `hot_id` int(11) NOT NULL,
  `room_nama` varchar(200) NOT NULL,
  `room_img` varchar(200) NOT NULL,
  `room_hrg` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type_room`
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
  `us_date_created` date NOT NULL,
  `us_date_update` date NOT NULL,
  `us_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`us_id`, `us_nama`, `us_email`, `us_nohp`, `us_img`, `us_alamat`, `us_password`, `us_role`, `us_date_created`, `us_date_update`, `us_status`) VALUES
(1, 'Admin', 'admin@gmail.com', '0909090', '-', 'alamat admin', '21232f297a57a5a743894a0e4a801fc3', 0, '2020-05-14', '2020-05-14', 1),
(2, 'Namamu disini', 'user@gmail.com', '1234567', 'Screenshot_(1).png', 'rumah user', 'ee11cbb19052e40b07aac0ca060c23ee', 1, '2020-05-28', '2020-05-28', 1),
(8, 'Rahayu', 'ameliarahayu964@gmail.com', '082132368096', 'user.jpg', 'Bawean', '827ccb0eea8a706c4c34a16891f84e7b', 1, '2020-05-29', '2020-05-29', 1);

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
  `wis_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wisata`
--

INSERT INTO `wisata` (`wis_id`, `wis_nama`, `wis_img`, `wis_desc_short`, `wis_desc_long`, `wis_hrg_weekday`, `wis_status`) VALUES
(1, 'danau kastoba', 'kastoba.jpg', 'Dsn. Candi-Bawean', 'Danau di atas gunung', '3000', 1),
(2, 'Pulau Noko', 'noko.jpg', 'Ds. Sidogedungbatu-Bawean', '', '240000', 1),
(3, 'Pulau Gili', 'gilinoko.jpg', 'Dsn. Gili, Sidogedungbatu, Sangkapura-Bawean', 'Di pulau ini kita dapat melakukan snorkling, dimana kita dapat memanjakan mata dengan keindahan alam bawah laut. Dan terdapat tempat pennyewaan banana boat.', '300000', 1),
(4, 'Pantai Labuhan', 'labuhan.jpg', 'Ds. Tanjung Ori, Tambak-Bawean', 'Pantai ini menghadap laut tepat di arah Barat jadi untuk Sunset di Pantai Labuhan ini sangat juara. Selain itu pantai ini juga memiliki bibir pantai yang luas serta merupakan salah satu spot favorit bagi wisatawan untuk menikmati sunset.', '3000', 1),
(5, 'Mangrove Hijau Daun', 'mangrove.jpg', 'Ds. Daun, Sangkapura-Bawean', 'Hutan mangrove Hijau Daun ini merupakan salah satu kawasan wisata ekosistem yang kini tengah dikembangkan oemerintah setempat sebagai wisata edukasi dan juga wisata family. Beragam wahana dan keseruan di Hutan Mangrove Hijau Daun ini bisa dirasakan oleh pengunjung yang datang.', '5000', 1),
(6, 'Tanjung Gaan', 'tanjungan.jpg', 'Dsn. Somor-Somor, Kumalasa, Sangkapura-Bawean', 'Tanjung Gaang memiliki pesona dan keindahan yang sangat alami. Objek wisata ini merupakan hamparan batu karang yang luas. Bukit Karang yang dimiliki Tanjung Gaan merupakan magnet utama objek wisata alam ini. ', '3000', 1),
(7, 'Mombhul Beach', 'mombhul1.jpg', 'Ds. Sidogedungbatu-Bawean', 'Wisata pantai mombhul termasuk wahana wisata baru yang ada di pulau Bawean, namun pesona pantai ini mampu menyihir wisatawan sehingga tidak heran di momen momen liburan selalu ramai di kunjungi wisatawan lokal maupun dari luar pulau Bawean.', '5000', 1),
(8, 'Laccar Waterfall', 'airterjun.jpg', 'Dsn. Laccar, Teluk Dalem, Sangkapura-Bawean', 'Air Terjun Laccar memiliki ketinggian kurang lebih 20 meter, dan mata air yang mengalir di objek wisata ini sangat dipengaruhi oleh musim. Contohnya ketika musim kemarau, air yang mengalir di air terjun ini akan mengecil dan sebaliknya ketika musim hujan tiba. Hijaunya tanaman yang tumbuh di sekitar air terjun ini juga memberikan kesejukan.', '0', 1),
(9, 'Makam Waliyah Zainab', 'mwz.jpg', 'Ds. Diponggo, Tambak-Bawean', 'Makam Waliyah Zaenab merupakan suatu situs budaya religi. Makam Waliyah Zaenab menjadi salah satu lokasi ziarah yang umum dikunjungi masyarakat. Selain Makam Waliyah Zaenab, terdapat juga Masjid Waliyah Zaenab yang berada tepat di depan makam tersebut. Baik makam maupun masjid menjadi salah satu bagian penting dalam perjalanan ziarah masyarakat khususnya di sekitar Pulau Bawean dan yang berasal dari Pulau Bawean.', '3000', 1),
(10, 'JHERAT LANJHENG', 'jeratlanjeng.jpg', 'Dsn. Tanjung anyar, Lebak, Sangkapura-Bawean', 'Kuburan Panjang ini disebut juga makam Doro Sembodo.  Kira- kira panjang makam 11-12 meter. Makam ini merupakan makam yang dikeramatkan oleh penduduk sekitar karena disamping mempunyai kekuatan magis terpendam juga mengandung nilai historis tinggi.', '3000', 1),
(11, 'Pemandian Air Panas Kepuh', 'airpanas.jpg', 'Ds. Kepuhlegundi, Tambak-Bawean', 'Pemandian ini terkenal memiliki satu keistimewaan, yakni dapat menyembuhkan berbagai penyakit kulit seperti gatal, iritasi, dan berbagai penyakit kulit lainnya. Selain itu, pemandian air panas kepuh juga memiliki suasana alam yang tenang sehingga cocok bagi yang ingin melakukan relaksasi akibat padatnya aktivitas dan kesibukan.', '3000', 1),
(12, 'Pulau Cena', 'pulaucena.jpg', 'Ds. Teluk Jati Dawang, Tambak-Bawean', 'Keindahan Pulau Cena dengan terumbu karangnya yang masih alami. Ditambah lagi airnya yang berwarna biru nan jernih.', '100000', 1);

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
  ADD KEY `room_id` (`room_id`),
  ADD KEY `hot_id` (`hot_id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`hot_id`);

--
-- Indexes for table `inv_wis`
--
ALTER TABLE `inv_wis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan_wis`
--
ALTER TABLE `pesanan_wis`
  ADD PRIMARY KEY (`id_pes_wis`);

--
-- Indexes for table `type_room`
--
ALTER TABLE `type_room`
  ADD PRIMARY KEY (`room_id`),
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `fas_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `fas_hotel`
--
ALTER TABLE `fas_hotel`
  MODIFY `fas_hot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `hot_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `inv_wis`
--
ALTER TABLE `inv_wis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pesanan_wis`
--
ALTER TABLE `pesanan_wis`
  MODIFY `id_pes_wis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `type_room`
--
ALTER TABLE `type_room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `wis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  ADD CONSTRAINT `fas_hotel_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `type_room` (`room_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fas_hotel_ibfk_2` FOREIGN KEY (`hot_id`) REFERENCES `hotel` (`hot_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `type_room`
--
ALTER TABLE `type_room`
  ADD CONSTRAINT `type_room_ibfk_1` FOREIGN KEY (`hot_id`) REFERENCES `hotel` (`hot_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
