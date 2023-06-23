-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2023 at 02:21 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `smart_city`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `senderid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contact`
--


-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `loginid` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phno` bigint(50) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `loginid` (`loginid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `loginid`, `name`, `email`, `address`, `phno`) VALUES
(9, 10, 'Neraj Lal', 'neraj@gmail.com', '', 8547470675),
(11, 15, 'anandhu', 'anandhu@gmail.com', 'anandhu bhavan kundara p.o Mulavana', 8547489685);

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE IF NOT EXISTS `institution` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `city` varchar(25) NOT NULL,
  `institution_type` varchar(20) NOT NULL,
  `institution_name` varchar(20) NOT NULL,
  `phone` bigint(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `city`, `institution_type`, `institution_name`, `phone`) VALUES
(1, 'kollam', 'hospital', '\r\n    KIMS', 9876543210);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `status` enum('0','1','2','3') NOT NULL,
  `user` varchar(30) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `email`, `password`, `status`, `user`) VALUES
(10, 'neraj@gmail.com', 'Neraj123@', '1', 'user'),
(2, 'admin@gmail.com', 'Admin123@', '3', 'admin'),
(15, 'anandhu@gmail.com', 'Anandhu123@', '1', 'shop');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `city` varchar(25) NOT NULL,
  `product` varchar(11) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `price` varchar(29) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `username`, `city`, `product`, `quantity`, `price`, `photo`) VALUES
(19, 'anandhu@gmail.com', 'kollam', 'rice', '1 kg', '60', 'product/baby.png');

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `author` varchar(10) NOT NULL DEFAULT 'Admin',
  `senderid` int(10) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

