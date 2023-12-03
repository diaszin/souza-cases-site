CREATE DATABASE sousacases;

USE sousacases;
CREATE TABLE produto (
	id int NOT NULL AUTO_INCREMENT,
	nome varchar(200) NOT NULL,
	preco decimal(8,2) NOT NULL,
	descricao tinytext NOT NULL,
	PRIMARY  key(id)
);

SELECT * FROM produto;