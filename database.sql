create database pokedex;
use pokedex;

create table Usuario(
nombre varchar(30),
pass varchar(30),
primary key(nombre)
);

create table Pokemon(
id int,
nombre varchar(30),
descripcion varchar(500),
tipo varchar (30),
imagen longblob,
primary key(id)
);


INSERT INTO Usuario (nombre,pass) 
		VALUES('temple','1234');