-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Dez-2020 às 18:13
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `3010`
--
CREATE DATABASE IF NOT EXISTS `3010` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `3010`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabelateste`
--

DROP TABLE IF EXISTS `tabelateste`;
CREATE TABLE IF NOT EXISTS `tabelateste` (
  `idtabelateste` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `caracteristica` varchar(15) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `peso` int(11) DEFAULT NULL,
  PRIMARY KEY (`idtabelateste`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabelateste`
--

INSERT INTO `tabelateste` (`idtabelateste`, `nome`, `caracteristica`, `quantidade`, `peso`) VALUES
(2, 'enzo', 'RÃ¡pido', 2, 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
