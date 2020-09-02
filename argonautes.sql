-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 02 sep. 2020 à 15:33
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `jason`
--

-- --------------------------------------------------------

--
-- Structure de la table `argonautes`
--

CREATE TABLE `argonautes` (
  `argonautes_id` int(11) NOT NULL,
  `argonautes_name` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `argonautes`
--

INSERT INTO `argonautes` (`argonautes_id`, `argonautes_name`) VALUES
(1, 'Eleftheria'),
(2, 'Gennadios'),
(3, 'Lysimachos');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `argonautes`
--
ALTER TABLE `argonautes`
  ADD PRIMARY KEY (`argonautes_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `argonautes`
--
ALTER TABLE `argonautes`
  MODIFY `argonautes_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
