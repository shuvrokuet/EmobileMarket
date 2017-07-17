-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 10:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_market`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(10) UNSIGNED NOT NULL,
  `product_name` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `img_link` text NOT NULL,
  `network_type` text NOT NULL,
  `battery_type` text NOT NULL,
  `camera_resulation` text NOT NULL,
  `gpu` text NOT NULL,
  `ram` text NOT NULL,
  `rom` text NOT NULL,
  `releasedate` text NOT NULL,
  `display_size` text NOT NULL,
  `sensor` text NOT NULL,
  `identity` text NOT NULL,
  `product_offer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_quantity`, `img_link`, `network_type`, `battery_type`, `camera_resulation`, `gpu`, `ram`, `rom`, `releasedate`, `display_size`, `sensor`, `identity`, `product_offer`) VALUES
(1, 'Samsung Galaxy S8', 77900, 10, 'http://localhost/akif/upload/admin14981243841.JPG', '2G, 3G, 4G', 'Lithium-ion 3000 mAh (non-removable)', '12+8 Megapixel', 'Mali-G71 MP20', '4 GB', '64 GB', '2017-06-05', '5.8 inches, qHD 1440 x 2960 pixels (570 ppi)', 'Iris scanner, fingerprint, accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2', 'samsung', '0'),
(2, 'Samsung Galaxy S7 Edge', 64900, 10, 'http://localhost/akif/upload/admin14981247502.jpg', '2G, 3G, 4G', 'Lithium-ion 3600 mAh (non-removable)', '12+5 Megapixel', 'Mali-T880 MP12', '4 GB', '64 GB', '2017-06-01', '5.5 inches, qHD 1440 x 2560 pixels (534 ppi)', 'Accelerometer, gyro, proximity, compass, barometer, heart rate, SpO2', 'samsung', '1'),
(3, 'Samsung Galaxy J7 (2016)', 18900, 15, 'http://localhost/akif/upload/admin14981249433.jpg', '2G, 3G, 4G', 'Lithium-ion 3300 mAh (removable)', '13 + 5 Megapixel', 'Mali-T720 MP3', '2 GB', '16 GB', '2017-05-28', '5.5 inches, HD 720 Ã— 1280 pixels (267 ppi)', 'G-sensor, Proximity, Light', 'samsung', '0'),
(6, 'Symphony Z9', 14990, 10, 'http://localhost/akif/upload/admin14981258916.JPG', '2G, 3G, 4G', 'Lithium-polymer 3000 mAh', '13+2 Megapixel (Dual)', 'Mali-T860 MP2', '3 GB', '32 GB', '2017-05-30', '5.5 inches, Full HD 1920 x 1080 pixels (403 ppi)', 'Fingerprint, G-sensor, light, proximity, compass', 'symphony', '0'),
(7, 'Oppo F3', 25990, 10, 'http://localhost/akif/upload/admin14981262017.JPG', '2G, 3G, 4G', 'Lithium-ion 3200 mAh (non-removable)', 'Dual 16 MP (1/3.1\" sensor size, f/2.0) + 8 MP (f/2.4)', 'Mali-T860 MP2', '4 GB', '64 GB', '2017-05-28', '5.5 inches, Full HD 1080 x 1920 pixels (401 ppi)', 'Fingerprint, accelerometer, proximity, compass', 'oppo', '1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` text NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_city` text NOT NULL,
  `user_zip` text NOT NULL,
  `user_country` text NOT NULL,
  `user_phone` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `user_name`, `user_email`, `user_password`, `user_city`, `user_zip`, `user_country`, `user_phone`) VALUES
(4, 'shuvro', 'iamshuvro13@gmail.com', '1234', '', '123', '', '456789'),
(5, 'Akif hasan', 'akif@gmail.com', 'akif', 'Dhaka', '7890', 'Bangladesh', '01789'),
(7, 'fuck', 'fuck@dick.com', '1234', 'Khulna', '908', 'Bangladesh', '4567');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
