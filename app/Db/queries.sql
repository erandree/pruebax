CREATE TABLE `aplicacionz`.`clientes` (
  `idcliente` INT NOT NULL AUTO_INCREMENT,
  `identificacion` VARCHAR(45) NOT NULL,
  `primer_nombre` VARCHAR(45) NOT NULL,
  `segundo_nombre` VARCHAR(45) NULL,
  `primer_apellido` VARCHAR(45) NOT NULL,
  `segundo_apellido` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcliente`));


insert into clientes (identificacion, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido)
values ('8-000-0000','Ana', 'Rosa', 'Vega', 'Santos'),
('4-000-0000','Marcos', 'Miguel', 'Castro', 'Estrada');

CREATE TABLE `aplicacionz`.`ventas` (
  `idventa` INT NOT NULL AUTO_INCREMENT,
  `cliente` INT NOT NULL,
  `total` DECIMAL(8,2) NOT NULL,
  `puntos` INT NULL,
  PRIMARY KEY (`idventa`),
  INDEX `fk_cliente` (`cliente` ASC),
  CONSTRAINT `fk_clienteventas`
    FOREIGN KEY (`cliente`)
    REFERENCES `aplicacionz`.`clientes` (`idcliente`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

INSERT INTO ventas (cliente_id, total, puntos)
VALUES(1, 1500.95, 100),
(2, 10000.90, 510);

