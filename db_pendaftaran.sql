-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2024 at 01:15 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pendaftaran`
--

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(50) NOT NULL,
  `timezone` varchar(100) NOT NULL,
  `recaptcha` varchar(5) NOT NULL,
  `theme` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `timezone`, `recaptcha`, `theme`) VALUES
(1, 'Dnato System Login', 'Asia/Makassar', 'no', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftaran`
--

CREATE TABLE `tb_pendaftaran` (
  `id_pendaftar` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `n_lengkap` varchar(30) DEFAULT NULL,
  `n_panggilan` varchar(30) DEFAULT NULL,
  `jk` varchar(12) DEFAULT NULL,
  `tempat_lahir` varchar(30) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `agama` varchar(25) DEFAULT NULL,
  `kewarganegaraan` varchar(5) DEFAULT NULL,
  `anak_ke` varchar(10) DEFAULT NULL,
  `jml_saudara` varchar(10) DEFAULT NULL,
  `bahasa_seharihari` varchar(20) DEFAULT NULL,
  `berat_bdn` varchar(10) DEFAULT NULL,
  `tinggi_bdn` varchar(10) DEFAULT NULL,
  `golongan_darah` varchar(2) DEFAULT NULL,
  `riwayat_penyakit` text DEFAULT NULL,
  `alamat_tt` varchar(30) DEFAULT NULL,
  `no_hp` varchar(20) DEFAULT NULL,
  `jarak_tt` varchar(10) DEFAULT NULL,
  `nama_ayah` varchar(30) DEFAULT NULL,
  `nama_ibu` varchar(30) DEFAULT NULL,
  `pendidikan_ayah` varchar(15) DEFAULT NULL,
  `pendidikan_ibu` varchar(15) DEFAULT NULL,
  `pekerjaan_ayah` varchar(15) DEFAULT NULL,
  `pekerjaan_ibu` varchar(15) DEFAULT NULL,
  `nama_wali` varchar(30) DEFAULT NULL,
  `pendidikan_wali` varchar(10) DEFAULT NULL,
  `pekerjaan_wali` varchar(20) DEFAULT NULL,
  `asal_sekolah` varchar(20) DEFAULT NULL,
  `nama_tk` varchar(20) DEFAULT NULL,
  `alamat_tk` varchar(30) DEFAULT NULL,
  `tgl_sttb` varchar(20) DEFAULT NULL,
  `no_sttb` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftar`, `id`, `n_lengkap`, `n_panggilan`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `jml_saudara`, `bahasa_seharihari`, `berat_bdn`, `tinggi_bdn`, `golongan_darah`, `riwayat_penyakit`, `alamat_tt`, `no_hp`, `jarak_tt`, `nama_ayah`, `nama_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `asal_sekolah`, `nama_tk`, `alamat_tk`, `tgl_sttb`, `no_sttb`) VALUES
(2, 16, 'Putra Nugraha', 'putra', 'lk', 'Sampit', '2002-05-01', 'Islam', 'wni', '2', '3', 'Indonesia', '60', '160', 'B', '-', 'Palangkaraya', '081351678870', '1Km', 'Bahrun', 'Arbaiah', 'SLTA', 'SLTP', 'Pensiunan PNS', 'Ibu Rumah Tangg', '-', '-', '-', 'tk', 'Baiturrahim', 'Sampit', '2024-02-06', '00000');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `role` varchar(10) NOT NULL,
  `password` text NOT NULL,
  `last_login` varchar(100) DEFAULT NULL,
  `status` varchar(100) NOT NULL,
  `banned_users` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `first_name`, `last_name`, `role`, `password`, `last_login`, `status`, `banned_users`) VALUES
(4, 'putranugraha', 'nugraha', 'nugraha', '2', 'sha256:1000:f2YrYnpBDWGi11Pon5nJNAyc0tgsZlRT:ewjJJ4LfVIXGwd6d1xL97buHPKWEXpQb', '2024-01-14 08:40:39 AM', 'approved', 'unban'),
(9, 'admin@gmail.com', 'admin', 'admin', '1', 'sha256:1000:y4/AhWRe0ILSgTvDuH3s1pErzAhCHgL0:frRrWCfINMMQzwB6So+B0sDKH97gwHw4', '2024-02-03 09:33:17 AM', 'approved', 'unban'),
(16, 'simpandrive803@gmail.com', NULL, NULL, '2', 'sha256:1000:aeD4vRqsHAX7dC1Kjid+z9b+RoRjcMSc:h9hMsgGaUYotDctcWoK1ZWoIQUeCTBCT', '2024-02-06 02:55:11 PM', 'approved', 'unban');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
