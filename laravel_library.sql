-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 23, 2024 at 11:38 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_anggota` varchar(20) DEFAULT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `jenis_kel` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `kode_anggota`, `nama_lengkap`, `alamat`, `jenis_kel`, `email`, `password`, `updated_at`, `created_at`) VALUES
(3, 'AGT00002', 'Nadhif Alghifari', 'Cihampelas', 'L', 'alghifari@gmail.com', '$2y$12$2zvR5W8SzQX6JCNRk7YwCOfRaFN6JwzIgs/xueg6332coE/b.rDxe', '2024-02-27', '2024-02-27'),
(5, 'AGT00004', 'Amin Abdul Aziz', 'Citeureup Kab Bandung', 'L', 'aminabdul@gmail.com', '$2y$12$CEATiArcRJXqxR8KDJrzn.C6uRnJww03pENY1Y3YUnK1DMz2B2Ex6', '2024-03-08', '2024-03-08'),
(6, 'AGT00003', 'Fadhil Halyzari', 'Cihampelas', 'L', 'fhalyzari@gmail.com', '$2y$12$wfluzS5tVAytFWVR/iNZoOCTk9e/AtnABO8v0TmA4DL4pwhiG7wvK', '2024-06-22', '2024-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_buku` varchar(20) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `penerbit` varchar(20) NOT NULL,
  `tahun_terbit` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `sinopsis` varchar(50) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `kode_buku`, `judul`, `penulis`, `penerbit`, `tahun_terbit`, `foto`, `sinopsis`, `updated_at`, `created_at`) VALUES
(1, 'BKU00001', 'Kamus Bahasa Inggris', 'Fadhil Halyzari', 'SMK TIP', 2015, 'post-image/oIMJKdX119DoCnz9JHTyqSYBD1LJIyF3teoezOCe.jpg', 'Kamus Bahasa Inggris 100 milyar', '2024-03-23', '2024-03-23'),
(2, 'BKU00002', 'Fisika & Kimia', 'Nazmi Khayri', 'Gramedia', 2017, 'post-image/JBIwbXFqOx96SyAO3zRKPtcyLwPo0UaTBEzuO27d.jpg', 'Belajar Fisika & Kimia', '2024-03-23', '2024-03-23'),
(3, 'BKU00003', 'Taktik strategi Futsal', 'Coach Justin', 'Jakarta Media', 2020, 'post-image/iOC6tBGAfXLPZS8nNwtv5A4tLEUsqqDQcZNMJBKw.jpg', 'Strategi Dalam Bermain Futsal Part 1', '2024-03-23', '2024-03-23'),
(4, 'BKU00004', 'Perahu Kertas', 'Dea Lestari', 'Gramedia', 2021, 'post-image/a4DK0N1wE291KlAdZmEKQ2MT9CtlbRcXigEtmOGK.jpg', 'Novel Perahu Kertas', '2024-03-23', '2024-03-23'),
(5, 'BKU00005', 'Biografi Pahlawan', 'M Aziz', 'Gramedia', 2023, 'post-image/Z5iKTQ4XEMDApeJCFSiqxhtYO5IxIlnwMKcb6CmD.jpg', 'Biogarfi Pahlawan Kemerdekaan', '2024-03-23', '2024-03-23'),
(6, 'BKU00006', 'Belajar Laravel', 'M Ghazi', 'SMK TIP', 2020, 'post-image/wYgRpoXKfGJSDl8cX8W62jtIRxyl3R5vZwGU1T7b.jpg', 'Belajar Laravel Menyenangkan', '2024-03-23', '2024-03-23'),
(7, 'BKU00007', 'Belajar React Js', 'Barikli Fajar', 'PT Smoetss', 2021, 'post-image/TTmnbmnbfa8pHfPynym2rtDoXO3dQT2ui4my142w.jpg', 'Belajar React Js Menyenangkan', '2024-03-23', '2024-03-23'),
(8, 'BKU00008', 'Naruto The Last', 'Masashi Khisimoto', 'Japan Media', 2018, 'post-image/WClktyrkVMS1Uxtkp9cJt560pSkaYORlQInGFwbf.jpg', 'Naruto The Last Generation', '2024-03-23', '2024-03-23'),
(9, 'BKU00009', 'Sang Alkemis', 'Paulo Cuelho', 'Gramedia', 2020, 'post-image/kXxf8PMoV2eIa7IxmoH6UPSGmd1pd6yJpbgWBieK.jpg', 'Sang Alekmis Ahli Kimia', '2024-04-02', '2024-04-02'),
(10, 'BKU00010', 'Jujutsu Kaisen', 'Fadhil Halyzari', 'Japan Media', 2018, 'post-image/qHAh8MHQW27LhLoS2tsjidZjqlqOWAUogDXjWcRn.jpg', 'Jujustsu Kaisen Part 1', '2024-04-02', '2024-04-02'),
(14, 'BKU00011', 'Pulang Pergi', 'Tere Liye', 'Gramedia', 2020, 'post-image/4eEu1dSTObj5d7Wmyyb00BLgY6D7TM5Ibi9BPVPj.jpg', 'Novel Pulang Pergi', '2024-06-22', '2024-06-22');

