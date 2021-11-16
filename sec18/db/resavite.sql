-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 16 nov. 2021 à 12:03
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `resavite`
--
CREATE DATABASE IF NOT EXISTS `resavite` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `resavite`;

-- --------------------------------------------------------

--
-- Structure de la table `resa`
--

DROP TABLE IF EXISTS `resa`;
CREATE TABLE `resa` (
  `id_reservation` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_salle` int(11) NOT NULL,
  `debut` datetime NOT NULL,
  `fin` datetime NOT NULL,
  `nb_personnes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `resa`
--

INSERT INTO `resa` (`id_reservation`, `id_user`, `id_salle`, `debut`, `fin`, `nb_personnes`) VALUES
(1, 1, 1, '2021-09-01 10:00:00', '2021-09-01 12:00:00', 3),
(2, 1, 2, '2021-09-08 14:00:00', '2021-09-08 15:30:00', 5),
(3, 2, 1, '2021-10-04 08:00:00', '2021-10-04 10:00:00', 2),
(6, 1, 1, '2021-11-06 11:38:00', '2021-11-24 11:38:00', 2),
(7, 1, 6, '2021-11-02 11:42:00', '2021-11-21 11:42:00', 99),
(8, 8, 5, '2021-11-03 12:01:00', '2021-11-19 12:01:00', 5);

-- --------------------------------------------------------

--
-- Structure de la table `salle`
--

DROP TABLE IF EXISTS `salle`;
CREATE TABLE `salle` (
  `id_salle` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `nb_places_maxi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `salle`
--

INSERT INTO `salle` (`id_salle`, `nom`, `nb_places_maxi`) VALUES
(1, 'R1', 30),
(2, 'R2', 18),
(3, 'R3', 12),
(4, 'R4', 12),
(5, 'R5', 6),
(6, 'R6', 6);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telephone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id_user`, `login`, `password`, `nom`, `prenom`, `email`, `telephone`) VALUES
(1, 'bob', '$2y$10$HqjIOhKoL7Lo46FaeypMxO9c9/96PTjg.FsKvOYuiNfdHDQnpkkqS', 'smith', 'bob', 'bob@m2l.fr', '3360102030401'),
(2, 'douglas', '$2y$10$jo.yY/4A1TgalY.j1l68OuebNEEChTHKdgPapeWcA62407KzPWJO.', 'davis', 'douglas', 'douglas@m2l.fr', '3360102030402'),
(3, 'jef', '$2y$10$ByxKZB/W.wLBnlr6WPvLxu/1Knkm7JUaEdOqpZWSV92zgygvgqX9y', 'rams', 'jef', 'jef@m2l.fr', '3360102030403'),
(4, 'carlos', '$2y$10$amIc/Q/DmRGoGx/2yRWQY.BnnlIw7laYiDb5eHFa8gM.e8OOVFg3O', 'garcia', 'carlos', 'carlos@m2l.fr', '3360102030404'),
(5, 'marie', '$2y$10$WMCeidtpQcIh1nnpCe/v.ep6evbq9ndxaAO9mWzBgczqNYn9PKKCi', 'williams', 'marie', 'marie@m2l.fr', '3360102030405'),
(6, 'helena', '$2y$10$yWJiV5tWkBy0/b79GJCziePQcuyRnkiRmw2Q1cP8Fwa0ReOzk5qCS', 'moore', 'helena', 'helena@m2l.fr', '3360102030406'),
(7, 'peter', '$2y$10$mJa0wqFoHxE4w59LY.7WEeSJxwjNBA7iy34GxvoUqWTfOV/bgpHV6', 'taylor', 'peter', 'peter@m2l.fr', '3360102030407'),
(8, 'olga', '$2y$10$YctPME6lwsfLYBe2EJFiuec3TNmxGnKOnKkQNxf6phGJYJM5pwe/e', 'wilson', 'olga', 'olga@m2l.fr', '3360405060708');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `resa`
--
ALTER TABLE `resa`
  ADD PRIMARY KEY (`id_reservation`),
  ADD KEY `id_salle` (`id_salle`),
  ADD KEY `id_user` (`id_user`);

--
-- Index pour la table `salle`
--
ALTER TABLE `salle`
  ADD PRIMARY KEY (`id_salle`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `resa`
--
ALTER TABLE `resa`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `salle`
--
ALTER TABLE `salle`
  MODIFY `id_salle` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `resa`
--
ALTER TABLE `resa`
  ADD CONSTRAINT `resa_ibfk_1` FOREIGN KEY (`id_salle`) REFERENCES `salle` (`id_salle`),
  ADD CONSTRAINT `resa_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
