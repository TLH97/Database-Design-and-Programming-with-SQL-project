-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Gazda: localhost
-- Timp de generare: 25 Mar 2016 la 07:43
-- Versiune server: 5.6.12-log
-- Versiune PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Bază de date: `service`
--
CREATE DATABASE IF NOT EXISTS `service` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `service`;

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `angajati`
--

CREATE TABLE IF NOT EXISTS `angajati` (
  `id_angajat` int(11) NOT NULL,
  `nume` varchar(20) NOT NULL,
  `prenume` varchar(15) NOT NULL,
  `salariu` int(11) NOT NULL,
  `varsta` int(11) NOT NULL,
  PRIMARY KEY (`id_angajat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `angajati`
--

INSERT INTO `angajati` (`id_angajat`, `nume`, `prenume`, `salariu`, `varsta`) VALUES
(1, 'Tudor', 'Cristian', 1200, 23),
(2, 'Neculai', 'Alex', 1550, 31),
(3, 'Moraru', 'Emanuel', 1370, 35),
(4, 'Dumitru', 'Cosmin', 1140, 21);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `clienti`
--

CREATE TABLE IF NOT EXISTS `clienti` (
  `cnp` bigint(20) NOT NULL,
  `nume` varchar(10) NOT NULL,
  `prenume` varchar(15) NOT NULL,
  `numar_telefon` varchar(20) NOT NULL,
  `e_mail` varchar(10) NOT NULL,
  `adresa` varchar(20) NOT NULL,
  PRIMARY KEY (`cnp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `clienti`
--

INSERT INTO `clienti` (`cnp`, `nume`, `prenume`, `numar_telefon`, `e_mail`, `adresa`) VALUES
(1700821456710, 'Sandu', 'Iulian', '0757892713', 'sandu.iuli', 'str. costieni, nr. 1'),
(1890809387005, 'Savastre', 'Alexandru', '0725896517', 'savastre_a', 'str. Pacii, nr. 23, '),
(1940920455042, 'Popescu', 'Cristian Tudor', '0765931406', 'cristiantu', 'bld. Unirii. bl. A2,'),
(1950424105025, 'Vasilache', 'Lucian', '0761638920', 'vasilache9', 'str. toamnei, bl E5,'),
(2850424152914, 'Toma', 'Mihaela', '0765938420', 'toma_mihae', 'str. amurgului, bl.H'),
(2910401102574, 'Moraru', 'Elena', '0741269320', 'elena_mora', 'str. Plopilor, nr. 1'),
(2941222439400, 'Zamfir', 'Andreea', '0766981735', 'andreea.z9', 'str. Independentei, ');

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `elemente_comenzi`
--

CREATE TABLE IF NOT EXISTS `elemente_comenzi` (
  `denumire` varchar(20) NOT NULL,
  `cantitate` int(11) NOT NULL,
  `pret` int(11) NOT NULL,
  `id_comanda` int(11) DEFAULT NULL,
  KEY `fk2` (`id_comanda`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `elemente_comenzi`
--

INSERT INTO `elemente_comenzi` (`denumire`, `cantitate`, `pret`, `id_comanda`) VALUES
('anvelope', 3, 689, 1),
('oglinda retrovizoare', 1, 110, 1),
('far stanga', 1, 780, 2),
('lampa stop dreapta', 1, 72, 3),
('planetara', 2, 300, 4),
('radiator', 1, 500, 5),
('alternator', 1, 150, 6),
('garnitura chiuloasa', 1, 60, 7),
('cutie de viteze', 1, 1500, 8);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `masini`
--

CREATE TABLE IF NOT EXISTS `masini` (
  `id_masina` varchar(20) NOT NULL,
  `model` varchar(15) NOT NULL,
  `carburant` varchar(10) NOT NULL,
  `motor` varchar(15) NOT NULL,
  `an_fabricatie` int(11) NOT NULL,
  PRIMARY KEY (`id_masina`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `masini`
--

INSERT INTO `masini` (`id_masina`, `model`, `carburant`, `motor`, `an_fabricatie`) VALUES
('173D5D3D5947EC5DI', 'Audi', 'Diesel', '2000', 2010),
('3BECCBFF33D16215H', 'Ford', 'GPL', '1200', 2003),
('8F6FA971E55CB121W', 'Dacia', 'Benzina', '1400', 2005),
('924EFEC413336FCA7', 'BMW', 'Benzina', '2100', 2009),
('94EBECBBB2117E36U', 'Renault', 'Diesel', '1600', 2008),
('BF2616EE22F414A2E', 'BMW', 'GPL', '1900', 1999),
('BFBDD6AFAEE5329D3', 'Skoda', 'Benzina', '1400', 2002),
('D7C32627F9F22AED1', 'Opel', 'Diesel', '1900', 2007);

-- --------------------------------------------------------

--
-- Structura de tabel pentru tabelul `vanzari`
--

CREATE TABLE IF NOT EXISTS `vanzari` (
  `id_comanda` int(11) NOT NULL,
  `data` date NOT NULL,
  `id_masina` varchar(20) DEFAULT NULL,
  `cnp` bigint(20) DEFAULT NULL,
  `id_angajat` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_comanda`),
  KEY `fk3` (`id_masina`),
  KEY `fk4` (`cnp`),
  KEY `fk5` (`id_angajat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Salvarea datelor din tabel `vanzari`
--

INSERT INTO `vanzari` (`id_comanda`, `data`, `id_masina`, `cnp`, `id_angajat`) VALUES
(1, '2016-02-19', 'D7C32627F9F22AED1', 1700821456710, 2),
(2, '2016-03-19', '173D5D3D5947EC5DI', 1950424105025, 4),
(3, '2016-03-12', '3BECCBFF33D16215H', 1950424105025, 3),
(4, '2016-02-29', '924EFEC413336FCA7', 1940920455042, 1),
(5, '2015-10-17', '8F6FA971E55CB121W', 1890809387005, 4),
(6, '2015-11-29', '94EBECBBB2117E36U', 2941222439400, 2),
(7, '2016-01-12', 'BFBDD6AFAEE5329D3', 2850424152914, 2),
(8, '2016-01-02', 'BF2616EE22F414A2E', 2910401102574, 3);

--
-- Restrictii pentru tabele sterse
--

--
-- Restrictii pentru tabele `elemente_comenzi`
--
ALTER TABLE `elemente_comenzi`
  ADD CONSTRAINT `fk2` FOREIGN KEY (`id_comanda`) REFERENCES `vanzari` (`id_comanda`);

--
-- Restrictii pentru tabele `vanzari`
--
ALTER TABLE `vanzari`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`id_angajat`) REFERENCES `angajati` (`id_angajat`),
  ADD CONSTRAINT `fk3` FOREIGN KEY (`id_masina`) REFERENCES `masini` (`id_masina`),
  ADD CONSTRAINT `fk4` FOREIGN KEY (`cnp`) REFERENCES `clienti` (`cnp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
