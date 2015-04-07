-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2015 at 12:40 PM
-- Server version: 5.6.17-log
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wines`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cartid` varchar(255) NOT NULL,
  `productid` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(10) NOT NULL,
  `totalprice` decimal(10,0) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cartid`, `productid`, `productname`, `price`, `quantity`, `totalprice`) VALUES
(26, '775889c615d3bd7f826240762bc26526a8c10c0d', 2, 'Martini', '1000', 3, '3000'),
(27, '775889c615d3bd7f826240762bc26526a8c10c0d', 1, 'Almas', '1000', 3, '3000');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE IF NOT EXISTS `mail` (
  `id` int(11) NOT NULL,
  `title` int(11) NOT NULL,
  `content` int(11) NOT NULL,
  `sender` int(11) NOT NULL,
  `reciever` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` int(1) NOT NULL DEFAULT '1',
  `active` int(1) DEFAULT '1',
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `active`, `category`) VALUES
(1, 'Almas', '1000', 1, 1, 'Latest'),
(2, 'Martini', '1000', 1, 1, 'Latest'),
(3, 'Constantia Glen', '1000', 1, 1, 'Latest'),
(4, 'Wither Hills', '1000', 1, 1, 'Latest'),
(5, 'Poliphonia', '1000', 1, 1, 'Latest'),
(6, 'Charles Shaw', '1000', 1, 1, 'Latest'),
(7, 'Muscadine', '300', 1, 1, 'Best Seller'),
(8, 'Dominus', '0', 1, 1, 'Best Seller'),
(9, 'Yellow Tail', '0', 1, 1, 'Best Seller'),
(10, 'Agricanto', '3005', 1, 1, 'Best Seller'),
(11, 'Gemtree', '131', 1, 1, 'Best Seller'),
(12, 'Blood of Grapes', '1', 1, 1, 'Best Seller'),
(13, 'Petit Plaisir', '140', 1, 1, 'First Class'),
(14, 'Sir George', '555', 1, 1, 'First Class'),
(15, 'Chateau', '1555', 1, 1, 'First Class'),
(16, 'Nyetimber', '706', 1, 1, 'First Class'),
(17, 'Carlo Rossi', '1', 1, 1, 'First Class'),
(18, 'Saint Amour', '1', 1, 1, 'First Class'),
(19, 'Gaston Chiquet', '0', 1, 1, 'All Time Favorite '),
(20, 'Salvioni', '0', 1, 1, 'All Time Favorite '),
(21, 'Starborough', '0', 1, 1, 'All Time Favorite '),
(22, 'Saracosa', '0', 1, 1, 'All Time Favorite '),
(23, 'GlennMorangie', '0', 1, 1, 'All Time Favorite '),
(24, 'Almonds', '0', 1, 1, 'All Time Favorite '),
(25, 'Bols Genever Amsterdam', '1', 1, 1, 'For Ladies'),
(26, 'Lucky Penny', '0', 1, 1, 'For Ladies'),
(27, 'Girly Girls', '0', 1, 1, 'For Ladies'),
(28, 'The Girls', '0', 1, 1, 'For Ladies'),
(29, 'Bitch', '0', 1, 1, 'For Ladies'),
(30, '1006 Shiraz', '0', 1, 1, 'For Ladies');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` varchar(255) NOT NULL,
  `cartid` varchar(255) NOT NULL,
  `totalprice` decimal(10,0) NOT NULL,
  `subtotal` decimal(10,0) NOT NULL,
  `shippingfee` decimal(10,0) NOT NULL,
  `tax` decimal(10,0) NOT NULL,
  `status` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `cartid`, `totalprice`, `subtotal`, `shippingfee`, `tax`, `status`, `userid`) VALUES
('a031857eb1d28beac64ae6c21bea629eb0d84c06', '775889c615d3bd7f826240762bc26526a8c10c0d', '6830', '6000', '110', '720', 'created', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `givenname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `title` varchar(3) NOT NULL,
  `password` varchar(16) NOT NULL,
  `contactnumber` varchar(20) NOT NULL,
  `address` int(11) NOT NULL,
  `birthdate` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `username`, `givenname`, `middlename`, `lastname`, `gender`, `title`, `password`, `contactnumber`, `address`, `birthdate`) VALUES
(1, 'bluegate_2006@yahoo.com', '', 'John Kevin', 'De jesus', 'Peralta', 'Male', 'Mr', 'eeeeeeee', '3333', 933, '1993-01-01'),
(2, 'bluegate_2006e@yahoo.com', '', 'e', 'e', 'e', '', 'Mr', 'e', 'e', 0, '0000-00-00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
