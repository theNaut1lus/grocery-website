-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2023 at 01:53 AM
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
-- Database: `assignment1`
--
CREATE DATABASE IF NOT EXISTS `assignment1` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `assignment1`;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`product_id`, `quantity`) VALUES
(1001, '2'),
(2002, '5'),
(3001, '2');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(20) DEFAULT NULL,
  `unit_price` float(8,2) DEFAULT NULL,
  `unit_quantity` varchar(15) DEFAULT NULL,
  `in_stock` int(10) UNSIGNED DEFAULT NULL,
  `image_index` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `unit_price`, `unit_quantity`, `in_stock`, `image_index`) VALUES
(1000, 'Fish Fingers', 2.55, '500 gram', 1500, '/images/Fish fingers 375g.jpg'),
(1001, 'Fish Fingers', 5.00, '1000 gram', 750, '/images/Fish fingers 1kg.jpg'),
(1002, 'Hamburger Patties', 2.35, 'Pack 10', 1200, '/images/Burger patties 10.jpg'),
(1003, 'Shelled Prawns', 6.90, '250 gram', 300, '/images/Raw prawns 1kg.jpg'),
(1004, 'Tub Ice Cream', 1.80, 'I Litre', 800, '/images/Ice cream 1L.jpg'),
(1005, 'Tub Ice Cream', 3.40, '2 Litre', 1200, '/images/Ice cream 2L.jpg'),
(2000, 'Panadol', 3.00, 'Pack 24', 2000, '/images/Panadol children 12.jpg'),
(2001, 'Panadol', 5.50, 'Bottle 50', 1000, '/images/Panadol rapid 20.jpg'),
(2002, 'Bath Soap', 2.60, 'Pack 6', 500, '/images/Bar soap.jpg'),
(2003, 'Garbage Bags Small', 1.50, 'Pack 10', 500, '/images/Garbage bags 30.jpg'),
(2004, 'Garbage Bags Large', 5.00, 'Pack 50', 300, '/images/Garbage bags 60.jpg'),
(2005, 'Washing Powder', 4.00, '1000 gram', 800, '/images/Washing powder 4kg.jpg'),
(3000, 'Cheddar Cheese', 8.00, '500 gram', 1000, '/images/Brie cheese 250g.jpg'),
(3001, 'Cheddar Cheese', 15.00, '1000 gram', 1000, '/images/Tasty cheese 500g.jpg'),
(3002, 'T Bone Steak', 7.00, '1000 gram', 200, '/images/Steak rump 500g.jpg'),
(3003, 'Navel Oranges', 3.99, 'Bag 20', 200, '/images/Navel oranges.jpg'),
(3004, 'Bananas', 1.49, 'Kilo', 400, '/images/Bananas.jpg'),
(3005, 'Peaches', 2.99, 'Kilo', 500, '/images/Peaches.jpg'),
(3006, 'Grapes', 3.50, 'Kilo', 200, '/images/Grapes.jpg'),
(3007, 'Apples', 1.99, 'Kilo', 500, '/images/Apples.jpg'),
(4000, 'Earl Grey Tea Bags', 2.49, 'Pack 25', 1200, '/images/Tea 10 pack.jpg'),
(4001, 'Earl Grey Tea Bags', 7.25, 'Pack 100', 1200, '/images/Tea 50 pack.jpg'),
(4002, 'Earl Grey Tea Bags', 13.00, 'Pack 200', 800, '/images/Tea 100 pack.jpg'),
(4003, 'Instant Coffee', 2.89, '200 gram', 500, '/images/Coffee 300g.jpg'),
(4004, 'Instant Coffee', 5.10, '500 gram', 500, '/images/Coffee 500g.jpg'),
(4005, 'Chocolate Bar', 2.50, '500 gram', 300, '/images/chocolate-bar.jpg'),
(5000, 'Dry Dog Food', 5.95, '5 kg Pack', 400, '/images/Dog food 6.8kg.jpg'),
(5001, 'Dry Dog Food', 1.95, '1 kg Pack', 400, '/images/Dog food 2.2kg.jpg'),
(5002, 'Bird Food', 3.99, '500g packet', 200, '/images/Bird food 2kg.jpg'),
(5003, 'Cat Food', 2.00, '500g tin', 200, '/images/Cat food.jpg'),
(5004, 'Fish Food', 3.00, '500g packet', 200, '/images/Fish food 90g.jpg'),
(2006, 'Laundry Bleach', 3.55, '2 Litre Bottle', 500, '/images/laundry-bleach.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
