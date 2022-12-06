drop database if exists kolokvij3;
create database kolokvij3;
use kolokvij3;

#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\UcenjePHP\SQL\kolokvij3.sql

create table svekar(
    sifra int not null primary key auto_increment,
    novcica decimal (16,8) not null,
    suknja varchar(44) not null,
    bojakose varchar (36),
    prstena int,
    narukvica int not null,
    cura int not null
);

create table cura(
    sifra int not null primary key auto_increment,
    dukserica varchar (49),
    maraka decimal(13,7),
    drugiputa datetime,
    majica varchar(49),
    novcica decimal(15,8),
    ogrlica int not null
);

create table ostavljena (
    sifra int not null primary key auto_increment,
    kuna decimal(17,5),
    lipa decimal(15,6),
    majica varchar(36),
    modelnaocala varchar(31) not null,
    prijatelj int
);

create table prijatelj(
    sifra int not null primary key auto_increment,
    kuna decimal(16,10),
    haljina varchar(37),
    lipa decimal(13,10),
    dukserica varchar(31),
    indeferentno bit not null
);

create table prijatelj_brat(
    sifra int not null primary key auto_increment,
    prijatelj int not null,
    brat int not null
);

create table brat(
    sifra int not null primary key auto_increment,
    jmbag char(11),
    ogrlica int not null,
    ekstroventno bit not null
);

create table snasa(
    sifra int not null primary key auto_increment,
    introvertno bit,
    kuna decimal(15,6) not null,
    eura decimal(12,9) not null,
    treciputa datetime,
    ostavljena int not null
);

create table punica(
    sifra int not null primary key auto_increment,
    asocijalno bit,
    kratkamajica varchar(44),
    kuna decimal(13,8) not null,
    vesta varchar(32) not null,
    snasa int
);

alter table svekar add foreign key (cura) references cura (sifra);

alter table prijatelj_brat add foreign key(brat) references brat(sifra);
alter table prijatelj_brat add foreign key(prijatelj) references prijatelj(sifra);

alter table ostavljena add foreign key (prijatelj) references prijatelj (sifra);

alter table snasa add foreign key (ostavljena) references ostavljena(sifra);

alter table punica add foreign key (snasa) references snasa(sifra);


insert into brat (ogrlica,ekstroventno)
values
(1,true),
(2,false),
(3,true);

insert into prijatelj (indeferentno)
values
(true),
(true),
(false);

insert into prijatelj_brat (prijatelj,brat)
values
(1,1),
(2,1),
(3,2);

insert into ostavljena (modelnaocala)
values
('prada'),
('police'),
('gucci');

insert into snasa (kuna,eura,ostavljena)
values
(255.49,45.87,2),
(563.30,65.66,3),
(99.99,50.14,1);

update svekar set suknja='osijek';

delete from punica where kratkamajica = 'AB';

select majica  from ostavljena 
where lipa != 9 
or lipa !=10 
or lipa !=20 
or lipa !=30 
or lipa !=35;


select a.ekstroventno , f.vesta , e.kuna 
from brat a
inner join prijatelj_brat b on a.sifra = b.brat 
inner join prijatelj c on b.prijatelj = c.sifra 
inner join ostavljena d on c.sifra = d.prijatelj 
inner join snasa e on d.sifra = e.ostavljena 
inner join punica f on e.sifra = f.snasa
where d.kuna != 91 and c.haljina like '%ba%'
order by e.kuna desc;

select a.haljina ,a.lipa 
from prijatelj a
inner join prijatelj_brat b on a.sifra = b.prijatelj
where b.prijatelj is null;
