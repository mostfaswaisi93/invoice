-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2020 at 09:39 AM
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `customer_name`, `customer_email`, `customer_mobile`, `company_name`, `invoice_number`, `invoice_date`, `sub_total`, `discount_type`, `discount_value`, `vat_value`, `shipping`, `total_due`, `created_at`, `updated_at`) VALUES
(1, 'السيدة آناء العقل', 'mohammad.rashwani@abulebbeh.com', '2166525684', 'السيدة ميرال الحصين', '4758159', '2020-08-18', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(2, 'عرمان الخضيري', 'rami.maanee@yahoo.com', '5558908653034', 'شفاء زين العابدين الراجحي', '3336720', '2020-08-01', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(3, 'عبدالحميد الشهري', 'lqasem@yahoo.com', '324108243919', 'الدكتورة وسام باشا', '0455458', '2020-08-02', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(4, 'السيدة سنابل الأسمري', 'yhadi@shami.biz', '688692737', 'رامان مثنى شاهر باشا', '0278369', '2020-08-18', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(5, 'المهندسة هادلين الفيفي', 'mutaz03@abbas.com', '2124647614482', 'المهندسة غفران الخضيري', '4460579', '2020-08-17', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(6, 'خلف الشهيل', 'omelhem@gmail.com', '322031126', 'علاء القحطاني', '6116327', '2020-08-17', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(7, 'طلال خميس الفدا', 'amr.rabee@hotmail.com', '008857256589', 'هادي سقا', '4426465', '2020-08-09', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(8, 'رامي جواهرجي', 'bilal72@abbad.info', '36799592921', 'أكثم عامر العسكر', '3535912', '2020-08-11', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(9, 'رامان عبداللطيف السماعيل', 'hqasem@gmail.com', '092562776404', 'عبدالقادر فيصل الراجحي', '0842672', '2020-08-16', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(10, 'معاذ الداوود', 'amr.obaisi@hamad.biz', '331235930', 'زينة السويلم', '1145878', '2020-08-10', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(11, 'الدكتورة عبير العمرو', 'layth27@zaloum.com', '523633151012', 'منار المنيف', '1365292', '2020-08-17', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(12, 'رماح فواز قتاده العقل', 'jabri.fadi@zaloum.info', '56977834219', 'أروى راكان السعيد', '5610817', '2020-08-12', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(13, 'رئاد الداوود', 'ahmad21@hotmail.com', '903950721687', 'داليا صدام باشا', '8649786', '2020-08-14', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(14, 'عبدالرؤوف اليمان المنيف', 'fadi.abbas@flefel.net', '6314035705', 'مديحة عبدالعزيز الخالدي', '8061273', '2020-08-11', '5840.00', 'fixed', '0.00', '292.00', '100.00', '6232.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_details`
--

INSERT INTO `invoice_details` (`id`, `invoice_id`, `product_name`, `unit`, `quantity`, `unit_price`, `row_sub_total`, `created_at`, `updated_at`) VALUES
(1, 1, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(2, 1, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(3, 1, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(4, 2, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(5, 2, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(6, 2, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:56', '2020-08-21 20:25:56'),
(7, 3, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(8, 3, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(9, 3, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(10, 4, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(11, 4, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(12, 4, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(13, 5, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(14, 5, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(15, 5, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(16, 6, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(17, 6, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(18, 6, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(19, 7, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(20, 7, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(21, 7, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(22, 8, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(23, 8, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(24, 8, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(25, 9, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(26, 9, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(27, 9, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:57', '2020-08-21 20:25:57'),
(28, 10, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(29, 10, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(30, 10, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(31, 11, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(32, 11, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(33, 11, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(34, 12, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(35, 12, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(36, 12, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(37, 13, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(38, 13, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(39, 13, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(40, 14, 'طاولة كمبيوتر كبيرة', 'piece', '2.00', '560.00', '1120.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(41, 14, 'طاولة كمبيوتر صغيرة', 'piece', '1.00', '220.00', '220.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58'),
(42, 14, 'كمبيوتر محمول', 'piece', '1.00', '4500.00', '4500.00', '2020-08-21 20:25:58', '2020-08-21 20:25:58');

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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$wdB58h0/Kf/e8ggu4lNskurem0NI6EWlfEsvNT0yGyE.jkMG9nQnm', NULL, '2020-08-20 21:00:00', '2020-08-20 21:00:00');

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
