-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2017 at 08:41 PM
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
-- Table structure for table `featpro`
--

CREATE TABLE `featpro` (
  `num` int(11) NOT NULL,
  `byAdmin` int(11) NOT NULL,
  `file` varchar(200) NOT NULL,
  `prod_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `featpro`
--

INSERT INTO `featpro` (`num`, `byAdmin`, `file`, `prod_id`) VALUES
(7, 1, '2017-09-14-08-04-05pm-1', 3),
(8, 1, '2017-09-14-08-11-07pm-1', 6),
(9, 1, '2017-09-14-08-16-25pm-1', 8),
(10, 1, '2017-09-14-08-33-43pm-1', 12),
(11, 1, '2017-09-12-08-52-00pm-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `listed_products`
--

CREATE TABLE `listed_products` (
  `product_id` int(11) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `pro_description_file` varchar(3000) NOT NULL,
  `ref_img` varchar(200) DEFAULT NULL,
  `cost` int(15) DEFAULT NULL,
  `ref_img2` varchar(200) DEFAULT NULL,
  `ref_img3` varchar(200) DEFAULT NULL,
  `ref-img4` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listed_products`
--

INSERT INTO `listed_products` (`product_id`, `product_title`, `pro_description_file`, `ref_img`, `cost`, `ref_img2`, `ref_img3`, `ref-img4`) VALUES
(1, 'iphone 6s 32gb', '//localhost/optimus/Category/categoryId/10007/2017-09-12-08-52-00pm-1.csv', '1505229774_Apple-IPhone-PNG-Picture.png', 30000, '1505229774_large_thumb_iphone-6-black-blender-shot-base.jpg', '1505229774_apple-iphone 6s-rose gold-450x350.png', '1505229774_iphone6s-gray-select-2015_AV2.png'),
(2, 'cleaning maid required', '//localhost/optimus/Category/categoryId/10001/2017-09-14-07-59-34pm-1.csv', '1505399403_77e57e5a09caf5d188cfbf02502154c6.jpg', 6000, '1505399403_House_Cleaning_Affordable_Tracy_Mountain-House_Lathrop_River-Islands_Banta_Manteca_Stockton_Ripon_Home-Cleaning-Service_Delsol-Clean1.jpg', '1505399403_men-woman-cleaning-apartment-women-wearing-uniforms-82939095.jpg', NULL),
(3, 'We provide legal services', '//localhost/optimus/Category/categoryId/10001/2017-09-14-08-04-05pm-1.csv', '1505399668_abogado2--1500x630.jpg', 15000, '1505399669_legal-services.jpg', '1505399670_Professional-legal-services-in-Chennai--contact-SRIDHARAN-G-V-ak_WBP1895984332-1487766028_gv.jpeg', NULL),
(4, 'Road Trip from Delhi to Shimla 3days', '//localhost/optimus/Category/categoryId/10001/2017-09-14-08-07-15pm-1.csv', '1505399861_traveling-services-250x250.jpg', 30000, NULL, NULL, NULL),
(5, 'Sell', '//localhost/optimus/Category/categoryId/10002/2017-09-14-08-09-16pm-1.csv', '1505399988_house-for-sale-2.jpg', 600000, NULL, NULL, NULL),
(6, 'Buy', '//localhost/optimus/Category/categoryId/10002/2017-09-14-08-11-07pm-1.csv', '1505400110_big-house.jpg', 350000, NULL, NULL, NULL),
(7, 'Rent', '//localhost/optimus/Category/categoryId/10002/2017-09-14-08-13-47pm-1.csv', '1505400248_for_rent.jpg', 100000, NULL, NULL, NULL),
(8, 'Typist Required', '//localhost/optimus/Category/categoryId/10003/2017-09-14-08-16-25pm-1.csv', '1505400426_download.jpg', 10000, '1505400426_Freelancetypingdataentryjobs.jpg', NULL, NULL),
(9, 'Web Designer', '//localhost/optimus/Category/categoryId/10003/2017-09-14-08-23-35pm-1.csv', '1505400885_images.jpg', 45000, NULL, NULL, NULL),
(10, 'Sell A Car Maruti Suzuki Vitara Brezza', '//localhost/optimus/Category/categoryId/10004/2017-09-14-08-26-11pm-1.csv', '1505401017_2016Mar11001720.jpg', 350000, '1505401017_honda-wr-v-vs-maruti-suzuki-vitara-brezza_827x510_61489766980.jpg', '1505401017_maruti-suzuki-vitara-brezza-rear-827-827x510-41457605078.jpg', NULL),
(11, 'Royal Enfied Himalayan', '//localhost/optimus/Category/categoryId/10005/2017-09-14-08-29-55pm-1.csv', '1505401236_20160312_135639.jpg', 200000, '1505401237_royalenfield-himalayan-bike-1.jpg', '1505401237_royalenfield-himalayan-bike-6.jpg', NULL),
(12, 'Industrial Training', '//localhost/optimus/Category/categoryId/10006/2017-09-14-08-33-43pm-1.csv', '1505401486_banner_flash_web_13711254.jpg', 11000, '1505401486_Industrial Training.jpg', '1505401486_industrial_training.jpg', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_counter` int(11) NOT NULL,
  `order_by` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `usertype` varchar(12) NOT NULL DEFAULT 'GENERAL'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `counter` int(11) NOT NULL,
  `unique_order_number` int(11) NOT NULL,
  `status` varchar(300) NOT NULL,
  `payment_req_id_mojo` varchar(200) NOT NULL,
  `payment_id_mojo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `otp_signup`
--

CREATE TABLE `otp_signup` (
  `numb` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `OTP_VAL` int(11) NOT NULL
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
(3, 3, 1, 1),
(13, 13, 1, 1);

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
(1, 'Admin1', 'opadmin1@gmail.com', '1234567890', '$2y$10$8PGvL9vJnVnLBwAFl7TiFed4eZKkbu2Lp6zPj4nW8wyVwafEXQT/O'),
(2, 'Admin2', 'opadmin2@gmail.com', '0123456789', '$2y$10$spWtDhkwo3V9eJ91KDK/zOwgoLjXpOaHRSghwFV/F1smH37Wat8/W');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `count` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(3, 3, 0),
(13, 13, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `contact` varchar(12) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture`, `link`, `created`, `modified`, `contact`) VALUES
(11, 'google', '116269446106411150871', 'optimustechproject', 'web201702', 'optimustechprojectweb201702@gmail.com', '', 'en', 'https://lh3.googleusercontent.com/-XdUIqdMkCWA/AAAAAAAAAAI/AAAAAAAAAAA/4252rscbv5M/photo.jpg', '', '2017-07-30 19:25:56', '2017-09-07 22:25:46', '7896541230'),
(14, 'facebook', '123243221630366', 'Srinivas', 'Shikhar', 'optimustechprojectweb201702@gmail.com', 'male', 'en_GB', 'https://scontent.xx.fbcdn.net/v/t1.0-1/c15.0.50.50/p50x50/10354686_10150004552801856_220367501106153455_n.jpg?oh=b0e4037a0b04d52224a51836c84c322d&oe=59FEA22F', 'https://www.facebook.com/app_scoped_user_id/123243221630366/', '2017-07-31 21:56:37', '2017-07-31 22:16:16', '7896541230');

-- --------------------------------------------------------

--
-- Table structure for table `verified_user`
--

CREATE TABLE `verified_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_login_id` varchar(30) NOT NULL,
  `user_contact` varchar(11) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verified_user`
--

INSERT INTO `verified_user` (`user_id`, `user_name`, `user_login_id`, `user_contact`, `user_password`) VALUES
(1, 'Akash Chouhan', 'ak@gmail.com', '8968336242', '$2y$15$xlEeqyR62jB.9anM2358Ou9cKd5XGO60JScgkU8pt0Ye7GYzr4ahi'),
(3, 'Charlette', 'charli@icloud.com', '9874563210', '$2y$15$n8kgQAV3rURlqinke1bnZ.IFlpv6FcOpo6ihAVBEVNi0VDocuA4Ta'),
(13, 'Robot', 'akashverma141997@gmail.com', '7896541230', '$2y$15$bFdTy6l.ugmfIqntB4ycWuvEN81ijJBP7E.7eVMDwloEaS6IIPcBe');

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
-- Indexes for table `featpro`
--
ALTER TABLE `featpro`
  ADD PRIMARY KEY (`num`),
  ADD KEY `byAdmin` (`byAdmin`),
  ADD KEY `prod_id` (`prod_id`);

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
  ADD KEY `order_by` (`order_by`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`counter`),
  ADD KEY `unique_order_number` (`unique_order_number`);

--
-- Indexes for table `otp_signup`
--
ALTER TABLE `otp_signup`
  ADD PRIMARY KEY (`numb`),
  ADD KEY `user` (`user`),
  ADD KEY `user_2` (`user`);

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
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`count`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`no`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `featpro`
--
ALTER TABLE `featpro`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `listed_products`
--
ALTER TABLE `listed_products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_counter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `otp_signup`
--
ALTER TABLE `otp_signup`
  MODIFY `numb` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `policy_agreement`
--
ALTER TABLE `policy_agreement`
  MODIFY `counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `realadmin`
--
ALTER TABLE `realadmin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `count` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `verified_user`
--
ALTER TABLE `verified_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_status`
--
ALTER TABLE `admin_status`
  ADD CONSTRAINT `admin_status_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `realadmin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `featpro`
--
ALTER TABLE `featpro`
  ADD CONSTRAINT `featpro_ibfk_1` FOREIGN KEY (`byAdmin`) REFERENCES `realadmin` (`admin_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `featpro_ibfk_2` FOREIGN KEY (`prod_id`) REFERENCES `listed_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `order_status_ibfk_1` FOREIGN KEY (`unique_order_number`) REFERENCES `orders` (`order_counter`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `policy_agreement`
--
ALTER TABLE `policy_agreement`
  ADD CONSTRAINT `policy_agreement_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `verified_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD CONSTRAINT `shoppingcart_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `listed_products` (`product_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `shoppingcart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `verified_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `status_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `verified_user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
