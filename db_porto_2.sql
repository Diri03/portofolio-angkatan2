-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2025 at 03:41 PM
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
-- Database: `db_porto_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
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
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `content`, `title`, `birthday`, `website`, `phone`, `city`, `degree`, `email`, `freelance`, `photo`, `detailTitle`, `created_at`, `updated_at`) VALUES
(9, '<p>Saya adalah lulusan mahasiswa UNJ jurusan matematika 2017. Saya memiliki ketertarikan di bidang IT. Bahasa pemrograman yang saya kuasai adalah bahasa Python.</p>', 'Web Programming', '1998-11-24', 'https://menu-github-io.vercel.app/', '+6282297789349', 'Jakarta Pusat', 'Sarjana', 'diriansyah03@gmail.com', 'Terbuka', '683987715cdf2_kucing.jpeg', 'Web programming adalah proses pembuatan dan pengembangan aplikasi atau situs web yang dapat diakses melalui internet menggunakan browser. Proses ini melibatkan pemrograman sisi klien (client-side) seperti HTML, CSS, dan JavaScript untuk tampilan dan interaksi pengguna, serta pemrograman sisi server (server-side) seperti PHP, Python, Ruby, atau Node.js untuk menangani logika aplikasi, basis data, dan komunikasi dengan server. Web programming memungkinkan pengembang menciptakan berbagai jenis layanan daring, mulai dari situs statis hingga aplikasi web interaktif dan kompleks.', '2025-05-30 10:21:46', '2025-05-30 10:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'app'),
(2, 'product'),
(3, 'branding');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
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
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(6, 'Diriansyah', 'diriansyah15@gmail.com', 'Tester', 'dscfsdfsdf', '2025-05-26 05:02:05', NULL),
(7, 'dasdas', 'asdsa@dfsdfsdf', 'sdfsdfsd', 'sdfsdfsdf', '2025-05-26 05:02:42', NULL),
(8, 'Siddiq', 'siddiq@gmail.com', 'Tester', 'tes', '2025-05-26 07:50:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `education`
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
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `title`, `year`, `description`, `created_at`, `updated_at`) VALUES
(2, 'SMA Negeri 1 Jakarta', '2013 - 2016', 'Saya bersekolah di SMA Negeri 1 Jakarta jurusan IPA, saya mengikuti organisasi Rohis dan mata pelajaran yang saya kuasai salah satunya adalah Matematika', '2025-05-30 13:19:13', NULL),
(3, 'Universitas Negeri Jakarta', '2017 - 2023', '<p>Saya kuliah di Universitas Negeri Jakarta. Saya salah satu siswa beasiswa bidikmisi di jurusan Matematika. Matakuliah yang saya kuasai di jurusan saya antara lain sebagai berikut:</p><ul><li>Kalkulus Integral</li><li>Kalkulus Diferensial</li><li>Algoritma Pemrograman</li><li>Struktur Data</li><li>Teori Bilangan</li></ul>', '2025-05-30 13:23:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `experience`
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
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `year`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Tutor Matematika dan IPA', '2016 - 2020', '<p>Saya mengajar di salah satu bimbel yaitu Bimbel Prestasi sebagai tutor Matematika dan IPA. Peran saya sebagai tutor di Bimbel prestasi adalah sebagai berikut:</p><ol><li>Membantu siswa untuk memahami konsep-konsep dasar Matematika</li><li>Bertanggung jawab untuk membuat materi pembelajaran yang sesuai dengan kebutuhan siswa</li><li>Memberikan latihan soal untuk mendalami materi yang telah dipelajari\r\n&nbsp;</li></ol>', '2025-05-30 13:30:24', NULL),
(3, 'Sub-bagian Umum', 'Okt 2020 - Nov 2020', '<p>Saya mengambil mata kuliah PKL dan berkesempatan di KPPN Bekasi sebagai sub-bagian umum. Saya dipercaya melakukan tugas sebagai berikut:</p><ul><li>Menyusun Buku Kantor Pelayanan Perbendaharaan Negara (KPPN) 2020 dengan cepat dan efektif\r\nmenggunakan aplikasi Flip PDF Professional</li><li>Membuat formulasi baru Tunjangan Definitif, Tunjangan Tambahan, dan PPH</li><li>Menyusun Laporan Keuangan Kementrian Negara/Lembaga Triwulan III Tahun 2020&nbsp;</li></ul>', '2025-05-30 13:34:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `fakta`
--

CREATE TABLE `fakta` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fakta`
--

