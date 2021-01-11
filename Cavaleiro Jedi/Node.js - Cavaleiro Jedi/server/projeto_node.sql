-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 11-Jan-2021 às 00:31
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
-- Banco de dados: `projeto_node`
--
CREATE DATABASE IF NOT EXISTS `projeto_node` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto_node`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `conteudo`
--

DROP TABLE IF EXISTS `conteudo`;
CREATE TABLE IF NOT EXISTS `conteudo` (
  `idconteudo` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) DEFAULT NULL,
  `conteudo` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idconteudo`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conteudo`
--

INSERT INTO `conteudo` (`idconteudo`, `categoria`, `conteudo`) VALUES
(14, 'Geral', 'DevOps'),
(13, 'Geral', 'SCRUM'),
(3, 'Front-end', 'ReactJS'),
(4, 'Front-end', 'Bootstrap'),
(5, 'Front-end', 'SASS'),
(6, 'Front-end', 'CSS'),
(7, 'Front-end', 'NextJS'),
(8, 'Back-end', 'PHP'),
(9, 'Back-end', 'NodeJS'),
(10, 'Back-end', 'Scala'),
(11, 'Back-end', 'Java'),
(12, 'Back-end', 'C#'),
(15, 'Geral', 'KanBan'),
(16, 'Geral', 'XP'),
(17, 'Geral', 'UML'),
(18, 'Front-End', 'Redux'),
(19, 'Geral', 'Jenkins');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
