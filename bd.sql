CREATE DATABASE login;
USE login;

CREATE TABLE usuario
(
    usuario VARCHAR(20) NOT NULL,
    password VARCHAR(20) NOT NULL
);

INSERT INTO usuario (usuario, password) VALUES ('root', '1234');

CREATE DATABASE reservar;
USE reservar;

CREATE TABLE laboratorio
(
    N_lab VARCHAR(2) NOT NULL AUTO_INCREMENT,
    fecha_lab DATE NOT NULL,
    startime_lab TIME NOT NULL,
    endtime_lab TIME NOT NULL,
    profesor_lab TEXT NOT NULL
);