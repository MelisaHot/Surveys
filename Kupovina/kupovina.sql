-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 10:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kupovina`
--

-- --------------------------------------------------------

--
-- Table structure for table `anketa`
--

CREATE TABLE `anketa` (
  `id` int(11) NOT NULL,
  `idkorisnika` int(11) NOT NULL,
  `idpitanja` int(11) NOT NULL,
  `odgovor` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `anketa`
--

INSERT INTO `anketa` (`id`, `idkorisnika`, `idpitanja`, `odgovor`) VALUES
(1, 4, 1, 'Manje od 1 sat dnevno'),
(2, 4, 2, 'Zabava'),
(3, 4, 2, 'Posao'),
(4, 4, 3, 'da'),
(5, 4, 4, 'Da'),
(6, 4, 5, 'Još uvek nisam našao/la interesantnu ponudu'),
(7, 4, 6, 'da'),
(8, 4, 7, 'Hrana'),
(9, 4, 8, '         da                       '),
(10, 4, 9, 'Ušteda vremena i novca'),
(11, 4, 10, '                    ne            '),
(188, 4, 1, 'Više od 7 sati dnevno'),
(189, 4, 2, 'Zabava'),
(190, 4, 3, 'gfds'),
(191, 4, 4, 'Ne'),
(192, 4, 5, 'Još uvek nisam našao/la interesantnu ponudu'),
(193, 4, 6, 'gtrfdes'),
(194, 4, 7, 'Hrana'),
(195, 4, 8, 'fdcsx'),
(196, 4, 9, 'Ušteda vremena i novca'),
(197, 4, 10, 'gfds'),
(198, 4, 1, 'Više od 7 sati dnevno'),
(199, 4, 2, 'Zabava'),
(200, 4, 3, 'fds'),
(201, 4, 4, 'Ne'),
(202, 4, 5, 'Još uvek nisam našao/la interesantnu ponudu'),
(203, 4, 6, 'dsa'),
(204, 4, 7, 'Hrana'),
(205, 4, 8, 'frdewsqa'),
(206, 4, 9, 'Ušteda vremena i novca'),
(207, 4, 10, 'fdews'),
(208, 4, 1, 'Više od 7 sati dnevno'),
(209, 4, 2, 'Zabava'),
(210, 4, 3, 'da'),
(211, 4, 4, 'Ne'),
(212, 4, 5, 'Još uvek nisam našao/la interesantnu ponudu'),
(213, 4, 6, 'da'),
(214, 4, 7, 'Hrana'),
(215, 4, 8, 'da'),
(216, 4, 9, 'Ušteda vremena i novca'),
(217, 4, 10, 'da'),
(218, 4, 1, 'Više od 7 sati dnevno'),
(219, 4, 2, 'Zabava'),
(220, 4, 3, 'da'),
(221, 4, 4, 'Ne'),
(222, 4, 5, 'Još uvek nisam našao/la interesantnu ponudu'),
(223, 4, 6, 'ne'),
(224, 4, 7, 'Hrana'),
(225, 4, 8, 'da'),
(226, 4, 9, 'Ušteda vremena i novca'),
(227, 4, 10, 'ne'),
(228, 4, 1, 'Više od 7 sati dnevno'),
(229, 4, 2, 'Zabava'),
(230, 4, 2, 'Posao'),
(231, 4, 3, 'ne'),
(232, 4, 4, 'Ne'),
(233, 4, 5, 'Još uvek nisam našao/la interesantnu ponudu'),
(234, 4, 6, 'ne'),
(235, 4, 7, 'Hrana'),
(236, 4, 8, 'ne'),
(237, 4, 9, 'Ušteda vremena i novca'),
(238, 4, 10, 'ne'),
(239, 4, 1, 'Više od 7 sati dnevno'),
(240, 4, 2, 'Zabava'),
(241, 4, 3, 'a'),
(242, 4, 4, 'Ne'),
(243, 4, 5, 'Još uvek nisam našao/la interesantnu ponudu'),
(244, 4, 6, 'a'),
(245, 4, 7, 'Hrana'),
(246, 4, 8, 'a'),
(247, 4, 9, 'Ušteda vremena i novca'),
(248, 4, 10, 'a');

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `Ime` varchar(50) COLLATE utf8_bin NOT NULL,
  `Prezime` varchar(50) COLLATE utf8_bin NOT NULL,
  `Email` varchar(100) COLLATE utf8_bin NOT NULL,
  `KorisnickoIme` varchar(50) COLLATE utf8_bin NOT NULL,
  `Lozinka` varchar(50) COLLATE utf8_bin NOT NULL,
  `Pol` varchar(20) COLLATE utf8_bin NOT NULL,
  `Tip` varchar(20) COLLATE utf8_bin NOT NULL,
  `Anketa` int(11) NOT NULL,
  `Validna` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `Ime`, `Prezime`, `Email`, `KorisnickoIme`, `Lozinka`, `Pol`, `Tip`, `Anketa`, `Validna`) VALUES
(1, 'Ime', 'Prezime', 'email@gmail.com', 'Ime', 'Lozinka', 'Zensko', 'Korisnik', 0, 0),
(2, 'Novo', 'Novo', 'novo@gmail.com', 'novo', 'novo', 'Musko', 'Korisnik', 0, 0),
(4, 'Neko', 'neko', 'neko@gmail.com', 'neko', 'neko', 'Musko', 'Admin', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pitanja`
--

