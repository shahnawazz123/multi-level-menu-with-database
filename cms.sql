-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2017 at 03:24 PM
-- Server version: 5.7.20-log
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL,
  `parent_id` int(11) UNSIGNED DEFAULT NULL,
  `page` varchar(45) DEFAULT NULL,
  `sort_order` tinyint(4) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `title`, `parent_id`, `page`, `sort_order`) VALUES
(1, 'Home', NULL, 'index.php', 101),
(2, 'Products', NULL, NULL, 2),
(3, 'Services', NULL, NULL, 1),
(4, 'About', NULL, 'about.php', 100),
(6, 'Service 1', 3, 'service1.php', 100),
(7, 'Service 2', 3, 'service2.php', 100),
(8, 'Product 1', 2, 'product1.php', 100),
(9, 'Product 2', 2, 'product2.php', 100),
(10, 'Product 3', 2, 'product3.php', 100),
(11, 'Product 4', 2, 'product4.php', 100),
(12, 'Product 5', 2, 'product5.php', 100),
(14, 'Contact', NULL, 'contact.php', 3),
(15, 'Service 1.1', 6, 'service1.1.php', 100),
(16, 'Service 1.2', 6, 'service1.2.php', 100),
(17, 'Service 1.1.1', 15, NULL, 100),
(18, 'Service 2.1', 7, NULL, 100),
(19, 'Service 2.2', 7, NULL, 100),
(20, 'Service 2.3', 7, NULL, 100),
(21, 'Service 2.4', 7, NULL, 100),
(22, 'Service 2.5', 7, NULL, 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
