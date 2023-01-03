-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 03 jan. 2023 à 18:30
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bddesaip`
--

-- --------------------------------------------------------

--
-- Structure de la table `impression`
--

CREATE TABLE `impression` (
  `Id_Impression` int(11) NOT NULL,
  `etat` int(11) NOT NULL,
  `localisation_fichier` text NOT NULL,
  `description_impression` text NOT NULL,
  `date_debut` datetime DEFAULT NULL,
  `date_fin` datetime DEFAULT NULL,
  `date_souhaitee` date NOT NULL,
  `Id_email_demandeur` varchar(50) NOT NULL,
  `Id_email_validation` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `impression`
--
ALTER TABLE `impression`
  ADD PRIMARY KEY (`Id_Impression`),
  ADD KEY `Id_email_demandeur` (`Id_email_demandeur`),
  ADD KEY `Id_email_validation` (`Id_email_validation`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `impression`
--
ALTER TABLE `impression`
  MODIFY `Id_Impression` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `impression`
--
ALTER TABLE `impression`
  ADD CONSTRAINT `impression_ibfk_1` FOREIGN KEY (`Id_email_demandeur`) REFERENCES `utilisateur` (`Id_email`),
  ADD CONSTRAINT `impression_ibfk_2` FOREIGN KEY (`Id_email_validation`) REFERENCES `utilisateur` (`Id_email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