CREATE TABLE `pitanja` (
  `id` int(11) NOT NULL,
  `pitanje` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `pitanja`
--

INSERT INTO `pitanja` (`id`, `pitanje`) VALUES
(1, 'Koliko prosečno dnevno koristite internet?'),
(2, 'U koju svrhu koristite internet?'),
(3, 'Da li ste upoznati sa konceptom online kupovine?'),
(4, 'Da li ste već obavili kupovinu putem online kupovine?'),
(5, 'Zašto se još uvek niste odlučili na kupovinu online kupovine?'),
(6, 'Da li u budućnosti nameravate koristiti servise za online kupovinu?'),
(7, 'Koje proizvode najčešće kupujete putem online kupovine?'),
(8, 'Koliko web servisa za online kupovinu pratite?'),
(9, 'Razlozi opredeljenja za online kupovinu?'),
(10, 'Koje web servise za online kupovinu ste koristili?');

-- --------------------------------------------------------

--
-- Table structure for table `ponudjeniodgovori`
--

CREATE TABLE `ponudjeniodgovori` (
  `id` int(11) NOT NULL,
  `idpitanja` int(11) NOT NULL,
  `odgovor` varchar(100) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ponudjeniodgovori`
--

INSERT INTO `ponudjeniodgovori` (`id`, `idpitanja`, `odgovor`) VALUES
(1, 1, 'Manje od 1 sat dnevno'),
(2, 1, '1,5 do 3 sata dnevno'),
(3, 1, '3,5 do 5 sati dnevno'),
(4, 1, '5,5 do 7 sati dnevno'),
(5, 1, 'Više od 7 sati dnevno'),
(6, 2, 'Zabava'),
(7, 2, 'Posao'),
(8, 2, 'Web pretraživanje'),
(9, 2, 'E-mail'),
(10, 2, 'Kupovina putem interneta'),
(11, 2, 'Društvene mreže'),
(12, 2, 'Učenje preko interneta'),
(13, 2, 'E-banking'),
(14, 3, NULL),
(15, 4, 'Da'),
(16, 4, 'Ne'),
(17, 5, 'Još uvek nisam našao/la interesantnu ponudu'),
(18, 5, 'Smatram to nepotrebnim vidom trošenja novca'),
(19, 5, 'Nemogućnost procene kvaliteta proizvoda/usluge'),
(20, 5, 'Nemam kreditnu/debitnu karticu'),
(21, 5, 'Smatram da je kupovina putem interneta previse rizična'),
(22, 5, 'Ne koristim internet bankarstvo'),
(23, 5, 'Ne znam kako da obavim online kupovinu'),
(24, 6, NULL),
(25, 7, 'Hrana'),
(26, 7, 'Odeća'),
(27, 7, 'Knjige'),
(28, 7, 'Digitalna oprema'),
(29, 7, 'Kozmetika'),
(30, 7, 'Nakit'),
(31, 8, NULL),
(32, 9, 'Ušteda vremena i novca'),
(33, 9, 'Mogućnost kupovine 24 sata'),
(34, 9, 'Sigurna kupovina'),
(35, 9, 'Kupovina novih/nepoznatih/neistraženih proizvoda i usluga po nižim cenama'),
(36, 9, 'Manji napor u poređenju sa tradicionalnom kupovinom'),
(37, 9, 'Raznolikost ponude'),
(38, 10, NULL);

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
-- Indexes for table `pitanja`
--
ALTER TABLE `pitanja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ponudjeniodgovori`
--
ALTER TABLE `ponudjeniodgovori`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anketa`
--
ALTER TABLE `anketa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pitanja`
--
ALTER TABLE `pitanja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ponudjeniodgovori`
--
ALTER TABLE `ponudjeniodgovori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
