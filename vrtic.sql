drop database if exists vrtic;
create database vrtic;
use vrtic;

# c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\UcenjePHP\vrtic.sql

create table dijete(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    spol varchar (10) not null,
    dob int not null,
    odgojnaskupina int not null
);

create table odgojnaskupina(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    maksimalnopolaznika int not null,
    odgajateljica int not null
);

create table odgajateljica(
    sifra int not null primary key auto_increment,
    ime varchar(50) not null,
    prezime varchar(50) not null,
    oib int,
    iban varchar(20),
    strucnasprema int not null
);

create table strucnasprema(
    sifra int not null primary key auto_increment,
    naziv varchar(50) not null,
    stupanjobrazovanja varchar(50)
);


alter table dijete add foreign key (odgojnaskupina) references odgojnaskupina(sifra);

alter table odgojnaskupina add foreign key (odgajateljica) references odgajateljica(sifra);

alter table odgajateljica add foreign key (strucnasprema) references strucnasprema(sifra);

# unos podataka u tablicu
insert into strucnasprema(sifra, naziv, stupanjobrazovanja)
values 
(null, 'odgojitelj predskolske djece', 'visa ss'),      #1
(null, 'nastavnik predskolskog odgoja','visoka ss');    #2


insert into odgajateljica (sifra,ime,prezime, oib, iban, strucnasprema)
values 
(null, 'Kata','Maric', null, null, 1),
(null, 'Marko','Pavlovic', null, null, 2),
(null, 'Mirjana','Simic', null, null, 2);

insert into odgojnaskupina (sifra, naziv, maksimalnopolaznika, odgajateljica)
values 
(null, 'pretskolsko obrazovanje', 20, 1),   #1
(null, 'tratincica', 20, 3),                #2
(null, 'suncokret', 20, 2);                 #3

insert into dijete (sifra, ime, prezime,spol,dob,odgojnaskupina)
values
(null, 'Josip','Josic', 'M',5,2),
(null, 'Filip','Filipovic', 'M',4,2),
(null, 'Josipa','Josic', 'Z',6,1),
(null, 'Marko','Maric', 'M',6,1),
(null, 'Mirjana','Mikulec', 'Z',2,3),
(null, 'Jelena','Posic', 'Z',3,3);