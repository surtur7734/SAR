-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 04:47 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hoiivsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `NAME` varchar(50) NOT NULL,
  `MILITARY` int(11) DEFAULT NULL,
  `CIVILIAN` int(11) DEFAULT NULL,
  `NAVAL` int(11) DEFAULT NULL,
  `CONVOYS` int(11) DEFAULT NULL,
  `ALIGNMENT` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`NAME`, `MILITARY`, `CIVILIAN`, `NAVAL`, `CONVOYS`, `ALIGNMENT`) VALUES
('Argentina', 3, 12, 1, 120, 'Non-Aligned'),
('Bolivia', 1, 6, 0, 0, 'Non-Aligned'),
('Brazil', 3, 18, 2, 40, 'Non-Aligned'),
('Chile', 1, 9, 0, 25, 'Democratic'),
('Colombia', 1, 7, 0, 15, 'Democratic'),
('Ecuador', 1, 4, 0, 5, 'Democratic'),
('N/A', 0, 0, 0, 0, ''),
('Paraguay', 1, 3, 0, 0, 'Communist'),
('Peru', 1, 8, 0, 5, 'Fascist'),
('Uruguay', 1, 6, 1, 5, 'Democratic'),
('Venezuela', 1, 7, 0, 10, 'Fascist');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `PNAME` varchar(50) NOT NULL,
  `OIL` int(11) DEFAULT NULL,
  `ALU` int(11) DEFAULT NULL,
  `RUB` int(11) DEFAULT NULL,
  `TUN` int(11) DEFAULT NULL,
  `STE` int(11) DEFAULT NULL,
  `CHR` int(11) DEFAULT NULL,
  `COUNTRY` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`PNAME`, `OIL`, `ALU`, `RUB`, `TUN`, `STE`, `CHR`, `COUNTRY`) VALUES
('Amazonas', 0, 4, 0, 0, 0, 0, 'Brazil'),
('Antofagasta', 0, 0, 0, 0, 0, 0, 'Chile'),
('Arequipa', 0, 0, 0, 2, 0, 0, 'Peru'),
('Bahia', 0, 0, 0, 0, 0, 0, 'Brazil'),
('Bolivar', 0, 0, 0, 0, 0, 0, 'Venezuela'),
('British Guyana', 0, 112, 0, 0, 0, 0, 'N/A'),
('Chaco Austral', 0, 46, 0, 0, 8, 0, 'Argentina'),
('Chaco Boreal', 0, 0, 0, 4, 2, 0, 'Paraguay'),
('Cundinamarca', 0, 0, 0, 0, 0, 0, 'Colombia'),
('Ecuador', 2, 0, 0, 0, 0, 0, 'Ecuador'),
('French Guiana', 0, 104, 0, 0, 0, 0, 'N/A'),
('Goias', 0, 0, 0, 0, 0, 0, 'Brazil'),
('Iguacu', 0, 0, 0, 0, 0, 0, 'Brazil'),
('La Libertad', 20, 0, 0, 0, 0, 0, 'Colombia'),
('La Paz', 0, 0, 0, 102, 2, 0, 'Bolivia'),
('Lima', 18, 0, 0, 0, 0, 0, 'Peru'),
('Loreto', 0, 0, 0, 0, 0, 0, 'Peru'),
('Magallanes', 0, 0, 0, 0, 0, 0, 'Chile'),
('Maranhao', 0, 0, 30, 0, 0, 0, 'Brazil'),
('Mato Grosso', 0, 0, 0, 0, 0, 0, 'Brazil'),
('Mendoza', 0, 0, 0, 0, 0, 0, 'Argentina'),
('Mesopotamia', 12, 0, 0, 0, 0, 0, 'Argentina'),
('Meta', 0, 0, 0, 0, 0, 0, 'Colombia'),
('Miranda', 58, 0, 0, 0, 0, 0, 'Venezuela'),
('Pampas', 0, 0, 0, 0, 0, 0, 'Argentina'),
('Para', 0, 0, 0, 0, 4, 0, 'Brazil'),
('Paraguay', 0, 0, 0, 0, 0, 0, 'Paraguay'),
('Pastaza', 0, 0, 0, 0, 0, 0, 'Peru'),
('Patagonia', 0, 0, 0, 0, 0, 0, 'Argentina'),
('Rio de Janeiro', 0, 0, 0, 0, 0, 0, 'Brazil'),
('Rio Grande', 0, 0, 0, 0, 0, 0, 'Brazil'),
('Rio Grande Sul', 0, 0, 0, 0, 0, 0, 'Brazil'),
('Santa  Catarina', 0, 0, 0, 0, 0, 0, 'Brazil'),
('Santa Cruz', 0, 0, 0, 0, 0, 0, 'Bolivia'),
('Santiago', 0, 0, 0, 0, 24, 0, 'Chile'),
('Sao Paulo', 0, 0, 0, 0, 0, 0, 'Brazil'),
('Suriname', 0, 12, 0, 0, 0, 0, 'N/A'),
('Tucuman', 0, 0, 0, 0, 0, 0, 'Argentina'),
('Ucayali', 0, 0, 0, 0, 0, 0, 'Peru'),
('Uruguay', 2, 0, 0, 0, 2, 0, 'Uruguay'),
('Zulia', 126, 0, 0, 0, 0, 0, 'Venezuela');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`NAME`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`PNAME`),
  ADD KEY `FKCOUNTRY` (`COUNTRY`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `FKCOUNTRY` FOREIGN KEY (`COUNTRY`) REFERENCES `country` (`NAME`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
