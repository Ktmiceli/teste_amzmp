-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 15/10/2021 às 06:39
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste_amzmp`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bd_adm`
--

CREATE TABLE `bd_adm` (
  `_id` int(2) NOT NULL,
  `_login` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `_pass` varchar(130) COLLATE latin1_spanish_ci NOT NULL,
  `_nivel` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Despejando dados para a tabela `bd_adm`
--

INSERT INTO `bd_adm` (`_id`, `_login`, `_pass`, `_nivel`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `bd_clientes`
--

CREATE TABLE `bd_clientes` (
  `_id` int(5) NOT NULL,
  `_nome` varchar(30) NOT NULL,
  `_email` varchar(30) NOT NULL,
  `_cpf` varchar(12) NOT NULL,
  `_telefone` varchar(10) NOT NULL,
  `_cidade` varchar(20) NOT NULL,
  `_endereco` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `bd_adm`
--
ALTER TABLE `bd_adm`
  ADD PRIMARY KEY (`_id`);

--
-- Índices de tabela `bd_clientes`
--
ALTER TABLE `bd_clientes`
  ADD PRIMARY KEY (`_id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `bd_adm`
--
ALTER TABLE `bd_adm`
  MODIFY `_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `bd_clientes`
--
ALTER TABLE `bd_clientes`
  MODIFY `_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
