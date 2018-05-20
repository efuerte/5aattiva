create database `5aattiva`; 

USE `5aattiva`;

CREATE TABLE `5aattiva`.produto (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(200) NOT NULL,
  preco double(10, 2) DEFAULT NULL,
  quantidade int(11) DEFAULT NULL,
  descricao text DEFAULT NULL,
  dataCadastro datetime DEFAULT CURRENT_TIMESTAMP,
  dataInicio date DEFAULT NULL,
  dataFim date DEFAULT NULL,
  idstatus int(11) DEFAULT NULL,
  idsituacao int(11) DEFAULT NULL,
  PRIMARY KEY (id)
)
ENGINE = INNODB
AUTO_INCREMENT = 17
AVG_ROW_LENGTH = 2730
CHARACTER SET latin1
COLLATE latin1_swedish_ci;