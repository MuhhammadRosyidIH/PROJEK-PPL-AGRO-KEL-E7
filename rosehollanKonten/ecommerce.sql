-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2022 at 07:00 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_active` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `is_active`) VALUES
(11, 'exzzact', 'exzzact@gmail.com', '$2y$10$TLAOY7DZgi8D0r6iaX6ktuicB1mBZJ9UBtvk7pr8hHVmoSbOYSuHm', '0'),
(12, 'Syah Reza', 'azer22062002@gmail.com', '$2y$10$mqY0Etr9GzZF3qhqLIp5qulCqU6KfPq8BxsFwJVwij0nqx5trqjLS', '0');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(1, 4, '::1', 4, 1),
(2, 4, '::1', 7, 1),
(4, 2, '::1', 7, 1),
(12, 40, '::1', 8, 1),
(17, 40, '::1', 7, 1),
(22, 40, '::1', 9, 1),
(25, 41, '::1', 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `trx_id`, `p_status`) VALUES
(1, 1, 1, 1, '9L434522M7706801A', 'Completed'),
(2, 1, 2, 1, '9L434522M7706801A', 'Completed'),
(3, 1, 3, 1, '9L434522M7706801A', 'Completed'),
(4, 1, 1, 1, '8AT7125245323433N', 'Completed');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `id` int(6) NOT NULL,
  `object` text NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `production`
--

INSERT INTO `production` (`id`, `object`, `quantity`, `price`, `date`, `description`) VALUES
(1, 'gunting', 5, 75000, '2022-06-06', 'pembelian gunting baru'),
(2, 'botol', 5, 500000, '2022-06-06', 'pembelian botol sirup');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_price`, `product_qty`, `product_desc`, `product_image`, `product_keywords`) VALUES
(40, 'Teh Mawar', 25000, 100, 'Teh yang berasal dari bunga mawar yang dikeringkan, diproses dan disajikan sedemikian rupa untuk kamu penikmat minuman herbal dengan berbagai khasiatnya', '1653852541_hot-rose-tea-table (1).jpg', 'Teh, Mawar'),
(41, 'Nugget', 15000, 50, 'Nugget yang dibuat dari campuran olahan mawar, cocok buat kamu pecinta produk plant-based.', '1653853131_Healthy Food.jpg', 'nugget, mawar'),
(42, 'Sirup Mawar', 30000, 25, 'Sirup yang terbuat dari ekstrak mawar, minuman herbal dengan berbagai khasiat yang harus kamu coba.', '1653853874_4 recipes for homemade marzipan + a simple sugar syrup - Danish Things (1).jpg', 'sirup, mawar'),
(50, 'pempek', 1000, 45, 'kamks', '1655541084_pempek.jpg', 'pempek');

-- --------------------------------------------------------

--
-- Table structure for table `trx_log`
--

CREATE TABLE `trx_log` (
  `id` int(8) NOT NULL,
  `activity` text NOT NULL,
  `income` int(8) NOT NULL,
  `outcome` int(8) NOT NULL,
  `date` date NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trx_log`
--

INSERT INTO `trx_log` (`id`, `activity`, `income`, `outcome`, `date`, `description`) VALUES
(1, 'penjualan teh mawar', 2500000, 0, '2022-05-22', 'pembelian 100 bungkus'),
(2, 'beli makan', 0, 100000, '2022-05-22', 'biaya operasi beli makanan'),
(3, 'beli bahan mawar', 0, 10000000, '2022-05-22', 'beli mawar 5 ton dari petani'),
(4, 'biaya perbaikan', 0, 250000, '2022-05-22', 'mesin ekstrak mawar rusak');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(3, 'Demo', 'Name', 'demo@gmail.com', 'password', '9876543210', 'demo ad1', 'ademo ad2'),
(7, 'test', 'ini', 'oraokay@gmail.com', 'abfd9db3333bf813aeb7bd96fd4a53f9', '0840180318', 'Jember, East Java, Indonesia.', 'Jember, Eas'),
(8, 'jshdks', 'sdkjs', 'exzmorph@gmail.com', '80e21130d034add60feda9380e8349ed', '0840180318', 'Jember, East Java, Indonesia.', 'Jember, Eas'),
(9, 'syah', 'reza', 'exzpect@gmail.com', '80e21130d034add60feda9380e8349ed', '0840180318', 'Jember, East Java, Indonesia.', 'Jember, Eas');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `trx_log`
--
ALTER TABLE `trx_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `trx_log`
--
ALTER TABLE `trx_log`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
