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
-- Banco de dados: `25112020`
--
CREATE DATABASE IF NOT EXISTS `25112020` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `25112020`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `telefone` bigint(20) DEFAULT NULL,
  `dataDeNasc` date DEFAULT NULL,
  `cpf` bigint(20) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idCliente`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `nome`, `telefone`, `dataDeNasc`, `cpf`, `endereco`) VALUES
(1, 'Enzo', 5511922222222, '2001-02-01', 2222222222, 'Rua Y, 55'),
(2, 'João', 5511933333333, '1998-03-04', 3333333333, 'Rua Z, 66'),
(3, 'Pedro', 5519944444444, '1999-04-01', 4444444444, 'Rua I, 77'),
(4, 'José', 5511955555555, '1995-01-02', 5555555555, 'Rua X, 182'),
(5, 'José', 5511966666666, '1995-01-02', 5555555555, 'Rua X, 182'),
(6, 'Gabriel', 5511977777777, '1995-01-03', 6666666666, 'Rua X, 111'),
(7, 'Gabriela', 5511988888888, '1995-04-02', 7777777777, 'Rua X, 141'),
(8, 'Fernando', 5511999999999, '1995-01-07', 8888888888, 'Rua X, 126'),
(9, 'Alberto', 5511910101010, '1995-05-02', 9999999999, 'Rua X, 121'),
(10, 'Joseph', 5511910101011, '1995-03-02', 1010101010, 'Rua X, 12'),
(11, 'Guilherme', 5511910101111, '1995-01-02', 1010101011, 'Rua X, 102'),
(12, 'Pietro', 5511910111111, '1995-01-02', 1111111111, 'Rua X, 156');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

DROP TABLE IF EXISTS `fornecedor`;
CREATE TABLE IF NOT EXISTS `fornecedor` (
  `idFornecedor` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(255) NOT NULL,
  `cnpj/cpf` bigint(20) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`idFornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`idFornecedor`, `empresa`, `cnpj/cpf`, `endereco`, `telefone`, `email`) VALUES
(1, 'Recode', 11111111111, 'Rua X, 23', 5511911111111, 'recode@recode.org'),
(2, 'ASystems', 22222222222, 'Rua Else', 9999999999999, 'else@sistemas.com'),
(3, 'Async', 33333333333, 'Rua If', 7777777777777, 'if@else.com'),
(4, 'Alfa', 61524968456, 'Rua A', 5511999999999, 'alfa@x.com'),
(5, 'Bravo', 44444444444, 'Rua B', 5511966666666, 'bravo@x.com'),
(6, 'Charlie', 55555555555, 'Rua C', 5511977777777, 'charlie@x.com'),
(7, 'Delta', 66666666666, 'Rua D', 5511988888888, 'delta@x.com'),
(8, 'Echo', 77777777777, 'Rua E', 5511999999954, 'echo@x.com'),
(9, 'Fox', 88888888888, 'Rua F', 5511910101011, 'fox@x.com'),
(10, 'Golf', 99999999999, 'Rua LG', 5511910101010, 'golf@x.com'),
(11, 'Hotel', 10101010101, 'Rua T', 5511910101111, 'hotel@x.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `idProdutos` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `idFornecedor` int(11) DEFAULT NULL,
  `preco` decimal(8,2) DEFAULT NULL,
  PRIMARY KEY (`idProdutos`),
  KEY `fk_fornecedor_idx` (`idFornecedor`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProdutos`, `nome`, `quantidade`, `idFornecedor`, `preco`) VALUES
(1, 'Curso Fullstack', 1, 1, '10.00'),
(2, 'Sistema quebrado', 3, 2, '12.99'),
(3, 'Curso JS', 6, 3, '25.99'),
(4, 'Curso React', 1000, 4, '100.00'),
(5, 'Curso SCRUM', 100, 6, '25.99'),
(6, 'Curso Redis', 777, 6, '50.99'),
(7, 'Curso MongoDB', 60, 7, '49.99'),
(8, 'Curso C#', 2000, 7, '255.99'),
(9, 'Curso Java', 10, 8, '499.99'),
(10, 'Curso Python', 5, 11, '99.99'),
(11, 'Curso Scala', 6251, 11, '999.99'),
(12, 'Curso PHP', 100000, 10, '700.00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `idVendas` int(11) NOT NULL AUTO_INCREMENT,
  `idCliente` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `quantidade` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`idVendas`),
  KEY `fk_cliente_idx` (`idCliente`),
  KEY `fk_produto_idx` (`idProduto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`idVendas`, `idCliente`, `idProduto`, `quantidade`) VALUES
(1, 1, 1, 5),
(2, 1, 2, 6),
(3, 2, 3, 2),
(4, 12, 1, 5),
(5, 11, 11, 1),
(6, 12, 4, 1),
(7, 2, 8, 1),
(8, 2, 2, 1),
(9, 4, 4, 2),
(10, 4, 1, 1),
(11, 12, 3, 3),
(12, 5, 6, 2);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `fk_fornecedor` FOREIGN KEY (`idFornecedor`) REFERENCES `fornecedor` (`idFornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `fk_cliente` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`idCliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_produto` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProdutos`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
