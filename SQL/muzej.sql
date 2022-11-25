drop database if exists muzej;
create database muzej;
use muzej;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\UcenjePHP\muzej.sql

create table izlozba(
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    vrijemepocetka datetime,
    kustos int,
    sponzor int
);

create table kustos(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11)
);

create table sponzor(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib char(11)
);

create table djelo(
    sifra int not null primary key auto_increment,
    umjetnikime varchar(50),
    umjetnikprezime varchar(50),
    izlozba int not null
);

alter table izlozba add foreign key (kustos) references kustos(sifra);
alter table izlozba add foreign key (sponzor) references sponzor(sifra);

alter table djelo add foreign key(izlozba) references izlozba(sifra);

#unos podataka u tablicu

#1-3
insert into sponzor (sifra,ime,prezime,oib)
values
(null, 'Ivan', 'Domar',null),
(null, 'Ivana', 'Ivanovic',25447318366),
(null,'Dragan','Pavic',null);

#1-2
insert into kustos (sifra,ime,prezime,oib)
values
(null,'Filip','Filipovic',null),
(null,'Ivan','Ivanovic',null);

#1-3
insert into izlozba (sifra, naziv, vrijemepocetka,kustos,sponzor)
values
(null,'Jesen','2022-07-28 19:00', 2,1),
(null,'Zima','2022-07-29 19:00', 1,2),
(null,'Proljece','2022-07-30 20:00',1,3);

#1-3
insert into djelo (sifra,umjetnikime,umjetnikprezime,izlozba)
values
(null,'Filip', 'Matkovic',1),
(null,'Filip', 'Mudri',2),
(null,'Dragan', 'Podunavac',3);