-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 07:47 AM
-- Server version: 10.1.29-MariaDB
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
-- Database: `routine`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register_courses`
--

CREATE TABLE `register_courses` (
  `id` int(11) NOT NULL,
  `student_id` int(11) DEFAULT NULL,
  `reg_type` varchar(191) DEFAULT NULL,
  `teacher_init` varchar(191) DEFAULT NULL,
  `course_code` varchar(191) DEFAULT NULL,
  `course_title` varchar(191) DEFAULT NULL,
  `exam_type` varchar(191) DEFAULT NULL,
  `semister` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_courses`
--

INSERT INTO `register_courses` (`id`, `student_id`, `reg_type`, `teacher_init`, `course_code`, `course_title`, `exam_type`, `semister`, `created_at`, `updated_at`) VALUES
(1, 1, 'Improvement', 'tt', 'SWE101', 'OOP', 'Mid Term', 'Spring 2019', '2019-07-17 00:54:58', '2019-07-17 00:54:58'),
(2, 1, 'Improvement', 'tt', 'SWE102', 'Testing', 'Final', 'Spring 2019', '2019-07-17 00:54:58', '2019-07-17 00:54:58'),
(3, 2, 'Improvement', 'rr', 'SWE101', 'OOP', 'Mid Term', 'Spring 2019', '2019-07-17 22:23:40', '2019-07-17 22:23:40'),
(4, 1, 'Overlap', 'KS', 'SWE104', 'Math', 'Mid Term', 'Spring 2019', '2019-07-17 22:23:40', '2019-07-17 22:23:40'),
(5, 3, 'Improvement', 'ww', 'SWE101', 'OOP', 'Mid Term', 'Spring 2019', '2019-07-19 23:47:49', '2019-07-19 23:47:49'),
(6, 3, 'Improvement', 'ww', 'SWE104', 'Math', 'Mid Term', 'Spring 2019', '2019-07-19 23:47:49', '2019-07-19 23:47:49'),
(7, 3, 'Improvement', 'ee', 'SWE103', 'System Analysis', 'Mid Term', 'Spring 2019', '2019-07-19 23:47:49', '2019-07-19 23:47:49'),
(8, 4, 'Improvement', 'ee', 'SWE103', 'System Analysis', 'Mid Term', 'Spring 2019', '2019-07-19 23:50:57', '2019-07-19 23:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Student', 'Student', NULL, NULL, NULL),
(2, 'Teacher', 'Teacher', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `routine`
--

CREATE TABLE `routine` (
  `id` int(11) NOT NULL,
  `exam_date` varchar(191) NOT NULL,
  `exam_time` varchar(191) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `room_no` varchar(191) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `routine`
--

INSERT INTO `routine` (`id`, `exam_date`, `exam_time`, `subject`, `total`, `room_no`, `created_at`, `updated_at`) VALUES
(1, '2019-07-21', '10AM', 'System Analysis', 2, '606AB', '2019-07-20 23:44:54', '2019-07-20 23:44:54'),
(2, '2019-07-21', '10AM', 'OOP', 3, '606AB', '2019-07-20 23:45:06', '2019-07-20 23:45:06'),
(3, '2019-07-21', '4PM', 'Math', 2, '606AB', '2019-07-20 23:45:33', '2019-07-20 23:45:33');

-- --------------------------------------------------------

--
-- Table structure for table `temp_db_routine`
--

CREATE TABLE `temp_db_routine` (
  `id` int(11) NOT NULL,
  `course_title` varchar(191) NOT NULL,
  `semister` varchar(191) NOT NULL,
  `total_reg` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_db_routine`
--

INSERT INTO `temp_db_routine` (`id`, `course_title`, `semister`, `total_reg`, `created_at`, `updated_at`) VALUES
(1, 'Math', 'Spring 2019', 0, '2019-07-20 23:44:34', '2019-07-20 23:45:33'),
(2, 'OOP', 'Spring 2019', 0, '2019-07-20 23:44:34', '2019-07-20 23:45:06'),
(3, 'System Analysis', 'Spring 2019', 0, '2019-07-20 23:44:34', '2019-07-20 23:44:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `v_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dept` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `v_id`, `email`, `dept`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Recho', '123', 'r@gmail.com', 'SWE', NULL, '$2y$10$YOaywg3OLU70LE2WVoD5ceUwnK2.f1R2eYogHr2x8HvbvzlToi5.K', NULL, '2019-07-16 23:13:23', '2019-07-16 23:13:23'),
(2, 'zahid hasan', '123', 's@gmail.com', 'SWE', NULL, '$2y$10$I3faIA8QvmsdN9n24WErbu4erdzomIPcalb7c5TK9lJEuudc2Ja8q', NULL, '2019-07-16 23:14:05', '2019-07-16 23:14:05'),
(3, 'zahid hasan', '123', 's1@gmail.com', 'SWE', NULL, '$2y$10$tNOy94XNENBmZkec3Ff4k.K9ODk6jh/7hRo.MEiSlOxjRE/x/Naui', NULL, '2019-07-19 23:46:53', '2019-07-19 23:46:53'),
(4, 'LAS', '123', '1r@gmail.com', 'SWE', NULL, '$2y$10$.xSFCQ8qO/4jAHLoXmqxO.bPpGmKiL/Ng/mLkGYM.rBqE4.EVv/Hq', NULL, '2019-07-19 23:50:45', '2019-07-19 23:50:45');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `register_courses`
--
ALTER TABLE `register_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `routine`
--
ALTER TABLE `routine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_db_routine`
--
ALTER TABLE `temp_db_routine`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `register_courses`
--
ALTER TABLE `register_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `routine`
--
ALTER TABLE `routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `temp_db_routine`
--
ALTER TABLE `temp_db_routine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
