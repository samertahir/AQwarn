-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 06:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aqwarn`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_total` int(11) NOT NULL,
  `discount_rate` int(11) NOT NULL,
  `address` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quantity` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `product_id`, `user_id`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '15', '2022-08-31 15:54:07', '2022-12-22 16:09:31'),
(2, 2, 2, '2', '2022-11-23 17:41:25', '2022-12-06 16:40:28'),
(3, 3, 2, '3', '2022-11-23 17:41:48', '2022-12-06 17:27:08'),
(4, 4, 2, '1', '2022-11-29 16:28:57', '2022-11-29 16:28:57');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(4, 'hardware', '2022-06-14 18:31:07', '2022-06-14 18:31:07'),
(5, 'bottle', '2022-06-14 18:34:23', '2022-06-14 18:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Lahore', '2022-06-16 13:43:54', '2022-06-16 13:43:54'),
(2, 'Karachi', '2022-06-16 13:44:02', '2022-06-16 13:44:02'),
(3, 'Gujranwala', '2022-06-16 13:44:08', '2022-06-16 13:44:08'),
(4, 'Islamabad', '2022-06-16 13:46:10', '2022-06-16 13:46:10');

-- --------------------------------------------------------

--
-- Table structure for table `devices`
--

CREATE TABLE `devices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `device_name` varchar(191) NOT NULL,
  `description` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `status` double(8,2) NOT NULL,
  `device_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(191) NOT NULL,
  `contact_no` varchar(191) NOT NULL,
  `email_id` varchar(191) NOT NULL,
  `subject` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `feedback_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'F6', '2022-06-18 14:56:40', '2022-06-18 14:56:40');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_04_20_000212_create_products_table', 1),
(6, '2022_04_20_001301_create_categories_table', 1),
(7, '2022_04_20_001505_create_feedback_table', 1),
(8, '2022_04_20_002023_create_roles_table', 1),
(9, '2022_04_20_002210_create_devices_table', 1),
(10, '2022_04_24_102449_create_cities_table', 1),
(11, '2022_04_24_102741_create_streets_table', 1),
(12, '2022_04_24_103022_create_locations_table', 1),
(13, '2022_04_24_103616_create_order_items_table', 1),
(14, '2022_04_24_104817_create_orders_table', 1),
(15, '2022_06_09_075415_add__role_to__user_table', 2),
(17, '2022_06_09_081236_add__role_to__user_table', 3),
(18, '2022_06_16_101936_provinces', 4),
(19, '2022_06_16_102904_provinces', 5),
(25, '2014_10_12_000000_create_users_table', 6),
(26, '2022_06_18_070758_add_category_id_to_product_table', 7),
(27, '2022_07_19_085108_add_user_id_to_device_table', 8),
(28, '2022_07_19_091949_add_status_to_devices_table', 9),
(29, '2022_07_19_093847_add_user_id_to_orders_table', 10),
(30, '2022_07_19_094127_add_product_id_to_order_items_table', 11),
(31, '2022_07_19_094822_add_status_to_orders_table', 12),
(32, '2022_07_27_074440_create_carts_table', 13),
(33, '2022_07_27_074556_create_cart_items_table', 14),
(34, '2022_08_01_075606_add_product_id_to_cart_items_table', 14),
(35, '2022_08_01_080157_add_cart_id_cart_items_table', 14),
(36, '2022_08_01_085945_create_cart_items_table', 15),
(37, '2022_08_15_082829_create_cart_items_table', 16),
(38, '2022_08_16_082715_add_address_to_users_table', 17),
(39, '2022_12_02_114300_user_controller', 18),
(40, '2022_12_02_114356_user_profile', 18),
(41, '2022_12_12_101120_add-columns-to-user-table', 18),
(42, '2023_02_07_102543_add_device_id_to_devices', 19),
(43, '2023_02_20_104652_add_device_id_to_users_table', 20);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_total` int(11) NOT NULL,
  `discount_rate` int(11) NOT NULL,
  `address` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_price` int(11) NOT NULL,
  `Quantity` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `price` int(11) NOT NULL,
  `description` longtext NOT NULL,
  `product_img` varchar(191) NOT NULL,
  `discount` varchar(191) NOT NULL,
  `quantity_in_hand` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `product_img`, `discount`, `quantity_in_hand`, `created_at`, `updated_at`, `category_id`) VALUES
