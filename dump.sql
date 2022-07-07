-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Jul 2022 um 16:18
-- Server-Version: 10.4.24-MariaDB
-- PHP-Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `boots_verleih`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `boat`
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
-- Daten für Tabelle `boat`
--

INSERT INTO `boat` (`id`, `name`, `price`, `category_slug`, `image_1`, `image_2`, `image_3`, `length`, `width`, `seats`, `baggage`, `weight`) VALUES
(1, 'Canoe Spark 450', 200, 'canoe', 'img/boats/canoe_duo_1.jpg', 'img/boats/canoe_duo_2.jpg', 'img/boats/canoe_duo_3.jpg', 450, 83, 2, 1, '22'),
(2, 'Canoe Boat 380K-2', 500, 'canoe', 'img/boats/canoe_saranac_1.jpg', 'img/boats/canoe_saranac_2.jpg', 'img/boats/canoe_saranac_3.jpg', 380, 98, 2, 1, '17'),
(3, 'Helena-Kayaks Duo', 500, 'kayaky', 'img/boats/kayak-duo-1.jpg', 'img/boats/kayak-duo-2.jpg', 'img/boats/kayak-duo-3.jpg', 440, 80, 2, 2, '32'),
(4, 'Helena-Kayaks Trio', 300, 'kayaky', 'img/boats/kayak-trio-1.jpg', 'img/boats/kayak-trio-2.jpg', 'img/boats/kayak-trio-3.jpg', 445, 85, 3, 1, '33'),
(5, 'Red River Sport 245', 450, 'rafty', 'img/boats/raft-one-1.jpg', '', '', 245, 95, 1, 1, '8'),
(6, 'Fiord RM440N53', 250, 'rafty', 'img/boats/raft-two-1.jpg', '', '', 440, 190, 2, 1, '42');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `boot_categorie`
--

CREATE TABLE `boot_categorie` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `carousel_image` varchar(255) NOT NULL,
  `price_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `boot_categorie`
--

INSERT INTO `boot_categorie` (`id`, `name`, `slug`, `active`, `carousel_image`, `price_image`) VALUES
(1, 'Kanu', 'canoe', 1, 'img/carousel-canoe.jpg', 'img/price-canoe.jpg'),
(2, 'Kayaks', 'kayaky', 1, 'img/carousel-kayak.jpg', 'img/price-kayak.jpg'),
(3, 'Flösse', 'rafty', 1, 'img/carousel-raft.jpg', 'img/price-raft.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `buchung`
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
-- Daten für Tabelle `buchung`
--

INSERT INTO `buchung` (`id`, `boot_id`, `name`, `email`, `date`, `time`) VALUES
(22, 1, 'Oksana Radkevych', 'radoks@gmail.com', '07/17/2022', '10:00 AM'),
(23, 6, 'Oksana Radkevych', 'oksana.radkevych@wagner-ecommerce.group', '07/28/2022', '12:20 PM'),
(24, 5, 'Oksana radkevych', 'radoks@gmail.com', '07/14/2022', '2:57 PM');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email_form` varchar(50) NOT NULL,
  `password_form` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email_form`, `password_form`) VALUES
(7, 'Oksana ', 'Radkevych', 'radoks@gmail.com', '16d5cd89af204ad9f8c31e69b5f758f1'),
(2, 'Oksana', 'Radkevych', 'radoks@gmail.com', '87456123'),
(3, 'Oksana', 'Radkevych', 'radoks@gmail.com', '12345678'),
(4, 'Oksana', 'Radkevych', 'radoks@gmail.com', '12345678'),
(5, 'Oksana', 'Radkevych', 'radoks@gmail.com', '12345678'),
(6, 'Oksana', 'Radkevych', 'radoks@gmail.com', 'cbcb66b55f2f95b4b5ee7d0b3ca127b2');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `boat`
--
ALTER TABLE `boat`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `boot_categorie`
--
ALTER TABLE `boot_categorie`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `buchung`
--
ALTER TABLE `buchung`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `boat`
--
ALTER TABLE `boat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT für Tabelle `boot_categorie`
--
ALTER TABLE `boot_categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `buchung`
--
ALTER TABLE `buchung`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
