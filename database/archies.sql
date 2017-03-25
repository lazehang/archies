-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 05:11 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `archies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `src`) VALUES
(1, 'Archies', 'archies@gmail.com', 'password', '80181-brand.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(7, 'mostviewed'),
(6, 'newcollection'),
(8, 'trending');

-- --------------------------------------------------------

--
-- Table structure for table `main_categories`
--

CREATE TABLE `main_categories` (
  `id` int(11) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_categories`
--

INSERT INTO `main_categories` (`id`, `category`) VALUES
(1, 'for him'),
(2, 'for her'),
(3, 'for kids'),
(4, 'for home'),
(5, 'new arrival'),
(6, 'ocassion');

-- --------------------------------------------------------

--
-- Table structure for table `ocassion`
--

CREATE TABLE `ocassion` (
  `id` int(11) NOT NULL,
  `ocassion` varchar(30) NOT NULL,
  `head` varchar(30) NOT NULL,
  `quote` varchar(50) NOT NULL,
  `src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocassion`
--

INSERT INTO `ocassion` (`id`, `ocassion`, `head`, `quote`, `src`) VALUES
(2, 'Holi', 'Happy Holi', 'spread the happiness of colors', '65866-holi_zps1504792e.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `category_id` int(100) NOT NULL,
  `src` varchar(900) NOT NULL,
  `main_category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `stock`, `category_id`, `src`, `main_category_id`) VALUES
(23, 'Fancy Candle Stand', 850, 10, 8, '37805-ar1.jpg', NULL),
(24, 'Classy Ship Decorative Bottle ', 1850, 10, 8, '53899-ar9.jpg', NULL),
(25, 'Lord Ganesh Statue', 1375, 10, 8, '87012-ar2.jpg', NULL),
(26, 'Rebul Men Fragnance', 1, 10, 8, '17420-ar3.jpg', NULL),
(27, 'LKM', 199, 99, 0, '55168-heart.png', 0),
(28, 'test', 100, 100, 0, '64769-11462-cards.png', 0),
(29, 'text', 11, 90, 0, '86924-28557-cards.png', 1),
(30, 'k', 788, 787, 7, '29919-17012-image2.jpg', 1),
(31, 'for her', 1111, 9, 6, '32088-prod5.png', 2),
(32, 'test1', 21, 121, 7, '8704-11462-cards.png', 6),
(33, 'ocasion test', 199, 0, 0, '48708-banner4.jpg', 6),
(34, 'test kids', 999, 9, 7, '56159-banner1.jpg', 3),
(35, 'asas', 1111, 1, 0, '86459-activity1.JPG', 1),
(36, 'sada', 21121, 12, 0, '25650-activity1.JPG', 1),
(37, '1sd', 121, 211, 0, '41352-actShedule.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `responsiveslider`
--

CREATE TABLE `responsiveslider` (
  `id` int(11) NOT NULL,
  `main_caption` varchar(30) NOT NULL,
  `top_caption` varchar(50) NOT NULL,
  `bottom_caption` varchar(50) NOT NULL,
  `src` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `responsiveslider`
--

INSERT INTO `responsiveslider` (`id`, `main_caption`, `top_caption`, `bottom_caption`, `src`) VALUES
(1, 'Happiness', 'Your Smile Made', 'Enjoy Gifts', '75241-toy2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `catogory` (`category`);

--
-- Indexes for table `main_categories`
--
ALTER TABLE `main_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ocassion`
--
ALTER TABLE `ocassion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `category_id_2` (`category_id`);

--
-- Indexes for table `responsiveslider`
--
ALTER TABLE `responsiveslider`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `main_categories`
--
ALTER TABLE `main_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ocassion`
--
ALTER TABLE `ocassion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `responsiveslider`
--
ALTER TABLE `responsiveslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
