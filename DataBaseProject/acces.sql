create database utilizatori;
use utilizatori;
create table accesptlume ( nume varchar(20),
                           parola varchar(40),
                           primary key (nume)
);
insert into accesptlume values ( 'nume1',
                                 'parola1' );
insert into accesptlume values ( 'nume2',
                                 sha1('parola2') );
