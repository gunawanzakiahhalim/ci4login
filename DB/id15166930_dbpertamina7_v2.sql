-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 09, 2021 at 12:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id15166930_dbpertamina7`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Site Administrator'),
(2, 'user ', 'Regular User');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-07 22:41:01', 1),
(2, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-07 22:58:36', 1),
(3, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-08 00:29:42', 1),
(4, '::1', 'pcc135@pertamina.com', 2, '2021-03-08 00:36:59', 1),
(5, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-08 00:45:45', 1),
(6, '::1', 'pcc135@pertamina.com', 2, '2021-03-08 00:46:24', 1),
(7, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-08 00:56:51', 1),
(8, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-08 22:41:21', 1),
(9, '::1', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-09 00:05:14', 1),
(10, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 00:18:40', 1),
(11, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 00:21:17', 1),
(12, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 00:22:19', 1),
(13, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 00:46:42', 1),
(14, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 00:59:15', 1),
(15, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 01:30:22', 1),
(16, '36.72.54.222', 'pcc135@pertamina.com', 2, '2021-03-09 02:05:02', 1),
(17, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 02:21:39', 1),
(18, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 02:33:39', 1),
(19, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 02:38:12', 1),
(20, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 02:41:43', 1),
(21, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 02:41:58', 1),
(22, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 02:47:47', 1),
(23, '116.206.15.30', 'pcc135@pertamina.com', 2, '2021-03-09 03:11:26', 1),
(24, '114.122.73.20', 'pcc135@pertamina.com', 2, '2021-03-09 03:14:04', 1),
(25, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 03:18:45', 1),
(26, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 03:28:02', 1),
(27, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 03:33:37', 1),
(28, '222.124.159.12', 'pcc135@pertamina.com', 2, '2021-03-09 03:59:36', 1),
(29, '36.94.105.194', 'gunawanzakiahhalim@gmail.com', 1, '2021-03-09 04:02:20', 1),
(30, '36.72.54.222', 'pcc135@pertamina.com', 2, '2021-03-09 05:02:43', 1),
(31, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 05:06:06', 1),
(32, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 05:12:32', 1),
(33, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 05:35:45', 1),
(34, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 05:38:34', 1),
(35, '36.94.105.194', 'pcc135@pertamina.com', 2, '2021-03-09 06:17:09', 1),
(36, '116.206.14.50', 'pcc135@pertamina.com', 2, '2021-03-09 06:20:49', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage user\'s profile');

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) UNSIGNED NOT NULL,
  `judul` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_menu` varchar(255) NOT NULL,
  `subcategory1` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `slug`, `id_menu`, `subcategory1`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Poin sudah berkurang voucher/merchandise belum didapatkan', 'poin-sudah-berkurang-vouchermerchandise-belum-didapatkan', 'Menu_C_P30', 'MyPertamina', '1609836681_ba7bd6b7ff422b126041.jpg', '2020-12-21 20:55:30', '2021-01-14 02:56:05'),
