-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Avril 2016 à 12:37
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `reportingclients`
--

-- --------------------------------------------------------

--
-- Structure de la table `magazine`
--
CREATE TABLE `magazine` (
  `id_magazine` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `year` int(4) DEFAULT NULL COMMENT 'Année',
  `duration` varchar(50) DEFAULT NULL,

) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Contenu de la table `magazine`

INSERT INTO `magazine` (`id_magazine`, `title`, `type`,`year`,`duration`) VALUES
(1, 'Géo', 'Découverte', '1979', 'Mensuel'),
(2, 'Ca m''intéresse', 'Découverte', '1981', 'Mensuel'),
(3, 'Télé Loisir', 'Télévision', '1986', 'Hebdomadaire'),
(4, 'Néon', 'Actualité', '2012', 'Bimestriel'),
(5, 'Gala', 'Actualité', '1993', 'hebdomadaire'),

-- Structure de la table `users`

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `first_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `gender` tinytext COLLATE utf8_unicode_ci NOT NULL
   `birthday` DATE NOT NULL,
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--contenu de la table `users`
INSERT INTO `users` (`id_users`, `first_name`, `gender`, `birthday`) VALUES
(1, 'Alice', 'Femme', '27/08/1981'),
(2, 'Bob', 'Homme', '19/01/1979'),
(3, 'Claire', 'Femme', '20/03/1971'),
(4, 'David', 'Homme', '22/07/1972'),
(5, 'Eve', 'Femme', '11/12/1959'),
(6, 'Felix', 'Homme', '16/07/1999'),
(7, 'Geraldine', 'Femme', '09/07/2000'),

-- Structure de la table `abonnes`
CREATE TABLE `abonnes` (
  `id_magazine` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,

  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

  INSERT INTO `abonnes` (`id_magazine`, `id_users`) VALUES
(1, '1'),
(1, '2'),
(1, '3'),
(2, '3'),
(2, '4'),
(3, '1'),
(3, '3'),
(3, '5'),
(3, '6'),
(4, '6'),
(4, '7'),
(5, '3'),
(5, '6'),




