drop database if exists proizvodnja;
create database proizvodnja;
use proizvodnja;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\UcenjePHP\SQL\Proizvodnja\proizvodnja.sql

create table radnik(
    id int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char (11),
    brojugovora varchar(50),
    iban varchar(50)
);

create table smjena(
    id int not null primary key auto_increment,
    naziv varchar(50),
    menadzment int
);

create table radnik_smjena(
    id int not null primary key auto_increment,
    radnik int,
    smjena int
);

create table radnik_smjena_proizvod(
    radnik_smjena int,
    proizvod int,
    kolicina int
);

create table proizvod(
    id int not null primary key auto_increment,
    naziv varchar(50) not null,
    boja varchar(50),
    cijena decimal(18,2)
);


#poveznice izmedju tablica

alter table radnik_smjena add foreign key (radnik) references radnik(id);
alter table radnik_smjena add foreign key (smjena) references smjena(id);
