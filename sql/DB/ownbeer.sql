-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 02. Feb 2020 um 20:44
-- Server-Version: 10.4.6-MariaDB
-- PHP-Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `ownbeer`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `catDESC` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `timeStamps` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `productID` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `orders_has_product`
--

CREATE TABLE `orders_has_product` (
  `orders_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pName` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `category` varchar(100) NOT NULL,
  `size` float NOT NULL,
  `alc` float NOT NULL,
  `manufacturer` varchar(255) NOT NULL,
  `Categories_id` int(11) NOT NULL,
  `shoppingcart_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `product`
--

INSERT INTO `product` (`id`, `pName`, `price`, `category`, `size`, `alc`, `manufacturer`, `Categories_id`, `shoppingcart_id`) VALUES
(1, 'guinnes', 1.99, 'Starkbier', 0.8, 3.9, 'Aldi', 0, 0),
(2, 'astra', 0.89, 'Mixgetränk', 0.3, 5.3, 'Privat Brauerei', 0, 0),
(3, 'faxe', 1.49, 'Pils', 1, 4.9, 'VikingBearCorp', 0, 0),
(4, 'urquell', 0.79, 'Pils', 0.33, 5.3, 'GigFacktory', 0, 0),
(5, 'paulaner', 0.99, 'Weizen', 0.33, 3.3, 'Paulaner Brauerei', 0, 0),
(7, 'canadian', 1.11, 'Fassbier', 0.33, 6.3, 'Canaidan Inc', 0, 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `id` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userPw` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `shoppingCart` int(11) DEFAULT NULL,
  `boughtID` int(11) DEFAULT NULL,
  `shoppingcart_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `surename` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `user`
--

INSERT INTO `user` (`id`, `userName`, `userPw`, `email`, `shoppingCart`, `boughtID`, `shoppingcart_id`, `name`, `surename`, `birthday`) VALUES
(1, 'andy3110', 'Qw123456', 'test@web.de', NULL, NULL, 1, NULL, NULL, NULL),
(2, 'test', 'test', 'test', NULL, NULL, 1, 'a', 's', NULL),
(3, 'Tester1', 'Qw123456', 'test@web.de', NULL, NULL, 2, 'qweqw', 'wqeasd', NULL),
(4, 'Tester2', 'Qw123456', 'test@web.de', NULL, NULL, 0, 'wqeqw', 'qweasd', NULL),
(5, 'AndyMd5', '37cc3687f0e0ca2268f12d0366e41dec', 'test@web.de', NULL, NULL, 0, 'Andymd', 'MdHash', NULL);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `orders_has_product`
--
ALTER TABLE `orders_has_product`
  ADD PRIMARY KEY (`orders_id`,`product_id`);

--
-- Indizes für die Tabelle `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT für Tabelle `shoppingcart`
--
ALTER TABLE `shoppingcart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
