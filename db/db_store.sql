CREATE DATABASE db_store;

--selecionar o banco --
USE db_store;

CREATE TABLE tb_category(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

CREATE TABLE tb_product(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL,
    photo VARCHAR(255) NOT NULL,
    valor FLOAT(5,2) NOT NULL,
    categoria_id INT(11) NOT NULL,
    quantity INT(5) NOT NULL,
    created_at DATETIME NOT NULL
);



INSERT INTO tb_category(name, description)
VALUES
('informática', 'Produtos de informática'),
('escritório', 'caderno, caneta'),
('eletrônicos', 'tv, som');


INSERT INTO tb_product(name, description, photo, valor, categoria_id, quantity,created_at)
VALUES
('computador', 'computador pessoal','C:\Users\Lenovo\OneDrive\Área de Trabalho\Beacademy\PHP\bancoDeDados\projeto-final\images\computer.jpg',300.10,1,1000,'2022-06-14 21:52:00'),
('grampeador', 'grampeador para escritorio','C:\Users\Lenovo\OneDrive\Área de Trabalho\Beacademy\PHP\bancoDeDados\projeto-final\images\escritorio.jpg',10.00,2,500,'2022-06-14 21:52:00'),
('televisao', 'televisao para familia','C:\Users\Lenovo\OneDrive\Área de Trabalho\Beacademy\PHP\bancoDeDados\projeto-final\images\tv.jpg',500.00,3,2000,'2022-06-14 21:52:00');


