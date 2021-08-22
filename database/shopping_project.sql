-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 05:38 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopping_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryId` int(11) NOT NULL,
  `categoryName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryId`, `categoryName`) VALUES
(1, 'clothes'),
(2, 'shoes'),
(3, 'sport material');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `productId` int(11) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `categoryId` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `code` varchar(11) DEFAULT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`productId`, `productName`, `price`, `description`, `categoryId`, `userId`, `image`, `code`, `date`) VALUES
(45, 'GUCCI', 60000, 'Happy with GUCCI', 3, 4, 'bag.webp', NULL, '2021-08-22 17:42:42'),
(46, 'adidas', 100000, 'The best thing for everyone', 3, 5, 'clothes-ad.jpg', NULL, '2021-08-22 17:42:42'),
(47, 'd&G', 150000, 'high quality ', 2, 6, 'd&g-shoes.jpg', NULL, '2021-08-22 17:42:42'),
(48, 'Adidas', 200000, 'everyday with Adidas', 3, 7, 'adidas-shoes.jpg', NULL, '2021-08-22 17:42:42'),
(49, 'NiKi', 50000, 'Enjoy with brand clothes with higher quality', 2, 6, 'clothes.jpg', NULL, '2021-08-22 17:42:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `firstName` varchar(11) NOT NULL,
  `lastName` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(11) NOT NULL,
  `role` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `firstName`, `lastName`, `email`, `password`, `role`) VALUES
(4, 'Sreyngit', 'Doeurm', 'sreyngit.doeurm@student.passerellesnumeriques.org', '$2y$10$lNrT', 'user'),
(5, 'Narima', 'In', 'narimain324@gmail.com', '$2y$10$cfUb', 'admin'),
(6, 'ma', 'ma', 'mama456@gmail.com', '$2y$10$kk0M', 'user'),
(7, 'Jo JO', 'Ku', 'jojoku4r5@gmail.com', '$2y$10$ca3a', 'user'),
(8, 'mo', 'mo', 'momo7u8@gmail.com', '$2y$10$q66b', 'user'),
(9, 'sreyngitdoe', 'Doeurm', 'sreyngit.doeurm@student.passerellesnumeriques.org', '$2y$10$3u.7', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productId`),
  ADD KEY `products_ibfk_1` (`categoryId`),
  ADD KEY `products_ibfk_2` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`categoryId`) REFERENCES `category` (`categoryId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
