-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 08:46 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rrjm_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `applicant_id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` int(11) NOT NULL,
  `joborder_id` int(11) NOT NULL,
  `in_process_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_application_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`applicant_id`, `first_name`, `last_name`, `gender`, `age`, `position`, `client_id`, `joborder_id`, `in_process_status`, `job_application_status`, `created_at`, `updated_at`) VALUES
(1, 'Mike', 'Latagan', 'Male', '29', 'Engineer', 1, 1, 'OEC', 'Line Up', '2021-10-09 18:55:53', '2021-10-09 18:55:53'),
(2, 'Juan', 'Dela Cruz', 'Male', '25', 'Engineer', 1, 1, 'Visa', 'Selected', '2021-10-12 15:31:50', '2021-10-12 15:31:50'),
(3, 'Ella', 'Castillo', 'Female', '36', 'Engineer', 1, 1, 'Medical', 'Selected', '2021-10-12 15:32:24', '2021-10-12 15:32:24'),
(4, 'Angelo', 'Martinez', 'Male', '25', 'Engineer', 1, 1, 'Medical', 'Line Up', '2021-10-13 18:46:54', '2021-10-13 18:46:54'),
(5, 'Alexandrei Louiesse', 'Sy', 'Female', '25', 'Nurse', 2, 3, 'OEC', 'Signed JOL', '2021-10-13 19:28:09', '2021-10-13 19:28:09'),
(6, 'Jacob Andrei', 'Lopez', 'Male', '28', 'Engineer', 1, 1, 'Visa', 'Selected', '2021-10-13 19:37:22', '2021-10-13 19:37:22'),
(7, 'Rocky', 'Sulayman', 'Male', '35', 'Electrician', 3, 4, 'Visa', 'Selected', '2021-10-13 19:59:52', '2021-10-13 19:59:52'),
(8, 'Michaella', 'Lastimosa', 'Female', '37', 'Electrician', 3, 4, 'Medical', 'Line Up', '2021-10-26 16:40:35', '2021-10-26 16:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `clients_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobsite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descriptions` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poea_accredition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valid_until` date NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `clients_name`, `country`, `jobsite`, `descriptions`, `poea_accredition`, `valid_until`, `file`, `created_at`, `updated_at`) VALUES
(1, 'TAV', 'Qatar', 'Doha', 'sdadadasdad', '12313', '2021-10-19', '1633434866.jpg', '2021-10-04 19:54:26', '2021-10-04 19:54:26'),
(2, 'Globogate', 'Germany', 'Somewhere', 'Nurse', '5432853422', '2021-10-21', '1634208869.png', '2021-10-13 18:54:29', '2021-10-13 18:54:29'),
(3, 'TAV', 'Qatar', 'Doha', 'Skilled Worker', '13245485', '2021-10-21', '1634212175.jpg', '2021-10-13 19:49:35', '2021-10-13 19:49:35');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `flights`
--

CREATE TABLE `flights` (
  `id` int(10) UNSIGNED NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_orders`
--

CREATE TABLE `job_orders` (
  `joborder_id` int(10) UNSIGNED NOT NULL,
  `client_id` int(11) NOT NULL,
  `clients_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobsite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poea_accredition` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `actual_position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_ofworker` int(11) NOT NULL,
  `basic_salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_expiration` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_orders`
--

INSERT INTO `job_orders` (`joborder_id`, `client_id`, `clients_name`, `country`, `jobsite`, `poea_accredition`, `actual_position`, `position`, `gender`, `no_ofworker`, `basic_salary`, `slot_expiration`, `created_at`, `updated_at`) VALUES
(1, 1, 'TAV', 'Qatar', 'Doha', '12313', 'Civil Engineer', 'Engineer', 'Male', 10, '1500', '2021-10-12', '2021-10-09 18:53:05', '2021-10-09 18:53:05'),
(2, 1, 'TAV', 'Qatar', 'Doha', '12313', 'Civil', 'Engineer', 'Male', 23, '3232322313', '2021-10-27', '2021-10-13 18:27:14', '2021-10-13 18:27:14'),
(3, 2, 'Globogate', 'Germany', 'Somewhere', '5432853422', 'ICU Nurse', 'Nurse', 'Male', 50, '150000', '2021-10-27', '2021-10-13 18:57:20', '2021-10-13 18:57:20'),
(4, 3, 'TAV', 'Qatar', 'Doha', '13245485', 'Electrician', 'Electrician', 'Male', 20, '30,000', '2021-10-18', '2021-10-13 19:56:49', '2021-10-13 19:56:49');

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2021_03_26_070333_create_flights_table', 1),
(4, '2021_03_27_072850_create_clients_table', 1),
(5, '2021_04_07_121133_create_job_orders_table', 1),
(6, '2021_05_13_031858_create_applicants_table', 1),
(7, '2021_07_05_142944_create_admins_table', 1),
(8, '2021_07_06_000000_create_users_table', 1),
(9, '2021_07_19_134700_create_useractivity_table', 1);

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
-- Table structure for table `useractivity`
--

CREATE TABLE `useractivity` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'michael', 'mlatagan@rrjm.com', '1', NULL, '$2y$10$eEGD1vqOuvDjFRD7mehqQey.IMDzql42M6c1phvgm1GxvM6nc.zsi', NULL, '2021-10-04 19:48:30', '2021-10-04 19:48:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`applicant_id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `flights`
--
ALTER TABLE `flights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_orders`
--
ALTER TABLE `job_orders`
  ADD PRIMARY KEY (`joborder_id`);

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
-- Indexes for table `useractivity`
--
ALTER TABLE `useractivity`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `applicant_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flights`
--
ALTER TABLE `flights`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_orders`
--
ALTER TABLE `job_orders`
  MODIFY `joborder_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `useractivity`
--
ALTER TABLE `useractivity`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
