create schema condominio default character set utf8;

use condominio;

create table tipo (
	id int(11) not null auto_increment primary key,
    tipo varchar(60)
);

create table condomino (
	id int(11) not null auto_increment primary key,
    nome varchar(100),
    apartamento int(4),
    bloco varchar(4),
    id_tipo int(11),
    constraint fk_condominos_tipo foreign key (id_tipo) references tipo(id)
);

create table salaoDeFestas (
	id int(11) not null auto_increment primary key,
    dataEHora DATETIME,
    id_condomino INT(11),
     constraint fk_salaoDeFestas_condomino foreign key (id_condomino) references condomino(id)
);

create table ocorrencias (
	id int(11) not null auto_increment primary key,
	dataEHora DATETIME,
    descricao varchar(200),
    id_condomino INT(11),
     constraint fk_ocorrencias_condomino foreign key (id_condomino) references condomino(id)
);

create table funcionario (
	id int(11) not null auto_increment primary key,
	nome varchar(100),
    id_tipo int(11),
    constraint fk_funcionario_tipo foreign key (id_tipo) references tipo(id)
);

create tablecondomino achadosEPerdidos (
	id int(11) not null auto_increment primary key,
    objeto varchar(50),
    id_funcionario int(11),
    constraint fk_achadosEPerdidos_funcionario foreign key (id_funcionario) references funcionario(id)
);
use condominio;
select * from condomino;