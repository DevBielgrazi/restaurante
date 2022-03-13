-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13-Maio-2020 às 19:44
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurante_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `codigo` int(11) NOT NULL,
  `validade` date DEFAULT NULL,
  `preco_venda` float DEFAULT NULL,
  `preco_compra` float DEFAULT NULL,
  `nome` varchar(50) NOT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`codigo`, `validade`, `preco_venda`, `preco_compra`, `nome`, `quantidade`) VALUES
(1, NULL, NULL, NULL, 'Dolly', NULL),
(2, NULL, NULL, NULL, 'coca cola lata 255ml', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_sistema`
--

CREATE TABLE `usuario_sistema` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `salario` float NOT NULL,
  `data_nascimento` date DEFAULT NULL,
  `rg` varchar(9) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` int(11) NOT NULL,
  `funcao` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario_sistema`
--

INSERT INTO `usuario_sistema` (`codigo`, `nome`, `endereco`, `salario`, `data_nascimento`, `rg`, `cpf`, `telefone`, `funcao`, `login`, `senha`) VALUES
(14, 'Alex Borges', 'Rua Teste', 1000, '2010-01-20', '123', '321', 123, 'funcionario', 'alex', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`codigo`);

--
-- Indexes for table `usuario_sistema`
--
ALTER TABLE `usuario_sistema`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuario_sistema`
--
ALTER TABLE `usuario_sistema`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
