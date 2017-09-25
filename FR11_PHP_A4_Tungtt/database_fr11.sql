-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2017 at 01:00 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_fr11`
--

-- --------------------------------------------------------

--
-- Table structure for table `trainee`
--

CREATE TABLE `trainee` (
  `id` int(4) NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 NOT NULL,
  `phone` varchar(65) CHARACTER SET latin1 NOT NULL,
  `gender` varchar(255) CHARACTER SET latin1 NOT NULL,
  `country` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `trainee`
--

INSERT INTO `trainee` (`id`, `name`, `email`, `address`, `phone`, `gender`, `country`) VALUES
(13, 'Tr?n Tùng', 'tranthanhtung.everest@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(20, 'admin', 'admin@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(22, 'admin12', 'zxcwasdasd@gagga.com', 'ha noi', '01649379921', 'Mate', 'US'),
(24, 'tung', 'tung@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(26, 'tung', 'tung5@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(27, 'Tr?n Tùng123', 'tranthanhtung123123.everest@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(28, 'Tr?n Tùng1123', 'tranthanhtung31232.everest@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(29, 'Tr?n Tùng', 'tranthanhtun3123123g.everest@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(31, 'admin1233', 'admin1232@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(32, '123123', 'tranthan123123htung.everest@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(34, 'tung123123', 'tra123123nthanhtung.everest@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam'),
(35, 'tung addsd', 'tranthan123123tung.everest@gmail.com', 'Hoang Ma1', '01649379921', 'Mate', 'Vietnam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trainee`
--
ALTER TABLE `trainee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trainee`
--
ALTER TABLE `trainee`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
