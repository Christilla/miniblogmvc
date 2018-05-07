-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Lun 07 Mai 2018 à 16:54
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
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `author` varchar(20) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `created_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_post`, `author`, `content`, `created_date`) VALUES
(1, 5, 'dfvb ', 'vcbcbc', '2018-05-07 16:22:22'),
(2, 5, 'bvcbvc', 'vbvcbvc', '2018-05-07 16:26:09'),
(3, 5, 'bvcbvc', 'vbvcbvc', '2018-05-07 16:29:02'),
(4, 5, 'bvcbvc', 'vbvcbvc', '2018-05-07 16:29:10'),
(5, 5, 'vcbvcb', 'bcvbvc', '2018-05-07 16:29:30'),
(6, 1, 'vcxv', 'cxvcxvc', '2018-05-07 16:31:43'),
(7, 19, 'cvcxvcx', 'vxcxvxc', '2018-05-07 16:31:51'),
(8, 20, 'fdgfdg', 'gdfgdf', '2018-05-07 16:40:56'),
(9, 20, 'fdgfdg', 'gdfgdf', '2018-05-07 16:41:21'),
(10, 20, 'fdgfdg', 'gdfgdf', '2018-05-07 16:41:50'),
(11, 20, 'fdgfdg', 'gdfgdf', '2018-05-07 16:43:32');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
