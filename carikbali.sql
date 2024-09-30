-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table carikbali.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table carikbali.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.migrations: ~8 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2022_03_27_174507_create_tb_produk_table', 1),
	(6, '2022_04_01_174704_laratrust_setup_tables', 1),
	(7, '2022_04_02_205533_create_tb_img_produk_table', 1),
	(8, '2022_04_07_182225_create_tb_order_table', 2);

-- Dumping structure for table carikbali.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.password_resets: ~0 rows (approximately)

-- Dumping structure for table carikbali.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.permissions: ~10 rows (approximately)
INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'users-create', 'Create Users', 'Create Users', '2022-04-02 13:00:05', '2022-04-02 13:00:05'),
	(2, 'users-read', 'Read Users', 'Read Users', '2022-04-02 13:00:05', '2022-04-02 13:00:05'),
	(3, 'users-update', 'Update Users', 'Update Users', '2022-04-02 13:00:05', '2022-04-02 13:00:05'),
	(4, 'users-delete', 'Delete Users', 'Delete Users', '2022-04-02 13:00:05', '2022-04-02 13:00:05'),
	(5, 'payments-create', 'Create Payments', 'Create Payments', '2022-04-02 13:00:06', '2022-04-02 13:00:06'),
	(6, 'payments-read', 'Read Payments', 'Read Payments', '2022-04-02 13:00:06', '2022-04-02 13:00:06'),
	(7, 'payments-update', 'Update Payments', 'Update Payments', '2022-04-02 13:00:06', '2022-04-02 13:00:06'),
	(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2022-04-02 13:00:06', '2022-04-02 13:00:06'),
	(9, 'profile-read', 'Read Profile', 'Read Profile', '2022-04-02 13:00:06', '2022-04-02 13:00:06'),
	(10, 'profile-update', 'Update Profile', 'Update Profile', '2022-04-02 13:00:06', '2022-04-02 13:00:06');

-- Dumping structure for table carikbali.permission_role
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.permission_role: ~12 rows (approximately)
INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
	(1, 1),
	(2, 1),
	(3, 1),
	(4, 1),
	(5, 1),
	(6, 1),
	(7, 1),
	(8, 1),
	(9, 1),
	(10, 1),
	(9, 2),
	(10, 2);

-- Dumping structure for table carikbali.permission_user
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.permission_user: ~0 rows (approximately)

-- Dumping structure for table carikbali.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.personal_access_tokens: ~0 rows (approximately)

-- Dumping structure for table carikbali.roles
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.roles: ~2 rows (approximately)
INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'superadmin', 'Superadmin', 'Superadmin', '2022-04-02 13:00:05', '2022-04-02 13:00:05'),
	(2, 'customer', 'Customer', 'Customer', '2022-04-02 13:00:07', '2022-04-02 13:00:07');

