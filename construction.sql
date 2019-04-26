-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  ven. 26 avr. 2019 à 11:43
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `construction`
--

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `categorie` varchar(100) NOT NULL,
  `description_projet` varchar(300) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `etapes` varchar(100) NOT NULL,
  `description_etape` varchar(300) NOT NULL,
  `delai` varchar(100) NOT NULL,
  `images` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `categorie`, `description_projet`, `statut`, `etapes`, `description_etape`, `delai`, `images`, `user_id`) VALUES
(1, 'Construction maisons', 'une villa de 5 pieces', 'en attente', 'pose de fondements', 'blala', '0', '0', 1),
(2, 'Construction ecole', 'construire une Ã©cole moderne', 'en attente', 'pose des fondements', '0', '2semaines', 'images/cool.jpeg', 2),
(3, 'Construction maison', 'villa duplex de 5 pieces avec piscine', 'en attente', '0', '0', '0', '0', 3),
(6, 'Construction maison', 'villa duplex de 4 pieces avec piscine', 'en cours', 'pose de fondements', 'pose de fondements solide', '1semaine', '0', 6);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `ville` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `email`, `password`, `contact`, `ville`) VALUES
(1, 'ham', 'lamia', 'lamia@gmail.com', '01020304', '01020304', 'Abidjan'),
(2, 'dia', 'assana', 'assana@gmail.com', '0000', '05050505', 'Abidjan'),
(3, 'bamboush', 'yachou', 'bamboush@gmail.com', '5555', '05050505', 'Abidjan'),
(4, 'Tigui', 'Mai', 'tiguilingou@gmail.com', '1234', '01020304', 'Abidjan'),
(5, 'Kone', 'Jean', 'jean@gmail.com', '0102', '05050505', 'Abidjan'),
(6, 'Dena', 'Ange', 'ange@gmail.com', '0505', '02030405', 'Abidjan'),
(7, 'Sery', 'Jean', 'sery@gmail.com', '0102', '02030405', 'Abidjan');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
