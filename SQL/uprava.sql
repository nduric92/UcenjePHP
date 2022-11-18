drop database if exists uprava;
create database uprava;
use uprava;

# c:\xampp\mysql\bin\mysql -uroot < C:\Users\djuki\Documents\EdunovaPP26\SQL\uprava.sql

create table zupanija(
    sifra int not null primary key auto_increment,
    naziv varchar(50),
    zupan varchar(50),
    brojopcina int,
    brojgradova int
);

create table opcina(
    sifra int not null primary key auto_increment,
    zupanija int,
    naziv varchar(50),
    brojstanovnika int
);

alter table opcina add foreign key (zupanija) references zupanija(sifra);