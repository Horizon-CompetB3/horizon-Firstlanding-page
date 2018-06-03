-- phpMyAdmin SQL Dump
-- version 4.1.14.8
-- http://www.phpmyadmin.net
--
-- Client :  db740497109.db.1and1.com
-- Généré le :  Dim 03 Juin 2018 à 19:45
-- Version du serveur :  5.5.60-0+deb7u1-log
-- Version de PHP :  5.4.45-0+deb7u14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db740497109`
--

-- --------------------------------------------------------

--
-- Structure de la table `entmail`
--

CREATE TABLE IF NOT EXISTS `entmail` (
  `name` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `mail` text CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `entmail`
--

INSERT INTO `entmail` (`name`, `mail`) VALUES
('Alexandre', 'alex.s95120@gmail.com'),
('', ''),
('', ''),
('', '');

-- --------------------------------------------------------

--
-- Structure de la table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `name` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `mail` text CHARACTER SET utf8
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Contenu de la table `mail`
--

INSERT INTO `mail` (`name`, `mail`) VALUES
('', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
