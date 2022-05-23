-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Bulan Mei 2022 pada 06.39
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inf206-2022-ri1-odacle`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokters`
--

CREATE TABLE `dokters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal-lahir` date NOT NULL,
  `no-hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_dokters`
--

CREATE TABLE `jadwal_dokters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `hari` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(40, '2022_04_27_191341_create_dokters_table', 1),
(65, '2014_10_12_000000_create_users_table', 2),
(66, '2014_10_12_100000_create_password_resets_table', 2),
(67, '2019_08_19_000000_create_failed_jobs_table', 2),
(68, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(69, '2022_04_27_195359_create_dokters_table', 2),
(70, '2022_05_21_144656_create_jadwal_dokters_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasiendaftar`
--

CREATE TABLE `pasiendaftar` (
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nik` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_dokter` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pasiendaftar`
--

INSERT INTO `pasiendaftar` (`nama`, `nik`, `no_hp`, `tanggal`, `hari`, `nama_dokter`, `id`) VALUES
('Teuku Nabil', '41121244342134120', '082164848071', '2022-05-23', 'Monday', 'Drg.Manda.SpRGA', 2),
('Teuku', '3214214242142', '23123231213123', '2022-05-23', 'Monday', 'Drg.Putri.SpKGA', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `regispasien`
--

CREATE TABLE `regispasien` (
  `no_antrian` int(200) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `nik` varchar(40) NOT NULL,
  `dokter` varchar(40) NOT NULL,
  `waktu` varchar(20) NOT NULL,
  `keluhan` varchar(255) DEFAULT NULL,
  `catatan` varchar(255) DEFAULT 'Tidak Ada',
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `regispasien`
--

INSERT INTO `regispasien` (`no_antrian`, `nama`, `nik`, `dokter`, `waktu`, `keluhan`, `catatan`, `tanggal`) VALUES
(2, 'Teuku Nabil', '41121244342134120', 'Drg.Manda.SpRGA', '14.00 - 18.00', 'rontgen juga', 'Tidak Ada', '2022-05-23'),
(3, 'Teuku', '3214214242142', 'Drg.Putri.SpKGA', '08.00 - 12.00', 'gigi geraham', 'Tidak Ada', '2022-05-23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `spesialis` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nik` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggallahir` date NOT NULL,
  `nohp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pasien',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user.png',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `spesialis`, `nik`, `tanggallahir`, `nohp`, `level`, `email`, `image`, `password`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Teuku Nabil Muhammad Dhuha', NULL, '41121244342134124', '2022-05-04', '082164848070', 'pasien', 'nabilmuhammad246@gmail.com', 'WhatsApp Image 2022-05-08 at 00.20.27.jpeg', '$2y$10$5mLcLjbfWTCAcWtMu5lhSuChaFctLLMqKlN7F6D1ffzDYVRpZxtVe', NULL, NULL, '2022-05-22 18:41:20', '2022-05-22 20:37:46'),
(2, 'Teuku Nabil', NULL, '41121244342134120', '2022-04-01', '082164848071', 'pasien', 'nabil@gmail.com', 'user.png', '$2y$10$MgJ.GxrTIheariuyruT2eO3XUjEnS/2vqYa5BJbm2SARE69IgKb2u', NULL, NULL, '2022-05-22 18:41:46', '2022-05-22 18:41:46'),
(3, 'Drg.Abdul.SpRGA', 'radiologi-gigi', '41121244342134121', '2022-05-06', '082134567867', 'dokter', 'nabilmuhammad@gmail.com', 'user.png', '$2y$10$JYI3t7iylFlEEpQ1HzvtXuMVYNRMuRVP7E.I.qtpfnljJ8.gknAlq', NULL, NULL, '2022-05-22 18:42:50', '2022-05-22 19:12:06'),
(4, 'Drg.Manda.SpRGA', NULL, '4112124434213412', '2022-05-01', '082164848070', 'dokter', 'dokter@gmail.com', 'user.png', '$2y$10$lHtprKcwr3H5BbELFveX4eWuvmATAgL48Wp0xJnAexYHgWsAAz2w6', NULL, NULL, '2022-05-22 19:13:12', '2022-05-22 19:13:12'),
(5, 'Teuku', NULL, '3214214242142', '2022-05-07', '23123231213123', 'pasien', 't_nabil@mhs.unsyiah.ac.id', 'user.png', '$2y$10$44lK7yDO2B1mAoYwmFAAEuEvg1AC8.Kvt0YWVxdhC.crHoSlmEOs6', NULL, NULL, '2022-05-22 19:17:46', '2022-05-22 19:17:46');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dokters`
--
ALTER TABLE `dokters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dokters_email_unique` (`email`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jadwal_dokters`
--
ALTER TABLE `jadwal_dokters`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasiendaftar`
--
ALTER TABLE `pasiendaftar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `regispasien`
--
ALTER TABLE `regispasien`
  ADD PRIMARY KEY (`no_antrian`),
  ADD KEY `no_antrian` (`no_antrian`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `dokters`
--
ALTER TABLE `dokters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jadwal_dokters`
--
ALTER TABLE `jadwal_dokters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT untuk tabel `pasiendaftar`
--
ALTER TABLE `pasiendaftar`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `regispasien`
--
ALTER TABLE `regispasien`
  MODIFY `no_antrian` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
