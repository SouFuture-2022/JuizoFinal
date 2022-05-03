--
-- Database: `lojinha`
--

-- --------------------------------------------------------


-- Estrutura da tabela `categorias`

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id_categoria` int(11) NOT NULL AUTO_INCREMENT,
  `nome_categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

-- Extraindo dados da tabela `categorias`


INSERT INTO `categorias` (`id_categoria`, `nome_categoria`) VALUES
(11, 'Teste'),
(9, 'Moda Masculina'),
(10, 'Moda Infantil'),
(8, 'Moda Femina');

-- --------------------------------------------------------


-- Estrutura da tabela `niveis_acesso_id`

DROP TABLE IF EXISTS `niveis_acesso_id`;
CREATE TABLE IF NOT EXISTS `niveis_acesso_id` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Extraindo dados da tabela `niveis_acesso_id`

INSERT INTO `niveis_acesso_id` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2020-09-23 00:00:00', NULL),
(2, 'Cliente', '2020-09-23 00:00:00', NULL);

-- --------------------------------------------------------


-- Estrutura da tabela `pedidos`

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `num_pedido` int(9) DEFAULT NULL,
  `nome` varchar(10) DEFAULT NULL,
  `qtd` int(10) DEFAULT NULL,
  `preco` varchar(2) DEFAULT NULL,
  `sub_total` varchar(3) DEFAULT NULL,
  `total_geral` varchar(3) DEFAULT NULL,
  `data_pedido` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pedido`)
) ENGINE=MyISAM AUTO_INCREMENT=272 DEFAULT CHARSET=latin1;

-- Extraindo dados da tabela `pedidos`

INSERT INTO `pedidos` (`id_pedido`, `num_pedido`, `nome`, `qtd`, `preco`, `sub_total`, `total_geral`, `data_pedido`) VALUES
(263, 208902183, 'Teste2', NULL, NULL, NULL, NULL, '2020-10-02 13:33:22'),
(264, 208902183, '4', NULL, NULL, NULL, NULL, '2020-10-02 13:33:23'),
(265, 208902183, '10,00', NULL, NULL, NULL, NULL, '2020-10-02 13:33:23'),
(266, 208902183, '40,00', NULL, NULL, NULL, NULL, '2020-10-02 13:33:23'),
(271, 208902183, '40,00', NULL, NULL, NULL, NULL, '2020-10-02 13:33:23');

-- --------------------------------------------------------


-- Estrutura da tabela `produtos`

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `nome_categoria` varchar(50) DEFAULT NULL,
  `preco` varchar(10) DEFAULT NULL,
  `qtd` int(10) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `imagem` varchar(50) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;

-- Extraindo dados da tabela `produtos`

INSERT INTO `produtos` (`id_produto`, `nome`, `nome_categoria`, `preco`, `qtd`, `descricao`, `imagem`, `data_cadastro`) VALUES
(94, 'Teste', 'Escolha uma Categoria', '10,00', 15, 'vfnjnb', '5a1a5d103a848835adb40b1e5bbfc3f5', '2020-10-02 13:22:47'),
(95, 'Teste', 'Escolha uma Categoria', '11,11', 8, 'mv nrjegt', '64dbce90cf352123815119111d0f506a.png', '2020-10-02 12:36:00'),
(96, 'Teste1', 'Moda Masculina', '1,50', 10, 'nrengt4inioj5ibj5iji', 'a64f16892052e055ec0f772cb2f47489.png', '2020-10-02 12:38:16'),
(97, 'Teste2', 'Moda Femina', '10,00', 27, 'jbbuibuvntv', 'c99d3cbeecc6e0cd145d2fe9e74e08e7.png', '2020-10-02 12:47:12'),
(98, 'Teste3', 'Moda Infantil', '55,00', 10, 'vnkdfnbtii', 'e64dd139e36368ddef1d33e81f95c292', '2020-10-02 13:46:53');

-- --------------------------------------------------------


-- Estrutura da tabela `usuarios`

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `cpf` varchar(50) DEFAULT NULL,
  `nascimento` varchar(50) DEFAULT NULL,
  `sexo` varchar(50) DEFAULT NULL,
  `login` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  `num` int(5) DEFAULT NULL,
  `cep` varchar(9) DEFAULT NULL,
  `rua` varchar(50) DEFAULT NULL,
  `bairro` varchar(50) DEFAULT NULL,
  `cidade` varchar(20) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `ibge` int(10) DEFAULT NULL,
  `niveis_acesso_id` int(1) DEFAULT NULL,
  `data_cadastro` datetime DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Extraindo dados da tabela `usuarios`

INSERT INTO `usuarios` (`id_usuario`, `nome`, `email`, `telefone`, `cpf`, `nascimento`, `sexo`, `login`, `senha`, `num`, `cep`, `rua`, `bairro`, `cidade`, `uf`, `ibge`, `niveis_acesso_id`, `data_cadastro`) VALUES
(1, 'Teste', 'teste@email.com', '111111111111', '', '2020-12-31', 'masculino', 'Teste', 'teste', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-09-18 19:15:44'),
(2, 'Teste', 'teste@email.com', '111111111111', '', '2020-12-31', 'masculino', 'Teste', 'teste', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-09-18 19:16:12'),
(3, 'ZÃ©', 'teste@email.com', '111111111111', '', '2020-09-22', 'masculino', 'Teste', 'Teste.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-09-22 10:36:29'),
(4, 'Testesss', 'teste@email.com', '111111111111', '', '2020-09-22', 'masculino', 'Teste', 'Teste.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-09-22 10:37:12'),
(5, 'Testesss', 'teste@email.com', '111111111111', '', '2020-09-22', 'masculino', 'Teste', 'Teste.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-09-22 10:37:33'),
(6, 'Testesss1', 'teste@email.com', '111111111111', '', '2020-09-22', 'masculino', 'Teste', 'Teste.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-09-22 10:39:11'),
(7, 'Testesss', 'teste@email.com', '111111111111', '', '2020-09-22', 'masculino', 'Teste', 'Teste.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-09-22 10:39:40'),
(8, 'Testesss', 'teste@email.com', '111111111111', '', '2020-09-22', 'masculino', 'Teste', 'Teste.00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-09-22 10:40:24'),
(9, 'Dell', 'teste@email.com', '111111111111', '', '2020-09-23', 'masculino', 'Teste', '872871bf2e3457e85d87aa1639d09bf1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2020-09-23 10:35:50'),
(10, 'Teste1', 'teste@email.com', '111111111111', '', '2020-09-27', 'masculino', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2020-09-27 17:56:36');

-- --------------------------------------------------------


-- Estrutura da tabela `vendas`

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `id_venda` int(11) NOT NULL AUTO_INCREMENT,
  `num_pedido` varchar(9) DEFAULT NULL,
  `situacao` varchar(50) DEFAULT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `total` varchar(10) DEFAULT NULL,
  `forma_pagamento` varchar(10) DEFAULT NULL,
  `qtdx` varchar(6) DEFAULT NULL,
  `valor_entregue` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_venda`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Extraindo dados da tabela `vendas`

INSERT INTO `vendas` (`id_venda`, `num_pedido`, `situacao`, `nome`, `total`, `forma_pagamento`, `qtdx`, `valor_entregue`) VALUES
(3, '208902183', 'Receber em Casa', 'ZÃ©', '50,00', 'Dinheiro', '', '50,00');
COMMIT;
