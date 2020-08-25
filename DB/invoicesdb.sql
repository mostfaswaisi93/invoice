-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 25, 2020 at 01:14 PM
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
(1, 'نسيم وفاء معمر مدني', 'mzaloum@abbas.info', '129091303674', 'شهم الشهري', '7457418', '2020-08-24', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:00', '2020-08-25 10:12:00', NULL),
(2, 'خلف جواهرجي', 'osama.rashwani@kanaan.biz', '3648884135163', 'مهدي اشرف الصقير', '5882441', '2020-08-09', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(3, 'عريق نظام ادهم المقبل', 'akanaan@hotmail.com', '906367413', 'الآنسة لين السالم', '4767182', '2020-08-13', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(4, 'موفق هوساوي', 'khaled.maanee@kanaan.biz', '65698236160', 'مهدي الزامل', '3499989', '2020-08-11', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(5, 'إبراهيم السمير', 'zaloum.yazan@zaloum.info', '893677078', 'عبدالرحيم العرفج', '2159184', '2020-08-14', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(6, 'مهند الأسمري', 'khaled00@hotmail.com', '444705279094', 'الآنسة مياده المنيف', '5165144', '2020-08-08', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(7, 'طاهر بشار الأسمري', 'hshami@hadi.net', '3733148156', 'يامن عبيدة معتز القحطاني', '6686844', '2020-08-22', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(8, 'عبادة السويلم', 'uabulebbeh@yahoo.com', '10420605602', 'مصطفى المطرفي', '3091319', '2020-08-18', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(9, 'يوسف هادي اياد العسكر', 'ehasan@obaisi.org', '984119293', 'قاسم قتاده كايد الراجحي', '5768525', '2020-08-10', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(10, 'الدكتورة روزين الجهني', 'hasan.bilal@melhem.biz', '1981882184', 'هاشم السويلم', '5401271', '2020-08-10', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(11, 'سلطان الجريد', 'aqasem@hasan.biz', '0260778892404', 'ألاء مدني', '3022684', '2020-08-07', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(12, 'كامل عبادة فؤاد الشهري', 'jflefel@flefel.com', '4965548423', 'اياد الأحمري', '4474677', '2020-08-08', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(13, 'فرح زايد واثق الشهيل', 'khaled.hamad@zaloum.org', '80449322940', 'اسحق وحيد السليم', '9781168', '2020-08-13', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(14, 'هيثم الصقيه', 'akaram@qawasmee.org', '818477782624', 'ابتهال عدنان عبدالعزيز العرفج', '6127056', '2020-08-08', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(15, 'الدكتورة ميران الراجحي', 'qasem.osama@hotmail.com', '796336163860', 'هزار باشا', '7750145', '2020-08-10', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL);

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
(1, 1, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:00', '2020-08-25 10:12:00', NULL),
(2, 1, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(3, 1, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(4, 2, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(5, 2, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(6, 2, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(7, 3, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(8, 3, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(9, 3, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(10, 4, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(11, 4, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(12, 4, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(13, 5, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(14, 5, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(15, 5, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(16, 6, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(17, 6, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(18, 6, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(19, 7, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(20, 7, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(21, 7, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(22, 8, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(23, 8, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(24, 8, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(25, 9, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(26, 9, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(27, 9, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(28, 10, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(29, 10, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(30, 10, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(31, 11, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(32, 11, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(33, 11, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:01', '2020-08-25 10:12:01', NULL),
(34, 12, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(35, 12, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(36, 12, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(37, 13, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(38, 13, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(39, 13, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(40, 14, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(41, 14, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(42, 14, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(43, 15, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(44, 15, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL),
(45, 15, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-25 10:12:02', '2020-08-25 10:12:02', NULL);

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
(5, '2020_06_29_090505_create_invoice_details_table', 1),
(6, '2020_08_24_231320_create_settings_table', 1);

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
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sorting_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
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
(1, 'admin', 'admin', 'admin@admin.com', NULL, '$2y$10$jqXijV5yJfN1KL/cPUGlAOcDeLzoAQq.tz7ZtSOUMjxMsXhN/eLOO', NULL, '2020-08-24 21:00:00', '2020-08-24 21:00:00');

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

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
