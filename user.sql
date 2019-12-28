-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 27, 2019 at 02:19 PM
-- Server version: 5.7.18-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registeruser`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `Reg_ID` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contactNo` int(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`Reg_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Reg_ID`, `fname`, `lname`, `username`, `email`, `contactNo`, `password`) VALUES
(1, 'hashitha', 'niroshan', 'hash', 's@gmail.com', 21321231, 'c4ca4238a0b923820dcc509a6f75849b'),
(2, 'anura', 'kumara', 'anura1', 'anura@gmail.com', 2131313, 'e946608418d087ea2839fe7352ca1064'),
(3, 'fakar', 'sams', 'hash', 's@gmail.com', 2121213, '202cb962ac59075b964b07152d234b70'),
(4, 'aviska', 'fernande', 'avish', 'av@gmail.com', 213313, '698d51a19d8a121ce581499d7b701668'),
(5, 'kamal', 'amal', 'kamal1', 'kamal@gmail.com', 4157897, '202cb962ac59075b964b07152d234b70'),
(6, 'sunil', 'asiri', 'sunil', 'sunil@gmail.com', 45789555, 'b0b86080c976aa7651bffe0801644d74');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
