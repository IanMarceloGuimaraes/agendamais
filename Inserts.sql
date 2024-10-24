-- Inserindo usuários
INSERT INTO usuario (usua_nome, usua_email, usua_senha) 
VALUES 
('Alice Santos', 'alice@gmail.com', 'senha123'),
('Bruno Martins', 'bruno@gmail.com', 'senha456'),
('Carla Silva', 'carla@gmail.com', 'senha789');

-- Inserindo professores
INSERT INTO professor (prof_nome, prof_email, prof_senha) 
VALUES 
('Professor João', 'joao@gmail.com', 'prof123'),
('Professor Maria', 'maria@gmail.com', 'prof456');

-- Inserindo cursos
INSERT INTO curso (curs_nome) 
VALUES 
('Engenharia de Software'),
('Matemática'),
('História');

-- Inserindo matérias
INSERT INTO materia (mate_nome, prof_id, curs_id) 
VALUES 
('Programação', 1, 1), 
('Cálculo I', 2, 2), 
('História Geral', 2, 3);

-- Inserindo inscrições
INSERT INTO inscricao (usua_id, mate_id, insc_dt) 
VALUES 
(1, 1, '2024-10-20'), 
(2, 2, '2024-10-21'), 
(3, 3, '2024-10-22');
