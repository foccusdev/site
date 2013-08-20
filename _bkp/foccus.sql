-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 20, 2013 at 11:53 AM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `foccus`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_atividades`
--

CREATE TABLE IF NOT EXISTS `sys_atividades` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `sys_atividades`
--

INSERT INTO `sys_atividades` (`id`, `nome`, `valor`) VALUES
(1, 'MusculaÃ§Ã£o', 109.95),
(2, 'Pilates', 149.90),
(3, 'NataÃ§Ã£o', 100.00),
(4, 'JudÃ´', 80.65);

-- --------------------------------------------------------

--
-- Table structure for table `sys_atividades_planos`
--

CREATE TABLE IF NOT EXISTS `sys_atividades_planos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `atividade_id` bigint(20) NOT NULL,
  `plano_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atividades` (`atividade_id`),
  KEY `fk_planos` (`plano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sys_atividades_planos`
--

INSERT INTO `sys_atividades_planos` (`id`, `atividade_id`, `plano_id`) VALUES
(1, 4, 1),
(2, 3, 1),
(3, 2, 1),
(4, 1, 2),
(5, 4, 1),
(6, 3, 14),
(7, 3, 15),
(8, 3, 16);

-- --------------------------------------------------------

--
-- Table structure for table `sys_planos`
--

CREATE TABLE IF NOT EXISTS `sys_planos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `valor_especial` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `sys_planos`
--

INSERT INTO `sys_planos` (`id`, `nome`, `valor_especial`) VALUES
(1, 'plano teste', 10.00),
(2, 'plano 02', 123.00),
(3, NULL, NULL),
(4, 'Plano 03', 245.00),
(5, 'Plano 03', 245.00),
(6, 'Plano 03', 245.00),
(7, 'Plano 03', 245.00),
(8, 'Plano 03', 245.00),
(9, 'Plano 03', 245.00),
(10, 'Plano 04', 43.00),
(11, 'Plano 04', 43.00),
(12, 'Plano 04', 43.00),
(13, 'Plano 04', 43.00),
(14, 'Plano 04', 43.00),
(15, 'Plano 04', 43.00),
(16, 'Plano 04', 43.00),
(17, 'Plano 04', 43.00),
(18, 'Plano 04', 43.00),
(19, 'Plano 04', 43.00),
(20, 'Plano 05', 43.00),
(21, 'Plano 06', 43.00),
(22, 'Plano 06', 43.00),
(23, 'Plano 07', -243.00),
(24, 'Plano 07', -243.00),
(25, 'Plano 07', -243.00),
(26, 'Plano 07', -243.00),
(27, 'Plano 08', 5634.00),
(28, 'Plano 06', 52345.00),
(29, 'Plano 06', 52345.00),
(30, 'Plano 06', 52345.00),
(31, 'Plano 06', 52345.00),
(32, 'Plano 06', 52345.00),
(33, 'Plano 06', 52345.00),
(34, 'Plano 06', 52345.00),
(35, 'Plano 06', 52345.00);

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE IF NOT EXISTS `sys_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `sys_users`
--

INSERT INTO `sys_users` (`id`, `username`, `password`, `role`, `created`, `modified`, `nome`) VALUES
(3, 'recepcionista02@foccustraining.com.br', '984c551d21d998f60c299f8a114fc261182f4a6f', 'recepcionista', '2013-08-18 01:24:43', '2013-08-18 02:22:37', 'Fulano Beltrano'),
(4, 'admin@foccustraining.com.br', '984c551d21d998f60c299f8a114fc261182f4a6f', 'admin', '2013-08-18 02:08:18', '2013-08-18 02:08:18', 'Administrador Geral'),
(5, 'beltrano@foccustraining.com.br', 'c13644ff7871f01ae0ac328a6fe7a74fb24e5d3f', 'recepcionista', '2013-08-18 02:26:15', '2013-08-18 02:26:15', 'Beltrano Fulano');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sys_atividades_planos`
--
ALTER TABLE `sys_atividades_planos`
  ADD CONSTRAINT `sys_atividades_planos_ibfk_1` FOREIGN KEY (`atividade_id`) REFERENCES `sys_atividades` (`id`),
  ADD CONSTRAINT `sys_atividades_planos_ibfk_2` FOREIGN KEY (`plano_id`) REFERENCES `sys_planos` (`id`);
