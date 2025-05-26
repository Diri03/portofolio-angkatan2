-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Bulan Mei 2025 pada 10.15
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
-- Database: `db_porto_2`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `content` text NOT NULL,
  `title` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `website` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `freelance` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `detailTitle` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `about`
--

INSERT INTO `about` (`id`, `content`, `title`, `birthday`, `website`, `phone`, `city`, `degree`, `email`, `freelance`, `photo`, `detailTitle`, `created_at`, `updated_at`) VALUES
(7, '<p>sadasdasd</p>', 'asdasdasd', '2025-05-26', 'menu-github-io.vercel.app', '+6282297789349', 'Jakarta Pusat', 'S1', 'admin123@gmail.com', 'Available', '6833ed2ee5b6a_hero-bg.jpg', 'sadasdasdas', '2025-05-26 04:25:18', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'Diriansyah', 'diriansyah15@gmail.com', 'Tester', 'dscfsdfsdf', '2025-05-26 05:02:05', NULL),
(7, 'dasdas', 'asdsa@dfsdfsdf', 'sdfsdfsd', 'sdfsdfsdf', '2025-05-26 05:02:42', NULL),
(8, 'Siddiq', 'siddiq@gmail.com', 'Tester', 'tes', '2025-05-26 07:50:51', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `fakta`
--

CREATE TABLE `fakta` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `fakta`
--

INSERT INTO `fakta` (`id`, `name`, `count`, `created_at`, `updated_at`) VALUES
(1, 'Clients', 499, '2025-05-26 01:08:57', NULL),
(2, 'Projects', 789, '2025-05-26 01:09:16', NULL),
(3, 'Hours Of Support', 300, '2025-05-26 01:09:22', NULL),
(4, 'Workers', 47, '2025-05-26 01:09:36', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kemampuan`
--

CREATE TABLE `kemampuan` (
  `id` int(11) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `bar` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kemampuan`
--

INSERT INTO `kemampuan` (`id`, `skill`, `bar`, `created_at`, `updated_at`) VALUES
(1, 'HTML', 100, '2025-05-26 01:06:52', NULL),
(2, 'CSS', 80, '2025-05-26 01:07:00', NULL),
(3, 'Python', 90, '2025-05-26 01:07:15', NULL),
(4, 'JavaScript', 70, '2025-05-26 01:07:38', NULL),
(5, 'PHP', 70, '2025-05-26 01:07:51', NULL),
(6, 'Laravel', 30, '2025-05-26 01:08:01', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name_level` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`id`, `name_level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `profile_name` varchar(50) DEFAULT NULL,
  `profesion` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'broadcast', 'Broadcast', 'asdasdasdasdasd', '2025-05-26 08:08:01', NULL),
(2, 'easel', 'Easel', 'safasfasdasd', '2025-05-26 08:08:21', NULL),
(3, 'bounding-box-circles', 'Bounding Box Circles', 'sdfsdfsdfsdfsdfsdf', '2025-05-26 08:08:56', NULL),
(4, 'calendar4-week', 'Kalender', 'dsadasdasdasd', '2025-05-26 08:09:28', NULL),
(5, 'chat-square-text', 'Chat', 'asdasdasdasdasdas', '2025-05-26 08:09:51', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profesion` varchar(50) NOT NULL,
  `rating` int(11) NOT NULL,
  `quote` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `photo`, `name`, `profesion`, `rating`, `quote`, `created_at`, `updated_at`) VALUES
(4, 'kucing1.jpeg', 'Diriansyah', 'Web Programming', 5, 'swdesadsad', '2025-05-24 06:17:04', '2025-05-26 01:11:44'),
(5, 'kucing2.jpeg', 'Siddiq', 'Web Programming', 5, 'gfdgdfgdfgdf', '2025-05-26 01:12:02', NULL),
(6, 'kucing3.jpeg', 'Raymond', 'Data Science', 5, 'asdfasfsdfsdf', '2025-05-26 01:12:22', NULL),
(7, 'kucing4.jpeg', 'William', 'IT Consultant', 5, 'asdfasdasdas', '2025-05-26 01:12:43', NULL),
(8, 'kucing5.jpeg', 'Agra', 'Data Analyst', 5, 'asedfasdfsdfsd', '2025-05-26 01:13:11', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `id_level` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `id_level`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(26, 2, 'Diriansyah', 'diriansyah15@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2025-05-22 00:35:55', '2025-05-23 01:10:10'),
(34, 1, 'admin123', 'admin123@gmail.com', 'f865b53623b121fd34ee5426c792e5c33af8c227', '2025-05-22 06:42:24', '2025-05-23 02:48:54'),
(35, NULL, 'Siddi', 'siddiq@gmail.com', '9ff4d52cb05f672d5cd54a092757502eb93a0c63', '2025-05-23 03:18:44', '2025-05-23 03:25:27'),
(36, NULL, 'William', 'wili123@gmail.com', 'd1925b49089c332f686cc5e332342ad723f5989f', '2025-05-24 04:27:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fakta`
--
ALTER TABLE `fakta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id_to_id_level` (`id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `fakta`
--
ALTER TABLE `fakta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `level_id_to_id_level` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
