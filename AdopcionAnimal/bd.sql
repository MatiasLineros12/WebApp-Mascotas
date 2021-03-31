CREATE DATABASE IF NOT EXISTS proyectopwm;
USE proyectopwm;

CREATE TABLE users(
id 		int(255) auto_increment not null,
name	varchar(255),
ApellidoP varchar(255),
ApellidoM varchar(255),
email	varchar(255),
password varchar(255),
remember_token varchar(255),
created_at datetime,
updated_at datetime,
CONSTRAINT pk_usuario PRIMARY KEY(id)
)ENGINE=InnoDb;

insert into users (name, ApellidoP, ApellidoM, email, password) values ("Matias", "Lineros", "Ramirez",
 "$2y$10$mgJrkMR0GVGuzVqSy6BlaORSvXyTAfZDeQ2.7Mp9bhG/RlrGRevqi");

CREATE TABLE animal(
id  	int(255) auto_increment not null,
usuario_id int(255) not null,
nombre	varchar(255),
nacimiento date,
raza varchar(255),
image	varchar(255),
sexo    Boolean,
vacunado    Boolean,
esterelizado    Boolean,
descripcion text,
created_at datetime,
updated_at datetime,
CONSTRAINT pk_animal PRIMARY KEY(id),
CONSTRAINT fk_animal_usuarios FOREIGN KEY(usuario_id) REFERENCES users(id)
)ENGINE=InnoDb;

CREATE TABLE adoptante(
id 		int(255) auto_increment not null,
animal_id int(255) not null,
rut varchar(255),
nombre varchar(255),
ApellidoP varchar(255),
ApellidoM varchar(255),
email varchar(255),
celular int(255),
mensaje 	text,
created_at datetime,
updated_at datetime,
CONSTRAINT pk_adoptante PRIMARY KEY(id),
CONSTRAINT fk_adoptante_animal FOREIGN KEY(animal_id) REFERENCES animal(id)
)ENGINE=InnoDb;



CREATE TABLE carrera(
id 		int(255) auto_increment not null,
nombre varchar(255),
created_at datetime,
updated_at datetime,
CONSTRAINT pk_carrera PRIMARY KEY(id)
)ENGINE=InnoDb;

insert into carrera (nombre) values ("Medicina Veterinaria");
insert into carrera (nombre) values ("Arquirectura");
insert into carrera (nombre) values ("Diseño mencion grafica");	
insert into carrera (nombre) values ("Agronomia");
insert into carrera (nombre) values ("Enfermeria");
insert into carrera (nombre) values ("Fonoaudiologia");
insert into carrera (nombre) values ("Kinesiologia");	
insert into carrera (nombre) values ("Nutricion y dietetica");
insert into carrera (nombre) values ("Obstetricia");
insert into carrera (nombre) values ("Odontologia");
insert into carrera (nombre) values ("Tecnologia Medica");	
insert into carrera (nombre) values ("Terapia ocupacional");


CREATE TABLE voluntario(
id 		int(255) auto_increment not null,
usuario_id int(255) null,
carrera_id int(255) not null,
nombre varchar(255),
ApellidoP varchar(255),
ApellidoM varchar(255),
email varchar(255),
celular int(255),
mensaje 	text,
created_at datetime,
updated_at datetime,
CONSTRAINT pk_voluntario PRIMARY KEY(id),
CONSTRAINT fk_voluntario_usuario FOREIGN KEY(usuario_id) REFERENCES users(id),
CONSTRAINT fk_voluntario_carrera FOREIGN KEY(carrera_id) REFERENCES carrera(id)
)ENGINE=InnoDb;

CREATE TABLE aviso(
id int(255) auto_increment not null,
usuario_id int(255) not null,
nombre varchar(255),
descripcion text,
created_at datetime,
updated_at datetime,
CONSTRAINT pk_aviso PRIMARY KEY(id),
CONSTRAINT fk_aviso_usuario FOREIGN KEY(usuario_id) REFERENCES users(id)
)ENGINE=InnoDb;