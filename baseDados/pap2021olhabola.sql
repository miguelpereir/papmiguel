/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50731
 Source Host           : localhost:3306
 Source Schema         : pap2021olhabola

 Target Server Type    : MySQL
 Target Server Version : 50731
 File Encoding         : 65001

 Date: 20/07/2021 02:25:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for equipajogadores
-- ----------------------------
DROP TABLE IF EXISTS `equipajogadores`;
CREATE TABLE `equipajogadores`  (
  `equipaJogadorJogadorId` int(11) NOT NULL,
  `equipaJogadorEquipaId` int(11) NOT NULL,
  `equipaJogadorPosicaoId` int(11) NOT NULL,
  `equipaJogadorNumero` int(11) NOT NULL,
  PRIMARY KEY (`equipaJogadorJogadorId`, `equipaJogadorEquipaId`) USING BTREE,
  INDEX `fk_jogadores_has_equipas_equipas1_idx`(`equipaJogadorEquipaId`) USING BTREE,
  INDEX `fk_jogadores_has_equipas_jogadores1_idx`(`equipaJogadorJogadorId`) USING BTREE,
  INDEX `fk_equipajogadores_posicoes1_idx`(`equipaJogadorPosicaoId`) USING BTREE,
  CONSTRAINT `fk_equipajogadores_posicoes1` FOREIGN KEY (`equipaJogadorPosicaoId`) REFERENCES `posicoes` (`posicaoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogadores_has_equipas_equipas1` FOREIGN KEY (`equipaJogadorEquipaId`) REFERENCES `equipas` (`equipaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_jogadores_has_equipas_jogadores1` FOREIGN KEY (`equipaJogadorJogadorId`) REFERENCES `jogadores` (`jogadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of equipajogadores
-- ----------------------------
INSERT INTO `equipajogadores` VALUES (1, 1, 4, 30);
INSERT INTO `equipajogadores` VALUES (2, 1, 16, 30);
INSERT INTO `equipajogadores` VALUES (3, 1, 7, 87);
INSERT INTO `equipajogadores` VALUES (4, 1, 13, 45);

-- ----------------------------
-- Table structure for equipas
-- ----------------------------
DROP TABLE IF EXISTS `equipas`;
CREATE TABLE `equipas`  (
  `equipaId` int(11) NOT NULL AUTO_INCREMENT,
  `equipaNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `equipaEmblemaURL` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `equipaAnoFundacao` int(11) NOT NULL,
  `equipaEstadioNome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `equipaEstadioURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `equipaHistoria` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `equipaPresidente` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `equipaTreinador` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `equipaTreinadorFotoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'semFoto.jpg',
  PRIMARY KEY (`equipaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of equipas
-- ----------------------------
INSERT INTO `equipas` VALUES (1, 'Sporting', 'images/sporting.jpg', 1905, 'Estadio de Alvalade', 'images/alvalade', '<p>qualquer coisa</p>', 'Ladrão', 'Ruben Amorim', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (2, ' FC Porto', 'images/porto.jpg', 1893, 'Estádio do Dragão', 'images/dragao.jpg', 'qualquer coisa', 'Ladrão', 'Sergio Conceição', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (3, ' SL Benfica', 'images/benfica.jpg', 1904, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (4, ' SC Braga', 'images/braga.jpg', 1921, 'Estádio Municipal de Braga', 'images/estadiobraga.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (5, ' FC P.Ferreira', 'images/ferreira.jpg', 1950, 'Estádio Municipal da Capital do Móvel', 'images/luz.jpg', '<p>qualquer coisa</p>', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (6, ' Santa Clara', 'images/santaclara.jpg', 1927, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (7, ' Vitória SC', 'images/vitoria.jpg', 1922, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (8, ' Moreirense FC', 'images/moreirense.jpg', 1938, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (9, ' FC Famalicão', 'images/famalicao.jpg', 1931, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (10, ' Belenenses SAD', 'images/belenenses.jpg', 1999, 'Estádio do Restelo', 'images/restelo.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (11, ' Gil Vicente FC', 'images/gilvicente.jpg', 1924, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (12, ' CD Tondela', 'images/tondela.jpg', 1933, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (13, ' Boavista FC', 'images/boavista.jpg', 1903, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (14, ' Portimonense', 'images/Portimonense.jpg', 1914, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (15, ' Marítimo M.', 'images/maritimo.jpg', 1910, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (16, ' Rio Ave FC', 'images/rioave.jpg', 1939, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (17, ' SC Farense', 'images/farense.jpg', 1910, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (18, ' CD Nacional', 'images/nacional.jpg', 1910, 'Estádio da Luz', 'images/luz.jpg', 'qualquer coisa', 'Ladrão', 'Jorge Jesus', 'images/semFoto.jpg');

-- ----------------------------
-- Table structure for jogadores
-- ----------------------------
DROP TABLE IF EXISTS `jogadores`;
CREATE TABLE `jogadores`  (
  `jogadorId` int(11) NOT NULL AUTO_INCREMENT,
  `jogadorNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jogadorDataNascimento` date NOT NULL,
  `jogadorFotoURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `jogadorPaisId` int(11) NOT NULL,
  PRIMARY KEY (`jogadorId`) USING BTREE,
  INDEX `fk_jogadores_paises_idx`(`jogadorPaisId`) USING BTREE,
  CONSTRAINT `fk_jogadores_paises` FOREIGN KEY (`jogadorPaisId`) REFERENCES `paises` (`paisId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogadores
-- ----------------------------
INSERT INTO `jogadores` VALUES (1, 'Adan', '2021-07-13', 'images/adan.png', 1);
INSERT INTO `jogadores` VALUES (2, 'Joao', '2021-07-20', 'images/jj.jpg', 1);
INSERT INTO `jogadores` VALUES (3, 'Holandaa', '2021-07-21', 'images/semFoto.jpg', 1);
INSERT INTO `jogadores` VALUES (4, 'grdfw', '2021-07-27', 'images/semFoto.jpg', 1);

-- ----------------------------
-- Table structure for jogos
-- ----------------------------
DROP TABLE IF EXISTS `jogos`;
CREATE TABLE `jogos`  (
  `jogoId` int(11) NOT NULL AUTO_INCREMENT,
  `jogoData` date NOT NULL,
  `jogoCasaEquipaId` int(11) NOT NULL,
  `jogoForaEquipaId` int(11) NOT NULL,
  `jogoCasaGolos` int(11) NOT NULL,
  `jogoForaGolos` int(11) NOT NULL,
  PRIMARY KEY (`jogoId`) USING BTREE,
  INDEX `fk_table1_equipas1_idx`(`jogoCasaEquipaId`) USING BTREE,
  INDEX `fk_table1_equipas2_idx`(`jogoForaEquipaId`) USING BTREE,
  CONSTRAINT `fk_table1_equipas1` FOREIGN KEY (`jogoCasaEquipaId`) REFERENCES `equipas` (`equipaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_table1_equipas2` FOREIGN KEY (`jogoForaEquipaId`) REFERENCES `equipas` (`equipaId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogos
-- ----------------------------
INSERT INTO `jogos` VALUES (1, '2020-09-18', 9, 3, 1, 5);
INSERT INTO `jogos` VALUES (2, '2020-09-18', 7, 10, 0, 1);
INSERT INTO `jogos` VALUES (3, '2020-09-19', 18, 13, 3, 3);
INSERT INTO `jogos` VALUES (4, '2020-09-19', 2, 4, 3, 1);
INSERT INTO `jogos` VALUES (5, '2020-09-20', 6, 15, 2, 0);
INSERT INTO `jogos` VALUES (6, '2020-09-20', 8, 17, 2, 0);
INSERT INTO `jogos` VALUES (7, '2020-09-20', 12, 16, 1, 1);
INSERT INTO `jogos` VALUES (8, '2020-09-21', 14, 5, 1, 1);
INSERT INTO `jogos` VALUES (9, '2020-10-28', 1, 11, 3, 1);

-- ----------------------------
-- Table structure for marcadores
-- ----------------------------
DROP TABLE IF EXISTS `marcadores`;
CREATE TABLE `marcadores`  (
  `marcadorId` int(11) NOT NULL AUTO_INCREMENT,
  `marcadorJogoId` int(11) NOT NULL,
  `marcadorJogadorId` int(11) NOT NULL,
  `marcadorTipoGolo` enum('marcado','sofrido') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`marcadorId`) USING BTREE,
  INDEX `fk_marcadores_jogos1_idx`(`marcadorJogoId`) USING BTREE,
  INDEX `fk_marcadores_jogadores1_idx`(`marcadorJogadorId`) USING BTREE,
  CONSTRAINT `fk_marcadores_jogadores1` FOREIGN KEY (`marcadorJogadorId`) REFERENCES `jogadores` (`jogadorId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_marcadores_jogos1` FOREIGN KEY (`marcadorJogoId`) REFERENCES `jogos` (`jogoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of marcadores
-- ----------------------------

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias`  (
  `noticiaId` int(11) NOT NULL AUTO_INCREMENT,
  `noticiaTitulo` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaResumo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaImagemURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaCapaURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaData` date NOT NULL,
  PRIMARY KEY (`noticiaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (11, 'Benfica informa que Darwin foi submetido a uma artroscopia ao joelho direito', '', 'images/about.jpg', 'images/about.jpg', '<p>O Benfica anunciou esta segunda-feira que Darwin foi submetido a uma artroscopia ao joelho direito. De acordo com as &aacute;guias, a&nbsp;cirurgia \"decorreu sem intercorr&ecirc;ncias, estando prevista&nbsp;alta hospitalar para esta ter&ccedil;a-feira\".<br /><br /></p>\r\n<div id=\"incontent\"></div>\r\n<p>N&atilde;o foi divulgado o tempo de paragem do avan&ccedil;ado uruguaio que, recorde-se, j&aacute; vinha evidenciando dores naquele joelho, o mesmo que o obrigou a parar no final de fevereiro.</p>\r\n<p>&nbsp;</p>', '2021-05-25');
INSERT INTO `noticias` VALUES (12, 'Carlos Carvalhal: “Disse aos jogadores que estava todo borrado...”', '', 'images/imagem.png', 'images/slide1.jpg', '<h2>Significado do t&iacute;tulo</h2>\r\n<p>&ldquo;Os meus pais iam ver os jogos quando eu era beb&eacute;. Essa foi sempre a minha vida, o de ir ao est&aacute;dio aos domingos. Sou da cidade, todos os meus amigos e a minha fam&iacute;lia s&atilde;o do Sp. Braga, acho que conhe&ccedil;o pessoalmente metade dos adeptos do Sp. Braga. &Eacute; o meu clube, era algo que eu ambicionava desde sempre. Era o que eu tinha dentro de mim e estou grato aos meus jogadores por isso.&rdquo;</p>\r\n<h2>A opera&ccedil;&atilde;o do pai</h2>\r\n<p>&ldquo;Eu disse-lhes que estava todo borrado, todo cagado, tinha a ver com o meu pai, que foi operado hoje. Vivi um dia um bocado angustiante, at&eacute; saber que estava tudo bem. Quando vou para a palestra antes do jogo, vou satisfeito e a relativizar. Isto n&atilde;o era uma situa&ccedil;&atilde;o de vida ou de morte, era para desfrutar. Eu, filho da Mariazinha e do Felisberto, tenho o meu nome gravado a ouro na hist&oacute;ria do Sp. Braga.&rdquo;</p>\r\n<h2>Arbitragem</h2>\r\n<p>&ldquo;N&atilde;o falo sobre arbitragem, nunca falei, mesmo quando tinha jogadores meus expulsos em jogos importantes. Jog&aacute;mos contra uma grande equipa. O que os meus jogadores fizeram foi brilhante, o de diminuir as diferen&ccedil;as. Foram extremamente competentes e merecemos inteiramente esta vitoria.&rdquo;</p>\r\n<h2>Candidatura ao t&iacute;tulo</h2>\r\n<p>&ldquo;O controlo das expectativas &eacute; complicado. Consegue-se atenuar as coisas de uma forma progressiva e com um crescimento sustentado. Esta no bom caminho a diminuir essa diferen&ccedil;a, mas continua a ser uma diferen&ccedil;a muito grande. N&atilde;o fora estarmos envolvidos nas quatro competi&ccedil;&otilde;es e ter&iacute;amos feito melhor no campeonato. Foi por isso que considero que esta foi uma das melhores &eacute;pocas do Sp. Braga no ano do seu centen&aacute;rio. O futuro dir&aacute; quando o Sp. Braga puder disputar o t&iacute;tulo.&rdquo;</p>\r\n<h2>Sp. Braga proactivo</h2>\r\n<p>&ldquo;Tivemos um caudal ofensivo significativo, fomos sempre uma equipa proactiva. N&atilde;o esper&aacute;mos pelo Benfica. Fizemos isto em 52 jogos, and&aacute;mos o ano inteiro a ter iniciativa. Chegamos ao final com a satisfa&ccedil;&atilde;o plena.&rdquo;</p>', '2021-05-25');

-- ----------------------------
-- Table structure for onzes
-- ----------------------------
DROP TABLE IF EXISTS `onzes`;
CREATE TABLE `onzes`  (
  `onzeJogoId` int(11) NOT NULL,
  `onzeJogadorId` int(11) NOT NULL,
  `onzeEquipaId` int(11) NOT NULL,
  `onzePosicaoId` int(11) NOT NULL,
  PRIMARY KEY (`onzeJogoId`, `onzeJogadorId`, `onzeEquipaId`) USING BTREE,
  INDEX `fk_onzes_jogos1_idx`(`onzeJogoId`) USING BTREE,
  INDEX `fk_onzes_equipajogadores1_idx`(`onzeJogadorId`, `onzeEquipaId`) USING BTREE,
  INDEX `fk_onzes_posicoes1_idx`(`onzePosicaoId`) USING BTREE,
  CONSTRAINT `fk_onzes_equipajogadores1` FOREIGN KEY (`onzeJogadorId`, `onzeEquipaId`) REFERENCES `equipajogadores` (`equipaJogadorJogadorId`, `equipaJogadorEquipaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_onzes_jogos1` FOREIGN KEY (`onzeJogoId`) REFERENCES `jogos` (`jogoId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_onzes_posicoes1` FOREIGN KEY (`onzePosicaoId`) REFERENCES `posicoes` (`posicaoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of onzes
-- ----------------------------

-- ----------------------------
-- Table structure for paises
-- ----------------------------
DROP TABLE IF EXISTS `paises`;
CREATE TABLE `paises`  (
  `paisId` int(11) NOT NULL AUTO_INCREMENT,
  `paisNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `paisBandeiraURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`paisId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paises
-- ----------------------------
INSERT INTO `paises` VALUES (1, 'Espanha', 'images/espanha.jpg');

-- ----------------------------
-- Table structure for pontos
-- ----------------------------
DROP TABLE IF EXISTS `pontos`;
CREATE TABLE `pontos`  (
  `pontoId` int(11) NOT NULL AUTO_INCREMENT,
  `pontoResultado` enum('V','E','D') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'V',
  `pontoValor` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `pontoJogoId` int(11) NOT NULL,
  `pontoEquipaId` int(11) NOT NULL,
  PRIMARY KEY (`pontoId`) USING BTREE,
  INDEX `fk_pontos_jogos1_idx`(`pontoJogoId`) USING BTREE,
  INDEX `fk_pontos_equipas1_idx`(`pontoEquipaId`) USING BTREE,
  CONSTRAINT `fk_pontos_equipas1` FOREIGN KEY (`pontoEquipaId`) REFERENCES `equipas` (`equipaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_pontos_jogos1` FOREIGN KEY (`pontoJogoId`) REFERENCES `jogos` (`jogoId`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE = InnoDB AUTO_INCREMENT = 19 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of pontos
-- ----------------------------
INSERT INTO `pontos` VALUES (1, 'D', '0', 1, 9);
INSERT INTO `pontos` VALUES (2, 'V', '3', 1, 3);
INSERT INTO `pontos` VALUES (3, 'D', '0', 2, 7);
INSERT INTO `pontos` VALUES (4, 'V', '3', 2, 10);
INSERT INTO `pontos` VALUES (5, 'E', '1', 3, 18);
INSERT INTO `pontos` VALUES (6, 'E', '1', 3, 13);
INSERT INTO `pontos` VALUES (7, 'V', '3', 4, 2);
INSERT INTO `pontos` VALUES (8, 'D', '0', 4, 4);
INSERT INTO `pontos` VALUES (9, 'V', '3', 5, 6);
INSERT INTO `pontos` VALUES (10, 'D', '0', 5, 15);
INSERT INTO `pontos` VALUES (11, 'V', '3', 6, 8);
INSERT INTO `pontos` VALUES (12, 'D', '0', 6, 17);
INSERT INTO `pontos` VALUES (13, 'E', '1', 7, 12);
INSERT INTO `pontos` VALUES (14, 'E', '1', 7, 16);
INSERT INTO `pontos` VALUES (15, 'E', '1', 8, 14);
INSERT INTO `pontos` VALUES (16, 'E', '1', 8, 5);
INSERT INTO `pontos` VALUES (17, 'V', '3', 9, 1);
INSERT INTO `pontos` VALUES (18, 'D', '0', 9, 11);

-- ----------------------------
-- Table structure for posicoes
-- ----------------------------
DROP TABLE IF EXISTS `posicoes`;
CREATE TABLE `posicoes`  (
  `posicaoId` int(11) NOT NULL AUTO_INCREMENT,
  `posicaoNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `posicaoCampo` enum('Guarda Redes','Defesa','Médio','Avançado') CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL DEFAULT 'Guarda Redes',
  PRIMARY KEY (`posicaoId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posicoes
-- ----------------------------
INSERT INTO `posicoes` VALUES (4, 'Guarda-Redes', 'Guarda Redes');
INSERT INTO `posicoes` VALUES (5, 'Defesa Esquerdo', 'Defesa');
INSERT INTO `posicoes` VALUES (6, 'Defesa Direito', 'Defesa');
INSERT INTO `posicoes` VALUES (7, 'Defesa Central Esquerdo', 'Defesa');
INSERT INTO `posicoes` VALUES (8, 'Defesa Central Centro', 'Defesa');
INSERT INTO `posicoes` VALUES (9, 'Defesa Central Direito', 'Defesa');
INSERT INTO `posicoes` VALUES (10, 'Medio Esquerdo', 'Médio');
INSERT INTO `posicoes` VALUES (11, 'Medio Central Esquerdo', 'Médio');
INSERT INTO `posicoes` VALUES (12, 'Medio Central Centro', 'Médio');
INSERT INTO `posicoes` VALUES (13, 'Medio Central Direito', 'Defesa');
INSERT INTO `posicoes` VALUES (14, 'Medio Direito', 'Médio');
INSERT INTO `posicoes` VALUES (15, 'Avançado Esquerdo', 'Avançado');
INSERT INTO `posicoes` VALUES (16, 'Avançado Centro', 'Avançado');
INSERT INTO `posicoes` VALUES (17, 'Avançado Direito', 'Avançado');

SET FOREIGN_KEY_CHECKS = 1;
