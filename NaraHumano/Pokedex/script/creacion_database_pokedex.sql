CREATE DATABASE pokedex;
USE pokedex;
CREATE TABLE tipo
(
    idTipo int auto_increment primary key,
    nombre varchar(100) not null,
    descripcion varchar(150) not null
);

CREATE TABLE pokemon
(
    idPokemon int auto_increment primary key,
    numero int not null,
    nombre varchar(100) not null,
    descripcion text not null,
    tipo int not null,
    imagen varchar(150) not null,
    FOREIGN KEY (tipo) REFERENCES tipo(idTipo)
);
drop table pokemon;
CREATE TABLE usuario
(
    idUsuario int auto_increment primary key,
    nickname varchar(100) not null,
    email varchar(150) not null,
    password varchar(100) not null,
    rol boolean not null
);
drop table tipo;
INSERT INTO tipo
(
    nombre,
    descripcion
)
VALUES
    ('planta','tipo planta'),
    ('fuego','tipo fuego'),
    ('agua','tipo agua');

INSERT INTO pokemon
(
    numero,
    nombre,
    descripcion,
    tipo,
    imagen
)
VALUES
    (
        1,
        'bulbasaur',
        'Una rara semilla fue plantada en su espalda al nacer. La planta brota y crece con este POKÉMON',
        1,
        '1.jpg'
    );
drop table usuario;
INSERT INTO usuario
(
    nickname,
    email,
    password,
    rol
)
VALUES
    ('admin','unmaildejemplo@dominio.com','123456', true);
