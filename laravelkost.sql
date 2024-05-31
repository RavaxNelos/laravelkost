-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2024 pada 12.22
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelkost`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `banner`
--

CREATE TABLE `banner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_banner` varchar(255) NOT NULL,
  `kategori_banner` varchar(255) NOT NULL,
  `lokasi_banner` varchar(255) NOT NULL,
  `status_banner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `banner`
--

INSERT INTO `banner` (`id`, `gambar_banner`, `kategori_banner`, `lokasi_banner`, `status_banner`, `created_at`, `updated_at`) VALUES
(1, '1711955448.jpg', 'Slider', 'Home Utama', 'Publish', '2024-04-01 00:10:48', '2024-04-01 00:20:52'),
(2, '1711955479.jpg', 'Slider', 'Home Utama', 'Publish', '2024-04-01 00:11:19', '2024-04-01 00:20:50'),
(3, '1711956083.jpg', 'Slider', 'Home Utama', 'Publish', '2024-04-01 00:21:23', '2024-04-01 00:21:23'),
(4, '1711956112.jpg', 'Slider', 'Home Utama', 'Publish', '2024-04-01 00:21:52', '2024-04-01 00:21:52'),
(5, '1711956163.jpg', 'Slider', 'Home Utama', 'Publish', '2024-04-01 00:22:43', '2024-04-01 00:22:43'),
(6, '1711956205.png', 'Slider', 'Home Promo', 'Publish', '2024-04-01 00:23:25', '2024-04-01 00:23:25'),
(7, '1711956343.png', 'Slider', 'Home Promo', 'Publish', '2024-04-01 00:25:43', '2024-04-01 00:25:43'),
(8, '1711956398.png', 'Slider', 'Home Promo', 'Publish', '2024-04-01 00:26:39', '2024-04-01 00:26:39'),
(9, '1711956424.png', 'Slider', 'Home Promo', 'Publish', '2024-04-01 00:27:04', '2024-04-01 00:27:04'),
(10, '1711956453.png', 'Slider', 'Home Promo', 'Publish', '2024-04-01 00:27:33', '2024-04-01 00:27:33'),
(11, '1711956562.png', 'Slider', 'Home Ketiga', 'Publish', '2024-04-01 00:29:22', '2024-04-01 00:33:13'),
(12, '1711956818.png', 'Slider', 'Home Ketiga', 'Publish', '2024-04-01 00:33:38', '2024-04-01 00:33:38'),
(13, '1711956848.png', 'Slider', 'Home Ketiga', 'Publish', '2024-04-01 00:34:08', '2024-04-01 00:34:08'),
(14, '1711956947.png', 'Slider', 'Home Terakhir', 'Publish', '2024-04-01 00:35:47', '2024-04-01 00:35:47'),
(15, '1711956990.png', 'Slider', 'Home Terakhir', 'Publish', '2024-04-01 00:36:31', '2024-04-01 00:36:31'),
(16, '1711957025.png', 'Slider', 'Home Terakhir', 'Publish', '2024-04-01 00:37:06', '2024-04-01 00:37:06'),
(17, '1711957371.png', 'Slider', 'Area Kost Utama', 'Publish', '2024-04-01 00:42:51', '2024-04-01 00:42:51'),
(18, '1711957410.png', 'Slider', 'Area Kost Utama', 'Publish', '2024-04-01 00:43:30', '2024-04-01 00:43:30'),
(19, '1711957468.png', 'Slider', 'Area Kost Utama', 'Publish', '2024-04-01 00:44:28', '2024-04-01 00:44:28'),
(20, '1711957522.png', 'Slider', 'Area Kost Utama', 'Publish', '2024-04-01 00:45:22', '2024-04-01 00:45:22'),
(21, '1711958023.png', 'Slider', 'Area Kost Utama', 'Publish', '2024-04-01 00:53:43', '2024-04-01 00:53:43'),
(22, '1711958155.png', 'Banner', 'Area Kost Terakhir', 'Publish', '2024-04-01 00:55:55', '2024-04-01 00:55:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `tipe` varchar(255) NOT NULL,
  `deskripsi` varchar(1700) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `nama`, `gambar`, `tipe`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, 'AC Panasonic', '1714363279.jpg', 'Kamar', 'AC Panasonic hadir dalam berbagai ukuran, mulai dari model split dengan kapasitas 0.5 PK hingga model ducted dengan kapasitas 5 PK. Fitur-fitur canggihnya meliputi teknologi inverter untuk efisiensi energi, filter nanoe™ yang membersihkan udara.', '2024-04-29 04:01:19', '2024-04-30 09:21:03'),
