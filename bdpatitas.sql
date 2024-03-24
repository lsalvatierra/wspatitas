CREATE TABLE persona (
idpersona 		int NOT NULL auto_increment, 
nombres 		varchar(100) NOT NULL, 
apellidos 		varchar(100) NOT NULL, 
email 			varchar(100) NOT NULL, 
celular  		varchar(10) NOT NULL,
usuario 		varchar(30) NOT NULL, 
password 		varchar(30) NOT NULL, 
estado			char(1) NOT NULL, 
esvoluntario	char(1) NOT NULL, 
CONSTRAINT PK_Persona PRIMARY KEY (idpersona) 
);


CREATE TABLE tipomascota (
idtipomascota 	int NOT NULL auto_increment, 
descriptipo 	varchar(30) NOT NULL, 
estado		 	char(1) NOT NULL, 
CONSTRAINT PK_Tipomascota PRIMARY KEY (idtipomascota) 
);

CREATE TABLE mascotaperdida(
idperdida		int NOT NULL auto_increment, 
nommascota		varchar(50) NOT NULL,
idtipomascota	int NOT NULL,
fechaperdida	datetime NOT NULL,
descripcion		varchar(200) NOT NULL,
fecharegistro	datetime NOT NULL,
urlimagen		varchar(600) NOT NULL,
estado		 	char(1) NOT NULL, 
lugar			varchar(200) NOT NULL,
contacto		varchar(20) NOT NULL,
CONSTRAINT PK_Mascotaperdida PRIMARY KEY 	(idperdida),
CONSTRAINT FK_Mascotaperdida_1 FOREIGN KEY 	(idtipomascota) REFERENCES tipomascota(idtipomascota)
);


ALTER TABLE mascotaperdida ADD COLUMN lugar varchar(200) NOT NULL, ADD COLUMN contacto varchar(20) NOT NULL;


INSERT INTO `tipomascota` (`idtipomascota`, `descriptipo`, `estado`) VALUES (NULL, 'Perro', '1'), (NULL, 'Gato', '2');

INSERT INTO `mascotaperdida` (`idperdida`, `nommascota`, `idtipomascota`, `fechaperdida`, `descripcion`, `fecharegistro`, `urlimagen`, `estado`, `lugar`, `contacto`) 
VALUES 	(NULL, 'Benito', '1', '2020-09-24 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/1.jpg', '1', 'Miraflores - Lima - Perú', '902312345'), 
		(NULL, 'Luna', '1', '2020-09-21 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/2.jpeg', '1', 'Pueblo Libre - Lima - Perú', '960978776'),
		(NULL, 'Pepita', '1', '2020-08-10 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/3.jpg', '1', 'La Molina - Lima - Perú', '978978776'),
		(NULL, 'Bellota', '1', '2020-08-25 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/4.jpg', '1', 'San Isidro - Lima - Perú', '912978776'),
		(NULL, 'Kayser', '1', '2020-09-12 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/5.jpg', '1', 'San de Miraflores - Lima - Perú', '913978776'),
		(NULL, 'Colita', '1', '2020-09-01 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/6.jpg', '1', 'Surquillo - Lima - Perú', '900978776'),
		(NULL, 'Copita', '1', '2020-09-01 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/7.jpg', '1', 'Surco - Lima - Perú', '999978776'),
		(NULL, 'Kimy', '1', '2020-09-04 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/8.jpg', '1', 'Surco - Lima - Perú', '901978776'),
		(NULL, 'Neron', '1', '2020-08-30 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/9.jpg', '1', 'Surquillo - Lima - Perú', '977978776'),
		(NULL, 'Reina', '1', '2020-09-11 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/10.jpg', '1', 'San Borja - Lima - Perú', '933978776'),
		(NULL, 'Pinina', '1', '2020-09-19 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/11.jpeg', '1', 'San Borja - Lima - Perú', '922097776'),
		(NULL, 'Toby', '1', '2020-09-14 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/12.jpg', '1', 'San Borja - Lima - Perú', '994978776'),
		(NULL, 'Zeus', '1', '2020-09-14 00:00:00', 'Tiene enfermedad crónica.', '2020-09-28 00:00:00', 'http://www.kreapps.biz/patitas/img/13.jpg', '1', 'Jesús María - Lima - Perú', '944978776');

