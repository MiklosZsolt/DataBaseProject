
CREATE TABLE Zboruri (
                         NRZ INT (10) NOT NULL ,
                         DE_LA varchar (20) NOT NULL ,
                         LA varchar (20) NOT NULL ,
                         DISTANTA INT NOT NULL ,
                         PLECARE TIME,
                         SOSIRE TIME );

CREATE TABLE Aeronave (
                          IDAV INT NOT NULL ,
                          NUMEAV varchar (20) NOT NULL ,
                          GAMA_CROAZIERA varchar (30) NOT NULL );

CREATE TABLE Certificare (
                             IDAN INT NOT NULL ,
                             IDAV INT NOT NULL);


CREATE TABLE Angajati (
                          IDAN INT NOT NULL ,
                          NUMEAN varchar(20) NOT NULL ,
                          FUNCTIE varchar(20) NOT NULL ,
                          SALARIU INT NOT NULL);



insert into angajati (idan, numean, functie, salariu)VALUES(10, 'Cristian Andrei', 'pilot',3000);
insert into angajati (idan, numean, functie, salariu)VALUES(11, 'Radu Puscas', 'pilot',3500);
insert into angajati (idan, numean, functie, salariu)VALUES(12, 'Sinziana Salvan', 'pilot',3300);
insert into angajati (idan, numean, functie, salariu)VALUES(13, 'Bianca Aldea', 'director',7500);
insert into angajati (idan, numean, functie, salariu)VALUES(14, 'Tudor Diaconescu', 'manager',4800);
insert into angajati (idan, numean, functie, salariu)VALUES(15, 'Isabela Bianca', 'receptionista',2800);
insert into angajati (idan, numean, functie, salariu)VALUES(16, 'Adelina Bucur', 'pilot',5255);
insert into angajati (idan, numean, functie, salariu)VALUES(17, 'Chiorean Florin', 'pilot',5300);
insert into angajati (idan, numean, functie, salariu)VALUES(18, 'Avram Ioan Adrian', 'pilot',6000);


insert into aeronave (idav, numeav, gama_croaziera)VALUES(1,'AIRBUS A321',4200 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(2,'AIRBUS A330',4600 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(3,'BOEING E-6 MERCURY',4400 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(4,'F6F HELLCAT',1500 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(5,'BOEING 777',7800 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(6,'ATR 72-600F',6530 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(7,'ATR 42-600',5450 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(8,'ATR 72-600', 6900 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(9,'BOEING 717',4210 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(10,'BOEING 727',4120 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(11,'Douglas DC-11',4120 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(12,'Douglas DC-10',4120 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(13,'F-4 Phantom II',1600 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(14,'F-4 Phantom III',1300 );
insert into aeronave (idav, numeav, gama_croaziera)VALUES(15,'F-4 Phantom IV',1200 );


insert into certificare (idan, idav)VALUES(10, 1);
insert into certificare (idan, idav)VALUES(11, 2);
insert into certificare (idan, idav)VALUES(12, 3);
insert into certificare (idan, idav)VALUES(10, 4);
insert into certificare (idan, idav)VALUES(11, 5);
insert into certificare (idan, idav)VALUES(12, 6);
insert into certificare (idan, idav)VALUES(11, 7);
insert into certificare (idan, idav)VALUES(16, 7);
insert into certificare (idan, idav)VALUES(11, 4);
insert into certificare (idan, idav)VALUES(12, 4);
insert into certificare (idan, idav)VALUES(12, 1);
insert into certificare (idan, idav)VALUES(10, 8);
insert into certificare (idan, idav)VALUES(11, 9);
insert into certificare (idan, idav)VALUES(12, 10);



INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(100, 'Bucuresti', 'Roma',2000, '17:00', '19:00');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(110, 'Copenhaga', 'Cluj-Napoca',1700, '11:00', '12:45');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(120, 'Bucuresti', 'Timisoara',560, '13:00', '13:59');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(130, 'Amsterdam', 'Bucuresti', 2200, '19:00', '22:00');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(140, 'Bucuresti', 'Berlin', 1650,'17:00', '19:00');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(150, 'Frankfurt', 'Cluj-Napoca', 1370, '09:00', '12:00');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(160, 'Porto', 'Bucuresti', 3100, '18:00', '23:50');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(170, 'Timisoara', 'Londra', 2050, '13:00', '15:00');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(180, 'Timisoara', 'Amsterdam', 2300, '09:00', '11:00');
INSERT INTO zboruri(nrz, de_la, la, distanta, plecare, sosire)VALUES(190, 'Timisoara', 'Roma', 2400, '14:35',  '16:15');



ALTER TABLE Zboruri ADD CONSTRAINT PK_zboruri PRIMARY KEY (nrz);
ALTER TABLE Zboruri ADD zi varchar(10);
ALTER TABLE Zboruri ADD CONSTRAINT CK_zboruri check (zi IN ('Lu', 'Ma', 'Mi','Jo', 'Vi'));

ALTER TABLE Aeronave ADD CONSTRAINT PK_aeronave PRIMARY KEY (idav);
ALTER TABLE Angajati ADD CONSTRAINT PK_angajati PRIMARY KEY (idan);

ALTER TABLE Certificare ADD CONSTRAINT PK_certificare PRIMARY KEY (idan, idav);
ALTER TABLE Certificare ADD CONSTRAINT FK_certificare FOREIGN KEY (idan) REFERENCES angajati (idan);
ALTER TABLE Certificare ADD CONSTRAINT FK_certificareidav FOREIGN KEY (idav) REFERENCES aeronave (idav);
