-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 02:24 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `halls_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'نحن مجموعه من الطلاب الخريجين قمنا بعمل موقع الكترونى لمشروع تخرجنا ليخدم الهيئة التدريسية وتسهيل لهم حجز القاعات وتنظيم لهم عملية الحجز ومعرفة كافة التفاصيل عن القاعات قبل حجزها وايضا طريقة للتواصل مع المشرفين والقائمين والمسئولين عن القاعات', 'banner-bg-3.jpg', NULL, '2023-12-14 20:29:01');

-- --------------------------------------------------------

--
-- Table structure for table `about_services`
--

CREATE TABLE `about_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `about_services`
--

INSERT INTO `about_services` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'حجز القاعات', 'نقدم خدمات حجز القاعات لمختلف الفعاليات بما في ذلك المؤتمرات والورش العلمية والفعاليات الثقافية', NULL, NULL),
(2, 'الدعم الكامل', 'دعم كامل لتنظيم الفعاليات، بما في ذلك ترتيبات التجهيز والتنسيق مع الخدمات الإضافية', NULL, NULL),
(3, 'خيارات للحجز', 'خيارات للحجز، مع توفير فترات زمنية متنوعة لتناسب جداول الفعاليات المختلفة', NULL, '2023-12-14 21:02:21');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `image` text DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `image`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'المسئول', '4.jpg', 'admin@paaet.edu.kw', '$2y$10$JXMHoGclBULK2SaZJxxRY.2h1MYgbM8YPUIlPwk9r9NDysQqz/iRi', '2023-11-26 21:00:27', '2023-12-02 03:54:12');

-- --------------------------------------------------------

--
-- Table structure for table `buildings`
--

CREATE TABLE `buildings` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `image` text NOT NULL,
  `details` text NOT NULL,
  `address` text NOT NULL,
  `supervisor_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buildings`
--

