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
-- Database: `cart`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`) VALUES
(1, 'Purpe T-shirt', 'bright-purple-t-shirt.jpg', 6.99),
(2, 'Blue T-shirt', 'cobalt-blue-t-shirt.jpg', 5.99),
(3, 'Light green T-shirt', 'light-green-t-shirt.jpg', 5.99),
(4, 'Gray T-shirt', 'grey-t-shirt.jpg', 5.99),
(5, 'Biege shirt', 'biege-shirt.jpg', 9.99),
(6, 'Blue shirt', 'blue-shirt.jpg', 8.99),
(7, 'Green shirt', 'green-shirt.jpg', 8.99),
(8, 'Grey shirt', 'grey-shirt.jpg', 8.99),
(9, 'Snow white shirt', 'snow-white-shirt.jpg', 9.5),
(10, 'Red shirt', 'red-shirt.jpg', 8.99),
(11, 'White shirt', 'white-shirt.jpg', 6.99),
(12, 'Black pants', 'black-pants.jpg', 10.99),
(13, 'Camo pants', 'camo-pants.jpg', 11.99),
(14, 'Grey pants', 'grey-pants.jpg', 10.99),
(15, 'Striped pants', 'striped-pants.jpg', 12.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
