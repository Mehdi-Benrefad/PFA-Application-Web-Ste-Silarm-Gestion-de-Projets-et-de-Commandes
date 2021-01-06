-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 06 jan. 2021 à 02:10
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `silarm`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id_admin`, `nom`, `prenom`, `login`, `password`) VALUES
(1, 'Benrefad', 'Mehdi', 'admin', 'admin2');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telephone` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nom`, `prenom`, `email`, `login`, `password`, `telephone`) VALUES
(1, 'user', 'user', 'user@gmail.com', 'user', 'user2', NULL),
(2, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(3, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(4, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(5, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(6, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(7, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(8, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(9, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(10, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'admin', 'user2', NULL),
(11, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'user', 'user2', NULL),
(12, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'user', 'user2', NULL),
(13, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'user', 'user2', NULL),
(14, 'Benrefad', 'Mehdi', 'benrefadmehdi@gmail.com', 'user', 'user2', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fournitures`
--

CREATE TABLE `fournitures` (
  `id_fournitures` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `quantite` int(10) NOT NULL,
  `description` text NOT NULL,
  `etat` varchar(10) NOT NULL,
  `id_client` int(10) NOT NULL,
  `date_fournitures` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `fournitures`
--

INSERT INTO `fournitures` (`id_fournitures`, `nom`, `quantite`, `description`, `etat`, `id_client`, `date_fournitures`) VALUES
(1, '', 0, '', 'FINALISE', 1, NULL),
(2, '', 0, '', 'VALIDE', 1, '2020-08-12 19:04:03'),
(3, 'livre', 45, '', 'REFUSE', 16, '2020-08-25 10:49:52'),
(4, 'tonik', 500, 'bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader ', 'EN ATTENTE', 1, '2020-09-11 14:53:56'),
(5, 'bader2', 334, 'bader', 'EN ATTENTE', 17, '2020-09-11 14:56:32');

-- --------------------------------------------------------

--
-- Structure de la table `traveaux`
--

CREATE TABLE `traveaux` (
  `id_travaux` int(10) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `etat` varchar(10) NOT NULL,
  `id_client` int(10) NOT NULL,
  `date_traveaux` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `traveaux`
--

INSERT INTO `traveaux` (`id_travaux`, `nom`, `description`, `etat`, `id_client`, `date_traveaux`) VALUES
(2, 'site web', 'notre projet est la construction de sites web dinamique pour notre entreprise', 'VALIDE', 1, NULL),
(3, '', '', 'FINALISE', 1, NULL),
(5, '', '', 'FINALISE', 1, NULL),
(6, '', '', 'FINALISE', 1, NULL),
(7, '', '', 'FINALISE', 1, NULL),
(8, 'ecole', 'notre projet a pour sujet la construction d un etablissement scolaire', 'REFUSE', 2, NULL),
(9, 'competition', 'on a besois de 300 pc et de 40 projecteurs', 'FINALISE', 1, NULL),
(10, 'hahahaha', 'jhdhhhhhhhh hhhhhhh hhhhhh hhhhhhhhhhhhhhh hhhhhhhh hhhhhhhh hhhhhhhh hhhhhhhhhhhh hhhhhhhhhh hhhhhhhhhhh hhhhhhhhhh hhhhhhhh hhhhhhhh hhhhhhh hhhhhhhhh hhhhhhhhhhhhhhhhhh hhhhhhhhhh hhhhhhhh jj', 'FINALISE', 1, '2020-08-10 21:49:15'),
(11, '', '', 'EN ATTENTE', 1, '2020-08-10 22:40:55'),
(12, 'hvyty', 'uf7yug', 'EN ATTENTE', 1, '2020-08-24 13:06:15'),
(13, 'hhh', 'uf7yug', 'EN ATTENTE', 1, '2020-08-24 13:06:37'),
(14, 'batiment', 'batiment', 'FINALISE', 16, '2020-08-25 10:49:33'),
(15, 'bader', 'bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader bader ', 'REFUSE', 1, '2020-09-11 14:53:13'),
(16, 'bader2', 'bader2', 'FINALISE', 17, '2020-09-11 14:55:43'),
(17, 'hfytdyvyfjyf', 'ygfyugydtf', 'REFUSE', 1, '2020-09-18 01:23:21');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `fournitures`
--
ALTER TABLE `fournitures`
  ADD PRIMARY KEY (`id_fournitures`);

--
-- Index pour la table `traveaux`
--
ALTER TABLE `traveaux`
  ADD PRIMARY KEY (`id_travaux`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `fournitures`
--
ALTER TABLE `fournitures`
  MODIFY `id_fournitures` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `traveaux`
--
ALTER TABLE `traveaux`
  MODIFY `id_travaux` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
