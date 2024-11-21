CREATE DATABASE agendamais;
USE agendamais;

CREATE TABLE usuario(
	usua_id INT NOT NULL AUTO_INCREMENT,
    usua_nome VARCHAR(150) NOT NULL,
    usua_email VARCHAR(100) NOT NULL,
    usua_senha VARCHAR(50) NOT NULL,
    usua_telefone VARCHAR(11)
);

CREATE TABLE materias(
	mate_id INT NOT NULL AUTO_INCREMENT,
    mate_nome VARCHAR(50) NOT NULL,
    mate_sigla VARCHAR(4) AUTO_INCREMENT,
    mate_professor
);