-- Dumping structure for table carikbali.role_user
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.role_user: ~2 rows (approximately)
INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`) VALUES
	(1, 1, 'App\\Models\\User'),
	(2, 2, 'App\\Models\\User');

-- Dumping structure for table carikbali.tb_img_produk
CREATE TABLE IF NOT EXISTS `tb_img_produk` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_img_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_img_produk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.tb_img_produk: ~12 rows (approximately)
INSERT INTO `tb_img_produk` (`id`, `id_produk`, `name_img_produk`, `status_img_produk`, `created_at`, `updated_at`) VALUES
	(1, '1', '1649104102.jpg', '2', '2022-04-04 12:28:22', '2022-04-04 12:36:03'),
	(2, '1', '1649104133.jpg', '-1', '2022-04-04 12:28:53', '2022-04-04 12:40:09'),
	(3, '4', '1715685302.png', '1', '2024-05-14 03:15:02', '2024-05-14 03:15:02'),
	(4, '4', '1715685308.png', '1', '2024-05-14 03:15:08', '2024-05-14 03:15:08'),
	(5, '5', '1715685357.png', '1', '2024-05-14 03:15:57', '2024-05-14 03:15:57'),
	(6, '5', '1715685364.png', '1', '2024-05-14 03:16:04', '2024-05-14 03:16:04'),
	(7, '6', '1715685442.png', '1', '2024-05-14 03:17:22', '2024-05-14 03:17:22'),
	(8, '6', '1715685449.png', '1', '2024-05-14 03:17:29', '2024-05-14 03:17:29'),
	(9, '7', '1715685497.png', '1', '2024-05-14 03:18:17', '2024-05-14 03:18:17'),
	(10, '7', '1715685505.png', '1', '2024-05-14 03:18:25', '2024-05-14 03:18:25'),
	(11, '8', '1715685559.png', '1', '2024-05-14 03:19:19', '2024-05-14 03:19:19'),
	(12, '8', '1715685565.png', '1', '2024-05-14 03:19:25', '2024-05-14 03:19:25');

-- Dumping structure for table carikbali.tb_order
CREATE TABLE IF NOT EXISTS `tb_order` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `date_order` datetime NOT NULL,
  `id_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_order` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_order` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_order` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_order` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_order` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.tb_order: ~0 rows (approximately)

-- Dumping structure for table carikbali.tb_produk
CREATE TABLE IF NOT EXISTS `tb_produk` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `thumbnail_img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description_product` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `information_product` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sku_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.tb_produk: ~8 rows (approximately)
INSERT INTO `tb_produk` (`id`, `thumbnail_img`, `name_product`, `price_product`, `description_product`, `information_product`, `sku_product`, `categories_product`, `tags_product`, `stock_product`, `status_product`, `created_at`, `updated_at`) VALUES
	(1, '1649008080.jpeg', 'kontol', '30000', 'aaaaa', 'aaa', 'CB-VbVE', 'aaaaa', 'aaaaaa', '12', '-1', '2022-04-03 09:48:00', '2024-05-14 03:09:08'),
	(2, '1649008201.jpeg', 'Hotel Bedugul 2', '12000', 'asasas', 'asas', 'CB-chRN', '121', 'asasa', '12322', '-1', '2022-04-03 09:50:01', '2022-04-03 10:18:14'),
	(3, '1715685056.jpg', '1', '65000', '1', '1', 'CB-lOKE', 'fruit', 'banana, fruit', '10', '-1', '2024-05-14 03:10:56', '2024-05-14 03:11:03'),
	(4, '1715685295.png', 'Pisang', '100000', 'Pisang adalah salah satu buah tropis yang paling populer di dunia, dikenal karena rasa manisnya yang lembut dan teksturnya yang lembut. Buah ini hadir dalam berbagai varietas yang menawarkan keunikan rasa dan ukuran, mulai dari pisang cavendish yang umum ditemui hingga pisang raja yang lebih besar dan sering digunakan dalam masakan.', 'Pisang adalah salah satu buah tropis yang paling populer di dunia, dikenal karena rasa manisnya yang lembut dan teksturnya yang lembut. Buah ini hadir dalam berbagai varietas yang menawarkan keunikan rasa dan ukuran, mulai dari pisang cavendish yang umum ditemui hingga pisang raja yang lebih besar dan sering digunakan dalam masakan.', 'CB-ngvM', 'fruit', 'banana, fruit', '10', '1', '2024-05-14 03:14:55', '2024-05-14 03:14:55'),
	(5, '1715685349.png', 'Semangka', '100000', 'Semangka adalah buah tropis yang sangat populer, terutama di musim panas, karena sifatnya yang menyegarkan dan rasanya yang manis. Buah ini dikenal dengan ukurannya yang besar, kulitnya yang keras, serta daging buahnya yang berair dan berwarna merah atau kuning cerah, penuh dengan biji hitam atau putih kecil.', 'Semangka adalah buah tropis yang sangat populer, terutama di musim panas, karena sifatnya yang menyegarkan dan rasanya yang manis. Buah ini dikenal dengan ukurannya yang besar, kulitnya yang keras, serta daging buahnya yang berair dan berwarna merah atau kuning cerah, penuh dengan biji hitam atau putih kecil.', 'CB-Qb4S', 'fruit', 'watermelon, fruit', '10', '1', '2024-05-14 03:15:49', '2024-05-14 03:15:49'),
	(6, '1715685431.png', 'Jeruk', '100000', 'Jeruk adalah buah yang cerah dan menyegarkan, sering dianggap sebagai simbol musim panas dan keceriaan. Dikenal dengan warna kulitnya yang oranye yang mencolok, jeruk memiliki daging buah yang juicy, manis, dan asam, serta aroma segar yang khas. Buah ini memiliki berbagai varietas, seperti jeruk Navel, jeruk Valencia, jeruk Mandarin, dan jeruk Jerapah, masing-masing dengan karakteristik rasa dan tekstur yang unik.', 'Jeruk adalah buah yang cerah dan menyegarkan, sering dianggap sebagai simbol musim panas dan keceriaan. Dikenal dengan warna kulitnya yang oranye yang mencolok, jeruk memiliki daging buah yang juicy, manis, dan asam, serta aroma segar yang khas. Buah ini memiliki berbagai varietas, seperti jeruk Navel, jeruk Valencia, jeruk Mandarin, dan jeruk Jerapah, masing-masing dengan karakteristik rasa dan tekstur yang unik.', 'CB-4xkV', 'fruit', 'orange, fruit', '10', '1', '2024-05-14 03:17:11', '2024-05-14 03:17:11'),
	(7, '1715685488.png', 'Alpukat', '100000', 'Alpukat, buah yang sering disebut sebagai "buah lemak sehat", memiliki tekstur lembut dan krimi yang unik serta rasa yang lezat dan kaya. Buah ini memiliki kulit yang berwarna hijau gelap hingga ungu, yang melindungi daging buahnya yang berwarna hijau muda hingga kuning kecokelatan, tergantung pada tingkat kematangan.', 'Alpukat, buah yang sering disebut sebagai "buah lemak sehat", memiliki tekstur lembut dan krimi yang unik serta rasa yang lezat dan kaya. Buah ini memiliki kulit yang berwarna hijau gelap hingga ungu, yang melindungi daging buahnya yang berwarna hijau muda hingga kuning kecokelatan, tergantung pada tingkat kematangan.', 'CB-KQxR', 'fruit', 'alpukat, fruit', '10', '1', '2024-05-14 03:18:08', '2024-05-14 03:18:08'),
	(8, '1715685551.png', 'Rambutan', '100000', 'Rambutan adalah buah tropis yang unik dan menggiurkan, dengan ciri khas kulit berlekuk dan rambut halus yang melapisi permukaannya. Buah ini berasal dari Asia Tenggara tetapi telah menyebar ke berbagai belahan dunia karena rasanya yang lezat dan teksturnya yang menyegarkan.', 'Rambutan adalah buah tropis yang unik dan menggiurkan, dengan ciri khas kulit berlekuk dan rambut halus yang melapisi permukaannya. Buah ini berasal dari Asia Tenggara tetapi telah menyebar ke berbagai belahan dunia karena rasanya yang lezat dan teksturnya yang menyegarkan.', 'CB-O19m', 'fruit', 'rambutan, fruit', '10', '1', '2024-05-14 03:19:11', '2024-05-14 03:19:11');

-- Dumping structure for table carikbali.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table carikbali.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `email`, `number_phone`, `address_user`, `status_user`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Mega', 'superadmin@gmail.com', '', '', '', NULL, '$2y$10$4fRFznC9W8vVJbyf./vQ5OHXUhHSz4JLam0N2NZBRzyWAMBMH7Bnu', NULL, '2022-04-02 13:02:00', '2022-04-02 13:02:00'),
	(2, 'Bayu', 'bayu@gmail.com', '', '', '', NULL, '$2y$10$IEJ/6CXWrqBGfIaysmimg.gvS40Fl3foeT8mfLh2at9XRBkXH.iMS', NULL, '2022-04-02 13:02:44', '2022-04-02 13:02:44');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
