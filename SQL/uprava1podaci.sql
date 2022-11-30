show tables;

select * from zupan;

insert into zupan (sifra,ime,prezime)
values 
(null,'Bozo','Galic'),
(null,'Ivan','Brekalo'),
(null,'Filip','Bradaric');

select * from zupanija;

insert into zupanija (sifra,naziv,zupan)
values
(null,'Osijecko-baranjska',1),
(null,'Sibensko-kninska',3),
(null,'Vukovarsko-srijemska',2);

select * from opcina;

insert into opcina (sifra,naziv,zupanija)
values
(null,'Vukovar',3),
(null,'Sibenik',2),
(null,'Osijek',1);

select * from mjesto;

insert into mjesto (sifra,naziv,opcina)
values
(null,'Sibenik',2),
(null,'Sotin',1),
(null,'Osijek',3);

#sa zadnjeg predavanja i join funkcije

#ime i prezime zupana s tim da znamo ime mjesta zupanije 'Osijecko-baranjska - Osijek'

select d.ime,d.prezime 
from mjesto a
inner join opcina b on a.opcina = b.sifra 
inner join zupanija c on b.zupanija =c.sifra 
inner join zupan d on c.zupan = d.sifra 
where a.naziv ='Osijek';

#verzija 2

select concat(d.ime,' ',d.prezime) as zupan,
c.naziv as zupanija
from mjesto a
inner join opcina b on a.opcina = b.sifra 
inner join zupanija c on b.zupanija =c.sifra 
inner join zupan d on c.zupan = d.sifra 
where a.naziv ='Osijek';