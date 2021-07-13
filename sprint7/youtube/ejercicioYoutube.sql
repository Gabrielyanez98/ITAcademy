DROP DATABASE IF EXISTS youtube;

CREATE DATABASE youtube;

USE youtube;

CREATE TABLE canal(
	idCanal INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(40) NOT NULL,
    descripcion VARCHAR(40) NOT NULL,
    fechaCreacion DATE
);

CREATE TABLE usuario(
	idUsuario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkCanal INT,
    
    email VARCHAR(40) NOT NULL,
    contrasenia VARCHAR(40) NOT NULL,
    nombreUsuario VARCHAR(40) NOT NULL,
    fechaNacimiento DATE,
    sexo VARCHAR(15) NOT NULL,
    
	FOREIGN KEY (fkCanal) REFERENCES canal(idCanal)
);

CREATE TABLE usuario_canal_registrado(
	fkUsuario INT NOT NULL,
    fkCanal INT NOT NULL,
    
    FOREIGN KEY (fkUsuario) REFERENCES usuario(idUsuario),
    FOREIGN KEY (fkCanal) REFERENCES canal(idCanal)
);

CREATE TABLE video(
	idVideo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    
    titulo VARCHAR(40) NOT NULL,
    descripcion VARCHAR(40) NOT NULL,
    tamanio INT NOT NULL,
    nombreArchivo VARCHAR(40) NOT NULL,
    duracionVideo INT NOT NULL,
    numeroReproducciones INT NOT NULL,
    numeroLikes INT NOT NULL,
    numeroDiselikes INT NOT NULL
);

CREATE TABLE etiqueta(
	idEtiqueta INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkVideo INT NOT NULL,
    
    nombreEtiqueta VARCHAR(40) NOT NULL,
    
    FOREIGN KEY (fkVideo) REFERENCES video(idVideo)
);

CREATE TABLE usuario_publica_video(
	fkUsuario INT NOT NULL,
    fkVideo INT NOT NULL,
    fecha DATE,
    
    FOREIGN KEY (fkUsuario) REFERENCES usuario(idUsuario),
    FOREIGN KEY (fkVideo) REFERENCES video(idVideo)
);

CREATE TABLE usuario_like_video(
	fkUsuario INT NOT NULL,
    fkVideo INT NOT NULL,
    like_dislike VARCHAR(40) NOT NULL,
    fecha DATE,
    
    FOREIGN KEY (fkUsuario) REFERENCES usuario(idUsuario),
    FOREIGN KEY (fkVideo) REFERENCES video(idVideo)
);

CREATE TABLE comentarios(
		idComentario INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
        fkUsuario INT NOT NULL,
        fkVideo INT NOT NULL,
        fecha DATE,
        
        FOREIGN KEY (fkUsuario) REFERENCES usuario(idUsuario),
        FOREIGN KEY (fkVideo) REFERENCES video(idVideo)
);

CREATE TABLE like_comentarios(
	fkComentario INT NOT NULL,
    fkUsuario INT NOT NULL,
    like_dislike VARCHAR(40) NOT NULL,
    fecha DATE,
    
    FOREIGN KEY (fkComentario) REFERENCES comentarios(idComentario),
    FOREIGN KEY (fkUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE playlist(
	idPlaylist INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    fkUsuario INT NOT NULL,
    
    nombre VARCHAR(40) NOT NULL,
    fechaCreacion DATE,
    estado VARCHAR(40) NOT NULL,
    
    FOREIGN KEY (fkUsuario) REFERENCES usuario(idUsuario)
);

CREATE TABLE playlist_videos(
	fkVideo INT NOT NULL,
    fkPlaylist INT NOT NULL,
    
    FOREIGN KEY (fkVideo) REFERENCES video(idVideo),
    FOREIGN KEY (fkPlaylist) REFERENCES playlist(idPlaylist)
);