-- --------------------------------------------------------

--
-- Stand-in structure for view `detail_kategori`
-- (See below for the actual view)
--
CREATE TABLE `detail_kategori` (
`id_relasi` bigint(20) unsigned
,`id_kategori` varchar(20)
,`kode_kate` varchar(20)
,`nama_kate` varchar(50)
,`id_buku` varchar(20)
,`kode_buku` varchar(20)
,`judul` varchar(50)
,`tahun_terbit` int(11)
);

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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_kate` varchar(20) DEFAULT NULL,
  `nama_kate` varchar(50) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kode_kate`, `nama_kate`, `updated_at`, `created_at`) VALUES
(1, 'KTG00001', 'Karya Umum & Novel', NULL, NULL),
(2, 'KTG00002', 'Teknologi & Informasi', '2024-02-22', '2024-02-22'),
(3, 'KTG00003', 'Matematika & Sains', '2024-02-23', '2024-02-23'),
(4, 'KTG00004', 'Kesenian & Olahraga', '2024-02-23', '2024-02-23'),
(5, 'KTG00005', 'Sejarah & Biografi', '2024-02-23', '2024-02-23'),
(6, 'KTG00006', 'Buku Pembelajaran', '2024-02-23', '2024-02-23'),
(7, 'KTG00007', 'Komik & Fiksi Ilmiah', '2024-02-23', '2024-02-23');

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_buku` varchar(50) NOT NULL,
  `kode_buku` varchar(50) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `penulis` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `koleksi`
--

CREATE TABLE `koleksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `koleksi`
--

