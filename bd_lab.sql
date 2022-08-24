-- phpMyAdmin SQL Dump
-- version 3.4.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 03/04/2013 às 22h06min
-- Versão do Servidor: 5.5.20
-- Versão do PHP: 5.3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de Dados: `bd_lab`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) NOT NULL,
  `telefone` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `estado` int(6) NOT NULL,
  `cidade` int(6) NOT NULL,
  `hora` varchar(20) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `data` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `convenios`
--

CREATE TABLE IF NOT EXISTS `convenios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `descricao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Extraindo dados da tabela `convenios`
--

INSERT INTO `convenios` (`id`, `nome`, `descricao`) VALUES
(2, 'ABAPP', '50% de desconto nos exames e 10% de desconto nas vacinas'),
(3, 'Angelus Pax', '50% de desconto nos exames e 10% nas vacinas'),
(4, 'APUFPEL', 'Cheque bÃ´nus com 20% de desconto em exames e 10% em vacinas'),
(7, 'CartÃ£o do Assinante do Diário Popular', '20% Ã  vista em exames, 10% Ã  vista em vacinas, 10% a prazo em exames atÃ© 3x, 3x vacinas sem desconto, 10x pacote de vacinas'),
(8, 'COP - CÃ­rculo OperÃ¡rio Pelotense', '30% de desconto nos exames e 10% de desconto nas vacinas'),
(9, 'Descont SaÃºde', '50% de desconto nos exames e 10% de desconto nas vacinas'),
(11, 'Pleno Card', 'CartÃ£o Pleno Card tabela particular parcelado de acordo com a solicitaÃ§Ã£o do cliente em atÃ© 12 vezes.'),
(12, 'Prontocor', '50% de desconto nos exames'),
(16, 'Sindicato dos BancÃ¡rios de Pelotas e RegiÃ£o', 'Cheque bÃ´nus com 20% de desconto em exames e 10% em vacinas'),
(19, 'Master Descontos', ''),
(20, 'ProntoPed', ''),
(21, 'ProntoBaby', ''),
(22, 'SaÃºde Familiar', ''),
(23, 'AJURIS', ''),
(24, 'AMA Josapar', ''),
(25, 'AMA Walmart', ''),
(26, 'CABERGS', ''),
(27, 'Casembrapa', ''),
(28, 'COREN RS', ''),
(29, 'IPE', ''),
(31, 'SAS Renner', ''),
(32, 'SAS Vonpar', ''),
(33, 'Uni ColÃ©gio', ''),
(34, 'Buenos Aires Apart Hotel GeriÃ¡trico', ''),
(35, 'PREVPEL', ''),
(36, 'SECPEL', ''),
(37, 'Sindicato dos RodoviÃ¡rios', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dicas`
--

CREATE TABLE IF NOT EXISTS `dicas` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `sub_titulo_pequeno` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `destaque` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `dicas`
--

INSERT INTO `dicas` (`id`, `titulo`, `subtitulo`, `descricao`, `sub_titulo_pequeno`, `data`, `destaque`) VALUES
(1, 'Teste', 'Teste - Isso Ã© um teste', 'Isso Ã© um teste, entÃ£o vai tomar no cu tranquilo, morÃ´?', 'Teste - Isso é um...', '2013-03-28', 'x'),
(2, 'Teste 2', 'Teste 2 - Esse Ã© outro teste', 'Esse Ã© outro teste, entÃ£o tome no seu cu cagadÃ£o e cheio de fedor.', 'Teste 2 - Esse é outr...', '2013-03-29', 'x'),
(3, 'Teste 3', 'asdasdasdasdasdasd', 'HUEHUEHUEHEUHEUHEUHEUHEUHEUHEUHEUHUEHUEHUEHUEHUE BRBR MACACO', 'Teste - Blablabla...', '2013-03-30', ' ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `cod` int(3) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`cod`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`cod`, `usuario`, `senha`, `email`) VALUES
(1, 'juliana', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'contato@nossositeweb.com.br'),
(2, 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'felipe@nossositeweb.com.br');

-- --------------------------------------------------------

--
-- Estrutura da tabela `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(3) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `email`, `nome`) VALUES
(1, 'damassaa@gmail.com', 'Felipe'),
(2, 'contato@nossositeweb.com.br', 'Alessandro'),
(3, 'felipe@nossositeweb.com.br', 'Felipe Damasceno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(50) NOT NULL,
  `subtitulo` varchar(255) NOT NULL,
  `palavra_chave` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`id`, `titulo`, `subtitulo`, `palavra_chave`) VALUES
(1, 'Vacinas', 'Temos uma caralhada de vacinas pra você, seu filho pentelho e para o resto da porra da sua família lazarenta.', 'vacinas'),
(2, 'Convênios', 'Temos vários convênios que se encaixam no seu gosto de viadinho', 'convenios'),
(3, 'Fale Conosco', 'Nos mande uma mensagem, com sugestÃµes, reclamaÃ§Ãµes e tal', 'contato');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
