---CREACION DE LA BASE DE DATOS

	--USUARIOS
		-CREATE TABLE users (
        id_user BIGINT AUTO_INCREMENT,
        id_costomer BIGINT UNIQUE NOT NULL,
        first_name VARCHAR(50) NOT NULL,
        second_name VARCHAR(50) NULL,
        first_surname VARCHAR(50) NOT NULL,
        second_surname VARCHAR(50) NULL,
        email VARCHAR(200) NOT NULL,
        phone VARCHAR (10) NOT NULL,
        address VARCHAR (200) NOT NULL
        );