create database tabelaUsuario;
use tabelaUsuario;

create table tb1(
idUsuario int primary key auto_increment,
nomeUsuario varchar(40),
emailUsuario varchar(40),
senhaUsuario varchar(40)
);

insert into tb1 values(null,'Iris Pereira de Souza','iris.Pe@gmail.com','iripeso');
insert into tb1 values(null,'Vinicius Luis Schwar ','Vini.sch@gmail.com','vini12');