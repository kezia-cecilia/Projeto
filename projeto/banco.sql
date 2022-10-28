create database sistema;

use sistema;

create table cliente(
    cod_cli int primary key auto_increment,
    nome varchar(50),
    cpf varchar(11),
    email varchar(50),
    telefone varchar(10),
    datnasc date
);

insert into cliente values(null, 'Ayrton Barros', '02132145621','ayrtonbarrinhos@gmail.com','219999498','1997-03-02');


select * from cliente;


create table reservas(
     cod_reser int primary key auto_increment
     nome varchar(50),
     cpf varchar(11),
     email varchar(50),
     telefone varchar(10),
     lugar varchar(50),
     dia date
     
);

insert into cliente values(null, 'Ayrton Junior', '02132145621','ayrtonbarrinhos@gmail.com','219999498','Angra dos reis','2023-03-02');

