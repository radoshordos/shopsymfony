-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vytvořeno: Stř 22. led 2014, 19:56
-- Verze serveru: 5.6.15-log
-- Verze PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `shopsymfony`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `dph`
--

CREATE TABLE IF NOT EXISTS `dph` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visible` tinyint(1) NOT NULL,
  `multiple` double NOT NULL,
  `name` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=22 ;

--
-- Vypisuji data pro tabulku `dph`
--

INSERT INTO `dph` (`id`, `visible`, `multiple`, `name`) VALUES
(10, 0, 0.909090909090909, '10 %'),
(14, 0, 0.8771929824561403, '14 %'),
(15, 0, 0.8695652173913043, '15 %'),
(19, 0, 0.840336134453782, '19 %'),
(20, 0, 0.833333333333333, '20 %'),
(21, 1, 0.8264462809917356, '21 %');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
