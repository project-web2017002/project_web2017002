-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 01:57 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `optimus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_status`
--

CREATE TABLE `admin_status` (
  `num` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_status`
--

INSERT INTO `admin_status` (`num`, `admin_id`, `status`) VALUES
(1, 1, 0),
(2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `advt_id` int(11) NOT NULL,
  `advt_type` varchar(100) NOT NULL,
  `advt_cat` varchar(10) NOT NULL,
  `advt_user_type` varchar(40) NOT NULL,
  `advt_consumer_id` int(11) NOT NULL,
  `advt_file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `listed_products`
--

CREATE TABLE `listed_products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `pro_description_file` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_counter` int(11) NOT NULL,
  `unique_order_number` varchar(30) NOT NULL,
  `order_by` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `counter` int(11) NOT NULL,
  `unique_order_number` varchar(30) NOT NULL,
  `status` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `policy_agreement`
--

CREATE TABLE `policy_agreement` (
  `counter` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `above_18` int(2) NOT NULL,
  `TnC` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `policy_agreement`
--

INSERT INTO `policy_agreement` (`counter`, `user_id`, `above_18`, `TnC`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `realadmin`
--

CREATE TABLE `realadmin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(30) NOT NULL,
  `admin_contact` varchar(11) NOT NULL,
  `admin_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `realadmin`
--

INSERT INTO `realadmin` (`admin_id`, `admin_name`, `admin_email`, `admin_contact`, `admin_password`) VALUES
(1, 'Admin1', 'admin1@gmail.com', '1234567890', '$2y$10$8PGvL9vJnVnLBwAFl7TiFed4eZKkbu2Lp6zPj4nW8wyVwafEXQT/O'),
(2, 'Admin2', 'admin2@gmail.com', '0123456789', '$2y$10$spWtDhkwo3V9eJ91KDK/zOwgoLjXpOaHRSghwFV/F1smH37Wat8/W');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `no` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`no`, `user_id`, `status`) VALUES
(1, 1, 0),
(2, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `verified_user`
--

CREATE TABLE `verified_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_login_id` varchar(30) NOT NULL,
  `user_contact` varchar(11) NOT NULL,
  `user_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verified_user`
--

INSERT INTO `verified_user` (`user_id`, `user_name`, `user_login_id`, `user_contact`, `user_password`) VALUES
(1, 'Akash Chouhan', 'ak@gmail.com', '8968336242', '$2y$15$xlEeqyR62jB.9anM2358Ou9cKd5XGO60JScgkU8pt0Ye7GYzr4ahi'),
(2, 'test', 'test@gmail.com', '7894561236', '$2y$15$CaOVGwVk3DAYuSds4UDv/.ckClKJbgdsCPDqjqUYLpxjNdAh7ADW6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_status`
--
ALTER TABLE `admin_status`
  ADD PRIMARY KEY (`num`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`advt_id`);

--
-- Indexes for table `listed_products`
--
ALTER TABLE `listed_products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_counter`),
  ADD UNIQUE KEY `unique_order_number` (`unique_order_number`),
  ADD KEY `order_by` (`order_by`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD KEY `unique_order_number` (`unique_order_number`);

--
-- Indexes for table `policy_agreement`
--
ALTER TABLE `policy_agreement`
  ADD PRIMARY KEY (`counter`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `realadmin`
--
ALTER TABLE `realadmin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `verified_user`
--
ALTER TABLE `verified_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_status`
--
ALTER TABLE `admin_status`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `advt_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `listed_products`
--
ALTER TABLE `listed_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_counter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `policy_agreement`
--
ALTER TABLE `policy_agreement`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `realadmin`
--
ALTER TABLE `realadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `verified_user`
--
ALTER TABLE `verified_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_status`
--
ALTER TABLE `admin_status`
  ADD CONSTRAINT `admin_status_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `realadmin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`order_by`) REFERENCES `verified_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `listed_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_status`
--
ALTER TABLE `order_status`
  ADD CONSTRAINT `order_status_ibfk_1` FOREIGN KEY (`unique_order_number`) REFERENCES `orders` (`unique_order_number`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `policy_agreement`
--
ALTER TABLE `policy_agreement`
  ADD CONSTRAINT `policy_agreement_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `verified_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `verified_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
