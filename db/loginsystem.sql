-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2021 at 05:47 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `idAdmins` int(11) NOT NULL,
  `uidAdmins` tinytext NOT NULL,
  `pwdAdmins` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`idAdmins`, `uidAdmins`, `pwdAdmins`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'Bane94', 'drcelicbane@gmail.com', '$2y$10$/C7NpeoI7o7Qnxt574oOqeKPw/UPfIEpr1Ne0KdWZsAzgDSDDDfWS'),
(2, 'Strahinja094', 'banedrcelic@gmail.com', '$2y$10$vNvXyDTDF.q8D0ni2f3A9e5Fjj0TYxmagLOcj1NUcLqC8HOG3eBI2'),
(3, 'bane123', 'bane123@gmail.com', '$2y$10$GRS3Jx8UNaiCXj6Gv/H9oedglts94wZAs0pBLy4qN.dpcTbvO8RjC'),
(4, 'strahinja123', 'strahinja123@gmail.com', '$2y$10$gXVJqswxKUyWU4XbYwDi8e/gVmQXzgHBy0u2pQ1o2YLD.eRV2a9U6'),
(5, 'Mira123', 'mira123@gmail.com', '$2y$10$CjJJh2IFkxqsP3l.D7qYbe8gCsLLxr.rGLExOfBA0AgeTltjB6QlG'),
(6, 'Ivana123', 'ivana123@nesto.com', '$2y$10$hKTukIpvSTjPfxCnIZHkc.g5tb3u6wza620I53VGpaHCa0dt2jvTK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idAdmins`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `idAdmins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
