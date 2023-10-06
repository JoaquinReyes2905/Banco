-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2023 a las 15:22:07
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `banconacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `id_cargo` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `descripcion` text NOT NULL,
  `cant_emple` int(11) NOT NULL,
  `nivel_jerarquico` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`id_cargo`, `nombre`, `descripcion`, `cant_emple`, `nivel_jerarquico`) VALUES
(1, 'conserje', 'servicio de limpieza', 0, 1),
(2, 'seguridad', 'servicio de seguridad', 0, 1),
(3, 'cajero', 'servicio de atencion', 0, 1),
(4, 'oficial atencion al cliente', 'servicio de atencion', 0, 1),
(5, 'especialista en banca en linea', 'servicio de administracion', 0, 2),
(6, 'ejecutivo de cuentas', 'servicio de administracion', 0, 2),
(7, 'analista financiero', 'servicio de administracion', 0, 2),
(8, 'gerente de sucursal', 'servicio de administracion', 0, 3),
(9, 'gerente de productos financieros', 'servicio de administracion', 0, 3),
(10, 'gerente de relaciones corporativas', 'servicio de administracion', 0, 3),
(11, 'gerente de riesgos', 'servicio de administracion', 0, 3),
(12, 'director/a de banca minorista', 'servicio de administracion', 0, 4),
(13, 'director/a de operaciones', 'servicio de administracion', 0, 4),
(14, 'director/a de finanzas', 'servicio de administracion', 0, 4),
(15, 'director/a de tecnologia de la informacion', 'servicio de administracion', 0, 4),
(16, 'director/a ejecutivo/a', 'servicio de administracion', 0, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `nombre_completo` varchar(50) NOT NULL,
  `fech_nacimiento` date NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `afiliado` char(10) NOT NULL,
  `num_cuenta_bancaria` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `saldo` float NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date NOT NULL,
  `limite_credito` int(11) NOT NULL,
  `deudas` char(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `dni`, `genero`, `nombre_completo`, `fech_nacimiento`, `provincia`, `localidad`, `afiliado`, `num_cuenta_bancaria`, `direccion`, `correo`, `telefono`, `saldo`, `fecha_alta`, `fecha_baja`, `limite_credito`, `deudas`) VALUES
(1, 629094813, 'M', 'Joaquin Torres Reyes', '2005-12-29', 'Chubut', 'Puerto Madryn', 'False', 225343227, 'Av. Riestra 321', 'joaquin@gmail.com', 1128479275, 100000, '2015-09-01', '0000-00-00', 100000, '30000'),
(2, 571381042, 'F', 'Evelyn Reyes Ludmila', '2004-10-11', 'Rio Negro', 'Bariloche', 'True', 204846263, 'Av. Avellaneda 213', 'evelyn@gmail.com', 1156472943, 150000, '2014-01-01', '0000-00-00', 40000, ''),
(3, 837402432, 'M', 'Lionel Messi Cuccitini', '2006-04-10', 'Tierra del Fuego', 'Ushuaia', 'False', 182458553, 'Catulo Castillo 231', 'messi@gmail.com', 1134554296, 0, '2020-12-01', '2020-12-02', 0, '0'),
(4, 583475892, 'F', 'Mateo Retegui', '2001-11-23', 'Santa Cruz', 'Santa Cruz', 'True', 241343842, 'Esteban de Luca 21', 'mateo@gmail.com', 1102581724, 80000, '2022-01-01', '0000-00-00', 10, '200'),
(5, 438559920, 'M', 'Gianluigi Buffon', '2003-03-24', 'Santa Fe', 'Rosario', 'False', 125911782, 'Alma Fuerte 666', 'buffon@gmail.com', 1174825824, 0, '2010-04-01', '2015-12-12', 0, '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `id_transaccion` int(11) NOT NULL,
  `id_cajero` int(11) NOT NULL,
  `id_banco` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`id_transaccion`, `id_cajero`, `id_banco`, `id_cliente`) VALUES
(1, 1, 1, 1),
(2, 2, 2, 2),
(3, 3, 3, 3),
(4, 4, 4, 4),
(5, 5, 5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_bancarias`
--

CREATE TABLE `cuentas_bancarias` (
  `num_bancarias` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `tipo_cuenta` varchar(50) NOT NULL,
  `saldo` float NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cuentas_bancarias`
--

INSERT INTO `cuentas_bancarias` (`num_bancarias`, `id_cliente`, `tipo_cuenta`, `saldo`, `fecha_alta`, `fecha_baja`) VALUES
(1, 1, 'standard ', 100000, '2015-09-01', '0000-00-00'),
(2, 2, 'standard', 150000, '2014-01-01', '0000-00-00'),
(3, 3, 'standard ', 0, '2020-12-01', '2020-12-02'),
(4, 4, 'standard', 80000, '2022-01-01', '0000-00-00'),
(5, 5, 'standard', 0, '2010-04-01', '2015-12-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleados` int(11) NOT NULL,
  `id_sucursales` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `cargo` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `salario` int(11) NOT NULL,
  `jubilacion` int(11) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `id_supervisor` int(11) NOT NULL,
  `fecha_alta` date NOT NULL,
  `fecha_baja` date NOT NULL,
  `fec_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleados`, `id_sucursales`, `nombre`, `apellido`, `cargo`, `telefono`, `dni`, `correo`, `salario`, `jubilacion`, `direccion`, `id_supervisor`, `fecha_alta`, `fecha_baja`, `fec_nac`) VALUES
