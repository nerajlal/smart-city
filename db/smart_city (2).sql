-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 14, 2023 at 03:08 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `senderid`, `name`, `email`, `subject`, `message`, `status`) VALUES
(7, 15, 'Neraj Lal', 'anandhu@gmail.com', 'test', 'testing', 1),
(8, 10, 'test', 'neraj@gmail.com', 'anu', 'asdf', 1),
(10, 16, 'Neraj Lal', 'hospital@gmail.com', 'reply est', 'asdflkjh', 1),
(11, 10, 'Neraj Lal', 'neraj@gmail.com', 'dheera', 'qwerty', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cid` int(10) NOT NULL AUTO_INCREMENT,
  `loginid` int(10) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL DEFAULT 'nil',
  `address` varchar(300) NOT NULL,
  `phno` bigint(50) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `loginid` (`loginid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cid`, `loginid`, `name`, `email`, `city`, `address`, `phno`) VALUES
(9, 10, 'Neraj Lal', 'neraj@gmail.com', 'nil', 'lal bhavan mukkoodu p.o mulavana', 8547470675),
(11, 15, 'anandhu', 'anandhu@gmail.com', 'kollam', 'anandhu bhavan kundara p.o Mulavana', 8547489685),
(14, 16, 'hospital', 'hospital@gmail.com', 'kollam', 'hospital p.o kollam', 8574259577);

-- --------------------------------------------------------

--
-- Table structure for table `institution`
--

CREATE TABLE IF NOT EXISTS `institution` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `city` varchar(25) NOT NULL,
  `institution_type` varchar(20) NOT NULL,
  `institution_name` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `pic` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `institution`
--

INSERT INTO `institution` (`id`, `city`, `institution_type`, `institution_name`, `username`, `phone`, `pic`) VALUES
(11, 'kollam', 'Hospital', 'LMS', 'hospital@gmail.com', 91854747067, 'pic/hos.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `lid` int(10) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) NOT NULL,
  `password` varchar(80) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0',
  `user` varchar(30) NOT NULL,
  PRIMARY KEY (`lid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`lid`, `email`, `password`, `status`, `user`) VALUES
(10, 'neraj@gmail.com', 'Neraj123@', 1, 'user'),
(16, 'hospital@gmail.com', 'Hospital123@', 1, 'institution'),
(2, 'admin@gmail.com', 'Admin123@', 3, 'admin'),
(15, 'anandhu@gmail.com', 'Anandhu123@', 1, 'shop');

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE IF NOT EXISTS `picture` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `file` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`id`, `username`, `file`) VALUES
(3, 'hospital@gmail.com', 'pic/ho.jpg');

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `username`, `city`, `product`, `quantity`, `price`, `photo`) VALUES
(21, 'anandhu@gmail.com', 'kollam', 'wheat ', '1 kg', '50', 'product/wheat.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `user` varchar(50) NOT NULL,
  `shop` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `product` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL,
  `price` int(5) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `name`, `user`, `shop`, `address`, `phone`, `product`, `quantity`, `price`, `status`) VALUES
(6, 'Neraj Lal', 'neraj@gmail.com', 'anandhu@gmail.com', 'lal bhavan Mukkoodu p.o Mulavana', 91854747067, 'rice', 5, 300, 2),
(7, 'Neraj Lal', 'neraj@gmail.com', 'anandhu@gmail.com', 'lal bhavan Mukkoodu p.o Mulavana', 91854747067, 'wheat ', 10, 500, 4),
(8, 'Neraj Lal', 'neraj@gmail.com', 'anandhu@gmail.com', 'lal bhavan Mukkoodu p.o Mulavana', 91854747067, 'rice', 2, 120, 4),
(10, 'Neraj Lal', 'neraj@gmail.com', 'anandhu@gmail.com', 'lal bhavan Mukkoodu p.o Mulavana', 5874741547, 'rice', 1, 60, 4);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
  `author` varchar(10) NOT NULL DEFAULT 'Admin',
  `senderid` varchar(100) NOT NULL,
  `subject` varchar(15) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`author`, `senderid`, `subject`, `message`) VALUES
('Admin', 'hospital@gmail.com', 'qwerty', 'working'),
('Admin', 'anandhu@gmail.com', 'test', 'ðŸ‘ ok'),
('Admin', 'hospital@gmail.com', ' nil', 'jnjk');
