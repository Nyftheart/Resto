-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 28 sep. 2020 à 10:01
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `restaurant`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(4) NOT NULL,
  `nom_restaurant` varchar(50) NOT NULL,
  `menu` varchar(30) DEFAULT NULL,
  `boisson` varchar(30) DEFAULT NULL,
  `dessert` varchar(30) DEFAULT NULL,
  `sauce` varchar(30) DEFAULT NULL,
  `supplement` varchar(30) DEFAULT NULL,
  `deletion_flag` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id_commande`, `nom_restaurant`, `menu`, `boisson`, `dessert`, `sauce`, `supplement`, `deletion_flag`) VALUES
(2, 'PizzaLuigi', 'Hawaienne', 'Fanta 1,5L', 'Mousse de chocolat', 'Sauce chili', NULL, 0),
(3, 'PizzaLuigi', 'Marguerita', 'Fanta 1,5L', 'Mousse de chocolat', 'Sauce barbecue', 'Fondant au chocolat', 0),
(4, 'PizzaLuigi', 'Marguerita', 'Coca 330ml', 'Eclair au chocolat', 'Sauce barbecue', NULL, 0),
(5, 'PizzaLuigi', 'Americaine', 'Coca 330ml', 'Mousse de chocolat', 'Sauce barbecue', NULL, 0),
(6, 'PizzaLuigi', 'Marguerita', 'Ice Tea 330ml', 'Fondant au chocolat', 'Sauce barbecue', NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
