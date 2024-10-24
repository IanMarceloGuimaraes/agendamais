CREATE DATABASE agendamais;
USE agendamais;

CREATE TABLE usuario (
    usua_id INT AUTO_INCREMENT PRIMARY KEY,
    usua_nome VARCHAR(100) NOT NULL,
    usua_email VARCHAR(100) NOT NULL UNIQUE,
    usua_senha VARCHAR(255) NOT NULL,
    usua_dt_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE professor (
    prof_id INT AUTO_INCREMENT PRIMARY KEY,
    prof_nome VARCHAR(100) NOT NULL,
    prof_email VARCHAR(100) NOT NULL UNIQUE,
    prof_senha VARCHAR(20) NOT NULL,
    prof_dt_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE curso (
    curs_id INT AUTO_INCREMENT PRIMARY KEY,
    curs_nome VARCHAR(100) NOT NULL
);

CREATE TABLE materia (
    mate_id INT AUTO_INCREMENT PRIMARY KEY,
    mate_nome VARCHAR(100) NOT NULL,
    prof_id INT,
    curs_id INT,
    FOREIGN KEY (prof_id) REFERENCES professor(prof_id),
    FOREIGN KEY (curs_id) REFERENCES curso(curs_id)
);

CREATE TABLE inscricao (
    insc_id INT AUTO_INCREMENT PRIMARY KEY,
    usua_id INT,
    mate_id INT,
    insc_dt DATE NOT NULL,
    FOREIGN KEY (usua_id) REFERENCES usuario(usua_id),
    FOREIGN KEY (mate_id) REFERENCES materia(mate_id)
);
