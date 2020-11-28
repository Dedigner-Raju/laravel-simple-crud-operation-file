-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2020 at 09:35 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nameoftask`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slag` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `cat_name`, `slag`, `created_at`, `updated_at`) VALUES
(2, 'Raju', 'raju', '2020-11-24 03:57:20', '2020-11-24 03:57:20'),
(5, 'Tousif', 'tousif', '2020-11-24 23:46:57', '2020-11-24 23:46:57'),
(6, 'Royel', 'royel', '2020-11-24 23:56:08', '2020-11-24 23:56:08');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_teaher`
--

CREATE TABLE `course_teaher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cruds`
--

CREATE TABLE `cruds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cruds`
--

INSERT INTO `cruds` (`id`, `name`, `uname`, `email`, `cell`, `photo`, `created_at`, `updated_at`) VALUES
(8, 'f', 'f', 'rff@gmail.com', '8756', '7d965f632941c1b7f96ba889a4aca955.jpg', '2020-11-17 07:05:17', '2020-11-21 01:05:00'),
(9, 'Ara', 'ar', 'ra@gmail.com', '01953103206', '9fd2bd007a44d73ed908b85990e6dbb5.jpg', '2020-11-18 00:42:28', '2020-11-18 00:42:28'),
(12, 'Arafat', 'rabbi', 'arafat@gmail.com', '0153548796', 'b8661aa80102a25a86496ce83084c023.jpg', '2020-11-21 00:54:41', '2020-11-21 03:16:57');

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
(2, '2020_11_16_110011_create_cruds_table', 1),
(3, '2020_11_23_054753_create_students_table', 2),
(4, '2020_11_24_064748_create_catagories_table', 3),
(5, '2020_11_24_065352_create_posts_table', 3),
(6, '2020_11_25_110155_create_techers_table', 4),
(7, '2020_11_25_110553_create_courses_table', 4),
(8, '2020_11_25_111505_create_course_teaher_table', 4),
(9, '2014_10_12_100000_create_password_resets_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catagory_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `slug`, `catagory_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'About Bangladesh', 'about-bangladesh', '2', 'een the industry\'s standard dummy text ever since the 1500s, when an un', '2020-11-24 07:14:35', '2020-11-24 07:14:35'),
(2, 'Skilled operator', 'skilled-operator', '5', 'is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when', '2020-11-24 23:48:08', '2020-11-24 23:48:08'),
(3, 'Create dynamic WordPress Jewelry website for you', 'create-dynamic-wordpress-jewelry-website-for-you', '6', 'how to create dynamic website', '2020-11-24 23:56:39', '2020-11-24 23:56:39'),
(4, 'I will build 1 page WordPress website for you', 'i-will-build-1-page-wordpress-website-for-you', '2', 's been the industry\'s standard dummy text ever since the 1500s, when an', '2020-11-25 00:17:04', '2020-11-25 00:17:04');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `uname`, `email`, `cell`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Md Al Mamun', 'raju', 'almamun.raju520@gmail.com', '131631', NULL, '2020-11-23 02:12:11', '2020-11-23 02:12:11'),
(2, 'r', 'r', 'r@gmail.com', '789', NULL, '2020-11-23 02:21:55', '2020-11-23 02:21:55'),
(4, 'Raju', 'rajurrr', 'obujrdddaju420@gmail.com', '78547', '4c78d12ad984638b5aac926ef0d72399.jpg', '2020-11-23 02:24:23', '2020-11-23 02:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `techers`
--

CREATE TABLE `techers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `t_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `techers`
--

INSERT INTO `techers` (`id`, `t_name`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'Raju Ahmed', 'laravel', '2020-11-25 06:08:37', '2020-11-25 06:08:37'),
(2, 'Royel Reza', 'Graphics design', '2020-11-25 06:21:31', '2020-11-25 06:21:31'),
(3, 'Fahim Baktiar', 'Magento', '2020-11-25 06:22:01', '2020-11-25 06:22:01'),
(4, 'Royel', 'design', '2020-11-25 06:24:41', '2020-11-25 06:24:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_teaher`
--
ALTER TABLE `course_teaher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cruds`
--
ALTER TABLE `cruds`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cruds_uname_unique` (`uname`),
  ADD UNIQUE KEY `cruds_email_unique` (`email`),
  ADD UNIQUE KEY `cruds_cell_unique` (`cell`),
  ADD UNIQUE KEY `cruds_photo_unique` (`photo`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_uname_unique` (`uname`),
  ADD UNIQUE KEY `students_email_unique` (`email`),
  ADD UNIQUE KEY `students_cell_unique` (`cell`);

--
-- Indexes for table `techers`
--
ALTER TABLE `techers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course_teaher`
--
ALTER TABLE `course_teaher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cruds`
--
ALTER TABLE `cruds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `techers`
--
ALTER TABLE `techers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
