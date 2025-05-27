-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/11/2024 às 23:12
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `atividade_somativa`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `clientes`
--

CREATE TABLE `clientes` (
  `Nome` varchar(50) DEFAULT NULL,
  `CPF` varchar(15) NOT NULL,
  `Idade` int(11) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Parentesco` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Despejando dados para a tabela `clientes`
--

INSERT INTO `clientes` (`Nome`, `CPF`, `Idade`, `Email`, `Parentesco`) VALUES
('Julia Pereira', '109.876.543.21', 26, 'julia@gmail.com', 'Filha'),
('Emanuel Pereira Jr', '123.456.789.10', 56, 'Emanuel@gmail.com', 'Titular'),
('Eliza Pereira', '165.824.544.11', 56, 'julia@gmail.com', 'Esposa'),
('Eloiza Macedo Pereira', '244.555.333.02', 76, NULL, 'Mae'),
('Emanuel Pereira', '249.111.367.83', 78, NULL, 'Pai'),
('Julio Pereira', '263.145.364.52', 26, 'julio@gmail.com', 'Filho'),
('Otavio Nunes', '273.145.323.42', 25, 'otavio@gmail.com', 'Filho');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacotesativos`
--

CREATE TABLE `pacotesativos` (
  `ID_Pacote` int(11) NOT NULL,
  `Local` varchar(50) DEFAULT NULL,
  `Valor` int(11) DEFAULT NULL,
  `Desrição` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Despejando dados para a tabela `pacotesativos`
--

INSERT INTO `pacotesativos` (`ID_Pacote`, `Local`, `Valor`, `Desrição`) VALUES
(1, 'Paris', 30, 'Paris março de '),
(2, 'Disney', 40, 'Disney Natal de'),
(3, 'Londres', 25, 'Londres Março -');

-- --------------------------------------------------------

--
-- Estrutura para tabela `viagensclientes`
--

CREATE TABLE `viagensclientes` (
  `ID` int(11) NOT NULL,
  `Data_Viagem` date DEFAULT NULL,
  `FK_CPF` varchar(15) DEFAULT NULL,
  `FK_ID_Pacote` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Despejando dados para a tabela `viagensclientes`
--

INSERT INTO `viagensclientes` (`ID`, `Data_Viagem`, `FK_CPF`, `FK_ID_Pacote`) VALUES
(1234, '2024-12-10', '123.456.789.10', 2);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`CPF`);

--
-- Índices de tabela `pacotesativos`
--
ALTER TABLE `pacotesativos`
  ADD PRIMARY KEY (`ID_Pacote`);

--
-- Índices de tabela `viagensclientes`
--
ALTER TABLE `viagensclientes`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `FK_CPF` (`FK_CPF`),
  ADD KEY `FK_ID_Pacote` (`FK_ID_Pacote`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `viagensclientes`
--
ALTER TABLE `viagensclientes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1235;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `viagensclientes`
--
ALTER TABLE `viagensclientes`
  ADD CONSTRAINT `viagensclientes_ibfk_1` FOREIGN KEY (`FK_CPF`) REFERENCES `clientes` (`CPF`),
  ADD CONSTRAINT `viagensclientes_ibfk_2` FOREIGN KEY (`FK_ID_Pacote`) REFERENCES `pacotesativos` (`ID_Pacote`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
