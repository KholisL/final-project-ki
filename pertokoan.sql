-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2022 at 04:53 PM
-- Server version: 10.4.14-MariaDB
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
-- Database: `pertokoan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `harga` int(20) NOT NULL,
  `stok` int(10) NOT NULL,
  `point_dibeli` int(11) DEFAULT NULL,
  `point_membeli` int(11) DEFAULT NULL,
  `id_kategori_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id`, `judul`, `penulis`, `penerbit`, `tahun`, `harga`, `stok`, `point_dibeli`, `point_membeli`, `id_kategori_buku`) VALUES
(2, 'Bulan', 'Tere Liye', 'PT. Maju Jaya', '2019', 69000, 22, 19, 2000, 1),
(3, 'Matahari', 'Tere Liye', 'Gramedia Pustaka Utama (Jakarta)', '2016', 80000, 7, 15, 2500, 1),
(5, 'Bintang', 'Tere Liye', 'PT. Mulia', '2021', 69000, 18, 17, 2000, 3),
(6, 'Nebula', 'Tere Liye', 'Gramedia Pustaka Utama (Jakarta)', '2020', 85000, 3, 20, 3000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id` int(11) NOT NULL,
  `id_penjualan` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jumlah_beli` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL,
  `sub_point_belanja` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id`, `id_penjualan`, `id_buku`, `jumlah_beli`, `sub_total`, `sub_point_belanja`, `created_at`) VALUES
