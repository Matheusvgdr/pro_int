create database db_PokeWorld;
use db_PokeWorld;

create table tb_cadastro(
idCadastro int primary key auto_increment not null,
nome varchar(255) not null,
cidade varchar(255) not null,
idade varchar(255) not null,
pokemon1 varchar(255) not null,
tipo1 varchar(255) not null,
pokemon2 varchar(255) not null,
tipo2 varchar(255) not null,
pokemon3 varchar(255) not null,
tipo3 varchar(255) not null
 );

create table tb_usuarios(
idUsuario int primary key auto_increment not null,
nome varchar(255),
senha varchar(255)
 );
 
select * from tb_cadastro;
select * from tb_usuarios;

