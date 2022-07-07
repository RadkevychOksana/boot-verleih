-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Час створення: Лип 07 2022 р., 23:28
-- Версія сервера: 5.7.34
-- Версія PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `boot_verleih`
--

-- --------------------------------------------------------

--
-- Структура таблиці `boat`
--

CREATE TABLE `boat` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `category_slug` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `image_3` varchar(255) NOT NULL,
  `length` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `seats` int(11) NOT NULL,
  `baggage` int(11) NOT NULL,
  `weight` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `boat`
--

INSERT INTO `boat` (`id`, `name`, `price`, `category_slug`, `image_1`, `image_2`, `image_3`, `length`, `width`, `seats`, `baggage`, `weight`) VALUES
(1, 'Canoe Spark 450', 200, 'canoe', 'assets/img/boats/canoe_duo_1.jpg', 'assets/img/boats/canoe_duo_2.jpg', 'assets/img/boats/canoe_duo_3.jpg', 450, 83, 2, 1, '22'),
(2, 'Canoe Boat 380K-2', 500, 'canoe', 'assets/img/boats/canoe_saranac_1.jpg', 'assets/img/boats/canoe_saranac_2.jpg', 'assets/img/boats/canoe_saranac_3.jpg', 380, 98, 2, 1, '17'),
(3, 'Helena-Kayaks Duo', 500, 'kayaky', 'assets/img/boats/kayak-duo-1.jpg', 'assets/img/boats/kayak-duo-2.jpg', 'assets/img/boats/kayak-duo-3.jpg', 440, 80, 2, 2, '32'),
(4, 'Helena-Kayaks Trio', 300, 'kayaky', 'assets/img/boats/kayak-trio-1.jpg', 'assets/img/boats/kayak-trio-2.jpg', 'assets/img/boats/kayak-trio-3.jpg', 445, 85, 3, 1, '33'),
(5, 'Red River Sport 245', 450, 'rafty', 'assets/img/boats/raft-one-1.jpg', '', '', 245, 95, 1, 1, '8'),
(6, 'Fiord RM440N53', 250, 'rafty', 'assets/img/boats/raft-two-1.jpg', '', '', 440, 190, 2, 1, '42');

-- --------------------------------------------------------

--
-- Структура таблиці `boot_categorie`
--

CREATE TABLE `boot_categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `carousel_image` varchar(255) NOT NULL,
  `price_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `boot_categorie`
--

INSERT INTO `boot_categorie` (`id`, `name`, `slug`, `active`, `carousel_image`, `price_image`) VALUES
(1, 'Kanu', 'canoe', 1, 'assets/img/carousel-canoe.jpg', 'assets/img/price-canoe.jpg'),
(2, 'Kayaks', 'kayaky', 1, 'assets/img/carousel-kayak.jpg', 'assets/img/price-kayak.jpg'),
(3, 'Flösse', 'rafty', 1, 'assets/img/carousel-raft.jpg', 'assets/img/price-raft.jpg');

-- --------------------------------------------------------

--
-- Структура таблиці `buchung`
--

CREATE TABLE `buchung` (
  `id` int(11) NOT NULL,
  `boot_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `buchung`
--

INSERT INTO `buchung` (`id`, `boot_id`, `name`, `email`, `date`, `time`) VALUES
(26, 3, 'Oksana Radkevych', 'radoks5@gmail.com', '07/20/2022', '11:15 AM'),
(27, 5, 'Oksana Radkevych', 'radoks5@gmail.com', '07/21/2022', '11:12 AM');

-- --------------------------------------------------------

--
-- Структура таблиці `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_form` varchar(50) NOT NULL,
  `password_form` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email_form`, `password_form`) VALUES
(12, 'hhh', 'hhh', 'ff@ss.ss', '3ea3ec8ef84135148384cd177049aa6d'),
(11, 'marine.senko@gmail.com', 'marine.senko@gmail.com', 'marine.senko@gmail.com', '79eecd52f6432626b0c809f0f97f5c63'),
(10, 'Oksana', 'Radkevych', 'radoks@gmail.com', '1d7579cec04422de22d6b9794be39b3c'),
(9, 'Marina ', 'Senko', 'marine.senko@gmail.com', '630e3987799885fc2a1758ed39e76293'),
(13, 'Oksana', 'Radkevych', 'marine.senko2@gmail.com', '3ea3ec8ef84135148384cd177049aa6d'),
(14, 'marina', 'senko', 'marina.senko@test.com', '3ea3ec8ef84135148384cd177049aa6d'),
(15, 'Oksana', 'Radkevych', 'radoks3@gmail.com', '3ea3ec8ef84135148384cd177049aa6d'),
(16, 'Oksana', 'Radkevych', 'radoks5@gmail.com', '3ea3ec8ef84135148384cd177049aa6d');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `boat`
--
ALTER TABLE `boat`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `boot_categorie`
--
ALTER TABLE `boot_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `buchung`
--
ALTER TABLE `buchung`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `boat`
--
ALTER TABLE `boat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблиці `boot_categorie`
--
ALTER TABLE `boot_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `buchung`
--
ALTER TABLE `buchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT для таблиці `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
