-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2021 at 12:58 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat_alan`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pengajuan_surat` bigint(20) UNSIGNED DEFAULT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `disposisi`
--

INSERT INTO `disposisi` (`id`, `id_pengajuan_surat`, `id_user`, `created_at`, `updated_at`) VALUES
(6, 2, 2, '2021-07-04 03:31:51', '2021-07-04 03:31:51'),
(7, 1, 2, '2021-07-04 03:32:30', '2021-07-04 03:32:30'),
(8, 3, 4, '2021-07-04 05:41:01', '2021-07-04 05:41:01'),
(12, 3, 3, '2021-07-04 06:01:43', '2021-07-04 06:01:43'),
(16, 4, 4, '2021-07-04 19:08:04', '2021-07-04 19:08:04'),
(17, 4, 4, '2021-07-04 19:08:22', '2021-07-04 19:08:22'),
(18, 4, 5, '2021-07-04 19:20:45', '2021-07-04 19:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id`, `jabatan`, `created_at`, `updated_at`) VALUES
(1, 'Pegawai', '2021-07-03 07:05:18', '2021-07-04 03:09:41'),
(2, 'Admin', '2021-07-03 07:54:01', '2021-07-03 07:54:01'),
(3, 'Pimpinan', '2021-07-03 07:54:09', '2021-07-03 07:54:09'),
(4, 'HRD', '2021-07-03 07:54:33', '2021-07-03 07:54:33');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_surat`
--

CREATE TABLE `jenis_surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_surat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jenis_surat`
--

INSERT INTO `jenis_surat` (`id`, `jenis_surat`, `created_at`, `updated_at`) VALUES
(1, 'Surat Izin', '2021-07-03 07:16:04', '2021-07-03 07:16:04'),
(2, 'Mutasi', '2021-07-04 03:54:32', '2021-07-04 03:54:32'),
(3, 'Kenaikan Jabatan', '2021-07-04 04:43:42', '2021-07-04 04:43:42'),
(4, 'Surat Kinerja Karyawan', '2021-07-04 05:24:46', '2021-07-04 05:24:46');

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
(1, '2013_07_03_090648_create_jabatan_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2021_07_03_090735_create_jenis_surat_table', 1),
(6, '2021_07_03_090745_create_pengajuan_surat_table', 1),
(7, '2021_07_03_090851_create__disposisi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_surat`
--

CREATE TABLE `pengajuan_surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `no_surat` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis_surat` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `tanggal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pengajuan_surat`
--

INSERT INTO `pengajuan_surat` (`id`, `no_surat`, `id_jenis_surat`, `id_user`, `tanggal`, `keterangan`, `created_at`, `status`, `updated_at`) VALUES
(1, '1/PL/2021', 2, 3, '2021-07-03', 'izin karena sakit dari tanggal 21 sampai 25 Juli 2021', '2021-07-03 07:17:27', 2, '2021-07-04 03:32:45'),
(2, '2/PL/2021', 2, 3, '2021-07-04', 'Izin Lapar', '2021-07-03 23:02:13', 3, '2021-07-04 03:32:15'),
(3, '3/PL/2021', 1, 3, '2021-07-04', 'sad', '2021-07-04 03:51:12', 3, '2021-07-04 06:01:43'),
(4, '1/izin/3/2021', 1, 5, '2021-07-05', 'Izin cuti selama 12 hari', '2021-07-04 18:46:13', 3, '2021-07-04 19:20:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_jabatan` bigint(20) UNSIGNED DEFAULT NULL,
  `jenis_jabatan` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tgl_daftar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_jabatan`, `jenis_jabatan`, `name`, `alamat`, `no_telp`, `tgl_daftar`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'Ari Wardana', NULL, NULL, NULL, 'admin@gmail.com', NULL, '$2y$10$PtTmG8r4iZCiiH7PijK6Z.0jwW/vt8W0pOgYougyy8ICovULn7spO', NULL, '2021-07-03 07:05:43', '2021-07-03 07:05:43'),
(2, 3, 'Kepala Gudang', 'Selvi Rani, S.Tr.Kom', 'Jl. Rukun', '085350439065', '2021-12-31', 'pimpinan@gmail.com', NULL, '123456789', NULL, '2021-07-03 07:56:01', '2021-07-04 18:36:47'),
(3, 1, 'Checker', 'Riko Raynol', 'Jl. New Hope', '085350439065', '2020-06-03', 'pegawai@gmail.com', NULL, '123456789', NULL, '2021-07-04 03:08:54', '2021-07-04 07:21:24'),
(4, 4, 'HRD admin', 'Chandra', 'Jl. Gemilang', '085350439065', '2021-01-01', 'hrd@gmail.com', NULL, '$2y$10$pK3MZC8H3QJUV2D/O72meO6iqYvt2uLPoj/xrdicwW7G15dIsHUKq', NULL, '2021-07-04 05:31:01', '2021-07-04 17:22:33'),
(5, 1, 'Gudang', 'Monica Sandra', 'Jl. Teuku Umar', '085350439065', '2021-07-04', 'monica@gmail.com', NULL, '$2y$10$.oET6OZFkVWxfwvgS1w1FuX2Z.c4UAuyiU9aI2RL4UcgGxT46/Pri', NULL, '2021-07-04 06:55:18', '2021-07-04 06:55:18'),
(9, 4, 'HRD admin', 'Desnita Apriyani', 'Jl. Rapak Dalam', '085350439065', '2021-12-31', 'desnita@gmail.com', NULL, '$2y$10$kjpKj9Oow0BU8Ds70k7rbO71MzUkixpKyqPAo6MN7RJF3LOyVmOuq', NULL, '2021-07-04 17:21:57', '2021-07-04 17:21:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `disposisi_id_pengajuan_surat_foreign` (`id_pengajuan_surat`),
  ADD KEY `disposisi_id_user_foreign` (`id_user`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pengajuan_surat_id_jenis_surat_foreign` (`id_jenis_surat`),
  ADD KEY `pengajuan_surat_id_user_foreign` (`id_user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_id_jabatan_foreign` (`id_jabatan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_surat`
--
ALTER TABLE `jenis_surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD CONSTRAINT `disposisi_id_pengajuan_surat_foreign` FOREIGN KEY (`id_pengajuan_surat`) REFERENCES `pengajuan_surat` (`id`),
  ADD CONSTRAINT `disposisi_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `pengajuan_surat`
--
ALTER TABLE `pengajuan_surat`
  ADD CONSTRAINT `pengajuan_surat_id_jenis_surat_foreign` FOREIGN KEY (`id_jenis_surat`) REFERENCES `jenis_surat` (`id`),
  ADD CONSTRAINT `pengajuan_surat_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_id_jabatan_foreign` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
