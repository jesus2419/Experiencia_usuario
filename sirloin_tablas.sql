create database Sirloin;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255),
    apellido VARCHAR(255),
    email VARCHAR(255),
    usuario VARCHAR(50),
    pass VARCHAR(25),
    fecha_nac DATE,
    genero VARCHAR(255),
    imagen BLOB
);

