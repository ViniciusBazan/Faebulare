-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Nov-2020 às 16:03
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

CREATE TABLE `tb_coment` (
  `id_coment` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `id_post` int(255) NOT NULL,
  `conteudo` varchar(255) NOT NULL,
  `reply` int(255) DEFAULT NULL,
  `dt_coment` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_post`
--

CREATE TABLE `tb_post` (
  `id_post` int(255) NOT NULL,
  `titulo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_user` int(255) NOT NULL,
  `email` varchar(256) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `valid` tinyint(1) DEFAULT NULL,
  `security` varchar(10) DEFAULT NULL,
  `dt_criar` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_user`, `email`, `senha`, `nome`, `sobrenome`, `valid`, `security`, `dt_criar`) VALUES
(1, 'vinicius.bazan16@gmail.com', 'TUZwMlJHaGtTVlZvWlRseVV6TmtkM0ZRVTBwRWNsRjNWMXB6V0cxT2JsQkNLeTl3UTFwdlQyWkxhejA9', 'Vinícius', 'Bazan', 1, NULL, '2020-11-09 17:49:12'),
(3, 'vinicius.bazan18@gmail.com', 'TUZwMlJHaGtTVlZvWlRseVV6TmtkM0ZRVTBwRWNsRjNWMXB6V0cxT2JsQkNLeTl3UTFwdlQyWkxhejA9', 'Vinícius', 'Bazan', 1, NULL, '2020-11-09 19:00:52');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_coment`
--
ALTER TABLE `tb_coment`
  ADD PRIMARY KEY (`id_coment`),
  ADD KEY `fk_user` (`id_user`),
  ADD KEY `fk_post` (`id_post`);

--
-- Índices para tabela `tb_post`
--
ALTER TABLE `tb_post`
  ADD PRIMARY KEY (`id_post`);

--
-- Índices para tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_coment`
--
ALTER TABLE `tb_coment`
  MODIFY `id_coment` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_post`
--
ALTER TABLE `tb_post`
  MODIFY `id_post` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
