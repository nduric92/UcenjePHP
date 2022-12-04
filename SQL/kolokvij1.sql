drop database if exists kolokvij1;
create database kolokvij1;
use kolokvij1;

#c:\xampp\mysql\bin\mysql -uroot --default_character_set=utf8 < C:\Users\djuki\Documents\GitHub\UcenjePHP\SQL\kolokvij1.sql

create table sestra(
    sifra int not null primary key auto_increment,
    introvertno bit,
    haljina varchar(31)not null,
    maraka decimal(16,6),
    hlace varchar(46)not null,
    narukvica int not null
);

create table zena(
    sifra int not null primary key auto_increment,
    treciputa datetime,
    hlace varchar(46),
    kratkamajica varchar(31) not null,
    jmbag char(11) not null,
    bojaociju varchar(39) not null,
    haljina varchar(44),
    sestra int not null
);

create table punac(
    sifra int not null primary key auto_increment,
    ogrlica int,
    gustoca decimal(14,9),
    hlace varchar(41) not null
);

create table cura(
    sifra int not null primary key auto_increment,
    novcica decimal(16,5) not null,
    gustoca decimal(18,6) not null,
    lipa decimal (13,10),
    ogrlica int not null,
    bojakose varchar(38),
    suknja varchar(36),
    punac int
);

create table svekar(
    sifra int not null primary key auto_increment,
    bojaociju varchar(40) not null,
    prstena int,
    dukserica varchar(40),
    lipa decimal(13,8),
    eura decimal(12,7),
    majica varchar(35)
);

create table sestra_svekar(
    sifra int not null primary key auto_increment,
    sestra int not null,
    svekar int not null
);

create table muskarac(
    sifra int not null primary key auto_increment,
    bojaociju varchar(50) not null,
    hlace varchar(30),
    modelnaocala varchar(43),
    maraka decimal(14,5) not null,
    zena int
);

create table mladic(
    sifra int not null primary key auto_increment,
    suknja varchar(50) not null,
    kuna decimal(16,8) not null,
    drugiputa datetime,
    asocijalno bit,
    ekstroventno bit not null,
    dukserica varchar(48) not null,
    muskarac int
);

#veze izmedju tablica

alter table sestra_svekar add foreign key(sestra) references sestra (sifra);
alter table sestra_svekar add foreign key (svekar) references svekar(sifra);

alter table zena add foreign key (sestra) references sestra(sifra);

alter table muskarac add foreign key(zena) references zena(sifra);

alter table mladic add foreign key(muskarac) references muskarac(sifra);

alter table cura add foreign key (punac) references punac(sifra);

#inserti u tablice
#1
insert into sestra (sifra,haljina,hlace,narukvica)
values 
(null,'dugacrna','teksas',25),
(null,'dugacrvena','jackass',15),
(null,'kratkacrna','slimfit',20);

insert into svekar (sifra,bojaociju)
values 
(null,'plava'),
(null,'crna'),
(null,'zelena');

insert into sestra_svekar (sifra,sestra,svekar)
values 
(null,1,2),
(null,2,3),
(null,3,1);

insert into zena (sifra,kratkamajica,jmbag,bojaociju,sestra)
values
(null,'Zelena majica',12547996577,'crna',1),
(null,'Crni top',12547996577,'plava',3),
(null,'Plava puma',12547996577,'smedja',2);

insert into muskarac (sifra,bojaociju,maraka,zena)
values
(null,'plava',13.48,3),
(null,'zelena',10.68,2),
(null,'crna',11.50,1);

#2
insert into cura (sifra,novcica,gustoca,ogrlica)
values (null,15.13,15.88,5),
(null,15.13,15.88,5);

update cura set gustoca =15.77 where sifra <=2;

#3
insert into mladic (sifra, suknja,kuna,ekstroventno,dukserica)
values
(null,'sunset',16.43,false,'nike'),
(null,'sunset',12.49,true,'puma'),
(null,'sunset',10.33,true,'adidas'),
(null,'sunset',17.99,false,'joma');

delete from mladic where kuna > 15.78;

#4
select kratkamajica from zena
where hlace like '%ana%';

#5 borba s uvjetima
select f.dukserica ,a.asocijalno ,b.hlace
from mladic a
inner join muskarac b on a.muskarac = b.sifra
inner join zena c on b.zena = c.sifra 
inner join sestra d on c.sestra =d.sifra 
inner join sestra_svekar e on d.sifra = e.sestra 
inner join svekar f on f.sifra =e.svekar ;

#6
select a.haljina ,a.maraka 
from sestra a
inner join sestra_svekar b 
on a.sifra = b.sestra
where b.sestra = null;