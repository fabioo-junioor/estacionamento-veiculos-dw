-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 24-Jan-2022 às 00:38
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
-- Banco de dados: `estacionamento`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `modelo`
--

DROP TABLE IF EXISTS `modelo`;
CREATE TABLE IF NOT EXISTS `modelo` (
  `codigo_modelo` int(11) NOT NULL AUTO_INCREMENT,
  `cor` varchar(100) NOT NULL,
  `modelo` varchar(100) NOT NULL,
  `tipo` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  PRIMARY KEY (`codigo_modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `modelo`
--

INSERT INTO `modelo` (`codigo_modelo`, `cor`, `modelo`, `tipo`, `marca`) VALUES
(1, 'bordo', 'uno', 'Hatch', 'fiat'),
(2, 'Prata', 'HB20', 'Sedan', 'Hundai'),
(3, 'Preto', 'Tucson', 'Sedan', 'Hundai'),
(4, 'branca', 'ecosport', 'Hatch', 'ford');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

DROP TABLE IF EXISTS `pessoa`;
CREATE TABLE IF NOT EXISTS `pessoa` (
  `codigo_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `telefone` varchar(11) NOT NULL,
  `num_apart` int(11) NOT NULL,
  PRIMARY KEY (`codigo_pessoa`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`codigo_pessoa`, `nome`, `cpf`, `telefone`, `num_apart`) VALUES
(2, 'Felipe Monteiro Machado', '04298282090', '55996329960', 507),
(3, 'Drinha', '08080808081', '55555555555', 407),
(4, 'Jhonathan', '54354354321', '43434343435', 688),
(5, 'Fabio Junior', '00011122233', '999900010', 520);

-- --------------------------------------------------------

--
-- Estrutura da tabela `registro`
--

DROP TABLE IF EXISTS `registro`;
CREATE TABLE IF NOT EXISTS `registro` (
  `codigo_registro` int(11) NOT NULL AUTO_INCREMENT,
  `data_chegada` date NOT NULL,
  `data_saida` date NOT NULL,
  `cod_veiculo` int(11) NOT NULL,
  PRIMARY KEY (`codigo_registro`),
  KEY `cod_veiculo_fk` (`cod_veiculo`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `registro`
--

INSERT INTO `registro` (`codigo_registro`, `data_chegada`, `data_saida`, `cod_veiculo`) VALUES
(1, '2022-01-19', '2022-01-19', 5),
(4, '2022-01-19', '2022-01-19', 5),
(5, '2022-01-19', '2022-01-19', 7),
(6, '2022-01-23', '2022-01-23', 6);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ve??culo`
--

DROP TABLE IF EXISTS `ve??culo`;
CREATE TABLE IF NOT EXISTS `ve??culo` (
  `codigo_veiculo` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(10) NOT NULL,
  `cod_pessoa` int(11) NOT NULL,
  `cod_modelo` int(11) NOT NULL,
  PRIMARY KEY (`codigo_veiculo`),
  KEY `cod_pessoa_fk` (`cod_pessoa`),
  KEY `cod_modelo_fk` (`cod_modelo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `ve??culo`
--

INSERT INTO `ve??culo` (`codigo_veiculo`, `placa`, `cod_pessoa`, `cod_modelo`) VALUES
(5, '0000000', 2, 1),
(6, '46464646', 4, 3),
(7, 'fff4433', 4, 4);

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
