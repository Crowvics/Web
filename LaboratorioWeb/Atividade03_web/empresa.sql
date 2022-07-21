-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 17-Fev-2022 às 02:18
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `empresa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbclientes`
--

DROP TABLE IF EXISTS `tbclientes`;
CREATE TABLE IF NOT EXISTS `tbclientes` (
  `id_cli` int(50) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `email_cli` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `end_cli` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `cidade_cli` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `uf_cli` varchar(50) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tblogin`
--

DROP TABLE IF EXISTS `tblogin`;
CREATE TABLE IF NOT EXISTS `tblogin` (
  `user_login` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `pass_login` varchar(50) COLLATE latin1_general_ci NOT NULL,
  UNIQUE KEY `user_login` (`user_login`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Extraindo dados da tabela `tblogin`
--

INSERT INTO `tblogin` (`user_login`, `pass_login`) VALUES
('Victor', '010203');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
