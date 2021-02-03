-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2021 at 05:26 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pg4me`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_resource`
--

CREATE TABLE IF NOT EXISTS `book_resource` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `R_name` varchar(20) NOT NULL,
  `R_occupants` int(5) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `R_price` int(5) NOT NULL,
  `Payment_id` varchar(30) NOT NULL,
  `R_bookdate` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `book_resource`
--

INSERT INTO `book_resource` (`id`, `R_name`, `R_occupants`, `Email`, `R_price`, `Payment_id`, `R_bookdate`) VALUES
(1, 'Superb', 3, 'alokrathava1998@gmail.com', 50, 'MOJO0c08K05N92184378', '2020-12-11'),
(2, 'Luxurious', 5, 'alokrathava1998@gmail.com', 60, 'MOJO0c08805A92184384', '2020-12-15'),
(3, 'Deluxe', 1, 'alokrathava1998@gmail.com', 30, 'MOJO0c10305N80855311', '2021-02-02'),
(4, 'Superb', 2, 'alokrathava@gmail.com', 50, 'MOJO0c18S05N15480335', '2020-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `R_name` varchar(20) NOT NULL,
  `R_price` int(5) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Payment_id` varchar(30) NOT NULL,
  `Book_date` varchar(30) NOT NULL,
  `Occupants` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `R_name`, `R_price`, `Email`, `Payment_id`, `Book_date`, `Occupants`) VALUES
(1, 'Superb', 50, 'alokrathava1998@gmail.com', 'MOJO0c08K05N92184378', '2020-12-11', 3),
(2, 'Luxurious', 60, 'alokrathava1998@gmail.com', 'MOJO0c08805A92184384', '2020-12-15', 5),
(3, 'Deluxe', 30, 'alokrathava1998@gmail.com', 'MOJO0c10305N80855311', '2021-02-02', 1),
(4, 'Superb', 50, 'alokrathava@gmail.com', 'MOJO0c18S05N15480335', '2020-12-07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pg_owner`
--

CREATE TABLE IF NOT EXISTS `pg_owner` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pg_owner`
--

INSERT INTO `pg_owner` (`id`, `Email`, `Password`, `Name`) VALUES
(1, 'alokrathava@gmail.com', 'admin', 'Alok Rathava');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Gender` enum('male','female') NOT NULL,
  `Adress_line1` varchar(255) NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Aadhar_card_number` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `Email` (`Email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Name`, `Gender`, `Adress_line1`, `Phone`, `Email`, `Password`, `Aadhar_card_number`) VALUES
(7, 'Alok Rathava', 'male', 'Vadodara, Gujarat', '9512334819', 'alokrathava@gmail.com', 'admin', '24011999');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE IF NOT EXISTS `resources` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `R_name` varchar(20) NOT NULL,
  `R_image` mediumtext NOT NULL,
  `R_price` int(5) NOT NULL,
  `R_occupant` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `R_name`, `R_image`, `R_price`, `R_occupant`) VALUES
(4, 'Deluxe', 'upload/living-room-565060_1920.jpg', 15, 2),
(5, 'Superb', 'upload/paris-279820_1920.jpg', 25, 3),
(6, 'Luxurious', 'upload/villa-4555824_1920.jpg', 45, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
