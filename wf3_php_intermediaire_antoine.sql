-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 23 nov. 2021 à 13:53
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.4.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `wf3_php_intermediaire_antoine`
--

-- --------------------------------------------------------

--
-- Structure de la table `advert`
--

DROP TABLE IF EXISTS `advert`;
CREATE TABLE IF NOT EXISTS `advert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `postal_code` int(11) NOT NULL,
  `city` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `reservation_message` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `advert`
--

INSERT INTO `advert` (`id`, `title`, `description`, `postal_code`, `city`, `type`, `price`, `reservation_message`) VALUES
(1, 'Cadaujac', 'wsdfdgfnhgjfkj,jsdwfdf', 33140, 'Cadaujac', 'Location', 2, NULL),
(2, 'Maison', 'Maison de plein pied avec un jardin de 300m2', 78160, 'Marly Le Roi', 'Vente', 500000, NULL),
(3, 'fgfhgjhklkhythgsfqdq', 'sqdfghjhk;jghfhdgsfd', 33140, 'Bordeaux', 'Location', 4, NULL),
(4, 'sqdsfdghgjh;jghnfgbfdfsds', 'SQDFGHBN?HNGDBFVFDS', 33140, 'Versailles', 'Location', 2, NULL),
(5, 'VDFCVBVN??HNGBFVDC', 'DFGVNB?N NBFVSDS', 33140, 'Paris', 'Location', 6, NULL),
(6, 'Cadaujac', 'FCBVNB?NGNBFFQSDF NGBSFDNBCFXGNSFGNSFGNSFGGN', 33140, 'Marly Le Roi', 'Vente', 7, NULL),
(7, 'XGCV?NB? NSXDFBSFFBFB', 'SFBSFBSFGFGSFGFGNSFFGGNSFFG', 33140, 'QDFBDFBSFFGN', 'Vente', 2, NULL),
(8, '&lt;DSFDGNWFHXGJFKJG/', 'SQ&lt;DFWXGCHJBN.?', 33140, 'Versailles', 'Location', 4, NULL),
(9, 'DSFDWGFXHGCJHVKJB?/ J?XNWBSQFDB', 'XCB? WDFBWCGNCBN', 33140, 'XVB XVB XVB XFBF', 'Location', 5, NULL),
(10, 'Qqsdfdgfhgjn:', 'esgwxdcfnk,:', 78160, 'Versailles', 'fbn', 6, NULL),
(11, 'sdsfbxcwvcxbncb,', 'sxcvbn', 33140, 'Versailles', 'Location', 6, NULL),
(12, 'dfghj,xxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxx', 33140, 'xxxxxxxxxxxxxxxxxxxxxxxxxx', 'Location', 6, NULL),
(13, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 33140, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'Vente', 7, NULL),
(14, 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx', 10002, 'Paris', 'Vente', 30, NULL),
(15, 'sdddddddddddddddddddddddddddddddddddd', 'ddsdddddddddddddddddddddddddddddddddddddd', 78160, 'Marly Le Roi', 'Vente', 82, NULL),
(16, 'dddddddddddd', 'dddddddddddddddddddddddddddddddddddddd', 33140, 'Paris', 'Location', 17, NULL),
(17, 'appartement', 'cc best flat in paris', 75000, 'Paris', 'Vente', 30000000, NULL),
(18, 'maison', 'belle maison de plein pied avec un jardin de 500m2....', 33140, 'Cadaujac', 'Location', 800, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
