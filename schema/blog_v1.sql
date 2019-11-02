-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 04:47 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogc`
--

CREATE TABLE `blogc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `userId` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogc`
--

INSERT INTO `blogc` (`id`, `title`, `description`, `userId`, `created_at`, `updated_at`) VALUES
(4, 'Where does it come from?', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 1, NULL, NULL),
(5, 'Where can I get some?', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 1, NULL, NULL),
(6, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel ullamcorper nisl, a maximus augue. Ut vitae porttitor lorem, non rhoncus urna. Curabitur ante tortor, iaculis quis mattis ac, commodo non lorem. Cras tempor augue sed venenatis dapibus. Mauris sed massa eu nisl pharetra malesuada. Maecenas ultrices, ex vel ultricies congue, mi sem sagittis dui, sed varius odio diam et diam. Integer in eleifend lacus. Vestibulum volutpat eros massa, ac iaculis dui viverra et. Nullam magna ante, aliquet et mollis sed, vehicula eleifend odio. Nullam fermentum eros eu tincidunt molestie. Phasellus elit tellus, consectetur non erat non, vulputate gravida enim. Nulla scelerisque massa blandit augue tempus sodales. Aenean aliquam massa vel maximus accumsan.', 2, NULL, NULL),
(7, 'sudipta', 'kumar PAIK', 1, NULL, NULL),
(8, 'RTV', 'HSGDF', 2, NULL, NULL),
(9, 'RTV', 'thisdksuhsv', 1, NULL, NULL),
(10, 'কলকাতায় বিদ্যাসাগরের মূর্তি ভাঙার পিছনে কোন রাজনীতি?', 'rtryywefywyfugsgkjvhguye', 2, NULL, NULL),
(13, 'Rupa Paik', 'adfhgfkg,h,', 0, NULL, NULL),
(14, 'Rupa Paik', 'Successfully Created blog', 0, NULL, NULL),
(15, 'কলকাতায় বিদ্যাসাগরের মূর্তি ভাঙার পিছনে কোন রাজনীতি?', 'লোকসভা নির্বাচন ২০১৯: পশ্চিমবঙ্গে উত্তেজনা-সংঘাতের কারণে এক দিন আগেই প্রচারণা শেষ করার নির্দেশ', 0, NULL, NULL),
(16, 'trerutyut', 'cvbv bnmghjhmjhmh', 0, NULL, NULL),
(17, 'Lorem Ipsum: usage', 'Lorem Ipsum: usage', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `createblog`
--

CREATE TABLE `createblog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `createc`
--

CREATE TABLE `createc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `createc`
--

INSERT INTO `createc` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'rupa', NULL, NULL),
(4, 'update', NULL, NULL),
(5, 'laravel', NULL, NULL),
(9, 'laravel', NULL, NULL),
(14, 'dfgdfhf', NULL, NULL),
(15, 'rgerte', NULL, NULL),
(18, 'Sudipta Kumar Paik', NULL, NULL),
(19, 'dfbd', NULL, NULL),
(20, 'rerrytfu', NULL, NULL),
(21, 'frttyut', NULL, NULL),
(22, 'dfgthrt', NULL, NULL),
(23, 'c#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_09_11_181024_create_createc_table', 1),
(5, '2019_09_11_181144_create_createblog_table', 2),
(6, '2019_09_12_143557_create_createb_table', 3),
(7, '2019_09_12_145648_create_bloguser_table', 4),
(8, '2019_09_12_153049_create_users_blogc', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `confirmd` tinyint(1) NOT NULL DEFAULT 0,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `admin`, `confirmd`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'RUPA PAIK', 'rupa@gmail.com', NULL, '$2y$10$YYvE9PZZolWKd.GmgeeHxevJVIJueYbRhDX0LBUQl7xy301TEthG.', 0, 0, 0, 'jcfEodnnGQjCiBP3qeBx0xgjOEjFIzGmIo2JYVLk8Li9FDwa9zAvy649PLbP', '2019-09-11 13:02:10', '2019-09-11 13:02:10'),
(2, 'Sanu Das', 'sanu@gmail.com', NULL, '$2y$10$lHr.4qCm9DfCZ.iQIckrQOPUm62v053JwI.CqRY4snhBupAL7JHj2', 0, 0, 0, 'URYg3Jvzz0MYrlNIHNw24yfZVBi4wTsIfprZNvnpDXs1ARlvqD1En3ubAsLw', '2019-09-12 10:53:07', '2019-09-12 10:53:07'),
(3, 'Krishna', 'krishna@gmail.com', NULL, '$2y$10$uMpZmneQxOEivEoPzTsDEe7XqLerjVx8ZDuCMAXk1ou1S.oF4lOkm', 0, 0, 0, NULL, '2019-09-13 16:10:55', '2019-09-13 16:10:55'),
(4, 'Rahul', 'rahul@gmai.com', NULL, '$2y$10$VJp775GAW67tCUyPYaZ2LerzAJdlrKP7zubF1RfTdSjySwFDNMTSK', 0, 0, 0, NULL, '2019-09-13 16:15:02', '2019-09-13 16:15:02'),
(5, 'Raima', 'raima@gmail.com', NULL, '$2y$10$Q7PrLDVkYkgzeTeGR/6FtuQjqAODx0Orj0wFqA5J7axKnPpgw3K96', 0, 0, 0, NULL, '2019-09-13 16:18:03', '2019-09-13 16:18:03'),
(6, 'Riya Paik', 'riya@gmail.com', NULL, '$2y$10$fn/afRS6UB3inuzaFqJ1e.TlWrYBMxZNpuOwD.ht/V93eXJIzmR1S', 0, 0, 0, NULL, '2019-09-13 16:23:26', '2019-09-13 16:23:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogc`
--
ALTER TABLE `blogc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createblog`
--
ALTER TABLE `createblog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `createc`
--
ALTER TABLE `createc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `blogc`
--
ALTER TABLE `blogc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `createblog`
--
ALTER TABLE `createblog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `createc`
--
ALTER TABLE `createc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