INSERT INTO `buildings` (`id`, `title`, `image`, `details`, `address`, `supervisor_id`, `created_at`, `updated_at`) VALUES
(1, 'مبني 1', '1.jpg', 'وصف مبني رقم 1 ', 'الكويت منطقة السالمية', 1, NULL, '2023-12-02 03:43:40'),
(2, 'مبني 2', '2.jpg', 'وصف مبني رقم 2 ', 'الكويت  الفحيحيل', 1, NULL, '2023-12-02 03:43:54'),
(3, 'مبني 3', '3.jpg', 'وصف مبني رقم 3 ', 'الكويت  الوفرة', 1, NULL, '2023-12-02 03:44:44'),
(4, 'مبني 4', '6.jpg', 'وصف مبني رقم 4 ', 'الكويت منطقة السالمية', 1, NULL, '2023-12-02 03:45:07'),
(5, 'مبني 5', '6.jpg', 'وصف مبني رقم 5 ', 'الكويت  الفحيحيل', 2, NULL, '2023-12-02 03:51:21'),
(6, 'مبني 6', 'image-1.jpg', 'وصف مبني رقم 6 ', 'الكويت  الوفرة', 2, NULL, NULL),
(7, 'مبني 7', '5.jpg', 'مبني 7 يوجد بالكويت في الجهراء', 'الكويت الجهراء', 1, '2023-12-02 03:46:54', '2023-12-02 03:46:54'),
(8, 'مبنى 8', '7.jpg', 'مبني 8 بمنطقة السالمية', 'الكويت السالمية', 3, '2023-12-02 03:52:48', '2023-12-02 03:52:48');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'محمد العمودي', 'mohamed@paaet.edu.kw', 'الموقع عصري ورائع\nالموقع عصري ورائع\nالموقع عصري ورائع\nالموقع عصري ورائع\nالموقع عصري ورائع', '2023-12-08 02:21:45', '2023-12-08 02:21:45'),
(2, ' احمد الشمري', 'ahmed@paaet.edu.kw', ' رسالةرسالةررررسالة رسالة رسالة رسالة رسالةرسالة ', '2023-12-08 03:07:47', '2023-12-08 03:07:47'),
(3, 'سالم ', 'salem@paaet.edu.kw', ' رسالة رسالة رسالة رسالة رسالة رسالة رسالة  رسالة رسالة رسالة رسالةرسالة رسالة رسالة رسالة رسالة رسالة رسالة رسالة  رسالة رسالة رسالة رسالةرسالة رسالة رسالة رسالة رسالة رسالة رسالة رسالة  رسالة رسالة رسالة رسالةرسالة', '2023-12-08 03:08:40', '2023-12-08 03:08:40'),
(4, 'sads', 'amk@gmail.com', 'sadadadsa', '2023-12-13 22:34:10', '2023-12-13 22:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `id` int(10) UNSIGNED NOT NULL,
  `details` text NOT NULL,
  `gender` varchar(191) NOT NULL,
  `number` varchar(191) NOT NULL,
  `capacity` varchar(191) NOT NULL,
  `cover` text NOT NULL,
  `video` text DEFAULT NULL,
  `supervisor_id` int(10) UNSIGNED NOT NULL,
  `building_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `details`, `gender`, `number`, `capacity`, `cover`, `video`, `supervisor_id`, `building_id`, `created_at`, `updated_at`) VALUES
(1, 'تفاصيل عن قاعة 1', 'بنين', '1', '0 - 50', '1.jpg', NULL, 1, 1, NULL, NULL),
(2, 'تفاصيل عن قاعة 2', 'بنين', '2', '50 - 100', '2.jpg', NULL, 1, 1, NULL, NULL),
(3, 'تفاصيل عن قاعة 3', 'بنين', '3', '100 - 150', '3.jpg', NULL, 1, 2, NULL, NULL),
(4, 'تفاصيل عن قاعة 4', 'بنات', '4', '50 - 100', '4.jpg', NULL, 1, 2, NULL, NULL),
(5, 'تفاصيل عن قاعة 5', 'بنات', '5', '0 - 50', '5.jpg', NULL, 2, 5, NULL, NULL),
(6, 'تفاصيل عن قاعة 6', 'بنين', '6', '100 - 150', '6.jpg', NULL, 2, 5, NULL, NULL),
(9, 'تفاصيل عن قاعة 7', 'بنات', '7', '100 - 150', '1.jpg', 'mylivewallpapers-com-Night-Study-Room-4K.mp4', 1, 3, '2023-11-29 14:53:17', '2023-11-29 22:49:01'),
(10, 'تفاصيل عن قاعة 8', 'بنات', '8', '100 - 150', '1.jpg', 'mylivewallpapers-com-Night-Study-Room-4K.mp4', 2, 6, '2023-11-29 14:53:17', '2023-11-29 22:49:01'),
(11, 'تفاصيل عن قاعة 9', 'بنات', '9', '100 - 150', '1.jpg', '', 2, 5, '2023-11-29 14:53:17', '2023-11-29 22:49:01');

-- --------------------------------------------------------

--
-- Table structure for table `hall_services`
--

CREATE TABLE `hall_services` (
  `id` int(10) UNSIGNED NOT NULL,
  `hall_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hall_services`
--

INSERT INTO `hall_services` (`id`, `hall_id`, `service_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(2, 1, 2, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(3, 1, 5, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(4, 2, 1, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(5, 2, 5, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(6, 3, 4, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(7, 3, 3, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(8, 3, 2, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(9, 4, 2, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(10, 5, 5, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(11, 6, 1, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(12, 6, 3, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(13, 6, 5, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(19, 9, 3, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(20, 9, 4, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(21, 9, 5, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(22, 10, 3, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(23, 10, 4, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(24, 10, 5, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(25, 10, 1, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(26, 11, 3, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(27, 11, 4, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(28, 11, 5, '2023-11-29 14:53:17', '2023-11-29 14:53:17');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text NOT NULL,
  `hall_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `hall_id`, `created_at`, `updated_at`) VALUES
(1, '1.jpg', 1, NULL, NULL),
(2, '2.jpg', 2, NULL, NULL),
(3, '3.jpg', 3, NULL, NULL),
(4, '4.jpg', 4, NULL, NULL),
(5, '5.jpg', 5, NULL, NULL),
(6, '6.jpg', 6, NULL, NULL),
(9, 'about-img-3.jpg', 9, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(10, 'campus-experience-bg.jpg', 9, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(11, 'campus-experience-bg-2.jpg', 9, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(12, 'event-img.jpg', 9, '2023-11-29 14:53:17', '2023-11-29 14:53:17'),
(13, 'campus-experience.jpg', 9, '2023-11-29 21:43:40', '2023-11-29 21:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_15_053119_create_admins_table', 1),
(6, '2023_11_23_231917_create_supervisors_table', 1),
(7, '2023_11_23_231930_create_professors_table', 1),
(8, '2023_11_24_072122_create_buildings_table', 1),
(9, '2023_11_24_072623_create_halls_table', 1),
(10, '2023_11_24_073553_create_services_table', 1),
(11, '2023_11_24_073720_create_hall_services_table', 1),
(12, '2023_11_24_074233_create_reserves_table', 1),
(13, '2023_11_24_081154_create_notifications_table', 1),
(14, '2023_11_24_082408_create_images_table', 1),
(15, '2023_12_08_034119_create_contacts_table', 2),
(16, '2023_12_08_034120_create_contacts_table', 3),
(17, '2023_12_14_182911_create_abouts_table', 4),
(18, '2023_12_14_183033_create_about_services_table', 4),
(20, '2023_12_14_183104_create_sliders_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `author` varchar(50) NOT NULL,
  `type` int(11) DEFAULT NULL,
  `book_id` int(11) NOT NULL,
  `professor_id` int(10) UNSIGNED NOT NULL,
  `hall_id` int(10) UNSIGNED NOT NULL,
  `supervisor_id` int(10) UNSIGNED NOT NULL,
  `mark_as_read` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `content`, `author`, `type`, `book_id`, `professor_id`, `hall_id`, `supervisor_id`, `mark_as_read`, `created_at`, `updated_at`) VALUES
(32, 'عطل', 'supervisor', NULL, 10, 3, 2, 1, 1, '2023-12-15 01:35:51', '2023-12-15 01:36:38'),
(33, 'تم التصليح', 'professor', 1, 10, 3, 2, 1, 1, '2023-12-15 01:36:38', '2023-12-15 01:37:36'),
(35, 'عطل فنى', 'supervisor', NULL, 11, 3, 10, 2, 1, '2023-12-15 02:07:06', '2023-12-15 02:14:37'),
(36, 'تغيير القاعة', 'professor', 2, 11, 3, 10, 2, 1, '2023-12-15 02:14:37', '2023-12-15 02:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `professors`
--

CREATE TABLE `professors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `address` text NOT NULL,
  `password` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `professors`
--

INSERT INTO `professors` (`id`, `name`, `email`, `phone`, `image`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'دانا انور', 'danah@paaet.edu.kw', '96511564', 'cartoon-girl-with-hijab-vector-8787441.jpg', 'الكويت السالمية', '$2y$10$.C70xAhcpvx/ij01b34iAurdw1jBtxESf6su9mGltNSSC34jVe..u', '2023-11-26 21:00:27', '2023-12-02 04:20:10'),
(2, 'شيخه مبارك', 'shaikha@paaet.edu.kw', '96511112', 'download.png', 'الكويت الوفرة الزراعية', '$2y$10$rcDGNYsW0NXKGK5NzydfS./9V/6KX6pJIYKhQ1mIFYIwv5CjZG5YK', '2023-11-26 21:00:27', '2023-12-02 04:21:22'),
(3, 'ريم رشيد', 'reem@paaet.edu.kw', '96511999', 'cartoon-girl-with-hijab-vector-8787479.jpg', 'الكويت الوفرة', '$2y$10$pPkSO7zcGGxGW/bYi9wISOB/kZyuKDo2k3I7OxpOjRB3p0YXM9xk.', '2023-11-26 21:00:27', '2023-12-02 04:21:56');

-- --------------------------------------------------------

--
-- Table structure for table `reserves`
--

CREATE TABLE `reserves` (
  `id` int(10) UNSIGNED NOT NULL,
  `start_at` varchar(191) NOT NULL,
  `end_at` varchar(191) NOT NULL,
  `professor_id` int(10) UNSIGNED NOT NULL,
  `hall_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reserves`
--

INSERT INTO `reserves` (`id`, `start_at`, `end_at`, `professor_id`, `hall_id`, `created_at`, `updated_at`) VALUES
(8, '2023-12-12T17:07', '2023-12-12T19:07', 1, 11, '2023-12-02 00:06:35', '2023-12-02 00:06:35'),
(9, '2023-12-17T14:00', '2023-12-17T16:00', 2, 1, '2023-12-02 00:06:35', '2023-12-02 00:06:35'),
(10, '2023-12-18T12:30', '2023-12-18T16:30', 3, 2, '2023-12-02 00:06:35', '2023-12-02 00:06:35'),
(11, '2023-12-17T10:04', '2023-12-17T15:05', 3, 10, '2023-12-15 02:05:33', '2023-12-15 02:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'البروجيكتور', NULL, NULL),
(2, 'معدات صوتية', NULL, NULL),
(3, 'السبورة الذكية', NULL, NULL),
(4, 'واي فاي', NULL, NULL),
(5, 'مكيفات هواء', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `content` text NOT NULL,
  `image` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `content`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'مرحبا بك فى موقعنا', 'احجز قاعتك الان مع اختيار افضل الخدمات لدينا', 'video-img.jpg', 'mylivewallpapers-com-Night-Study-Room-4K.mp4', NULL, '2023-12-14 20:19:54');

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `phone` varchar(8) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `is_approved` varchar(191) DEFAULT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`id`, `name`, `email`, `password`, `phone`, `image`, `is_approved`, `address`, `created_at`, `updated_at`) VALUES
(1, 'سامر الشمري', 'samer@paaet.edu.kw', '$2y$10$ScRfixpFFfQykr9mBl2upuO5530X2WSlSFCQRCVAREfwDNqwoqlPG', '96511578', '1.jpg', 'تمت الموافقة', 'الكويت بنيدر', '2023-11-26 21:00:27', '2023-12-02 03:50:36'),
(2, 'عامر سلمان', 'amer@paaet.edu.kw', '$2y$10$heO7X86HlfXtfFDfhvERLeg/nfHMIP.ep9BGX.7loUKH3bxP4Uh.q', '96512212', '2.jpg', 'تمت الموافقة', 'الكويت بنيدر', '2023-11-26 21:00:27', '2023-12-02 03:51:35'),
(3, 'محمود سعدان', 'mahmoud@paaet.edu.kw', '$2y$10$6/Vlm2NwaV4kr8SMabhUtejY.0v3TpdO3ehLGhvwjF5zBP1QuRje.', '96511133', '3.jpg', 'تمت الموافقة', 'الكويت الفيحاء', '2023-11-26 21:00:27', '2023-12-02 03:53:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `about_services`
--
ALTER TABLE `about_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `buildings`
--
ALTER TABLE `buildings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buildings_supervisor_id_foreign` (`supervisor_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `halls_supervisor_id_foreign` (`supervisor_id`),
  ADD KEY `halls_building_id_foreign` (`building_id`);

--
-- Indexes for table `hall_services`
--
ALTER TABLE `hall_services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `hall_services_hall_id_foreign` (`hall_id`),
  ADD KEY `hall_services_service_id_foreign` (`service_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_hall_id_foreign` (`hall_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_professor_id_foreign` (`professor_id`),
  ADD KEY `notifications_hall_id_foreign` (`hall_id`),
  ADD KEY `notifications_supervisor_id_foreign` (`supervisor_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `professors`
--
ALTER TABLE `professors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `professors_email_unique` (`email`);

--
-- Indexes for table `reserves`
--
ALTER TABLE `reserves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserves_professor_id_foreign` (`professor_id`),
  ADD KEY `reserves_hall_id_foreign` (`hall_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `supervisors_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `about_services`
--
ALTER TABLE `about_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buildings`
--
ALTER TABLE `buildings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hall_services`
--
ALTER TABLE `hall_services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `professors`
--
ALTER TABLE `professors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reserves`
--
ALTER TABLE `reserves`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buildings`
--
ALTER TABLE `buildings`
  ADD CONSTRAINT `buildings_supervisor_id_foreign` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `halls`
--
ALTER TABLE `halls`
  ADD CONSTRAINT `halls_building_id_foreign` FOREIGN KEY (`building_id`) REFERENCES `buildings` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `halls_supervisor_id_foreign` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hall_services`
--
ALTER TABLE `hall_services`
  ADD CONSTRAINT `hall_services_hall_id_foreign` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hall_services_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_hall_id_foreign` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_hall_id_foreign` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_professor_id_foreign` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_supervisor_id_foreign` FOREIGN KEY (`supervisor_id`) REFERENCES `supervisors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reserves`
--
ALTER TABLE `reserves`
  ADD CONSTRAINT `reserves_hall_id_foreign` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reserves_professor_id_foreign` FOREIGN KEY (`professor_id`) REFERENCES `professors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
