-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 10, 2023 at 01:49 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `burgershopdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `id` int NOT NULL,
  `name` varchar(256) NOT NULL,
  `user_admin` varchar(256) NOT NULL,
  `user_password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`id`, `name`, `user_admin`, `user_password`) VALUES
(11, 'Frederick Socorin', 'frederick', '$2y$10$./oLCDDyVRbvg4QgQkFF.OISgdHsiiWeg90Po9y0ujtnJQXXl6amW'),
(12, 'Jeric Angana', 'jericpogi', '$2y$10$dLyWa/f/dF.r1TG199FcC.9S9kc0lTDnklwpzEO5BwrxQ8m25btoS'),
(13, 'Krista Mae Hainto', 'krista123', '$2y$10$7fIqD30hwRr9mGL2L9DXAeZ69FWLrajMNG..NoRBV2J8v4LxFSliK'),
(14, 'Rowell Gumahad', 'rowellskie', '$2y$10$eKJL6x1rYN/tAM5kTrJtbeNBVStXv2plLfkUSRUgTqieBTgwbwXhm'),
(15, 'Admin CEO', 'admin', '$2y$10$IgoHcIVRwkdd/ShiSQGyFeUER.TaLEawUy2k0T3mgWwjajzjNAjge'),
(16, 'Arlo Berlon', 'arlopogi', '$2y$10$.ANifFHVrK9yJ6L8OTa0KOnH6gy/TX9frj0bihAuqz8b9DK2EkVUq');

-- --------------------------------------------------------

--
-- Table structure for table `product_data`
--

CREATE TABLE `product_data` (
  `id` int NOT NULL,
  `title` varchar(126) NOT NULL,
  `description` varchar(256) NOT NULL,
  `category` varchar(126) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product_data`
--

INSERT INTO `product_data` (`id`, `title`, `description`, `category`, `img`) VALUES
(47, 'Burger Sarap', 'Napaka sarap ng burger na ito', 'burger', 'IMG-64097fa87eacf5.38216739.burger2.png'),
(48, 'Double Burger Dash', 'This is the best burger in the city!', 'burger', 'IMG-64097fdc759c45.33040241.pngwing.com.png'),
(49, 'Krabby Patty', 'Si Spongebob ang pinaka da best na cook sa Bikini Bottoms', 'burger', 'IMG-6409a0d7cb3ac2.25121242.burger1.png'),
(50, 'Super Cheese Fries ', 'Legit boy apaka sarap nitong fries na ito, super yummy and delicious. ', 'fries', 'IMG-6409a5b3230c73.34787294.pngwing.com (3).png'),
(51, 'Super Fries', 'Super sarap da best!', 'fries', 'IMG-6409a6c4ef67d0.49809937.pngwing.com (2).png'),
(52, 'Chicken Sarap', 'Super lupet ng chicken bbq na ito, Oh-wow sa sarap!', 'barbeque', 'IMG-6409a8af63ad69.08868476.pngwing.com (11).png'),
(53, 'Chicken ala Sauce', 'Sa sobrang sarap ng sauce makakalimutan mo pangalan mo!', 'barbeque', 'IMG-6409a8d9c723a3.11758503.pngwing.com (10).png'),
(54, 'Ice Cream ni Fred', 'Chocolaty buddy chocolate ice cream.', 'icecream', 'IMG-6409a8fbb73840.81624325.pngwing.com (9).png'),
(55, 'Fudge Ice Cream', 'Super tamis super sarap!', 'icecream', 'IMG-6409a91b9865b4.74186453.pngwing.com (8).png'),
(56, 'Strawberry Ice Cream', 'Ice Cream pa lang galing ng Baguio ang fruits, fresh na fresh!', 'icecream', 'IMG-6409a943ae08d5.57748259.pngwing.com (7).png'),
(57, 'Blue Ice White Dragon', 'Chilling with my homie.', 'drinks', 'IMG-6409a962a59508.47355920.pngwing.com (6).png'),
(58, 'Cola Ola', 'Sheshh Coolaaa!', 'drinks', 'IMG-6409a97f4df7e9.02736266.pngwing.com (4).png'),
(59, 'Orange Juice', 'Ola tamis ola saraap sheshh juice!', 'drinks', 'IMG-6409ada1b55cf9.66224783.pngwing.com (5).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_data`
--
ALTER TABLE `product_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_account`
--
ALTER TABLE `admin_account`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_data`
--
ALTER TABLE `product_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
