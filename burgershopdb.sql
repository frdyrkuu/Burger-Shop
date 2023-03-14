-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 14, 2023 at 05:07 AM
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
(16, 'Arlo Berlon', 'arlopogi', '$2y$10$.ANifFHVrK9yJ6L8OTa0KOnH6gy/TX9frj0bihAuqz8b9DK2EkVUq'),
(56, 'Bhoxz John', 'employee-123', '$2y$10$Bq6pUcu90refMOa9AieOruaMpCkdcRjH1oJJZ1J4dR2rE3qH2fY06'),
(57, 'Joel Miller', 'joelhamburger', '$2y$10$HSbUYK3VTameaB1XaK5pQO4KGXurvD9t.N16s0.ITLLq6nVZ3tG5.'),
(58, 'CEO Burger Dungeon', 'burgerdungeon', '$2y$10$EhoKn9d8Ht/sL0VV6lUXVObqhkyhpdQuC2ii2dC8cQlkSc5.HHsl.');

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
(47, 'Sarap Burger', 'Super Da Best!', 'burger', 'IMG-64097fa87eacf5.38216739.burger2.png'),
(48, 'Double Burger Dash', 'Overloaded Burger with savory cheesy sauce!', 'burger', 'IMG-64097fdc759c45.33040241.pngwing.com.png'),
(49, 'Krabby Patty', 'Made by SpongeBob, this might be the best burger in Bikini Bottom.', 'burger', 'IMG-6409a0d7cb3ac2.25121242.burger1.png'),
(50, 'Cheesy Fries Explosion', 'Indulge in the ultimate comfort food with our Cheesy Fries Explosion', 'fries', 'IMG-6409a5b3230c73.34787294.pngwing.com (3).png'),
(51, 'Simply Crispy: The Allure of Regular Fries', 'Satisfying about a good old-fashioned order of regular fries.', 'fries', 'IMG-6409a6c4ef67d0.49809937.pngwing.com (2).png'),
(52, 'Savory and Satisfying: BBQ Chicken with a Side of Veggies', 'This dish is the perfect combination of juicy, flavorful BBQ chicken.', 'barbeque', 'IMG-6409a8af63ad69.08868476.pngwing.com (11).png'),
(53, 'BBQ Chicken Smacking Sauce', 'This dish is a crowd-pleaser for anyone who loves bold, tangy flavors.', 'barbeque', 'IMG-6409a8d9c723a3.11758503.pngwing.com (10).png'),
(55, 'Chocolate Ice Cream Wafer Stick', 'Indulge your sweet tooth with this rich and creamy chocolate ice cream.', 'icecream', 'IMG-6409a91b9865b4.74186453.pngwing.com (8).png'),
(56, 'Creamy Strawberry Ice Cream', 'Refreshing and delicious treat that captures the essence of summer.', 'icecream', 'IMG-6409a943ae08d5.57748259.pngwing.com (7).png'),
(57, 'Blue Ice White Dragon', 'Super Blue Chill Iced-tea.', 'drinks', 'IMG-6409a962a59508.47355920.pngwing.com (6).png'),
(58, 'Regular Iced Tea', 'This regular iced tea is a timeless favorite that never goes out of style.', 'drinks', 'IMG-6409a97f4df7e9.02736266.pngwing.com (4).png'),
(61, 'The Burger Dungeon', 'The Burger Dungeon is not your average burger joint. ', 'burger', 'IMG-640a99d0508739.80814407.burger.png'),
(65, 'Triple Treat Ice Cream', 'With three delicious flavors in one scoop, this 3-in-1 ice cream.', 'icecream', 'IMG-640e9f61531475.40804347.pngwing.com (14).png'),
(66, 'Swirl Ice Cream', 'Delicious strawberry and chocolate swirl ice cream. ', 'icecream', 'IMG-640ea057a32142.59568654.pngwing.com (15).png'),
(67, 'Super Dash Ice Cream', 'Ice Cream Combo, exclusive only at Burger Dungeon.', 'icecream', 'IMG-640ea0a5200087.24266956.pngwing.com (9).png'),
(71, 'The Cheesy Giant Burger', 'Sink your teeth into our juicy and delicious Cheesy Giant Burger.', 'burger', 'IMG-640eb7248e9760.78202599.pngwing.com (19).png'),
(72, 'Nuggetlicious Burger', 'Take your taste buds on an exciting adventure with our Nuggetlicious Burger.', 'burger', 'IMG-640eb7429d0d21.58592318.pngwing.com (18).png'),
(73, 'Tomato Cheesy Burger', 'Our Tomato Cheesy Burger is the perfect combination of juicy beef patty.', 'burger', 'IMG-640eb75f39fb34.78554593.pngwing.com (17).png'),
(81, 'Giant Bacon Cheesy Burger', 'Indulge in the rich and savory flavors of our Bacon Cheesy Burger.', 'burger', 'IMG-640ebc3ec768f0.33719074.pngwing.com (16).png'),
(82, 'Buffalo Chicken Wing Fries', 'Get ready to kick your taste buds into high gear with our Buffalo Chicken Wing Fries! ', 'fries', 'IMG-640ebcaaf40dd6.18516028.pngwing.com (20).png'),
(83, 'Buffalo Chicken Nugget Fries', 'Crispy, golden fries meet tender, juicy chicken nuggets.', 'fries', 'IMG-640ebccef036a1.23513918.pngwing.com (21).png'),
(84, 'Loaded Cheesy Fries', 'The ultimate comfort food with our Loaded Cheesy.', 'fries', 'IMG-640ebcdfbcbe83.61334566.pngwing.com (22).png'),
(85, 'Regular Coca-Cola', 'Chill Coca-cola.', 'drinks', 'IMG-640ebd16ebd106.81056884.pngwing.com (23).png'),
(86, 'Zesty Buffalo Wings', 'Our Zesty Buffalo Wings are the perfect combination of juicy chicken.', 'barbeque', 'IMG-640ebd8f70fb84.77016477.pngwing.com (25).png'),
(87, 'Fiery Hot Buffalo Wings', 'Our Fiery Hot Buffalo Wings are not for the faint of heart!', 'barbeque', 'IMG-640ebddb559110.18660854.pngwing.com (26).png'),
(88, 'Steak and Veggie Loaded Fries', 'Our Steak and Veggie Loaded Fries!', 'barbeque', 'IMG-640ebe11ee6419.95730537.pngwing.com (24).png'),
(89, 'Fresh Orange Juice', 'Our Freshly Squeezed Orange Juice is the perfect drink.', 'drinks', 'IMG-640fddddde8765.48691470.pngwing.com (5).png');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product_data`
--
ALTER TABLE `product_data`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
