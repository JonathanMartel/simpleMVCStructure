-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-12-2015 a las 04:21:22
-- Versión del servidor: 5.6.15-log
-- Versión de PHP: 5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `chassoeuvre`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `idAdministrateur` int(3) NOT NULL AUTO_INCREMENT,
  `loginAdmin` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `passAdmin` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idAdministrateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `administrateur`
--

INSERT INTO `administrateur` (`idAdministrateur`, `loginAdmin`, `passAdmin`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
  `idAdresse` int(11) NOT NULL AUTO_INCREMENT,
  `adresseCiv` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `batiment` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `parc` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  PRIMARY KEY (`idAdresse`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `adresse`
--

INSERT INTO `adresse` (`idAdresse`, `adresseCiv`, `batiment`, `parc`, `latitude`, `longitude`) VALUES
(1, '6445, avenue Monkland, Montréal', 'Centre sportif Notre-Dame-de Grâce', 'Parc Benny', 45.4664, -73.6316),
(2, NULL, NULL, 'Square Dalhousie', 45.5121, -73.551),
(3, '4101, rue Sherbrooke Est, Montréal (QC) H1X 2B2', 'Jardin botanique', 'Jardin botanique', 45.5616, -73.5627),
(4, '385, rue Sherbrooke Est, Montréal, (QC) H2X 3L1', '', 'Intersection des rues Sherbrooke et Saint-Denis', 45.5169, -73.5678),
(5, NULL, NULL, 'Parc Miville-Couture', 45.5169, -73.5552),
(6, NULL, NULL, 'Place Roland-Proulx', 45.4724, -73.5847),
(7, NULL, NULL, 'Place De La Dauversière', 45.5085, -73.5533),
(8, '1 Avenue du Casino, Montréal, QC H3C 4W7', 'Casino de Montréal', 'Parc Jean-Drapeau, Île Notre-Dame', 45.506, -73.5267);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `arrondissement`
--

CREATE TABLE IF NOT EXISTS `arrondissement` (
  `idArrondissement` int(11) NOT NULL AUTO_INCREMENT,
  `nomArrondissement` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idArrondissement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `arrondissement`
--

INSERT INTO `arrondissement` (`idArrondissement`, `nomArrondissement`) VALUES
(1, 'Côte-des-Neiges–Notre-Dame-de-'),
(2, 'Ville-Marie'),
(3, 'Rosemont–La Petite-Patrie'),
(4, 'Le Plateau-Mont-Royal'),
(5, 'Le Sud-Ouest'),
(6, 'Mercier–Hochelaga-Maisonneuve'),
(7, 'Rivière-des-Prairies–Pointe-au');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `idArtiste` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `collectif` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `noInterne` int(11) DEFAULT NULL,
  `photoArtiste` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idArtiste`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `artiste`
--

INSERT INTO `artiste` (`idArtiste`, `prenom`, `nom`, `collectif`, `noInterne`, `photoArtiste`) VALUES
(1, 'Patrick', 'Coutu', NULL, 960, ''),
(2, 'Jocelyne', 'Alloucherie', NULL, 1098, 'c-alloucherie_jocelyne.jpg'),
(3, 'Pierre Yves', 'Angers', NULL, 1135, ''),
(4, 'Denise', 'Arsenault', NULL, 1152, 'arsenault.jpg'),
(5, NULL, NULL, 'Atelier TAG', 1156, NULL),
(6, 'Henri-Georges', 'Adam', NULL, 1173, 'Henri-Georges_Adam.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomCatAng` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`, `nomCatAng`) VALUES
(1, 'Art Mural', 'Street Art'),
(2, 'Beaux-Arts', 'Fine Arts'),
(3, 'Beaux-Arts', 'Fine Arts'),
(4, 'Arts décoratifs', 'Decorative Arts');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `idCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `validationCommentaire` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contient`
--

CREATE TABLE IF NOT EXISTS `contient` (
  `idPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `idCommentaire` int(11) NOT NULL,
  PRIMARY KEY (`idPhoto`,`idCommentaire`),
  KEY `FK_contient_idCommentaire` (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecrit`
--

CREATE TABLE IF NOT EXISTS `ecrit` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `idCommentaire` int(11) NOT NULL,
  `dateCommentaire` date DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`,`idCommentaire`),
  KEY `FK_ecrit_idCommentaire` (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_identifie_par`
--

CREATE TABLE IF NOT EXISTS `est_identifie_par` (
  `idOeuvre` int(11) NOT NULL AUTO_INCREMENT,
  `idPhoto` int(11) NOT NULL,
  PRIMARY KEY (`idOeuvre`,`idPhoto`),
  KEY `FK_est_identifie_par_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gagne`
--

CREATE TABLE IF NOT EXISTS `gagne` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `idSucces` int(11) NOT NULL,
  `dateSucces` datetime DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`,`idSucces`),
  KEY `FK_gagne_idSucces` (`idSucces`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moderateur`
--

CREATE TABLE IF NOT EXISTS `moderateur` (
  `idMod` int(11) NOT NULL AUTO_INCREMENT,
  `loginMod` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `passMod` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idMod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `moderateur`
--

INSERT INTO `moderateur` (`idMod`, `loginMod`, `passMod`) VALUES
(1, 'moderateur', 'modo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modere`
--

CREATE TABLE IF NOT EXISTS `modere` (
  `idMod` int(11) NOT NULL AUTO_INCREMENT,
  `idCommentaire` int(11) NOT NULL,
  `idPhoto` int(11) NOT NULL,
  PRIMARY KEY (`idMod`,`idCommentaire`,`idPhoto`),
  KEY `FK_modere_idCommentaire` (`idCommentaire`),
  KEY `FK_modere_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oeuvre`
--

CREATE TABLE IF NOT EXISTS `oeuvre` (
  `idOeuvre` int(11) NOT NULL AUTO_INCREMENT,
  `titreOeuvre` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `titreVariante` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `technique` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `techniqueAng` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `NoInterne` int(11) DEFAULT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `validationOeuvre` tinyint(1) DEFAULT NULL,
  `idArrondissement` int(11) NOT NULL,
  `idAdresse` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `idSousCategorie` int(11) NOT NULL,
  `nomMateriaux` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nomMateriauxAng` varchar(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idOeuvre`),
  KEY `FK_Oeuvre_idArrondissement` (`idArrondissement`),
  KEY `FK_Oeuvre_idAdresse` (`idAdresse`),
  KEY `FK_Oeuvre_idArtiste` (`idArtiste`),
  KEY `FK_Oeuvre_idCategorie` (`idCategorie`),
  KEY `FK_Oeuvre_idSousCategorie` (`idSousCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `oeuvre`
--

INSERT INTO `oeuvre` (`idOeuvre`, `titreOeuvre`, `titreVariante`, `technique`, `techniqueAng`, `NoInterne`, `description`, `validationOeuvre`, `idArrondissement`, `idAdresse`, `idArtiste`, `idCategorie`, `idSousCategorie`, `nomMateriaux`, `nomMateriauxAng`) VALUES
(2, 'aaa', 'aaa', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, 1, NULL, NULL),
(3, 'aaa', 'aaa', NULL, NULL, NULL, NULL, NULL, 1, 2, 2, 2, 2, NULL, NULL),
(4, 'aaa', 'aaa', NULL, NULL, NULL, NULL, NULL, 3, 3, 3, 3, 3, NULL, NULL),
(5, 'aaa', 'aaa', NULL, NULL, NULL, NULL, NULL, 4, 4, 4, 4, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `idPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `nomPhoto` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `nbPhoto` int(11) DEFAULT NULL,
  `validationPhoto` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idPhoto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `photo`
--

INSERT INTO `photo` (`idPhoto`, `nomPhoto`, `nbPhoto`, `validationPhoto`) VALUES
(1, 'img_2.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propose`
--

CREATE TABLE IF NOT EXISTS `propose` (
  `idOeuvre` int(11) NOT NULL AUTO_INCREMENT,
  `idUtilisateur` int(11) NOT NULL,
  `idPhoto` int(11) NOT NULL,
  `dateProposition` datetime DEFAULT NULL,
  PRIMARY KEY (`idOeuvre`,`idUtilisateur`,`idPhoto`),
  KEY `FK_propose_idUtilisateur` (`idUtilisateur`),
  KEY `FK_propose_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `souscategorie`
--

CREATE TABLE IF NOT EXISTS `souscategorie` (
  `idSousCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomSousCat` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomSousCatAng` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idSousCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `souscategorie`
--

INSERT INTO `souscategorie` (`idSousCategorie`, `nomSousCat`, `nomSousCatAng`) VALUES
(1, 'Graffiti Tag', 'Graffiti Tag'),
(2, 'Sculpture', 'Sculpture'),
(3, 'Installation', 'Installation'),
(4, 'Vitrail', 'Stained Glass');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `succes`
--

CREATE TABLE IF NOT EXISTS `succes` (
  `idSucces` int(11) NOT NULL AUTO_INCREMENT,
  `nomSucces` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idSucces`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utilisateur_enregistre`
--

CREATE TABLE IF NOT EXISTS `utilisateur_enregistre` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `loginUtilisateur` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `passUtilisateur` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `bio` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `photoUtilisateur` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `idPhoto` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idPhoto`),
  KEY `FK_vote_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `FK_contient_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_contient_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`);

--
-- Filtros para la tabla `ecrit`
--
ALTER TABLE `ecrit`
  ADD CONSTRAINT `FK_ecrit_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_ecrit_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Filtros para la tabla `est_identifie_par`
--
ALTER TABLE `est_identifie_par`
  ADD CONSTRAINT `FK_est_identifie_par_idOeuvre` FOREIGN KEY (`idOeuvre`) REFERENCES `oeuvre` (`idOeuvre`),
  ADD CONSTRAINT `FK_est_identifie_par_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`);

--
-- Filtros para la tabla `gagne`
--
ALTER TABLE `gagne`
  ADD CONSTRAINT `FK_gagne_idSucces` FOREIGN KEY (`idSucces`) REFERENCES `succes` (`idSucces`),
  ADD CONSTRAINT `FK_gagne_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Filtros para la tabla `modere`
--
ALTER TABLE `modere`
  ADD CONSTRAINT `FK_modere_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_modere_idMod` FOREIGN KEY (`idMod`) REFERENCES `moderateur` (`idMod`),
  ADD CONSTRAINT `FK_modere_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`);

--
-- Filtros para la tabla `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD CONSTRAINT `FK_Oeuvre_idAdresse` FOREIGN KEY (`idAdresse`) REFERENCES `adresse` (`idAdresse`),
  ADD CONSTRAINT `FK_Oeuvre_idArrondissement` FOREIGN KEY (`idArrondissement`) REFERENCES `arrondissement` (`idArrondissement`),
  ADD CONSTRAINT `FK_Oeuvre_idArtiste` FOREIGN KEY (`idArtiste`) REFERENCES `artiste` (`idArtiste`),
  ADD CONSTRAINT `FK_Oeuvre_idCategorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`),
  ADD CONSTRAINT `FK_Oeuvre_idSousCategorie` FOREIGN KEY (`idSousCategorie`) REFERENCES `souscategorie` (`idSousCategorie`);

--
-- Filtros para la tabla `propose`
--
ALTER TABLE `propose`
  ADD CONSTRAINT `FK_propose_idOeuvre` FOREIGN KEY (`idOeuvre`) REFERENCES `oeuvre` (`idOeuvre`),
  ADD CONSTRAINT `FK_propose_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`),
  ADD CONSTRAINT `FK_propose_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Filtros para la tabla `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `FK_vote_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`),
  ADD CONSTRAINT `FK_vote_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
