-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2021 at 01:06 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expo_ecom_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

CREATE TABLE `buy` (
  `b_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `item_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `item_id`) VALUES
(81, 1, 1),
(84, 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `item_id` int(10) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_image` varchar(50) NOT NULL,
  `p_register` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`item_id`, `p_name`, `p_price`, `p_image`, `p_register`) VALUES
(1, 'Lenovo Ideapad Gaming 3 Ryzen 5 Hexa Core 4600H', 62990, 'assests/lap-1.jpeg', '2021-08-30 16:23:12'),
(2, 'HP Pavilion Gaming Ryzen 7 Octa Core 4800H', 79990, 'assests/lap-2.jpeg', '2021-08-30 12:55:32'),
(3, 'MSI GF63 Thin Core i7 10th Gen', 69990, 'assests/lap-3.jpeg', '2021-08-29 23:44:25'),
(4, 'HP Pavilion Core i5 11th Gen', 66990, 'assests/lap-4.jpeg', '2021-08-29 23:45:35'),
(5, 'ASUS Core i3 10th Gen', 38990, 'assests/lap-5.jpeg', '2021-08-29 23:48:51'),
(6, 'HP 15-ec1105AX Ryzen 5 Hexa Core', 59990, 'assests/lap-6.jpeg', '2021-08-29 23:48:51'),
(7, 'DELL Vostro Core i3 10th Gen', 39190, 'assests/lap-7.jpeg', '2021-08-29 23:48:51'),
(8, 'DELL Inspiron Core i3 11th Gen', 45490, 'assests/lap-8.jpeg', '2021-08-29 23:48:51'),
(9, 'POCO X3 Pro', 18990, 'assests/mobile-1.jpeg', '2021-08-30 15:24:17'),
(10, 'Vivo X60', 39990, 'assests/mobile-2.jpeg', '2021-08-30 15:26:02'),
(11, 'realme GT 5G', 37990, 'assests/mobile-3.jpeg', '2021-08-30 15:26:59'),
(12, 'SAMSUNG Galaxy F62', 25990, 'assests/mobile-4.jpeg', '2021-08-30 15:29:39'),
(13, 'Mi 10T', 34990, 'assests/mobile-5.jpeg', '2021-08-30 15:29:39'),
(14, 'OPPO Reno3 Pro ', 25290, 'assests/mobile-6.jpeg', '2021-08-30 15:29:39'),
(15, 'Mi 4A Horizon Edition', 17499, 'assests/Tv-1.jpeg', '2021-08-30 15:32:50'),
(16, 'SONY', 80790, 'assests/Tv-2.jpeg', '2021-08-30 15:37:32'),
(17, 'Thomson OATHPRO Series', 38999, 'assests/Tv-3.jpeg', '2021-08-30 15:37:32'),
(18, 'SAMSUNG', 31999, 'assests/Tv-4.jpeg', '2021-08-30 15:37:32'),
(19, 'Nokia', 26999, 'assests/Tv-5.jpeg', '2021-08-30 15:37:32'),
(20, 'LG', 33999, 'assests/Tv-6.jpeg', '2021-08-30 15:37:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'Santhosh', 'Patkar', '2021-08-30 16:55:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy`
--
ALTER TABLE `buy`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD UNIQUE KEY `cart_id` (`cart_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD UNIQUE KEY `p_id` (`item_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buy`
--
ALTER TABLE `buy`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
