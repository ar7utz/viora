-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 12-Nov-2022 às 20:00
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdviora`
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
(14, 'fausto', 'qwe@we', 'qwe@q', 'qwe@qwe', 123, 123, 'asd', 'asd', '', ''),
(20, 'a', 'a@a', 's@a', 'a@a', 2, 2, 'a', 'a', '', ''),
(22, 'artur ', 'a@a', 'a@a', 'a@a', 18, 18, 'artur', 'artur', '', '');

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
(1, 13, 5, '2022-11-12 19:12:49'),
(2, 14, 5, '2022-11-12 19:13:26'),
(3, 6, 5, '2022-11-12 19:13:50'),
(5, 2, 5, '2022-11-12 19:21:07'),
(6, 14, 6, '2022-11-12 19:28:46'),
(7, 13, 7, '2022-11-12 19:28:56'),
(8, 6, 7, '2022-11-12 19:34:47'),
(9, 2, 5, '2022-11-12 19:35:29'),
(10, 14, 5, '2022-11-12 19:35:35'),
(11, 22, 5, '2022-11-12 19:36:29'),
(12, 2, 6, '2022-11-12 20:00:08');

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
(7, 'cesar', 15665, 15646, 'cesar@awd', 'w@w', 'w@q', '123', ''),
(9, 'a', 2, 2, 'a@a', 'a@a', 'a@a', '123', '');

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
(5, 'Desenvolvimento de Sistemas', 'Noturno', '2022-11-30', 7, 0),
(6, 'Curso de ADS', 'Diurno', '2022-11-24', 0, 0),
(7, 'Curso de ADS', 'Noturno', '2022-11-09', 2, 0);

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
(16, '', 'cesar', '123', 0),
(17, '', 'a@s', '123', 0),
(18, '', 'a', '123', 0),
(19, '', 'a', '123', 0),
(20, '', 'a@a', '123', 0),
(21, '', 'a@a', '123', 0),
(22, '', 'a@a', '123', 0),
(23, '', 'a@a', '123', 0),
(24, '', 'a@a', '123', 0),
(25, '', 'a@a', '123', 0),
(26, '', 'a@a', '123', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `aluno_turma`
--
ALTER TABLE `aluno_turma`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `turma`
--
ALTER TABLE `turma`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_usuarioFK` (`ID_usuarioFK`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `ID` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `aluno_turma`
--
ALTER TABLE `aluno_turma`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `turma`
--
ALTER TABLE `turma`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
