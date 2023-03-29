-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2023 at 11:30 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `post_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `post` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post`, `active`, `date_added`, `user_id`) VALUES
(2, 'new ', 'sdjsajdk', 1, '2023-03-29 20:03:13', 5),
(3, 'xsdds', 'sdfsafsfds', 1, '2023-03-29 20:06:16', 5),
(4, 'dasdsa', 'kjjkn', 1, '2023-03-29 20:43:47', 5),
(5, 'nnvn mnvb', 'nbvnmvmvb', 1, '2023-03-29 20:43:51', 5),
(6, 'nbvnvmnb', 'nbvmnbvmnv', 1, '2023-03-29 20:43:57', 5),
(7, 'uikjhfhfcgf', 'mmngm nvhm', 1, '2023-03-29 20:44:02', 5),
(8, 'sadkjhgsajghasdhj', 'skljhvdskhdskhsa', 1, '2023-03-29 20:44:07', 5),
(9, 'dsadjhfsajgfb', 'mnc,vmba,fjdb', 1, '2023-03-29 20:44:11', 5),
(10, '[pqiododsaikdgsajdvsand', 'sadlkasdkjsahdksad', 1, '2023-03-29 20:44:16', 5),
(11, 'adsaa', 'csdssadf', 1, '2023-03-29 20:44:49', 5),
(12, 'test1', 'test1test1test1test1test1test1test1test1test1test1', 1, '2023-03-29 20:44:57', 5),
(13, 'test1qs', 'test1saaddsadsa', 1, '2023-03-29 20:45:04', 5),
(14, 'test new', 'teadfksnsdn', 1, '2023-03-29 21:03:24', 6),
(15, 'dasdsasa', 'sadsadasda', 1, '2023-03-29 21:08:22', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `status`) VALUES
(1, 'Sanjeev', 'sanjeev@gmail.com', '12345', '1'),
(2, 'Rahul', 'rahul@gamail.com', '12345', '1'),
(3, 'Alok Kumar Singh', 'alok@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', '1'),
(4, 'Rajeev', 'rajeev@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '1'),
(5, 'abc', 'abc@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '1'),
(6, 'new', 'new@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
