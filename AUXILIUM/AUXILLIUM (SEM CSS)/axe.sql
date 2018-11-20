-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11-Set-2018 às 00:32
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `axe`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `cod_aluno` varchar(10) DEFAULT NULL,
  `matricula` decimal(10,0) DEFAULT NULL,
  `boletim` varchar(200) DEFAULT NULL,
  `cod_projeto` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresa`
--

CREATE TABLE `empresa` (
  `nome` varchar(20) NOT NULL,
  `doacao` varchar(20) NOT NULL,
  `cnpj` varchar(20) NOT NULL,
  `rua` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `tipo-logadouro` varchar(20) DEFAULT NULL,
  `logadouro` longtext,
  `numero` decimal(5,0) DEFAULT NULL,
  `complemento` longtext,
  `bairro` longtext,
  `cidade` longtext,
  `cod_tel` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `escola`
--

CREATE TABLE `escola` (
  `cod_escola` varchar(10) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `nome_escola` longtext,
  `turmas` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `post`
--

CREATE TABLE `post` (
  `cod_post` varchar(10) NOT NULL,
  `tipo_foto` longblob,
  `tipo_text` longtext
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `projeto`
--

CREATE TABLE `projeto` (
  `cod_proj` varchar(10) NOT NULL,
  `tipo_tec` varchar(1) DEFAULT NULL,
  `tipo_hum` varchar(1) DEFAULT NULL,
  `tipo_amb` varchar(1) DEFAULT NULL,
  `qtd_precisa` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `telefone`
--

CREATE TABLE `telefone` (
  `ddd` decimal(2,0) DEFAULT NULL,
  `numero` decimal(9,0) DEFAULT NULL,
  `cod_telefone` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(8) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  `cidade` varchar(50) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `snome` varchar(200) NOT NULL,
  `nasc` varchar(10) NOT NULL,
  `escola` varchar(20) NOT NULL,
  `iduser` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `rua` varchar(150) NOT NULL,
  `casa` varchar(10) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`email`, `senha`, `telefone`, `cidade`, `nome`, `snome`, `nasc`, `escola`, `iduser`, `sexo`, `rg`, `cpf`, `rua`, `casa`, `bairro`, `cep`) VALUES
('FKJDKD@GMAIL.COM', '123123', NULL, 'IFF', 'NDFKJNFJNF', '', '', '', 1, '', '', '', '', '', '', ''),
('dffggg@gmail.com', '123123', '9856', 'quissa', 'yhjjgh', 'gdfdgdfgf', '2018-06-07', 'dffds', 2, '', '', '', '', '', '', ''),
('Cadastro@gmail.com', '123123', '9986523', 'quissa', 'Cadastro', 'Cadastro', '2018-06-06', 'iff', 3, '', '', '', '', '', '', ''),
('funcionadisgraÃ§a@gmail.com', '1231231', NULL, 'quissama', 'kndckjdsnc', '', '', '', 15, '', '316545', '69484', 'rua', '098', 'algum', '28735'),
('neinnein@gmail.com', '123123', NULL, 'quissama', 'nada', '', '', '', 14, '', '316545', '69484', 'rua', '987', 'algum', '28735');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`cod_tel`);

--
-- Indexes for table `escola`
--
ALTER TABLE `escola`
  ADD PRIMARY KEY (`cod_escola`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`cod_post`);

--
-- Indexes for table `projeto`
--
ALTER TABLE `projeto`
  ADD PRIMARY KEY (`cod_proj`);

--
-- Indexes for table `telefone`
--
ALTER TABLE `telefone`
  ADD PRIMARY KEY (`cod_telefone`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
