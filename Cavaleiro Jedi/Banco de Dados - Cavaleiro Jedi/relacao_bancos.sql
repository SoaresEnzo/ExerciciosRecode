-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 08-Jan-2021 às 05:47
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
-- Banco de dados: `relacao_bancos`
--
CREATE DATABASE IF NOT EXISTS `relacao_bancos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `relacao_bancos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `bancos`
--

DROP TABLE IF EXISTS `bancos`;
CREATE TABLE IF NOT EXISTS `bancos` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bancos`
--

INSERT INTO `bancos` (`codigo`, `nome`) VALUES
(1, 'Banco do Brasil'),
(33, 'Santander'),
(237, 'Bradesco'),
(341, 'Itaú'),
(422, 'Safra S.A.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `conta_corrente`
--

DROP TABLE IF EXISTS `conta_corrente`;
CREATE TABLE IF NOT EXISTS `conta_corrente` (
  `fk_banco` int(11) NOT NULL,
  `fk_pessoa` bigint(12) NOT NULL,
  `numero` int(11) NOT NULL,
  PRIMARY KEY (`fk_banco`,`fk_pessoa`,`numero`),
  UNIQUE KEY `numero_UNIQUE` (`numero`),
  KEY `fk_pessoa_idx` (`fk_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `conta_corrente`
--

INSERT INTO `conta_corrente` (`fk_banco`, `fk_pessoa`, `numero`) VALUES
(1, 88208811874, 8120938),
(341, 66516764743, 9102947),
(237, 12345678911, 96645727),
(33, 12345678911, 98876788),
(33, 33345678911, 99999999);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

DROP TABLE IF EXISTS `pessoas`;
CREATE TABLE IF NOT EXISTS `pessoas` (
  `cpf` bigint(12) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`cpf`),
  UNIQUE KEY `cpf_UNIQUE` (`cpf`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`cpf`, `nome`) VALUES
(12345678911, 'José da Silva'),
(33345678911, 'Viktor'),
(44444444444, 'Enzo Soares'),
(66516764743, 'Maria dos Santos'),
(88208811874, 'Manoel da Silva');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `conta_corrente`
--
ALTER TABLE `conta_corrente`
  ADD CONSTRAINT `fk_banco` FOREIGN KEY (`fk_banco`) REFERENCES `bancos` (`codigo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_pessoa` FOREIGN KEY (`fk_pessoa`) REFERENCES `pessoas` (`cpf`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
