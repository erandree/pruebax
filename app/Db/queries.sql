CREATE TABLE `actividades` (
  `id` int(4) NOT NULL,
  `fk_proyecto` int(4) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `descripcion_lugar` varchar(60) NOT NULL,
  `actividad` varchar(50) NOT NULL,
  `horas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `funciones` (
  `id` int(4) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `controlador` varchar(25) NOT NULL,
  `action` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `participantes` (
  `id` int(4) NOT NULL,
  `cedula` varchar(20) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `apellido` varchar(25) NOT NULL,
  `correoutp` varchar(50) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `celular` varchar(12) DEFAULT NULL,
  `fecha_creacion` datetime NOT NULL DEFAULT current_timestamp(),
  `ultima_modificacion` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `proyectos` (
  `id` int(4) NOT NULL,
  `tipo` varchar(30) NOT NULL,
  `nivel` varchar(30) NOT NULL,
  `clasificacion` varchar(50) NOT NULL,
  `categoria` varchar(75) NOT NULL,
  `modalidad` varchar(30) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `estado` varchar(15) NOT NULL,
  `direccionimg` varchar(100) NOT NULL,
  `fecha` date DEFAULT NULL,
  `objetivo` varchar(100) NOT NULL,
  `descripcion` varchar(100) NOT NULL,
  `proponente` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `proyectosparticipantes` (
  `id_proyecto` int(5) NOT NULL,
  `id_participante` int(5) NOT NULL,
  `funcion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_actividades_proyectos` (`fk_proyecto`);

  ALTER TABLE `funciones`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `participantes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correoutp` (`correoutp`),
  ADD UNIQUE KEY `cedula` (`cedula`),
  ADD UNIQUE KEY `celular` (`celular`) USING BTREE;

  ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id`);

  ALTER TABLE `proyectosparticipantes`
  ADD UNIQUE KEY `registro_unico` (`id_proyecto`,`id_participante`),
  ADD KEY `fk_idparticipantes` (`id_participante`);

  ALTER TABLE `actividades`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

  ALTER TABLE `funciones`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

  ALTER TABLE `participantes`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

  ALTER TABLE `proyectos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

  ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_actividades_proyectos` FOREIGN KEY (`fk_proyecto`) REFERENCES `proyectos` (`id`);

  ALTER TABLE `proyectosparticipantes`
  ADD CONSTRAINT `fk_idparticipantes` FOREIGN KEY (`id_participante`) REFERENCES `participantes` (`id`),
  ADD CONSTRAINT `fk_idproyecto` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id`);
COMMIT;