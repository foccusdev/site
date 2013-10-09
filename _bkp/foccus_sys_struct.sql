
-- --------------------------------------------------------

--
-- Table structure for table `sys_atividades`
--

CREATE TABLE IF NOT EXISTS `sys_atividades` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_atividades_planos`
--

CREATE TABLE IF NOT EXISTS `sys_atividades_planos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `atividade_id` bigint(20) NOT NULL,
  `plano_id` bigint(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_atividades` (`atividade_id`),
  KEY `fk_planos` (`plano_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_bairros`
--

CREATE TABLE IF NOT EXISTS `sys_bairros` (
  `Codigo` int(10) NOT NULL,
  `Descricao` varchar(72) DEFAULT NULL,
  `BairroAbreviado` varchar(36) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `CodigoCidade` int(10) DEFAULT NULL,
  PRIMARY KEY (`Codigo`),
  KEY `CodigoCidade` (`CodigoCidade`),
  KEY `CidadeBairro` (`CodigoCidade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_cidades`
--

CREATE TABLE IF NOT EXISTS `sys_cidades` (
  `Codigo` int(10) NOT NULL,
  `Descricao` varchar(50) DEFAULT NULL,
  `Descricao_B` varchar(60) DEFAULT NULL,
  `CEP` varchar(8) DEFAULT NULL,
  `UF` varchar(2) DEFAULT NULL,
  `SITUACAO` int(10) DEFAULT NULL,
  `TIPO_LOCALIDADE` varchar(1) DEFAULT NULL,
  `LOC_NU_SEQUENCIAL_SUB` int(10) DEFAULT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sys_estados`
--

CREATE TABLE IF NOT EXISTS `sys_estados` (
  `Codigo` varchar(2) DEFAULT NULL,
  `Descricao` varchar(72) DEFAULT NULL,
  `id_pais` int(10) unsigned NOT NULL DEFAULT '1',
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pk_log_uf` (`Codigo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_horarios`
--

CREATE TABLE IF NOT EXISTS `sys_horarios` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `matricula_id` bigint(20) NOT NULL,
  `hora` time NOT NULL,
  `dia_semana` tinyint(4) NOT NULL,
  `alterado` tinyint(1) NOT NULL DEFAULT '0',
  `hora_anterior` time NOT NULL,
  `dia_semana_anterior` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_matriculas`
--

CREATE TABLE IF NOT EXISTS `sys_matriculas` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) NOT NULL,
  `CPF` varchar(15) DEFAULT NULL,
  `celular` varchar(15) NOT NULL,
  `telefone` varchar(15) DEFAULT NULL,
  `estado` int(11) DEFAULT NULL,
  `cidade` int(11) NOT NULL,
  `bairro` int(11) NOT NULL,
  `endereco` text NOT NULL,
  `CEP` varchar(15) DEFAULT NULL,
  `data_nascimento` date DEFAULT NULL,
  `sexo` char(1) NOT NULL,
  `profissao` varchar(255) DEFAULT NULL,
  `como_conheceu` varchar(255) DEFAULT NULL,
  `obs` text,
  `created` datetime DEFAULT NULL,
  `proximo_vencimento` date DEFAULT NULL,
  `plano` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_pagamentos`
--

CREATE TABLE IF NOT EXISTS `sys_pagamentos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `matricula_id` bigint(20) NOT NULL,
  `created` datetime DEFAULT NULL,
  `data_proximo_vencimento` date DEFAULT NULL,
  `data_referencia` date NOT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_planos`
--

CREATE TABLE IF NOT EXISTS `sys_planos` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `valor_especial` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_users`
--

CREATE TABLE IF NOT EXISTS `sys_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role` varchar(20) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sys_atividades_planos`
--
ALTER TABLE `sys_atividades_planos`
  ADD CONSTRAINT `sys_atividades_planos_ibfk_1` FOREIGN KEY (`atividade_id`) REFERENCES `sys_atividades` (`id`),
  ADD CONSTRAINT `sys_atividades_planos_ibfk_2` FOREIGN KEY (`plano_id`) REFERENCES `sys_planos` (`id`);


