-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2021 at 07:55 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `kuota` int(11) NOT NULL,
  `rata_rata` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`, `kuota`, `rata_rata`) VALUES
(1, 'teknik komputer jaringan', 50, '80'),
(2, 'Rekayasa perangkat lunak', 50, '80'),
(3, 'Desain Pemodelan dan Informasi Bangunan', 50, '75'),
(4, 'Teknik Instalasi Tenaga Listrik', 50, '75'),
(5, 'Teknik Kendaraan Ringan Otomotif', 50, '75'),
(6, 'Teknik Permesinan', 0, '75'),
(7, 'Teknik Bisnis Sepeda Motor', 50, '75'),
(8, 'Kimia Industri', 50, '75'),
(9, 'Teknik Audio Video', 50, '75'),
(10, 'Teknik Elektronika Industri', 50, '75'),
(11, 'Axioo Class Program', 50, '75');

-- --------------------------------------------------------

--
-- Table structure for table `k_tidakmampu`
--

CREATE TABLE `k_tidakmampu` (
  `id_ktm` int(11) NOT NULL,
  `nama_ktm` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `k_tidakmampu`
--

INSERT INTO `k_tidakmampu` (`id_ktm`, `nama_ktm`, `keterangan`) VALUES
(1, 'tidak ada', ''),
(2, 'KIP', 'kartu indonesia pintar');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama`, `keterangan`) VALUES
(1, 'Admin', ''),
(2, 'User', '');

-- --------------------------------------------------------

--
-- Table structure for table `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `nama_mapel`) VALUES
(1, 'pendidikan agama'),
(2, 'pendidikan kewarganegaraan'),
(3, 'bahasa indonesia'),
(4, 'matematika'),
(5, 'ilmu pengetahuan alam'),
(6, 'ilmu pengetahuan sosial'),
(7, 'seni budaya dan keterampilan'),
(8, 'pendidikan olahraga'),
(9, 'bahasa madura'),
(10, 'bahasa inggris');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `raport`
--

CREATE TABLE `raport` (
  `id_raport` int(11) NOT NULL,
  `id_mapel` bigint(20) NOT NULL,
  `semester1` int(11) NOT NULL,
  `semester2` int(11) NOT NULL,
  `semester3` int(11) NOT NULL,
  `semester4` int(11) NOT NULL,
  `semester5` int(11) NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `raport`
--

INSERT INTO `raport` (`id_raport`, `id_mapel`, `semester1`, `semester2`, `semester3`, `semester4`, `semester5`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 1, 80, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(2, 2, 78, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(3, 3, 75, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(4, 4, 75, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(5, 5, 75, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(6, 6, 75, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(7, 7, 75, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(8, 8, 75, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(9, 9, 75, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(10, 10, 75, 75, 75, 75, 75, 3, '2021-04-21 07:23:01', '2021-04-24 11:30:06'),
(11, 1, 67, 97, 98, 87, 67, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(12, 2, 76, 78, 65, 56, 98, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(13, 3, 44, 44, 78, 87, 65, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(14, 4, 445, 66, 98, 89, 87, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(15, 5, 345, 78, 45, 89, 98, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(16, 6, 65, 88, 98, 67, 87, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(17, 7, 67, 99, 56, 56, 87, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(18, 8, 56, 45, 54, 87, 89, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(19, 9, 45, 76, 87, 65, 67, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(20, 10, 87, 86, 45, 87, 89, 2, '2021-04-21 15:37:22', '2021-04-22 19:07:30'),
(21, 1, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(22, 2, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(23, 3, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(24, 4, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(25, 5, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(26, 6, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(27, 7, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(28, 8, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(29, 9, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL),
(30, 10, 50, 50, 50, 50, 50, 4, '2021-04-22 03:12:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id_siswa` bigint(20) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `telepon` bigint(20) NOT NULL,
  `sekolah_asal` varchar(255) NOT NULL,
  `nisn` bigint(20) NOT NULL,
  `id_ktm` int(11) NOT NULL,
  `id_jurusan1` int(11) NOT NULL,
  `id_jurusan2` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `foto`, `nama_lengkap`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `kecamatan`, `telepon`, `sekolah_asal`, `nisn`, `id_ktm`, `id_jurusan1`, `id_jurusan2`, `status`, `keterangan`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'T0dx7x.jpg', 'ucup markucup', 'Bangkalan', '2021-04-08', 'laki-laki', 'jl Bangbutah No 1', 'Bangkalan', 85336076077, 'SMKN 2 Bangkalan', 223423432, 1, 2, 1, NULL, NULL, 3, '2021-04-21 03:05:09', '2021-04-21 03:06:26'),
(2, 'rFGmOp.png', 'user mahmudatul', 'pengeranan', '2021-04-06', 'laki-laki', 'jl Bangbutah No 1', 'Bangkalan', 5464564545645, 'SMKN 2 Bangkalan', 23333453, 2, 2, 8, NULL, NULL, 2, '2021-04-21 03:05:09', '2021-04-23 02:07:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` int(11) NOT NULL DEFAULT 2,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `level`, `created_at`, `updated_at`) VALUES
(1, 'ach fasihul lisan', 'fasihullisan091966@gmail.com', '$2y$10$XewWow4D8HPXty/lSk5Uk.e6LxgZvD/HpTPNFcXX/9LV4/R05XaB2', 1, '2021-04-09 10:04:55', '2021-04-09 10:04:55'),
(2, 'user', 'user@gmail.com', '$2y$10$Jd1rXSdEk./jyvjHdIz/Zegz/pO124aB902EHsKRQcT1fToeJSRdm', 2, '2021-04-09 10:07:36', '2021-04-09 10:07:36'),
(3, 'ucup', 'ucup@gmail.com', '$2y$10$PbyCiyki8aVzgJtdUVpUaePMI9LVl6/W0eGzhv5yNgWM/XFMeOp9O', 2, NULL, NULL),
(4, 'asep', 'asep@gmail.com', '$2y$10$rtzvvFwEbPBXFKCnQhGdXONKwOnxrF..e5YhBWXEsGWBSswQ1pJJK', 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`),
  ADD KEY `nama` (`nama_jurusan`);

--
-- Indexes for table `k_tidakmampu`
--
ALTER TABLE `k_tidakmampu`
  ADD PRIMARY KEY (`id_ktm`),
  ADD KEY `nama` (`nama_ktm`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`),
  ADD KEY `nama` (`nama`);

--
-- Indexes for table `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raport`
--
ALTER TABLE `raport`
  ADD PRIMARY KEY (`id_raport`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `nama_lengkap` (`nama_lengkap`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `k_tidakmampu`
--
ALTER TABLE `k_tidakmampu`
  MODIFY `id_ktm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `raport`
--
ALTER TABLE `raport`
  MODIFY `id_raport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id_siswa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
