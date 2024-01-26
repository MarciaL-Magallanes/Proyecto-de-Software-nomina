CREATE TABLE empleado (
idempleado INT AUTO_INCREMENT,
Documentoid INT (100) NOT NULL,
NombreEmpleado VARCHAR(50) NOT NULL,
ApellidoEmpleado VARCHAR(50)NOT NULL,
Telefono  VARCHAR (50) NOT NULL,
Direccion VARCHAR (50) NOT NULL,
Email VARCHAR (50) NOT NULL,
PRIMARY KEY (idempleado)
);

CREATE TABLE usuario (
idusuario INT AUTO_INCREMENT,
NombreUsuario VARCHAR(50) NOT NULL,
ContraseñaUsuario VARCHAR(100) NOT NULL,
idempleado INT,
PRIMARY KEY (idusuario),
FOREIGN KEY (idempleado) REFERENCES empleado(idempleado)
);


CREATE TABLE estado_contrato (
idestadocontrato INT AUTO_INCREMENT,
Nombre_estado VARCHAR(50) NOT NULL,
Descripcion VARCHAR (70) NOT NULL,
PRIMARY KEY (idestadocontrato)
);

CREATE TABLE area (
idarea INT AUTO_INCREMENT,
Nombre varchar(50) NOT NULL,
nombrearea VARCHAR(50) NOT NULL,
PRIMARY KEY (idarea)
);

CREATE TABLE cargo (
idcargo INT AUTO_INCREMENT,
Nombre varchar(50) NOT NULL,
Nombre_cargo VARCHAR(50) NOT NULL,
Salario_base varchar (50) not null,
Horario_trabajo VARCHAR (60) NOT NULL,
Experiencia_minima Varchar (50) not NULL,
idarea INT,
PRIMARY KEY (idcargo),
FOREIGN KEY (idarea) REFERENCES area (idarea)
);

CREATE TABLE controles (
idcontrol INT AUTO_INCREMENT,
Fecha DATE,
Descripcion VARCHAR(255) NOT NULL,
idempleado INT,
PRIMARY KEY (idcontrol),
FOREIGN KEY (idempleado) REFERENCES empleado(idempleado)
);


CREATE TABLE contrato (
idcontrato INT AUTO_INCREMENT,
Nombre varchar(50) NOT NULL,
Fecha_inicio Varchar (50) not NULL,
Fecha_fin Varchar (50) not NULL,
Salario_basico varchar (50) not null,
idempleado INT,
idcargo INT,
idestadocontrato INT,
PRIMARY KEY (idcontrato),
FOREIGN KEY (idempleado) REFERENCES empleado(idempleado),
FOREIGN KEY (idestadocontrato) REFERENCES estado_contrato(idestadocontrato),
FOREIGN KEY (idcargo) REFERENCES cargo (idcargo)
);

CREATE TABLE Generacion_nomina(
idgeneracion int AUTO_INCREMENT,
nombre_empleado varchar (50) not null,
mes varchar (40) not null,
ano varchar (50) not null,
cedula varchar (50) not null,
monto_salario varchar (50) not null,
fecha_pago date,
metodo_pago varchar (50) not null,
comentarios varchar (50) not null,
idempleado INT,
PRIMARY KEY (idgeneracion),
FOREIGN KEY (idempleado) REFERENCES empleado(idempleado),
    )