-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2017 at 03:35 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_12_5`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL DEFAULT '1000000',
  `id_type` int(11) NOT NULL,
  `update` datetime DEFAULT CURRENT_TIMESTAMP,
  `promotion_price` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `id_type`, `update`, `promotion_price`) VALUES
(2, 'TI VI SAMSUNG ', 'TI VI SAMSUNG TI VI SAMSUNG TI VI SAMSUNG ', 12000000, 1, '2017-06-19 21:16:23', 10000000),
(3, 'Tủ lạnh SAMSUNG ', 'TI VI SAMSUNG TI VI SAMSUNG TI VI SAMSUNG ', 10000000, 1, '2017-06-19 21:16:23', 0),
(4, 'TI VI sony ', 'TI VI sony TI VI sony TI VI sony ', 14000000, 1, '2017-06-19 21:16:23', 0),
(6, 'Sản phẩm Tủ lạnh Panasonic ', 'Sản phẩm Tủ lạnh Panasonic Sản phẩm Tủ lạnh Panasonic Sản phẩm Tủ lạnh Panasonic Sản phẩm Tủ lạnh Panasonic ', 20000000, 1, '2017-06-19 21:16:23', 0),
(7, 'Điện thoại SAMSUNG S8 plus', 'Điện thoại SAMSUNG S8 plusĐiện thoại SAMSUNG S8 plus', 20000000, 3, '2017-06-21 20:25:25', 18000000),
(8, 'Điện thoại SAMSUNG S7 plus', 'Điện thoại SAMSUNG S7 plus Điện thoại SAMSUNG S7 plus', 15000000, 3, '2017-06-21 20:18:53', 13000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type` (`id_type`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type`) REFERENCES `type_products` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
