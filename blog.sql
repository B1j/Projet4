-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Ven 29 Septembre 2017 à 14:11
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billets`
--

CREATE TABLE `billets` (
  `id` int(11) NOT NULL,
  `date_creation` datetime NOT NULL,
  `titre` text NOT NULL,
  `contenu` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `billets`
--

INSERT INTO `billets` (`id`, `date_creation`, `titre`, `contenu`) VALUES
(42, '2017-09-26 15:15:41', 'Chapitre test 8', '<p>Texte du Chapitre test 8.</p>'),
(41, '2017-09-26 15:15:29', 'Chapitre test 7', '<p>Texte du Chapitre test 7.</p>'),
(40, '2017-09-25 15:59:30', 'Chapitre test 6', '<p>Texte du Chapitre test 6.</p>'),
(39, '2017-09-25 15:59:21', 'Chapitre test 5', '<p>Texte du Chapitre test 5.</p>'),
(38, '2017-09-25 15:59:12', 'Chapitre test 4', '<p>Texte du Chapitre test 4.</p>'),
(37, '2017-09-25 15:59:04', 'Chapitre test 3', '<p>Texte du Chapitre test 3.</p>'),
(23, '2017-09-25 15:11:23', 'Chapitre test 1', '<blockquote>\r\n<p>Texte du chapitre test 1.</p>\r\n</blockquote>\r\n<p style="text-align: center;">texte au milieu</p>\r\n<p style="text-align: right;">texte a droite</p>'),
(43, '2017-09-26 15:15:52', 'Chapitre test 9', '<p>Texte du Chapitre test 9.</p>'),
(44, '2017-09-26 15:16:00', 'Chapitre test 10', '<p>Texte du Chapitre test 10.</p>'),
(24, '2017-09-25 15:15:24', 'Chapitre test 2', '<p>Texte du Chapitre test 2.</p>'),
(45, '2017-09-26 15:16:07', 'Chapitre test 11', '<p>Texte du Chapitre test 11.</p>');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_billet` int(11) NOT NULL,
  `affichage` int(11) NOT NULL,
  `auteur` varchar(255) NOT NULL,
  `commentaire` text NOT NULL,
  `date_commentaire` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_billet`, `affichage`, `auteur`, `commentaire`, `date_commentaire`) VALUES
(73, 23, 1, 'test 4', 'Commentaire de test chapitre 1', '2017-09-26 15:43:01'),
(72, 23, 1, 'test 3', 'Commentaire de test chapitre 1', '2017-09-26 15:42:53'),
(71, 23, 2, 'Test 2', 'Commentaire de test chapitre 1', '2017-09-26 15:42:39'),
(70, 23, 2, 'Test1', 'Commentaire de test chapitre 1', '2017-09-26 15:42:24');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `billets`
--
ALTER TABLE `billets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `billets`
--
ALTER TABLE `billets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
