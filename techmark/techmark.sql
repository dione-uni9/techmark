-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-maio-2022 às 01:34
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `techmark`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `avalicacoes`
--

CREATE TABLE `avalicacoes` (
  `idAvaliacao` int(11) NOT NULL,
  `idPedidoAvaliacao` int(11) DEFAULT NULL,
  `idNotaAvaliacao` char(1) NOT NULL,
  `idTextoAvaliacao` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `idFuncionario` int(11) NOT NULL,
  `nomeFuncionario` varchar(100) NOT NULL,
  `senhaFuncionario` varchar(100) NOT NULL,
  `emailFuncionario` varchar(100) NOT NULL,
  `ehGerente` bit(1) NOT NULL,
  `setorFuncionario` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`idFuncionario`, `nomeFuncionario`, `senhaFuncionario`, `emailFuncionario`, `ehGerente`, `setorFuncionario`) VALUES
(1, 'Dione', 's3cret00', 'saramago-dione@gmail.com', b'0', 'Preparacao'),
(2, 'Nathalia', '1a2b3c4d', 'nathalia@gmail.com', b'0', 'Conferencia e Embalagem'),
(3, 'Leandro', 'd3sc0br3', 'leandro@gmail.com', b'0', 'Entrega'),
(4, 'Caio', 'senha123', 'caio@gmail.com', b'1', 'Gerencia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `dataDaCompra` datetime NOT NULL,
  `pedidoAvaliado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `userId`, `status`, `dataDaCompra`, `pedidoAvaliado`) VALUES
(1, 1, 'Entregue', '2021-06-05 22:21:45', 1),
(2, 1, 'Entregue', '2021-06-05 22:24:26', 0),
(5, 3, 'Aberto', '2021-06-15 20:39:47', 0),
(6, 1, 'Entregue', '2021-06-16 14:38:54', 0),
(9, 1, 'Aberto', '2021-06-16 20:28:25', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidositem`
--

CREATE TABLE `pedidositem` (
  `idPedidoItem` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `precoPedido` decimal(11,2) NOT NULL,
  `quantidadePedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidositem`
--

INSERT INTO `pedidositem` (`idPedidoItem`, `idPedido`, `idProduto`, `precoPedido`, `quantidadePedido`) VALUES
(16, 5, 8, '4.00', 3),
(17, 5, 6, '500.00', 3),
(21, 5, 16, '4.00', 2),
(23, 5, 2, '3600.00', 1),
(24, 5, 7, '3.00', 1),
(25, 5, 5, '2000.00', 1),
(26, 5, 3, '2000.00', 3),
(27, 5, 18, '2.00', 1),
(28, 5, 13, '1.00', 1),
(29, 5, 9, '11.00', 1),
(30, 6, 9, '11.00', 1),
(31, 6, 6, '500.00', 1),
(32, 6, 2, '3600.00', 1),
(40, 9, 1, '5000.00', 3),
(41, 9, 17, '5.00', 1),
(42, 9, 13, '1.00', 7);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nomeProduto` varchar(100) NOT NULL,
  `qtdProduto` int(11) NOT NULL,
  `precoProduto` int(11) NOT NULL,
  `urlimagemProduto` varchar(100) NOT NULL,
  `idProduto` int(11) NOT NULL,
  `CategoriaProduto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nomeProduto`, `qtdProduto`, `precoProduto`, `urlimagemProduto`, `idProduto`, `CategoriaProduto`) VALUES
('Playstation 5', 0, 5000, '../Assets/images/playstation5.jpg', 1, 'eletronicos'),
('iPhone XR', 0, 3600, '../Assets/images/iphonexr.png', 2, 'eletronicos'),
('Televisão', 0, 2000, '../Assets/images/televisao.jpg', 3, 'eletronicos'),
('Geladeira', 0, 2000, '../Assets/images/geladeira.jpg', 4, 'eletrodomesticos'),
('Maquina de lavar', 0, 2000, '../Assets/images/maquinadelavar.jpg', 5, 'eletrodomesticos'),
('Micro-ondas', 0, 500, '../Assets/images/microondas.jpg', 6, 'eletrodomesticos'),
('Sabonete', 0, 3, '../Assets/images/saboneteembarra.jpg', 7, 'higienepessoal'),
('Pasta de dente', 0, 4, '../Assets/images/pastadedente.jpg', 8, 'higienepessoal'),
('Shampoo', 0, 11, '../Assets/images/shampoo.jpeg', 9, 'higienepessoal'),
('Amaciante', 0, 15, '../Assets/images/amaciante.jpg', 10, 'produtosdelimpeza'),
('Desinfetante', 0, 8, '../Assets/images/desinfetante.jpg', 11, 'produtosdelimpeza'),
('Detergente', 0, 7, '../Assets/images/detergente.jpg', 12, 'produtosdelimpeza'),
('Cenoura', 0, 1, 'https://saborizatti.com.br/wp-content/uploads/2020/12/Cenoura-saborizatti.png', 13, 'pereciveis'),
('Carne', 0, 35, 'https://static-wp-canalr-prd.canalrural.com.br/2018/06/1470235579768.jpg', 14, 'pereciveis'),
('Alface', 0, 5, '../Assets/images/alface.jpeg', 15, 'pereciveis'),
('Coca-Cola', 0, 4, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRHFYX6Nuq9GdL_SrShK4HP9yOwDuj8gFY9zw&usqp=CAU', 16, 'bebidas'),
('Fanta', 0, 5, 'https://deskontao.agilecdn.com.br/2363.jpg', 17, 'bebidas'),
('Skol', 0, 2, '../Assets/images/skol.jpg', 18, 'bebidas');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nomeUsuario` varchar(100) NOT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(8) NOT NULL,
  `cpfUsuario` int(11) NOT NULL,
  `dataUsuario` date NOT NULL,
  `dddUsuario` int(2) DEFAULT NULL,
  `telefoneUsuario` int(8) DEFAULT NULL,
  `sexoUsuario` tinyint(1) NOT NULL,
  `ruaUsuario` varchar(100) NOT NULL,
  `numeroRuaUsuario` int(4) NOT NULL,
  `cidadeUsuario` varchar(100) NOT NULL,
  `estadoUsuario` varchar(2) NOT NULL,
  `cepUsuario` int(8) NOT NULL,
  `bairroUsuario` varchar(100) NOT NULL,
  `complementoUsuario` varchar(15) DEFAULT NULL,
  `idUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nomeUsuario`, `emailUsuario`, `senhaUsuario`, `cpfUsuario`, `dataUsuario`, `dddUsuario`, `telefoneUsuario`, `sexoUsuario`, `ruaUsuario`, `numeroRuaUsuario`, `cidadeUsuario`, `estadoUsuario`, `cepUsuario`, `bairroUsuario`, `complementoUsuario`, `idUsuario`) VALUES
('Lucas Moreira', 'lucas@lucas.com', '123456', 123456789, '0000-00-00', 71, 33333333, 1, 'rua javascript', 2, 'cidade php', 'BA', 12345678, 'bairro angular', 'albergue', 1),
('Lucas Paiva', 'lucaspaiva@lucaspaiva.com', '123456', 123456789, '0000-00-00', 71, 33333333, 1, 'rua javascript', 2, 'cidade php', 'BA', 12345678, 'bairro angular', 'albergue', 2),
('Lucas Mello', 'lucasmello@lucasmello.com', '123456', 123456789, '0000-00-00', 71, 33333333, 1, 'rua javascript', 2, 'cidade php', 'BA', 12345678, 'bairro angular', 'albergue', 3),
('Thiago Santos', 'thiago@thiago.com', '123456', 123456789, '0000-00-00', 71, 33333333, 1, 'rua javascript', 2, 'cidade php', 'BA', 12345678, 'bairro angular', 'albergue', 4),
('Marcel', 'marcel@marcel.com', '123456', 123456789, '0000-00-00', 71, 33333333, 1, 'rua javascript', 2, 'cidade php', 'BA', 12345678, 'bairro angular', 'albergue', 5);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`idFuncionario`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `userId` (`userId`);

--
-- Índices para tabela `pedidositem`
--
ALTER TABLE `pedidositem`
  ADD PRIMARY KEY (`idPedidoItem`),
  ADD KEY `idPedido` (`idPedido`),
  ADD KEY `idProduto` (`idProduto`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProduto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`,`emailUsuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `idFuncionario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pedidositem`
--
ALTER TABLE `pedidositem`
  MODIFY `idPedidoItem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `usuarios` (`idUsuario`);

--
-- Limitadores para a tabela `pedidositem`
--
ALTER TABLE `pedidositem`
  ADD CONSTRAINT `pedidositem_ibfk_1` FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`),
  ADD CONSTRAINT `pedidositem_ibfk_2` FOREIGN KEY (`idProduto`) REFERENCES `produtos` (`idProduto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
