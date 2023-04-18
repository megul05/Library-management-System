-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2023 at 08:21 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_reg`
--

CREATE TABLE `log_reg` (
  `id` int(11) NOT NULL,
  `fullname` varchar(186) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `log_reg`
--

INSERT INTO `log_reg` (`id`, `fullname`, `email`, `password`) VALUES
(1, 'megul', 'megulraj05@gmail.com', '$2y$10$HS0Hpw61utB.D1Md7ajuSOjk.HbF.Pnd51EonzZsaFk7rvSDeOs1W'),
(2, 'saravanan', 'abimehulsar@gmail.com', '$2y$10$NZ1p..5uJb4THb8LK7ctBeTC3NSAe/fU8G0ergMocI06lJ/u2hdvC'),
(3, 'megul', 'megulraj5@gmail.com', '$2y$10$ACBHKPIb9DHS9tm73V4GHupfvV2IJHkLw5.KdmTPDN7h6G0IF71b2');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `title`, `author`, `publish_date`, `subject`) VALUES
(1, 'The Full Stack Developer', 'Chris Northwood', '2018-10-01', 'Full Stack'),
(2, 'Total Quality Management', 'P.N. Harikumar & Susha D.', '2023-01-01', 'Toatl Quality Management'),
(3, 'Machine learning', 'McGraw Hill', '1970-01-01', 'Machine Learning'),
(4, 'Database Management Systems', 'Rajiv Chopra', '2016-01-01', 'Database Management Systems'),
(5, 'Core Java An Integrated Approach', 'Dr. R. Nageswara Rao', '2003-01-01', 'Java Progarmming'),
(6, 'The Java Language Specification', 'James J. Gosling', '1996-04-01', 'Java Programming'),
(7, 'C++ programming language', 'Bjarne Stroustrup', '1985-10-03', 'C++ Programming'),
(8, 'The C Programming Language', 'Prentice Hall', '1978-05-04', 'C Programming'),
(9, 'Computer Networks', 'Tanenbaum', '2014-07-01', 'Computer Networks'),
(10, 'Full Stack Web Development For Beginners', 'Riaz Ahmed ', '2017-02-16', 'Full Stack Web Development'),
(11, 'Matoshree', 'Sumitra Mahajan', '2023-06-15', 'English Novel'),
(12, 'Unfinished', 'Priyanka Chopra Jonas', '2023-09-03', 'English Novel'),
(13, 'The Full Stack Developer Edition 2', 'Chris Northwood', '2019-06-14', 'Full Stack');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_reg`
--
ALTER TABLE `log_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log_reg`
--
ALTER TABLE `log_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
