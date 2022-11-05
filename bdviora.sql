-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2022 às 21:54
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
(2, 'Vitor Lucas Duarte de Miranda', 'vitin@hotmail.com', 'vitu@gmail.com', 'vitin@etec.sp.gov.br', 123, 123, 'Cristiano Ronaldo', 'Neymar ', '', ''),
(6, 'asd', 'dd@asd', 'dd@asd', 'dd@asdd', 123, 123, 'asd', 'asdasd', '', ''),
(13, 'Audinário corno', '123@123', 'email2@teste', 'vitin@etec.sp.gov.br', 123, 0, 'Cristiano Ronaldo', 'Neymar ', '', ''),
(14, 'fausto', 'qwe@we', 'qwe@q', 'qwe@qwe', 123, 123, 'asd', 'asd', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_turma`
--

CREATE TABLE `aluno_turma` (
  `ID` int(5) NOT NULL,
  `ID_aluno` int(5) NOT NULL,
  `ID_turma` int(5) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'asd', 123, 123, 'asdas@asd', 'sad2asd@asd', 'asd@ASD', '123', ''),
(2, 'Audinário corno', 123, 123, 'ordinario@asd', 'asd@asd', 'asd@asd', '123', ''),
(3, 'Elda ', 123, 123, 'eldacorna@asd', 'eldagostosa@asd', 'eldadoida@asd', '123', ''),
(7, 'cesar', 15665, 15646, 'cesar@awd', 'w@w', 'w@q', '123', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor_turma`
--

CREATE TABLE `professor_turma` (
  `ID` int(5) NOT NULL,
  `data` date NOT NULL,
  `ID_turma` int(5) NOT NULL,
  `ID_professor` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `turma`
--

CREATE TABLE `turma` (
  `ID` int(5) NOT NULL,
  `curso` varchar(100) NOT NULL,
  `periodo` varchar(20) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `turma`
--

INSERT INTO `turma` (`ID`, `curso`, `periodo`, `data`) VALUES
(1, 'Manutenção e Suporte em Informática', '0', '2022-11-17'),
(3, 'Farmácia', '0', '2022-11-30'),
(4, 'Química', 'noite', '2022-11-26'),
(5, 'Desenvolvimento de Sistemas', 'Noturno', '2022-11-30');

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
(4, '', 'vitin@hotmail.com', '123', 0),
(5, '', 'Audinário corno', '123', 0),
(6, '', 'Elda ', '123', 0),
(7, '', 'dd@asd', '123', 0),
(8, '', '123@123', '123', 0),
(9, '', '123@123', '123', 0),
(10, '', '123@123', '123', 0),
(11, '', 'Elda ', '123', 0),
(12, '', 'Elda ', '123', 0),
(13, '', 'Elda ', '123', 0),
(14, '', 'qwe@we', '123', 0),
(15, '', 'cesar', '123', 0),
(16, '', 'cesar', '123', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `aluno`
--
ALTER TABLE `aluno`
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
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `professor`
--
ALTER TABLE `professor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `turma`
--
ALTER TABLE `turma`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
