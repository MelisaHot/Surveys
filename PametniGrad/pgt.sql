-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2019 at 03:04 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pgt`
--

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE `anketa` (
  `id` int(11) NOT NULL,
  `Kor_ime` text,
  `anketa` text,
  `pitanje1` text,
  `pitanje2` text,
  `pitanje3` text,
  `pitanje4` text,
  `pitanje5` text,
  `pitanje6` text,
  `pitanje7` text,
  `pitanje8` text,
  `pitanje9` text,
  `pitanje10` text,
  `pitanje11` text,
  `pitanje12` text,
  `pitanje13` text,
  `pitanje14` text,
  `pitanje15` text,
  `Datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`id`, `Kor_ime`, `anketa`, `pitanje1`, `pitanje2`, `pitanje3`, `pitanje4`, `pitanje5`, `pitanje6`, `pitanje7`, `pitanje8`, `pitanje9`, `pitanje10`, `pitanje11`, `pitanje12`, `pitanje13`, `pitanje14`, `pitanje15`, `Datum`) VALUES
(3, 'tare3', 'sredina', '1', 'da', 'U bilo koje doba dana', '2', '111', '1111					', 'Automobil', 'Teheran', '1', '111', '111', 'da', '11', 'da', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(4, 'Pasdaran', 'sredina', 'aaa', 'da', 'U bilo koje doba dana', '1', 'ddfdf', '	cdfd				', 'Automobil', 'Teheran', '3', 'frrggr', 'efefe', 'zavisi', 'dfdfd', 'mozda', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(5, 'Pasdaran', 'sredina', 'aaa', 'da', 'U bilo koje doba dana', '1', 'ddfdf', '	cdfd				', 'Automobil', 'Teheran', '3', 'frrggr', 'efefe', 'zavisi', 'dfdfd', 'mozda', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(7, 'Pasdaran', 'sredina', '1.Maj', 'da', 'U bilo koje doba dana', '2', 'Kazne', '		Podne							', 'Trotinet', 'Teheran', '3', 'Katastrofa', 'Ne', 'da', '1.Maj', 'mozda', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(8, 'Pasdaran', 'sredina', '1.Maj', 'mozda', 'U bilo koje doba dana', '1', 'Kazne', '	c								', 'Automobil', 'Teheran', '3', 'asdad', 'Ne', 'zavisi', '1.Maj', 'da', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(9, 'Pasdaran', 'transport', '1.Maj', 'da', 'U bilo koje doba dana', '1', 'Kazne', '	efef								', 'Automobil', 'Teheran', '2', 'asdad', 'dvvd', 'zavisi', 'dfdf', 'da', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(10, 'Pasdaran', 'zdrastvo', 'dfgdfgf', 'da', 'U bilo koje doba dana', '1', '', '									', 'Automobil', 'Teheran', '', '', '', '', '', '', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(11, 'Pasdaran', 'zdrastvo', 'fef', 'da', 'U bilo koje doba dana', '1', 'asdsa', '	fefef								', 'Automobil', 'Teheran', '2', 'rrfgrg', '111', 'zavisi', 'rfrfr', 'da', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(12, 'Pasdaran', 'zdrastvo', '1.Maj', 'da', 'U bilo koje doba dana', '1', '', '									', 'Automobil', 'Teheran', '', '', '', 'da', '', 'zavisi', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(13, 'Pasdaran', 'zdrastvo', 'vdvvfdv', 'da', 'U bilo koje doba dana', '1', '', '									', 'Automobil', 'Teheran', '2', '', '', 'zavisi', '', 'mozda', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(14, 'Pasdaran', 'zdrastvo', '1.Maj', 'da', 'U bilo koje doba dana', '1', 'asdsa', '	fgfgf								', 'Automobil', 'Teheran', '1', 'asdad', '111', 'mozda', '1.Maj', 'da', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(15, 'Tratko', 'sredina', '1.Maj', 'ne', 'U bilo koje doba dana', '', 'Kazne', '	kad hoj								', 'Automobil', 'Teheran', '1', 'asdad', 'efefe', 'zavisi', 'efefe', 'da', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(16, 'Tratko', 'sredina', '1.Maj', 'da', 'U bilo koje doba dana', '1', 'Kazne', '	hjhjhj								', 'Automobil', 'Teheran', '1', 'asdad', 'asdasd', 'da', 'asdasd', 'da', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(17, 'Tratko', 'transport', '1.Maj', 'da', 'U bilo koje doba dana', '1', '111', '	hggugu								', 'Automobil', 'Teheran', '1', 'huhuhu', 'dvvd', 'mozda', '111', 'da', 'U bilo koje doba dana', '2019-08-15 20:22:36'),
(18, 'Taiba313', 'transport', '1.Maj', 'zavisi', 'Drugo', '1', 'Kazne', 'Oko podne									', 'Trotinet', 'Istanbul', '2', 'Katastrofa', 'Ne', 'da', '1.Maj', 'zavisi', 'Drugo', '2019-08-15 20:22:36');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `Ime` varchar(25) CHARACTER SET latin1 NOT NULL,
  `Prezime` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_mysql561_ci NOT NULL,
  `Kor_ime` varchar(35) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(35) CHARACTER SET latin1 NOT NULL,
  `Sifra` varchar(35) CHARACTER SET latin1 NOT NULL,
  `P_Sifra` varchar(35) CHARACTER SET latin1 NOT NULL,
  `Pol` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_croatian_ci DEFAULT NULL,
  `Zemlja` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `sredina` int(11) NOT NULL DEFAULT '0',
  `zdrastvo` int(11) NOT NULL DEFAULT '0',
  `transport` int(11) NOT NULL DEFAULT '0',
  `Datum` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `Ime`, `Prezime`, `Kor_ime`, `Email`, `Sifra`, `P_Sifra`, `Pol`, `Zemlja`, `sredina`, `zdrastvo`, `transport`, `Datum`) VALUES
(1, 'Tarik', 'HadÅ¾iÄ‡', 'Pasdaran', 'Pasdaran', '313.Pasdaran', '313.Pasdaran', 'Muško', 'Iran', 1, 1, 1, '2019-08-14 21:54:18'),
(2, 'Berina', 'Hadzic', 'Berinaa', 'Ina@gmail.com', 'takica', 'takica', 'Å½ensk', 'Iran', 0, 0, 0, '2019-08-14 21:54:18'),
(3, 'Berina', 'HadÅ¾iÄ‡', 'Tratko', 'bekicana_t@gmail.com', 'takica123', 'takica123', 'Å½ensk', 'Iran', 1, 0, 1, '2019-08-14 21:54:18'),
(6, 'dzejlan', 'dzejlan', 'dzejlan', 'dzejlan@dzejaln.com', '123', '123', 'MuÅ¡ko', 'Croatia', 0, 0, 0, '2019-08-14 21:54:18'),
(7, 'dzejlan', 'dzejlan', 'dzzz', 'dzejlan@dzejaln.com', '123', '123', 'MuÅ¡ko', 'Macedonia', 0, 0, 0, '2019-08-14 21:54:18'),
(8, 'tarik', 'hadzic', 'tare3', 'tareeqhadzic@gmail.com', '313313', '313313', 'MuÅ¡ko', 'Bosnia and Herzegovina', 1, 0, 0, '2019-08-14 21:54:18'),
(9, 'dsdssdsdsd', 'sdsdsd', 'tare33', 'tareeqhadzic@gmail.com', '1234567', '1234567', 'MuÅ¡ko', 'Montenegro', 0, 0, 0, '2019-08-14 21:54:18'),
(10, 'bajram', 'bajramov', 'barrrrr', 'dzejlan@dzejaln.com', '5555555', '5555555', 'MuÅ¡ko', 'Bosnia and Herzegovina', 0, 0, 0, '2019-08-14 21:54:18'),
(11, 'lkokkkk', 'llllllll', 'llllllllll', 'dzejlan@dzejaln.com', '5555555555', '5555555555', 'Å½ensk', 'Serbia', 0, 0, 0, '2019-08-14 21:54:18'),
(12, 'dzejlan', 'sdsdsd', 'mmmmm', 'dzejlan@dzejaln.com', '123321', '123321', 'Å½ensk', 'Serbia', 0, 0, 0, '2019-08-14 21:54:18'),
(13, 'tarik', 'sdsdsd', 'tare34', 'tareeqhadzic@gmail.com', '123456', '123456', 'MuÅ¡ko', 'Albania', 0, 0, 0, '2019-08-14 21:54:18'),
(14, 'Taiba', 'HadÅ¾iÄ‡', 'Taiba313', 'taiba.h313@gmail.com', 'babomama', 'babomama', 'Å½ensk', 'Bosnia and Herzegovina', 0, 0, 1, '2019-08-15 01:09:08'),
(15, 'Ejup', 'Kajan', 'DrEjup', 'ekajan.dunp@gmail.com', 'dunp123', 'dunp123', 'MuÅ¡ko', 'Serbia', 0, 0, 0, '2019-08-15 08:44:51'),
(16, 'Aldina', 'AvdiÄ‡', 'Aldina', 'aldina.dunp@hotmail.com', 'dunp123', 'dunp123', 'Å½ensk', 'Serbia', 0, 0, 0, '2019-08-15 08:48:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anketa`
--
ALTER TABLE `anketa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
