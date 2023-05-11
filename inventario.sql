-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-06-2021 a las 14:55:14
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `codigoCliente` int(10) NOT NULL,
  `nombreCliente` varchar(20) NOT NULL,
  `apellidoCliente` varchar(20) NOT NULL,
  `telefonoCliente` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`codigoCliente`, `nombreCliente`, `apellidoCliente`, `telefonoCliente`) VALUES
(1, 'jhon alexander', 'ariza duarte', 1321541),
(2, 'cesar david', 'bolivar cuchigay', 343433),
(3, 'jhojan sebatian', 'camargo', 1323212),
(4, 'jose ilber', 'cardoso guzman', 64766767),
(5, 'andrik ', 'clavijo', 9876875),
(6, 'javier fernando', 'corredor garcia', 98676),
(7, 'alejandra ', 'diaz torrez', 785675),
(8, 'rafael stiven', 'londoño camacho', 56465464),
(9, 'carol lizeth', 'muñoz muñoz ', 876544),
(10, 'jessica liliana', 'naranjo ballesteros', 56757567),
(11, 'jhon fredy ', 'peñaloza', 47564634),
(12, 'jefferson steve ', 'saavedra ', 67456456),
(13, 'carlos fabian ', 'solano paz', 67456356),
(14, 'jessica carolina ', 'zabala cespedes', 5464453),
(15, 'mathyo', 'bedoya roa', 56376373),
(16, 'adriana geraldine', 'romero sierra', 0),
(17, 'jhon juan', 'benitez duarte', 1321541),
(18, ' david camilo', 'bolivar', 343433),
(19, 'jcarlos sebatian', 'alvarez', 534343),
(20, 'fabian ', 'diaz camargo', 646666),
(21, 'diego', 'mateus', 944444),
(22, 'andrea', 'castañeda', 432332),
(23, 'lina', 'romero bejarano', 4353452),
(24, 'daniela', 'londoño ', 645345),
(25, 'lizeth', 'rodriguez', 87565464),
(26, 'jessica liliana', 'naranjo ballesteros', 56757567),
(27, 'jhon fredy ', 'peñaloza', 47564634),
(28, 'jefferson steve ', 'saavedra ', 67456456),
(29, 'carlos fabian ', 'solano paz', 67456356),
(30, 'jessica carolina ', 'zabala cespedes', 5464453),
(31, 'mathyo', 'bedoya roa', 56376373),
(32, 'adriana geraldine', 'romero sierra', 0),
(33, 'juanito', 'bermunez', 22112111),
(34, 'marco', 'solis', 2147483647),
(35, 'marco antonio', 'solis', 2147483647),
(36, 'fabian david', 'ariza duarte', 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle`
--

CREATE TABLE `detalle` (
  `codigoDetalle` int(10) NOT NULL,
  `itemDetalle` int(10) NOT NULL,
  `cantidadSolicitadaDetalle` int(10) NOT NULL,
  `cantidadRecibidaDetalle` int(10) NOT NULL,
  `valorTotalDetalle` int(10) NOT NULL,
  `descripcionCompraDetalle` varchar(30) NOT NULL,
  `codigoFactura` int(10) NOT NULL,
  `codigoProducto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `detalle`
--

INSERT INTO `detalle` (`codigoDetalle`, `itemDetalle`, `cantidadSolicitadaDetalle`, `cantidadRecibidaDetalle`, `valorTotalDetalle`, `descripcionCompraDetalle`, `codigoFactura`, `codigoProducto`) VALUES
(1, 1, 11, 10, 100000, ' descontando 1 producto  falta', 1, 10),
(2, 8, 21, 20, 55000, 'barritas ', 2, 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disparadorfactura`
--

CREATE TABLE `disparadorfactura` (
  `disparadorFactura` int(10) NOT NULL,
  `codigoFactura` int(10) NOT NULL,
  `fechaFactura` date NOT NULL,
  `numeroFactura` int(10) NOT NULL,
  `totalBienesFactura` int(10) NOT NULL,
  `valorTotalFactura` int(10) NOT NULL,
  `codigoCliente` int(10) NOT NULL,
  `codigoEmpleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disparadorfactura`
--

INSERT INTO `disparadorfactura` (`disparadorFactura`, `codigoFactura`, `fechaFactura`, `numeroFactura`, `totalBienesFactura`, `valorTotalFactura`, `codigoCliente`, `codigoEmpleado`) VALUES
(1, 5, '2021-05-13', 1, 12, 200000, 2147483647, 2147483647);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `codigoEmpleado` int(10) NOT NULL,
  `nombreEmpleado` varchar(20) NOT NULL,
  `apellidoEmpleado` varchar(20) NOT NULL,
  `identificacionEmpleado` int(10) NOT NULL,
  `cargoEmpleado` varchar(20) NOT NULL,
  `telefonoEmpleado` int(10) NOT NULL,
  `correoEmpleado` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`codigoEmpleado`, `nombreEmpleado`, `apellidoEmpleado`, `identificacionEmpleado`, `cargoEmpleado`, `telefonoEmpleado`, `correoEmpleado`) VALUES
(1, 'james', 'rodriguez', 45345345, 'bodeguero', 435345, 'james@gmail.com'),
(2, 'leonel  ', 'diaz', 456456, 'bodeguero', 4535345, 'leo@gmailcom'),
(3, 'katerin', 'suarez', 10245634, 'cajero', 435345, 'katerin@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE `factura` (
  `codigoFactura` int(10) NOT NULL,
  `fechaFactura` date NOT NULL,
  `numeroFactura` int(10) NOT NULL,
  `totalbienesFactura` int(10) NOT NULL,
  `valorTotalFactura` int(10) NOT NULL,
  `codigoCliente` int(10) NOT NULL,
  `codigoEmpleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`codigoFactura`, `fechaFactura`, `numeroFactura`, `totalbienesFactura`, `valorTotalFactura`, `codigoCliente`, `codigoEmpleado`) VALUES
(1, '2021-05-01', 1, 12, 200000, 18, 3),
(2, '2021-05-08', 2, 3, 10000, 6, 1),
(3, '2021-05-13', 1, 12, 200000, 32, 1),
(4, '2021-05-05', 3, 4, 10000, 10, 3),
(5, '2021-05-13', 1, 12, 200000, 1, 1);

--
-- Disparadores `factura`
--
DELIMITER $$
CREATE TRIGGER `ENTRADA` AFTER INSERT ON `factura` FOR EACH ROW INSERT INTO disparadorfactura (
codigoFactura,
fechaFactura,
numeroFactura,
totalbienesFactura,
valorTotalFactura,
codigoCliente,
codigoEmpleado) values (new.codigoFactura,
new.fechaFactura,
new.numeroFactura,
new.totalbienesFactura,
new.valorTotalFactura,now(),now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuevosproductos`
--

CREATE TABLE `nuevosproductos` (
  `precioProducto` int(10) NOT NULL,
  `nombreProducto` varchar(10) NOT NULL,
  `cantidadProducto` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuevosproductos`
--

INSERT INTO `nuevosproductos` (`precioProducto`, `nombreProducto`, `cantidadProducto`) VALUES
(12, '0', 1),
(12, '0', 1),
(12, '0', 1),
(12, 'barrilete', 1),
(12, 'arroz', 20);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `codigoProducto` int(10) NOT NULL,
  `precioProducto` int(10) NOT NULL,
  `nombreProducto` varchar(10) NOT NULL,
  `cantidadProducto` int(10) NOT NULL,
  `ivaProducto` int(10) NOT NULL,
  `descripcionProducto` varchar(20) NOT NULL,
  `ubicacionProducto` varchar(15) NOT NULL,
  `fechaEntradaProducto` date NOT NULL,
  `codigoProveedor` int(10) NOT NULL,
  `codigoEmpleado` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`codigoProducto`, `precioProducto`, `nombreProducto`, `cantidadProducto`, `ivaProducto`, `descripcionProducto`, `ubicacionProducto`, `fechaEntradaProducto`, `codigoProveedor`, `codigoEmpleado`) VALUES
(1, 1500, 'chocorramo', 1, 0, '1 unidad', 'estante 1', '2021-05-01', 6, 1),
(2, 1000, 'gansito', 1, 1, '1 unidad', 'estante 4', '2021-05-19', 6, 1),
(3, 1000, 'maizitos', 10, 1, '10 unidades', 'estante 4', '2021-05-20', 6, 1),
(4, 1500, 'gala', 10, 1, '10 unidades', 'estante 7', '2021-05-25', 6, 1),
(5, 1000, 'tostacos', 20, 1, '20 unidades picantes', 'estante 4 ,3aba', '2021-05-17', 6, 1),
(6, 1000, 'barritas', 20, 1, '20 barritas', 'estante 4, abaj', '2021-05-18', 6, 1),
(7, 1500, 'chocorramo', 1, 0, '1 unidad', 'estante 1', '2021-05-01', 6, 1),
(8, 1000, 'gansito', 1, 1, '1 unidad', 'estante 4', '2021-05-19', 6, 1),
(9, 1000, 'maizitos', 10, 1, '10 unidades', 'estante 4', '2021-05-20', 6, 1),
(10, 1500, 'gala', 10, 1, '10 unidades', 'estante 7', '2021-05-25', 6, 1),
(11, 1000, 'tostacos', 20, 1, '20 unidades picantes', 'estante 4 ,3aba', '2021-05-17', 6, 1),
(12, 1000, 'barritas', 20, 1, '20 barritas', 'estante 4, abaj', '2021-05-18', 6, 1),
(16, 12, 'arroz', 1, 19, 'kilos', 'et', '2021-05-06', 1, 1),
(18, 12, 'carne', 1, 19, 'kilos', 'et', '2021-05-06', 5, 1),
(20, 12, 'barrilete', 1, 19, 'kilos', 'et', '2021-05-06', 10, 1);

--
-- Disparadores `productos`
--
DELIMITER $$
CREATE TRIGGER `NUEVOSCREAR_I` AFTER INSERT ON `productos` FOR EACH ROW INSERT  INTO nuevosproductos(
nombreProducto,
precioProducto,
cantidadProducto
) VALUES (
new.nombreProducto,
new.precioProducto,
new.cantidadProducto
)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `codigoProveedor` int(10) NOT NULL,
  `nombreProveedor` varchar(20) NOT NULL,
  `identificacionProveedor` int(10) NOT NULL,
  `telefonoProveedor` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`codigoProveedor`, `nombreProveedor`, `identificacionProveedor`, `telefonoProveedor`) VALUES
