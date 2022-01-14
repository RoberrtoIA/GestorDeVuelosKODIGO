-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table airport.aerolineas
CREATE TABLE IF NOT EXISTS `aerolineas` (
  `aerolineasId` int(11) NOT NULL AUTO_INCREMENT,
  `aerolinea` varchar(50) NOT NULL,
  PRIMARY KEY (`aerolineasId`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table airport.aerolineas: ~5 rows (approximately)
/*!40000 ALTER TABLE `aerolineas` DISABLE KEYS */;
INSERT INTO `aerolineas` (`aerolineasId`, `aerolinea`) VALUES
	(1, 'American Airlines'),
	(2, 'Avianca'),
	(3, 'Emirates'),
	(4, 'United Airlines'),
	(5, 'Lufthansa');
/*!40000 ALTER TABLE `aerolineas` ENABLE KEYS */;

-- Dumping structure for table airport.areonave
CREATE TABLE IF NOT EXISTS `areonave` (
  `idAreonave` int(11) NOT NULL AUTO_INCREMENT,
  `Modelo` varchar(100) DEFAULT NULL,
  `Capacidad_pasajeros` int(11) DEFAULT NULL,
  `Rango_combustible_lleno` int(11) DEFAULT NULL,
  `Aerolinea` varchar(100) DEFAULT NULL,
  `vuelo` varchar(10) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idAreonave`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table airport.areonave: ~5 rows (approximately)
/*!40000 ALTER TABLE `areonave` DISABLE KEYS */;
INSERT INTO `areonave` (`idAreonave`, `Modelo`, `Capacidad_pasajeros`, `Rango_combustible_lleno`, `Aerolinea`, `vuelo`, `categoria`) VALUES
	(4, 'Dassault Falcon 100', 10, 1000, 'American Airlines', '3:00:00', 'Super Light'),
	(5, 'Beechcraft Premier I / I A', 30, 1500, 'Avianca', '5:00:00', 'Light'),
	(6, 'Boeing 797 NMA', 250, 2800, 'Emirates', '7:45:00', 'Midsize'),
	(7, 'Airbus A320', 450, 3500, 'United Airlines', '9:00:00', 'Super Midsize'),
	(8, 'Airbus A380', 615, 8000, 'Lufthansa', '16:00:00', 'Heavy');
/*!40000 ALTER TABLE `areonave` ENABLE KEYS */;

-- Dumping structure for table airport.destinos
CREATE TABLE IF NOT EXISTS `destinos` (
  `destinosId` int(11) NOT NULL AUTO_INCREMENT,
  `pais` varchar(100) NOT NULL,
  `ciudad` varchar(100) NOT NULL,
  `vuelo` varchar(8) NOT NULL,
  PRIMARY KEY (`destinosId`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table airport.destinos: ~20 rows (approximately)
/*!40000 ALTER TABLE `destinos` DISABLE KEYS */;
INSERT INTO `destinos` (`destinosId`, `pais`, `ciudad`, `vuelo`) VALUES
	(1, 'USA', 'Los Angeles', '5:30:00'),
	(2, 'Peru', 'Lima', '4:15:00'),
	(3, 'Mexico', 'Ciudad de Mexico', '2:25:00'),
	(4, 'Espania', 'Madrid', '10:20:00'),
	(5, 'Argentina', 'Buenos Aires', '10:15:00'),
	(6, 'Colombia', 'Cartagena', '6:27:00'),
	(7, 'Ecuador', 'Quito', '2:55:00'),
	(8, 'Mexico', 'Cancun', '1:45:00'),
	(9, 'USA', 'Orlando Florida', '3:00:00'),
	(10, 'United Kingdom', 'Londres', '13:00:00'),
	(11, 'Francia', 'Calais', '13:35:00'),
	(12, 'Francia', 'Marsella', '13:55:00'),
	(13, 'Francia', 'Paris', '13:35:00'),
	(14, 'Republica de Irlanda', 'Dublin', '14:24:00'),
	(15, 'USA', 'Austin', '5:55:00'),
	(16, 'USA', 'Washington D.C.', '4:15:00'),
	(17, 'Canada', 'Toronto', '4:50:00'),
	(18, 'Alemania', 'Berlin', '15:50:00'),
	(19, 'Alemania', 'Munich', '14:50:00'),
	(20, 'Austria', 'Viena', '14:50:00');
/*!40000 ALTER TABLE `destinos` ENABLE KEYS */;

-- Dumping structure for table airport.vuelos
CREATE TABLE IF NOT EXISTS `vuelos` (
  `idVuelos` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroVuelo` varchar(20) DEFAULT NULL,
  `PaisCiudad_origen` varchar(250) DEFAULT NULL,
  `PaisCiudad_destino` varchar(250) DEFAULT NULL,
  `FechaHora_salida` datetime DEFAULT NULL,
  `FechaHora_llegada` datetime DEFAULT NULL,
  `Tiempo_retraso` varchar(8) NOT NULL,
  `Retraso` varchar(200) DEFAULT NULL,
  `Areonave_idAreonave` int(11) NOT NULL,
  `estado` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idVuelos`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

-- Dumping data for table airport.vuelos: ~14 rows (approximately)
/*!40000 ALTER TABLE `vuelos` DISABLE KEYS */;
INSERT INTO `vuelos` (`idVuelos`, `NumeroVuelo`, `PaisCiudad_origen`, `PaisCiudad_destino`, `FechaHora_salida`, `FechaHora_llegada`, `Tiempo_retraso`, `Retraso`, `Areonave_idAreonave`, `estado`) VALUES
	(1, '161', 'El Salvador', 'Los Angeles', '2022-01-20 10:00:00', '2022-01-20 13:30:00', '00:00:00', NULL, 8, 'Agendado'),
	(2, '131', 'El Salvador', 'Madrid', '2022-01-20 00:00:00', '2022-01-20 10:20:00', '00:00:00', NULL, 8, 'Agendado'),
	(3, '105', 'El Salvador', 'Cancun', '2022-01-28 06:00:00', '2022-01-28 07:45:00', '00:00:00', NULL, 8, 'Agendado'),
	(4, '154', 'El Salvador', 'Berlin', '2022-01-14 02:00:00', '2022-01-14 17:50:00', '00:00:00', NULL, 8, 'Agendado'),
	(5, '181', 'El Salvador', 'Los Angeles', '2022-01-11 06:00:00', '2022-01-11 11:30:00', '00:00:00', NULL, 6, 'Agendado'),
	(6, '1832', 'El Salvador', 'Los Angeles', '2022-01-20 10:00:00', '2022-01-20 13:30:00', '00:00:00', NULL, 8, 'Agendado'),
	(7, NULL, 'El Salvador', 'Toronto', '2022-01-23 10:00:00', '2022-01-23 14:50:00', '00:00:00', NULL, 6, 'Agendado'),
	(8, '114', 'El Salvador', 'Madrid', '2022-01-13 04:00:00', '2022-01-13 14:20:00', '00:00:00', NULL, 8, 'Agendado'),
	(9, '123', 'El Salvador', 'Londres', '2022-01-12 10:00:00', '2022-01-12 23:00:00', '0:00:00', 'Sin contratiempos', 8, 'Aterrizado'),
	(10, '175', 'El Salvador', 'Washington D.C.', '2022-01-19 14:00:00', '2022-01-19 18:15:00', '0:00:00', 'Mal tiempo', 5, 'Cancelar'),
	(11, '128', 'El Salvador', 'Cancun', '2022-01-28 00:00:00', '2022-01-28 01:45:00', '0:00:00', '', 4, 'Aterrizado'),
	(12, '113', 'El Salvador', 'Viena', '2022-01-31 06:00:00', '2022-01-31 20:50:00', '00:00:00', NULL, 8, 'Agendado'),
	(13, '174', 'El Salvador', 'Cancun', '2022-01-16 00:00:00', '2022-01-16 01:45:00', '00:00:00', NULL, 7, 'Agendado'),
	(14, '137', 'El Salvador', 'Washington D.C.', '2022-01-20 00:00:00', '2022-01-20 04:15:00', '00:00:00', NULL, 6, 'Agendado'),
	(15, '763-319-104', 'El Salvador', 'Cartagena', '2022-01-13 10:00:00', '2022-01-13 16:27:00', '00:00:00', NULL, 6, 'Agendado');
/*!40000 ALTER TABLE `vuelos` ENABLE KEYS */;

-- Dumping structure for trigger airport.asignarEstado
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER asignarEstado BEFORE INSERT ON vuelos
FOR EACH
ROW SET NEW.estado = 'Agendado'//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

-- Dumping structure for trigger airport.asignarNumeroVuelo
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER asignarNumeroVuelo BEFORE INSERT ON vuelos
FOR EACH
ROW SET NEW.NumeroVuelo = CONCAT(FLOOR( RAND() * (999-100) + 100), '-', FLOOR( RAND() * (999-100) + 100), '-', FLOOR( RAND() * (999-100) + 100))//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
