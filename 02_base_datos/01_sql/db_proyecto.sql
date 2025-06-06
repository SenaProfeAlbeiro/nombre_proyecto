CREATE DATABASE DB_PROJECT DEFAULT CHARACTER SET utf8 ;
USE DB_PROJECT ;

CREATE TABLE ROLES (
  rol_codigo INT NOT NULL AUTO_INCREMENT,
  rol_nombre VARCHAR(45) NOT NULL,
  PRIMARY KEY (rol_codigo)
) ENGINE = InnoDB;

CREATE TABLE USUARIOS (
  rol_codigo INT NOT NULL,  
  usuario_codigo INT NOT NULL AUTO_INCREMENT,
  usuario_nombres VARCHAR(100) NOT NULL,
  usuario_apellidos VARCHAR(100) NOT NULL,
  usuario_identificador VARCHAR(20) NOT NULL,
  usuario_email VARCHAR(50) NOT NULL,
  usuario_pass VARCHAR(200) NOT NULL,
  usuario_estado TINYINT NOT NULL,
  PRIMARY KEY (usuario_codigo),
  INDEX ind_usuario_rol (rol_codigo ASC),
  CONSTRAINT fk_usuario_rol
    FOREIGN KEY (rol_codigo)
    REFERENCES ROLES (rol_codigo)
    ON DELETE CASCADE
    ON UPDATE CASCADE
) ENGINE = InnoDB;

INSERT INTO ROLES VALUES 
(null, 'admin'),
(null, 'customer'),
(null, 'seller');

INSERT INTO USUARIOS VALUES 
(1, null, 'Pepito', 'Perez', '123123123', 'pepito@gmail.com', sha1('12345'), 1),
(2, null, 'Marinita', 'García', '456456456', 'marinita@garcia.com', sha1('12345'), 1),
(2, null, 'Vicente', 'Fernandez', '789789789', 'vicente@fernandez.com', sha1('12345'), 0),
(3, null, 'Pedro', 'Infante', '321321321', 'pedro@infante.com', sha1('12345'), 1),
(3, null, 'Juan', 'Charrasquiao', '654654654', 'juan@charrasquiao.com', sha1('12345'), 0);