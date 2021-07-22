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

 Date: 22/07/2021 13:05:51
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
INSERT INTO `equipajogadores` VALUES (1, 1, 1, 1);
INSERT INTO `equipajogadores` VALUES (2, 1, 1, 22);
INSERT INTO `equipajogadores` VALUES (3, 1, 1, 81);
INSERT INTO `equipajogadores` VALUES (4, 1, 2, 3);
INSERT INTO `equipajogadores` VALUES (5, 1, 2, 4);
INSERT INTO `equipajogadores` VALUES (6, 1, 2, 13);
INSERT INTO `equipajogadores` VALUES (7, 1, 2, 52);
INSERT INTO `equipajogadores` VALUES (8, 1, 2, 72);
INSERT INTO `equipajogadores` VALUES (9, 1, 2, 24);
INSERT INTO `equipajogadores` VALUES (10, 1, 2, 47);
INSERT INTO `equipajogadores` VALUES (11, 1, 2, 2);
INSERT INTO `equipajogadores` VALUES (12, 1, 2, 5);
INSERT INTO `equipajogadores` VALUES (13, 1, 2, 55);
INSERT INTO `equipajogadores` VALUES (14, 1, 2, 0);
INSERT INTO `equipajogadores` VALUES (15, 1, 3, 6);
INSERT INTO `equipajogadores` VALUES (16, 1, 3, 68);
INSERT INTO `equipajogadores` VALUES (17, 1, 3, 0);
INSERT INTO `equipajogadores` VALUES (18, 1, 3, 8);
INSERT INTO `equipajogadores` VALUES (19, 1, 3, 28);
INSERT INTO `equipajogadores` VALUES (20, 1, 4, 7);
INSERT INTO `equipajogadores` VALUES (21, 1, 4, 11);
INSERT INTO `equipajogadores` VALUES (22, 1, 4, 19);
INSERT INTO `equipajogadores` VALUES (23, 1, 4, 20);
INSERT INTO `equipajogadores` VALUES (24, 1, 4, 21);
INSERT INTO `equipajogadores` VALUES (25, 1, 4, 29);
INSERT INTO `equipajogadores` VALUES (26, 1, 4, 77);
INSERT INTO `equipajogadores` VALUES (27, 3, 1, 1);
INSERT INTO `equipajogadores` VALUES (28, 3, 1, 77);
INSERT INTO `equipajogadores` VALUES (29, 3, 1, 99);
INSERT INTO `equipajogadores` VALUES (30, 3, 2, 4);
INSERT INTO `equipajogadores` VALUES (31, 3, 2, 5);
INSERT INTO `equipajogadores` VALUES (32, 3, 2, 30);
INSERT INTO `equipajogadores` VALUES (33, 3, 2, 91);
INSERT INTO `equipajogadores` VALUES (34, 3, 2, 2);
INSERT INTO `equipajogadores` VALUES (35, 3, 2, 34);
INSERT INTO `equipajogadores` VALUES (36, 3, 2, 82);
INSERT INTO `equipajogadores` VALUES (37, 3, 2, 3);
INSERT INTO `equipajogadores` VALUES (38, 3, 3, 8);
INSERT INTO `equipajogadores` VALUES (39, 3, 3, 22);
INSERT INTO `equipajogadores` VALUES (40, 3, 3, 28);
INSERT INTO `equipajogadores` VALUES (41, 3, 3, 17);
INSERT INTO `equipajogadores` VALUES (42, 3, 3, 19);
INSERT INTO `equipajogadores` VALUES (43, 3, 3, 21);
INSERT INTO `equipajogadores` VALUES (44, 3, 3, 27);
INSERT INTO `equipajogadores` VALUES (45, 3, 3, 49);
INSERT INTO `equipajogadores` VALUES (46, 3, 3, 78);
INSERT INTO `equipajogadores` VALUES (47, 3, 3, 0);
INSERT INTO `equipajogadores` VALUES (48, 3, 4, 7);
INSERT INTO `equipajogadores` VALUES (49, 3, 4, 9);
INSERT INTO `equipajogadores` VALUES (50, 3, 4, 10);
INSERT INTO `equipajogadores` VALUES (51, 3, 4, 14);
INSERT INTO `equipajogadores` VALUES (52, 3, 4, 31);
INSERT INTO `equipajogadores` VALUES (53, 3, 4, 88);
INSERT INTO `equipajogadores` VALUES (54, 3, 4, 0);

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
INSERT INTO `equipas` VALUES (1, 'Sporting', 'images/sporting.jpg', 1905, 'Estadio de Alvalade', 'images/alvalade', '<p>O seu emblema, que ostenta um le&atilde;o rampante de cor dourada (foi branco at&eacute;&nbsp;2001), sobre fundo verde, foi oficialmente adotado em&nbsp;1906, assim como as cores verde e branca que come&ccedil;aram a ser utilizadas praticamente desde a funda&ccedil;&atilde;o do clube. Em&nbsp;1907, D.&nbsp;Fernando de Castelo Branco&nbsp;(Pombeiro) autorizou que o le&atilde;o rampante do seu bras&atilde;o fosse utilizado no emblema do Sporting. Deveria ser de cor \"prata armado em preto, em campo verde, correspondendo &agrave;s l&iacute;mpidas, firmes e esperan&ccedil;adas inten&ccedil;&otilde;es dos seus fundadores\". O verde foi sugerido pelo&nbsp;Visconde de Alvalade, Presidente honor&aacute;rio, simbolizando a sua esperan&ccedil;a no novo clube.</p>', 'Frederico Varandas', 'Ruben Amorim', 'images/rubenamorim.jpg');
INSERT INTO `equipas` VALUES (2, ' FC Porto', 'images/porto.jpg', 1893, 'Estádio do Dragão', 'images/dragao.jpg', '<p>A 28 de setembro de 1893 no dia do anivers&aacute;rio do rei&nbsp;D. Carlos&nbsp;e da rainha&nbsp;D. Am&eacute;lia, o&nbsp;<em>Foot-Ball Club do Porto</em> &eacute; fundado, por obra e gra&ccedil;a do jovem de 20 anos&nbsp;Ant&oacute;nio Nicolau d\'Almeida, um comerciante do&nbsp;vinho do Porto&nbsp;que descobriu o futebol nas suas viagens a Inglaterra. O FC Porto inicia ent&atilde;o os seus primeiros treinos no Campo do Prado, em&nbsp;Matosinhos, e no dia 8 de outubro disputa o primeiro jogo da hist&oacute;ria do clube, contra o Clube de Aveiro.</p>', 'Jorge Nuno Pinto da Costa', 'Sergio Conceição', 'images/sergioconceicao.jpg');
INSERT INTO `equipas` VALUES (3, ' SL Benfica', 'images/benfica.jpg', 1904, 'Estádio da Luz', 'images/luz.jpg', '<p>Foi eleito pela&nbsp;FIFA&nbsp;o 12.&ordm; maior&nbsp;clube de futebol do s&eacute;culo XX&nbsp;e foi considerado pela&nbsp;IFFHS como o 9&ordm; melhor clube europeu do s&eacute;culo XX,&nbsp;sendo o primeiro entre os&nbsp;clubes portugueses.&nbsp;O Benfica &eacute; o clube mais bem sucedido em Portugal (84 t&iacute;tulos). O Benfica ganhou 37 t&iacute;tulos da&nbsp;Primeira Liga,&nbsp;26&nbsp;Ta&ccedil;as de Portugal&nbsp;(com um recorde de 10&nbsp;<em>dobradinhas),</em>&nbsp;7&nbsp;Ta&ccedil;as da Liga, 8&nbsp;Superta&ccedil;as C&acirc;ndido de Oliveira&nbsp;e 3&nbsp;Campeonatos de Portugal.</p>', 'Sem presidente no momento', 'Jorge Jesus', 'images/jj.jpg');
INSERT INTO `equipas` VALUES (4, ' SC Braga', 'images/braga.jpg', 1921, 'Estádio Municipal de Braga', 'images/estadiobraga.jpg', '<p>O clube foi oficialmente fundado em&nbsp;19 de Janeiro&nbsp;de&nbsp;1921. Foi nesse dia que um grupo de jovens, na sua maioria estudantes, de onde se destacaram Celestino Lobo, Carlos Jos&eacute; de Morais, os irm&atilde;os Carvalho, Eurico Sameiro, Costinha, Jo&atilde;o Gomes, (que viria a ser o primeiro presidente) e ainda Joaquim de Oliveira Costa se reuniram &agrave; volta de ideia de criar um clube de futebol que representasse a cidade de&nbsp;Braga.</p>', 'António Salvador', 'Carlos Carvalhal', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (5, ' FC P.Ferreira', 'images/ferreira.jpg', 1950, 'Estádio Municipal da Capital do Móvel', 'images/estadiomovel.jpg', '<p>A origem do futebol em&nbsp;Pa&ccedil;os de Ferreira&nbsp;remonta &agrave;&nbsp;d&eacute;cada de 1930, quando a modalidade come&ccedil;ou a ser praticada pelo Sport Club Pacense, coletividade sediada em&nbsp;Meixomil&nbsp;(uma das freguesias do concelho).</p>\r\n<p>Foram duas d&eacute;cadas de futebol popular e sem express&atilde;o oficial, at&eacute; que uma reorganiza&ccedil;&atilde;o competitiva e o aparecimento do velho Campo da Cavada, motivou a funda&ccedil;&atilde;o &ndash; em&nbsp;5 de abril&nbsp;de&nbsp;1950, do Futebol Clube Vasco da Gama, coletividade que est&aacute; na g&eacute;nese do actual Futebol Clube Pa&ccedil;os de Ferreira.</p>', 'Paulo Meneses', 'Pepa', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (6, ' Santa Clara', 'images/santaclara.jpg', 1927, 'Estádio de São Miguel', 'images/estadiosantaclara.jpg', '<p>O Clube Desportivo Santa Clara &eacute; o resultado final da grande cria&ccedil;&atilde;o de Rodrigo Neto, algo distante no tempo mas muito pr&oacute;ximo no essencial, de um fen&oacute;meno s&oacute;cio-desportivo que, iniciando-se em finais de 1917, teve o seu apogeu durante os anos de 1919 e 1920, o auge da animada disputa dos \"Campeonatos de Santa Clara\", competi&ccedil;&atilde;o na qual participavam equipas em representa&ccedil;&atilde;o de algumas das v&aacute;rias \"lojas de Santa Clara\", apresentando-se como herdeiro natural dos dois outros \"Santa Claras\"; o \"Santa Clara Foot-ball Club\" e o \"Sport Club Santa Clara\", ambos antes dele tamb&eacute;m filiados na \"Associa&ccedil;&atilde;o de Foot-ball de Sam Miguel\", hoje; Associa&ccedil;&atilde;o de Futebol de Ponta Delgada.</p>', 'Rui Melo Cordeiro', 'Daniel Ramos', 'images/danielramos.jpg');
INSERT INTO `equipas` VALUES (7, ' Vitória SC', 'images/vitoria.jpg', 1922, 'Estádio D. Afonso Henriques', 'images/estadioguimaraes.jpg', '<p>O Vit&oacute;ria Sport Clube deve as suas origens a um grupo de jovens estudantes que constituiu um grupo de futebol em 1913, data que alguns investigadores apontam como a verdadeira data de funda&ccedil;&atilde;o do clube, ao qual em 1918 deram o actual nome, Vit&oacute;ria.</p>\r\n<p>Em 22 de Setembro de 1922, data oficial da funda&ccedil;&atilde;o, o clube &eacute; filiado na&nbsp;Associa&ccedil;&atilde;o de Futebol de Braga, exactamente no primeiro ano de funcionamento daquela associa&ccedil;&atilde;o.<sup id=\"cite_ref-GARCIA,_Cust&oacute;dio_2008_6-0\" class=\"reference\"></sup>&nbsp;A refer&ecirc;ncia mais antiga do Vit&oacute;ria &eacute; na edi&ccedil;&atilde;o do \"Norte Desportivo\" de&nbsp;6 de fevereiro&nbsp;de&nbsp;1938.</p>', 'Miguel Pinto Lisboa', 'João Henriques', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (8, ' Moreirense FC', 'images/moreirense.jpg', 1938, 'Estádio Comendador Joaquim de Almeida Freitas', 'images/estadiomoreirense.jpg', '<p>O Moreirense foi fundado em 1938&nbsp;1 de novembro&nbsp;de&nbsp;1938. Chegou &agrave;&nbsp;Segunda Liga&nbsp;pela primeira vez em 1995, onde se manteve por seis anos. Ap&oacute;s despromo&ccedil;&atilde;o &agrave; 2&ordf; Divis&atilde;o B subiu duas vezes consecutivas atingindo a&nbsp;Primeira Liga&nbsp;e,&nbsp;2002&ndash;03&nbsp;.O t&eacute;cnico&nbsp;Manuel Machado&nbsp;liderou os c&oacute;negos por quatro temporadas consecutivas, de 2000 a 2004, durante as quais o Moreirense alcan&ccedil;ou na I Liga duas posi&ccedil;&otilde;es a meio da tabela, terminando em nono na &uacute;ltima temporada.</p>', 'Vítor Magalhães', 'Vasco Seabra', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (9, ' FC Famalicão', 'images/famalicao.jpg', 1931, 'Estádio Municipal 22 de Junho', 'images/estadio22dejunho.jpg', '<p>A 21 de agosto de 1931 &eacute; fundado o Foot-ball Club de Famalic&atilde;o pelas m&atilde;os de Jos&eacute; Alves Marinho, Floriano Portela, Hildebrando Portela, Luis Pinto, Joaquim Mesquita Jr. e Verg&iacute;lio Pinto de Azevedo, com o objetivo de ser o principal embaixador desportivo da, ent&atilde;o na altura, vila e do concelho. Verde e branco foram as cores da primeira camisola envergada pelos famalicenses.</p>', 'Jorge Silva', 'João Pedro Sousa', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (10, ' Belenenses SAD', 'images/belenenses.jpg', 1999, 'Estádio Nacional do Jamor ', 'images/estadionacional.jpg', '<p>O&nbsp;Belenenses&nbsp;criou a sua&nbsp;Sociedade An&oacute;nima Desportiva (SAD) em 18 de Outubro de 1999, para gerir o seu futebol profissional. Em 2012, enfrentando o Clube e a SAD fortes dificuldades financeiras, os s&oacute;cios aprovaram a venda de 51% da SAD a um investidor, a Codecity Sports Management, liderada por Rui Pedro Soares. Al&eacute;m do contrato de compra e venda das a&ccedil;&otilde;es, foi celebrado um acordo parassocial em que o clube fundador mantinha direitos especiais, como direitos de veto a certas delibera&ccedil;&otilde;es e direito de recompra, unilateral, das a&ccedil;&otilde;es com pre&ccedil;o e datas fixadas. Foi ainda celebrado um protocolo que regulava as rela&ccedil;&otilde;es entre o Clube e a SAD.</p>', 'Rui Pedro Soares', 'Petit', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (11, ' Gil Vicente FC', 'images/gilvicente.jpg', 1924, 'Estádio Cidade de Barcelos', 'images/estadiobarcelos.jpg', '<p>O futebol chegou a&nbsp;Barcelos&nbsp;nas primeiras d&eacute;cadas do&nbsp;s&eacute;culo XX&nbsp;atrav&eacute;s de relatos de visitantes que se deslocavam &agrave;s cidades de&nbsp;Lisboa&nbsp;e do&nbsp;Porto. Foi ganhando adeptos rapidamente e cedo surgiram equipas formadas por jovens locais como o&nbsp;<strong>Barcellos Sporting Club</strong>&nbsp;e o&nbsp;<strong>Uni&atilde;o Foot-Ball Club Barcellense</strong>.</p>', 'Francisco Dias da Silva', 'Ricardo Soares', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (12, ' CD Tondela', 'images/tondela.jpg', 1933, 'Estádio João Cardoso', 'images/estadiotondela.jpg', '<p>O clube foi fundado a uma&nbsp;Ter&ccedil;a-Feira,&nbsp;6 de Junho&nbsp;de&nbsp;1933.</p>\r\n<p>O sonho cumpre-se numa longa hist&oacute;ria. O Clube Desportivo de Tondela (C.D.T.) a caminho de quase um s&eacute;culo de de vida, confirma um legado e curr&iacute;culo de import&acirc;ncia extrema na regi&atilde;o da Beira Alta e no panorama nacional.</p>', 'Gilberto Neves Coimbra', 'Pako Ayestarán', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (13, ' Boavista FC', 'images/boavista.jpg', 1903, 'Estádio do Bessa', 'images/bessa.jpg', '<p>O primeiro Boavist&atilde;o, nos anos 1970, sob a presid&ecirc;ncia do Major Valentim Loureiro e com&nbsp;Jos&eacute; Maria Pedroto&nbsp;como Treinador, iniciou a radiosa aventura que conheceu a segunda p&aacute;gina em 91/92, com elimina&ccedil;&atilde;o da&nbsp;Internazionale&nbsp;no&nbsp;Est&aacute;dio Giuseppe Meazza&nbsp;(0-0 depois de uma vit&oacute;ria por 2-1 no Bessa).</p>', 'Sem presidente no momento', 'Jesualdo Ferreira', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (14, ' Portimonense', 'images/Portimonense.jpg', 1914, 'Estádio Municipal de Portimão', 'images/estadioportimao.jpg', '<p>O&nbsp;Futebol&nbsp;chegou a&nbsp;Portim&atilde;o&nbsp;em&nbsp;1913, por via de um portimonense que estudava em&nbsp;Inglaterra, que trouxe uma bola e divulgou, assim o desporto. Os primeiros jogos foram disputados na zona onde actualmente &eacute; a Pra&ccedil;a Manuel Teixeira Gomes e a sede do Portimonense.</p>', 'Fernando Rocha', 'Paulo Sérgio', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (15, ' Marítimo M.', 'images/maritimo.jpg', 1910, 'Estádio do Marítimo', 'images/estadiomaritimo.jpg', '<p>Tendo a sua forma&ccedil;&atilde;o estado ligada ao mar e aos que da&iacute; tiravam o seu sustento, desde cedo foi adoptado como a voz e a principal for&ccedil;a desportiva das camadas mais baixas da popula&ccedil;&atilde;o a contrapor com o car&aacute;cter mon&aacute;rquico e elitista do&nbsp;Club Sports Madeira&nbsp;o seu principal rival nos primeiros tempos.<sup id=\"cite_ref-6\" class=\"reference\"></sup>&nbsp;Fundado por C&acirc;ndido Gouveia,<sup id=\"cite_ref-7\" class=\"reference\"></sup>&nbsp;tem uma data de funda&ccedil;&atilde;o algo incerta, sendo no entanto consensualmente apontado o dia 20 de Setembro de 1910.</p>', 'José Carlos Pereira', 'Lito Vidigal', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (16, ' Rio Ave FC', 'images/rioave.jpg', 1939, 'Estádio dos Arcos', 'images/estadiorio.jpeg', '<p>O Rio Ave Futebol Clube foi criado por um grupo de vilacondenses.</p>\r\n<p>Na hora da escolha do nome al&eacute;m do actual foram tamb&eacute;m a votos os nomes &ldquo;Vilacondense Futebol Clube&rdquo; e &ldquo;Vila do Conde Sport Club&rdquo;.</p>\r\n<p>Depois da nomea&ccedil;&atilde;o, a associa&ccedil;&atilde;o desportiva vilacondense teve ent&atilde;o a tarefa de completar a vida do clube, conseguir jogadores, equipamentos e um est&aacute;dio.</p>', 'António da Silva Campos', 'Mário Silva', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (17, ' SC Farense', 'images/farense.jpg', 1910, 'Estádio de São Luís', 'images/estadioS.Luis.jpg', '<p>Em Faro, na transi&ccedil;&atilde;o do s&eacute;culo XIX para o s&eacute;culo XX, jogava-se&nbsp;futebol&nbsp;no largo da S&eacute;.</p>\r\n<p>Em 1904, a corveta &ldquo;Duque de Palmela&rdquo;, ancorada na&nbsp;Ria Formosa&nbsp;em&nbsp;Faro&nbsp;e na qual estava instalada uma escola de marinheiros, promoveu a modalidade j&aacute; muito popularizada em&nbsp;Inglaterra. O primeiro jogo de&nbsp;futebol&nbsp;foi disputado no Largo de S. Francisco, a 10 de Junho do mesmo ano, num terreno, tamb&eacute;m ele, improvisado.</p>', 'João Rodrigues', 'Sérgio Vieira', 'images/semFoto.jpg');
INSERT INTO `equipas` VALUES (18, ' CD Nacional', 'images/nacional.jpg', 1910, 'Estádio da Madeira', 'images/estadiomadeira.jpg', '<p>No come&ccedil;o do s&eacute;culo XX, o futebol ia ganhando entusiastas em Portugal e a Madeira n&atilde;o era excep&ccedil;&atilde;o. Um grupo de jovens locais descobriu a paix&atilde;o pelo desporto em partidas realizadas no Campo do Br&aacute;s em 1908, num per&iacute;odo em que o futebol na ilha era quase um exclusivo ingl&ecirc;s. Esse grupo resolveu organizar jogos com alguma regularidade.</p>', 'Rui António Macedo Alves', 'Luís Freire', 'images/semFoto.jpg');

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
) ENGINE = InnoDB AUTO_INCREMENT = 55 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of jogadores
-- ----------------------------
INSERT INTO `jogadores` VALUES (1, ' Antonio Adán', '1987-05-13', 'images/adan.png', 1);
INSERT INTO `jogadores` VALUES (2, ' André Paulo', '1996-12-18', 'images/andrepaulo.jpg', 2);
INSERT INTO `jogadores` VALUES (3, ' Luís Maximiano', '1999-01-05', 'images/luismaximiano.jpg', 2);
INSERT INTO `jogadores` VALUES (4, ' Zouhair Feddal', '1989-12-23', 'images/semFoto.png', 4);
INSERT INTO `jogadores` VALUES (5, ' Sebastián Coates ', '1990-10-07', 'images/semFoto.png', 5);
INSERT INTO `jogadores` VALUES (6, ' Luís Neto', '1988-05-26', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (7, ' Gonçalo Inácio', '2001-08-25', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (8, ' Eduardo Quaresma', '2002-03-02', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (9, ' Pedro Porro', '1999-09-13', 'images/semFoto.png', 1);
INSERT INTO `jogadores` VALUES (10, ' Ricardo Esgaio', '1993-05-16', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (11, ' Matheus Reis', '1995-02-18', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (12, ' Nuno Mendes', '2002-06-19', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (13, ' Vitorino Antunes', '1987-04-01', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (14, ' Rúben Vinagre', '1999-06-19', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (15, ' João Palhinha', '1995-09-09', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (16, ' Daniel Bragança', '1999-05-27', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (17, ' Eduardo Henrique', '1995-05-17', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (18, ' Matheus Nunes', '1998-08-17', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (19, ' Pedro Gonçalves', '1998-06-18', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (20, ' Bruno Tabata', '1997-05-30', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (21, ' Nuno Santos', '1995-02-03', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (22, ' Tiago Tomás', '2002-06-16', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (23, ' Gonzalo Plata', '2000-11-01', 'images/semFoto.png', 7);
INSERT INTO `jogadores` VALUES (24, ' Paulinho', '1992-11-09', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (25, ' Luiz Phellype', '1993-09-27', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (26, ' Jovane Cabral', '1998-06-14', 'images/semFoto.png', 8);
INSERT INTO `jogadores` VALUES (27, ' Mile Svilar', '1987-06-08', 'images/semFoto.png', 10);
INSERT INTO `jogadores` VALUES (28, ' Helton Leite', '1987-06-09', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (29, ' Ody Vlachodimos', '1987-06-10', 'images/semFoto.png', 9);
INSERT INTO `jogadores` VALUES (30, ' Lucas Veríssimo', '1987-06-11', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (31, ' Jan Vertonghen', '1987-06-12', 'images/semFoto.png', 10);
INSERT INTO `jogadores` VALUES (32, ' Nicolas Otamendi', '1987-06-13', 'images/semFoto.png', 3);
INSERT INTO `jogadores` VALUES (33, ' Morato', '1987-06-14', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (34, ' Gilberto', '1987-06-15', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (35, ' André Almeida ', '1987-06-16', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (36, ' João Ferreira', '1987-06-17', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (37, ' Alex Grimaldo', '1987-06-18', 'images/semFoto.png', 1);
INSERT INTO `jogadores` VALUES (38, ' Gabriel', '1987-06-19', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (39, ' Andreas Samaris', '1987-06-20', 'images/semFoto.png', 9);
INSERT INTO `jogadores` VALUES (40, ' Julian Weigl', '1987-06-21', 'images/semFoto.png', 11);
INSERT INTO `jogadores` VALUES (41, ' Diogo Gonçalves', '1987-06-22', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (42, ' Chiquinho', '1987-06-23', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (43, ' Pizzi', '1987-06-24', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (44, ' Rafa Silva', '1987-06-25', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (45, ' Adel Taarabt', '1987-06-26', 'images/semFoto.png', 4);
INSERT INTO `jogadores` VALUES (46, ' Tiago Araújo', '1987-06-27', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (47, ' João Mário', '1987-06-28', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (48, ' Everton', '1987-06-29', 'images/semFoto.png', 6);
INSERT INTO `jogadores` VALUES (49, ' Darwin Núñez', '1987-06-30', 'images/semFoto.png', 5);
INSERT INTO `jogadores` VALUES (50, ' Luca Waldschmidt', '1987-07-01', 'images/semFoto.png', 11);
INSERT INTO `jogadores` VALUES (51, ' Haris Seferović', '1987-07-02', 'images/semFoto.png', 12);
INSERT INTO `jogadores` VALUES (52, ' Gil Dias', '1987-07-03', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (53, ' Gonçalo Ramos', '1987-07-04', 'images/semFoto.png', 2);
INSERT INTO `jogadores` VALUES (54, ' Rodrigo Pinho', '1987-07-05', 'images/semFoto.png', 6);

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
) ENGINE = InnoDB AUTO_INCREMENT = 100 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `jogos` VALUES (17, '2020-09-25', 4, 6, 0, 1);
INSERT INTO `jogos` VALUES (19, '2020-09-26', 15, 12, 2, 1);
INSERT INTO `jogos` VALUES (21, '2020-09-26', 13, 2, 0, 5);
INSERT INTO `jogos` VALUES (22, '2020-09-27', 17, 18, 0, 1);
INSERT INTO `jogos` VALUES (23, '2020-09-27', 11, 14, 1, 0);
INSERT INTO `jogos` VALUES (24, '2020-09-27', 16, 7, 0, 0);
INSERT INTO `jogos` VALUES (25, '2020-09-28', 10, 9, 1, 2);
INSERT INTO `jogos` VALUES (26, '2020-09-26', 3, 8, 2, 0);
INSERT INTO `jogos` VALUES (27, '2020-09-27', 5, 1, 0, 2);
INSERT INTO `jogos` VALUES (28, '2020-10-02', 8, 13, 1, 1);
INSERT INTO `jogos` VALUES (29, '2020-10-02', 7, 5, 1, 0);
INSERT INTO `jogos` VALUES (30, '2020-10-03', 6, 11, 0, 0);
INSERT INTO `jogos` VALUES (31, '2020-10-03', 2, 15, 2, 3);
INSERT INTO `jogos` VALUES (32, '2020-10-03', 12, 4, 0, 4);
INSERT INTO `jogos` VALUES (33, '2020-10-04', 18, 10, 0, 0);
INSERT INTO `jogos` VALUES (34, '2020-10-04', 9, 16, 1, 1);
INSERT INTO `jogos` VALUES (35, '2020-10-04', 3, 17, 3, 2);
INSERT INTO `jogos` VALUES (36, '2020-10-04', 14, 1, 0, 2);
INSERT INTO `jogos` VALUES (37, '2020-10-17', 11, 12, 1, 1);
INSERT INTO `jogos` VALUES (38, '2020-10-17', 15, 14, 1, 2);
INSERT INTO `jogos` VALUES (39, '2020-10-17', 4, 18, 2, 1);
INSERT INTO `jogos` VALUES (40, '2020-10-17', 1, 2, 2, 2);
INSERT INTO `jogos` VALUES (41, '2020-10-18', 5, 6, 2, 1);
INSERT INTO `jogos` VALUES (42, '2020-10-18', 10, 8, 0, 0);
INSERT INTO `jogos` VALUES (43, '2020-10-18', 17, 9, 3, 3);
INSERT INTO `jogos` VALUES (44, '2020-10-18', 16, 3, 0, 3);
INSERT INTO `jogos` VALUES (45, '2020-10-19', 13, 7, 0, 1);
INSERT INTO `jogos` VALUES (46, '2020-10-23', 12, 14, 1, 0);
INSERT INTO `jogos` VALUES (47, '2020-10-24', 18, 5, 1, 1);
INSERT INTO `jogos` VALUES (48, '2020-10-24', 6, 1, 1, 2);
INSERT INTO `jogos` VALUES (49, '2020-10-24', 2, 11, 1, 0);
INSERT INTO `jogos` VALUES (50, '2020-10-25', 8, 15, 2, 1);
INSERT INTO `jogos` VALUES (51, '2020-10-25', 17, 16, 0, 1);
INSERT INTO `jogos` VALUES (52, '2020-10-25', 9, 13, 2, 2);
INSERT INTO `jogos` VALUES (53, '2020-10-25', 7, 4, 0, 1);
INSERT INTO `jogos` VALUES (54, '2020-10-26', 3, 10, 2, 0);
INSERT INTO `jogos` VALUES (55, '2020-10-30', 5, 2, 3, 2);
INSERT INTO `jogos` VALUES (56, '2020-10-31', 10, 17, 1, 1);
INSERT INTO `jogos` VALUES (57, '2020-10-31', 16, 8, 2, 0);
INSERT INTO `jogos` VALUES (58, '2020-10-31', 15, 18, 0, 0);
INSERT INTO `jogos` VALUES (59, '2020-11-01', 14, 6, 1, 2);
INSERT INTO `jogos` VALUES (60, '2020-11-01', 11, 7, 1, 2);
INSERT INTO `jogos` VALUES (61, '2020-11-01', 1, 12, 4, 0);
INSERT INTO `jogos` VALUES (62, '2020-11-02', 4, 9, 1, 0);
INSERT INTO `jogos` VALUES (63, '2020-11-02', 13, 3, 3, 0);
INSERT INTO `jogos` VALUES (64, '2020-11-06', 10, 16, 0, 0);
INSERT INTO `jogos` VALUES (65, '2020-11-07', 12, 6, 2, 0);
INSERT INTO `jogos` VALUES (66, '2020-11-07', 9, 15, 2, 1);
INSERT INTO `jogos` VALUES (67, '2020-11-07', 7, 1, 0, 4);
INSERT INTO `jogos` VALUES (68, '2020-11-08', 18, 11, 2, 1);
INSERT INTO `jogos` VALUES (69, '2020-11-08', 17, 13, 3, 1);
INSERT INTO `jogos` VALUES (70, '2020-11-08', 2, 14, 3, 1);
INSERT INTO `jogos` VALUES (71, '2020-11-08', 3, 4, 2, 3);
INSERT INTO `jogos` VALUES (72, '2020-12-01', 8, 5, 0, 1);
INSERT INTO `jogos` VALUES (73, '2020-11-27', 5, 9, 2, 0);
INSERT INTO `jogos` VALUES (74, '2020-11-27', 12, 7, 0, 2);
INSERT INTO `jogos` VALUES (75, '2020-11-28', 6, 2, 0, 1);
INSERT INTO `jogos` VALUES (76, '2020-11-28', 1, 8, 2, 1);
INSERT INTO `jogos` VALUES (77, '2020-11-19', 11, 16, 2, 0);
INSERT INTO `jogos` VALUES (78, '2020-11-29', 14, 18, 1, 0);
INSERT INTO `jogos` VALUES (79, '2020-11-29', 13, 10, 0, 0);
INSERT INTO `jogos` VALUES (80, '2020-11-29', 4, 17, 1, 0);
INSERT INTO `jogos` VALUES (81, '2020-11-30', 15, 3, 1, 2);
INSERT INTO `jogos` VALUES (82, '2020-12-05', 7, 14, 1, 0);
INSERT INTO `jogos` VALUES (83, '2020-12-05', 8, 11, 1, 1);
INSERT INTO `jogos` VALUES (84, '2020-12-05', 9, 1, 2, 2);
INSERT INTO `jogos` VALUES (85, '2020-12-05', 2, 12, 4, 3);
INSERT INTO `jogos` VALUES (86, '2020-12-06', 18, 6, 1, 3);
INSERT INTO `jogos` VALUES (87, '2020-12-06', 16, 13, 0, 0);
INSERT INTO `jogos` VALUES (88, '2020-12-06', 10, 4, 2, 1);
INSERT INTO `jogos` VALUES (89, '2020-12-06', 3, 5, 2, 1);
INSERT INTO `jogos` VALUES (90, '2020-12-07', 17, 15, 2, 1);
INSERT INTO `jogos` VALUES (91, '2020-12-18', 14, 9, 0, 0);
INSERT INTO `jogos` VALUES (92, '2020-12-19', 15, 10, 1, 0);
INSERT INTO `jogos` VALUES (93, '2020-12-19', 12, 8, 0, 0);
INSERT INTO `jogos` VALUES (94, '2020-12-19', 1, 17, 1, 0);
INSERT INTO `jogos` VALUES (95, '2020-12-20', 5, 13, 1, 1);
INSERT INTO `jogos` VALUES (96, '2020-12-20', 11, 3, 0, 2);
INSERT INTO `jogos` VALUES (97, '2020-12-20', 2, 18, 2, 0);
INSERT INTO `jogos` VALUES (98, '2020-12-21', 6, 7, 0, 4);
INSERT INTO `jogos` VALUES (99, '2020-12-22', 4, 16, 3, 0);

-- ----------------------------
-- Table structure for noticias
-- ----------------------------
DROP TABLE IF EXISTS `noticias`;
CREATE TABLE `noticias`  (
  `noticiaId` int(11) NOT NULL AUTO_INCREMENT,
  `noticiaTitulo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaResumo` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaImagemURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaCapaURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaDescricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `noticiaData` date NOT NULL,
  PRIMARY KEY (`noticiaId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of noticias
-- ----------------------------
INSERT INTO `noticias` VALUES (11, 'Mundial\'2022 obriga a \'revolução\' na Liga dos Campeões: todas as mudanças no calendário', '\'Mundo Desportivo\' avança com as alterações nas datas devido ao primeiro Mundial da história a disputar-se no Inverno', 'images/noticia4.jpg', 'images/noticia3.jpg', '<p>O&nbsp;<strong>Mundial do Qatar em 2022</strong>, o primeiro de sempre a ser realizado durante o inverno (de 21 de novembro a 18 de dezembro), vai obrigar a altera&ccedil;&otilde;es nas datas das partidas de v&aacute;rias competi&ccedil;&otilde;es de clubes dessa mesma temporada. Uma delas &eacute; a Champions, que vai ter um calend&aacute;rio mais alargado: a maior prova europeia de clubes come&ccedil;ar&aacute; mais cedo do que o habitual e terminar&aacute; mais tarde.<br /><br /></p>\r\n<div id=\"incontent\"></div>\r\n<p>Segundo avan&ccedil;a o \'Mundo Deportivo\', os playoffs ser&atilde;o jogados nos dias 16-17 e 23-24 de agosto (2022), com a fase de grupos a arrancar no m&ecirc;s seguinte, a 6 e 7 de setembro, e terminar&aacute;, com o sexto jogo, a 1 e 2 de novembro.</p>\r\n<p>&nbsp;</p>', '2021-05-25');
INSERT INTO `noticias` VALUES (12, 'João Mário deixa mensagem aos benfiquistas', 'Reforço para a nova temporada admite estar ansioso para sentir o apoio dos adeptos', 'images/noticia5.jpg', 'images/noticia6.jpg', '<p>O Benfica publicou esta quinta-feira um v&iacute;deo de Jo&atilde;o M&aacute;rio com uma mensagem para os adeptos encarnados.<br /><br /></p>\r\n<div id=\"incontent\"></div>\r\n<h2>\"N&atilde;o vejo a hora de sentir o vosso apoio. Esperamos por todos v&oacute;s na nossa casa\", afirmou o m&eacute;dio, uma das novas caras do Benfica para a nova &eacute;poca, no v&iacute;deo publicado nas redes sociais do clube.</h2>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;&nbsp;</p>', '2021-05-25');
INSERT INTO `noticias` VALUES (13, 'A crónica do Sporting-Angers, 2-0: combustível caro dá meio depósito', 'Equipa só arrancou com Tabata a acelerar no meio e Paulinho a aquecer o pé canhoto', 'images/noticia2.jpg', 'images/noticia1.jpg', '<p>O Sporting venceu (2-0) o particular frente aos franceses do Angers, o sexto triunfo em sete jogos dos le&otilde;es nesta pr&eacute;-temporada. O resultado acaba por ser melhor do que a exibi&ccedil;&atilde;o: a equipa de R&uacute;ben Amorim mostrou uma tremenda efic&aacute;cia com dois golos nas tr&ecirc;s ocasi&otilde;es claras de golo que disp&ocirc;s. Numa 1&ordf; parte em que o Angers foi superior, o Sporting conseguiu chegar &agrave; vit&oacute;ria j&aacute; no segundo tempo. Gon&ccedil;alo In&aacute;cio (63&rsquo;) e Paulinho (86&rsquo;) fizeram os golos.</p>', '2021-07-21');

-- ----------------------------
-- Table structure for paises
-- ----------------------------
DROP TABLE IF EXISTS `paises`;
CREATE TABLE `paises`  (
  `paisId` int(11) NOT NULL AUTO_INCREMENT,
  `paisNome` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `paisBandeiraURL` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`paisId`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of paises
-- ----------------------------
INSERT INTO `paises` VALUES (1, 'Espanha', 'images/espanha.png');
INSERT INTO `paises` VALUES (2, 'Portugal', 'images/portugal.png');
INSERT INTO `paises` VALUES (3, 'Argentina', 'images/argentina.png');
INSERT INTO `paises` VALUES (4, 'Marrocos', 'images/marrocos.png');
INSERT INTO `paises` VALUES (5, 'Uruguai', 'images/uruguai.png');
INSERT INTO `paises` VALUES (6, 'Brasil', 'images/brasil.png');
INSERT INTO `paises` VALUES (7, 'Venezuela', 'images/venezuela.png');
INSERT INTO `paises` VALUES (8, 'Cabo Verde', 'images/caboverde.png');
INSERT INTO `paises` VALUES (9, 'Grecia', 'images/grecia.png');
INSERT INTO `paises` VALUES (10, 'Bélgica', 'images/belgica.png');
INSERT INTO `paises` VALUES (11, 'Alemanha', 'images/alemanha.png');
INSERT INTO `paises` VALUES (12, 'Suiça', 'images/suiça.png');

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
) ENGINE = InnoDB AUTO_INCREMENT = 201 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

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
INSERT INTO `pontos` VALUES (33, 'D', '0', 17, 4);
INSERT INTO `pontos` VALUES (34, 'V', '3', 17, 6);
INSERT INTO `pontos` VALUES (39, 'V', '3', 19, 15);
INSERT INTO `pontos` VALUES (40, 'D', '0', 19, 12);
INSERT INTO `pontos` VALUES (43, 'D', '0', 21, 13);
INSERT INTO `pontos` VALUES (44, 'V', '3', 21, 2);
INSERT INTO `pontos` VALUES (45, 'D', '0', 22, 17);
INSERT INTO `pontos` VALUES (46, 'V', '3', 22, 18);
INSERT INTO `pontos` VALUES (47, 'V', '3', 23, 11);
INSERT INTO `pontos` VALUES (48, 'D', '0', 23, 14);
INSERT INTO `pontos` VALUES (49, 'E', '1', 24, 16);
INSERT INTO `pontos` VALUES (50, 'E', '1', 24, 7);
INSERT INTO `pontos` VALUES (51, 'D', '0', 25, 10);
INSERT INTO `pontos` VALUES (52, 'V', '3', 25, 9);
INSERT INTO `pontos` VALUES (53, 'V', '3', 26, 3);
INSERT INTO `pontos` VALUES (54, 'D', '0', 26, 8);
INSERT INTO `pontos` VALUES (55, 'D', '0', 27, 5);
INSERT INTO `pontos` VALUES (56, 'V', '3', 27, 1);
INSERT INTO `pontos` VALUES (57, 'E', '1', 28, 8);
INSERT INTO `pontos` VALUES (58, 'E', '1', 28, 13);
INSERT INTO `pontos` VALUES (59, 'V', '3', 29, 7);
INSERT INTO `pontos` VALUES (60, 'D', '0', 29, 5);
INSERT INTO `pontos` VALUES (61, 'E', '1', 30, 6);
INSERT INTO `pontos` VALUES (62, 'E', '1', 30, 11);
INSERT INTO `pontos` VALUES (63, 'D', '0', 31, 2);
INSERT INTO `pontos` VALUES (64, 'V', '3', 31, 15);
INSERT INTO `pontos` VALUES (65, 'D', '0', 32, 12);
INSERT INTO `pontos` VALUES (66, 'V', '3', 32, 4);
INSERT INTO `pontos` VALUES (67, 'E', '1', 33, 18);
INSERT INTO `pontos` VALUES (68, 'E', '1', 33, 10);
INSERT INTO `pontos` VALUES (69, 'E', '1', 34, 9);
INSERT INTO `pontos` VALUES (70, 'E', '1', 34, 16);
INSERT INTO `pontos` VALUES (71, 'V', '3', 35, 3);
INSERT INTO `pontos` VALUES (72, 'D', '0', 35, 17);
INSERT INTO `pontos` VALUES (73, 'D', '0', 36, 14);
INSERT INTO `pontos` VALUES (74, 'V', '3', 36, 1);
INSERT INTO `pontos` VALUES (75, 'E', '1', 37, 11);
INSERT INTO `pontos` VALUES (76, 'E', '1', 37, 12);
INSERT INTO `pontos` VALUES (77, 'D', '0', 38, 15);
INSERT INTO `pontos` VALUES (78, 'V', '3', 38, 14);
INSERT INTO `pontos` VALUES (79, 'V', '3', 39, 4);
INSERT INTO `pontos` VALUES (80, 'D', '0', 39, 18);
INSERT INTO `pontos` VALUES (81, 'E', '1', 40, 1);
INSERT INTO `pontos` VALUES (82, 'E', '1', 40, 2);
INSERT INTO `pontos` VALUES (83, 'V', '3', 41, 5);
INSERT INTO `pontos` VALUES (84, 'D', '0', 41, 6);
INSERT INTO `pontos` VALUES (85, 'E', '1', 42, 10);
INSERT INTO `pontos` VALUES (86, 'E', '1', 42, 8);
INSERT INTO `pontos` VALUES (87, 'E', '1', 43, 17);
INSERT INTO `pontos` VALUES (88, 'E', '1', 43, 9);
INSERT INTO `pontos` VALUES (89, 'D', '0', 44, 16);
INSERT INTO `pontos` VALUES (90, 'V', '3', 44, 3);
INSERT INTO `pontos` VALUES (91, 'D', '0', 45, 13);
INSERT INTO `pontos` VALUES (92, 'V', '3', 45, 7);
INSERT INTO `pontos` VALUES (93, 'V', '3', 46, 12);
INSERT INTO `pontos` VALUES (94, 'D', '0', 46, 14);
INSERT INTO `pontos` VALUES (95, 'E', '1', 47, 18);
INSERT INTO `pontos` VALUES (96, 'E', '1', 47, 5);
INSERT INTO `pontos` VALUES (97, 'D', '0', 48, 6);
INSERT INTO `pontos` VALUES (98, 'V', '3', 48, 1);
INSERT INTO `pontos` VALUES (99, 'V', '3', 49, 2);
INSERT INTO `pontos` VALUES (100, 'D', '0', 49, 11);
INSERT INTO `pontos` VALUES (101, 'V', '3', 50, 8);
INSERT INTO `pontos` VALUES (102, 'D', '0', 50, 15);
INSERT INTO `pontos` VALUES (103, 'D', '0', 51, 17);
INSERT INTO `pontos` VALUES (104, 'V', '3', 51, 16);
INSERT INTO `pontos` VALUES (105, 'E', '1', 52, 9);
INSERT INTO `pontos` VALUES (106, 'E', '1', 52, 13);
INSERT INTO `pontos` VALUES (107, 'D', '0', 53, 7);
INSERT INTO `pontos` VALUES (108, 'V', '3', 53, 4);
INSERT INTO `pontos` VALUES (109, 'V', '3', 54, 3);
INSERT INTO `pontos` VALUES (110, 'D', '0', 54, 10);
INSERT INTO `pontos` VALUES (111, 'V', '3', 55, 5);
INSERT INTO `pontos` VALUES (112, 'D', '0', 55, 2);
INSERT INTO `pontos` VALUES (113, 'E', '1', 56, 10);
INSERT INTO `pontos` VALUES (114, 'E', '1', 56, 17);
INSERT INTO `pontos` VALUES (115, 'V', '3', 57, 16);
INSERT INTO `pontos` VALUES (116, 'D', '0', 57, 8);
INSERT INTO `pontos` VALUES (117, 'E', '1', 58, 15);
INSERT INTO `pontos` VALUES (118, 'E', '1', 58, 18);
INSERT INTO `pontos` VALUES (119, 'D', '0', 59, 14);
INSERT INTO `pontos` VALUES (120, 'V', '3', 59, 6);
INSERT INTO `pontos` VALUES (121, 'D', '0', 60, 11);
INSERT INTO `pontos` VALUES (122, 'V', '3', 60, 7);
INSERT INTO `pontos` VALUES (123, 'V', '3', 61, 1);
INSERT INTO `pontos` VALUES (124, 'D', '0', 61, 12);
INSERT INTO `pontos` VALUES (125, 'V', '3', 62, 4);
INSERT INTO `pontos` VALUES (126, 'D', '0', 62, 9);
INSERT INTO `pontos` VALUES (127, 'V', '3', 63, 13);
INSERT INTO `pontos` VALUES (128, 'D', '0', 63, 3);
INSERT INTO `pontos` VALUES (129, 'E', '1', 64, 10);
INSERT INTO `pontos` VALUES (130, 'E', '1', 64, 16);
INSERT INTO `pontos` VALUES (131, 'V', '3', 65, 12);
INSERT INTO `pontos` VALUES (132, 'D', '0', 65, 6);
INSERT INTO `pontos` VALUES (133, 'V', '3', 66, 9);
INSERT INTO `pontos` VALUES (134, 'D', '0', 66, 15);
INSERT INTO `pontos` VALUES (135, 'D', '0', 67, 7);
INSERT INTO `pontos` VALUES (136, 'V', '3', 67, 1);
INSERT INTO `pontos` VALUES (137, 'V', '3', 68, 18);
INSERT INTO `pontos` VALUES (138, 'D', '0', 68, 11);
INSERT INTO `pontos` VALUES (139, 'V', '3', 69, 17);
INSERT INTO `pontos` VALUES (140, 'D', '0', 69, 13);
INSERT INTO `pontos` VALUES (141, 'V', '3', 70, 2);
INSERT INTO `pontos` VALUES (142, 'D', '0', 70, 14);
INSERT INTO `pontos` VALUES (143, 'D', '0', 71, 3);
INSERT INTO `pontos` VALUES (144, 'V', '3', 71, 4);
INSERT INTO `pontos` VALUES (145, 'D', '0', 72, 8);
INSERT INTO `pontos` VALUES (146, 'V', '3', 72, 5);
INSERT INTO `pontos` VALUES (147, 'V', '3', 73, 5);
INSERT INTO `pontos` VALUES (148, 'D', '0', 73, 9);
INSERT INTO `pontos` VALUES (149, 'D', '0', 74, 12);
INSERT INTO `pontos` VALUES (150, 'V', '3', 74, 7);
INSERT INTO `pontos` VALUES (151, 'D', '0', 75, 6);
INSERT INTO `pontos` VALUES (152, 'V', '3', 75, 2);
INSERT INTO `pontos` VALUES (153, 'V', '3', 76, 1);
INSERT INTO `pontos` VALUES (154, 'D', '0', 76, 8);
INSERT INTO `pontos` VALUES (155, 'V', '3', 77, 11);
INSERT INTO `pontos` VALUES (156, 'D', '0', 77, 16);
INSERT INTO `pontos` VALUES (157, 'V', '3', 78, 14);
INSERT INTO `pontos` VALUES (158, 'D', '0', 78, 18);
INSERT INTO `pontos` VALUES (159, 'E', '1', 79, 13);
INSERT INTO `pontos` VALUES (160, 'E', '1', 79, 10);
INSERT INTO `pontos` VALUES (161, 'V', '3', 80, 4);
INSERT INTO `pontos` VALUES (162, 'D', '0', 80, 17);
INSERT INTO `pontos` VALUES (163, 'D', '0', 81, 15);
INSERT INTO `pontos` VALUES (164, 'V', '3', 81, 3);
INSERT INTO `pontos` VALUES (165, 'V', '3', 82, 7);
INSERT INTO `pontos` VALUES (166, 'D', '0', 82, 14);
INSERT INTO `pontos` VALUES (167, 'E', '1', 83, 8);
INSERT INTO `pontos` VALUES (168, 'E', '1', 83, 11);
INSERT INTO `pontos` VALUES (169, 'E', '1', 84, 9);
INSERT INTO `pontos` VALUES (170, 'E', '1', 84, 1);
INSERT INTO `pontos` VALUES (171, 'V', '3', 85, 2);
INSERT INTO `pontos` VALUES (172, 'D', '0', 85, 12);
INSERT INTO `pontos` VALUES (173, 'D', '0', 86, 18);
INSERT INTO `pontos` VALUES (174, 'V', '3', 86, 6);
INSERT INTO `pontos` VALUES (175, 'E', '1', 87, 16);
INSERT INTO `pontos` VALUES (176, 'E', '1', 87, 13);
INSERT INTO `pontos` VALUES (177, 'V', '3', 88, 10);
INSERT INTO `pontos` VALUES (178, 'D', '0', 88, 4);
INSERT INTO `pontos` VALUES (179, 'V', '3', 89, 3);
INSERT INTO `pontos` VALUES (180, 'D', '0', 89, 5);
INSERT INTO `pontos` VALUES (181, 'V', '3', 90, 17);
INSERT INTO `pontos` VALUES (182, 'D', '0', 90, 15);
INSERT INTO `pontos` VALUES (183, 'E', '1', 91, 14);
INSERT INTO `pontos` VALUES (184, 'E', '1', 91, 9);
INSERT INTO `pontos` VALUES (185, 'V', '3', 92, 15);
INSERT INTO `pontos` VALUES (186, 'D', '0', 92, 10);
INSERT INTO `pontos` VALUES (187, 'E', '1', 93, 12);
INSERT INTO `pontos` VALUES (188, 'E', '1', 93, 8);
INSERT INTO `pontos` VALUES (189, 'V', '3', 94, 1);
INSERT INTO `pontos` VALUES (190, 'D', '0', 94, 17);
INSERT INTO `pontos` VALUES (191, 'E', '1', 95, 5);
INSERT INTO `pontos` VALUES (192, 'E', '1', 95, 13);
INSERT INTO `pontos` VALUES (193, 'D', '0', 96, 11);
INSERT INTO `pontos` VALUES (194, 'V', '3', 96, 3);
INSERT INTO `pontos` VALUES (195, 'V', '3', 97, 2);
INSERT INTO `pontos` VALUES (196, 'D', '0', 97, 18);
INSERT INTO `pontos` VALUES (197, 'D', '0', 98, 6);
INSERT INTO `pontos` VALUES (198, 'V', '3', 98, 7);
INSERT INTO `pontos` VALUES (199, 'V', '3', 99, 4);
INSERT INTO `pontos` VALUES (200, 'D', '0', 99, 16);

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
INSERT INTO `posicoes` VALUES (1, 'Guarda-Redes', 'Guarda Redes');
INSERT INTO `posicoes` VALUES (2, 'Defesa', 'Defesa');
INSERT INTO `posicoes` VALUES (3, 'Médio', 'Médio');
INSERT INTO `posicoes` VALUES (4, 'Avançado', 'Avançado');

SET FOREIGN_KEY_CHECKS = 1;
