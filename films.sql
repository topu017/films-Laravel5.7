-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2019 at 12:11 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `films`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `comment`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Topu Monir', 'tmonirweb@gmail.com', 'Wow!', 'Blood-Diamond', '2019-02-02 17:20:58', '2019-02-02 17:20:58'),
(2, 'Topu Monir', 'tmonirweb@gmail.com', 'Amazing Movie', 'The-Predator', '2019-02-02 17:21:41', '2019-02-02 17:21:41'),
(3, 'Topu Monir', 'tmonirweb@gmail.com', 'Very nice movie', 'Mountain-Between-Us', '2019-02-02 17:22:43', '2019-02-02 17:22:43'),
(4, 'Topu Monir', 'tmonirweb@gmail.com', 'Excellent movie', 'Blood-Diamond', '2019-02-02 17:23:53', '2019-02-02 17:23:53'),
(5, 'Topu Monir', 'tmonirweb@gmail.com', 'Nice', 'Rampage', '2019-02-02 17:32:01', '2019-02-02 17:32:01');

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE `films` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `release_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ticket_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `genre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `user_id`, `name`, `slug`, `description`, `release_date`, `ticket_price`, `country`, `genre`, `image`, `created_at`, `updated_at`) VALUES
(1, 0, 'Blood Diamond', 'Blood-Diamond', 'Phasellus vitae quam orci. Integer ut scelerisque nulla. Maecenas vestibulum euismod est, et dictum nisl. Integer magna nulla, semper nec nibh a, sagittis faucibus enim. Ut semper arcu accumsan accumsan semper. Nulla feugiat sem ut efficitur pretium. Morbi facilisis non augue nec tincidunt. Morbi eu nisl in orci congue egestas eget tempus urna. Mauris congue pharetra suscipit.', '02/10/2006', '130', 'USA', 'Tragedy', 'public/images/GhJY1zIIEgQJwlRgX870yiCz6HIbNeeU6aWatO9S.jpeg', '2019-02-02 11:28:38', '2019-02-02 11:28:38'),
(5, 0, 'The Predator', 'The-Predator', 'Mauris r sem eu felis  Maecenas  congue mauris, ut vestibulum turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi gravida velit sed commodo congue. Vivamus fermentum diam a volutpat congue. Suspendisse potenti.', '02/10/2018', '170', 'USA', 'Tragedy', 'public/images/I9NjLz2GjdYzKv2xUAodziM8VeSn7l1FAzJBUw8p.jpeg', '2019-02-02 12:49:26', '2019-02-02 12:49:26'),
(6, 0, 'Mountain Between Us', 'Mountain-Between-Us', 'Donec arcu nunc, faucibus id pharetra a, gravida vel risus. Fusce convallis, eros non sagittis vestibulum, ipsum dolor volutpat orci, tempor aliquam mi neque eu massa. Curabitur a elit ut turpis vestibulum congue. Quisque efficitur ligula nec nisl vestibulum, non mollis lectus auctor. Nulla volutpat mauris at mi vulputate pharetra.', '02/08/2018', '200', 'USA', 'Comedy', 'public/images/ickwFur143X0l7i4p2BARwnNnXLuGf0WBeN9Q6js.jpeg', '2019-02-02 13:13:44', '2019-02-02 13:13:44'),
(7, 0, 'Macbeth', 'Macbeth', 'In eu tempus quam. Pellentesque sed mi at risus faucibus pharetra sit amet vitae arcu. Pellentesque hendrerit, nisi sagittis molestie scelerisque, dui metus hendrerit elit, vel ornare neque nulla ac est. Cras pulvinar volutpat turpis, maximus commodo velit euismod eu. Sed urna arcu, vulputate pellentesque urna sed, feugiat cursus eros. Nam semper dictum erat et lacinia. Vivamus volutpat ac nunc ac venenatis. Etiam ut ex lobortis, auctor est a, suscipit tellus.', '02/05/2018', '180', 'USA', 'Tragedy', 'public/images/iTrnLtimbzPgRNWq6X3GKC3FnfcIaBc3lXyNaK5c.jpeg', '2019-02-02 13:17:37', '2019-02-02 13:17:37'),
(8, 0, 'Rampage', 'Rampage', 'Fusce posuere sed ante quis bibendum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam malesuada mauris eu augue mattis eleifend vitae ac nibh. Morbi ut convallis ipsum, quis finibus ante. Praesent tempus leo quis lectus ornare, sit amet accumsan urna vehicula. Orci varius natoque penatibus et magnis dis parturient montes,', '02/06/2018', '160', 'USA', 'Horror', 'public/images/2L2aAuhvcx242wTMlyrdBtzkNZomyas1LkS4ZYBa.jpeg', '2019-02-02 13:29:28', '2019-02-02 13:29:28'),
(9, 0, 'The Tiger An Old Hunter\'s Tale', 'The-Tiger-An-Old-Hunter\'s-Tale', 'Pellentesque hendrerit, nisi sagittis molestie scelerisque, dui metus hendrerit elit, vel ornare neque nulla ac est. Cras pulvinar volutpat turpis, maximus commodo velit euismod eu. Sed urna arcu, vulputate pellentesque urna sed, feugiat cursus eros. Nam semper dictum erat et lacinia. Vivamus volutpat ac nunc ac venenatis. Etiam ut ex lobortis, auctor est a, suscipit tellus.', '02/10/2017', '170', 'UK', 'Action', 'public/images/5lsS7KjTxkOlKokZfxYS2RxfvVUskqVQcODnNUDc.jpeg', '2019-02-02 13:32:22', '2019-02-02 13:32:22');

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
(3, '2019_02_01_025518_create_films_table', 1),
(4, '2019_02_01_030152_create_ratings_table', 1),
(6, '2019_02_02_210039_create_comments_table', 2);

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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `film_id` int(10) UNSIGNED NOT NULL,
  `rating` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_or_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_or_mobile`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Topu Monir', 'tmonirweb@gmail.com', '+8801876962995', 'tm', '2019-02-02 14:50:39', '$2y$10$5ww2reMOamfuFmxH/JL.1upcQGUwWfeNChquPo0yMKc3NvEiegFjS', 'Kd0ayKGRFEwvtbDY7gV85fwjqmZHZPHSUt1zMcuLaHT5cBh8pPagBYyPJkfs', '2019-02-02 14:49:27', '2019-02-02 14:50:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_or_mobile_unique` (`phone_or_mobile`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `films`
--
ALTER TABLE `films`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
