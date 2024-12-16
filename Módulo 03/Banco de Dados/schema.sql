CREATE DATABASE eletronica_XYZ;

use eletronica_XYZ;

create TABLE clientes (
    cpf VARCHAR(11) PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    tefefone VARCHAR(12) NOT NULL,
    endereço varchar(45) NOT NULL
);

create TABLE produtos (
    ID INT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    valor FLOAT NOT NULL,
    quantidade INT NOT NULL,
    ID_fornecedor INT PRIMARY KEY

);

CREATE TABLE vendas (
    ID INT PRIMARY KEY,
    data_venda DATE NOT NULL,
    forma_pagamento VARCHAR(45) NOT NULL,
    cpf_cliente VARCHAR(11) PRIMARY KEY
);

CREATE TABLE fornecedores (
    ID INT PRIMARY KEY,
    cnpj VARCHAR(14) PRIMARY KEY,
    razao_social VARCHAR(45) NOT NULL,
    telefone VARCHAR(45) NOT NULL
);

INSERT INTO fornecedores (ID, cnpj, razao_social, telefone) VALUES (0587,'45879654896578', 'Eletronica & CIA', '086 99550 8098');
INSERT INTO fornecedores (ID, cnpj, razao_social, telefone) VALUES (0652,'78965485369874', 'Hidroeletrica LTDA', '086 99450 7858');
INSERT INTO fornecedores (ID, cnpj, razao_social, telefone) VALUES (0456,'74589658745698', 'Energia company', '086 99874 6598');

ALTER TABLE produtos add ID_fornecedor INT ;

ALTER TABLE produtos ADD CONSTRAINT fk_id_fornecedor FOREIGN KEY (id_fornecedor) REFERENCES fornecedor (ID);

INSERT INTO produtos (ID, nome, valor, quantidade, ID_fornecedor) values (001, 'Nobreak', 599, 01, 0587);
INSERT INTO produtos (ID, nome, valor, quantidade, ID_fornecedor) values (002, 'SSD 240GB', 350, 02, 0587);
INSERT INTO produtos (ID, nome, valor, quantidade, ID_fornecedor) values (003, 'Monitor 24 polegadas', 689, 01, 0587);
INSERT INTO produtos (ID, nome, valor, quantidade, ID_fornecedor) values (004, 'Estabilizador 500VA', 459, 03, 0652);
INSERT INTO produtos (ID, nome, valor, quantidade, ID_fornecedor) values (005, 'Cabo RJ45', 150, 04, 0456);


UPDATE produto SET valor = 1200 WHERE id = 004;

DELETE FROM produtos WHERE nome = 'Cabo RJ45';

ALTER TABLE vendas ADD cpf_cliente VARCHAR(11);

alter table vendas ADD CONSTRAINT fk_cpf_cliente FOREIGN KEY (cpf_cliente) REFERENCES clientes (cpf);


INSERT INTO vendas (ID, data_venda, forma_pagamento) values (001, '2024-11-04', 'PIX', '06937869305');





