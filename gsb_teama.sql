-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 29 Mai 2018 à 15:33
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsb_teama`
--

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `idFamille` int(11) NOT NULL,
  `nomFamille` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `famille`
--

INSERT INTO `famille` (`idFamille`, `nomFamille`) VALUES
(1, 'effervescent'),
(2, 'gélule'),
(3, 'suppositoire'),
(4, 'spray'),
(5, 'sirop');

-- --------------------------------------------------------

--
-- Structure de la table `interragir`
--

CREATE TABLE `interragir` (
  `Id_produit` int(11) NOT NULL,
  `Id_produit_Medicament` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `interragir`
--

INSERT INTO `interragir` (`Id_produit`, `Id_produit_Medicament`) VALUES
(4, 1),
(4, 2),
(1, 3),
(4, 3),
(4, 5);

-- --------------------------------------------------------

--
-- Structure de la table `localisation`
--

CREATE TABLE `localisation` (
  `idSecteur` int(11) NOT NULL,
  `nomSecteur` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `localisation`
--

INSERT INTO `localisation` (`idSecteur`, `nomSecteur`) VALUES
(1, 'paris_centre'),
(2, 'sud'),
(3, 'nord'),
(4, 'ouest'),
(5, 'est'),
(6, 'dtom');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `Id_produit` int(11) NOT NULL,
  `Nom_commercial` varchar(200) DEFAULT NULL,
  `Effet_therapeutique` varchar(200) DEFAULT NULL,
  `Contre_indication` varchar(200) DEFAULT NULL,
  `Presentation` varchar(25) DEFAULT NULL,
  `Dosage` varchar(25) DEFAULT NULL,
  `pxHT` float DEFAULT NULL,
  `pxEchantillon` float DEFAULT NULL,
  `idFamille` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `medicament`
--

INSERT INTO `medicament` (`Id_produit`, `Nom_commercial`, `Effet_therapeutique`, `Contre_indication`, `Presentation`, `Dosage`, `pxHT`, `pxEchantillon`, `idFamille`) VALUES
(1, 'Dafalpran', 'Maux de tête et fièvre', 'moins de 10 ans et femme enceinte 1 comprimé toutes les 4h dans la limite de 4/jour', 'Soin des maux de tête', '1g', 4, 1.2, 1),
(2, 'Touxite', 'toux grasse et sèche', 'pas plus de 1 cuillère à soupe toutes les 6h dans la limite de 5/jour', 'Sirop pour la toux ', '5 mg / cl', 7, 1.65, 5),
(3, 'Doligan', 'Fièvre et nausée', 'moins de 10 ans et femme enceinte 1 comprimé toutes les 4h dans la limite de 4/jour', 'Anti fièvre et nausées', '1g', 5.3, 0.95, 2),
(4, 'Roidro', 'Hémorroïdes', '2 suppositoire/j espacés de 9h chacun', 'Soins des hémoroïdes', '250 mg', 14, 2.4, 3),
(5, 'Nezkicoule', 'Rhume', 'aucune', 'spray nettoyage nez', '5mg/l', 12.6, 2.4, 4);

-- --------------------------------------------------------

--
-- Structure de la table `praticien`
--

CREATE TABLE `praticien` (
  `Code` int(11) NOT NULL,
  `Raison_sociale` varchar(25) DEFAULT NULL,
  `Adresse` varchar(25) DEFAULT NULL,
  `Telephone` varchar(25) DEFAULT NULL,
  `Contact` varchar(50) DEFAULT NULL,
  `Coef_notoriete` float DEFAULT NULL,
  `Coef_confiance` float DEFAULT NULL,
  `idSpecialite` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `praticien`
--

INSERT INTO `praticien` (`Code`, `Raison_sociale`, `Adresse`, `Telephone`, `Contact`, `Coef_notoriete`, `Coef_confiance`, `idSpecialite`) VALUES
(1, 'Cabinet', 'Marseille', '06 54 85 26 37', 'Ruthien.Jean@contact.com', 54.6, 78.5, 1),
(2, 'Profession liberale', 'Lille', '06 55 67 22 19', 'Heu.LouisMarie@contact.com', 12.4, 0, 2),
(3, 'Cabinet', 'Paris', '06 74 22 04 58', 'Wayne.Bruce@contact.com', 75.7, 84.6, 3),
(4, 'Profession liberale', 'Paris', '06 75 41 24 12', 'Melan.Raoul@contact.com', 45.2, 67.8, 4),
(5, 'Cabinet', 'Nantes', '06 28 96 32 43', 'Mendes.Boris@contact.com', 89.9, 78.4, 5),
(6, 'Cabinet', 'Lyon', '04 72 58 22 33', 'Cabat.Benjamin@contact.com', 65.2, 60.7, 6),
(7, 'Profession liberale', 'Strastbourg', '06 43 25 78 46', 'Laval.Luis@contact.com', 51.8, 47.5, 7),
(8, 'Cabinet', 'Macon', '06 72 58 91 42 ', 'DeBruines.Christine@contact.fr', 27.9, 52.7, 8),
(9, 'Cabinet', 'Montcuq', '06 57 92 54 02', 'Gueret.David@contact.com', 12.2, 95.6, 9),
(10, 'Profession liberale', 'Amberieux', '06 85 04 51 12', 'Bertoux.Blandine@contact.com', 68.7, 74.5, 10);

-- --------------------------------------------------------

--
-- Structure de la table `specialite`
--

CREATE TABLE `specialite` (
  `idSpecialite` int(11) NOT NULL,
  `nomSpecialite` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `specialite`
--

INSERT INTO `specialite` (`idSpecialite`, `nomSpecialite`) VALUES
(1, 'Generaliste'),
(2, 'Cardiologue'),
(3, 'Geriatre'),
(4, 'Dermatologue'),
(5, 'Neurologue'),
(6, 'Pneumologue'),
(7, 'Ophtalmologue'),
(8, 'Rhumatologue'),
(9, 'Pediatre'),
(10, 'Psychiatre');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(25) NOT NULL,
  `mdp` varchar(25) DEFAULT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `mdp`, `nom`, `prenom`) VALUES
(1, 'ttheret', 'troo', 'theret', 'tom'),
(2, 'gminguez', 'toro', 'minguez', 'gaspard'),
(3, 'tcaron', 'roto', 'caron', 'tim');

-- --------------------------------------------------------

--
-- Structure de la table `visiter`
--

CREATE TABLE `visiter` (
  `date_visite` date DEFAULT NULL,
  `Id_produit` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `Code` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `visiter`
--

INSERT INTO `visiter` (`date_visite`, `Id_produit`, `id`, `Code`) VALUES
('2017-12-12', 2, 14, 8),
('2017-10-09', 3, 17, 2);

-- --------------------------------------------------------

--
-- Structure de la table `visiteur_medical`
--

CREATE TABLE `visiteur_medical` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `prenom` varchar(25) DEFAULT NULL,
  `adresse` varchar(25) DEFAULT NULL,
  `cp` varchar(25) DEFAULT NULL,
  `ville` varchar(25) DEFAULT NULL,
  `dateEmbauche` varchar(25) DEFAULT NULL,
  `idSecteur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `visiteur_medical`
