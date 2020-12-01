-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2020 às 21:46
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
-- Banco de dados: `cadastro2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastrousuario`
--

CREATE TABLE `cadastrousuario` (
  `nome` varchar(30) NOT NULL,
  `nascimento` varchar(30) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(30) NOT NULL,
  `senha` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastrousuario`
--

INSERT INTO `cadastrousuario` (`nome`, `nascimento`, `cidade`, `email`, `telefone`, `senha`, `id`) VALUES
('Eliandro ', '1666-12-22', 'Sorocaba', 'eliandroelias@hotmail.com', '15991866490', 12345688, 0),
('teste 5', '1111-12-22', 'Sorocaba', 'eliandroelias@hotmail.com', '15991866490', 45678912, 0),
('eliandro', '22/12/1997', 'sorocaba', 'eliandroeliias@hotmail.com', '15555555', 2009, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
