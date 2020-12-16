

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `funvildevendas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `artigos`
--

CREATE TABLE IF NOT EXISTS `artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(520) NOT NULL,
  `subtitulo` varchar(520) NOT NULL,
  `slug` varchar(520) NOT NULL,
  `keywords` varchar(520) NOT NULL,
  `description` varchar(520) NOT NULL,
  `imagem` varchar(220) DEFAULT NULL,
  `conteudo` text NOT NULL,
  `resumo` text NOT NULL,
  `situacoe_id` int(11) NOT NULL,
  `categorias_artigo_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Extraindo dados da tabela `artigos`
--

INSERT INTO `artigos` (`id`, `titulo`, `subtitulo`, `slug`, `keywords`, `description`, `imagem`, `conteudo`, `resumo`, `situacoe_id`, `categorias_artigo_id`, `usuario_id`, `created`, `modified`) VALUES
(1, 'Como Capturar Mais Emails', 'Como criar e crescer a sua lista de emails', 'como-capturar-mais-emails', 'como capturar email, crescer lista de e-mail', 'Capturar mais emails em um site deveria ser prioridade numero 1 para todos.', 'como-capturar-mais-emails.png', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum, quam at posuere tempus, sapien lectus viverra felis, sed tincidunt tellus tortor nec magna. Sed placerat, enim nec sollicitudin consectetur, risus est viverra risus, iaculis varius purus purus id odio. Morbi sed sem id felis gravida fermentum eu sed arcu. Curabitur laoreet mauris diam, eget faucibus lectus blandit ac. Maecenas tempus facilisis nisl, non pretium justo condimentum vitae. Donec iaculis venenatis commodo. Donec rutrum tincidunt arcu, vitae condimentum erat iaculis nec. Etiam pretium arcu at mi euismod, ac vehicula massa semper. Sed cursus nisl ex, quis vulputate nisi finibus quis. Curabitur aliquam nec libero vitae tempus. Curabitur pharetra orci mi. Duis congue, augue sed blandit efficitur, risus elit luctus velit, at tempor dolor ipsum id odio. Mauris facilisis, turpis vitae vulputate fringilla, dui sapien euismod est, sit amet varius metus odio quis quam. Nullam nec magna rhoncus lorem lobortis porta.</p>\r\n\r\n<p>Vestibulum eget ante dapibus, ultricies libero et, dignissim metus. Aliquam erat volutpat. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur eleifend urna ac maximus finibus. Aliquam at consectetur leo. Cras erat tortor, ultricies ac lacus non, ullamcorper sodales justo. Aenean ut enim sit amet est consectetur cursus ac eu tortor. Vivamus in euismod erat. Nulla facilisi. Ut mi nisi, interdum ut velit in, venenatis semper orci. Mauris ac ante nisi.</p>\r\n\r\n<p>Sed commodo velit ac orci sagittis tristique. Pellentesque lacinia dui at blandit ornare. Sed lacinia ex ut lectus dignissim mattis eget sed augue. Nam elementum a tellus quis condimentum. In id hendrerit velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed non purus a mauris ultrices porta eu id odio. Nunc tempor tempor porta. Sed rhoncus fringilla mi, a interdum ipsum mattis vel. Nam ut purus vulputate, condimentum risus id, molestie massa. Phasellus bibendum pretium velit, quis volutpat turpis tristique sed. Ut in tellus dui. Quisque non arcu vel justo tincidunt feugiat. Nulla facilisi.</p>', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque interdum, quam at posuere tempus, sapien lectus viverra felis, sed tincidunt tellus tortor nec magna. Sed placerat, enim nec sollicitudin consectetur, risus est viverra risus, iaculis varius purus purus id odio.', 1, 2, 2, '2020-02-01 00:00:00', NULL),
(2, 'teste 1', 'teste 1', 'teste-um', 'teste 1', 'teste 1', 'teste-um.png', 'teste 1', 'teste 1', 1, 1, 1, '2020-02-21 11:33:40', NULL),
(3, 'teste 2', 'teste 2', 'teste 2', 'teste 2', 'teste 2', NULL, 'teste 2', 'teste 2', 1, 1, 1, '2020-02-21 12:24:34', NULL),
(4, 'teste 3', 'teste 3', 'teste-tres', 'teste 3', 'teste 3', 'mysqli_circulo_sem_fundo.png', 'teste 3', 'teste 3', 1, 6, 2, '2020-02-21 13:17:35', NULL),
(5, 'teste 4', 'teste 4', 'teste-quatro', 'teste 4', 'teste 4', 'php_circulo_sem_fundo.png', 'teste 4', 'teste 4', 1, 5, 2, '2020-02-21 13:18:41', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias_artigos`
--

CREATE TABLE IF NOT EXISTS `categorias_artigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `situacoe_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Extraindo dados da tabela `categorias_artigos`
--

INSERT INTO `categorias_artigos` (`id`, `nome`, `situacoe_id`, `created`, `modified`) VALUES
(1, 'TrÃ¡fego', 1, '2020-02-01 00:00:00', '2020-02-20 23:40:15'),
(2, 'Email', 1, '2020-02-03 00:00:00', NULL),
(3, 'PresenÃ§a', 1, '2020-02-20 23:31:02', NULL),
(5, 'ConversÃ£o', 1, '2020-02-20 23:41:13', NULL),
(6, 'Receitas', 1, '2020-02-20 23:41:24', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `leados`
--

CREATE TABLE IF NOT EXISTS `leados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(520) DEFAULT NULL,
  `lista_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `lista_id` (`lista_id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `listas`
--

CREATE TABLE IF NOT EXISTS `listas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE IF NOT EXISTS `niveis_acessos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2020-02-19 00:00:00', '2020-02-20 23:39:19'),
(2, 'Colaborador', '2020-02-19 00:00:00', NULL),
(3, 'Cliente', '2020-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacoes`
--

CREATE TABLE IF NOT EXISTS `situacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `situacoes`
--

INSERT INTO `situacoes` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Ativo', '2020-02-20 00:00:00', NULL),
(2, 'Inativo', '2020-02-20 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(220) NOT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT '0',
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(1, 'Cesar Szpak', 'cesar@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 1, '2020-02-14 00:00:01', '2020-02-20 21:58:01'),
(2, 'Kelly', 'kelly@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 2, '2020-02-14 00:00:04', '2020-02-20 21:58:12'),
(3, 'Jessica', 'jessica@celke.com.br', '202cb962ac59075b964b07152d234b70', 1, 3, '2020-02-14 00:00:03', '2020-02-20 21:58:25'),
(5, 'Marcia', 'marcia@celke.com.br', '831efa4c96023f4e602ebf86ca27a1d1', 1, 1, '2020-01-01 10:10:01', '2020-02-20 21:58:57'),
(9, 'Celke', 'cesar@celke.com.br', '123', 2, 3, '2020-02-20 20:48:44', NULL),
(10, 'Celke', 'cesar@celke.com.br', '123', 2, 3, '2020-02-20 20:49:02', NULL);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `leados`
--
ALTER TABLE `leados`
  ADD CONSTRAINT `leados_ibfk_1` FOREIGN KEY (`lista_id`) REFERENCES `listas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `leados_ibfk_2` FOREIGN KEY (`usuario_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