(1, 'diana', 12313212, 54634653),
(2, 'incauca', 53453453, 5435),
(3, 'margarita', 324324, 56235654),
(4, 'postobon', 4535345, 543534),
(5, 'babaria', 43535345, 543534),
(6, 'ramo', 4353452, 545345),
(7, 'superricas', 6456, 6456456),
(8, 'cocacola', 234423, 4564545),
(9, 'quala', 3432423, 5464564),
(10, 'bimbo', 54654, 456546);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`codigoCliente`);

--
-- Indices de la tabla `detalle`
--
ALTER TABLE `detalle`
  ADD PRIMARY KEY (`codigoDetalle`),
  ADD KEY `codigoFactura` (`codigoFactura`),
  ADD KEY `codigoProducto` (`codigoProducto`);

--
-- Indices de la tabla `disparadorfactura`
--
ALTER TABLE `disparadorfactura`
  ADD PRIMARY KEY (`disparadorFactura`),
  ADD KEY `codigoCliente` (`codigoCliente`),
  ADD KEY `codigoEmpleado` (`codigoEmpleado`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`codigoEmpleado`);

--
-- Indices de la tabla `factura`
--
ALTER TABLE `factura`
  ADD PRIMARY KEY (`codigoFactura`),
  ADD KEY `codigoCliente` (`codigoCliente`),
  ADD KEY `codigoEmpleado` (`codigoEmpleado`);

--
-- Indices de la tabla `nuevosproductos`
--
ALTER TABLE `nuevosproductos`
  ADD KEY `cantidadProductos` (`cantidadProducto`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`codigoProducto`),
  ADD KEY `codigoProveedor` (`codigoProveedor`),
  ADD KEY `codigoEmpleado` (`codigoEmpleado`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`codigoProveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `codigoCliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `detalle`
--
ALTER TABLE `detalle`
  MODIFY `codigoDetalle` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `disparadorfactura`
--
ALTER TABLE `disparadorfactura`
  MODIFY `disparadorFactura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `codigoEmpleado` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `factura`
--
ALTER TABLE `factura`
  MODIFY `codigoFactura` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `codigoProducto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `codigoProveedor` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`codigoProveedor`) REFERENCES `proveedor` (`codigoProveedor`),
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`codigoEmpleado`) REFERENCES `empleado` (`codigoEmpleado`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
