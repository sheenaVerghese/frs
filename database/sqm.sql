-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2014 at 09:58 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sqm`
--
CREATE DATABASE IF NOT EXISTS `sqm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sqm`;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `CustomerID` int(11) NOT NULL,
  `FlightID` int(11) DEFAULT NULL,
  `FirstName` varchar(200) DEFAULT NULL,
  `LastName` varchar(200) DEFAULT NULL,
  `PassportNumber` varchar(200) DEFAULT NULL,
  `Email` varchar(200) DEFAULT NULL,
  `ContactNumber` int(11) DEFAULT NULL,
  `FlightCancelID` int(11) DEFAULT NULL,
  `SeatID` int(11) NOT NULL,
  PRIMARY KEY (`CustomerID`),
  UNIQUE KEY `CustomerID` (`CustomerID`),
  KEY `FlightID` (`FlightID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE IF NOT EXISTS `flight` (
  `FlightID` int(11) NOT NULL,
  `Origin` varchar(200) NOT NULL,
  `DepartureDate` int(2) NOT NULL,
  `DepartureTime` int(4) NOT NULL,
  `Destination` varchar(200) NOT NULL,
  `ArrivalDay` int(2) NOT NULL,
  `ArrivalTime` int(4) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `ArrivalMonth` int(2) NOT NULL,
  `ArrivalYear` int(4) NOT NULL,
  `DepartureMonth` int(2) NOT NULL,
  `DepartureYear` int(4) NOT NULL,
  PRIMARY KEY (`FlightID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`FlightID`, `Origin`, `DepartureDate`, `DepartureTime`, `Destination`, `ArrivalDay`, `ArrivalTime`, `Price`, `ArrivalMonth`, `ArrivalYear`, `DepartureMonth`, `DepartureYear`) VALUES
(1, 'Kuala Lumpur(KUL)', 2, 2000, 'Dar Es Salaam(DAR)', 3, 900, '400.00', 4, 2015, 4, 2015),
(2, 'London Heathrow(LHR)', 24, 1000, 'Dar Es Salaam(DAR)', 26, 1100, '34.00', 6, 2015, 6, 2015),
(3, 'Dubai(DBX)', 23, 735, 'Kuala Lumpur(KUL)', 24, 2135, '300.00', 12, 2014, 12, 2014),
(4, 'London Heathrow(LHR)', 28, 900, 'Dubai(DBX)', 1, 300, '32.76', 3, 2015, 2, 2015),
(5, 'Kuala Lumpur(KUL)', 14, 400, 'Dubai(DBX)', 14, 2400, '234.43', 2, 2015, 2, 2015);

-- --------------------------------------------------------

--
-- Table structure for table `floorplan`
--

CREATE TABLE IF NOT EXISTS `floorplan` (
  `CustomerID` int(11) DEFAULT NULL,
  `SeatID` int(11) NOT NULL,
  `Status` tinyint(1) DEFAULT '0',
  `SeatRow` int(2) DEFAULT NULL,
  `SeatColumn` int(2) NOT NULL,
  `FlightID` int(11) NOT NULL,
  PRIMARY KEY (`SeatID`),
  KEY `CustomerID` (`CustomerID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `floorplan`
--

INSERT INTO `floorplan` (`CustomerID`, `SeatID`, `Status`, `SeatRow`, `SeatColumn`, `FlightID`) VALUES
(NULL, 11, 0, 0, 0, 1),
(NULL, 12, 0, 0, 1, 1),
(NULL, 13, 0, 1, 0, 1),
(NULL, 14, 0, 1, 1, 1),
(NULL, 15, 0, 2, 0, 1),
(NULL, 16, 0, 2, 1, 1),
(NULL, 21, 0, 0, 0, 2),
(NULL, 22, 0, 0, 1, 2),
(NULL, 23, 0, 1, 0, 2),
(NULL, 24, 0, 1, 1, 2),
(NULL, 25, 0, 2, 0, 2),
(NULL, 26, 0, 2, 1, 2),
(NULL, 31, 0, 0, 0, 3),
(NULL, 32, 0, 0, 1, 3),
(NULL, 33, 2, 0, 0, 3),
(NULL, 34, 0, 2, 1, 3),
(NULL, 35, 0, 3, 0, 3),
(NULL, 36, 0, 3, 1, 3),
(NULL, 41, 0, 0, 0, 4),
(NULL, 42, 0, 0, 1, 4),
(NULL, 43, 0, 2, 0, 4),
(NULL, 44, 0, 2, 1, 4),
(NULL, 45, 0, 3, 0, 4),
(NULL, 46, 0, 3, 1, 4),
(NULL, 51, 0, 0, 0, 5),
(NULL, 52, 0, 0, 1, 5),
(NULL, 53, 0, 2, 0, 5),
(NULL, 54, 0, 2, 1, 5),
(NULL, 55, 0, 3, 0, 5),
(NULL, 56, 0, 3, 1, 5);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`FlightID`) REFERENCES `flight` (`FlightID`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`CustomerID`) REFERENCES `floorplan` (`SeatID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
