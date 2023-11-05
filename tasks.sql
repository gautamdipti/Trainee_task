-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Nov 04, 2023 at 07:34 PM
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
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `id` int(11) NOT NULL,
  `task_details` varchar(255) NOT NULL,
  `task_type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `assigned_users` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `task_details`, `task_type`, `status`, `assigned_users`, `created_at`, `updated_at`) VALUES
(1, 'english', 'A', '2', '3', '2023-11-02 18:50:10', '2023-11-02 18:50:10'),
(2, 'english', 'A', '2', '3', '2023-11-02 18:50:11', '2023-11-02 18:50:11'),
(3, 'math', 'A', '1', '2', '2023-11-03 18:04:30', '2023-11-03 18:04:30'),
(4, 'math', 'B', '1', '3', '2023-11-04 11:38:32', '2023-11-04 11:38:32'),
(5, 'English', 'B', '1', '2', '2023-11-04 11:53:21', '2023-11-04 11:53:21'),
(6, 'Science', 'B', '1', '4', '2023-11-04 16:40:47', '2023-11-04 16:40:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
