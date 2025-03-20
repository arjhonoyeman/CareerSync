-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2024 at 05:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `careersync`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_short` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(290) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_seo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_seo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyword_seo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_read` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `facebook_share` int(11) NOT NULL DEFAULT 0,
  `linkedin_share` int(11) NOT NULL DEFAULT 0,
  `twitter_share` int(11) NOT NULL DEFAULT 0,
  `mail_share` int(11) NOT NULL DEFAULT 0,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `content_short`, `content`, `thumb`, `title_seo`, `description_seo`, `keyword_seo`, `time_read`, `category_id`, `facebook_share`, `linkedin_share`, `twitter_share`, `mail_share`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'sdsd', 'dsd', 'sdsd', '<p>dsdsd</p>', 'thumbnail_1981181547.jpg', 'sdsd', 'sds', 'dsdsdsdsd', '0', 1, 0, 0, 0, 0, 1, 1, '2024-04-04 14:23:15', '2024-04-04 14:23:15');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `name`, `thumb`, `is_featured`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'testi', NULL, 1, 1, '2024-04-04 14:22:57', '2024-04-04 14:22:57');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_name` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_ceo` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry_id` int(11) DEFAULT 0,
  `ownership_type_id` int(11) DEFAULT 0,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_offices` int(11) DEFAULT NULL,
  `website` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_of_employees` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `established_in` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fax` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT 0,
  `state_id` int(11) DEFAULT 0,
  `city_id` int(11) DEFAULT 0,
  `slug` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_featured` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_name`, `company_email`, `company_ceo`, `industry_id`, `ownership_type_id`, `description`, `location`, `no_of_offices`, `website`, `no_of_employees`, `established_in`, `fax`, `phone`, `logo`, `country_id`, `state_id`, `city_id`, `slug`, `facebook`, `twitter`, `linkedin`, `pinterest`, `youtube`, `map`, `is_active`, `is_featured`, `created_at`, `updated_at`) VALUES