INSERT INTO `koleksi` (`id`, `id_buku`, `id_user`, `created_at`, `updated_at`) VALUES
(11, '11', '2', '2024-04-17 23:15:53', '2024-04-17 23:15:53'),
(13, '9', '2', '2024-04-26 00:28:27', '2024-04-26 00:28:27');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_20_144509_create_buku_table', 2),
(6, '2024_02_21_032835_create_kategori_table', 3),
(7, '2024_02_21_034025_create_anggota_table', 4),
(9, '2024_02_23_103142_create_relasi_kategori_table', 5),
(10, '2024_02_26_130840_create_koleksi_table', 6),
(11, '2024_02_28_012902_create_keranjang_table', 7),
(12, '2024_02_28_133352_create_peminjaman_table', 8),
(13, '2024_03_04_115239_create_ulasan_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_pinjam` varchar(50) DEFAULT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_buku` varchar(50) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `kode_pinjam`, `id_user`, `id_buku`, `tanggal_pinjam`, `tanggal_kembali`, `status`, `created_at`, `updated_at`) VALUES
(5, 'PNJ00001', '6', '7', '2024-06-22', '2024-06-29', 'pinjam', '2024-06-21 22:35:47', '2024-06-21 22:35:47');

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
-- Table structure for table `relasi_kategori`
--

CREATE TABLE `relasi_kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_buku` varchar(20) NOT NULL,
  `id_kategori` varchar(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `relasi_kategori`
--

INSERT INTO `relasi_kategori` (`id`, `id_buku`, `id_kategori`, `created_at`, `updated_at`) VALUES
(1, '1', '6', '2024-03-23 00:28:14', '2024-03-23 00:28:14'),
(2, '2', '3', '2024-03-23 00:29:43', '2024-03-23 00:29:43'),
(3, '2', '6', '2024-03-23 00:29:43', '2024-03-23 00:29:43'),
(4, '3', '4', '2024-03-23 00:33:00', '2024-03-23 00:33:00'),
(5, '3', '6', '2024-03-23 00:33:00', '2024-03-23 00:33:00'),
(6, '4', '1', '2024-03-23 00:34:11', '2024-03-23 00:34:11'),
(7, '5', '5', '2024-03-23 00:51:46', '2024-03-23 00:51:46'),
(8, '6', '2', '2024-03-23 08:17:24', '2024-03-23 08:17:24'),
(10, '7', '2', '2024-03-23 08:18:52', '2024-03-23 08:18:52'),
(11, '8', '7', '2024-03-23 08:20:41', '2024-03-23 08:20:41'),
(12, '9', '1', '2024-04-02 03:24:55', '2024-04-02 03:24:55'),
(13, '9', '3', '2024-04-02 03:24:55', '2024-04-02 03:24:55'),
(14, '9', '5', '2024-04-02 03:24:55', '2024-04-02 03:24:55'),
(15, '10', '7', '2024-04-02 03:34:34', '2024-04-02 03:34:34'),
(16, '11', '1', '2024-04-03 15:55:29', '2024-04-03 15:55:29'),
(19, '12', '1', '2024-06-21 18:57:08', '2024-06-21 18:57:08'),
(20, '13', '1', '2024-06-21 21:52:47', '2024-06-21 21:52:47'),
(21, '14', '1', '2024-06-21 22:02:53', '2024-06-21 22:02:53');

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_kembali`
-- (See below for the actual view)
--
CREATE TABLE `tampil_kembali` (
`id` bigint(20) unsigned
,`kode_pinjam` varchar(50)
,`id_user` varchar(50)
,`nama_lengkap` varchar(50)
,`id_buku` varchar(50)
,`kode_buku` varchar(20)
,`judul` varchar(50)
,`tanggal_pinjam` date
,`tanggal_kembali` date
,`status` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_koleksi`
-- (See below for the actual view)
--
CREATE TABLE `tampil_koleksi` (
`id_koleksi` bigint(20) unsigned
,`id_buku` varchar(20)
,`id_user` varchar(20)
,`nama_lengkap` varchar(50)
,`judul` varchar(50)
,`penulis` varchar(20)
,`penerbit` varchar(20)
,`tahun_terbit` int(11)
,`foto` varchar(255)
,`sinopsis` varchar(50)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_riwayat`
-- (See below for the actual view)
--
CREATE TABLE `tampil_riwayat` (
`id` bigint(20) unsigned
,`kode_pinjam` varchar(50)
,`id_user` varchar(50)
,`id_buku` varchar(50)
,`tanggal_pinjam` date
,`tanggal_kembali` date
,`status` varchar(50)
,`kode_buku` varchar(20)
,`judul` varchar(50)
,`penulis` varchar(20)
,`penerbit` varchar(20)
,`tahun_terbit` int(11)
,`sinopsis` varchar(50)
,`kode_anggota` varchar(20)
,`nama_lengkap` varchar(50)
,`alamat` varchar(50)
,`jenis_kel` varchar(20)
,`email` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `tampil_ulasan`
-- (See below for the actual view)
--
CREATE TABLE `tampil_ulasan` (
`id` bigint(20) unsigned
,`id_user` varchar(50)
,`kode_anggota` varchar(20)
,`nama_lengkap` varchar(50)
,`alamat` varchar(50)
,`jenis_kel` varchar(20)
,`email` varchar(20)
,`id_buku` varchar(50)
,`ulasan` varchar(50)
,`rating` varchar(50)
,`tanggal` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `total_rating`
-- (See below for the actual view)
--
CREATE TABLE `total_rating` (
`total_rating` double(18,1)
);

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_buku` varchar(50) NOT NULL,
  `ulasan` varchar(50) NOT NULL,
  `rating` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jenis_kel` varchar(20) NOT NULL,
  `no_telp` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(20) NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `alamat`, `jenis_kel`, `no_telp`, `email`, `password`, `level`, `updated_at`, `created_at`) VALUES
(1, 'Fadhil Halyzari', 'Cihampelas', 'L', '09764576', 'fhalyzari@gmail.com', '$2y$12$ipAPvUWkkSICzObEx20kQunpYwkuCpVE5t6S7UNlyw0iPe08.BbVy', 'Admin', '2024-02-24', NULL),
(3, 'Nadhif Alghifari', 'Cihampelas', 'L', '00987468', 'alghifari@gmail.com', '$2y$12$YHpcxOW1OKfser2qkfScqutTf/Ut9ysncIbcsIRRS60TRCS9Ef16q', 'Petugas', '2024-02-22', '2024-02-22'),
(5, 'Surya Dwi', 'Cigugur', 'L', '78095757', 'surr@gmail.com', '$2y$12$Fjd472Aw71N15IwjwLUI9OuKgAvscQrBStmI4cL5utNMxDv18K9ua', 'Petugas', '2024-02-22', '2024-02-22'),
(7, 'Barikli Fajar', 'Margaasih', 'L', '082189768567', 'barikli@gmail.com', '$2y$12$CHF7Gh82PkFKoJtf6WtEdeY7.H4Q5HCHfPkfcxc4w.irLqH7rfsO2', 'Petugas', '2024-06-22', '2024-06-22');

-- --------------------------------------------------------

--
-- Structure for view `detail_kategori`
--
DROP TABLE IF EXISTS `detail_kategori`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detail_kategori`  AS SELECT `relasi_kategori`.`id` AS `id_relasi`, `relasi_kategori`.`id_kategori` AS `id_kategori`, `kategori`.`kode_kate` AS `kode_kate`, `kategori`.`nama_kate` AS `nama_kate`, `relasi_kategori`.`id_buku` AS `id_buku`, `buku`.`kode_buku` AS `kode_buku`, `buku`.`judul` AS `judul`, `buku`.`tahun_terbit` AS `tahun_terbit` FROM ((`relasi_kategori` join `kategori` on(`relasi_kategori`.`id_kategori` = `kategori`.`id`)) join `buku` on(`relasi_kategori`.`id_buku` = `buku`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_kembali`
--
DROP TABLE IF EXISTS `tampil_kembali`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_kembali`  AS SELECT `peminjaman`.`id` AS `id`, `peminjaman`.`kode_pinjam` AS `kode_pinjam`, `peminjaman`.`id_user` AS `id_user`, `anggota`.`nama_lengkap` AS `nama_lengkap`, `peminjaman`.`id_buku` AS `id_buku`, `buku`.`kode_buku` AS `kode_buku`, `buku`.`judul` AS `judul`, `peminjaman`.`tanggal_pinjam` AS `tanggal_pinjam`, `peminjaman`.`tanggal_kembali` AS `tanggal_kembali`, `peminjaman`.`status` AS `status` FROM ((`peminjaman` join `buku` on(`peminjaman`.`id_buku` = `buku`.`id`)) join `anggota` on(`peminjaman`.`id_user` = `anggota`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_koleksi`
--
DROP TABLE IF EXISTS `tampil_koleksi`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_koleksi`  AS SELECT `koleksi`.`id` AS `id_koleksi`, `koleksi`.`id_buku` AS `id_buku`, `koleksi`.`id_user` AS `id_user`, `anggota`.`nama_lengkap` AS `nama_lengkap`, `buku`.`judul` AS `judul`, `buku`.`penulis` AS `penulis`, `buku`.`penerbit` AS `penerbit`, `buku`.`tahun_terbit` AS `tahun_terbit`, `buku`.`foto` AS `foto`, `buku`.`sinopsis` AS `sinopsis` FROM ((`koleksi` join `anggota` on(`koleksi`.`id_user` = `anggota`.`id`)) join `buku` on(`koleksi`.`id_buku` = `buku`.`id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_riwayat`
--
DROP TABLE IF EXISTS `tampil_riwayat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_riwayat`  AS SELECT `peminjaman`.`id` AS `id`, `peminjaman`.`kode_pinjam` AS `kode_pinjam`, `peminjaman`.`id_user` AS `id_user`, `peminjaman`.`id_buku` AS `id_buku`, `peminjaman`.`tanggal_pinjam` AS `tanggal_pinjam`, `peminjaman`.`tanggal_kembali` AS `tanggal_kembali`, `peminjaman`.`status` AS `status`, `buku`.`kode_buku` AS `kode_buku`, `buku`.`judul` AS `judul`, `buku`.`penulis` AS `penulis`, `buku`.`penerbit` AS `penerbit`, `buku`.`tahun_terbit` AS `tahun_terbit`, `buku`.`sinopsis` AS `sinopsis`, `anggota`.`kode_anggota` AS `kode_anggota`, `anggota`.`nama_lengkap` AS `nama_lengkap`, `anggota`.`alamat` AS `alamat`, `anggota`.`jenis_kel` AS `jenis_kel`, `anggota`.`email` AS `email` FROM ((`peminjaman` join `buku` on(`peminjaman`.`id_buku` = `buku`.`id`)) join `anggota` on(`peminjaman`.`id_user` = `anggota`.`id`)) ORDER BY `peminjaman`.`id` ASC ;

-- --------------------------------------------------------

--
-- Structure for view `tampil_ulasan`
--
DROP TABLE IF EXISTS `tampil_ulasan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tampil_ulasan`  AS SELECT `ulasan`.`id` AS `id`, `ulasan`.`id_user` AS `id_user`, `anggota`.`kode_anggota` AS `kode_anggota`, `anggota`.`nama_lengkap` AS `nama_lengkap`, `anggota`.`alamat` AS `alamat`, `anggota`.`jenis_kel` AS `jenis_kel`, `anggota`.`email` AS `email`, `ulasan`.`id_buku` AS `id_buku`, `ulasan`.`ulasan` AS `ulasan`, `ulasan`.`rating` AS `rating`, `ulasan`.`tanggal` AS `tanggal` FROM (`ulasan` join `anggota` on(`ulasan`.`id_user` = `anggota`.`id`)) ORDER BY `ulasan`.`tanggal` DESC ;

-- --------------------------------------------------------

--
-- Structure for view `total_rating`
--
DROP TABLE IF EXISTS `total_rating`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `total_rating`  AS SELECT round(avg(`ulasan`.`rating`),1) AS `total_rating` FROM `ulasan` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `koleksi`
--
ALTER TABLE `koleksi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `relasi_kategori`
--
ALTER TABLE `relasi_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `koleksi`
--
ALTER TABLE `koleksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `relasi_kategori`
--
ALTER TABLE `relasi_kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
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