(2, 'Syarat dan Ketentuan RFID', 'syarat-dan-ketentuan-rfid', 'Menu_A_P65', 'Layanan BBM', '1613643960_7bdf20c329bbdc65e256.jpeg', '2021-02-18 04:26:00', '2021-02-18 04:28:26'),
(3, 'Kerjasama Untuk Promosi', 'kerjasama-untuk-promosi', 'Menu_A_P26', 'Layanan BBM', '1614691298_246368abde6a96d5b472.jpg', '2021-03-02 07:21:38', '2021-03-02 07:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1615174374, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pansol`
--

CREATE TABLE `pansol` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_menu` varchar(100) NOT NULL,
  `sla` varchar(100) NOT NULL,
  `subcategory1` varchar(100) NOT NULL,
  `subcategory2` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pansol`
--

INSERT INTO `pansol` (`id`, `judul`, `slug`, `id_menu`, `sla`, `subcategory1`, `subcategory2`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Antrian Pengisian BBM di SPBU', 'antrian-pengisian-bbm-di-spbu', 'Menu_A_P1', '3x24 Jam', 'Layanan BBM', '', 'active', '2021-01-06 20:50:53', '2021-02-10 02:22:19'),
(2, 'Aturan Pengisian BBM untuk Pelayanan Umum, Usaha Mikro, Pertanian dan Perikanan', 'aturan-pengisian-bbm-untuk-pelayanan-umum-usaha-mikro-pertanian-dan-perikanan', 'Menu_A_P2', '1x24 Jam', 'Layanan BBM', '', 'active', '2021-01-06 21:08:01', '2021-02-10 02:23:19'),
(3, 'BBM Kaleng', 'bbm-kaleng', 'Menu_A_P3', '1x24 Jam', 'Layanan BBM', '', 'active', '2021-01-06 21:34:07', '2021-02-10 02:37:20'),
(4, 'Cara menjadi Mitra/Vendor Pertamina', 'cara-menjadi-mitravendor-pertamina', 'Menu_A_P4', '', 'Layanan BBM', '', 'active', '2021-01-06 21:48:05', '2021-01-06 21:48:05'),
(5, 'Card RFID tidak bisa digunakan untuk pembayaran di SPBU COCO', 'card-rfid-tidak-bisa-digunakan-untuk-pembayaran-di-spbu-coco', 'Menu_A_P5', '', 'Layanan BBM', '', 'active', '2021-01-06 21:51:25', '2021-01-06 21:51:25'),
(6, 'Delivery BBM', 'delivery-bbm', 'Menu_A_P6', '', 'Layanan BBM', '', 'active', '2021-01-06 21:53:41', '2021-01-06 21:53:41'),
(7, 'Delivery BBM - Cancel Order', 'delivery-bbm-cancel-order', 'Menu_A_P7', '', 'Layanan BBM', '', 'active', '2021-01-06 21:56:53', '2021-01-06 21:56:53'),
(8, 'Delivery BBM - Namun Diluar Area', 'delivery-bbm-namun-diluar-area', 'Menu_A_P8', '', 'Layanan BBM', '', 'active', '2021-01-06 22:01:52', '2021-01-06 22:01:52'),
(9, 'Delivery BBM (Program PDS)', 'delivery-bbm-program-pds', 'Menu_A_P9', '', 'Layanan BBM', '', 'active', '2021-01-06 22:06:32', '2021-01-06 22:06:32'),
(10, 'Double payment transaksi via Bank', 'double-payment-transaksi-via-bank', 'Menu_A_P10', '', 'Layanan BBM', '', 'active', '2021-01-06 22:09:05', '2021-01-06 22:09:05'),
(11, 'Fasilitas SPBU (Toilet, Mesin EDC, dll)', 'fasilitas-spbu-toilet-mesin-edc-dll', 'Menu_A_P11', '', 'Layanan BBM', '', 'active', '2021-01-06 22:11:41', '2021-01-06 22:11:41'),
(12, 'Harga BBM di SPBU belum Update', 'harga-bbm-di-spbu-belum-update', 'Menu_A_P12', '', 'Layanan BBM', '', 'active', '2021-01-06 22:15:57', '2021-01-06 22:15:57'),
(13, 'Indikasi Kecurangan SPBU', 'indikasi-kecurangan-spbu', 'Menu_A_P13', '', 'Layanan BBM', '', 'active', '2021-01-06 22:19:08', '2021-01-06 22:19:08'),
(14, 'Informasi Harga BBM', 'informasi-harga-bbm', 'Menu_A_P14', '', 'Layanan BBM', '', 'active', '2021-01-06 22:23:34', '2021-01-06 22:23:34'),
(15, 'Informasi Kebijakan SPBU', 'informasi-kebijakan-spbu', 'Menu_A_P15', '', 'Layanan BBM', '', 'active', '2021-01-06 22:29:29', '2021-01-06 22:29:29'),
(16, 'Informasi pembelian BBM subsidi', 'informasi-pembelian-bbm-subsidi', 'Menu_A_P16', '', 'Layanan BBM', '', 'active', '2021-01-06 22:31:56', '2021-01-06 22:31:56'),
(17, 'Informasi Stok BBM', 'informasi-stok-bbm', 'Menu_H_P2', '12 Jam', 'SPBU & Fuel Product', 'Dealership/Kemitraan', 'active', '2021-01-06 22:35:55', '2021-03-05 08:20:56'),
(18, 'Jam Layanan SPBU', 'jam-layanan-spbu', 'Menu_A_P18', '', 'Layanan BBM', '', 'active', '2021-01-06 22:38:53', '2021-01-06 22:38:53'),
(19, 'Kebijakan Pembayaran di SPBU', 'kebijakan-pembayaran-di-spbu', 'Menu_A_P19', '', 'Layanan BBM', '', 'active', '2021-01-06 22:43:39', '2021-01-06 22:43:39'),
(20, 'Kelangkaan BBM', 'kelangkaan-bbm', 'Menu_A_P20', '', 'Layanan BBM', '', 'active', '2021-01-06 22:45:36', '2021-01-06 22:45:36'),
(21, 'Keluhan Biaya Tambahan Pembelian BBM dengan Kartu Kredit', 'keluhan-biaya-tambahan-pembelian-bbm-dengan-kartu-kredit', 'Menu_A_P21', '', 'Layanan BBM', '', 'active', '2021-01-06 22:50:01', '2021-01-06 22:50:01'),
(22, 'Keluhan kualitas BBM', 'keluhan-kualitas-bbm', 'Menu_A_P22', '', 'Layanan BBM', '', 'active', '2021-01-07 00:16:19', '2021-01-07 00:16:19'),
(23, 'Keluhan Mobil Tangki (MT) Pertamina', 'keluhan-mobil-tangki-mt-pertamina', 'Menu_A_P23', '', 'Layanan BBM', '', 'active', '2021-01-07 00:18:33', '2021-01-07 00:18:33'),
(24, 'Kenaikan Harga BBM', 'kenaikan-harga-bbm', 'Menu_A_P24', '', 'Layanan BBM', '', 'active', '2021-01-07 00:21:04', '2021-01-07 00:21:04'),
(25, 'Kerjasama Pengadaan Voucher BBM', 'kerjasama-pengadaan-voucher-bbm', 'Menu_A_P25', '', 'Layanan BBM', '', 'active', '2021-01-07 00:24:40', '2021-01-07 00:24:40'),
(26, 'Kerjasama Untuk Promosi', 'kerjasama-untuk-promosi', 'Menu_A_P26', '1x24 Jam', 'Layanan BBM', '', 'active', '2021-01-07 00:26:33', '2021-03-02 07:04:10'),
(27, 'Keterlambatan Pengiriman Stock', 'keterlambatan-pengiriman-stock', 'Menu_A_P27', '', 'Layanan BBM', '', 'active', '2021-01-07 00:28:26', '2021-01-07 00:28:26'),
(28, 'Keunggulan Produk BBM Pertamina', 'keunggulan-produk-bbm-pertamina', 'Menu_A_P28', '', 'Layanan BBM', '', 'active', '2021-01-07 00:31:13', '2021-01-07 00:31:13'),
(29, 'Knowledge Petugas SPBU', 'knowledge-petugas-spbu', 'Menu_A_P29', '', 'Layanan BBM', '', 'active', '2021-01-07 00:33:50', '2021-01-07 00:33:50'),
(30, 'Kualitas atau Standar Struk', 'kualitas-atau-standar-struk', 'Menu_A_P30', '', 'Layanan BBM', '', 'active', '2021-01-07 00:37:25', '2021-01-07 00:37:25'),
(31, 'Laporan Stock BBM', 'laporan-stock-bbm', 'Menu_A_P31', '', 'Layanan BBM', '', 'active', '2021-01-07 00:39:19', '2021-01-07 00:39:19'),
(32, 'List SPBU BBM Kemasan/PDS', 'list-spbu-bbm-kemasanpds', 'Menu_A_P32', '', 'Layanan BBM', '', 'active', '2021-01-07 00:43:57', '2021-01-07 00:43:57'),
(33, 'Lokasi SPBU COCO Terdekat', 'lokasi-spbu-coco-terdekat', 'Menu_A_P33', '', 'Layanan BBM', '', 'active', '2021-01-07 00:48:03', '2021-01-07 00:48:03'),
(34, 'Lokasi SPBU dan Jenis Produk yang dijual', 'lokasi-spbu-dan-jenis-produk-yang-dijual', 'Menu_A_P34', '', 'Layanan BBM', '', 'active', '2021-01-07 00:51:15', '2021-01-07 00:51:15'),
(35, 'Lokasi SPBU Terdekat', 'lokasi-spbu-terdekat', 'Menu_A_P35', '', 'Layanan BBM', '', 'active', '2021-01-07 00:53:33', '2021-01-07 00:53:33'),
(36, 'Lokasi SPBU yang menyediakan produk non BBM', 'lokasi-spbu-yang-menyediakan-produk-non-bbm', 'Menu_A_P36', '', 'Layanan BBM', '', 'active', '2021-01-07 00:55:40', '2021-01-07 00:55:40'),
(37, 'Masukan agar Pertamina lebih gencar untuk menggunakan BBM non subsidi', 'masukan-agar-pertamina-lebih-gencar-untuk-menggunakan-bbm-non-subsidi', 'Menu_A_P37', '', 'Layanan BBM', '', 'active', '2021-01-07 01:03:11', '2021-01-07 01:03:11'),
(38, 'Menanyakan Penurunan status SPBU Pasti Pas', 'menanyakan-penurunan-status-spbu-pasti-pas', 'Menu_A_P38', '', 'Layanan BBM', '', 'active', '2021-01-07 01:08:56', '2021-01-07 01:08:56'),
(39, 'Mendahulukan Pengisian Jeriken', 'mendahulukan-pengisian-jeriken', 'Menu_H_P1', '3x24 Jam', 'SPBU & Fuel Product', 'Antrian Pengisian BBM di SPBU', 'active', '2021-01-07 01:11:03', '2021-03-05 08:18:25'),
(40, 'MSDS Produk BBM', 'msds-produk-bbm', 'Menu_A_P40', '', 'Layanan BBM', '', 'active', '2021-01-07 01:12:46', '2021-01-07 01:12:46'),
(41, 'Pelayanan Petugas SPBU', 'pelayanan-petugas-spbu', 'Menu_A_P41', '', 'Layanan BBM', '', 'active', '2021-01-07 01:14:31', '2021-01-07 01:14:31'),
(42, 'Pembatasan Pembelian BBM (Non subsidi)', 'pembatasan-pembelian-bbm-non-subsidi', 'Menu_A_P42', '', 'Layanan BBM', '', 'active', '2021-01-07 01:17:15', '2021-01-07 01:17:15'),
(43, 'Pembatasan Pembelian BBM Subsidi', 'pembatasan-pembelian-bbm-subsidi', 'Menu_A_P43', '', 'Layanan BBM', '', 'active', '2021-01-07 01:20:09', '2021-01-07 01:20:09'),
(44, 'Pengaturan Antrian di SPBU', 'pengaturan-antrian-di-spbu', 'Menu_A_P44', '', 'Layanan BBM', '', 'active', '2021-01-07 01:22:11', '2021-01-07 01:22:11'),
(45, 'Penggunaan Kelengkapan operator SPBU', 'penggunaan-kelengkapan-operator-spbu', 'Menu_A_P45', '', 'Layanan BBM', '', 'active', '2021-01-07 01:24:50', '2021-01-07 01:24:50'),
(46, 'Pengiriman Stock', 'pengiriman-stock', 'Menu_A_P46', '', 'Layanan BBM', '', 'active', '2021-01-07 01:26:40', '2021-01-07 01:26:40'),
(47, 'Pengisian BBM Luber', 'pengisian-bbm-luber', 'Menu_A_P47', '', 'Layanan BBM', '', 'active', '2021-01-07 01:28:41', '2021-01-07 01:28:41'),
(48, 'Penyalahgunaan BBM Subsidi', 'penyalahgunaan-bbm-subsidi', 'Menu_A_P48', '', 'Layanan BBM', '', 'active', '2021-01-07 01:33:43', '2021-01-07 01:33:43'),
(49, 'Permintaan data realisasi/penjualan BBM', 'permintaan-data-realisasipenjualan-bbm', 'Menu_A_P49', '', 'Layanan BBM', '', 'active', '2021-01-07 01:35:06', '2021-01-07 01:35:06'),
(50, 'Permohonan RFID', 'permohonan-rfid', 'Menu_A_P50', '', 'Layanan BBM', '', 'active', '2021-01-07 01:36:29', '2021-01-07 01:36:29'),
(51, 'Personil SPBU merokok atau menelepon', 'personil-spbu-merokok-atau-menelepon', 'Menu_A_P51', '', 'Layanan BBM', '', 'active', '2021-01-07 01:38:27', '2021-01-07 01:38:27'),
(52, 'Pertamina Lebih Gencar BBM Non Subsidi', 'pertamina-lebih-gencar-bbm-non-subsidi', 'Menu_A_P52', '', 'Layanan BBM', '', 'active', '2021-01-07 01:40:12', '2021-01-07 01:40:12'),
(53, 'Pertamini', 'pertamini', 'Menu_A_P53', '', 'Layanan BBM', '', 'active', '2021-01-07 01:41:00', '2021-01-07 01:41:00'),
(54, 'Pertashop', 'pertashop', 'Menu_A_P54', '', 'Layanan BBM', '', 'active', '2021-01-07 01:42:15', '2021-01-07 01:42:15'),
(55, 'Petugas Tidak Ramah', 'petugas-tidak-ramah', 'Menu_A_P55', '', 'Layanan BBM', '', 'active', '2021-01-07 01:43:48', '2021-01-07 01:43:48'),
(56, 'Petugas Tidak Teliti', 'petugas-tidak-teliti', 'Menu_A_P56', '', 'Layanan BBM', '', 'active', '2021-01-07 01:46:24', '2021-01-07 01:46:24'),
(57, 'PIC / Alamat / Telepon SPBU', 'pic-alamat-telepon-spbu', 'Menu_A_P57', '', 'Layanan BBM', '', 'active', '2021-01-07 01:48:03', '2021-01-07 01:48:03'),
(58, 'Produk yang diterima tidak sesuai', 'produk-yang-diterima-tidak-sesuai', 'Menu_A_P58', '', 'Layanan BBM', '', 'active', '2021-01-07 01:48:54', '2021-01-07 01:48:54'),
(59, 'Promo di SPBU COCO', 'promo-di-spbu-coco', 'Menu_A_P59', '', 'Layanan BBM', '', 'active', '2021-01-07 01:50:53', '2021-01-07 01:50:53'),
(60, 'Promo SPBU', 'promo-spbu', 'Menu_A_P60', '', 'Layanan BBM', '', 'active', '2021-01-07 01:51:47', '2021-01-07 01:51:47'),
(61, 'Prosedur menjadi mitra (SPBU, APMS atau lembaga penyalur lainnya)', 'prosedur-menjadi-mitra-spbu-apms-atau-lembaga-penyalur-lainnya', 'Menu_A_P61', '', 'Layanan BBM', '', 'active', '2021-01-07 01:54:00', '2021-01-07 01:54:00'),
(62, 'SPBU menyediakan uang kembalian recehan logam', 'spbu-menyediakan-uang-kembalian-recehan-logam', 'Menu_A_P62', '', 'Layanan BBM', '', 'active', '2021-01-07 01:56:12', '2021-01-07 01:56:12'),
(63, 'Spesifikasi Produk BBM', 'spesifikasi-produk-bbm', 'Menu_A_P63', '', 'Layanan BBM', '', 'active', '2021-01-07 01:57:28', '2021-01-07 01:57:28'),
(64, 'Struk Tidak Tersedia', 'struk-tidak-tersedia', 'Menu_A_P64', '', 'Layanan BBM', '', 'active', '2021-01-07 01:58:29', '2021-01-07 01:58:29'),
(65, 'Syarat dan Ketentuan RFID', 'syarat-dan-ketentuan-rfid', 'Menu_A_P65', '', 'Layanan BBM', '', 'active', '2021-01-07 02:02:31', '2021-01-07 02:02:31'),
(66, 'Tagihan Tidak Sesuai Mesin Pengisian', 'tagihan-tidak-sesuai-mesin-pengisian', 'Menu_A_P66', '', 'Layanan BBM', '', 'active', '2021-01-07 02:04:44', '2021-01-07 02:04:44'),
(67, 'Takaran Tidak Sesuai', 'takaran-tidak-sesuai', 'Menu_A_P67', '', 'Layanan BBM', '', 'active', '2021-01-07 02:05:27', '2021-01-07 02:05:27'),
(68, 'Uang Kembalian', 'uang-kembalian', 'Menu_A_P68', '', 'Layanan BBM', '', 'active', '2021-01-07 02:06:40', '2021-01-07 02:06:40'),
(69, 'Agen/Pangkalan LPG Membanting Tabung', 'agenpangkalan-lpg-membanting-tabung', 'Menu_B_P1', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:06:36', '2021-01-10 19:06:36'),
(70, 'Antrian Pembelian', 'antrian-pembelian', 'Menu_B_P2', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:12:18', '2021-01-10 19:12:18'),
(71, 'Belum mendapatkan Paket konversi', 'belum-mendapatkan-paket-konversi', 'Menu_B_P3', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:25:39', '2021-01-10 19:25:39'),
(72, 'Bentuk valve LPG diubah menjadi seperti Produk Blue Gas krn dirasa lebih aman', 'bentuk-valve-lpg-diubah-menjadi-seperti-produk-blue-gas-krn-dirasa-lebih-aman', 'Menu_B_P4', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:32:16', '2021-01-10 19:32:16'),
(73, 'Cara Penanganan Kebocoran LPG', 'cara-penanganan-kebocoran-lpg', 'Menu_B_P5', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:38:30', '2021-01-10 19:38:30'),
(74, 'Dealership/ Stok LPG', 'dealership-stok-lpg', 'Menu_B_P6', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:44:34', '2021-01-10 19:44:34'),
(75, 'Delivery LPG - Cancel Order', 'delivery-lpg-cancel-order', 'Menu_B_P7', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:52:28', '2021-01-10 19:52:28'),
(76, 'Delivery LPG - Namun Diluar Area', 'delivery-lpg-namun-diluar-area', 'Menu_B_P8', '', 'Layanan Domgas', '', 'active', '2021-01-10 19:58:06', '2021-01-10 19:58:06'),
(77, 'Delivery Promo Domestic Gas', 'delivery-promo-domestic-gas', 'Menu_B_P9', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:05:23', '2021-01-10 20:05:23'),
(78, 'Dugaan Lokasi Oplos LPG', 'dugaan-lokasi-oplos-lpg', 'Menu_B_P10', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:11:01', '2021-01-10 20:11:01'),
(79, 'Harga LPG belum terupdate pada barcode', 'harga-lpg-belum-terupdate-pada-barcode', 'Menu_B_P11', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:17:43', '2021-01-10 20:17:43'),
(80, 'Indikasi Kecurangan LPG', 'indikasi-kecurangan-lpg', 'Menu_B_P12', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:27:48', '2021-01-10 20:27:48'),
(81, 'Indikasi penyalahgunaan LPG di SPBU/Bright store', 'indikasi-penyalahgunaan-lpg-di-spbubright-store', 'Menu_B_P13', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:38:04', '2021-01-10 20:38:04'),
(82, 'Kebocoran LPG', 'kebocoran-lpg', 'Menu_B_P14', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:44:55', '2021-01-10 20:44:55'),
(83, 'Kelangkaan Domgas', 'kelangkaan-domgas', 'Menu_B_P15', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:52:20', '2021-01-10 20:52:20'),
(84, 'Kelangkaan LPG', 'kelangkaan-lpg', 'Menu_B_P16', '', 'Layanan Domgas', '', 'active', '2021-01-10 20:56:24', '2021-01-10 20:56:24'),
(85, 'Keluhan Bright Gas dan EASE Gas', 'keluhan-bright-gas-dan-ease-gas', 'Menu_B_P17', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:04:41', '2021-01-10 21:04:41'),
(86, 'Keluhan Delivery LPG', 'keluhan-delivery-lpg', 'Menu_B_P18', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:10:37', '2021-01-10 21:10:37'),
(87, 'Keluhan Harga LPG, Bright Gas, EASE Gas', 'keluhan-harga-lpg-bright-gas-ease-gas', 'Menu_B_P19', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:20:12', '2021-01-10 21:20:12'),
(88, 'Keluhan kualitas LPG di SPBU/Bright store', 'keluhan-kualitas-lpg-di-spbubright-store', 'Menu_B_P20', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:27:59', '2021-01-10 21:27:59'),
(89, 'Keluhan Mobil Tangki LPG', 'keluhan-mobil-tangki-lpg', 'Menu_B_P21', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:33:40', '2021-01-10 21:33:40'),
(90, 'Keluhan Promo LPG', 'keluhan-promo-lpg', 'Menu_B_P22', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:43:56', '2021-01-10 21:43:56'),
(91, 'Keluhan Transaksi menggunakan mesin EDC', 'keluhan-transaksi-menggunakan-mesin-edc', 'Menu_B_P23', '', 'Layanan Domgas', '', 'active', '2021-01-10 21:51:17', '2021-01-10 21:51:17'),
(92, 'Keluhan Vigas dan BBG', 'keluhan-vigas-dan-bbg', 'Menu_B_P24', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:00:13', '2021-01-10 22:00:13'),
(93, 'Kenaikan Harga', 'kenaikan-harga', 'Menu_B_P25', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:05:29', '2021-01-10 22:05:29'),
(94, 'Kenaikan Harga Domgas', 'kenaikan-harga-domgas', 'Menu_B_P26', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:10:51', '2021-01-10 22:10:51'),
(95, 'Kerjasama pengadaan event terkait LPG', 'kerjasama-pengadaan-event-terkait-lpg', 'Menu_B_P27', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:19:27', '2021-01-10 22:19:27'),
(96, 'Kerjasama untuk penjualan LPG', 'kerjasama-untuk-penjualan-lpg', 'Menu_B_P28', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:24:44', '2021-01-10 22:24:44'),
(97, 'Kesulitan Mendapatkan LPG', 'kesulitan-mendapatkan-lpg', 'Menu_B_P29', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:30:53', '2021-01-10 22:30:53'),
(98, 'Ketersediaan LPG di SPBU/Bright Store', 'ketersediaan-lpg-di-spbubright-store', 'Menu_B_P30', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:37:25', '2021-01-10 22:37:25'),
(99, 'Komplain Jaringan Pipa Gas Tanam', 'komplain-jaringan-pipa-gas-tanam', 'Menu_B_P31', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:43:34', '2021-01-10 22:43:34'),
(100, 'Konversi LPG', 'konversi-lpg', 'Menu_B_P32', '', 'Layanan Domgas', '', 'active', '2021-01-10 22:47:10', '2021-01-10 22:47:10'),
(101, 'Kualitas Karet Seal', 'kualitas-karet-seal', 'Menu_B_P33', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:36:04', '2021-01-11 00:36:04'),
(102, 'Laporan Kecelakaan dan Permintaan Santunan', 'laporan-kecelakaan-dan-permintaan-santunan', 'Menu_B_P34', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:39:43', '2021-01-11 00:39:43'),
(103, 'Laporan Stock', 'laporan-stock', 'Menu_B_P35', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:45:26', '2021-01-11 00:45:26'),
(104, 'Laporan Stock dari Agen', 'laporan-stock-dari-agen', 'Menu_B_P36', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:49:36', '2021-01-11 00:49:36'),
(105, 'LPG menyediakan uang kembalian recehan logam', 'lpg-menyediakan-uang-kembalian-recehan-logam', 'Menu_B_P37', '', 'Layanan Domgas', '', 'active', '2021-01-11 00:54:47', '2021-01-11 00:54:47'),
(106, 'LPG tidak melayani penjualan selama 24 jam', 'lpg-tidak-melayani-penjualan-selama-24-jam', 'Menu_B_P38', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:05:43', '2021-01-11 01:05:43'),
(107, 'lsi gas LPG kurang', 'lsi-gas-lpg-kurang', 'Menu_B_P39', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:10:54', '2021-01-11 01:10:54'),
(108, 'Masukan agar Pertamina Retail lebih gencar untuk promosi Pembelian LPG di SPBU/Bright', 'masukan-agar-pertamina-retail-lebih-gencar-untuk-promosi-pembelian-lpg-di-spbubright', 'Menu_B_P40', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:21:23', '2021-01-11 01:21:23'),
(109, 'Menanyakan harga/stock LPG', 'menanyakan-hargastock-lpg', 'Menu_B_P41', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:25:43', '2021-01-11 01:25:43'),
(110, 'Menanyakan paket konversi Vigas + bengkel', 'menanyakan-paket-konversi-vigas-bengkel', 'Menu_B_P42', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:31:34', '2021-01-11 01:31:34'),
(111, 'Menanyakan Prosedur Menjadi Mitra', 'menanyakan-prosedur-menjadi-mitra', 'Menu_B_P43', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:39:09', '2021-01-11 01:39:09'),
(112, 'Mendahulukan Pembayaran Pada Kenalan', 'mendahulukan-pembayaran-pada-kenalan', 'Menu_B_P44', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:46:02', '2021-01-11 01:46:02'),
(113, 'Minta Asistensi Pemasangan LPG', 'minta-asistensi-pemasangan-lpg', 'Menu_B_P45', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:51:55', '2021-01-11 01:51:55'),
(114, 'Paket Konversi Vigas + Bengkel', 'paket-konversi-vigas-bengkel', 'Menu_B_P46', '', 'Layanan Domgas', '', 'active', '2021-01-11 01:56:21', '2021-01-11 01:56:21'),
(115, 'Pelayanan Petugas LPG', 'pelayanan-petugas-lpg', 'Menu_B_P47', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:01:17', '2021-01-11 02:01:17'),
(116, 'Pengaturan antrian konsumen pembelian LPG', 'pengaturan-antrian-konsumen-pembelian-lpg', 'Menu_B_P48', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:10:35', '2021-01-11 02:10:35'),
(117, 'Penggunan seragam lengkap bagi penjaga toko', 'penggunan-seragam-lengkap-bagi-penjaga-toko', 'Menu_B_P49', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:16:14', '2021-01-11 02:16:14'),
(118, 'Penipuan', 'penipuan', 'Menu_B_P50', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:21:31', '2021-01-11 02:21:31'),
(119, 'Perang Harga antar Agen', 'perang-harga-antar-agen', 'Menu_B_P51', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:27:01', '2021-01-11 02:27:01'),
(120, 'Permintaan data LPG di SPBU/Bright store', 'permintaan-data-lpg-di-spbubright-store', 'Menu_B_P52', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:37:16', '2021-01-11 02:37:16'),
(121, 'Permintaan Delivery LPG', 'permintaan-delivery-lpg', 'Menu_B_P53', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:41:56', '2021-01-11 02:41:56'),
(122, 'Personil LPG tidak memberikan senyum, salam, sapa', 'personil-lpg-tidak-memberikan-senyum-salam-sapa', 'Menu_B_P54', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:47:13', '2021-01-11 02:47:13'),
(123, 'Petugas LPG merokok di SPBU', 'petugas-lpg-merokok-di-spbu', 'Menu_B_P55', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:51:26', '2021-01-11 02:51:26'),
(124, 'Petugas Menjual Regulator yang mengaku dari Pertamina', 'petugas-menjual-regulator-yang-mengaku-dari-pertamina', 'Menu_B_P56', '', 'Layanan Domgas', '', 'active', '2021-01-11 02:57:50', '2021-01-11 02:57:50'),
(125, 'PIC/Alamat/Tlp', 'picalamattlp', 'Menu_B_P57', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:05:00', '2021-01-11 03:05:00'),
(126, 'Promo Nasional Domestic Gas', 'promo-nasional-domestic-gas', 'Menu_B_P58', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:10:06', '2021-01-11 03:10:06'),
(127, 'Promo Regional Domestic Gas', 'promo-regional-domestic-gas', 'Menu_B_P59', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:14:33', '2021-01-11 03:14:33'),
(128, 'Prosedur Menjadi Agen / Pangkalan LPG', 'prosedur-menjadi-agen-pangkalan-lpg', 'Menu_B_P60', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:20:40', '2021-01-11 03:20:40'),
(129, 'Prosedur Menjadi Agen LPG', 'prosedur-menjadi-agen-lpg', 'Menu_B_P61', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:24:49', '2021-01-11 03:24:49'),
(130, 'Prosedur Pendirian SPB Vi-Gas', 'prosedur-pendirian-spb-vi-gas', 'Menu_B_P62', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:28:04', '2021-01-11 03:28:04'),
(131, 'Prosedur Pendirian SPPBE', 'prosedur-pendirian-sppbe', 'Menu_B_P63', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:32:29', '2021-01-11 03:32:29'),
(132, 'Takaran LPG', 'takaran-lpg', 'Menu_B_P64', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:36:45', '2021-01-11 03:36:45'),
(133, 'Valve LPG diubah menjadi seperti Blue Gas', 'valve-lpg-diubah-menjadi-seperti-blue-gas', 'Menu_B_P65', '', 'Layanan Domgas', '', 'active', '2021-01-11 03:40:49', '2021-01-11 03:40:49'),
(134, 'Aplikasi MyPertamina tidak dapat diakses', 'aplikasi-mypertamina-tidak-dapat-diakses', 'Menu_C_P1', '', 'MyPertamina', '', 'active', '2021-01-11 18:59:45', '2021-01-11 18:59:45'),
(135, 'Aplikasi tidak bisa dibuka setelah update di iOS', 'aplikasi-tidak-bisa-dibuka-setelah-update-di-ios', 'Menu_C_P2', '', 'MyPertamina', '', 'active', '2021-01-11 19:00:12', '2021-01-11 19:00:12'),
(136, 'Cara Daftar Program BEP', 'cara-daftar-program-bep', 'Menu_C_P3', '', 'MyPertamina', '', 'active', '2021-01-11 19:04:39', '2021-01-11 19:04:39'),
(137, 'Cara Migrasi LinkAja', 'cara-migrasi-linkaja', 'Menu_C_P4', '', 'MyPertamina', '', 'active', '2021-01-11 19:08:54', '2021-01-11 19:08:54'),
(138, 'Cara Top Up Saldo LinkAja', 'cara-top-up-saldo-linkaja', 'Menu_C_P5', '', 'MyPertamina', '', 'active', '2021-01-11 19:12:38', '2021-01-11 19:12:38'),
(139, 'Cara Tukar Point LinkAja', 'cara-tukar-point-linkaja', 'Menu_C_P6', '', 'MyPertamina', '', 'active', '2021-01-11 19:16:22', '2021-01-11 19:16:22'),
(140, 'Cara Upgrade Akun', 'cara-upgrade-akun', 'Menu_C_P7', '', 'MyPertamina', '', 'active', '2021-01-11 19:26:16', '2021-01-11 19:26:16'),
(141, 'Double Payment MyPertamina', 'double-payment-mypertamina', 'Menu_C_P8', '', 'MyPertamina', '', 'active', '2021-01-11 19:30:07', '2021-01-11 19:30:07'),
(142, 'Hadiah Belum Diterima', 'hadiah-belum-diterima', 'Menu_C_P9', '', 'MyPertamina', '', 'active', '2021-01-11 19:36:08', '2021-01-11 19:36:08'),
(143, 'Informasi Penggunaan Layanan Mypertamina', 'informasi-penggunaan-layanan-mypertamina', 'Menu_C_P10', '', 'MyPertamina', '', 'active', '2021-01-11 19:44:23', '2021-01-11 19:44:23'),
(144, 'Informasi SPBU MyPertamina', 'informasi-spbu-mypertamina', 'Menu_C_P11', '', 'MyPertamina', '', 'active', '2021-01-11 19:49:53', '2021-01-11 19:49:53'),
(145, 'Keamanan Transaksi Digital di SPBU', 'keamanan-transaksi-digital-di-spbu', 'Menu_C_P12', '', 'MyPertamina', '', 'active', '2021-01-11 19:59:37', '2021-01-11 19:59:37'),
(146, 'Kendala kode OTP tidak terisi atau salah', 'kendala-kode-otp-tidak-terisi-atau-salah', 'Menu_C_P13', '', 'MyPertamina', '', 'active', '2021-01-11 20:04:08', '2021-01-11 20:04:08'),
(147, 'MyPertamina Cara Registrasi', 'mypertamina-cara-registrasi', 'Menu_C_P14', '', 'MyPertamina', '', 'active', '2021-01-11 20:09:28', '2021-01-11 20:09:28'),
(148, 'MyPertamina Cara Tukar Point', 'mypertamina-cara-tukar-point', 'Menu_C_P15', '', 'MyPertamina', '', 'active', '2021-01-11 20:18:34', '2021-01-11 20:18:34'),
(149, 'MyPertamina Error Message', 'mypertamina-error-message', 'Menu_C_P16', '', 'MyPertamina', '', 'active', '2021-01-11 20:27:10', '2021-01-11 20:27:10'),
(150, 'MyPertamina For Business', 'mypertamina-for-business', 'Menu_C_P17', '', 'MyPertamina', '', 'active', '2021-01-11 20:31:06', '2021-01-11 20:31:06'),
(151, 'MyPertamina Gagal Login', 'mypertamina-gagal-login', 'Menu_C_P18', '', 'MyPertamina', '', 'active', '2021-01-11 20:37:00', '2021-01-11 20:37:00'),
(152, 'MyPertamina Keluhan Tukar Point', 'mypertamina-keluhan-tukar-point', 'Menu_C_P19', '', 'MyPertamina', '', 'active', '2021-01-11 20:41:42', '2021-01-11 20:41:42'),
(153, 'MyPertamina Kendala Mengubah Profile', 'mypertamina-kendala-mengubah-profile', 'Menu_C_P20', '', 'MyPertamina', '', 'active', '2021-01-11 20:49:31', '2021-01-11 20:49:31'),
(154, 'MyPertamina Kendala Transaksi', 'mypertamina-kendala-transaksi', 'Menu_C_P21', '', 'MyPertamina', '', 'active', '2021-01-11 20:54:17', '2021-01-11 20:54:17'),
(155, 'MyPertamina Kendala Transaksi - Riwayat Transaksi Tidak Muncul', 'mypertamina-kendala-transaksi-riwayat-transaksi-tidak-muncul', 'Menu_C_P22', '', 'MyPertamina', '', 'active', '2021-01-11 21:03:12', '2021-01-11 21:03:12'),
(156, 'MyPertamina Lupa Nomor PIN', 'mypertamina-lupa-nomor-pin', 'Menu_C_P23', '', 'MyPertamina', '', 'active', '2021-01-11 21:08:06', '2021-01-11 21:08:06'),
(157, 'MyPertamina OTP Tidak Masuk', 'mypertamina-otp-tidak-masuk', 'Menu_C_P24', '', 'MyPertamina', '', 'active', '2021-01-11 21:13:49', '2021-01-11 21:13:49'),
(158, 'MyPertamina Salah / Lupa PIN', 'mypertamina-salah-lupa-pin', 'Menu_C_P25', '', 'MyPertamina', '', 'active', '2021-01-11 21:19:15', '2021-01-11 21:19:15'),
(159, 'MyPertamina Tidak Mendapatkan Kupon', 'mypertamina-tidak-mendapatkan-kupon', 'Menu_C_P26', '', 'MyPertamina', '', 'active', '2021-01-11 21:23:55', '2021-01-11 21:23:55'),
(160, 'MyPertamina Tidak Mendapatkan Poin', 'mypertamina-tidak-mendapatkan-poin', 'Menu_C_P27', '', 'MyPertamina', '', 'active', '2021-01-11 21:28:53', '2021-01-11 21:28:53'),
(161, 'Penipuan MyPertamina', 'penipuan-mypertamina', 'Menu_C_P28', '', 'MyPertamina', '', 'active', '2021-01-11 21:35:31', '2021-01-11 21:35:31'),
(162, 'Permintaan Blokir Nomor', 'permintaan-blokir-nomor', 'Menu_C_P29', '', 'MyPertamina', '', 'active', '2021-01-11 21:39:46', '2021-01-11 21:39:46'),
(163, 'Poin sudah berkurang voucher/merchandise belum didapatkan', 'poin-sudah-berkurang-vouchermerchandise-belum-didapatkan', 'Menu_C_P30', '', 'MyPertamina', '', 'active', '2021-01-11 21:45:32', '2021-01-11 21:45:32'),
(164, 'Promo MyPertamina (Complaint)', 'promo-mypertamina-complaint', 'Menu_C_P31', '', 'MyPertamina', '', 'active', '2021-01-11 21:58:13', '2021-01-11 21:58:13'),
(165, 'Promo MyPertamina (Information)', 'promo-mypertamina-information', 'Menu_C_P32', '', 'MyPertamina', '', 'active', '2021-01-11 22:02:54', '2021-01-11 22:02:54'),
(166, 'Redeem dengan Voucher Saphire Lounge Blue Sky Voucher', 'redeem-dengan-voucher-saphire-lounge-blue-sky-voucher', 'Menu_C_P33', '', 'MyPertamina', '', 'active', '2021-01-11 22:06:52', '2021-01-11 22:06:52'),
(167, 'Saldo tidak bertambah LinkAja', 'saldo-tidak-bertambah-linkaja', 'Menu_C_P34', '', 'MyPertamina', '', 'active', '2021-01-11 22:12:03', '2021-01-11 22:12:03'),
(168, 'Tahapan Aktivasi LinkAja pada Aplikasi MyPertamina', 'tahapan-aktivasi-linkaja-pada-aplikasi-mypertamina', 'Menu_C_P35', '', 'MyPertamina', '', 'active', '2021-01-11 22:16:01', '2021-01-11 22:16:01'),
(169, 'Tidak bisa menggunakan layanan LinkAja', 'tidak-bisa-menggunakan-layanan-linkaja', 'Menu_C_P36', '', 'MyPertamina', '', 'active', '2021-01-11 22:22:34', '2021-01-11 22:22:34'),
(170, 'Tidak bisa migrasi LinkAja', 'tidak-bisa-migrasi-linkaja', 'Menu_C_P37', '', 'MyPertamina', '', 'active', '2021-01-11 22:27:10', '2021-01-11 22:27:10'),
(171, 'Aplikasi POT aplikasi lama', 'aplikasi-pot-aplikasi-lama', 'Menu_D_P1', '', 'SPBU', '', 'active', '2021-01-12 00:24:14', '2021-01-12 00:24:14'),
(172, 'Cara manambah nomer telpon pada struk EDC', 'cara-manambah-nomer-telpon-pada-struk-edc', 'Menu_D_P2', '', 'SPBU', '', 'active', '2021-01-12 00:39:11', '2021-01-12 00:39:11'),
(173, 'Cara Manualkan Pompa', 'cara-manualkan-pompa', 'Menu_D_P3', '', 'SPBU', '', 'active', '2021-01-12 00:45:41', '2021-01-12 00:45:41'),
(174, 'Cara Restart PC POS', 'cara-restart-pc-pos', 'Menu_D_P4', '', 'SPBU', '', 'active', '2021-01-12 00:51:03', '2021-01-12 00:51:03'),
(175, 'Case EDC tidak connect seperti digambar dan sudah mengikuti manual quick guide masih belum bisa', 'case-edc-tidak-connect-seperti-digambar-dan-sudah-mengikuti-manual-quick-guide-masih-belum-bisa', 'Menu_D_P5', '', 'SPBU', '', 'active', '2021-01-12 00:57:12', '2021-01-12 00:57:12'),
(176, 'Case GSMS selalu loading dan GSMS blank', 'case-gsms-selalu-loading-dan-gsms-blank', 'Menu_D_P6', '', 'SPBU', '', 'active', '2021-01-12 01:05:24', '2021-01-12 01:05:24'),
(177, 'Case Nama PC POS salah, seharusnya 34-15123', 'case-nama-pc-pos-salah-seharusnya-34-15123', 'Menu_D_P7', '', 'SPBU', '', 'active', '2021-01-12 01:11:07', '2021-01-12 01:11:07'),
(178, 'Case Semua Dispenser tidak bisa reset nol', 'case-semua-dispenser-tidak-bisa-reset-nol', 'Menu_D_P8', '', 'SPBU', '', 'active', '2021-01-12 01:18:21', '2021-01-12 01:18:21'),
(179, 'Case Settlement Shift', 'case-settlement-shift', 'Menu_D_P9', '', 'SPBU', '', 'active', '2021-01-12 01:22:52', '2021-01-12 01:22:52'),
(180, 'Case tidak bisa close day / Close shift (1)', 'case-tidak-bisa-close-day-close-shift-1', 'Menu_D_P10', '', 'SPBU', '', 'active', '2021-01-12 01:30:39', '2021-01-12 01:53:52'),
(181, 'Case tidak bisa close day / Close shift (2)', 'case-tidak-bisa-close-day-close-shift-2', 'Menu_D_P11', '', 'SPBU', '', 'active', '2021-01-12 01:40:00', '2021-01-12 01:49:09'),
(182, 'Case tidak bisa close day / Close shift (3)', 'case-tidak-bisa-close-day-close-shift-3', 'Menu_D_P12', '', 'SPBU', '', 'active', '2021-01-12 01:47:24', '2021-01-12 01:49:20'),
(183, 'Case tidak bisa print', 'case-tidak-bisa-print', 'Menu_D_P13', '', 'SPBU', '', 'active', '2021-01-12 02:00:26', '2021-01-12 02:00:26'),
(184, 'Contoh Panduan Singkat Cek History Transaksi di Web Merchant Link Aja', 'contoh-panduan-singkat-cek-history-transaksi-di-web-merchant-link-aja', 'Menu_D_P14', '', 'SPBU', '', 'active', '2021-01-12 02:05:04', '2021-01-12 02:05:04'),
(185, 'EDC Invalid Paramaters', 'edc-invalid-paramaters', 'Menu_D_P15', '', 'SPBU', '', 'active', '2021-01-12 02:10:32', '2021-01-12 02:10:32'),
(186, 'EDC Requesting Payment Cancelled', 'edc-requesting-payment-cancelled', 'Menu_D_P16', '', 'SPBU', '', 'active', '2021-01-12 02:15:21', '2021-01-12 02:15:21'),
(187, 'EDC Tidak Ada Nama SPBU / Nama SPBU Berubah', 'edc-tidak-ada-nama-spbu-nama-spbu-berubah', 'Menu_D_P17', '', 'SPBU', '', 'active', '2021-01-12 02:22:23', '2021-01-12 02:22:23'),
(188, 'EDC tidak berfungsi, keterangan “invalid configuration” sebabnya edc tidak connect ke POS', 'edc-tidak-berfungsi-keterangan-invalid-configuration-sebabnya-edc-tidak-connect-ke-pos', 'Menu_D_P18', '', 'SPBU', '', 'active', '2021-01-12 02:27:31', '2021-01-12 02:27:31'),
(189, 'EDC tidak bisa digunakan, muncul warning seperti gambar', 'edc-tidak-bisa-digunakan-muncul-warning-seperti-gambar', 'Menu_D_P19', '', 'SPBU', '', 'active', '2021-01-12 02:34:56', '2021-01-12 02:34:56'),
(190, 'EDC Upgrade', 'edc-upgrade', 'Menu_D_P20', '', 'SPBU', '', 'active', '2021-01-12 03:45:40', '2021-01-12 03:45:40'),
(191, 'GSMS POS Tidak Bisa Dibuka', 'gsms-pos-tidak-bisa-dibuka', 'Menu_D_P21', '', 'SPBU', '', 'active', '2021-01-12 18:54:02', '2021-01-12 18:54:02'),
(192, 'Kendala2x EDC SPBU Digital Pertamina', 'kendala2x-edc-spbu-digital-pertamina', 'Menu_D_P22', '', 'SPBU', '', 'active', '2021-01-12 18:58:40', '2021-01-12 18:58:40'),
(193, 'Kerusakan EDC', 'kerusakan-edc', 'Menu_D_P23', '', 'SPBU', '', 'active', '2021-01-12 19:02:46', '2021-01-12 19:02:46'),
(194, 'Keterangan EDC tidak bisa cetak struk 2 kali', 'keterangan-edc-tidak-bisa-cetak-struk-2-kali', 'Menu_D_P24', '', 'SPBU', '', 'active', '2021-01-12 19:07:30', '2021-01-12 19:07:30'),
(195, 'Layar tidak bisa respon / Hank / Hang', 'layar-tidak-bisa-respon-hank-hang', 'Menu_D_P25', '', 'SPBU', '', 'active', '2021-01-12 19:11:41', '2021-01-12 19:11:41'),
(196, 'List Aplikasi Pengecekan Awal SPBU Digital Pertamina', 'list-aplikasi-pengecekan-awal-spbu-digital-pertamina', 'Menu_D_P26', '', 'SPBU', '', 'active', '2021-01-12 19:15:55', '2021-01-12 19:15:55'),
(197, 'List Kontak TA Regional di Telegram', 'list-kontak-ta-regional-di-telegram', 'Menu_D_P27', '', 'SPBU', '', 'active', '2021-01-12 19:21:21', '2021-01-12 19:21:21'),
(198, 'Tidak Bisa Menarik serial Number Device', 'tidak-bisa-menarik-serial-number-device', 'Menu_D_P28', '', 'SPBU', '', 'active', '2021-01-12 19:23:43', '2021-01-12 19:23:43'),
(199, 'Troubleshoot Jika DISPENSER Tidak Mau Kembali Ke 0', 'troubleshoot-jika-dispenser-tidak-mau-kembali-ke-0', 'Menu_D_P29', '', 'SPBU', '', 'active', '2021-01-12 19:28:46', '2021-01-12 19:28:46'),
(200, 'Troubleshoot Jika EDC Tidak Connect', 'troubleshoot-jika-edc-tidak-connect', 'Menu_D_P30', '', 'SPBU', '', 'active', '2021-01-12 19:33:36', '2021-01-12 19:33:36'),
(201, 'Aplikasi Power', 'aplikasi-power', 'Menu_E_P1', '', 'Lubricant', '', 'active', '2021-01-12 19:50:28', '2021-01-12 19:50:28'),
(202, 'Aplikasi Power Order', 'aplikasi-power-order', 'Menu_E_P2', '', 'Lubricant', '', 'active', '2021-01-12 19:59:18', '2021-01-12 19:59:18'),
(203, 'Aplikasi Power Petugas Tidak Mengetahui Promo', 'aplikasi-power-petugas-tidak-mengetahui-promo', 'Menu_E_P3', '', 'Lubricant', '', 'active', '2021-01-12 20:03:29', '2021-01-12 20:03:29'),
(204, 'Aplikasi Power Tidak Bisa Login', 'aplikasi-power-tidak-bisa-login', 'Menu_E_P4', '', 'Lubricant', '', 'active', '2021-01-12 20:07:26', '2021-01-12 20:07:26'),
(205, 'Aplikasi Power Tidak Dapat Diakses', 'aplikasi-power-tidak-dapat-diakses', 'Menu_E_P5', '', 'Lubricant', '', 'active', '2021-01-12 20:10:22', '2021-01-12 20:10:22'),
(206, 'Kendala Token Pertagas Tidak Dapat Digunakan', 'kendala-token-pertagas-tidak-dapat-digunakan', 'Menu_F_P1', '', 'Pertagas', '', 'active', '2021-01-12 20:20:55', '2021-01-12 20:20:55'),
(207, 'Pertagas', 'pertagas', 'Menu_F_P2', '', 'Pertagas', '', 'active', '2021-01-12 20:26:15', '2021-01-12 20:26:15'),
(208, 'Kendala Web PDS', 'kendala-web-pds', 'Menu_G_P1', '', 'PDS', '', 'active', '2021-01-12 20:43:41', '2021-01-12 20:43:41'),
(209, 'Case dari Call Center LinkAja/Helpdesk LinkAja', 'case-dari-call-center-linkajahelpdesk-linkaja', 'Menu_Z_P1', '3x24 Jam', 'Lain-Lain', '', 'active', '2021-01-12 20:51:50', '2021-02-27 21:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `user_image` varchar(255) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'gunawanzakiahhalim@gmail.com', 'gunawan', 'Gunawan', 'default.svg', '$2y$10$H3zLY8xPJ4HFdZaTu7AhKe7e2XA56VwkWGu2izVpEuX/waf1W0oBK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-07 22:37:18', '2021-03-07 22:37:18', NULL),
(2, 'pcc135@pertamina.com', 'pertamina', NULL, 'default.svg', '$2y$10$AH9W/FkvuLRIdp/RZoSBBer29Hy0WyvOWTepYlRJgu8fYn1WmYgeO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2021-03-08 00:19:17', '2021-03-08 00:19:17', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pansol`
--
ALTER TABLE `pansol`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pansol`
--
ALTER TABLE `pansol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=210;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
