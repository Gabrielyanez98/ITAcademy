DROP DATABASE IF EXISTS spotify;

CREATE DATABASE spotify;

USE spotify;

CREATE TABLE tipo_usuario(
	idTipoUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	free VARCHAR(2) NOT NULL,
    premium VARCHAR(2) NOT NULL
);

CREATE TABLE usuario (
	idUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkTipoUsuario INT NOT NULL,
    
    email VARCHAR(40) NOT NULL,
    contrasenia VARCHAR(40) NOT NULL,
    nombreUsuario VARCHAR(40) NOT NULL,
    fechaNacimiento DATE,
    sexo VARCHAR(10) NOT NULL,
    pais VARCHAR(30) NOT NULL,
    codigoPostal INT NOT NULL,
    
    FOREIGN KEY (fkTipoUsuario) REFERENCES tipo_usuario(idTipoUsuario)
);

CREATE TABLE tarjeta (
	idTarjeta INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    numeroTarjeta INT NOT NULL,
    mes VARCHAR(10) NOT NULL,
    anioCaducidad INT NOT NULL,
    numeroSeguridad INT NOT NULL
);

CREATE TABLE paypal (
	idPayPal INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    nombre VARCHAR(40) NOT NULL
);

CREATE TABLE suscripcion(
	idSuscripcion INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkTarjeta INT NOT NULL,
    fkPaypal INT NOT NULL,
    
    fechaLimite DATE NOT NULL,
    fechaFinal DATE NOT NULL,
    fechaRenovacion DATE NOT NULL,
    
	FOREIGN KEY (fkTarjeta) REFERENCES tarjeta(idTarjeta),
    FOREIGN KEY (fkPaypal) REFERENCES paypal(idPaypal)
);

CREATE TABLE playlist(
	idPlaylist INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(40) NOT NULL,
    numeroCanciones INT NOT NULL,
    fechaCreacion DATE NOT NULL
);

CREATE TABLE playlist_eliminados(
	idPlayListEliminada INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fkPlaylistEliminados INT,
    fecha DATE NOT NULL,
    
    FOREIGN KEY (fkPlayListEliminados) REFERENCES playlist(idPlaylist)
);

CREATE TABLE playlist_activa(
	idPlayListActiva INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
	fkPlayListActiva INT,
    
    FOREIGN KEY (fkPlayListActiva) REFERENCES playlist(idPlaylist)
);

CREATE TABLE artista(
	idArtista INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(40) NOT NULL,
    imagen VARCHAR(40) NOT NULL,
    fkUsuario INT NOT NULL,
    
    FOREIGN KEY(fkUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE artistas_relacionados(
	idArtistasRelacionados INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkArtista INT NOT NULL,
    
    FOREIGN KEY (fkArtista) REFERENCES artista(idArtista)
);

CREATE TABLE album(
	idAlbum INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
     fkArtista INT NOT NULL,
    
    fecha DATE,
    imagen VARCHAR(40) NOT NULL,
   
    FOREIGN KEY (fkArtista) REFERENCES artista(idArtista)
);

CREATE TABLE cancion(
	idCancion INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkAlbum INT NOT NULL,
    
    titulo VARCHAR(40) NOT NULL,
    duracion INT NOT NULL,
    numeroReproducciones INT NOT NULL,
    
	FOREIGN KEY(fkAlbum) REFERENCES album(idAlbum)
);

CREATE TABLE playlist_compartida_usuarios(
	fkPlaylistActiva INT NOT NULL,
    fkUsuario INT NOT NULL,
    fkCancion INT NOT NULL,
    
    FOREIGN KEY (fkPlaylistActiva) REFERENCES playlist_activa(idPlaylistActiva),
    FOREIGN KEY (fkUsuario) REFERENCES usuario(idUsuario),
    FOREIGN KEY (fkCancion) REFERENCES cancion(idCancion)
);

CREATE TABLE favoritos(
	fkUsuario INT NOT NULL,
    fkAlbum INT NOT NULL,
    fkCancion INT NOT NULL,
    
    FOREIGN KEY (fkUsuario) REFERENCES usuario(idUsuario),
    FOREIGN KEY (fkAlbum) REFERENCES album(idAlbum),
    FOREIGN KEY (fkCancion) REFERENCES cancion(idCancion)
	
);
