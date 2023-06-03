-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 11, 2022 at 04:45 AM
-- Server version: 10.3.32-MariaDB-log-cll-lve
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suoxuahd_mm_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_payments`
--

CREATE TABLE `appoinment_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobile_agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_cash` int(11) NOT NULL,
  `sender_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `appoinment_payment_histories`
--

CREATE TABLE `appoinment_payment_histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appoinment_payment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobile_agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_cash` int(11) NOT NULL,
  `sender_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appoinment_payment_histories`
--

INSERT INTO `appoinment_payment_histories` (`id`, `appoinment_payment_id`, `user_id`, `mobile_agent_id`, `amount`, `is_cash`, `sender_type`, `sender_number`, `trans_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 2, 50, 2, 23, 1, NULL, NULL, NULL, 'kire', '2021-12-17 07:46:34', '2021-12-17 07:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `appoint_at` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=pending 1=approve 2=close 3=prescribe',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doctor_id` tinyint(1) NOT NULL DEFAULT 0,
  `refer_doctor_id` tinyint(1) NOT NULL DEFAULT 0,
  `payment_status` tinyint(1) NOT NULL DEFAULT 0,
  `therapy_id` int(11) NOT NULL DEFAULT 0,
  `amount` int(11) NOT NULL DEFAULT 0,
  `discount` int(11) NOT NULL DEFAULT 0,
  `discount_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `given` int(11) NOT NULL DEFAULT 0,
  `compounder_viewed` int(11) NOT NULL DEFAULT 0,
  `is_waiver` int(11) NOT NULL DEFAULT 0,
  `document` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `service_id`, `details`, `appoint_at`, `status`, `created_at`, `updated_at`, `doctor_id`, `refer_doctor_id`, `payment_status`, `therapy_id`, `amount`, `discount`, `discount_type`, `given`, `compounder_viewed`, `is_waiver`, `document`) VALUES
(43, 82, 10, 'too much pain', '2021-12-26 17:30:00', 0, '2021-12-26 13:31:48', '2021-12-26 13:31:48', 0, 0, 0, 0, 0, 0, '', 0, 0, 0, NULL),
(44, 83, 11, 'gcrjh', '2021-12-27 00:00:00', 1, '2021-12-26 15:00:53', '2021-12-26 15:00:53', 84, 0, 0, 0, 0, 0, '', 0, 0, 0, NULL),
(45, 83, 10, 'gcrjh', '2021-12-28 00:00:00', 1, '2021-12-26 15:43:35', '2021-12-26 15:43:35', 84, 0, 0, 0, 0, 0, '', 0, 0, 1, NULL),
(46, 81, 2, 'gcrjh', '2022-01-05 00:00:00', 1, '2022-01-05 11:20:12', '2022-01-06 09:33:35', 84, 0, 0, 0, 0, 0, 'fixed', 0, 0, 0, '1641479473.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_notes`
--

CREATE TABLE `appointment_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_notes`
--

INSERT INTO `appointment_notes` (`id`, `appointment_id`, `note`, `user_id`, `type`, `created_at`, `updated_at`) VALUES
(1, 46, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui. Ut orci quam.', 2, 'normal', '2022-01-06 09:44:01', '2022-01-06 09:44:01'),
(2, 46, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam et fermentum dui.', 2, 'internal', '2022-01-06 09:48:56', '2022-01-06 09:48:56');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_slots`
--

CREATE TABLE `appointment_slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `slot_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_slots`
--

INSERT INTO `appointment_slots` (`id`, `appointment_id`, `slot_id`, `doctor_id`, `date`, `created_at`, `updated_at`) VALUES
(27, 44, 2, 84, '2021-12-27', '2021-12-26 15:00:53', '2021-12-26 15:00:53'),
(28, 45, 2, 84, '2021-12-28', '2021-12-26 15:43:35', '2021-12-26 15:43:35'),
(33, 46, 3, 84, '2022-01-05', '2022-01-06 08:31:13', '2022-01-06 08:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tests`
--

CREATE TABLE `appointment_tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `test_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_tests`
--

INSERT INTO `appointment_tests` (`id`, `appointment_id`, `test_id`, `created_at`, `updated_at`) VALUES
(1, 18, 1, '2021-12-09 06:33:52', '2021-12-09 06:33:52'),
(2, 18, 1, '2021-12-09 06:34:02', '2021-12-09 06:34:02'),
(3, 17, 1, '2021-12-09 06:35:09', '2021-12-09 06:35:09'),
(4, 31, 1, '2021-12-11 13:11:34', '2021-12-11 13:11:34'),
(5, 31, 2, '2021-12-11 13:11:34', '2021-12-11 13:11:34'),
(6, 33, 1, '2021-12-11 14:01:44', '2021-12-11 14:01:44'),
(7, 33, 2, '2021-12-11 14:01:44', '2021-12-11 14:01:44'),
(8, 37, 2, '2021-12-14 20:02:21', '2021-12-14 20:02:21'),
(9, 37, 3, '2021-12-14 20:02:21', '2021-12-14 20:02:21'),
(10, 26, 2, '2021-12-19 12:12:06', '2021-12-19 12:12:06'),
(11, 26, 3, '2021-12-19 12:12:06', '2021-12-19 12:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_therapies`
--

CREATE TABLE `appointment_therapies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `therapy_id` bigint(20) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `given` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_therapies`
--

INSERT INTO `appointment_therapies` (`id`, `appointment_id`, `therapy_id`, `total`, `given`, `created_at`, `updated_at`, `note`, `status`) VALUES
(1, 18, 2, 10, 7, '2021-11-27 06:54:27', '2021-12-06 08:38:48', 'kire vaijan', 0),
(2, 18, 3, 20, 0, '2021-11-27 06:54:27', '2021-11-27 06:54:27', NULL, 0),
(3, 18, 1, 5, 0, '2021-11-27 07:16:11', '2021-11-27 07:16:11', NULL, 0),
(4, 18, 3, 4, 0, '2021-11-27 07:16:11', '2021-11-27 07:16:11', NULL, 0),
(5, 18, 4, 3, 0, '2021-11-27 07:16:11', '2021-11-27 07:16:11', NULL, 0),
(6, 18, 1, 5, 0, '2021-11-27 07:16:45', '2021-11-27 07:16:45', NULL, 0),
(7, 18, 3, 4, 0, '2021-11-27 07:16:45', '2021-11-27 07:16:45', NULL, 0),
(8, 18, 4, 3, 0, '2021-11-27 07:16:45', '2021-11-27 07:16:45', NULL, 0),
(9, 18, 1, 5, 0, '2021-11-27 07:17:07', '2021-11-27 07:17:07', NULL, 0),
(10, 18, 3, 4, 0, '2021-11-27 07:17:07', '2021-11-27 07:17:07', NULL, 0),
(11, 18, 4, 3, 0, '2021-11-27 07:17:07', '2021-11-27 07:17:07', NULL, 0),
(12, 18, 4, 5, 0, '2021-11-28 04:41:08', '2021-11-28 04:41:08', NULL, 0),
(13, 18, 3, 2, 0, '2021-11-28 04:41:08', '2021-11-28 04:41:08', NULL, 0),
(14, 18, 5, 1, 0, '2021-11-28 04:41:08', '2021-11-28 04:41:08', NULL, 0),
(15, 19, 1, 5, 0, '2021-12-01 03:17:43', '2021-12-01 03:17:43', NULL, 0),
(16, 19, 3, 2, 0, '2021-12-01 03:17:43', '2021-12-01 03:17:43', NULL, 0),
(17, 20, 2, 10, 0, '2021-12-07 00:59:59', '2021-12-07 00:59:59', NULL, 0),
(18, 18, 1, 10, 0, '2021-12-09 06:10:54', '2021-12-09 06:10:54', NULL, 0),
(19, 18, 1, 10, 0, '2021-12-09 06:11:45', '2021-12-09 06:11:45', NULL, 0),
(20, 18, 3, 20, 0, '2021-12-09 06:11:45', '2021-12-09 06:11:45', NULL, 0),
(21, 18, 5, 10, 0, '2021-12-09 06:11:45', '2021-12-09 06:11:45', NULL, 0),
(22, 18, 9, 9, 0, '2021-12-09 06:11:45', '2021-12-09 06:11:45', NULL, 0),
(23, 17, 3, 19, 0, '2021-12-09 06:12:14', '2021-12-09 06:23:49', NULL, 0),
(26, 26, 3, 5, 0, '2021-12-10 11:07:25', '2021-12-19 12:09:11', NULL, 0),
(28, 26, 2, 6, 0, '2021-12-10 11:07:25', '2021-12-19 12:09:11', NULL, 0),
(29, 31, 1, 10, 0, '2021-12-11 13:10:08', '2021-12-11 13:10:08', NULL, 0),
(30, 31, 9, 5, 0, '2021-12-11 13:10:08', '2021-12-11 13:10:08', NULL, 0),
(31, 33, 1, 10, 1, '2021-12-11 14:02:47', '2021-12-11 18:44:09', NULL, 0),
(32, 33, 2, 5, 2, '2021-12-11 14:02:47', '2021-12-11 18:44:40', NULL, 0),
(33, 33, 3, 8, 0, '2021-12-11 17:58:59', '2021-12-11 17:58:59', NULL, 0),
(34, 33, 9, 12, 0, '2021-12-11 17:58:59', '2021-12-11 17:58:59', NULL, 0),
(35, 37, 1, 30, 1, '2021-12-14 20:04:26', '2021-12-14 21:23:55', NULL, 0),
(36, 37, 9, 30, 1, '2021-12-14 20:04:26', '2021-12-14 21:24:14', NULL, 0),
(37, 37, 2, 10, 2, '2021-12-14 20:04:26', '2021-12-14 21:24:57', NULL, 0),
(38, 26, 4, 10, 0, '2021-12-19 12:09:11', '2021-12-19 12:55:34', NULL, 0),
(39, 44, 18, 2, 0, '2021-12-26 16:50:34', '2021-12-26 16:50:34', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_therapy_individuals`
--

CREATE TABLE `appointment_therapy_individuals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_therapy_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_therapy_individuals`
--

INSERT INTO `appointment_therapy_individuals` (`id`, `appointment_therapy_id`, `user_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 49, NULL, '2021-11-28 03:14:28', '2021-11-28 03:14:28'),
(2, 1, 49, NULL, '2021-11-28 04:38:33', '2021-11-28 04:38:33'),
(3, 1, 49, NULL, '2021-12-06 08:35:05', '2021-12-06 08:35:05'),
(4, 1, 49, NULL, '2021-12-06 08:35:39', '2021-12-06 08:35:39'),
(5, 1, 49, NULL, '2021-12-06 08:36:47', '2021-12-06 08:36:47'),
(6, 1, 49, 'tk', '2021-12-06 08:38:48', '2021-12-06 08:38:48'),
(7, 31, 49, 'done', '2021-12-11 18:44:09', '2021-12-11 18:44:09'),
(8, 32, 49, NULL, '2021-12-11 18:44:26', '2021-12-11 18:44:26'),
(9, 32, 49, NULL, '2021-12-11 18:44:40', '2021-12-11 18:44:40'),
(10, 35, 62, NULL, '2021-12-14 21:23:55', '2021-12-14 21:23:55'),
(11, 36, 62, NULL, '2021-12-14 21:24:14', '2021-12-14 21:24:14'),
(12, 37, 62, NULL, '2021-12-14 21:24:32', '2021-12-14 21:24:32'),
(13, 37, 62, 'please change machine', '2021-12-14 21:24:57', '2021-12-14 21:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `appointment_therapy_individual_machines`
--

CREATE TABLE `appointment_therapy_individual_machines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_therapy_individual_id` bigint(20) UNSIGNED NOT NULL,
  `machine_id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointment_therapy_individual_machines`
--

INSERT INTO `appointment_therapy_individual_machines` (`id`, `appointment_therapy_individual_id`, `machine_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, '2021-11-28 03:14:28', '2021-11-28 03:14:28'),
(2, 2, 2, NULL, '2021-11-28 04:38:33', '2021-11-28 04:38:33'),
(3, 2, 3, NULL, '2021-11-28 04:38:33', '2021-11-28 04:38:33'),
(4, 5, 2, NULL, '2021-12-06 08:36:47', '2021-12-06 08:36:47'),
(5, 8, 2, NULL, '2021-12-11 18:44:26', '2021-12-11 18:44:26'),
(6, 9, 3, NULL, '2021-12-11 18:44:40', '2021-12-11 18:44:40'),
(7, 12, 2, NULL, '2021-12-14 21:24:32', '2021-12-14 21:24:32'),
(8, 13, 3, NULL, '2021-12-14 21:24:57', '2021-12-14 21:24:57');

-- --------------------------------------------------------

--
-- Table structure for table `compounders`
--

CREATE TABLE `compounders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compounders`
--

INSERT INTO `compounders` (`id`, `user_id`, `name`, `email`, `phone`, `gender`, `nid`, `status`, `created_at`, `updated_at`) VALUES
(16, 85, 'Mr E', 'mre@gmail.com', '01987456326', 1, '987456323', 1, '2021-12-26 16:12:41', '2021-12-26 16:12:41'),
(17, 87, 'Mr Coordinator', 'mrco@gmail.com', '01965874235', 1, '7896541236', 1, '2021-12-26 16:24:09', '2022-01-11 16:42:15'),
(18, 88, 'Mr T', 'mrt@gmail.com', '01965874234', 1, '987456329', 3, '2021-12-26 16:27:37', '2022-01-10 04:24:42'),
(19, 89, 'Mr Ac', 'mrac@gmail.com', '01587964239', 1, '987456326', 1, '2021-12-26 16:28:49', '2022-01-11 19:15:09'),
(20, 91, 'SHAHEDUL HAQUE SHAHED', 'mdshahedulhaque37@gmail.com', '01722856701', 1, '103071912', 3, '2022-01-09 00:07:06', '2022-01-10 23:22:50'),
(21, 96, 'OMEGA', 'omega@gmail.com', '01778788787', 2, '2265487568', 1, '2022-01-10 04:34:57', '2022-01-10 04:34:57'),
(22, 97, 'ashik', 'ashik@gmial.com', '01840040010', 1, '4527865746', 1, '2022-01-10 04:44:39', '2022-01-11 16:53:13'),
(23, 98, 'Mr therapy', 'mrtherapy@gmail.com', '01587964238', 1, '987456387', 3, '2022-01-10 23:23:47', '2022-01-10 23:24:54'),
(24, 99, 'mr t', 'mrth@gmail.com', '01774309348', 1, '987456398', 3, '2022-01-10 23:24:45', '2022-01-10 23:24:59'),
(25, 100, 'mr th', 'mrth@gmail.com', '01587964236', 1, '987456321', 3, '2022-01-11 16:04:41', '2022-01-11 16:04:49'),
(26, 101, 'mr the', 'mrthe@gmail.com', '01587964236', 1, '987456321', 1, '2022-01-11 16:49:08', '2022-01-11 16:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `conversation_messages`
--

CREATE TABLE `conversation_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conversation_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `specialist_id` int(11) NOT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `visit` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `name`, `email`, `phone`, `gender`, `specialist_id`, `nid`, `visit`, `status`, `created_at`, `updated_at`) VALUES
(16, 84, 'DR d', 'drd@gmail.com', '01874523695', 1, 3, '987456328', 0, 1, '2021-12-26 14:59:34', '2021-12-26 15:43:04'),
(17, 86, 'DR c', 'drc@gmail.com', '01698745239', 2, 4, '987456321', 0, 1, '2021-12-26 16:22:00', '2022-01-05 11:21:36'),
(18, 94, 'Dr test Dr', 'drtestdrr@gmail.com', '01987456325', 2, 17, '874569321', 0, 1, '2022-01-09 17:18:59', '2022-01-09 17:18:59'),
(19, 95, 'SHARMIN AKTER', 'sharmin.nitor@gmail.com', '01722987109', 2, 3, '4656485424', 500, 1, '2022-01-10 04:31:24', '2022-01-11 16:34:05');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `user_id`, `name`, `email`, `phone`, `gender`, `status`, `created_at`, `updated_at`) VALUES
(3, 29, 'Test Employee', 'test.employee@gmail.com', '0111111111', 1, 1, '2021-11-05 14:42:37', '2021-11-16 09:54:23'),
(4, 31, 'Shimanto Arif', 'shimantottt@gmail.com', '01533493429', 1, 1, '2021-11-05 23:49:17', '2021-11-05 23:49:17'),
(5, 33, 'test account', 'admin@example.com', '01600000000', 1, 1, '2021-11-16 09:54:14', '2021-11-16 13:02:48'),
(6, 36, 'ayeasha', 'ayesha@gmail.com', '1001', 2, 1, '2021-11-18 20:59:25', '2021-11-18 20:59:25'),
(7, 43, 'Shimanto Arif', 'shimantoeeeaaa@gmail.com', '01533493429', 1, 1, '2021-11-19 09:36:45', '2021-11-19 09:36:45'),
(8, 52, 'piash', 'piash2@gmail.com', '12', 1, 1, '2021-12-05 07:57:27', '2021-12-05 07:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expense_type_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `status` enum('pending','approved','rejected') COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `paid` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `title`, `description`, `expense_type_id`, `amount`, `status`, `user_id`, `paid`, `created_at`, `updated_at`) VALUES
(5, 'Buy', 'Need to purchaser', 4, 1980, 'pending', 2, 0, '2021-12-26 16:35:22', '2021-12-26 16:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `expense_payments`
--

CREATE TABLE `expense_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `expense_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobile_agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_cash` int(11) NOT NULL,
  `receiver_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `receiver_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_payments`
--

INSERT INTO `expense_payments` (`id`, `expense_id`, `user_id`, `mobile_agent_id`, `amount`, `is_cash`, `receiver_type`, `receiver_number`, `trans_id`, `created_at`, `updated_at`) VALUES
(1, 1, 50, 2, 20, 1, 'Bkash', NULL, NULL, '2021-12-08 03:56:12', '2021-12-08 03:56:12'),
(2, 4, 2, 2, 6780, 1, 'Bkash', NULL, NULL, '2021-12-19 11:52:39', '2021-12-19 11:52:39');

-- --------------------------------------------------------

--
-- Table structure for table `expense_types`
--

CREATE TABLE `expense_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expense_types`
--

INSERT INTO `expense_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'test8', '2021-12-08 00:23:17', '2021-12-08 00:24:53'),
(2, 'phone bill', '2021-12-11 19:28:34', '2021-12-11 19:28:34'),
(3, 'New Type', '2021-12-23 22:31:40', '2021-12-23 22:31:40'),
(4, 'Food', '2021-12-26 16:34:26', '2021-12-26 16:34:26');

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(14, 'Electronic Physiotherapy', 500, '2021-12-26 15:40:35', '2022-01-06 10:12:06'),
(15, 'Acton Daugherty', 800, '2022-01-06 10:08:19', '2022-01-06 10:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `leave_applications`
--

CREATE TABLE `leave_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `leave_type_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `days` int(11) NOT NULL,
  `approved_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_applications`
--

INSERT INTO `leave_applications` (`id`, `user_id`, `leave_type_id`, `start_date`, `end_date`, `status`, `days`, `approved_by`, `created_at`, `updated_at`, `description`) VALUES
(1, 54, 2, '2021-12-08', '2021-12-17', '1', 0, NULL, '2021-12-09 09:34:21', '2021-12-11 13:41:02', 'sssfsf'),
(2, 58, 2, '2021-12-09', '2021-12-13', 'pending', 0, NULL, '2021-12-11 18:20:19', '2021-12-11 18:20:19', 'need my leave'),
(3, 69, 3, '2021-12-15', '2021-12-20', 'pending', 0, NULL, '2021-12-14 20:26:28', '2021-12-14 20:26:28', 'accident'),
(4, 28, 2, '2021-12-19', '2021-12-20', 'pending', 0, NULL, '2021-12-19 12:37:07', '2021-12-19 12:37:07', NULL),
(5, 76, 3, '2021-12-19', '2021-12-20', 'pending', 0, NULL, '2021-12-19 12:41:29', '2021-12-19 12:41:29', NULL),
(6, 86, 4, '2022-01-01', '2022-01-03', 'pending', 0, NULL, '2021-12-26 17:07:24', '2021-12-26 17:07:24', 'Need a 3 days leave');

-- --------------------------------------------------------

--
-- Table structure for table `leave_types`
--

CREATE TABLE `leave_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `leave_types`
--

INSERT INTO `leave_types` (`id`, `name`, `limit`, `created_at`, `updated_at`) VALUES
(2, 'casual', 20, '2022-01-07 09:03:41', '2022-01-07 09:03:42'),
(3, 'Medical', 15, '2021-12-11 13:41:59', '2021-12-11 13:41:59'),
(4, 'DR c', 3, '2021-12-26 16:22:24', '2021-12-26 16:22:24');

-- --------------------------------------------------------

--
-- Table structure for table `machines`
--

CREATE TABLE `machines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `machines`
--

INSERT INTO `machines` (`id`, `name`, `details`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 'IR', NULL, 0, '2022-01-10 23:21:53', '2022-01-10 23:21:53');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_10_05_181752_create_roles_table', 1),
(6, '2021_10_06_050747_create_appointments_table', 1),
(7, '2021_10_06_051647_create_services_table', 1),
(8, '2021_10_06_112837_create_patient_profile_table', 1),
(9, '2021_10_25_160401_create_specialist_list', 2),
(10, '2021_10_26_053104_create_doctors_table', 3),
(11, '2021_10_26_064753_add_rfid_to_users_table', 3),
(12, '2021_10_26_065620_add_doctor_id_to_appointments_table', 3),
(13, '2021_10_26_074409_add_rfid_to_patient_profile_table', 3),
(14, '2021_10_27_115948_create_therapy_table', 3),
(15, '2021_10_28_061254_create_prescription_details_table', 4),
(16, '2021_10_28_094202_create_therapy_assign_table', 4),
(17, '2021_10_28_115828_create_refer_table', 4),
(18, '2021_10_29_051413_add_therapy_id_to_appointment_table', 5),
(19, '2021_10_29_063430_add_columns_to_therapy_assign_table', 6),
(20, '2021_10_30_083826_create_payment_table', 7),
(21, '2021_10_30_103330_add_amount_field_to_appointments_table', 7),
(22, '2021_10_31_165030_create_employee_table', 8),
(23, '2021_11_23_101951_create_machines_table', 9),
(24, '2021_11_23_145137_create_compounders_table', 10),
(25, '2021_11_23_172609_create_appointment_therapies_table', 11),
(26, '2021_11_23_172935_create_appointment_therapy_individuals_table', 11),
(27, '2021_11_23_172944_create_appointment_therapy_individual_machines_table', 11),
(28, '2021_11_29_083625_create_mobel_agents_table', 12),
(29, '2021_11_29_083646_create_appoinment_payments_table', 12),
(30, '2021_11_29_085809_create_mobile_agents_table', 13),
(31, '2021_12_01_130612_create_slots_table', 14),
(32, '2021_12_01_130721_create_appointment_slots_table', 14),
(33, '2021_12_01_161239_create_appointment_notes_table', 15),
(34, '2021_12_05_040845_create_types_table', 16),
(35, '2021_12_05_141419_create_tasks_table', 17),
(36, '2021_12_05_141607_create_task_assigns_table', 17),
(37, '2021_12_05_141653_create_task_notes_table', 17),
(38, '2021_12_05_141723_create_requisitions_table', 17),
(39, '2021_12_05_141948_create_requisition_payments_table', 17),
(40, '2021_12_05_142056_create_expense_types_table', 17),
(41, '2021_12_05_142107_create_expenses_table', 17),
(42, '2021_12_05_142236_create_expense_payments_table', 17),
(51, '2021_12_06_054549_create_task_statuses_table', 18),
(54, '2021_12_08_144102_create_leaves_table', 18),
(55, '2021_12_09_052331_create_therapy_groups_table', 18),
(56, '2021_12_09_052405_create_groups_table', 18),
(57, '2021_12_09_052611_create_tests_table', 18),
(58, '2021_12_09_052619_create_therapy_tests_table', 18),
(59, '2021_12_08_144036_create_leave_types_table', 19),
(60, '2021_12_08_144054_create_leave_applications_table', 19);

-- --------------------------------------------------------

--
-- Table structure for table `mobel_agents`
--

CREATE TABLE `mobel_agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mobile_agents`
--

CREATE TABLE `mobile_agents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mobile_agents`
--

INSERT INTO `mobile_agents` (`id`, `type`, `number`, `balance`, `created_at`, `updated_at`) VALUES
(2, 'Bkash', '01736937161', -3389, '2021-11-29 04:50:01', '2021-12-08 07:34:09'),
(3, 'Bkash', '01840040010', 0, '2021-12-10 08:36:35', '2021-12-10 08:36:35');

-- --------------------------------------------------------

--
-- Table structure for table `mobile_agent_types`
--

CREATE TABLE `mobile_agent_types` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobile_agent_types`
--

INSERT INTO `mobile_agent_types` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Bikash', NULL, '0'),
(2, 'Nogod', NULL, '0');

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
-- Table structure for table `patient_calendars`
--

CREATE TABLE `patient_calendars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `slot` int(11) NOT NULL,
  `date` date NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_calendars`
--

INSERT INTO `patient_calendars` (`id`, `patient_id`, `slot`, `date`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 22, 1, '2022-01-10', 2, '2022-01-10 16:19:37', '2022-01-10 16:19:37'),
(2, 24, 1, '2022-01-10', 2, '2022-01-10 16:20:45', '2022-01-10 16:20:45'),
(3, 24, 1, '2022-01-10', 2, '2022-01-10 16:47:30', '2022-01-10 16:47:30');

-- --------------------------------------------------------

--
-- Table structure for table `patient_profile`
--

CREATE TABLE `patient_profile` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `age` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=male, 2=female',
  `blood` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=A+ | 2=A- | 3=B+ | 4=B- | 5=AB+ | 6=AB- | 7=O+ | 8=O-',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rfid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bp` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_profile`
--

INSERT INTO `patient_profile` (`id`, `patient_id`, `phone`, `status`, `age`, `address`, `nid`, `gender`, `blood`, `created_at`, `updated_at`, `rfid`, `bp`) VALUES
(20, 81, 1611586871, 1, 30, 'Default', '01254866555', '1', '1', '2021-12-24 23:11:21', '2021-12-24 23:11:21', NULL, '0'),
(21, 82, 1840040010, 1, 50, 'Default', '361874385', '1', '3', '2021-12-26 13:30:28', '2021-12-26 13:30:28', NULL, '0'),
(22, 83, 1987456324, 1, 25, 'Default', '987456327', '1', '4', '2021-12-26 14:42:43', '2021-12-26 14:42:43', NULL, '0'),
(23, 90, 87834518618, 1, 34, 'Default', '285', '1', '3', '2021-12-26 18:30:49', '2021-12-26 18:30:49', NULL, '0'),
(24, 92, 1987456325, 1, 30, 'Default', '254789631', '2', '3', '2022-01-09 17:12:32', '2022-01-11 16:39:04', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL DEFAULT 0,
  `discount_get` int(11) NOT NULL DEFAULT 0,
  `sub_total` int(11) NOT NULL DEFAULT 0,
  `advanced_pay` int(11) NOT NULL DEFAULT 0,
  `due_have` int(11) NOT NULL DEFAULT 0,
  `type` tinyint(4) NOT NULL COMMENT '0=undefine | 1=complete | 2=advanced | 3=due | 4=pay',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `user_id`, `patient_id`, `amount`, `discount_get`, `sub_total`, `advanced_pay`, `due_have`, `type`, `created_at`, `updated_at`) VALUES
(1, 14, 14, 120000, 0, 0, 0, 120000, 3, '2021-10-31 09:22:01', '2021-10-31 09:22:01'),
(2, 14, 14, 50000, 0, 50000, 50000, 0, 4, '2021-10-31 09:23:41', '2021-10-31 09:23:41'),
(3, 32, 32, 3650, 0, 3650, 3650, 0, 4, '2021-11-16 09:59:18', '2021-11-16 09:59:18'),
(4, 14, 14, 3560, 0, 3560, 3560, 0, 4, '2021-11-16 10:00:18', '2021-11-16 10:00:18'),
(5, 32, 32, 50000, 0, 0, 0, 50000, 3, '2021-11-27 02:16:41', '2021-11-27 02:16:41');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_details`
--

CREATE TABLE `prescription_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL DEFAULT 0,
  `patient_id` int(11) NOT NULL DEFAULT 0,
  `appointment_id` int(11) NOT NULL DEFAULT 0,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meal` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_liquid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `medicine_solid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescription_details`
--

INSERT INTO `prescription_details` (`id`, `doctor_id`, `patient_id`, `appointment_id`, `details`, `medicine_name`, `meal`, `medicine_liquid`, `medicine_solid`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 12, 14, 5, 'Advice number one', '[\"Napa\"]', '[\"1\"]', '[\"3\"]', '[\"1\"]', NULL, 1, '2021-10-30 11:31:32', '2021-10-30 11:31:32'),
(2, 12, 14, 19, 'test prescription it is. all is done?', '[\"Napa Extend\",\"Alatrol\"]', '[\"2\",\"1\"]', '[\"1\",\"1\"]', '[\"1\",\"1\"]', '6-1635691875.jpg', 1, '2021-10-31 08:51:15', '2021-10-31 08:51:15'),
(3, 23, 47, 18, 'gghjwjdwwedde', '[\"dssssdsd\"]', '[\"1\"]', '[\"1\"]', '[\"1\"]', '18-1638018415.png', 1, '2021-11-27 07:06:55', '2021-11-27 07:06:55'),
(4, 23, 51, 19, 'take medicine', '[\"test\"]', '[\"1\"]', '[\"1\"]', '[\"1\"]', '19-1638350397.png', 1, '2021-12-01 03:19:57', '2021-12-01 03:19:57'),
(5, 23, 47, 18, 'kire', 'null', 'null', 'null', 'null', NULL, 1, '2021-12-01 11:02:34', '2021-12-01 11:02:34'),
(6, 23, 47, 18, NULL, 'null', 'null', 'null', 'null', NULL, 1, '2021-12-01 11:02:40', '2021-12-01 11:02:40'),
(7, 23, 51, 10, 'kire', '[\"hello\"]', '[\"1\"]', '[\"2\"]', '[\"1\"]', '19-1638378304.png', 1, '2021-12-01 11:05:04', '2021-12-01 11:05:04'),
(8, 23, 22, 20, 'hndffeef', 'null', 'null', 'null', 'null', '20-1638776210.jpg', 1, '2021-12-06 01:36:50', '2021-12-06 01:36:50'),
(9, 46, 47, 18, NULL, '[null]', '[\"1\"]', '[null]', '[\"1\"]', NULL, 1, '2021-12-09 06:34:02', '2021-12-09 06:34:02'),
(10, 46, 14, 17, NULL, 'null', 'null', 'null', 'null', NULL, 1, '2021-12-09 06:35:09', '2021-12-09 06:35:09'),
(11, 58, 59, 31, 'ttt', '[\"napa\",\"max\",\"redh\"]', '[\"2\",\"1\",\"2\"]', '[\"10\",\"10\",\"10\"]', '[\"1\",\"6\",\"3\"]', NULL, 1, '2021-12-11 13:11:34', '2021-12-11 13:11:34'),
(12, 58, 22, 33, 'hhasasasasas', '[\"napa\"]', '[\"1\"]', '[\"1\"]', '[\"1\"]', '33-1639213304.jpg', 1, '2021-12-11 14:01:44', '2021-12-11 14:01:44'),
(13, 69, 68, 37, 'need treatment', '[\"NAPA\"]', '[\"2\"]', '[\"7\"]', '[\"2\"]', NULL, 1, '2021-12-14 20:02:21', '2021-12-14 20:02:21'),
(14, 28, 22, 26, 'gcrjh', 'null', 'null', 'null', 'null', '26-1639897926.jpg', 1, '2021-12-19 12:12:06', '2021-12-19 12:12:06'),
(15, 28, 22, 26, 'gcrjh', '[null]', '[\"1\"]', '[null]', '[\"1\"]', '26-1639899092.jpg', 1, '2021-12-19 12:31:32', '2021-12-19 12:31:32'),
(16, 79, 22, 26, 'gcrjh', '[\"gasofer\",\"Monus\"]', '[\"1\",\"2\"]', '[\"1\",\"1\"]', '[\"1\",\"1\"]', '26-1639900793.docx', 1, '2021-12-19 12:59:53', '2021-12-19 12:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `refer`
--

CREATE TABLE `refer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` int(11) NOT NULL DEFAULT 0,
  `appointment_id` int(11) NOT NULL DEFAULT 0,
  `refer_doctor_id` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `refer`
--

INSERT INTO `refer` (`id`, `patient_id`, `appointment_id`, `refer_doctor_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 47, 18, 2, 1, '2021-12-01 00:33:02', '2021-12-01 00:33:02'),
(2, 47, 18, 8, 1, '2021-12-01 00:33:19', '2021-12-01 00:33:19'),
(3, 68, 36, 13, 1, '2021-12-14 20:11:00', '2021-12-14 20:11:00'),
(4, 22, 26, 15, 1, '2021-12-19 12:12:17', '2021-12-19 12:12:17'),
(5, 22, 26, 15, 1, '2021-12-19 12:53:46', '2021-12-19 12:53:46'),
(6, 83, 45, 17, 1, '2021-12-26 16:49:59', '2021-12-26 16:49:59'),
(7, 83, 45, 17, 1, '2021-12-26 16:50:02', '2021-12-26 16:50:02'),
(8, 83, 45, 16, 1, '2021-12-26 17:06:15', '2021-12-26 17:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `requisitions`
--

CREATE TABLE `requisitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL DEFAULT 0,
  `approved_by` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `emp_approved` int(11) NOT NULL DEFAULT 0,
  `paid` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requisitions`
--

INSERT INTO `requisitions` (`id`, `title`, `description`, `amount`, `status`, `user_id`, `employee_id`, `approved_by`, `created_at`, `updated_at`, `emp_approved`, `paid`) VALUES
(8, 'CPR Machine', 'Destroy the CPR  machine', 10000000, '0', 2, 85, 0, '2021-12-26 16:20:29', '2022-01-09 19:08:14', 1, 500);

-- --------------------------------------------------------

--
-- Table structure for table `requisition_payments`
--

CREATE TABLE `requisition_payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `requisition_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `mobile_agent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` int(11) NOT NULL,
  `is_cash` int(11) NOT NULL,
  `sender_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sender_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requisition_payments`
--

INSERT INTO `requisition_payments` (`id`, `requisition_id`, `user_id`, `mobile_agent_id`, `amount`, `is_cash`, `sender_type`, `sender_number`, `trans_id`, `created_at`, `updated_at`) VALUES
(1, 1, 50, 2, 45, 1, 'Bkash', NULL, NULL, '2021-12-08 07:33:47', '2021-12-08 07:33:47'),
(2, 1, 50, 2, 3389, 0, 'Bkash', '09668oo', '12344', '2021-12-08 07:34:09', '2021-12-08 07:34:09'),
(3, 8, 89, 2, 500, 1, 'Bkash', NULL, NULL, '2022-01-09 19:08:14', '2022-01-09 19:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `name`, `desc`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Fever', 'details', 1, NULL, NULL),
(2, 'Cough', 'details', 1, NULL, NULL),
(3, 'new type', 'det', 1, '2021-12-04 23:41:48', '2021-12-04 23:41:48'),
(4, 'new t', 'det', 1, '2021-12-04 23:51:08', '2021-12-04 23:51:08'),
(5, 'test type', 'det', 1, '2021-12-06 01:17:00', '2021-12-06 01:17:00'),
(6, 'adlkjj', 'det', 1, '2021-12-11 12:39:07', '2021-12-11 12:39:07'),
(7, 'agsyd', 'det', 1, '2021-12-11 12:40:05', '2021-12-11 12:40:05'),
(8, 'sghh', 'det', 1, '2021-12-11 12:40:59', '2021-12-11 12:40:59'),
(9, 'জর', 'det', 1, '2021-12-14 19:20:26', '2021-12-14 19:20:26'),
(10, 'pain', 'det', 1, '2021-12-26 13:31:48', '2021-12-26 13:31:48'),
(11, 'Headache', 'det', 1, '2021-12-26 14:55:31', '2021-12-26 14:55:31');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `start`, `end`, `created_at`, `updated_at`) VALUES
(1, '10:00', '1:00', '2021-12-01 07:18:50', '2021-12-01 07:19:59'),
(2, '12.00', '2.00', '2021-12-01 09:19:10', '2021-12-01 09:19:10'),
(3, '3:00', '4:00', '2021-12-01 09:19:24', '2021-12-01 09:19:24'),
(4, '4.00', '4.20', '2021-12-06 01:24:23', '2021-12-06 01:24:23'),
(5, '6.00', '8.00', '2021-12-19 14:06:09', '2021-12-19 14:06:09'),
(6, '10 PM', '12 AM', '2021-12-26 16:29:42', '2021-12-26 16:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `specialist_list`
--

CREATE TABLE `specialist_list` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specialist_list`
--

INSERT INTO `specialist_list` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(3, 'Physiotherapy', 1, '2021-10-30 09:49:32', '2022-01-10 04:28:57'),
(4, 'Pediatrician', 1, '2021-10-30 09:50:00', '2021-10-30 09:50:00'),
(5, 'ENT Specialist', 1, '2021-10-30 09:50:25', '2021-10-30 09:50:25'),
(6, 'General Physician', 3, '2021-10-30 09:50:56', '2021-12-09 22:24:41'),
(7, 'index.html', 3, '2021-11-01 12:10:32', '2021-12-09 22:24:14'),
(8, 'Dr. Perfect', 3, '2021-11-03 09:40:50', '2021-12-09 22:24:38'),
(9, 'Radiologist', 3, '2021-11-03 09:43:58', '2021-12-09 22:24:35'),
(10, 'Shimul Rahman', 3, '2021-11-05 10:10:18', '2021-12-09 22:24:28'),
(11, 'Shimul Rahman', 3, '2021-11-05 14:50:57', '2021-12-09 22:24:23'),
(12, 'fahim', 3, '2021-11-16 09:57:38', '2021-12-09 22:24:18'),
(13, 'BD car', 3, '2021-11-19 09:31:28', '2021-12-09 22:24:06'),
(14, 'Neurosurgist', 3, '2021-12-26 14:50:34', '2021-12-26 15:23:21'),
(15, 'Physiotherapy', 3, '2021-12-26 15:42:05', '2021-12-26 15:42:13'),
(16, 'Sujit Sarkar', 1, '2022-01-05 13:53:07', '2022-01-05 13:53:07'),
(17, 'Tele-Medicine', 1, '2022-01-09 17:16:59', '2022-01-09 17:16:59');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `description`, `user_id`, `status`, `created_at`, `updated_at`, `date`) VALUES
(8, 'Redx Agreement prepared', 'Do it asap', 85, 2, '2021-12-26 16:37:20', '2021-12-26 17:23:11', '2021-12-29'),
(9, 'Therapy', 'Give a quick therapy', 88, 1, '2021-12-26 17:18:49', '2021-12-26 17:19:17', NULL),
(10, 'Itaque voluptas repu', 'Qui harum nihil cons', 86, 0, '2022-01-06 08:47:31', '2022-01-06 08:47:31', '2022-01-06');

-- --------------------------------------------------------

--
-- Table structure for table `task_assigns`
--

CREATE TABLE `task_assigns` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `assigned_by` bigint(20) UNSIGNED NOT NULL,
  `assigned_to` bigint(20) UNSIGNED NOT NULL,
  `note` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_assigns`
--

INSERT INTO `task_assigns` (`id`, `task_id`, `assigned_by`, `assigned_to`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 53, 31, NULL, '2021-12-06 03:41:02', '2021-12-06 03:41:02'),
(2, 1, 53, 31, NULL, '2021-12-06 03:41:05', '2021-12-06 03:41:05'),
(3, 1, 53, 54, NULL, '2021-12-06 03:44:11', '2021-12-06 03:44:11'),
(4, 3, 54, 33, NULL, '2021-12-07 00:33:08', '2021-12-07 00:33:08'),
(5, 4, 54, 29, NULL, '2021-12-07 00:33:39', '2021-12-07 00:33:39'),
(6, 5, 64, 58, NULL, '2021-12-11 18:16:08', '2021-12-11 18:16:08'),
(7, 5, 58, 36, NULL, '2021-12-11 18:18:56', '2021-12-11 18:18:56'),
(8, 6, 58, 2, NULL, '2021-12-14 20:33:20', '2021-12-14 20:33:20'),
(9, 7, 28, 29, NULL, '2021-12-19 12:32:58', '2021-12-19 12:32:58'),
(10, 7, 28, 72, NULL, '2021-12-19 12:34:04', '2021-12-19 12:34:04'),
(11, 7, 28, 78, NULL, '2021-12-19 12:34:36', '2021-12-19 12:34:36'),
(12, 9, 88, 85, NULL, '2021-12-26 17:18:49', '2021-12-26 17:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `task_notes`
--

CREATE TABLE `task_notes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_notes`
--

INSERT INTO `task_notes` (`id`, `task_id`, `user_id`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, 53, 'hello', '2021-12-05 23:24:29', '2021-12-05 23:24:29'),
(2, 1, 2, 'koro', '2021-12-05 23:56:26', '2021-12-05 23:56:26'),
(3, 2, 2, 'do it carefully', '2021-12-06 01:27:39', '2021-12-06 01:27:39'),
(4, 5, 64, 'gjkljdfsh fgg', '2021-12-11 18:16:56', '2021-12-11 18:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `task_statuses`
--

CREATE TABLE `task_statuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `task_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `task_statuses`
--

INSERT INTO `task_statuses` (`id`, `task_id`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 58, '2021-12-11 18:18:41', '2021-12-11 18:18:41'),
(2, 9, 1, 88, '2021-12-26 17:19:17', '2021-12-26 17:19:17'),
(3, 9, 1, 88, '2021-12-26 17:19:17', '2021-12-26 17:19:17'),
(4, 8, 1, 85, '2021-12-26 17:20:45', '2021-12-26 17:20:45'),
(5, 8, 2, 2, '2021-12-26 17:23:11', '2021-12-26 17:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(5, 'CBC', 'A complete blood count (CBC) is a blood test used to evaluate your overall health and detect a wide range of disorders, including anemia, infection and leukemia. A complete blood count test measures several components and features of your blood, including: Red blood cells, which carry oxygen.', '2021-12-26 15:59:03', '2021-12-26 15:59:03'),
(6, 'Blood Sugar (Fasting)', 'A fasting blood sugar level less than 100 mg/dL (5.6 mmol/L) is normal. A fasting blood sugar level from 100 to 125 mg/dL (5.6 to 6.9 mmol/L) is considered prediabetes. If it\'s 126 mg/dL (7 mmol/L) or higher on two separate tests, you have diabetes. Oral glucose tolerance test.', '2021-12-26 16:01:12', '2021-12-26 16:01:12');

-- --------------------------------------------------------

--
-- Table structure for table `therapy`
--

CREATE TABLE `therapy` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `therapy_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `therapy`
--

INSERT INTO `therapy` (`id`, `therapy_name`, `status`, `created_at`, `updated_at`) VALUES
(17, 'MULTYFUNCTIONAL EQUIPMENT', 3, '2021-12-26 15:04:31', '2021-12-26 15:23:41'),
(18, 'TENS', 1, '2021-12-26 15:38:46', '2021-12-26 15:38:46'),
(19, 'IRR', 1, '2021-12-26 15:39:11', '2021-12-26 15:39:11'),
(20, 'Wax Bath', 1, '2021-12-26 15:39:46', '2021-12-26 15:39:46'),
(21, 'Short Wave Therapy', 1, '2021-12-26 15:54:45', '2021-12-26 15:54:45'),
(22, 'Traction', 1, '2021-12-26 15:55:21', '2021-12-26 15:55:21'),
(23, 'Ultra Sono', 1, '2021-12-26 15:55:50', '2021-12-26 15:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `therapy_assign`
--

CREATE TABLE `therapy_assign` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` int(11) NOT NULL DEFAULT 0,
  `doctor_assign_id` int(11) NOT NULL DEFAULT 0,
  `patient_id` int(11) NOT NULL DEFAULT 0,
  `therapy_id` int(11) NOT NULL DEFAULT 0,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `doese_complete` int(11) NOT NULL DEFAULT 0,
  `doese_history` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `therapy_assign`
--

INSERT INTO `therapy_assign` (`id`, `appointment_id`, `doctor_assign_id`, `patient_id`, `therapy_id`, `status`, `created_at`, `updated_at`, `doese_complete`, `doese_history`) VALUES
(4, 7, 12, 14, 2, 1, '2021-10-31 09:22:01', '2021-10-31 09:22:01', 0, NULL),
(5, 8, 23, 32, 3, 1, '2021-11-27 02:13:57', '2021-11-27 02:13:57', 0, NULL),
(6, 8, 23, 32, 3, 1, '2021-11-27 02:14:56', '2021-11-27 02:14:56', 0, NULL),
(7, 8, 23, 32, 3, 1, '2021-11-27 02:16:41', '2021-11-27 02:16:41', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `therapy_groups`
--

CREATE TABLE `therapy_groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `group_id` int(11) NOT NULL,
  `therapy_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `therapy_groups`
--

INSERT INTO `therapy_groups` (`id`, `group_id`, `therapy_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 4, 1, 0, '2021-12-09 04:09:54', '2021-12-09 04:09:54'),
(2, 4, 3, 0, '2021-12-09 04:09:54', '2021-12-09 04:09:54'),
(6, 6, 2, 0, '2021-12-09 04:32:02', '2021-12-09 04:32:02'),
(8, 6, 5, 0, '2021-12-09 04:32:02', '2021-12-09 04:32:02'),
(9, 5, 9, 0, '2021-12-09 04:32:02', '2021-12-09 04:32:02'),
(10, 9, 2, 0, '2021-12-19 10:21:28', '2021-12-19 10:21:28'),
(11, 9, 5, 0, '2021-12-19 10:21:28', '2021-12-19 10:21:28'),
(12, 10, 1, 0, '2021-12-19 10:26:25', '2021-12-19 10:26:25'),
(13, 10, 4, 0, '2021-12-19 10:26:25', '2021-12-19 10:26:25'),
(14, 10, 6, 0, '2021-12-19 10:26:25', '2021-12-19 10:26:25'),
(15, 10, 9, 0, '2021-12-19 10:26:25', '2021-12-19 10:26:25'),
(16, 13, 13, 0, '2021-12-22 18:45:17', '2021-12-22 18:45:17'),
(38, 15, 18, 0, '2022-01-06 10:11:55', '2022-01-06 10:11:55'),
(39, 15, 19, 0, '2022-01-06 10:11:55', '2022-01-06 10:11:55'),
(40, 15, 20, 0, '2022-01-06 10:11:55', '2022-01-06 10:11:55'),
(41, 15, 21, 0, '2022-01-06 10:11:55', '2022-01-06 10:11:55'),
(42, 15, 22, 0, '2022-01-06 10:11:55', '2022-01-06 10:11:55'),
(43, 14, 20, 0, '2022-01-06 10:12:06', '2022-01-06 10:12:06'),
(44, 14, 21, 0, '2022-01-06 10:12:06', '2022-01-06 10:12:06'),
(45, 14, 22, 0, '2022-01-06 10:12:06', '2022-01-06 10:12:06'),
(46, 14, 23, 0, '2022-01-06 10:12:06', '2022-01-06 10:12:06');

-- --------------------------------------------------------

--
-- Table structure for table `therapy_machines`
--

CREATE TABLE `therapy_machines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `therapy_id` bigint(20) UNSIGNED NOT NULL,
  `machine_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `therapy_machines`
--

INSERT INTO `therapy_machines` (`id`, `therapy_id`, `machine_id`, `created_at`, `updated_at`) VALUES
(8, 4, 3, '2021-12-19 12:25:51', '2021-12-19 12:25:51'),
(10, 11, 4, '2021-12-19 12:27:00', '2021-12-19 12:27:00'),
(12, 12, 2, '2021-12-19 12:27:33', '2021-12-19 12:27:33'),
(16, 6, 4, '2021-12-19 12:28:05', '2021-12-19 12:28:05'),
(18, 2, 3, '2021-12-19 12:28:22', '2021-12-19 12:28:22'),
(19, 3, 2, '2021-12-19 12:28:28', '2021-12-19 12:28:28'),
(21, 14, 4, '2021-12-19 12:29:37', '2021-12-19 12:29:37'),
(22, 9, 5, '2021-12-19 12:30:01', '2021-12-19 12:30:01'),
(23, 1, 2, '2021-12-19 12:30:16', '2021-12-19 12:30:16'),
(24, 15, 6, '2021-12-22 17:50:31', '2021-12-22 17:50:31'),
(25, 15, 7, '2021-12-22 17:50:31', '2021-12-22 17:50:31'),
(26, 15, 8, '2021-12-22 17:50:31', '2021-12-22 17:50:31'),
(27, 15, 9, '2021-12-22 17:50:31', '2021-12-22 17:50:31'),
(28, 15, 10, '2021-12-22 17:50:31', '2021-12-22 17:50:31'),
(29, 15, 11, '2021-12-22 17:50:31', '2021-12-22 17:50:31'),
(30, 15, 12, '2021-12-22 17:50:31', '2021-12-22 17:50:31'),
(31, 16, 13, '2021-12-22 17:52:01', '2021-12-22 17:52:01'),
(40, 13, 12, '2021-12-22 18:55:24', '2021-12-22 18:55:24'),
(41, 17, 6, '2021-12-26 15:04:31', '2021-12-26 15:04:31'),
(42, 18, 14, '2021-12-26 15:38:46', '2021-12-26 15:38:46'),
(43, 19, 15, '2021-12-26 15:39:11', '2021-12-26 15:39:11'),
(44, 20, 16, '2021-12-26 15:39:46', '2021-12-26 15:39:46'),
(45, 21, 17, '2021-12-26 15:54:45', '2021-12-26 15:54:45'),
(46, 22, 18, '2021-12-26 15:55:21', '2021-12-26 15:55:21'),
(47, 23, 19, '2021-12-26 15:55:50', '2021-12-26 15:55:50');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_manage` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` bigint(20) NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rfid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `role_manage`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`, `rfid`, `image`, `salary`) VALUES
(2, 'Mr. Admin', 'admin@gmail.com', NULL, 'admin', NULL, 1777777777, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', 'SgqcWC5pNiw79CfbHBGlSFd9FFwXjzHJvYJw4lXi6RqxXPG0I4Pfyc4nEZwZ', '2021-10-06 17:03:42', '2021-10-06 17:03:42', NULL, NULL, 0),
(81, 'Shimanto Arif', 'shimantoeee@gmail.com', NULL, 'patient', NULL, 1611586871, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', NULL, '2021-12-24 23:11:21', '2021-12-24 23:12:27', NULL, '1640369547.jpg', 0),
(82, 'LITON', 'LITON12345@gmail.com', NULL, 'patient', NULL, 1840040010, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', NULL, '2021-12-26 13:30:28', '2021-12-26 13:30:28', NULL, NULL, 0),
(83, 'Mr p', 'mrp@gmail.com', NULL, 'patient', NULL, 1987456324, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', NULL, '2021-12-26 14:42:43', '2021-12-26 14:42:43', NULL, NULL, 0),
(84, 'DR d', 'drd@gmail.com', NULL, 'doctor', NULL, 1874523695, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', NULL, '2021-12-26 14:59:34', '2021-12-26 15:43:04', NULL, NULL, 0),
(85, 'Mr E', 'mre@gmail.com', NULL, 'employee', NULL, 1987456326, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', NULL, '2021-12-26 16:12:41', '2021-12-26 16:12:41', NULL, '1640517161.jpg', 0),
(86, 'DR c', 'drc@gmail.com', NULL, 'doctor', NULL, 1698745239, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', NULL, '2021-12-26 16:22:00', '2022-01-05 11:21:36', NULL, NULL, 0),
(87, 'Mr Coordinator', 'mrco@gmail.com', NULL, 'compounder', NULL, 1965874235, '$2y$10$WJFPmUG7whKoshRXdOHGAuZd7TBP2mpDzBev9gfxIDNYzwTqZuOQS', NULL, '2021-12-26 16:24:09', '2022-01-11 16:42:15', NULL, NULL, 0),
(88, 'Mr T', 'mrt@gmail.com', NULL, 'therapist', NULL, 1965874234, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', NULL, '2021-12-26 16:27:37', '2021-12-26 16:27:37', NULL, NULL, 0),
(89, 'Mr Ac', 'mrac@gmail.com', NULL, 'accountant', NULL, 1587964239, '$2y$10$zklpvpTCuSdkAVDPCUc59OpvsbI4Ro3NGxxePNWrm9Rz7DbcsJndi', NULL, '2021-12-26 16:28:49', '2022-01-11 19:15:09', NULL, NULL, 0),
(90, 'xbetoxmef', 'c.ar.ro.ls.mj.er.i.cc.h.a.nc.ef.r@gmail.com', NULL, 'patient', NULL, 87834518618, '$2y$10$GUGYXzu.yH7Cijn9XokvL.uSEDk7iGCPlXzZwOjBZp6d9qWzGhsbC', NULL, '2021-12-26 18:30:49', '2021-12-26 18:30:49', NULL, NULL, 0),
(92, 'mr test p', 'mrtestp@gmail.com', NULL, 'patient', NULL, 1987456325, '$2y$10$Eb/eDjddvZrjcSJ8gkibR.EVUJyVPYYMiJnvJ2qiZbPneFNgAggnO', NULL, '2022-01-09 17:12:32', '2022-01-11 16:39:04', NULL, NULL, 0),
(93, 'Dr test Dr', 'drtestdr@gmail.com', NULL, 'doctor', NULL, 1987456325, '$2y$10$Y4LQIYfsZ/VmKc9pMmrVPuCwEhNiZ7Gf/p8sB4KCBxCZsDbltfnKu', NULL, '2022-01-09 17:18:12', '2022-01-09 17:18:12', NULL, NULL, 0),
(94, 'Dr test Dr', 'drtestdrr@gmail.com', NULL, 'doctor', NULL, 1987456325, '$2y$10$/l6yNeCGIzFpx1lsmCcqF.5OSzFmi3Ttc/JLJuv8u1DJEj9tcLYbG', NULL, '2022-01-09 17:18:59', '2022-01-09 17:18:59', NULL, NULL, 0),
(95, 'SHARMIN AKTER', 'sharmin.nitor@gmail.com', NULL, 'doctor', NULL, 1722987109, '$2y$10$ctq1xoDd/SK0BQmuSFQf8.19xQEIK6RtaWZayjpfVnO0dzf40PuWS', NULL, '2022-01-10 04:31:24', '2022-01-11 16:34:05', NULL, NULL, 0),
(96, 'OMEGA', 'omega@gmail.com', NULL, 'employee', NULL, 1778788787, '$2y$10$6sBZ3sn2glx17B25pvH52.0..Dnsy2Azni7VjsTfgR1IXwhtPnL2m', NULL, '2022-01-10 04:34:57', '2022-01-10 04:34:57', NULL, NULL, 0),
(97, 'ashik', 'ashik@gmial.com', NULL, 'accountant', NULL, 1840040010, '$2y$10$WhTzVAmuJyy.qu9SIpDsC.B40VB1h8CW4u94xqEWNaqs4aNg6mpaW', NULL, '2022-01-10 04:44:39', '2022-01-11 16:53:13', NULL, NULL, 0),
(101, 'mr the', 'mrthe@gmail.com', NULL, 'therapist', NULL, 1587964236, '$2y$10$m8koR4J60dPKFhuPkQG.Zu9C6nzlZmsdITEjRzFW0C0hmilCPkNcW', NULL, '2022-01-11 16:49:08', '2022-01-11 16:49:08', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_attendences`
--

CREATE TABLE `user_attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `attendence_date` date NOT NULL,
  `on_leave` tinyint(1) NOT NULL DEFAULT 0,
  `present` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_attendences`
--

INSERT INTO `user_attendences` (`id`, `user_id`, `attendence_date`, `on_leave`, `present`, `created_at`, `updated_at`) VALUES
(1, 2, '2021-12-11', 0, 1, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(2, 3, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(3, 4, '2021-12-11', 0, 1, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(4, 6, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(5, 12, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(6, 13, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(7, 23, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(8, 28, '2021-12-11', 0, 1, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(9, 29, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(10, 31, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(11, 33, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(12, 36, '2021-12-11', 0, 0, '2021-12-10 23:29:05', '2021-12-11 01:08:45'),
(13, 38, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(14, 42, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(15, 43, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(16, 45, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(17, 46, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(18, 49, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(19, 50, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(20, 52, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(21, 53, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(22, 54, '2021-12-11', 0, 0, '2021-12-10 23:29:06', '2021-12-11 01:08:45'),
(23, 2, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(24, 3, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(25, 4, '2021-12-10', 0, 1, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(26, 6, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(27, 12, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(28, 13, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(29, 23, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(30, 28, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(31, 29, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(32, 31, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(33, 33, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(34, 36, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(35, 38, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(36, 42, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(37, 43, '2021-12-10', 0, 1, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(38, 45, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(39, 46, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(40, 49, '2021-12-10', 0, 1, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(41, 50, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(42, 52, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(43, 53, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(44, 54, '2021-12-10', 0, 0, '2021-12-10 23:49:47', '2021-12-10 23:50:01'),
(45, 2, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(46, 3, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(47, 4, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(48, 6, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(49, 12, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(50, 13, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(51, 23, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(52, 28, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(53, 29, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(54, 31, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(55, 33, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(56, 36, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(57, 38, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(58, 42, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(59, 43, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(60, 45, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(61, 46, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(62, 49, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(63, 50, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(64, 52, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(65, 53, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(66, 54, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(67, 55, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(68, 56, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(69, 57, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(70, 58, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(71, 60, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(72, 61, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(73, 62, '2021-12-08', 0, 1, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(74, 63, '2021-12-08', 0, 0, '2021-12-11 13:39:58', '2021-12-12 12:02:40'),
(75, 2, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(76, 3, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(77, 4, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(78, 6, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(79, 12, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(80, 13, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(81, 23, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(82, 28, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(83, 29, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(84, 31, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(85, 33, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(86, 36, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(87, 38, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(88, 42, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(89, 43, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(90, 45, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(91, 46, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(92, 49, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(93, 50, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(94, 52, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(95, 53, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(96, 54, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(97, 55, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(98, 56, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(99, 57, '2021-12-07', 0, 1, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(100, 58, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(101, 60, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(102, 61, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(103, 62, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(104, 63, '2021-12-07', 0, 0, '2021-12-11 17:02:36', '2021-12-11 17:03:26'),
(105, 2, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(106, 3, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(107, 4, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(108, 6, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(109, 12, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(110, 13, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(111, 23, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(112, 28, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(113, 29, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(114, 31, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(115, 33, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(116, 36, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(117, 38, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(118, 42, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(119, 43, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(120, 45, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(121, 46, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(122, 49, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(123, 50, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(124, 52, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(125, 53, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(126, 54, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(127, 55, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(128, 56, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(129, 57, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(130, 58, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(131, 60, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(132, 61, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(133, 62, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(134, 63, '2021-12-01', 0, 0, '2021-12-11 17:03:41', '2021-12-11 17:03:41'),
(135, 2, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(136, 3, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(137, 4, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(138, 6, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(139, 12, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(140, 13, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(141, 23, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(142, 28, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(143, 29, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(144, 31, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(145, 33, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(146, 36, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(147, 38, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(148, 42, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(149, 43, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(150, 45, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(151, 46, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(152, 49, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(153, 50, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(154, 52, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(155, 53, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(156, 54, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(157, 55, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(158, 56, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(159, 57, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(160, 58, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(161, 60, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(162, 61, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(163, 62, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(164, 63, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(165, 64, '2021-12-12', 0, 0, '2021-12-12 11:42:15', '2021-12-12 11:42:15'),
(166, 2, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(167, 3, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(168, 4, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(169, 6, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(170, 12, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(171, 13, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(172, 23, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(173, 28, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(174, 29, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(175, 31, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(176, 33, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(177, 36, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(178, 38, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(179, 42, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(180, 43, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(181, 45, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(182, 46, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(183, 49, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(184, 50, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(185, 52, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(186, 53, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(187, 54, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(188, 55, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(189, 56, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(190, 57, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(191, 58, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(192, 60, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(193, 61, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(194, 62, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(195, 63, '2021-12-02', 0, 0, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(196, 64, '2021-12-02', 0, 1, '2021-12-12 12:01:51', '2021-12-12 12:02:05'),
(197, 2, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(198, 3, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(199, 4, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(200, 6, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(201, 12, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(202, 13, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(203, 23, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(204, 28, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(205, 29, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(206, 31, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(207, 33, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(208, 36, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(209, 38, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(210, 42, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(211, 43, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(212, 45, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(213, 46, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(214, 49, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(215, 50, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(216, 52, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(217, 53, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(218, 54, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(219, 55, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(220, 56, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(221, 57, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(222, 58, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(223, 60, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(224, 61, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(225, 62, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(226, 63, '2021-12-04', 0, 0, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(227, 64, '2021-12-04', 0, 1, '2021-12-12 12:02:11', '2021-12-12 12:02:23'),
(228, 2, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(229, 3, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(230, 4, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(231, 6, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(232, 12, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(233, 13, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(234, 23, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(235, 28, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(236, 29, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(237, 31, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(238, 33, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(239, 36, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(240, 38, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(241, 42, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(242, 43, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(243, 45, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(244, 46, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(245, 49, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(246, 50, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(247, 52, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(248, 53, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(249, 54, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(250, 55, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(251, 56, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(252, 57, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(253, 58, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(254, 60, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(255, 61, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(256, 62, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(257, 63, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(258, 64, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(259, 69, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(260, 70, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(261, 72, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(262, 73, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(263, 75, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(264, 76, '2021-12-19', 0, 0, '2021-12-19 10:38:35', '2021-12-19 10:38:35'),
(265, 2, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(266, 3, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(267, 4, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(268, 6, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(269, 12, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(270, 13, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(271, 23, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(272, 28, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(273, 29, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(274, 31, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(275, 33, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(276, 36, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(277, 38, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(278, 42, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(279, 43, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(280, 45, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(281, 46, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(282, 49, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(283, 50, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(284, 52, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(285, 53, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(286, 54, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(287, 55, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(288, 56, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(289, 57, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(290, 58, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(291, 60, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(292, 61, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(293, 62, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(294, 63, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(295, 64, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(296, 69, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(297, 70, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(298, 72, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(299, 73, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(300, 75, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(301, 76, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(302, 77, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(303, 78, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(304, 79, '2021-12-22', 0, 0, '2021-12-22 15:27:57', '2021-12-22 15:27:57'),
(305, 2, '2021-12-26', 0, 0, '2021-12-26 16:12:38', '2021-12-26 16:12:38'),
(306, 84, '2021-12-26', 0, 0, '2021-12-26 16:12:38', '2021-12-26 16:12:38'),
(307, 2, '2022-01-05', 0, 0, '2022-01-05 11:12:38', '2022-01-05 11:12:38'),
(308, 84, '2022-01-05', 0, 0, '2022-01-05 11:12:38', '2022-01-05 11:12:38'),
(309, 85, '2022-01-05', 0, 0, '2022-01-05 11:12:38', '2022-01-05 11:12:38'),
(310, 86, '2022-01-05', 0, 0, '2022-01-05 11:12:38', '2022-01-05 11:12:38'),
(311, 87, '2022-01-05', 0, 0, '2022-01-05 11:12:38', '2022-01-05 11:12:38'),
(312, 88, '2022-01-05', 0, 0, '2022-01-05 11:12:38', '2022-01-05 11:12:38'),
(313, 89, '2022-01-05', 0, 0, '2022-01-05 11:12:38', '2022-01-05 11:12:38'),
(314, 2, '2022-01-07', 0, 0, '2022-01-07 02:43:56', '2022-01-07 02:43:56'),
(315, 84, '2022-01-07', 0, 0, '2022-01-07 02:43:56', '2022-01-07 02:43:56'),
(316, 85, '2022-01-07', 0, 0, '2022-01-07 02:43:56', '2022-01-07 02:43:56'),
(317, 86, '2022-01-07', 0, 0, '2022-01-07 02:43:56', '2022-01-07 02:43:56'),
(318, 87, '2022-01-07', 0, 0, '2022-01-07 02:43:56', '2022-01-07 02:43:56'),
(319, 88, '2022-01-07', 0, 0, '2022-01-07 02:43:56', '2022-01-07 02:43:56'),
(320, 89, '2022-01-07', 0, 0, '2022-01-07 02:43:56', '2022-01-07 02:43:56'),
(321, 2, '2022-01-09', 0, 0, '2022-01-09 17:06:14', '2022-01-09 17:06:14'),
(322, 84, '2022-01-09', 0, 0, '2022-01-09 17:06:14', '2022-01-09 17:06:14'),
(323, 85, '2022-01-09', 0, 0, '2022-01-09 17:06:14', '2022-01-09 17:06:14'),
(324, 86, '2022-01-09', 0, 0, '2022-01-09 17:06:14', '2022-01-09 17:06:14'),
(325, 87, '2022-01-09', 0, 0, '2022-01-09 17:06:14', '2022-01-09 17:06:14'),
(326, 88, '2022-01-09', 0, 0, '2022-01-09 17:06:14', '2022-01-09 17:06:14'),
(327, 89, '2022-01-09', 0, 0, '2022-01-09 17:06:14', '2022-01-09 17:06:14'),
(328, 91, '2022-01-09', 0, 0, '2022-01-09 17:06:14', '2022-01-09 17:06:14'),
(329, 2, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(330, 84, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(331, 85, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(332, 86, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(333, 87, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(334, 88, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(335, 89, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(336, 93, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(337, 94, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(338, 95, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(339, 96, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24'),
(340, 97, '2022-01-11', 0, 0, '2022-01-11 16:14:24', '2022-01-11 16:14:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment_payments`
--
ALTER TABLE `appoinment_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appoinment_payment_histories`
--
ALTER TABLE `appoinment_payment_histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_notes`
--
ALTER TABLE `appointment_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_slots`
--
ALTER TABLE `appointment_slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_tests`
--
ALTER TABLE `appointment_tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_therapies`
--
ALTER TABLE `appointment_therapies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_therapy_individuals`
--
ALTER TABLE `appointment_therapy_individuals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_therapy_individual_machines`
--
ALTER TABLE `appointment_therapy_individual_machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compounders`
--
ALTER TABLE `compounders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversation_messages`
--
ALTER TABLE `conversation_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_payments`
--
ALTER TABLE `expense_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expense_types`
--
ALTER TABLE `expense_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_applications`
--
ALTER TABLE `leave_applications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leave_types`
--
ALTER TABLE `leave_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `machines`
--
ALTER TABLE `machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobel_agents`
--
ALTER TABLE `mobel_agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mobile_agents`
--
ALTER TABLE `mobile_agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_calendars`
--
ALTER TABLE `patient_calendars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_profile`
--
ALTER TABLE `patient_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prescription_details`
--
ALTER TABLE `prescription_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refer`
--
ALTER TABLE `refer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requisitions`
--
ALTER TABLE `requisitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `requisitions_user_id_foreign` (`user_id`);

--
-- Indexes for table `requisition_payments`
--
ALTER TABLE `requisition_payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialist_list`
--
ALTER TABLE `specialist_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tasks_user_id_foreign` (`user_id`);

--
-- Indexes for table `task_assigns`
--
ALTER TABLE `task_assigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_notes`
--
ALTER TABLE `task_notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `task_statuses`
--
ALTER TABLE `task_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapy`
--
ALTER TABLE `therapy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapy_assign`
--
ALTER TABLE `therapy_assign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapy_groups`
--
ALTER TABLE `therapy_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `therapy_machines`
--
ALTER TABLE `therapy_machines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_attendences`
--
ALTER TABLE `user_attendences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_attendences_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment_payments`
--
ALTER TABLE `appoinment_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `appoinment_payment_histories`
--
ALTER TABLE `appoinment_payment_histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `appointment_notes`
--
ALTER TABLE `appointment_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `appointment_slots`
--
ALTER TABLE `appointment_slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `appointment_tests`
--
ALTER TABLE `appointment_tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `appointment_therapies`
--
ALTER TABLE `appointment_therapies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `appointment_therapy_individuals`
--
ALTER TABLE `appointment_therapy_individuals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `appointment_therapy_individual_machines`
--
ALTER TABLE `appointment_therapy_individual_machines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `compounders`
--
ALTER TABLE `compounders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `conversation_messages`
--
ALTER TABLE `conversation_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `expense_payments`
--
ALTER TABLE `expense_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expense_types`
--
ALTER TABLE `expense_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leave_applications`
--
ALTER TABLE `leave_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `leave_types`
--
ALTER TABLE `leave_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `machines`
--
ALTER TABLE `machines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `mobel_agents`
--
ALTER TABLE `mobel_agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mobile_agents`
--
ALTER TABLE `mobile_agents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_calendars`
--
ALTER TABLE `patient_calendars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `patient_profile`
--
ALTER TABLE `patient_profile`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescription_details`
--
ALTER TABLE `prescription_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `refer`
--
ALTER TABLE `refer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requisitions`
--
ALTER TABLE `requisitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `requisition_payments`
--
ALTER TABLE `requisition_payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `specialist_list`
--
ALTER TABLE `specialist_list`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `task_assigns`
--
ALTER TABLE `task_assigns`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `task_notes`
--
ALTER TABLE `task_notes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `task_statuses`
--
ALTER TABLE `task_statuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `therapy`
--
ALTER TABLE `therapy`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `therapy_assign`
--
ALTER TABLE `therapy_assign`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `therapy_groups`
--
ALTER TABLE `therapy_groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `therapy_machines`
--
ALTER TABLE `therapy_machines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `user_attendences`
--
ALTER TABLE `user_attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=341;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `requisitions`
--
ALTER TABLE `requisitions`
  ADD CONSTRAINT `requisitions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
