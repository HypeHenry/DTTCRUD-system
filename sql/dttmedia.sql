-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Gegenereerd op: 29 okt 2015 om 12:55
-- Serverversie: 5.5.42
-- PHP-versie: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dttmedia`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `article`
--

CREATE TABLE `article` (
  `article_id` int(3) NOT NULL,
  `article_title` mediumtext NOT NULL,
  `article_summery` mediumtext NOT NULL,
  `article_content` longtext NOT NULL,
  `publication_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_summery`, `article_content`, `publication_date`) VALUES
(1, 'test', 'testupdate', 'test  ', '2015-10-14'),
(5, 'ajax', 'wordt', 'kampion altijd         s', '2015-10-22'),
(6, 'adadd', 'adad', 'asd', '2015-10-31'),
(7, 'FIA werkt aan plan voor goedkopere motoren in Formule 1 ', 'De internationale autosportfederatie FIA werkt aan een plan om met ingang van 2017 een tweede type motor in de Formule 1 te introduceren. Die motor moet een goedkoop alternatief worden voor de huidige V6-turbos.', 'De nieuwe motoren moeten een alternatief vormen voor de huidige 1.6 liter hybride V6-turbokrachtbronnen. Het is de bedoeling dat de motoren vergelijkbaar zijn met de 1.6 liter V6-turbos, maar door simpelere techniek een stuk goedkoper worden aangeboden. De FIA wil de motoren voor zes miljoen euro per jaar aanbieden. De huidige motoren kosten al snel achttien miljoen euro.  eroen Put uit Schalkhaar streed vandaag van 9.30 tot 13.00 samen met elf andere monteurs, een uit elke provincie, om die felbegeerde stage bij het Formule 1-team van Williams. Voor de winnaar: meedraaien in de Williams Racing fabriek in Oxfordshire, Engeland en bij de Grand Prix van Abu Dhabi. Deze droombaan is mogelijk gemaakt door uitzendbureau Randstad.\r\n\r\nVan de 2300 deelnemers bleven er uiteindelijk twaalf over. De overgebleven kandidaten moesten de banden wisselen, de voorvleugel vervangen en een storing oplossen bij een Formule 3 auto.\r\n\r\nPut, die Mechatronica studeert in Apeldoorn, kijkt met een dubbel gevoel terug op deze finale. ,,Het was een geweldige ervaring voor mij. Ik heb veel nieuwe dingen geleerd. Het is alleen ongelooflijk zuur dat ik niet heb gewonnen. Ik heb ook wel pech gehad met de concurrentie. Mijn concurrenten waren namelijk ouder en belangrijker nog, ze hadden meer ervaring dan ik ', '2015-11-21'),
(10, 'Feyenoord', 'wordt geen kampioen ', 'AJax wint vandaag weer ', '0000-00-00'),
(11, 'adas', 'asdsa', 'asdas', '2015-10-10'),
(12, 'adas', 'asdsa', 'asdas', '2015-10-10');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `activated` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `firstname`, `lastname`, `activated`) VALUES
(1, 'admin', '$2y$12$0vBGLgP2KJFrinfdc7NHZ.Wqr5qvlYH64AX2xdH.4yRNRtS2twzNW', 'henry', 'barima', '1');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexen voor tabel `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `article`
--
ALTER TABLE `article`
  MODIFY `article_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT voor een tabel `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
