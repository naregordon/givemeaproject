-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Client :  localhost:8889
-- Généré le :  Lun 11 Août 2014 à 19:55
-- Version du serveur :  5.5.34
-- Version de PHP :  5.5.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `givemeaproject`
--

-- --------------------------------------------------------

--
-- Structure de la table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `projetnom` varchar(255) COLLATE utf8_bin NOT NULL,
  `projetdescription` varchar(1000) COLLATE utf8_bin NOT NULL,
  `projetwords` varchar(255) COLLATE utf8_bin NOT NULL,
  `profilrecherche` varchar(1000) COLLATE utf8_bin NOT NULL,
  `projetdate` datetime NOT NULL,
  `tempstravail` varchar(11) COLLATE utf8_bin NOT NULL,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Contenu de la table `project`
--

INSERT INTO `project` (`id`, `projetnom`, `projetdescription`, `projetwords`, `profilrecherche`, `projetdate`, `tempstravail`, `username`) VALUES
(1, 'Site vitrine abdul', 'elsjjdomjsfmjfjo fjldfjldfj', 'php, design, boucherie, hallal', 'php, javascript, design', '2014-08-11 00:00:00', '3', 'abdul'),
(2, 'sdfsd', 'sdfds', 'fsfssf', 'fsfssf', '2014-08-11 19:34:32', 'sfsfs', 'fsfssf');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `type` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=16 ;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `type`) VALUES
(6, 'janno', 'janno', 'janno@janno.com', 'pp'),
(7, 'michel', 'michel', 'michel@michel.com', 'pp'),
(8, 'poulet', 'poulet', 'poulet@hotmail.com', 'pp'),
(9, 'youpii', 'youpii', 'youpii@youpii.com', 'pp'),
(10, 'padawan', 'padawan', 'padawan@hotmail.com', 'pp'),
(11, 'karambar', 'karambar', 'karambar@hotmail.com', 'pp'),
(12, 'maman', 'maman', 'maman@maman.com', 'pp'),
(13, 'lucash', 'lucash', 'lucash@lucash.com', 'dev'),
(14, 'mahmoud', 'mahmoud', 'mahmoud@mahmoud.com', 'dev'),
(15, 'roodypoo', 'roodypoo', 'roodypoo@hotmail.com', 'pp');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
