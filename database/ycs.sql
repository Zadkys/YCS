-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-06-2024 a las 01:14:09
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ycs`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora`
--

CREATE TABLE `bitacora` (
  `idBitacora` int(11) NOT NULL,
  `accion` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `executedSQL` varchar(2000) DEFAULT NULL,
  `reverseSQL` varchar(2000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bitacora`
--

INSERT INTO `bitacora` (`idBitacora`, `accion`, `user`, `fecha`, `executedSQL`, `reverseSQL`) VALUES
(1, 'update', 'root@localhost', '2024-06-19 11:27:17', 'INSERT INTO macetas (sku, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (159, \"Estandar\", \"fgakj\", \"hsdfgkjdg\", 15, 213, \"risk.png\");', 'INSERT INTO macetas (sku, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (159, \"Estandar\", \"fgakj\", \"hsdfgkjdg\", 560, 213, \"risk.png\");'),
(2, 'delete', 'root@localhost', '2024-06-19 16:38:11', 'DELETE FROM macetas WHERE sku = 159;', 'INSERT INTO macetas (sku, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (159, \"Estandar\", \"fgakj\", \"hsdfgkjdg\", 15, 213, \"risk.png\");'),
(3, 'update', 'root@localhost', '2024-06-29 14:25:14', 'INSERT INTO macetas (sku, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (123, \"Deluxe\", \"prueba\", \"10cm de ancho x 5cm de alto\", 30.4, 4, \"https://i.pinimg.com/originals/7a/dc/27/7adc27298c3bab7dd50ff1ec10234a47.jpg\");', 'INSERT INTO macetas (sku, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (123, \"Deluxe\", \"prueba\", \"10cm de ancho x 5cm de alto\", 30.4, 4, \"noelle.webp\");'),
(4, 'update', 'root@localhost', '2024-06-29 14:32:20', 'INSERT INTO macetas (sku, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (123, \"Deluxe\", \"prueba\", \"10cm de ancho x 5cm de alto\", 30.4, 4, \"noelle.webp\");', 'INSERT INTO macetas (sku, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (123, \"Deluxe\", \"prueba\", \"10cm de ancho x 5cm de alto\", 30.4, 4, \"https://i.pinimg.com/originals/7a/dc/27/7adc27298c3bab7dd50ff1ec10234a47.jpg\");'),
(5, 'insert', 'root@localhost', '2024-06-29 15:06:06', 'INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (444, \"Zapatos\", \"nike\", \"Estan chidos\", 99, 55, \"https://i.pinimg.com/originals/7a/dc/27/7adc27298c3bab7dd50ff1ec10234a47.jpg\");', 'DELETE FROM productos WHERE idProducto = 444;'),
(6, 'insert', 'root@localhost', '2024-06-29 15:24:42', 'INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (111, \"Collares\", \"Collar Tribu\", \"se ajusta a cular cuello\", 500, 100, \"https://img.kwcdn.com/product/fancy/e4567aea-dfb9-4707-be4b-e1844c5aaab0.jpg?imageView2/2/w/650/q/50/format/webp\");', 'DELETE FROM productos WHERE idProducto = 111;'),
(7, 'delete', 'root@localhost', '2024-06-29 15:24:47', 'DELETE FROM productos WHERE idProducto = 123;', 'INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (123, \"Deluxe\", \"prueba\", \"10cm de ancho x 5cm de alto\", 30.4, 4, \"noelle.webp\");'),
(8, 'delete', 'root@localhost', '2024-06-29 15:24:49', 'DELETE FROM productos WHERE idProducto = 1154;', 'INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (1154, \"Deluxe\", \"Cyrus\", \"15cm de ancho x 30cm de alto\", 60, 8, \"cyrus.webp\");'),
(9, 'delete', 'root@localhost', '2024-06-29 15:24:50', 'DELETE FROM productos WHERE idProducto = 43132;', 'INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (43132, \"Estándar\", \"Risk\", \"15cm de ancho x 15cm de alto\", 50.4, 15, \"risk.png\");');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellido`, `correo`, `contra`, `img`) VALUES
(1, 'Jesus', 'Rostro', 'jesusrostrocontacto@gmail.com', 'HD82d@xd', 'noelle.webp'),
(2, 'Estefania', 'Salazar', 'gamago.net@gmail.com', '8057', ''),
(5, 'dgksfd', 'skahgadfgl', 'dgfdfl@gsdsjkf.com', '15461fhjf', ''),
(6, 'dfhdhhghfghg', 'jgkhlwery57493hwe', 'correo@gmail.com', 'contraseña123', ''),
(7, 'fjhfhafh', 'djkas', 'fkfjah@fhdklf.com', '225516', ''),
(9, 'brenda', 'dfalhfal', 'cliente@gmail.com', '1352', ''),
(10, 'Rosa', 'Santana', 'rsantana@ceti.mx', '1234', ''),
(11, 'diego', 'muñoz', 'diego@hotmail.com', '555', ''),
(13, '1', '1', '1@gmail.com', '1', ''),
(14, 'Zadkiel', 'Sandoval', 'zadkielsando@gmail.com', '12345', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(50) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `modelo` varchar(255) NOT NULL,
  `caracteristicas` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `unidades` int(50) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `categoria`, `modelo`, `caracteristicas`, `precio`, `unidades`, `imagen`) VALUES
(111, 'Collares', 'Collar Tribu', 'se ajusta a cular cuello', 500, 100, 'https://img.kwcdn.com/product/fancy/e4567aea-dfb9-4707-be4b-e1844c5aaab0.jpg?imageView2/2/w/650/q/50/format/webp'),
(444, 'Zapatos', 'nike', 'Estan chidos', 99, 55, 'https://i.pinimg.com/originals/7a/dc/27/7adc27298c3bab7dd50ff1ec10234a47.jpg');

--
-- Disparadores `productos`
--
DELIMITER $$
CREATE TRIGGER `after_delete_productos` AFTER DELETE ON `productos` FOR EACH ROW BEGIN
				insert into bitacora ( fecha, accion, user, executedSQL, reverseSQL )
				values(
					now(),
					"delete",
					CURRENT_USER(),
					CONCAT("DELETE FROM productos WHERE idProducto = ",OLD.idProducto,";"),
					CONCAT("INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (",OLD.idProducto,", """,OLD.categoria,""", """,OLD.modelo,""", """,OLD.caracteristicas,""", ",OLD.precio,", ",OLD.unidades,", """,OLD.imagen,""");")
				);
			END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_insert_productos` AFTER INSERT ON `productos` FOR EACH ROW BEGIN
				insert into `bitacora` ( fecha, accion, user, executedSQL, reverseSQL )
				values(
					now(),
					"insert",
					CURRENT_USER(),
					CONCAT("INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (",NEW.idProducto,", """,NEW.categoria,""", """,NEW.modelo,""", """,NEW.caracteristicas,""", ",NEW.precio,", ",NEW.unidades,", """,NEW.imagen,""");"),
					CONCAT("DELETE FROM productos WHERE idProducto = ",NEW.idProducto,";")
				);
			END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_update_productos` AFTER UPDATE ON `productos` FOR EACH ROW BEGIN
				insert into bitacora ( fecha, accion, user, executedSQL, reverseSQL )
				values(
					now(),
					"update",
					CURRENT_USER(),
					CONCAT("INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (",NEW.idProducto,", """,NEW.categoria,""", """,NEW.modelo,""", """,NEW.caracteristicas,""", ",NEW.precio,", ",NEW.unidades,", """,NEW.imagen,""");"),
					CONCAT("INSERT INTO productos (idProducto, categoria, modelo, caracteristicas, precio, unidades, imagen) VALUES (",OLD.idProducto,", """,OLD.categoria,""", """,OLD.modelo,""", """,OLD.caracteristicas,""", ",OLD.precio,", ",OLD.unidades,", """,OLD.imagen,""");")
				);
			END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `id_owner` int(50) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `contra` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`id_owner`, `nombre`, `apellido`, `correo`, `contra`, `img`) VALUES
(1, 'Zadkiel', 'sandoval velazquez', 'zadkysan@gmail.com', 'admin', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  ADD PRIMARY KEY (`idBitacora`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`id_owner`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bitacora`
--
ALTER TABLE `bitacora`
  MODIFY `idBitacora` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  MODIFY `id_owner` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
