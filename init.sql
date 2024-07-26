-- Exemplo de inicialização do banco de dados
CREATE TABLE test (
    id SERIAL PRIMARY KEY,
    name VARCHAR(100) NOT NULL
);

INSERT INTO test (name) VALUES ('Exemplo de Nome');
