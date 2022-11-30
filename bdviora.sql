-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2022 às 21:09
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bdviora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `ID` int(8) NOT NULL,
  `nome` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_sec` varchar(50) NOT NULL,
  `email_inst` varchar(50) NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `telefone_sec` bigint(20) NOT NULL,
  `responsavel` text NOT NULL,
  `responsavel_sec` text NOT NULL,
  `senha` varchar(40) NOT NULL,
  `senha_conf` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`ID`, `nome`, `email`, `email_sec`, `email_inst`, `telefone`, `telefone_sec`, `responsavel`, `responsavel_sec`, `senha`, `senha_conf`) VALUES
(25, 'Guilherme Sugano', 'gui_sugano@hotmail.com', '', '', 18, 18, 'Pai', 'Mae', '', ''),
(26, 'Patrícia Pires', 'paty_dml@hotmail.com', '', '', 18, 18, 'Pai', 'Mae', '', ''),
(27, 'Gilvan Santos ', 'gilvanjr306@gmail.com', '', '', 18, 18, 'Pai', 'Mae', '', ''),
(28, 'Artur Pereira', 'pereira.artur@hotmail.com', 'email.1@hotmail.com', 'artur.etec@gov.br', 18, 18, 'Mãe', 'Pai', '', ''),
(29, 'Flávio Henrique ', 'flavio18hds@gmail.com', 'flavio2.email@hotmail.com', 'flavio.etec@gov.br', 18, 18, 'Mãe', 'Pai', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_turma`
--

CREATE TABLE `aluno_turma` (
  `ID` int(5) NOT NULL,
  `ID_aluno` int(5) NOT NULL,
  `ID_turma` int(5) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno_turma`
--

INSERT INTO `aluno_turma` (`ID`, `ID_aluno`, `ID_turma`, `data`) VALUES
(15, 25, 8, '2022-11-30 19:41:09'),
(16, 26, 8, '2022-11-30 19:42:45'),
(17, 27, 8, '2022-11-30 19:42:53'),
(18, 26, 9, '2022-11-30 19:59:30'),
(19, 27, 9, '2022-11-30 19:59:35'),
(20, 23, 9, '2022-11-30 19:59:43'),
(21, 24, 9, '2022-11-30 19:59:47'),
(22, 23, 10, '2022-11-30 20:02:13'),
(23, 27, 10, '2022-11-30 20:02:20'),
(24, 23, 11, '2022-11-30 20:25:48'),
(25, 24, 11, '2022-11-30 20:44:57'),
(26, 27, 11, '2022-11-30 20:45:02'),
(27, 28, 12, '2022-11-30 20:51:52'),
(28, 29, 12, '2022-11-30 20:57:27'),
(29, 27, 12, '2022-11-30 20:57:47'),
(30, 28, 13, '2022-11-30 21:08:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

CREATE TABLE `professor` (
  `ID` int(5) NOT NULL,
  `nome` text NOT NULL,
  `telefone` bigint(20) NOT NULL,
  `telefone_sec` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `email_sec` varchar(50) NOT NULL,
  `email_inst` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `senha_conf` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `professor`
--

INSERT INTO `professor` (`ID`, `nome`, `telefone`, `telefone_sec`, `email`, `email_sec`, `email_inst`, `senha`, `senha_conf`) VALUES
(11, 'Rodrigo Albino ', 18, 18, 'rodrigo.email@hotmail.com', 'rodrigo2.email@outlook.com', 'rodrigo.etec@gov.br', '123', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `ID` int(5) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `professor_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`ID`, `curso`, `periodo`, `data`, `professor_id`, `aluno_id`) VALUES
(12, 'Técnico em Informática', 'Noturno', '2022-11-30', 3, 0),
(13, 'Manutenção e Suporte em Informática', 'Vespertino', '2022-11-30', 11, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(5) NOT NULL,
  `tipo` text NOT NULL,
  `email` varchar(55) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `ID_usuarioFK` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `tipo`, `email`, `senha`, `ID_usuarioFK`) VALUES
(3, '', 'adm@adm', '123', 1),
(29, '', 'gui_sugano@hotmail.com', '123', 0),
(30, '', 'paty_dml@hotmail.com', '123', 0),
(31, '', 'gilvanjr306@gmail.com', '123', 0),
(32, '', 'pereira.artur@hotmail.com', '123', 0),
(33, '', 'flavio18hds@gmail.com', '123', 0),
(34, '', 'rodrigo.email@hotmail.com', '123', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_usuarioFK` (`ID_usuarioFK`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `aluno`
--
ALTER TABLE `aluno`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `aluno_turma`
--
ALTER TABLE `aluno_turma`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
