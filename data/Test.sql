-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 08 nov. 2021 à 10:52
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `essaie`
--

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `numero` int NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Nom` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Prenom` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Telephone` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(30) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Date_sign_in` varchar(30) NOT NULL,
  `Date_sign_up` varchar(30) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf32;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`numero`, `identifiant`, `Nom`, `Prenom`, `Telephone`, `email`, `password`, `Date_sign_in`, `Date_sign_up`) VALUES
(1, 'gore#0709500344', 'GORE', 'Anasthasie', '0709500344', 'gore.anasthasie@gmai', 'azertyuiop100200', 'Sat 19 12 2021', 'Fri, 05 Nov 2021 12:34:23 +000'),
(34, 'Kouassi03010302', 'Kouassi', 'Achija', '0301030201', 'achija@gmail.com', 'AZERTYUIOP', 'Fri, 05 Nov 2021 11:24:30 +000', 'Fri, 05 Nov 2021 11:27:09 +000'),
(37, 'kirikou03010302', 'kirikou', 'zae', '0301030201', 'sdsqd@gmail.com', '$1$suqsRObB$oRw9.IvW', 'Fri, 05 Nov 2021 11:56:41 +000', ''),
(38, 'Kou0301030201', 'Kou', 'zaeze', '0301030201', 'zeaz@gmail.com', '$1$TsUjF7Tc$t8x5nwIftuZKxVqxDsOdW0', 'Fri, 05 Nov 2021 12:03:48 +000', ''),
(39, 'Kou0301030201', 'Kou', 'zaeze', '0301030201', 'zeaz@gmail.com', '$1$LJVDAgDT$1WoS8zNBQevJbUwKvcaup.', 'Fri, 05 Nov 2021 12:17:48 +000', ''),
(40, 'Kou0301030201', 'Kou', 'zaeze', '0301030201', 'zeaz@gmail.com', '11befe1b03f596c805ed03864def873d', 'Fri, 05 Nov 2021 12:25:32 +000', ''),
(41, 'Kou0301030201', 'Kou', 'zaeze', '0301030201', 'zeaz@gmail.com', '11befe1b03f596c805ed03864def873d', 'Fri, 05 Nov 2021 12:32:56 +000', 'Fri, 05 Nov 2021 12:37:04 +000'),
(42, 'kirikou03010302', 'kirikou', 'ange', '0301030212', 'kouaoieue@gmail.com', '037111172daf88a79e04797e7b065644', 'Fri, 05 Nov 2021 12:38:54 +000', 'Fri, 05 Nov 2021 13:56:31 +000'),
(43, 'KONE0709456468', 'KONE', 'Emmanuel', '0709456468', 'ek@gmail.com', '805c0f0811114e020fafdb0ad12dc357', 'Fri, 05 Nov 2021 13:59:11 +000', 'Fri, 05 Nov 2021 14:00:31 +000'),
(44, 'Kouame050505050', 'Kouame', 'Richard', '0505050505', 'rk@gmail.com', '805c0f0811114e020fafdb0ad12dc357', 'Fri, 05 Nov 2021 14:03:10 +000', 'Fri, 05 Nov 2021 15:38:55 +000'),
(45, 'Koffi0403020105', 'Koffi', 'Brice', '0403020105', 'kb@gmail.com', '156b1f260353126ecba676f37fdf0006', 'Fri, 05 Nov 2021 15:47:20 +000', 'Fri, 05 Nov 2021 15:47:44 +000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
