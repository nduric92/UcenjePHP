drop database if exists proizvodnja;
create database proizvodnja;
use proizvodnja;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\UcenjePHP\SQL\Proizvodnja\proizvodnja.sql

create table osoba(
    id int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11)
);

create table radnik(
    id int not null primary key auto_increment,
    brojugovora varchar(50),
    iban varchar(50),
    osoba int not null
);

create table menadzment(
    id int not null primary key auto_increment,
    brojugovora varchar(50),
    iban varchar(50),
    osoba int,
    nadredjeni int
);

create table smjena(
    id int not null primary key auto_increment,
    naziv varchar(50),
    menadzment int
);

create table radnik_smjena(
    radnik int,
    smjena int
);

create table proizvod(
    id int not null primary key auto_increment,
    naziv varchar(50) not null,
    boja varchar(50),
    cijena decimal(18,2),
    smjena int
);


#poveznice izmedju tablica

alter table radnik add foreign key (osoba) references osoba(id);

alter table menadzment add foreign key(osoba) references osoba(id);
alter table menadzment add foreign key (nadredjeni)references menadzment(id);

alter table radnik_smjena add foreign key (radnik) references radnik(id);
alter table radnik_smjena add foreign key (smjena) references smjena(id);

alter table smjena add foreign key (menadzment) references menadzment(id);

alter table proizvod add foreign key (smjena) references smjena(id);

