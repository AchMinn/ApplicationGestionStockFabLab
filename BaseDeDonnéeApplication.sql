-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2023 at 03:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ApplicationGestionFablab`
--

-- --------------------------------------------------------

--
-- Table structure for table `Consommateur`
--

CREATE TABLE `Consommateur` (
  `Nr_Consommateur` int(11) NOT NULL,
  `Prenom` varchar(100) DEFAULT NULL,
  `Nom` varchar(100) DEFAULT NULL,
  `Niveau_Annee` int(11) DEFAULT NULL,
  `Groupe` varchar(100) DEFAULT NULL,
  `Num_Tel` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `FLM_Consomme` varchar(100) DEFAULT NULL,
  `Date_Consommation` date DEFAULT NULL,
  `Motif` varchar(100) DEFAULT NULL,
  `Nr_Operateur` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Filament`
--

CREATE TABLE `Filament` (
  `Nr_Filament` int(11) NOT NULL,
  `Type` varchar(100) DEFAULT NULL,
  `Couleur_Reference` varchar(100) DEFAULT NULL,
  `Prix_Unitaire` decimal(10,2) DEFAULT NULL,
  `Nouveau_Stock` int(11) DEFAULT NULL,
  `Prix_Stock` decimal(10,2) DEFAULT NULL,
  `Rest_Stock` int(11) DEFAULT NULL,
  `Alerte` varchar(100) DEFAULT NULL,
  `Date_Stock` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Fournisseur`
--

CREATE TABLE `Fournisseur` (
  `Nr_Fournisseur` int(11) NOT NULL,
  `Nom` varchar(100) DEFAULT NULL,
  `Adresse` varchar(255) DEFAULT NULL,
  `Ville` varchar(100) DEFAULT NULL,
  `Pays` varchar(100) DEFAULT NULL,
  `Numero_Telephone` varchar(20) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Quantite_FLM_Achete` int(11) DEFAULT NULL,
  `Type_FLM_Achete` varchar(100) DEFAULT NULL,
  `Date_Achat` date DEFAULT NULL,
  `Site` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Machines`
--

CREATE TABLE `Machines` (
  `ID_Machine` int(11) NOT NULL,
  `image_Machine` longblob DEFAULT NULL,
  `status` varchar(10) DEFAULT 'Active' CHECK (`status` in ('Active','En panne')),
  `Nom_de_la_machine` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `Operateur`
--

CREATE TABLE `Operateur` (
  `ID` int(11) NOT NULL,
  `image` longblob DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Consommateur`
--
ALTER TABLE `Consommateur`
  ADD PRIMARY KEY (`Nr_Consommateur`),
  ADD KEY `Nr_Operateur` (`Nr_Operateur`);

--
-- Indexes for table `Filament`
--
ALTER TABLE `Filament`
  ADD PRIMARY KEY (`Nr_Filament`);

--
-- Indexes for table `Fournisseur`
--
ALTER TABLE `Fournisseur`
  ADD PRIMARY KEY (`Nr_Fournisseur`);

--
-- Indexes for table `Machines`
--
ALTER TABLE `Machines`
  ADD PRIMARY KEY (`ID_Machine`);

--
-- Indexes for table `Operateur`
--
ALTER TABLE `Operateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Consommateur`
--
ALTER TABLE `Consommateur`
  MODIFY `Nr_Consommateur` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Operateur`
--
ALTER TABLE `Operateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Consommateur`
--
ALTER TABLE `Consommateur`
  ADD CONSTRAINT `Consommateur_ibfk_1` FOREIGN KEY (`Nr_Operateur`) REFERENCES `Operateur` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
