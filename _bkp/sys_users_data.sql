-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 08, 2013 at 12:59 AM
-- Server version: 5.5.31
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foccus`
--

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`id`, `username`, `password`, `role`, `created`, `modified`, `nome`) VALUES
(3, 'recepcionista02@foccustraining.com.br', '984c551d21d998f60c299f8a114fc261182f4a6f', 'recepcionista', '2013-08-18 01:24:43', '2013-08-18 02:22:37', 'Fulano Beltrano'),
(4, 'admin@foccustraining.com.br', '984c551d21d998f60c299f8a114fc261182f4a6f', 'admin', '2013-08-18 02:08:18', '2013-08-18 02:08:18', 'Administrador Geral'),
(5, 'beltrano@foccustraining.com.br', 'c13644ff7871f01ae0ac328a6fe7a74fb24e5d3f', 'recepcionista', '2013-08-18 02:26:15', '2013-08-18 02:26:15', 'Beltrano Fulano');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
