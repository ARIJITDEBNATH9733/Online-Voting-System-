-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2022 at 08:01 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vote`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE IF NOT EXISTS `adm` (
  `id` varchar(30) NOT NULL,
  `pword` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id`, `pword`) VALUES
('Admin', '789');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `name` varchar(50) DEFAULT NULL,
  `em` varchar(50) DEFAULT NULL,
  `msg` varchar(400) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `dt` varchar(30) NOT NULL,
  `tm` varchar(30) NOT NULL,
  `ipadr` varchar(30) NOT NULL,
  PRIMARY KEY (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `em`, `msg`, `phone`, `dt`, `tm`, `ipadr`) VALUES
('Sonali Bendre', 'sss@gmail.com', 'hello', '7098655432', '2022/05/03', '01:18:31 PM', '::1'),
('Rantu sengupta', 'parthasengupta46@gmail.com', 'testing vote project', '9434220180', '2022/05/03', '01:15:16 PM', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `vresult`
--

CREATE TABLE IF NOT EXISTS `vresult` (
  `cand` varchar(30) NOT NULL,
  `vcount` int(11) DEFAULT NULL,
  PRIMARY KEY (`cand`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vresult`
--

INSERT INTO `vresult` (`cand`, `vcount`) VALUES
('Candidate_1', 0),
('Candidate_2', 0),
('Candidate_3', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
