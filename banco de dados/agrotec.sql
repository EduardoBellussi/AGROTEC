-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2024 às 05:23
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
-- Banco de dados: `agrotec`
--
CREATE DATABASE IF NOT EXISTS `agrotec` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `agrotec`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sobrenome` varchar(30) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `sobrenome`, `telefone`, `email`, `senha`) VALUES
(4, 'Teste', '1', '15 99999999', 'teste1@gmail.com', '$2y$10$adUmlk6vs7ePmq5ugh5CQuIrPqqUeF9K.ho/D.wUROjGuaPPi8Jum'),
(5, 'Eduardo', 'Augusto', '(15)99999-9999', 'a@hotmail.com', '$2y$10$qiUT6TB4mSJLloUeelSJA.VezWct7lAmAODT8N6q3C8maIU2mOcxe');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `fk_produto` varchar(6) NOT NULL,
  `fk_cadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `comentario`
--

CREATE TABLE `comentario` (
  `id` int(11) NOT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `id_cadastro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` varchar(6) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `marca` varchar(255) NOT NULL,
  `linha` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `peso` varchar(20) NOT NULL,
  `preco` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `img`, `marca`, `linha`, `descricao`, `peso`, `preco`) VALUES
('cat1', 'Gatos Filhotes Carne e Frango', 'img/racao-felino-1.webp', 'Magnus', 'Cat Premium', '<ul>\r\n<li>BIO COMPLEX;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Proteína de alta qualidade;</li>\r\n<li>Vitaminas e Minerais;</li>\r\n<li>Taurina;</li>\r\n</ul>', '20 kg', 279.90),
('cat2', 'Gatos Adultos Carne', 'img/racao-felino-0.webp', 'Magnus', 'Cat Premium', '<ul>\r\n<li>BIO COMPLEX;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Proteína de alta qualidade;</li>\r\n<li>Pele e Pelagem;</li>\r\n<li>Taurina;</li>\r\n</ul>', '20 kg', 229.90),
('cat3', 'Gatos Adultos Salmão', 'img/racao-felino-3.webp', 'Magnus', 'Cat Premium', '<ul>\r\n<li>BIO COMPLEX;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Proteína de alta qualidade;</li>\r\n<li>Pele e Pelagem;</li>\r\n<li>Taurina;</li>\r\n</ul>', '20 kg', 259.90),
('cat4', 'Gatos Adultos Castrados Carne', 'img/racao-felino-4.webp', 'Magnus', 'Cat Premium', '<ul>\r\n<li>BIO COMPLEX;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Proteína de alta qualidade;</li>\r\n<li>Pele e Pelagem;</li>\r\n<li>Taurina;</li>\r\n</ul>', '20 kg', 259.90),
('cat5', 'Gatos Filhotes Sabor Carne ao Molho', 'img/sache-felino-1.webp', 'Magnus', 'Sachê', '<ul>\r\n<li>Sem transgênicos;</li>\r\n<li>Sem aromatizantes e corantes artificiais;</li>\r\n<li>Nutrição completa;</li>\r\n</ul>', '85 g', 2.90),
('cat6', 'Gatos Adultos Carne ao Molho', 'img/sache-felino-2.webp', 'Magnus', 'Sachê', '<ul>\r\n<li>Sem transgênicos;</li>\r\n<li>Sem aromatizantes artificiais;</li>\r\n<li>Auxílio a ingestão de água;</li>\r\n</ul>', '85 g', 2.90),
('cat7', 'Gatos Adultos Sabor Salmão ao Molho', 'img/sache-felino-3.webp', 'Magnus', 'Sachê', '<ul>\r\n<li>Sem transgênicos;</li>\r\n<li>Sem aromatizantes artificiais;</li>\r\n<li>Auxílio a ingestão de água;</li>\r\n</ul>', '85 g', 2.90),
('cat8', 'Gatos Castrados Sabor Frango ao Molho', 'img/sache-felino-4.webp', 'Magnus', 'Sachê', '<ul>\r\n<li>Sem transgênicos;</li>\r\n<li>Sem aromatizantes artificiais;</li>\r\n<li>Auxílio a ingestão de água;</li>\r\n</ul>', '85 g', 2.90),
('dog1', 'Cães Filhotes Sabor Frango e Cereais', 'img/racao-canino-1.jpg', 'Magnus', 'Premium Especial Supreme', '<ul>\r\n<li>Proteína de Alta Qualidade;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Pele e Pelagem;</li>\r\n<li>Vitaminas e Minerais;</li>\r\n</ul>', '15 kg', 199.90),
('dog10', 'Cães Adultos Pequeno Porte', 'img/petisco-canino-6.jpg', 'Magnus', 'Biscoito', '<ul>\r\n<li>Pelagem brilhante;</li>\r\n<li>Auxilia na limpeza bucal;</li>\r\n<li>Com 21 vitaminas e minerais;</li>\r\n<li>Super crocante;</li>\r\n<li>Tamanho especial;</li>\r\n</ul>', '400 g', 14.90),
('dog11', 'Mix Cães Adultos', 'img/petisco-canino-7.jpg', 'Magnus', 'Biscoito', '<ul>\r\n<li>Pelagem brilhante;</li>\r\n<li>Auxilia na limpeza bucal;</li>\r\n<li>Com 21 vitaminas e minerais;</li>\r\n<li>Super crocante;</li>\r\n</ul>', '500 g', 16.90),
('dog12', 'Original Cães Adultos', 'img/petisco-canino-8.jpg', 'Magnus', 'Biscoito', '<ul>\r\n<li>Pelagem brilhante;</li>\r\n<li>Auxilia na limpeza bucal;</li>\r\n<li>Com 21 vitaminas e minerais;</li>\r\n<li>Super crocante;</li>\r\n</ul>', '400 g', 14.90),
('dog2', 'Cães Adultos Pequeno Porte Sabor Frango e Cereais', 'img/racao-canino-2.jpg', 'Magnus', 'Premium Especial Supreme', '<ul>\r\n<li>Proteína de Alta Qualidade;</li>\r\n<li>Partículas adequadas;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Vitaminas e Minerais;</li>\r\n</ul>', '15 kg', 156.90),
('dog3', 'Cães Adultos Sabor Frango e Cereais', 'img/racao-canino-3.jpg', 'Magnus', 'Premium Especial Supreme', '<ul>\r\n<li>Proteína de Alta Qualidade;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Pele e Pelagem;</li>\r\n<li>Vitaminas e Minerais;</li>\r\n</ul>', '15 kg', 145.90),
('dog4', 'Cães Adultos Sabor Frango e Arroz', 'img/racao-canino-4.jpg', 'Magnus', 'Super Premium', '<ul>\r\n<li>Proteína de Alta Qualidade;</li>\r\n<li>Extrato de Yucca, Fibras e Prebióticos;</li>\r\n<li>Condroitina e Glicosamina;</li>\r\n<li>Ômegas 3 e 6;</li>\r\n</ul>', '15 kg', 199.90),
('dog5', 'Cães Todo Dia Filhotes Sabor Carne', 'img/racao-canino-5.jpg', 'Magnus', 'Premium', '<ul>\r\n<li>Proteína de Alta Qualidade;</li>\r\n<li>Vitalidade;</li>\r\n<li>Pele e Pelagem;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n</ul>', '20 kg', 219.90),
('dog6', 'Cães Adultos Pequeno Porte Sabor Carne e Frango', 'img/racao-canino-6.jpg', 'Magnus', 'Premium Todo Dia', '<ul>\r\n<li>BIO COMPLEX;</li>\r\n<li>Partículas adequadas;</li>\r\n<li>Equilíbrio da flora intestinal;</li>\r\n<li>Proteína de alta qualidade;</li>\r\n<li>Hexametafosfato de sódio;</li>\r\n</ul>', '20 kg', 134.90),
('dog7', 'Cães Adultos Sabor Carne', 'img/racao-canino-7.jpg', 'Magnus', 'Premium Todo Dia', '<ul>\r\n<li>Proteína de Alta Qualidade;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Pele e Pelagem;</li>\r\n<li>Vitalidade;</li>\r\n</ul>', '20 kg', 144.90),
('dog8', 'Cães Adultos Chips', 'img/racao-canino-8.jpg', 'Magnus', 'Premium', '<ul>\r\n<li>Vitalidade;</li>\r\n<li>Equilíbrio flora intestinal;</li>\r\n<li>Pele e Pelagem;</li>\r\n<li>Vitaminas e Minerais;</li>\r\n</ul>', '20 kg', 159.90),
('dog9', 'Cães Filhotes', 'img/petisco-canino-5.jpg', 'Magnus', 'Biscoito', '<ul>\r\n<li>Pelagem brilhante;</li>\r\n<li>Auxilia na limpeza bucal;</li>\r\n<li>Com 21 vitaminas e minerais;</li>\r\n<li>Suporte na digestão;</li>\r\n<li>Formato especial;</li>\r\n</ul>', '250 g', 11.90);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_cadastro_id` (`fk_cadastro`),
  ADD KEY `fk_produto_id` (`fk_produto`);

--
-- Índices de tabela `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_cadastro` (`id_cadastro`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `carrinho`
--
ALTER TABLE `carrinho`
  ADD CONSTRAINT `fk_cadastro_id` FOREIGN KEY (`fk_cadastro`) REFERENCES `cadastro` (`id`),
  ADD CONSTRAINT `fk_produto_id` FOREIGN KEY (`fk_produto`) REFERENCES `produto` (`id`);

--
-- Restrições para tabelas `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `id_cadastro` FOREIGN KEY (`id_cadastro`) REFERENCES `cadastro` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