(2, 'Kasur Ikea', '1714363534.jpg', 'Kamar', 'Kasur IKEA hadir dalam berbagai ukuran, termasuk single, double, queen, dan king size, untuk memenuhi berbagai kebutuhan ruang tidur. Fitur-fiturnya pada kasur sebagai berikut, mencakup desain ergonomic, lapisan busa atau pegas untuk kenyamanan.', '2024-04-29 04:05:34', '2024-04-30 09:22:09'),
(3, 'Meja', '1714363602.jpg', 'Kamar', 'Meja merek IKEA tersedia dalam berbagai model dan ukuran yang cocok untuk ruang kamar kost. Mereka menawarkan meja kerja yang fungsional dengan desain minimalis yang dapat disesuaikan dengan kebutuhan ruang Anda', '2024-04-29 04:06:42', '2024-05-08 04:58:46'),
(4, 'TV LG', '1714363672.jpg', 'Kamar', 'TV LG hadir dalam berbagai ukuran, mulai dari model kecil sekitar 32 inci hingga ukuran besar lebih dari 75 inci. Fitur-fitur canggihnya mencakup teknologi OLED atau LED, resolusi 4K atau 8K untuk kualitas gambar tajam, dan dukungan untuk HDR.', '2024-04-29 04:07:52', '2024-04-30 09:22:35'),
(5, 'Lemari IKEA', '1714363737.jpg', 'Kamar', 'IKEA menawarkan berbagai jenis lemari dengan ukuran dan desain yang beragam. Contohnya, lemari PAX hadir dalam berbagai ukuran lebar, tinggi, dan kedalaman, memberikan fleksibilitas dalam penyesuaian dengan kamar kost yang dipilih oleh Anda.', '2024-04-29 04:08:57', '2024-04-30 09:29:06'),
(6, 'Cermin', '1714363950.jpg', 'Kamar', 'Cermin yang tersedia di kamar kost memberikan sentuhan fungsional dan estetika yang penting bagi penghuninya. Dari cermin standar hingga cermin bergaya modern,  ketersediaan pilihan yang beragam memungkinkan setiap penghuni untuk menyesuaikan ruang tempat.', '2024-04-29 04:12:30', '2024-04-30 09:26:36'),
(7, 'Bak Mandi', '1714364026.jpg', 'Kamar Mandi', 'Fasilitas bak mandi dalam penyewaan kamar kost memberikan penghuni kenyamanan dan kebersihan yang penting untuk kehidupan sehari-hari. Dengan berbagai macam jenis dan ukuran, mulai dari bak mandi standar hingga yang dilengkapi dengan shower modern.', '2024-04-29 04:13:46', '2024-04-30 09:33:17'),
(8, 'Kulkas LG', '1714364068.jpg', 'Umum', 'Kulkas merek LG yang disediakan dalam penyewaan kamar kost memberikan penghuni kenyamanan dan kemudahan dalam penyimpanan makanan dan minuman. Dengan teknologi canggih dan desain yang ergonomis, kulkas LG menawarkan performa yang handal.', '2024-04-29 04:14:28', '2024-04-30 09:36:57'),
(9, 'Parkir Motor', '1714364110.jpg', 'Parkir', 'Fasilitas parkir motor dalam penyewaan kamar kost memberikan kenyamanan dan kemudahan bagi para penghuni yang memiliki kendaraan bermotor. Dengan tersedianya area parkir khusus untuk motor, penghuni tidak perlu khawatir tentang keamanan kendaraan mereka.', '2024-04-29 04:15:10', '2024-04-30 09:38:25'),
(10, 'Toilet', '1714364750.jpg', 'Kamar Mandi', 'Fasilitas toilet dalam penyewaan kamar kost merupakan bagian penting dari kenyamanan dan kebersihan lingkungan tempat tinggal. Dengan tersedianya toilet yang terawat dan bersih, para penghuni dapat menjalani aktivitas harian mereka dengan nyaman dan tanpa gangguan.', '2024-04-29 04:25:50', '2024-04-30 09:39:43'),
(11, 'Shower', '1714364791.jpg', 'Kamar Mandi', 'Fasilitas shower dalam penyewaan kamar kost memberikan penghuni akses mudah dan nyaman untuk membersihkan diri setiap hari. Dengan adanya shower, penghuni tidak perlu repot mengatur air secara manual seperti pada bak mandi, bisa lebih efektif dari yang manual', '2024-04-29 04:26:31', '2024-04-30 09:41:48'),
(12, 'Wifi Asus', '1714364860.jpg', 'Umum', 'Merek ASUS menawarkan beragam produk router WiFi yang cocok untuk penyewaan kamar kost. Router ASUS sering kali memiliki kecepatan dan jangkauan yang handal, serta fitur-fitur keamanan yang canggih untuk memastikan koneksi internet yang stabil', '2024-04-29 04:27:40', '2024-05-08 04:59:45'),
(13, 'Dapur', '1714364914.jpg', 'Umum', 'Dapur Pribadi', '2024-04-29 04:28:35', '2024-04-29 04:28:35'),
(14, 'Parkir Mobil', '1714364974.jpg', 'Parkir', 'Parkir Mobil Yang Memuat Berbagai Jenis Mobil', '2024-04-29 04:29:34', '2024-04-29 04:29:34'),
(15, 'Rak Kamar Mandi', '1714463988.jpg', 'Kamar Mandi', 'Rak ini cocok jika ada di kamar mandi dengan rak ini kalian dapat mengambil barang di satu tempat dan isinya juga banyak', '2024-04-30 07:59:49', '2024-04-30 07:59:49'),
(16, 'Dispenser', '1714464071.jpg', 'Umum', 'Dispenser untuk mengambil air minum dan juga ada fitur air panasnya', '2024-04-30 08:01:11', '2024-04-30 08:01:11'),
(17, 'Mesin Cuci', '1714464176.jpg', 'Kamar Mandi', 'Mesin cuci merek samsung', '2024-04-30 08:02:56', '2024-04-30 08:02:56'),
(18, 'Wastafel', '1714464268.jpg', 'Umum', 'Wastafel sampah gini', '2024-04-30 08:04:28', '2024-04-30 08:04:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `favorit`
--

CREATE TABLE `favorit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category` varchar(255) NOT NULL,
  `kamar_kost_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `favorit`
--

INSERT INTO `favorit` (`id`, `category`, `kamar_kost_id`, `user_id`, `created_at`, `updated_at`) VALUES
(71, 'Bulanan', 24, 5, '2024-04-24 08:39:52', '2024-04-24 08:39:52'),
(78, 'Harian', 25, 7, '2024-05-14 09:08:06', '2024-05-14 09:08:06'),
(79, 'Harian', 2, 7, '2024-05-14 09:08:12', '2024-05-14 09:08:12'),
(81, 'Bulanan', 24, 7, '2024-05-14 09:24:23', '2024-05-14 09:24:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_kamar_kost_kamu`
--

CREATE TABLE `gambar_kamar_kost_kamu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `kamar_id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambar_kamar_kost_kamu`
--

INSERT INTO `gambar_kamar_kost_kamu` (`id`, `user_id`, `kamar_id`, `gambar`, `created_at`, `updated_at`) VALUES
(7, 7, 1, '1715570912.jpg', '2024-05-13 03:28:32', '2024-05-13 03:28:32'),
(8, 7, 1, '1715571020.jpg', '2024-05-13 03:30:20', '2024-05-13 03:30:20'),
(9, 7, 1, '1715571060.jpg', '2024-05-13 03:30:36', '2024-05-13 03:31:00'),
(10, 7, 1, '1715571190.jpg', '2024-05-13 03:33:10', '2024-05-13 03:33:10'),
(11, 7, 1, '1715571200.jpg', '2024-05-13 03:33:20', '2024-05-13 03:33:20'),
(12, 7, 1, '1715571214.jpg', '2024-05-13 03:33:34', '2024-05-13 03:33:34'),
(13, 7, 1, '1715571226.jpg', '2024-05-13 03:33:46', '2024-05-13 03:33:46'),
(15, 7, 1, '1715572904.png', '2024-05-13 04:01:44', '2024-05-13 04:01:44'),
(16, 7, 1, '1715572926.jpg', '2024-05-13 04:02:06', '2024-05-13 04:02:06'),
(17, 7, 1, '1715573462.jpg', '2024-05-13 04:11:03', '2024-05-13 04:11:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gambar_kerusakan`
--

CREATE TABLE `gambar_kerusakan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kerusakan_id` bigint(20) UNSIGNED NOT NULL,
  `input1` varchar(255) DEFAULT NULL,
  `input2` varchar(255) DEFAULT NULL,
  `input3` varchar(255) DEFAULT NULL,
  `input4` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gambar_kerusakan`
--

INSERT INTO `gambar_kerusakan` (`id`, `kerusakan_id`, `input1`, `input2`, `input3`, `input4`, `created_at`, `updated_at`) VALUES
(1, 1, '1715050633gambar1.jpg', '1715050633gambar2.jpg', NULL, NULL, '2024-05-06 08:23:50', '2024-05-07 02:57:14'),
(2, 3, '1715070653gambar1.jpg', '1715070653gambar2.jpg', '1715070653gambar3.jpg', '1715070653gambar4.jpg', '2024-05-06 08:55:14', '2024-05-07 08:30:53'),
(3, 4, '1715071663gambar1.jpg', '1715071663gambar2.jpg', '1715071663gambar3.jpg', '1715071663gambar4.jpg', '2024-05-06 08:57:04', '2024-05-07 08:47:43'),
(4, 5, '1715574538gambar1.jpg', '1715574538gambar2.jpg', NULL, NULL, '2024-05-06 09:00:42', '2024-05-13 04:28:58'),
(5, 10, '17149865611.jpg', '17149865612.jpg', NULL, NULL, '2024-05-06 09:09:21', '2024-05-06 09:09:21'),
(6, 2, '1715069023gambar1.jpg', '1715069023gambar2.jpg', '1715069023gambar3.jpg', '1715069023gambar4.jpg', '2024-05-06 09:28:52', '2024-05-07 08:03:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jamkamarkost`
--

CREATE TABLE `jamkamarkost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jamkamar_kost` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jamkamarkost`
--

INSERT INTO `jamkamarkost` (`id`, `jamkamar_kost`, `created_at`, `updated_at`) VALUES
(2, '08:00', '2024-04-04 23:38:34', '2024-04-04 23:42:52'),
(3, '09:00', '2024-04-04 23:45:37', '2024-04-04 23:45:37'),
(4, '10:00', '2024-04-04 23:49:03', '2024-04-04 23:49:30'),
(5, '11:00', '2024-04-04 23:49:49', '2024-04-04 23:49:49'),
(6, '13:00', '2024-04-04 23:50:11', '2024-04-04 23:50:11'),
(7, '14:00', '2024-04-04 23:50:45', '2024-04-04 23:50:45'),
(8, '15:00', '2024-04-04 23:51:05', '2024-04-04 23:51:05'),
(9, '16:00', '2024-04-04 23:51:27', '2024-04-04 23:51:27'),
(10, '17:00', '2024-04-04 23:51:51', '2024-04-04 23:51:51');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamarkost`
--

CREATE TABLE `kamarkost` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_kost` varchar(255) NOT NULL,
  `kategori_id` bigint(20) UNSIGNED NOT NULL,
  `harga_kost` varchar(255) NOT NULL,
  `alamat_kost` varchar(255) NOT NULL,
  `ukuran_kost` varchar(255) NOT NULL,
  `tipe_kost` varchar(255) NOT NULL,
  `status_kost` varchar(255) NOT NULL,
  `fasilitas_kost` varchar(255) NOT NULL,
  `lokasi_kost` varchar(255) NOT NULL,
  `air_kost` varchar(255) NOT NULL,
  `listrik_kost` varchar(255) NOT NULL,
  `alamat_lengkap_kost` varchar(255) NOT NULL,
  `deskripsi_kost` varchar(300) NOT NULL,
  `nomer_kost` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kamarkost`
--

INSERT INTO `kamarkost` (`id`, `gambar_kost`, `kategori_id`, `harga_kost`, `alamat_kost`, `ukuran_kost`, `tipe_kost`, `status_kost`, `fasilitas_kost`, `lokasi_kost`, `air_kost`, `listrik_kost`, `alamat_lengkap_kost`, `deskripsi_kost`, `nomer_kost`, `created_at`, `updated_at`) VALUES
(1, '1712198223.jpg', 1, '2.300.000', 'Jemursari', '5 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kulkas |1', 'Didekat Kamu', 'Pdam', 'Token', 'Jl Jemursari No 06/10', 'Kamar kost dengan ukuran 5 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '2', '2024-04-03 19:37:04', '2024-05-14 09:31:08'),
(2, '1712198312.jpg', 2, '460.000', 'Jemursari', '4 x 6 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur', 'Didekat Kamu', 'Pdam', 'Pln', 'Jl Jemursari No 09/10', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '3', '2024-04-03 19:38:32', '2024-05-14 09:34:21'),
(3, '1712198455.jpg', 3, '2.400.000', 'Semolowaru', '2 x 3 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Area Surabaya Timur', 'Sumur', 'Token', 'Jl Semolowaru No 04/08', 'Kamar kost dengan ukuran 2 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '4', '2024-04-03 19:40:55', '2024-05-14 09:32:24'),
(4, '1712198525.jpg', 4, '500.000', 'Semolowaru', '4 x 3 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Area Surabaya Timur', 'Pdam', 'Token', 'Jl Semolowaru No 04/08', 'Kamar kost dengan ukuran 4 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '5', '2024-04-03 19:42:05', '2024-05-14 09:41:15'),
(5, '1712198607.jpg', 1, '2.300.000', 'Benowo', '4 x 4 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Putra', 'Pdam', 'Token', 'Jl Benowo No 09/11', 'Kamar kost dengan ukuran 4 x 4 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '6', '2024-04-03 19:43:27', '2024-05-14 09:43:02'),
(6, '1712198673.jpg', 1, '560.000', 'Benowo', '4 x 5 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Putra', 'Pdam', 'Pln', 'Jl Benowo No 05/11', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '7', '2024-04-03 19:44:33', '2024-05-14 09:44:37'),
(7, '1712198743.jpg', 3, '2.350.000', 'Sukolilo', '5 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Populer', 'Pdam', 'Pln', 'Jl Sukolilo No 04/05', 'Kamar kost dengan ukuran 5 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '8', '2024-04-03 19:45:43', '2024-05-14 09:45:58'),
(8, '1712198810.jpg', 5, '530.000', 'Sukolilo', '4 x 6 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Populer', 'Pdam', 'Token', 'Jl Sukolilo No 04/06', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '9', '2024-04-03 19:46:50', '2024-05-14 09:47:21'),
(9, '1712198877.jpg', 2, '2.400.000', 'Rungkut', '4 x 3 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Putri', 'Sumur', 'Token', 'Jl Rungkut No 05/08', 'Kamar kost dengan ukuran 4 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '10', '2024-04-03 19:47:57', '2024-05-14 09:48:47'),
(10, '1712198968.jpg', 2, '640.000', 'Rungkut', '4 x 5 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Kamar Kost Putri', 'Pdam', 'Token', 'Jl Rungkut No 05/10', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '11', '2024-04-03 19:49:29', '2024-05-14 09:50:13'),
(11, '1712199576.jpg', 3, '2.000.500', 'Semolowaru', '4 x 4 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Area Surabaya Barat', 'Pdam', 'Token', 'Jl Semolowaru No 05/08', 'Kamar kost dengan ukuran 4 x 4 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '12', '2024-04-03 19:59:36', '2024-05-14 09:51:44'),
(12, '1712199645.jpg', 5, '670.000', 'Semolowaru', '4 x 6 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Area Surabaya Barat', 'Pdam', 'Token', 'Jl Semolowaru No 04/10', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '13', '2024-04-03 20:00:45', '2024-05-14 09:53:13'),
(13, '1712199764.jpg', 1, '2.800.000', 'Benowo', '4 x 4 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Benowo No 09/11', 'Kamar kost dengan ukuran 4 x 4 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '14', '2024-04-03 20:02:44', '2024-05-14 09:54:38'),
(14, '1712199829.jpg', 1, '650.000', 'Benowo', '4 x 5 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Benowo No 08/11', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '15', '2024-04-03 20:03:49', '2024-05-14 09:57:59'),
(15, '1715673837.jpg', 1, '2.000.000', 'Jemursari', '4 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Promo Kamar Kost', 'Pdam', 'Token', 'Jl Jemursari No 04/10', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '16', '2024-04-04 20:04:15', '2024-05-14 10:00:04'),
(16, '1715673914.jpg', 2, '2.800.000', 'Rungkut', '5 x 5 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur', 'Promo Kamar Kost', 'Pdam', 'Pln', 'Jl Rungkut No 05/09', 'Kamar kost dengan ukuran 5 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '17', '2024-04-04 20:36:53', '2024-05-14 10:01:19'),
(17, '1715674018.jpg', 3, '2.400.000', 'Sukolilo', '4 x 6 Meter', 'Bulanan', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi', 'Kamar Kost Terpopuler', 'Sumur', 'Token', 'Jl Sukolilo No 04/06', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '18', '2024-04-04 20:59:47', '2024-05-14 10:02:49'),
(18, '1715674107.jpg', 5, '2.000.500', 'Semolowaru', '4 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Terpopuler', 'Pdam', 'Pln', 'Jl Semolowaru No 04/09', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '19', '2024-04-04 21:00:57', '2024-05-14 10:04:50'),
(19, '1715674180.jpg', 3, '2.000.500', 'Jemursari', '5 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Terbaru', 'Pdam', 'Token', 'Jl Jemursari No 06/10', 'Kamar Kost Dengan Ukuran 5 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '20', '2024-04-04 21:43:20', '2024-05-14 08:09:41'),
(20, '1715674764.jpg', 5, '2.100.000', 'Sukolilo', '4 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Terbaru', 'Pdam', 'Pln', 'Jl Sukolilo No 04/08', 'Kamar Kost Dengan Ukuran 4 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '21', '2024-04-04 23:02:14', '2024-05-14 08:19:24'),
(21, '1712307733.jpg', 3, '2.800.000', 'Benowo', '4 x 3 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur', 'Didekat Kamu', 'Pdam', 'Token', 'Jl Benowo No 05/12', 'Kamar Kost Dengan Ukuran 4 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '22', '2024-04-05 02:02:13', '2024-04-18 09:05:47'),
(22, '1712307823.jpg', 1, '2.450.000', 'Semolowaru', '4 x 4 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Didekat Kamu', 'Pdam', 'Token', 'Jl Semolowaru No 04/11', 'Kamar Kost Dengan Ukuran 4 x 4 Meter ini mempunyai sebuah kamar mandi dalam', '23', '2024-04-05 02:03:43', '2024-04-18 09:06:22'),
(23, '1712307938.jpg', 2, '2.100.000', 'Jemursari', '4 x 6 Meter', 'Bulanan', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi', 'Didekat Kamu', 'Pdam', 'Pln', 'Jl Jemursari No 06/11', 'Kamar Kost Dengan Ukuran 4 x 6 Meter ini mempunyai sebuah kamar mandi dalam', '24', '2024-04-05 02:05:38', '2024-04-18 09:06:47'),
(24, '1712308038.jpg', 3, '2.700.000', 'Sukolilo', '2 x 3 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Didekat Kamu', 'Pdam', 'Token', 'Jl Sukolilo No 05/05', 'Kamar Kost Dengan Ukuran 2 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '25', '2024-04-05 02:07:18', '2024-04-18 09:08:03'),
(25, '1712308183.jpg', 4, '560.000', 'Rungkut', '5 x 5 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur', 'Didekat Kamu', 'Sumur', 'Token', 'Jl Rungkut No 05/11', 'Kamar Kost Dengan Ukuran 5 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '26', '2024-04-05 02:09:43', '2024-04-18 09:08:41'),
(26, '1712308296.jpg', 5, '640.000', 'Mulyorejo', '4 x 6 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Didekat Kamu', 'Sumur', 'Pln', 'Jl Mulyorejo No 09/11', 'Kamar Kost Dengan Ukuran 4 x 6 Meter ini mempunyai sebuah kamar mandi dalam', '27', '2024-04-05 02:11:36', '2024-04-18 09:09:05'),
(27, '1712308399.jpg', 1, '560.000', 'Semolowaru', '4 x 5 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Didekat Kamu', 'Pdam', 'Token', 'Jl Semolowaru No 04/12', 'Kamar Kost Dengan Ukuran 4 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '28', '2024-04-05 02:13:19', '2024-04-18 09:09:45'),
(28, '1712308555.jpg', 2, '530.000', 'Benowo', '2 x 3 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Didekat Kamu', 'Sumur', 'Token', 'Jl Benowo No 09/12', 'Kamar Kost Dengan Ukuran 2 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '29', '2024-04-05 02:15:55', '2024-04-18 09:10:09'),
(29, '1712308850.jpg', 2, '2.300.000', 'Semolowaru', '5 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Area Surabaya Timur', 'Pdam', 'Token', 'Jl Semolowaru No 04/13', 'Kamar Kost Dengan Ukuran 5 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '30', '2024-04-05 02:20:50', '2024-04-18 09:10:32'),
(30, '1712308980.jpg', 3, '2.300.000', 'Benowo', '4 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Area Surabaya Timur', 'Pdam', 'Token', 'Jl Benowo No 05/13', 'Kamar Kost Dengan Ukuran 4 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '31', '2024-04-05 02:23:00', '2024-04-18 09:10:56'),
(31, '1713242889.jpg', 4, '560.000', 'Benowo', '2 x 3 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 2 kulkas', 'Kamar Kost Populer', 'Pdam', 'Pln', 'Jl Benowo No 05/14', 'Kamar Kost Dengan Ukuran 2 x 3 Meter ini mempunyai sebuah kamar mandi dalam, dan beberapa parkiran', '1', '2024-04-15 21:48:09', '2024-05-08 08:04:38'),
(33, '1715586463.jpg', 1, '2.300.000', 'Jemursari', '4 x 5 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Guling', 'Area Surabaya Timur', 'Pdam', 'Pln', 'Jl Jemursari No 09/11', 'Kamar Kost Dengan Ukuran 4 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '32', '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(34, '1715586654.jpg', 3, '2.000.000', 'Benowo', '4 x 3 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur | 2 Bantal', 'Area Surabaya Timur', 'Pdam', 'Token', 'Jl Benowo No 09/13', 'Kamar Kost Dengan Ukuran 4 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '33', '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(35, '1715588189.jpg', 4, '500.000', 'Jemursari', '4 x 6 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur | 2 Bantal', 'Area Surabaya Timur', 'Pdam', 'Token', 'Jl Jemursari No 06/12', 'Kamar Kost Dengan Ukuran 4 x 6 Meter ini mempunyai sebuah kamar mandi dalam', '34', '2024-05-13 08:16:29', '2024-05-13 08:21:30'),
(36, '1715588449.jpg', 5, '560.000', 'Jemursari', '5 x 5 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Kursi', 'Area Surabaya Timur', 'Pdam', 'Pln', 'Jl Jemursari No 06/13', 'Kamar Kost Dengan Ukuran 5 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '35', '2024-05-13 08:20:49', '2024-05-13 08:20:49'),
(37, '1715588636.jpg', 1, '640.000', 'Jemursari', '4 x 4 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kulkas |1 Shampoo', 'Area Surabaya Timur', 'Sumur', 'Token', 'Jl Jemursari No 06/14', 'Kamar Kost Dengan Ukuran 4 x 4 Meter ini mempunyai sebuah kamar mandi dalam', '36', '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(38, '1715588755.jpg', 2, '450.000', 'Jemursari', '5 x 5 Meter', 'Harian', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi', 'Area Surabaya Timur', 'Pdam', 'Pln', 'Jl Jemursari No 09/13', 'Kamar Kost Dengan Ukuran 5 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '37', '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(39, '1715589064.jpg', 1, '2.800.000', 'Sukolilo', '4 x 3 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Kamar Kost Putra', 'Sumur', 'Token', 'Jl Sukolilo No 04/09', 'Kamar Kost Dengan Ukuran 4 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '38', '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(40, '1715589196.jpg', 1, '2.300.000', 'Rungkut', '4 x 4 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Putra', 'Pdam', 'Pln', 'Jl Rungkut No 05/12', 'Kamar Kost Dengan Ukuran 4 x 4 Meter ini mempunyai sebuah kamar mandi dalam', '39', '2024-05-13 08:33:16', '2024-05-13 08:33:16'),
(41, '1715589411.jpg', 1, '2.400.000', 'Rungkut', '4 x 6 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Kamar Kost Putra', 'Sumur', 'Pln', 'Jl Rungkut No 05/13', 'Kamar Kost Dengan Ukuran 4 x 6 Meter ini mempunyai sebuah kamar mandi dalam', '40', '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(42, '1715589560.jpg', 1, '2.000.000', 'Rungkut', '4 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi', 'Kamar Kost Putra', 'Pdam', 'Pln', 'Jl Rungkut No 05/14', 'Kamar Kost Dengan Ukuran 4 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '41', '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(43, '1715589978.jpg', 1, '500.000', 'Semolowaru', '4 x 5 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Kamar Kost Putra', 'Pdam', 'Pln', 'Jl Semolowaru No 04/15', 'Kamar Kost Dengan Ukuran 4 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '42', '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(44, '1715590156.jpg', 1, '450.000', 'Semolowaru', '4 x 3 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Putra', 'Pdam', 'Pln', 'Jl Semolowaru No 04/14', 'Kamar Kost Dengan Ukuran 4 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '43', '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(45, '1715590313.jpg', 1, '530.000', 'Benowo', '4 x 4 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Kamar Kost Putra', 'Pdam', 'Pln', 'Jl Benowo No 09/14', 'Kamar Kost Dengan Ukuran 4 x 4 Meter ini mempunyai sebuah kamar mandi dalam', '44', '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(46, '1715590645.jpg', 1, '670.000', 'Rungkut', '2 x 3 Meter', 'Harian', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi', 'Kamar Kost Putra', 'Pdam', 'Token', 'Jl Rungkut No 05/15', 'Kamar Kost Dengan Ukuran 2 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '45', '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(47, '1715591555.jpg', 2, '2.300.000', 'Benowo', '5 x 5 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Kamar Kost Populer', 'Pdam', 'Token', 'Jl Benowo No 05/15', 'Kamar Kost Dengan Ukuran 5 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '46', '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(48, '1715592095.jpg', 3, '2.800.000', 'Semolowaru', '4 x 6 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur', 'Kamar Kost Populer', 'Pdam', 'Token', 'Jl Semolowaru No 04/16', 'Kamar Kost Dengan Ukuran 4 x 6 Meter ini mempunyai sebuah kamar mandi dalam', '47', '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(49, '1715592334.jpg', 4, '2.400.000', 'Jemursari', '4 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi', 'Kamar Kost Populer', 'Pdam', 'Token', 'Jl Jemursari No 06/15', 'Kamar Kost Dengan Ukuran 4 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '48', '2024-05-13 09:25:34', '2024-05-13 09:25:34'),
(50, '1715592529.jpg', 5, '2.000.500', 'Rungkut', '4 x 3 Meter', 'Bulanan', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi', 'Kamar Kost Populer', 'Pdam', 'Token', 'Jl Rungkut No 05/15', 'Kamar Kost Dengan Ukuran 4 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '49', '2024-05-13 09:28:49', '2024-05-13 09:28:49'),
(51, '1715592682.jpg', 5, '560.000', 'Sukolilo', '4 x 6 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Populer', 'Pdam', 'Pln', 'Jl Sukolilo No 04/10', 'Kamar Kost Dengan Ukuran 4 x 6 Meter ini mempunyai sebuah kamar mandi dalam', '50', '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(52, '1715592900.jpg', 1, '640.000', 'Benowo', '4 x 5 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur', 'Kamar Kost Populer', 'Pdam', 'Token', 'Jl Benowo No 05/16', 'Kamar Kost Dengan Ukuran 4 x 5 Meter ini mempunyai sebuah kamar mandi dalam', '51', '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(53, '1715593025.jpg', 2, '670.000', 'Semolowaru', '4 x 3 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Kursi', 'Kamar Kost Populer', 'Pdam', 'Token', 'Jl Semolowaru No 04/16', 'Kamar Kost Dengan Ukuran 4 x 3 Meter ini mempunyai sebuah kamar mandi dalam', '52', '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(54, '1715657874.jpg', 2, '2.300.000', 'Benowo', '5 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 2 Sofa | 1 Selimut', 'Kamar Kost Putri', 'Pdam', 'Pln', 'Jl Benowo No 05/17', 'Kamar kost dengan ukuran 5 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur yang', '53', '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(55, '1715658525.jpg', 2, '2.400.000', 'Semolowaru', '4 x 6 Meter', 'Bulanan', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi | 2 Bantal | 1 Guling', 'Kamar Kost Putri', 'Pdam', 'Pln', 'Jl Semolowaru No 04/17', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '54', '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(56, '1715658668.jpg', 2, '2.800.000', 'Jemursari', '4 x 5 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas | 1 Kasur | 2 Kursi | 1 Bantal', 'Kamar Kost Putri', 'Sumur', 'Token', 'Jl Jemursari No 07/01', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '55', '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(57, '1715658919.jpg', 2, '2.000.000', 'Rungkut', '4 x 3 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Kamar Kost Putri', 'Pdam', 'Token', 'Jl Rungkut No 06/01', 'Kamar kost dengan ukuran 4 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur yang', '56', '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(58, '1715659069.jpg', 2, '450.000', 'Sukolilo', '4 x 4 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Kursi | 1 Kamar Mandi', 'Kamar Kost Putri', 'Pdam', 'Token', 'Jl Sukolilo No 03/01', 'Kamar kost dengan ukuran 4 x 4 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '57', '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(59, '1715659192.jpg', 2, '460.000', 'Benowo', '2 x 3 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Bantal | 1 Meja', 'Kamar Kost Putri', 'Pdam', 'Token', 'Jl Benowo No 06/01', 'Kamar kost dengan ukuran 2 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '58', '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(60, '1715659389.jpg', 2, '560.000', 'Semolowaru', '5 x 5 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 2 Meja | 1 Sofa', 'Kamar Kost Putri', 'Pdam', 'Pln', 'Jl Semolowaru No 05/10', 'Kamar kost dengan ukuran 5 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '59', '2024-05-14 04:03:09', '2024-05-14 04:03:09'),
(61, '1715659536.jpg', 2, '500.000', 'Jemursari', '4 x 6 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 2 Bantal | 1 Meja', 'Kamar Kost Putri', 'Pdam', 'Token', 'Jl Jemursari No 05/01', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '60', '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(62, '1715659778.jpg', 1, '2.300.000', 'Rungkut', '2 x 3 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Area Surabaya Barat', 'Pdam', 'Token', 'Jl Rungkut No 04/01', 'Kamar kost dengan ukuran 2 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '61', '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(63, '1715659910.jpg', 2, '2.400.000', 'Sukolilo', '5 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 1 Lemari | 1 Kulkas | 2 Kursi | 2 Meja | 1 Sofa', 'Area Surabaya Barat', 'Pdam', 'Token', 'Jl Sukolilo No 05/01', 'Kamar kost dengan ukuran 5 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '62', '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(64, '1715660063.jpg', 3, '2.800.000', 'Benowo', '4 x 6 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Meja | 1 Dispenser', 'Area Surabaya Barat', 'Pdam', 'Pln', 'Jl Benowo No 04/01', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '63', '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(65, '1715660204.jpg', 4, '2.100.000', 'Semolowaru', '4 x 5 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Area Surabaya Barat', 'Pdam', 'Token', 'Jl Semolowaru No 03/01', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '64', '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(66, '1715660404.jpg', 1, '450.000', 'Semolowaru', '4 x 5 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Area Surabaya Barat', 'Pdam', 'Token', 'Jl Semolowaru No 03/02', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '65', '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(67, '1715660550.jpg', 2, '440.000', 'Jemursari', '4 x 3 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur | 2 Bantal', 'Area Surabaya Barat', 'Pdam', 'Pln', 'Jl Jemursari No 05/02', 'Kamar kost dengan ukuran 4 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '66', '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(68, '1715660889.jpg', 3, '640.000', 'Rungkut', '4 x 4 Meter', 'Harian', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur | 2 Bantal', 'Area Surabaya Barat', 'Pdam', 'Token', 'Jl Rungkut No 04/02', 'Kamar kost dengan ukuran 4 x 4 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '67', '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(69, '1715661016.jpg', 5, '610.000', 'Sukolilo', '2 x 3 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Area Surabaya Barat', 'Pdam', 'Pln', 'Jl Sukolilo No 04/11', 'Kamar kost dengan ukuran 2 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '68', '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(70, '1715661466.jpg', 1, '2.300.000', 'Semolowaru', '5 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Semolowaru No 03/03', 'Kamar kost dengan ukuran 5 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '69', '2024-05-14 04:37:46', '2024-05-14 04:37:46'),
(71, '1715661741.jpg', 2, '2.400.000', 'Jemursari', '4 x 6 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Jemursari No 07/02', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '70', '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(72, '1715661899.jpg', 3, '2.800.000', 'Rungkut', '4 x 5 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Guling', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Rungkut No 04/03', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '71', '2024-05-14 04:44:59', '2024-05-14 04:44:59'),
(73, '1715662021.jpg', 4, '2.000.000', 'Sukolilo', '2 x 3 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 2 kulkas', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Sukolilo No 04/12', 'Kamar kost dengan ukuran 2 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '72', '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(74, '1715662266.jpg', 2, '450.000', 'Semolowaru', '4 x 6 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 2 kulkas', 'Rekomendasi Kamar Kost', 'Pdam', 'Token', 'Jl Semolowaru No 03/04', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '73', '2024-05-14 04:51:06', '2024-05-14 04:54:56'),
(75, '1715662393.jpg', 3, '440.000', 'Jemursari', '4 x 5 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Jemursari No 07/03', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '74', '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(76, '1715662721.jpg', 4, '560.000', 'Rungkut', '4 x 3 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kulkas |1 Bantal', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Rungkut No 04/04', 'Kamar kost dengan ukuran 4 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '75', '2024-05-14 04:58:41', '2024-05-14 04:58:41'),
(77, '1715669068.jpg', 5, '670.000', 'Sukolilo', '4 x 4 Meter', 'Harian', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Rekomendasi Kamar Kost', 'Pdam', 'Pln', 'Jl Sukolilo No 05/02', 'Kamar kost dengan ukuran 4 x 4 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '76', '2024-05-14 06:44:28', '2024-05-14 06:44:28'),
(78, '1715675030.jpg', 3, '2.400.000', 'Benowo', '4 x 6 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 2 Kursi | 1 Kasur | 2 Bantal', 'Promo Kamar Kost', 'Pdam', 'Pln', 'Jl Benowo No 08/01', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '77', '2024-05-14 08:23:50', '2024-05-14 08:23:50'),
(79, '1715675234.jpg', 4, '2.000.000', 'Semolowaru', '4 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Promo Kamar Kost', 'Pdam', 'Token', 'Jl Semolowaru No 03/05', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '78', '2024-05-14 08:27:14', '2024-05-14 08:27:14'),
(80, '1715675397.jpg', 5, '2.100.000', 'Rungkut', '4 x 4 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Guling', 'Promo Kamar Kost', 'Pdam', 'Token', 'Jl Rungkut No 04/05', 'Kamar kost dengan ukuran 4 x 4 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '79', '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(81, '1715675550.jpg', 1, '2.400.000', 'Sukolilo', '2 x 3 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Kursi', 'Kamar Kost Terpopuler', 'Pdam', 'Pln', 'Jl Sukolilo No 03/02', 'Kamar kost dengan ukuran 2 x 3  meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '80', '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(82, '1715675681.jpg', 2, '2.300.000', 'Semolowaru', '5 x 5 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Kursi | 1 Kamar Mandi', 'Kamar Kost Terpopuler', 'Sumur', 'Token', 'Jl Semolowaru No 03/06', 'Kamar kost dengan ukuran 5 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '81', '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(83, '1715675851.jpg', 3, '2.100.000', 'Benowo', '4 x 6 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Guling', 'Kamar Kost Terpopuler', 'Pdam', 'Pln', 'Jl Benowo No 04/02', 'Kamar kost dengan ukuran 4 x 6 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '82', '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(84, '1715676018.jpg', 1, '2.400.000', 'Jemursari', '4 x 5 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 2 kulkas', 'Kamar Kost Terbaru', 'Pdam', 'Token', 'Jl Jemursari No 04/01', 'Kamar kost dengan ukuran 4 x 5 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '83', '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(85, '1715676195.jpg', 3, '2.400.000', 'Rungkut', '4 x 3 Meter', 'Bulanan', 'Publish', '1 AC | 2 Lemari | 1 Kulkas| 1 Kasur | 2 Guling', 'Kamar Kost Terbaru', 'Pdam', 'Token', 'Jl Rungkut No 03/01', 'Kamar kost dengan ukuran 4 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '84', '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(86, '1715676613.jpg', 5, '2.000.500', 'Sukolilo', '2 x 3 Meter', 'Bulanan', 'Publish', '1 Ac | 2 Lemari | 2 Kursi | 1 Kasur | 1 Kamar Mandi Dalam', 'Kamar Kost Terbaru', 'Pdam', 'Token', 'Jl Sukolilo No 04/13', 'Kamar kost dengan ukuran 2 x 3 meter menawarkan ruang yang luas dan nyaman bagi penghuninya. Dengan luas tersebut, penghuni memiliki fleksibilitas untuk mengatur furnitur mereka sesuai dengan kebutuhan dan preferensi pribadi. Ukuran yang cukup besar ini memungkinkan untuk menyediakan area tidur', '85', '2024-05-14 08:50:13', '2024-05-14 08:50:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar_kost_fasilitas`
--

CREATE TABLE `kamar_kost_fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kamar_kost_id` bigint(20) UNSIGNED NOT NULL,
  `fasilitas_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kamar_kost_fasilitas`
--

INSERT INTO `kamar_kost_fasilitas` (`id`, `kamar_kost_id`, `fasilitas_id`, `created_at`, `updated_at`) VALUES
(35, 28, 1, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(36, 28, 2, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(37, 28, 3, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(38, 28, 4, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(39, 28, 5, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(40, 28, 8, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(41, 28, 12, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(42, 28, 13, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(43, 28, 10, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(44, 28, 11, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(45, 28, 9, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(46, 28, 14, '2024-04-29 08:43:22', '2024-04-29 08:43:22'),
(47, 27, 1, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(48, 27, 2, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(49, 27, 4, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(50, 27, 5, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(51, 27, 6, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(52, 27, 8, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(53, 27, 12, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(54, 27, 13, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(55, 27, 7, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(56, 27, 10, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(57, 27, 11, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(58, 27, 9, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(59, 27, 14, '2024-04-29 08:44:05', '2024-04-29 08:44:05'),
(60, 26, 1, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(61, 26, 3, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(62, 26, 4, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(63, 26, 5, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(64, 26, 6, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(65, 26, 8, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(66, 26, 12, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(67, 26, 13, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(68, 26, 7, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(69, 26, 10, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(70, 26, 11, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(71, 26, 9, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(72, 26, 14, '2024-04-29 08:44:56', '2024-04-29 08:44:56'),
(73, 25, 1, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(74, 25, 2, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(75, 25, 4, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(76, 25, 5, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(77, 25, 6, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(78, 25, 8, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(79, 25, 12, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(80, 25, 13, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(81, 25, 7, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(82, 25, 10, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(83, 25, 11, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(84, 25, 9, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(85, 25, 14, '2024-04-29 08:46:07', '2024-04-29 08:46:07'),
(86, 24, 1, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(87, 24, 3, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(88, 24, 4, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(89, 24, 5, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(90, 24, 6, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(91, 24, 8, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(92, 24, 12, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(93, 24, 13, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(94, 24, 7, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(95, 24, 10, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(96, 24, 11, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(97, 24, 9, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(98, 24, 14, '2024-04-29 08:47:25', '2024-04-29 08:47:25'),
(99, 23, 1, '2024-04-29 08:48:19', '2024-04-29 08:48:19'),
(100, 23, 2, '2024-04-29 08:48:19', '2024-04-29 08:48:19'),
(101, 23, 3, '2024-04-29 08:48:19', '2024-04-29 08:48:19'),
(102, 23, 5, '2024-04-29 08:48:19', '2024-04-29 08:48:19'),
(103, 23, 6, '2024-04-29 08:48:19', '2024-04-29 08:48:19'),
(104, 23, 8, '2024-04-29 08:48:19', '2024-04-29 08:48:19'),
(105, 23, 12, '2024-04-29 08:48:20', '2024-04-29 08:48:20'),
(106, 23, 13, '2024-04-29 08:48:20', '2024-04-29 08:48:20'),
(107, 23, 7, '2024-04-29 08:48:20', '2024-04-29 08:48:20'),
(108, 23, 10, '2024-04-29 08:48:20', '2024-04-29 08:48:20'),
(109, 23, 11, '2024-04-29 08:48:20', '2024-04-29 08:48:20'),
(110, 23, 9, '2024-04-29 08:48:20', '2024-04-29 08:48:20'),
(111, 23, 14, '2024-04-29 08:48:20', '2024-04-29 08:48:20'),
(112, 22, 1, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(113, 22, 2, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(114, 22, 3, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(115, 22, 4, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(116, 22, 5, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(117, 22, 8, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(118, 22, 12, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(119, 22, 13, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(120, 22, 7, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(121, 22, 10, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(122, 22, 11, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(123, 22, 9, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(124, 22, 14, '2024-04-29 08:49:30', '2024-04-29 08:49:30'),
(474, 21, 1, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(475, 21, 2, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(476, 21, 3, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(477, 21, 6, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(478, 21, 8, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(479, 21, 12, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(480, 21, 13, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(481, 21, 7, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(482, 21, 10, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(483, 21, 11, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(484, 21, 9, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(485, 21, 14, '2024-04-30 04:54:43', '2024-04-30 04:54:43'),
(486, 31, 1, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(487, 31, 2, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(488, 31, 3, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(489, 31, 4, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(490, 31, 5, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(491, 31, 6, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(492, 31, 8, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(493, 31, 12, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(494, 31, 13, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(495, 31, 16, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(496, 31, 18, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(497, 31, 7, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(498, 31, 10, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(499, 31, 11, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(500, 31, 15, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(501, 31, 9, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(502, 31, 14, '2024-04-30 08:08:53', '2024-04-30 08:08:53'),
(503, 30, 1, '2024-04-30 08:09:51', '2024-04-30 08:09:51'),
(504, 30, 2, '2024-04-30 08:09:51', '2024-04-30 08:09:51'),
(505, 30, 3, '2024-04-30 08:09:51', '2024-04-30 08:09:51'),
(506, 30, 4, '2024-04-30 08:09:51', '2024-04-30 08:09:51'),
(507, 30, 5, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(508, 30, 8, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(509, 30, 12, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(510, 30, 13, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(511, 30, 16, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(512, 30, 18, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(513, 30, 7, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(514, 30, 10, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(515, 30, 11, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(516, 30, 15, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(517, 30, 17, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(518, 30, 9, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(519, 30, 14, '2024-04-30 08:09:52', '2024-04-30 08:09:52'),
(520, 29, 1, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(521, 29, 2, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(522, 29, 3, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(523, 29, 5, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(524, 29, 6, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(525, 29, 8, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(526, 29, 12, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(527, 29, 13, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(528, 29, 18, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(529, 29, 7, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(530, 29, 10, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(531, 29, 11, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(532, 29, 15, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(533, 29, 9, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(534, 29, 14, '2024-04-30 08:10:35', '2024-04-30 08:10:35'),
(535, 33, 1, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(536, 33, 2, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(537, 33, 3, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(538, 33, 4, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(539, 33, 5, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(540, 33, 6, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(541, 33, 8, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(542, 33, 12, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(543, 33, 13, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(544, 33, 16, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(545, 33, 18, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(546, 33, 7, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(547, 33, 10, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(548, 33, 11, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(549, 33, 17, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(550, 33, 9, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(551, 33, 14, '2024-05-13 07:47:43', '2024-05-13 07:47:43'),
(552, 34, 1, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(553, 34, 3, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(554, 34, 4, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(555, 34, 5, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(556, 34, 6, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(557, 34, 8, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(558, 34, 12, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(559, 34, 13, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(560, 34, 16, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(561, 34, 18, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(562, 34, 7, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(563, 34, 11, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(564, 34, 15, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(565, 34, 17, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(566, 34, 9, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(567, 34, 14, '2024-05-13 07:50:54', '2024-05-13 07:50:54'),
(585, 36, 1, '2024-05-13 08:20:49', '2024-05-13 08:20:49'),
(586, 36, 3, '2024-05-13 08:20:49', '2024-05-13 08:20:49'),
(587, 36, 4, '2024-05-13 08:20:49', '2024-05-13 08:20:49'),
(588, 36, 5, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(589, 36, 6, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(590, 36, 8, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(591, 36, 12, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(592, 36, 13, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(593, 36, 16, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(594, 36, 18, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(595, 36, 7, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(596, 36, 10, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(597, 36, 11, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(598, 36, 15, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(599, 36, 17, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(600, 36, 9, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(601, 36, 14, '2024-05-13 08:20:50', '2024-05-13 08:20:50'),
(602, 35, 1, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(603, 35, 2, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(604, 35, 3, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(605, 35, 4, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(606, 35, 5, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(607, 35, 6, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(608, 35, 8, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(609, 35, 12, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(610, 35, 13, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(611, 35, 16, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(612, 35, 18, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(613, 35, 7, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(614, 35, 10, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(615, 35, 15, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(616, 35, 17, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(617, 35, 9, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(618, 35, 14, '2024-05-13 08:21:30', '2024-05-13 08:21:30'),
(619, 37, 1, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(620, 37, 2, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(621, 37, 3, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(622, 37, 4, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(623, 37, 5, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(624, 37, 12, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(625, 37, 13, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(626, 37, 16, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(627, 37, 18, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(628, 37, 7, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(629, 37, 10, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(630, 37, 11, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(631, 37, 15, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(632, 37, 17, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(633, 37, 9, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(634, 37, 14, '2024-05-13 08:23:56', '2024-05-13 08:23:56'),
(635, 38, 1, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(636, 38, 2, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(637, 38, 4, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(638, 38, 5, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(639, 38, 6, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(640, 38, 8, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(641, 38, 12, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(642, 38, 13, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(643, 38, 16, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(644, 38, 18, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(645, 38, 7, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(646, 38, 10, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(647, 38, 11, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(648, 38, 15, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(649, 38, 17, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(650, 38, 9, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(651, 38, 14, '2024-05-13 08:25:55', '2024-05-13 08:25:55'),
(652, 39, 1, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(653, 39, 2, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(654, 39, 3, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(655, 39, 4, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(656, 39, 5, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(657, 39, 6, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(658, 39, 8, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(659, 39, 12, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(660, 39, 13, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(661, 39, 16, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(662, 39, 18, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(663, 39, 7, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(664, 39, 10, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(665, 39, 11, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(666, 39, 15, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(667, 39, 17, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(668, 39, 9, '2024-05-13 08:31:04', '2024-05-13 08:31:04'),
(669, 39, 14, '2024-05-13 08:31:05', '2024-05-13 08:31:05'),
(670, 40, 1, '2024-05-13 08:33:16', '2024-05-13 08:33:16'),
(671, 40, 2, '2024-05-13 08:33:16', '2024-05-13 08:33:16'),
(672, 40, 3, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(673, 40, 5, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(674, 40, 6, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(675, 40, 8, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(676, 40, 12, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(677, 40, 13, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(678, 40, 16, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(679, 40, 18, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(680, 40, 7, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(681, 40, 10, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(682, 40, 15, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(683, 40, 17, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(684, 40, 9, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(685, 40, 14, '2024-05-13 08:33:17', '2024-05-13 08:33:17'),
(686, 41, 1, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(687, 41, 2, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(688, 41, 4, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(689, 41, 5, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(690, 41, 6, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(691, 41, 8, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(692, 41, 12, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(693, 41, 13, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(694, 41, 16, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(695, 41, 18, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(696, 41, 7, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(697, 41, 10, '2024-05-13 08:36:51', '2024-05-13 08:36:51'),
(698, 41, 11, '2024-05-13 08:36:52', '2024-05-13 08:36:52'),
(699, 41, 15, '2024-05-13 08:36:52', '2024-05-13 08:36:52'),
(700, 41, 17, '2024-05-13 08:36:52', '2024-05-13 08:36:52'),
(701, 41, 9, '2024-05-13 08:36:52', '2024-05-13 08:36:52'),
(702, 41, 14, '2024-05-13 08:36:52', '2024-05-13 08:36:52'),
(703, 42, 1, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(704, 42, 2, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(705, 42, 3, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(706, 42, 4, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(707, 42, 5, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(708, 42, 6, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(709, 42, 8, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(710, 42, 12, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(711, 42, 13, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(712, 42, 16, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(713, 42, 18, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(714, 42, 7, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(715, 42, 10, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(716, 42, 11, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(717, 42, 15, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(718, 42, 17, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(719, 42, 9, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(720, 42, 14, '2024-05-13 08:39:20', '2024-05-13 08:39:20'),
(721, 43, 1, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(722, 43, 2, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(723, 43, 3, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(724, 43, 4, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(725, 43, 5, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(726, 43, 6, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(727, 43, 8, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(728, 43, 12, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(729, 43, 13, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(730, 43, 16, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(731, 43, 18, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(732, 43, 7, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(733, 43, 10, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(734, 43, 11, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(735, 43, 15, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(736, 43, 17, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(737, 43, 9, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(738, 43, 14, '2024-05-13 08:46:18', '2024-05-13 08:46:18'),
(739, 44, 1, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(740, 44, 2, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(741, 44, 4, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(742, 44, 5, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(743, 44, 6, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(744, 44, 8, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(745, 44, 12, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(746, 44, 13, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(747, 44, 16, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(748, 44, 18, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(749, 44, 7, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(750, 44, 10, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(751, 44, 11, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(752, 44, 15, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(753, 44, 17, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(754, 44, 9, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(755, 44, 14, '2024-05-13 08:49:16', '2024-05-13 08:49:16'),
(756, 45, 1, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(757, 45, 2, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(758, 45, 4, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(759, 45, 5, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(760, 45, 6, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(761, 45, 8, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(762, 45, 12, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(763, 45, 13, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(764, 45, 16, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(765, 45, 18, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(766, 45, 7, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(767, 45, 10, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(768, 45, 11, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(769, 45, 15, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(770, 45, 17, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(771, 45, 9, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(772, 45, 14, '2024-05-13 08:51:53', '2024-05-13 08:51:53'),
(773, 46, 1, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(774, 46, 2, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(775, 46, 4, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(776, 46, 5, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(777, 46, 6, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(778, 46, 8, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(779, 46, 12, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(780, 46, 13, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(781, 46, 16, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(782, 46, 18, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(783, 46, 7, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(784, 46, 10, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(785, 46, 11, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(786, 46, 15, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(787, 46, 17, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(788, 46, 9, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(789, 46, 14, '2024-05-13 08:57:25', '2024-05-13 08:57:25'),
(790, 47, 1, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(791, 47, 2, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(792, 47, 3, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(793, 47, 4, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(794, 47, 5, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(795, 47, 6, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(796, 47, 8, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(797, 47, 12, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(798, 47, 13, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(799, 47, 16, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(800, 47, 18, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(801, 47, 7, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(802, 47, 10, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(803, 47, 11, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(804, 47, 15, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(805, 47, 17, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(806, 47, 9, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(807, 47, 14, '2024-05-13 09:12:35', '2024-05-13 09:12:35'),
(808, 48, 1, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(809, 48, 2, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(810, 48, 3, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(811, 48, 4, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(812, 48, 5, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(813, 48, 8, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(814, 48, 12, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(815, 48, 13, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(816, 48, 16, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(817, 48, 18, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(818, 48, 7, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(819, 48, 10, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(820, 48, 11, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(821, 48, 15, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(822, 48, 17, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(823, 48, 9, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(824, 48, 14, '2024-05-13 09:21:35', '2024-05-13 09:21:35'),
(825, 49, 1, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(826, 49, 2, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(827, 49, 4, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(828, 49, 5, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(829, 49, 6, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(830, 49, 8, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(831, 49, 12, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(832, 49, 13, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(833, 49, 16, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(834, 49, 18, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(835, 49, 7, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(836, 49, 10, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(837, 49, 11, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(838, 49, 15, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(839, 49, 17, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(840, 49, 9, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(841, 49, 14, '2024-05-13 09:25:35', '2024-05-13 09:25:35'),
(842, 50, 1, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(843, 50, 2, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(844, 50, 3, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(845, 50, 4, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(846, 50, 5, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(847, 50, 8, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(848, 50, 12, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(849, 50, 13, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(850, 50, 16, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(851, 50, 18, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(852, 50, 7, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(853, 50, 10, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(854, 50, 11, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(855, 50, 15, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(856, 50, 17, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(857, 50, 9, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(858, 50, 14, '2024-05-13 09:28:50', '2024-05-13 09:28:50'),
(859, 51, 1, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(860, 51, 2, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(861, 51, 4, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(862, 51, 5, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(863, 51, 6, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(864, 51, 8, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(865, 51, 12, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(866, 51, 13, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(867, 51, 16, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(868, 51, 18, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(869, 51, 7, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(870, 51, 10, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(871, 51, 11, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(872, 51, 15, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(873, 51, 17, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(874, 51, 9, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(875, 51, 14, '2024-05-13 09:31:22', '2024-05-13 09:31:22'),
(876, 52, 1, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(877, 52, 2, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(878, 52, 4, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(879, 52, 5, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(880, 52, 6, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(881, 52, 8, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(882, 52, 12, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(883, 52, 13, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(884, 52, 16, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(885, 52, 18, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(886, 52, 7, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(887, 52, 10, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(888, 52, 11, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(889, 52, 15, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(890, 52, 17, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(891, 52, 9, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(892, 52, 14, '2024-05-13 09:35:00', '2024-05-13 09:35:00'),
(893, 53, 1, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(894, 53, 2, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(895, 53, 3, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(896, 53, 4, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(897, 53, 5, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(898, 53, 8, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(899, 53, 12, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(900, 53, 13, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(901, 53, 16, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(902, 53, 18, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(903, 53, 7, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(904, 53, 10, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(905, 53, 11, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(906, 53, 15, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(907, 53, 17, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(908, 53, 9, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(909, 53, 14, '2024-05-13 09:37:05', '2024-05-13 09:37:05'),
(910, 54, 1, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(911, 54, 2, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(912, 54, 3, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(913, 54, 4, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(914, 54, 5, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(915, 54, 6, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(916, 54, 8, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(917, 54, 12, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(918, 54, 13, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(919, 54, 16, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(920, 54, 18, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(921, 54, 7, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(922, 54, 10, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(923, 54, 11, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(924, 54, 15, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(925, 54, 17, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(926, 54, 9, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(927, 54, 14, '2024-05-14 03:37:54', '2024-05-14 03:37:54'),
(928, 55, 1, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(929, 55, 2, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(930, 55, 4, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(931, 55, 5, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(932, 55, 6, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(933, 55, 8, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(934, 55, 12, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(935, 55, 13, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(936, 55, 16, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(937, 55, 18, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(938, 55, 7, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(939, 55, 10, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(940, 55, 11, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(941, 55, 15, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(942, 55, 17, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(943, 55, 9, '2024-05-14 03:48:45', '2024-05-14 03:48:45'),
(944, 55, 14, '2024-05-14 03:48:46', '2024-05-14 03:48:46'),
(945, 56, 1, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(946, 56, 2, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(947, 56, 4, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(948, 56, 5, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(949, 56, 6, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(950, 56, 8, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(951, 56, 12, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(952, 56, 13, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(953, 56, 16, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(954, 56, 18, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(955, 56, 7, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(956, 56, 10, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(957, 56, 11, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(958, 56, 15, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(959, 56, 17, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(960, 56, 9, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(961, 56, 14, '2024-05-14 03:51:08', '2024-05-14 03:51:08'),
(962, 57, 1, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(963, 57, 2, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(964, 57, 3, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(965, 57, 4, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(966, 57, 5, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(967, 57, 8, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(968, 57, 12, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(969, 57, 13, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(970, 57, 16, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(971, 57, 18, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(972, 57, 7, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(973, 57, 10, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(974, 57, 11, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(975, 57, 15, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(976, 57, 17, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(977, 57, 9, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(978, 57, 14, '2024-05-14 03:55:19', '2024-05-14 03:55:19'),
(979, 58, 1, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(980, 58, 2, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(981, 58, 4, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(982, 58, 5, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(983, 58, 6, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(984, 58, 8, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(985, 58, 12, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(986, 58, 13, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(987, 58, 16, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(988, 58, 18, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(989, 58, 7, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(990, 58, 10, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(991, 58, 11, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(992, 58, 15, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(993, 58, 17, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(994, 58, 9, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(995, 58, 14, '2024-05-14 03:57:49', '2024-05-14 03:57:49'),
(996, 59, 1, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(997, 59, 2, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(998, 59, 3, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(999, 59, 4, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1000, 59, 5, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1001, 59, 8, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1002, 59, 12, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1003, 59, 13, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1004, 59, 16, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1005, 59, 18, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1006, 59, 7, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1007, 59, 10, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1008, 59, 11, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1009, 59, 15, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1010, 59, 17, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1011, 59, 9, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1012, 59, 14, '2024-05-14 03:59:53', '2024-05-14 03:59:53'),
(1013, 60, 1, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1014, 60, 2, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1015, 60, 4, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1016, 60, 5, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1017, 60, 6, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1018, 60, 8, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1019, 60, 12, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1020, 60, 13, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1021, 60, 16, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1022, 60, 18, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1023, 60, 7, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1024, 60, 10, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1025, 60, 11, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1026, 60, 15, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1027, 60, 17, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1028, 60, 9, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1029, 60, 14, '2024-05-14 04:03:10', '2024-05-14 04:03:10'),
(1030, 61, 1, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1031, 61, 2, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1032, 61, 3, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1033, 61, 4, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1034, 61, 5, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1035, 61, 8, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1036, 61, 12, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1037, 61, 13, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1038, 61, 16, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1039, 61, 18, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1040, 61, 7, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1041, 61, 10, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1042, 61, 11, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1043, 61, 15, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1044, 61, 17, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1045, 61, 9, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1046, 61, 14, '2024-05-14 04:05:37', '2024-05-14 04:05:37'),
(1047, 62, 1, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1048, 62, 2, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1049, 62, 4, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1050, 62, 5, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1051, 62, 6, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1052, 62, 8, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1053, 62, 12, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1054, 62, 13, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1055, 62, 16, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1056, 62, 18, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1057, 62, 7, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1058, 62, 10, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1059, 62, 11, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1060, 62, 15, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1061, 62, 17, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1062, 62, 9, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1063, 62, 14, '2024-05-14 04:09:38', '2024-05-14 04:09:38'),
(1064, 63, 1, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1065, 63, 2, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1066, 63, 4, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1067, 63, 5, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1068, 63, 6, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1069, 63, 8, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1070, 63, 12, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1071, 63, 13, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1072, 63, 16, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1073, 63, 18, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1074, 63, 7, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1075, 63, 10, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1076, 63, 11, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1077, 63, 15, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1078, 63, 17, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1079, 63, 9, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1080, 63, 14, '2024-05-14 04:11:50', '2024-05-14 04:11:50'),
(1081, 64, 1, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1082, 64, 2, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1083, 64, 3, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1084, 64, 4, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1085, 64, 5, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1086, 64, 8, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1087, 64, 12, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1088, 64, 13, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1089, 64, 16, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1090, 64, 18, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1091, 64, 7, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1092, 64, 10, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1093, 64, 15, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1094, 64, 17, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1095, 64, 9, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1096, 64, 14, '2024-05-14 04:14:23', '2024-05-14 04:14:23'),
(1097, 65, 1, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1098, 65, 2, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1099, 65, 4, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1100, 65, 5, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1101, 65, 6, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1102, 65, 8, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1103, 65, 12, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1104, 65, 13, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1105, 65, 16, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1106, 65, 18, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1107, 65, 7, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1108, 65, 10, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1109, 65, 11, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1110, 65, 15, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1111, 65, 17, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1112, 65, 9, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1113, 65, 14, '2024-05-14 04:16:44', '2024-05-14 04:16:44'),
(1114, 66, 1, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1115, 66, 2, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1116, 66, 3, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1117, 66, 4, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1118, 66, 5, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1119, 66, 8, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1120, 66, 12, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1121, 66, 13, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1122, 66, 16, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1123, 66, 18, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1124, 66, 7, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1125, 66, 10, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1126, 66, 11, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1127, 66, 15, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1128, 66, 17, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1129, 66, 9, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1130, 66, 14, '2024-05-14 04:20:04', '2024-05-14 04:20:04'),
(1131, 67, 1, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1132, 67, 2, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1133, 67, 4, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1134, 67, 5, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1135, 67, 6, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1136, 67, 8, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1137, 67, 12, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1138, 67, 13, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1139, 67, 16, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1140, 67, 18, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1141, 67, 7, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1142, 67, 10, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1143, 67, 11, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1144, 67, 15, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1145, 67, 17, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1146, 67, 9, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1147, 67, 14, '2024-05-14 04:22:30', '2024-05-14 04:22:30'),
(1148, 68, 1, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1149, 68, 2, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1150, 68, 3, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1151, 68, 4, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1152, 68, 5, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1153, 68, 8, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1154, 68, 12, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1155, 68, 13, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1156, 68, 16, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1157, 68, 18, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1158, 68, 7, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1159, 68, 10, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1160, 68, 11, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1161, 68, 15, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1162, 68, 17, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1163, 68, 9, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1164, 68, 14, '2024-05-14 04:28:09', '2024-05-14 04:28:09'),
(1165, 69, 1, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1166, 69, 2, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1167, 69, 3, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1168, 69, 4, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1169, 69, 5, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1170, 69, 6, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1171, 69, 8, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1172, 69, 12, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1173, 69, 13, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1174, 69, 16, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1175, 69, 18, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1176, 69, 7, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1177, 69, 10, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1178, 69, 11, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1179, 69, 15, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1180, 69, 17, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1181, 69, 9, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1182, 69, 14, '2024-05-14 04:30:16', '2024-05-14 04:30:16'),
(1183, 70, 1, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1184, 70, 2, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1185, 70, 4, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1186, 70, 5, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1187, 70, 6, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1188, 70, 8, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1189, 70, 12, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1190, 70, 13, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1191, 70, 16, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1192, 70, 18, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1193, 70, 7, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1194, 70, 10, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1195, 70, 11, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1196, 70, 15, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1197, 70, 17, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1198, 70, 9, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1199, 70, 14, '2024-05-14 04:37:47', '2024-05-14 04:37:47'),
(1200, 71, 1, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1201, 71, 2, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1202, 71, 4, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1203, 71, 5, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1204, 71, 6, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1205, 71, 8, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1206, 71, 12, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1207, 71, 13, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1208, 71, 16, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1209, 71, 18, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1210, 71, 7, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1211, 71, 10, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1212, 71, 11, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1213, 71, 15, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1214, 71, 17, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1215, 71, 9, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1216, 71, 14, '2024-05-14 04:42:21', '2024-05-14 04:42:21'),
(1217, 72, 1, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1218, 72, 2, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1219, 72, 3, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1220, 72, 4, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1221, 72, 5, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1222, 72, 8, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1223, 72, 12, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1224, 72, 13, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1225, 72, 16, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1226, 72, 18, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1227, 72, 7, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1228, 72, 10, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1229, 72, 11, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1230, 72, 15, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1231, 72, 17, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1232, 72, 9, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1233, 72, 14, '2024-05-14 04:45:00', '2024-05-14 04:45:00'),
(1234, 73, 1, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1235, 73, 2, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1236, 73, 3, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1237, 73, 4, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1238, 73, 5, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1239, 73, 6, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1240, 73, 8, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1241, 73, 12, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1242, 73, 13, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1243, 73, 16, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1244, 73, 18, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1245, 73, 7, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1246, 73, 10, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1247, 73, 11, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1248, 73, 15, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1249, 73, 17, '2024-05-14 04:47:01', '2024-05-14 04:47:01');
INSERT INTO `kamar_kost_fasilitas` (`id`, `kamar_kost_id`, `fasilitas_id`, `created_at`, `updated_at`) VALUES
(1250, 73, 9, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1251, 73, 14, '2024-05-14 04:47:01', '2024-05-14 04:47:01'),
(1270, 75, 1, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1271, 75, 2, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1272, 75, 3, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1273, 75, 4, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1274, 75, 5, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1275, 75, 6, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1276, 75, 8, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1277, 75, 12, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1278, 75, 13, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1279, 75, 16, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1280, 75, 18, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1281, 75, 7, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1282, 75, 10, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1283, 75, 11, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1284, 75, 15, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1285, 75, 17, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1286, 75, 9, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1287, 75, 14, '2024-05-14 04:53:13', '2024-05-14 04:53:13'),
(1288, 74, 1, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1289, 74, 2, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1290, 74, 3, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1291, 74, 4, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1292, 74, 5, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1293, 74, 6, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1294, 74, 8, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1295, 74, 12, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1296, 74, 13, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1297, 74, 16, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1298, 74, 18, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1299, 74, 7, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1300, 74, 10, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1301, 74, 11, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1302, 74, 15, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1303, 74, 17, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1304, 74, 9, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1305, 74, 14, '2024-05-14 04:54:56', '2024-05-14 04:54:56'),
(1306, 76, 1, '2024-05-14 04:58:41', '2024-05-14 04:58:41'),
(1307, 76, 2, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1308, 76, 3, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1309, 76, 4, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1310, 76, 5, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1311, 76, 6, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1312, 76, 8, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1313, 76, 12, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1314, 76, 13, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1315, 76, 16, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1316, 76, 18, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1317, 76, 7, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1318, 76, 10, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1319, 76, 11, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1320, 76, 15, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1321, 76, 17, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1322, 76, 9, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1323, 76, 14, '2024-05-14 04:58:42', '2024-05-14 04:58:42'),
(1324, 77, 1, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1325, 77, 2, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1326, 77, 4, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1327, 77, 5, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1328, 77, 6, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1329, 77, 8, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1330, 77, 12, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1331, 77, 13, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1332, 77, 16, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1333, 77, 18, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1334, 77, 7, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1335, 77, 10, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1336, 77, 11, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1337, 77, 15, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1338, 77, 17, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1339, 77, 9, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1340, 77, 14, '2024-05-14 06:44:29', '2024-05-14 06:44:29'),
(1393, 19, 1, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1394, 19, 2, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1395, 19, 4, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1396, 19, 5, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1397, 19, 6, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1398, 19, 8, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1399, 19, 12, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1400, 19, 13, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1401, 19, 7, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1402, 19, 10, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1403, 19, 11, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1404, 19, 9, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1405, 19, 14, '2024-05-14 08:09:41', '2024-05-14 08:09:41'),
(1406, 20, 1, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1407, 20, 2, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1408, 20, 3, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1409, 20, 4, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1410, 20, 5, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1411, 20, 6, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1412, 20, 8, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1413, 20, 12, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1414, 20, 13, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1415, 20, 7, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1416, 20, 10, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1417, 20, 11, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1418, 20, 9, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1419, 20, 14, '2024-05-14 08:19:24', '2024-05-14 08:19:24'),
(1436, 78, 1, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1437, 78, 2, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1438, 78, 3, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1439, 78, 4, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1440, 78, 5, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1441, 78, 8, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1442, 78, 12, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1443, 78, 13, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1444, 78, 16, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1445, 78, 18, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1446, 78, 7, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1447, 78, 10, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1448, 78, 11, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1449, 78, 15, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1450, 78, 17, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1451, 78, 9, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1452, 78, 14, '2024-05-14 08:24:56', '2024-05-14 08:24:56'),
(1453, 79, 1, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1454, 79, 2, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1455, 79, 4, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1456, 79, 5, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1457, 79, 6, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1458, 79, 8, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1459, 79, 12, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1460, 79, 13, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1461, 79, 16, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1462, 79, 18, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1463, 79, 7, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1464, 79, 10, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1465, 79, 11, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1466, 79, 15, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1467, 79, 17, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1468, 79, 9, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1469, 79, 14, '2024-05-14 08:27:15', '2024-05-14 08:27:15'),
(1470, 80, 1, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1471, 80, 2, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1472, 80, 3, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1473, 80, 4, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1474, 80, 5, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1475, 80, 8, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1476, 80, 12, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1477, 80, 13, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1478, 80, 16, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1479, 80, 18, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1480, 80, 7, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1481, 80, 10, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1482, 80, 11, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1483, 80, 15, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1484, 80, 17, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1485, 80, 9, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1486, 80, 14, '2024-05-14 08:29:57', '2024-05-14 08:29:57'),
(1487, 81, 1, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1488, 81, 2, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1489, 81, 3, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1490, 81, 4, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1491, 81, 5, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1492, 81, 8, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1493, 81, 12, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1494, 81, 13, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1495, 81, 16, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1496, 81, 18, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1497, 81, 7, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1498, 81, 10, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1499, 81, 11, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1500, 81, 15, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1501, 81, 17, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1502, 81, 9, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1503, 81, 14, '2024-05-14 08:32:30', '2024-05-14 08:32:30'),
(1504, 82, 1, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1505, 82, 2, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1506, 82, 3, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1507, 82, 4, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1508, 82, 5, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1509, 82, 8, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1510, 82, 12, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1511, 82, 13, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1512, 82, 16, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1513, 82, 18, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1514, 82, 7, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1515, 82, 10, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1516, 82, 11, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1517, 82, 15, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1518, 82, 17, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1519, 82, 9, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1520, 82, 14, '2024-05-14 08:34:41', '2024-05-14 08:34:41'),
(1521, 83, 1, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1522, 83, 2, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1523, 83, 3, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1524, 83, 4, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1525, 83, 5, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1526, 83, 8, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1527, 83, 12, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1528, 83, 13, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1529, 83, 16, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1530, 83, 18, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1531, 83, 7, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1532, 83, 10, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1533, 83, 11, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1534, 83, 15, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1535, 83, 17, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1536, 83, 9, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1537, 83, 14, '2024-05-14 08:37:31', '2024-05-14 08:37:31'),
(1538, 84, 1, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1539, 84, 2, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1540, 84, 4, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1541, 84, 5, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1542, 84, 6, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1543, 84, 8, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1544, 84, 12, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1545, 84, 13, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1546, 84, 16, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1547, 84, 18, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1548, 84, 7, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1549, 84, 10, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1550, 84, 11, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1551, 84, 15, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1552, 84, 17, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1553, 84, 9, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1554, 84, 14, '2024-05-14 08:40:19', '2024-05-14 08:40:19'),
(1555, 85, 1, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1556, 85, 2, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1557, 85, 4, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1558, 85, 5, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1559, 85, 6, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1560, 85, 8, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1561, 85, 12, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1562, 85, 13, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1563, 85, 16, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1564, 85, 18, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1565, 85, 7, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1566, 85, 10, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1567, 85, 11, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1568, 85, 15, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1569, 85, 17, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1570, 85, 9, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1571, 85, 14, '2024-05-14 08:43:15', '2024-05-14 08:43:15'),
(1572, 86, 1, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1573, 86, 2, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1574, 86, 4, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1575, 86, 5, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1576, 86, 6, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1577, 86, 8, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1578, 86, 12, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1579, 86, 13, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1580, 86, 16, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1581, 86, 18, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1582, 86, 7, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1583, 86, 10, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1584, 86, 11, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1585, 86, 15, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1586, 86, 17, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1587, 86, 9, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1588, 86, 14, '2024-05-14 08:50:13', '2024-05-14 08:50:13'),
(1643, 1, 1, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1644, 1, 2, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1645, 1, 4, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1646, 1, 5, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1647, 1, 6, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1648, 1, 8, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1649, 1, 12, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1650, 1, 13, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1651, 1, 16, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1652, 1, 18, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1653, 1, 7, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1654, 1, 10, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1655, 1, 11, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1656, 1, 15, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1657, 1, 17, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1658, 1, 9, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1659, 1, 14, '2024-05-14 09:36:34', '2024-05-14 09:36:34'),
(1660, 2, 1, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1661, 2, 2, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1662, 2, 4, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1663, 2, 5, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1664, 2, 6, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1665, 2, 8, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1666, 2, 12, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1667, 2, 13, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1668, 2, 16, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1669, 2, 18, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1670, 2, 7, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1671, 2, 10, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1672, 2, 11, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1673, 2, 15, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1674, 2, 17, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1675, 2, 9, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1676, 2, 14, '2024-05-14 09:38:05', '2024-05-14 09:38:05'),
(1677, 3, 1, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1678, 3, 2, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1679, 3, 4, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1680, 3, 5, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1681, 3, 6, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1682, 3, 8, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1683, 3, 12, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1684, 3, 13, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1685, 3, 16, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1686, 3, 18, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1687, 3, 7, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1688, 3, 10, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1689, 3, 11, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1690, 3, 15, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1691, 3, 17, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1692, 3, 9, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1693, 3, 14, '2024-05-14 09:39:24', '2024-05-14 09:39:24'),
(1694, 4, 1, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1695, 4, 2, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1696, 4, 4, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1697, 4, 5, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1698, 4, 6, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1699, 4, 8, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1700, 4, 12, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1701, 4, 13, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1702, 4, 16, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1703, 4, 18, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1704, 4, 7, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1705, 4, 10, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1706, 4, 11, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1707, 4, 15, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1708, 4, 17, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1709, 4, 9, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1710, 4, 14, '2024-05-14 09:41:15', '2024-05-14 09:41:15'),
(1711, 5, 1, '2024-05-14 09:43:02', '2024-05-14 09:43:02'),
(1712, 5, 2, '2024-05-14 09:43:02', '2024-05-14 09:43:02'),
(1713, 5, 3, '2024-05-14 09:43:02', '2024-05-14 09:43:02'),
(1714, 5, 4, '2024-05-14 09:43:02', '2024-05-14 09:43:02'),
(1715, 5, 6, '2024-05-14 09:43:02', '2024-05-14 09:43:02'),
(1716, 5, 8, '2024-05-14 09:43:02', '2024-05-14 09:43:02'),
(1717, 5, 12, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1718, 5, 13, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1719, 5, 16, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1720, 5, 18, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1721, 5, 7, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1722, 5, 10, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1723, 5, 11, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1724, 5, 15, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1725, 5, 17, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1726, 5, 9, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1727, 5, 14, '2024-05-14 09:43:03', '2024-05-14 09:43:03'),
(1728, 6, 1, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1729, 6, 2, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1730, 6, 4, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1731, 6, 5, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1732, 6, 6, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1733, 6, 8, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1734, 6, 12, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1735, 6, 13, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1736, 6, 16, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1737, 6, 18, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1738, 6, 7, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1739, 6, 10, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1740, 6, 11, '2024-05-14 09:44:37', '2024-05-14 09:44:37'),
(1741, 6, 15, '2024-05-14 09:44:38', '2024-05-14 09:44:38'),
(1742, 6, 17, '2024-05-14 09:44:38', '2024-05-14 09:44:38'),
(1743, 6, 9, '2024-05-14 09:44:38', '2024-05-14 09:44:38'),
(1744, 6, 14, '2024-05-14 09:44:38', '2024-05-14 09:44:38'),
(1745, 7, 1, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1746, 7, 2, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1747, 7, 4, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1748, 7, 5, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1749, 7, 6, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1750, 7, 8, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1751, 7, 12, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1752, 7, 13, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1753, 7, 16, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1754, 7, 18, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1755, 7, 7, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1756, 7, 10, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1757, 7, 11, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1758, 7, 15, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1759, 7, 17, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1760, 7, 9, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1761, 7, 14, '2024-05-14 09:45:58', '2024-05-14 09:45:58'),
(1762, 8, 1, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1763, 8, 2, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1764, 8, 4, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1765, 8, 5, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1766, 8, 6, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1767, 8, 8, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1768, 8, 12, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1769, 8, 13, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1770, 8, 16, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1771, 8, 18, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1772, 8, 7, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1773, 8, 10, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1774, 8, 11, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1775, 8, 15, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1776, 8, 17, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1777, 8, 9, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1778, 8, 14, '2024-05-14 09:47:21', '2024-05-14 09:47:21'),
(1779, 9, 1, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1780, 9, 2, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1781, 9, 4, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1782, 9, 5, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1783, 9, 6, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1784, 9, 8, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1785, 9, 12, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1786, 9, 13, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1787, 9, 16, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1788, 9, 18, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1789, 9, 7, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1790, 9, 10, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1791, 9, 11, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1792, 9, 15, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1793, 9, 17, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1794, 9, 9, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1795, 9, 14, '2024-05-14 09:48:47', '2024-05-14 09:48:47'),
(1796, 10, 1, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1797, 10, 2, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1798, 10, 3, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1799, 10, 4, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1800, 10, 5, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1801, 10, 8, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1802, 10, 12, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1803, 10, 13, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1804, 10, 16, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1805, 10, 18, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1806, 10, 7, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1807, 10, 10, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1808, 10, 11, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1809, 10, 15, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1810, 10, 17, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1811, 10, 9, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1812, 10, 14, '2024-05-14 09:50:13', '2024-05-14 09:50:13'),
(1813, 11, 1, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1814, 11, 2, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1815, 11, 3, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1816, 11, 4, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1817, 11, 5, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1818, 11, 8, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1819, 11, 12, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1820, 11, 13, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1821, 11, 16, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1822, 11, 18, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1823, 11, 7, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1824, 11, 10, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1825, 11, 11, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1826, 11, 15, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1827, 11, 17, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1828, 11, 9, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1829, 11, 14, '2024-05-14 09:51:44', '2024-05-14 09:51:44'),
(1830, 12, 1, '2024-05-14 09:53:13', '2024-05-14 09:53:13'),
(1831, 12, 2, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1832, 12, 3, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1833, 12, 4, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1834, 12, 5, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1835, 12, 8, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1836, 12, 12, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1837, 12, 13, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1838, 12, 16, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1839, 12, 18, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1840, 12, 7, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1841, 12, 10, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1842, 12, 11, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1843, 12, 15, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1844, 12, 17, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1845, 12, 9, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1846, 12, 14, '2024-05-14 09:53:14', '2024-05-14 09:53:14'),
(1847, 13, 1, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1848, 13, 3, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1849, 13, 4, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1850, 13, 5, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1851, 13, 6, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1852, 13, 8, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1853, 13, 12, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1854, 13, 13, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1855, 13, 16, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1856, 13, 18, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1857, 13, 7, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1858, 13, 10, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1859, 13, 11, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1860, 13, 15, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1861, 13, 17, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1862, 13, 9, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1863, 13, 14, '2024-05-14 09:54:39', '2024-05-14 09:54:39'),
(1864, 14, 1, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1865, 14, 2, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1866, 14, 4, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1867, 14, 5, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1868, 14, 6, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1869, 14, 8, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1870, 14, 12, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1871, 14, 13, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1872, 14, 16, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1873, 14, 18, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1874, 14, 7, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1875, 14, 10, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1876, 14, 11, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1877, 14, 15, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1878, 14, 17, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1879, 14, 9, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1880, 14, 14, '2024-05-14 09:57:59', '2024-05-14 09:57:59'),
(1881, 15, 1, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1882, 15, 3, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1883, 15, 4, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1884, 15, 5, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1885, 15, 6, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1886, 15, 8, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1887, 15, 12, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1888, 15, 13, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1889, 15, 16, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1890, 15, 18, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1891, 15, 7, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1892, 15, 10, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1893, 15, 11, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1894, 15, 15, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1895, 15, 17, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1896, 15, 9, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1897, 15, 14, '2024-05-14 10:00:04', '2024-05-14 10:00:04'),
(1898, 16, 1, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1899, 16, 2, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1900, 16, 4, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1901, 16, 5, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1902, 16, 6, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1903, 16, 8, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1904, 16, 12, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1905, 16, 13, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1906, 16, 16, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1907, 16, 18, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1908, 16, 7, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1909, 16, 10, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1910, 16, 11, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1911, 16, 15, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1912, 16, 17, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1913, 16, 9, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1914, 16, 14, '2024-05-14 10:01:19', '2024-05-14 10:01:19'),
(1915, 17, 1, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1916, 17, 2, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1917, 17, 3, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1918, 17, 5, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1919, 17, 6, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1920, 17, 8, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1921, 17, 12, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1922, 17, 13, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1923, 17, 16, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1924, 17, 18, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1925, 17, 7, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1926, 17, 10, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1927, 17, 11, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1928, 17, 15, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1929, 17, 17, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1930, 17, 9, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1931, 17, 14, '2024-05-14 10:02:50', '2024-05-14 10:02:50'),
(1932, 18, 1, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1933, 18, 2, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1934, 18, 4, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1935, 18, 5, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1936, 18, 6, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1937, 18, 8, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1938, 18, 12, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1939, 18, 13, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1940, 18, 16, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1941, 18, 18, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1942, 18, 7, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1943, 18, 10, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1944, 18, 11, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1945, 18, 15, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1946, 18, 17, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1947, 18, 9, '2024-05-14 10:04:50', '2024-05-14 10:04:50'),
(1948, 18, 14, '2024-05-14 10:04:50', '2024-05-14 10:04:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `lokasi`, `created_at`, `updated_at`) VALUES
(1, 'Kost Putra', 'Kategori Kost', '2024-03-31 23:30:30', '2024-03-31 23:30:30'),
(2, 'Kost Putri', 'Kategori Kost', '2024-03-31 23:30:46', '2024-03-31 23:30:46'),
(3, 'Kost Karyawan', 'Kategori Kost', '2024-03-31 23:31:03', '2024-03-31 23:31:03'),
(4, 'Kost Pegawai', 'Kategori Kost', '2024-03-31 23:31:19', '2024-03-31 23:31:19'),
(5, 'Kost Mahasiswa', 'Kategori Kost', '2024-03-31 23:31:31', '2024-03-31 23:31:31');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kehilangan`
--

CREATE TABLE `kehilangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nomer_kamar` varchar(255) NOT NULL,
  `lokasi_hilang` varchar(255) NOT NULL,
  `barang_hilang` varchar(255) NOT NULL,
  `tanggal_hilang` varchar(255) NOT NULL,
  `jam_hilang` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `respon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kehilangan`
--

INSERT INTO `kehilangan` (`id`, `user_id`, `nomer_kamar`, `lokasi_hilang`, `barang_hilang`, `tanggal_hilang`, `jam_hilang`, `keterangan`, `status`, `respon`, `created_at`, `updated_at`) VALUES
(3, 7, '2', 'Di kamar', 'Jam Tangan', '2024-05-14', '11:28', 'Tolong', 'Menunggu Respon', NULL, '2024-05-13 04:28:19', '2024-05-13 04:28:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerusakan`
--

CREATE TABLE `kerusakan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `nomer_kamar` varchar(255) NOT NULL,
  `tanggal_lapor` varchar(255) NOT NULL,
  `barang_rusak` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `respon` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kerusakan`
--

INSERT INTO `kerusakan` (`id`, `user_id`, `nomer_kamar`, `tanggal_lapor`, `barang_rusak`, `keterangan`, `status`, `respon`, `created_at`, `updated_at`) VALUES
(5, 7, '2', '2024-05-14', 'AC Kamar', 'Tolong perbaiki segera', 'Menunggu Respon', NULL, '2024-05-13 04:28:58', '2024-05-13 04:28:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id`, `name`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$bV6ZjsSIqczpLsO5hm6yvO8hVk2tcWowMfoXJg3YA2gzK236Kv5xm', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_13_072444_create_roles_table', 1),
(8, '2024_03_20_072434_create_pemiliks_table', 1),
(9, '2024_03_20_073720_create_pembayarans_table', 1),
(10, '2024_03_21_040353_create_banners_table', 1),
(11, '2024_03_22_064047_create_penggunas_table', 1),
(12, '2024_03_26_044743_create_kategoris_table', 1),
(13, '2024_03_28_044658_create_penghunis_table', 1),
(19, '2024_03_19_040608_create_kamar_kosts_table', 4),
(20, '2024_04_05_055656_create_jamkamarkosts_table', 5),
(22, '2024_04_16_062612_create_favorits_table', 6),
(45, '2024_04_03_070722_create_fasilitas_table', 14),
(46, '2024_04_29_092602_create_kamar_kost_fasilitas_table', 15),
(54, '2024_03_20_071125_create_transaksis_table', 21),
(64, '2024_05_02_092402_create_gambar_kerusakans_table', 28),
(66, '2024_04_25_154341_create_kerusakans_table', 29),
(67, '2024_04_25_154906_create_kehilangans_table', 30),
(70, '2024_05_06_104546_create_gambar_kamar_kost_kamus_table', 31),
(72, '2024_05_13_130044_create_login_admins_table', 32);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pembayaran` varchar(255) NOT NULL,
  `logo_pembayaran` varchar(255) NOT NULL,
  `kategori_pembayaran` varchar(255) NOT NULL,
  `nomer_pembayaran` varchar(255) NOT NULL,
  `atasnama_pembayaran` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id`, `nama_pembayaran`, `logo_pembayaran`, `kategori_pembayaran`, `nomer_pembayaran`, `atasnama_pembayaran`, `created_at`, `updated_at`) VALUES
(1, 'Transfer Bank BRI', '1711960320.png', 'Transfer Bank', '234762426472', 'Rava', '2024-04-01 01:32:00', '2024-04-04 01:09:19'),
(2, 'Transfer Bank BCA', '1711960365.png', 'Transfer Bank', '246235482648', 'Felix', '2024-04-01 01:32:45', '2024-04-04 01:10:36'),
(3, 'Gopay', '1712114594.png', 'E-Wallet', '357349573847', 'Adrian', '2024-04-02 20:23:14', '2024-04-02 20:23:14'),
(4, 'Ovo', '1712210856.png', 'E-Wallet', '387593748537', 'Rava', '2024-04-03 23:07:36', '2024-04-03 23:07:36'),
(5, 'Dana', '1712210893.png', 'E-Wallet', '746846876378', 'Rava', '2024-04-03 23:08:13', '2024-04-03 23:08:13'),
(6, 'Shopee Pay', '1712210938.png', 'E-Wallet', '673485437683', 'Rava', '2024-04-03 23:08:58', '2024-04-03 23:08:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemilik`
--

CREATE TABLE `pemilik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_pemilik` varchar(255) NOT NULL,
  `nama_pemilik` varchar(255) NOT NULL,
  `email_pemilik` varchar(255) NOT NULL,
  `nomer_pemilik` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemilik`
--

INSERT INTO `pemilik` (`id`, `gambar_pemilik`, `nama_pemilik`, `email_pemilik`, `nomer_pemilik`, `created_at`, `updated_at`) VALUES
(1, '1713946068.png', 'Muhammad Riyadi Sitiaji', 'ryan@gmail.com', '082834294289', '2024-04-24 08:07:48', '2024-04-24 08:07:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_pengguna` varchar(255) NOT NULL,
  `nama_pengguna` varchar(255) NOT NULL,
  `email_pengguna` varchar(255) NOT NULL,
  `nomer_pengguna` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penghuni`
--

CREATE TABLE `penghuni` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar_penghuni` varchar(255) NOT NULL,
  `nama_penghuni` varchar(255) NOT NULL,
  `email_penghuni` varchar(255) NOT NULL,
  `nomer_penghuni` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2024-03-31 23:12:49', '2024-03-31 23:12:49'),
(2, 'pemilik-admin', '2024-03-31 23:12:49', '2024-03-31 23:12:49'),
(3, 'pemilik-kos', '2024-03-31 23:12:49', '2024-03-31 23:12:49'),
(4, 'user', '2024-03-31 23:12:49', '2024-03-31 23:12:49'),
(5, 'admin', '2024-04-03 00:47:54', '2024-04-03 00:47:54'),
(6, 'pemilik-admin', '2024-04-03 00:47:54', '2024-04-03 00:47:54'),
(7, 'pemilik-kos', '2024-04-03 00:47:54', '2024-04-03 00:47:54'),
(8, 'user', '2024-04-03 00:47:54', '2024-04-03 00:47:54'),
(9, 'admin', '2024-04-03 00:49:42', '2024-04-03 00:49:42'),
(10, 'pemilik-admin', '2024-04-03 00:49:42', '2024-04-03 00:49:42'),
(11, 'pemilik-kos', '2024-04-03 00:49:42', '2024-04-03 00:49:42'),
(12, 'user', '2024-04-03 00:49:42', '2024-04-03 00:49:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kamar_kost_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal_pesan_kost` varchar(255) NOT NULL,
  `tanggal_masuk_kost` varchar(255) NOT NULL,
  `pembayaran_dipilih` bigint(20) UNSIGNED NOT NULL,
  `total_harga` varchar(255) NOT NULL,
  `bukti_tf` varchar(255) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `tagihan_selanjutnya` varchar(255) NOT NULL,
  `durasi_ngekost` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `pesan` varchar(1500) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id`, `kamar_kost_id`, `user_id`, `tanggal_pesan_kost`, `tanggal_masuk_kost`, `pembayaran_dipilih`, `total_harga`, `bukti_tf`, `no_transaksi`, `tagihan_selanjutnya`, `durasi_ngekost`, `status`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '02 Mei 2024, 15:42 WIB', '14 Mei 2024, 09:00 WIB', 5, '2475000', '1714639359.jpg', 'SUB/001', '1.000.000', '5 Bulan 3 Hari', 'selesai', 'Kost Sudah Terbayar', '2024-05-02 08:42:39', '2024-05-02 08:43:04'),
(4, 26, 5, '08 Mei 2024, 16:19 WIB', '11 Mei 2024, 10:00 WIB', 4, '815000', '1715160016.jpg', 'SUB/002', '1.000.000', '5 Bulan 3 Hari', 'proses', 'Kost Sedang Diproses', '2024-05-08 09:20:17', '2024-05-08 09:20:17');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nomorhp` char(15) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `lokasi` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `gambar`, `name`, `email`, `nomorhp`, `email_verified_at`, `password`, `status`, `lokasi`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Ana Kuswandari S.IP', 'megantara.cakrawala@mansur.asia', '83438103723', NULL, '$2y$12$dqFM4Wya9jiW94EWODDTtu1QUmRVmIQwH/7IZTuZUGGzFSHKC0h3.', 'Pengguna', 'Ki. Babadak No. 245, Tasikmalaya 92224, Jambi', 1, NULL, '2024-03-31 23:12:58', '2024-03-31 23:12:58'),
(2, NULL, 'Kasim Mursinin Sinaga', 'mustika80@gmail.co.id', '84703808016', NULL, '$2y$12$dqFM4Wya9jiW94EWODDTtu1QUmRVmIQwH/7IZTuZUGGzFSHKC0h3.', 'Penghuni', 'Jr. Pacuan Kuda No. 107, Pangkal Pinang 85034, Bali', 3, NULL, '2024-03-31 23:12:58', '2024-03-31 23:12:58'),
(3, NULL, 'Cindy Dinda Pertiwi', 'salimah01@wibisono.tv', '89270129919', NULL, '$2y$12$dqFM4Wya9jiW94EWODDTtu1QUmRVmIQwH/7IZTuZUGGzFSHKC0h3.', 'Penghuni', 'Ki. Wahid Hasyim No. 752, Bandung 57655, Gorontalo', 2, NULL, '2024-03-31 23:12:58', '2024-03-31 23:12:58'),
(4, NULL, 'Prakosa Setiawan S.Gz', 'jlaksmiwati@megantara.biz', '86663809616', NULL, '$2y$12$dqFM4Wya9jiW94EWODDTtu1QUmRVmIQwH/7IZTuZUGGzFSHKC0h3.', 'Penghuni', 'Jr. Sentot Alibasa No. 318, Cimahi 50836, Jateng', 4, NULL, '2024-03-31 23:12:58', '2024-03-31 23:12:58'),
(5, '1712112123.jpg', 'Muhammad Adrian Kurniawan', 'adrian@gmail.com', '81546464955', NULL, '$2y$12$dqFM4Wya9jiW94EWODDTtu1QUmRVmIQwH/7IZTuZUGGzFSHKC0h3.', 'Penghuni', 'Jln. Ahmad Dahlan No. 534, Padang 42182, Kalbar', 4, NULL, '2024-03-31 23:12:58', '2024-04-26 07:31:17'),
(6, NULL, 'Admin', 'kemba.kusmawati@yahoo.com', '84105481201', NULL, '$2y$12$dqFM4Wya9jiW94EWODDTtu1QUmRVmIQwH/7IZTuZUGGzFSHKC0h3.', 'Admin', 'Gg. Achmad Yani No. 347, Probolinggo 16930, Sulut', 1, NULL, '2024-03-31 23:12:58', '2024-03-31 23:12:58'),
(7, '1715069283.jpg', 'Muhammad Ravanelo Akhtar', 'ravanelox741@gmail.com', '82332724688', NULL, '$2y$12$IG/PG5S9n98Vb7wSysrLsedUP4TgN5iRnzay8q/rWBtDnOgwg/RTC', 'Penghuni', 'Jln. Ketandan No. 791, Bengkulu 65509, NTT', 4, NULL, '2024-03-31 23:12:58', '2024-05-07 08:08:03'),
(8, NULL, 'Kasiyah Yessi Fujiati M.Farm', 'purwanti.raisa@gmail.co.id', '89255622685', NULL, '$2y$12$dqFM4Wya9jiW94EWODDTtu1QUmRVmIQwH/7IZTuZUGGzFSHKC0h3.', 'Penghuni', 'Jln. Bara No. 261, Bandung 55569, Sultra', 3, NULL, '2024-03-31 23:12:58', '2024-03-31 23:12:58'),
(9, NULL, 'Yance Gilda Winarsih', 'aurora.suartini@gmail.co.id', '85991804396', NULL, '$2y$12$dqFM4Wya9jiW94EWODDTtu1QUmRVmIQwH/7IZTuZUGGzFSHKC0h3.', 'Pengguna', 'Jln. Cikapayang No. 725, Subulussalam 80856, Gorontalo', 3, NULL, '2024-03-31 23:12:58', '2024-03-31 23:12:58'),
(10, '1715571840.jpg', 'Pemilik', 'pemilik@gmail.com', '082301923456', NULL, '$2y$12$5Toonvf71EJ.Zs2lbFR9qe5ufVl1RDymX.ylLCofcVe9xN3HttRCy', 'Pemilik', 'Jr. Merdeka No. 485, Makassar 73253, Babel', 3, NULL, '2024-03-31 23:12:58', '2024-05-13 03:44:00'),
(11, NULL, 'Bramahna', 'sakura25@mulyani.net', '81851571744', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Pengguna', 'Jr. Baik No. 79, Tarakan 33010, Lampung', 4, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(12, NULL, 'Viman Wacana M.Pd', 'halima11@gmail.co.id', '85604432128', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Penghuni', 'Kpg. Suryo No. 185, Binjai 79397, Papua', 2, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(13, NULL, 'Yuni Purwanti', 'husamah@nuraini.info', '84286175845', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Pengguna', 'Jr. Cihampelas No. 240, Pangkal Pinang 36858, Kalbar', 2, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(14, NULL, 'Sadina Halimah', 'devi39@nuraini.biz.id', '89532507606', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Pengguna', 'Kpg. Eka No. 318, Bekasi 18816, Sulsel', 3, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(15, NULL, 'Shakila Kuswandari', 'wacana.artanto@gmail.com', '88127278651', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Pengguna', 'Kpg. Ki Hajar Dewantara No. 566, Lubuklinggau 92957, DKI', 3, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(16, NULL, 'Juli Wulandari', 'darsirah.wijayanti@budiman.co.id', '87200755841', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Penghuni', 'Ki. Dago No. 692, Banjarbaru 73546, Babel', 4, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(17, NULL, 'Jasmani Habibi', 'harto56@prasetyo.web.id', '84600741445', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Pengguna', 'Kpg. Surapati No. 557, Parepare 82000, Bali', 4, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(18, NULL, 'Gandewa Latupono', 'hwinarsih@pranowo.go.id', '81218126273', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Pengguna', 'Ds. Pasirkoja No. 976, Cilegon 93465, Gorontalo', 2, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(19, NULL, 'Ivan Sihombing S.IP', 'myuliarti@suartini.in', '88233209708', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Pengguna', 'Kpg. Samanhudi No. 102, Pematangsiantar 15084, Lampung', 1, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(20, NULL, 'Nilam Anggraini', 'mursita.mandasari@kusumo.id', '86833808210', NULL, '$2y$12$vSsru6pO68YRnusaLcxxfe1ybgMRJ5T0bRDaq3WtDALDkTSWB4F1.', 'Pengguna', 'Dk. Cokroaminoto No. 390, Gorontalo 56175, Pabar', 3, NULL, '2024-04-03 00:48:00', '2024-04-03 00:48:00'),
(22, NULL, 'Kacung Bakiman Siregar S.Gz', 'hastuti.padma@gunarto.my.id', '86431549349', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Penghuni', 'Ki. Ters. Buah Batu No. 24, Prabumulih 86873, Kaltim', 1, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(23, NULL, 'Bahuwarna Januar', 'patricia53@pratiwi.id', '88822238786', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Penghuni', 'Dk. Agus Salim No. 179, Malang 21965, Sulteng', 1, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(24, NULL, 'Yessi Ajeng Lailasari S.I.Kom', 'melinda78@wulandari.biz', '84590727995', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Pengguna', 'Jr. Sutoyo No. 891, Palembang 65500, Bengkulu', 3, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(25, NULL, 'Nyana Kuswoyo', 'vwulandari@gmail.co.id', '88342714277', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Pengguna', 'Dk. Hang No. 645, Jambi 29354, Kalbar', 4, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(26, NULL, 'Lembah Prasetyo Anggriawan', 'yusuf66@hasanah.web.id', '86741021755', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Pengguna', 'Jln. Gatot Subroto No. 616, Pematangsiantar 49334, Sulsel', 4, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(27, NULL, 'Siska Haryanti S.E.', 'fitriani.iswahyudi@gmail.co.id', '89956893449', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Pengguna', 'Ds. Baja Raya No. 815, Tasikmalaya 97665, Bengkulu', 1, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(28, NULL, 'Ira Suryatmi', 'halimah.titin@halim.mil.id', '86721455326', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Pengguna', 'Gg. Baha No. 295, Tangerang 21722, Jatim', 3, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(29, NULL, 'Carla Puspasari', 'setiawan.janet@sihotang.biz.id', '84815109196', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Penghuni', 'Jln. Achmad Yani No. 309, Singkawang 91707, Sulbar', 1, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(30, NULL, 'Irma Agustina', 'muhammad.hariyah@yahoo.com', '81869835741', NULL, '$2y$12$Uv5jaCYWWvntl8Bckuuj9ObamcgyGep5A6Es.RsyoCPovxMCIVfom', 'Penghuni', 'Ds. Bakau No. 947, Subulussalam 39570, Gorontalo', 2, NULL, '2024-04-03 00:49:45', '2024-04-03 00:49:45'),
(31, NULL, 'Tiara Al Anwar', 'tiara@gmail.com', '082301923690', NULL, '$2y$12$bRN6GVxk72259xeso.qzGO7sDfvzhkZId7po7EApyAYIALUvP8PcO', 'Pengguna', 'tidak ada', 4, NULL, '2024-05-03 08:13:24', '2024-05-03 08:13:24'),
(32, '1715160191.png', 'Felix', 'felix@gmail.com', '082301923486', NULL, '$2y$12$W8jQbQh46EWW5unfnFSgCOqOmKcf.aR34YMJrYSJuynFHuqy6dMV.', 'Pengguna', 'tidak ada', 4, NULL, '2024-05-08 09:22:19', '2024-05-08 09:23:11'),
(33, NULL, 'Totti', 'totti@gmail.com', '082301923473', NULL, '$2y$12$n9i1lDYh.diMTdKaiBsf8updntTaLSKk8tT581khQk8VlXhFI5fOS', 'Pengguna', 'tidak ada', 4, NULL, '2024-05-13 04:08:00', '2024-05-13 04:08:00');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `favorit`
--
ALTER TABLE `favorit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar_kamar_kost_kamu`
--
ALTER TABLE `gambar_kamar_kost_kamu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gambar_kerusakan`
--
ALTER TABLE `gambar_kerusakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jamkamarkost`
--
ALTER TABLE `jamkamarkost`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamarkost`
--
ALTER TABLE `kamarkost`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kamar_kost_fasilitas`
--
ALTER TABLE `kamar_kost_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kehilangan`
--
ALTER TABLE `kehilangan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
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
-- AUTO_INCREMENT untuk tabel `banner`
--
ALTER TABLE `banner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `favorit`
--
ALTER TABLE `favorit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `gambar_kamar_kost_kamu`
--
ALTER TABLE `gambar_kamar_kost_kamu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `gambar_kerusakan`
--
ALTER TABLE `gambar_kerusakan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `jamkamarkost`
--
ALTER TABLE `jamkamarkost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `kamarkost`
--
ALTER TABLE `kamarkost`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT untuk tabel `kamar_kost_fasilitas`
--
ALTER TABLE `kamar_kost_fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1949;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `kehilangan`
--
ALTER TABLE `kehilangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kerusakan`
--
ALTER TABLE `kerusakan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `pemilik`
--
ALTER TABLE `pemilik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `penghuni`
--
ALTER TABLE `penghuni`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
