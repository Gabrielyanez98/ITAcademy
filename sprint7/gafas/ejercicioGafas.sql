DROP DATABASE IF EXISTS misgafas;

CREATE DATABASE misgafas;

USE misgafas;





CREATE TABLE proveedores (
	idProveedores INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    nombre VARCHAR(40) NOT NULL,
    calle VARCHAR(40) NOT NULL,
    numero INT NOT NULL,
    piso INT NOT NULL,
    puerta INT NOT NULL,
    ciudad VARCHAR(40) NOT NULL,
    codigoPostal INT NOT NULL,
    pais VARCHAR(40) NOT NULL,
    telefono INT NOT NULL,
    fax INT NOT NULL,
    NIF INT NOT NULL
     
);

CREATE TABLE marca (
	idMarca INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkProveedores INT NOT NULL,
    
    marca VARCHAR(40) NOT NULL,
    graduacion INT NOT NULL,
    tipoMontura VARCHAR(40) NOT NULL,
    colorMontura VARCHAR(40) NOT NULL,
    colorVidrio VARCHAR(40) NOT NULL,
    precio INT NOT NULL,
    
    FOREIGN KEY (fkProveedores) REFERENCES proveedores(idProveedores)
);

CREATE TABLE gafas (
	idGafas INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkMarca INT NOT NULL,
    
    nombreGafas VARCHAR(40) NOT NULL,
    FOREIGN KEY (fkMarca) REFERENCES marca (idMarca)
);

CREATE TABLE empleado (
	idEmpleado INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombreEmpleado VARCHAR(40) NOT NULL
);

CREATE TABLE ventas (
	fkEmpleado INT NOT NULL,
    fkGafas INT NOT NULL,
    
    FOREIGN KEY (fkEmpleado) REFERENCES empleado(idEmpleado),
    FOREIGN KEY (fkGafas) REFERENCES gafas(idGafas)
);




CREATE TABLE clientes(
	idCliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    idClienteRecomendado INT, 
    
    nombre VARCHAR(40) NOT NULL,
    codigoPostal INT NOT NULL,
    telefono INT NOT NULL,
    gmail VARCHAR(40) NOT NULL,
    fechaRegistro DATE,
    
    FOREIGN KEY (idClienteRecomendado) REFERENCES clientes (idCliente)
);



