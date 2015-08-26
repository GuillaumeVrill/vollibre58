CREATE TABLE IF NOT EXISTS `tGrade`(
`id` INTEGER NOT NULL AUTO_INCREMENT,
`libelle` VARCHAR(255) NOT NULL,
`id_membre` int(11) NOT NULL,
PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS `tmembre` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(50) NOT NULL,
  `motDePasse` varchar(30) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `talert` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `date_deb` date NOT NULL,
  `date_fin` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_membre` INTEGER NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tevenements` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `titre` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `id_membre` INTEGER NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `timages` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `chemin` varchar(255) NOT NULL,
  `id_news` INTEGER NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tnews` (
  `id` INTEGER NOT NULL AUTO_INCREMENT,
  `titre` varchar(50) NOT NULL,
  `texte` text NOT NULL,
  `date` date NOT NULL,
  `id_membre` INTEGER NOT NULL,
  PRIMARY KEY (`id`)
);

ALTER TABLE `tGrade`
  ADD CONSTRAINT `tgrade_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `tmembre` (`id`);

ALTER TABLE `talert`
  ADD CONSTRAINT `talert_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `tmembre` (`id`);

ALTER TABLE `tevenements`
  ADD CONSTRAINT `tevenements_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `tmembre` (`id`);

ALTER TABLE `timages`
  ADD CONSTRAINT `timages_ibfk_1` FOREIGN KEY (`id_news`) REFERENCES `tnews` (`id`);

ALTER TABLE `tnews`
  ADD CONSTRAINT `tnews_ibfk_1` FOREIGN KEY (`id_membre`) REFERENCES `tmembre` (`id`);
  
INSERT INTO tmembre (`pseudo`, `motDePasse`, `email`) VALUES('guillaume', 'guillaume', 'vrilliaux.guillaume@hotmail.com');
INSERT INTO tmembre (`pseudo`, `motDePasse`, `email`) VALUES('seb', 'seb', 'seb@localhost');

INSERT INTO tGrade VALUES(1, 'ADMINISTRATEUR', 1);
INSERT INTO tGrade VALUES(2, 'ADMINISTRATEUR', 2);

