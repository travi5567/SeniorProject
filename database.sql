-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2013 at 08:39 PM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `ci`
--

-- --------------------------------------------------------

--
-- Table structure for table `senior`
--

CREATE TABLE `senior` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `folderName` varchar(150) NOT NULL,
  `subFolderName` varchar(150) NOT NULL,
  `imageName` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `senior`
--

INSERT INTO `senior` (`id`, `folderName`, `subFolderName`, `imageName`) VALUES
(11, 'BOBBY', '0', '0'),
(14, 'JACKyman', '0', '0'),
(16, 'HTML5', '0', '0'),
(17, 'CSS', '0', '0'),
(18, 'XHTML', '0', '0'),
(19, 'RUBY ON RAILS', '0', '0');
