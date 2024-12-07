-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 20:48:42
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_Administrador` int(3) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `id_Usuario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_Administrador`, `Nombre`, `Apellido`, `id_Usuario`) VALUES
(1, 'Gonzalo', 'Gonzalez', 4),
(2, 'Ciro', 'Lopez', 5),
(3, 'Martin', 'Arce', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_Cargo` int(3) NOT NULL,
  `Descripcion_Cargo` enum('Invitado','Profesor','Administrador','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_Cargo`, `Descripcion_Cargo`) VALUES
(1, 'Invitado'),
(2, 'Profesor'),
(3, 'Administrador');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comunicados`
--

CREATE TABLE `comunicados` (
  `id_Comunicado` int(3) NOT NULL,
  `Titulo` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Fecha` date NOT NULL DEFAULT '0000-00-00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comunicados`
--

INSERT INTO `comunicados` (`id_Comunicado`, `Titulo`, `Descripcion`, `Fecha`) VALUES
(1, 'Se suspende la Feria', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis dictum tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam bibendum, velit mattis lacinia lacinia, quam libero elementum leo, non lobortis quam sem id felis. Sed placerat vel eros ut gravida. Pellentesque faucibus quam sed lacus condimentum, eu fringilla ipsum ornare. Morbi a pretium arcu, ac mollis dolor. Donec dictum felis et sem iaculis, vel euismod ante tincidunt. Mauris congue hendrerit suscipit.', '2030-11-02'),
(2, 'Comunicado de prueba 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis dictum tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Etiam bibendum, velit mattis lacinia lacinia, quam libero elementum leo, non lobortis quam sem id felis. Sed placerat vel eros ut gravida. Pellentesque faucibus quam sed lacus condimentum, eu fringilla ipsum ornare. Morbi a pretium arcu, ac mollis dolor. Donec dictum felis et sem iaculis, vel euismod ante tincidunt. Mauris congue hendrerit suscipit.', '2020-10-12'),
(3, 'No se abrirá la Escuela por la Cuarentena', 'Debido a la grave circunstancia que estamos transitando por culpa del virus COVID-19 la escuela no dará clases presenciales así como lo dicta el ministerio de educación. Sin embargo, se seguirán llevando a cabo las clases de manera virtual, dependerá del docente por el medio de envió de los trabajos, si tiene inconvenientes con la entrega de trabajos, por favor comuníquese con el preceptor correspondiente, si no sabe como comunicarse con este puede enviar un mensaje a (insertar mail) donde intentaremos responder lo antes posible. El regreso a las clases presenciales todavía no tiene fecha, podrá enterarse del mismo por este medio. Atte: La Direccion.', '2020-10-20'),
(4, 'Comunicado de prueb', 'LoremPellentesque pharetra vel justo eu rutrum. Morbi ullamcorper nisl diam, ac fermentum velit facilisis a. Donec volutpat libero non leo pharetra posuere. Pellentesque convallis augue vitae dolor tincidunt, ornare luctus sem egestas. Cras id nunc eget felis aliquam ultricies. Praesent ornare, enim eget fermentum malesuada, quam sem feugiat libero, ac tempor diam purus ac eros. Nullam vehicula sollicitudin nunc. Phasellus et bibendum ligula. Nulla tincidunt eros id sapien condimentum laoreet. Phasellus condimentum eu magna ac feugiat. Aenean suscipit velit vitae urna tincidunt, et finibus lorem eleifend. Aliquam tincidunt nisi sed odio suscipit, eget finibus libero commodo. Etiam at velit viverra, consequat nisl id, luctus nulla. Fusce non nisi blandit, pretium felis nec, dignissim enim. Cras ultrices orci purus, in cursus risus semper vel.', '2020-12-23'),
(9, 'gdsgds', 'gdsgds', '2020-11-15'),
(10, 'gdsgsd', 'gdsgsd', '2020-11-15'),
(12, 'Comunicado', 'Comunicado viejardo', '2019-10-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id_Curso` int(3) NOT NULL,
  `Año` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id_Curso`, `Año`) VALUES
(1, '1°Año'),
(2, '2°Año'),
(3, '3°Año'),
(5, '4°Año Informatica'),
(6, '4°Año M.M.O'),
(8, '5°Año Informatica'),
(9, '5°Año M.M.O'),
(11, '6°Año Informatica'),
(12, '6°Año M.M.O'),
(13, '7°Año Informatica'),
(14, '7°Año M.M.O');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id_Materia` int(3) NOT NULL,
  `Descripcion_Materia` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materias`
--

INSERT INTO `materias` (`id_Materia`, `Descripcion_Materia`) VALUES
(1, 'Matematica'),
(2, 'Literatura'),
(3, 'Practicas del Lenguaje'),
(4, 'Ciencias Sociales'),
(5, 'Ciencias Naturales'),
(6, 'Programacion'),
(7, 'Educacion Artistica'),
(8, 'Educacion Fisica'),
(9, 'Ingles'),
(10, 'Construccion Ciudadana'),
(11, 'Procedimientos Tecnicos'),
(12, 'Lenguajes Tecnologicos'),
(13, 'Sistemas Tecnologicos'),
(14, 'Biologia'),
(15, 'Fisico Quimica'),
(16, 'Geografia'),
(17, 'Historia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiasciclosuperior`
--

CREATE TABLE `materiasciclosuperior` (
  `id_Materia` int(3) NOT NULL,
  `Descripcion_Materia` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiasciclosuperior`
--

INSERT INTO `materiasciclosuperior` (`id_Materia`, `Descripcion_Materia`) VALUES
(1, 'Matematica Superior'),
(2, 'Literatura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id_Profesores` int(3) NOT NULL,
  `Nombre` varchar(20) CHARACTER SET latin1 NOT NULL,
  `Apellido` varchar(20) NOT NULL,
  `id_Curso` int(3) NOT NULL,
  `id_Materia` int(3) NOT NULL,
  `id_Usuario` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id_Profesores`, `Nombre`, `Apellido`, `id_Curso`, `id_Materia`, `id_Usuario`) VALUES
(1, 'Pepe', 'Rodriguez', 1, 3, 1),
(2, 'Alberto', 'Garcia', 2, 2, 2),
(5, 'Sergio', 'Robles', 2, 4, 8),
(6, 'Juan', 'Perez', 3, 5, 9),
(7, 'Tito', 'Totales', 6, 1, 7),
(8, 'Valentin', 'Rivera', 5, 6, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_Usuario` int(3) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(100) NOT NULL,
  `id_Cargo` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_Usuario`, `Usuario`, `Contraseña`, `id_Cargo`) VALUES
(1, 'pepe', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(2, 'alberto', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(4, 'gonz', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3),
(5, 'ciro', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3),
(6, 'martin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 3),
(7, 'tito', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(8, 'sergio', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(9, 'juan', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(12, 'valentin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_Administrador`),
  ADD KEY `id_Usuario` (`id_Usuario`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_Cargo`);

--
-- Indices de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  ADD PRIMARY KEY (`id_Comunicado`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_Curso`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id_Materia`);

--
-- Indices de la tabla `materiasciclosuperior`
--
ALTER TABLE `materiasciclosuperior`
  ADD PRIMARY KEY (`id_Materia`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id_Profesores`),
  ADD KEY `id_Curso` (`id_Curso`),
  ADD KEY `id_Materia` (`id_Materia`),
  ADD KEY `id_Usuario` (`id_Usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuario`),
  ADD KEY `id_Cargo` (`id_Cargo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_Administrador` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_Cargo` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `comunicados`
--
ALTER TABLE `comunicados`
  MODIFY `id_Comunicado` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_Curso` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id_Materia` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `materiasciclosuperior`
--
ALTER TABLE `materiasciclosuperior`
  MODIFY `id_Materia` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id_Profesores` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_Usuario` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD CONSTRAINT `administradores_ibfk_1` FOREIGN KEY (`id_Usuario`) REFERENCES `usuarios` (`id_Usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD CONSTRAINT `profesores_ibfk_4` FOREIGN KEY (`id_Materia`) REFERENCES `materias` (`id_Materia`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `profesores_ibfk_5` FOREIGN KEY (`id_Curso`) REFERENCES `cursos` (`id_Curso`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `profesores_ibfk_6` FOREIGN KEY (`id_Usuario`) REFERENCES `usuarios` (`id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`id_Cargo`) REFERENCES `cargo` (`id_Cargo`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
-- Agregar la columna id_Curso a la tabla materias
ALTER TABLE `materias`
ADD COLUMN `id_Curso` INT NOT NULL;

-- Establecer la clave foránea para la columna id_Curso
ALTER TABLE `materias`
ADD CONSTRAINT `fk_materias_cursos` FOREIGN KEY (`id_Curso`) REFERENCES `cursos`(`id_Curso`);