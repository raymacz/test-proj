-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 14, 2013 at 01:42 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_maquiso`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE IF NOT EXISTS `contact_info` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `phone` varchar(15) NOT NULL,
  `name` varchar(30) NOT NULL DEFAULT '',
  `address` varchar(65) NOT NULL DEFAULT '',
  `email` varchar(25) NOT NULL DEFAULT '',
  `status` varchar(15) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`id`, `phone`, `name`, `address`, `email`, `status`) VALUES
(1, '2213151', 'Raymond Maquiso', 'Pala-o Iligan City', 'admin1@hotmail.com', 'married'),
(2, '221', 'Matsay Maquiso', 'Pala-o Iligan City', 'matsay@hotmail.com', 'married'),
(3, '324123', 'Nicholai', 'Pala-o Iligan City', 'nic@hotmail.com', 'single'),
(4, '123-1234', 'Vasiliy', 'Cebu', 'vas@hotmail.com', 'single'),
(5, '221-2083', 'Isaac', 'Cagayan de Oro', 'Isaac@hotmail.com', 'single'),
(35, '221-4398', 'rayben', 'manila', 'r@yahoo.com', 'single');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
