-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14 Sep 2018 pada 14.02
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ta`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pakets`
--

CREATE TABLE `detail_pakets` (
  `paket_id` int(10) UNSIGNED DEFAULT NULL,
  `service_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pakets`
--

INSERT INTO `detail_pakets` (`paket_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 85, NULL, NULL),
(1, 86, NULL, NULL),
(2, 32, NULL, NULL),
(2, 30, NULL, NULL),
(2, 31, NULL, NULL),
(5, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_perawatans`
--

CREATE TABLE `detail_perawatans` (
  `transaksi_id` int(10) UNSIGNED NOT NULL,
  `therapist_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED DEFAULT NULL,
  `ruangan_id` int(10) UNSIGNED NOT NULL,
  `paket_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_perawatans`
--

INSERT INTO `detail_perawatans` (`transaksi_id`, `therapist_id`, `service_id`, `ruangan_id`, `paket_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, NULL, '2018-07-04 02:12:40', '2018-07-04 02:12:40'),
(1, 1, 20, 1, NULL, '2018-07-04 02:12:40', '2018-07-04 02:12:40'),
(2, 1, 11, 1, NULL, '2018-07-04 02:36:04', '2018-07-04 02:36:04'),
(2, 1, 19, 1, NULL, '2018-07-04 02:36:04', '2018-07-04 02:36:04'),
(14, 1, 85, 1, 1, NULL, NULL),
(14, 1, 86, 1, 1, NULL, NULL),
(14, 1, 85, 1, 1, NULL, NULL),
(14, 1, 86, 1, 1, NULL, NULL),
(14, 2, 16, 1, NULL, NULL, NULL),
(23, 1, 85, 1, 1, NULL, NULL),
(23, 1, 86, 1, 1, NULL, NULL),
(23, 1, 1, 1, NULL, NULL, NULL),
(23, 1, 12, 1, NULL, NULL, NULL),
(23, 1, 32, 1, 2, NULL, NULL),
(23, 1, 30, 1, 2, NULL, NULL),
(23, 1, 31, 1, 2, NULL, NULL),
(24, 1, 85, 1, 1, NULL, NULL),
(24, 1, 86, 1, 1, NULL, NULL),
(24, 1, 14, 1, NULL, NULL, NULL),
(24, 1, 17, 1, NULL, NULL, NULL),
(25, 1, 13, 1, NULL, NULL, NULL),
(25, 1, 1, 1, NULL, NULL, NULL),
(26, 1, 85, 1, 1, NULL, NULL),
(26, 1, 86, 1, 1, NULL, NULL),
(26, 1, 1, 1, NULL, NULL, NULL),
(27, 1, 13, 1, NULL, NULL, NULL),
(27, 1, 16, 1, NULL, NULL, NULL),
(28, 1, 85, 1, 1, NULL, NULL),
(28, 1, 86, 1, 1, NULL, NULL),
(28, 1, 95, 1, NULL, NULL, NULL),
(29, 1, 85, 1, 1, NULL, NULL),
(29, 1, 86, 1, 1, NULL, NULL),
(29, 1, 1, 1, NULL, NULL, NULL),
(30, 1, 85, 1, 1, NULL, NULL),
(30, 1, 86, 1, 1, NULL, NULL),
(30, 1, 1, 1, NULL, NULL, NULL),
(34, 1, 85, 1, 1, NULL, NULL),
(34, 1, 86, 1, 1, NULL, NULL),
(35, 1, 85, 1, 1, NULL, NULL),
(35, 1, 86, 1, 1, NULL, NULL),
(37, 1, 1, 1, NULL, NULL, NULL),
(38, 1, 59, 1, NULL, NULL, NULL),
(38, 1, 1, 1, NULL, NULL, NULL),
(38, 1, 85, 1, 1, NULL, NULL),
(38, 1, 86, 1, 1, NULL, NULL),
(38, 1, 32, 1, 2, NULL, NULL),
(38, 1, 30, 1, 2, NULL, NULL),
(38, 1, 31, 1, 2, NULL, NULL),
(37, 1, 85, 1, 1, NULL, NULL),
(37, 1, 86, 1, 1, NULL, NULL),
(38, 1, 32, 1, 2, NULL, NULL),
(38, 1, 30, 1, 2, NULL, NULL),
(38, 1, 31, 1, 2, NULL, NULL),
(38, 1, 18, 1, NULL, NULL, NULL),
(39, 1, 85, 1, 1, NULL, NULL),
(39, 1, 86, 1, 1, NULL, NULL),
(40, 1, 18, 1, NULL, NULL, NULL),
(41, 1, 85, 1, 1, NULL, NULL),
(41, 1, 86, 1, 1, NULL, NULL),
(42, 1, 1, 1, NULL, NULL, NULL),
(42, 1, 1, 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `diskons`
--

CREATE TABLE `diskons` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `nilai` double NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `diskons`
--

INSERT INTO `diskons` (`id`, `deskripsi`, `nilai`, `created_at`, `updated_at`) VALUES
(1, 'Diskon 10% setiap transaksi Rp.100 rb', 10, '2018-09-14 03:55:21', '2018-09-13 20:55:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_topups`
--

CREATE TABLE `history_topups` (
  `id` int(10) UNSIGNED NOT NULL,
  `pelanggan_id` int(10) UNSIGNED DEFAULT NULL,
  `nominal` int(11) DEFAULT NULL,
  `waktu_topup` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `history_topups`
--

INSERT INTO `history_topups` (`id`, `pelanggan_id`, `nominal`, `waktu_topup`, `created_at`, `updated_at`) VALUES
(1, 2, 100000, '2018-07-01', NULL, NULL),
(2, 2, 200, '2018-07-31', NULL, NULL),
(3, 2, 400000, '2018-09-14', NULL, NULL),
(4, 2, 400000, '2018-09-14', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(37, '2014_10_12_000000_create_users_table', 1),
(38, '2014_10_12_100000_create_password_resets_table', 1),
(39, '2018_04_25_044157_create_pelanggans_table', 1),
(40, '2018_04_25_050741_create_history_topups_table', 1),
(41, '2018_04_25_051134_create_therapists_table', 1),
(42, '2018_04_25_051833_create_ruangans_table', 1),
(43, '2018_05_17_054032_create_pakets_table', 1),
(44, '2018_05_17_061722_create_services_table', 1),
(45, '2018_05_17_062712_create_transaksis_table', 1),
(46, '2018_05_17_063318_create_detail_pakets_table', 1),
(47, '2018_05_18_082526_create_detail_perawatans_table', 1),
(48, '2018_06_28_074404_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 2),
(2, 'App\\User', 3),
(3, 'App\\User', 1),
(3, 'App\\User', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pakets`
--

CREATE TABLE `pakets` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_paket` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarif_member` int(11) DEFAULT NULL,
  `tarif_normal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pakets`
--

INSERT INTO `pakets` (`id`, `nama_paket`, `tarif_member`, `tarif_normal`, `created_at`, `updated_at`) VALUES
(1, 'Terapi 1', 100000, 120000, NULL, NULL),
(2, 'Terapi 2', 200000, 220000, NULL, NULL),
(5, 'test', 100000, 200000, NULL, '2018-09-14 04:56:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggans`
--

CREATE TABLE `pelanggans` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telepon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `saldo` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggans`
--

INSERT INTO `pelanggans` (`id`, `user_id`, `nama`, `alamat`, `telepon`, `saldo`, `reg_date`, `tanggal_lahir`, `created_at`, `updated_at`) VALUES
(1, 1, 'Budi', NULL, '3', 0, NULL, NULL, NULL, NULL),
(2, 4, 'Saidah', 'padang', '2', 2800000, NULL, '2018-09-07', NULL, '2018-09-13 20:03:24'),
(3, 1, 'test3', 'qweqwe', '1', 0, '2018-08-02', NULL, '2018-08-02 02:07:43', '2018-08-02 03:03:27'),
(4, 5, 'test', NULL, '12', 0, '2018-08-02', NULL, '2018-08-02 02:20:47', '2018-08-02 02:20:47'),
(5, 1, 'testlagi', 'padang', '1212', NULL, NULL, NULL, NULL, NULL),
(6, 6, 'ani', 'padang', '123', 0, '2018-08-06', NULL, '2018-08-06 04:25:48', '2018-08-06 04:25:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'cashier', 'web', NULL, NULL),
(3, 'member', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangans`
--

CREATE TABLE `ruangans` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_ruang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangans`
--

INSERT INTO `ruangans` (`id`, `nama_ruang`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Coba1', 1, NULL, '2018-09-13 21:04:12'),
(2, 'Coba', 1, NULL, '2018-07-30 20:26:45');

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_services` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tarif_member` int(11) DEFAULT NULL,
  `tarif_normal` int(11) DEFAULT NULL,
  `tipe` int(11) DEFAULT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `nama_services`, `tarif_member`, `tarif_normal`, `tipe`, `level`, `durasi`, `created_at`, `updated_at`) VALUES
(1, 'Facial Product - Wardah', 40000, 45000, 1, '0', 60, NULL, '2018-07-17 04:30:34'),
(2, 'Facial Product - Biokos', 53000, 58000, 1, '0', 60, NULL, NULL),
(3, 'Facial Dokter - Facial Lightening 1', 1, 1, 1, '0', 60, NULL, NULL),
(4, 'Facial Dokter - Facial Lightening 2', 1, 1, 1, '0', 60, NULL, NULL),
(5, 'Facial Dokter - Facial Acne 1', 1, 1, 1, '0', 60, NULL, NULL),
(6, 'Facial Dokter - Facial Acne 2', 1, 1, 1, '0', 60, NULL, NULL),
(7, 'Facial Dokter - Facial Acne 3', 103000, 113000, 1, '0', 60, NULL, NULL),
(8, 'Facial Dokter - Facial Collagen', 138000, 143000, 1, '0', 60, NULL, NULL),
(9, 'Facial Dokter - Facial Gold', 158000, 168000, 1, '0', 60, NULL, NULL),
(10, 'Facial Dokter - Mikro', 150000, 160000, 1, '0', 60, NULL, NULL),
(11, 'Facial KK Indonesia - Facial LYC', 98000, 103000, 1, '0', 60, NULL, NULL),
(12, 'Facial KK Indonesia - Facial LYC + senam wajah', 133000, 138000, 1, '0', 60, NULL, NULL),
(13, 'Facial Herbal - Ozon + Totok', 25000, 28000, 1, '0', 15, NULL, NULL),
(14, 'Facial Herbal - Totok Aura', 65000, 70000, 1, '0', 45, NULL, NULL),
(15, 'Facial Herbal - Buka Aura 1', 90000, 95000, 1, '0', 0, NULL, NULL),
(16, 'Facial Herbal - Buka Aura 2', 110000, 120000, 1, '0', 0, NULL, NULL),
(17, 'Facial Herbal - Nu Skin', 150000, 160000, 1, '0', 0, NULL, NULL),
(18, 'Creambath Tradisional (Pendek)', 30000, 32000, 2, '1', 60, NULL, NULL),
(19, 'Creambath Tradisional (Sedang)', 35000, 36000, 2, '2', 60, NULL, NULL),
(20, 'Creambath Tradisional (Panjang)', 37000, 39000, 2, '3', 60, NULL, NULL),
(21, 'Creambath Susu (Pendek)', 35000, 39000, 2, '1', 60, NULL, NULL),
(22, 'Creambath Susu (Sedang)', 41000, 42000, 2, '2', 60, NULL, NULL),
(23, 'Creambath Susu (Panjang)', 43000, 46000, 2, '3', 60, NULL, NULL),
(24, 'Creambath SPA - Herbal Aromatic (Pendek)', 48000, 53000, 2, '1', 60, NULL, NULL),
(25, 'Creambath SPA - Herbal Aromatic (Sedang)', 58000, 63000, 2, '2', 60, NULL, NULL),
(26, 'Creambath SPA - Herbal Aromatic (Panjang)', 68000, 73000, 2, '3', 60, NULL, NULL),
(27, 'Creambath SPA - Le Bali (Pendek)', 53000, 55000, 2, '1', 60, NULL, NULL),
(28, 'Creambath SPA - Le Bali (Sedang)', 63000, 65000, 2, '2', 60, NULL, NULL),
(29, 'Creambath SPA - Le Bali (Panjang)', 73000, 75000, 2, '3', 60, NULL, NULL),
(30, 'Creambath SPA - Hair Energy / Makarizo (Pendek)', 63000, 68000, 2, '1', 60, NULL, NULL),
(31, 'Creambath SPA - Hair Energy / Makarizo (Sedang)', 73000, 78000, 2, '2', 60, NULL, NULL),
(32, 'Creambath SPA - Hair Energy / Makarizo (Panjang)', 83000, 88000, 2, '3', 60, NULL, NULL),
(33, 'Creambath SPA - Kiwimango (Pendek)', 63000, 68000, 2, '1', 60, NULL, NULL),
(34, 'Creambath SPA - Kiwimango (Sedang)', 73000, 78000, 2, '2', 60, NULL, NULL),
(35, 'Creambath SPA - Kiwimango (Panjang)', 83000, 88000, 2, '3', 60, NULL, NULL),
(36, 'Creambath SPA - NR (Pendek)', 67000, 71000, 2, '1', 60, NULL, NULL),
(37, 'Creambath SPA - NR (Sedang)', 77000, 81000, 2, '2', 60, NULL, NULL),
(38, 'Creambath SPA - NR (Panjang)', 87000, 91000, 2, '3', 60, NULL, NULL),
(39, 'Creambath SPA - Texture/Matrix (Pendek)', 89000, 93000, 2, '1', 60, NULL, NULL),
(40, 'Creambath SPA - Texture/Matrix (Sedang)', 98000, 103000, 2, '2', 60, NULL, NULL),
(41, 'Creambath SPA - Texture/Matrix (Panjang)', 108000, 113000, 2, '3', 60, NULL, NULL),
(42, 'Hair Mask - Makarizo (Pendek)', 58000, 63000, 2, '1', 60, NULL, NULL),
(43, 'Hair Mask - Makarizo(Sedang)', 68000, 73000, 2, '2', 60, NULL, NULL),
(44, 'Hair Mask - Makarizo(Panjang)', 58000, 83000, 2, '3', 60, NULL, NULL),
(45, 'Hair Mask - Matrix(Pendek)', 83000, 88000, 2, '1', 60, NULL, NULL),
(46, 'Hair Mask - Matrix (Sedang)', 93000, 98000, 2, '2', 60, NULL, NULL),
(47, 'Hair Mask - Matrix(Panjang)', 98000, 103000, 2, '3', 60, NULL, NULL),
(48, 'Hair Mask - Treatment Kutu', 70000, 75000, 2, '0', 60, NULL, NULL),
(49, 'Potong Rambut - Potong Rambut', 25000, 30000, 2, '0', 0, NULL, NULL),
(50, 'Potong Rambut - Potong, Cuci & Blow Rambut', 40000, 44000, 2, '0', 0, NULL, NULL),
(51, 'Potong Rambut - Potong & Blow', 35000, 37000, 2, '0', 0, NULL, NULL),
(52, 'Potong Rambut - Cuci & Blow Rambut', 28000, 3000, 2, '0', 0, NULL, NULL),
(53, 'Potong Rambut - Cuci Rambut', 12000, 13000, 2, '0', 0, NULL, NULL),
(54, 'Potong Rambut - Blow Rambut', 20000, 25000, 2, '0', 0, NULL, NULL),
(55, 'Potong Rambut - Menegeringkan Rambut', 13000, 15000, 2, '0', 0, NULL, NULL),
(56, 'Potong Rambut - Tonik Vitamin Rambut', 4000, 4000, 2, '0', 0, NULL, NULL),
(57, 'Potong Rambut - Potong Rambut Anak', 20000, 25000, 2, '0', 0, NULL, NULL),
(58, 'Lulur Mangir Tradisional', 49000, 45000, 3, '0', 60, NULL, NULL),
(59, 'Lulur Mangir Tradisional + Susu', 50000, 55000, 3, '0', 60, NULL, NULL),
(60, 'Lulur Coklat', 50000, 55000, 3, '0', 60, NULL, NULL),
(61, 'Lulur Le Bali Spesial', 53000, 58000, 3, '0', 60, NULL, NULL),
(62, 'Lulur Susu', 58000, 63000, 3, '0', 60, NULL, NULL),
(63, 'Lulur Whitening Avocado & Susu ', 67000, 72000, 3, '0', 60, NULL, NULL),
(64, 'Lulur Royal Body Scrub', 78000, 81000, 3, '0', 60, NULL, NULL),
(65, 'Lulur Madu ', 91000, 99000, 3, '0', 60, NULL, NULL),
(66, 'Lulur Kiwimango', 91000, 99000, 3, '0', 60, NULL, NULL),
(67, 'Lulur Wahh', 93000, 99000, 3, '0', 60, NULL, NULL),
(68, 'Lulur Aromatheraphy ', 95000, 99000, 3, '0', 60, NULL, NULL),
(69, 'Body Mask', 23000, 25000, 3, '0', 30, NULL, NULL),
(70, ' Bengkoang Body Mask', 32000, 35000, 3, '0', 30, NULL, NULL),
(71, 'Madu + Susu Body Mask', 32000, 35000, 3, '0', 30, NULL, NULL),
(72, 'Kiwimango Body Mask', 48000, 63000, 3, '0', 30, NULL, NULL),
(73, 'Sauna Biasa', 28000, 3400, 3, '0', 30, NULL, NULL),
(74, 'Sauna Rempah', 37000, 44000, 3, '0', 30, NULL, NULL),
(75, 'Ratus (Spa Vagina)', 35000, 40000, 3, '0', 30, NULL, NULL),
(76, 'Mandi Susu + Whirpool', 120000, 130000, 3, '0', 30, NULL, NULL),
(77, 'Foot refleksi', 45000, 49000, 4, '0', 60, NULL, NULL),
(78, 'Body Masssage', 48000, 52000, 4, '0', 60, NULL, NULL),
(79, 'Masssage Akar Wangi', 67000, 72000, 4, '0', 60, NULL, NULL),
(80, 'Body Masssage + Foot Refleksi', 80000, 89000, 4, '0', 60, NULL, NULL),
(81, 'Message Bayi', 55000, 55000, 4, '0', 60, NULL, NULL),
(82, 'Masssage Anak', 45000, 45000, 4, '0', 60, NULL, NULL),
(83, 'Masssage Ibu Hamil', 48000, 52000, 4, '0', 60, NULL, NULL),
(84, 'Hand Therapy', 29000, 32000, 4, '0', 60, NULL, NULL),
(85, 'Back Therapy', 55000, 60000, 4, '0', 60, NULL, NULL),
(86, 'Back Therapy + Kangzu Cuping Kit', 57000, 62000, 4, '0', 60, NULL, NULL),
(87, 'Bekam Basah', 80000, 85000, 4, '0', 60, NULL, NULL),
(88, 'Bekam Kering', 28000, 33000, 4, '0', 60, NULL, NULL),
(89, 'Terapi Telinga', 31000, 33000, 4, '0', 60, NULL, NULL),
(90, 'Waking', 80000, 85000, 4, '0', 60, NULL, NULL),
(91, 'TST(Terapi Seluruh Tubuh)', 142000, 155000, 4, '0', 60, NULL, NULL),
(92, 'Manicure', 48000, 52000, 5, '0', 60, NULL, NULL),
(93, 'Pedicure', 48000, 52000, 5, '0', 60, NULL, NULL),
(94, 'Manicure + Pedicure', 95000, 99000, 5, '0', 60, NULL, NULL),
(95, 'Manicure Cream Gehwol', 95000, 105000, 5, '0', 60, NULL, NULL),
(96, 'Pedicure Cream Gehwol', 135000, 145000, 5, '0', 60, NULL, NULL),
(97, 'Manicure & Pedicure Cream Gehwol', 195000, 210000, 5, '0', 60, NULL, NULL),
(98, 'Relaxasi Untuk Terapi Sakit Kepala', 30000, 32000, 5, '0', 60, NULL, NULL),
(99, 'Relaxi Terapi Sakit Kepala Plus', 42000, 45000, 5, '0', 60, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `therapists`
--

CREATE TABLE `therapists` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `therapists`
--

INSERT INTO `therapists` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Lucyy', NULL, '2018-09-13 21:08:18'),
(2, 'Hendri', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksis`
--

CREATE TABLE `transaksis` (
  `id` int(10) UNSIGNED NOT NULL,
  `pelanggan_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `trans_date` date NOT NULL,
  `diskon_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksis`
--

INSERT INTO `transaksis` (`id`, `pelanggan_id`, `user_id`, `durasi`, `total`, `status`, `trans_date`, `diskon_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 120, 150000, 0, '2018-08-01', 1, '2018-07-04 02:12:40', '2018-09-06 04:20:25'),
(2, 2, 4, 120, 250000, 1, '2018-08-01', NULL, '2018-07-04 02:36:04', '2018-09-06 04:21:22'),
(14, 1, 2, 20, 320000, 2, '2018-08-01', NULL, '2018-07-31 03:25:06', '2018-07-31 05:00:46'),
(23, 1, 2, NULL, 498000, 1, '2018-08-01', 1, '2018-07-31 03:25:06', '2018-08-01 00:23:21'),
(24, 4, 2, 2, 315000, 1, '2018-08-01', 1, '2018-08-02 03:20:43', NULL),
(25, 1, 2, NULL, 73000, 0, '2018-08-01', NULL, '2018-08-02 03:29:24', NULL),
(26, 5, 2, 3, 140000, 1, '2018-08-01', 1, '2018-08-05 21:18:20', '2018-08-05 21:18:59'),
(27, 2, 2, NULL, 148000, 2, '2018-08-01', NULL, '2018-08-05 21:19:27', '2018-08-07 20:12:49'),
(28, 2, 2, 43, 225000, 0, '2018-08-16', 1, '2018-08-19 20:12:08', '2018-09-05 19:01:54'),
(29, 2, 2, 4, 165000, 1, '2018-08-20', 1, '2018-08-19 20:15:24', NULL),
(30, 2, 2, 2, 140000, 1, '2018-08-16', 1, '2018-08-19 20:29:23', NULL),
(34, 2, 4, NULL, 100000, 0, '2018-09-06', NULL, NULL, NULL),
(35, 2, 4, NULL, 100000, 0, '2018-09-07', NULL, NULL, NULL),
(37, 2, 4, NULL, 140000, 0, '2018-09-07', NULL, NULL, '2018-09-06 04:24:29'),
(38, 2, 4, NULL, 280000, 0, '2018-09-28', NULL, NULL, '2018-09-06 04:27:43'),
(39, 2, 4, NULL, 100000, 0, '2018-09-11', NULL, NULL, NULL),
(40, 2, 4, NULL, 30000, 0, '2018-09-12', NULL, NULL, NULL),
(41, 2, 4, NULL, 100000, 0, '2018-09-11', NULL, NULL, NULL),
(42, 2, 4, NULL, 80000, 0, '2018-09-12', NULL, NULL, '2018-09-12 04:19:06');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Non Member', 'nonmember@gmail.com', '$2y$10$M9641F8b1u5a.43cJsZbOePyWF3eT53IIEN1tYy44RYOM.CZSGWNO', 0, 0, NULL, NULL, '2018-07-09 05:01:37'),
(2, 'Admin', 'admin@gmail.com', '$2y$10$UNAxvsEptqKO3i3Lph8nWuAVvbQfHl4qRyiCkzHGCZUr/rhPBJCAm', 1, 0, 'pwzQ8qFvG8xOvGBGpcU0vO2u56LegxRqZDjbzQE2fUQWw900jTski1quOD17', NULL, '2018-07-09 04:49:44'),
(3, 'Cashier', 'cashier@gmail.com', '$2y$10$04DyssECPpnQnYpo8HJr/.ZcCzH8FhUQXVfcDGU8ksPIL6tBVEpuG', 2, 1, NULL, NULL, NULL),
(4, 'Saidah', 'saidah@gmail.com', '$2y$10$ukR9adCBuSvQ5cGTS1DN.OeOCAmq/oYoD3pMq8Ftl6cLZPurzRIXK', 3, 0, NULL, NULL, '2018-09-06 19:59:33'),
(5, 'test', 'test@mail.com', '$2y$10$NTfI.fhq3Lp3fm1ziIecjuBuOcVXKrPiNLs/aSB0Azs2X4k72Dep2', 3, 0, NULL, '2018-08-02 02:20:47', NULL),
(6, 'ani', 'ani@mail.com', '$2y$10$fEEDfDvpfD0MbdGqgAzEgum/N1hkTbzU2Rhw.Wx.U.M4O0JiHbLOq', 3, 0, NULL, '2018-08-06 04:25:48', NULL),
(7, 'Testing1234', 'd@gmail.com', '$2y$10$y.HpAxxnGNp..o.vLPpYNuLszQZRbMio0YuSHIRLT8dxktr8LWLaq', 1, 0, NULL, '2018-09-13 21:12:57', '2018-09-13 21:12:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pakets`
--
ALTER TABLE `detail_pakets`
  ADD KEY `detail_pakets_paket_id_foreign` (`paket_id`),
  ADD KEY `detail_pakets_service_id_foreign` (`service_id`);

--
-- Indexes for table `detail_perawatans`
--
ALTER TABLE `detail_perawatans`
  ADD KEY `detail_perawatans_pesanan_id_foreign` (`transaksi_id`),
  ADD KEY `detail_perawatans_therapist_id_foreign` (`therapist_id`),
  ADD KEY `detail_perawatans_service_id_foreign` (`service_id`),
  ADD KEY `detail_perawatans_ruangan_id_foreign` (`ruangan_id`),
  ADD KEY `detail_perawatans_paket_id_foreign` (`paket_id`);

--
-- Indexes for table `diskons`
--
ALTER TABLE `diskons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_topups`
--
ALTER TABLE `history_topups`
  ADD PRIMARY KEY (`id`),
  ADD KEY `history_topups_pelanggan_id_foreign` (`pelanggan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_type_model_id_index` (`model_type`,`model_id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapists`
--
ALTER TABLE `therapists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksis`
--
ALTER TABLE `transaksis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksis_pelanggan_id_foreign` (`pelanggan_id`),
  ADD KEY `transaksis_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `diskons`
--
ALTER TABLE `diskons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_topups`
--
ALTER TABLE `history_topups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggans`
--
ALTER TABLE `pelanggans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `therapists`
--
ALTER TABLE `therapists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksis`
--
ALTER TABLE `transaksis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pakets`
--
ALTER TABLE `detail_pakets`
  ADD CONSTRAINT `detail_pakets_paket_id_foreign` FOREIGN KEY (`paket_id`) REFERENCES `pakets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pakets_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `detail_perawatans`
--
ALTER TABLE `detail_perawatans`
  ADD CONSTRAINT `detail_perawatans_paket_id_foreign` FOREIGN KEY (`paket_id`) REFERENCES `pakets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_perawatans_pesanan_id_foreign` FOREIGN KEY (`transaksi_id`) REFERENCES `transaksis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_perawatans_ruangan_id_foreign` FOREIGN KEY (`ruangan_id`) REFERENCES `ruangans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_perawatans_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_perawatans_therapist_id_foreign` FOREIGN KEY (`therapist_id`) REFERENCES `therapists` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `history_topups`
--
ALTER TABLE `history_topups`
  ADD CONSTRAINT `history_topups_pelanggan_id_foreign` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pelanggans`
--
ALTER TABLE `pelanggans`
  ADD CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksis`
--
ALTER TABLE `transaksis`
  ADD CONSTRAINT `transaksis_pelanggan_id_foreign` FOREIGN KEY (`pelanggan_id`) REFERENCES `pelanggans` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksis_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
