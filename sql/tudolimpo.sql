-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Fev-2020 às 15:43
-- Versão do servidor: 10.1.39-MariaDB
-- versão do PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tudolimpo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `login` varchar(30) DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adm`
--

INSERT INTO `adm` (`id`, `nome`, `email`, `login`, `senha`) VALUES
(1, 'kevao', 'kevao@gmail.com', 'kevao', '86e96eb0f9c2a19e5f08e3cdae6249ba');

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixa`
--

CREATE TABLE `caixa` (
  `id` int(11) NOT NULL,
  `renda` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `caixa`
--

INSERT INTO `caixa` (`id`, `renda`) VALUES
(1, 1000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `cpf` varchar(30) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `data`) VALUES
(1, 'kevao', '15454', '2020-01-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compra`
--

CREATE TABLE `compra` (
  `id` int(11) NOT NULL,
  `idFuncionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhecaixa`
--

CREATE TABLE `detalhecaixa` (
  `id` int(11) NOT NULL,
  `valor` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `motivo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `detalhecaixa`
--

INSERT INTO `detalhecaixa` (`id`, `valor`, `tipo`, `data`, `motivo`) VALUES
(35, '180', 'entrada', '2020-01-31', 'alteraÃ§Ã£o'),
(36, '10', 'entrada', '2020-01-31', 'df');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhecompra`
--

CREATE TABLE `detalhecompra` (
  `id` int(11) NOT NULL,
  `idCompra` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `valorTotal` float DEFAULT NULL,
  `valorPago` float DEFAULT NULL,
  `valorTroco` float DEFAULT NULL,
  `formaPagamento` varchar(15) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `detalhecompra`
--

INSERT INTO `detalhecompra` (`id`, `idCompra`, `idProduto`, `valorTotal`, `valorPago`, `valorTroco`, `formaPagamento`, `data`) VALUES
(4, NULL, NULL, 100, 100, 0, 'debito', '2020-01-31'),
(5, NULL, NULL, 100, 100, 0, 'debito', '2020-01-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `detalhevenda`
--

CREATE TABLE `detalhevenda` (
  `id` int(11) NOT NULL,
  `idVenda` int(11) DEFAULT NULL,
  `idProduto` int(11) DEFAULT NULL,
  `valorTotal` float DEFAULT NULL,
  `valorPago` float DEFAULT NULL,
  `valorTroco` float DEFAULT NULL,
  `formaPagamento` varchar(15) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `detalhevenda`
--

INSERT INTO `detalhevenda` (`id`, `idVenda`, `idProduto`, `valorTotal`, `valorPago`, `valorTroco`, `formaPagamento`, `data`) VALUES
(4, NULL, NULL, 0, 0, 0, 'credito', '2020-01-31'),
(5, NULL, NULL, 10, 10, 0, 'credito', '2020-01-31');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedor`
--

CREATE TABLE `fornecedor` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `documento` varchar(80) DEFAULT NULL,
  `cidade` varchar(80) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `numero` varchar(80) DEFAULT NULL,
  `cep` varchar(80) DEFAULT NULL,
  `complemento` varchar(80) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `situacao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fornecedor`
--

INSERT INTO `fornecedor` (`id`, `nome`, `documento`, `cidade`, `bairro`, `endereco`, `numero`, `cep`, `complemento`, `data`, `situacao`) VALUES
(1, 'kevaoÃ§Ã§', '16487454', 'bfjsbfj', 'fjsbfj', 'knfjb', 'jfbjsbfj', '154857485', 'bjfbsjf', '2020-01-22', 'inativo'),
(2, 'kevao', '1514', '51', '51', '1251', '514', '515', '51', '2020-01-31', NULL),
(3, 'dsd', 'sds', 'dsd', 'sd', 'dsd', 'ds', 'dsd', 'sd', '2020-01-31', NULL),
(4, 'f', 'fÃ§', 'fkn', 'fknf', 'fn ', 'nkn', 'mfn', 'nk', '2020-01-31', 'ativo'),
(5, 'nkgh', 'ibgbqgb', 'b', 'igbgi', 'bbgi', 'bigbgi', 'bg', 'g', '2020-02-03', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `cpf` varchar(80) DEFAULT NULL,
  `cidade` varchar(80) DEFAULT NULL,
  `bairro` varchar(80) DEFAULT NULL,
  `endereco` varchar(80) DEFAULT NULL,
  `numero` varchar(80) DEFAULT NULL,
  `cep` varchar(80) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `senha` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `nome`, `cpf`, `cidade`, `bairro`, `endereco`, `numero`, `cep`, `data`, `senha`) VALUES
(6, 'kevao', '160.614.157-02', 'Rio de Janeiro', 'TomÃ¡s Coelho', 'PraÃ§a Henrique Gonzales', 'required', '20.750-370', NULL, '89b07e60cf1c881e1b23f63ee3566d6c');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `idFornecedor` int(11) DEFAULT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `descricao` varchar(80) DEFAULT NULL,
  `marca` varchar(80) DEFAULT NULL,
  `categoria` varchar(80) DEFAULT NULL,
  `valor` float DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `situacao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `idFornecedor`, `nome`, `descricao`, `marca`, `categoria`, `valor`, `quantidade`, `data`, `situacao`) VALUES
(1, 1, 'sla', 'fdg', 'fdgd', 'quarto', 0, 45478, '2020-01-27', 'inativo'),
(2, 4, 'lkl', 'klk', 'lkl', 'cozinha', 0, 41, '2020-01-31', 'inativo'),
(3, 5, 'cjbjf', 'dgdg', 'gfg', 'cozinha', 100.1, 4, '2020-02-03', 'ativo'),
(4, 4, 'fdf', 'fdf', 'f', 'sala', 50, 1, '2020-02-03', 'ativo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id` int(11) NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idFuncionario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `caixa`
--
ALTER TABLE `caixa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFuncionario` (`idFuncionario`);

--
-- Indexes for table `detalhecaixa`
--
ALTER TABLE `detalhecaixa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detalhecompra`
--
ALTER TABLE `detalhecompra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCompra` (`idCompra`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Indexes for table `detalhevenda`
--
ALTER TABLE `detalhevenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idVenda` (`idVenda`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Indexes for table `fornecedor`
--
ALTER TABLE `fornecedor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idFornecedor` (`idFornecedor`);

--
-- Indexes for table `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idFuncionario` (`idFuncionario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adm`
--
ALTER TABLE `adm`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `caixa`
--
ALTER TABLE `caixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `compra`
--
ALTER TABLE `compra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `detalhecaixa`
--
ALTER TABLE `detalhecaixa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `detalhecompra`
--
ALTER TABLE `detalhecompra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `detalhevenda`
--
ALTER TABLE `detalhevenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `fornecedor`
--
ALTER TABLE `fornecedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `venda`
--
ALTER TABLE `venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`id`);

--
-- Limitadores para a tabela `detalhecompra`
--
ALTER TABLE `detalhecompra`
  ADD CONSTRAINT `detalhecompra_ibfk_1` FOREIGN KEY (`idCompra`) REFERENCES `compra` (`id`),
  ADD CONSTRAINT `detalhecompra_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `detalhevenda`
--
ALTER TABLE `detalhevenda`
  ADD CONSTRAINT `detalhevenda_ibfk_1` FOREIGN KEY (`idVenda`) REFERENCES `venda` (`id`),
  ADD CONSTRAINT `detalhevenda_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `produto` (`id`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`idFornecedor`) REFERENCES `fornecedor` (`id`);

--
-- Limitadores para a tabela `venda`
--
ALTER TABLE `venda`
  ADD CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `cliente` (`id`),
  ADD CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`idFuncionario`) REFERENCES `funcionario` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