(1, 'Classic Pure Water', 100, '<p>Purified drinking water <strong>provides a better way for people to stay hydrated</strong>. Among its many benefits, it aids in digestion, boosts athletic performance, detoxifies the body, and promotes clearer skin.</p>', '/public/image/1657016517_image.png', '5', '10', '2022-07-05 17:21:57', '2022-07-05 17:21:57', 5),
(2, 'Diamond Mineral Water', 100, '<p>Diamond &nbsp;Mineral Water is a luxury high-pH Alkaline Water. This revitalizing water will <strong>hydrate you and will inspire your mind, body and soul</strong>.</p>', '/public/image/1657020720_image.png', '5', '56', '2022-07-05 18:32:00', '2022-07-05 18:32:00', 5),
(3, 'Naturally Spark Water', 100, '<p>Drinking sparkling water can <strong>help stave off dehydration</strong>. If you\'re dehydrated, you may experience dry mouth, fatigue, headache, and impaired performance. Chronic dehydration could contribute to digestive issues and complications with the heart and kidneys. Sparkling water is just as hydrating as still water.</p>', '/public/image/1657021108_image.png', '6', '78', '2022-07-05 18:38:28', '2022-07-05 18:38:28', 5),
(4, 'Quality Certified', 50, '<p>Through the inspection and evaluation of the enterprise’s quality management system and sample type test to confirm whether the enterprise’s products, processes or services meet specific requirements, whether the ability to consistently and consistently produce products that meet the requirements of the standard, and give written proof of the procedure.</p>', '/public/image/1658910185_image.png', '10', '40', '2022-07-27 15:23:05', '2022-07-27 15:23:05', 5);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Punjab', '2022-06-18 14:55:38', '2022-06-18 14:55:38');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'user', '2022-06-09 18:06:59', '2022-06-09 18:06:59');

-- --------------------------------------------------------

--
-- Table structure for table `streets`
--

CREATE TABLE `streets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `streets`
--

INSERT INTO `streets` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, '11', '2022-06-18 14:56:16', '2022-06-18 14:56:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `contact_no` varchar(191) NOT NULL,
  `cnic_no` varchar(191) NOT NULL,
  `dob` date NOT NULL,
  `device-id` int(11) NOT NULL,
  `street_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `province_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT 1,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` varchar(191) NOT NULL,
  `device_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact_no`, `cnic_no`, `dob`, `device-id`, `street_id`, `city_id`, `location_id`, `province_id`, `role_id`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`, `address`, `device_id`) VALUES
(1, 'bottle', 'adsad@gmail.com', '$2y$10$PA29xAQK2EXuhlXIaWf5PulphrAsp6.J/YpA8FYouS6jD4EysmoB6', '1235532134324', '232314235234123', '2022-06-17', 0, 1, 2, 1, 1, 1, NULL, NULL, '2022-06-18 17:24:47', '2022-06-18 17:24:47', 'Gujranwala', 0),
(2, 'superadmin', 'superadmin@gmail.com', '$2y$10$HqdX7CD8cvSLuWchd4sK/.JnYokQK039o/QRzPfZ1MWomGOnJ9WX.', '1234567890', '2345567990', '2022-06-24', 0, 1, 1, 1, 1, 2, NULL, NULL, '2022-06-18 17:29:42', '2022-06-18 17:29:42', 'Gujranwala', 0),
(3, 'atiqa', 'atiqa@gmail.com', '$2y$10$UEB4WMXDFgJ8d6Xiu3Kcw.3RRWhsFJMCcw4mBfTFi3SxbT3fpXaMq', '9887654', '67892099873', '2022-06-15', 0, 1, 3, 1, 1, 1, NULL, NULL, '2022-06-23 17:21:55', '2022-06-23 17:21:55', 'Lahore', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `devices`
--
ALTER TABLE `devices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `streets`
--
ALTER TABLE `streets`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `devices`
--
ALTER TABLE `devices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `streets`
--
ALTER TABLE `streets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
