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
    nombrearea VARCHAR(50) NOT NULL,
    PRIMARY KEY (idarea)
);

CREATE TABLE cargo (
    idcargo INT AUTO_INCREMENT,
    Nombre_cargo VARCHAR(50) NOT NULL,
    Salario_base DECIMAL (15, 4),
    Horario_trabajo VARCHAR (60) NOT NULL,
    Experiencia_minima INT,
    idarea INT,
    PRIMARY KEY (idcargo),
    FOREIGN KEY (idarea) REFERENCES area (idarea)
);

CREATE TABLE controles (
    idcontrol INT AUTO_INCREMENT,
    Fecha DATE,
    Descripcion VAR|CHAR(255) NOT NULL,
    idempleado INT,
    PRIMARY KEY (idcontrol),
    FOREIGN KEY (idempleado) REFERENCES empleado(idempleado)
);


CREATE TABLE contrato (
    idcontrato INT AUTO_INCREMENT,
    Fecha_inicio VARCHAR,
    Fecha_fin VARCHAR,
    Salario_basico DECIMAL(10, 2),
    idempleado INT,
    idcargo INT,
    idestadocontrato INT,
    PRIMARY KEY (idcontrato),
    FOREIGN KEY (idempleado) REFERENCES empleado(idempleado),
    FOREIGN KEY (idestadocontrato) REFERENCES estado_contrato(idestadocontrato),
    FOREIGN KEY (idcargo) REFERENCES cargo (idcargo)
);
