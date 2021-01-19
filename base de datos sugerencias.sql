CREATE DATABASE dbo_Sugerencias;
USE dbo_Sugerencias;
CREATE TABLE tbl_nombre(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nombre VARCHAR (50)
);
CREATE TABLE tbl_apellido(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	apellido VARCHAR (50)
);
CREATE TABLE tbl_rol(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	rol VARCHAR (50)
);
CREATE TABLE tbl_estado(
	id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	estado VARCHAR (50)
);
CREATE TABLE tbl_login(
	ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	usuario VARCHAR (50),
	clave VARCHAR (50)
);
CREATE TABLE tbl_cargo(
	ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	cargo VARCHAR (50)
);
CREATE TABLE tbl_area(
	ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	area VARCHAR (50)
);
CREATE TABLE tbl_usuario(
	ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	fk_nombre INT NOT NULL,
	fk_apellido INT NOT NULL,
	fk_login INT NOT NULL,
	fk_rol INT NOT NULL,
	fk_estado INT NOT NULL,
	fk_cargo INT NOT NULL,
	fk_area INT NOT NUll,
	FOREIGN KEY (fk_nombre) REFERENCES tbl_nombre(id),
	FOREIGN KEY (fk_apellido) REFERENCES tbl_apellido(id),
	FOREIGN KEY (fk_login) REFERENCES tbl_login(id),
	FOREIGN KEY (fk_rol) REFERENCES tbl_rol(id),
	FOREIGN KEY (fk_estado) REFERENCES tbl_estado(id),
	FOREIGN KEY (fk_cargo) REFERENCES tbl_cargo(id),
	FOREIGN KEY (fk_area) REFERENCES tbl_area(id)
);
CREATE TABLE tbl_sugerencia(
	ID INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	fk_remitente INT NOT NULL,
	fk_destinatario INT NOT NULL,
	texto VARCHAR(200) NOT NULL,
	FOREIGN KEY (fk_remitente) REFERENCES tbl_usuario(id),
	FOREIGN KEY (fk_destinatario) REFERENCES tbl_usuario(id)
);
INSERT INTO tbl_rol (rol) VALUES ('Administrador'),('Profesor'),('Estudiante');
INSERT INTO tbl_estado(estado) VALUES ('Activo'),('Baneado');
INSERT INTO tbl_cargo (cargo) VALUES ('Profesor'),('Decanatura'),('Estudiante');
INSERT INTO tbl_area (area) VALUES ('Emprendimiento'),('Hospitalidad');
INSERT INTO tbl_nombre (nombre) VALUES ('Jose');
INSERT INTO tbl_apellido (apellido) VALUES ('Gomez');
INSERT INTO tbl_login (usuario,clave) VALUES ('123456','123456'),('78910','78910'),('admin','admin123');
	
INSERT INTO tbl_nombre (nombre) VALUES ('ana'),('juan'),('esteban');
INSERT INTO tbl_apellido (apellido) VALUES ('lisa'),('zubieta'),('gomez');
INSERT INTO tbl_usuario (fk_nombre,fk_apellido,fk_login,fk_rol,fk_estado,fk_cargo,fk_area) VALUES (1,1,1,2,1,2,1);
INSERT INTO tbl_usuario (fk_nombre,fk_apellido,fk_login,fk_rol,fk_estado,fk_cargo,fk_area) VALUES (2,2,2,2,1,2,2);
INSERT INTO tbl_usuario (fk_nombre,fk_apellido,fk_login,fk_rol,fk_estado,fk_cargo,fk_area) VALUES (3,3,3,1,1,1,1);

select fk_rol from tbl_usuario, tbl_login WHERE tbl_login.usuario='1030' AND tbl_login.clave='1030' AND tbl_usuario.fk_login= tbl_login.ID;

CREATE PROCEDURE SPSugerencia(
in remmitente int,
in destinatario int, 
in texto varchar(200)
)

	INSERT INTO tbl_sugerencia(fk_remitente,fk_destinatario,texto) values (remmitente,destinatario,texto);
	
	
SELECT texto from tbl_sugerencia, tbl_usuario, tbl_login where tbl_usuario.fk_login = tbl_login.ID and tbl_login.usuario=@usuario;
	
CREATE PROCEDURE SPEliminarS
(
	commenta varchar(200)
)
DELETE FROM tbl_sugerencia WHERE texto=commenta;


CREATE PROCEDURE SPContraseñaC
(
	nueva varchar(50),
    usuario varchar(50)
)
UPDATE tbl_login SET clave= nueva WHERE tbl_login.usuario=usuario;


CREATE PROCEDURE SPVerificar(
usuario varchar(50)
)
select clave from tbl_login WHERE tbl_login.usuario=usuario;

CREATE PROCEDURE SPCommentCompleto(
texto varchar(200)
)
SELECT tbl_nombre.nombre, tbl_apellido.apellido, tbl_login.usuario, tbl_sugerencia.texto FROM tbl_nombre, tbl_apellido,tbl_login, tbl_sugerencia, tbl_usuario
 WHERE tbl_usuario.fk_nombre= tbl_nombre.id AND tbl_usuario.fk_apellido=tbl_apellido.id AND tbl_login.ID=tbl_usuario.fk_login and tbl_usuario.ID=tbl_sugerencia.fk_remitente 
 AND tbl_sugerencia.texto=texto;



CREATE PROCEDURE SPIdLogin(_user varchar(50))
Select ID from tbl_login where tbl_login.usuario = _user;

CREATE PROCEDURE SPModEst
(
	_Login int
)
UPDATE tbl_usuario SET fk_estado=2 WHERE fk_login = _Login;

DELIMITER $$
CREATE PROCEDURE SpIngresar2 
(
IN _fk_nombre int,
IN _fk_apellido int,
IN _fk_login int,
IN _fk_rol int,
IN _fk_estado int,
IN _fk_cargo int,
IN _fk_area int
)
BEGIN
INSERT INTO tbl_usuario (fk_nombre,fk_apellido,fk_login,fk_rol,fk_estado,fk_cargo,fk_area) values (_fk_nombre,_fk_apellido,_fk_login,_fk_rol,_fk_estado,_fk_cargo,_fk_area);
END $$



















