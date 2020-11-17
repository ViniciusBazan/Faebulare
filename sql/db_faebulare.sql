-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Nov-2020 às 16:26
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_faebulare`
--
CREATE DATABASE IF NOT EXISTS `db_faebulare` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_faebulare`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_coment`
--
-- Criação: 10-Nov-2020 às 17:26
-- Última actualização: 17-Nov-2020 às 19:17
--

DROP TABLE IF EXISTS `tb_coment`;
CREATE TABLE IF NOT EXISTS `tb_coment` (
  `id_coment` int(255) NOT NULL AUTO_INCREMENT,
  `id_user` int(255) NOT NULL,
  `id_post` int(255) NOT NULL,
  `conteudo` varchar(600) NOT NULL,
  `reply` int(255) DEFAULT NULL,
  `dt_coment` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_coment`),
  KEY `fk_user` (`id_user`),
  KEY `fk_post` (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- RELACIONAMENTOS PARA TABELAS `tb_coment`:
--   `id_post`
--       `tb_post` -> `id_post`
--   `id_user`
--       `tb_usuarios` -> `id_user`
--

--
-- Extraindo dados da tabela `tb_coment`
--

INSERT INTO `tb_coment` (`id_coment`, `id_user`, `id_post`, `conteudo`, `reply`, `dt_coment`) VALUES
(1, 1, 1, 'História muito interessante, desconhecia esse lado dela!', NULL, '2020-11-17 19:17:47');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_post`
--
-- Criação: 09-Nov-2020 às 14:22
--

DROP TABLE IF EXISTS `tb_post`;
CREATE TABLE IF NOT EXISTS `tb_post` (
  `id_post` int(255) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(256) NOT NULL,
  PRIMARY KEY (`id_post`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- RELACIONAMENTOS PARA TABELAS `tb_post`:
--

--
-- Extraindo dados da tabela `tb_post`
--

INSERT INTO `tb_post` (`id_post`, `titulo`) VALUES
(1, 'A Bela adormecida'),
(2, 'A Bela e a Fera'),
(3, 'A princesa e o sapo'),
(4, 'Branca de neve'),
(5, 'Chapeuzinho vermelho'),
(6, 'Cinderela'),
(7, 'João e Maria'),
(8, 'O gato de botas'),
(9, 'A Pequena sereia'),
(10, 'Pinoquio'),
(11, 'Rapunzel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--
-- Criação: 17-Nov-2020 às 19:09
-- Última actualização: 17-Nov-2020 às 19:10
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `id_user` int(255) NOT NULL AUTO_INCREMENT,
  `email` varchar(256) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `valid` tinyint(1) DEFAULT NULL,
  `security` varchar(10) DEFAULT NULL,
  `dt_criar` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- RELACIONAMENTOS PARA TABELAS `tb_usuarios`:
--

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_user`, `email`, `senha`, `nome`, `sobrenome`, `valid`, `security`, `dt_criar`) VALUES
(1, 'vinicius.bazan16@gmail.com', 'TUZwMlJHaGtTVlZvWlRseVV6TmtkM0ZRVTBwRWNsRjNWMXB6V0cxT2JsQkNLeTl3UTFwdlQyWkxhejA9', 'Vinícius', 'Verissimo Bazan', 1, NULL, '2020-11-17 19:10:31');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_coment`
--
ALTER TABLE `tb_coment`
  ADD CONSTRAINT `fk_post` FOREIGN KEY (`id_post`) REFERENCES `tb_post` (`id_post`),
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_user`) REFERENCES `tb_usuarios` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
