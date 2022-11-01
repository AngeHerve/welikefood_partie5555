-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 18 oct. 2022 à 21:40
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `brief2`
--

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id_com` int(11) NOT NULL,
  `id_pub` int(11) NOT NULL,
  `mesage` varchar(100) NOT NULL,
  `date_com` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`id_com`, `id_pub`, `mesage`, `date_com`) VALUES
(12, 31, 'bonjour à tous', '2022-10-17 14:24:43'),
(13, 0, 'bonjour à tous', '2022-10-17 14:26:58'),
(14, 31, 'bonjour à tous', '2022-10-17 14:34:12'),
(15, 27, 'bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à ', '2022-10-17 14:37:40'),
(16, 29, 'bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à ', '2022-10-17 15:10:22'),
(17, 32, 'bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à ', '2022-10-17 15:22:40'),
(18, 31, 'bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à tous bonjour à ', '2022-10-18 14:26:26');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id_com`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
