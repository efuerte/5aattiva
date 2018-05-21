-- Configurar acesso ao BD em \App\App.php

-- Criação da base de dados e tabela

create database 5aattiva; 

USE `5aattiva`;

CREATE TABLE `5aattiva`.produto (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(200) NOT NULL,
  preco double(10, 2) DEFAULT NULL,
  quantidade int(11) DEFAULT NULL,
  descricao varchar(600) DEFAULT NULL,
  dataCadastro datetime DEFAULT CURRENT_TIMESTAMP,
  dataInicio date DEFAULT NULL,
  dataFim date DEFAULT NULL,
  idstatus int(11) DEFAULT NULL,
  idsituacao int(11) DEFAULT NULL,
  PRIMARY KEY (id),
  INDEX idstatus (idstatus),
  CONSTRAINT produto_ibfk_1 FOREIGN KEY (idstatus)
  REFERENCES `5aattiva`.status (id) ON DELETE RESTRICT ON UPDATE RESTRICT
)
ENGINE = INNODB
AUTO_INCREMENT = 21
AVG_ROW_LENGTH = 2340
CHARACTER SET latin1
COLLATE latin1_swedish_ci;


SET NAMES 'utf8';

CREATE TABLE `5aattiva`.status (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(30) NOT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 5
AVG_ROW_LENGTH = 4096
CHARACTER SET latin1
COLLATE latin1_swedish_ci;

INSERT INTO `5aattiva`.status(id, nome) VALUES
(1, 'Pendente');
INSERT INTO `5aattiva`.status(id, nome) VALUES
(2, 'Em desenvolvimento');
INSERT INTO `5aattiva`.status(id, nome) VALUES
(3, 'Em Teste');
INSERT INTO `5aattiva`.status(id, nome) VALUES
(4, 'Concluido');


INSERT INTO `5aattiva`.produto(id, nome, preco, quantidade, descricao, dataCadastro, dataInicio, dataFim, idstatus, idsituacao) VALUES
(12, 'asas', NULL, NULL, 'asas', '2018-05-20 21:19:23', '2017-10-16', '0000-00-00', 2, 2);
INSERT INTO `5aattiva`.produto(id, nome, preco, quantidade, descricao, dataCadastro, dataInicio, dataFim, idstatus, idsituacao) VALUES
(13, 'vsvs', NULL, NULL, 'svsv', '2018-05-20 00:35:47', '2017-10-15', '2018-10-28', 3, 2);
INSERT INTO `5aattiva`.produto(id, nome, preco, quantidade, descricao, dataCadastro, dataInicio, dataFim, idstatus, idsituacao) VALUES
(14, 'kjkj', NULL, NULL, 'askjkj', '2018-05-19 23:30:50', '2017-10-15', '2018-11-12', 3, 3);
INSERT INTO `5aattiva`.produto(id, nome, preco, quantidade, descricao, dataCadastro, dataInicio, dataFim, idstatus, idsituacao) VALUES
(15, 'zcxc', NULL, NULL, 'qwqweq', '2018-05-20 00:16:38', '2017-10-15', '0000-00-00', 1, 2);
INSERT INTO `5aattiva`.produto(id, nome, preco, quantidade, descricao, dataCadastro, dataInicio, dataFim, idstatus, idsituacao) VALUES
(16, 'aaaaaaaaaaaa', NULL, NULL, 'aa', '2018-05-20 21:59:42', '2017-10-15', '2017-12-15', 4, 1);
INSERT INTO `5aattiva`.produto(id, nome, preco, quantidade, descricao, dataCadastro, dataInicio, dataFim, idstatus, idsituacao) VALUES
(17, 'abc', NULL, NULL, 'abc', '2018-05-20 21:58:26', '2017-10-16', '0000-00-00', 1, 2);
INSERT INTO `5aattiva`.produto(id, nome, preco, quantidade, descricao, dataCadastro, dataInicio, dataFim, idstatus, idsituacao) VALUES
(18, 'bbbb', NULL, NULL, 'bbbbb', '2018-05-20 22:17:53', '2017-10-16', '0000-00-00', 4, 1);






