-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 17 okt 2022 om 09:37
-- Serverversie: 5.7.31
-- PHP-versie: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mvc-oop-toets`
--
CREATE DATABASE IF NOT EXISTS `mvc-oop-toets` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mvc-oop-toets`;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `richestpeople`
--

DROP TABLE IF EXISTS `richestpeople`;
CREATE TABLE IF NOT EXISTS `richestpeople` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `Name` varchar(200) NOT NULL,
  `Networth` varchar(200) NOT NULL,
  `Age` tinyint(4) NOT NULL,
  `Company` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `richestpeople`
--

INSERT INTO `richestpeople` (`id`, `Name`, `Networth`, `Age`, `Company`) VALUES
(1, 'Elon Musk', '261000000000', 50, 'Tesla'),
(2, 'Jeff Bezos', '183000000000', 58, 'Amazon'),
(3, 'Bernard Arnault', '142000000000', 73, 'Louis Vuitton Moet Hennessy'),
(4, 'Bill Gates', '130000000000', 66, 'Microsoft'),
(7, 'Warren Buffett', '126000000000', 91, 'Berkshire Hathaway');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
