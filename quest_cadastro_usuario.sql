-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05-Nov-2021 às 11:12
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quest`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `quest_cadastro_usuario`
--

CREATE TABLE `quest_cadastro_usuario` (
  `id` int(11) NOT NULL,
  `dt_cadastro` date DEFAULT NULL,
  `dt_update` date DEFAULT NULL,
  `usuario` varchar(100) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `quest_cadastro_usuario`
--

INSERT INTO `quest_cadastro_usuario` (`id`, `dt_cadastro`, `dt_update`, `usuario`, `nome`, `cpf`, `dt_nascimento`, `email`, `telefone`, `uf`, `cidade`, `endereco`) VALUES
(23, '2021-11-05', NULL, 'theo.arthur', 'Theo Arthur Gustavo Farias', '884.673.489-09', '1997-09-12', 'theoarthurg@metododerose.org', '(85) 3693-3374', 'AL', 'Anadia', 'Rua Manuel Ferreira'),
(25, '2021-11-05', NULL, 'fatima.betina', 'Fátima Betina Daiane da Cunha', '143.165.795-68', '1963-03-20', 'ffatimabetina@igoralcantara.com.br', '(71) 3891-5345', 'BA', 'Sambaíba', 'Nova Brasília de Valéria'),
(27, '2021-11-05', NULL, 'analu.julia', 'Analu Julia Isadora Costa', '146.313.059-75', '1998-02-20', 'analujulia@zaniniengenharia.com.br', '(47) 3697-2659', 'SC', 'Campos Novos', 'Rua Dalvina de Oliveira');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `quest_cadastro_usuario`
--
ALTER TABLE `quest_cadastro_usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario` (`usuario`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `quest_cadastro_usuario`
--
ALTER TABLE `quest_cadastro_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
