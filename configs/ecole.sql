-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 08, 2024 at 01:30 PM
-- Server version: 8.0.31
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecole`
--

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

DROP TABLE IF EXISTS `classes`;
CREATE TABLE IF NOT EXISTS `classes` (
  `idClasse` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`idClasse`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`idClasse`, `nom`) VALUES
(5, '2ème Année'),
(4, '1er Année'),
(3, 'Terminales'),
(2, 'Première'),
(1, 'Seconde'),
(6, '3ème Année'),
(7, '4ème Année'),
(8, '5ème Année'),
(12, 'Troisième');

-- --------------------------------------------------------

--
-- Table structure for table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `idEtudiant` int NOT NULL AUTO_INCREMENT,
  `prenom` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nom` varchar(100) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `classe_id` int NOT NULL,
  PRIMARY KEY (`idEtudiant`),
  KEY `classe_id` (`classe_id`)
) ENGINE=MyISAM AUTO_INCREMENT=272 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `etudiants`
--

INSERT INTO `etudiants` (`idEtudiant`, `prenom`, `nom`, `classe_id`) VALUES
(243, 'Bob', 'Tobiass', 5),
(203, 'André', 'Rakoto', 4),
(158, 'Hery', 'Rakoto', 1),
(157, 'Herisson', 'Rakoto', 7),
(155, 'Josh', 'Doe', 4),
(162, 'André', 'Jaonary', 6),
(208, 'Herison', 'bidon', 1),
(170, 'Herisson', 'Rakoto', 1),
(41, 'Armand', 'Ramaroson', 8),
(148, 'Herison', 'Rakoto', 1),
(207, 'Hery', 'Ramaroson', 1),
(47, 'John', 'Doe', 5),
(152, 'Hery', 'Rakoto', 1),
(257, 'Andréas', 'Does', 1),
(253, 'Hery', 'Rakoto', 1),
(51, 'Jane', 'Doe', 3),
(255, 'Hery', 'Do', 1),
(166, 'Hery', 'Ramaroson', 1),
(55, 'Hery', 'Rakoto', 7),
(205, 'Ramaroson', 'Armand', 1),
(175, 'Herison', 'Ramaroson', 4),
(60, 'John', 'Doe', 3),
(61, 'Hery', 'Ramaroson', 2),
(62, 'Hery', 'Rakoto', 8),
(63, 'Herison', 'Jaonary', 8),
(64, 'Jane', 'Doe', 6),
(67, 'Armand', 'Ramaroson', 8),
(68, 'Hery', 'Rakoto', 2),
(254, 'Hery', 'Doe', 1),
(174, 'Ramaroson', 'Ramaroson', 1),
(71, 'John', 'Doe', 1),
(72, 'Hery', 'Ramaroson', 5),
(153, 'Herisson', 'Ramaroson', 1),
(146, 'Joe', 'Biden', 7),
(75, 'Jane', 'Doe', 6),
(176, 'Hery', 'Armand', 1),
(169, 'Joseph', 'Ramaroson', 1),
(79, 'Hery', 'Rakoto', 6),
(209, 'André', 'Jaonary', 1),
(173, 'Hery', 'Armand', 5),
(84, 'John', 'Doe', 1),
(139, 'Herisson', 'Rakoto', 4),
(86, 'Hery', 'Rakoto', 8),
(138, 'André', 'Jaonary', 3),
(88, 'Jane', 'Doe', 7),
(167, 'Jao', 'Rakoto', 1),
(91, 'Armand', 'Ramaroson', 8),
(171, 'Hery', 'Ramaroson', 1),
(168, 'Herison', 'Rakoto', 1),
(149, 'Hery', 'Armand', 8),
(141, 'Hery', 'Ramarosoa', 5),
(98, 'Herison', 'Jaonary', 8),
(99, 'Jane', 'Doe', 3),
(105, 'Jason', 'Derulo', 2),
(107, 'Herisson', 'Jaonary', 8),
(204, 'Herison', 'Armand', 1),
(128, 'Jane', 'Doe', 4),
(154, 'Orlando', 'Boka', 1),
(200, 'Hery', 'Rakoto', 1),
(201, 'Hery', 'Armand', 1),
(202, 'Herison', 'Armand', 1),
(165, 'André', 'Rakoto', 1),
(163, 'Hery', 'Rakoto', 1),
(160, 'Hery', 'Jaonary', 1),
(161, 'Hery', 'Rakoto', 1),
(164, 'Herison', 'bidon', 1),
(199, 'Hery', 'Ramaroson', 1),
(197, 'Hery', 'Jaonary', 5),
(179, 'Herisson', 'Rakoto', 8),
(180, 'Hery', 'Rakoto', 1),
(259, 'Andréas', 'Does', 8),
(212, 'Hery', 'Rakotoson', 6),
(183, 'Rams', 'Rakoto', 2),
(184, 'André', 'Jaonary', 1),
(185, 'Son', 'Rakotovao', 1),
(258, 'Hery', 'Rakotoson', 1),
(198, 'Herison', 'Jaonary', 2),
(251, 'André', 'Armand', 4),
(256, 'André', 'Doe', 1),
(248, 'Hery', 'Rakotoson', 1),
(220, 'André', 'Doe', 6),
(260, 'Hery', 'Ramaroson', 5),
(261, 'Hery', 'Rajao', 4),
(262, 'Hery', 'Rakotovao', 3),
(263, 'André', 'Jaonary', 1),
(264, 'Armand', 'Rakoto', 2),
(265, 'Bob', 'Bidened', 1),
(266, 'André', 'Rakoto', 3),
(267, 'Hery', 'Does', 2),
(268, 'Bob', 'Ramaroson', 6),
(269, 'Hery', 'Doe', 1),
(270, 'Herison', 'Ramaroson', 6),
(271, 'André', 'Rakotoson', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
