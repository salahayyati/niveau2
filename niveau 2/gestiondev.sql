-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 10, 2021 at 10:10 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestiondev`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) DEFAULT NULL,
  `mot_de_pass` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `mot_de_pass`) VALUES
(2, 'bilallghmam@gmail.com', 'berkanee'),
(3, 'salaheddine.ayyati@ump.ac.ma', 'berkane022'),
(4, 'bilallghmamiiiu@gmail.com', 'berkdmdmdm'),
(5, 'mochkil@gmail.com', 'erftgyhujkl'),
(6, 'mochkil2@gmail.com', 'tyuiop['),
(7, 'salahayyati@gmail.com', '12345'),
(8, 'green@gmail.com', '12345'),
(9, 'centre@gmail.com', '123123'),
(10, 'salahayyhkfhfgkati@gmail.com', 's');

-- --------------------------------------------------------

--
-- Table structure for table `developpeurs`
--

DROP TABLE IF EXISTS `developpeurs`;
CREATE TABLE IF NOT EXISTS `developpeurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `prenom` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=178 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `developpeurs`
--

INSERT INTO `developpeurs` (`id`, `nom`, `prenom`, `email`) VALUES
(157, 'kawtar', 'jebli', 'kawtarjebli@gmail.com'),
(158, 'bia', 'meryam', 'biameryam@gmail.com'),
(174, 'ayyati', 'salah', 'asdfghj@gmail.com'),
(175, 'med', 'amraoui', 'medamraoui494@gmail.com'),
(176, 'mounaim', 'jerroudi', 'mounaimjerroudi@gmail.com'),
(177, 'achraf', 'TAHRI', 'achraftahiri@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `technos`
--

DROP TABLE IF EXISTS `technos`;
CREATE TABLE IF NOT EXISTS `technos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `html` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `cgi` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `js` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `ajax` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `php` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `id_developpeurs` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_developpeurs` (`id_developpeurs`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `technos`
--

INSERT INTO `technos` (`id`, `html`, `cgi`, `js`, `ajax`, `php`, `id_developpeurs`) VALUES
(6, '1', '2', '', '5', '4', 158),
(7, '1', '2', '3', '5', '1', 158),
(8, '5', '1', '3', '4', '4', 174),
(9, '0', '1', '3', '4', '5', 175),
(10, '-1', '2', '3', '5', '4', 176),
(11, '5', '2', '0', '5', '5', 177);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
