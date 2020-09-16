-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 16, 2020 at 10:42 AM
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
(1, 'وجيه ممدوح القحطاني', 'wflefel@hadi.net', '940595439', 'عدب الفدا', '6363164', '2020-09-11', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(2, 'وجدي الداوود', 'layth61@rabee.biz', '52330680724', 'غانم الماجد', '2120265', '2020-09-07', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(3, 'انور توفيق الجهني', 'ibrahim.abbad@hadi.info', '197478760872', 'علا المشيقح', '7207340', '2020-09-07', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(4, 'مصطفى الحسين', 'ykanaan@yahoo.com', '275505852', 'اديب الماجد', '7226594', '2020-09-07', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(5, 'عروة زيدان كامل الجريد', 'hamad.mohammad@flefel.biz', '99765601304', 'مظهر باسم عبدالجليل الأسمري', '3937771', '2020-09-09', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(6, 'بندر حميد العتيبي', 'nflefel@obaisi.info', '399370704400', 'نوران مكي', '4660581', '2020-09-02', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(7, 'مجاهد الخالدي', 'yabbad@qawasmee.org', '62012254968', 'رحمة السمير', '4074211', '2020-08-27', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(8, 'رجائي السماعيل', 'samer49@qawasmee.biz', '6899458328', 'المهندسة رؤيه الفريدي', '4967751', '2020-09-03', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(9, 'عايد العمرو', 'hadi.ahmad@obaisi.biz', '49288727388', 'إسلام نبيل وسام الداوود', '1830435', '2020-09-07', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(10, 'الدكتورة نانسي العسكر', 'iqasem@hasan.info', '287057480', 'وصفي زيدون ليث الفيفي', '3556429', '2020-08-27', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(11, 'عدلي عايد الشهيل', 'ujabri@hasan.net', '946696217', 'عبد السلام يشار الصقيه', '6924062', '2020-08-29', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(12, 'هانى السهلي', 'karam.rami@hamad.net', '22147539925', 'باسم السيف', '6902497', '2020-09-03', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(13, 'حاتم العنزي', 'layth17@zaloum.net', '075136508830', 'إسراء أيهم السالم', '8139719', '2020-09-08', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(14, 'عوض مدني', 'bilal44@gmail.com', '397702207576', 'فاتن مكي', '2071721', '2020-09-01', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(15, 'زاهر مفدي مؤثر الحصين', 'aabbadi@hamad.info', '84472575383', 'الدكتورة اعتدال الفرحان', '6782501', '2020-09-11', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-09-16 07:30:51', '2020-09-16 07:30:51', NULL);

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
(1, 1, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(2, 1, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(3, 1, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(4, 2, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(5, 2, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(6, 2, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(7, 3, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(8, 3, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(9, 3, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(10, 4, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(11, 4, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(12, 4, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(13, 5, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(14, 5, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(15, 5, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(16, 6, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:49', '2020-09-16 07:30:49', NULL),
(17, 6, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(18, 6, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(19, 7, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(20, 7, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(21, 7, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(22, 8, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(23, 8, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(24, 8, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(25, 9, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(26, 9, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(27, 9, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(28, 10, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(29, 10, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(30, 10, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(31, 11, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(32, 11, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(33, 11, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(34, 12, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(35, 12, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(36, 12, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(37, 13, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(38, 13, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(39, 13, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(40, 14, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:50', '2020-09-16 07:30:50', NULL),
(41, 14, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:51', '2020-09-16 07:30:51', NULL),
(42, 14, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:51', '2020-09-16 07:30:51', NULL),
(43, 15, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-09-16 07:30:51', '2020-09-16 07:30:51', NULL),
(44, 15, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-09-16 07:30:51', '2020-09-16 07:30:51', NULL),
(45, 15, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-09-16 07:30:51', '2020-09-16 07:30:51', NULL);

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
  `expire` tinyint(4) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `expire`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', 1, NULL, '$2y$10$R4BZTUWZ4SAYxvqDDxQSNuXsD2NEjZegx2r0rVto9886RQG80WE9O', NULL, '2020-09-15 21:00:00', '2020-09-16 07:40:52');

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
