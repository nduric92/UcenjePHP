drop database if exists edunovapp26;
create database edunovapp26;
use edunovapp26;

# c:\xampp\mysql\bin\mysql -uroot < C:\Users\djuki\Documents\GitHub\UcenjePHP\SQL\edunovapp26.sql



create table smjer(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    cijena decimal(18,2),
    upisnina decimal(18,2),
    trajanje int not null,
    certificiran boolean not null
);

create table grupa(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    maksimalnopolaznika int not null,
    datumpocetka datetime,
    smjer int not null,
    predavac int
);

create table osoba(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    email varchar(50) not null,
    oib char(11)
);

create table polaznik(
    sifra int not null primary key auto_increment,
    brojugovora varchar(20),
    osoba int not null
);

create table predavac(
    sifra int not null primary key auto_increment,
    iban varchar(50),
    osoba int not null
);

create table clan(
    grupa int not null,
    polaznik int not null
);


alter table grupa add foreign key (smjer) references smjer(sifra);
alter table grupa add foreign key (predavac) references predavac(sifra);

alter table clan add foreign key (grupa) references grupa(sifra);
alter table clan add foreign key (polaznik) references polaznik(sifra);

alter table polaznik add foreign key (osoba) references osoba(sifra);

alter table predavac add foreign key (osoba) references osoba(sifra);

#prva verzija
insert into smjer 
values(null,'PHP programiranje', 5999.99,500,130,false);

#druga verzija

insert into smjer(naziv,trajanje,certificiran)
values ('Java programiranje',130,true);

#best practice
insert into smjer(sifra,naziv,cijena,upisnina,trajanje,certificiran)
values (null, 'serviser', null, null, 180,false);