--

INSERT INTO `visiteur_medical` (`id`, `nom`, `prenom`, `adresse`, `cp`, `ville`, `dateEmbauche`, `idSecteur`) VALUES
(1, 'Villechalane', 'Louis', '8 rue des Charmes', '46000', 'Cahors', '2005-12-21', 1),
(2, 'Andre', 'David', '1 rue Petit', '46200', 'Lalbenque', '1998-11-23', 1),
(3, 'Bedos', 'Christian', '1 rue Peranud', '46250', 'Montcuq', '1995-01-12', 1),
(4, 'Tusseau', 'Louis', '22 rue de Ternes', '46123', 'Gramat', '200-05-01', 1),
(5, 'Bentot', 'Pascal', '11 allée des Cerises', '46512', 'Bessines', '1992-07-09', 1),
(6, 'Bioret', 'Luc', '1 avenue gambetta', '46000', 'Cahors', '1998-05-11', 1),
(7, 'Bunisset', 'Francis', '10 rue des Perles', '93100', 'Montreuil', '1987-10-21', 1),
(8, 'Bunisset', 'Denise', '23 rue Manin', '75019', 'Paris', '2010-12-05', 1),
(9, 'Cacheux', 'Bernard', '114 rue Blanche', '75017', 'Paris', '2009-11-12', 1),
(10, 'Cadic', 'Eric', '123 avn de la Republique', '75011', 'Paris', '2008-09-23', 1),
(11, 'Charoze', 'Catherine', '100 rue Petit', '75019', 'Paris', '2005-11-12', 1),
(12, 'Clepkens', 'Christophe', '12 allée des Anges', '93230', 'Romainville', '2003-08-11', 1),
(13, 'Cottin', 'Vincenne', '36 rue Des Roches', '93100', 'Monteuil', '2001-11-18', 1),
(14, 'Debelle', 'Jeanne', '134 allée des Joncs', '44000', 'Nantes', '200-05-11', 4),
(15, 'Debroise', 'Michel', '2 Bld Jourdain', '44000', 'Nantes', '2001-04-17', 4),
(16, 'Eynde', 'Valerie', '3 Grand Place', '13015', 'Marseille', '1999-11-01', 2),
(17, 'Finck', 'Jacques', '10 avenue du Prado', '13002', 'Marseille', '1999-11-01', 2),
(18, 'Frémont', 'Fernande', '4 route de la mer', '13012', 'Allauh', '1998-10-01', 2),
(19, 'bgfbfg', 'bgfs', 'sfbgfg', 'gfb', 'sbgf', 'sfbfgb', 2),
(20, 'regarde', 'tabdd', 'putain', '68452', 'monzbi', '24/12/2012', 1),
(21, 'regarde', 'tabdd', 'putain', '68452', 'monzbi', '24/12/2012', 1),
(22, 'regarde', 'tabdd', 'putain', '68452', 'monzbi', '24/12/2012', 1),
(23, 'regarde', 'tabdd', 'putain', '68452', 'monzbi', '24/12/2012', 1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`idFamille`);

