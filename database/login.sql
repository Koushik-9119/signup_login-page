-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 07:05 PM
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
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `users_login`
--

CREATE TABLE `users_login` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_login`
--

INSERT INTO `users_login` (`id`, `name`, `username`, `password`) VALUES
(1, 'koushik', 'koushik', '$2y$10$oe9K04yPBH.BmQ6DF2MEXO73ZsIogG9j8owuHqB03U1TDCd/n/2nK'),
(2, 'koushik', 'm.koushik.ias.cs@gmail.com', '$2y$10$RPhqKWEFU5xKqeH3Q.00Y.CeZJ0bQzXVnN1.wQJdab95Ohq/mKq8q'),
(3, 'TechnoHacks EduTech', 'TechnoHacks EduTech', '$2y$10$J5CJuKNQYFiFLh8QjYewI.Mdc86T9RKaG/zJzjVhlO.yVtgFYFQ2m');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users_login`
--
ALTER TABLE `users_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users_login`
--
ALTER TABLE `users_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
