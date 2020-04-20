-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Apr 2020 pada 14.37
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rapidtest`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(3, '2020_04_19_084204_add_timestamp', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_antrian`
--

CREATE TABLE `tb_antrian` (
  `id` int(255) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `jadwalpilihan` varchar(255) NOT NULL,
  `keluhan` varchar(255) NOT NULL,
  `Status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_antrian`
--

INSERT INTO `tb_antrian` (`id`, `nama_pasien`, `nama_rs`, `jadwalpilihan`, `keluhan`, `Status`, `created_at`, `updated_at`) VALUES
(6, 'Achmad Arya', 'RSUD Kota Malang', '12.00', 'Sakit Hati Dok :)', 'SELESAI', '2020-04-19 23:00:59', '2020-04-19 23:00:59'),
(7, 'Stephanus P. Yogi S.', 'RSUD Kota Malang', '13.00', 'Bingung Dok Sakit Apa :(', 'MENUNGGU', '2020-04-20 06:18:50', '2020-04-20 06:18:50'),
(8, 'Tika Sukra Afrida', 'RSUD Kota Malang', '14.00', 'Gpp kok Dok :)', 'SELESAI', '2020-04-20 06:19:26', '2020-04-20 09:28:42'),
(9, 'Bambang Prasetya', 'RSUD Kota Malang', '10.30', 'Demam tinggi, Batuk, Sesak Nafas', 'SELESAI', '2020-04-20 08:56:50', '2020-04-20 09:10:07'),
(11, 'Mas Budi', 'RSUD Saiful Anwar', '09.00', 'Batuk-batuk kecil', 'MENUNGGU', '2020-04-20 12:07:59', '2020-04-20 12:07:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pasien`
--

CREATE TABLE `tb_pasien` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_user` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp_user` varchar(255) NOT NULL,
  `umur` int(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `goldarah` varchar(2) NOT NULL,
  `ttl_pasien` varchar(255) NOT NULL,
  `keterangan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_pasien`
--

INSERT INTO `tb_pasien` (`id`, `username`, `password`, `nama_user`, `alamat`, `nohp_user`, `umur`, `jeniskelamin`, `goldarah`, `ttl_pasien`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'user', 'user123', 'User', 'Indonesia', '123456', 99, 'Tidak Diketahui', 'Z', 'Jawa, 31 Februari 2019', 'Coba DUlu', NULL, '2020-04-19 01:57:11'),
(2, 'achmadarya', 'user123', 'Achmad Arya', 'Sidoarjo Lur', '08123456789', 20, 'Laki-Laki', 'B', 'Sragen, 11 Mei 1999', 'Sehat Gan', '2020-04-19 01:51:08', '2020-04-19 01:51:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_report`
--

CREATE TABLE `tb_report` (
  `id` int(255) NOT NULL,
  `nama_pasien` varchar(255) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `jadwaltest` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_report`
--

INSERT INTO `tb_report` (`id`, `nama_pasien`, `nama_rs`, `jadwaltest`, `status`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Achmad Arya', 'RSUD Kota Malang', '10.00', 'NEGATIF', '\"Biasalah anak muda\" - Dokter Cinta', '2020-04-20 07:25:59', '2020-04-20 07:25:59', NULL),
(2, 'Stephanus P. Yogi S.', 'RSUD Kota Malang', '14.00', 'NEGATIF', 'Terlalu banyak pikiran', '2020-04-20 08:27:27', '2020-04-20 08:27:27', NULL),
(3, 'Bambang Prasetya', 'RSUD Kota Malang', '11.00', 'POSITIF', 'Hasil Rapid Test Menunjukkan Positif', '2020-04-20 09:02:41', '2020-04-20 12:06:06', NULL),
(4, 'Bambang Prasetya', 'RSUD Kota Malang', '11.00', 'NEGATIF', 'Rapid', '2020-04-20 09:10:08', '2020-04-20 11:50:07', '2020-04-20 11:50:07'),
(5, 'Tika Sukra Afrida', 'RSUD Kota Malang', 'nniun', 'POSITIF', 'asjnaisais', '2020-04-20 09:28:42', '2020-04-20 09:31:18', '2020-04-20 09:31:18'),
(6, 'nknkjnkjnk', 'RSUD Saiful Anwar', 'baksbaksbk', 'NEGATIF', 'khbkhbaksbahk', '2020-04-20 12:27:40', '2020-04-20 12:27:47', '2020-04-20 12:27:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rumahsakit`
--

CREATE TABLE `tb_rumahsakit` (
  `id` int(10) NOT NULL,
  `nama_rs` varchar(255) NOT NULL,
  `alamat_rs` varchar(255) NOT NULL,
  `notelp_rs` varchar(255) NOT NULL,
  `jadwal_rs` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_rumahsakit`
--

INSERT INTO `tb_rumahsakit` (`id`, `nama_rs`, `alamat_rs`, `notelp_rs`, `jadwal_rs`, `created_at`, `updated_at`) VALUES
(1, 'RSUD Kota Malang', 'Jl. Rajasa No.27, Bumiayu, KedungKandang', '031-6767', '08.00-14.30', NULL, NULL),
(2, 'RSUD Saiful Anwar', 'Jl. Jaksa Agung Suprapto, Klojen', '031-6767', '08.00-15.00', '2020-04-19 04:21:06', '2020-04-19 04:24:07'),
(3, 'RSUS Kanjuruhan', 'Jl. Panji No.100, Krajan, Panggungrejo, Kec. Kepanjen', '(0341) 395041', '07.00-13.00', '2020-04-20 08:50:22', '2020-04-20 08:50:22'),
(4, 'RSUD Soeproen', 'Jl. S. Supriadi No.22, Sukun, Kec. Sukun', '(0341) 325112', '09.00-14.00', '2020-04-20 08:50:33', '2020-04-20 08:51:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Achmad Arya', 'achmadarya@gmail.com', NULL, '$2y$10$ls17NL3Ts0wlIgehLGS9pOAFJ5cnscwmv.fpQEMIu6zB7VN37ELLK', NULL, '2020-04-18 23:27:55', '2020-04-18 23:27:55'),
(3, 'Stephanus Yogi', 'stepahus@gmail.com', NULL, '$2y$10$UJiOwBTnxKwcnmdU.kuVLuGZOk2JJ/y4b9GPAomTfz/tG1GI7JMEq', NULL, '2020-04-20 08:31:51', '2020-04-20 08:31:51');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_report`
--
ALTER TABLE `tb_report`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_rumahsakit`
--
ALTER TABLE `tb_rumahsakit`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_antrian`
--
ALTER TABLE `tb_antrian`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_report`
--
ALTER TABLE `tb_report`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_rumahsakit`
--
ALTER TABLE `tb_rumahsakit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