(1, 0, '', '', 0, 0, 0, '', 0, 0, '', 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(2, 0, '', '', 0, 0, 0, '', 0, 0, '', 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(3, 0, '', '', 0, 0, 0, '', 0, 0, '', 0, '0000-00-00', '0000-00-00', '0000-00-00'),
(4, 0, '', '', 0, 0, 0, '', 0, 0, '', 0, '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sucursales`
--

CREATE TABLE `sucursales` (
  `id_sucursal` int(11) NOT NULL,
  `id_gerente` int(11) NOT NULL,
  `localidad` varchar(50) NOT NULL,
  `provincia` varchar(50) NOT NULL,
  `cant_clientes` int(11) NOT NULL,
  `cant_empleados` int(11) NOT NULL,
  `telefono` int(11) NOT NULL,
  `caja_fuerte` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sucursales`
--

INSERT INTO `sucursales` (`id_sucursal`, `id_gerente`, `localidad`, `provincia`, `cant_clientes`, `cant_empleados`, `telefono`, `caja_fuerte`) VALUES
(1, 1, 'Puerto Madryn', 'Chubut', 1, 1, 1137582961, 150000000),
(2, 2, 'Ushuaia', 'Tierra del Fuego', 1, 1, 1137128371, 160000000),
(3, 3, 'Rosario', 'Santa Fe', 1, 1, 1178934852, 100000000),
(4, 4, 'Bariloche', 'Rio Negro', 1, 1, 1157348957, 200000000),
(5, 5, 'Santa Cruz', 'Santa Cruz', 1, 1, 1195728723, 150000000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `supervisor`
--

CREATE TABLE `supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `seccion` varchar(50) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `supervisor`
--

INSERT INTO `supervisor` (`id_supervisor`, `id_sucursal`, `seccion`, `nombre`, `apellido`) VALUES
(1, 1, 'Limpieza', 'Ramiro', 'Funes Mori'),
(2, 2, 'Seguridad', 'Eugenio', 'Gimenez'),
(3, 3, 'Administracion', 'Joaquin', 'Matias'),
(4, 4, 'Cajeros', 'Leonel', 'Ramirez'),
(5, 5, 'Atencion al Cliente', 'Jorge', 'Benedetto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarjetas_credito`
--

CREATE TABLE `tarjetas_credito` (
  `id_tarjeta` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `limite_credito` int(11) NOT NULL,
  `saldo` int(11) NOT NULL,
  `fec_vec` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tarjetas_credito`
--

INSERT INTO `tarjetas_credito` (`id_tarjeta`, `id_cliente`, `limite_credito`, `saldo`, `fec_vec`) VALUES
(1, 1, 100000, 100000, '2022-01-01'),
(2, 2, 40000, 150000, '2022-08-02'),
(3, 3, 0, 0, '0000-00-00'),
(4, 4, 10, 80000, '2022-04-04'),
(5, 5, 0, 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transacciones`
--

CREATE TABLE `transacciones` (
  `id_transaccion` int(11) NOT NULL,
  `id_sucursal` int(11) NOT NULL,
  `id_cajero` int(11) NOT NULL,
  `num_cuenta_bancaria` int(11) NOT NULL,
  `tipo_transacciones` varchar(50) NOT NULL,
  `monto` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `comision` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `transacciones`
--

INSERT INTO `transacciones` (`id_transaccion`, `id_sucursal`, `id_cajero`, `num_cuenta_bancaria`, `tipo_transacciones`, `monto`, `fecha`, `comision`) VALUES
(1, 1, 1, 1, 'prestamo', 100000, '2011-10-09 14:12:03', 20),
(2, 2, 2, 2, 'deposito', 200000, '2004-02-12 18:11:03', 35),
(3, 3, 3, 3, 'prestamo', 300000, '2020-02-03 09:12:05', 22),
(4, 4, 4, 4, 'deposito', 400000, '2011-10-09 11:50:10', 69),
(5, 5, 5, 5, 'prestamo', 500000, '2017-01-11 18:04:10', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`id_cargo`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cuentas_bancarias`
--
ALTER TABLE `cuentas_bancarias`
  ADD PRIMARY KEY (`num_bancarias`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleados`);

--
-- Indices de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  ADD PRIMARY KEY (`id_sucursal`);

--
-- Indices de la tabla `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id_supervisor`);

--
-- Indices de la tabla `tarjetas_credito`
--
ALTER TABLE `tarjetas_credito`
  ADD PRIMARY KEY (`id_tarjeta`);

--
-- Indices de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  ADD PRIMARY KEY (`id_transaccion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `id_cargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cuentas_bancarias`
--
ALTER TABLE `cuentas_bancarias`
  MODIFY `num_bancarias` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleados` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `sucursales`
--
ALTER TABLE `sucursales`
  MODIFY `id_sucursal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tarjetas_credito`
--
ALTER TABLE `tarjetas_credito`
  MODIFY `id_tarjeta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `transacciones`
--
ALTER TABLE `transacciones`
  MODIFY `id_transaccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
