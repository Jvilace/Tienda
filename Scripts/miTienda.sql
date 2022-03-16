CREATE DATABASE IF NOT EXISTS iaw_db;
USE iaw_db;

CREATE TABLE clientes (
dni varchar (10),
nombre varchar(25),
apellidos varchar(25),
email varchar(25),
fechaNacimiento date
);

CREATE TABLE productos (
codigo integer unsigned primary key auto_increment,
descripcion varchar(20),
estarebajas varchar(10),
rebaja varchar(10),
precio varchar(10)
);
