-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 2 oct. 2019 à 11:40
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tortues_ninja`
--
CREATE DATABASE IF NOT EXISTS `tortues_ninja` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `tortues_ninja`;

-- --------------------------------------------------------

--
-- Structure de la table `tortue`
--

DROP TABLE IF EXISTS `tortue`;
CREATE TABLE `tortue` (
  `id_tortue` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `surnom` varchar(50) NOT NULL,
  `couleur` varchar(50) NOT NULL,
  `fichier` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `tortue`
--

INSERT INTO `tortue` (`id_tortue`, `nom`, `surnom`, `couleur`, `fichier`) VALUES
(1, 'Leonardo', 'Leo', 'bleu', 'Leonardo.jpg'),
(2, 'Michelangelo', 'Mikey or Mike', 'orange', 'Michelangelo.jpg'),
(3, 'Donatello', 'Donnie or Don', 'violet', 'Donatello.jpg'),
(4, 'Raphael', 'Raph', 'rouge', 'Raphael.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tortue`
--
ALTER TABLE `tortue`
  ADD PRIMARY KEY (`id_tortue`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tortue`
--
ALTER TABLE `tortue`
  MODIFY `id_tortue` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
