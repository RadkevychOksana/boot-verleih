-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:8889
-- Час створення: Лип 06 2022 р., 09:20
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
(1, 'Canoe Spark 450', 200, 'canoe', 'img/boats/canoe_duo_1.jpg', 'img/boats/canoe_duo_2.jpg', 'img/boats/canoe_duo_3.jpg', 450, 83, 2, 1, '22'),
(2, 'Canoe Boat 380K-2', 500, 'canoe', 'img/boats/canoe_saranac_1.jpg', 'img/boats/canoe_saranac_2.jpg', 'img/boats/canoe_saranac_3.jpg', 380, 98, 2, 1, '17'),
(3, 'Helena-Kayaks Duo', 500, 'kayaky', 'img/boats/kayak-duo-1.jpg', 'img/boats/kayak-duo-2.jpg', 'img/boats/kayak-duo-3.jpg', 440, 80, 2, 2, '32'),
(4, 'Helena-Kayaks Trio', 300, 'kayaky', 'img/boats/kayak-trio-1.jpg', 'img/boats/kayak-trio-2.jpg', 'img/boats/kayak-trio-3.jpg', 445, 85, 3, 1, '33');

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
(1, 'Kanu', 'canoe', 1, 'img/carousel-canoe.jpg', 'img/price-canoe.jpg'),
(2, 'Kayaks', 'kayaky', 1, 'img/carousel-kayak.jpg', 'img/price-kayak.jpg'),
(3, 'Flösse', 'rafty', 1, 'img/carousel-raft.jpg', 'img/price-raft.jpg');

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
(18, 2, 'jhkjhjk', 'jjjjj@jj.jj', '07/19/2022', '10:22 AM'),
(19, 2, 'jljkk', 'bbb@bbb.ccc', '07/29/2022', '10:24 AM'),
(20, 1, 'lljlk', 'jjjj@dd.ddd', '07/27/2022', '10:27 PM'),
(21, 2, 'kkk', 'kkk@kkk.com', '07/27/2022', '10:27 PM');

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
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `boat`
--
ALTER TABLE `boat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблиці `boot_categorie`
--
ALTER TABLE `boot_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблиці `buchung`
--
ALTER TABLE `buchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
