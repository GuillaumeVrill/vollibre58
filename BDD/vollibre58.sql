-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 29 Février 2016 à 11:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `vollibre58`
--

-- --------------------------------------------------------

--
-- Structure de la table `talbums`
--

CREATE TABLE IF NOT EXISTS `talbums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `talert`
--

CREATE TABLE IF NOT EXISTS `talert` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_membre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tdisposition`
--

CREATE TABLE IF NOT EXISTS `tdisposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tdisposition`
--

INSERT INTO `tdisposition` (`id`, `libelle`, `description`, `nom`, `url`) VALUES
(1, 'standard', 'texte 1 au dessus, image au milieu, texte 2 en dessous', 'std', 'static/images/dispositionsArticles/01standard.png'),
(2, '3 images', 'texte 1 au dessus, 3 images au centre, la plus grande a gauche, texte 2 en dessous', '3pic', 'static/images/dispositionsArticles/02pictures3.png'),
(3, '3 images inversées', 'texte 1 au dessus, 3 images au centre, la plus grande a droite, texte 2 en dessous', '3pic-rev', 'static/images/dispositionsArticles/03pictures3_rev.png'),
(4, '2 images', 'texte 1 au dessus, 2 images au centre, texte 2 en dessous', '2pic', 'static/images/dispositionsArticles/04pictures2.png'),
(5, 'verticale gauche', 'image verticale a gauche, texte a droite', 'vert-left', 'static/images/dispositionsArticles/05verticalLeft.png'),
(6, 'verticale droite', 'image verticale a droite, texte a gauche', 'vert-right', 'static/images/dispositionsArticles/06verticalRight.png');

-- --------------------------------------------------------

--
-- Structure de la table `tevenements`
--

CREATE TABLE IF NOT EXISTS `tevenements` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_membre` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tgrade`
--

CREATE TABLE IF NOT EXISTS `tgrade` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `tgrade`
--

INSERT INTO `tgrade` (`id`, `libelle`) VALUES
(1, 'administrateur'),
(2, 'moderateur'),
(3, 'redacteur'),
(4, 'membre');

-- --------------------------------------------------------

--
-- Structure de la table `timages`
--

CREATE TABLE IF NOT EXISTS `timages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(255) NOT NULL,
  `id_news` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tmembre`
--

CREATE TABLE IF NOT EXISTS `tmembre` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `motDePasse` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_grade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`)
) DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tmembre`
--

INSERT INTO `tmembre` VALUES (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@example.com', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tmessage`
--

CREATE TABLE IF NOT EXISTS `tmessage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mailDestinataire` varchar(255) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tnews`
--

CREATE TABLE IF NOT EXISTS `tnews` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `texte` text NOT NULL,
  `date` date NOT NULL,
  `id_membre` int(11) NOT NULL,
  `id_disposition` int(11) NOT NULL DEFAULT '1',
  `texte2` text,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `tvideo_accueil`
--

CREATE TABLE IF NOT EXISTS `tvideo_accueil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `chemin` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tvideo_accueil`
--

INSERT INTO `tvideo_accueil` (`id`, `chemin`) VALUES
(1, 'https://www.youtube.com/embed/JW2ShQsMFEk');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
