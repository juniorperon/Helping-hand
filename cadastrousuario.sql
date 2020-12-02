-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Dez-2020 às 14:30
-- Versão do servidor: 10.4.16-MariaDB
-- versão do PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cdtusuario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrousuario`
--

CREATE TABLE `cadastrousuario` (
  `nome` varchar(30) NOT NULL,
  `data_nasc` varchar(30) NOT NULL,
  `cep` int(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `estado` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrousuario`
--

INSERT INTO `cadastrousuario` (`nome`, `data_nasc`, `cep`, `cidade`, `endereco`, `estado`, `email`, `telefone`, `cpf`, `senha`) VALUES
('Eliandro', '1997-12-22', 0, 'SP', '', '', '', '15991866490', '123.545.678-99', ''),
('Eliandro', '1990-12-22', 18044120, 'Guararapes', 'Sorocaba', 'SP', 'eliandroelias@hotmail.com', '15991866490', '123.545.678-99', '2009');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
