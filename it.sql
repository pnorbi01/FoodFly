-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 08:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `it`
--

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`id`, `name`, `description`, `image`, `price`) VALUES
(6, 'Sajtburger', 'Friss zsemle, marhahús, olvasztott sajt, mustár', 'cheeseburger.jpg', 200),
(7, 'Dupla sajtburger', 'Friss zsemle, 2 sor marhahús, olvasztott sajt', 'duplasajt.png', 350),
(8, 'Tripla sajtburger', 'Friss zsemle, 3 sor marhahús, olvasztott sajt', 'triplasajtburger.jpg', 450),
(9, 'BigMac burger', 'Friss zsemle szezámmaggal, marhahús, olvasztott sajt', 'bigmac.png', 420),
(10, 'BigMac menü', 'BigMac, nagy sültkrumpli, üdítő', 'bigmacmenu.png', 680),
(11, 'Dupla sajtburger menü', 'Sajtburger, nagy sültkrumpli, üdítő', 'duplasajtmenu.png', 680),
(12, 'McChicken menü', 'McChicken, nagy sültkrumpli, üdítő', 'mcchickenmenu.png', 680),
(13, 'Filet-O-Fish menü', 'Filet-O-Fish, sültkrumpli, üdítő', 'fishmenu.png', 680),
(14, 'Ropogós csirke saláta', 'Csirekhús, paradicsom, sajt, öntet..', 'csirkesali.jpg', 500),
(15, 'Grillezett csirke saláta', 'Csirkehús, paradicsom, sajt, öntet..', 'grillsalata.jpg', 520),
(16, 'Sima kicsi saláta', 'Paradicsom, sajt, öntet..', 'simasalata.jpg', 250),
(17, 'Coca-Cola', 'Szénsavas üdítő 330ml', 'cocacola.png', 80),
(18, 'Coca-Cola zero', 'Szénsavas üdítő 330ml', 'colazero.jpg', 80),
(19, 'Fanta', 'Szénsavas üdítő 330ml', 'fanta.jpg', 70),
(20, 'Sprite', 'Szénsavas üdítő 330ml', 'sprite.png', 60),
(21, 'Capriciossa Pizza', 'Sonka, gomba, sajt', 'capriciossa.jpg', 500),
(22, 'Pepperoni Pizza', 'Erős paprika, szalámi, sajt, paradicsom', 'pepperoni.jpg', 550),
(23, 'Hawaii Pizza', 'Ananász, sonka, sajt, paradicsomszósz', 'hawaii.jpg', 600),
(24, 'Margherita Pizza', 'Paradicsom, mozzarella, bazsalikom', 'margherita.jpg', 620);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `image` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `image`) VALUES
(0, 'Burgerek', 'hamburgers-menu.jpg'),
(1, 'Menük', 'menus-menu.jpeg'),
(2, 'Saláták', 'salads-menu.jpg'),
(3, 'Üdítők', 'drinks-menu.jpg'),
(4, 'Pizzák', 'pizzas-menu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `menu_meal`
--

CREATE TABLE `menu_meal` (
  `menu_id` int(11) DEFAULT NULL,
  `meal_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `menu_meal`
--

INSERT INTO `menu_meal` (`menu_id`, `meal_id`) VALUES
(0, 6),
(0, 7),
(0, 8),
(0, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(2, 14),
(2, 15),
(2, 16),
(3, 17),
(3, 18),
(3, 19),
(3, 20),
(4, 21),
(4, 22),
(4, 23),
(4, 24);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8_hungarian_ci DEFAULT NULL,
  `deliveryFee` int(11) NOT NULL,
  `deliveryTime` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_hungarian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `deliveryFee`, `deliveryTime`, `image`) VALUES
(0, 'McDonald\'s', 170, '10-20 minutes', 'mcdonalds.png'),
(1, 'Pizza Restaurant', 0, '20-30 minutes', 'pizza-restaurant.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant_menu`
--

CREATE TABLE `restaurant_menu` (
  `restaurant_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- Dumping data for table `restaurant_menu`
--

INSERT INTO `restaurant_menu` (`restaurant_id`, `menu_id`) VALUES
(0, 0),
(0, 1),
(0, 2),
(0, 3),
(1, 4),
(1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_meal`
--
ALTER TABLE `menu_meal`
  ADD KEY `menu_id` (`menu_id`),
  ADD KEY `meal_id` (`meal_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurant_menu`
--
ALTER TABLE `restaurant_menu`
  ADD KEY `restaurant_id` (`restaurant_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_meal`
--
ALTER TABLE `menu_meal`
  ADD CONSTRAINT `menu_meal_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `menu_meal_ibfk_2` FOREIGN KEY (`meal_id`) REFERENCES `meals` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `restaurant_menu`
--
ALTER TABLE `restaurant_menu`
  ADD CONSTRAINT `restaurant_menu_ibfk_1` FOREIGN KEY (`restaurant_id`) REFERENCES `restaurants` (`id`),
  ADD CONSTRAINT `restaurant_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
