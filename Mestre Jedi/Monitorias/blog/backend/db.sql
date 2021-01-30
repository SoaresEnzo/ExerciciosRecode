CREATE DATABASE blog;

CREATE TABLE blog.postagens (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(80),
    descricao TEXT   
)