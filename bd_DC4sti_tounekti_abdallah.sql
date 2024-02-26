-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  Dim 25 fév. 2024 à 13:31
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_DC4sti_tounekti_abdallah`
--

-- --------------------------------------------------------

--
-- Structure de la table `distance`
--

CREATE TABLE `distance` (
  `id` int(11) NOT NULL,
  `id_ville_depart` int(11) DEFAULT NULL,
  `id_ville_arrivee` int(11) DEFAULT NULL,
  `distance` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `distance`
--

INSERT INTO `distance` (`id`, `id_ville_depart`, `id_ville_arrivee`, `distance`) VALUES
(1, 1, 20, 105),
(2, 1, 13, 172),
(3, 1, 21, 117),
(4, 1, 2, 107),
(5, 1, 17, 190),
(6, 1, 1, 0),
(7, 1, 5, 49),
(8, 1, 15, 285),
(9, 1, 14, 317),
(10, 1, 6, 180),
(11, 1, 3, 453),
(12, 1, 9, 105),
(13, 1, 4, 246),
(14, 1, 18, 587),
(15, 1, 11, 529),
(16, 1, 7, 225),
(17, 1, 19, 424),
(18, 1, 8, 364),
(19, 1, 10, 252),
(20, 1, 12, 210),
(21, 1, 16, 183);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `id_liv` int(5) NOT NULL,
  `date_liv` date NOT NULL,
  `expediteur` varchar(30) NOT NULL,
  `destinataire` varchar(30) NOT NULL,
  `telephone` varchar(8) NOT NULL,
  `id_ville_depart` int(5) NOT NULL,
  `id_ville_arrivee` int(5) NOT NULL,
  `poids` decimal(5,2) NOT NULL,
  `express` enum('O','N') NOT NULL,
  `Prix` decimal(7,3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`id_liv`, `date_liv`, `expediteur`, `destinataire`, `telephone`, `id_ville_depart`, `id_ville_arrivee`, `poids`, `express`, `Prix`) VALUES
(1, '2024-02-12', 'Oussama TEZEGHDENTI', 'Ali TOUNSI', '98979695', 1, 5, '14.00', 'O', '20.580'),
(2, '2024-02-13', 'Ali ben aouen', 'Ali TOUNSI', '22232425', 1, 18, '3.00', 'N', '35.220');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `libelle`) VALUES
(1, 'Beja'),
(2, 'Bizerte'),
(3, 'Gabes'),
(4, 'Gafsa'),
(5, 'Jandouba'),
(6, 'Kairouan'),
(7, 'Kasserine'),
(8, 'Kebili'),
(9, 'Kef'),
(10, 'Mahdia'),
(11, 'Medenine'),
(12, 'Monastir'),
(13, 'Nabeul'),
(14, 'Sfax'),
(15, 'Sidi Bouzid'),
(16, 'Siliana'),
(17, 'Sousse'),
(18, 'Tataouine'),
(19, 'Tozeur'),
(20, 'Tunis'),
(21, 'Zaghouan');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `distance`
--
ALTER TABLE `distance`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ville_depart` (`id_ville_depart`),
  ADD KEY `ville_arrivee` (`id_ville_arrivee`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`id_liv`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `distance`
--
ALTER TABLE `distance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `id_liv` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
