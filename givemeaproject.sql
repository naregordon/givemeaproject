-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mer 13 Août 2014 à 15:17
-- Version du serveur: 5.5.37-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `givemeaproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `canditats`
--

CREATE TABLE IF NOT EXISTS `canditats` (
  `id` int(11) NOT NULL,
  `id_projet` int(11) NOT NULL,
  `id_candidat` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE IF NOT EXISTS `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projetnom` varchar(255) COLLATE utf8_bin NOT NULL,
  `projetdescription` varchar(1000) COLLATE utf8_bin NOT NULL,
  `projetwords` varchar(255) COLLATE utf8_bin NOT NULL,
  `profilrecherche` varchar(1000) COLLATE utf8_bin NOT NULL,
  `projetdate` datetime NOT NULL,
  `tempstravail` varchar(11) COLLATE utf8_bin NOT NULL,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `statut` varchar(32) COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `projetnom`, `projetdescription`, `projetwords`, `profilrecherche`, `projetdate`, `tempstravail`, `username`, `statut`, `photo`) VALUES
(1, 'Site vitrine abdul', 'elsjjdomjsfmjfjo fjldfjldfj', 'php, design, boucherie, hallal', 'php, javascript, design', '2014-08-11 00:00:00', '3', 'abdul', 'en cours', ''),
(2, 'sdfsd', 'sdfds', 'fsfssf', 'fsfssf', '2014-08-11 19:34:32', 'sfsfs', 'fsfssf', 'en cours', ''),
(3, 'Nouvea', 'referzf', 'zergfzergr', 'zergrtrtg', '2014-08-12 00:00:00', 'zgbrtg', 'rtgrt', 'termine', '');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(32) COLLATE utf8_bin NOT NULL,
  `photo` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(32) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(32) COLLATE utf8_bin NOT NULL,
  `presentation` varchar(1000) COLLATE utf8_bin NOT NULL,
  `paypal` varchar(255) COLLATE utf8_bin NOT NULL,
  `competences` varchar(1000) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=18 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`, `photo`, `nom`, `prenom`, `presentation`, `paypal`, `competences`) VALUES
(6, 'janno', 'janno', 'janno@janno.com', 'pp', 'Gasmask.jpg', 'Lapin', 'Janno', 'Je suis un gentil petit lapin', 'janno@janno.com', 'Je suis un pro du PHP'),
(7, 'michel', 'michel', 'michel@michel.com', 'pp', '0', '', '', '', '', ''),
(8, 'poulet', 'poulet', 'poulet@hotmail.com', 'pp', '0', '', '', '', '', ''),
(9, 'youpii', 'youpii', 'youpii@youpii.com', 'pp', '0', '', '', '', '', ''),
(10, 'padawan', 'padawan', 'padawan@hotmail.com', 'pp', '0', '', '', '', '', ''),
(11, 'karambar', 'karambar', 'karambar@hotmail.com', 'pp', '0', '', '', '', '', ''),
(12, 'maman', 'maman', 'maman@maman.com', 'pp', '0', '', '', '', '', ''),
(13, 'lucash', 'lucash', 'lucash@lucash.com', 'dev', '0', '', '', '', '', ''),
(14, 'mahmoud', 'mahmoud', 'mahmoud@mahmoud.com', 'dev', '0', '', '', '', '', ''),
(15, 'roodypoo', 'roodypoo', 'roodypoo@hotmail.com', 'pp', '0', '', '', '', '', ''),
(16, 'arnaud', '123456', 'arnaud@mail.com', 'dev', 'oim.jpg', '', '', '', '', ''),
(17, 'polo5', '123456', 'polo5@mail.com', 'pp', 'Gasmask.jpg', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
