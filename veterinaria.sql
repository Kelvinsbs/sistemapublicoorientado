-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jun-2015 às 16:47
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `veterinaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `adotar`
--

CREATE TABLE IF NOT EXISTS `adotar` (
`id_animal` int(11) NOT NULL,
  `raca` varchar(50) NOT NULL,
  `idade` varchar(50) NOT NULL,
  `descricao` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `adotar`
--

INSERT INTO `adotar` (`id_animal`, `raca`, `idade`, `descricao`) VALUES
(9, 'skdnsdnm', 'jnsfhn', 'kdfjkdsesd'),
(10, 'o90kihnj', 'oi', 'ghfrtgf ');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
`id_cliente` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `hora` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`id_cliente`, `date`, `hora`) VALUES
(2, '10/06/2015', '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
`id_cliente` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `telefone` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `renda` double(6,2) NOT NULL,
  `nascimento` date NOT NULL,
  `permissao` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `username`, `senha`, `email`, `endereco`, `telefone`, `celular`, `renda`, `nascimento`, `permissao`) VALUES
(2, 'Kelvin Barcelos', 'kelvinsb', '12345678', 'kelvin.barcelos@hotmail.com', 'rua das focas nevadas', 32323232, 98989898, 1200.55, '1990-05-21', 2),
(3, 'Condoriano Pereira', 'pereira_condoriano', '12345678', 'condoriano.pereira@fone.com', 'rua das focas nevadas', 32326533, 98789854, 1200.55, '1990-05-21', 1),
(4, 'Foca Aqui', 'focaaqui', '12345678', 'foca.focando@gmail.com', 'rua das focas nevadas', 32326533, 98789854, 1200.55, '1990-05-21', 1),
(5, 'Aquele Sujeito', 'sujeitin', '12345678', 'sujeitin.metidoabesta@hotmail.com', 'rua das focas nevadas', 32326533, 98789854, 1200.55, '1990-05-21', 1),
(7, 'Hingryd Nunes', 'hingryd', '12345678', 'hingryd.nunes@gmail.com', 'rua das focas nevadas', 32659874, 98785465, 1100.00, '1990-05-29', 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
`id_consultas` int(11) NOT NULL,
  `castrar` varchar(50) NOT NULL,
  `cirurgias` varchar(50) NOT NULL,
  `exames_de_rotinas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `serviços`
--

CREATE TABLE IF NOT EXISTS `serviços` (
`id_servicos` int(11) NOT NULL,
  `adotar` varchar(50) DEFAULT NULL,
  `consultas` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adotar`
--
ALTER TABLE `adotar`
 ADD PRIMARY KEY (`id_animal`);

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
 ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
 ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `consultas`
--
ALTER TABLE `consultas`
 ADD PRIMARY KEY (`id_consultas`);

--
-- Indexes for table `serviços`
--
ALTER TABLE `serviços`
 ADD PRIMARY KEY (`id_servicos`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adotar`
--
ALTER TABLE `adotar`
MODIFY `id_animal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `consultas`
--
ALTER TABLE `consultas`
MODIFY `id_consultas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `serviços`
--
ALTER TABLE `serviços`
MODIFY `id_servicos` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
