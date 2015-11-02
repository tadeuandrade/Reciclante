-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Nov-2015 às 19:05
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bd_aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_coleta`
--

CREATE TABLE IF NOT EXISTS `tb_coleta` (
  `nome` varchar(20) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `data_solicitacao` date NOT NULL,
  `data_coleta` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_coleta`
--

INSERT INTO `tb_coleta` (`nome`, `tipo`, `descricao`, `data_solicitacao`, `data_coleta`) VALUES
('tadeu', 'papel', 'www', '0000-00-00', '0000-00-00'),
('tadeu', 'plastico', 'garrafa pet', '0000-00-00', '0000-00-00'),
('tadeu', 'papel', '', '0000-00-00', '0000-00-00'),
('tadeu', 'papel', '', '0000-00-00', '0000-00-00'),
('tadeu', 'papel', '', '0000-00-00', '0000-00-00'),
('tadeu', 'papel', '', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `rua` varchar(20) NOT NULL,
  `numero` int(10) NOT NULL,
  `bairro` varchar(15) NOT NULL,
  `cidade` varchar(15) NOT NULL,
  `uf` char(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id`, `nome`, `login`, `senha`, `cep`, `rua`, `numero`, `bairro`, `cidade`, `uf`) VALUES
(1, 'Administrador do Sistema', 'admin', '80177534a0c99a7e3645b52f2027a48b', '', '', 0, '', '', ''),
(3, 'kaio', 'kaiokash', '76f61b25be24dbbc645b0fa391656ec8', '', '', 0, '', '', ''),
(4, 'tadeu', 'tadeu', '1234', '', '', 0, '', '', ''),
(5, 'jose', 'j', 'jose', '30690-020', 'Rua das PetÃºnias', 1788, 'LindÃ©ia (Barre', 'Belo Horizonte', 'MG'),
(6, 'irene', 'i', 'irene', '31210-470', 'Rua Sete Lagoas', 34, 'Bonfim', 'Belo Horizonte', 'MG');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
