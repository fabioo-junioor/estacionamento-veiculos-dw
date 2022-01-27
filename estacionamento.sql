-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 27-Jan-2022 às 04:56
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

DROP TABLE IF EXISTS `modelo`;
CREATE TABLE IF NOT EXISTS `modelo` (
  `codigo_modelo` int NOT NULL AUTO_INCREMENT,
  `cor` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo_modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`codigo_modelo`, `cor`, `modelo`, `tipo`, `marca`) VALUES
(1, 'bordo', 'fire', 'uno', 'fiat'),
(2, 'Prata', 'HB20', 'Sedan', 'Hundai'),
(3, 'Preto', 'Tucson', 'Sedan', 'Hundai');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `codigo_pessoa` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `num_apart` int NOT NULL,
  PRIMARY KEY (`codigo_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`codigo_pessoa`, `nome`, `cpf`, `telefone`, `num_apart`) VALUES
(2, 'Felipe Monteiro Machado', '04298282090', '55996329960', 507),
(3, 'Drinha', '08080808081', '55555555555', 407),
(4, 'Jhonathan', '54354354321', '43434343435', 688);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `codigo_registro` int NOT NULL AUTO_INCREMENT,
  `data_chegada` datetime NOT NULL,
  `data_saida` datetime NOT NULL,
  `cod_veiculo` int NOT NULL,
  PRIMARY KEY (`codigo_registro`),
  KEY `cod_veiculo_fk` (`cod_veiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`codigo_registro`, `data_chegada`, `data_saida`, `cod_veiculo`) VALUES
(1, '2022-01-19 00:00:00', '2022-01-19 00:00:00', 5),
(4, '2022-01-19 00:00:00', '2022-01-19 00:00:00', 5),
(5, '2022-01-19 00:00:00', '2022-01-19 00:00:00', 5),
(15, '2022-01-27 01:40:27', '2022-01-27 01:42:38', 6),
(16, '2022-01-27 01:42:18', '2022-01-27 01:42:45', 6),
(18, '2022-01-27 01:44:36', '2022-01-27 01:44:45', 6),
(19, '2022-01-27 01:44:51', '0000-00-00 00:00:00', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ve??culo`
--

DROP TABLE IF EXISTS `ve??culo`;
CREATE TABLE IF NOT EXISTS `ve??culo` (
  `codigo_veiculo` int NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `cod_pessoa` int NOT NULL,
  `cod_modelo` int NOT NULL,
  PRIMARY KEY (`codigo_veiculo`),
  KEY `cod_pessoa_fk` (`cod_pessoa`),
  KEY `cod_modelo_fk` (`cod_modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `ve??culo`
--

INSERT INTO `ve??culo` (`codigo_veiculo`, `placa`, `cod_pessoa`, `cod_modelo`) VALUES
(5, '0000000', 2, 1),
(6, '46464646', 4, 3);

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `cod_veiculo_fk` FOREIGN KEY (`cod_veiculo`) REFERENCES `ve??culo` (`codigo_veiculo`);

--
-- Limitadores para a tabela `ve??culo`
--
ALTER TABLE `ve??culo`
  ADD CONSTRAINT `cod_modelo_fk` FOREIGN KEY (`cod_modelo`) REFERENCES `modelo` (`codigo_modelo`),
  ADD CONSTRAINT `cod_pessoa_fk` FOREIGN KEY (`cod_pessoa`) REFERENCES `pessoa` (`codigo_pessoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
