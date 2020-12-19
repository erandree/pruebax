CREATE DATABASES

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
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

  ALTER TABLE `proyectos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

  ALTER TABLE `actividades`
  ADD CONSTRAINT `fk_actividades_proyectos` FOREIGN KEY (`fk_proyecto`) REFERENCES `proyectos` (`id`);

  ALTER TABLE `proyectosparticipantes`
  ADD CONSTRAINT `fk_idparticipantes` FOREIGN KEY (`id_participante`) REFERENCES `participantes` (`id`),
  ADD CONSTRAINT `fk_idproyecto` FOREIGN KEY (`id_proyecto`) REFERENCES `proyectos` (`id`);


  INSERT INTO `funciones` (`id`, `categoria`, `nombre`, `imagen`, `direccion`, `controlador`, `action`) VALUES
(1, 'Proyectos', 'Registrar propuesta de proyecto', 'media/funciones/registropropuesta.jpg', 'Registro.php', 'Proyecto', 'registro'),
(2, 'Proyectos', 'Listado de proyectos disponibles', 'media/funciones/listadodeproyectos.jpg', 'listado.php', 'Proyecto', 'listado'),
(3, 'Usuarios', 'Registrar usuario', 'media/funciones/agregarusuario.jpg', 'registroparticipante.php', 'Usuario', 'registrar'),
(6, 'Proyectos', 'Administración de proyectos', 'media/funciones/administracion.jpg', 'administracion.php', 'Proyecto', 'administracion'),
(7, 'Usuarios', 'Administración de usuarios', 'media/funciones/administracionusuario.jpg', 'adminparticipantes.php', 'Usuario', 'administracion');

INSERT INTO `actividades` (`id`, `fk_proyecto`, `lugar`, `descripcion_lugar`, `actividad`, `horas`) VALUES
(4, 19, 'Las tablas, Los Santos', 'Mejores carnavaleswefwef', 'Todo serio eh', 1.1),
(5, 19, 'wdqwdqwd', 'qwdqwdqwdqwd', 'qwdqwd', 1.1),
(6, 19, 'Playa el uverito', 'Por el puerto mensabé', 'Recolección de basura', 1.5),
(7, 20, 'Chitré, Herrera', 'wefwefwefwef', 'Pintar el parque', 1.6),
(8, 20, 'Veracruz, Panamá', 'wefwefwefwef', 'ewfwefwef', 1.6),
(12, 1, 'qwdqwdqd', 'wefwefwef', 'wefwef', 2),
(13, 1, 'Playa costa del estesss', 'wewef', 'wefwef', 1.3),
(16, 1, 'Chitré, Herrera', 'wefwef', 'wefwef', 34),
(17, 1, 'qwdqwd', 'qwdqwd', 'wdqwd', -0.2),
(18, 1, 'qwdqwd', 'wqdqd', 'wdqd', -9),
(19, 1, 'aqwd', 'qwdqwdqw', 'qwdqwd', 3),
(20, 1, 'Playa venao', 'La playa esta ubicada en Pedasí, Los Santos', 'adwqwdqw', 0.2),
(21, 1, 'wdqwdqwd', 'qwdqwd', 'qwdqwd', 3),
(22, 1, 'errrrrrrrrrr', '23rerrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '23r23r', 3),
(23, 1, 'Amador', 'Avenida principal', 'Limpieza de calle', 3),
(24, 1, 'Amador', 'Avenida principal', 'Limpieza de calle', 3);

INSERT INTO `participantes` (`id`, `cedula`, `nombre`, `apellido`, `correoutp`, `contrasena`, `celular`, `fecha_creacion`, `ultima_modificacion`) VALUES
(1, '8-888-8888', 'Sergio', 'Arauz', 'sergioarauz@utp.ac.pa', 'abc1234', '6453-7865', '2020-12-05 15:58:46', '2020-12-05 23:44:08'),
(2, '8-768-8833', 'Juan', 'Huerta', 'juanhuerta@utp.ac.pa', 'def1234', '6123-4567', '2020-12-05 15:58:46', '2020-12-05 19:48:21'),
(3, '4-888-4444', 'Sergio', 'Flores', 'sergioflores@utp.ac.pa', 'ghi1234', '6333-7865', '2020-12-05 15:58:46', '2020-12-05 19:48:25'),
(4, '7-345-576', 'Luis', 'Herrera', 'luisherrera4@utp.ac.pa', 'jkl1234', '6372-2782', '2020-12-05 15:58:46', '2020-12-05 19:48:38'),
(6, '7-222-576', 'Anthony', 'Dandrade', 'anthonydandrade@utp.ac.pa', 'mno1234', '6782-1119', '2020-12-05 16:04:26', '2020-12-05 19:48:48'),
(10, '8-562-1010', 'Brayan', 'Castañeda', 'brayancastaneda@utp.ac.pa', 'brayan123', '6422-3398', '2020-12-05 21:44:47', '2020-12-05 21:44:47'),
(13, '7-123-498', 'Ramon', 'Sanchez', 'ramonshanche@utp.ac.pa', '', '6271-9091', '2020-12-06 15:53:25', '2020-12-06 15:53:25'),
(14, '7-2020-1212', 'Enrique', 'Santos', 'erneiquesantos@utp.ac.pa', '', '6271-5555', '2020-12-06 15:54:28', '2020-12-06 15:54:28'),
(15, '8-1425-88', 'Abraham', 'Gonzalez', 'abrahamgonzalez@utp.ac.pa', '', '6278-1234', '2020-12-06 15:55:53', '2020-12-06 15:55:53'),
(16, '7-8888-910', 'Ernesto', 'Solís', 'ernesto111@hotmail.com', 'buski', '6509-1933', '2020-12-06 16:42:12', '2020-12-06 16:42:12'),
(18, '727272', 'Victor', 'Garrido', 'victorgarrido@utp.ac.pa', 'victor00', '6754-1329', '2020-12-06 16:44:03', '2020-12-06 16:44:03'),
(19, '8-4990', 'fernando', 'Castillo', 'fernandocastillo@utp.ac.pa', 'ferr', '3434', '2020-12-06 16:46:40', '2020-12-13 19:32:03');

INSERT INTO `proyectos` (`id`, `tipo`, `nivel`, `clasificacion`, `categoria`, `modalidad`, `nombre`, `estado`, `direccionimg`, `fecha`, `objetivo`, `descripcion`, `proponente`) VALUES
(1, 'Producto', 'Voluntariado', 'Medio ambiente', 'Limpieza de playas', 'Grupal', 'Limpieza de playa de costa del este', 'Aprobado', 'media/proyectos/sinimagen.jpg', '2020-11-05', 'Dejar la playa limpia', 'qwdqwdwefwef', 'qwdqwd'),
(3, 'Actividad', 'Voluntariado', 'Medio ambiente', 'Limpieza de ríos', 'Grupal', 'Limpieza de río Matías Hernández', 'Aprobado', 'media/proyectos/lrmatiashernandez.jpg', '2020-12-01', 'dcsdc', 'sdvs', 'sdvsdv'),
(4, 'Actividad', 'Servicio Social', 'Medio ambiente', 'Reforestación', 'Grupal', 'Reforestación en el área del canal', '', 'media/proyectos/reforestacioncanal.jpg', NULL, '', '', ''),
(5, 'Producto', 'Voluntariado', 'Desarrollo tecnológico', 'Respirador mecánico', 'Grupal', 'Desarrollo y construcción de un respirador mecánico', '', 'media/proyectos/respiradormecautp.jpg', NULL, '', '', ''),
(19, 'Actividad', 'Servicio Social', 'Deporte', 'Futbol', 'Grupal', 'Recolecta para el barca', 'Disponible', 'qjwkljdlqwjd', '2020-12-03', 'asxasc', 'ascascasc', ''),
(20, 'Producto', 'Servicio Social', 'qwdqwd', 'qwd', 'Individual', 'wdqwdqwd', 'Disponible', 'media/proyectos/qwdqw.jpg', '2020-12-02', 'qwd', 'qwdqwd', 'Fernando Zarate'),
(21, 'Producto', 'Voluntariado', 'Deporte', 'Limpieza', 'Grupal', 'Campo del ibi', 'Disponible', 'media/proyectos/respiradormecautp.jpg', '2020-12-03', 'Dejarlo limpio', 'Compartir en grupo', 'Yarenis Garay'),
(32, 'Producto', 'Voluntariado', 'wefwef', 'ewfewf', 'Individual', 'Limpieza de playa de costa del este', 'En revisión', 'https://i.ibb.co/c8Fsm2D/thumbnail.jpg', '2020-12-04', 'wefwef', 'wefwef', 'Juan Huerta'),
(33, 'Producto', 'Servicio Social', 'qwcqwcq', 'qwcqwcqw', 'Individual', 'scqaw', 'En revisión', 'media/proyectos/sinimagen.jpg', '2020-12-03', 'qwcqwcqwc', 'ergerg', 'qqdqwd'),
(34, 'Producto', 'Servicio Social', 'qwcqwcq', 'qwcqwcqw', 'Individual', 'scqaw', 'En revisión', 'media/proyectos/sinimagen.jpg', '2020-12-03', 'qwcqwcqwc', 'ergerg', 'qqdqwd'),
(35, 'Actividad', 'Voluntariado', 'Limpieza urbana', 'Limpieza de calles', 'Grupal', 'Limpieza de amador', 'En revision', 'google.com', '0000-00-00', 'Remover la basura de las calles y aceras', 'Trabajar en equipo', 'Franklin Quintero'),
(36, 'Actividad', 'Voluntariado', 'Limpieza urbana', 'Limpieza de calles', 'Grupal', 'Limpieza de amador', 'En revision', 'google.com', '0000-00-00', 'Remover la basura de las calles y aceras', 'Trabajar en equpipo', 'Franklin Quintero');

INSERT INTO `proyectosparticipantes` (`id_proyecto`, `id_participante`, `funcion`) VALUES
(1, 1, 'Administrador'),
(1, 3, 'Administrador'),
(1, 4, 'Responsable'),
(1, 6, 'Supervisor'),
(1, 13, 'administrador'),
(1, 14, 'administrador'),
(1, 15, 'Administrador'),
(1, 16, 'Administrador'),
(1, 18, 'Administrador'),
(1, 19, 'Responsable'),
(4, 2, 'Responsable'),
(19, 10, 'Administrador'),
(19, 16, 'Supervisor'),
(20, 2, 'Responsable'),
(20, 3, 'Participante'),
(20, 4, 'Supervisor'),
(20, 13, 'Participante'),
(20, 19, 'Participante'),
(21, 16, 'Responsable');

COMMIT;