-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2024 at 01:46 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

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
  `id` int NOT NULL,
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
  `id_pendaftar` int NOT NULL,
  `id` int NOT NULL,
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
  `riwayat_penyakit` text,
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
  `no_sttb` varchar(20) DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL,
  `ijazah` varchar(200) DEFAULT NULL,
  `akta` varchar(200) DEFAULT NULL,
  `kk` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `kartu_vaksin` varchar(200) DEFAULT NULL,
  `surat_pernyataan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftar`, `id`, `n_lengkap`, `n_panggilan`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `jml_saudara`, `bahasa_seharihari`, `berat_bdn`, `tinggi_bdn`, `golongan_darah`, `riwayat_penyakit`, `alamat_tt`, `no_hp`, `jarak_tt`, `nama_ayah`, `nama_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `asal_sekolah`, `nama_tk`, `alamat_tk`, `tgl_sttb`, `no_sttb`, `status`, `ijazah`, `akta`, `kk`, `photo`, `kartu_vaksin`, `surat_pernyataan`) VALUES
(2, 16, 'Putra Nugraha', 'putra', 'lk', 'Sampit', '2002-05-01', 'Islam', 'wni', '2', '3', 'Indonesia', '60', '160', 'B', '-', 'Palangkaraya', '081351678870', '1Km', 'Bahrun', 'Arbaiah', 'SLTA', 'SLTP', 'Pensiunan PNS', 'Ibu Rumah Tangg', '-', '-', '-', 'tk', 'Baiturrahim', 'Sampit', '2024-02-06', '00000', 'Ditolak', 'rZOSJgqafAk7dKsv.pdf', 'YAR45KHTu0WtVwNd.pdf', 'LT941l7iZdW2Ku0w.jpg', '7UMbIQq6n1koOuD5.jpeg', 'IevmAlUaY5S6x43F.doc', '0e5fr2lEZtuY4qVh.pdf'),
(3, 17, 'adiyasa dinata', 'uda', 'lk', 'puri', '2024-02-06', 'wna', 'wni', '2', '2', 'Nasional', '60', '160', 'B', '-', 'Palangkaraya', '081351678870', '2 Km', 'ADi', 'siti', 'S2', 'S5', 'Caleg', 'IRT', '-', '-', '-', 'tk', 'ST.Yosef', 'Puri', '2024-02-06', 'akjdaw/21e1./2', 'Lolos', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 24, 'tugada', 'wadw', 'lk', 'awdaw', '2024-02-08', 'Kristen', 'wna', '2131', '1231', 'ada', '213', '231', 'A', 'awdwd', 'wada', '2131', '231', 'awad', 'wdawd', 'dwada', 'wada', 'wadwa', 'awda', 'adaw', 'adwa', 'adwad', 'awdad', 'awda', 'ada', '2024-02-08', 'adwawda', NULL, 'xJ1sDEl9SweNkuvP.pdf', 'BhK5OJRziCy3ZLuc.pdf', '9kq41BdDVZ0QlhXe.jpeg', 'ae0mOEgnvwZBRHTF.pdf', 'UoIs1ha78BRtXrKL.jpeg', 'KY1fLdDqUeW4h5bV.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id` int NOT NULL,
  `token` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
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
(9, 'admin@gmail.com', 'admin', 'admin', '1', 'sha256:1000:y4/AhWRe0ILSgTvDuH3s1pErzAhCHgL0:frRrWCfINMMQzwB6So+B0sDKH97gwHw4', '2024-02-08 08:12:27 PM', 'approved', 'unban'),
(16, 'simpandrive803@gmail.com', NULL, NULL, '2', 'sha256:1000:aeD4vRqsHAX7dC1Kjid+z9b+RoRjcMSc:h9hMsgGaUYotDctcWoK1ZWoIQUeCTBCT', '2024-02-08 04:08:07 PM', 'approved', 'unban'),
(17, 'putranugraha803@gmail.com', NULL, NULL, '2', 'sha256:1000:KFS8iHbio8fgurO6oct1oz4CuWidLvPv:4M48Wu9L1q1nfs/cFKCYaFS913II5NXH', '2024-02-07 01:32:02 PM', 'approved', 'unban'),
(24, 'tugasakhirstmik23@gmail.com', NULL, NULL, '2', 'sha256:1000:w4WCbhTSWdDjg78saHxyy8ebYAattIYK:GX5hM6GrpF9qE1SFnX98akvpGD7U04dM', NULL, 'approved', 'unban');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
