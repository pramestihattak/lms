-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2015 at 10:43 
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `year` int(4) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `shelf_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `year_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `year`, `stock`, `category_id`, `shelf_id`, `created_at`, `updated_at`, `year_id`) VALUES
(1, 'Laravel 5', 'Rahmat Awalludin', 2015, 9, 4, 1, '2015-06-09 07:32:45', '2015-06-10 01:47:18', 0),
(2, 'Angular.Js', 'Mark Zuckerberg', 2014, 6, 4, 3, '2015-06-09 08:06:03', '2015-06-19 10:21:15', 0),
(4, 'Vue.Js', 'Taylor Otwell', 2015, 0, 4, 1, '2015-06-09 08:09:01', '2015-06-09 08:51:31', 0),
(5, 'Be Bold', 'Kingsman', 2000, 0, 5, 5, '2015-06-09 08:23:20', '2015-06-11 00:50:22', 0),
(6, 'OOP with PHP', 'Richard Stallman', 1999, 7, 4, 5, '2015-06-19 10:18:06', '2015-06-19 10:20:33', 0),
(7, 'Seputar Antariksa', 'NASA', 2000, 1, 1, 3, '2015-06-19 10:18:48', '2015-06-19 10:22:31', 0),
(8, 'Cinderella', 'Unyil', 2000, 1, 6, 4, '2015-06-19 10:19:47', '2015-06-19 10:19:47', 0),
(9, 'Atom and Neutron', 'Dr. Zeuz', 1999, 2, 1, 3, '2015-06-19 11:00:47', '2015-06-19 11:00:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) unsigned NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`, `created_at`, `updated_at`) VALUES
(1, 'Sains', '2015-06-09 00:17:51', '2015-06-09 01:01:36'),
(4, 'Computer', '2015-06-09 01:07:41', '2015-06-09 01:07:41'),
(5, 'Life Lesson', '2015-06-09 01:07:50', '2015-06-09 01:07:50'),
(6, 'Fairy Tail', '2015-06-09 01:08:14', '2015-06-09 01:08:14');

-- --------------------------------------------------------

--
-- Table structure for table `fines`
--

CREATE TABLE IF NOT EXISTS `fines` (
  `id` int(2) NOT NULL,
  `days` int(11) NOT NULL,
  `fines` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `fines`
--

INSERT INTO `fines` (`id`, `days`, `fines`, `created_at`, `updated_at`) VALUES
(1, 5, 7000, '2015-06-09 02:27:33', '2015-06-19 11:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_06_09_041120_create_categories_table', 1),
('2015_06_09_041145_create_shelves_table', 1),
('2015_06_09_041212_create_fines_table', 1),
('2015_06_09_041219_create_periodes_table', 1),
('2015_06_09_041233_create_students_table', 1),
('2015_06_09_041242_create_books_table', 1),
('2015_06_09_041254_create_transactions_table', 1),
('2015_06_09_151248_create_years_table', 2),
('2015_06_18_030231_create_lac', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `periodes`
--

CREATE TABLE IF NOT EXISTS `periodes` (
  `id` int(2) NOT NULL,
  `days` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `periodes`
--

INSERT INTO `periodes` (`id`, `days`, `created_at`, `updated_at`) VALUES
(1, 100, '2015-06-09 02:59:49', '2015-06-10 08:14:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'user', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `shelves`
--

CREATE TABLE IF NOT EXISTS `shelves` (
  `id` int(10) unsigned NOT NULL,
  `shelf` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `shelves`
--

INSERT INTO `shelves` (`id`, `shelf`, `created_at`, `updated_at`) VALUES
(1, 'A', '2015-06-09 01:45:37', '2015-06-09 01:58:05'),
(3, 'B', '2015-06-09 03:10:53', '2015-06-09 03:10:53'),
(4, 'C', '2015-06-09 03:10:57', '2015-06-09 03:10:57'),
(5, 'D', '2015-06-09 03:11:00', '2015-06-09 03:11:00');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE IF NOT EXISTS `students` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `registered_at` int(11) NOT NULL,
  `borrow` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `registered_at`, `borrow`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pramesti Hatta K.', 1432080000, 1, 1, '2015-06-09 06:26:04', '2015-06-19 10:21:15'),
(2, 'Chelsea Islan', 1433948676, 1, 1, '2015-06-10 07:50:57', '2015-06-11 00:50:23'),
(3, 'John Mayer', 1434734048, 0, 1, '2015-06-19 10:14:08', '2015-06-19 10:14:08'),
(4, 'Emma Watson', 1434734067, 1, 1, '2015-06-19 10:14:27', '2015-06-19 10:20:33'),
(5, 'Scarlet Johansson', 1434734082, 0, 1, '2015-06-19 10:14:42', '2015-06-19 10:14:42'),
(6, 'Rachmanita', 1434734225, 1, 1, '2015-06-19 10:17:05', '2015-06-19 10:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `book_id` int(10) unsigned NOT NULL,
  `borrowed_at` int(11) NOT NULL,
  `returned_at` int(11) DEFAULT NULL,
  `fines` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `student_id`, `book_id`, `borrowed_at`, `returned_at`, `fines`, `status`, `created_at`, `updated_at`) VALUES
(11, 1, 1, 1433030400, 0, 105000, 0, '2015-06-09 23:31:53', '2015-06-19 23:37:56'),
(12, 1, 5, 1433926647, 1433926960, 0, 1, '2015-06-10 01:57:27', '2015-06-10 02:02:40'),
(13, 1, 2, 1432080000, 1434734475, 125000, 1, '2015-06-10 01:58:41', '2015-06-19 10:21:15'),
(14, 1, 5, 1433927036, 1433927038, 0, 1, '2015-06-10 02:03:38', '2015-06-10 02:03:58'),
(16, 2, 5, 1434009022, NULL, 28000, 0, '2015-06-11 00:50:22', '2015-06-20 08:07:07'),
(17, 4, 6, 1434734432, NULL, 0, 0, '2015-06-19 10:20:32', '2015-06-19 10:20:33'),
(18, 6, 7, 1434734550, NULL, 0, 0, '2015-06-19 10:22:30', '2015-06-19 10:22:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pramesti Hatta K.', 'opam.qweiop@gmail.com', '$2y$10$VFG.F.TaSzx49wU9/J/MAe6XGgm9QhR2hFAPYuQyqKEL3QKBgLeFi', 'IM5FXwueZ9kOKkLoUDkHmOLNkhru91X4NLaLKgQQmyZANPwcIhwLIRd4kb3y', '2015-06-08 23:21:52', '2015-06-20 08:11:04'),
(2, 'Lost Stars', 'loststars@gmail.com', '$2y$10$EZ.951.hY8OzFsXHco6lo.W2PotUOBtm3XtLzSafTfYHIXMX6W1Ce', 'xz35vIdRBpE91ka0E9lLil1XH575cCfvJ4OhgycLdw5QYV18arp5COtSBj7z', '2015-06-17 20:24:39', '2015-06-17 20:34:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_category_id_foreign` (`category_id`),
  ADD KEY `books_shelf_id_foreign` (`shelf_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fines`
--
ALTER TABLE `fines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `periodes`
--
ALTER TABLE `periodes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`role_id`,`user_id`);

--
-- Indexes for table `shelves`
--
ALTER TABLE `shelves`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_student_id_foreign` (`student_id`),
  ADD KEY `transactions_book_id_foreign` (`book_id`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `fines`
--
ALTER TABLE `fines`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `periodes`
--
ALTER TABLE `periodes`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shelves`
--
ALTER TABLE `shelves`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `books_shelf_id_foreign` FOREIGN KEY (`shelf_id`) REFERENCES `shelves` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`),
  ADD CONSTRAINT `transactions_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
