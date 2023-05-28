-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 28, 2023 at 04:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `id_karyawan`, `nama`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ID1001', 'Manggala', 'manggala@email.com', '2023-04-20 17:15:20', '2023-04-20 17:15:20'),
(2, 'ID1002', 'Randi', 'randi@email.com', '2023-05-24 06:07:02', '2023-05-24 06:07:02'),
(3, 'ID0001', 'Admin', 'admin@email.com', '2023-05-28 07:48:35', '2023-05-28 07:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gedungs`
--

CREATE TABLE `gedungs` (
  `gedung_id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `latitude` double(12,5) NOT NULL,
  `longitude` double(12,5) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gedungs`
--

INSERT INTO `gedungs` (`gedung_id`, `nama`, `latitude`, `longitude`, `updated_at`, `created_at`) VALUES
(1, 'Kampung', -8.04453, 110.81718, '2023-04-20 20:33:20', '2023-04-20 20:33:20'),
(2, '23 Paskal', -6.91583, 107.59391, '2023-04-25 23:26:53', '2023-04-25 23:26:53'),
(3, 'Embun Senja', -6.98614, 110.42816, '2023-05-10 10:04:12', '2023-05-10 10:04:12'),
(4, 'Embun Senja', -6.98286, 110.41833, '2023-05-21 07:11:00', '2023-05-21 07:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `izins`
--

CREATE TABLE `izins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` varchar(255) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `jenis_izin` varchar(255) NOT NULL,
  `file_izin` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `stts_izin` varchar(255) NOT NULL DEFAULT 'Belum Diverifikasi',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izins`
--

INSERT INTO `izins` (`id`, `id_karyawan`, `nama_karyawan`, `jenis_izin`, `file_izin`, `tanggal`, `stts_izin`, `created_at`, `updated_at`) VALUES
(1, 'ID2001', 'Luthfi', 'Izin', '/private/var/folders/8z/twz3ctls2sldfqbxptjsppjm0000gn/T/phpn7kTxn', '2023-04-21', 'Izin Tidak Disetujui', '2023-04-20 17:16:52', '2023-05-10 10:15:37'),
(2, 'ID2001', 'Luthfi', 'Izin', '/private/var/folders/8z/twz3ctls2sldfqbxptjsppjm0000gn/T/phpyJQd4m', '2023-05-07', 'Izin Disetujui', '2023-05-07 07:57:20', '2023-05-10 10:15:34'),
(3, 'ID2002', 'Fajar', 'Sakit', '/private/var/folders/8z/twz3ctls2sldfqbxptjsppjm0000gn/T/php4fu4he', '2023-05-09', 'Izin Tidak Disetujui', '2023-05-09 09:46:21', '2023-05-21 14:06:43'),
(4, 'ID2002', 'Fajar', 'Sakit', 'Surat Undangan Perlombaan - Teknik Informatika-6.pdf', '2023-05-10', 'Izin Disetujui', '2023-05-10 08:39:42', '2023-05-10 10:28:34'),
(5, 'ID2001', 'Luthfi', 'Sakit', 'Laporan_BlueKeep_KelompokCintaAlam.pdf', '2023-05-10', 'Izin Disetujui', '2023-05-10 10:44:18', '2023-05-10 10:57:02'),
(6, 'ID2001', 'Luthfi', 'Sakit', 'CV Luthfi.pdf', '2023-05-11', 'Izin Disetujui', '2023-05-11 04:18:45', '2023-05-11 04:19:06'),
(7, 'ID2001', 'Luthfi', 'Izin', 'Apa itu Hacker dan Cara Kerjanya_desktop.jpg', '2023-05-15', 'Izin Disetujui', '2023-05-15 07:18:29', '2023-05-15 07:59:24'),
(8, 'ID2001', 'Luthfi', 'Sakit', 'Hitam Hijau Modern Pamflet Pusat Kebugaran.png', '2023-05-15', 'Izin Disetujui', '2023-05-15 08:03:17', '2023-05-15 08:47:25'),
(9, 'ID2002', 'Fajar', 'Sakit', 'Apa itu Hacker dan Cara Kerjanya_desktop.jpg', '2023-05-19', 'Izin Disetujui', '2023-05-19 10:52:20', '2023-05-19 11:27:53'),
(10, 'ID2001', 'Luthfi', 'Sakit', '7. [Format] Surat Rekomendasi_UNDIP_ untuk Mahasiswa Program MSIB Angkatan 5.docx', '2023-05-22', 'Belum Diverifikasi', '2023-05-22 12:33:03', '2023-05-22 12:33:03'),
(11, 'ID2001', 'Luthfi', 'Sakit', 'CV Luthfi.pdf', '2023-05-24', 'Izin Tidak Disetujui', '2023-05-24 05:42:06', '2023-05-24 06:07:44'),
(12, 'ID2003', 'Arka', 'Izin', 'KTM.pdf', '2023-05-24', 'Belum Diverifikasi', '2023-05-24 06:36:46', '2023-05-24 06:36:46'),
(13, 'ID2003', 'Arka', 'Izin', 'BelerASA.docx', '2023-05-24', 'Belum Diverifikasi', '2023-05-24 06:38:52', '2023-05-24 06:38:52'),
(14, 'ID2001', 'Luthfi', 'Sakit', 'kabisat.png', '2023-05-24', 'Belum Diverifikasi', '2023-05-24 11:57:47', '2023-05-24 11:57:47'),
(15, 'ID2001', 'Luthfi', 'Sakit', '24060120190150.pdf', '2023-05-24', 'Belum Diverifikasi', '2023-05-24 12:06:08', '2023-05-24 12:06:08'),
(16, 'ID2001', 'Luthfi', 'Sakit', 'Formulir Penilaian Praktek Kerja Lapangan perusahaan V2.pdf', '2023-05-24', 'Belum Diverifikasi', '2023-05-24 12:10:02', '2023-05-24 12:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `karyawans`
--

CREATE TABLE `karyawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `karyawans`
--

INSERT INTO `karyawans` (`id`, `id_karyawan`, `nama`, `email`, `created_at`, `updated_at`) VALUES
(1, 'ID2001', 'Luthfi', 'luthfi@email.com', '2023-04-20 17:14:39', '2023-04-20 17:14:39'),
(2, 'ID2002', 'Fajar', 'fajar@email.com', '2023-05-09 09:45:11', '2023-05-09 09:45:11'),
(3, 'ID2003', 'Arka', 'arka@email.com', '2023-05-19 11:26:31', '2023-05-19 11:26:31'),
(4, 'ID0002', 'Karyawan', 'karyawan@email.com', '2023-05-28 07:49:19', '2023-05-28 07:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2023_03_28_183441_create_izins_table', 2),
(19, '2014_10_12_000000_create_users_table', 3),
(20, '2014_10_12_100000_create_password_resets_table', 3),
(21, '2019_08_19_000000_create_failed_jobs_table', 3),
(22, '2019_12_14_000001_create_personal_access_tokens_table', 3),
(23, '2023_02_22_204820_create_admins_table', 3),
(24, '2023_02_22_205039_create_karyawans_table', 3),
(25, '2023_02_22_205048_create_presensis_table', 3),
(26, '2023_02_23_061318_create_gedungs_table', 3),
(27, '2023_04_12_192324_create_izins_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presensis`
--

CREATE TABLE `presensis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `jam_msk` time DEFAULT NULL,
  `jam_klr` time DEFAULT NULL,
  `latitude` double(12,5) NOT NULL,
  `longitude` double(12,5) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `presensis`
--

INSERT INTO `presensis` (`id`, `id_karyawan`, `nama`, `tanggal`, `jam_msk`, `jam_klr`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'ID2001', 'Luthfi', '2023-04-21', '10:33:48', NULL, -8.04458, 110.81712, '2023-04-21 03:33:48', '2023-04-21 03:33:48'),
(2, 'ID2001', 'Luthfi', '2023-04-26', '13:27:03', '17:45:04', -6.91583, 107.59391, '2023-04-26 06:27:03', '2023-04-26 10:45:04'),
(3, 'ID2001', 'Luthfi', '2023-05-21', '21:11:51', '21:12:08', -6.98286, 110.41833, '2023-05-21 14:11:51', '2023-05-21 14:12:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_karyawan` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_karyawan`, `name`, `email`, `email_verified_at`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ID2001', 'Luthfi', 'luthfi@email.com', NULL, 'karyawan', '$2y$10$Kq9umeLxO4Wjp1lNDONr8.VCGmMcZEQAcCceGwpz1pgDwc/ak6Zo.', NULL, '2023-04-20 17:14:39', '2023-04-20 17:14:39'),
(2, 'ID1001', 'Manggala', 'manggala@email.com', NULL, 'admin', '$2y$10$LkXn7a4Fef/Ii2GlLqxUJ.O56OeO4kmurLbXJyFAyK6Jm6BHSPO.e', NULL, '2023-04-20 17:15:20', '2023-04-20 17:15:20'),
(3, 'ID2002', 'Fajar', 'fajar@email.com', NULL, 'karyawan', '$2y$10$CUKqY9WAYdWulZG9I5tS3.tz6/M68/dQqqOkdRwcwoZd.Td4/N.sW', NULL, '2023-05-09 09:45:11', '2023-05-09 09:45:11'),
(4, 'ID2003', 'Arka', 'arka@email.com', NULL, 'karyawan', '$2y$10$EsBBT/yJDnZZPBsrzw1De.5NjKxHU5w1B4ZnYY71FLq7bSXBYPsum', NULL, '2023-05-19 11:26:31', '2023-05-19 11:26:31'),
(5, 'ID1002', 'Randi', 'randi@email.com', NULL, 'admin', '$2y$10$sfdY2D.Qo8C8Y9o2/6HrnO2AbnkpG5uw03qr/rn/NeDbh54pbPzhm', NULL, '2023-05-24 06:07:02', '2023-05-24 06:07:02'),
(6, 'ID0001', 'Admin', 'admin@email.com', NULL, 'admin', '$2y$10$Yzi8pUqnYLQgQ1oqaeXMOexddf.UhZpSTwU7rSwjCUap7RDLL97R.', NULL, '2023-05-28 07:48:35', '2023-05-28 07:48:35'),
(7, 'ID0002', 'Karyawan', 'karyawan@email.com', NULL, 'karyawan', '$2y$10$J/rBK7bofOF.rD1giU//c.9tza5ctZjn5rMcbjoWTSLYQEDWzkgAi', NULL, '2023-05-28 07:49:19', '2023-05-28 07:49:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_id_karyawan_unique` (`id_karyawan`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gedungs`
--
ALTER TABLE `gedungs`
  ADD PRIMARY KEY (`gedung_id`);

--
-- Indexes for table `izins`
--
ALTER TABLE `izins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `karyawans`
--
ALTER TABLE `karyawans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `karyawans_id_karyawan_unique` (`id_karyawan`),
  ADD UNIQUE KEY `karyawans_email_unique` (`email`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `presensis`
--
ALTER TABLE `presensis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_id_karyawan_unique` (`id_karyawan`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gedungs`
--
ALTER TABLE `gedungs`
  MODIFY `gedung_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `izins`
--
ALTER TABLE `izins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `karyawans`
--
ALTER TABLE `karyawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presensis`
--
ALTER TABLE `presensis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
