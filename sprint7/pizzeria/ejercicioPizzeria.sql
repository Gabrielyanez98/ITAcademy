DROP DATABASE IF EXISTS mipizzeria;

CREATE DATABASE mipizzeria;

USE mipizzeria;

CREATE TABLE localidad (
	idLocalidad INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    localidad VARCHAR(40) NOT NULL
);

CREATE TABLE provincia (
	idProvincia INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    provincia VARCHAR(40) NOT NULL
);

CREATE TABLE cliente (
	idCliente INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkLocalidad INT NOT NULL,
    fkProvincia INT NOT NULL,
    
    nombre VARCHAR(40) NOT NULL,
    apellido VARCHAR(40) NOT NULL,
    calle VARCHAR(40) NOT NULL,
    codigoPostal INT NOT NULL,
    
    FOREIGN KEY (fkLocalidad) REFERENCES localidad(idLocalidad),
    FOREIGN KEY (fkProvincia) REFERENCES provincia(idProvincia)
);


CREATE TABLE tienda(
	idTienda INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    direccion VARCHAR(40) NOT NULL,
    codigoPostal INT NOT NULL,
    localidad VARCHAR(40) NOT NULL,
    provincia VARCHAR(40) NOT NULL
);

CREATE TABLE trabajadores(
	idTrabajadores INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkTienda INT NOT NULL,
    
    nombre VARCHAR(40) NOT NULL,
    apellido VARCHAR(40) NOT NULL,
    NIF INT NOT NULL,
    telefono INT NOT NULL,
    cocineroRepartido VARCHAR(40) NOT NULL,
    
    FOREIGN KEY (fkTienda) REFERENCES tienda(idTienda)
);

CREATE TABLE comandas(
	idComandas INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkCliente INT NOT NULL,
    fkTienda INT NOT NULL,
    
    precio INT NOT NULL,
    hora DATETIME,
    
	FOREIGN KEY (fkCliente) REFERENCES cliente(idCliente),
    FOREIGN KEY (fkTienda) REFERENCES tienda(idTienda)
);


CREATE TABLE hamburguesas(
	idHamburguesa INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    nombre VARCHAR(40) NOT NULL,
    descripcion VARCHAR(40) NOT NULL,
    imagen VARCHAR(40) NOT NULL,
    precio INT NOT NULL
);

CREATE TABLE bebidas(
	idBebida INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    nombre VARCHAR(40) NOT NULL,
    descripcion VARCHAR(40) NOT NULL,
    imagen VARCHAR(40) NOT NULL,
    precio INT NOT NULL
);

CREATE TABLE categoriaPizza(
	idCategoriaPizza INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    nombre VARCHAR(40) NOT NULL

);

CREATE TABLE pizzas(
	idPizza INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkCategoria INT NOT NULL,
    
    nombre VARCHAR(40) NOT NULL,
    descripcion VARCHAR(40) NOT NULL,
    imagen VARCHAR(40) NOT NULL,
    precio INT NOT NULL,
    
    FOREIGN KEY (fkCategoria) REFERENCES categoriaPizza(idCategoriaPizza)
);

CREATE TABLE comandasProductos(
	fkComandas INT NOT NULL,
    fkPizzas INT NOT NULL,
    fkHamburguesas INT NOT NULL,
    fkBebidas INT NOT NULL,
    
    FOREIGN KEY (fkComandas) REFERENCES comandas(idComandas),
    FOREIGN KEY (fkPizzas) REFERENCES pizzas(idPizza),
    FOREIGN KEY (fkHamburguesas) REFERENCES hamburguesas(idHamburguesa),
    FOREIGN KEY (fkBebidas) REFERENCES bebidas(idBebida)

);



