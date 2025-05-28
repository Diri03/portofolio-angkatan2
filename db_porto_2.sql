-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Bulan Mei 2025 pada 04.48
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
(8, '<p>Saya adalah lulusan mahasiswa UNJ jurusan matematika 2017. Saya memiliki ketertarikan di bidang IT. Bahasa pemrograman yang saya kuasai adalah bahasa Python.</p>', 'Web Programming', '1998-11-24', 'https://menu-github-io.vercel.app/', '+6287831714546', 'Jakarta Pusat', 'Sarjana', 'diriansyah03@gmail.com', 'Terbuka', '683625098e5e2_kucing.jpeg', 'asssfdsjfnknsdjkfnkd', '2025-05-27 20:47:41', '2025-05-27 20:48:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'app'),
(2, 'product'),
(3, 'branding');

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
-- Struktur dari tabel `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `education`
--

INSERT INTO `education` (`id`, `title`, `year`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Master of Fine Arts & Graphic Design', '2015 - 2016', '<p style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><em>Rochester Institute of Technology, Rochester, NY</em></p><p style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>', '2025-05-27 06:08:29', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `experience`
--

INSERT INTO `experience` (`id`, `title`, `year`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Senior graphic design specialist', '2019 - Present', '<p style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><em>Experion, New York, NY</em></p><ul><li style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Lead in the design, development, and implementation of the graphic, layout, and production communication materials</li><li style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Delegate tasks to the 7 members of the design team and provide counsel on all aspects of the project.</li><li style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Supervise the assessment of all graphic materials in order to ensure quality and accuracy of the design</li><li style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Oversee the efficient use of production project budgets ranging from $2,000 - $25,000</li></ul>', '2025-05-27 06:10:51', NULL);

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
-- Struktur dari tabel `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `home`
--

INSERT INTO `home` (`id`, `name`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'Diriansyah', '<p>Lulusan dari Universitas Negeri Jakarta jurusan Matematika 2017</p>', '6836182adc6f5_books-1.jpg', '2025-05-27 19:53:14', NULL);

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
(6, 'Laravel', 30, '2025-05-26 01:08:01', NULL),
(7, 'Java', 40, '2025-05-27 20:17:20', NULL);

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
-- Struktur dari tabel `picture_project`
--

CREATE TABLE `picture_project` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `picture_project`
--

INSERT INTO `picture_project` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, '6836070211458_logo.png', '2025-05-27 18:40:02', NULL),
(2, '6836070e0747b_apple-touch-icon.png', '2025-05-27 18:40:14', NULL),
(3, '6836072b7c57b_masonry-portfolio-7.jpg', '2025-05-27 18:40:43', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `id_category` int(11) DEFAULT NULL,
  `photo` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `portofolio`
--

INSERT INTO `portofolio` (`id`, `id_category`, `photo`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, '68357a2f0d688_app-1.jpg', 'App 1', 'asdasdasdasdasda', '2025-05-27 08:39:11', NULL),
(2, 1, '683598e0562c6_app2.jpg', 'app 2', 'adasdasdasdasdasdsa', '2025-05-27 10:50:08', NULL),
(3, 1, '683598f91a304_app3.jpg', 'app 3', 'adadasdasdasdas', '2025-05-27 10:50:33', NULL),
(4, 2, '6835991bf2b3c_product1.png', 'product1', 'adasdasdasdas', '2025-05-27 10:51:07', NULL),
(5, 2, '6835993419fb2_product2.jpg', 'product2', 'sadasdasdas', '2025-05-27 10:51:32', NULL),
(6, 2, '68359967c0849_product3.png', 'product 3', 'asdasdasdasdasdasd', '2025-05-27 10:51:49', '2025-05-27 10:52:23'),
(7, 3, '68359987b19af_branding1.jpg', 'branding1', 'adasdasdasdasdas', '2025-05-27 10:52:55', NULL),
(8, 3, '6835999feea84_branding2.jpg', 'branding 2', 'asdasdasdad', '2025-05-27 10:53:19', NULL),
(9, 3, '68361f441e859_branding3.jpg', 'branding3', 'adadasdasdasdd', '2025-05-27 10:53:50', '2025-05-27 20:23:32');

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
-- Struktur dari tabel `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL,
  `client` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `url` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `project`
--

INSERT INTO `project` (`id`, `category`, `client`, `date`, `url`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Menu Desain Web', 'Restoran Bintang 10', '2025-05-27', 'menu-github-io.vercell.app', 'Menu DIRI', '<p>asdsadasdasdasd</p>', '2025-05-27 12:33:14', '2025-05-27 18:56:48');

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
-- Struktur dari tabel `summary`
--

CREATE TABLE `summary` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `summary`
--

INSERT INTO `summary` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Diriansyah', '<p><em style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em><span style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><br></span></p><ul><li><span style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Portland par 127,Orlando, FL</span></li><li>(123) 456-7891</li><li>alice.barkley@example.com</li></ul>', '2025-05-27 05:53:28', NULL);

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
(4, '6836150b212ea_kucing1.jpeg', 'Diriansyah', 'Web Programming', 5, 'swdesadsad', '2025-05-24 06:17:04', '2025-05-27 19:39:55'),
(5, '683615175f7bc_kucing2.jpeg', 'Siddiq', 'Web Programming', 5, 'gfdgdfgdfgdf', '2025-05-26 01:12:02', '2025-05-27 19:40:07'),
(6, '6836152758083_kucing3.jpeg', 'Raymond', 'Data Science', 5, 'asdfasfsdfsdf', '2025-05-26 01:12:22', '2025-05-27 19:40:23'),
(7, '6836153216875_kucing4.jpeg', 'William', 'IT Consultant', 5, 'asdfasdasdas', '2025-05-26 01:12:43', '2025-05-27 19:40:34'),
(8, '6836153b46948_kucing5.jpeg', 'Agra', 'Data Analyst', 5, 'asedfasdfsdfsd', '2025-05-26 01:13:11', '2025-05-27 19:40:43');

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
(41, 2, 'sadsad', 'asd@gmail.com', 'f10e2821bbbea527ea02200352313bc059445190', '2025-05-27 03:43:44', NULL),
(42, 2, 'q', 'q@q', '22ea1c649c82946aa6e479e1ffd321e4a318b1b0', '2025-05-27 04:02:29', NULL),
(43, 1, 'tes1', 'tes1@gmail.com', 'd1c056a983786a38ca76a05cda240c7b86d77136', '2025-05-27 19:50:16', '2025-05-27 19:50:29');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fakta`
--
ALTER TABLE `fakta`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `home`
--
ALTER TABLE `home`
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
-- Indeks untuk tabel `picture_project`
--
ALTER TABLE `picture_project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_to_id_category` (`id_category`);

--
-- Indeks untuk tabel `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `summary`
--
ALTER TABLE `summary`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `fakta`
--
ALTER TABLE `fakta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kemampuan`
--
ALTER TABLE `kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `picture_project`
--
ALTER TABLE `picture_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `summary`
--
ALTER TABLE `summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `category_id_to_id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `level_id_to_id_level` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
