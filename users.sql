-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2024 at 04:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `address` varchar(25) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `phone_number` int(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `address`, `blood_group`, `phone_number`, `date`) VALUES
(1, 'anju', 'maravana', 'A', 323443435, '2024-02-07'),
(9, 'admin1', 'cxcx', 'O', 3323213, '2024-02-23'),
(17, 'anjaly', 'Abcmk', 'A+', 5656756, '2024-02-23'),
(24, 'fffc', 'sasakjklj', 'B', 234456, '2024-02-24'),
(30, 'rish', 'sdhhsdah', 'ab', 2323232, '2024-02-24'),
(31, 'anjaluii', 'gvjvvv', 'o', 32343535, '2024-02-14'),
(32, 'fdfdfd', 'ADSF', 'A+', 23432246, '2024-02-28'),
(39, 'DFDF', 'DFFGFGG', 'a+', 2325442, '2024-02-28'),
(40, 'ASDF', 'DGFCGJCGHS', 'A', 43535465, '2024-02-28');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
