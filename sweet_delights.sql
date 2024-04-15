-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql302.infinityfree.com
-- Generation Time: Mar 21, 2024 at 01:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `if0_35948912_sweet_delights`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `username`, `password`, `email`, `first_name`, `last_name`) VALUES
(1, 'Aimecol', 'Rwanda@123', 'aimecol314@gmail.com', 'Aime Claudien', 'MAZIMPAKA');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `username` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `email`, `password`, `first_name`, `last_name`, `address`, `phone_number`, `username`) VALUES
(1, 'nendayishimiye@gmail.com', 'star', 'ndayishimiye', 'eugene', 'gisenyi', '0785750117', 'ne'),
(2, 'eugenendayisaba33@gmail.com', 'manzi', 'manzi', 'fredy', 'kigali', '0786543217', 'manzi'),
(3, 'patrick@gmail.com', '12345', 'ndizeyi', 'patrick', 'kigali', '0789667890', 'pazo'),
(4, 'mhonorefrank@gmail.com', '1234567890', 'MWIZERWA', 'Honore Frank', 'Musanze Rwanda', '0791869070', 'mhonore'),
(5, 'aimecol314@gmail.com', 'Rwanda@123', 'Mazimpaka', 'Aime Claudien', 'Kigali', '0789375245', 'Aimecol');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `quantity` int(5) NOT NULL,
  `total_amount` decimal(10,2) NOT NULL,
  `payment_method` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `featured_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `pname`, `price`, `featured_image`) VALUES
(1, 'Pizza', '5500.00', 'upload_image/IMG-65cf2ecf468a68.34473720.png'),
(2, 'Chocolate Bread', '3000.00', 'upload_image/IMG-65cf2f4c26b722.20448432.png'),
(3, 'sweet biraha', '1000.00', 'upload_image/IMG-65cf2f8455bb53.74305898.png'),
(4, 'beef burger', '5000.00', 'upload_image/IMG-65cf302dcc1a24.16054454.png'),
(5, 'Chocolate cake', '10000.00', 'upload_image/IMG-65cf3144667984.06437302.png'),
(6, 'sweet pancakes', '2000.00', 'upload_image/IMG-65cf333dc71465.26704837.png'),
(7, 'Sesame Seed Bread', '3000.00', 'upload_image/IMG-65cf34a519c978.58405533.png'),
(8, 'Spicy Chapati', '2000.00', 'upload_image/IMG-65cf355f594f93.09231832.png'),
(9, 'Birthday cakes', '20000.00', 'upload_image/IMG-65cf3597d5f132.24180274.png'),
(10, 'Spicy Donuts', '1000.00', 'upload_image/IMG-65cf35c1e6a772.35864828.png'),
(11, 'Long bread', '5000.00', 'upload_image/IMG-65cf36454993d6.68409644.png'),
(12, 'Black Forest Cake', '10000.00', 'upload_image/IMG-65cf37f250e902.71599082.png'),
(13, 'Coffee cake', '15000.00', 'upload_image/IMG-65cf381c024a70.63731384.png'),
(14, 'Biraha', '800.00', 'upload_image/IMG-65cf3841ed7a78.06991690.png'),
(15, 'Mixed Biraha', '1500.00', 'upload_image/IMG-65cf38c1b8ccc3.47461366.png'),
(16, 'backed rice balls', '20000.00', 'upload_image/IMG-65cf38ebb62b46.73251246.png'),
(17, 'Hot Dog', '2500.00', 'upload_image/IMG-65d07ae5a0a222.53533061.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `name`, `email`, `comment`) VALUES
(1, 'eugene', 'nendayishimiye@gmail.com', 'good'),
(2, 'Aimecol', 'aimecol314@gmail.com', 'thx\r\n'),
(4, 'Toloveaimer', 'cyuzuzoevode5@gmail.com', 'Aimecol my guy'),
(5, 'Toloveaimer', 'ninadine005@gmail', 'Radio'),
(6, 'Toloveaimer', 'ninadine005@gmail', 'Radio'),
(7, 'bujeni', 'cyuzuzoevode5@gmail.com', 'Thx a lot'),
(8, 'Sandra', 'Sando@gmail.com', 'You did a great job bro'),
(9, 'Bertin ', 'gakwayabertin167@gmail.com', 'Hope youâ€™re doing well '),
(10, 'yassin', 'nyassinkante02@gmail.com', 'hello sir, i would like ur company to come and bake at my place at the day of eidil-fitri at 10AM.\r\n\r\n\r\nTHANKS ALOT');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
