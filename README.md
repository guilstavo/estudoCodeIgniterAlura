# estudoCodeIgniterAlura
Curso de CodeIgniter do site www.alura.com.br

USE mercado;
CREATE table usuarios (id integer AUTO_INCREMENT PRIMARY KEY, nome varchar(255), email varchar(255), senha varchar(255));
CREATE TABLE produtos (id integer AUTO_INCREMENT PRIMARY KEY, nome varchar(255), descricao text, preco decimal(10,2), usuario_id integer);
INSERT INTO usuarios VALUES (1, 'Guilherme', 'guilherme.silveira@alura.com.br', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO produtos VALUES (1, 'Bola de Futebol', 'Bola de futebol Assinada pelo Zico', 300, 1);
INSERT INTO produtos VALUES (2, 'HD externo usado', 'Marca Mega-HD 300 teras, comparado em 1997', 400, 1);
INSERT INTO produtos values(3, 'Garrafa de 2 litros', 'De uma bebida qualquer', 10.50, 1);