-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2020 at 05:54 PM
-- Server version: 10.5.4-MariaDB-log
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoicesdb`
--

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
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_date` date NOT NULL,
  `sub_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_value` decimal(8,2) NOT NULL DEFAULT 0.00,
  `vat_value` decimal(8,2) NOT NULL DEFAULT 0.00,
  `shipping` decimal(8,2) NOT NULL DEFAULT 0.00,
  `total_due` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_name`, `customer_email`, `customer_mobile`, `company_name`, `invoice_number`, `invoice_date`, `sub_total`, `discount_type`, `discount_value`, `vat_value`, `shipping`, `total_due`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'رافي الشهيل', 'bilal.nimry@kanaan.sa', '073418268', 'علاء الفريدي', '1671623', '2020-08-16', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:31', '2020-08-24 14:53:31', NULL),
(2, 'ريان الطفيل هوساوي', 'bilal07@flefel.net', '4255036404', 'عبدالسلام ايمن المشيقح', '8677653', '2020-08-04', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:31', '2020-08-24 14:53:31', NULL),
(3, 'اكثم المقبل', 'yazan.hasan@yahoo.com', '5213132258191', 'سيلفا الخضيري', '7851291', '2020-08-05', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(4, 'شريف السليم', 'mshami@obaisi.net', '4047916532226', 'خليل المشيقح', '4431407', '2020-08-07', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(5, 'يسار محسن سميح سقا', 'qasem.bilal@yahoo.com', '9945648925504', 'فاروق خضر الخالدي', '9428146', '2020-08-23', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(6, 'المهندسة هايدي المقبل', 'amr51@yahoo.com', '9773302945', 'رائف الفيفي', '1723243', '2020-08-11', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(7, 'أوس القحطاني', 'umaanee@rabee.biz', '506051105448', 'أريج الخضيري', '5043121', '2020-08-20', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(8, 'حاتم غازي عقل الفرحان', 'ykaram@gmail.com', '566767794227', 'أحلام العقل', '8447220', '2020-08-13', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(9, 'عبد الغني البراء الحصين', 'osama17@gmail.com', '0669655930', 'صقر السالم', '9449583', '2020-08-04', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(10, 'زيد واثق الشهري', 'iabbadi@gmail.com', '7428782198', 'حلا الماجد', '0386714', '2020-08-17', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(11, 'راكان عرار زيدان العنزي', 'abdullah13@yahoo.com', '229394942792', 'الدكتورة اسرار الشيباني', '9007188', '2020-08-08', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(12, 'سليم مهاب عيد السماعيل', 'yazan86@hotmail.com', '977584307', 'قبلان ناجي برهان الجريد', '6026623', '2020-08-04', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(13, 'عدنان الحنتوشي', 'shami.rami@gmail.com', '4540352264', 'مجاهد المشيقح', '3808453', '2020-08-06', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(14, 'عبدالكريم الأحمري', 'kqasem@hotmail.com', '030711402', 'السيدة جميلة الصامل', '9222814', '2020-08-21', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(15, 'راضي معمر العسكر', 'xqawasmee@yahoo.com', '2659688005068', 'الآنسة رفاه باشا', '8310964', '2020-08-08', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_details`
--

CREATE TABLE `invoice_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` decimal(8,2) NOT NULL DEFAULT 0.00,
  `unit_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `row_sub_total` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_id`, `product_name`, `unit`, `quantity`, `unit_price`, `row_sub_total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:31', '2020-08-24 14:53:31', NULL),
(2, 1, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:31', '2020-08-24 14:53:31', NULL),
(3, 1, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:31', '2020-08-24 14:53:31', NULL),
(4, 2, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:31', '2020-08-24 14:53:31', NULL),
(5, 2, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(6, 2, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(7, 3, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(8, 3, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(9, 3, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(10, 4, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(11, 4, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(12, 4, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(13, 5, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(14, 5, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(15, 5, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(16, 6, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(17, 6, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(18, 6, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(19, 7, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(20, 7, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(21, 7, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(22, 8, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(23, 8, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(24, 8, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(25, 9, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(26, 9, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(27, 9, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(28, 10, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:32', '2020-08-24 14:53:32', NULL),
(29, 10, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(30, 10, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(31, 11, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(32, 11, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(33, 11, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(34, 12, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(35, 12, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(36, 12, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(37, 13, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(38, 13, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(39, 13, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(40, 14, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(41, 14, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(42, 14, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(43, 15, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(44, 15, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL),
(45, 15, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-24 14:53:33', '2020-08-24 14:53:33', NULL);

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
(4, '2020_06_29_090149_create_invoices_table', 1),
(5, '2020_06_29_090505_create_invoice_details_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$mJ6BeyKqqWxy1slrLX9D4uwj4jVHkNVAgohTvwm4jMxS9Pln2RoOS', NULL, '2020-08-23 21:00:00', '2020-08-23 21:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_details_invoice_id_foreign` (`invoice_id`);

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
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `invoice_details`
--
ALTER TABLE `invoice_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice_details`
--
ALTER TABLE `invoice_details`
  ADD CONSTRAINT `invoice_details_invoice_id_foreign` FOREIGN KEY (`invoice_id`) REFERENCES `invoices` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
