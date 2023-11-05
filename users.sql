-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 04, 2023 at 07:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackerkernal_task`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'sandhya', 'sandya@gmail.com', '7604797377', '2023-11-02 15:31:54', '2023-11-02 15:31:54'),
(2, 'Dipti', 'admin@gmail.com', '7534797398', '2023-11-02 15:33:52', '2023-11-02 15:33:52'),
(3, 'Kamlesh', 'kamlesh@gmail.com', '7593793793', '2023-11-02 15:34:24', '2023-11-02 15:34:24'),
(4, 'Name', 'name@gmail.com', '1310830131', '2023-11-02 15:34:50', '2023-11-02 15:34:50'),
(5, 'urmila', 'urmila@gmail.com', '7589379733', '2023-11-02 16:34:02', '2023-11-02 16:34:02'),
(6, 'Dipak', 'dipak@gmail.com', '8034750733', '2023-11-02 16:36:02', '2023-11-02 16:36:02'),
(7, 'nayan', 'nayan@gmail.com', '7985375938', '2023-11-02 16:47:11', '2023-11-02 16:47:11'),
(8, 'raj', 'raj@gmail.com', '7432974924', '2023-11-02 17:30:56', '2023-11-02 17:30:56'),
(9, 'kamal', 'kamal@gmail.com', '74982792247', '2023-11-03 08:44:03', '2023-11-03 08:44:03'),
(10, 'monu', 'monu@gmail.com', '7427492792', '2023-11-03 18:21:29', '2023-11-03 18:21:29'),
(11, 'kam', 'kam@gmail.com', '578937932', '2023-11-03 18:30:36', '2023-11-03 18:30:36'),
(12, 'Deepti', 'deepti123@gmail.com', '1234567890', '2023-11-04 18:04:00', '2023-11-04 18:04:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
