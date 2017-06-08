-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `buku`;
CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) NOT NULL,
  `penulis` varchar(255) NOT NULL,
  PRIMARY KEY (`id_buku`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `buku` (`id_buku`, `judul`, `penulis`) VALUES
(1,	'Getting Started with the Internet of Things',	'Pfister, Cuno '),
(2,	'Industry 4.0: The Industrial Internet of Things',	'Gilchrist, Alasdair'),
(3,	'Expert PHP and MySQL: Application Design and Development',	'Rochkind, Marc');

-- 2017-05-30 22:16:46
