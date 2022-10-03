create table utilizator (
cod_utilizator int auto_increment primary key,
nume varchar(40),
email varchar(40),
parola varchar(40));

create table produs (
cod_produs int auto_increment primary key,
denumire varchar(40),
pret double(7, 2),
stoc int,
unitate_de_masura varchar(40));