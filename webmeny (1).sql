-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09. Des, 2022 11:15 AM
-- Tjener-versjon: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webmeny`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `brukere`
--

CREATE TABLE `brukere` (
  `id` int(11) NOT NULL,
  `fulltnavn` varchar(255) COLLATE utf8mb4_danish_ci DEFAULT NULL,
  `passord` varchar(255) COLLATE utf8mb4_danish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_danish_ci;

--
-- Dataark for tabell `brukere`
--

INSERT INTO `brukere` (`id`, `fulltnavn`, `passord`) VALUES
(1, 'Thea Kornmo', 'Kuben123');

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `matretter`
--

CREATE TABLE `matretter` (
  `ID` int(6) NOT NULL,
  `Matrett` varchar(255) COLLATE utf8mb4_danish_ci NOT NULL,
  `Beskrivelse` varchar(254) COLLATE utf8mb4_danish_ci NOT NULL,
  `Alergener` varchar(255) COLLATE utf8mb4_danish_ci NOT NULL,
  `Bilde` varchar(255) COLLATE utf8mb4_danish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_danish_ci;

--
-- Dataark for tabell `matretter`
--

INSERT INTO `matretter` (`ID`, `Matrett`, `Beskrivelse`, `Alergener`, `Bilde`) VALUES
(1, 'Birria taco\r\n', 'Den diggeste tacoen du kan få tak i!', 'Gluten', 'https://live.staticflickr.com/4328/36016085766_7db7d7ca17_b.jpg'),
(2, 'Lasagne', 'Deilig lasagne, med masse deilig ost og kjøtt. Denne vil du ikke gå glipp av <3\r\n', 'Laktose og gluten', 'https://trinesmatblogg.no/app/uploads/2014/04/IMG_4072.jpg'),
(3, 'Sushi', '12 biter fritert lakse sushi, med mango og jordbær på toppen. ', 'Sjømat, mango, jordbær, gluten.', 'https://images.openfoodfacts.org/images/products/931/043/200/0075/front_fr.8.400.jpg'),
(4, 'baktpotet', 'Deilig baktpotet med ost, bacon, rømme, smør og mais.', 'Laktose', 'https://www.publicdomainpictures.net/pictures/50000/velka/jacket-potato-baked-potato.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brukere`
--
ALTER TABLE `brukere`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brukere`
--
ALTER TABLE `brukere`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
