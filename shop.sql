-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 06:40 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `rpass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `pass`, `rpass`) VALUES
(1, 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `payment` bigint(200) NOT NULL,
  `method` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `email`, `location`, `payment`, `method`) VALUES
(61, 'kerker@test', 'Ginatilan', 20500, 'COD'),
(62, 'kerker@test', 'Ginatilan', 60000, 'COD'),
(63, 'juan@test', 'Ginatilan', 8999, 'COD'),
(64, 'juan@test', 'Ginatilan', 12998, 'COD'),
(65, 'juan@test', 'Ginatilan', 72998, 'COD'),
(66, 'juan@test', 'Ginatilan', 81998, 'COD'),
(67, 'yabag@test', 'Ginatilan', 20500, 'COD'),
(68, 'yabag@test', 'Ginatilan', 24499, 'COD'),
(69, 'kerker@test', 'Ginatilan', 70000, 'COD'),
(70, 'kerker@test', 'Ginatilan', 294970, 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product` varchar(250) NOT NULL,
  `price` bigint(250) NOT NULL,
  `quantity` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `status` int(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product`, `price`, `quantity`, `email`, `status`, `image`) VALUES
(61, 'Asus ROG Strix Scar II', 60000, 1, 'kerker@test', 1, ''),
(62, 'SmartWatch Iphone', 8999, 1, 'juan@test', 1, ''),
(63, 'Leaf Bass Studio', 3999, 1, 'juan@test', 1, ''),
(65, 'Ipad', 9000, 1, 'juan@test', 1, 'saber.png'),
(67, 'Apple iPhone 9 PRO', 20500, 1, 'yabag@test', 1, ''),
(68, 'Leaf Bass Studio', 3999, 1, 'yabag@test', 1, ''),
(69, 'Monitor', 10000, 1, 'kerker@test', 1, 'monitor.jpg'),
(70, 'Iphone 12', 74990, 2, 'kerker@test', 1, ''),
(71, 'Iphone 12', 74990, 1, 'kerker@test', 1, ''),
(72, 'Headset Tech', 10000, 1, 'kerker@test', 0, 'headset2.jfif');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `price` bigint(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `price`, `image`) VALUES
(17, 'Monitor', 10000, 'monitor.jpg'),
(19, 'Headset Tech', 10000, 'headset2.jfif'),
(20, 'VR', 35000, 'VR Glasses.jpg'),
(21, 'Gaming Chair', 45000, 'GamingChair.jpg'),
(22, 'Headset', 6000, 'headset1.jfif'),
(23, 'VR Game', 50000, 'VR.webp'),
(24, 'Keyboard', 10000, 'GamingGear.jpg'),
(25, 'Iwatch', 20000, 'hand.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `rpass` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `rpass`, `status`) VALUES
(10, 'kerker', 'kerker@test', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 1),
(14, 'juanEn', 'juan@test', '827ccb0eea8a706c4c34a16891f84e7b', '12345', 0),
(16, 'yabag', 'yabag@test', '792b2ad594271c8f56e4fd3fb6692788', 'yabag', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
