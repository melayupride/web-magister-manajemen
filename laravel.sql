-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2025 at 04:01 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasis`
--

CREATE TABLE `administrasis` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `akreditas`
--

CREATE TABLE `akreditas` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `akreditasis`
--

CREATE TABLE `akreditasis` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categoris_publikasis`
--

CREATE TABLE `categoris_publikasis` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categori_internasionals`
--

CREATE TABLE `categori_internasionals` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category_produks`
--

CREATE TABLE `category_produks` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `daftardosens`
--

CREATE TABLE `daftardosens` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sinta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopus` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scholar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `datadiris`
--

CREATE TABLE `datadiris` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `data_lahir` date DEFAULT NULL,
  `univ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `akunig` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `akungit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `downloadakademiks`
--

CREATE TABLE `downloadakademiks` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeriakademiks`
--

CREATE TABLE `galeriakademiks` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kelenders`
--

CREATE TABLE `kelenders` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kerjasamas`
--

CREATE TABLE `kerjasamas` (
  `id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logokerjasamas`
--

CREATE TABLE `logokerjasamas` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_01_043432_add_is_admin_column_to_users_table', 1),
(6, '2023_03_01_080418_create_posts_table', 1),
(7, '2023_03_01_080909_create_categories_table', 1),
(8, '2023_03_14_054442_create_category_produks_table', 1),
(9, '2023_03_14_064412_create_produks_table', 1),
(10, '2023_03_15_150408_create_pemakaians_table', 1),
(11, '2023_04_08_094825_create_datadiris_table', 1),
(12, '2023_04_09_072528_add_body_to_datadiris_table', 1),
(13, '2023_04_09_083511_add_sosial_to_datadiris_table', 1),
(14, '2023_05_11_151651_create_sejarahpmims_table', 1),
(15, '2023_05_11_181616_create_akreditas_table', 1),
(16, '2023_05_12_000154_create_visi_misis_table', 1),
(17, '2023_05_12_034341_create_profillulusans_table', 1),
(18, '2023_05_12_133359_create_kerjasamas_table', 1),
(19, '2023_05_12_143638_create_rencanastrategis_table', 1),
(20, '2023_05_12_153921_create_organis_table', 1),
(21, '2023_05_13_025122_create_stafs_table', 1),
(22, '2023_05_13_034638_create_daftardosens_table', 1),
(23, '2023_05_13_060919_create_semestersatus_table', 1),
(24, '2023_05_13_092456_create_semesterduas_table', 1),
(25, '2023_05_13_163532_create_semestertigas_table', 1),
(26, '2023_05_14_001707_create_kelenders_table', 1),
(27, '2023_05_14_010400_create_panduanakademiks_table', 1),
(28, '2023_05_14_110037_create_galeriakademiks_table', 1),
(29, '2023_05_14_154631_create_downloadakademiks_table', 1),
(30, '2023_05_14_161736_create_semesterempats_table', 1),
(31, '2023_05_15_065138_create_administrasis_table', 1),
(32, '2023_05_15_075350_create_penjaminanmutus_table', 1),
(33, '2023_05_15_082713_create_akreditasis_table', 1),
(34, '2023_05_15_192256_create_prestasisiswas_table', 1),
(35, '2023_05_16_021313_create_tracerstudies_table', 1),
(36, '2023_05_16_024220_create_publikasis_table', 1),
(37, '2023_05_21_153353_create_visitors_table', 1),
(38, '2023_05_22_164753_create_logokerjasamas_table', 1),
(39, '2023_08_15_060025_create_categoris_publikasis_table', 1),
(40, '2023_08_15_071302_create_publikasi_nasionals_table', 1),
(41, '2023_08_16_041322_create_categori_internasionals_table', 1),
(42, '2023_08_16_045457_create_publikasi_internasionals_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `organis`
--

CREATE TABLE `organis` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `panduanakademiks`
--

CREATE TABLE `panduanakademiks` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemakaians`
--

CREATE TABLE `pemakaians` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjaminanmutus`
--

CREATE TABLE `penjaminanmutus` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasisiswas`
--

CREATE TABLE `prestasisiswas` (
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `produks`
--

CREATE TABLE `produks` (
  `id` bigint UNSIGNED NOT NULL,
  `category_produk_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profillulusans`
--

CREATE TABLE `profillulusans` (
  `id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publikasis`
--

CREATE TABLE `publikasis` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publikasi_internasionals`
--

CREATE TABLE `publikasi_internasionals` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `program_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publikasi_nasionals`
--

CREATE TABLE `publikasi_nasionals` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `program_studi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link_jurnal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rencanastrategis`
--

CREATE TABLE `rencanastrategis` (
  `id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sejarahpmims`
--

CREATE TABLE `sejarahpmims` (
  `id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesterduas`
--

CREATE TABLE `semesterduas` (
  `id` bigint UNSIGNED NOT NULL,
  `kodemk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semesterempats`
--

CREATE TABLE `semesterempats` (
  `id` bigint UNSIGNED NOT NULL,
  `matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semestersatus`
--

CREATE TABLE `semestersatus` (
  `id` bigint UNSIGNED NOT NULL,
  `kodemk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `semestertigas`
--

CREATE TABLE `semestertigas` (
  `id` bigint UNSIGNED NOT NULL,
  `kodemk` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `matakuliah` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kontrensasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stafs`
--

CREATE TABLE `stafs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tracerstudies`
--

CREATE TABLE `tracerstudies` (
  `id` bigint UNSIGNED NOT NULL,
  `body` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filedata` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` bigint UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip_address`, `created_at`, `updated_at`) VALUES
(1, '127.0.0.1', '2025-05-23 02:35:59', '2025-05-23 02:35:59'),
(2, '127.0.0.1', '2025-05-23 02:36:07', '2025-05-23 02:36:07'),
(3, '127.0.0.1', '2025-05-23 02:36:08', '2025-05-23 02:36:08'),
(4, '127.0.0.1', '2025-05-23 02:43:21', '2025-05-23 02:43:21'),
(5, '127.0.0.1', '2025-05-23 02:44:15', '2025-05-23 02:44:15'),
(6, '127.0.0.1', '2025-05-25 01:09:55', '2025-05-25 01:09:55'),
(7, '192.168.1.7', '2025-05-25 01:24:34', '2025-05-25 01:24:34'),
(8, '192.168.1.22', '2025-05-25 01:33:50', '2025-05-25 01:33:50'),
(9, '192.168.1.22', '2025-05-25 05:40:40', '2025-05-25 05:40:40'),
(10, '192.168.1.22', '2025-05-25 06:19:46', '2025-05-25 06:19:46'),
(11, '127.0.0.1', '2025-05-25 06:30:23', '2025-05-25 06:30:23'),
(12, '192.168.1.7', '2025-05-25 06:36:33', '2025-05-25 06:36:33'),
(13, '127.0.0.1', '2025-05-25 06:38:18', '2025-05-25 06:38:18'),
(14, '127.0.0.1', '2025-05-25 06:51:09', '2025-05-25 06:51:09'),
(15, '127.0.0.1', '2025-05-25 06:55:41', '2025-05-25 06:55:41'),
(16, '127.0.0.1', '2025-05-25 07:04:01', '2025-05-25 07:04:01'),
(17, '127.0.0.1', '2025-05-25 07:14:43', '2025-05-25 07:14:43'),
(18, '127.0.0.1', '2025-05-25 07:16:04', '2025-05-25 07:16:04'),
(19, '127.0.0.1', '2025-05-25 07:31:10', '2025-05-25 07:31:10');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misis`
--

CREATE TABLE `visi_misis` (
  `id` bigint UNSIGNED NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasis`
--
ALTER TABLE `administrasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akreditas`
--
ALTER TABLE `akreditas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akreditasis`
--
ALTER TABLE `akreditasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categoris_publikasis`
--
ALTER TABLE `categoris_publikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categori_internasionals`
--
ALTER TABLE `categori_internasionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_produks`
--
ALTER TABLE `category_produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `daftardosens`
--
ALTER TABLE `daftardosens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `datadiris`
--
ALTER TABLE `datadiris`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `downloadakademiks`
--
ALTER TABLE `downloadakademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galeriakademiks`
--
ALTER TABLE `galeriakademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelenders`
--
ALTER TABLE `kelenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerjasamas`
--
ALTER TABLE `kerjasamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logokerjasamas`
--
ALTER TABLE `logokerjasamas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organis`
--
ALTER TABLE `organis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panduanakademiks`
--
ALTER TABLE `panduanakademiks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pemakaians`
--
ALTER TABLE `pemakaians`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjaminanmutus`
--
ALTER TABLE `penjaminanmutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produks`
--
ALTER TABLE `produks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profillulusans`
--
ALTER TABLE `profillulusans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasis`
--
ALTER TABLE `publikasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasi_internasionals`
--
ALTER TABLE `publikasi_internasionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `publikasi_nasionals`
--
ALTER TABLE `publikasi_nasionals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rencanastrategis`
--
ALTER TABLE `rencanastrategis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sejarahpmims`
--
ALTER TABLE `sejarahpmims`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesterduas`
--
ALTER TABLE `semesterduas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesterempats`
--
ALTER TABLE `semesterempats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semestersatus`
--
ALTER TABLE `semestersatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semestertigas`
--
ALTER TABLE `semestertigas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stafs`
--
ALTER TABLE `stafs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracerstudies`
--
ALTER TABLE `tracerstudies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visi_misis`
--
ALTER TABLE `visi_misis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasis`
--
ALTER TABLE `administrasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akreditas`
--
ALTER TABLE `akreditas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `akreditasis`
--
ALTER TABLE `akreditasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categoris_publikasis`
--
ALTER TABLE `categoris_publikasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categori_internasionals`
--
ALTER TABLE `categori_internasionals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category_produks`
--
ALTER TABLE `category_produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `daftardosens`
--
ALTER TABLE `daftardosens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `datadiris`
--
ALTER TABLE `datadiris`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloadakademiks`
--
ALTER TABLE `downloadakademiks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeriakademiks`
--
ALTER TABLE `galeriakademiks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelenders`
--
ALTER TABLE `kelenders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kerjasamas`
--
ALTER TABLE `kerjasamas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logokerjasamas`
--
ALTER TABLE `logokerjasamas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `organis`
--
ALTER TABLE `organis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `panduanakademiks`
--
ALTER TABLE `panduanakademiks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pemakaians`
--
ALTER TABLE `pemakaians`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penjaminanmutus`
--
ALTER TABLE `penjaminanmutus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produks`
--
ALTER TABLE `produks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profillulusans`
--
ALTER TABLE `profillulusans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publikasis`
--
ALTER TABLE `publikasis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publikasi_internasionals`
--
ALTER TABLE `publikasi_internasionals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publikasi_nasionals`
--
ALTER TABLE `publikasi_nasionals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rencanastrategis`
--
ALTER TABLE `rencanastrategis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sejarahpmims`
--
ALTER TABLE `sejarahpmims`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesterduas`
--
ALTER TABLE `semesterduas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semesterempats`
--
ALTER TABLE `semesterempats`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semestersatus`
--
ALTER TABLE `semestersatus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `semestertigas`
--
ALTER TABLE `semestertigas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stafs`
--
ALTER TABLE `stafs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tracerstudies`
--
ALTER TABLE `tracerstudies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `visi_misis`
--
ALTER TABLE `visi_misis`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
