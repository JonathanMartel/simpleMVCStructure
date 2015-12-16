-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 14 Décembre 2015 à 13:16
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `chassoeuvre`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `idAdministrateur` int(11) NOT NULL AUTO_INCREMENT,
  `loginAdmin` varchar(10) DEFAULT NULL,
  `passAdmin` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idAdministrateur`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`idAdministrateur`, `loginAdmin`, `passAdmin`) VALUES
(1, 'admin', 'admin'),
(2, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

CREATE TABLE IF NOT EXISTS `adresse` (
  `idAdresse` int(11) NOT NULL AUTO_INCREMENT,
  `adresseCiv` varchar(50) DEFAULT NULL,
  `batiment` varchar(50) DEFAULT NULL,
  `parc` varchar(50) DEFAULT NULL,
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  PRIMARY KEY (`idAdresse`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `adresse`
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
-- Structure de la table `arrondissement`
--

CREATE TABLE IF NOT EXISTS `arrondissement` (
  `idArrondissement` int(11) NOT NULL AUTO_INCREMENT,
  `nomArrondissement` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idArrondissement`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `arrondissement`
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
-- Structure de la table `artiste`
--

CREATE TABLE IF NOT EXISTS `artiste` (
  `idArtiste` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(30) DEFAULT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `collectif` varchar(50) DEFAULT NULL,
  `noInterne` int(11) DEFAULT NULL,
  `photoArtiste` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idArtiste`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `artiste`
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
-- Structure de la table `categorie`
--

CREATE TABLE IF NOT EXISTS `categorie` (
  `idCategorie` int(11) NOT NULL AUTO_INCREMENT,
  `nomCategorie` varchar(30) DEFAULT NULL,
  `nomCatAng` varchar(30) DEFAULT NULL,
  `nomSousCat` varchar(30) DEFAULT NULL,
  `nomSousCatAng` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `categorie`
--

INSERT INTO `categorie` (`idCategorie`, `nomCategorie`, `nomCatAng`, `nomSousCat`, `nomSousCatAng`) VALUES
(1, 'Art Mural', 'Street Art', 'Graffiti Tag', 'Graffiti Tag'),
(2, 'Beaux-Arts', 'Fine Arts', 'Sculpture', 'Sculpture'),
(3, 'Beaux-Arts', 'Fine Arts', 'Installation', 'Installation'),
(4, 'Arts décoratifs', 'Decorative Arts', 'Vitrail', 'Stained Glass');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE IF NOT EXISTS `commentaire` (
  `idCommentaire` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire` varchar(500) DEFAULT NULL,
  `validationCommentaire` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `contient`
--

CREATE TABLE IF NOT EXISTS `contient` (
  `idPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `idCommentaire` int(11) NOT NULL,
  PRIMARY KEY (`idPhoto`,`idCommentaire`),
  KEY `FK_contient_idCommentaire` (`idCommentaire`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `ecrit`
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
-- Structure de la table `est_fait_de`
--

CREATE TABLE IF NOT EXISTS `est_fait_de` (
  `idOeuvre` int(11) NOT NULL AUTO_INCREMENT,
  `idMateriaux` int(11) NOT NULL,
  PRIMARY KEY (`idOeuvre`,`idMateriaux`),
  KEY `FK_est_fait_de_idMateriaux` (`idMateriaux`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `est_identifie_par`
--

CREATE TABLE IF NOT EXISTS `est_identifie_par` (
  `idOeuvre` int(11) NOT NULL AUTO_INCREMENT,
  `idPhoto` int(11) NOT NULL,
  PRIMARY KEY (`idOeuvre`,`idPhoto`),
  KEY `FK_est_identifie_par_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `gagne`
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
-- Structure de la table `materiaux`
--

CREATE TABLE IF NOT EXISTS `materiaux` (
  `idMateriaux` int(11) NOT NULL AUTO_INCREMENT,
  `nomMateriaux` varchar(30) DEFAULT NULL,
  `nomMateriauxAng` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idMateriaux`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `materiaux`
--

INSERT INTO `materiaux` (`idMateriaux`, `nomMateriaux`, `nomMateriauxAng`) VALUES
(1, 'Bronze', 'Bronze'),
(2, 'acier corten', 'Corten steel'),
(3, 'Acier corten; granit', 'Corten steel; granite'),
(4, 'Ciment; fer; peinture', 'Cement; iron; paint'),
(5, 'Calcaire', 'Limestone'),
(6, 'Acier Corten; acier inoxydable', 'Corten steel; stainless steel;'),
(7, 'Acier inoxydable', 'Stainless steel');

-- --------------------------------------------------------

--
-- Structure de la table `moderateur`
--

CREATE TABLE IF NOT EXISTS `moderateur` (
  `idMod` int(11) NOT NULL AUTO_INCREMENT,
  `loginMod` varchar(10) DEFAULT NULL,
  `passMod` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idMod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `moderateur`
--

INSERT INTO `moderateur` (`idMod`, `loginMod`, `passMod`) VALUES
(1, 'moderateur', 'modo');

-- --------------------------------------------------------

--
-- Structure de la table `modere`
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
-- Structure de la table `oeuvre`
--

CREATE TABLE IF NOT EXISTS `oeuvre` (
  `idOeuvre` int(11) NOT NULL AUTO_INCREMENT,
  `titreOeuvre` varchar(50) DEFAULT NULL,
  `titreVariante` varchar(50) DEFAULT NULL,
  `technique` varchar(30) DEFAULT NULL,
  `NoInterne` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `validationOeuvre` tinyint(1) DEFAULT NULL,
  `idArrondissement` int(11) NOT NULL,
  `idAdresse` int(11) NOT NULL,
  `idArtiste` int(11) NOT NULL,
  `idCategorie` int(11) NOT NULL,
  `techniqueAng` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idOeuvre`),
  KEY `FK_Oeuvre_idArrondissement` (`idArrondissement`),
  KEY `FK_Oeuvre_idAdresse` (`idAdresse`),
  KEY `FK_Oeuvre_idArtiste` (`idArtiste`),
  KEY `FK_Oeuvre_idCategorie` (`idCategorie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `oeuvre`
--

INSERT INTO `oeuvre` (`idOeuvre`, `titreOeuvre`, `titreVariante`, `technique`, `NoInterne`, `description`, `validationOeuvre`, `idArrondissement`, `idAdresse`, `idArtiste`, `idCategorie`, `techniqueAng`) VALUES
(1, 'Source', NULL, 'Bronze coulé; boulonné', NULL, NULL, 1, 1, 1, 1, 2, 'Cast bronze; bolted');

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE IF NOT EXISTS `photo` (
  `idPhoto` int(11) NOT NULL AUTO_INCREMENT,
  `nomPhoto` varchar(50) DEFAULT NULL,
  `validationPhoto` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`idPhoto`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `photo`
--

INSERT INTO `photo` (`idPhoto`, `nomPhoto`, `validationPhoto`) VALUES
(1, 'img_2.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `propose`
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
-- Structure de la table `succes`
--

CREATE TABLE IF NOT EXISTS `succes` (
  `idSucces` int(11) NOT NULL AUTO_INCREMENT,
  `nomSucces` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idSucces`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_enregistre`
--

CREATE TABLE IF NOT EXISTS `utilisateur_enregistre` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `loginUtilisateur` varchar(10) DEFAULT NULL,
  `passUtilisateur` varchar(10) DEFAULT NULL,
  `bio` varchar(500) DEFAULT NULL,
  `score` int(11) DEFAULT NULL,
  `photoUtilisateur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idUtilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `vote`
--

CREATE TABLE IF NOT EXISTS `vote` (
  `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT,
  `idPhoto` int(11) NOT NULL,
  PRIMARY KEY (`idUtilisateur`,`idPhoto`),
  KEY `FK_vote_idPhoto` (`idPhoto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contient`
--
ALTER TABLE `contient`
  ADD CONSTRAINT `FK_contient_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_contient_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`);

--
-- Contraintes pour la table `ecrit`
--
ALTER TABLE `ecrit`
  ADD CONSTRAINT `FK_ecrit_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_ecrit_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Contraintes pour la table `est_fait_de`
--
ALTER TABLE `est_fait_de`
  ADD CONSTRAINT `FK_est_fait_de_idMateriaux` FOREIGN KEY (`idMateriaux`) REFERENCES `materiaux` (`idMateriaux`),
  ADD CONSTRAINT `FK_est_fait_de_idOeuvre` FOREIGN KEY (`idOeuvre`) REFERENCES `oeuvre` (`idOeuvre`);

--
-- Contraintes pour la table `est_identifie_par`
--
ALTER TABLE `est_identifie_par`
  ADD CONSTRAINT `FK_est_identifie_par_idOeuvre` FOREIGN KEY (`idOeuvre`) REFERENCES `oeuvre` (`idOeuvre`),
  ADD CONSTRAINT `FK_est_identifie_par_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`);

--
-- Contraintes pour la table `gagne`
--
ALTER TABLE `gagne`
  ADD CONSTRAINT `FK_gagne_idSucces` FOREIGN KEY (`idSucces`) REFERENCES `succes` (`idSucces`),
  ADD CONSTRAINT `FK_gagne_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Contraintes pour la table `modere`
--
ALTER TABLE `modere`
  ADD CONSTRAINT `FK_modere_idCommentaire` FOREIGN KEY (`idCommentaire`) REFERENCES `commentaire` (`idCommentaire`),
  ADD CONSTRAINT `FK_modere_idMod` FOREIGN KEY (`idMod`) REFERENCES `moderateur` (`idMod`),
  ADD CONSTRAINT `FK_modere_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`);

--
-- Contraintes pour la table `oeuvre`
--
ALTER TABLE `oeuvre`
  ADD CONSTRAINT `FK_Oeuvre_idAdresse` FOREIGN KEY (`idAdresse`) REFERENCES `adresse` (`idAdresse`),
  ADD CONSTRAINT `FK_Oeuvre_idArrondissement` FOREIGN KEY (`idArrondissement`) REFERENCES `arrondissement` (`idArrondissement`),
  ADD CONSTRAINT `FK_Oeuvre_idArtiste` FOREIGN KEY (`idArtiste`) REFERENCES `artiste` (`idArtiste`),
  ADD CONSTRAINT `FK_Oeuvre_idCategorie` FOREIGN KEY (`idCategorie`) REFERENCES `categorie` (`idCategorie`);

--
-- Contraintes pour la table `propose`
--
ALTER TABLE `propose`
  ADD CONSTRAINT `FK_propose_idOeuvre` FOREIGN KEY (`idOeuvre`) REFERENCES `oeuvre` (`idOeuvre`),
  ADD CONSTRAINT `FK_propose_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`),
  ADD CONSTRAINT `FK_propose_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

--
-- Contraintes pour la table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `FK_vote_idPhoto` FOREIGN KEY (`idPhoto`) REFERENCES `photo` (`idPhoto`),
  ADD CONSTRAINT `FK_vote_idUtilisateur` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur_enregistre` (`idUtilisateur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
