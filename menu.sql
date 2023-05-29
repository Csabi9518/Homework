-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2023. Máj 06. 11:35
-- Kiszolgáló verziója: 10.4.25-MariaDB
-- PHP verzió: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `menu`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `dessert`
--

CREATE TABLE `dessert` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `dessert`
--

INSERT INTO `dessert` (`d_id`, `d_name`, `d_price`) VALUES
(1, 'somlolly', 1000),
(2, 'pancake', 1000),
(3, 'apple pie', 1000),
(4, 'fruit cake', 1000),
(5, 'linzer', 1000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `drinks`
--

CREATE TABLE `drinks` (
  `dr_id` int(11) NOT NULL,
  `dr_name` varchar(50) NOT NULL,
  `dr_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `drinks`
--

INSERT INTO `drinks` (`dr_id`, `dr_name`, `dr_price`) VALUES
(1, 'water', 500),
(2, 'orange juice', 500),
(3, 'coke', 500),
(4, 'fanta', 500),
(5, 'sprite', 500);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `hamburger`
--

CREATE TABLE `hamburger` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(50) NOT NULL,
  `h_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `hamburger`
--

INSERT INTO `hamburger` (`h_id`, `h_name`, `h_price`) VALUES
(1, 'normal', 2000),
(2, 'cheese', 2000),
(3, 'chicken', 2000),
(4, 'bacon', 2000),
(5, 'double', 2000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pasta`
--

CREATE TABLE `pasta` (
  `p_id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `p_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `pasta`
--

INSERT INTO `pasta` (`p_id`, `p_name`, `p_price`) VALUES
(1, 'bolognese', 1500),
(2, 'carbonara', 1500),
(3, 'pesto', 1500),
(4, 'mac&cheese', 1500),
(5, 'salmon', 2000);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `pizza`
--

CREATE TABLE `pizza` (
  `pi_id` int(11) NOT NULL,
  `pi_name` varchar(50) NOT NULL,
  `pi_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `pizza`
--

INSERT INTO `pizza` (`pi_id`, `pi_name`, `pi_price`) VALUES
(1, 'ham', 2000),
(2, 'hawaii', 2000),
(3, 'pepperoni', 2000),
(4, 'cheese', 2000),
(5, 'hungarian', 2500);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `soups`
--

CREATE TABLE `soups` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `soups`
--

INSERT INTO `soups` (`s_id`, `s_name`, `s_price`) VALUES
(1, 'chicken', 1000),
(2, 'beef', 1000),
(3, 'bean', 1500),
(4, 'broccoli', 1000),
(5, 'goulash', 1500);

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `dessert`
--
ALTER TABLE `dessert`
  ADD PRIMARY KEY (`d_id`);

--
-- A tábla indexei `drinks`
--
ALTER TABLE `drinks`
  ADD PRIMARY KEY (`dr_id`);

--
-- A tábla indexei `hamburger`
--
ALTER TABLE `hamburger`
  ADD PRIMARY KEY (`h_id`);

--
-- A tábla indexei `pasta`
--
ALTER TABLE `pasta`
  ADD PRIMARY KEY (`p_id`);

--
-- A tábla indexei `pizza`
--
ALTER TABLE `pizza`
  ADD PRIMARY KEY (`pi_id`);

--
-- A tábla indexei `soups`
--
ALTER TABLE `soups`
  ADD PRIMARY KEY (`s_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