(1, 1, 2, 1, 69000, 19, '2022-02-22 17:00:00'),
(2, 4, 2, 1, 69000, 19, '2022-02-23 17:00:00'),
(3, 5, 3, 2, 150000, 30, '2022-02-23 17:00:00'),
(4, 6, 3, 3, 225000, 45, '2022-02-23 17:00:00'),
(5, 6, 5, 1, 69000, 17, '2022-02-23 17:00:00'),
(6, 7, 2, 1, 69000, 19, '2022-02-24 08:35:09'),
(7, 8, 2, 1, 69000, 19, '2022-02-24 09:13:50'),
(8, 9, 2, 1, 69000, 19, '2022-02-24 09:14:46'),
(9, 10, 2, 1, 69000, 19, '2022-02-24 09:17:21'),
(10, 11, 3, 1, 75000, 15, '2022-02-25 10:47:23'),
(11, 12, 2, 1, 69000, 19, '2022-02-25 10:49:55'),
(12, 13, 2, 1, 69000, 19, '2022-02-25 10:51:23'),
(13, 14, 2, 1, 69000, 19, '2022-02-25 14:19:52'),
(14, 15, 2, 1, 69000, 19, '2022-02-25 15:11:18'),
(15, 18, 5, 1, 69000, 17, '2022-02-25 15:17:05'),
(16, 19, 5, 2, 138000, 34, '2022-02-25 15:17:55'),
(17, 20, 2, 1, 69000, 19, '2022-02-25 15:19:08'),
(18, 21, 2, 1, 69000, 19, '2022-02-25 15:21:23'),
(19, 22, 5, 2, 138000, 34, '2022-02-25 15:27:36'),
(20, 23, 5, 2, 138000, 34, '2022-02-25 15:28:47'),
(21, 24, 2, 2, 138000, 38, '2022-02-25 15:32:25'),
(22, 25, 2, 1, 69000, 19, '2022-02-25 15:40:38'),
(23, 25, 5, 2, 138000, 34, '2022-02-25 15:40:39'),
(24, 26, 2, 1, 69000, 19, '2022-02-25 15:44:33'),
(25, 27, 5, 1, 69000, 17, '2022-02-25 15:45:53'),
(26, 30, 3, 1, 75000, 15, '2022-02-25 15:58:27'),
(27, 31, 5, 2, 138000, 34, '2022-02-25 16:21:44'),
(28, 32, 5, 4, 276000, 68, '2022-02-25 16:38:26'),
(29, 33, 3, 1, 75000, 15, '2022-02-25 16:39:32'),
(30, 33, 5, 1, 69000, 17, '2022-02-25 16:39:32'),
(31, 34, 5, 2, 138000, 34, '2022-02-25 16:40:45'),
(32, 34, 3, 1, 75000, 15, '2022-02-25 16:40:45'),
(33, 35, 2, 1, 69000, 19, '2022-02-25 16:43:02'),
(34, 35, 5, 1, 69000, 17, '2022-02-25 16:43:02'),
(35, 35, 3, 1, 75000, 15, '2022-02-25 16:43:02'),
(36, 36, 2, 1, 69000, 19, '2022-02-25 16:45:54'),
(37, 36, 5, 2, 138000, 34, '2022-02-25 16:45:54'),
(38, 37, 5, 1, 69000, 17, '2022-02-25 16:50:27'),
(39, 38, 2, 1, 69000, 19, '2022-02-25 16:53:21'),
(40, 38, 3, 1, 75000, 15, '2022-02-25 16:53:21'),
(41, 39, 5, 1, 69000, 17, '2022-02-25 16:55:52'),
(42, 39, 3, 1, 75000, 15, '2022-02-25 16:55:52'),
(43, 40, 5, 1, 69000, 17, '2022-02-25 16:57:47'),
(44, 40, 2, 1, 69000, 19, '2022-02-25 16:57:47'),
(45, 41, 2, 1, 69000, 19, '2022-02-25 16:59:06'),
(46, 41, 3, 1, 75000, 15, '2022-02-25 16:59:06'),
(47, 42, 2, 2, 138000, 38, '2022-02-28 14:17:16'),
(48, 42, 6, 1, 85000, 20, '2022-02-28 14:17:16'),
(49, 48, 6, 1, 85000, 20, '2022-02-28 14:52:20'),
(50, 49, 3, 1, 80000, 15, '2022-02-28 14:53:51'),
(51, 49, 2, 1, 69000, 19, '2022-02-28 14:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_buku`
--

CREATE TABLE `kategori_buku` (
  `id` int(11) NOT NULL,
  `kategori_buku` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_buku`
--

INSERT INTO `kategori_buku` (`id`, `kategori_buku`) VALUES
(1, 'Novel'),
(3, 'Sejarahh'),
(4, 'Pengetahuan Umumm');

-- --------------------------------------------------------

--
-- Table structure for table `log_stok`
--

CREATE TABLE `log_stok` (
  `id` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `tambah_stok` int(11) DEFAULT NULL,
  `kurang_stok` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `point` int(11) DEFAULT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `nama`, `alamat`, `no_telp`, `point`, `created_at`) VALUES
(1, 'Kholis Luthfiah', 'Semarang', '088215106366', 167, '2022-02-13'),
(3, 'Alisha Khaira', 'Jepara', '088999000888', 238, '2022-02-14'),
(4, 'Dina Puspita', 'Pati', '088767876677', 58, '2022-02-14'),
(5, 'Sri Utami', 'Semarang', '0887678766888', 175, '2022-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id` int(11) NOT NULL,
  `id_member` int(11) DEFAULT NULL,
  `nama_pembeli` varchar(255) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `point_belanja` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_member`, `nama_pembeli`, `total`, `bayar`, `point_belanja`, `created_at`) VALUES
(4, 3, 'Alisha Khaira', 69000, 70000, 19, '2022-02-23 19:29:30'),
(5, 5, 'Sri Utami', 150000, 200000, 30, '2022-02-23 19:33:48'),
(6, NULL, 'Safira Saharani', 294000, 300000, 62, '2022-02-23 19:44:08'),
(11, 1, 'Kholis Luthfiah', 75000, 100000, 15, '2022-02-25 03:47:23'),
(16, 1, 'Kholis Luthfiah', 69000, 70000, 19, '2022-02-25 08:14:39'),
(17, 1, 'Kholis Luthfiah', 207000, 300000, 53, '2022-02-25 08:16:00'),
(18, 1, 'Kholis Luthfiah', 207000, 210000, 51, '2022-02-25 08:17:05'),
(19, 3, 'Alisha Khaira', 288000, 300000, 64, '2022-02-25 08:17:55'),
(21, 1, 'Kholis Luthfiah', 69000, 70000, 19, '2022-02-25 08:21:23'),
(22, 1, 'Kholis Luthfiah', 138000, 150000, 34, '2022-02-25 08:27:36'),
(23, 1, 'Kholis Luthfiah', 138000, 150000, 34, '2022-02-25 08:28:47'),
(24, 1, 'Kholis Luthfiah', 138000, 150000, 38, '2022-02-25 08:32:25'),
(27, 1, 'Kholis Luthfiah', 69000, 70000, 17, '2022-02-25 08:45:53'),
(28, 1, 'Kholis Luthfiah', 75000, 100000, 15, '2022-02-25 08:54:29'),
(29, 1, 'Kholis Luthfiah', 69000, 70000, 17, '2022-02-25 08:55:08'),
(30, 1, 'Kholis Luthfiah', 75000, 150000, 15, '2022-02-25 08:58:27'),
(31, 1, 'Kholis Luthfiah', 138000, 135000, 34, '2022-02-25 09:21:44'),
(32, 3, 'Alisha Khaira', 276000, 270000, 68, '2022-02-25 09:38:26'),
(33, 5, 'Sri Utami', 144000, 150000, 32, '2022-02-25 09:39:32'),
(34, 3, 'Alisha Khaira', 213000, 210000, 49, '2022-02-25 09:40:45'),
(35, 1, 'Kholis Luthfiah', 213000, 210000, 51, '2022-02-25 09:43:02'),
(36, 3, 'Alisha Khaira', 207000, 210000, 53, '2022-02-25 09:45:53'),
(37, 5, 'Sri Utami', 69000, 70000, 17, '2022-02-25 09:50:27'),
(38, 3, 'Alisha Khaira', 144000, 150000, 34, '2022-02-25 09:53:21'),
(39, 1, 'Kholis Luthfiah', 144000, 150000, 32, '2022-02-25 09:55:52'),
(40, 5, 'Sri Utami', 138000, 140000, 36, '2022-02-25 09:57:47'),
(41, 3, 'Alisha Khaira', 144000, 145000, 34, '2022-02-25 09:59:06'),
(42, 4, 'Dina Puspita', 223000, 220000, 58, '2022-02-28 07:17:16'),
(43, NULL, 'Adityo Seno', 85000, 85000, 20, '2022-02-28 07:19:10'),
(44, NULL, 'Aditya Seno', 85000, 100000, 20, '2022-02-28 07:40:37'),
(45, NULL, 'Aditya Seno', 85000, 100000, 20, '2022-02-28 07:41:38'),
(46, NULL, 'Aditya Seno', 85000, 100000, 20, '2022-02-28 07:43:51'),
(47, NULL, 'Aditya Seno', 85000, 100000, 20, '2022-02-28 07:44:31'),
(48, NULL, 'Aditya Seno', 85000, 100000, 20, '2022-02-28 07:52:20'),
(49, NULL, 'Bagas Dika', 80000, 80000, 15, '2022-02-28 07:53:51'),
(50, NULL, 'Bagas Dika', 69000, 80000, 19, '2022-02-28 07:57:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `is_superadmin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `photo`, `email`, `password`, `role`, `is_superadmin`) VALUES
(2, 'Safira Saharani', 'uploads/profile_images/28586.jpg', 'safirasaharanii@gmail.com', '$2y$10$4oICxFijdeYsIjShYXiVhuBOiODRim9MxhEsOo2e7lP9xuTAtrfv2', 'operator', 0),
(3, 'Superadmin', 'uploads/profile_images/72722.jpg', 'superadmin@gmail.com', '$2y$10$eMlo6x5ihdgFPKTfyjkymu2apyNWXXMLS.xoefNbAbv8OKOWrJyku', 'superadmin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `log_stok`
--
ALTER TABLE `log_stok`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `kategori_buku`
--
ALTER TABLE `kategori_buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `log_stok`
--
ALTER TABLE `log_stok`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
