-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jan-2021 às 02:21
-- Versão do servidor: 10.4.10-MariaDB
-- versão do PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gerenciamentohorario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agendamento`
--

DROP TABLE IF EXISTS `agendamento`;
CREATE TABLE IF NOT EXISTS `agendamento` (
  `id_agenda` int(11) NOT NULL AUTO_INCREMENT,
  `data` varchar(10) NOT NULL,
  `horarioInicial` time NOT NULL,
  `horarioFinal` time NOT NULL,
  `tipo` varchar(40) NOT NULL,
  `dias` varchar(150) NOT NULL,
  PRIMARY KEY (`id_agenda`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `agendamento`
--

INSERT INTO `agendamento` (`id_agenda`, `data`, `horarioInicial`, `horarioFinal`, `tipo`, `dias`) VALUES
(1, '2021-01-25', '09:30:00', '10:20:00', 'Um dia especifico', ''),
(2, '2021-01-25', '10:30:00', '11:00:00', 'Um dia especifico', ''),
(4, '', '14:00:00', '14:30:00', 'Semanalmente', 'Segunda'),
(5, '', '14:00:00', '14:30:00', 'Semanalmente', 'Quarta'),
(6, '2021-01-25', '14:00:00', '15:00:00', 'Um dia especifico', ''),
(7, '2021-01-25', '15:10:00', '15:30:00', 'Um dia especifico', ''),
(8, '2021-01-26', '14:00:00', '15:00:00', 'Um dia especifico', ''),
(9, '2021-01-29', '09:00:00', '12:00:00', 'Um dia especifico', ''),
(10, '2021-01-29', '14:00:00', '15:00:00', 'Um dia especifico', ''),
(17, '', '09:40:00', '10:00:00', 'Diariamente', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
