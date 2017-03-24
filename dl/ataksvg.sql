-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2015 at 08:05 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ataksvg`
--
CREATE DATABASE IF NOT EXISTS `ataksvg` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ataksvg`;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE IF NOT EXISTS `status` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'Element ID',
  `color` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `color`) VALUES
(1, 'circle', 'blue'),
(2, 'gear', 'red'),
(3, 'square', '#FFD700'),
(4, 'triangle', 'firebrick'),
(5, 'y_with_hole', '#FF00FF'),
(6, 'c1', '#C16321'),
(7, 'h', '#BF2642'),
(8, 'a', '#D6B841'),
(9, 'n', '#658D3F'),
(10, 'g', '#3D8084'),
(11, 'e', '#F2F0D5'),
(12, 'r1', '#736E2F'),
(13, 'web1', 'teal'),
(14, 'web2', 'red'),
(15, 'mhost', 'teal'),
(16, 'mds', 'teal'),
(17, 'mnet', 'aqua'),
(18, 'mvm', 'gold'),
(19, 'ahost', 'teal'),
(20, 'ads', 'teal'),
(21, 'anet', 'teal'),
(22, 'avm', 'red'),
(23, 'bhost', 'gold'),
(24, 'bds', 'aqua'),
(25, 'bnet', 'teal'),
(26, 'bvm', 'teal'),
(27, 'chost', 'teal'),
(28, 'cds', 'red'),
(29, 'cnet', 'teal'),
(30, 'cvm', 'gold'),
(31, 'dhost', 'gold'),
(32, 'dds', 'teal'),
(33, 'dnet', 'gold'),
(34, 'dvm', 'red'),
(35, 'link1', 'teal'),
(36, 'link2', 'teal'),
(37, 'link3', 'gold'),
(38, 'link4', 'red'),
(39, 'workera', 'teal'),
(40, 'workerb', 'teal'),
(41, 'workerc', 'gold'),
(42, 'workerd', 'teal'),
(43, 'db1', 'teal'),
(44, 'db2', 'teal');

-- --------------------------------------------------------

--
-- Table structure for table `tagstatus`
--

CREATE TABLE IF NOT EXISTS `tagstatus` (
  `tag` varchar(25) NOT NULL,
  `statusID` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagstatus`
--

INSERT INTO `tagstatus` (`tag`, `statusID`) VALUES
('dc', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44'),
('main', '6,7,8,9,10,11,12'),
('one', '4,5'),
('two', '1,2,3');

-- --------------------------------------------------------

--
-- Table structure for table `tagvalue`
--

CREATE TABLE IF NOT EXISTS `tagvalue` (
  `tag` varchar(25) NOT NULL,
  `valueID` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagvalue`
--

INSERT INTO `tagvalue` (`tag`, `valueID`) VALUES
('dc', '1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20');

-- --------------------------------------------------------

--
-- Table structure for table `value`
--

CREATE TABLE IF NOT EXISTS `value` (
`id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL COMMENT 'elementID',
  `value` varchar(512) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `value`
--

INSERT INTO `value` (`id`, `name`, `value`) VALUES
(1, 't01', 'X'),
(2, 't02', '10'),
(3, 't03', '5'),
(4, 't04', '11'),
(5, 't05', 'Y'),
(6, 't06', '12'),
(7, 't07', '6'),
(8, 't08', '1'),
(9, 't09', 'Z'),
(10, 't10', '3'),
(11, 't11', '16'),
(12, 't12', '13'),
(13, 't13', '6'),
(14, 't14', '3'),
(15, 't15', '6'),
(16, 't16', '54'),
(17, 't17', '6'),
(18, 't18', '1'),
(19, 't19', '6'),
(20, 't20', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `status`
--
ALTER TABLE `status`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `tagstatus`
--
ALTER TABLE `tagstatus`
 ADD PRIMARY KEY (`tag`);

--
-- Indexes for table `tagvalue`
--
ALTER TABLE `tagvalue`
 ADD PRIMARY KEY (`tag`);

--
-- Indexes for table `value`
--
ALTER TABLE `value`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `value`
--
ALTER TABLE `value`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
