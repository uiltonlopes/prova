CREATE TABLE ENDERECO 
(
    ID SERIAL PRIMARY KEY,
    LOGRADOURO VARCHAR(50) NOT NULL,
    NUMERO INT NOT NULL,
    COMPLEMENTO VARCHAR(30),
    BAIRRO VARCHAR(30) NOT NULL,
    CIDADE VARCHAR(30) NOT NULL,
    ESTADO VARCHAR(30) NOT NULL,
    CEP INT NOT NULL,
    UNIQUE(LOGRADOURO, NUMERO, COMPLEMENTO,CEP)
);