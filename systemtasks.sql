-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2021 at 04:41 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `systemtasks`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `type` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `type`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$T6JT16K5S4Ra2ge9/dFfpueR3rStCx7R4B/o57I9ebmL3ZnWypL3y', '2021-11-21 21:22:18', 1),
(2, 'jannat', 'jannat@gmail.com', '$2y$10$SbKRNwJUNz59/6FbC03G..JeZKkT.EqLQADOFf41HEm.4C55anCnS', '2021-11-21 22:30:04', 0),
(3, 'Mama', 'Mama@gmail.com', '$2y$10$Q3Vk9.mMQVJMWPRz3K8ruOx4zwgJGrfCSVPochP2tUu.ABW1kGSwG', '2021-11-21 22:30:32', 1),
(4, 'Dade', 'Dade@gmail.com', '$2y$10$ROZ6w0fxCHNSdZ.7nrReL.PR6I4zmFci5zVbS0G/y0koq5/cVih7C', '2021-11-21 22:30:58', 1),
(5, 'zaher', 'zaher@gmail.com', '$2y$10$iAHUKE5TjshHPX5XHPeRLOYCXCZ8xPGbkDuhEqrMerSpn/xeP0ayK', '2021-11-22 18:00:18', 0),
(6, '', '', '$2y$10$S4pMV4HrsheGqpzbsU4/3evo8nPEh18DPHJpScBcGkqelzhFr89GK', '2021-11-22 18:00:43', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `stautes` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `body`, `stautes`, `user_id`, `created_at`) VALUES
(10, 'nkjk', 'mknmkl', 0, 15, '2021-11-20 19:50:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `statuse` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `statuse`, `created_at`) VALUES
(15, 'jannat', 'jannat@gmail.com', '$2y$10$bEA1H9vPExnyJmldzfk/5.QS8FT1AFjoG40PynqomMr9kCb0R6gqS', 1, '2021-11-20 16:57:13'),
(16, 'hj', 'zaher@gmail.com', '$2y$10$IkYsZy10Nl2QXGUW7Gr1deCFvhsuxQhEUMbM6RIl1l/QrBqTFvvQm', 1, '2021-11-20 16:57:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tasks`
--
ALTER TABLE `tasks`
  ADD CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
