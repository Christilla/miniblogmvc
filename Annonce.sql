-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 16 Mai 2018 à 11:57
-- Version du serveur :  5.7.21-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `miniblog_mvc`
--

-- --------------------------------------------------------

--
-- Structure de la table `Annonce`
--

CREATE TABLE `Annonce` (
  `id` int(11) NOT NULL,
  `titre` varchar(20) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(200) NOT NULL,
  `region` varchar(200) NOT NULL,
  `auteur` varchar(200) NOT NULL,
  `numero_tel` int(11) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `Annonce`
--

INSERT INTO `Annonce` (`id`, `titre`, `prix`, `categorie`, `region`, `auteur`, `numero_tel`, `description`) VALUES
(1, 'dcdsqs', 125, 'Jouets', 'Aquitaine', 'toto', 123456789, 'hfkqdhfkdq'),
(2, 'dcdsqs', 125, 'Jouets', 'Aquitaine', 'toto', 123456789, 'hfkqdhfkdq'),
(3, 'dcdsqs', 125, 'Jouets', 'Aquitaine', 'toto', 123456789, 'hfkqdhfkdq'),
(4, 'dcdsqs', 125, 'Jouets', 'Aquitaine', 'toto', 123456789, 'hfkqdhfkdq'),
(5, 'dcdsqs', 125, 'Jouets', 'Aquitaine', 'toto', 123456789, 'hfkqdhfkdq'),
(6, 'dcdsqs', 125, 'Jouets', 'Aquitaine', 'Chris', 123456789, 'hfkqdhfkdq'),
(7, 'dcdsqs', 125, 'Véhicules', 'Aquitaine', 'Chris', 123456789, 'hfkqdhfkdq'),
(8, 'dcdsqs', 125, 'Immobilier', 'Aquitaine', 'Chris', 123456789, 'hfkqdhfkdq'),
(11, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(12, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(13, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(14, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(15, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(16, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(17, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(18, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(19, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(20, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(21, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(22, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(23, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(24, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(25, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(26, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo'),
(27, 'vélo', 8, 'Vêtements', 'Alsace', 'Chris', 345345435, 'vééélo');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Annonce`
--
ALTER TABLE `Annonce`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Annonce`
--
ALTER TABLE `Annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
