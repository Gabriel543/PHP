create database db_site;

use db_site;

create table tb_tipoComida(
	id_tipoComida int primary key auto_increment,
    nome varchar(150) not null unique
);

create table tb_prato(
	id_prato int primary key auto_increment,
    nomePrato varchar(150) not null,
    descricaoPrato varchar(150) not null,
    precoP float not null,
    precoM float not null,
    precoG float not null,
    tipoComida_id int not null,
    constraint fk_tipoComida foreign key(tipoComida_id) references tb_tipoComida(id_tipoComida)
);


create table tb_login(
	id_login int primary key auto_increment,
    email varchar(150) not null,
    nomeLogin varchar(30) not null,
    senha varchar(12) not null,
    nomeCompleto varchar(150)
);


