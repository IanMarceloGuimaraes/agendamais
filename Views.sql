-- Usuário
CREATE OR REPLACE VIEW VW_Usuario AS
SELECT usua_id, usua_nome, usua_email, usua_senha, usua_dt_registro
FROM usuario;

-- Professor
CREATE OR REPLACE VIEW VW_Professor AS
SELECT prof_id, prof_nome, prof_email, prof_senha, prof_dt_registro
FROM professor;

-- Curso
CREATE OR REPLACE VIEW VW_Curso AS
SELECT curs_id, curs_nome
FROM curso;

-- Matéria
CREATE OR REPLACE VIEW VW_Materia AS
SELECT mate_id, mate_nome, prof_id, curs_id
FROM materia;

-- Inscrição
CREATE OR REPLACE VIEW VW_Inscricao AS
SELECT insc_id, usua_id, mate_id, insc_dt
FROM inscricao;

SELECT * FROM VW_Usuario;
SELECT * FROM VW_Professor;
SELECT * FROM VW_Curso;
SELECT * FROM VW_Materia;
SELECT * FROM VW_Inscricao;
