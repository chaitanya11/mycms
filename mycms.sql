-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 22, 2016 at 09:40 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycms`
--

-- --------------------------------------------------------

--
-- Table structure for table `layouts`
--

CREATE TABLE IF NOT EXISTS `layouts` (
  `id` int(200) NOT NULL,
  `nav_items` int(5) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `layouts`
--

INSERT INTO `layouts` (`id`, `nav_items`, `title`, `content`) VALUES
(1, 20, 'srirama', 'This is only for testing purpose.');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(200) NOT NULL,
  `usrname` varchar(200) NOT NULL,
  `pascode` varchar(200) NOT NULL,
  `emailid` varchar(200) NOT NULL,
  `category` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `usrname`, `pascode`, `emailid`, `category`) VALUES
(10, 'root', 'chinna', 'chaitanya.garikpati123@gmail.com', 'admin'),
(11, 'client1', 'client', 'client@localhost', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(255) NOT NULL,
  `title` varchar(200) NOT NULL,
  `page_title` varchar(200) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `page_title`, `content`) VALUES
(1, 'srirama1', 'one', 'one: This is default'),
(2, 'srirama2', 'two', 'Two: This is default'),
(3, 'srirama3', 'three', 'Three: This Default'),
(5, 'srirama4', 'four', 'Four:This is also Default'),
(6, 'five', 'five', 'do some thing great'),
(7, 'srirama5', 'six', 'do something grate'),
(8, 'seven', 'Enter The Drangon', 'Welcome Bruclee '),
(9, 'Enter the Magic', 'eight', 'thing ping ding bong'),
(10, 'pesala', 'pesala_apparao', 'pesala apparao valla pillodu\r\npesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodupesala apparao valla pillodu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `layouts`
--
ALTER TABLE `layouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailid` (`emailid`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `layouts`
--
ALTER TABLE `layouts`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
