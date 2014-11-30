-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2014 at 10:59 AM
-- Server version: 5.6.20-log
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `contactdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
`id` int(10) NOT NULL,
  `aname` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `aname`) VALUES
(1, 'area1'),
(2, 'area2'),
(3, 'area3'),
(4, 'area4'),
(5, 'area5'),
(6, 'area6'),
(7, 'area7');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE IF NOT EXISTS `cities` (
`id` int(10) NOT NULL,
  `cname` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `cname`) VALUES
(1, 'chennai'),
(2, 'mumbai'),
(3, 'Bangalore');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `firstname` varchar(250) COLLATE utf8_bin NOT NULL,
  `lastname` varchar(250) COLLATE utf8_bin NOT NULL,
  `mobile` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `address` text COLLATE utf8_bin NOT NULL,
  `area` varchar(250) COLLATE utf8_bin NOT NULL,
  `city` varchar(250) COLLATE utf8_bin NOT NULL,
  `state` varchar(250) COLLATE utf8_bin NOT NULL,
  `mobile2` varchar(250) COLLATE utf8_bin NOT NULL,
`id` int(10) NOT NULL,
  `active` int(5) NOT NULL DEFAULT '1'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`firstname`, `lastname`, `mobile`, `email`, `address`, `area`, `city`, `state`, `mobile2`, `id`, `active`) VALUES
('g', 'gg', '895623', 'g@gmail.com', 'g address', 'area1', 'Bangalore', 'Karnataka', '56230', 4, 1),
('x', 'y', '12345', 'x@gmail.com', 'address', 'area1', 'chennai', 'Tamilnadu', '', 2, 0),
('aaa', 'bbb', '1358', 'a@gmail.com', 'new address', 'area1', 'mumbai', 'Maharashtra', '', 3, 1),
('test', 't', '12345852', 'test@gmail.com', 'test address', 'area1', 'mumbai', 'Maharashtra', '20147855', 5, 1),
('ctest', 'cl', '74568921', 'ctest#gmail.com', 'ctest address', 'area5', 'chennai', 'Tamilnadu', '', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
`id` int(10) NOT NULL,
  `uname` varchar(250) COLLATE utf8_bin NOT NULL,
  `upass` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `uname`, `upass`) VALUES
(1, 'gana', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
`id` int(10) NOT NULL,
  `sname` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `sname`) VALUES
(1, 'Tamilnadu'),
(2, 'Maharashtra'),
(3, 'Karnataka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `areas`
--
ALTER TABLE `areas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