--
-- Index pour la table `interragir`
--
ALTER TABLE `interragir`
  ADD PRIMARY KEY (`Id_produit`,`Id_produit_Medicament`),
  ADD KEY `FK_Interragir_Id_produit_Medicament` (`Id_produit_Medicament`);

--
-- Index pour la table `localisation`
--
ALTER TABLE `localisation`
  ADD PRIMARY KEY (`idSecteur`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`Id_produit`),
  ADD KEY `FK_Medicament_idFamille` (`idFamille`);

--
-- Index pour la table `praticien`
--
ALTER TABLE `praticien`
  ADD PRIMARY KEY (`Code`),
  ADD KEY `FK_Praticien_idSpecialite` (`idSpecialite`);

--
-- Index pour la table `specialite`
--
ALTER TABLE `specialite`
  ADD PRIMARY KEY (`idSpecialite`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Index pour la table `visiter`
--
ALTER TABLE `visiter`
  ADD PRIMARY KEY (`Id_produit`,`id`,`Code`),
  ADD KEY `FK_Visiter_id` (`id`),
  ADD KEY `FK_Visiter_Code` (`Code`);

--
-- Index pour la table `visiteur_medical`
--
ALTER TABLE `visiteur_medical`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Visiteur_medical_idSecteur` (`idSecteur`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `famille`
--
ALTER TABLE `famille`
  MODIFY `idFamille` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `localisation`
--
ALTER TABLE `localisation`
  MODIFY `idSecteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `Id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `praticien`
--
ALTER TABLE `praticien`
  MODIFY `Code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `specialite`
--
ALTER TABLE `specialite`
  MODIFY `idSpecialite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `visiteur_medical`
--
ALTER TABLE `visiteur_medical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `interragir`
--
ALTER TABLE `interragir`
  ADD CONSTRAINT `FK_Interragir_Id_produit` FOREIGN KEY (`Id_produit`) REFERENCES `medicament` (`Id_produit`),
  ADD CONSTRAINT `FK_Interragir_Id_produit_Medicament` FOREIGN KEY (`Id_produit_Medicament`) REFERENCES `medicament` (`Id_produit`);

--
-- Contraintes pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD CONSTRAINT `FK_Medicament_idFamille` FOREIGN KEY (`idFamille`) REFERENCES `famille` (`idFamille`);

--
-- Contraintes pour la table `praticien`
--
ALTER TABLE `praticien`
  ADD CONSTRAINT `FK_Praticien_idSpecialite` FOREIGN KEY (`idSpecialite`) REFERENCES `specialite` (`idSpecialite`);

--
-- Contraintes pour la table `visiter`
--
ALTER TABLE `visiter`
  ADD CONSTRAINT `FK_Visiter_Code` FOREIGN KEY (`Code`) REFERENCES `praticien` (`Code`),
  ADD CONSTRAINT `FK_Visiter_Id_produit` FOREIGN KEY (`Id_produit`) REFERENCES `medicament` (`Id_produit`),
  ADD CONSTRAINT `FK_Visiter_id` FOREIGN KEY (`id`) REFERENCES `visiteur_medical` (`id`);

--
-- Contraintes pour la table `visiteur_medical`
--
ALTER TABLE `visiteur_medical`
  ADD CONSTRAINT `FK_Visiteur_medical_idSecteur` FOREIGN KEY (`idSecteur`) REFERENCES `localisation` (`idSecteur`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
