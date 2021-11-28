-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 09:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `popup_webapp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_id` int(11) NOT NULL,
  `user_name` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `home_decor`
--

CREATE TABLE `home_decor` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `home_decor`
--

INSERT INTO `home_decor` (`id`, `name`, `price`, `quantity`, `image_path`) VALUES
(1002, 'Tri colour Vases', 89, 5, 'images/decor1.jpg'),
(1003, 'Tall Green Vase', 49.5, 4, 'images/decor2.jpg'),
(1004, 'Wall Print Mixed Strings', 189.9, 4, 'images/decor3.jpg'),
(1005, 'Circular Weave', 99.99, 8, 'images/decor4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `olivia_sage`
--

CREATE TABLE `olivia_sage` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `olivia_sage`
--

INSERT INTO `olivia_sage` (`id`, `name`, `price`, `quantity`, `image_path`) VALUES
(2002, 'String of Turtles', 59.99, 8, 'images/plant2.jpg'),
(2003, 'pepperomia', 39.99, 9, 'images/plant3.jpg'),
(2004, 'Ficus Tineke', 69.99, 10, 'images/plant4.jpg'),
(2005, 'Thai Monstera', 359.99, 5, 'images/plant5.jpg'),
(2006, 'Plant Food', 14.99, 12, 'images/plant6.jpg'),
(2007, 'Monstera', 49.99, 12, 'images/plant1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_cart`
--

CREATE TABLE `order_cart` (
  `order_id` int(11) NOT NULL,
  `item_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_cart`
--

INSERT INTO `order_cart` (`order_id`, `item_name`, `price`, `quantity`) VALUES
(3, 'Monstera', 49.99, 1),
(5, 'Tri colour Vases', 356, 4);

-- --------------------------------------------------------

--
-- Table structure for table `panade_riya`
--

CREATE TABLE `panade_riya` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image_path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `panade_riya`
--

INSERT INTO `panade_riya` (`id`, `name`, `price`, `quantity`, `image_path`) VALUES
(3001, 'Sourdough', 8.5, 10, 'images/bread1.png'),
(3002, 'Multi Seeded Sourdough', 9.5, 10, 'images/bread2.png'),
(3003, 'Nutella Babka', 7.5, 10, 'images/bread3.png'),
(3004, 'Foccacia', 8.5, 10, 'images/bread5.png'),
(3005, 'Baguette', 4.5, 10, 'images/bread4.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `email_address`, `password`, `role`) VALUES
(1, 'admin', 'admin@popup.com', 'popup', 'admin'),
(2, 'rhea', 'rhea@gmail.com', '123', 'customer'),
(1001, 'bob', 'bob@gmail.com', 'marley', 'customer'),
(1004, 'ff', 'rhea', 'fff', 'customer'),
(1005, 'dd', 'ddd', 'dddd', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `home_decor`
--
ALTER TABLE `home_decor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `olivia_sage`
--
ALTER TABLE `olivia_sage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_cart`
--
ALTER TABLE `order_cart`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `panade_riya`
--
ALTER TABLE `panade_riya`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_decor`
--
ALTER TABLE `home_decor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;

--
-- AUTO_INCREMENT for table `olivia_sage`
--
ALTER TABLE `olivia_sage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2008;

--
-- AUTO_INCREMENT for table `order_cart`
--
ALTER TABLE `order_cart`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `panade_riya`
--
ALTER TABLE `panade_riya`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3006;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1006;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
