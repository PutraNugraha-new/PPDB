-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 10, 2024 at 10:34 AM
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
-- Table structure for table `tb_informasi`
--

CREATE TABLE `tb_informasi` (
  `id_informasi` int(11) NOT NULL,
  `nama_info` varchar(100) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `file_info` varchar(100) DEFAULT NULL,
  `tgl_info` date NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_informasi`
--

INSERT INTO `tb_informasi` (`id_informasi`, `nama_info`, `deskripsi`, `file_info`, `tgl_info`, `status`) VALUES
(3, 'Pengunguman Kelulusan', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, nisi natus eaque recusandae esse architecto quod autem rerum incidunt voluptatum atque praesentium quaerat saepe necessitatibus modi ratione tenetur accusantium dolores.', 'cUTSPFLrt7CA3kR6.pdf', '2024-02-09', 'Tampil'),
(4, 'Daftar Nama Siswa', 'Tidak Terlampir', NULL, '2024-02-09', 'Tampil');

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
  `no_sttb` varchar(20) DEFAULT NULL,
  `status` varchar(12) DEFAULT NULL,
  `ijazah` varchar(200) DEFAULT NULL,
  `akta` varchar(200) DEFAULT NULL,
  `kk` varchar(200) DEFAULT NULL,
  `photo` varchar(200) DEFAULT NULL,
  `kartu_vaksin` varchar(200) DEFAULT NULL,
  `surat_pernyataan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_pendaftaran`
--

INSERT INTO `tb_pendaftaran` (`id_pendaftar`, `id`, `n_lengkap`, `n_panggilan`, `jk`, `tempat_lahir`, `tgl_lahir`, `agama`, `kewarganegaraan`, `anak_ke`, `jml_saudara`, `bahasa_seharihari`, `berat_bdn`, `tinggi_bdn`, `golongan_darah`, `riwayat_penyakit`, `alamat_tt`, `no_hp`, `jarak_tt`, `nama_ayah`, `nama_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `pendidikan_wali`, `pekerjaan_wali`, `asal_sekolah`, `nama_tk`, `alamat_tk`, `tgl_sttb`, `no_sttb`, `status`, `ijazah`, `akta`, `kk`, `photo`, `kartu_vaksin`, `surat_pernyataan`) VALUES
(7, 25, 'simpandrivee', 'simpann', 'pr', 'SAMPIT', '2024-02-08', 'islam', 'wni', '2', '3', 'nasional', '60', '162', 'B', '-', 'palangkarayaa', '081351678870', '2', 'bahrun', 'arbaiah', 'SLTA', 'SLTP', 'PNS', 'IRT', '-', '-', '-', 'TK', 'Baiturrahim', 'Sampit', '2024-02-08', '056413.-565/2', 'Diterima', 'e2aAOVCdc86MSnQf.pdf', 'Y8uvKWyqpIzBl9TN.pdf', 'swDputb3qvT82ajS.pdf', '9agBlhmsXJFqePD8.JPG', 'u5Dd6lqic8VbZ7jf.pdf', 'YKSkm7oA1nVFz6Rp.pdf'),
(8, 26, 'putra nugraha', 'putra', 'lk', 'SAMPIT', '2002-05-01', 'islam', 'wni', '2', '4', 'banjar', '60', '162', 'B', '-', 'Palangkaraya', '081351678870', '1', 'Bahrun', 'Arbaiah', 'SLTA', 'SLTA', 'Pedagang', 'Pedagang', '-', '-', '-', 'rumah_tangga', 'Baiturrahim', 'Smapit', '2024-02-09', '014*-1641/awd', 'Ditolak', 'Mo1aZRtfjgPIwYQu.pdf', 'amS0xwielh93jYv7.pdf', 'eX4ikgnQFTtRNMDx.pdf', '9V4WxkTKpfbFSmOi.JPG', 'uyc7C3gWsOQYbNUt.pdf', 'ZgiMemHIEhqJcR9j.pdf');

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
(9, 'admin@gmail.com', 'admin', 'admin', '1', 'sha256:1000:y4/AhWRe0ILSgTvDuH3s1pErzAhCHgL0:frRrWCfINMMQzwB6So+B0sDKH97gwHw4', '2024-02-10 04:28:23 PM', 'approved', 'unban'),
(25, 'simpandrive803@gmail.com', NULL, NULL, '2', 'sha256:1000:QKLzKAdLM6tdi61Yq4uwCrn70hV8cHu4:TFqOBmShYgYPEClgpz7Fvrx3MCoGaudN', NULL, 'approved', 'unban'),
(26, 'workputranugraha803@gmail.com', NULL, NULL, '2', 'sha256:1000:ikkM/aX6R7ylrMZ5yOqfYcJD3rS1uMvj:NV5avfJCM2H/Sw9zcLIqs6QbU0dZ6pG8', NULL, 'approved', 'unban');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  ADD PRIMARY KEY (`id_informasi`);

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
-- AUTO_INCREMENT for table `tb_informasi`
--
ALTER TABLE `tb_informasi`
  MODIFY `id_informasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_pendaftaran`
--
ALTER TABLE `tb_pendaftaran`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