INSERT INTO `fakta` (`id`, `name`, `count`, `created_at`, `updated_at`) VALUES
(1, 'Clients', 499, '2025-05-26 01:08:57', NULL),
(2, 'Projects', 789, '2025-05-26 01:09:16', NULL),
(3, 'Hours Of Support', 300, '2025-05-26 01:09:22', NULL),
(4, 'Workers', 47, '2025-05-26 01:09:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home`
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
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `name`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(4, 'Diriansyah', '<p>Saya Lulusan di Universitas Negeri Jakarta Jurusan Matematika yang memiliki ketertarikan di bidang IT</p>', '683982f6f3dcb_books-1.jpg', '2025-05-30 10:00:09', '2025-05-30 10:05:43');

-- --------------------------------------------------------

--
-- Table structure for table `kemampuan`
--

CREATE TABLE `kemampuan` (
  `id` int(11) NOT NULL,
  `skill` varchar(20) NOT NULL,
  `bar` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kemampuan`
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
-- Table structure for table `levels`
--

CREATE TABLE `levels` (
  `id` int(11) NOT NULL,
  `name_level` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `levels`
--

INSERT INTO `levels` (`id`, `name_level`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `picture_project`
--

CREATE TABLE `picture_project` (
  `id` int(11) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `picture_project`
--

INSERT INTO `picture_project` (`id`, `photo`, `created_at`, `updated_at`) VALUES
(1, '6836070211458_logo.png', '2025-05-27 18:40:02', NULL),
(2, '6836070e0747b_apple-touch-icon.png', '2025-05-27 18:40:14', NULL),
(3, '6836072b7c57b_masonry-portfolio-7.jpg', '2025-05-27 18:40:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
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
-- Dumping data for table `portofolio`
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
(9, 3, '6839305fb4172_branding3.jpg', 'branding33', 'adadasdasdasdd', '2025-05-27 10:53:50', '2025-05-30 04:13:19');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
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
-- Table structure for table `project`
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
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `category`, `client`, `date`, `url`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Menu Desain Web', 'Restoran Bintang 10', '2025-05-27', 'menu-github-io.vercell.app', 'Menu DIRI', '<p>asdsadasdasdasd</p>', '2025-05-27 12:33:14', '2025-05-27 18:56:48');

-- --------------------------------------------------------

--
-- Table structure for table `services`
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
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'broadcast', 'Broadcast', 'asdasdasdasdasd', '2025-05-26 08:08:01', NULL),
(2, 'easel', 'Easel', 'safasfasdasd', '2025-05-26 08:08:21', NULL),
(3, 'bounding-box-circles', 'Bounding Box Circles', 'sdfsdfsdfsdfsdfsdf', '2025-05-26 08:08:56', NULL),
(4, 'calendar4-week', 'Kalender', 'dsadasdasdasd', '2025-05-26 08:09:28', NULL),
(5, 'chat-square-text', 'Chat', 'asdasdasdasdasdas', '2025-05-26 08:09:51', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `summary`
--

CREATE TABLE `summary` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `summary`
--

INSERT INTO `summary` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Diriansyah', '<p><em style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Innovative and deadline-driven Graphic Designer with 3+ years of experience designing and developing user-centered digital/print marketing material from initial concept to final, polished deliverable.</em><span style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\"><br></span></p><ul><li><span style=\"color: rgb(68, 68, 68); font-family: Roboto, system-ui, -apple-system, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, &quot;Noto Sans&quot;, &quot;Liberation Sans&quot;, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;;\">Portland par 127,Orlando, FL</span></li><li>(123) 456-7891</li><li>alice.barkley@example.com</li></ul>', '2025-05-27 05:53:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
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
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `photo`, `name`, `profesion`, `rating`, `quote`, `created_at`, `updated_at`) VALUES
(4, '6836150b212ea_kucing1.jpeg', 'Diriansyah', 'Web Programming', 5, 'swdesadsad', '2025-05-24 06:17:04', '2025-05-27 19:39:55'),
(5, '683615175f7bc_kucing2.jpeg', 'Siddiq', 'Web Programming', 5, 'gfdgdfgdfgdf', '2025-05-26 01:12:02', '2025-05-27 19:40:07'),
(6, '6836152758083_kucing3.jpeg', 'Raymond', 'Data Science', 5, 'asdfasfsdfsdf', '2025-05-26 01:12:22', '2025-05-27 19:40:23'),
(7, '6836153216875_kucing4.jpeg', 'William', 'IT Consultant', 5, 'asdfasdasdas', '2025-05-26 01:12:43', '2025-05-27 19:40:34'),
(8, '6836153b46948_kucing5.jpeg', 'Agra', 'Data Analyst', 5, 'asedfasdfsdfsd123', '2025-05-26 01:13:11', '2025-05-30 03:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
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
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fakta`
--
ALTER TABLE `fakta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kemampuan`
--
ALTER TABLE `kemampuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `picture_project`
--
ALTER TABLE `picture_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id_to_id_category` (`id_category`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summary`
--
ALTER TABLE `summary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `level_id_to_id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fakta`
--
ALTER TABLE `fakta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kemampuan`
--
ALTER TABLE `kemampuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `picture_project`
--
ALTER TABLE `picture_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `summary`
--
ALTER TABLE `summary`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `category_id_to_id_category` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `level_id_to_id_level` FOREIGN KEY (`id_level`) REFERENCES `levels` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
