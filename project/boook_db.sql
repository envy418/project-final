-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2023 at 08:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boook db`
--

-- --------------------------------------------------------

--
-- Table structure for table `boookform`
--

CREATE TABLE `boookform` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(355) NOT NULL,
  `location` varchar(255) NOT NULL,
  `guests` int(255) NOT NULL,
  `arrivals` date NOT NULL,
  `leaving` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boookform`
--

INSERT INTO `boookform` (`id`, `name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`) VALUES
(1, 'Bibek pandeya', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 2, '0000-00-00', '9090-09-08'),
(2, 'Bibek pandeya', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 5, '0000-00-00', '2023-09-09'),
(3, 'Bibek pandeya', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 1, '0000-00-00', '2222-02-22'),
(4, 'Bibek pandeya', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 4, '0000-00-00', '2023-09-22'),
(5, 'Bibek pandeya', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 1, '2111-12-12', '1111-11-11'),
(6, 'Bibek pandeya', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'Annapurna base camp', 4, '2023-09-17', '2023-09-20'),
(7, 'sdddd', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 2, '5566-08-09', '0006-05-05'),
(8, 'Bibek pandeya', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 3, '1212-12-12', '1111-12-12'),
(9, 'abc', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 1, '1111-12-12', '1222-12-12'),
(10, 'Bibek pandeya', 'cricketerbibek619@gmail.com', '9806951074', 'butwal ', 'mardihimal', 2, '9999-09-09', '8888-08-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `boookform`
--
ALTER TABLE `boookform`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `boookform`
--
ALTER TABLE `boookform`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
