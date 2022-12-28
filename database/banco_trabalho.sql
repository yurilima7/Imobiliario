-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.36 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para e_rent
CREATE DATABASE IF NOT EXISTS `e_rent` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `e_rent`;

-- Copiando estrutura para tabela e_rent.tblendereco
CREATE TABLE IF NOT EXISTS `tblendereco` (
  `idEndereco` int(11) NOT NULL AUTO_INCREMENT,
  `fk_imovel` int(11) NOT NULL,
  `estado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cidade` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bairro` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rua` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `numero` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idEndereco`),
  KEY `fk_imovel` (`fk_imovel`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela e_rent.tblendereco: 1 rows
/*!40000 ALTER TABLE `tblendereco` DISABLE KEYS */;
INSERT INTO `tblendereco` (`idEndereco`, `fk_imovel`, `estado`, `cidade`, `bairro`, `rua`, `numero`, `created_at`, `updated_at`) VALUES
	(1, 100, 'MA', 'Caxias', 'Seriema', 'Rua do Cajueiro', '1226', NULL, NULL);
/*!40000 ALTER TABLE `tblendereco` ENABLE KEYS */;

-- Copiando estrutura para tabela e_rent.tblimagem
CREATE TABLE IF NOT EXISTS `tblimagem` (
  `idImagem` int(11) NOT NULL AUTO_INCREMENT,
  `fk_imovel` int(11) NOT NULL,
  `imagem` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idImagem`),
  KEY `fk_imovel` (`fk_imovel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela e_rent.tblimagem: 0 rows
/*!40000 ALTER TABLE `tblimagem` DISABLE KEYS */;
/*!40000 ALTER TABLE `tblimagem` ENABLE KEYS */;

-- Copiando estrutura para tabela e_rent.tblimovel
CREATE TABLE IF NOT EXISTS `tblimovel` (
  `idImovel` int(11) NOT NULL AUTO_INCREMENT,
  `valor` double NOT NULL DEFAULT '0',
  `descricao` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `fk_locador` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idImovel`),
  KEY `fk_locador` (`fk_locador`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela e_rent.tblimovel: 1 rows
/*!40000 ALTER TABLE `tblimovel` DISABLE KEYS */;
INSERT INTO `tblimovel` (`idImovel`, `valor`, `descricao`, `status`, `fk_locador`, `created_at`, `updated_at`) VALUES
	(100, 250, 'imovel bonito', 'aberto', 1, NULL, NULL);
/*!40000 ALTER TABLE `tblimovel` ENABLE KEYS */;

-- Copiando estrutura para tabela e_rent.tbllocador
CREATE TABLE IF NOT EXISTS `tbllocador` (
  `idLocador` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT ' ',
  `fk_usuario` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idLocador`),
  KEY `fk_usuario` (`fk_usuario`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela e_rent.tbllocador: 1 rows
/*!40000 ALTER TABLE `tbllocador` DISABLE KEYS */;
INSERT INTO `tbllocador` (`idLocador`, `cnpj`, `fk_usuario`, `created_at`, `updated_at`) VALUES
	(1, ' ', 2, NULL, NULL);
/*!40000 ALTER TABLE `tbllocador` ENABLE KEYS */;

-- Copiando estrutura para tabela e_rent.tbllocatario
CREATE TABLE IF NOT EXISTS `tbllocatario` (
  `idLocatario` int(11) NOT NULL AUTO_INCREMENT,
  `fk_usuario` int(11) DEFAULT NULL,
  `fk_imovel` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idLocatario`),
  KEY `fk_usuario` (`fk_usuario`),
  KEY `fk_imovel` (`fk_imovel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela e_rent.tbllocatario: 0 rows
/*!40000 ALTER TABLE `tbllocatario` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbllocatario` ENABLE KEYS */;

-- Copiando estrutura para tabela e_rent.tblusuario
CREATE TABLE IF NOT EXISTS `tblusuario` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `isLocator` int(1) NOT NULL DEFAULT '0',
  `telefone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela e_rent.tblusuario: 5 rows
/*!40000 ALTER TABLE `tblusuario` DISABLE KEYS */;
INSERT INTO `tblusuario` (`idUsuario`, `nome`, `cpf`, `email`, `senha`, `isLocator`, `telefone`, `created_at`, `updated_at`) VALUES
	(1, 'Luis Henrique', '61982243333', 'luis@teste', '123456', 0, '98956462', NULL, NULL),
	(2, 'Yuri Lima', '123456789', 'yuri@teste', '123456', 1, '32654132', NULL, NULL),
	(26, 'Teste', '0128193728346274264', 'teste@outlook.com', '12345678', 1, '63562356', '2022-12-28 00:31:51', '2022-12-28 00:39:58'),
	(27, 'Teste2', '01281937283', 'teste2@outlook.com', '0987654321', 0, '63562356', '2022-12-28 00:53:12', '2022-12-28 00:53:42'),
	(28, 'Teste3', '8278247826', 'teste@gmail.com', '12345678', 1, '732762', '2022-12-28 01:05:13', '2022-12-28 01:05:32');
/*!40000 ALTER TABLE `tblusuario` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
