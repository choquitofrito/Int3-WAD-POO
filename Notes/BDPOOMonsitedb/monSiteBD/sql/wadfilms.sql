-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2022 at 04:34 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wadfilms`
--
CREATE DATABASE IF NOT EXISTS `wadfilms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `wadfilms`;

-- --------------------------------------------------------

--
-- Table structure for table `favori`
--

CREATE TABLE `favori` (
  `id` int(11) NOT NULL,
  `idFilm` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `favori`
--

INSERT INTO `favori` (`id`, `idFilm`, `idUtilisateur`) VALUES
(85, 9, 5),
(86, 10, 5),
(88, 10, 3),
(89, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `titre` varchar(150) NOT NULL,
  `duree` int(11) NOT NULL,
  `description` text NOT NULL,
  `dateSortie` date NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `titre`, `duree`, `description`, `dateSortie`, `image`) VALUES
(9, 'Upi', 90, '', '2022-11-25', '634e61cf4530f2022-10-18-10-20-31Up_(2009_film).jpg'),
(10, 'CocoNut', 200, '', '0000-00-00', '635108fe2dfd42022-10-20-10-38-22images.jpg'),
(13, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(14, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(15, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(16, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(17, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(18, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(19, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(20, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(21, 'Lalalala', 40, 'blabla', '2000-10-10', ''),
(22, 'Robocop', 40, 'blabla', '2000-10-10', ''),
(23, 'Robocop', 40, 'blabla', '2000-10-10', ''),
(24, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(25, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(26, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(27, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(28, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(29, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(30, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(31, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(32, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(33, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(34, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(35, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(36, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(37, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(38, 'Robocop 2', 40, 'blabla', '2000-10-10', ''),
(39, 'Matilda', 40, 'blabla', '2000-10-10', '');

-- --------------------------------------------------------

--
-- Table structure for table `note`
--

CREATE TABLE `note` (
  `id` int(11) NOT NULL,
  `cotation` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `film_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `note`
--

INSERT INTO `note` (`id`, `cotation`, `utilisateur_id`, `film_id`) VALUES
(1, 5, 10, 19),
(2, 5, 11, 20),
(3, 5, 12, 21),
(4, 15, 16, 39);

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `login` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `login`, `password`, `role`) VALUES
(3, 'wad', 'wad@interface3.be', '$2y$12$qmNA5LChmxFNnF1YrV/3quXujUJS5j9qYCcqKgl.848eKzgtTyQAm', 'ADMIN'),
(4, 'test', 'test@gmail.com', '$2y$12$RsKZM/fdhep91vyFzP9.puBm1ezxLQrwUvIb5XyHMpfuFhDhkruOK', ''),
(5, 'wad1', 'wad1@interface3.be', '$2y$12$zl70bpv3QsdJeVCLKzurQeX8HPPl32L7G/63Jp7S.6bd5cwgc1fB.', ''),
(6, 'Marie', 'marie@gmail.com', '$2y$12$QJuyDKmiOvAi0P57zOGP/OELacl9VIMK4dEnKAiwdt1mu5QIsNIRi', ''),
(7, 'Marie', 'marie@gmail.com', '$2y$12$FDMRHq16sSeFcbgIKaw/.umIMXjiEPB9D3sKzcyWsyYwqY6aKCFxm', ''),
(8, 'Marie', 'marie@gmail.com', '$2y$12$Y89uds30NTeFCyCS.mS.auq97FLU/FA5xa.Ms1wRWO7SdbAj2eFdS', ''),
(9, 'Marie', 'marie@gmail.com', '$2y$12$S/E1gHgUXkZi1f1VHXZomukEowd4zHUWVHOyPc1WGmvufqdMlVomG', ''),
(10, 'Marie', 'marie@gmail.com', '$2y$12$EFtTO7Rl/17jU/4vOZfSa.5hfYFdDIs9H/KcG11yjY6aID.QW2yke', ''),
(11, 'Marie', 'marie@gmail.com', '$2y$12$/u./rrpIMjsf5JC8F5gpPe7Ji06PsPJZbz.fEQVZzxsLDhbYwQ/UK', ''),
(12, 'Marie', 'marie@gmail.com', '$2y$12$WOM8j6/kCBUzGenVZOzSCOR1.7llAXNVdTf4NVX.XbZ99BWEM/4lG', ''),
(13, 'Marie', 'wad@gmail.com', '$2y$12$qscUVoeCsBpoSZyLCkngnuR0Kdv1IfbLOqoAyyb9nvYU4zRkECY7q', ''),
(14, 'Marie', 'wad@gmail.com', '$2y$12$AmMQJc3gOEpWFkAA7IkXTuiZvA8/kRq1rYUI4xVYicRn/4GZbReye', ''),
(15, 'Marie', 'wadex@gmail.com', '$2y$12$dLF1UYTTpggiiuTUVZBvj.ATvdsJdlzux5Ae2fkG16NUQMljOhvDS', ''),
(16, 'Marie', 'matilda@gmail.com', '$2y$12$Vq4sUvE5SQB.8jYQAlH1yu898ZhWkF1DG2wtMGSjI0MnaWhr.KgOa', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favori`
--
ALTER TABLE `favori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFilm` (`idFilm`),
  ADD KEY `idUtilisateur` (`idUtilisateur`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`id`),
  ADD KEY `utilisateur_id` (`utilisateur_id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favori`
--
ALTER TABLE `favori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `note`
--
ALTER TABLE `note`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `favori`
--
ALTER TABLE `favori`
  ADD CONSTRAINT `favori_ibfk_1` FOREIGN KEY (`idFilm`) REFERENCES `film` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `favori_ibfk_2` FOREIGN KEY (`idUtilisateur`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `note_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `note_ibfk_2` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
