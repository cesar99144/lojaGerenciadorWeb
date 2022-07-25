-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 25-Jul-2022 às 00:33
-- Versão do servidor: 8.0.24
-- versão do PHP: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autorizacoes`
--

CREATE TABLE `autorizacoes` (
  `USUARIO_ID` int UNSIGNED NOT NULL,
  `CHAVE_AUTORIZACAO` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `autorizacoes`
--

INSERT INTO `autorizacoes` (`USUARIO_ID`, `CHAVE_AUTORIZACAO`) VALUES
(33, 'cadastrar_clientes'),
(33, 'cadastrar_fornecedores'),
(34, 'cadastrar_clientes'),
(34, 'cadastrar_fornecedores'),
(34, 'cadastrar_produtos'),
(35, 'alterar_preco_produtos'),
(35, 'cadastrar_clientes'),
(35, 'cadastrar_fornecedores'),
(35, 'cadastrar_produtos'),
(35, 'excluir_clientes'),
(35, 'excluir_fornecedores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int NOT NULL,
  `nome` varchar(120) NOT NULL,
  `celular` varchar(70) NOT NULL,
  `email` varchar(254) NOT NULL,
  `endereco` varchar(120) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `uf` varchar(90) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `ativo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`idCliente`, `nome`, `celular`, `email`, `endereco`, `bairro`, `uf`, `cidade`, `ativo`) VALUES
(11, 'Cesar Ferreira', '819999999', 'cesar@gmail.ccom', 'Rua exemplo', 'Centro', 'PE', 'Caruaru', 'Sim'),
(12, 'EXEMPLO', '8199999999', 'exemplo@gmail.com', 'Avenida central', 'Centro', 'PE', 'Caruaru', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `idFornecedor` int NOT NULL,
  `RazaoSocial` varchar(120) NOT NULL,
  `Cnpj` varchar(40) NOT NULL,
  `celular` varchar(70) NOT NULL,
  `email` varchar(254) NOT NULL,
  `endereco` varchar(120) NOT NULL,
  `bairro` varchar(80) NOT NULL,
  `uf` varchar(90) NOT NULL,
  `cidade` varchar(80) NOT NULL,
  `ativo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`idFornecedor`, `RazaoSocial`, `Cnpj`, `celular`, `email`, `endereco`, `bairro`, `uf`, `cidade`, `ativo`) VALUES
(2, 'Exemplo Telhas', '9999999999999', '999999999999', 'exemplo@gmail.com', 'Avenida', 'Centro', 'PE', 'CARUARU', 'Sim'),
(3, 'construções', '99999999999999', '999999999999', 'contato@construcoes.com', 'avenida tal', 'Centro', 'PE', 'CARUARU', 'Sim');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `idProduto` int NOT NULL,
  `nome` varchar(120) NOT NULL,
  `estoque` decimal(10,4) NOT NULL,
  `preco` decimal(10,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`idProduto`, `nome`, `estoque`, `preco`) VALUES
(1, 'Telha', '22.0000', '25.0000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `USUARIO_ID` int UNSIGNED NOT NULL,
  `LOGIN` varchar(30) NOT NULL,
  `SENHA` varchar(30) NOT NULL,
  `ATIVO` varchar(1) NOT NULL DEFAULT 'S',
  `NOME_COMPLETO` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`USUARIO_ID`, `LOGIN`, `SENHA`, `ATIVO`, `NOME_COMPLETO`) VALUES
(33, 'cesar99', '123', 'S', 'César Ferreira'),
(34, 'ju55', '123', 'N', 'Juliana'),
(35, 'master99', '123', 'S', 'Master');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `vw_autorizacoes`
-- (Veja abaixo para a view atual)
--
CREATE TABLE `vw_autorizacoes` (
`CHAVE` varchar(22)
,`DESCRICAO` varchar(25)
);

-- --------------------------------------------------------

--
-- Estrutura para vista `vw_autorizacoes`
--
DROP TABLE IF EXISTS `vw_autorizacoes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vw_autorizacoes`  AS SELECT 'cadastrar_clientes' AS `CHAVE`, 'Cadastrar clientes' AS `DESCRICAO` ;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autorizacoes`
--
ALTER TABLE `autorizacoes`
  ADD PRIMARY KEY (`USUARIO_ID`,`CHAVE_AUTORIZACAO`) USING BTREE;

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`idFornecedor`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`USUARIO_ID`),
  ADD UNIQUE KEY `IDX_USUARIOS_LOGIN` (`LOGIN`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `idFornecedor` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `USUARIO_ID` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `autorizacoes`
--
ALTER TABLE `autorizacoes`
  ADD CONSTRAINT `FK_USUARIOS_AUTORIZACOES` FOREIGN KEY (`USUARIO_ID`) REFERENCES `usuarios` (`USUARIO_ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
