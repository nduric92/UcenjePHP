drop database if exists hijerarhija;
create database hijerarhija;
use hijerarhija;

create table zaposlenik(
    sifra int not null primary key auto_increment,
    ime varchar(50),
    prezime varchar(50),
    placa decimal(18,2),
    nadredjeni varchar(50),
    zaposlenik int
);

alter table zaposlenik add foreign key (zaposlenik) references zaposlenik(sifra);