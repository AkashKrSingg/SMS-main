-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 12:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `stu_details`
--

CREATE TABLE `stu_details` (
  `id` int(6) NOT NULL,
  `stu_name` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL,
  `parent` varchar(200) NOT NULL,
  `added` datetime NOT NULL DEFAULT current_timestamp(),
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stu_details`
--

INSERT INTO `stu_details` (`id`, `stu_name`, `class`, `parent`, `added`, `modified`) VALUES
(2, 'Akash Kumar Singh', 'XII', 'Birendra Kumar Singh', '2022-07-15 12:52:15', '0000-00-00 00:00:00'),
(7, 'Aaroshi', 'B.Ed', 'Manik Singh', '2022-07-15 15:38:23', '0000-00-00 00:00:00'),
(8, 'Avinash Singh', 'MBA', 'Birendra Singh', '2022-07-15 15:41:48', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stu_details`
--
ALTER TABLE `stu_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stu_details`
--
ALTER TABLE `stu_details`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