(2, 5, 'CPSU VICTORIAS', 'cpsu-v@cpsu.com', 'Owner-1', 1, 2, NULL, 'Brgy XIV', 1, NULL, '1-10', '2024', NULL, NULL, 'company_logo_63547390.png', 0, 0, 52, 'cpsu-victorias-2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-04-04 14:16:00', '2024-04-04 14:16:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_readed` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(1, 'mail', '{\"uuid\":\"2b8c621f-5294-4106-9424-1eddfdbb92bd\",\"displayName\":\"Modules\\\\User\\\\Notifications\\\\UserRegistered\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"backoff\":\"\",\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\",\"command\":\"O:48:\\\"Illuminate\\\\Notifications\\\\SendQueuedNotifications\\\":16:{s:11:\\\"notifiables\\\";O:45:\\\"Illuminate\\\\Contracts\\\\Database\\\\ModelIdentifier\\\":4:{s:5:\\\"class\\\";s:26:\\\"Modules\\\\User\\\\Entities\\\\User\\\";s:2:\\\"id\\\";a:1:{i:0;i:4;}s:9:\\\"relations\\\";a:0:{}s:10:\\\"connection\\\";s:5:\\\"mysql\\\";}s:12:\\\"notification\\\";O:41:\\\"Modules\\\\User\\\\Notifications\\\\UserRegistered\\\":11:{s:2:\\\"id\\\";s:36:\\\"91648ab8-3be2-4081-843e-569b52445c37\\\";s:6:\\\"locale\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:4:\\\"mail\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}s:8:\\\"channels\\\";a:1:{i:0;s:4:\\\"mail\\\";}s:5:\\\"tries\\\";N;s:7:\\\"timeout\\\";N;s:17:\\\"shouldBeEncrypted\\\";b:0;s:3:\\\"job\\\";N;s:10:\\\"connection\\\";N;s:5:\\\"queue\\\";s:4:\\\"mail\\\";s:15:\\\"chainConnection\\\";N;s:10:\\\"chainQueue\\\";N;s:19:\\\"chainCatchCallbacks\\\";N;s:5:\\\"delay\\\";N;s:11:\\\"afterCommit\\\";N;s:10:\\\"middleware\\\";a:0:{}s:7:\\\"chained\\\";a:0:{}}\"}}', 0, NULL, 1712242896, 1712242896);

-- --------------------------------------------------------

--
-- Table structure for table `jobs_list`
--

CREATE TABLE `jobs_list` (
  `id` int(11) NOT NULL,
  `company_id` int(11) DEFAULT NULL,
  `title` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `is_freelance` tinyint(1) DEFAULT 0,
  `career_level_id` int(11) DEFAULT NULL,
  `salary_from` int(11) DEFAULT NULL,
  `salary_to` int(11) DEFAULT NULL,
  `hide_salary` tinyint(1) DEFAULT 0,
  `salary_currency` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary_period_id` int(11) DEFAULT NULL,
  `functional_area_id` int(11) DEFAULT NULL,
  `job_type_id` int(11) DEFAULT NULL,
  `job_shift_id` int(11) DEFAULT NULL,
  `num_of_positions` int(11) DEFAULT NULL,
  `gender_id` int(11) DEFAULT NULL,
  `expiry_date` timestamp NULL DEFAULT NULL,
  `degree_level_id` int(11) DEFAULT NULL,
  `job_experience_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) DEFAULT 1,
  `is_featured` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `search` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(210) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_skill_id` int(11) DEFAULT NULL,
  `responbilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_applicants`
--

CREATE TABLE `job_applicants` (
  `id` int(10) UNSIGNED NOT NULL,
  `job_id` bigint(20) DEFAULT NULL,
  `company_id` bigint(20) DEFAULT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `resume_pdf` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_career_levels`
--

CREATE TABLE `job_attributes_career_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_career_levels`
--

INSERT INTO `job_attributes_career_levels` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Department Head', 1, 1, 1, NULL, NULL),
(2, 'Entry Level', 1, 1, 2, NULL, NULL),
(3, 'Experienced Professional', 1, 1, 3, NULL, NULL),
(4, 'GM / CEO / Country Head / President', 1, 1, 4, NULL, NULL),
(5, 'Intern/Student', 1, 1, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_degree_levels`
--

CREATE TABLE `job_attributes_degree_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_degree_levels`
--

INSERT INTO `job_attributes_degree_levels` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Non-Matriculation', 1, 1, 1, NULL, NULL),
(2, 'Matriculation/O-Level', 1, 1, 2, NULL, NULL),
(3, 'Intermediate/A-Level', 1, 1, 3, NULL, NULL),
(4, 'Bachelors', 1, 1, 4, NULL, NULL),
(5, 'Masters', 1, 1, 5, NULL, NULL),
(6, 'MPhil/MS', 1, 1, 6, NULL, NULL),
(7, 'PHD/Doctorate', 1, 1, 7, NULL, NULL),
(8, 'Certification', 1, 1, 8, NULL, NULL),
(9, 'Diploma', 1, 1, 9, NULL, NULL),
(10, 'Short Course', 1, 1, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_degree_types`
--

CREATE TABLE `job_attributes_degree_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `degree_level_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_functional_areas`
--

CREATE TABLE `job_attributes_functional_areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_functional_areas`
--

INSERT INTO `job_attributes_functional_areas` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Accountant', 1, 1, 1, NULL, NULL),
(2, 'Accounts, Finance & Financial Services', 1, 1, 2, NULL, NULL),
(3, 'Admin', 1, 1, 3, NULL, NULL),
(4, 'Admin Operation', 1, 1, 4, NULL, NULL),
(5, 'Administration', 1, 1, 5, NULL, NULL),
(6, 'Administration Clerical', 1, 1, 6, NULL, NULL),
(7, 'Advertising', 1, 1, 7, NULL, NULL),
(8, 'Advertising', 1, 1, 8, NULL, NULL),
(9, 'Advertisment', 1, 1, 9, NULL, NULL),
(10, 'Architects & Construction', 1, 1, 10, NULL, NULL),
(11, 'Architecture', 1, 1, 11, NULL, NULL),
(12, 'Bank Operation', 1, 1, 12, NULL, NULL),
(13, 'Business Development', 1, 1, 13, NULL, NULL),
(14, 'Business Management', 1, 1, 14, NULL, NULL),
(15, 'Business Systems Analyst', 1, 1, 15, NULL, NULL),
(16, 'Clerical', 1, 1, 16, NULL, NULL),
(17, 'Client Services & Customer Support', 1, 1, 17, NULL, NULL),
(18, 'Computer Hardware', 1, 1, 18, NULL, NULL),
(19, 'Computer Networking', 1, 1, 19, NULL, NULL),
(20, 'Consultant', 1, 1, 20, NULL, NULL),
(21, 'Content Writer', 1, 1, 21, NULL, NULL),
(22, 'Corporate Affairs', 1, 1, 22, NULL, NULL),
(23, 'Creative Design', 1, 1, 23, NULL, NULL),
(24, 'Creative Writer', 1, 1, 24, NULL, NULL),
(25, 'Customer Support', 1, 1, 25, NULL, NULL),
(26, 'Data Entry', 1, 1, 26, NULL, NULL),
(27, 'Data Entry Operator', 1, 1, 27, NULL, NULL),
(28, 'Database Administration (DBA)', 1, 1, 28, NULL, NULL),
(29, 'Development', 1, 1, 29, NULL, NULL),
(30, 'Distribution & Logistics', 1, 1, 30, NULL, NULL),
(31, 'Education & Training', 1, 1, 31, NULL, NULL),
(32, 'Electronics Technician', 1, 1, 32, NULL, NULL),
(33, 'Engineering', 1, 1, 33, NULL, NULL),
(34, 'Engineering Construction', 1, 1, 34, NULL, NULL),
(35, 'Executive Management', 1, 1, 35, NULL, NULL),
(36, 'Executive Secretary', 1, 1, 36, NULL, NULL),
(37, 'Field Operations', 1, 1, 37, NULL, NULL),
(38, 'Front Desk Clerk', 1, 1, 38, NULL, NULL),
(39, 'Front Desk Officer', 1, 1, 39, NULL, NULL),
(40, 'Graphic Design', 1, 1, 40, NULL, NULL),
(41, 'Hardware', 1, 1, 41, NULL, NULL),
(42, 'Health & Medicine', 1, 1, 42, NULL, NULL),
(43, 'Health & Safety', 1, 1, 43, NULL, NULL),
(44, 'Health Care', 1, 1, 44, NULL, NULL),
(45, 'Health Related', 1, 1, 45, NULL, NULL),
(46, 'Hotel Management', 1, 1, 46, NULL, NULL),
(47, 'Hotel/Restaurant Management', 1, 1, 47, NULL, NULL),
(48, 'HR', 1, 1, 48, NULL, NULL),
(49, 'Human Resources', 1, 1, 49, NULL, NULL),
(50, 'Import & Export', 1, 1, 50, NULL, NULL),
(51, 'Industrial Production', 1, 1, 51, NULL, NULL),
(52, 'Installation & Repair', 1, 1, 52, NULL, NULL),
(53, 'Interior Designers & Architects', 1, 1, 53, NULL, NULL),
(54, 'Intern', 1, 1, 54, NULL, NULL),
(55, 'Internship', 1, 1, 55, NULL, NULL),
(56, 'Investment Operations', 1, 1, 56, NULL, NULL),
(57, 'IT Security', 1, 1, 57, NULL, NULL),
(58, 'IT Systems Analyst', 1, 1, 58, NULL, NULL),
(59, 'Legal & Corporate Affairs', 1, 1, 59, NULL, NULL),
(60, 'Legal Affairs', 1, 1, 60, NULL, NULL),
(61, 'Legal Research', 1, 1, 61, NULL, NULL),
(62, 'Logistics & Warehousing', 1, 1, 62, NULL, NULL),
(63, 'Maintenance/Repair', 1, 1, 63, NULL, NULL),
(64, 'Management Consulting', 1, 1, 64, NULL, NULL),
(65, 'Management Information System (MIS)', 1, 1, 65, NULL, NULL),
(66, 'Managerial', 1, 1, 66, NULL, NULL),
(67, 'Manufacturing', 1, 1, 67, NULL, NULL),
(68, 'Manufacturing & Operations', 1, 1, 68, NULL, NULL),
(69, 'Marketing', 1, 1, 69, NULL, NULL),
(70, 'Marketing', 1, 1, 70, NULL, NULL),
(71, 'Media - Print & Electronic', 1, 1, 71, NULL, NULL),
(72, 'Media & Advertising', 1, 1, 72, NULL, NULL),
(73, 'Medical', 1, 1, 73, NULL, NULL),
(74, 'Medicine', 1, 1, 74, NULL, NULL),
(75, 'Merchandising', 1, 1, 75, NULL, NULL),
(76, 'Merchandising & Product Management', 1, 1, 76, NULL, NULL),
(77, 'Monitoring & Evaluation (M&E)', 1, 1, 77, NULL, NULL),
(78, 'Network Administration', 1, 1, 78, NULL, NULL),
(79, 'Network Operation', 1, 1, 79, NULL, NULL),
(80, 'Online Advertising', 1, 1, 80, NULL, NULL),
(81, 'Online Marketing', 1, 1, 81, NULL, NULL),
(82, 'Operations', 1, 1, 82, NULL, NULL),
(83, 'Planning', 1, 1, 83, NULL, NULL),
(84, 'Planning & Development', 1, 1, 84, NULL, NULL),
(85, 'PR', 1, 1, 85, NULL, NULL),
(86, 'Print Media', 1, 1, 86, NULL, NULL),
(87, 'Printing', 1, 1, 87, NULL, NULL),
(88, 'Procurement', 1, 1, 88, NULL, NULL),
(89, 'Product Developer', 1, 1, 89, NULL, NULL),
(90, 'Product Development', 1, 1, 90, NULL, NULL),
(91, 'Product Development', 1, 1, 91, NULL, NULL),
(92, 'Product Management', 1, 1, 92, NULL, NULL),
(93, 'Production', 1, 1, 93, NULL, NULL),
(94, 'Production & Quality Control', 1, 1, 94, NULL, NULL),
(95, 'Project Management', 1, 1, 95, NULL, NULL),
(96, 'Project Management Consultant', 1, 1, 96, NULL, NULL),
(97, 'Public Relations', 1, 1, 97, NULL, NULL),
(98, 'QA', 1, 1, 98, NULL, NULL),
(99, 'QC', 1, 1, 99, NULL, NULL),
(100, 'Qualitative Research', 1, 1, 100, NULL, NULL),
(101, 'Quality Assurance (QA)', 1, 1, 101, NULL, NULL),
(102, 'Quality Control', 1, 1, 102, NULL, NULL),
(103, 'Quality Inspection', 1, 1, 103, NULL, NULL),
(104, 'Recruiting', 1, 1, 104, NULL, NULL),
(105, 'Recruitment', 1, 1, 105, NULL, NULL),
(106, 'Repair & Overhaul', 1, 1, 106, NULL, NULL),
(107, 'Research & Development (R&D)', 1, 1, 107, NULL, NULL),
(108, 'Research & Evaluation', 1, 1, 108, NULL, NULL),
(109, 'Research & Fellowships', 1, 1, 109, NULL, NULL),
(110, 'Researcher', 1, 1, 110, NULL, NULL),
(111, 'Restaurant Management', 1, 1, 111, NULL, NULL),
(112, 'Retail', 1, 1, 112, NULL, NULL),
(113, 'Retail & Wholesale', 1, 1, 113, NULL, NULL),
(114, 'Retail Buyer', 1, 1, 114, NULL, NULL),
(115, 'Retail Buying', 1, 1, 115, NULL, NULL),
(116, 'Retail Merchandising', 1, 1, 116, NULL, NULL),
(117, 'Safety & Environment', 1, 1, 117, NULL, NULL),
(118, 'Sales', 1, 1, 118, NULL, NULL),
(119, 'Sales & Business Development', 1, 1, 119, NULL, NULL),
(120, 'Sales Support', 1, 1, 120, NULL, NULL),
(121, 'Search Engine Optimization (SEO)', 1, 1, 121, NULL, NULL),
(122, 'Secretarial, Clerical & Front Office', 1, 1, 122, NULL, NULL),
(123, 'Security', 1, 1, 123, NULL, NULL),
(124, 'Security & Environment', 1, 1, 124, NULL, NULL),
(125, 'Security Guard', 1, 1, 125, NULL, NULL),
(126, 'SEM', 1, 1, 126, NULL, NULL),
(127, 'SMO', 1, 1, 127, NULL, NULL),
(128, 'Software & Web Development', 1, 1, 128, NULL, NULL),
(129, 'Software Engineer', 1, 1, 129, NULL, NULL),
(130, 'Software Testing', 1, 1, 130, NULL, NULL),
(131, 'Stores & Warehousing', 1, 1, 131, NULL, NULL),
(132, 'Supply Chain', 1, 1, 132, NULL, NULL),
(133, 'Supply Chain Management', 1, 1, 133, NULL, NULL),
(134, 'Systems Analyst', 1, 1, 134, NULL, NULL),
(135, 'Teachers/Education, Training & Development', 1, 1, 135, NULL, NULL),
(136, 'Technical Writer', 1, 1, 136, NULL, NULL),
(137, 'Tele Sale Representative', 1, 1, 137, NULL, NULL),
(138, 'Telemarketing', 1, 1, 138, NULL, NULL),
(139, 'Training & Development', 1, 1, 139, NULL, NULL),
(140, 'Transportation & Warehousing', 1, 1, 140, NULL, NULL),
(141, 'TSR', 1, 1, 141, NULL, NULL),
(142, 'Typing', 1, 1, 142, NULL, NULL),
(143, 'Warehousing', 1, 1, 143, NULL, NULL),
(144, 'Web Developer', 1, 1, 144, NULL, NULL),
(145, 'Web Marketing', 1, 1, 145, NULL, NULL),
(146, 'Writer', 1, 1, 146, NULL, NULL),
(148, 'PR', 0, 1, 2, NULL, NULL),
(149, 'QA', 0, 1, 3, NULL, NULL),
(150, 'QC', 0, 1, 4, NULL, NULL),
(151, 'SEM', 0, 1, 5, NULL, NULL),
(152, 'SMO', 0, 1, 6, NULL, NULL),
(153, 'TSR', 0, 1, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_genders`
--

CREATE TABLE `job_attributes_genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_genders`
--

INSERT INTO `job_attributes_genders` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Not required', 1, 1, 2, NULL, NULL),
(2, 'Female', 1, 1, 1, NULL, NULL),
(3, 'Male', 1, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_industries`
--

CREATE TABLE `job_attributes_industries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_industries`
--

INSERT INTO `job_attributes_industries` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', 1, 1, 34, NULL, NULL),
(2, 'Telecommunication/ISP', 1, 1, 54, NULL, NULL),
(3, 'Banking/Financial Services', 1, 1, 10, NULL, NULL),
(4, 'Fast Moving Consumer Goods (FMCG)', 1, 1, 25, NULL, NULL),
(5, 'Pharmaceuticals/Clinical Research', 1, 1, 44, NULL, NULL),
(6, 'Insurance / Takaful', 1, 1, 35, NULL, NULL),
(7, 'Advertising/PR', 1, 1, 3, NULL, NULL),
(8, 'Accounting/Taxation', 1, 1, 2, NULL, NULL),
(9, 'Textiles/Garments', 1, 1, 55, NULL, NULL),
(10, 'Manufacturing', 1, 1, 38, NULL, NULL),
(11, 'Education/Training', 1, 1, 20, NULL, NULL),
(12, 'Chemicals', 1, 1, 15, NULL, NULL),
(13, 'Agriculture/Fertilizer/Pesticide', 1, 1, 4, NULL, NULL),
(15, 'Hotel Management / Restaurants', 1, 1, 32, NULL, NULL),
(16, 'Mining/Oil & Gas/Petroleum', 1, 1, 40, NULL, NULL),
(17, 'Construction/Cement/Metals', 1, 1, 16, NULL, NULL),
(18, 'Media/Communications', 1, 1, 39, NULL, NULL),
(19, 'Law Firms/Legal', 1, 1, 37, NULL, NULL),
(20, 'Arts / Entertainment', 1, 1, 7, NULL, NULL),
(21, 'Broadcasting', 1, 1, 12, NULL, NULL),
(22, 'Business Development', 1, 1, 13, NULL, NULL),
(23, 'Publishing/Printing', 1, 1, 47, NULL, NULL),
(24, 'Travel/Tourism/Transportation', 1, 1, 57, NULL, NULL),
(25, 'Services', 1, 1, 52, NULL, NULL),
(26, 'Retail', 1, 1, 50, NULL, NULL),
(27, 'N.G.O./Social Services', 1, 1, 41, NULL, NULL),
(28, 'Electronics', 1, 1, 21, NULL, NULL),
(29, 'Engineering', 1, 1, 22, NULL, NULL),
(30, 'Call Center', 1, 1, 14, NULL, NULL),
(31, 'AutoMobile', 1, 1, 8, NULL, NULL),
(32, 'Fashion', 1, 1, 24, NULL, NULL),
(33, 'Architecture/Interior Design', 1, 1, 6, NULL, NULL),
(34, 'BPO', 1, 1, 11, NULL, NULL),
(35, 'Event Management', 1, 1, 23, NULL, NULL),
(36, 'Gems &amp; Jewelery', 1, 1, 27, NULL, NULL),
(37, 'Government', 1, 1, 28, NULL, NULL),
(38, 'Health & Fitness', 1, 1, 29, NULL, NULL),
(39, 'Healthcare/Hospital/Medical', 1, 1, 30, NULL, NULL),
(40, 'Hospitality', 1, 1, 31, NULL, NULL),
(41, 'Courier/Logistics', 1, 1, 18, NULL, NULL),
(42, 'Power/Energy', 1, 1, 45, NULL, NULL),
(43, 'Recruitment/Employment Firms', 1, 1, 49, NULL, NULL),
(44, 'Real Estate/Property', 1, 1, 48, NULL, NULL),
(45, 'Security/Law Enforcement', 1, 1, 51, NULL, NULL),
(46, 'Shipping/Marine', 1, 1, 53, NULL, NULL),
(47, 'Project Management', 1, 1, 46, NULL, NULL),
(48, 'Importers/ Distributors/Exporters', 1, 1, 33, NULL, NULL),
(49, 'Consultants', 1, 1, 17, NULL, NULL),
(50, 'Packaging', 1, 1, 42, NULL, NULL),
(51, 'Personal Care and Services', 1, 1, 43, NULL, NULL),
(52, 'Investments', 1, 1, 36, NULL, NULL),
(53, 'Apparel/Clothing', 1, 1, 5, NULL, NULL),
(54, 'Food & Beverages', 1, 1, 26, NULL, NULL),
(55, 'Tiles & Ceramics', 1, 1, 56, NULL, NULL),
(56, 'Warehousing', 1, 1, 58, NULL, NULL),
(57, 'Distribution and Logistics', 1, 1, 19, NULL, NULL),
(58, 'Aviation', 1, 1, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_job_experiences`
--

CREATE TABLE `job_attributes_job_experiences` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_job_experiences`
--

INSERT INTO `job_attributes_job_experiences` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, '1 Year', 1, 1, 4, NULL, NULL),
(2, '10 Year', 1, 1, 13, NULL, NULL),
(3, '2 Year', 1, 1, 5, NULL, NULL),
(4, '3 Year', 1, 1, 6, NULL, NULL),
(5, '4 Year', 1, 1, 7, NULL, NULL),
(6, '5 Year', 1, 1, 8, NULL, NULL),
(7, '6 Year', 1, 1, 9, NULL, NULL),
(8, '7 Year', 1, 1, 10, NULL, NULL),
(9, '8 Year', 1, 1, 11, NULL, NULL),
(10, '9 Year', 1, 1, 12, NULL, NULL),
(11, 'Fresh', 1, 1, 2, NULL, NULL),
(12, 'Less Than 1 Year', 1, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_job_shifts`
--

CREATE TABLE `job_attributes_job_shifts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_job_shifts`
--

INSERT INTO `job_attributes_job_shifts` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'First Shift (Day)', 1, 1, 1, NULL, NULL),
(2, 'Second Shift (Afternoon)', 1, 1, 2, NULL, NULL),
(3, 'Third Shift (Night)', 1, 1, 3, NULL, NULL),
(4, 'Rotating', 1, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_job_skills`
--

CREATE TABLE `job_attributes_job_skills` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_job_types`
--

CREATE TABLE `job_attributes_job_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_job_types`
--

INSERT INTO `job_attributes_job_types` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Full Time', 1, 1, 3, NULL, '2021-06-27 19:21:19'),
(2, 'Remote', 0, 1, 3, NULL, '2021-06-27 19:21:19'),
(3, 'Contract', 0, 1, 1, NULL, '2021-06-27 19:21:19'),
(4, 'Freelance', 0, 1, 2, NULL, '2021-06-27 19:21:19'),
(5, 'Internship', 0, 1, 4, NULL, '2021-06-27 19:21:19'),
(6, 'Part Time', 0, 1, 5, NULL, '2021-06-27 19:21:19');

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_language_levels`
--

CREATE TABLE `job_attributes_language_levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_major_subjects`
--

CREATE TABLE `job_attributes_major_subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_marital_statuses`
--

CREATE TABLE `job_attributes_marital_statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_ownership_types`
--

CREATE TABLE `job_attributes_ownership_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_ownership_types`
--

INSERT INTO `job_attributes_ownership_types` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(2, 'Public', 1, 1, 2, NULL, NULL),
(3, 'Private', 1, 1, 3, NULL, NULL),
(4, 'Government', 1, 1, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_result_types`
--

CREATE TABLE `job_attributes_result_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_attributes_salary_periods`
--

CREATE TABLE `job_attributes_salary_periods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_attributes_salary_periods`
--

INSERT INTO `job_attributes_salary_periods` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Monthly', 1, 1, 2, NULL, NULL),
(2, 'Yearly', 1, 1, 3, NULL, NULL),
(3, 'Weekly', 1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `language` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `language`, `created_at`, `updated_at`) VALUES
(1, NULL, 'en', '2024-04-04 13:57:31', '2024-04-04 13:57:31');

-- --------------------------------------------------------

--
-- Table structure for table `location_cities`
--

CREATE TABLE `location_cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `state_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_cities`
--

INSERT INTO `location_cities` (`id`, `state_id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(52, 1, 'Victorias', 1, 1, 0, '2024-04-04 14:15:13', '2024-04-04 14:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `location_countries`
--

CREATE TABLE `location_countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_countries`
--

INSERT INTO `location_countries` (`id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Philippines', 1, 1, 0, '2024-04-04 14:14:50', '2024-04-04 14:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `location_country_details`
--

CREATE TABLE `location_country_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `sort_name` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_code` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `symbol` varchar(7) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thousand_separator` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `decimal_separator` varchar(2) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_country_details`
--

INSERT INTO `location_country_details` (`id`, `country_id`, `sort_name`, `phone_code`, `currency`, `code`, `symbol`, `thousand_separator`, `decimal_separator`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2024-04-04 14:14:50', '2024-04-04 14:14:50');

-- --------------------------------------------------------

--
-- Table structure for table `location_states`
--

CREATE TABLE `location_states` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_default` tinyint(4) NOT NULL DEFAULT 0,
  `is_active` tinyint(4) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location_states`
--

INSERT INTO `location_states` (`id`, `country_id`, `name`, `is_default`, `is_active`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 1, 'Negros Occidental', 1, 1, 0, '2024-04-04 14:15:03', '2024-04-04 14:15:03');

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
(1, '2018_08_29_200844_create_languages_table', 1),
(2, '2018_08_29_205156_create_translations_table', 1),
(3, '2019_12_20_080837_create_users_table', 1),
(4, '2019_12_20_080839_create_password_resets_table', 1),
(5, '2019_12_20_082348_create_settings_table', 1),
(6, '2019_12_24_031002_create_jobs_table', 1),
(7, '2020_11_22_142852_create_page_websites_table', 1),
(8, '2021_02_01_082651_create_purchase_managers_table', 1),
(9, '2021_02_05_151847_create_failed_jobs_table', 1),
(10, '2021_06_01_031004_create_resumecv_table', 1),
(11, '2021_06_01_031026_create_resumecvtemplates_table', 1),
(12, '2021_06_01_031044_create_resumecvcategories_table', 1),
(13, '2021_06_01_031045_create_attributes_tables', 1),
(14, '2021_06_01_031045_create_categories_table', 1),
(15, '2021_06_01_031045_create_countries_table', 1),
(16, '2021_06_01_031046_create_blogs_table', 1),
(17, '2021_06_01_031046_create_contacts_table', 1),
(18, '2021_06_01_031046_create_country_details_table', 1),
(19, '2021_06_01_031047_create_states_table', 1),
(20, '2021_06_01_031048_create_cities_table', 1),
(21, '2021_06_09_104345_create_jobs_list_table', 1),
(22, '2021_06_09_150740_create_companies_table', 1),
(23, '2021_06_09_150741_update_jobs_list_table', 1),
(24, '2021_06_09_150742_add_columns_to_jobs_list_table', 1),
(25, '2021_06_09_150743_create_job_applicants_table', 1),
(26, '2021_06_09_150745_create_tracklinks_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page_websites`
--

CREATE TABLE `page_websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_websites`
--

INSERT INTO `page_websites` (`id`, `title`, `description`, `slug`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'ANOTHER PAGE', '<p>dfdf</p>', 'another-page', 1, '2024-04-04 14:18:39', '2024-04-04 14:18:39');

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
-- Table structure for table `purchase_managers`
--

CREATE TABLE `purchase_managers` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `purchase_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_username_purchase` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `version` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path_main` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchase_managers`
--

INSERT INTO `purchase_managers` (`id`, `product_id`, `product_name`, `purchase_code`, `email_username_purchase`, `version`, `verify_type`, `path_main`, `created_at`, `updated_at`) VALUES
(1, 'D5D5AFDE', 'OneJobPortal core', '0000-0000-0000', 'admin', '1.0.9', 'envato', NULL, '2024-04-04 13:57:32', '2024-04-04 13:57:32');

-- --------------------------------------------------------

--
-- Table structure for table `resumecv`
--

CREATE TABLE `resumecv` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_publish` tinyint(1) NOT NULL DEFAULT 1,
  `view_count` int(11) NOT NULL DEFAULT 0,
  `slug` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumecvcategories`
--

CREATE TABLE `resumecvcategories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumecvcategories`
--

INSERT INTO `resumecvcategories` (`id`, `name`, `thumb`, `color`, `created_at`, `updated_at`) VALUES
(4, 'Resumes', NULL, NULL, '2021-05-31 06:19:02', '2021-05-31 06:19:17'),
(5, 'Cvs', NULL, NULL, '2021-06-05 11:12:15', '2021-06-05 11:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `resumecvtemplates`
--

CREATE TABLE `resumecvtemplates` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `style` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `is_premium` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `resumecvtemplates`
--

INSERT INTO `resumecvtemplates` (`id`, `category_id`, `name`, `thumb`, `content`, `style`, `active`, `is_premium`, `created_at`, `updated_at`) VALUES
(1, 5, 'CV 1', '287128263.png', '<div id=\"resumecv-layout\">\r\n  <div id=\"resumecv-content-top\">\r\n      <div id=\"resumecv-top-info-img\">\r\n          <div class=\"resumecv-top-info\">\r\n              <h1><span>YOUR NAME</span></h1>\r\n              <h2 class=\"job_position\"><span>Job position</span></h2>\r\n          </div>\r\n      </div>\r\n      <div id=\"resumecv-top-info-contact\">\r\n          <div class=\"top-contact\">\r\n              <p class=\"icoweb\" ><i class=\"fa fa-phone\"></i><span >0123456789</span></p>\r\n              <p class=\"icoweb\" ><i class=\"fa fa-envelope-square\"></i><span >email@email.com</span>\r\n                <p class=\"icoweb\"><i class=\"fa fa-map-marker\"></i><span >NewYork, USA</span>\r\n                </p>\r\n              </div>\r\n      </div>\r\n  </div>\r\n  <div class=\"resumecv-top-bottom\">\r\n    <div class=\"resumecv-block resumecv-block-first\">\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Dear Ms. Doe,\r\n          </div>\r\n        </div>\r\n      </div>\r\n      \r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">I was excited to see your job listing for the Lead Digital Marketing position at Westward Strategies on Indeed.com. As a dynamic email marketing specialist with over two years of professional experience executing market research, analyzing consumer data, and running A/B tests to drive successful marketing campaigns, I\'m confident that I would be a valuable asset to the team at Westward. \r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Your job listing mentions a need for someone who is experienced in email segmentation and campaign development, both of which are areas I have extensive experience in. I\'m currently employed at Marketed Inc., where I\'ve honed my skills by running numerous successful email marketing campaigns. While employed here, I\'ve spearheaded a digital promotion campaign for the company\'s new line of sandals that successfully raised our total online engagement by an impressive 13% over the course of six months, contributing substantially to the department\'s annual goals. \r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">I\'m confident that my proven track record of excellent work ethic, unparalleled attention to detail, and high-performing email marketing campaigns will make me an immediate asset at Westward Strategies, and allow me to contribute to the team\'s success.\r\n          </div>\r\n        </div>\r\n      </div>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">I look forward to discussing the Lead Digital Marketing position and my qualifications with you in more detail. I\'m available to talk at your convenience. I\'ll be in touch next week to follow up and to make sure you\'ve received my application. \r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">\r\n            <ul>\r\n              <li><b>Developed and executed SEO strategy</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n              <li><b>Oversaw creation of new company logo</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>\r\n            </ul>\r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">\r\n            Given the opportunity, I’m confident in my ability to achieve similar groundbreaking marketing results for XYZ Company.\r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">\r\n            Sincerely,\r\n          </div>\r\n        </div>\r\n      </div>\r\n\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">\r\n            Marie Jones\r\n\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  \r\n  </div>', '#resumecv-layout {\r\n  width: 100%;\r\n  max-width: 210mm;\r\n  padding: 0;\r\n  box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n}\r\n\r\n#resumecv-main{\r\nfont-size: 14px;line-height: 24px;\r\ndisplay: flex;\r\nflex-wrap: nowrap;\r\npadding: 30px;\r\npadding-top: 10px;\r\npadding-bottom: 0;\r\nbackground-color: #ffff;\r\n\r\n}\r\n\r\n#resumecv-left .resumecv-block{\r\nmargin-bottom: 30px\r\n}\r\n\r\n.margin-20{\r\n    margin-top: 20px;\r\n}\r\n#resumecv-left {resumecv-content-top\r\n  width: 50%;\r\n  padding:10px 5px;\r\n  padding-right: 20px;\r\n  padding-top: 20px;\r\n  border-bottom: 2px solid #d4d8dd;\r\n}\r\n#resumecv-content {\r\n  width: 50%;\r\n  background: #fff;\r\n  padding-left: 30px;\r\n  padding-top: 20px;\r\n  border-bottom: 2px solid #d4d8dd;\r\n \r\n}\r\n\r\n\r\n#resumecv-content-top{    \r\n  background:#ffff;\r\n  padding: 30px;\r\n  padding-bottom: 10px;\r\n  padding-top: 40px;\r\n  display: flex;\r\n}\r\n   #resumecv-top-info-img{\r\n         width:65%;\r\n         \r\n      }\r\n      /* #resumecv-top-info-img .resumecv-top-info{\r\n         padding-top: 34px;\r\n         padding-left: 40px;\r\n      } */\r\n      \r\n\r\n      #resumecv-box-ava img{\r\n        width:100px;\r\n      }\r\n      #resumecv-top-info-contact{\r\n        width: 35%;\r\n        font-size: 16px;\r\n\r\n      }\r\n#resumecv-content-top .resumecv-block {\r\n    position: relative;\r\n    display: flex;\r\n}\r\n\r\n#resumecv-content-top .resumecv-block  img{\r\n    width:80px;\r\n    border-radius: 5%;\r\n}\r\n\r\n#resumecv-content .resumecv-block {\r\n  position: relative;\r\n  padding: 5px 10px;\r\n}\r\n#resumecv-left .resumecv-box-content {\r\npadding-bottom: 0;\r\nmargin:0;\r\n}\r\n.skill{\r\nmargin-top: 15px\r\n}\r\n\r\n#resumecv-content-top h1{\r\nfont-size: 35px;    \r\nmargin:0;\r\npadding-top: 0px;\r\nline-height: normal;\r\nletter-spacing: 3px;\r\ntext-transform: capitalize;\r\nfont-weight: 800;\r\n}\r\n#resumecv-content-top .job_position{\r\n    font-size: 22px;\r\n    font-weight: bold;\r\n    margin-top: 15px;\r\n    letter-spacing: 1px;\r\n\r\n}\r\n\r\n#resumecv-content-top h1 span{\r\ndisplay:block\r\n}\r\n\r\n\r\n.box-name p{        \r\n  overflow: hidden;\r\n}\r\n.box-name{      \r\noverflow: hidden;\r\nbackground: #2f3a40;\r\n}\r\n#resumecv-content p{\r\nmargin-bottom: 5px\r\n}\r\n#resumecv-left .h3{\r\n    font-size: 18px;\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n#resumecv-main .head{\r\n  font-size: 18px;\r\n  color: #2f3a40;\r\n  padding-bottom: 5px;\r\n  /* border-bottom: 2px solid #9B9C8F; */\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n\r\n.resumecv-top-bottom{ \r\n  background:#ffff;\r\n  padding: 10px 30px 10px 30px;\r\n  display: flex;\r\n}\r\n.resumecv-block-footer{\r\n    border: 0px;\r\n}\r\n.resumecv-top-bottom .head{\r\n  font-size: 18px;\r\n  color: #2f3a40;\r\n  padding-bottom: 5px;\r\n  padding-top: 10px;\r\n  /* border-bottom: 2px solid #9B9C8F; */\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n.resumecv-top-bottom h3{\r\n  font-weight:normal;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n}\r\n\r\n\r\n#resumecv-content span[contenteditable]{\r\ndisplay: inline-block;\r\npadding-right: 15px;\r\npadding-left: 15px;\r\n}\r\n\r\n.row-col-data {\r\n    float: left;\r\n}\r\n#resumecv-content .row-col-data .row-details{\r\n    padding-bottom: 50px;\r\n}\r\n.row-title {\r\n    font-style: italic;\r\n    padding-left: 20px;\r\n    background-size: 9px;\r\n    background-position: 0 4px;\r\n    background-repeat: no-repeat;\r\n    width: 100%;\r\n}\r\n.row-details {\r\n    padding: 7px 0 7px 20px;\r\n    background-size: 9px 100%;\r\n    background-position: 0 0;\r\n    background-repeat: no-repeat;\r\n}\r\n#resumecv-left .h3:first-child{\r\nmargin-top: 0\r\n}\r\n.resumecv-box-content{\r\nmargin-bottom: 20px;\r\nposition: relative;\r\nfont-size: 16px;\r\n\r\n}\r\n#resumecv-main h3{\r\n  font-weight:normal;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n}\r\n#resumecv-box-ava{    \r\ntext-align:center;padding:2px;margin-bottom: 10px; auto;\r\n}\r\n#resumecv-box-ava img{\r\npadding: 0;\r\nborder:0;\r\nwidth: 150px;\r\nheight: 150px;\r\n\r\n}\r\n.bar-exp span {\r\n  display:block;\r\n  height: 8px;\r\n  background: #d9d9d9;\r\n}\r\n.bar-exp{\r\nbackground: #2f3a40;\r\nborder: solid 2px white;\r\n  margin-bottom: 12px;\r\n}\r\n.icoweb label{\r\ndisplay: block;\r\ncolor:#627e88;\r\n}\r\n.icoweb span{\r\ndisplay: block;\r\n}\r\n\r\n.box-contact{\r\nfont-size: 13px;\r\npadding-top:0px;\r\n}\r\n\r\n.icoweb i.fa{\r\n  width: 20px;\r\n  height: 20px;\r\n  background-color:#ffff;\r\n  border-radius: 50%;\r\n  -webkit-border-radius: 50%;\r\n  -moz-border-radius: 50%;\r\n  display: inline-block;\r\n  text-align: center;\r\n  font-size: 13px;\r\n  line-height: 20px;\r\n  color: #2f3a40!important;\r\n  margin-right: 10px;\r\n  margin-top: 3px;float:left\r\n}\r\n.head i{\r\n  font-size: 25px;\r\n  margin-right: 10px;\r\n}\r\n\r\n#resumecv-content span.exp-date {\r\n  float: right;\r\n}\r\n.icon_fa{\r\ntext-align: center;\r\n}\r\n.icon_fa i.fa{\r\nfont-size: 20px;\r\nborder: solid 1px #ffffff;\r\nborder-radius: 50%;\r\npadding: 5px;\r\nwidth: 20px;\r\ncolor: white;\r\nbackground: #ffffff;\r\nmargin-bottom: 5px;\r\n}\r\n#resumecv-top-info-contact hr {\r\n  border: 1px solid #d4d8dd;\r\n}\r\np.head i.fa{float:left}', 1, 0, '2021-06-22 19:43:36', '2021-06-22 19:43:36'),
(2, 4, 'Resume 1', '1220456541.png', '<div id=\"resumecv-layout\">\r\n    <div id=\"resumecv-main\">\r\n\r\n        <div id=\"resumecv-content\">\r\n\r\n            <div id=\"resumecv-content-top\">\r\n                <div id=\"resumecv-top-info-img\">\r\n                    <div id=\"resumecv-box-ava\">\r\n                        <img id=\"resumecv-ava\" src=\"##image_url##resumecv-avatar.jpg\">\r\n                    </div>\r\n                    <div class=\"resumecv-top-info\">\r\n                        <h1><span>Your full name</span></h1>\r\n                        <h2><span>Job position</span></h2>\r\n                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.\r\n                        </p>\r\n                    </div>\r\n                </div>\r\n                <div id=\"resumecv-top-info-contact\">\r\n                    <div class=\"top-contact\">\r\n                        <p class=\"icoweb\"><i class=\"fa fa-envelope-square\"></i><span>your@email.com</span>\r\n                    </div>\r\n                    <div class=\"top-contact\">\r\n                        <p class=\"icoweb\"><i class=\"fa fa-phone\"></i><span>0123456789</span></p>\r\n\r\n                    </div>\r\n                    <div class=\"top-contact\">\r\n                        <p class=\"icoweb\"><i class=\"fa fa-map-marker\"></i><span>New York</span>\r\n                        </p>\r\n                    </div>\r\n                    <div class=\"top-contact\">\r\n                        <p class=\"icoweb\"><i class=\"fab fa-skype\"></i><span>username</span></p>\r\n\r\n                    </div>\r\n\r\n\r\n                </div>\r\n            </div>\r\n\r\n            <div class=\"resumecv-content-main\">\r\n\r\n                <div class=\"resumecv-block\">\r\n                    <p class=\"head\">\r\n                        <span>SKILL</span>\r\n                    </p>\r\n                    <div>\r\n                        <div class=\"resumecv-box-content\">\r\n                            <span class=\"tag\">SEO</span>\r\n                            <span class=\"tag\">Public Speaking</span>\r\n                            <span class=\"tag\">Email Marketing</span>\r\n                            <span class=\"tag\">Google analytics</span>\r\n                            <span class=\"tag\">Outbound Marketing</span>\r\n                            <span class=\"tag\">Research & Strategy</span>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"resumecv-block\">\r\n\r\n                    <p class=\"head\">\r\n                        <span>Education</span>\r\n                    </p>\r\n                    <div>\r\n\r\n                        <div class=\"resumecv-box-content\">\r\n\r\n                            <h3>\r\n                                <span>School\'s name</span>\r\n                                <span class=\"exp-date\"><em>07/2015</em> - <em>03/2022</em></span>\r\n                            </h3>\r\n                            <p class=\"h3\">\r\n                                <span>Major</span>\r\n                            </p>\r\n                            <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"resumecv-block\">\r\n\r\n                    <p class=\"head\">\r\n                        <span>Expericence</span>\r\n                    </p>\r\n                    <div>\r\n\r\n                        <div class=\"resumecv-box-content\">\r\n\r\n                            <h3>\r\n                                <span>Company\'s name</span>\r\n                                <span class=\"exp-date\"><em>04/2022</em> - <em>Now</em></span>\r\n                            </h3>\r\n                            <p class=\"h3\">\r\n                                <span>Position</span>\r\n                            </p>\r\n                            <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"resumecv-block\">\r\n\r\n                    <p class=\"head\">\r\n                        <span>Activities</span>\r\n                    </p>\r\n                    <div>\r\n\r\n                        <div class=\"resumecv-box-content\">\r\n                            <h3>\r\n                                <span>Organization\'s name</span>\r\n                                <span class=\"exp-date\"><em>01/2019</em> - <em>03/2022</em></span>\r\n                            </h3>\r\n                            <p class=\"h3\">\r\n                                <span>Position</span>\r\n                            </p>\r\n                            <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"resumecv-block\">\r\n                    <p class=\"head\">\r\n                        <span>AWARD</span>\r\n                    </p>\r\n                    <div>\r\n                        <div class=\"resumecv-box-content\">\r\n                            <h3>\r\n                                <span>Award\'s name</span>\r\n                                <span class=\"exp-date\"><em>01/2019</em></span>\r\n                            </h3>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n\r\n\r\n                <div class=\"resumecv-block\">\r\n\r\n                    <p class=\"head\">\r\n                        <span>More information</span>\r\n                    </p>\r\n                    <div>\r\n                        <div class=\"resumecv-box-content\">\r\n                            <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"resumecv-block\">\r\n\r\n                    <p class=\"head\">\r\n                        <span>References</span>\r\n                    </p>\r\n                    <div>\r\n\r\n                        <div class=\"resumecv-box-content\">\r\n                            <div class=\"exp-content\">Name, company, phone, email,...\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n\r\n            </div>\r\n        </div>\r\n\r\n\r\n    </div>\r\n</div>', '#resumecv-layout {\r\n       width: 100%;\r\n       max-width: 210mm;\r\n       background: #3F9599;\r\n       padding: 0;\r\n         box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n\r\n   }\r\n\r\n   #resumecv-main {\r\n       font-size: 14px;\r\n       line-height: 24px;\r\n   }\r\n\r\n   #resumecv-content {\r\n       background: #fff;\r\n   }\r\n\r\n   #resumecv-content .resumecv-content-main {\r\n       padding: 15px;\r\n   }\r\n\r\n   #resumecv-content-top {\r\n       background: #fff;\r\n       padding-bottom: 10px;\r\n   }\r\n\r\n   #resumecv-top-info-img {\r\n       display: flex;\r\n       flex-wrap: nowrap;\r\n   }\r\n\r\n   #resumecv-top-info-img .resumecv-top-info {\r\n       width: 80%;\r\n       text-align: left;\r\n       display: block;\r\n       margin-top: 34px;\r\n       margin-left: 40px;\r\n       padding-top: 25px;\r\n       padding-left: 30px;\r\n       color: #fff;\r\n\r\n   }\r\n\r\n\r\n\r\n   #resumecv-box-ava img {\r\n       width: 150px;\r\n       border-radius: 50%;\r\n   }\r\n\r\n   #resumecv-top-info-contact {\r\n       display: flex;\r\n       padding: 8px 30px;\r\n       margin-top: 20px;\r\n       margin-bottom: 0px !important;\r\n       color: #fff;\r\n       font-size: 14px;\r\n       background-color: #fdcb2a;\r\n   }\r\n\r\n   #resumecv-top-info-contact .top-contact {\r\n       flex: auto;\r\n       padding: 5px;\r\n   }\r\n\r\n   #resumecv-content .resumecv-block {\r\n       position: relative;\r\n       padding: 5px 10px;\r\n   }\r\n\r\n   #rb-left .resumecv-box-content {\r\n       padding-bottom: 0;\r\n       margin: 0;\r\n   }\r\n\r\n   .tag {\r\n       background-color: #fdcb2a;\r\n       margin-right: 2px;\r\n       margin-bottom: 5px;\r\n       padding: .2em .6em .3em;\r\n       font-size: 16px;\r\n       font-weight: 500;\r\n       color: #484a54;\r\n       text-align: center;\r\n       white-space: nowrap;\r\n       vertical-align: baseline;\r\n       display: inline-block;\r\n       border-radius: .25em;\r\n   }\r\n\r\n   .skill {\r\n       margin-top: 15px\r\n   }\r\n\r\n   #resumecv-content-top h1 {\r\n       font-size: 32px;\r\n       margin: 0;\r\n       padding-bottom: 10px;\r\n       /* t, r,b,l */\r\n       line-height: normal;\r\n       text-transform: uppercase;\r\n       font-weight: 700;\r\n       color: #333;\r\n\r\n   }\r\n\r\n   #resumecv-content-top p {\r\n       color: #333;\r\n\r\n   }\r\n\r\n\r\n   #resumecv-content-top h2 {\r\n       color: #333;\r\n       margin: 0;\r\n       font-size: 22px;\r\n       font-weight: normal;\r\n       font-style: italic;\r\n       font-weight: 400;\r\n   }\r\n\r\n   .box-name p {\r\n       overflow: hidden;\r\n   }\r\n\r\n   .box-name {\r\n       overflow: hidden;\r\n       background: #2f3a40;\r\n   }\r\n\r\n   #rb-left .h3 {\r\n       font-size: 18px;\r\n       font-weight: bold;\r\n       margin-top: 0;\r\n       text-transform: uppercase;\r\n\r\n       text-align: center;\r\n   }\r\n\r\n   .top-contact p {\r\n       margin: 0;\r\n   }\r\n\r\n   #resumecv-content .head {\r\n       font-size: 18px;\r\n       color: #2f3a40;\r\n       padding-bottom: 5px;\r\n       /* border-bottom: 2px solid #9B9C8F; */\r\n       font-weight: bold;\r\n       margin-top: 0;\r\n       text-transform: uppercase;\r\n   }\r\n\r\n\r\n   #resumecv-content h3 {\r\n       font-weight: bold;\r\n       font-size: 14px;\r\n       line-height: 30px;\r\n       margin-bottom: 10px;\r\n       color: #333;\r\n   }\r\n\r\n   #rb-left .h3 span {\r\n       padding: 0px 15px;\r\n   }\r\n\r\n   #resumecv-content span {\r\n       display: inline-block;\r\n       padding-right: 15px;\r\n       padding-left: 15px;\r\n   }\r\n\r\n   #rb-left .h3:first-child {\r\n       margin-top: 0\r\n   }\r\n\r\n   .resumecv-box-content {\r\n       margin-bottom: 25px;\r\n       padding-left: 15px;\r\n       position: relative;\r\n   }\r\n\r\n   #resumecv-box-ava {\r\n       text-align: center;\r\n       padding-top: 34px;\r\n       padding-left: 40px;\r\n\r\n   }\r\n\r\n   .bar-exp span {\r\n       display: block;\r\n       height: 8px;\r\n       background: #d9d9d9;\r\n   }\r\n\r\n   .bar-exp {\r\n       background: #2f3a40;\r\n       border: solid 2px white;\r\n       margin-bottom: 12px;\r\n   }\r\n\r\n   .icoweb label {\r\n       display: block;\r\n       color: #627e88;\r\n   }\r\n\r\n   .icoweb span {\r\n       display: block;\r\n   }\r\n\r\n   .box-contact {\r\n       font-size: 13px;\r\n       margin-left: 5px;\r\n       padding-top: 0px;\r\n   }\r\n\r\n   .icoweb i.fa, .icoweb i.fab, .icoweb i.far {\r\n       width: 20px;\r\n       height: 20px;\r\n       border-radius: 50%;\r\n       -webkit-border-radius: 50%;\r\n       -moz-border-radius: 50%;\r\n       display: inline-block;\r\n       text-align: center;\r\n       font-size: 16px;\r\n       line-height: 20px;\r\n       color: #2f3a40 !important;\r\n       margin-right: 10px;\r\n       margin-top: 3px;\r\n       float: left\r\n   }\r\n\r\n   .head i {\r\n       font-size: 25px;\r\n       margin-right: 10px;\r\n   }\r\n\r\n   .exp-content {\r\n       padding-left: 15px;\r\n   }\r\n\r\n   #resumecv-content span.exp-date {\r\n       float: right;\r\n   }\r\n\r\n   .icon_fa {\r\n       text-align: center;\r\n   }\r\n\r\n   .icon_fa i.fa {\r\n       font-size: 20px;\r\n       border: solid 1px #ffffff;\r\n       border-radius: 50%;\r\n       padding: 5px;\r\n       width: 20px;\r\n       color: white;\r\n       background: #ffffff;\r\n       margin-bottom: 5px;\r\n   }\r\n\r\n   p.head i.fa {\r\n       float: left\r\n   }', 1, 0, '2021-06-22 19:46:11', '2021-06-22 19:46:11'),
(3, 4, 'Resume 2', '675132470.png', '<div id=\"resumecv-layout\">\r\n  \r\n  <div id=\"resumecv-main\">\r\n\r\n    <div id=\"rb-left\">\r\n        <div id=\"rb-left-top\">\r\n            <div class=\"resumecv-block\">\r\n                <div>\r\n                    <img id=\"resumecv-ava\" src=\"##image_url##resumecv-avatar.jpg\">\r\n                </div>\r\n              </div>\r\n        </div>\r\n        <div id=\"resumecv-main-left\">\r\n            <div class=\"block resumecv-block\">\r\n                <p class=\"h3\"><span class=\"box-title rb_data\">information</span></p>\r\n            </div>\r\n            <div class=\"box-contact\">\r\n              <p class=\"icoweb\"><i class=\"fa fa-calendar\"></i><span>22/12/1995</span>\r\n              </p>\r\n              <p class=\"icoweb\"><i class=\"fa fa-user\"></i><span>Men</span>\r\n              </p>\r\n              <p class=\"icoweb\" ><i class=\"fa fa-phone\"></i><span>+123456789</span></p>\r\n              <p class=\"icoweb\" ><i class=\"fa fa-envelope-square\"></i><span >your@email.com</span>\r\n              </p>\r\n              <p class=\"icoweb\"><i class=\"fa fa-map-marker\"></i><span>Los Angeles</span>\r\n              </p>\r\n              <p class=\"icoweb\"><i class=\"fa fa-info\"></i><span>fb.com/me</span>\r\n              </p>\r\n            </div>\r\n            <p class=\"h3\"><span class=\"box-title rb_data\">Skill</span></p>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">Photoshop</p>\r\n                      <div class=\"status sk-3\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">Develop</p>\r\n                      <div class=\"\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">HTML</p>\r\n                      <div class=\"\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n        </div>\r\n       \r\n\r\n        \r\n      </div>\r\n  <div id=\"resumecv-content\">\r\n    <div id=\"resumecv-content-top\">\r\n        <div class=\"resumecv-block\">\r\n          <div>\r\n              <h1><span>Your full name</span></h1>\r\n              <h1 class=\"job_position\"><span>Job position</span></h1>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    <div id=\"resumecv-content-main\">\r\n    \r\n    <div class=\"resumecv-block\">\r\n      <p class=\"head\">\r\n        <i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i>\r\n        <span>Target</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>\r\n        <span >Education</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>School\'s name</span>\r\n            <span class=\"exp-date\"><em >07/2015</em> - <em >03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span >Major</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>\r\n        <span>Expericence</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>Company\'s name</span>\r\n            <span class=\"exp-date\"><em>04/2022</em> - <em >Now</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\r\n        <span>Activities</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n            <span >Organization\'s name</span>\r\n            <span class=\"exp-date\"><em >01/2019</em> - <em>03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n        <p class=\"head\">\r\n            <i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>\r\n          <span>AWARD</span>\r\n        </p>\r\n        <div>\r\n          <div class=\"resumecv-box-content\">\r\n            <h3>\r\n              <span >Award\'s name</span>\r\n              <span class=\"exp-date\"><em >01/2019</em></span>\r\n            </h3>\r\n          </div>\r\n        </div>\r\n      </div>\r\n      <div class=\"resumecv-block\">\r\n          <p class=\"head\">\r\n              <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>\r\n            <span>SKILL</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <h3>\r\n                <span >Skill\'s name</span>\r\n              </h3>\r\n              <div class=\"exp-content\">Lorem ipsum dolor sit amet, consectetur adipisicing \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      <div class=\"resumecv-block\">\r\n      \r\n          <p class=\"head\">\r\n              <i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i>\r\n            <span>More information</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n  \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>\r\n        <span>References</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Name, company, phone, email,...\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    \r\n  </div>\r\n  </div>\r\n  \r\n\r\n  </div>\r\n    </div>', '#resumecv-layout {\r\n  width: 100%;\r\n  max-width: 210mm;\r\n  padding: 0;\r\n  box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n\r\n  \r\n}\r\n\r\n#resumecv-main{\r\n\r\nfont-size: 14px;line-height: 24px;\r\ndisplay: flex;\r\nflex-wrap: nowrap;\r\npadding: 20px;\r\nbackground-color: #ffff;\r\n}\r\n\r\n#rb-left-top{\r\n    margin-bottom: 50px;\r\n}\r\n#resumecv-content-top{\r\n    margin-bottom: 65px;\r\n}\r\n\r\n#rb-left {\r\n  width: 28%;\r\n  padding:10px 5px;\r\n  padding-left: 15px;\r\n  padding-top: 20px;\r\n}\r\n#resumecv-content {\r\n  width: 72%;\r\n  background: #fff;\r\n  padding-right: 10px;\r\n  padding-left: 20px;\r\n}\r\n\r\n#resumecv-content-top{	\r\ncolor: #000;\r\nbackground:#ffff;\r\npadding-left: 10px;\r\npadding-top: 30px;\r\n}\r\n#resumecv-content-top .resumecv-block {\r\n    position: relative;\r\n    padding: 5px 10px;\r\n    display: flex;\r\n}\r\n#resumecv-ava{\r\n    width:100px;\r\n    border-radius: 50%;\r\n}\r\n\r\n#resumecv-content .resumecv-block {\r\n  position: relative;\r\n}\r\n#rb-left .resumecv-box-content {\r\npadding-bottom: 0;\r\nmargin:0;\r\n}\r\n.skill{\r\nmargin-top: 15px\r\n}\r\n\r\n#resumecv-content-top h1{\r\nfont-size: 32px;	\r\nmargin:0;\r\ncolor:#383838;\r\npadding-top: 0px;\r\nline-height: normal;\r\ntext-transform: capitalize;\r\nfont-weight: 800;\r\n}\r\n#resumecv-content-top .resumecv-block{\r\n    padding-left: 0px;\r\n}\r\n#resumecv-content-top .job_position{\r\n    font-size: 22px;\r\n    color: #333;\r\n    font-weight: 500;	\r\n\r\n}\r\n#resumecv-content-top h1 span{\r\ndisplay:block\r\n}\r\n\r\n\r\n.box-name p{		\r\n  overflow: hidden;\r\n}\r\n.box-name{		\r\noverflow: hidden;\r\nbackground: #2f3a40;\r\n}\r\n#resumecv-content p{\r\nmargin-bottom: 5px\r\n}\r\n#rb-left .h3{\r\n    font-size: 18px;\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n#resumecv-content .head{\r\n  font-size: 18px;\r\n  color: #2f3a40;\r\n  padding-bottom: 5px;\r\n  /* border-bottom: 2px solid #9B9C8F; */\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n#resumecv-content-main{\r\n    padding-left: 10px;\r\n}\r\n\r\n#resumecv-content h3{\r\n  font-weight:bold;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n}\r\n\r\n\r\n#resumecv-content span{\r\ndisplay: inline-block;\r\npadding-right: 15px;\r\npadding-left: 15px;\r\n}\r\n\r\n#rb-left .h3:first-child{\r\nmargin-top: 0\r\n}\r\n.resumecv-box-content{\r\nmargin-bottom: 25px;\r\npadding-left: 15px;\r\nposition: relative;\r\n}\r\n\r\n#resumecv-box-ava{	\r\ntext-align:center;padding:2px;margin-bottom: 10px; auto;\r\n}\r\n#resumecv-box-ava img{\r\npadding: 0;\r\nborder:0;\r\nwidth: 150px;\r\nheight: 150px;\r\n\r\n}\r\n.bar-exp span {\r\n  display:block;\r\n  height: 8px;\r\n  background: #d9d9d9;\r\n}\r\n.bar-exp{\r\nbackground: #2f3a40;\r\nborder: solid 2px white;\r\n  margin-bottom: 12px;\r\n}\r\n.icoweb label{\r\ndisplay: block;\r\ncolor:#627e88;\r\n}\r\n.icoweb span{\r\ndisplay: block;\r\n}\r\n\r\n.box-contact{\r\nfont-size: 13px;\r\npadding-top:0px;\r\nmargin-bottom: 50px;\r\n}\r\n\r\n.icoweb i.fa, .icoweb i.fab, .icoweb i.far{\r\n  width: 20px;\r\n  height: 20px;\r\n  background-color:#ffff;\r\n  border-radius: 50%;\r\n  -webkit-border-radius: 50%;\r\n  -moz-border-radius: 50%;\r\n  display: inline-block;\r\n  text-align: center;\r\n  font-size: 13px;\r\n  line-height: 20px;\r\n  color: #2f3a40!important;\r\n  margin-right: 10px;\r\n  margin-top: 3px;float:left\r\n}\r\n.head i{\r\n  font-size: 25px;\r\n  margin-right: 10px;\r\n}\r\n\r\n#resumecv-content span.exp-date {\r\n  float: right;\r\n}\r\n\r\n.resumecv-box-content-skill span.fa {\r\n    margin-right: 8px;\r\n    font-size: 18px;\r\n}\r\n.resumecv-box-content-skill span.fa.checked {\r\n    color: #FFC531;\r\n}\r\n\r\n.icon_fa{\r\ntext-align: center;\r\n}\r\n.icon_fa i.fa{\r\nfont-size: 20px;\r\nborder: solid 1px #ffffff;\r\nborder-radius: 50%;\r\npadding: 5px;\r\nwidth: 20px;\r\ncolor: white;\r\nbackground: #ffffff;\r\nmargin-bottom: 5px;\r\n}\r\np.head i.fa{float:left}\r\n.rb-skillrate-value[value=\"1\"]{width:20%}\r\n .rb-skillrate-value[value=\"2\"]{width:40%}\r\n .rb-skillrate-value[value=\"3\"]{width:60%}\r\n .rb-skillrate-value[value=\"4\"]{width:80%}\r\n .rb-skillrate-value[value=\"5\"]{width:100%}', 1, 0, '2021-06-22 19:47:26', '2021-06-22 19:47:26'),
(4, 4, 'Resume 3', '1639787348.png', '<div id=\"resumecv-layout\">\r\n  \r\n  <div id=\"resumecv-content-top\">\r\n    <div class=\"resumecv-block\">\r\n      <div>\r\n          <img id=\"resumecv-ava\" src=\"##image_url##resumecv-avatar.jpg\">\r\n      </div>\r\n    </div>\r\n      <div class=\"resumecv-block\">\r\n        <div>\r\n            <h1><span>Your full name</span></h1>\r\n            <p><span>0123456789 - your@email.com</span></p>\r\n            <p><span>Glaason\'s Tavern, New York</span></p>\r\n\r\n        </div>\r\n      </div>\r\n    </div>\r\n  <div id=\"resumecv-main\">\r\n  \r\n  <div id=\"resumecv-content\">\r\n    \r\n    <div id=\"resumecv-content-main\">\r\n    \r\n    <div class=\"resumecv-block\">\r\n      <p class=\"head\">\r\n        <i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i>\r\n        <span>Target</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>\r\n        <span >Education</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>School\'s name</span>\r\n            <span class=\"exp-date\"><em >07/2015</em> - <em >03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span >Major</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>\r\n        <span>Expericence</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>Company\'s name</span>\r\n            <span class=\"exp-date\"><em>04/2022</em> - <em >Now</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\r\n        <span>Activities</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n            <span >Organization\'s name</span>\r\n            <span class=\"exp-date\"><em >01/2019</em> - <em>03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n        <p class=\"head\">\r\n            <i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>\r\n          <span>AWARD</span>\r\n        </p>\r\n        <div>\r\n          <div class=\"resumecv-box-content\">\r\n            <h3>\r\n              <span >Award\'s name</span>\r\n              <span class=\"exp-date\"><em >01/2019</em></span>\r\n            </h3>\r\n          </div>\r\n        </div>\r\n      </div>\r\n      <div class=\"resumecv-block\">\r\n          <p class=\"head\">\r\n              <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>\r\n            <span>SKILL</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <h3>\r\n                <span >Skill\'s name</span>\r\n              </h3>\r\n              <div class=\"exp-content\">Lorem ipsum dolor sit amet, consectetur adipisicing \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      <div class=\"resumecv-block\">\r\n      \r\n          <p class=\"head\">\r\n              <i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i>\r\n            <span>More information</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n  \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>\r\n        <span>References</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Name, company, phone, email,...\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    \r\n  </div>\r\n  </div>\r\n  </div>\r\n</div>', '#resumecv-layout {\r\n          width: 100%;\r\n          max-width: 210mm;\r\n          padding: 0;\r\n            box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n\r\n          \r\n        }\r\n        \r\n        #resumecv-main{\r\n        \r\n        font-size: 14px;line-height: 24px;\r\n        display: flex;\r\n        flex-wrap: nowrap;\r\n        padding: 20px;\r\n        background-color: #ffff;\r\n        }\r\n        \r\n        #rb-left .resumecv-block{\r\n        margin-bottom: 30px\r\n        }\r\n        \r\n        \r\n        #resumecv-content {\r\n          background: #fff;\r\n          padding-left: 20px;\r\n          padding-top: 20px;\r\n          border:solid#d4d8dd;\r\n          border-width: 2px 0 0 0;\r\n        }\r\n        \r\n        #resumecv-content-top{	\r\n        color: #000;\r\n        background:#ffff;\r\n        padding: 15px;\r\n        padding-top: 30px;\r\n        }\r\n        #resumecv-content-top .resumecv-block {\r\n            position: relative;\r\n            text-align: center;\r\n        }\r\n        #resumecv-content-top .resumecv-block  img{\r\n            width:120px;\r\n            border-radius: 50%;\r\n        }\r\n        \r\n        #resumecv-content .resumecv-block {\r\n          position: relative;\r\n          padding: 5px 10px;\r\n        }\r\n        #rb-left .resumecv-box-content {\r\n        padding-bottom: 0;\r\n        margin:0;\r\n        }\r\n        .skill{\r\n        margin-top: 15px\r\n        }\r\n        \r\n        #resumecv-content-top h1{\r\n        font-size: 45px;	\r\n        margin:0;\r\n        color:#383838;\r\n        padding-top: 0px;\r\n        padding-left: 10px;\r\n        line-height: normal;\r\n        text-transform: capitalize;\r\n        font-weight: 800;\r\n        }\r\n        #resumecv-content-top .job_position{\r\n            font-size: 22px;\r\n            color: #333;\r\n            font-weight: 500;\r\n            margin-top: 15px;	\r\n        \r\n        }\r\n        \r\n        #resumecv-content-top h1 span{\r\n        display:block\r\n        }\r\n        \r\n        \r\n        .box-name p{		\r\n          overflow: hidden;\r\n        }\r\n        .box-name{		\r\n        overflow: hidden;\r\n        background: #2f3a40;\r\n        }\r\n        #resumecv-content p{\r\n        margin-bottom: 5px\r\n        }\r\n        #rb-left .h3{\r\n            font-size: 18px;\r\n          font-weight: bold;\r\n          margin-top: 0;\r\n          text-transform: uppercase;\r\n        }\r\n        #resumecv-content .head{\r\n          font-size: 18px;\r\n          color: #2f3a40;\r\n          padding-bottom: 5px;\r\n          /* border-bottom: 2px solid #9B9C8F; */\r\n          font-weight: bold;\r\n          margin-top: 0;\r\n          text-transform: uppercase;\r\n        }\r\n        \r\n        \r\n        #resumecv-content h3{\r\n          font-weight:bold;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n        }\r\n        \r\n        \r\n        #resumecv-content span{\r\n        display: inline-block;\r\n        padding-right: 15px;\r\n        padding-left: 15px;\r\n        }\r\n        \r\n        #rb-left .h3:first-child{\r\n        margin-top: 0\r\n        }\r\n        .resumecv-box-content{\r\n        margin-bottom: 25px;\r\n        padding-left: 15px;\r\n        position: relative;\r\n        }\r\n        \r\n        #resumecv-box-ava{	\r\n        text-align:center;padding:2px;margin-bottom: 10px; auto;\r\n        }\r\n        #resumecv-box-ava img{\r\n        padding: 0;\r\n        border:0;\r\n        width: 150px;\r\n        height: 150px;\r\n        \r\n        }\r\n        .bar-exp span {\r\n          display:block;\r\n          height: 8px;\r\n          background: #d9d9d9;\r\n        }\r\n        .bar-exp{\r\n        background: #2f3a40;\r\n        border: solid 2px white;\r\n          margin-bottom: 12px;\r\n        }\r\n        .icoweb label{\r\n        display: block;\r\n        color:#627e88;\r\n        }\r\n        .icoweb span{\r\n        display: block;\r\n        }\r\n        \r\n        .box-contact{\r\n        font-size: 13px;\r\n        padding-top:0px;\r\n        }\r\n        \r\n        .icoweb i.fa, .icoweb i.fab, .icoweb i.far{\r\n          width: 20px;\r\n          height: 20px;\r\n          background-color:#ffff;\r\n          border-radius: 50%;\r\n          -webkit-border-radius: 50%;\r\n          -moz-border-radius: 50%;\r\n          display: inline-block;\r\n          text-align: center;\r\n          font-size: 13px;\r\n          line-height: 20px;\r\n          color: #2f3a40!important;\r\n          margin-right: 10px;\r\n          margin-top: 3px;float:left\r\n        }\r\n        .head i{\r\n          font-size: 25px;\r\n          margin-right: 10px;\r\n        }\r\n        \r\n        #resumecv-content span.exp-date {\r\n          float: right;\r\n        }\r\n        .icon_fa{\r\n        text-align: center;\r\n        }\r\n        .icon_fa i.fa{\r\n        font-size: 20px;\r\n        border: solid 1px #ffffff;\r\n        border-radius: 50%;\r\n        padding: 5px;\r\n        width: 20px;\r\n        color: white;\r\n        background: #ffffff;\r\n        margin-bottom: 5px;\r\n        }\r\n        p.head i.fa{float:left}\r\n        .rb-skillrate-value[value=\"1\"]{width:20%}\r\n         .rb-skillrate-value[value=\"2\"]{width:40%}\r\n         .rb-skillrate-value[value=\"3\"]{width:60%}\r\n         .rb-skillrate-value[value=\"4\"]{width:80%}\r\n         .rb-skillrate-value[value=\"5\"]{width:100%}', 1, 0, '2021-06-22 19:48:40', '2021-06-22 19:48:40');
INSERT INTO `resumecvtemplates` (`id`, `category_id`, `name`, `thumb`, `content`, `style`, `active`, `is_premium`, `created_at`, `updated_at`) VALUES
(5, 4, 'Resume 4', '1576985207.png', '<div id=\"resumecv-layout\">\r\n  \r\n  <div id=\"resumecv-main\">\r\n\r\n    <div id=\"rb-left\">\r\n        <div id=\"rb-left-top\">\r\n            <div class=\"resumecv-block\">\r\n                <div>\r\n                    <img id=\"resumecv-ava\" src=\"##image_url##resumecv-avatar.jpg\">\r\n                </div>\r\n              </div>\r\n              \r\n        </div>\r\n        <div id=\"resumecv-main-left\">\r\n            <div class=\"block resumecv-block\">\r\n                <p class=\"h3\"><span class=\"box-title rb_data\">information</span></p>\r\n            </div>\r\n            <div class=\"box-contact\">\r\n              <p class=\"icoweb\"><i class=\"fa fa-calendar\"></i><span>22/12/1995</span>\r\n              </p>\r\n              <p class=\"icoweb\"><i class=\"fa fa-user\"></i><span>Men</span>\r\n              </p>\r\n              <p class=\"icoweb\" ><i class=\"fa fa-phone\"></i><span>+123456789</span></p>\r\n              <p class=\"icoweb\" ><i class=\"fa fa-envelope-square\"></i><span >your@email.com</span>\r\n              </p>\r\n              <p class=\"icoweb\"><i class=\"fa fa-map-marker\"></i><span>Los Angeles</span>\r\n              </p>\r\n              <p class=\"icoweb\"><i class=\"fa fa-info\"></i><span>fb.com/me</span>\r\n              </p>\r\n            </div>\r\n            <p class=\"h3\"><span class=\"box-title rb_data\">Skill</span></p>\r\n            <div>\r\n              <div class=\"resumecv-box-content\">\r\n                <span class=\"tag\">SEO</span>\r\n                <span class=\"tag\">Public Speaking</span>\r\n                <span class=\"tag\">Email Marketing</span>\r\n                <span class=\"tag\">Google analytics</span>\r\n                <span class=\"tag\">Outbound Marketing</span>\r\n                <span class=\"tag\">Research & Strategy</span>\r\n              </div>\r\n            </div>\r\n        </div>\r\n       \r\n\r\n        \r\n      </div>\r\n  <div id=\"resumecv-content\">\r\n    <div id=\"resumecv-content-top\">\r\n        <div class=\"resumecv-block\">\r\n          <div>\r\n              <h1><span>Your full name</span></h1>\r\n              <h1 class=\"job_position\"><span>Job position</span></h1>\r\n              <hr align=\"left\">\r\n              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.\r\n              </p>\r\n          </div>\r\n          \r\n        </div>\r\n      </div>\r\n    <div id=\"resumecv-content-main\">\r\n    \r\n   \r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>\r\n        <span >Education</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>School\'s name</span>\r\n            <span class=\"exp-date\"><em >07/2015</em> - <em >03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span >Major</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>\r\n        <span>Expericence</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>Company\'s name</span>\r\n            <span class=\"exp-date\"><em>04/2022</em> - <em >Now</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\r\n        <span>Activities</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n            <span >Organization\'s name</span>\r\n            <span class=\"exp-date\"><em >01/2019</em> - <em>03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n        <p class=\"head\">\r\n            <i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>\r\n          <span>AWARD</span>\r\n        </p>\r\n        <div>\r\n          <div class=\"resumecv-box-content\">\r\n            <h3>\r\n              <span >Award\'s name</span>\r\n              <span class=\"exp-date\"><em >01/2019</em></span>\r\n            </h3>\r\n          </div>\r\n        </div>\r\n      </div>\r\n     \r\n      <div class=\"resumecv-block\">\r\n      \r\n          <p class=\"head\">\r\n              <i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i>\r\n            <span>More information</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n  \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>\r\n        <span>References</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Name, company, phone, email,...\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    \r\n  </div>\r\n  </div>\r\n  \r\n\r\n  </div>\r\n    </div>', '#resumecv-layout {\r\n      width: 100%;\r\n      max-width: 210mm;\r\n      padding: 0;\r\n        box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n\r\n      \r\n    }\r\n    \r\n    #resumecv-main{\r\n    \r\n    font-size: 14px;line-height: 24px;\r\n    display: flex;\r\n    flex-wrap: nowrap;\r\n    padding: 20px;\r\n    background-color: #ffff;\r\n    }\r\n    \r\n    #rb-left-top{\r\n        margin-bottom: 60px;\r\n    }\r\n    \r\n    \r\n    #rb-left {\r\n      width: 28%;\r\n      padding:10px 5px;\r\n      padding-left: 15px;\r\n      padding-top: 20px;\r\n    }\r\n    #resumecv-content {\r\n      width: 72%;\r\n      background: #fff;\r\n      padding-right: 10px;\r\n      padding-left: 20px;\r\n      padding-top: 20px;\r\n    }\r\n    \r\n    #resumecv-content-top{	\r\n    color: #fff;\r\n    background:#383838;\r\n    padding: 15px;\r\n    padding-bottom: 0px;\r\n    margin-bottom: 50px\r\n    }\r\n    #resumecv-content-top hr{\r\n      width:200px;\r\n      align-items: left;\r\n      border: 1px solid #fff;\r\n    \r\n    }\r\n    #resumecv-content-top .resumecv-block {\r\n        position: relative;\r\n        padding: 5px 10px;\r\n        display: flex;\r\n    }\r\n    #resumecv-ava{\r\n        width:150px;\r\n        border-radius: 50%;\r\n    }\r\n    \r\n    #resumecv-content .resumecv-block {\r\n      position: relative;\r\n    }\r\n    #rb-left .resumecv-box-content {\r\n    padding-bottom: 0;\r\n    margin:0;\r\n    }\r\n    .skill{\r\n    margin-top: 15px\r\n    }\r\n    \r\n    #resumecv-content-top h1{\r\n    font-size: 32px;	\r\n    margin:0;\r\n    padding-top: 0px;\r\n    line-height: normal;\r\n    text-transform: capitalize;\r\n    font-weight: 800;\r\n    }\r\n    #resumecv-content-top .resumecv-block{\r\n        padding-left: 0px;\r\n    }\r\n    #resumecv-content-top .job_position{\r\n        font-size: 22px;\r\n        font-weight: 500;	\r\n    \r\n    }\r\n    \r\n    \r\n    .box-name p{		\r\n      overflow: hidden;\r\n    }\r\n    .box-name{		\r\n    overflow: hidden;\r\n    background: #2f3a40;\r\n    }\r\n    #resumecv-content p{\r\n    margin-bottom: 5px\r\n    }\r\n    #rb-left .h3{\r\n        font-size: 18px;\r\n      font-weight: bold;\r\n      margin-top: 0;\r\n      text-transform: uppercase;\r\n    }\r\n    #resumecv-content .head{\r\n      font-size: 18px;\r\n      color: #2f3a40;\r\n      padding-bottom: 5px;\r\n      /* border-bottom: 2px solid #9B9C8F; */\r\n      font-weight: bold;\r\n      margin-top: 0;\r\n      text-transform: uppercase;\r\n    }\r\n    #resumecv-content-main{\r\n        padding-left: 10px;\r\n    }\r\n    \r\n    #resumecv-content h3{\r\n      font-weight:bold;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n    }\r\n    \r\n    \r\n    #resumecv-content span{\r\n    display: inline-block;\r\n    padding-right: 15px;\r\n    padding-left: 15px;\r\n    }\r\n    \r\n    #rb-left .h3:first-child{\r\n    margin-top: 0\r\n    }\r\n    .resumecv-box-content{\r\n    margin-bottom: 25px;\r\n    position: relative;\r\n    }\r\n    \r\n    #resumecv-box-ava{	\r\n    text-align:center;padding:2px;margin-bottom: 10px; auto;\r\n    }\r\n    #resumecv-box-ava img{\r\n    padding: 0;\r\n    border:0;\r\n    width: 150px;\r\n    height: 150px;\r\n    \r\n    }\r\n    .bar-exp span {\r\n      display:block;\r\n      height: 8px;\r\n      background: #d9d9d9;\r\n    }\r\n    .bar-exp{\r\n    background: #2f3a40;\r\n    border: solid 2px white;\r\n      margin-bottom: 12px;\r\n    }\r\n    .icoweb label{\r\n    display: block;\r\n    color:#627e88;\r\n    }\r\n    .icoweb span{\r\n    display: block;\r\n    }\r\n    \r\n    .box-contact{\r\n    font-size: 13px;\r\n    padding-top:0px;\r\n    margin-bottom: 50px;\r\n    }\r\n    \r\n    .icoweb i.fa, .icoweb i.fab, .icoweb i.far{\r\n      width: 20px;\r\n      height: 20px;\r\n      background-color:#ffff;\r\n      border-radius: 50%;\r\n      -webkit-border-radius: 50%;\r\n      -moz-border-radius: 50%;\r\n      display: inline-block;\r\n      text-align: center;\r\n      font-size: 13px;\r\n      line-height: 20px;\r\n      color: #2f3a40!important;\r\n      margin-right: 10px;\r\n      margin-top: 3px;float:left\r\n    }\r\n    .head i{\r\n      font-size: 25px;\r\n      margin-right: 10px;\r\n    }\r\n    \r\n    #resumecv-content span.exp-date {\r\n      float: right;\r\n    }\r\n    .icon_fa{\r\n    text-align: center;\r\n    }\r\n    .icon_fa i.fa{\r\n    font-size: 20px;\r\n    border: solid 1px #ffffff;\r\n    border-radius: 50%;\r\n    padding: 5px;\r\n    width: 20px;\r\n    color: white;\r\n    background: #ffffff;\r\n    margin-bottom: 5px;\r\n    }\r\n    p.head i.fa{float:left}\r\n    .tag {\r\n        background-color: #383838;\r\n        margin-right: 2px;\r\n        margin-bottom: 5px;\r\n        padding-top: 0.2em;\r\n        padding-right: 0.6em;\r\n        padding-bottom: 0.3em;\r\n        padding-left: 0.6em;\r\n        font-size: 16px;\r\n        font-weight: 700;\r\n        color: rgb(255, 255, 255);\r\n        text-align: center;\r\n        white-space: nowrap;\r\n        vertical-align: baseline;\r\n        display: inline-block;\r\n        border-top-left-radius: 0.25em;\r\n        border-top-right-radius: 0.25em;\r\n        border-bottom-right-radius: 0.25em;\r\n        border-bottom-left-radius: 0.25em;\r\n    }', 1, 0, '2021-06-22 19:49:45', '2021-06-22 19:49:45'),
(6, 4, 'Resume 5', '695681493.png', '<div id=\"resumecv-layout\">\r\n  <div id=\"resumecv-main\">\r\n  \r\n  <div id=\"resumecv-content\">\r\n   \r\n   <div id=\"resumecv-content-top\">\r\n        <div id=\"resumecv-top-info-img\">\r\n            <div class=\"resumecv-top-info\">\r\n                <h1><span>Your full name</span></h1>\r\n                <h2><span>Job position</span></h2>\r\n            </div>\r\n        </div>\r\n        <div id=\"resumecv-top-info-contact\">\r\n            <div class=\"top-contact\">\r\n                <p class=\"icoweb\" ><i class=\"fa fa-phone\"></i><span>+123456789</span></p>\r\n                <p class=\"icoweb\" ><i class=\"fa fa-envelope-square\"></i><span >your@email.com</span>\r\n                  <p class=\"icoweb\"><i class=\"fa fa-map-marker\"></i><span>Los Angeles</span>\r\n                  </p>\r\n                  <p class=\"icoweb\"><i class=\"fa fa-info\"></i><span>fb.com/me</span>\r\n                  </p>\r\n                </div>\r\n        </div>\r\n    </div>\r\n    \r\n    <div class=\"resumecv-content-main\">\r\n    \r\n    <div class=\"resumecv-block\">\r\n        \r\n      <p class=\"head\">\r\n          <i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i>\r\n        <span>Target</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>\r\n        <span >Education</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>School\'s name</span>\r\n            <span class=\"exp-date\"><em >07/2015</em> - <em >03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span >Major</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>\r\n        <span>Expericence</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>Company\'s name</span>\r\n            <span class=\"exp-date\"><em>04/2022</em> - <em >Now</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\r\n        <span>Activities</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n            <span >Organization\'s name</span>\r\n            <span class=\"exp-date\"><em >01/2019</em> - <em>03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      <p class=\"head\">\r\n          <i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>\r\n        <span>AWARD</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n            <span >Award\'s name</span>\r\n            <span class=\"exp-date\"><em >01/2019</em></span>\r\n          </h3>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n        <p class=\"head\">\r\n            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>\r\n          <span>SKILL</span>\r\n        </p>\r\n        <div>\r\n          <div class=\"resumecv-box-content\">\r\n            <h3>\r\n              <span >Skill\'s name</span>\r\n            </h3>\r\n            <div class=\"exp-content\">Lorem ipsum dolor sit amet, consectetur adipisicing \r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n    \r\n      <div class=\"resumecv-block\">\r\n      \r\n          <p class=\"head\">\r\n              <i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i>\r\n            <span>More information</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n  \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>\r\n        <span>References</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Name, company, phone, email,...\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    \r\n  </div>\r\n  </div>\r\n  \r\n\r\n  </div>\r\n    </div>', '#resumecv-layout {\r\n  width: 100%;\r\n  max-width: 210mm;\r\n  background: #3F9599;\r\n  padding: 0;\r\n    box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n\r\n  \r\n}\r\n\r\n#resumecv-main{\r\n\r\nfont-size: 14px;line-height: 24px;\r\n\r\n}\r\n\r\n#resumecv-content {\r\n  background: #fff;\r\n}\r\n#resumecv-content .resumecv-content-main{\r\npadding: 10px 0 10px 5px;\r\n}\r\n#resumecv-content-top{	\r\n  background:#383838;\r\n  padding-top: 10px;\r\n  padding-bottom: 40px;\r\n\r\n  display: flex;\r\n}\r\n   #resumecv-top-info-img{\r\n         width:70%;\r\n      }\r\n      #resumecv-top-info-img .resumecv-top-info{\r\n         padding-top: 34px;\r\n         padding-left: 40px;\r\n      }\r\n      \r\n\r\n      #resumecv-box-ava img{\r\n        width:100px;\r\n      }\r\n      #resumecv-top-info-contact{\r\n        width: 30%;\r\n        margin-top: 20px;\r\n        color:white;\r\n        font-size: 14px;\r\n      }\r\n     \r\n#resumecv-content .resumecv-block {\r\n  position: relative;\r\n  padding: 5px 10px;\r\n}\r\n#rb-left .resumecv-box-content {\r\npadding-bottom: 0;\r\nmargin:0;\r\n}\r\n.skill{\r\nmargin-top: 15px\r\n}\r\n\r\n#resumecv-content-top h1{\r\nfont-size: 32px;	\r\nmargin:0;\r\npadding-bottom: 10px;/* t, r,b,l */\r\nline-height: normal;\r\ntext-transform: uppercase;\r\nfont-weight: 700;\r\n\r\n}\r\n\r\n#resumecv-content-top h1 span{\r\ncolor: #fff;display:block\r\n}\r\n\r\n#resumecv-content-top h2{\r\nmargin:0;\r\nfont-size: 22px;\r\nfont-weight: normal;\r\n/* padding: 0 20px 20px 20px; */\r\ncolor: #fff;\r\n  font-style: italic;\r\n  font-weight: 400;\r\n}\r\n.box-name p{		\r\n  overflow: hidden;\r\n}\r\n.box-name{		\r\noverflow: hidden;\r\nbackground: #2f3a40;\r\n}\r\n#resumecv-content p{\r\nmargin-bottom: 5px\r\n}\r\n#rb-left .h3{\r\nfont-size: 18px;\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n  \r\n  text-align: center;\r\n}\r\n#resumecv-content .head{\r\n  font-size: 18px;\r\n  color: #2f3a40;\r\n  padding-bottom: 5px;\r\n  /* border-bottom: 2px solid #9B9C8F; */\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n\r\n\r\n#resumecv-content h3{\r\n  font-weight:bold;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n}\r\n\r\n#rb-left .h3 span{\r\npadding: 0px 15px;\r\n}\r\n#resumecv-content span{\r\ndisplay: inline-block;\r\npadding-right: 15px;\r\npadding-left: 15px;\r\n}\r\n\r\n#rb-left .h3:first-child{\r\nmargin-top: 0\r\n}\r\n.resumecv-box-content{\r\nmargin-bottom: 25px;\r\npadding-left: 15px;\r\nposition: relative;\r\n}\r\n\r\n#resumecv-box-ava{	\r\ntext-align:center;\r\npadding:10px;\r\n\r\n}\r\n#resumecv-box-ava img{\r\npadding: 0;\r\nborder:0;\r\nwidth: 100px;\r\nheight: 100px;\r\n\r\n}\r\n.bar-exp span {\r\n  display:block;\r\n  height: 8px;\r\n  background: #d9d9d9;\r\n}\r\n.bar-exp{\r\nbackground: #2f3a40;\r\nborder: solid 2px white;\r\n  margin-bottom: 12px;\r\n}\r\n.icoweb label{\r\ndisplay: block;\r\ncolor:#627e88;\r\n}\r\n.icoweb span{\r\ndisplay: block;\r\n}\r\n\r\n.box-contact{\r\nfont-size: 13px;\r\nmargin-left: 5px;\r\npadding-top:0px;\r\n}\r\n\r\n.icoweb i.fa, .icoweb i.fab, .icoweb i.far{\r\n  width: 20px;\r\n  height: 20px;\r\n  background-color: #ffffff;\r\n  border-radius: 50%;\r\n  -webkit-border-radius: 50%;\r\n  -moz-border-radius: 50%;\r\n  display: inline-block;\r\n  text-align: center;\r\n  font-size: 13px;\r\n  line-height: 20px;\r\n  color: #2f3a40!important;\r\n  margin-right: 10px;\r\n  margin-top: 3px;\r\n  float:left;\r\n}\r\n.head i{\r\n  font-size: 25px;\r\n  margin-right: 10px;\r\n}\r\n.exp-content{\r\npadding-left: 15px;\r\n}\r\n#resumecv-content span.exp-date {\r\n  float: right;\r\n}\r\n.icon_fa{\r\ntext-align: center;\r\n}\r\n.icon_fa i.fa{\r\nfont-size: 20px;\r\nborder: solid 1px #ffffff;\r\nborder-radius: 50%;\r\npadding: 5px;\r\nwidth: 20px;\r\ncolor: white;\r\nbackground: #ffffff;\r\nmargin-bottom: 5px;\r\n}\r\np.head i.fa{float:left}', 1, 0, '2021-06-22 19:50:51', '2021-06-22 19:50:51'),
(7, 4, 'Resume 6', '1534382572.png', '<div id=\"resumecv-layout\">\r\n  <div id=\"resumecv-main\">\r\n  <div id=\"rb-left\">\r\n      <div id=\"rb-left-top\">\r\n          <div>\r\n            <h1><span>Your full name</span></h1>\r\n            <h2><span>Job position</span></h2>\r\n          </div>\r\n    </div>\r\n    <div id=\"resumecv-box-ava\">\r\n      <img id=\"resumecv-ava\" src=\"##image_url##resumecv-avatar.jpg\" >\r\n    </div>\r\n    <div class=\"block resumecv-block\">\r\n        <p class=\"h3\"><span class=\"box-title rb_data\">information</span></p>\r\n    </div>\r\n    <div class=\"box-contact\">\r\n      <p class=\"icoweb\" ><i class=\"fa fa-phone\"></i><span>+123456789</span></p>\r\n      <p class=\"icoweb\" ><i class=\"fa fa-envelope-square\"></i><span >hello@hello.com</span>\r\n      </p>\r\n      <p class=\"icoweb\"><i class=\"fa fa-map-marker\"></i><span>Los Angeles</span>\r\n      </p>\r\n      <p class=\"icoweb\"><i class=\"fa fa-info\"></i><span>fb.com/me</span>\r\n      </p>\r\n    </div>\r\n    <div>\r\n        <div class=\"block resumecv-block\">\r\n          \r\n          <p class=\"h3\"><span class=\"box-title rb_data\">Award</span></p>\r\n          <div>\r\n  \r\n            <div>\r\n              <span class=\"box-content\">Award\'s name</span>\r\n              <span class=\"date rb_data\">2022</span>\r\n              <div class=\"clearfix\"></div>\r\n            </div>\r\n          </div>\r\n          <div class=\"clearfix\"></div>\r\n        </div>\r\n        <div class=\"block resumecv-block\"  >\r\n          \r\n          <p class=\"h3\"><span class=\"box-title rb_data\" >Certification</span></p>\r\n          <div>\r\n  \r\n            <div>\r\n              \r\n              <span class=\"box-content\">Certification\'s name</span>\r\n              <span class=\"date rb_data\">2022</span>\r\n              <div class=\"clearfix\"></div>\r\n            </div>\r\n          </div>\r\n          <div class=\"clearfix\"></div>\r\n        </div>\r\n        <div class=\"block resumecv-block box-skills\">\r\n          \r\n           <p class=\"h3\"><span class=\"box-title rb_data\">Skill</span></p>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">Photoshop</p>\r\n                      <div class=\"status sk-3\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">Develop</p>\r\n                      <div class=\"\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">HTML</p>\r\n                      <div class=\"\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n        </div>\r\n        <div class=\"block resumecv-block\">\r\n          <p class=\"h3\"><span class=\"box-title rb_data\" name=\"hob.tit\">Hobbies</span></p>\r\n          <div>\r\n            <div>\r\n              \r\n              <div class=\"box-content\">Your hobbies\r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      </div>\r\n  </div>\r\n\r\n  <div id=\"resumecv-content\">\r\n    \r\n  \r\n    <div class=\"resumecv-content-main\">\r\n    \r\n    <div class=\"resumecv-block\">\r\n        \r\n      <p class=\"head\">\r\n          <i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i>\r\n        <span>Target</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>\r\n        <span >Education</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>School\'s name</span>\r\n            <span class=\"exp-date\"><em >07/2015</em> - <em >03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span >Major</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>\r\n        <span>Expericence</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n            <span>Company\'s name</span>\r\n            <span class=\"exp-date\"><em>04/2022</em> - <em >Now</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\r\n        <span>Activities</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n            <span >Organization\'s name</span>\r\n            <span class=\"exp-date\"><em >01/2019</em> - <em>03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    \r\n      <div class=\"resumecv-block\">\r\n      \r\n          <p class=\"head\">\r\n              <i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i>\r\n            <span>More information</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n  \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>\r\n        <span>References</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Name, company, phone, email,...\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    \r\n  </div>\r\n  </div>\r\n  \r\n\r\n  </div>\r\n    </div>', '#resumecv-layout {\r\n   width: 100%;\r\n   max-width: 210mm;\r\n   background: #ffff;\r\n   padding: 0;\r\n     box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n\r\n   \r\n }\r\n \r\n #resumecv-main{\r\n \r\n font-size: 14px;line-height: 24px;\r\n display: flex;\r\n flex-wrap: nowrap;\r\n background-color: #fff;\r\n\r\n }\r\n \r\n #rb-left .resumecv-block{\r\n margin-bottom: 30px\r\n }\r\n \r\n #rb-left {\r\n   width: 30%;\r\n   padding:30px 30px 30px 30px;\r\n   background: #fff!important;\r\n   \r\n\r\n }\r\n #resumecv-content {\r\n   width: 70%;\r\n   background: #fff;\r\n   margin-top: 80px;\r\n\r\n }\r\n \r\n \r\n #rb-left-top h1 span{\r\n display:block\r\n }\r\n \r\n #rb-left-top h2{\r\n margin:0;\r\n font-size: 16px;\r\n font-weight: normal;\r\n margin-bottom: 12px;\r\n text-align: left;\r\n   font-style: italic;\r\n   font-weight: 600;\r\n   color:#383838;\r\n\r\n }\r\n \r\n #rb-left-top h1{\r\n   color:#383838;\r\n font-size: 28px;	\r\n margin:0;\r\n line-height: normal;\r\n text-transform: uppercase;\r\n text-align: left;\r\n   font-weight: 700;\r\npadding-bottom: 10px;\r\n \r\n }\r\n \r\n #resumecv-content .resumecv-block {\r\n   position: relative;\r\n   padding: 5px 10px;\r\n }\r\n #rb-left .resumecv-box-content {\r\n padding-bottom: 0;\r\n margin:0;\r\n }\r\n .skill{\r\n margin-top: 15px\r\n }\r\n \r\n \r\n .box-name p{		\r\n   overflow: hidden;\r\n }\r\n .box-name{		\r\n overflow: hidden;\r\n background: #2f3a40;\r\n }\r\n #resumecv-content p{\r\n margin-bottom: 5px\r\n }\r\n #rb-left .h3{\r\n  color:#383838;\r\n\r\n font-size: 18px;\r\n   font-weight: bold;\r\n   margin-top: 0;\r\n   text-transform: uppercase;\r\n   \r\n   text-align: left;\r\n }\r\n #resumecv-content .head{\r\n   font-size: 18px;\r\n   color: #383838;\r\n   padding-bottom: 5px;\r\n   /* border-bottom: 2px solid #9B9C8F; */\r\n   font-weight: bold;\r\n   margin-top: 0;\r\n   text-transform: uppercase;\r\n }\r\n \r\n \r\n #resumecv-content h3{\r\n   font-weight:bold;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n }\r\n \r\n #resumecv-content span{\r\n display: inline-block;\r\n padding-right: 15px;\r\n padding-left: 15px;\r\n }\r\n \r\n #rb-left .h3:first-child{\r\n margin-top: 0\r\n }\r\n .resumecv-box-content{\r\n margin-bottom: 25px;\r\n padding-left: 15px;\r\n position: relative;\r\n }\r\n \r\n #resumecv-box-ava{	\r\n margin-bottom: 10px; auto;\r\n }\r\n #resumecv-box-ava img{\r\n padding: 0;\r\n border:0;\r\n width: 150px;\r\n height: 150px;\r\n border-radius: 50%;\r\n \r\n }\r\n .bar-exp span {\r\n   display:block;\r\n   height: 8px;\r\n   background: #d9d9d9;\r\n }\r\n .bar-exp{\r\n background: #2f3a40;\r\n border: solid 2px white;\r\n   margin-bottom: 12px;\r\n }\r\n .icoweb label{\r\n display: block;\r\n color:#627e88;\r\n }\r\n .icoweb span{\r\n display: block;\r\n }\r\n \r\n .box-contact{\r\n font-size: 13px;\r\n padding-top:0px;\r\n }\r\n \r\n .icoweb i.fa, .icoweb i.fab, .icoweb i.far{\r\n   width: 20px;\r\n   height: 20px;\r\n   background-color:#333;\r\n   border-radius: 50%;\r\n   -webkit-border-radius: 50%;\r\n   -moz-border-radius: 50%;\r\n   display: inline-block;\r\n   text-align: center;\r\n   font-size: 13px;\r\n   line-height: 20px;\r\n   color: #fff!important;\r\n   margin-right: 10px;\r\n   margin-top: 3px;float:left\r\n }\r\n .head i{\r\n   font-size: 25px;\r\n   margin-right: 10px;\r\n }\r\n .exp-content{\r\n padding-left: 15px;\r\n }\r\n #resumecv-content span.exp-date {\r\n   float: right;\r\n }\r\n .icon_fa{\r\n text-align: center;\r\n }\r\n .icon_fa i.fa{\r\n font-size: 20px;\r\n border: solid 1px #ffffff;\r\n border-radius: 50%;\r\n padding: 5px;\r\n width: 20px;\r\n color: white;\r\n background: #ffffff;\r\n margin-bottom: 5px;\r\n }\r\n p.head i.fa{float:left}\r\n .rb-skillrate-value[value=\"1\"]{width:20%}\r\n .rb-skillrate-value[value=\"2\"]{width:40%}\r\n .rb-skillrate-value[value=\"3\"]{width:60%}\r\n .rb-skillrate-value[value=\"4\"]{width:80%}\r\n .rb-skillrate-value[value=\"5\"]{width:100%}\r\n span.date{font-weight:normal;font-style:italic;padding:0 10px;float:right}\r\n.resumecv-box-content-skill span.fa {\r\n    margin-right: 8px;\r\n    font-size: 18px;\r\n}\r\n.resumecv-box-content-skill span.fa.checked {\r\n    color: #FFC531;\r\n}', 1, 0, '2021-06-22 19:51:42', '2021-06-22 19:51:42'),
(8, 4, 'Resume 7', '1375779207.png', '<div id=\"resumecv-layout\">\r\n  \r\n  <div id=\"resumecv-content-top\">\r\n    <div id=\"resumecv-top-info-img\">\r\n      <div class=\"resumecv-top-info\">\r\n        <h1><span>Your Full Name</span></h1>\r\n        <h2 class=\"job_position\"><span>Job position</span></h2>\r\n      </div>\r\n    </div>\r\n    <div id=\"resumecv-top-info-contact\">\r\n      <div class=\"top-contact\">\r\n        <p class=\"icoweb\" ><i class=\"fa fa-phone\"></i><span>+123456789</span></p>\r\n        <p class=\"icoweb\" ><i class=\"fa fa-envelope-square\"></i><span >your@email.com</span>\r\n        <p class=\"icoweb\"><i class=\"fa fa-map-marker\"></i><span>Los Angeles</span>\r\n      </p>\r\n      <p class=\"icoweb\"><i class=\"fa fa-info\"></i><span>fb.com/me</span>\r\n    </p>\r\n  </div>\r\n</div>\r\n</div>\r\n<div id=\"resumecv-top-bottom\">\r\n<div class=\"resumecv-block\">\r\n  <p class=\"head\">\r\n    <i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i>\r\n    <span>Target</span>\r\n  </p>\r\n  <div>\r\n    <div class=\"resumecv-box-content\">\r\n      <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.\r\n      </div>\r\n    </div>\r\n  </div>\r\n</div>\r\n</div>\r\n<div id=\"resumecv-main\">\r\n<div id=\"rb-left\">\r\n  \r\n  <p class=\"h3\"><span class=\"box-title rb_data\">Skill</span></p>\r\n  <div class=\"exp content-edit skill\">\r\n    <div class=\"resumecv-box-content-skill\">\r\n      <p class=\"skill-name\">Photoshop</p>\r\n      <div class=\"status sk-3\">\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star\"></span>\r\n        <span class=\"fa fa-star\"></span>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class=\"exp content-edit skill\">\r\n    <div class=\"resumecv-box-content-skill\">\r\n      <p class=\"skill-name\">Develop</p>\r\n      <div class=\"\">\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star\"></span>\r\n        <span class=\"fa fa-star\"></span>\r\n      </div>\r\n    </div>\r\n  </div>\r\n  <div class=\"exp content-edit skill\">\r\n    <div class=\"resumecv-box-content-skill\">\r\n      <p class=\"skill-name\">HTML</p>\r\n      <div class=\"\">\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star checked\"></span>\r\n        <span class=\"fa fa-star\"></span>\r\n        <span class=\"fa fa-star\"></span>\r\n      </div>\r\n    </div>\r\n  </div>\r\n</div>\r\n\r\n<div id=\"resumecv-content\">\r\n  \r\n  <div id=\"resumecv-content-main\">\r\n    \r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>\r\n        <span >Education</span>\r\n      </p>\r\n      <div>\r\n        \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n          <span>School\'s name</span>\r\n          <span class=\"exp-date\"><em >07/2015</em> - <em >03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span >Major</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n            \r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>\r\n        <span>Expericence</span>\r\n      </p>\r\n      <div>\r\n        \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n          <span>Company\'s name</span>\r\n          <span class=\"exp-date\"><em>04/2022</em> - <em >Now</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\r\n        <span>Activities</span>\r\n      </p>\r\n      <div>\r\n        \r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n          <span >Organization\'s name</span>\r\n          <span class=\"exp-date\"><em >01/2019</em> - <em>03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      <p class=\"head\">\r\n        <i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>\r\n        <span>AWARD</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n          <span >Award\'s name</span>\r\n          <span class=\"exp-date\"><em >01/2019</em></span>\r\n          </h3>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      <p class=\"head\">\r\n        <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>\r\n        <span>SKILL</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n          <span >Skill\'s name</span>\r\n          </h3>\r\n          <div class=\"exp-content\">Lorem ipsum dolor sit amet, consectetur adipisicing\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i>\r\n        <span>More information</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n            \r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>\r\n        <span>References</span>\r\n      </p>\r\n      <div>\r\n        \r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Name, company, phone, email,...\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    \r\n  </div>\r\n</div>\r\n</div>\r\n</div>', '#resumecv-layout {\r\n  width: 100%;\r\n  max-width: 210mm;\r\n  padding: 0;\r\n    box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n\r\n  \r\n}\r\n\r\n#resumecv-main{\r\n\r\nfont-size: 14px;line-height: 24px;\r\ndisplay: flex;\r\nflex-wrap: nowrap;\r\npadding: 30px;\r\npadding-top: 10px;\r\nbackground-color: #ffff;\r\n}\r\n\r\n#rb-left .resumecv-block{\r\nmargin-bottom: 30px\r\n}\r\n\r\n#rb-left {\r\n  width: 28%;\r\n  padding:10px 5px;\r\n  padding-right: 20px;\r\n  padding-top: 20px;\r\n  border:solid #d4d8dd;\r\n  border-width: 2px 2px 0 0;\r\n}\r\n#resumecv-content {\r\n  width: 72%;\r\n  background: #fff;\r\n  padding-left: 30px;\r\n  padding-top: 20px;\r\n  border:solid#d4d8dd;\r\n  border-width: 2px 0 0 0;\r\n}\r\n\r\n\r\n\r\n#resumecv-content-top{	\r\n  background:#ffff;\r\n  padding: 30px;\r\n  padding-bottom: 10px;\r\n  padding-top: 40px;\r\n  display: flex;\r\n}\r\n   #resumecv-top-info-img{\r\n         width:70%;\r\n         border: solid #d4d8dd;\r\n         border-width: 0 2px 2px 0;\r\n        \r\n      }\r\n      /* #resumecv-top-info-img .resumecv-top-info{\r\n         padding-top: 34px;\r\n         padding-left: 40px;\r\n      } */\r\n      \r\n\r\n      #resumecv-box-ava img{\r\n        width:100px;\r\n      }\r\n      #resumecv-top-info-contact{\r\n        width: 30%;\r\n        padding-left:20px;\r\n        font-size: 16px;\r\n        border: solid #d4d8dd;\r\n        border-width: 0 0 2px 0;\r\n\r\n      }\r\n#resumecv-content-top .resumecv-block {\r\n    position: relative;\r\n    display: flex;\r\n}\r\n#resumecv-content-top .resumecv-block  img{\r\n    width:80px;\r\n    border-radius: 5%;\r\n}\r\n\r\n#resumecv-content .resumecv-block {\r\n  position: relative;\r\n  padding: 5px 10px;\r\n}\r\n#rb-left .resumecv-box-content {\r\npadding-bottom: 0;\r\nmargin:0;\r\n}\r\n.skill{\r\nmargin-top: 15px\r\n}\r\n\r\n#resumecv-content-top h1{\r\nfont-size: 35px;	\r\nmargin:0;\r\ncolor:#383838;\r\npadding-top: 0px;\r\nline-height: normal;\r\nletter-spacing: 3px;\r\ntext-transform: capitalize;\r\nfont-weight: 800;\r\n}\r\n#resumecv-content-top .job_position{\r\n    font-size: 22px;\r\n    color: #969696;\r\n    font-weight: bold;\r\n    margin-top: 15px;\r\n    letter-spacing: 1px;\r\n\r\n}\r\n\r\n#resumecv-content-top h1 span{\r\ndisplay:block\r\n}\r\n\r\n\r\n.box-name p{		\r\n  overflow: hidden;\r\n}\r\n.box-name{		\r\noverflow: hidden;\r\nbackground: #2f3a40;\r\n}\r\n#resumecv-content p{\r\nmargin-bottom: 5px\r\n}\r\n#rb-left .h3{\r\n    font-size: 18px;\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n#resumecv-content .head{\r\n  font-size: 18px;\r\n  color: #2f3a40;\r\n  padding-bottom: 5px;\r\n  /* border-bottom: 2px solid #9B9C8F; */\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n\r\n#resumecv-top-bottom{	\r\n  background:#ffff;\r\n  padding: 10px 30px 10px 30px;\r\n  display: flex;\r\n}\r\n#resumecv-top-bottom .head{\r\n  font-size: 18px;\r\n  color: #2f3a40;\r\n  padding-bottom: 5px;\r\n  padding-top: 10px;\r\n  /* border-bottom: 2px solid #9B9C8F; */\r\n  font-weight: bold;\r\n  margin-top: 0;\r\n  text-transform: uppercase;\r\n}\r\n#resumecv-content h3{\r\n  font-weight:bold;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n}\r\n\r\n\r\n#resumecv-content span{\r\ndisplay: inline-block;\r\npadding-right: 15px;\r\npadding-left: 15px;\r\n}\r\n\r\n#rb-left .h3:first-child{\r\nmargin-top: 0\r\n}\r\n.resumecv-box-content{\r\nmargin-bottom: 25px;\r\npadding-left: 15px;\r\nposition: relative;\r\n}\r\n\r\n#resumecv-box-ava{	\r\ntext-align:center;padding:2px;margin-bottom: 10px; auto;\r\n}\r\n#resumecv-box-ava img{\r\npadding: 0;\r\nborder:0;\r\nwidth: 150px;\r\nheight: 150px;\r\n\r\n}\r\n.bar-exp span {\r\n  display:block;\r\n  height: 8px;\r\n  background: #d9d9d9;\r\n}\r\n.bar-exp{\r\nbackground: #2f3a40;\r\nborder: solid 2px white;\r\n  margin-bottom: 12px;\r\n}\r\n.icoweb label{\r\ndisplay: block;\r\ncolor:#627e88;\r\n}\r\n.icoweb span{\r\ndisplay: block;\r\n}\r\n\r\n.box-contact{\r\nfont-size: 13px;\r\npadding-top:0px;\r\n}\r\n\r\n.icoweb i.fa, .icoweb i.fab, .icoweb i.far{\r\n  width: 20px;\r\n  height: 20px;\r\n  background-color:#ffff;\r\n  border-radius: 50%;\r\n  -webkit-border-radius: 50%;\r\n  -moz-border-radius: 50%;\r\n  display: inline-block;\r\n  text-align: center;\r\n  font-size: 13px;\r\n  line-height: 20px;\r\n  color: #2f3a40!important;\r\n  margin-right: 10px;\r\n  margin-top: 3px;float:left\r\n}\r\n.head i{\r\n  font-size: 25px;\r\n  margin-right: 10px;\r\n}\r\n\r\n#resumecv-content span.exp-date {\r\n  float: right;\r\n}\r\n.icon_fa{\r\ntext-align: center;\r\n}\r\n.icon_fa i.fa{\r\nfont-size: 20px;\r\nborder: solid 1px #ffffff;\r\nborder-radius: 50%;\r\npadding: 5px;\r\nwidth: 20px;\r\ncolor: white;\r\nbackground: #ffffff;\r\nmargin-bottom: 5px;\r\n}\r\np.head i.fa{float:left}\r\n.rb-skillrate-value[value=\"1\"]{width:20%}\r\n .rb-skillrate-value[value=\"2\"]{width:40%}\r\n .rb-skillrate-value[value=\"3\"]{width:60%}\r\n .rb-skillrate-value[value=\"4\"]{width:80%}\r\n .rb-skillrate-value[value=\"5\"]{width:100%}\r\n\r\n .resumecv-box-content-skill span.fa {\r\n    margin-right: 8px;\r\n    font-size: 18px;\r\n}\r\n.resumecv-box-content-skill span.fa.checked {\r\n    color: #FFC531;\r\n}', 1, 0, '2021-06-22 19:52:47', '2021-06-22 19:52:47');
INSERT INTO `resumecvtemplates` (`id`, `category_id`, `name`, `thumb`, `content`, `style`, `active`, `is_premium`, `created_at`, `updated_at`) VALUES
(9, 4, 'Resume 8', '706946470.png', '<div id=\"resumecv-layout\">\r\n  \r\n  <div id=\"resumecv-content-top\">\r\n    <div class=\"resumecv-block\">\r\n      <div>\r\n          <img id=\"resumecv-ava\" src=\"##image_url##resumecv-avatar.jpg\">\r\n      </div>\r\n    </div>\r\n      <div class=\"resumecv-block\">\r\n        <div>\r\n            <h1><span>Your full name</span></h1>\r\n            <hr class=\"hr_info\">\r\n            <h1 class=\"job_position\"><span>Job position</span></h1>\r\n        </div>\r\n      </div>\r\n    </div>\r\n  <div id=\"resumecv-main\">\r\n    \r\n  <div id=\"resumecv-content\">\r\n    \r\n    <div id=\"resumecv-content-main\">\r\n    \r\n    <div class=\"resumecv-block\">\r\n      <p class=\"head\">\r\n        <i class=\"fa fa-dot-circle-o\" aria-hidden=\"true\"></i>\r\n        <span>Target</span>\r\n      </p>\r\n      <div>\r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-graduation-cap\" aria-hidden=\"true\"></i>\r\n        <span >Education</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>School\'s name</span>\r\n            <span class=\"exp-date\"><em >07/2015</em> - <em >03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span >Major</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-briefcase\" aria-hidden=\"true\"></i>\r\n        <span>Expericence</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          \r\n          <h3>\r\n            <span>Company\'s name</span>\r\n            <span class=\"exp-date\"><em>04/2022</em> - <em >Now</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-user\" aria-hidden=\"true\"></i>\r\n        <span>Activities</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <h3>\r\n            <span >Organization\'s name</span>\r\n            <span class=\"exp-date\"><em >01/2019</em> - <em>03/2022</em></span>\r\n          </h3>\r\n          <p class=\"h3\">\r\n            <span>Position</span>\r\n          </p>\r\n          <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    <div class=\"resumecv-block\">\r\n        <p class=\"head\">\r\n            <i class=\"fa fa-trophy\" aria-hidden=\"true\"></i>\r\n          <span>AWARD</span>\r\n        </p>\r\n        <div>\r\n          <div class=\"resumecv-box-content\">\r\n            <h3>\r\n              <span >Award\'s name</span>\r\n              <span class=\"exp-date\"><em >01/2019</em></span>\r\n            </h3>\r\n          </div>\r\n        </div>\r\n      </div>\r\n      <div class=\"resumecv-block\">\r\n          <p class=\"head\">\r\n              <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>\r\n            <span>SKILL</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <h3>\r\n                <span >Skill\'s name</span>\r\n              </h3>\r\n              <div class=\"exp-content\">Lorem ipsum dolor sit amet, consectetur adipisicing \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n      <div class=\"resumecv-block\">\r\n      \r\n          <p class=\"head\">\r\n              <i class=\"fa fa-caret-square-o-down\" aria-hidden=\"true\"></i>\r\n            <span>More information</span>\r\n          </p>\r\n          <div>\r\n            <div class=\"resumecv-box-content\">\r\n              <div class=\"exp-content\">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy.Lorem Ipsum is simply dummy text of the printing and typesetting industry.\r\n  \r\n              </div>\r\n            </div>\r\n          </div>\r\n        </div>\r\n    <div class=\"resumecv-block\">\r\n      \r\n      <p class=\"head\">\r\n        <i class=\"fa fa-link\" aria-hidden=\"true\"></i>\r\n        <span>References</span>\r\n      </p>\r\n      <div>\r\n  \r\n        <div class=\"resumecv-box-content\">\r\n          <div class=\"exp-content\">Name, company, phone, email,...\r\n          </div>\r\n        </div>\r\n      </div>\r\n    </div>\r\n    \r\n  </div>\r\n  </div>\r\n  <div id=\"rb-left\">\r\n    <div class=\"block resumecv-block\">\r\n        <p class=\"h3\"><span class=\"box-title rb_data\">information</span></p>\r\n    </div>\r\n    <div class=\"box-contact\">\r\n      <p class=\"icoweb\"><i class=\"fa fa-calendar\"></i><span>22/12/1995</span>\r\n      </p>\r\n      <p class=\"icoweb\"><i class=\"fa fa-user\"></i><span>Men</span>\r\n      </p>\r\n      <p class=\"icoweb\" ><i class=\"fa fa-phone\"></i><span>+123456789</span></p>\r\n      <p class=\"icoweb\" ><i class=\"fa fa-envelope-square\"></i><span >your@email.com</span>\r\n      </p>\r\n      <p class=\"icoweb\"><i class=\"fa fa-map-marker\"></i><span>Los Angeles</span>\r\n      </p>\r\n      <p class=\"icoweb\"><i class=\"fa fa-info\"></i><span>fb.com/me</span>\r\n      </p>\r\n    </div>\r\n    <p class=\"h3\"><span class=\"box-title rb_data\">Skill</span></p>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">Photoshop</p>\r\n                      <div class=\"status sk-3\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">Develop</p>\r\n                      <div class=\"\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n                  <div class=\"exp content-edit skill\">\r\n                    <div class=\"resumecv-box-content-skill\">\r\n                      <p class=\"skill-name\">HTML</p>\r\n                      <div class=\"\">\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star checked\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                                <span class=\"fa fa-star\"></span>\r\n                      </div>\r\n                    </div>\r\n                  </div>\r\n  </div>\r\n  </div>\r\n</div>', '#resumecv-layout {\r\n          width: 100%;\r\n          max-width: 210mm;\r\n          padding: 0;\r\n            box-shadow: 0 3px 1px -2px rgba(0,0,0,.2), 0 2px 2px 0 rgba(0,0,0,.14), 0 1px 5px 0 rgba(0,0,0,.12);\r\n\r\n          \r\n        }\r\n        \r\n        #resumecv-main{\r\n        \r\n        font-size: 14px;line-height: 24px;\r\n        display: flex;\r\n        flex-wrap: nowrap;\r\n        padding: 20px;\r\n        background-color: #ffff;\r\n        }\r\n        \r\n        #rb-left .resumecv-block{\r\n        margin-bottom: 30px\r\n        }\r\n        \r\n        #rb-left {\r\n          width: 28%;\r\n          padding:10px 5px;\r\n          padding-left: 20px;\r\n          padding-top: 20px;\r\n        \r\n        }\r\n        #resumecv-content {\r\n          width: 72%;\r\n          background: #fff;\r\n          padding-right: 20px;\r\n          padding-top: 20px;\r\n        \r\n        }\r\n        \r\n        #resumecv-content-top{	\r\n        color: #fff;\r\n        background:#562F73;\r\n        padding: 15px;\r\n        padding-top: 30px;\r\n        }\r\n        #resumecv-content-top .resumecv-block {\r\n            position: relative;\r\n            text-align: center;\r\n        }\r\n        #resumecv-content-top .resumecv-block .hr_info{\r\n          width: 150px;\r\n        }\r\n        #resumecv-content-top .resumecv-block  img{\r\n            width:100px;\r\n            border-radius: 50%;\r\n        }\r\n        \r\n        #resumecv-content .resumecv-block {\r\n          position: relative;\r\n          padding: 5px 10px;\r\n        }\r\n        #rb-left .resumecv-box-content {\r\n        padding-bottom: 0;\r\n        margin:0;\r\n        }\r\n        .skill{\r\n        margin-top: 15px\r\n        }\r\n        \r\n        #resumecv-content-top h1{\r\n        font-size: 45px;	\r\n        margin:0;\r\n        color:#fff;\r\n        padding-top: 0px;\r\n        padding-left: 10px;\r\n        padding-bottom: 20px;\r\n        line-height: normal;\r\n        letter-spacing: 2px;\r\n        text-transform: capitalize;\r\n        font-weight: 800;\r\n        }\r\n        #resumecv-content-top .job_position{\r\n            font-size: 22px;\r\n            letter-spacing: 2px;\r\n            color: #fff;\r\n            font-weight: 600;\r\n            margin-top: 15px;	\r\n        \r\n        }\r\n        \r\n        #resumecv-content-top h1 span{\r\n        display:block\r\n        }\r\n        \r\n        \r\n        .box-name p{		\r\n          overflow: hidden;\r\n        }\r\n        .box-name{		\r\n        overflow: hidden;\r\n        background: #2f3a40;\r\n        }\r\n        #resumecv-content p{\r\n        margin-bottom: 5px\r\n        }\r\n        #rb-left .h3{\r\n            font-size: 18px;\r\n          font-weight: bold;\r\n          margin-top: 0;\r\n          text-transform: uppercase;\r\n        }\r\n        #resumecv-content .head{\r\n          font-size: 18px;\r\n          color: #2f3a40;\r\n          padding-bottom: 5px;\r\n          /* border-bottom: 2px solid #9B9C8F; */\r\n          font-weight: bold;\r\n          margin-top: 0;\r\n          text-transform: uppercase;\r\n        }\r\n        \r\n        \r\n        #resumecv-content h3{\r\n          font-weight:bold;font-size: 14px;line-height:30px;margin-bottom: 10px;color: #333;\r\n        }\r\n        \r\n        \r\n        #resumecv-content span{\r\n        display: inline-block;\r\n        padding-right: 15px;\r\n        padding-left: 15px;\r\n        }\r\n        \r\n        #rb-left .h3:first-child{\r\n        margin-top: 0\r\n        }\r\n        .resumecv-box-content{\r\n        margin-bottom: 25px;\r\n        padding-left: 15px;\r\n        position: relative;\r\n        }\r\n        \r\n        #resumecv-box-ava{	\r\n        text-align:center;padding:2px;margin-bottom: 10px; auto;\r\n        }\r\n        #resumecv-box-ava img{\r\n        padding: 0;\r\n        border:0;\r\n        width: 150px;\r\n        height: 150px;\r\n        \r\n        }\r\n        .bar-exp span {\r\n          display:block;\r\n          height: 8px;\r\n          background: #d9d9d9;\r\n        }\r\n        .bar-exp{\r\n        background: #2f3a40;\r\n        border: solid 2px white;\r\n          margin-bottom: 12px;\r\n        }\r\n        .icoweb label{\r\n        display: block;\r\n        color:#627e88;\r\n        }\r\n        .icoweb span{\r\n        display: block;\r\n        }\r\n        \r\n        .box-contact{\r\n        font-size: 13px;\r\n        padding-top:0px;\r\n        }\r\n        \r\n        .icoweb i.fa, .icoweb i.fab, .icoweb i.far{\r\n          width: 20px;\r\n          height: 20px;\r\n          background-color:#ffff;\r\n          border-radius: 50%;\r\n          -webkit-border-radius: 50%;\r\n          -moz-border-radius: 50%;\r\n          display: inline-block;\r\n          text-align: center;\r\n          font-size: 13px;\r\n          line-height: 20px;\r\n          color: #2f3a40!important;\r\n          margin-right: 10px;\r\n          margin-top: 3px;float:left\r\n        }\r\n        .head i{\r\n          font-size: 25px;\r\n          margin-right: 10px;\r\n        }\r\n        \r\n        #resumecv-content span.exp-date {\r\n          float: right;\r\n        }\r\n        .icon_fa{\r\n        text-align: center;\r\n        }\r\n        .icon_fa i.fa{\r\n        font-size: 20px;\r\n        border: solid 1px #ffffff;\r\n        border-radius: 50%;\r\n        padding: 5px;\r\n        width: 20px;\r\n        color: white;\r\n        background: #ffffff;\r\n        margin-bottom: 5px;\r\n        }\r\n        p.head i.fa{float:left}\r\n        .rb-skillrate-value[value=\"1\"]{width:20%}\r\n         .rb-skillrate-value[value=\"2\"]{width:40%}\r\n         .rb-skillrate-value[value=\"3\"]{width:60%}\r\n         .rb-skillrate-value[value=\"4\"]{width:80%}\r\n         .rb-skillrate-value[value=\"5\"]{width:100%}\r\n\r\n         \r\n .resumecv-box-content-skill span.fa {\r\n    margin-right: 8px;\r\n    font-size: 18px;\r\n}\r\n.resumecv-box-content-skill span.fa.checked {\r\n    color: #FFC531;\r\n}', 1, 0, '2021-06-22 19:53:48', '2021-06-22 19:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'APP_URL', 'http://localhost'),
(2, 'APP_NAME', 'CareerSync'),
(3, 'SITE_SLOGAN', 'Where Resume and CV Meets Opportunities'),
(4, 'SERVER_IP', '::1'),
(5, 'SITE_DESCRIPTION', 'Where Resume and CV Meets Opportunities'),
(6, 'SITE_KEYWORDS', 'Where Resume and CV Meets Opportunities'),
(7, 'SITE_LANDING', 'default'),
(8, 'CURRENCY_SYMBOL', '₱'),
(9, 'CURRENCY_CODE', 'PHP'),
(10, 'APP_LOCALE', 'en'),
(11, 'APP_TIMEZONE', 'Asia/Manila');

-- --------------------------------------------------------

--
-- Table structure for table `tracklinks`
--

CREATE TABLE `tracklinks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `target_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_id` bigint(20) DEFAULT NULL,
  `country_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `os_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer_host` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `referrer_path` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `device_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `browser_language` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_source` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_medium` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `utm_campaign` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_unique` tinyint(1) DEFAULT 0,
  `datetime` timestamp NULL DEFAULT current_timestamp(),
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `language_id` int(10) UNSIGNED NOT NULL,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` int(11) DEFAULT NULL,
  `package_ends_at` datetime DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `email_verified_at`, `password`, `package_id`, `package_ends_at`, `settings`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$TmqL/X71LuIbg8eype0m8ufgAyWNP.0f6WCU0L0ZjTUnOdhUpvdEq', NULL, NULL, NULL, 'oKazkj3vEgv3VBgy7JVYOnvzj2n8mUpR6pjubj003IkKfUJ3qioqbWRpfBha', '2024-04-04 13:57:32', '2024-04-04 13:57:32'),
(5, 'employer', 'CPSU', 'cpsu@cpsu.com', NULL, '$2y$10$Yifu7JJT4tvfH/DexujOxO2djyxcNadc9Rf1aAdGa.iKf5pK2SMz2', NULL, NULL, NULL, NULL, '2024-04-04 14:11:39', '2024-04-04 14:11:39'),
(6, 'employer', 'vcc', 'vcc@vcc.com', NULL, '$2y$10$vnS8b5lxSL8NVXD1rMTZuedauWYtrlMSqr/nieBeJGAMhcxYfmv/a', NULL, NULL, NULL, NULL, '2024-04-04 14:12:31', '2024-04-04 14:12:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `jobs_list`
--
ALTER TABLE `jobs_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_applicants`
--
ALTER TABLE `job_applicants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_career_levels`
--
ALTER TABLE `job_attributes_career_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_degree_levels`
--
ALTER TABLE `job_attributes_degree_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_degree_types`
--
ALTER TABLE `job_attributes_degree_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_functional_areas`
--
ALTER TABLE `job_attributes_functional_areas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_genders`
--
ALTER TABLE `job_attributes_genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_industries`
--
ALTER TABLE `job_attributes_industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_job_experiences`
--
ALTER TABLE `job_attributes_job_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_job_shifts`
--
ALTER TABLE `job_attributes_job_shifts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_job_skills`
--
ALTER TABLE `job_attributes_job_skills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_job_types`
--
ALTER TABLE `job_attributes_job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_language_levels`
--
ALTER TABLE `job_attributes_language_levels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_major_subjects`
--
ALTER TABLE `job_attributes_major_subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_marital_statuses`
--
ALTER TABLE `job_attributes_marital_statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_ownership_types`
--
ALTER TABLE `job_attributes_ownership_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_result_types`
--
ALTER TABLE `job_attributes_result_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_attributes_salary_periods`
--
ALTER TABLE `job_attributes_salary_periods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_cities`
--
ALTER TABLE `location_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_countries`
--
ALTER TABLE `location_countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_country_details`
--
ALTER TABLE `location_country_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location_states`
--
ALTER TABLE `location_states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_websites`
--
ALTER TABLE `page_websites`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_websites_slug_unique` (`slug`),
  ADD KEY `page_websites_is_active_index` (`is_active`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `purchase_managers`
--
ALTER TABLE `purchase_managers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumecv`
--
ALTER TABLE `resumecv`
  ADD PRIMARY KEY (`id`),
  ADD KEY `resumecv_code_index` (`code`);

--
-- Indexes for table `resumecvcategories`
--
ALTER TABLE `resumecvcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resumecvtemplates`
--
ALTER TABLE `resumecvtemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `tracklinks`
--
ALTER TABLE `tracklinks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translations_language_id_foreign` (`language_id`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jobs_list`
--
ALTER TABLE `jobs_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_applicants`
--
ALTER TABLE `job_applicants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_attributes_career_levels`
--
ALTER TABLE `job_attributes_career_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_attributes_degree_levels`
--
ALTER TABLE `job_attributes_degree_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_attributes_degree_types`
--
ALTER TABLE `job_attributes_degree_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_attributes_functional_areas`
--
ALTER TABLE `job_attributes_functional_areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=154;

--
-- AUTO_INCREMENT for table `job_attributes_genders`
--
ALTER TABLE `job_attributes_genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `job_attributes_industries`
--
ALTER TABLE `job_attributes_industries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `job_attributes_job_experiences`
--
ALTER TABLE `job_attributes_job_experiences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_attributes_job_shifts`
--
ALTER TABLE `job_attributes_job_shifts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_attributes_job_skills`
--
ALTER TABLE `job_attributes_job_skills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_attributes_job_types`
--
ALTER TABLE `job_attributes_job_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `job_attributes_language_levels`
--
ALTER TABLE `job_attributes_language_levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_attributes_major_subjects`
--
ALTER TABLE `job_attributes_major_subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_attributes_marital_statuses`
--
ALTER TABLE `job_attributes_marital_statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_attributes_ownership_types`
--
ALTER TABLE `job_attributes_ownership_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_attributes_result_types`
--
ALTER TABLE `job_attributes_result_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job_attributes_salary_periods`
--
ALTER TABLE `job_attributes_salary_periods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location_cities`
--
ALTER TABLE `location_cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `location_countries`
--
ALTER TABLE `location_countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location_country_details`
--
ALTER TABLE `location_country_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location_states`
--
ALTER TABLE `location_states`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `page_websites`
--
ALTER TABLE `page_websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_managers`
--
ALTER TABLE `purchase_managers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resumecv`
--
ALTER TABLE `resumecv`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resumecvcategories`
--
ALTER TABLE `resumecvcategories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `resumecvtemplates`
--
ALTER TABLE `resumecvtemplates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tracklinks`
--
ALTER TABLE `tracklinks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `translations`
--
ALTER TABLE `translations`
  ADD CONSTRAINT `translations_language_id_foreign` FOREIGN KEY (`language_id`) REFERENCES `languages` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
