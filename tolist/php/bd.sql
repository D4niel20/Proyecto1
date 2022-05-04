create database `login_registro_db`;
	use `login_registro_db`;

CREATE TABLE `usuarios` (
`id` INT(50) NOT NULL AUTO_INCREMENT , 
`nombre_completo` VARCHAR(50) NOT NULL , 
`correo` VARCHAR(50) NOT NULL , 
`usuario` VARCHAR(50) NOT NULL , 
`contrasena` VARCHAR(50) NOT NULL , 
PRIMARY KEY (`id`)
) ENGINE = InnoDB;
